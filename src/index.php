<?php

namespace SymbolSdk;

require_once __DIR__ . '/../vendor/autoload.php';
require_once '/Users/matsukawatoshiya/Desktop/php/vendor/autoload.php';

use DateTime;
use PHPUnit\Event\Facade;
use SymbolSdk\Bip32\Bip32;
use SymbolSdk\Symbol\KeyPair;
use SymbolSdk\Symbol\Metadata;
use SymbolSdk\Symbol\Address;
use SymbolSdk\Symbol\Models\NamespaceId;

use SymbolSdk\Utils\Converter;
use SymbolSdk\Symbol\Verifier;
use SymbolSdk\Impl\External\TweetNaclFastSymbol;
use SymbolSdk\SharedKey;
use SymbolSdk\Symbol\Models;
use SymbolSdk\Symbol\Models\Timestamp;
use SymbolSdk\Symbol\Models\UnresolvedAddress;
use SymbolRestClient\Api\AccountRoutesApi;
use SymbolSdk\CryptoTypes\Hash256;
use SymbolSdk\Symbol\Models\MosaicDefinitionTransactionV1;
use SymbolSdk\Symbol\IdGenerator;
use SymbolSdk\Symbol\Models\BlockDuration;
use SymbolSdk\Symbol\Models\MosaicFlags;
use SymbolSdk\Symbol\Models\MosaicId;
use SymbolSdk\Symbol\Models\MosaicNonce;
use SymbolSdk\Symbol\Models\MosaicSupplyChangeAction;

use SymbolSdk\Facade\SymbolFacade;
use SymbolSdk\CryptoTypes\PrivateKey;

use SymbolSdk\Symbol\Models\TransferTransactionV1;
use SymbolSdk\Symbol\Models\UnresolvedMosaic;
use SymbolSdk\Symbol\Models\UnresolvedMosaicId;
use SymbolSdk\Symbol\Models\PublicKey;
use SymbolSdk\Symbol\Models\Amount;
use SymbolSdk\Symbol\Models\NetworkType;

/* use SymbolSdk\Symbol\SharedKeySymbol;
use SymbolSdk\Cipher\AesGcmCipher;
use SymbolSdk\Symbol\MessageEncoder;
use SymbolSdk\Impl\CipherHelpers;
use SymbolSdk\BIP39\BIP39;
use SymbolSdk\CryptoTypes\Signature;
use SymbolSdk\Symbol\Models\TransactionFactory;
use SymbolSdk\Symbol\VotingKeysGenerator; */

$facade = new SymbolFacade('testnet');
$alice = $facade->createAccount(new PrivateKey('5DB8324E7EB83E7665D500B014283260EF312139034E86DFB7EE736503EAEC02'));
$bob = $facade->createPublicAccount(new PublicKey('4C4BD7F8E1E1AC61DB817089F9416A7EDC18339F06CDC851495B271533FAD13B'));
$mosaicId = IdGenerator::generateMosaicId($alice->address);

$transferTransaction = new TransferTransactionV1(
  network: new NetworkType(NetworkType::TESTNET),
  signerPublicKey: $alice->publicKey,
  recipientAddress: $bob->address,
  mosaics: [
    new UnresolvedMosaic(
      mosaicId: new UnresolvedMosaicId(),
      amount: new Amount(1)
    )
  ],
  message: "hello, symbol!"
);

$facade->setMaxFee($transferTransaction, 100);
$signature = $alice->signTransaction($transferTransaction);
$payload = $facade->attachSignature($transferTransaction, $signature);

var_dump(bin2hex($facade->hashTransaction($transferTransaction)->binaryData));

// 72020000000000006230367CBE456B4BB32B9CBBDC94CEA2DB15BB4548F267E4FEBDC72C6FFEBA8EB861C6BA7367CC51C3321C8B85EF515E583DD8A1300121DFF3B4A82864B3546D6AAFD4B7C899B50080BA445C3D17D8D56724C1F460AA3B58DE73E58E555009AC000000000198438048AC0B0000000000E0711EE7711EE77112731ED32F09000031EDB0B110FB7116BD835CFE9206EDC6033C466DE213F5F28B2619A74DF4022459DE3A1EBE9B8F4E78B00AEBC6BF122CD846AF0FC2A123F7012FDF882F73476939A620B61A07FC8FA321229664B79507491CB2272CAF0CD4F0EBA918A5AD4E2F9BFF9C6B0BF183BC461B6E9B756CF4350000000000000000000000000000000000000000000000000000000000000000691B47DD6DFC468883A48E73FFD22FCBA141A2371AD09376357E547C55C5C24C947B5EFB1C5FAF95BF294A6E020830203CFB9CCE6597E6ACF3C16C06CCAEB87398FFA418508A3B022EF3491FC8254DEB7EC3EBA65B52DE1DBB1E00000E000000DE01000000000000A2432277446A0000DBDC925119781952C316DE84B87DAC640F64B899E191A7190EBCFDDED482A75DCA000000000000006230367CBE456B4BB32B9CBBDC94CEA2DB15BB4548F267E4FEBDC72C6FFEBA8EB861C6BA7367CC51C3321C8B85EF515E583DD8A1300121DFF3B4A82864B3546D6AAFD4B7C899B50080BA445C3D17D8D56724C1F460AA3B58DE73E58E555009AC000000000 1985441E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0A00020000000000671305C6390B00002C01000000000000672B0000CE560000640000000000000048656C6C6F20F09F918B
// 72020000000000006230367CBE456B4BB32B9CBBDC94CEA2DB15BB4548F267E4FEBDC72C6FFEBA8EB861C6BA7367CC51C3321C8B85EF515E583DD8A1300121DFF3B4A82864B3546D6AAFD4B7C899B50080BA445C3D17D8D56724C1F460AA3B58DE73E58E555009AC000000000198438048AC0B0000000000E0711EE7711EE77112731ED32F09000031EDB0B110FB7116BD835CFE9206EDC6033C466DE213F5F28B2619A74DF4022459DE3A1EBE9B8F4E78B00AEBC6BF122CD846AF0FC2A123F7012FDF882F73476939A620B61A07FC8FA321229664B79507491CB2272CAF0CD4F0EBA918A5AD4E2F9BFF9C6B0BF183BC461B6E9B756CF4350000000000000000000000000000000000000000000000000000000000000000691B47DD6DFC468883A48E73FFD22FCBA141A2371AD09376357E547C55C5C24C947B5EFB1C5FAF95BF294A6E020830203CFB9CCE6597E6ACF3C16C06CCAEB87398FFA418508A3B022EF3491FC8254DEB7EC3EBA65B52DE1DBB1E00000E000000DE01000000000000A2432277446A0000DBDC925119781952C316DE84B87DAC640F64B899E191A7190EBCFDDED482A75DCA000000000000006230367CBE456B4BB32B9CBBDC94CEA2DB15BB4548F267E4FEBDC72C6FFEBA8EB861C6BA7367CC51C3321C8B85EF515E583DD8A1300121DFF3B4A82864B3546D6AAFD4B7C899B50080BA445C3D17D8D56724C1F460AA3B58DE73E58E555009AC000000000 1005441E0FEEEEFFEEEEFFEE0711EE7711EE771989059321905F681BCF47EA33BBF5E6F8298B5440854FDED0A00020000000000671305C6390B00002C01000000000000672B0000CE560000640000000000000048656C6C6F20F09F918B
/* $tx =  new Models\AccountAddressRestrictionTransactionV1(
      network: new Models\NetworkType(Models\NetworkType::TESTNET),
      restrictionFlags: new Models\AccountRestrictionFlags(
        Models\AccountRestrictionFlags::ADDRESS
          + Models\AccountRestrictionFlags::OUTGOING
          + Models\AccountRestrictionFlags::BLOCK
      ),
      restrictionAdditions: [new Models\UnresolvedAddress(('TCIFSMQZAX3IDPHUP2RTXP26N6BJRNKEBBKP33I'))],
      restrictionDeletions: null,
      signerPublicKey: new Models\PublicKey('13B00FBB13C7644E13BD786F0EA4F97820022A2606759793A5D3525A03F92A2F'),
      fee: new Models\Amount('18370164183782063840'),
      deadline: new Models\Timestamp('8207562320463688160')
    );
    var_dump(bin2hex($tx->serialize()));

    // 7C6B19CD7D55105C025261FF5CA92D3954290F8FC5DB713A8541102F9488AAE58D0AB7A0DA5A85A8D76393E51CA8048FFB070150F75E244AC8D9DE9B81E5AA0C
    // 7c6b19cd7d55105c025261ff5ca92d3954290f8fc5db713a8541102f9488aae58d0ab7a0da5a85a8d76393e51ca8048ffb070150f75e244ac8d9de9b81e5aa0c
$account = $facade->createAccount(new PrivateKey('5DB8324E7EB83E7665D500B014283260EF312139034E86DFB7EE736503EAEC02'));
$signature = $account->signTransaction($tx);
var_dump(bin2hex($signature->binaryData));
$facade->attachSignature($tx, $signature);
var_dump(bin2hex($tx->serialize()));
var_dump(bin2hex($signature->binaryData));
var_dump($facade->verifyTransaction($tx, $signature));
 */

// 0D000000000000002200000000000000000000000000000000000000000000004CB5ABF6AD79FBF5ABBCCAFCC269D85CD2651ED4B885B5869F241AEDF0A5BA290D000000000000002200000000000000D93D6D318C47BE61CCCE535E11D46A41CD449A794B688566726C17FE6117B9BE637C42ECF3823D8E17B36E3F63D10CC147373D93E72A44AF37D1FA9E5886903736C013769D0CC1AE361ABB5D98B919340ED03E8A096AEA495F30A374D0CC6D062ABB3030CDE6BE3FDC66845B5AFCA7B0A4F907480A8E3F614C1B4F2E5C3F8F80F3C736EF26644EF746DA324ED959B1BE9A5D4F5E4B7CA264EE7B5C7EA506E7E9B87C493241A0F60DAEEAF646922E0861254729A1C01E2C80849C4226571C6E071A0F8AA731F6A33BA7ADC3BB3DE01E45E0F046187BBDF624B7600ABB41A6F327C1BB3A5B12AA1F10B17607956AB2285D03586AA82CEDFCC2043B22B7C63A32445F7B6F8F4EAB98CE1C84176F5A1698D6499E8F6829DD1726C6ECBCAD1FF686009F488B75B693635DC3797546A0D8F451297450CC8423EA0BAFD69752A92E36BDF0615D9F7982FE5E23EF4F391E752ED380764C717DF3B67E9C45B9E55003E167CD45A4EE29198FC5797A95FCC14FF3DFF629A5B84F64BC1359E8493A3AF02306A62B4683CF68E5174C05FFEE3C19C46E481B8D4F20384D9102445E74E1C2B2C6B99E94A9374B7DD1E267346EE90BC3674EC7CD23269DE45A85AED168D4BE56A0485CA083AA6E209D7D8BED6792D6FCE89CABBFB08372FDC267AF79C488D1390530C5DEF9691FD2D64A7E6D04309C2A2470DCFED3C15213535C1B6DF196EE3C77D6EC51FFFEFC2962866E1BF587EE996E8459F19864BC842218A77D867FBD7B000733716C31A80EA966A96DDF3DB91AA8CDA74CFA5CA7148F0732600D7E742D09069BE25C7B7F4FB341B751B8B04C5D0361AC83D479EF8A8D9063982185B9EBB3320CA4896480CA4DE07BF66509C9715AD81E0E010D6CCC8F5416D4D1D61E4AEF2012795B53255B81F9D9F7120D32B9F398AD2412CC771138E1ADBCFA287A810D4D1DE53C31CF566B336698CD1B0B93BA8465AFA0C8BFDF2BF8D82472DCE64FF21D8B338195C8C010F149BF6EDFF2D9312AAE4C9B3B46E290FA53A89E581525378244AEAEC1F2CB1A120F3FF8E4D26042A998E3030CE0D03FDD06C3FD2CBB9002635DCB7836CB2C459556881B9369B00648E0E799D16CB67D8707293C3138296447CA4291784E2C176F90197C94A133170F8875419D755040C8FA4275B560E3D339A5637C07A9B915FE93D539400ACA70E9B202F2ED56620E49D7CA59EB5E4206E42D831ED48C7F6FFD0960632D2734302F51EE909EDC7A3CEAE3BBE77329F20B00302849C503131EB95674E7D5A839E00F5F5A35A8E95327AC05DAF7464E4FB5EA8A5B72248408E1735D0DD6405DF18ED46949020224EF87496F1FDD864E3A0462416AFD25C66C070AE6FDE59BAEB881A653E31CD24D3EE91376CD08DEB99B04C66DFE0B7142342012055301405F5A99CD0F5DA25E9D7DF8FB9EFD2D8EE622D7AAFAB92C1AC3881D26272626974C22A435A0E562D505250E5D95F3260FC98E092D044E926E8AED1DE66FD313F36A88F8BDF6351AA3C1711523367E58FB67CE15C7B58C73EF776A6EABAE4FC7549E0DA66E68DE819AE2A424F9DC6C52CB9A7317387454158C6E09AC8F9DD7790F3E224FF7E0CB2F3EF60BCF0154D598C47B0805989DE2C76DCFF8A0B2D7E0C3D86754A6ECCE41E1B6F1C90C44D041018C340646C0D1312F6E3AA9DAA56932AA31B9ECD06295431944EF2E69EEA38DC08B96A3FC9133FDA7C57D474C21F19406B9790D609D45EC109445C1BBE69F5FCE9DA83502E735A3850344733BD7917443CCB45A0084BDB78CA96B4096211943C40AD45EA820F1B24E7546049061A7F35F888EA053EBE3B3071D7B68DFD33E10E2BE3732750DC5B66693B8E5AB013CB0BBE7289F7A0A2A4BA8118F2F9BBCF4A945A05C4E01CFC26B3F7F0CD7CD7F22412AA8ADAF94147BCD99DC078E49481EE893B1AFCAE298AC692E1AAB43A1C14A3C8243418EA971E54F66E1F7C98882CC52FA9995873B5827B6095811FBB39BE2F8C753D94F44FB9D8F6347D55614D822324BFF4E7D0BB3A365370B1DE09CF49032A837B5619B0A2397D1700C50A542E4E6DFF15D0A5F585D39A5735E59878CC34DF48DDFE29611DDE3FB3C5659B5DE9F902B56092B0F9C01368A365BE025F435B3F1E44FB3A3534AEC55B1625833A9EF4C09EE9DC701DE1198F274D231FDC334D85278C0BEFF1ADFB32ABE4E7D8DEC1A107E36C16B5E4AC2996B89FF032EDE7613F75B25A9D0671F58056A5C78AD4DBAE87C45D8792CECA74AD3528148171D25D42340A020BDCD8FE9DBB9DAB87766517294C1CA180408925E870A4B95F533294506C2A115257F2E06B4A7EB2B8FB8188C6A0E2D2C5599A8D21F3EA6AF837011B951EAA5F2011461C8364E9885BECE1908E3EE60E7E643B983B4550037E4A6FE43FB5FA3E7864AAFC0A07EBC9142128A0FEF9566220A81B003AAB599427E7A630E05EEEB6CA94EFA156EDBAC744157952EBF1804230C6D6332AD25018403AE057A1148F50713310553FF37591652354CB9A668EB1344942F6B440CDB9A433B30DD13761FCDDB95DE00A2F4B06756BBC232832CA027013FF364A397DA3AB8B6506B48645FABB3E51DF8CAC1B3C82B3393B863E6B72B4EE7D14FDDBC8D67A8B7BE156EBC15D1DE1AB8627875151B70FA4E4233C277D792808996EADCFA02DAC9F1035B66621E31325DA37F7928D406A41BD1BF7F8EBC0A2C5C22742C11A0E54A3D66C536ED3E2AD0AA93FD1DF9C66506D930AA2AC0F946BC2B28E0497C728793F1DB9AC8AADBA82E261E225F096DBB4485DC4E92E5974B80A82C0AC7E413B9D34F8B4CE44F7B457C2EAA739813C19952B199164D2B6F03595B2F9560FE291E45DB28694DF2713777B1DA779415FE509FADA5F2361AA0DBF72621D701D9A9BFA9FD8F56496CA8D436292CFE85B8B798CA34DC2E6ADCFDFEC5ECACD1ED9F8979DE09BD5922F1D2E6B27CA1ABCE4CC00EFB5DA17F96C6E90C
// 0D000000000000002200000000000000FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF4CB5ABF6AD79FBF5ABBCCAFCC269D85CD2651ED4B885B5869F241AEDF0A5BA290D0000000000000022000000000000000000000000000000000000000000000000000000000000000000000000000003745E8481844EF3E0CB6B23B3B55A95EE0DD233D4472EFB591BA6210E758E0577FB3C487C9C9C92B1D8B0893364AAD0C98167713B739FBB2CAA8E01CA1E7CF600000000000000000000000000000000000000000000000000000000000000000536D91AC8EB78B1AF20B2576BE6E267B6CE48A69121937346D785745862881ED21C2FDB43D00A8DD5C517C5C78CB5A6F36A27DC88E45A1C12F7855EA3E9AF9408000000000000000000000000000000000000000000000000000000000000000870F396B7F93E7A221501E21DFD27A4843E87BA779B0029E540A36F89755B51AA405B8FE50456745E86C7C814276D245AAEDD2CF419118D305C92F03402869402000000000000000000000000000000000000000000000000000000000000000D34FFC8BCE0520AC55966B354930FEED16D517BEF17C14C340CF3DD967748DB2963EDD6658BB28D7A797AC25D94582B30D5A9F5FB98E44673A763DDD77B58FF0700000000000000000000000000000000000000000000000000000000000000150761EF44B6F00D9B49F9A056C35B65AAD81F708498C2892B28C870A9B8F5A1812EE7913B5D864EDC6960B2EA576F2576909E0992FA75C83AA785853C25A47C0E0000000000000000000000000000000000000000000000000000000000000022F75D71A44E9DEB35D919D691349CC31DF2931ED679313838E827A3410DC1D252D0B08FA725FA366E0E0E2079D8866B267BE7BFE7A9EE715A2379F34767DBE60D00000000000000000000000000000000000000000000000000000000000000378912C364CD475C6E5BA59DCC4C9A35004E4E902748F9724C145725C051869F2E6B7E8AA9B3E305558D2891227E365F780B11B2E692A68173FAC7895378BEFF03000000000000000000000000000000000000000000000000000000000000005928FCA21C7FABF3E194E8435C41B9352E24EF2EA6F45D08A6E4133734941C2A521E0382FDCE9AEC7987F52F80D3BCA92337A445262C4AAEE7C5C97E7A76AEBA0000000000000000000000000000000000000000000000000000000000000000903B4EFBBA4A926AED1DB317B6DE0FBBC5E70B99E885B4937A3AAE63252A3E4164B4A98BAC77890460611AF6B38AAA7AC67168CC473C5B763AEA1B32F2036DD70800000000000000000000000000000000000000000000000000000000000000E97A7F0ECFE7FB752D2B97345B437A14232B70F5EC93A9413225DCE4C634B60991DEC0EF49E53E3561569709DDCE244185D2EF676D69E4D5F380BD0AED884C8504000000000000000000000000000000000000000000000000000000000000007968ECC24AF8312888E7FDD358C55DBE70523304E5A2723D3C6627AD0525F07B24CC586626E3ADD8F0D96F7E9B3EF2C18DA53D1FD4E637AC6FE7E9A99DF234F00D0000000000000000000000000000000000000000000000000000000000000062F3430B40025BB4FDD57E6EF557CD340A2EDB9D2CEC26FC61D9427B22BBCDD3EA6584DDD3B71D38BD0A5CC42D9D131BDCF982FEF21BFF521D889456F40C9CCE0400000000000000000000000000000000000000000000000000000000000000DB16E586D65CF3253CE72F57A720885E4F71BCB6F66662B853B14E7A3F9B4713C2D91A3408DD6A8CED8876C781F5155CC5647C2BBBA4BCA869CCDE14ABC0668002000000000000000000000000000000000000000000000000000000000000003DCE7BE3B0D78A155F0C8C1A7198C620A4E8B23839B3C55F2559053945A3667F63896785B45626A060E91C25BE0F1CDBF2DD739A8C4B6BE8D753081CB1E449C30B000000000000000000000000000000000000000000000000000000000000001817170BF187A5E6972BAF4858C4BCB58EE698F3722BD5D9403AF7BF93DC380062E79C0CDA9AF08154990F15F3A97FA237E760EFD456C1C309F94348CCBE140A0E00000000000000000000000000000000000000000000000000000000000000559BAE65AC572C4E034B9A0F11A9E7DED83ABB7E1549BF0563781A7602E2CB9B3D5B5AA784DF1F9B898896F3E3D5BFC7993934316156D2C41ED1176C2BD2397D0E000000000000000000000000000000000000000000000000000000000000006DE2314A2D851AFAC51FB455BBA223355FEB9292D8C1B8F4B8ADC59D8A6B827B776DD6061D891D93E8C924F42DA6EC430FCB158B557180D2AF1D02D27224022F0D00000000000000000000000000000000000000000000000000000000000000C23CC4DE002506742812D45AE0343586AA816F2CD6C118B76EC3FA3C2D4273840424295981B808BF1CAB489E8BB1FBA6AB70D7C35A9B68D7DB19DC9EE2BF7F9206000000000000000000000000000000000000000000000000000000000000002F4801EA571AC8C324A4B77922E3484F33B8A47F18301260A3BDC4E1D25EB66B042E12D922787C081BA382BF00D61E3EC88A5972625F6363921C165AB37A58C60200000000000000000000000000000000000000000000000000000000000000F194DC9D492B6E1E810A9931D588490B8FF216C26609241C7BECC5744B702EA36715571399D69C7DB4CC02A482AF37B853A6A5FEE9761688E61E33DB4029EA700F000000000000000000000000000000000000000000000000000000000000002019C8643B2EAEB25F0E92744804647378855E72FDB6DB471C52FCF0E99F8BF7C0EE611A2D4D0802FD18CD54874FA0E01EB939BA214C8E716653DB27800DFA0B0F0000000000000000000000000000000000000000000000000000000000000011A4710BFCE396FACB91ADF88FFEB079A3D5CE83B63E15B535B7C296AE0AC0645F52D2C0576A88F2C376CA61614CB75CDD5B45DE7CA72F6AB8C77F8AF5F0E36700
