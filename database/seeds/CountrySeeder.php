<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    protected $countries = array(
        array('id' => '1','mm_country' => 'AFGHANISTAN'),
        array('id' => '2','mm_country' => 'ALBANIA'),
        array('id' => '3','mm_country' => 'ALGERIA'),
        array('id' => '4','mm_country' => 'AMERICAN SAMOA'),
        array('id' => '5','mm_country' => 'ANDORRA'),
        array('id' => '6','mm_country' => 'ANGOLA'),
        array('id' => '7','mm_country' => 'ANGUILLA'),
        array('id' => '8','mm_country' => 'ANTARCTICA'),
        array('id' => '9','mm_country' => 'ANTIGUA AND BARBUDA'),
        array('id' => '10','mm_country' => 'ARGENTINA'),
        array('id' => '11','mm_country' => 'ARMENIA'),
        array('id' => '12','mm_country' => 'ARUBA'),
        array('id' => '13','mm_country' => 'AUSTRALIA'),
        array('id' => '14','mm_country' => 'AUSTRIA'),
        array('id' => '15','mm_country' => 'AZERBAIJAN'),
        array('id' => '16','mm_country' => 'BAHAMAS'),
        array('id' => '17','mm_country' => 'BAHRAIN'),
        array('id' => '18','mm_country' => 'BANGLADESH'),
        array('id' => '19','mm_country' => 'BARBADOS'),
        array('id' => '20','mm_country' => 'BELARUS'),
        array('id' => '21','mm_country' => 'BELGIUM'),
        array('id' => '22','mm_country' => 'BELIZE'),
        array('id' => '23','mm_country' => 'BENIN'),
        array('id' => '24','mm_country' => 'BERMUDA'),
        array('id' => '25','mm_country' => 'BHUTAN'),
        array('id' => '26','mm_country' => 'BOLIVIA'),
        array('id' => '27','mm_country' => 'BOSNIA AND HERZEGOWINA'),
        array('id' => '28','mm_country' => 'BOTSWANA'),
        array('id' => '29','mm_country' => 'BOUVET ISLAND'),
        array('id' => '30','mm_country' => 'BRAZIL'),
        array('id' => '31','mm_country' => 'BRITISH INDIAN OCEAN TERRITORY'),
        array('id' => '32','mm_country' => 'BRUNEI DARUSSALAM'),
        array('id' => '33','mm_country' => 'BULGARIA'),
        array('id' => '34','mm_country' => 'BURKINA FASO'),
        array('id' => '35','mm_country' => 'BURUNDI'),
        array('id' => '36','mm_country' => 'CAMBODIA'),
        array('id' => '37','mm_country' => 'CAMEROON'),
        array('id' => '38','mm_country' => 'CANADA'),
        array('id' => '39','mm_country' => 'CAPE VERDE'),
        array('id' => '40','mm_country' => 'CAYMAN ISLANDS'),
        array('id' => '41','mm_country' => 'CENTRAL AFRICAN REPUBLIC'),
        array('id' => '42','mm_country' => 'CHAD'),
        array('id' => '43','mm_country' => 'CHILE'),
        array('id' => '44','mm_country' => 'CHINA'),
        array('id' => '45','mm_country' => 'CHRISTMAS ISLAND'),
        array('id' => '46','mm_country' => 'COCOS (KEELING) ISLANDS'),
        array('id' => '47','mm_country' => 'COLOMBIA'),
        array('id' => '48','mm_country' => 'COMOROS'),
        array('id' => '49','mm_country' => 'CONGO'),
        array('id' => '50','mm_country' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE'),
        array('id' => '51','mm_country' => 'COOK ISLANDS'),
        array('id' => '52','mm_country' => 'COSTA RICA'),
        array('id' => '53','mm_country' => 'COTE D`IVOIRE'),
        array('id' => '54','mm_country' => 'CROATIA (local name: Hrvatska)'),
        array('id' => '55','mm_country' => 'CUBA'),
        array('id' => '56','mm_country' => 'CYPRUS'),
        array('id' => '57','mm_country' => 'CZECH REPUBLIC'),
        array('id' => '58','mm_country' => 'DENMARK'),
        array('id' => '59','mm_country' => 'DJIBOUTI'),
        array('id' => '60','mm_country' => 'DOMINICA'),
        array('id' => '61','mm_country' => 'DOMINICAN REPUBLIC'),
        array('id' => '62','mm_country' => 'EAST TIMOR'),
        array('id' => '63','mm_country' => 'ECUADOR'),
        array('id' => '64','mm_country' => 'EGYPT'),
        array('id' => '65','mm_country' => 'EL SALVADOR'),
        array('id' => '66','mm_country' => 'EQUATORIAL GUINEA'),
        array('id' => '67','mm_country' => 'ERITREA'),
        array('id' => '68','mm_country' => 'ESTONIA'),
        array('id' => '69','mm_country' => 'ETHIOPIA'),
        array('id' => '70','mm_country' => 'FALKLAND ISLANDS (MALVINAS)'),
        array('id' => '71','mm_country' => 'FAROE ISLANDS'),
        array('id' => '72','mm_country' => 'FIJI'),
        array('id' => '73','mm_country' => 'FINLAND'),
        array('id' => '74','mm_country' => 'FRANCE'),
        array('id' => '75','mm_country' => 'FRANCE, METROPOLITAN'),
        array('id' => '76','mm_country' => 'FRENCH GUIANA'),
        array('id' => '77','mm_country' => 'FRENCH POLYNESIA'),
        array('id' => '78','mm_country' => 'FRENCH SOUTHERN TERRITORIES'),
        array('id' => '79','mm_country' => 'GABON'),
        array('id' => '80','mm_country' => 'GAMBIA'),
        array('id' => '81','mm_country' => 'GEORGIA'),
        array('id' => '82','mm_country' => 'GERMANY'),
        array('id' => '83','mm_country' => 'GHANA'),
        array('id' => '84','mm_country' => 'GIBRALTAR'),
        array('id' => '85','mm_country' => 'GREECE'),
        array('id' => '86','mm_country' => 'GREENLAND'),
        array('id' => '87','mm_country' => 'GRENADA'),
        array('id' => '88','mm_country' => 'GUADELOUPE'),
        array('id' => '89','mm_country' => 'GUAM'),
        array('id' => '90','mm_country' => 'GUATEMALA'),
        array('id' => '91','mm_country' => 'GUINEA'),
        array('id' => '92','mm_country' => 'GUINEA-BISSAU'),
        array('id' => '93','mm_country' => 'GUYANA'),
        array('id' => '94','mm_country' => 'HAITI'),
        array('id' => '95','mm_country' => 'HEARD AND MC DONALD ISLANDS'),
        array('id' => '96','mm_country' => 'HOLY SEE (VATICAN CITY STATE)'),
        array('id' => '97','mm_country' => 'HONDURAS'),
        array('id' => '98','mm_country' => 'HONG KONG'),
        array('id' => '99','mm_country' => 'HUNGARY'),
        array('id' => '100','mm_country' => 'ICELAND'),
        array('id' => '101','mm_country' => 'INDIA'),
        array('id' => '102','mm_country' => 'INDONESIA'),
        array('id' => '103','mm_country' => 'IRAN (ISLAMIC REPUBLIC OF)'),
        array('id' => '104','mm_country' => 'IRAQ'),
        array('id' => '105','mm_country' => 'IRELAND'),
        array('id' => '106','mm_country' => 'ISRAEL'),
        array('id' => '107','mm_country' => 'ITALY'),
        array('id' => '108','mm_country' => 'JAMAICA'),
        array('id' => '109','mm_country' => 'JAPAN'),
        array('id' => '242','mm_country' => 'JERSEY'),
        array('id' => '110','mm_country' => 'JORDAN'),
        array('id' => '111','mm_country' => 'KAZAKHSTAN'),
        array('id' => '112','mm_country' => 'KENYA'),
        array('id' => '113','mm_country' => 'KIRIBATI'),
        array('id' => '114','mm_country' => 'KOREA, DEMOCRATIC PEOPLE`S REPUBLIC OF'),
        array('id' => '115','mm_country' => 'KOREA, REPUBLIC OF'),
        array('id' => '116','mm_country' => 'KUWAIT'),
        array('id' => '117','mm_country' => 'KYRGYZSTAN'),
        array('id' => '118','mm_country' => 'LAO PEOPLE`S DEMOCRATIC REPUBLIC'),
        array('id' => '119','mm_country' => 'LATVIA'),
        array('id' => '120','mm_country' => 'LEBANON'),
        array('id' => '121','mm_country' => 'LESOTHO'),
        array('id' => '122','mm_country' => 'LIBERIA'),
        array('id' => '123','mm_country' => 'LIBYAN ARAB JAMAHIRIYA'),
        array('id' => '124','mm_country' => 'LIECHTENSTEIN'),
        array('id' => '125','mm_country' => 'LITHUANIA'),
        array('id' => '126','mm_country' => 'LUXEMBOURG'),
        array('id' => '127','mm_country' => 'MACAU'),
        array('id' => '128','mm_country' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF'),
        array('id' => '129','mm_country' => 'MADAGASCAR'),
        array('id' => '130','mm_country' => 'MALAWI'),
        array('id' => '131','mm_country' => 'MALAYSIA'),
        array('id' => '132','mm_country' => 'MALDIVES'),
        array('id' => '133','mm_country' => 'MALI'),
        array('id' => '134','mm_country' => 'MALTA'),
        array('id' => '135','mm_country' => 'MARSHALL ISLANDS'),
        array('id' => '136','mm_country' => 'MARTINIQUE'),
        array('id' => '137','mm_country' => 'MAURITANIA'),
        array('id' => '138','mm_country' => 'MAURITIUS'),
        array('id' => '139','mm_country' => 'MAYOTTE'),
        array('id' => '140','mm_country' => 'MEXICO'),
        array('id' => '141','mm_country' => 'MICRONESIA, FEDERATED STATES OF'),
        array('id' => '142','mm_country' => 'MOLDOVA, REPUBLIC OF'),
        array('id' => '143','mm_country' => 'MONACO'),
        array('id' => '144','mm_country' => 'MONGOLIA'),
        array('id' => '241','mm_country' => 'MONTENEGRO'),
        array('id' => '145','mm_country' => 'MONTSERRAT'),
        array('id' => '146','mm_country' => 'MOROCCO'),
        array('id' => '147','mm_country' => 'MOZAMBIQUE'),
        array('id' => '148','mm_country' => 'MYANMAR'),
        array('id' => '149','mm_country' => 'NAMIBIA'),
        array('id' => '150','mm_country' => 'NAURU'),
        array('id' => '151','mm_country' => 'NEPAL'),
        array('id' => '152','mm_country' => 'NETHERLANDS'),
        array('id' => '153','mm_country' => 'NETHERLANDS ANTILLES'),
        array('id' => '154','mm_country' => 'NEW CALEDONIA'),
        array('id' => '155','mm_country' => 'NEW ZEALAND'),
        array('id' => '156','mm_country' => 'NICARAGUA'),
        array('id' => '157','mm_country' => 'NIGER'),
        array('id' => '158','mm_country' => 'NIGERIA'),
        array('id' => '159','mm_country' => 'NIUE'),
        array('id' => '160','mm_country' => 'NORFOLK ISLAND'),
        array('id' => '161','mm_country' => 'NORTHERN MARIANA ISLANDS'),
        array('id' => '162','mm_country' => 'NORWAY'),
        array('id' => '163','mm_country' => 'OMAN'),
        array('id' => '164','mm_country' => 'PAKISTAN'),
        array('id' => '165','mm_country' => 'PALAU'),
        array('id' => '166','mm_country' => 'PALESTINIAN TERRITORY, OCCUPIED'),
        array('id' => '167','mm_country' => 'PANAMA'),
        array('id' => '168','mm_country' => 'PAPUA NEW GUINEA'),
        array('id' => '169','mm_country' => 'PARAGUAY'),
        array('id' => '170','mm_country' => 'PERU'),
        array('id' => '171','mm_country' => 'PHILIPPINES'),
        array('id' => '172','mm_country' => 'PITCAIRN'),
        array('id' => '173','mm_country' => 'POLAND'),
        array('id' => '174','mm_country' => 'PORTUGAL'),
        array('id' => '175','mm_country' => 'PUERTO RICO'),
        array('id' => '176','mm_country' => 'QATAR'),
        array('id' => '177','mm_country' => 'REUNION'),
        array('id' => '178','mm_country' => 'ROMANIA'),
        array('id' => '179','mm_country' => 'RUSSIAN FEDERATION'),
        array('id' => '180','mm_country' => 'RWANDA'),
        array('id' => '181','mm_country' => 'SAINT KITTS AND NEVIS'),
        array('id' => '182','mm_country' => 'SAINT LUCIA'),
        array('id' => '183','mm_country' => 'SAINT VINCENT AND THE GRENADINES'),
        array('id' => '184','mm_country' => 'SAMOA'),
        array('id' => '185','mm_country' => 'SAN MARINO'),
        array('id' => '186','mm_country' => 'SAO TOME AND PRINCIPE'),
        array('id' => '187','mm_country' => 'SAUDI ARABIA'),
        array('id' => '188','mm_country' => 'SENEGAL'),
        array('id' => '238','mm_country' => 'SERBIA'),
        array('id' => '189','mm_country' => 'SEYCHELLES'),
        array('id' => '190','mm_country' => 'SIERRA LEONE'),
        array('id' => '191','mm_country' => 'SINGAPORE'),
        array('id' => '192','mm_country' => 'SLOVAKIA (Slovak Republic)'),
        array('id' => '193','mm_country' => 'SLOVENIA'),
        array('id' => '194','mm_country' => 'SOLOMON ISLANDS'),
        array('id' => '195','mm_country' => 'SOMALIA'),
        array('id' => '196','mm_country' => 'SOUTH AFRICA'),
        array('id' => '197','mm_country' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'),
        array('id' => '198','mm_country' => 'SPAIN'),
        array('id' => '199','mm_country' => 'SRI LANKA'),
        array('id' => '200','mm_country' => 'ST. HELENA'),
        array('id' => '201','mm_country' => 'ST. PIERRE AND MIQUELON'),
        array('id' => '202','mm_country' => 'SUDAN'),
        array('id' => '203','mm_country' => 'SURINAME'),
        array('id' => '204','mm_country' => 'SVALBARD AND JAN MAYEN ISLANDS'),
        array('id' => '205','mm_country' => 'SWAZILAND'),
        array('id' => '206','mm_country' => 'SWEDEN'),
        array('id' => '207','mm_country' => 'SWITZERLAND'),
        array('id' => '208','mm_country' => 'SYRIAN ARAB REPUBLIC'),
        array('id' => '209','mm_country' => 'TAIWAN, PROVINCE OF CHINA'),
        array('id' => '210','mm_country' => 'TAJIKISTAN'),
        array('id' => '211','mm_country' => 'TANZANIA, UNITED REPUBLIC OF'),
        array('id' => '212','mm_country' => 'THAILAND'),
        array('id' => '213','mm_country' => 'TOGO'),
        array('id' => '214','mm_country' => 'TOKELAU'),
        array('id' => '215','mm_country' => 'TONGA'),
        array('id' => '216','mm_country' => 'TRINIDAD AND TOBAGO'),
        array('id' => '217','mm_country' => 'TUNISIA'),
        array('id' => '218','mm_country' => 'TURKEY'),
        array('id' => '219','mm_country' => 'TURKMENISTAN'),
        array('id' => '220','mm_country' => 'TURKS AND CAICOS ISLANDS'),
        array('id' => '221','mm_country' => 'TUVALU'),
        array('id' => '222','mm_country' => 'UGANDA'),
        array('id' => '223','mm_country' => 'UKRAINE'),
        array('id' => '224','mm_country' => 'UNITED ARAB EMIRATES'),
        array('id' => '225','mm_country' => 'UNITED KINGDOM'),
        array('id' => '226','mm_country' => 'UNITED STATES'),
        array('id' => '227','mm_country' => 'UNITED STATES MINOR OUTLYING ISLANDS'),
        array('id' => '228','mm_country' => 'URUGUAY'),
        array('id' => '229','mm_country' => 'UZBEKISTAN'),
        array('id' => '230','mm_country' => 'VANUATU'),
        array('id' => '231','mm_country' => 'VENEZUELA'),
        array('id' => '232','mm_country' => 'VIET NAM'),
        array('id' => '233','mm_country' => 'VIRGIN ISLANDS (BRITISH)'),
        array('id' => '234','mm_country' => 'VIRGIN ISLANDS (U.S.)'),
        array('id' => '235','mm_country' => 'WALLIS AND FUTUNA ISLANDS'),
        array('id' => '236','mm_country' => 'WESTERN SAHARA'),
        array('id' => '237','mm_country' => 'YEMEN'),
        array('id' => '239','mm_country' => 'ZAMBIA'),
        array('id' => '240','mm_country' => 'ZIMBABWE')
      );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            foreach($this->countries as $country){
                $model = Country::firstOrNew([
                    'name' => $country['mm_country']
                ]);
                $model->save();
            }
        }catch(Illuminate\Database\QueryException $e){
            return false;
        }
    }
}