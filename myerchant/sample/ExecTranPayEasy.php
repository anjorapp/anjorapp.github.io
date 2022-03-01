<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/ExecTranPayEasyInput.php');
	require_once( 'com/gmo_pg/client/tran/ExecTranPayEasy.php');

	//入力パラメータクラスをインスタンス化します
	$input = new ExecTranPayEasyInput();/* @var $input ExecTranPayEasyInput */

	//各種パラメータを設定します。

	//必須入力値です。
	$input->setAccessId( $_POST['AccessID'] );
	$input->setAccessPass( $_POST['AccessPass'] );
	$input->setOrderId( $_POST['OrderID'] );


	//
	$input->setCustomerName( mb_convert_encoding( $_POST['CustomerName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setCustomerKana( mb_convert_encoding( $_POST['CustomerKana'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setTelNo( $_POST['TelNo'] );

	//
	$input->setMailAddress( $_POST['MailAddress'] );


	//実際には、以降のパラメータをお客様が直接入力することは無く、
	//購買内容を元に加盟店様システムで生成した値が設定されるものと思います。
	$input->setShopMailAddress( $_POST['ShopMailAdress'] );

	$input->setPaymentTermDay( $_POST['PaymentTermDay'] );

	$input->setRegisterDisp1( mb_convert_encoding( $_POST['RegisterDisp1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRegisterDisp2( mb_convert_encoding( $_POST['RegisterDisp2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRegisterDisp3( mb_convert_encoding( $_POST['RegisterDisp3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRegisterDisp4( mb_convert_encoding( $_POST['RegisterDisp4'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRegisterDisp5( mb_convert_encoding( $_POST['RegisterDisp5'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRegisterDisp6( mb_convert_encoding( $_POST['RegisterDisp6'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRegisterDisp7( mb_convert_encoding( $_POST['RegisterDisp7'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRegisterDisp8( mb_convert_encoding( $_POST['RegisterDisp8'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );

	$input->setReceiptsDisp1( mb_convert_encoding( $_POST['ReceiptsDisp1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp2( mb_convert_encoding( $_POST['ReceiptsDisp2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp3( mb_convert_encoding( $_POST['ReceiptsDisp3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp4( mb_convert_encoding( $_POST['ReceiptsDisp4'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp5( mb_convert_encoding( $_POST['ReceiptsDisp5'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp6( mb_convert_encoding( $_POST['ReceiptsDisp6'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp7( mb_convert_encoding( $_POST['ReceiptsDisp7'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp8( mb_convert_encoding( $_POST['ReceiptsDisp8'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp9( mb_convert_encoding( $_POST['ReceiptsDisp9'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp10( mb_convert_encoding( $_POST['ReceiptsDisp10'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setReceiptsDisp11( mb_convert_encoding( $_POST['ReceiptsDisp11'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );


	$input->setReceiptsDisp12( $_POST['ReceiptsDisp12'] );
	$input->setReceiptsDisp13( $_POST['ReceiptsDisp13'] );


	//このサンプルでは、加盟店自由項目１～３を全て利用していますが、これらの項目は任意項目です。
	//利用しない場合、設定する必要はありません。
	//また、加盟店自由項目に２バイトコードを設定する場合、SJISに変換して設定してください。
	$input->setClientField1( mb_convert_encoding( $_POST['ClientField1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClientField2( mb_convert_encoding( $_POST['ClientField2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClientField3( mb_convert_encoding( $_POST['ClientField3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );

	$input->setPaymentType( mb_convert_encoding( $_POST['PaymentType'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );

	//API通信クラスをインスタンス化します
	$exe = new ExecTranPayEasy();/* @var $exec ExecTranPayEasy */

	//パラメータオブジェクトを引数に、実行メソッドを呼びます。
	//正常に終了した場合、結果オブジェクトが返るはずです。
	$output = $exe->exec( $input );/* @var $output ExecTranPayEasyOutput */

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

		//例外発生せず、エラーの戻りもないので、実行結果を表示します。
	}

}

//ExecTranPayEasy入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/ExecTranPayEasy.php' );