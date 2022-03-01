<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/ExecTranSuicaInput.php');
	require_once( 'com/gmo_pg/client/tran/ExecTranSuica.php');
	
	//入力パラメータクラスをインスタンス化します
	$input = new ExecTranSuicaInput();/* @var $input ExecTranSuicaInput */
	
	//各種パラメータを設定します。

	//必須入力値です。
	$input->setAccessId( $_POST['AccessID'] );
	$input->setAccessPass( $_POST['AccessPass'] );
	$input->setOrderId( $_POST['OrderID'] );
	
	
	//商品・サービス名・メールアドレスは必須です。
	$input->setItemName( mb_convert_encoding( $_POST['ItemName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setMailAddress( $_POST['MailAddress'] );
	
	
	//実際には、以降のパラメータをお客様が直接入力することは無く、
	//購買内容を元に加盟店様システムで生成した値が設定されるものと思います。
	$input->setShopMailAddress( $_POST['ShopMailAdress'] );
	$input->setSuicaAddInfo1( mb_convert_encoding( $_POST['SuicaAddInfo1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setSuicaAddInfo2( mb_convert_encoding( $_POST['SuicaAddInfo2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setSuicaAddInfo3( mb_convert_encoding( $_POST['SuicaAddInfo3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setSuicaAddInfo4( mb_convert_encoding( $_POST['SuicaAddInfo4'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	
	
	$input->setPaymentTermDay( $_POST['PaymentTermDay'] );
	$input->setPaymentTermSec( $_POST['PaymentTermSec'] );
	
	
	//このサンプルでは、加盟店自由項目１～３を全て利用していますが、これらの項目は任意項目です。
	//利用しない場合、設定する必要はありません。
	//また、加盟店自由項目に２バイトコードを設定する場合、SJISに変換して設定してください。
	$input->setClientField1( mb_convert_encoding( $_POST['ClientField1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClientField2( mb_convert_encoding( $_POST['ClientField2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClientField3( mb_convert_encoding( $_POST['ClientField3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	
	//API通信クラスをインスタンス化します
	$exe = new ExecTranSuica();/* @var $exec ExecTranSuica */
	
	//パラメータオブジェクトを引数に、実行メソッドを呼びます。
	//正常に終了した場合、結果オブジェクトが返るはずです。
	$output = $exe->exec( $input );/* @var $output ExecTranSuicaOutput */

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

//ExecTranSuica入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/ExecTranSuica.php' );