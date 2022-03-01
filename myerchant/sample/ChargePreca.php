<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/ChargePrecaInput.php');
	require_once( 'com/gmo_pg/client/tran/ChargePreca.php');

	//入力パラメータクラスをインスタンス化します
	$input = new ChargePrecaInput();/* @var $input ChargePrecaInput */

	//各種パラメータを設定しています。
	//実際には、利用金額、オーダーIDといったパラメータをお客様が直接入力することは無く、
	//購買内容を元に加盟店様システムで生成した値が設定されるものと思います。
	$input->setShopID($_POST['ShopID']);
	$input->setShopPass($_POST['ShopPass']);
	$input->setOrderID($_POST['OrderID']);
	$input->setPrecaNo($_POST['PrecaNo']);
	$input->setPrecaPass($_POST['PrecaPass']);
	$input->setAmount($_POST['Amount']);
	$input->setChargeType($_POST['ChargeType']);
	$input->setClientField( mb_convert_encoding( $_POST['ClientField'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setTdFlag($_POST['TdFlag']);
	$input->setTdTenantName($_POST['TdTenantName']);
	$input->setRetURL($_POST['RetURL']);
	$input->setAuthProcessTermSec($_POST['AuthProcessTermSec']);
	$input->setCardNo($_POST['CardNo']);
	$input->setExpire($_POST['Expire']);
	$input->setSecurityCode($_POST['SecurityCode']);
	$input->setToken($_POST['Token']);
	$input->setSiteID($_POST['SiteID']);
	$input->setSitePass($_POST['SitePass']);
	$input->setMemberID($_POST['MemberID']);
	$input->setSeqMode($_POST['SeqMode']);
	$input->setCardSeq($_POST['CardSeq']);
	$input->setCvsCode($_POST['CvsCode']);
	$input->setCustomerName( mb_convert_encoding( $_POST['CustomerName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setCustomerKana( mb_convert_encoding( $_POST['CustomerKana'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setTelNo($_POST['TelNo']);
	$input->setPaymentTermDay($_POST['PaymentTermDay']);
	$input->setReceiptsDisp11( mb_convert_encoding( $_POST['ReceiptsDisp11'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp12($_POST['ReceiptsDisp12']);
	$input->setReceiptsDisp13($_POST['ReceiptsDisp13']);


	//API通信クラスをインスタンス化します
	$exe = new ChargePreca();/* @var $exec ChargePreca */

	//パラメータオブジェクトを引数に、実行メソッドを呼び、結果を受け取ります。
	$output = $exe->exec( $input );/* @var $output ChargePrecaOutput */

	//実行後、その結果を確認します。

	if( $exe->isExceptionOccured() ){//取引の処理そのものがうまくいかない（通信エラー等）場合、例外が発生します。

		//サンプルでは、例外メッセージを表示して終了します。
		require_once( PGCARD_SAMPLE_BASE . '/display/Exception.php');
		exit();

	}else{

		//例外が発生していない場合、出力パラメータオブジェクトが戻ります。

		if( $output->isErrorOccurred() ){//出力パラメータにエラーコードが含まれていないか、チェックしています。

			//サンプルでは、エラーが発生していた場合、エラー画面を表示して終了します。
			require_once( PGCARD_SAMPLE_BASE . '/display/Error.php');
			exit();

		}

		//例外発生せず、エラーの戻りもないので、正常とみなします。
		//このif文を抜けて、結果を表示します。
	}

}

//ChargePreca入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/ChargePreca.php' );