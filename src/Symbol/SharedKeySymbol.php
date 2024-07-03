<?php

namespace SymbolSdk\Symbol;

use SymbolSdk\SharedKey;
use SymbolSdk\CryptoTypes\SharedKey256;
use SymbolSdk\CryptoTypes\PublicKey;

class SharedKeySymbol
{
  /**
   * Derives shared key from key pair and other party's public key.
   * @param KeyPair $keyPair Key pair.
   * @param PublicKey $otherPublicKey Other party's public key.
   * @return SharedKey256 Shared encryption key.
   */
  public static function deriveSharedKey(KeyPair $keyPair, PublicKey $otherPublicKey): SharedKey256
  {
    $deriveSharedKeyImpl = SharedKey::deriveSharedKeyFactory('catapult', 'sha512');
    return call_user_func($deriveSharedKeyImpl, $keyPair->privateKey()->binaryData, $otherPublicKey->binaryData);
  }
}
