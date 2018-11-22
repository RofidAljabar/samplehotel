<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code




define('CONSTANT',array(
    "bankList" => array (
        0 =>
            array (
                'name' => 'BANK BRI',
                'code' => '002',
            ),
        1 =>
            array (
                'name' => 'BANK EKSPOR INDONESIA',
                'code' => '003',
            ),
        2 =>
            array (
                'name' => 'BANK MANDIRI',
                'code' => '008',
            ),
        3 =>
            array (
                'name' => 'BANK BNI',
                'code' => '009',
            ),
        4 =>
            array (
                'name' => 'BANK DANAMON',
                'code' => '011',
            ),
        5 =>
            array (
                'name' => 'PERMATA BANK',
                'code' => '013',
            ),
        6 =>
            array (
                'name' => 'BANK BCA',
                'code' => '014',
            ),
        7 =>
            array (
                'name' => 'BANK BII',
                'code' => '016',
            ),
        8 =>
            array (
                'name' => 'BANK PANIN',
                'code' => '019',
            ),
        9 =>
            array (
                'name' => 'BANK ARTA NIAGA KENCANA',
                'code' => '020',
            ),
        10 =>
            array (
                'name' => 'BANK NIAGA',
                'code' => '022',
            ),
        11 =>
            array (
                'name' => 'BANK BUANA IND',
                'code' => '023',
            ),
        12 =>
            array (
                'name' => 'BANK LIPPO',
                'code' => '026',
            ),
        13 =>
            array (
                'name' => 'BANK NISP',
                'code' => '028',
            ),
        14 =>
            array (
                'name' => 'AMERICAN EXPRESS BANK LTD',
                'code' => '030',
            ),
        15 =>
            array (
                'name' => 'CITIBANK N.A.',
                'code' => '031',
            ),
        16 =>
            array (
                'name' => 'JP. MORGAN CHASE BANK, N.A.',
                'code' => '032',
            ),
        17 =>
            array (
                'name' => 'BANK OF AMERICA, N.A',
                'code' => '033',
            ),
        18 =>
            array (
                'name' => 'ING INDONESIA BANK',
                'code' => '034',
            ),
        19 =>
            array (
                'name' => 'BANK MULTICOR TBK.',
                'code' => '036',
            ),
        20 =>
            array (
                'name' => 'BANK ARTHA GRAHA',
                'code' => '037',
            ),
        21 =>
            array (
                'name' => 'BANK CREDIT AGRICOLE INDOSUEZ',
                'code' => '039',
            ),
        22 =>
            array (
                'name' => 'THE BANGKOK BANK COMP. LTD',
                'code' => '040',
            ),
        23 =>
            array (
                'name' => 'THE HONGKONG & SHANGHAI B.C.',
                'code' => '041',
            ),
        24 =>
            array (
                'name' => 'THE BANK OF TOKYO MITSUBISHI UFJ LTD',
                'code' => '042',
            ),
        25 =>
            array (
                'name' => 'BANK SUMITOMO MITSUI INDONESIA',
                'code' => '045',
            ),
        26 =>
            array (
                'name' => 'BANK DBS INDONESIA',
                'code' => '046',
            ),
        27 =>
            array (
                'name' => 'BANK RESONA PERDANIA',
                'code' => '047',
            ),
        28 =>
            array (
                'name' => 'BANK MIZUHO INDONESIA',
                'code' => '048',
            ),
        29 =>
            array (
                'name' => 'STANDARD CHARTERED BANK',
                'code' => '050',
            ),
        30 =>
            array (
                'name' => 'BANK ABN AMRO',
                'code' => '052',
            ),
        31 =>
            array (
                'name' => 'BANK KEPPEL TATLEE BUANA',
                'code' => '053',
            ),
        32 =>
            array (
                'name' => 'BANK CAPITAL INDONESIA, TBK.',
                'code' => '054',
            ),
        33 =>
            array (
                'name' => 'BANK BNP PARIBAS INDONESIA',
                'code' => '057',
            ),
        34 =>
            array (
                'name' => 'BANK UOB INDONESIA',
                'code' => '058',
            ),
        35 =>
            array (
                'name' => 'KOREA EXCHANGE BANK DANAMON',
                'code' => '059',
            ),
        36 =>
            array (
                'name' => 'RABOBANK INTERNASIONAL INDONESIA',
                'code' => '060',
            ),
        37 =>
            array (
                'name' => 'ANZ PANIN BANK',
                'code' => '061',
            ),
        38 =>
            array (
                'name' => 'DEUTSCHE BANK AG.',
                'code' => '067',
            ),
        39 =>
            array (
                'name' => 'BANK WOORI INDONESIA',
                'code' => '068',
            ),
        40 =>
            array (
                'name' => 'BANK OF CHINA LIMITED',
                'code' => '069',
            ),
        41 =>
            array (
                'name' => 'BANK BUMI ARTA',
                'code' => '076',
            ),
        42 =>
            array (
                'name' => 'BANK EKONOMI',
                'code' => '087',
            ),
        43 =>
            array (
                'name' => 'BANK ANTARDAERAH',
                'code' => '088',
            ),
        44 =>
            array (
                'name' => 'BANK HAGA',
                'code' => '089',
            ),
        45 =>
            array (
                'name' => 'BANK IFI',
                'code' => '093',
            ),
        46 =>
            array (
                'name' => 'BANK CENTURY, TBK.',
                'code' => '095',
            ),
        47 =>
            array (
                'name' => 'BANK MAYAPADA',
                'code' => '097',
            ),
        48 =>
            array (
                'name' => 'BANK JABAR',
                'code' => '110',
            ),
        49 =>
            array (
                'name' => 'BANK DKI',
                'code' => '111',
            ),
        50 =>
            array (
                'name' => 'BPD DIY',
                'code' => '112',
            ),
        51 =>
            array (
                'name' => 'BANK JATENG',
                'code' => '113',
            ),
        52 =>
            array (
                'name' => 'BANK JATIM',
                'code' => '114',
            ),
        53 =>
            array (
                'name' => 'BPD JAMBI',
                'code' => '115',
            ),
        54 =>
            array (
                'name' => 'BPD ACEH',
                'code' => '116',
            ),
        55 =>
            array (
                'name' => 'BANK SUMUT',
                'code' => '117',
            ),
        56 =>
            array (
                'name' => 'BANK NAGARI',
                'code' => '118',
            ),
        57 =>
            array (
                'name' => 'BANK RIAU',
                'code' => '119',
            ),
        58 =>
            array (
                'name' => 'BANK SUMSEL',
                'code' => '120',
            ),
        59 =>
            array (
                'name' => 'BANK LAMPUNG',
                'code' => '121',
            ),
        60 =>
            array (
                'name' => 'BPD KALSEL',
                'code' => '122',
            ),
        61 =>
            array (
                'name' => 'BPD KALIMANTAN BARAT',
                'code' => '123',
            ),
        62 =>
            array (
                'name' => 'BPD KALTIM',
                'code' => '124',
            ),
        63 =>
            array (
                'name' => 'BPD KALTENG',
                'code' => '125',
            ),
        64 =>
            array (
                'name' => 'BPD SULSEL',
                'code' => '126',
            ),
        65 =>
            array (
                'name' => 'BANK SULUT',
                'code' => '127',
            ),
        66 =>
            array (
                'name' => 'BPD NTB',
                'code' => '128',
            ),
        67 =>
            array (
                'name' => 'BPD BALI',
                'code' => '129',
            ),
        68 =>
            array (
                'name' => 'BANK NTT',
                'code' => '130',
            ),
        69 =>
            array (
                'name' => 'BANK MALUKU',
                'code' => '131',
            ),
        70 =>
            array (
                'name' => 'BPD PAPUA',
                'code' => '132',
            ),
        71 =>
            array (
                'name' => 'BANK BENGKULU',
                'code' => '133',
            ),
        72 =>
            array (
                'name' => 'BPD SULAWESI TENGAH',
                'code' => '134',
            ),
        73 =>
            array (
                'name' => 'BANK SULTRA',
                'code' => '135',
            ),
        74 =>
            array (
                'name' => 'BANK NUSANTARA PARAHYANGAN',
                'code' => '145',
            ),
        75 =>
            array (
                'name' => 'BANK SWADESI',
                'code' => '146',
            ),
        76 =>
            array (
                'name' => 'BANK MUAMALAT',
                'code' => '147',
            ),
        77 =>
            array (
                'name' => 'BANK MESTIKA',
                'code' => '151',
            ),
        78 =>
            array (
                'name' => 'BANK METRO EXPRESS',
                'code' => '152',
            ),
        79 =>
            array (
                'name' => 'BANK SHINTA INDONESIA',
                'code' => '153',
            ),
        80 =>
            array (
                'name' => 'BANK MASPION',
                'code' => '157',
            ),
        81 =>
            array (
                'name' => 'BANK HAGAKITA',
                'code' => '159',
            ),
        82 =>
            array (
                'name' => 'BANK GANESHA',
                'code' => '161',
            ),
        83 =>
            array (
                'name' => 'BANK WINDU KENTJANA',
                'code' => '162',
            ),
        84 =>
            array (
                'name' => 'HALIM INDONESIA BANK',
                'code' => '164',
            ),
        85 =>
            array (
                'name' => 'BANK HARMONI INTERNATIONAL',
                'code' => '166',
            ),
        86 =>
            array (
                'name' => 'BANK KESAWAN',
                'code' => '167',
            ),
        87 =>
            array (
                'name' => 'BANK TABUNGAN NEGARA (PERSERO)',
                'code' => '200',
            ),
        88 =>
            array (
                'name' => 'BANK HIMPUNAN SAUDARA 1906, TBK .',
                'code' => '212',
            ),
        89 =>
            array (
                'name' => 'BANK TABUNGAN PENSIUNAN NASIONAL',
                'code' => '213',
            ),
        90 =>
            array (
                'name' => 'BANK SWAGUNA',
                'code' => '405',
            ),
        91 =>
            array (
                'name' => 'BANK JASA ARTA',
                'code' => '422',
            ),
        92 =>
            array (
                'name' => 'BANK MEGA',
                'code' => '426',
            ),
        93 =>
            array (
                'name' => 'BANK JASA JAKARTA',
                'code' => '427',
            ),
        94 =>
            array (
                'name' => 'BANK BUKOPIN',
                'code' => '441',
            ),
        95 =>
            array (
                'name' => 'BANK SYARIAH MANDIRI',
                'code' => '451',
            ),
        96 =>
            array (
                'name' => 'BANK BISNIS INTERNASIONAL',
                'code' => '459',
            ),
        97 =>
            array (
                'name' => 'BANK SRI PARTHA',
                'code' => '466',
            ),
        98 =>
            array (
                'name' => 'BANK JASA JAKARTA',
                'code' => '472',
            ),
        99 =>
            array (
                'name' => 'BANK BINTANG MANUNGGAL',
                'code' => '484',
            ),
        100 =>
            array (
                'name' => 'BANK BUMIPUTERA',
                'code' => '485',
            ),
        101 =>
            array (
                'name' => 'BANK YUDHA BHAKTI',
                'code' => '490',
            ),
        102 =>
            array (
                'name' => 'BANK MITRANIAGA',
                'code' => '491',
            ),
        103 =>
            array (
                'name' => 'BANK AGRO NIAGA',
                'code' => '494',
            ),
        104 =>
            array (
                'name' => 'BANK INDOMONEX',
                'code' => '498',
            ),
        105 =>
            array (
                'name' => 'BANK ROYAL INDONESIA',
                'code' => '501',
            ),
        106 =>
            array (
                'name' => 'BANK ALFINDO',
                'code' => '503',
            ),
        107 =>
            array (
                'name' => 'BANK SYARIAH MEGA',
                'code' => '506',
            ),
        108 =>
            array (
                'name' => 'BANK INA PERDANA',
                'code' => '513',
            ),
        109 =>
            array (
                'name' => 'BANK HARFA',
                'code' => '517',
            ),
        110 =>
            array (
                'name' => 'PRIMA MASTER BANK',
                'code' => '520',
            ),
        111 =>
            array (
                'name' => 'BANK PERSYARIKATAN INDONESIA',
                'code' => '521',
            ),
        112 =>
            array (
                'name' => 'BANK AKITA',
                'code' => '525',
            ),
        113 =>
            array (
                'name' => 'LIMAN INTERNATIONAL BANK',
                'code' => '526',
            ),
        114 =>
            array (
                'name' => 'ANGLOMAS INTERNASIONAL BANK',
                'code' => '531',
            ),
        115 =>
            array (
                'name' => 'BANK DIPO INTERNATIONAL',
                'code' => '523',
            ),
        116 =>
            array (
                'name' => 'BANK KESEJAHTERAAN EKONOMI',
                'code' => '535',
            ),
        117 =>
            array (
                'name' => 'BANK UIB',
                'code' => '536',
            ),
        118 =>
            array (
                'name' => 'BANK ARTOS IND',
                'code' => '542',
            ),
        119 =>
            array (
                'name' => 'BANK PURBA DANARTA',
                'code' => '547',
            ),
        120 =>
            array (
                'name' => 'BANK MULTI ARTA SENTOSA',
                'code' => '548',
            ),
        121 =>
            array (
                'name' => 'BANK MAYORA',
                'code' => '553',
            ),
        122 =>
            array (
                'name' => 'BANK INDEX SELINDO',
                'code' => '555',
            ),
        123 =>
            array (
                'name' => 'BANK VICTORIA INTERNATIONAL',
                'code' => '566',
            ),
        124 =>
            array (
                'name' => 'BANK EKSEKUTIF',
                'code' => '558',
            ),
        125 =>
            array (
                'name' => 'CENTRATAMA NASIONAL BANK',
                'code' => '559',
            ),
        126 =>
            array (
                'name' => 'BANK FAMA INTERNASIONAL',
                'code' => '562',
            ),
        127 =>
            array (
                'name' => 'BANK SINAR HARAPAN BALI',
                'code' => '564',
            ),
        128 =>
            array (
                'name' => 'BANK HARDA',
                'code' => '567',
            ),
        129 =>
            array (
                'name' => 'BANK FINCONESIA',
                'code' => '945',
            ),
        130 =>
            array (
                'name' => 'BANK MERINCORP',
                'code' => '946',
            ),
        131 =>
            array (
                'name' => 'BANK MAYBANK INDOCORP',
                'code' => '947',
            ),
        132 =>
            array (
                'name' => 'BANK OCBC � INDONESIA',
                'code' => '948',
            ),
        133 =>
            array (
                'name' => 'BANK CHINA TRUST INDONESIA',
                'code' => '949',
            ),
        134 =>
            array (
                'name' => 'BANK COMMONWEALTH',
                'code' => '950',
            ),
    )
));
