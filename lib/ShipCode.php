<?php

/**
 * Class ShipCode
 * @method static array shipCodeList()
 */
class ShipCode
{
    static private $shipCodeList = [
        'CJ대한통운'              => ['code' => '04', 'name' => 'CJ대한통운'],
        '우체국택배'               => ['code' => '01', 'name' => '우체국택배'],
        '한진택배'                => ['code' => '05', 'name' => '한진택배'],
        '롯데택배'                => ['code' => '08', 'name' => '롯데택배'],
        '로젠택배'                => ['code' => '06', 'name' => '로젠택배'],
        '홈픽택배'                => ['code' => '54', 'name' => '홈픽택배'],
        'CVSnet 편의점택배'        => ['code' => '24', 'name' => 'CVSnet 편의점택배'],
        'CU 편의점택배'            => ['code' => '46', 'name' => 'CU 편의점택배'],
        '경동택배'                => ['code' => '23', 'name' => '경동택배'],
        '대신택배'                => ['code' => '22', 'name' => '대신택배'],
        '일양로지스'               => ['code' => '11', 'name' => '일양로지스'],
        '합동택배'                => ['code' => '32', 'name' => '합동택배'],
        '건영택배'                => ['code' => '18', 'name' => '건영택배'],
        '천일택배'                => ['code' => '17', 'name' => '천일택배'],
        '한덱스'                 => ['code' => '20', 'name' => '한덱스'],
        '한의사랑택배'              => ['code' => '16', 'name' => '한의사랑택배'],
        'EMS'                 => ['code' => '12', 'name' => 'EMS'],
        'DHL'                 => ['code' => '13', 'name' => 'DHL'],
        'TNT Express'         => ['code' => '25', 'name' => 'TNT Express'],
        'UPS'                 => ['code' => '14', 'name' => 'UPS'],
        'Fedex'               => ['code' => '21', 'name' => 'Fedex'],
        'USPS'                => ['code' => '26', 'name' => 'USPS'],
        'i-Parcel'            => ['code' => '34', 'name' => 'i-Parcel'],
        'DHL Global Mail'     => ['code' => '33', 'name' => 'DHL Global Mail'],
        '판토스'                 => ['code' => '37', 'name' => '판토스'],
        '에어보이익스프레스'           => ['code' => '29', 'name' => '에어보이익스프레스'],
        'GSMNtoN'             => ['code' => '28', 'name' => 'GSMNtoN'],
        'ECMS Express'        => ['code' => '38', 'name' => 'ECMS Express'],
        'KGL네트웍스'             => ['code' => '30', 'name' => 'KGL네트웍스'],
        '굿투럭'                 => ['code' => '40', 'name' => '굿투럭'],
        '호남택배'                => ['code' => '45', 'name' => '호남택배'],
        'GSI Express'         => ['code' => '41', 'name' => 'GSI Express'],
        'SLX택배'               => ['code' => '44', 'name' => 'SLX택배'],
        '우리한방택배'              => ['code' => '47', 'name' => '우리한방택배'],
        '세방'                  => ['code' => '52', 'name' => '세방'],
        'KGB택배'               => ['code' => '56', 'name' => 'KGB택배'],
        'Cway Express'        => ['code' => '57', 'name' => 'Cway Express'],
        'YJS글로벌(영국)'          => ['code' => '60', 'name' => 'YJS글로벌(영국)'],
        '성원글로벌카고'             => ['code' => '51', 'name' => '성원글로벌카고'],
        '홈이노베이션로지스'           => ['code' => '62', 'name' => '홈이노베이션로지스'],
        '은하쉬핑'                => ['code' => '63', 'name' => '은하쉬핑'],
        'Giant Network Group' => ['code' => '66', 'name' => 'Giant Network Group'],
        'FLF퍼레버택배'            => ['code' => '64', 'name' => 'FLF퍼레버택배'],
        '농협택배'                => ['code' => '53', 'name' => '농협택배'],
        'YJS글로벌(월드)'          => ['code' => '65', 'name' => 'YJS글로벌(월드)'],
        '디디로지스'               => ['code' => '67', 'name' => '디디로지스'],
        '대림통운'                => ['code' => '69', 'name' => '대림통운'],
        'LOTOS CORPORATION'   => ['code' => '70', 'name' => 'LOTOS CORPORATION'],
        '애니트랙'                => ['code' => '43', 'name' => '애니트랙'],
        '성훈물류'                => ['code' => '72', 'name' => '성훈물류'],
        'IK물류'                => ['code' => '71', 'name' => 'IK물류'],
        '엘서비스'                => ['code' => '80', 'name' => '엘서비스'],
        '티피엠코리아㈜ 용달이 특송'      => ['code' => '79', 'name' => '티피엠코리아㈜ 용달이 특송'],
        '제이로지스트'              => ['code' => '83', 'name' => '제이로지스트'],
        '제니엘시스템'              => ['code' => '81', 'name' => '제니엘시스템'],
        '스마트로지스'              => ['code' => '84', 'name' => '스마트로지스'],
        '이투마스(ETOMARS)'       => ['code' => '87', 'name' => '이투마스(ETOMARS)'],
        '풀앳홈'                 => ['code' => '85', 'name' => '풀앳홈'],
        '프레시솔루션'              => ['code' => '82', 'name' => '프레시솔루션'],
        '큐런택배'                => ['code' => '88', 'name' => '큐런택배'],
        '두발히어로'               => ['code' => '89', 'name' => '두발히어로'],
        '하이브시티'               => ['code' => '91', 'name' => '하이브시티'],
        '오늘의픽업'               => ['code' => '94', 'name' => '오늘의픽업'],
        '팬스타국제특송(PIEX)'       => ['code' => '93', 'name' => '팬스타국제특송(PIEX)'],
        '지니고 당일특급'            => ['code' => '92', 'name' => '지니고 당일특급'],
    ];

    public static function __callStatic($name, $args)
    {
        if ($name == 'shipCodeList') {
            return self::$shipCodeList;
        }
    }
}