<?php

namespace SymbolSdk\Symbol\Models;

use SymbolSdk\Symbol\IdGenerator;
use SymbolSdk\Facade\SymbolFacade;
use function SymbolSdk\Symbol\generateMosaicId;

require_once __DIR__ . '/../../../src/symbol/models.php';
require_once __DIR__ . '/../../../src/facade/SymbolFacade.php';
require_once __DIR__ . '/../../../src/symbol/idGenerator.php';

use PHPUnit\Framework\TestCase;

class TransactionTest extends TestCase
{
  private function generateTest($className)
  {
    $nameSpace = 'SymbolSdk\\Symbol\\Models\\';
    $className = $nameSpace . $className;

    if (method_exists($className, 'createTransaction')) {
      $transaction = $className::createTransaction();
      $payload = $className::$payload;
      $this->assertEquals($payload, strtoupper(bin2hex($transaction->serialize())));
      $tx = TransactionFactory::deserialize($transaction->serialize());
      $this->assertEquals($payload, strtoupper(bin2hex($tx->serialize())));
    }
  }
  public function testAccountAddressRestrictionTransactionV1_account_address_restriction_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountAddressRestrictionTransactionV1_account_address_restriction_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountAddressRestrictionTransactionV1_account_address_restriction_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountAddressRestrictionTransactionV1_account_address_restriction_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountKeyLinkTransactionV1_account_key_link_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountKeyLinkTransactionV1_account_key_link_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountKeyLinkTransactionV1_account_key_link_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountKeyLinkTransactionV1_account_key_link_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountMetadataTransactionV1_account_metadata_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountMetadataTransactionV1_account_metadata_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountMetadataTransactionV1_account_metadata_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountMetadataTransactionV1_account_metadata_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountMosaicRestrictionTransactionV1_account_mosaic_restriction_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountMosaicRestrictionTransactionV1_account_mosaic_restriction_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountMosaicRestrictionTransactionV1_account_mosaic_restriction_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountMosaicRestrictionTransactionV1_account_mosaic_restriction_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountOperationRestrictionTransactionV1_account_operation_restriction_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountOperationRestrictionTransactionV1_account_operation_restriction_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountOperationRestrictionTransactionV1_account_operation_restriction_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAccountOperationRestrictionTransactionV1_account_operation_restriction_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAddressAliasTransactionV1_address_alias_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAddressAliasTransactionV1_address_alias_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAddressAliasTransactionV1_address_alias_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAddressAliasTransactionV1_address_alias_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAggregateBondedTransactionV1_aggregate_bonded_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAggregateBondedTransactionV2_aggregate_bonded_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAggregateCompleteTransactionV1_aggregate_complete_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testAggregateCompleteTransactionV2_aggregate_complete_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testHashLockTransactionV1_hash_lock_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testHashLockTransactionV1_hash_lock_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicAddressRestrictionTransactionV1_mosaic_address_restriction_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicAddressRestrictionTransactionV1_mosaic_address_restriction_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicAliasTransactionV1_mosaic_alias_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicAliasTransactionV1_mosaic_alias_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicAliasTransactionV1_mosaic_alias_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicAliasTransactionV1_mosaic_alias_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicDefinitionTransactionV1_mosaic_definition_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicDefinitionTransactionV1_mosaic_definition_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicDefinitionTransactionV1_mosaic_definition_single_3()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicDefinitionTransactionV1_mosaic_definition_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicDefinitionTransactionV1_mosaic_definition_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicDefinitionTransactionV1_mosaic_definition_aggregate_3()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }



  public function testMosaicGlobalRestrictionTransactionV1_mosaic_global_restriction_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicGlobalRestrictionTransactionV1_mosaic_global_restriction_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicGlobalRestrictionTransactionV1_mosaic_global_restriction_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicGlobalRestrictionTransactionV1_mosaic_global_restriction_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicMetadataTransactionV1_mosaic_metadata_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicMetadataTransactionV1_mosaic_metadata_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicMetadataTransactionV1_mosaic_metadata_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicMetadataTransactionV1_mosaic_metadata_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicSupplyChangeTransactionV1_mosaic_supply_change_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicSupplyChangeTransactionV1_mosaic_supply_change_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicSupplyChangeTransactionV1_mosaic_supply_change_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMosaicSupplyChangeTransactionV1_mosaic_supply_change_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMultisigAccountModificationTransactionV1_multisig_account_modification_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testMultisigAccountModificationTransactionV1_multisig_account_modification_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNamespaceMetadataTransactionV1_namespace_metadata_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNamespaceMetadataTransactionV1_namespace_metadata_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNamespaceMetadataTransactionV1_namespace_metadata_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNamespaceMetadataTransactionV1_namespace_metadata_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNamespaceRegistrationTransactionV1_namespace_registration_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNamespaceRegistrationTransactionV1_namespace_registration_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNamespaceRegistrationTransactionV1_namespace_registration_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNamespaceRegistrationTransactionV1_namespace_registration_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNodeKeyLinkTransactionV1_node_key_link_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testNodeKeyLinkTransactionV1_node_key_link_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testSecretLockTransactionV1_secret_lock_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testSecretLockTransactionV1_secret_lock_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testSecretLockTransactionV1_secret_lock_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testSecretLockTransactionV1_secret_lock_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testSecretProofTransactionV1_secret_proof_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testSecretProofTransactionV1_secret_proof_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_single_3()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_single_4()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_single_5()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_single_6()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_single_7()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_aggregate_3()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_aggregate_4()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_aggregate_5()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_aggregate_6()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testTransferTransactionV1_transfer_aggregate_7()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testVotingKeyLinkTransactionV1_voting_key_link_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testVotingKeyLinkTransactionV1_voting_key_link_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testVotingKeyLinkTransactionV1_voting_key_link_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testVotingKeyLinkTransactionV1_voting_key_link_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testVrfKeyLinkTransactionV1_vrf_key_link_single_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testVrfKeyLinkTransactionV1_vrf_key_link_single_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testVrfKeyLinkTransactionV1_vrf_key_link_aggregate_1()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }

  public function testVrfKeyLinkTransactionV1_vrf_key_link_aggregate_2()
  {
    $this->generateTest(str_replace('test', '', __FUNCTION__));
  }
}

class AccountAddressRestrictionTransactionV1_account_address_restriction_single_1
{
  public static $payload = "D0000000000000007695D855CBB6CB83D5BD08E9D76145674F805D741301883387B7101FD8CA84329BB14DBF2F0B4CD58AA84CF31AC6899D134FC38FAB0E7A76F6216ACD60914ACBD294E5E650ACC2A911B548BE2A1806FF4717621BCE3EC1007295219AFFC17B820000000001985041E0FEEEEFFEEEEFFEE0711EE7711EE77101000201000000009841E5B8E40781CF74DABF592817DE48711D778648DEAFB298F409274B52FABBFBCF7E7DF7E20DE1D0C3F657FB8595C1989059321905F681BCF47EA33BBF5E6F8298B5440854FDED";
  public static function createTransaction()
  {
    return new AccountAddressRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      restrictionFlags: new AccountRestrictionFlags(AccountRestrictionFlags::ADDRESS),
      restrictionAdditions: [new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')), new UnresolvedAddress(('TD2ASJ2LKL5LX66PPZ67PYQN4HIMH5SX7OCZLQI'))],
      restrictionDeletions: [new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I'))],
      signerPublicKey: new PublicKey('D294E5E650ACC2A911B548BE2A1806FF4717621BCE3EC1007295219AFFC17B82'),
      signature: new Signature('7695D855CBB6CB83D5BD08E9D76145674F805D741301883387B7101FD8CA84329BB14DBF2F0B4CD58AA84CF31AC6899D134FC38FAB0E7A76F6216ACD60914ACB'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountAddressRestrictionTransactionV1_account_address_restriction_single_2
{
  public static $payload = "A0000000000000004E1E910A55162EA9D5E9B17EA6AB357290E97030969C2FAFC18BCF3D73E08827F0CC9A304088742D170E8B3CE1EC4AAAC813F0F7BB6C6BBAFAEBCAE9C23D43276A4E5B14BEDA025A0F12D76FA4391E96FA26D85BE24B3E8C4A08F336ABA1C6F40000000001985041E0FEEEEFFEEEEFFEE0711EE7711EE77101C0010000000000989059321905F681BCF47EA33BBF5E6F8298B5440854FDED";
  public static function createTransaction()
  {
    return new AccountAddressRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      restrictionFlags: new AccountRestrictionFlags(
        AccountRestrictionFlags::ADDRESS
          + AccountRestrictionFlags::OUTGOING
          + AccountRestrictionFlags::BLOCK
      ),
      restrictionAdditions: [new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I'))],
      restrictionDeletions: null,
      signerPublicKey: new PublicKey('6A4E5B14BEDA025A0F12D76FA4391E96FA26D85BE24B3E8C4A08F336ABA1C6F4'),
      signature: new Signature('4E1E910A55162EA9D5E9B17EA6AB357290E97030969C2FAFC18BCF3D73E08827F0CC9A304088742D170E8B3CE1EC4AAAC813F0F7BB6C6BBAFAEBCAE9C23D4327'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountAddressRestrictionTransactionV1_account_address_restriction_aggregate_1
{
  public static $payload = "28010000000000006A1C14B723E973CC450165EFC629DCAC65F0A9B70517F27BD426BFEB9C21E33C91699BCDF34A0464DBA8D4A7237E4A4309139F2E9378BEC7B67C7EA1F92D5DC683D1CD2DA160075F016CC04B51397186FEF67006364D851DA9EB0CF3E886E3720000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771553D90AFA4B171840BCBA16DB6F82A767C98344D5F6D5F2B0B05A8902D01BD4D800000000000000080000000000000000000000000000000000000000000000000000000000000000000000000000000000000000198504101000201000000009841E5B8E40781CF74DABF592817DE48711D778648DEAFB298F409274B52FABBFBCF7E7DF7E20DE1D0C3F657FB8595C1989059321905F681BCF47EA33BBF5E6F8298B5440854FDED";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountAddressRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          restrictionFlags: new AccountRestrictionFlags(
            AccountRestrictionFlags::ADDRESS
          ),
          restrictionAdditions: [
            new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
            new UnresolvedAddress(('TD2ASJ2LKL5LX66PPZ67PYQN4HIMH5SX7OCZLQI'))
          ],
          restrictionDeletions: [
            new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I'))
          ]
        ),
      ],
      signerPublicKey: new PublicKey(
        '83D1CD2DA160075F016CC04B51397186FEF67006364D851DA9EB0CF3E886E372'
      ),
      signature: new Signature('6A1C14B723E973CC450165EFC629DCAC65F0A9B70517F27BD426BFEB9C21E33C91699BCDF34A0464DBA8D4A7237E4A4309139F2E9378BEC7B67C7EA1F92D5DC6'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('553D90AFA4B171840BCBA16DB6F82A767C98344D5F6D5F2B0B05A8902D01BD4D')
    );
  }
}

class AccountAddressRestrictionTransactionV1_account_address_restriction_aggregate_2
{
  public static $payload = "F800000000000000E9FF7CE62D0925F2AF5C7C8560B01856833B643B24FB7D850C307B9021065A9A58ADCF295D9A48AF2D59344ED8998E80607B3EB21458EE7DC7011B3869E2B4EC1CBF41A4BFD2355911130C4A1CF08AA3A2E4849E5DA5A273545A9D1D1E084AA40000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771FFBAABB2E7655A0D6388DA5736FB9BA45EF6F08DB5D2659F427467FD80D6A341500000000000000050000000000000000000000000000000000000000000000000000000000000000000000000000000000000000198504101C0010000000000989059321905F681BCF47EA33BBF5E6F8298B5440854FDED";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountAddressRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          restrictionFlags: new AccountRestrictionFlags(
            AccountRestrictionFlags::ADDRESS
              + AccountRestrictionFlags::OUTGOING
              + AccountRestrictionFlags::BLOCK
          ),
          restrictionAdditions: [new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I'))],
          restrictionDeletions: []
        ),
      ],
      signerPublicKey: new PublicKey('1CBF41A4BFD2355911130C4A1CF08AA3A2E4849E5DA5A273545A9D1D1E084AA4'),
      signature: new Signature('E9FF7CE62D0925F2AF5C7C8560B01856833B643B24FB7D850C307B9021065A9A58ADCF295D9A48AF2D59344ED8998E80607B3EB21458EE7DC7011B3869E2B4EC'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('FFBAABB2E7655A0D6388DA5736FB9BA45EF6F08DB5D2659F427467FD80D6A341')
    );
  }
}

class AccountKeyLinkTransactionV1_account_key_link_single_1
{
  public static $payload = "A100000000000000F9197D11A025101D4396A3475EEBD790DC62DC63859C4FEA5DA57BE16D7BF3771AB705D063E05356AD3FBFA344425CAAB47B0831AEBB2D65A08C0C014B110C6209DF26A84FD347A711C50CEF23C5094F33E4B52435365EA460A894B7785F24830000000001984C41E0FEEEEFFEEEEFFEE0711EE7711EE771F6503F78FBF99544B906872DDB392F4BE707180D285E7919DBACEF2E9573B1E601";
  public static function createTransaction()
  {
    return new AccountKeyLinkTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      linkedPublicKey: new PublicKey('F6503F78FBF99544B906872DDB392F4BE707180D285E7919DBACEF2E9573B1E6'),
      linkAction: new LinkAction(LinkAction::LINK),
      signerPublicKey: new PublicKey('09DF26A84FD347A711C50CEF23C5094F33E4B52435365EA460A894B7785F2483'),
      signature: new Signature('F9197D11A025101D4396A3475EEBD790DC62DC63859C4FEA5DA57BE16D7BF3771AB705D063E05356AD3FBFA344425CAAB47B0831AEBB2D65A08C0C014B110C62'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountKeyLinkTransactionV1_account_key_link_single_2
{
  public static $payload = "A1000000000000007E87B96BC9C9481B675BF1C0DB8618E4F5AFE5E95EEF7FB37231C252BA76534A1EE392CC2210350F35E7096A43003049ADC71F48556621896014227BC1DDF54F8D8B630E0A3086A427DC187452878840ADA021A6D8CACFCF023B7CD172F1B1AB0000000001984C41E0FEEEEFFEEEEFFEE0711EE7711EE7719801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B600";
  public static function createTransaction()
  {
    return new AccountKeyLinkTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      linkedPublicKey: new PublicKey('9801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6'),
      linkAction: new LinkAction(LinkAction::UNLINK),
      signerPublicKey: new PublicKey('8D8B630E0A3086A427DC187452878840ADA021A6D8CACFCF023B7CD172F1B1AB'),
      signature: new Signature('7E87B96BC9C9481B675BF1C0DB8618E4F5AFE5E95EEF7FB37231C252BA76534A1EE392CC2210350F35E7096A43003049ADC71F48556621896014227BC1DDF54F'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountKeyLinkTransactionV1_account_key_link_aggregate_1
{
  public static $payload = "00010000000000008FF91B4D9027D09053E39059C271A3C633B6B740D0722172FB58838A1DDBE2B472D9537151EA989AF5BF183BD1DE42CC9117F466DAC0A4F3CA5C8424A7D249386C3AD86C294BCC0244EF2F68D47BA6426FF48C42CB5FF1978139E0256142BACC0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7715E870D460A2A239AE83466240C3ED08742134705FB55A85E3536527D4EA072105800000000000000510000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984C41F6503F78FBF99544B906872DDB392F4BE707180D285E7919DBACEF2E9573B1E60100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountKeyLinkTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          linkedPublicKey: new PublicKey('F6503F78FBF99544B906872DDB392F4BE707180D285E7919DBACEF2E9573B1E6'),
          linkAction: new LinkAction(LinkAction::LINK)
        ),
      ],
      signerPublicKey: new PublicKey('6C3AD86C294BCC0244EF2F68D47BA6426FF48C42CB5FF1978139E0256142BACC'),
      signature: new Signature('8FF91B4D9027D09053E39059C271A3C633B6B740D0722172FB58838A1DDBE2B472D9537151EA989AF5BF183BD1DE42CC9117F466DAC0A4F3CA5C8424A7D24938'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('5E870D460A2A239AE83466240C3ED08742134705FB55A85E3536527D4EA07210')
    );
  }
}

class AccountKeyLinkTransactionV1_account_key_link_aggregate_2
{
  public static $payload = "0001000000000000EBB7CEC3AF0608CA6BB21826B2E5AE07BE95E49B20C98B0DB33D2DB36B09174A0D54C98855D68999DFBE81F893B6F5D496F9233730BA56B7FA8BDD7DE2DAA566D571DBBC3B5948FBC7239B34964484AA478046F8BB09B3F3805F853935125E5D0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77106C15A5AFC09E2EB3DE1B42E3B8E9674438C7D60995469ACDBED1D453F5962695800000000000000510000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984C419801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B60000000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountKeyLinkTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          linkedPublicKey: new PublicKey('9801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6'),
          linkAction: new LinkAction(LinkAction::UNLINK)
        ),
      ],
      signerPublicKey: new PublicKey('D571DBBC3B5948FBC7239B34964484AA478046F8BB09B3F3805F853935125E5D'),
      signature: new Signature('EBB7CEC3AF0608CA6BB21826B2E5AE07BE95E49B20C98B0DB33D2DB36B09174A0D54C98855D68999DFBE81F893B6F5D496F9233730BA56B7FA8BDD7DE2DAA566'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('06C15A5AFC09E2EB3DE1B42E3B8E9674438C7D60995469ACDBED1D453F596269')
    );
  }
}

class AccountMetadataTransactionV1_account_metadata_single_1
{
  public static $payload = "AA00000000000000A3204BB3BDBCBFEF5BA954DAB9D6AE784A84B492AA9911B533C381BBB2BBD06A36B4F623A00CA60F7BAF93CCB46441506F469EBBAF4C18352AF548E8315F4B3DFA182D113CBFB48881D3EF7F4CC5BDB29069087E2A7E903093A02D09684A4F940000000001984441E0FEEEEFFEEEEFFEE0711EE7711EE7719841E5B8E40781CF74DABF592817DE48711D778648DEAFB20A000000000000000A000600313233424143";
  public static function createTransaction()
  {
    return new AccountMetadataTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      scopedMetadataKey: 10,
      valueSizeDelta: 10,
      value: hex2bin('313233424143'),
      signerPublicKey: new PublicKey('FA182D113CBFB48881D3EF7F4CC5BDB29069087E2A7E903093A02D09684A4F94'),
      signature: new Signature('A3204BB3BDBCBFEF5BA954DAB9D6AE784A84B492AA9911B533C381BBB2BBD06A36B4F623A00CA60F7BAF93CCB46441506F469EBBAF4C18352AF548E8315F4B3D'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountMetadataTransactionV1_account_metadata_single_2
{
  public static $payload = "AA0000000000000003B8387DAA75186536106B847E4AE26213EADCC166A70EAA20C2AF66646D9243D54413EBFA4BB0B614E0ADCAF2417EA350198A26F3DCDBB8B4DACCECC8B1D418A679C078A6514E8DC0CA28B1A943D8BA9373AC8B14CCA6B07FEA07ABF90529130000000001984441E0FEEEEFFEEEEFFEE0711EE7711EE7719841E5B8E40781CF74DABF592817DE48711D778648DEAFB2EFCAAB0000000000FAFF0600313233424143";
  public static function createTransaction()
  {
    return new AccountMetadataTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      scopedMetadataKey: 11258607,
      valueSizeDelta: -6,
      value: hex2bin('313233424143'),
      signerPublicKey: new PublicKey('A679C078A6514E8DC0CA28B1A943D8BA9373AC8B14CCA6B07FEA07ABF9052913'),
      signature: new Signature('03B8387DAA75186536106B847E4AE26213EADCC166A70EAA20C2AF66646D9243D54413EBFA4BB0B614E0ADCAF2417EA350198A26F3DCDBB8B4DACCECC8B1D418'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountMetadataTransactionV1_account_metadata_aggregate_1
{
  public static $payload = "0801000000000000267C52D9EC00722EFEE5696D994338270A9163F22B3248611FC0E37590BAE07B5FCFB08A075C086962A25D31B42AB283235021C6F8BE3C79EF70AE1B010D956705785D97A5BEB8B77E1F567DA9C2D18048515A01F34E9040EA604C06CF0E6FEC0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77121CD7DF1DCA82BB7DEF6F46B360EDF56376CCE4C8B80D17F22AD39D5321D052C60000000000000005A00000000000000000000000000000000000000000000000000000000000000000000000000000000000000019844419841E5B8E40781CF74DABF592817DE48711D778648DEAFB20A000000000000000A000600313233424143000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountMetadataTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          scopedMetadataKey: 10,
          valueSizeDelta: 10,
          value: hex2bin('313233424143')
        ),
      ],
      signerPublicKey: new PublicKey('05785D97A5BEB8B77E1F567DA9C2D18048515A01F34E9040EA604C06CF0E6FEC'),
      signature: new Signature('267C52D9EC00722EFEE5696D994338270A9163F22B3248611FC0E37590BAE07B5FCFB08A075C086962A25D31B42AB283235021C6F8BE3C79EF70AE1B010D9567'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('21CD7DF1DCA82BB7DEF6F46B360EDF56376CCE4C8B80D17F22AD39D5321D052C')
    );
  }
}

class AccountMetadataTransactionV1_account_metadata_aggregate_2
{
  public static $payload = "0801000000000000A7F24315C43FD5DB5DA323E460CAA1EBE8D138E311ED26035343D24DB792E106251D97A2307CBDDAABD3F05C069C069FE25B0F131D9C53B46F76EF160360A8E88501AD37DE64117F3F9DBCC5751F62FDF60FE3B7BBAD8BF77F94E7F9DAD4438C0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7715AA2E82C4CDE5674CF0EA42BB6128CF177E5135126645C2BE70956F2018A08B460000000000000005A00000000000000000000000000000000000000000000000000000000000000000000000000000000000000019844419841E5B8E40781CF74DABF592817DE48711D778648DEAFB2EFCAAB0000000000FAFF0600313233424143000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountMetadataTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          scopedMetadataKey: 11258607,
          valueSizeDelta: -6,
          value: hex2bin('313233424143')
        ),
      ],
      signerPublicKey: new PublicKey('8501AD37DE64117F3F9DBCC5751F62FDF60FE3B7BBAD8BF77F94E7F9DAD4438C'),
      signature: new Signature('A7F24315C43FD5DB5DA323E460CAA1EBE8D138E311ED26035343D24DB792E106251D97A2307CBDDAABD3F05C069C069FE25B0F131D9C53B46F76EF160360A8E8'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('5AA2E82C4CDE5674CF0EA42BB6128CF177E5135126645C2BE70956F2018A08B4')
    );
  }
}

class AccountMosaicRestrictionTransactionV1_account_mosaic_restriction_single_1
{
  public static $payload = "9800000000000000FD9028F3F1A77147A0A41A0159DC0AD8B13FDA38F7076684F769C1B0BB1CEBED212AA9D6590CE68FB976998D263A2B9C86A744215B35A2EAE02E492E4B788A742636536393B22D8EC6DC9E1E2A3F4266839DB16634821789BDFCD5FD51C43B220000000001985042E0FEEEEFFEEEEFFEE0711EE7711EE7710200010100000000E803000000000000D007000000000000";
  public static function createTransaction()
  {
    return new AccountMosaicRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      restrictionFlags: new AccountRestrictionFlags(
        AccountRestrictionFlags::MOSAIC_ID,
      ),
      restrictionAdditions: [new UnresolvedMosaicId(1000)],
      restrictionDeletions: [new UnresolvedMosaicId(2000)],
      signerPublicKey: new PublicKey('2636536393B22D8EC6DC9E1E2A3F4266839DB16634821789BDFCD5FD51C43B22'),
      signature: new Signature('FD9028F3F1A77147A0A41A0159DC0AD8B13FDA38F7076684F769C1B0BB1CEBED212AA9D6590CE68FB976998D263A2B9C86A744215B35A2EAE02E492E4B788A74'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountMosaicRestrictionTransactionV1_account_mosaic_restriction_single_2
{
  public static $payload = "90000000000000001EB35E0C52602BF150054BDB7B938335A7BB30311C66CEEA869F98CB8808AE214A004AFBEE92B091138C9C7969D08E7B12476C30E182644C3C2A9590BE206F7B109184E25B10CD680042331EFCDE6C5BE55659DDD747F83CAA729CAD575C17F30000000001985042E0FEEEEFFEEEEFFEE0711EE7711EE77102800100000000004CCCD78612DDF5CA";
  public static function createTransaction()
  {
    return new AccountMosaicRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      restrictionFlags: new AccountRestrictionFlags(
        AccountRestrictionFlags::MOSAIC_ID
          + AccountRestrictionFlags::BLOCK
      ),
      restrictionAdditions: [new UnresolvedMosaicId('14624838436596993100')],
      restrictionDeletions: [],
      signerPublicKey: new PublicKey('109184E25B10CD680042331EFCDE6C5BE55659DDD747F83CAA729CAD575C17F3'),
      signature: new Signature('1EB35E0C52602BF150054BDB7B938335A7BB30311C66CEEA869F98CB8808AE214A004AFBEE92B091138C9C7969D08E7B12476C30E182644C3C2A9590BE206F7B'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountMosaicRestrictionTransactionV1_account_mosaic_restriction_aggregate_1
{
  public static $payload = "F000000000000000C1BDC572211630B84D43ADFB11DA5004E42093E92CE96E144BF66E6F2A2CDDFBF5138CA52F32ED23E7D8DECDA8FFC78DFC024552CCC19D605E4F1885C74D369B47AE9AFBF35F72617BEC0A990D5BCFCD3651D5E6E4DF51A29E900595A1AF7D1E0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771C9B816E2B225F39322E72150DADA9F4A8C6F46C2A429F6DF4C89776A4CA8443B48000000000000004800000000000000000000000000000000000000000000000000000000000000000000000000000000000000019850420200010100000000E803000000000000D007000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountMosaicRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          restrictionFlags: new AccountRestrictionFlags(
            AccountRestrictionFlags::MOSAIC_ID
          ),
          restrictionAdditions: [new UnresolvedMosaicId(1000)],
          restrictionDeletions: [new UnresolvedMosaicId(2000)]
        ),
      ],
      signerPublicKey: new PublicKey('47AE9AFBF35F72617BEC0A990D5BCFCD3651D5E6E4DF51A29E900595A1AF7D1E'),
      signature: new Signature('C1BDC572211630B84D43ADFB11DA5004E42093E92CE96E144BF66E6F2A2CDDFBF5138CA52F32ED23E7D8DECDA8FFC78DFC024552CCC19D605E4F1885C74D369B'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('C9B816E2B225F39322E72150DADA9F4A8C6F46C2A429F6DF4C89776A4CA8443B')
    );
  }
}

class AccountMosaicRestrictionTransactionV1_account_mosaic_restriction_aggregate_2
{
  public static $payload = "E800000000000000AFECA8EE9220F05F8EDEC66E27F698E9D3774B40FF1ED1B2501CBDE88690A901F19F8F03006F6C96083B1B0D09CC7D9CBA77E2D6A4A59E67FB7DFE105E9DE1969F088F7A876138C11646E2ECA8ED00FC57AC81F3DC37DEC9991A6959700325ED0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7713B8D31922E345C3F457E73D6DA388FA8F09E0C157AA9E77680A4EBBC3B070562400000000000000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000198504202800100000000004CCCD78612DDF5CA";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountMosaicRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          restrictionFlags: new AccountRestrictionFlags(
            AccountRestrictionFlags::MOSAIC_ID
              + AccountRestrictionFlags::BLOCK
          ),
          restrictionAdditions: [new UnresolvedMosaicId('14624838436596993100')],
          restrictionDeletions: []
        ),
      ],
      signerPublicKey: new PublicKey('9F088F7A876138C11646E2ECA8ED00FC57AC81F3DC37DEC9991A6959700325ED'),
      signature: new Signature('AFECA8EE9220F05F8EDEC66E27F698E9D3774B40FF1ED1B2501CBDE88690A901F19F8F03006F6C96083B1B0D09CC7D9CBA77E2D6A4A59E67FB7DFE105E9DE196'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('3B8D31922E345C3F457E73D6DA388FA8F09E0C157AA9E77680A4EBBC3B070562')
    );
  }
}

class AccountOperationRestrictionTransactionV1_account_operation_restriction_single_1
{
  public static $payload = "8C00000000000000DD7BC1EEFC484BB258024BF0CCEA65E49A83805A63948A60E52F0FD0349C731D1A9F4070FB21C1456FC8C265743BAE84D2D97A9EA3F9A2E4577B5A383C58642D357B615F58B325C42286A51C3E7C797B92135F871D338312D6FCC23BE78FBE130000000001985043E0FEEEEFFEEEEFFEE0711EE7711EE771044001010000000052425441";
  public static function createTransaction()
  {
    return new AccountOperationRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      restrictionFlags: new AccountRestrictionFlags(
        AccountRestrictionFlags::OUTGOING
          + AccountRestrictionFlags::TRANSACTION_TYPE
      ),
      restrictionAdditions: [new TransactionType(TransactionType::SECRET_PROOF)],
      restrictionDeletions: [new TransactionType(TransactionType::TRANSFER)],
      signerPublicKey: new PublicKey('357B615F58B325C42286A51C3E7C797B92135F871D338312D6FCC23BE78FBE13'),
      signature: new Signature('DD7BC1EEFC484BB258024BF0CCEA65E49A83805A63948A60E52F0FD0349C731D1A9F4070FB21C1456FC8C265743BAE84D2D97A9EA3F9A2E4577B5A383C58642D'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountOperationRestrictionTransactionV1_account_operation_restriction_single_2
{
  public static $payload = "8A000000000000003BB0589E7608A5BB4A6FC071A1CBD604DBCC4B34AFC46C97674C1AB287192DB41BF3BD7EB77DC7E68F310D4A62B81CB23511834E6BCB21048F4EA9883284D97E20C98B818D42B45707812D9AEDD8DF76D575EEA2C35480D45F1BC7104D4E25CE0000000001985043E0FEEEEFFEEEEFFEE0711EE7711EE77104C00100000000004E42";
  public static function createTransaction()
  {
    return new AccountOperationRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      restrictionFlags: new AccountRestrictionFlags(
        AccountRestrictionFlags::OUTGOING
          + AccountRestrictionFlags::TRANSACTION_TYPE
          + AccountRestrictionFlags::BLOCK
      ),
      restrictionAdditions: [new TransactionType(TransactionType::ADDRESS_ALIAS)],
      restrictionDeletions: [],
      signerPublicKey: new PublicKey('20C98B818D42B45707812D9AEDD8DF76D575EEA2C35480D45F1BC7104D4E25CE'),
      signature: new Signature('3BB0589E7608A5BB4A6FC071A1CBD604DBCC4B34AFC46C97674C1AB287192DB41BF3BD7EB77DC7E68F310D4A62B81CB23511834E6BCB21048F4EA9883284D97E'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AccountOperationRestrictionTransactionV1_account_operation_restriction_aggregate_1
{
  public static $payload = "E800000000000000645CCB69512162882D705DFB599DADD9AB082AE8BB59A9237C2819BF35F2F18ED5AE27881F79548003277B38BB7A46157EC56DC99F4E178C4DEF8090755139705D500E7BE219C910C07C33560769AD7D1025DA3FB845C646E43D017D201CF8000000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771C257D6202832DE1D7C1632853DA071244EAE31867DD5AEBD2E3A2232B7772D2D40000000000000003C000000000000000000000000000000000000000000000000000000000000000000000000000000000000000198504304400101000000005242544100000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountOperationRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          restrictionFlags: new AccountRestrictionFlags(
            AccountRestrictionFlags::OUTGOING
              + AccountRestrictionFlags::TRANSACTION_TYPE
          ),
          restrictionAdditions: [new TransactionType(TransactionType::SECRET_PROOF)],
          restrictionDeletions: [new TransactionType(TransactionType::TRANSFER)]
        ),
      ],
      signerPublicKey: new PublicKey('5D500E7BE219C910C07C33560769AD7D1025DA3FB845C646E43D017D201CF800'),
      signature: new Signature('645CCB69512162882D705DFB599DADD9AB082AE8BB59A9237C2819BF35F2F18ED5AE27881F79548003277B38BB7A46157EC56DC99F4E178C4DEF809075513970'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('C257D6202832DE1D7C1632853DA071244EAE31867DD5AEBD2E3A2232B7772D2D')
    );
  }
}

class AccountOperationRestrictionTransactionV1_account_operation_restriction_aggregate_2
{
  public static $payload = "E800000000000000635961D27DBF6178FF952D1E98F55A09EAD1248141BC32248B29F1A7D11A6E9CE5BD011746D85D73A977046E85ADAB60547FC0FEA682E0C23286A1385B768D4C896F8F32730913961A94EBB0ED6959434BE790FA8810D86E7FF91774BCB180A50000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77185170A5F6579EC36FC651524D1F953744E635AEF2D890C3DD696C34F683A039140000000000000003A000000000000000000000000000000000000000000000000000000000000000000000000000000000000000198504304C00100000000004E42000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAccountOperationRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          restrictionFlags: new AccountRestrictionFlags(
            AccountRestrictionFlags::OUTGOING
              + AccountRestrictionFlags::TRANSACTION_TYPE
              + AccountRestrictionFlags::BLOCK,
          ),
          restrictionAdditions: [new TransactionType(TransactionType::ADDRESS_ALIAS)],
          restrictionDeletions: []
        ),
      ],
      signerPublicKey: new PublicKey('896F8F32730913961A94EBB0ED6959434BE790FA8810D86E7FF91774BCB180A5'),
      signature: new Signature('635961D27DBF6178FF952D1E98F55A09EAD1248141BC32248B29F1A7D11A6E9CE5BD011746D85D73A977046E85ADAB60547FC0FEA682E0C23286A1385B768D4C'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('85170A5F6579EC36FC651524D1F953744E635AEF2D890C3DD696C34F683A0391')
    );
  }
}

class AddressAliasTransactionV1_address_alias_single_1
{
  public static $payload = "A100000000000000A2B62B8383199C1030E1231E9BDB9FA0DA44646E7ADD17C91F9136438DF16D7C629C9B6F017DD47FC0AD066C05E2E71747C7834D188665FE2B1ACC474A27741BF1C440FF40F3B9E8E768B9B306E2231B0E349FF83F327E1824A1E5AF333EC2DA0000000001984E42E0FEEEEFFEEEEFFEE0711EE7711EE7714BFA5F372D55B3849841E5B8E40781CF74DABF592817DE48711D778648DEAFB201";
  public static function createTransaction()
  {
    return new AddressAliasTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      namespaceId: new NamespaceId('9562080086528621131'),
      address: new Address(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      aliasAction: new AliasAction(AliasAction::LINK),
      signerPublicKey: new PublicKey('F1C440FF40F3B9E8E768B9B306E2231B0E349FF83F327E1824A1E5AF333EC2DA'),
      signature: new Signature('A2B62B8383199C1030E1231E9BDB9FA0DA44646E7ADD17C91F9136438DF16D7C629C9B6F017DD47FC0AD066C05E2E71747C7834D188665FE2B1ACC474A27741B'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AddressAliasTransactionV1_address_alias_single_2
{
  public static $payload = "A100000000000000128FA50612DF89B1A99A9D2624BEC9957408CCBB0149D82B7F3EB9A7EAC05EB964CE554CA36B86C3776F1B8E584AB6431EC2A1B848B7479A5CBB53049B62218661C09C365DE9685B3E93420019F9F4BC853013E1AD95C67E7BBA32DB6C44D1C90000000001984E42E0FEEEEFFEEEEFFEE0711EE7711EE7714BFA5F372D55B3849841E5B8E40781CF74DABF592817DE48711D778648DEAFB200";
  public static function createTransaction()
  {
    return new AddressAliasTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      namespaceId: new NamespaceId('9562080086528621131'),
      address: new Address(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      aliasAction: new AliasAction(AliasAction::UNLINK),
      signerPublicKey: new PublicKey('61C09C365DE9685B3E93420019F9F4BC853013E1AD95C67E7BBA32DB6C44D1C9'),
      signature: new Signature('128FA50612DF89B1A99A9D2624BEC9957408CCBB0149D82B7F3EB9A7EAC05EB964CE554CA36B86C3776F1B8E584AB6431EC2A1B848B7479A5CBB53049B622186'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class AddressAliasTransactionV1_address_alias_aggregate_1
{
  public static $payload = "0001000000000000D746C915B445707307ED4533F414DF25E277820EB3C2305088A8798AB66041DA1224BE51AF9FDA79B7E9025DA21B14E1C81371440AE445EEAB0051564D6BAF76BC3361A2FE27D9DF789C5D126475267E37B4F06CC30356E53C55A5FC9933E1040000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771CC226F4051790D1150EA87A77C6425DCC44CB90BB827C859F57CD2963147788F5800000000000000510000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984E424BFA5F372D55B3849841E5B8E40781CF74DABF592817DE48711D778648DEAFB20100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAddressAliasTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          namespaceId: new NamespaceId('9562080086528621131'),
          address: new Address(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          aliasAction: new AliasAction(AliasAction::LINK)
        ),
      ],
      signerPublicKey: new PublicKey('BC3361A2FE27D9DF789C5D126475267E37B4F06CC30356E53C55A5FC9933E104'),
      signature: new Signature('D746C915B445707307ED4533F414DF25E277820EB3C2305088A8798AB66041DA1224BE51AF9FDA79B7E9025DA21B14E1C81371440AE445EEAB0051564D6BAF76'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('CC226F4051790D1150EA87A77C6425DCC44CB90BB827C859F57CD2963147788F')
    );
  }
}

class AddressAliasTransactionV1_address_alias_aggregate_2
{
  public static $payload = "0001000000000000F507BD152F611E07BA6433C70067B50C274AA00ED6F29C4CEB22A3120FFEC83BAFA482F990A89FBCE533E982F80C83FF7B8EE9156D3723CF8EA8E8A3EDB6267B9EB78F164D02FE97FE29259E2678586A7BC08E402D14C1444A64A97B394D1F480000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7717C624B5B7854988BC31B8B7CBE48B9BD388A6247A45AB5591D4832A2ADB5C17A5800000000000000510000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984E424BFA5F372D55B3849841E5B8E40781CF74DABF592817DE48711D778648DEAFB20000000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedAddressAliasTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          namespaceId: new NamespaceId('9562080086528621131'),
          address: new Address(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          aliasAction: new AliasAction(AliasAction::UNLINK)
        ),
      ],
      signerPublicKey: new PublicKey('9EB78F164D02FE97FE29259E2678586A7BC08E402D14C1444A64A97B394D1F48'),
      signature: new Signature('F507BD152F611E07BA6433C70067B50C274AA00ED6F29C4CEB22A3120FFEC83BAFA482F990A89FBCE533E982F80C83FF7B8EE9156D3723CF8EA8E8A3EDB6267B'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('7C624B5B7854988BC31B8B7CBE48B9BD388A6247A45AB5591D4832A2ADB5C17A')
    );
  }
}

class AggregateBondedTransactionV1_aggregate_bonded_aggregate_1
{
  public static $payload = "2002000000000000B75CCB8D780D5CEF69C8D0B4F60959DD28537B54EED68588B29483D2871A6D78D988D2684EEF974D04BEDA0BFEE310A9EB4210F65F0552FC79EE1BAAA7E3228E0D60B282D0F1A7630D165972F424CDEA90441D5B14497E1333B7F39592532ADC0000000001984142E0FEEEEFFEEEEFFEE0711EE7711EE77161E0F8B9AB2FE3E008DCE1380FECDAF5BCFB1851247BF990771154177A0B7E78A8000000000000006000000000000000000000000000000000000000000000000000000000000000000000000000000000000000019854419841E5B8E40781CF74DABF592817DE48711D778648DEAFB20000010000000000672B0000CE5600006500000000000000410000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D428969746E9B1A70570A000000000000000100000000000000000000000000000067FA12789F80766D329C7F687C5C5F889A82F5E9C3E7996AE4FFE48C34299DE7622C0CA6CC2EC0C48776FC24BF34FB7F4912B3718457A44D41A32DFCD3DBCEDD7D2AA65325ED925E86EDEAE6AB6CA54ED8B4C0DD090ED9DB3860D295DA9820ED0000000000000000549676227A2A84F8A555F69892B49A3BE02A3B2C71E031E2E8968EBAB867C491B3895F21837F76DF15B3A6D97FD7BA1DC625011619A5542194EE4220AE34E50C510D942C2C306BC0637ECFC9D9BEFA907819C6477254FBAD11C7A0DDDC71B913";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(95442763262823),
              amount: new Amount(101)
            ),
          ]
        ),
        new EmbeddedMosaicSupplyChangeTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          mosaicId: new UnresolvedMosaicId(6300565133566699913),
          action: new MosaicSupplyChangeAction(MosaicSupplyChangeAction::INCREASE),
          delta: new Amount(10)
        ),
      ],
      signerPublicKey: new PublicKey('0D60B282D0F1A7630D165972F424CDEA90441D5B14497E1333B7F39592532ADC'),
      signature: new Signature('B75CCB8D780D5CEF69C8D0B4F60959DD28537B54EED68588B29483D2871A6D78D988D2684EEF974D04BEDA0BFEE310A9EB4210F65F0552FC79EE1BAAA7E3228E'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [
        new Cosignature(
          signerPublicKey: new PublicKey('67fa12789f80766d329c7f687c5c5f889a82f5e9c3e7996ae4ffe48c34299de7'),
          signature: new Signature('622c0ca6cc2ec0c48776fc24bf34fb7f4912b3718457a44d41a32dfcd3dbcedd7d2aa65325ed925e86edeae6ab6ca54ed8b4c0dd090ed9db3860d295da9820ed')
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('549676227a2a84f8a555f69892b49a3be02a3b2c71e031e2e8968ebab867c491'),
          signature: new Signature('b3895f21837f76df15b3a6d97fd7ba1dc625011619a5542194ee4220ae34e50c510d942c2c306bc0637ecfc9d9befa907819c6477254fbad11c7a0dddc71b913')
        ),
      ],
      transactionsHash: new Hash256('61E0F8B9AB2FE3E008DCE1380FECDAF5BCFB1851247BF990771154177A0B7E78')
    );
  }
}

class AggregateBondedTransactionV2_aggregate_bonded_aggregate_2
{
  public static $payload = "20020000000000003E080DCE5B32319CA6899808CA664C3961C77A85BB42B192F36394D7B46C79FE4EC2AD6DA50E38836D4ADCDD992C020137F047C1228C351B9533176AB18CE0AFFDDDB26B9750C36F0C0F06914658E6DC86AE0C323ADBB3520D42DD85138616EB0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7713F2BE873F569828C88CD0DE37BB31C998FA0AAEB3308A1FFBF3D01CE49E8E9F7A8000000000000006000000000000000000000000000000000000000000000000000000000000000000000000000000000000000019854419841E5B8E40781CF74DABF592817DE48711D778648DEAFB20000010000000000672B0000CE5600006400000000000000410000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D428869746E9B1A70570A0000000000000001000000000000000000000000000000BD6072E843DF052681FE12FCB825CC873C670BEC51E73F5B460043677D6B1EBB119DB71F2916E710BC2195251D422AF0CB2CB378C2F0F2521907F8102912EA38AD3BED2820F6AEA6656B0D89E5BDA7B2533409864B8A6C961DCA9D173AE399790000000000000000062F6371FD45C2ADB840D85B3E7AFCB22678365733264291705210A1661C6DC8F55D9667E12F30C7CEC0280A51F09F02C26F28E435E1CA1617765FB792C3AAA3350BC8ECD2116B8BDD3FC26E779C2A05DD788F0E59502E92C92DADA6C25C6A90";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(95442763262823),
              amount: new Amount(100)
            ),
          ]
        ),
        new EmbeddedMosaicSupplyChangeTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          mosaicId: new UnresolvedMosaicId(6300565133566699912),
          action: new MosaicSupplyChangeAction(MosaicSupplyChangeAction::INCREASE),
          delta: new Amount(10)
        ),
      ],
      signerPublicKey: new PublicKey('FDDDB26B9750C36F0C0F06914658E6DC86AE0C323ADBB3520D42DD85138616EB'),
      signature: new Signature('3E080DCE5B32319CA6899808CA664C3961C77A85BB42B192F36394D7B46C79FE4EC2AD6DA50E38836D4ADCDD992C020137F047C1228C351B9533176AB18CE0AF'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [
        new Cosignature(
          signerPublicKey: new PublicKey('bd6072e843df052681fe12fcb825cc873c670bec51e73f5b460043677d6b1ebb'),
          signature: new Signature('119db71f2916e710bc2195251d422af0cb2cb378c2f0f2521907f8102912ea38ad3bed2820f6aea6656b0d89e5bda7b2533409864b8a6c961dca9d173ae39979')
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('062f6371fd45c2adb840d85b3e7afcb22678365733264291705210a1661c6dc8'),
          signature: new Signature('f55d9667e12f30c7cec0280a51f09f02c26f28e435e1ca1617765fb792c3aaa3350bc8ecd2116b8bdd3fc26e779c2a05dd788f0e59502e92c92dada6c25c6a90')
        ),
      ],
      transactionsHash: new Hash256('3F2BE873F569828C88CD0DE37BB31C998FA0AAEB3308A1FFBF3D01CE49E8E9F7')
    );
  }
}

class AggregateCompleteTransactionV1_aggregate_complete_v1_aggregate_1
{
  public static $payload = "C002000000000000DFF51A031F1E3EB8DDB71DE5E1E2FD0DE0421BF41686DEDB6F1F5ED1D27B574EC718398181A2949835568EEC49B44F950318398C930CC0BD18317FED3B15ACF340035076D8560AAE3B6EA85CAA497619D0D2EF9BAC77A022A7C6710DAA0401AA0000000001984141E0FEEEEFFEEEEFFEE0711EE7711EE7716655F5FCF2290442DD1B3AEBB649A49249E32EBAF259403183A9A847EA22E0B6E0000000000000005C00000000000000000000000000000000000000000000000000000000000000000000000000000000000000019854419841E5B8E40781CF74DABF592817DE48711D778648DEAFB20C00000000000000476F6F6462796520F09F918B00000000800000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED1000020000000000672B0000CE560000650000000000000029CF5FD941AD25D50100000000000000D600000300504C5445000000FBAF93F70000000000000000E47F08DD7821F438E6218B5F5B28C7A363C141282FFC3E4E8C81D29D63A8A591CB617E68C37942E30A33206BABC1471C779A6E5D29AF1BC65532B97E8FC1EF424FE875B94B720E8C295D302B60AA362456373AFE8F350029E9CF54BB4F0E3BBA00000000000000000A1492EE8CE8E4DCB10E2818D5019D45128A69DDD19BCD687A48A91B3EAD64114866FC05BB9A5BF967275CCEB9DF06445DB8616DA8BD97F6A75FFD35B4DF5B586B75D9E7B2DE6AC143BCA22E0C110120350BB459A43AA1280F3F242D6A7739510000000000000000BF748F068C32E9E4E4B6FBE3E83993B44CF52BF81F447B9040D833257DBF8DB4C00460F5DD8036417BF244AC49F6882092C341A346CF57D0A0466A200476952B97BC244327362FB59659D47957D48ABF88456958A67E8F50D23EF22AB3CA55A6";
  public static function createTransaction()
  {
    return new AggregateCompleteTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          mosaics: [],
          message: "Goodbye 👋"
        ),
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(95442763262823),
              amount: new Amount(101)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(15358872602548358953),
              amount: new Amount(1)
            ),
          ],
          message: hex2bin('D600000300504C5445000000FBAF93F7')
        ),
      ],
      signerPublicKey: new PublicKey('40035076D8560AAE3B6EA85CAA497619D0D2EF9BAC77A022A7C6710DAA0401AA'),
      signature: new Signature('DFF51A031F1E3EB8DDB71DE5E1E2FD0DE0421BF41686DEDB6F1F5ED1D27B574EC718398181A2949835568EEC49B44F950318398C930CC0BD18317FED3B15ACF3'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [
        new Cosignature(
          signerPublicKey: new PublicKey('e47f08dd7821f438e6218b5f5b28c7a363c141282ffc3e4e8c81d29d63a8a591'),
          signature: new Signature("cb617e68c37942e30a33206babc1471c779a6e5d29af1bc65532b97e8fc1ef424fe875b94b720e8c295d302b60aa362456373afe8f350029e9cf54bb4f0e3bba")
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('0a1492ee8ce8e4dcb10e2818d5019d45128a69ddd19bcd687a48a91b3ead6411'),
          signature: new Signature("4866fc05bb9a5bf967275cceb9df06445db8616da8bd97f6a75ffd35b4df5b586b75d9e7b2de6ac143bca22e0c110120350bb459a43aa1280f3f242d6a773951")
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('bf748f068c32e9e4e4b6fbe3e83993b44cf52bf81f447b9040d833257dbf8db4'),
          signature: new Signature("c00460f5dd8036417bf244ac49f6882092c341a346cf57d0a0466a200476952b97bc244327362fb59659d47957d48abf88456958a67e8f50d23ef22ab3ca55a6")
        ),
      ],
      transactionsHash: new Hash256('6655F5FCF2290442DD1B3AEBB649A49249E32EBAF259403183A9A847EA22E0B6')
    );
  }
}

class AggregateCompleteTransactionV2_aggregate_complete_v2_aggregate_1
{
  public static $payload = "C0020000000000003D0EB1ED5F1A6F142392ED9BBA1AC9F519B5B7952F7FB853454F49A9D4F2E8A21F2AA84DAC2DFE81AA561B613E6F8043E97128E31D39CE29D401BA35056685D2F72F531D47A2C5134534DFAFFF99C00E4BDA59280038FD3EBCDF46114FC53CCE0000000002984141E0FEEEEFFEEEEFFEE0711EE7711EE771DCE7DC355A58AEDC834B89C2E3D42DD07DBB8C9167A046856CA56EBE4EEE5AC2E0000000000000005A00000000000000000000000000000000000000000000000000000000000000000000000000000000000000019854419841E5B8E40781CF74DABF592817DE48711D778648DEAFB20A0000000000000048656C6C6F20F09F918B000000000000800000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED1000020000000000672B0000CE560000640000000000000029CF5FD941AD25D50100000000000000D600000300504C5445000000FBAF93F70000000000000000546B242959D50EEF616378554BEF479B62057068A28B694A173A6E0B45778EA327D2A434D1ED5359B7E0028030CD35BA4305C1CC3D8062CC0D66834345B6F6674C6D78F671C9350C0F7E4A862EE2E29DB043C661A041791435E6FC7040C55DCE000000000000000046F8566072BC4629913C11031922CFDF6DBDEF85A5B45701B32A37A82ED05ED4B990451C0AD2E400AD521FA5EBD97BC5A9F0D6F9ED6C4DAE4A8D45A24DC143EA991336F5D495973D4CDC48F3CB731E43AEFC094F73F63B4E51FC5CBD7CB471D20000000000000000D38D270849BE4CE2E1B8CE9E6019AE2734C27FA2EBDDA3D64A4636F72A35AD88EC14521C6F05C41160933DD61FC1AC5DD0D6273C9ED8E3A86E1631EA98047FE7FA84D807A2CDE3A81EB017EE6A40B0108B417002F6C56219B35DE25E57EB47F5";
  public static function createTransaction()
  {
    return new AggregateCompleteTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          mosaics: [],
          message: "Hello 👋"
        ),
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(95442763262823),
              amount: new Amount(100)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(15358872602548358953),
              amount: new Amount(1)
            ),
          ],
          message: hex2bin('D600000300504C5445000000FBAF93F7')
        ),
      ],
      signerPublicKey: new PublicKey('F72F531D47A2C5134534DFAFFF99C00E4BDA59280038FD3EBCDF46114FC53CCE'),
      signature: new Signature('3D0EB1ED5F1A6F142392ED9BBA1AC9F519B5B7952F7FB853454F49A9D4F2E8A21F2AA84DAC2DFE81AA561B613E6F8043E97128E31D39CE29D401BA35056685D2'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [
        new Cosignature(
          signerPublicKey: new PublicKey('546b242959d50eef616378554bef479b62057068a28b694a173a6e0b45778ea3'),
          signature: new Signature("27d2a434d1ed5359b7e0028030cd35ba4305c1cc3d8062cc0d66834345b6f6674c6d78f671c9350c0f7e4a862ee2e29db043c661a041791435e6fc7040c55dce")
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('46f8566072bc4629913c11031922cfdf6dbdef85a5b45701b32a37a82ed05ed4'),
          signature: new Signature("b990451c0ad2e400ad521fa5ebd97bc5a9f0d6f9ed6c4dae4a8d45a24dc143ea991336f5d495973d4cdc48f3cb731e43aefc094f73f63b4e51fc5cbd7cb471d2")
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('d38d270849be4ce2e1b8ce9e6019ae2734c27fa2ebdda3d64a4636f72a35ad88'),
          signature: new Signature("ec14521c6f05c41160933dd61fc1ac5dd0d6273c9ed8e3a86e1631ea98047fe7fa84d807a2cde3a81eb017ee6a40b0108b417002f6c56219b35de25e57eb47f5")
        ),
      ],
      transactionsHash: new Hash256('DCE7DC355A58AEDC834B89C2E3D42DD07DBB8C9167A046856CA56EBE4EEE5AC2')
    );
  }
}

class HashLockTransactionV1_hash_lock_single_1
{
  public static $payload = "B800000000000000DCE85092A4AA448260E9C849FBC5FA51CA92BF90DFD1831FBFBE44D0B7FB4973E243B0D651CD5DC0EE35EC60472C1598C0BF182B344FD80D26938E3DFF5F9491AC09CC13AF31045A0AF5D0427B219E6336D29375A4ACB5365ECDDE434F3E57950000000001984841E0FEEEEFFEEEEFFEE0711EE7711EE77144B262C46CEABB85809698000000000064000000000000008498B38D89C1DC8A448EA5824938FF828926CD9F7747B1844B59B4B6807E878B";
  public static function createTransaction()
  {
    return new HashLockTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      mosaic: new UnresolvedMosaic(
        mosaicId: new UnresolvedMosaicId('9636553580561478212'),
        amount: new Amount(10000000)
      ),
      duration: new BlockDuration(100),
      hash: new Hash256('8498B38D89C1DC8A448EA5824938FF828926CD9F7747B1844B59B4B6807E878B'),
      signerPublicKey: new PublicKey('AC09CC13AF31045A0AF5D0427B219E6336D29375A4ACB5365ECDDE434F3E5795'),
      signature: new Signature('DCE85092A4AA448260E9C849FBC5FA51CA92BF90DFD1831FBFBE44D0B7FB4973E243B0D651CD5DC0EE35EC60472C1598C0BF182B344FD80D26938E3DFF5F9491'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class HashLockTransactionV1_hash_lock_aggregate_1
{
  public static $payload = "100100000000000086FA92B1514E3AE2EAE225EE402C4390B2CF4C481573501B8AC793AFA9DBEA0C4C63E7F9993E62F9F100C435315BD4B0EC5F473CA7BF1A7939454F04B6168C4A0A56922477C082CCB79B3994BCB6639B952167882A129905C81E0262B49450A50000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771F0197674A946DD65165C9E7FFD0CAA15745F2E304BB9DD41ABAF2630112592D8680000000000000068000000000000000000000000000000000000000000000000000000000000000000000000000000000000000198484144B262C46CEABB85809698000000000064000000000000008498B38D89C1DC8A448EA5824938FF828926CD9F7747B1844B59B4B6807E878B";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedHashLockTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          mosaic: new UnresolvedMosaic(
            mosaicId: new UnresolvedMosaicId('9636553580561478212'),
            amount: new Amount(10000000)
          ),
          duration: new BlockDuration(100),
          hash: new Hash256('8498B38D89C1DC8A448EA5824938FF828926CD9F7747B1844B59B4B6807E878B')
        ),
      ],
      signerPublicKey: new PublicKey('0A56922477C082CCB79B3994BCB6639B952167882A129905C81E0262B49450A5'),
      signature: new Signature('86FA92B1514E3AE2EAE225EE402C4390B2CF4C481573501B8AC793AFA9DBEA0C4C63E7F9993E62F9F100C435315BD4B0EC5F473CA7BF1A7939454F04B6168C4A'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('F0197674A946DD65165C9E7FFD0CAA15745F2E304BB9DD41ABAF2630112592D8')
    );
  }
}

class MosaicAddressRestrictionTransactionV1_mosaic_address_restriction_single_1
{
  public static $payload = "B800000000000000D540747095A39055383EA6A199959BE21A43DC6324DFD215EBE2888904D6F5D6F61D259D84456DC6D731DABBCFD26C747E4A80970D56C1741D82FFE9CDB0E54013F9FD5838B8F8AC48E7526D508250E581D7ADA7E304162F334CB03A0D556E040000000001985142E0FEEEEFFEEEEFFEE0711EE7711EE7710100000000000000EFCAAB9078563412090000000000000008000000000000009841E5B8E40781CF74DABF592817DE48711D778648DEAFB2";
  public static function createTransaction()
  {
    return new MosaicAddressRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      mosaicId: new UnresolvedMosaicId(1),
      restrictionKey: 1311768467294898927,
      previousRestrictionValue: 9,
      newRestrictionValue: 8,
      targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      signerPublicKey: new PublicKey('13F9FD5838B8F8AC48E7526D508250E581D7ADA7E304162F334CB03A0D556E04'),
      signature: new Signature('D540747095A39055383EA6A199959BE21A43DC6324DFD215EBE2888904D6F5D6F61D259D84456DC6D731DABBCFD26C747E4A80970D56C1741D82FFE9CDB0E540'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicAddressRestrictionTransactionV1_mosaic_address_restriction_aggregate_1
{
  public static $payload = "1001000000000000422F08BBF26F3589B048C8C2079B18E90555724C99F8AE37FFC14CA5A2B2943C9759DDDD54837C6630A5A138AD96DD5BC478D78F7E677445EEBFC55EFA9E35C8BBAA2C0D6489F346888202F8860674C70858ED2ED33B6CCC4C16865543520CFF0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7717B6ED24A1F78B4BEC3900FBFED34AC0D18ECD29D2EB179BD0C46291107EDDEEF68000000000000006800000000000000000000000000000000000000000000000000000000000000000000000000000000000000019851420100000000000000EFCAAB9078563412090000000000000008000000000000009841E5B8E40781CF74DABF592817DE48711D778648DEAFB2";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicAddressRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          mosaicId: new UnresolvedMosaicId(1),
          restrictionKey: 1311768467294898927,
          previousRestrictionValue: 9,
          newRestrictionValue: 8,
          targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ'))
        ),
      ],
      signerPublicKey: new PublicKey('BBAA2C0D6489F346888202F8860674C70858ED2ED33B6CCC4C16865543520CFF'),
      signature: new Signature('422F08BBF26F3589B048C8C2079B18E90555724C99F8AE37FFC14CA5A2B2943C9759DDDD54837C6630A5A138AD96DD5BC478D78F7E677445EEBFC55EFA9E35C8'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('7B6ED24A1F78B4BEC3900FBFED34AC0D18ECD29D2EB179BD0C46291107EDDEEF')
    );
  }
}

class MosaicAliasTransactionV1_mosaic_alias_single_1
{
  public static $payload = "91000000000000008D5BDBFC1344DA6738E928C2547B8422D34AAB8AA80E77E9657AEC80937DA19D782F837545CFF48DD4880D08C35B7C39119B9F75F3E50DFAB0D917D4D2598BF064C9E56A3D00C0AE070BF06A400BDFEB829B00CCAB9F0ADF1A229A308EC5EB4A0000000001984E43E0FEEEEFFEEEEFFEE0711EE7711EE771A487791451FDF1B60A0000000000000001";
  public static function createTransaction()
  {
    return new MosaicAliasTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      namespaceId: new NamespaceId('13182596108967839652'),
      mosaicId: new MosaicId(10),
      aliasAction: new AliasAction(AliasAction::LINK),
      signerPublicKey: new PublicKey('64C9E56A3D00C0AE070BF06A400BDFEB829B00CCAB9F0ADF1A229A308EC5EB4A'),
      signature: new Signature('8D5BDBFC1344DA6738E928C2547B8422D34AAB8AA80E77E9657AEC80937DA19D782F837545CFF48DD4880D08C35B7C39119B9F75F3E50DFAB0D917D4D2598BF0'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicAliasTransactionV1_mosaic_alias_single_2
{
  public static $payload = "91000000000000006B1750C3D6F272C316EBB3916E177F2DAF2F6837CF43201A631059D02EC0FFCC554C2C64E9AB10F6B154EFE152DAAA04CCA11082DB6E81EA411E7E416A298142DD5CFC65BCEDBF0E91E4DFE20B5E1598106DD30EC59997C6E8028DBAE9910D630000000001984E43E0FEEEEFFEEEEFFEE0711EE7711EE7712AD8FC018D9A49E14CCCD78612DDF5CA00";
  public static function createTransaction()
  {
    return new MosaicAliasTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      namespaceId: new NamespaceId('16233676262248077354'),
      mosaicId: new MosaicId('14624838436596993100'),
      aliasAction: new AliasAction(AliasAction::UNLINK),
      signerPublicKey: new PublicKey('DD5CFC65BCEDBF0E91E4DFE20B5E1598106DD30EC59997C6E8028DBAE9910D63'),
      signature: new Signature('6B1750C3D6F272C316EBB3916E177F2DAF2F6837CF43201A631059D02EC0FFCC554C2C64E9AB10F6B154EFE152DAAA04CCA11082DB6E81EA411E7E416A298142'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicAliasTransactionV1_mosaic_alias_aggregate_1
{
  public static $payload = "F000000000000000F620B8DC54CA880724AAD84C1B4D260D02DE838AA661995ED90FEF2425EC29C948C0BC68D09B09B956CA0A4457ED85B26F246F6C0471D830F74B8A776438BAA8114DDC0523930DC9F7B360CECF4DFDD5A5DF9C2B06709C577EAACCC58118AEA30000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7712FDCAABBB776C8A409B39AB27525383DC06A271643372B03F622F886C08B44B64800000000000000410000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984E43A487791451FDF1B60A000000000000000100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicAliasTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          namespaceId: new NamespaceId('13182596108967839652'),
          mosaicId: new MosaicId(10),
          aliasAction: new AliasAction(AliasAction::LINK)
        ),
      ],
      signerPublicKey: new PublicKey('114DDC0523930DC9F7B360CECF4DFDD5A5DF9C2B06709C577EAACCC58118AEA3'),
      signature: new Signature('F620B8DC54CA880724AAD84C1B4D260D02DE838AA661995ED90FEF2425EC29C948C0BC68D09B09B956CA0A4457ED85B26F246F6C0471D830F74B8A776438BAA8'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('2FDCAABBB776C8A409B39AB27525383DC06A271643372B03F622F886C08B44B6')
    );
  }
}

class MosaicAliasTransactionV1_mosaic_alias_aggregate_2
{
  public static $payload = "F000000000000000072AD7B3441046032836E13A21FF0591FFCFCCB6B80CC99BBA4EA0291B1E13830560B3BD33E1D2368C4CAD9FFC812A7F64A6029774DDA784F25290B54059CF88A2A8877BEA72600C4C83B18067F721CA8C09370ADF3445A289FD6FA69DE0B9990000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77105270A1D4E45A3D4898353D52F890D573445F81914D96DBF5A9A7EA113564E344800000000000000410000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984E432AD8FC018D9A49E14CCCD78612DDF5CA0000000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicAliasTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          namespaceId: new NamespaceId('16233676262248077354'),
          mosaicId: new MosaicId('14624838436596993100'),
          aliasAction: new AliasAction(AliasAction::UNLINK)
        ),
      ],
      signerPublicKey: new PublicKey('A2A8877BEA72600C4C83B18067F721CA8C09370ADF3445A289FD6FA69DE0B999'),
      signature: new Signature('072AD7B3441046032836E13A21FF0591FFCFCCB6B80CC99BBA4EA0291B1E13830560B3BD33E1D2368C4CAD9FFC812A7F64A6029774DDA784F25290B54059CF88'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('05270A1D4E45A3D4898353D52F890D573445F81914D96DBF5A9A7EA113564E34')
    );
  }
}

class MosaicDefinitionTransactionV1_mosaic_definition_single_1
{
  public static $payload = "96000000000000005D3116D285D4ED8883DBBBC8E59FED08A888DAB21C6E4B918434BE2B3AF1105EE1B94EAA9C4BB54428F4A71C711964F00848B9A9E00D8F55670991AADC16119F70F08E77C31D9816C0A63009137A9BADBE5F42431EFBC3994822A25CED9D82820000000001984D41E0FEEEEFFEEEEFFEE0711EE7711EE7719AAEBB6AA74736151027000000000000000000000504";
  public static function createTransaction()
  {
    $facade = new SymbolFacade('testnet');
    return new MosaicDefinitionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      duration: new BlockDuration(10000),
      nonce: new MosaicNonce(0),
      flags: new MosaicFlags(
        MosaicFlags::RESTRICTABLE
          + MosaicFlags::SUPPLY_MUTABLE
      ),
      divisibility: 4,
      signerPublicKey: new PublicKey('70F08E77C31D9816C0A63009137A9BADBE5F42431EFBC3994822A25CED9D8282'),
      signature: new Signature('5D3116D285D4ED8883DBBBC8E59FED08A888DAB21C6E4B918434BE2B3AF1105EE1B94EAA9C4BB54428F4A71C711964F00848B9A9E00D8F55670991AADC16119F'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      id: new MosaicId(IdGenerator::generateMosaicId($facade->network->publicKeyToAddress(hex2bin("70F08E77C31D9816C0A63009137A9BADBE5F42431EFBC3994822A25CED9D8282")), 0))
    );
  }
}

class MosaicDefinitionTransactionV1_mosaic_definition_single_2
{
  public static $payload = "9600000000000000D3B6BEF55F6D99281079B8A138EECE9A4CACC052BC3E84D83D72C3FCF0CFA85DEA390B8FCD50F1A6A6E196DDDED52CB92FC3C216C6B5F06F96E89B23FA62B4BEFA59F3C0267DA5F9A11BBC9714B19402172CD1834F42CC4D2699301437B6BF0D0000000001984D41E0FEEEEFFEEEEFFEE0711EE7711EE7719CBBDB70BCB8CB64E803000000000000E6DE84B80003";
  public static function createTransaction()
  {
    $facade = new SymbolFacade('testnet');
    return new MosaicDefinitionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      duration: new BlockDuration(1000),
      nonce: new MosaicNonce(3095715558),
      flags: new MosaicFlags(
        MosaicFlags::NONE
      ),
      divisibility: 3,
      signerPublicKey: new PublicKey('FA59F3C0267DA5F9A11BBC9714B19402172CD1834F42CC4D2699301437B6BF0D'),
      signature: new Signature(hex2bin('D3B6BEF55F6D99281079B8A138EECE9A4CACC052BC3E84D83D72C3FCF0CFA85DEA390B8FCD50F1A6A6E196DDDED52CB92FC3C216C6B5F06F96E89B23FA62B4BE')),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      id: new MosaicId(IdGenerator::generateMosaicId($facade->network->publicKeyToAddress(hex2bin("FA59F3C0267DA5F9A11BBC9714B19402172CD1834F42CC4D2699301437B6BF0D")), 3095715558))
    );
  }
}

class MosaicDefinitionTransactionV1_mosaic_definition_single_3
{
  public static $payload = "96000000000000003712BC4F3932457AD1A7CC967CC45C3D5F04A52F6B802AEC7D377E504432F1DA40DD1EDAFE9F5899BD04DFBFB1324B198CCEE3344883DEA75DCCE2D1778B65291138798330AB1EDF113867A0A03285FBFC8D433F7F688B41B33D01C7939086D50000000001984D41E0FEEEEFFEEEEFFEE0711EE7711EE771373C73AFF80478750000000000000000E6DE84B80A02";
  public static function createTransaction()
  {
    $facade = new SymbolFacade('testnet');
    return new MosaicDefinitionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      duration: new BlockDuration(0),
      nonce: new MosaicNonce(3095715558),
      flags: new MosaicFlags(
        MosaicFlags::REVOKABLE
          + MosaicFlags::TRANSFERABLE
      ),
      divisibility: 2,
      signerPublicKey: new PublicKey('1138798330AB1EDF113867A0A03285FBFC8D433F7F688B41B33D01C7939086D5'),
      signature: new Signature(hex2bin('3712BC4F3932457AD1A7CC967CC45C3D5F04A52F6B802AEC7D377E504432F1DA40DD1EDAFE9F5899BD04DFBFB1324B198CCEE3344883DEA75DCCE2D1778B6529')),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      id: new MosaicId(IdGenerator::generateMosaicId($facade->network->publicKeyToAddress(hex2bin("1138798330AB1EDF113867A0A03285FBFC8D433F7F688B41B33D01C7939086D5")), 3095715558))
    );
  }
}

class MosaicDefinitionTransactionV1_mosaic_definition_aggregate_1
{
  public static $payload = "F00000000000000032D1342734620E653DE0D6987C77EBD99D8B9818E9BF20BB7E042BF96FD2A288CB16DA71B3D60AB7627DDD5C3BCEA5901DACBDAF42B55184C51D1F19E04C62AD9408A21018F5FA6205D0A5D1A99DC3BF7295D686460569F6FC7BCD9D392F2E9E0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771E22385E28D66F4A783AC56C45640070DB628B0A9192B1F773DED09C41123ADFA4800000000000000460000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D4101CE59EBE6B06F3210270000000000000000000005040000";
  public static function createTransaction()
  {
    $facade = new SymbolFacade('testnet');
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicDefinitionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          duration: new BlockDuration(10000),
          nonce: new MosaicNonce(0),
          flags: new MosaicFlags(
            MosaicFlags::RESTRICTABLE
              + MosaicFlags::SUPPLY_MUTABLE
          ),
          divisibility: 4,
          id: new MosaicId(IdGenerator::generateMosaicId($facade->network->publicKeyToAddress(hex2bin("0000000000000000000000000000000000000000000000000000000000000000")), 0))
        ),
      ],
      signerPublicKey: new PublicKey('9408A21018F5FA6205D0A5D1A99DC3BF7295D686460569F6FC7BCD9D392F2E9E'),
      signature: new Signature(hex2bin('32D1342734620E653DE0D6987C77EBD99D8B9818E9BF20BB7E042BF96FD2A288CB16DA71B3D60AB7627DDD5C3BCEA5901DACBDAF42B55184C51D1F19E04C62AD')),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('E22385E28D66F4A783AC56C45640070DB628B0A9192B1F773DED09C41123ADFA')
    );
  }
}

class MosaicDefinitionTransactionV1_mosaic_definition_aggregate_2
{
  public static $payload = "F00000000000000015C8937E60CE6D6EBFC8CD244B3C617E92E45E5C386C2DC7F05010039DF9B95D65529BD7646A7772390ED95828F65792399C78C53B00F349F142B6FBBC749BF8D962535DE9E97E0CB8E878AA0B68B2D601D20D0BB2A46AE06C086FFED4342DFE0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7719F08B173200F10F08F6FC4C6E1B37DAE1C3B425A98C8D1EB4B3BC44AF6B2906E4800000000000000460000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D41B685550629D42453E803000000000000E6DE84B800030000";
  public static function createTransaction()
  {
    $facade = new SymbolFacade('testnet');
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicDefinitionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          duration: new BlockDuration(1000),
          nonce: new MosaicNonce(3095715558),
          flags: new MosaicFlags(
            MosaicFlags::NONE
          ),
          divisibility: 3,
          id: new MosaicId(IdGenerator::generateMosaicId($facade->network->publicKeyToAddress(hex2bin("0000000000000000000000000000000000000000000000000000000000000000")), 3095715558))
        ),
      ],
      signerPublicKey: new PublicKey('D962535DE9E97E0CB8E878AA0B68B2D601D20D0BB2A46AE06C086FFED4342DFE'),
      signature: new Signature(hex2bin('15C8937E60CE6D6EBFC8CD244B3C617E92E45E5C386C2DC7F05010039DF9B95D65529BD7646A7772390ED95828F65792399C78C53B00F349F142B6FBBC749BF8')),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('9F08B173200F10F08F6FC4C6E1B37DAE1C3B425A98C8D1EB4B3BC44AF6B2906E')
    );
  }
}

class MosaicDefinitionTransactionV1_mosaic_definition_aggregate_3
{
  public static $payload = "F0000000000000004AEF7D973B45E8D60E030DDE3D6EEB6CDA947FA7663A87223B780A6E9F23C28FC78B196EFFF719894B4E09D223D77F2B87D7334C06F47D95762E284326D10ADCC1F2E14CBF743FE0A0FC27482BA97B4734B5F80BED8C6642B075EB421F9E2F810000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771D1C267AFAC897195F41696647A89AC5E0B75A0910D0F2A3DD404F93113C356334800000000000000460000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D41B685550629D424530000000000000000E6DE84B80A020000";
  public static function createTransaction()
  {
    $facade = new SymbolFacade('testnet');
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicDefinitionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          duration: new BlockDuration(0),
          nonce: new MosaicNonce(3095715558),
          flags: new MosaicFlags(
            MosaicFlags::REVOKABLE
              + MosaicFlags::TRANSFERABLE
          ),
          divisibility: 2,
          id: new MosaicId(IdGenerator::generateMosaicId($facade->network->publicKeyToAddress(hex2bin("0000000000000000000000000000000000000000000000000000000000000000")), 3095715558))
        ),
      ],
      signerPublicKey: new PublicKey('C1F2E14CBF743FE0A0FC27482BA97B4734B5F80BED8C6642B075EB421F9E2F81'),
      signature: new Signature(hex2bin('4AEF7D973B45E8D60E030DDE3D6EEB6CDA947FA7663A87223B780A6E9F23C28FC78B196EFFF719894B4E09D223D77F2B87D7334C06F47D95762E284326D10ADC')),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('D1C267AFAC897195F41696647A89AC5E0B75A0910D0F2A3DD404F93113C35633')
    );
  }
}

class MosaicGlobalRestrictionTransactionV1_mosaic_global_restriction_single_1
{
  public static $payload = "AA00000000000000A70ECFC4FAD876EDD481D02AF560DBC319E6AAB21DD33A9095BD45B1A5994844527F5DDBE7C10AE28D960436ACD0D6076D3D9F7ABE9473832F2839FB3370B95A0A72FF40C5C259ACCDFA578E3409242DE4DED94C84C43A11A8D3F9EC8FD773DE0000000001985141E0FEEEEFFEEEEFFEE0711EE7711EE771077C47437698051A268025252B5EF26A0100000000000000090000000000000008000000000000000106";
  public static function createTransaction()
  {
    return new MosaicGlobalRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      mosaicId: new UnresolvedMosaicId(1875072453572000775),
      referenceMosaicId: new UnresolvedMosaicId(7706325451784159270),
      restrictionKey: 1,
      previousRestrictionValue: 9,
      newRestrictionValue: 8,
      previousRestrictionType: new MosaicRestrictionType(MosaicRestrictionType::EQ),
      newRestrictionType: new MosaicRestrictionType(MosaicRestrictionType::GE),
      signerPublicKey: new PublicKey('0A72FF40C5C259ACCDFA578E3409242DE4DED94C84C43A11A8D3F9EC8FD773DE'),
      signature: new Signature('A70ECFC4FAD876EDD481D02AF560DBC319E6AAB21DD33A9095BD45B1A5994844527F5DDBE7C10AE28D960436ACD0D6076D3D9F7ABE9473832F2839FB3370B95A'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicGlobalRestrictionTransactionV1_mosaic_global_restriction_single_2
{
  public static $payload = "AA00000000000000BB9436193DB00910693878E9530966643BAB80AF00C026FD3FD85327422707AD2E5F21B890C22220BC510301F5DC8DE7FAC2445F7022B4B8DEDC5D751E95ADF1AB12A93BCCCDB042E487A653D7E975EA1DA739FA886B8EFF7833C2CA878C96FB0000000001985141E0FEEEEFFEEEEFFEE0711EE7711EE771513FEE4E65C1235600000000000000005C11000000000000000000000000000000000000000000000006";
  public static function createTransaction()
  {
    return new MosaicGlobalRestrictionTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      mosaicId: new UnresolvedMosaicId(6207017352306769745),
      referenceMosaicId: new UnresolvedMosaicId(0),
      restrictionKey: 4444,
      previousRestrictionValue: 0,
      newRestrictionValue: 0,
      previousRestrictionType: new MosaicRestrictionType(MosaicRestrictionType::NONE),
      newRestrictionType: new MosaicRestrictionType(MosaicRestrictionType::GE),
      signerPublicKey: new PublicKey('AB12A93BCCCDB042E487A653D7E975EA1DA739FA886B8EFF7833C2CA878C96FB'),
      signature: new Signature('BB9436193DB00910693878E9530966643BAB80AF00C026FD3FD85327422707AD2E5F21B890C22220BC510301F5DC8DE7FAC2445F7022B4B8DEDC5D751E95ADF1'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicGlobalRestrictionTransactionV1_mosaic_global_restriction_aggregate_1
{
  public static $payload = "08010000000000004FB58CAE68814089A1A4D74CA49B33288E426AC7AB956EA3AE9EBFFA8C3D0C26CDC0CBDE2B597425C53AAC2E27AC6DF11776A5A50C54436364EA0BE9E60BA7465B47A3C1ECE8210626CA7638F00C38DAC6697E3FAC0461D7C9ECDF5BEB4C4D850000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77194049515EBF52723CC7B217DE82D79D5ADFFF719C1934CB50AE91693FADEDC2560000000000000005A0000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985141077C47437698051A268025252B5EF26A0100000000000000090000000000000008000000000000000106000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicGlobalRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          mosaicId: new UnresolvedMosaicId(1875072453572000775),
          referenceMosaicId: new UnresolvedMosaicId(7706325451784159270),
          restrictionKey: 1,
          previousRestrictionValue: 9,
          newRestrictionValue: 8,
          previousRestrictionType: new MosaicRestrictionType(MosaicRestrictionType::EQ),
          newRestrictionType: new MosaicRestrictionType(MosaicRestrictionType::GE)
        ),
      ],
      signerPublicKey: new PublicKey('5B47A3C1ECE8210626CA7638F00C38DAC6697E3FAC0461D7C9ECDF5BEB4C4D85'),
      signature: new Signature('4FB58CAE68814089A1A4D74CA49B33288E426AC7AB956EA3AE9EBFFA8C3D0C26CDC0CBDE2B597425C53AAC2E27AC6DF11776A5A50C54436364EA0BE9E60BA746'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('94049515EBF52723CC7B217DE82D79D5ADFFF719C1934CB50AE91693FADEDC25')
    );
  }
}

class MosaicGlobalRestrictionTransactionV1_mosaic_global_restriction_aggregate_2
{
  public static $payload = "0801000000000000AA268835334E38F0FF478710AE0E474399CDF49653E9924F8627F0BB09B59DC47C3231D8EA38F188E61407857BC2F918657E849939FBFC4FE6FD377DB558177326646FC63C7D7EA9EAA0B678CA7BDB1ECD77C7D210ACD997A8713BAB88D6A8C10000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7718D93F6BF096B6D02432E54A73A39F70937971A10926195552EFC67396C9F33AB60000000000000005A0000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985141513FEE4E65C1235600000000000000005C11000000000000000000000000000000000000000000000006000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicGlobalRestrictionTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          mosaicId: new UnresolvedMosaicId(6207017352306769745),
          referenceMosaicId: new UnresolvedMosaicId(0),
          restrictionKey: 4444,
          previousRestrictionValue: 0,
          newRestrictionValue: 0,
          previousRestrictionType: new MosaicRestrictionType(MosaicRestrictionType::NONE),
          newRestrictionType: new MosaicRestrictionType(MosaicRestrictionType::GE)
        ),
      ],
      signerPublicKey: new PublicKey('26646FC63C7D7EA9EAA0B678CA7BDB1ECD77C7D210ACD997A8713BAB88D6A8C1'),
      signature: new Signature('AA268835334E38F0FF478710AE0E474399CDF49653E9924F8627F0BB09B59DC47C3231D8EA38F188E61407857BC2F918657E849939FBFC4FE6FD377DB5581773'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('8D93F6BF096B6D02432E54A73A39F70937971A10926195552EFC67396C9F33AB')
    );
  }
}

class MosaicMetadataTransactionV1_mosaic_metadata_single_1
{
  public static $payload = "B20000000000000021F6DF84B68468A19A0E204EFC45A826C02991737D0C3334F42CB64928D9537886359B83316B16060A859A5A2C1819CBC36FF520DF5F17D1529240F256CEA94CD7E3F96B4A418E8E2FDF8A45B7C34B3A354ECC07C0175763727C1FBA0B1736AC0000000001984442E0FEEEEFFEEEEFFEE0711EE7711EE7719841E5B8E40781CF74DABF592817DE48711D778648DEAFB20A00000000000000E8030000000000000A000600313233414243";
  public static function createTransaction()
  {
    return new MosaicMetadataTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      scopedMetadataKey: 10,
      targetMosaicId: new UnresolvedMosaicId(1000),
      valueSizeDelta: 10,
      value: hex2bin('313233414243'),
      signerPublicKey: new PublicKey('D7E3F96B4A418E8E2FDF8A45B7C34B3A354ECC07C0175763727C1FBA0B1736AC'),
      signature: new Signature('21F6DF84B68468A19A0E204EFC45A826C02991737D0C3334F42CB64928D9537886359B83316B16060A859A5A2C1819CBC36FF520DF5F17D1529240F256CEA94C'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicMetadataTransactionV1_mosaic_metadata_single_2
{
  public static $payload = "B200000000000000EE4682A5FBE4BA1C8F8131DF3C0DF7BE4E8BAF0E3A2B2D288101F2C5261932F03E02FDC4207B5FD7E44A4771E6D3895388213C48789982B42AF05CDEB7F88E26A7FB98F0A1BE958F2D70BC8609A3539DCBD702978FC872C2D388A634FBEA074C0000000001984442E0FEEEEFFEEEEFFEE0711EE7711EE7719841E5B8E40781CF74DABF592817DE48711D778648DEAFB20A00000000000000E803000000000000FBFF0600313233414243";
  public static function createTransaction()
  {
    return new MosaicMetadataTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      scopedMetadataKey: 10,
      targetMosaicId: new UnresolvedMosaicId(1000),
      valueSizeDelta: -5,
      value: hex2bin('313233414243'),
      signerPublicKey: new PublicKey('A7FB98F0A1BE958F2D70BC8609A3539DCBD702978FC872C2D388A634FBEA074C'),
      signature: new Signature('EE4682A5FBE4BA1C8F8131DF3C0DF7BE4E8BAF0E3A2B2D288101F2C5261932F03E02FDC4207B5FD7E44A4771E6D3895388213C48789982B42AF05CDEB7F88E26'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicMetadataTransactionV1_mosaic_metadata_aggregate_1
{
  public static $payload = "10010000000000008EA0617C41D6BD51E768BCFA2A63F380E909BC8291F8BA1F4855D0C52EDFAA07EFD4DA8E20D3506CEBF72B8509B420447254300ABE817242B7D6D0D7C2B532211D00C6B79C08776387DBFAB93D0DEBB09D6F2E1BE8E08BD206A35594CD1531720000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771E2553E2E3FC4A959406B0F1AF9ADB9FC67D558615D523FD24119A7915FD0046868000000000000006200000000000000000000000000000000000000000000000000000000000000000000000000000000000000019844429841E5B8E40781CF74DABF592817DE48711D778648DEAFB20A00000000000000E8030000000000000A000600313233414243000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicMetadataTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          scopedMetadataKey: 10,
          targetMosaicId: new UnresolvedMosaicId(1000),
          valueSizeDelta: 10,
          value: hex2bin('313233414243')
        ),
      ],
      signerPublicKey: new PublicKey('1D00C6B79C08776387DBFAB93D0DEBB09D6F2E1BE8E08BD206A35594CD153172'),
      signature: new Signature('8EA0617C41D6BD51E768BCFA2A63F380E909BC8291F8BA1F4855D0C52EDFAA07EFD4DA8E20D3506CEBF72B8509B420447254300ABE817242B7D6D0D7C2B53221'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('E2553E2E3FC4A959406B0F1AF9ADB9FC67D558615D523FD24119A7915FD00468')
    );
  }
}

class MosaicMetadataTransactionV1_mosaic_metadata_aggregate_2
{
  public static $payload = "1001000000000000BF2CAD734C8F4AFB309D4543F9183B3BA7320D1302C0024D30BC310C81140D9DE47D22883282A995B614B80FBA8DFEDF1B4BE1D97AFB2192E881482B95BDCFD99F96414C1542444D215F3C971002101B031334A54DED6843C59B5CB86E164F010000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771494C04ABA6F7275CDE4C6C829C99AC3C668EE50E46F6324020E0EADA8B08E51868000000000000006200000000000000000000000000000000000000000000000000000000000000000000000000000000000000019844429841E5B8E40781CF74DABF592817DE48711D778648DEAFB20A00000000000000E803000000000000FBFF0600313233414243000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicMetadataTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          targetAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          scopedMetadataKey: 10,
          targetMosaicId: new UnresolvedMosaicId(1000),
          valueSizeDelta: -5,
          value: hex2bin('313233414243')
        ),
      ],
      signerPublicKey: new PublicKey('9F96414C1542444D215F3C971002101B031334A54DED6843C59B5CB86E164F01'),
      signature: new Signature('BF2CAD734C8F4AFB309D4543F9183B3BA7320D1302C0024D30BC310C81140D9DE47D22883282A995B614B80FBA8DFEDF1B4BE1D97AFB2192E881482B95BDCFD9'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('494C04ABA6F7275CDE4C6C829C99AC3C668EE50E46F6324020E0EADA8B08E518')
    );
  }
}

class MosaicSupplyChangeTransactionV1_mosaic_supply_change_single_1
{
  public static $payload = "9100000000000000E2170899C9BFFDB63EA730C1EE0AA60A9AB086C9127242101ACF0DEFCEA8A31D9B4CA37B6644AC2B6928527338C1CB2C87EA4ADBD98A9EFAC34430B9245C6F93F37F9FB1AFC9F6737DE4652755E6251E66ACB1FCE0A767B62F6E9DA4235E69600000000001984D42E0FEEEEFFEEEEFFEE0711EE7711EE7718869746E9B1A70570A0000000000000001";
  public static function createTransaction()
  {
    return new MosaicSupplyChangeTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      mosaicId: new UnresolvedMosaicId(6300565133566699912),
      action: new MosaicSupplyChangeAction(MosaicSupplyChangeAction::INCREASE),
      delta: new Amount(10),
      signerPublicKey: new PublicKey('F37F9FB1AFC9F6737DE4652755E6251E66ACB1FCE0A767B62F6E9DA4235E6960'),
      signature: new Signature('E2170899C9BFFDB63EA730C1EE0AA60A9AB086C9127242101ACF0DEFCEA8A31D9B4CA37B6644AC2B6928527338C1CB2C87EA4ADBD98A9EFAC34430B9245C6F93'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicSupplyChangeTransactionV1_mosaic_supply_change_single_2
{
  public static $payload = "9100000000000000575F393E380C091DCC5729454D7B839D52158AD00CFD07A735F385DBC0574266EAD33478F15B0F38788437B0F9249A4732808002E23ADC95B9BA1F3F1B86A2221412C49C8BB197DBDEDAB0D12AF4C24A653707369B24C995F924E78D55964BB90000000001984D42E0FEEEEFFEEEEFFEE0711EE7711EE7714CCCD78612DDF5CA0A0000000000000000";
  public static function createTransaction()
  {
    return new MosaicSupplyChangeTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      mosaicId: new UnresolvedMosaicId('14624838436596993100'),
      action: new MosaicSupplyChangeAction(MosaicSupplyChangeAction::DECREASE),
      delta: new Amount(10),
      signerPublicKey: new PublicKey('1412C49C8BB197DBDEDAB0D12AF4C24A653707369B24C995F924E78D55964BB9'),
      signature: new Signature('575F393E380C091DCC5729454D7B839D52158AD00CFD07A735F385DBC0574266EAD33478F15B0F38788437B0F9249A4732808002E23ADC95B9BA1F3F1B86A222'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MosaicSupplyChangeTransactionV1_mosaic_supply_change_aggregate_1
{
  public static $payload = "F000000000000000654E486DC8DB96B8C5307ABA03C65DEBD61270A24AFC473703D1FF1DB0B554C91945A07C6B1D77DE5F1406E8B48EE09480097F0402397A5AF925E3B00C091EAC95D4073C8B7C43F263AAE6E1C8615C41019E2B4FC4AA2693191FC8E693CB4D5D0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7716FFAC840B2C866960FCBCF42AF16B113FFE309A0991DFC0E4F3772E7AFC2FB694800000000000000410000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D428869746E9B1A70570A000000000000000100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicSupplyChangeTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          mosaicId: new UnresolvedMosaicId(6300565133566699912),
          action: new MosaicSupplyChangeAction(MosaicSupplyChangeAction::INCREASE),
          delta: new Amount(10)
        ),
      ],
      signerPublicKey: new PublicKey('95D4073C8B7C43F263AAE6E1C8615C41019E2B4FC4AA2693191FC8E693CB4D5D'),
      signature: new Signature('654E486DC8DB96B8C5307ABA03C65DEBD61270A24AFC473703D1FF1DB0B554C91945A07C6B1D77DE5F1406E8B48EE09480097F0402397A5AF925E3B00C091EAC'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('6FFAC840B2C866960FCBCF42AF16B113FFE309A0991DFC0E4F3772E7AFC2FB69')
    );
  }
}

class MosaicSupplyChangeTransactionV1_mosaic_supply_change_aggregate_2
{
  public static $payload = "F0000000000000008C31F816AE5EDBDCF507DF2F6E05CA7EDF4DE59AB8C3F67AA7474D44065A9E53618859CE09F2D76B92028EA267255B2DCCA6D1E0D7A10A5F3884F936883E25DF8661A3B2F2D23C954942249029CA29E0ABBDDB19B15F73D8560472FCD797EAD40000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771137E5D6F7F63CCB9E2B51A4C22481D2766E8A4FCD6A387E667A35723F2C684284800000000000000410000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D424CCCD78612DDF5CA0A000000000000000000000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicSupplyChangeTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          mosaicId: new UnresolvedMosaicId('14624838436596993100'),
          action: new MosaicSupplyChangeAction(MosaicSupplyChangeAction::DECREASE),
          delta: new Amount(10)
        ),
      ],
      signerPublicKey: new PublicKey('8661A3B2F2D23C954942249029CA29E0ABBDDB19B15F73D8560472FCD797EAD4'),
      signature: new Signature('8C31F816AE5EDBDCF507DF2F6E05CA7EDF4DE59AB8C3F67AA7474D44065A9E53618859CE09F2D76B92028EA267255B2DCCA6D1E0D7A10A5F3884F936883E25DF'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('137E5D6F7F63CCB9E2B51A4C22481D2766E8A4FCD6A387E667A35723F2C68428')
    );
  }
}

class MosaicSupplyRevocationTransactionV1_mosaic_supply_revocation_single_1
{
  public static $payload = "A800000000000000739DFD717943C10142EEA1572C6740602E490FC2AD89850FDB9F37F5DCE16517CA34C3DE8D0E98381234D65BF4A9AF7553C22DD482B1B1CF64AFB9E405A8768419B36A7128CEC19A49A5F6CFA50CFBC93C726132F7579A5672D9B81B4712D6E70000000001984D43E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED672B0000CE5600006400000000000000";
  public static function createTransaction()
  {
    return new MosaicSupplyRevocationTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      signerPublicKey: new PublicKey('19B36A7128CEC19A49A5F6CFA50CFBC93C726132F7579A5672D9B81B4712D6E7'),
      signature: new Signature('739DFD717943C10142EEA1572C6740602E490FC2AD89850FDB9F37F5DCE16517CA34C3DE8D0E98381234D65BF4A9AF7553C22DD482B1B1CF64AFB9E405A87684'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      sourceAddress: new UnresolvedAddress('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I'),
      mosaic: new UnresolvedMosaic(
        mosaicId: new UnresolvedMosaicId('95442763262823'),
        amount: new Amount(100)
      )
    );
  }
}

class MosaicSupplyRevocationTransactionV1_mosaic_supply_revocation_single_2
{
  public static $payload = "A8000000000000000E6654E49EF0D8271332D550FCFE66AE50D61B103101143A8E0D112B6D29A0A73A892A16954A7D3AE34402F9305832F3168CDAEC4A4B12DC12A5B1CFF03478FAE76075299F2D418D085D1B0818AC7A9C6B04326A11351C840D472AF8340D7BB20000000001984D43E0FEEEEFFEEEEFFEE0711EE7711EE7719951776168D24257D8000000000000000000000000000000672B0000CE5600006400000000000000";
  public static function createTransaction()
  {
    return new MosaicSupplyRevocationTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      signerPublicKey: new PublicKey('E76075299F2D418D085D1B0818AC7A9C6B04326A11351C840D472AF8340D7BB2'),
      signature: new Signature('0E6654E49EF0D8271332D550FCFE66AE50D61B103101143A8E0D112B6D29A0A73A892A16954A7D3AE34402F9305832F3168CDAEC4A4B12DC12A5B1CFF03478FA'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      sourceAddress: new UnresolvedAddress('TFIXOYLI2JBFPWAAAAAAAAAAAAAAAAAAAAAAAAA'),
      mosaic: new UnresolvedMosaic(
        mosaicId: new UnresolvedMosaicId('95442763262823'),
        amount: new Amount(100)
      )
    );
  }
}

class MosaicSupplyRevocationTransactionV1_mosaic_supply_revocation_aggregate_1
{
  public static $payload = "000100000000000043325DBC5AD930CF6C4538B77A58E5C6A1C33BF5457B0126BF5A0B18879A3A295EF60F58CB4D318C22905EE32B28AB2937C9C4B3F3DF5B9BC6840BF44DA4FFD788DC64384206F07A371E521E411A66A880933A880A42E697E831EC635ECDF6070000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77173ADFA7E343DEA5312760530264ED658E750A64F3D26E35C1B245C2DF6CA24E95800000000000000580000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D43989059321905F681BCF47EA33BBF5E6F8298B5440854FDED672B0000CE5600006400000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicSupplyRevocationTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          sourceAddress: new UnresolvedAddress('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I'),
          mosaic: new UnresolvedMosaic(
            mosaicId: new UnresolvedMosaicId('95442763262823'),
            amount: new Amount(100)
          )
        ),
      ],
      signerPublicKey: new PublicKey('88DC64384206F07A371E521E411A66A880933A880A42E697E831EC635ECDF607'),
      signature: new Signature('43325DBC5AD930CF6C4538B77A58E5C6A1C33BF5457B0126BF5A0B18879A3A295EF60F58CB4D318C22905EE32B28AB2937C9C4B3F3DF5B9BC6840BF44DA4FFD7'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('73ADFA7E343DEA5312760530264ED658E750A64F3D26E35C1B245C2DF6CA24E9')
    );
  }
}

class MosaicSupplyRevocationTransactionV1_mosaic_supply_revocation_aggregate_2
{
  public static $payload = "000100000000000056C53C0C30D562C2526BD800A25AEF76D81E5B55749BA1BA8D9C0B182B4096ABBE959373F0C88438D3D21375CF98937F6AA1125CC54E8A98BA79A4C1C3080D1895B1A549D077EBB186A9A2233581A80D85CE79739961D6CCAB34577E87F883370000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7719CAC45591325B6F80F522196410CDF71F731269EB5A7F08972EC6C9DF7B024655800000000000000580000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984D439951776168D24257D8000000000000000000000000000000672B0000CE5600006400000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMosaicSupplyRevocationTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          sourceAddress: new UnresolvedAddress('TFIXOYLI2JBFPWAAAAAAAAAAAAAAAAAAAAAAAAA'),
          mosaic: new UnresolvedMosaic(
            mosaicId: new UnresolvedMosaicId('95442763262823'),
            amount: new Amount(100)
          )
        ),
      ],
      signerPublicKey: new PublicKey('95B1A549D077EBB186A9A2233581A80D85CE79739961D6CCAB34577E87F88337'),
      signature: new Signature('56C53C0C30D562C2526BD800A25AEF76D81E5B55749BA1BA8D9C0B182B4096ABBE959373F0C88438D3D21375CF98937F6AA1125CC54E8A98BA79A4C1C3080D18'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('9CAC45591325B6F80F522196410CDF71F731269EB5A7F08972EC6C9DF7B02465')
    );
  }
}


class MultisigAccountModificationTransactionV1_multisig_account_modification_single_1
{
  public static $payload = "D0000000000000004E30A6E6477467C8314BEFF4922D58C33ED32AF351DD88640AF200EB4EE9C6FAD92B42D7FA236485F99D4D2C253993A66B2B00454A1159E71CBB3EB51394AC670499B08886DED0962C696C707C0964588FE4B6C3BC82BECF9F1F63257ED4CB870000000001985541E0FEEEEFFEEEEFFEE0711EE7711EE77101020201000000009841E5B8E40781CF74DABF592817DE48711D778648DEAFB298F409274B52FABBFBCF7E7DF7E20DE1D0C3F657FB8595C1989059321905F681BCF47EA33BBF5E6F8298B5440854FDED";
  public static function createTransaction()
  {
    return new MultisigAccountModificationTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      minRemovalDelta: 1,
      minApprovalDelta: 2,
      addressAdditions: [
        new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
        new UnresolvedAddress(('TD2ASJ2LKL5LX66PPZ67PYQN4HIMH5SX7OCZLQI'))
      ],
      addressDeletions: [
        new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I'))
      ],
      signerPublicKey: new PublicKey('0499B08886DED0962C696C707C0964588FE4B6C3BC82BECF9F1F63257ED4CB87'),
      signature: new Signature('4E30A6E6477467C8314BEFF4922D58C33ED32AF351DD88640AF200EB4EE9C6FAD92B42D7FA236485F99D4D2C253993A66B2B00454A1159E71CBB3EB51394AC67'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class MultisigAccountModificationTransactionV1_multisig_account_modification_aggregate_1
{
  public static $payload = "28010000000000005DCE50608AF36771B8DBD26FF07CE6284500C24606DAD95ECBAEEB51220896AFC59BE14C353FC1037F6089FB70480752D6402A68278E9457C6D66D85719A4E923AFC562C7601C865F7F473063BDA62E72D9EA4802B111F302D016A699DFB4B080000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77123CC3A9D303266D2E163A8B8AA1A991F3EC9012B7F7490C6870BB5F6ED9E4D8D800000000000000080000000000000000000000000000000000000000000000000000000000000000000000000000000000000000198554101020201000000009841E5B8E40781CF74DABF592817DE48711D778648DEAFB298F409274B52FABBFBCF7E7DF7E20DE1D0C3F657FB8595C1989059321905F681BCF47EA33BBF5E6F8298B5440854FDED";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedMultisigAccountModificationTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          minRemovalDelta: 1,
          minApprovalDelta: 2,
          addressAdditions: [
            new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')), new UnresolvedAddress(('TD2ASJ2LKL5LX66PPZ67PYQN4HIMH5SX7OCZLQI'))
          ],
          addressDeletions: [
            new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          ]
        ),
      ],
      signerPublicKey: new PublicKey('3AFC562C7601C865F7F473063BDA62E72D9EA4802B111F302D016A699DFB4B08'),
      signature: new Signature('5DCE50608AF36771B8DBD26FF07CE6284500C24606DAD95ECBAEEB51220896AFC59BE14C353FC1037F6089FB70480752D6402A68278E9457C6D66D85719A4E92'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('23CC3A9D303266D2E163A8B8AA1A991F3EC9012B7F7490C6870BB5F6ED9E4D8D')
    );
  }
}

class NamespaceMetadataTransactionV1_namespace_metadata_single_1
{
  public static $payload = "B200000000000000067D7153D66ED03E696208DAFB698C1EC0ECD92DA3AFEC180E082FA84133F1E5B9B0F0ACD14CEBE867DBA15DD37CB9CC413AAB3EF73E9929977337E6A8F2AB442D64F92F75B37994557B14A982218F4A8B7D6B9CFFBBADFB259BAEC0F9434F0F0000000001984443E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0A00000000000000E8030000000000000A000600414243313233";
  public static function createTransaction()
  {
    return new NamespaceMetadataTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      targetAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      scopedMetadataKey: 10,
      targetNamespaceId: new NamespaceId(1000),
      valueSizeDelta: 10,
      value: "ABC123",
      signerPublicKey: new PublicKey('2D64F92F75B37994557B14A982218F4A8B7D6B9CFFBBADFB259BAEC0F9434F0F'),
      signature: new Signature('067D7153D66ED03E696208DAFB698C1EC0ECD92DA3AFEC180E082FA84133F1E5B9B0F0ACD14CEBE867DBA15DD37CB9CC413AAB3EF73E9929977337E6A8F2AB44'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class NamespaceMetadataTransactionV1_namespace_metadata_single_2
{
  public static $payload = "B200000000000000FD0DDFDC372E15AE261A4AF8C61EFE37FAE5E4D6D8B6E53AA83ED616BD002C1700D2B594C841472C3DC24E4B74DE5E01968A943F8AE7BC34B9C59C9918DA2A4672D6ECEC68081903BB300BC0C033139CDB18D41EA98F9922CF20A5E1FB6B02D60000000001984443E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0A00000000000000E803000000000000FDFF0600414243313233";
  public static function createTransaction()
  {
    return new NamespaceMetadataTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      targetAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      scopedMetadataKey: 10,
      targetNamespaceId: new NamespaceId(1000),
      valueSizeDelta: -3,
      value: "ABC123",
      signerPublicKey: new PublicKey('72D6ECEC68081903BB300BC0C033139CDB18D41EA98F9922CF20A5E1FB6B02D6'),
      signature: new Signature('FD0DDFDC372E15AE261A4AF8C61EFE37FAE5E4D6D8B6E53AA83ED616BD002C1700D2B594C841472C3DC24E4B74DE5E01968A943F8AE7BC34B9C59C9918DA2A46'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class NamespaceMetadataTransactionV1_namespace_metadata_aggregate_1
{
  public static $payload = "1001000000000000E4BA86E9FD077A8D66EC1B283EE9D771DB7BEA4B169F77A2B24D3D83362F48A028FF8762FE47B1B21B1D8F2515F97485CB25B251F8DE540BBCF5E7B5485F7B57DB14CF9C0521579EB44C4FCFC30BFB92CCEC6BFD25FE506E0A8BB8144B8D73B60000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771A716D958F0076204E3F1DDD9CCFB4087C8B934826E977A978914CF3D619494EE6800000000000000620000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984443989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0A00000000000000E8030000000000000A000600414243313233000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedNamespaceMetadataTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          targetAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          scopedMetadataKey: 10,
          targetNamespaceId: new NamespaceId(1000),
          valueSizeDelta: 10,
          value: "ABC123"
        ),
      ],
      signerPublicKey: new PublicKey('DB14CF9C0521579EB44C4FCFC30BFB92CCEC6BFD25FE506E0A8BB8144B8D73B6'),
      signature: new Signature('E4BA86E9FD077A8D66EC1B283EE9D771DB7BEA4B169F77A2B24D3D83362F48A028FF8762FE47B1B21B1D8F2515F97485CB25B251F8DE540BBCF5E7B5485F7B57'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('A716D958F0076204E3F1DDD9CCFB4087C8B934826E977A978914CF3D619494EE')
    );
  }
}

class NamespaceMetadataTransactionV1_namespace_metadata_aggregate_2
{
  public static $payload = "1001000000000000E241E4975832859BFC491EA4F2DABB1F29C984C0035D403C151CEBDB5DFB6F6FCDAFE7F79921213DBB0733C593CDF711E61CACE4A83877C1AFB2D0C2CF6A4E3CF786C045005CD01DE3ABC781B29FE97E0DC7C863AEF29BB5BB16D9D309678E8B0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771A92D6804B56AF5C4439906441DEE2EC265756E9D95914230483A4D1BF6283C1D6800000000000000620000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984443989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0A00000000000000E803000000000000FDFF0600414243313233000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedNamespaceMetadataTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          targetAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          scopedMetadataKey: 10,
          targetNamespaceId: new NamespaceId(1000),
          valueSizeDelta: -3,
          value: "ABC123"
        ),
      ],
      signerPublicKey: new PublicKey('F786C045005CD01DE3ABC781B29FE97E0DC7C863AEF29BB5BB16D9D309678E8B'),
      signature: new Signature('E241E4975832859BFC491EA4F2DABB1F29C984C0035D403C151CEBDB5DFB6F6FCDAFE7F79921213DBB0733C593CDF711E61CACE4A83877C1AFB2D0C2CF6A4E3C'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('A92D6804B56AF5C4439906441DEE2EC265756E9D95914230483A4D1BF6283C1D')
    );
  }
}

class NamespaceRegistrationTransactionV1_namespace_registration_single_1
{
  public static $payload = "9E000000000000006F81F080720F6F641386F1320BCD4B641345CA1D3FF4D7DE302B0EA28D0E8869F3FCC0BACD72C3FF897CB620ED6B713B07F68B6312428A3C6C09B88FCAD0789A15A62A582DA8A52B13BB59EBE39FF2E4155FA2C822CBB0268BDDE5FA00F4F8FF0000000001984E41E0FEEEEFFEEEEFFEE0711EE7711EE77110270000000000007EE9B3B8AFDF53C0000C6E65776E616D657370616365";
  public static function createTransaction()
  {
    return new NamespaceRegistrationTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      duration: new BlockDuration('10000'),
      id: new NamespaceId('13858666424160217470'),
      registrationType: new NamespaceRegistrationType(NamespaceRegistrationType::ROOT),
      name: "newnamespace",
      signerPublicKey: new PublicKey('15A62A582DA8A52B13BB59EBE39FF2E4155FA2C822CBB0268BDDE5FA00F4F8FF'),
      signature: new Signature('6F81F080720F6F641386F1320BCD4B641345CA1D3FF4D7DE302B0EA28D0E8869F3FCC0BACD72C3FF897CB620ED6B713B07F68B6312428A3C6C09B88FCAD0789A'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class NamespaceRegistrationTransactionV1_namespace_registration_single_2
{
  public static $payload = "9E0000000000000059C951AD8691705F1EB49D80B78B850B4114F38E0FCC64DAC404E9AA44DCBAA8A3DCFE82DF1275E278F8B8C98D3B83FB6328F257937AD4490B944C4AE27904B300C8921E7F8A214345AC3A2E15FA9651622A4FA7E609FC6BDE2E79063DCBD3360000000001984E41E0FEEEEFFEEEEFFEE0711EE7711EE7717EE9B3B8AFDF53400312981B7879A3F1010C7375626E616D657370616365";
  public static function createTransaction()
  {
    return new NamespaceRegistrationTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      parentId: new NamespaceId('4635294387305441662'),
      id: new NamespaceId('17411894141110456835'),
      registrationType: new NamespaceRegistrationType(NamespaceRegistrationType::CHILD),
      name: "subnamespace",
      signerPublicKey: new PublicKey('00C8921E7F8A214345AC3A2E15FA9651622A4FA7E609FC6BDE2E79063DCBD336'),
      signature: new Signature('59C951AD8691705F1EB49D80B78B850B4114F38E0FCC64DAC404E9AA44DCBAA8A3DCFE82DF1275E278F8B8C98D3B83FB6328F257937AD4490B944C4AE27904B3'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class NamespaceRegistrationTransactionV1_namespace_registration_aggregate_1
{
  public static $payload = "F8000000000000004C08B813E15C24982EE1D908942CBC07F7EE373EB78F99935D657CAB1CE6397156FF07C97D334F8E2E71B57E293E98B0523633FF36C052E3AB0B5E3FF4924310C3327284E6AC67B1A558F95797CF2EFC994BCECA4EBBCCB4592CB6B8F645DC2D0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77164148373332A1284E316AC070194019D786C29F3B879A0AAFACEC2E393D0FCB550000000000000004E0000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984E4110270000000000007EE9B3B8AFDF53C0000C6E65776E616D6573706163650000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedNamespaceRegistrationTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          duration: new BlockDuration(10000),
          id: new NamespaceId('13858666424160217470'),
          registrationType: new NamespaceRegistrationType(NamespaceRegistrationType::ROOT),
          name: "newnamespace"
        ),
      ],
      signerPublicKey: new PublicKey('C3327284E6AC67B1A558F95797CF2EFC994BCECA4EBBCCB4592CB6B8F645DC2D'),
      signature: new Signature('4C08B813E15C24982EE1D908942CBC07F7EE373EB78F99935D657CAB1CE6397156FF07C97D334F8E2E71B57E293E98B0523633FF36C052E3AB0B5E3FF4924310'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('64148373332A1284E316AC070194019D786C29F3B879A0AAFACEC2E393D0FCB5')
    );
  }
}

class NamespaceRegistrationTransactionV1_namespace_registration_aggregate_2
{
  public static $payload = "F800000000000000BC0F54C2F8ECC9AF9964BA7BBD76797981A7030F037228B256F220C04E0CA1A9C2C45C9E4A8914143E1AAD5E1DFDB2A4503BC1D0095EB21FC2CD8B0DF21D31A22491954E840A79E330BD295F8FF0A15863384734583B9AB6E83815AF9438C0860000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7719777CD6B81EED8832122E7D4692D5AC09D6144D30E3A8D1DF559FDB21C1B4FAC50000000000000004E0000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984E417EE9B3B8AFDF53400312981B7879A3F1010C7375626E616D6573706163650000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedNamespaceRegistrationTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          parentId: new NamespaceId('4635294387305441662'),
          id: new NamespaceId('17411894141110456835'),
          registrationType: new NamespaceRegistrationType(NamespaceRegistrationType::CHILD),
          name: "subnamespace"
        ),
      ],
      signerPublicKey: new PublicKey('2491954E840A79E330BD295F8FF0A15863384734583B9AB6E83815AF9438C086'),
      signature: new Signature('BC0F54C2F8ECC9AF9964BA7BBD76797981A7030F037228B256F220C04E0CA1A9C2C45C9E4A8914143E1AAD5E1DFDB2A4503BC1D0095EB21FC2CD8B0DF21D31A2'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('9777CD6B81EED8832122E7D4692D5AC09D6144D30E3A8D1DF559FDB21C1B4FAC')
    );
  }
}

class NodeKeyLinkTransactionV1_node_key_link_single_1
{
  public static $payload = "A1000000000000003CCE9BCD544BFF665A3400F7337A5115307ABB490AD821B6EE8F2906805B4B4C7D525EC20B52B9F6D7FEAA0CC6C20E6A613F2395916AC07F4ACC34FAD57F177D63F4B6B964EE70A2980C5BB57DB2C184F8DDBF9B0BD9E72F89EA55AC9C5BA6BF0000000001984C42E0FEEEEFFEEEEFFEE0711EE7711EE7719801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B601";
  public static function createTransaction()
  {
    return new NodeKeyLinkTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      linkedPublicKey: new PublicKey('9801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6'),
      linkAction: new LinkAction(LinkAction::LINK),
      signerPublicKey: new PublicKey('63F4B6B964EE70A2980C5BB57DB2C184F8DDBF9B0BD9E72F89EA55AC9C5BA6BF'),
      signature: new Signature('3CCE9BCD544BFF665A3400F7337A5115307ABB490AD821B6EE8F2906805B4B4C7D525EC20B52B9F6D7FEAA0CC6C20E6A613F2395916AC07F4ACC34FAD57F177D'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class NodeKeyLinkTransactionV1_node_key_link_aggregate_1
{
  public static $payload = "00010000000000004A84BB8D0EFC259B98887D4E14C146041D4C9C8ED06F56E224893AA19969A8DB3515ED03430BCA5F47A17F386C184741596EBCFA7110D9CF569B8FFC8300693FF13328C38A0C8B9DE194EAB1609872BAA51FF677395513A528A707795E3C2F590000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771D1E0E4543AD54FB41747EAA74009AE05DB685DD0FB2B8CB6385327DCC71ED8B25800000000000000510000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984C429801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B60100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedNodeKeyLinkTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          linkedPublicKey: new PublicKey('9801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6'),
          linkAction: new LinkAction(LinkAction::LINK)
        ),
      ],
      signerPublicKey: new PublicKey('F13328C38A0C8B9DE194EAB1609872BAA51FF677395513A528A707795E3C2F59'),
      signature: new Signature('4A84BB8D0EFC259B98887D4E14C146041D4C9C8ED06F56E224893AA19969A8DB3515ED03430BCA5F47A17F386C184741596EBCFA7110D9CF569B8FFC8300693F'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('D1E0E4543AD54FB41747EAA74009AE05DB685DD0FB2B8CB6385327DCC71ED8B2')
    );
  }
}

class SecretLockTransactionV1_secret_lock_single_1
{
  public static $payload = "D1000000000000005E9808E11624AAABD2826CF7F464B93F309B8F15506BE6FC7E8C1E5E09E23B4D13A37C5982225413DDD6CA5913F4F4673662732059AD381DF191A01C72CB6D5D21EDDC0F3547F2FE431C1B2BAA531E7C299CD1CBE3F410112C74F43DDAD2A5780000000001985241E0FEEEEFFEEEEFFEE0711EE7711EE7719841E5B8E40781CF74DABF592817DE48711D778648DEAFB23FC8BA10229AB5778D05D9C4B7F56676A88BF9295C185ACFC0F961DB5408CAFE44B262C46CEABB858096980000000000640000000000000000";
  public static function createTransaction()
  {
    return new SecretLockTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      secret: new Hash256('3FC8BA10229AB5778D05D9C4B7F56676A88BF9295C185ACFC0F961DB5408CAFE'),
      mosaic: new UnresolvedMosaic(
        mosaicId: new UnresolvedMosaicId('9636553580561478212'),
        amount: new Amount(10000000)
      ),
      duration: new BlockDuration(100),
      hashAlgorithm: new LockHashAlgorithm(LockHashAlgorithm::SHA3_256),
      signerPublicKey: new PublicKey('21EDDC0F3547F2FE431C1B2BAA531E7C299CD1CBE3F410112C74F43DDAD2A578'),
      signature: new Signature('5E9808E11624AAABD2826CF7F464B93F309B8F15506BE6FC7E8C1E5E09E23B4D13A37C5982225413DDD6CA5913F4F4673662732059AD381DF191A01C72CB6D5D'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class SecretLockTransactionV1_secret_lock_single_2
{
  public static $payload = "D1000000000000001F97199EAA5A7B3D956DE51DB9E93490A72123ECDC7C2931ED4B3EA9D02FD9443F9F5028B92D5CF5A32DD1F9802D0D5B703BE5FFFDB3480D0915C8BE7ABE62FDED5139E46E6BECCD9E762EBFCA2A534DE476087621E2EA3A0BD9E42743A2B4AF0000000001985241E0FEEEEFFEEEEFFEE0711EE7711EE7719841E5B8E40781CF74DABF592817DE48711D778648DEAFB259CC35F8C8D91867717CE4290B40EA636E86CE5C00000000000000000000000044B262C46CEABB85EFCDAB9078563412640000000000000001";
  public static function createTransaction()
  {
    return new SecretLockTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
      mosaic: new UnresolvedMosaic(
        mosaicId: new UnresolvedMosaicId('9636553580561478212'),
        amount: new Amount(1311768467294899695)
      ),
      duration: new BlockDuration(100),
      secret: new Hash256('59CC35F8C8D91867717CE4290B40EA636E86CE5C000000000000000000000000'),
      hashAlgorithm: new LockHashAlgorithm(LockHashAlgorithm::HASH_160),
      signerPublicKey: new PublicKey('ED5139E46E6BECCD9E762EBFCA2A534DE476087621E2EA3A0BD9E42743A2B4AF'),
      signature: new Signature('1F97199EAA5A7B3D956DE51DB9E93490A72123ECDC7C2931ED4B3EA9D02FD9443F9F5028B92D5CF5A32DD1F9802D0D5B703BE5FFFDB3480D0915C8BE7ABE62FD'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class SecretLockTransactionV1_secret_lock_aggregate_1
{
  public static $payload = "3001000000000000D2CECD95BAA2B1F170D2EA70E7EC4A32C6DF0813CCE37C900262BDF1A13E16EE9F54F1A9F31E80DC488D43EDBE3072103AA74B7E064EAEDEF5BAB348B45541E18B23AE138D05DFC8CCEC32BA748D55766D1053859E2F403EAA30D692C3CB822F0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77136927A7B0987EB9A13129BA53AC0597E96F9D8F2C8306EA3F750518ACD15529A88000000000000008100000000000000000000000000000000000000000000000000000000000000000000000000000000000000019852419841E5B8E40781CF74DABF592817DE48711D778648DEAFB23FC8BA10229AB5778D05D9C4B7F56676A88BF9295C185ACFC0F961DB5408CAFE44B262C46CEABB85809698000000000064000000000000000000000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedSecretLockTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          secret: new Hash256('3FC8BA10229AB5778D05D9C4B7F56676A88BF9295C185ACFC0F961DB5408CAFE'),
          mosaic: new UnresolvedMosaic(
            mosaicId: new UnresolvedMosaicId('9636553580561478212'),
            amount: new Amount(10000000)
          ),
          duration: new BlockDuration(100),
          hashAlgorithm: new LockHashAlgorithm(LockHashAlgorithm::SHA3_256)
        ),
      ],
      signerPublicKey: new PublicKey('8B23AE138D05DFC8CCEC32BA748D55766D1053859E2F403EAA30D692C3CB822F'),
      signature: new Signature('D2CECD95BAA2B1F170D2EA70E7EC4A32C6DF0813CCE37C900262BDF1A13E16EE9F54F1A9F31E80DC488D43EDBE3072103AA74B7E064EAEDEF5BAB348B45541E1'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('36927A7B0987EB9A13129BA53AC0597E96F9D8F2C8306EA3F750518ACD15529A')
    );
  }
}

class SecretLockTransactionV1_secret_lock_aggregate_2
{
  public static $payload = "30010000000000003F55F0B895EDBC04AA511CB828326E32FBCD57D5A2688BF1F9FC3A2C604F7BF8B55929FB0B18624A58641CF010A628DC7D64FDFEA1EEC5315950E2559BD5458BEC851E578B1AEF681A6FBE5CD8682D12517F69142EF25B27F9CE75F0087E1F010000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77181F7349CC9785016A1435572751389F02926573244D7F97E14F811D60627750A88000000000000008100000000000000000000000000000000000000000000000000000000000000000000000000000000000000019852419841E5B8E40781CF74DABF592817DE48711D778648DEAFB259CC35F8C8D91867717CE4290B40EA636E86CE5C00000000000000000000000044B262C46CEABB85EFCDAB907856341264000000000000000100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedSecretLockTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          mosaic: new UnresolvedMosaic(
            mosaicId: new UnresolvedMosaicId('9636553580561478212'),
            amount: new Amount(1311768467294899695)
          ),
          duration: new BlockDuration(100),
          secret: new Hash256('59CC35F8C8D91867717CE4290B40EA636E86CE5C000000000000000000000000'),
          hashAlgorithm: new LockHashAlgorithm(LockHashAlgorithm::HASH_160)
        ),
      ],
      signerPublicKey: new PublicKey('EC851E578B1AEF681A6FBE5CD8682D12517F69142EF25B27F9CE75F0087E1F01'),
      signature: new Signature('3F55F0B895EDBC04AA511CB828326E32FBCD57D5A2688BF1F9FC3A2C604F7BF8B55929FB0B18624A58641CF010A628DC7D64FDFEA1EEC5315950E2559BD5458B'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('81F7349CC9785016A1435572751389F02926573244D7F97E14F811D60627750A')
    );
  }
}

class SecretProofTransactionV1_secret_proof_single_1
{
  public static $payload = "BF00000000000000AF3DC7E901D3DBA59F26DB495339E55466C70DDAFD4993CFA437CC260C5829774A3A8891758C20D1E4432D53C9B23FD500972FB212325CC0160300BEE521B444CC619039AF06C01EE2082F40F9D0F4626B8EDB093303FAAC9B15AE5D9797FAE50000000001985242E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED3FC8BA10229AB5778D05D9C4B7F56676A88BF9295C185ACFC0F961DB5408CAFE0400009A493664";
  public static function createTransaction()
  {
    return new SecretProofTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      secret: new Hash256('3FC8BA10229AB5778D05D9C4B7F56676A88BF9295C185ACFC0F961DB5408CAFE'),
      hashAlgorithm: new LockHashAlgorithm(LockHashAlgorithm::SHA3_256),
      proof: hex2bin('9A493664'),
      signerPublicKey: new PublicKey('CC619039AF06C01EE2082F40F9D0F4626B8EDB093303FAAC9B15AE5D9797FAE5'),
      signature: new Signature('AF3DC7E901D3DBA59F26DB495339E55466C70DDAFD4993CFA437CC260C5829774A3A8891758C20D1E4432D53C9B23FD500972FB212325CC0160300BEE521B444'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class SecretProofTransactionV1_secret_proof_aggregate_1
{
  public static $payload = "1801000000000000C7A226BE39161700A4EAAA38663DE7FD9A3ECDDB6D8AE5BE745FA97CAB9A994CD3B6AD7199C586EE62FB3A1860888B5306F34D6AA31D856B8DDBFBAA51E9A9240F6E0AF656247EBE417B0BF2A910BCB879429D9167B274833DA2BCC7526097F00000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7712082780E43D0C6AB646FF178295F5B7CE48B9DE845A3DA98EF595433BDA184E970000000000000006F0000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985242989059321905F681BCF47EA33BBF5E6F8298B5440854FDED3FC8BA10229AB5778D05D9C4B7F56676A88BF9295C185ACFC0F961DB5408CAFE0400009A49366400";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedSecretProofTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          secret: new Hash256('3FC8BA10229AB5778D05D9C4B7F56676A88BF9295C185ACFC0F961DB5408CAFE'),
          hashAlgorithm: new LockHashAlgorithm(LockHashAlgorithm::SHA3_256),
          proof: hex2bin('9A493664')
        ),
      ],
      signerPublicKey: new PublicKey('0F6E0AF656247EBE417B0BF2A910BCB879429D9167B274833DA2BCC7526097F0'),
      signature: new Signature('C7A226BE39161700A4EAAA38663DE7FD9A3ECDDB6D8AE5BE745FA97CAB9A994CD3B6AD7199C586EE62FB3A1860888B5306F34D6AA31D856B8DDBFBAA51E9A924'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('2082780E43D0C6AB646FF178295F5B7CE48B9DE845A3DA98EF595433BDA184E9')
    );
  }
}

class TransferTransactionV1_transfer_single_1
{
  public static $payload = "B0000000000000002396B87D65DDDCF52F527CC4C8E2C413C52DA4E2D2D951E5EB1370941D86068688099761AD473A3D124650B823C39078B9326EC8CD050FE2EB6ABC9FE61C0212A75027E4F32570A79B8A5A8641AB91ED48360074AE2AAE055CE3BD48D3BE22330000000001985441E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0000010000000000672B0000CE5600006400000000000000";
  public static function createTransaction()
  {
    return new TransferTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      mosaics: [
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId(95442763262823),
          amount: new Amount(100)
        )
      ],
      signerPublicKey: new PublicKey('A75027E4F32570A79B8A5A8641AB91ED48360074AE2AAE055CE3BD48D3BE2233'),
      signature: new Signature('2396B87D65DDDCF52F527CC4C8E2C413C52DA4E2D2D951E5EB1370941D86068688099761AD473A3D124650B823C39078B9326EC8CD050FE2EB6ABC9FE61C0212'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class TransferTransactionV1_transfer_single_2
{
  public static $payload = "C00000000000000042D030CD0166DA62C1DF1FF0945752475FBD2B4B975E9991EFF57BCD742C235787433B8AF428C3852009C8C63B632572057945118F393F4187FF51DFD77CAC6DB0A48186B2D8C168DBAF2395AD3BF421F9E44D7AD8E616C5E981ABD1DB5190F20000000001985441E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED000002000000000064000000000000000200000000000000C8000000000000000100000000000000";
  public static function createTransaction()
  {
    return new TransferTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      mosaics: [
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId(100),
          amount: new Amount(2)
        ),
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId(200),
          amount: new Amount(1)
        ),
      ],
      signerPublicKey: new PublicKey('B0A48186B2D8C168DBAF2395AD3BF421F9E44D7AD8E616C5E981ABD1DB5190F2'),
      signature: new Signature('42D030CD0166DA62C1DF1FF0945752475FBD2B4B975E9991EFF57BCD742C235787433B8AF428C3852009C8C63B632572057945118F393F4187FF51DFD77CAC6D'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class TransferTransactionV1_transfer_single_3
{
  public static $payload = "D000000000000000C1DD9E45551CF35D8F058C73A8E3813B107A5D6EC6393F60B8B2F294E1C831FF96F30CB71D18EBEE2C96146D97DF1CFA252B8B3988697015150D7CDFEF8844635A76A15971385920F91E666BD0698687C0A5C50D6FCEE82E9F1FDC4D8BC7F5180000000001985441E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0000030000000000BA36BD286FB7F2670300000000000000D787D9329996A177020000000000000029CF5FD941AD25D50100000000000000";
  public static function createTransaction()
  {
    return new TransferTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      mosaics: [
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId('7490250818323297978'),
          amount: new Amount(3)
        ),
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId('8620336746491119575'),
          amount: new Amount(2)
        ),
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId('15358872602548358953'),
          amount: new Amount(1)
        ),
      ],
      signerPublicKey: new PublicKey('5A76A15971385920F91E666BD0698687C0A5C50D6FCEE82E9F1FDC4D8BC7F518'),
      signature: new Signature('C1DD9E45551CF35D8F058C73A8E3813B107A5D6EC6393F60B8B2F294E1C831FF96F30CB71D18EBEE2C96146D97DF1CFA252B8B3988697015150D7CDFEF884463'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class TransferTransactionV1_transfer_single_4
{
  public static $payload = "B0000000000000005A5763BD9CE487F745C0A5F4D2D2F4167778878C9C119B03C549F915ED471B6AD05F51A76C4CE9CC7BCF58958A6DC64B3C43584D1651B64FBBFCD42FCAD1DEBF2558851FBDECC3CFAD26DE0050EAA6661B81F2CCE59F3A6672766CD8EC8EE3AA0000000001985441E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED1000000000000000D600000300504C5445000000FBAF93F7";
  public static function createTransaction()
  {
    return new TransferTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      mosaics: [],
      message: hex2bin('D600000300504C5445000000FBAF93F7'),
      signerPublicKey: new PublicKey('2558851FBDECC3CFAD26DE0050EAA6661B81F2CCE59F3A6672766CD8EC8EE3AA'),
      signature: new Signature('5A5763BD9CE487F745C0A5F4D2D2F4167778878C9C119B03C549F915ED471B6AD05F51A76C4CE9CC7BCF58958A6DC64B3C43584D1651B64FBBFCD42FCAD1DEBF'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class TransferTransactionV1_transfer_single_5
{
  public static $payload = "CE000000000000003CA4BBA1CFF24DEA27FD659AA48334DB71FF2E377F641E52773959C58B8A3F77E1255762A39097716FCA94CD55FFED106B8B4EFE69701484E05A184A4FEFFD0311EB0CF6770160DFED4C943B9B691930D3F138141FF4D02B7CB8B383A3AE2BDA0000000001985441E0FEEEEFFEEEEFFEE0711EE7711EE7719188DD7D72227ECAE70000000000000000000000000000001E0001000000000044B262C46CEABB8501000000000000004974277320736F6D65206B696E64206F66206D616769632C206D61676963";
  public static function createTransaction()
  {
    return new TransferTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('SGEN27LSEJ7MVZYAAAAAAAAAAAAAAAAAAAAAAAA')),
      mosaics: [
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId('9636553580561478212'),
          amount: new Amount(1)
        ),
      ],
      message: "It's some kind of magic, magic",
      signerPublicKey: new PublicKey('11EB0CF6770160DFED4C943B9B691930D3F138141FF4D02B7CB8B383A3AE2BDA'),
      signature: new Signature('3CA4BBA1CFF24DEA27FD659AA48334DB71FF2E377F641E52773959C58B8A3F77E1255762A39097716FCA94CD55FFED106B8B4EFE69701484E05A184A4FEFFD03'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class TransferTransactionV1_transfer_single_6
{
  public static $payload = "CA0000000000000070E5416292032C453B628E6D8D8EFE8EF81C19AA054AD1C270B17E98B0993352B9A2627F5C944E49F01D479F3BB1B263D4516E6C63117DFA35EBBA9D30432EDE0E24F92F57FF40F89B2F28B0A89B1F1A55408A653C1864502F29744237EFA2B60000000001985441E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0A00020000000000671305C6390B00002C01000000000000672B0000CE560000640000000000000048656C6C6F20F09F918B";
  public static function createTransaction()
  {
    return new TransferTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      mosaics: [
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId(12342763262823),
          amount: new Amount(300)
        ),
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId(95442763262823),
          amount: new Amount(100)
        ),
      ],
      message: "Hello 👋",
      signerPublicKey: new PublicKey('0E24F92F57FF40F89B2F28B0A89B1F1A55408A653C1864502F29744237EFA2B6'),
      signature: new Signature('70E5416292032C453B628E6D8D8EFE8EF81C19AA054AD1C270B17E98B0993352B9A2627F5C944E49F01D479F3BB1B263D4516E6C63117DFA35EBBA9D30432EDE'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class TransferTransactionV1_transfer_single_7
{
  public static $payload = "D000000000000000D62C87F5719E3D2AAACB0ADA00678E0FBD040AB7B3D05C30DE7DC613834C45F3C491D61574DF3E368A27895FD494C0F0D83C6D32FA5916E6A7EE1466F4E6E4C6E66203800A937D2CDF45D3C62C30DEE4A0FEA810B958DD870EBB05CC97BCC3820000000001985441E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0000030000000000BA36BD286FB7F2670300000000000000D787D9329996A177020000000000000029CF5FD941AD25D50100000000000000";
  public static function createTransaction()
  {
    return new TransferTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
      mosaics: [
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId('8620336746491119575'),
          amount: new Amount(2)
        ),
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId('15358872602548358953'),
          amount: new Amount(1)
        ),
        new UnresolvedMosaic(
          mosaicId: new UnresolvedMosaicId('7490250818323297978'),
          amount: new Amount(3)
        ),
      ],
      signerPublicKey: new PublicKey('E66203800A937D2CDF45D3C62C30DEE4A0FEA810B958DD870EBB05CC97BCC382'),
      signature: new Signature('D62C87F5719E3D2AAACB0ADA00678E0FBD040AB7B3D05C30DE7DC613834C45F3C491D61574DF3E368A27895FD494C0F0D83C6D32FA5916E6A7EE1466F4E6E4C6'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class TransferTransactionV1_transfer_aggregate_1
{
  public static $payload = "08010000000000001DD497AAE2AF93C3E7402AA3623F0578A14646FDA848EF82EB8D14033AB515CECC22B0AD6B9A3C6277B0DC3451C93A534301FFEDF49958E9AC36BE8B684F92A58881DFC77FE896CB10A98B2CD52660C243C81185BAE7C54187E5BCF84CE849E80000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771708124B1E5E63878225B38A343BDB300A1A06150343BA85DFC608331265D0DA56000000000000000600000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0000010000000000672B0000CE5600006400000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(95442763262823),
              amount: new Amount(100)
            ),
          ]
        ),
      ],
      signerPublicKey: new PublicKey('8881DFC77FE896CB10A98B2CD52660C243C81185BAE7C54187E5BCF84CE849E8'),
      signature: new Signature('1DD497AAE2AF93C3E7402AA3623F0578A14646FDA848EF82EB8D14033AB515CECC22B0AD6B9A3C6277B0DC3451C93A534301FFEDF49958E9AC36BE8B684F92A5'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('708124B1E5E63878225B38A343BDB300A1A06150343BA85DFC608331265D0DA5')
    );
  }
}

class TransferTransactionV1_transfer_aggregate_2
{
  public static $payload = "1801000000000000C3CB1685625F7B50CB6CE902EB01C6B87EA219EAA24C4B8C99470228725ACAA913838F8C526ABD8E73C3D07FAE029C7F2952DA60D2C45CAF2CEC06FE6086DB1D20D7B516D60461DDBDBF41E29F111DAB28951B5E1E257B560889766C7F210D620000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771F34F69D90B202FC2752058059E3BC49A8CA4BE331D5F49C2C13B8F2A9A3BC3317000000000000000700000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED000002000000000064000000000000000200000000000000C8000000000000000100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(100),
              amount: new Amount(2)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(200),
              amount: new Amount(1)
            ),
          ]
        ),
      ],
      signerPublicKey: new PublicKey('20D7B516D60461DDBDBF41E29F111DAB28951B5E1E257B560889766C7F210D62'),
      signature: new Signature('C3CB1685625F7B50CB6CE902EB01C6B87EA219EAA24C4B8C99470228725ACAA913838F8C526ABD8E73C3D07FAE029C7F2952DA60D2C45CAF2CEC06FE6086DB1D'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('F34F69D90B202FC2752058059E3BC49A8CA4BE331D5F49C2C13B8F2A9A3BC331')
    );
  }
}

class TransferTransactionV1_transfer_aggregate_3
{
  public static $payload = "2801000000000000C9F0161425259D1D2984B589F7C2C6F2F0B00E1233103F204AD082152C0E1DD549993443C85FDB91C130F8A4CABDF445852E9B2B0AECEB355E57D2BC83B28D84A311444F2A64E4E1D9864C117076FA4AA1629FC011AD6103B2FB7FC614F60EDE0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771611B90A6E05EE33D30D87DE5B58505B8B9807E54BB8B9229EAF95DBBD43819BC8000000000000000800000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0000030000000000BA36BD286FB7F2670300000000000000D787D9329996A177020000000000000029CF5FD941AD25D50100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('7490250818323297978'),
              amount: new Amount(3)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('8620336746491119575'),
              amount: new Amount(2)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('15358872602548358953'),
              amount: new Amount(1)
            ),
          ]
        ),
      ],
      signerPublicKey: new PublicKey('A311444F2A64E4E1D9864C117076FA4AA1629FC011AD6103B2FB7FC614F60EDE'),
      signature: new Signature('C9F0161425259D1D2984B589F7C2C6F2F0B00E1233103F204AD082152C0E1DD549993443C85FDB91C130F8A4CABDF445852E9B2B0AECEB355E57D2BC83B28D84'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('611B90A6E05EE33D30D87DE5B58505B8B9807E54BB8B9229EAF95DBBD43819BC')
    );
  }
}

class TransferTransactionV1_transfer_aggregate_4
{
  public static $payload = "0801000000000000E9255429A2B8253E6FBC0FFBBE00222DB8B5FBB5606EE98811B763CE3EE63C81D24365B2C4392389172356B16C43F633A1D76C9F594257AA017C3EEA028F2D2C7C4A1D083B98CCA7D7A7F467B1ECCE4CD8ED1B3D4615724B590B07E852B4A89C0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771AB122F570B57922F4B25A37E13EC53E14BE4A6A3F38C06CE4AF510060633667D6000000000000000600000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED1000000000000000D600000300504C5445000000FBAF93F7";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [],
          message: hex2bin('D600000300504C5445000000FBAF93F7')
        ),
      ],
      signerPublicKey: new PublicKey('7C4A1D083B98CCA7D7A7F467B1ECCE4CD8ED1B3D4615724B590B07E852B4A89C'),
      signature: new Signature('E9255429A2B8253E6FBC0FFBBE00222DB8B5FBB5606EE98811B763CE3EE63C81D24365B2C4392389172356B16C43F633A1D76C9F594257AA017C3EEA028F2D2C'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('AB122F570B57922F4B25A37E13EC53E14BE4A6A3F38C06CE4AF510060633667D')
    );
  }
}

class TransferTransactionV1_transfer_aggregate_5
{
  public static $payload = "2801000000000000DC057B241AFA2AD72F522AB22299AF9B76AC3C20C8C29278CC1CD15F2F0CD4FA54A7500F66904858C3ABC7C258EA8130F67140C9F6C85EA73502FCDD409F68306AA821C54CAC407F32028BABE0D2B29DC3EE7F89078B2EC40705C7EAA123C4E70000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7719ACF4807E95D6989038C5FCFEA053C55077439DFB93C06C98237C73815CABE8780000000000000007E00000000000000000000000000000000000000000000000000000000000000000000000000000000000000019854419188DD7D72227ECAE70000000000000000000000000000001E0001000000000044B262C46CEABB8501000000000000004974277320736F6D65206B696E64206F66206D616769632C206D616769630000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('SGEN27LSEJ7MVZYAAAAAAAAAAAAAAAAAAAAAAAA')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('9636553580561478212'),
              amount: new Amount(1)
            ),
          ],
          message: "It's some kind of magic, magic"
        ),
      ],
      signerPublicKey: new PublicKey('6AA821C54CAC407F32028BABE0D2B29DC3EE7F89078B2EC40705C7EAA123C4E7'),
      signature: new Signature('DC057B241AFA2AD72F522AB22299AF9B76AC3C20C8C29278CC1CD15F2F0CD4FA54A7500F66904858C3ABC7C258EA8130F67140C9F6C85EA73502FCDD409F6830'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('9ACF4807E95D6989038C5FCFEA053C55077439DFB93C06C98237C73815CABE87')
    );
  }
}

class TransferTransactionV1_transfer_aggregate_6
{
  public static $payload = "2801000000000000287E9D267A8560FC82BCABEB6E161DB461AA585344739B738CA4474F450B3B8A6DA715AC41AF6BEDE4D8F0C3C7C0104F9E8C7FC91AD441E09ACDE33A15DC8A5C3A347999434B7D11999E74880393A38AA0EAD0D5290B16B665E9408F7DC7CABA0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771754207E883B1237A94D2892613D382C17B0F0A2EC93042871724F6AE0D991ABA80000000000000007A0000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0A00020000000000671305C6390B00002C01000000000000672B0000CE560000640000000000000048656C6C6F20F09F918B000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(12342763262823),
              amount: new Amount(300)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId(95442763262823),
              amount: new Amount(100)
            ),
          ],
          message: "Hello 👋"
        ),
      ],
      signerPublicKey: new PublicKey('3A347999434B7D11999E74880393A38AA0EAD0D5290B16B665E9408F7DC7CABA'),
      signature: new Signature('287E9D267A8560FC82BCABEB6E161DB461AA585344739B738CA4474F450B3B8A6DA715AC41AF6BEDE4D8F0C3C7C0104F9E8C7FC91AD441E09ACDE33A15DC8A5C'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('754207E883B1237A94D2892613D382C17B0F0A2EC93042871724F6AE0D991ABA')
    );
  }
}

class TransferTransactionV1_transfer_aggregate_7
{
  public static $payload = "2801000000000000A0893317E373F4009C20654644B74253746799124BA671531C1DBBE26DFED167860641CEA467B53139EBDBB4313BD929C0A3838363D10CD71CD882B42DA5EC929FC9DA6EB5B2E47C0AB55B8B7DEBEC331DFDD4C4A7E748ED35A59D69E29B639B0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771611B90A6E05EE33D30D87DE5B58505B8B9807E54BB8B9229EAF95DBBD43819BC8000000000000000800000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0000030000000000BA36BD286FB7F2670300000000000000D787D9329996A177020000000000000029CF5FD941AD25D50100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('8620336746491119575'),
              amount: new Amount(2)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('15358872602548358953'),
              amount: new Amount(1)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('7490250818323297978'),
              amount: new Amount(3)
            ),
          ]
        ),
      ],
      signerPublicKey: new PublicKey('9FC9DA6EB5B2E47C0AB55B8B7DEBEC331DFDD4C4A7E748ED35A59D69E29B639B'),
      signature: new Signature('A0893317E373F4009C20654644B74253746799124BA671531C1DBBE26DFED167860641CEA467B53139EBDBB4313BD929C0A3838363D10CD71CD882B42DA5EC92'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('611B90A6E05EE33D30D87DE5B58505B8B9807E54BB8B9229EAF95DBBD43819BC')
    );
  }
}

class VotingKeyLinkTransactionV1_voting_key_link_single_1
{
  public static $payload = "A9000000000000002E2DA14AA2ED5E08B2BC7636A3F45E84B84C6968B70BB4064E4C8BE04971FBE4A87B64561B4F378D08FB60F24F2DF28932913364D7CFDF09BDDE75C635EB16B17163EBCDA4CACDCAE3A1145D22FA73E0AA8AFFB46F5E14D9205DCF98951FFA480000000001984341E0FEEEEFFEEEEFFEE0711EE7711EE771C614558647D02037384A2FECA80ACE95B235D9B9D90035FA46102FE79ECCBA75010000000300000001";
  public static function createTransaction()
  {
    return new VotingKeyLinkTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      linkedPublicKey: new VotingPublicKey('C614558647D02037384A2FECA80ACE95B235D9B9D90035FA46102FE79ECCBA75'),
      startEpoch: new FinalizationEpoch(1),
      endEpoch: new FinalizationEpoch(3),
      linkAction: new LinkAction(LinkAction::LINK),
      signerPublicKey: new PublicKey('7163EBCDA4CACDCAE3A1145D22FA73E0AA8AFFB46F5E14D9205DCF98951FFA48'),
      signature: new Signature('2E2DA14AA2ED5E08B2BC7636A3F45E84B84C6968B70BB4064E4C8BE04971FBE4A87B64561B4F378D08FB60F24F2DF28932913364D7CFDF09BDDE75C635EB16B1'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class VotingKeyLinkTransactionV1_voting_key_link_single_2
{
  public static $payload = "A9000000000000004B8726EC5C6F5875707C8CE094880AD4CE0882B34AE4BEFE244C33C2A8FD8A4B4A6A2BDE2B56C84471A69160B1A24B1AD328F86876F39FB4B7D1A2CDB55CA494880B6E4974E521B5B448C41BFD54F6F316D7707CCC6D07006DB993A350B83DAF0000000001984341E0FEEEEFFEEEEFFEE0711EE7711EE7719801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6CD0000001001000000";
  public static function createTransaction()
  {
    return new VotingKeyLinkTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      linkedPublicKey: new VotingPublicKey('9801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6'),
      startEpoch: new FinalizationEpoch(205),
      endEpoch: new FinalizationEpoch(272),
      linkAction: new LinkAction(LinkAction::UNLINK),
      signerPublicKey: new PublicKey('880B6E4974E521B5B448C41BFD54F6F316D7707CCC6D07006DB993A350B83DAF'),
      signature: new Signature('4B8726EC5C6F5875707C8CE094880AD4CE0882B34AE4BEFE244C33C2A8FD8A4B4A6A2BDE2B56C84471A69160B1A24B1AD328F86876F39FB4B7D1A2CDB55CA494'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class VotingKeyLinkTransactionV1_voting_key_link_aggregate_1
{
  public static $payload = "0801000000000000D595FEF4F50F3CC47B4D684B1DD9DB0352574D18492BE938E364073B00E4091A1E60354A10753AE92DA6B6935663137B946A82D5B15E8A01F2DD647BC3463017E31C85F00E72BB7537B1D055E2F8B1563143080AA60C3A9653FA2A94AD5958A90000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77156C4DAA441CE9528C6F0F1431E6FDD78AD33943E568964DF3AADAA9023B97F266000000000000000590000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984341C614558647D02037384A2FECA80ACE95B235D9B9D90035FA46102FE79ECCBA7501000000030000000100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedVotingKeyLinkTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          linkedPublicKey: new VotingPublicKey('C614558647D02037384A2FECA80ACE95B235D9B9D90035FA46102FE79ECCBA75'),
          startEpoch: new FinalizationEpoch(1),
          endEpoch: new FinalizationEpoch(3),
          linkAction: new LinkAction(LinkAction::LINK)
        ),
      ],
      signerPublicKey: new PublicKey('E31C85F00E72BB7537B1D055E2F8B1563143080AA60C3A9653FA2A94AD5958A9'),
      signature: new Signature('D595FEF4F50F3CC47B4D684B1DD9DB0352574D18492BE938E364073B00E4091A1E60354A10753AE92DA6B6935663137B946A82D5B15E8A01F2DD647BC3463017'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('56C4DAA441CE9528C6F0F1431E6FDD78AD33943E568964DF3AADAA9023B97F26')
    );
  }
}

class VotingKeyLinkTransactionV1_voting_key_link_aggregate_2
{
  public static $payload = "0801000000000000CB5E0C56862D705FDB3AFBDA7399365F0259ECC36377D19FBC154D94C18E337C9183A2B911BE690AF2FAC22C1C65821749E37CF475EFE6C14DEAB991ACBAFE7C06EE91EA9B49139264D5AD874CC71D53EA5010A6033A951A163C46CB00718C8C0000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE7717BEFAC9DE1ED91FF6A7F9252CBDF9825C5DEF3D65EBC9CE6D07475854D69978C60000000000000005900000000000000000000000000000000000000000000000000000000000000000000000000000000000000019843419801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6CD000000100100000000000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedVotingKeyLinkTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          linkedPublicKey: new VotingPublicKey("9801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6"),
          startEpoch: new FinalizationEpoch(205),
          endEpoch: new FinalizationEpoch(272),
          linkAction: new LinkAction(LinkAction::UNLINK)
        ),
      ],
      signerPublicKey: new PublicKey('06EE91EA9B49139264D5AD874CC71D53EA5010A6033A951A163C46CB00718C8C'),
      signature: new Signature('CB5E0C56862D705FDB3AFBDA7399365F0259ECC36377D19FBC154D94C18E337C9183A2B911BE690AF2FAC22C1C65821749E37CF475EFE6C14DEAB991ACBAFE7C'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('7BEFAC9DE1ED91FF6A7F9252CBDF9825C5DEF3D65EBC9CE6D07475854D69978C')
    );
  }
}

class VrfKeyLinkTransactionV1_vrf_key_link_single_1
{
  public static $payload = "A10000000000000038F64BB69857DF898DF5D551032AA4BBFA454B3235F5915CEBED82C85BE69E7C7D06443763551A4E68CDA17AEC2BF9A74CB5F85A6D0474E7CA7B804F55AF8EDBF338E25ED94FC0376305E1B337BF00D56F8B012A88D5E9E18DF13815A1AB1C890000000001984342E0FEEEEFFEEEEFFEE0711EE7711EE7719801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B601";
  public static function createTransaction()
  {
    return new VrfKeyLinkTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      linkedPublicKey: new PublicKey('9801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6'),
      linkAction: new LinkAction(LinkAction::LINK),
      signerPublicKey: new PublicKey('F338E25ED94FC0376305E1B337BF00D56F8B012A88D5E9E18DF13815A1AB1C89'),
      signature: new Signature('38F64BB69857DF898DF5D551032AA4BBFA454B3235F5915CEBED82C85BE69E7C7D06443763551A4E68CDA17AEC2BF9A74CB5F85A6D0474E7CA7B804F55AF8EDB'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class VrfKeyLinkTransactionV1_vrf_key_link_single_2
{
  public static $payload = "A10000000000000083FC771045460B0545CA4C27C00A595D21418F34E056F299732CD759C9C0A268D0395222D79F0EEB392D3F5AC0A0FAEAFE231CC0C5F7187F99CAAF74DECC13E341F56C0A08B535092BDFF114360B5563B729B9BB82B727238D857D9FFF705B1E0000000001984342E0FEEEEFFEEEEFFEE0711EE7711EE771C614558647D02037384A2FECA80ACE95B235D9B9D90035FA46102FE79ECCBA7500";
  public static function createTransaction()
  {
    return new VrfKeyLinkTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      linkedPublicKey: new PublicKey('C614558647D02037384A2FECA80ACE95B235D9B9D90035FA46102FE79ECCBA75'),
      linkAction: new LinkAction(LinkAction::UNLINK),
      signerPublicKey: new PublicKey('41F56C0A08B535092BDFF114360B5563B729B9BB82B727238D857D9FFF705B1E'),
      signature: new Signature('83FC771045460B0545CA4C27C00A595D21418F34E056F299732CD759C9C0A268D0395222D79F0EEB392D3F5AC0A0FAEAFE231CC0C5F7187F99CAAF74DECC13E3'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160')
    );
  }
}

class VrfKeyLinkTransactionV1_vrf_key_link_aggregate_1
{
  public static $payload = "0001000000000000931F2E428A63C16A98CFC5A3EDEC34DE7014133316645C99E1A13C5EF30006D22D255C52C0529286CFD234CF69E9F8DE369F34B45A894649F7595E035977BB39633071BA1815E88BE471CE8C8B930BE7771C637A7209B6D04523BD35ABF089520000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE771DFED773D9A8101C3DEE6A0F1B8F2D2414FAA3EA509980ED2A6A68DD1F11C32B558000000000000005100000000000000000000000000000000000000000000000000000000000000000000000000000000000000019843429801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B60100000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedVrfKeyLinkTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          linkedPublicKey: new PublicKey('9801508C58666C746F471538E43002B85B1CD542F9874B2861183919BA8787B6'),
          linkAction: new LinkAction(LinkAction::LINK)
        ),
      ],
      signerPublicKey: new PublicKey('633071BA1815E88BE471CE8C8B930BE7771C637A7209B6D04523BD35ABF08952'),
      signature: new Signature('931F2E428A63C16A98CFC5A3EDEC34DE7014133316645C99E1A13C5EF30006D22D255C52C0529286CFD234CF69E9F8DE369F34B45A894649F7595E035977BB39'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('DFED773D9A8101C3DEE6A0F1B8F2D2414FAA3EA509980ED2A6A68DD1F11C32B5')
    );
  }
}

class VrfKeyLinkTransactionV1_vrf_key_link_aggregate_2
{
  public static $payload = "0001000000000000B6D02A1F73CB1F1E5DCF024763E33A837CBC3E36AA8C5CD982620F360B60E05BD9549B1B139E51725BE39DB878F7044CA9AC786EB97163B1D9E81CB74BC39EEFC28DC781CBA32E6D357869E20D90BD00B29729341414E5ECE5FBF8B93492A8800000000002984142E0FEEEEFFEEEEFFEE0711EE7711EE77120DBC70A82354FC46E727F9925707398981300E40BE3778FF9EFBE86D722AF595800000000000000510000000000000000000000000000000000000000000000000000000000000000000000000000000000000001984342C614558647D02037384A2FECA80ACE95B235D9B9D90035FA46102FE79ECCBA750000000000000000";
  public static function createTransaction()
  {
    return new AggregateBondedTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedVrfKeyLinkTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          linkedPublicKey: new PublicKey('C614558647D02037384A2FECA80ACE95B235D9B9D90035FA46102FE79ECCBA75'),
          linkAction: new LinkAction(LinkAction::UNLINK)
        ),
      ],
      signerPublicKey: new PublicKey('C28DC781CBA32E6D357869E20D90BD00B29729341414E5ECE5FBF8B93492A880'),
      signature: new Signature('B6D02A1F73CB1F1E5DCF024763E33A837CBC3E36AA8C5CD982620F360B60E05BD9549B1B139E51725BE39DB878F7044CA9AC786EB97163B1D9E81CB74BC39EEF'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [],
      transactionsHash: new Hash256('20DBC70A82354FC46E727F9925707398981300E40BE3778FF9EFBE86D722AF59')
    );
  }
}

class AggregateCompleteTransactionV1_aggregate_complete_aggregate_1
{
  public static $payload = "C0020000000000006ABA6C43AE8B33939CF3452DBFE04525EA9628D0B254A59766AF70B5497BBD82E1859E64570D6441F31AA8BD77693581F42CA59E67B8B86D944D7EBD8D05FAC4E76E5A82B9C5148C740F52913F63DC987028FAECC90046B177B02EF55272419A0000000001984141E0FEEEEFFEEEEFFEE0711EE7711EE7716655F5FCF2290442DD1B3AEBB649A49249E32EBAF259403183A9A847EA22E0B6E0000000000000005C00000000000000000000000000000000000000000000000000000000000000000000000000000000000000019854419841E5B8E40781CF74DABF592817DE48711D778648DEAFB20C00000000000000476F6F6462796520F09F918B00000000800000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED1000020000000000672B0000CE560000650000000000000029CF5FD941AD25D50100000000000000D600000300504C5445000000FBAF93F70000000000000000BBC9173F90BDCD2F8F83A387FC24F34F723C359FF422E519669B241CBE0945DAAF3135255497C49C647EE1021F691D28221D47854708034F7939666A8FB8AD4560F8D734355151BB610BE08C9F5D01EA977F1E6B56841AB085DCA25EFFA4A37E000000000000000058A079CE59F839E4A2A02432EF80F746314A38244FB17566222F7EF3AB6F42B8E17DF12FC341EAD43586126508D09311A237436F3B2EEC79111843B9A50BDA9E22D2ACCAFE5DFA67789A15E7BE246861B218C8339ADB7480F367ED354A523ABA000000000000000034DE86B4C43F3A8FAE4495FC0832FB156F358F7FB9AA801FB77814229C745E816B1998D483FC9E20FBC420E197B4213D7F2C14F7E5FC4BA0874A88EEF263FCB4F14ABCB5D3E144CA61D4FAE67B9D13C3C3AE6C4715C0E1FAF34DF7F9F8C4C9AE";
  public static function createTransaction()
  {
    return new AggregateCompleteTransactionV1(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          mosaics: [],
          message: "Goodbye 👋"
        ),
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('95442763262823'),
              amount: new Amount(101)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('15358872602548358953'),
              amount: new Amount(1)
            ),
          ],
          message: hex2bin('D600000300504C5445000000FBAF93F7')
        ),
      ],
      signerPublicKey: new PublicKey('E76E5A82B9C5148C740F52913F63DC987028FAECC90046B177B02EF55272419A'),
      signature: new Signature('6ABA6C43AE8B33939CF3452DBFE04525EA9628D0B254A59766AF70B5497BBD82E1859E64570D6441F31AA8BD77693581F42CA59E67B8B86D944D7EBD8D05FAC4'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [
        new Cosignature(
          signerPublicKey: new PublicKey('bbc9173f90bdcd2f8f83a387fc24f34f723c359ff422e519669b241cbe0945da'),
          signature: new Signature('af3135255497c49c647ee1021f691d28221d47854708034f7939666a8fb8ad4560f8d734355151bb610be08c9f5d01ea977f1e6b56841ab085dca25effa4a37e')
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('58a079ce59f839e4a2a02432ef80f746314a38244fb17566222f7ef3ab6f42b8'),
          signature: new Signature('e17df12fc341ead43586126508d09311a237436f3b2eec79111843b9a50bda9e22d2accafe5dfa67789a15e7be246861b218c8339adb7480f367ed354a523aba')
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('34de86b4c43f3a8fae4495fc0832fb156f358f7fb9aa801fb77814229c745e81'),
          signature: new Signature('6b1998d483fc9e20fbc420e197b4213d7f2c14f7e5fc4ba0874a88eef263fcb4f14abcb5d3e144ca61d4fae67b9d13c3c3ae6c4715c0e1faf34df7f9f8c4c9ae')
        ),
      ],
      transactionsHash: new Hash256('6655F5FCF2290442DD1B3AEBB649A49249E32EBAF259403183A9A847EA22E0B6')
    );
  }
}

class AggregateCompleteTransactionV2_aggregate_complete_aggregate_2
{
  public static $payload = "C002000000000000BA5888AF968D00F57A9019A58421897EFC4863BEB8EF9B20C765B50B839DCFE4501FB0CD839CEF8EF43F4DD59CEB78BD8A80B011D9E8B577418C6415FFC7FA3D38CF4625210D1D38D6E9A8DC901D49D659ADC793C0AE5F488E52DC29A292B5A70000000002984141E0FEEEEFFEEEEFFEE0711EE7711EE771DCE7DC355A58AEDC834B89C2E3D42DD07DBB8C9167A046856CA56EBE4EEE5AC2E0000000000000005A00000000000000000000000000000000000000000000000000000000000000000000000000000000000000019854419841E5B8E40781CF74DABF592817DE48711D778648DEAFB20A0000000000000048656C6C6F20F09F918B000000000000800000000000000000000000000000000000000000000000000000000000000000000000000000000000000001985441989059321905F681BCF47EA33BBF5E6F8298B5440854FDED1000020000000000672B0000CE560000640000000000000029CF5FD941AD25D50100000000000000D600000300504C5445000000FBAF93F70000000000000000264E45B83FCF538B9B58CCF252BD39486A6D1B139300EFD2DB357CE4EC225CB47CE0E4577928B9F42F83453D13819A0E762ADB37BDA14CA6C7B773ACB4DCE3912B332087402CAB4E5C52C3C8F58FF56C09AF15FDF6592492AA5720852F8546E9000000000000000000A0437049F578C2C64B9BEA3E6D19BD2A5B521F8447749B2D6006B188E32A04CD18F8C52D0BFB1CC1C35D359BA2856DC956681E4FF1D72D2E1EEAE280C1F8CCB2B8D1CE44F9760EE0985C5FF32E49E6159B7A249056D2F8549F31BD0477141F0000000000000000188CB4361E1E76F98CF3E4D313F5EAA202582F2823EB8A92AEC3EF71E792090F5BA52F0194C2B04FBB92EF1EE80FEEC0CF2A4D02FC0BD39817F3B8228343797C88493416FE316460124F89EEE6F32A047F59B2937C85F3F3A4B5973465FB71F4";
  public static function createTransaction()
  {
    return new AggregateCompleteTransactionV2(
      network: new NetworkType(NetworkType::TESTNET),
      transactions: [
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TBA6LOHEA6A465G2X5MSQF66JBYR254GJDPK7MQ')),
          mosaics: [],
          message: "Hello 👋"
        ),
        new EmbeddedTransferTransactionV1(
          network: new NetworkType(NetworkType::TESTNET),
          recipientAddress: new UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I')),
          mosaics: [
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('95442763262823'),
              amount: new Amount(100)
            ),
            new UnresolvedMosaic(
              mosaicId: new UnresolvedMosaicId('15358872602548358953'),
              amount: new Amount(1)
            ),
          ],
          message: hex2bin('D600000300504C5445000000FBAF93F7')
        ),
      ],
      signerPublicKey: new PublicKey('38CF4625210D1D38D6E9A8DC901D49D659ADC793C0AE5F488E52DC29A292B5A7'),
      signature: new Signature('BA5888AF968D00F57A9019A58421897EFC4863BEB8EF9B20C765B50B839DCFE4501FB0CD839CEF8EF43F4DD59CEB78BD8A80B011D9E8B577418C6415FFC7FA3D'),
      fee: new Amount('18370164183782063840'),
      deadline: new Timestamp('8207562320463688160'),
      cosignatures: [
        new Cosignature(
          signerPublicKey: new PublicKey('264e45b83fcf538b9b58ccf252bd39486a6d1b139300efd2db357ce4ec225cb4'),
          signature: new Signature('7ce0e4577928b9f42f83453d13819a0e762adb37bda14ca6c7b773acb4dce3912b332087402cab4e5c52c3c8f58ff56c09af15fdf6592492aa5720852f8546e9')
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('00a0437049f578c2c64b9bea3e6d19bd2a5b521f8447749b2d6006b188e32a04'),
          signature: new Signature('cd18f8c52d0bfb1cc1c35d359ba2856dc956681e4ff1d72d2e1eeae280c1f8ccb2b8d1ce44f9760ee0985c5ff32e49e6159b7a249056d2f8549f31bd0477141f')
        ),
        new Cosignature(
          signerPublicKey: new PublicKey('188cb4361e1e76f98cf3e4d313f5eaa202582f2823eb8a92aec3ef71e792090f'),
          signature: new Signature('5ba52f0194c2b04fbb92ef1ee80feec0cf2a4d02fc0bd39817f3b8228343797c88493416fe316460124f89eee6f32a047f59b2937c85f3f3a4b5973465fb71f4')
        ),
      ],
      transactionsHash: new Hash256('DCE7DC355A58AEDC834B89C2E3D42DD07DBB8C9167A046856CA56EBE4EEE5AC2')
    );
  }
}
