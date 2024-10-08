<?php

namespace SymbolSdk\Symbol;

use Exception;
use SymbolSdk\Symbol\Models;

define('NAMESPACE_FLAG', 1 << 63);

class IdGenerator
{
  private const NAMESPACE_FLAG = 0x8000000000000000;

  private static function uint32ToBytes($value) {
    return [
      $value & 0xFF,
      ($value >> 8) & 0xFF,
      ($value >> 16) & 0xFF,
      ($value >> 24) & 0xFF
    ];
  }

  /**
   * ハッシュのバイト配列をBigIntに変換
   * @param string $digest
   * @return int
   */
  private static function digestToBigInt($digest) {
    $result = 0;
    for ($i = 0; $i < 8; ++$i) {
      $result += ord($digest[$i]) << (8 * $i);
    }
    return $result;
  }

  /**
   * モザイクIDを生成
   * @param string $ownerAddressBytes
   * @param int $nonce
   * @return int
   */
  public static function generateMosaicId(Address|Models\UnresolvedAddress|Models\Address $ownerAddress, int $nonce = null) {
    // SHA3-256の初期化
    $hasher = hash_init('sha3-256');

    // nonceをバイト配列に変換し、ハッシュに追加
    $nonce = $nonce ?? self::binaryToUint32(openssl_random_pseudo_bytes(4));
    $nonceBytes = self::uint32ToBytes($nonce);
    hash_update($hasher, pack('C*', ...$nonceBytes));

    // 所有者のアドレスバイトをハッシュに追加
    hash_update($hasher, $ownerAddress->binaryData);

    // ハッシュの計算
    $digest = hash_final($hasher, true);

    // バイト配列からBigIntへの変換
    $result = self::digestToBigInt($digest);
    if ($result & NAMESPACE_FLAG) {
      $result -= NAMESPACE_FLAG;
    }

    return ["nonce" => $nonce, "id" => $result];
  }

  /**
   * Generates a namespace id from a name and an optional parent namespace id.
   * @param string name Namespace name.
   * @param int parentNamespaceId Parent namespace id.
   * @return string Computed namespace id.
   */
  public static function generateNamespaceId(string $name, int $parentNamespaceId = 0): string
  {
    $hasher = hash_init('sha3-256');
    hash_update($hasher, self::uint32ToBinary($parentNamespaceId & 0xFFFFFFFF));
    hash_update($hasher, self::uint32ToBinary(($parentNamespaceId >> 32) & 0xFFFFFFFF));
    hash_update($hasher, $name);
    $digest = hash_final($hasher, true);
    $result = self::digestToBigInt($digest);

    return $result | NAMESPACE_FLAG;
  }

  /**
   * Returns true if a name is a valid namespace name.
   * @param string name Namespace name to check.
   * @return bool true if the specified name is valid.
   */
  public static function isValidNamespaceName(string $name): bool
  {
    $isAlphanum = function ($char) {
      return ctype_alnum($char);
    };

    if (!$name || !$isAlphanum($name[0])) {
      return false;
    }

    for ($i = 0; $i < strlen($name); ++$i) {
      $ch = $name[$i];
      if (!$isAlphanum($ch) && $ch !== '_' && $ch !== '-') {
        return false;
      }
    }

    return true;
  }

  /**
   * Parses a fully qualified namespace name into a path.
   * @param string fullyQualifiedName Fully qualified namespace name.
   * @return array Computed namespace path.
   */
  public static function generateNamespacePath(string $fullyQualifiedName): array
  {
    $path = [];
    $parentNamespaceId = 0;

    foreach (explode('.', $fullyQualifiedName) as $name) {
      if (!self::isValidNamespaceName($name))
        throw new Exception("fully qualified name is invalid due to invalid part name ({$fullyQualifiedName})");

      $path[] = self::generateNamespaceId($name, $parentNamespaceId);
      $parentNamespaceId = end($path);
    }

    return $path;
  }

  /**
   * Generates a mosaic id from a fully qualified mosaic alias name.
   * @param string fullyQualifiedName Fully qualified mosaic name.
   * @return int Computed mosaic id.
   */
  public static function generateMosaicAliasId($fullyQualifiedName): int
  {
    $path = self::generateNamespacePath($fullyQualifiedName);
    return $path[count($path) - 1];
  }

  private static function uint32ToBinary($num)
  {
    return pack('V', $num);
  }

  private static function binaryToUint32($binary)
  {
    $unpacked = unpack('V', $binary);
    return $unpacked[1];
  }
}
