<?php
$Appsetting= BASEPATH . DIRECTORY_SEPARATOR . "_sys". DIRECTORY_SEPARATOR ."init_var.php";
echo BASEPATH . '-config.php';
define( 'PGCARD_SAMPLE_BASE', dirname(__FILE__));
define( 'PGCARD_SAMPLE_ENCODING' , 'UTF-8');

/* 以下の項目をお客様のインストール環境に合わせて設定してください */
define( 'PGCARD_SAMPLE_URL' , BASEPATH.DIRECTORY_SEPARATOR);
define( 'PGCARD_SECURE_RIDIRECT_HTML' , BASEPATH.DIRECTORY_SEPARATOR.'src/RedirectPage.html');
define( 'PAYPAL_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'WEBMONEY_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'WEBMONEY_QUICK_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'AU_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'AU_CONTINUANCE_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');

define( 'DOCOMO_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'DOCOMO_CONTINUANCE_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'SB_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'JIBUN_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'AUTH_PROCESSING_RIDIRECT_HTML' , '/your/path/to/RidirectPage');

define( 'NETCASH_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'RAKUTEN_ID_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'MCP_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'LINEPAY_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'UNIONPAY_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'SB_CONTINUANCE_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'RECRUIT_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'RECRUIT_CONTINUANCE_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'DOCOMO_ACCEPT_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'AU_ACCEPT_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');
define( 'SB_ACCEPT_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');


define( 'BANK_ACCOUNT_START_RIDIRECT_HTML' , '/your/path/to/RidirectPage');

/* 以下の項目をテスト環境設定書に従って設定してください */
define( 'PGCARD_SHOP_ID' , '9102248874704');
define( 'PGCARD_SHOP_PASS' , 'c69427a7');
define( 'PGCARD_SITE_ID' , 'mst2000016604');
define( 'PGCARD_SITE_PASS' , 'yb7yr2c9');
