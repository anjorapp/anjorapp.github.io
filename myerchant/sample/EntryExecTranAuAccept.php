<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/EntryTranAuAcceptInput.php');
	require_once( 'com/gmo_pg/client/input/ExecTranAuAcceptInput.php');
	require_once( 'com/gmo_pg/client/input/EntryExecTranAuAcceptInput.php');
	require_once( 'com/gmo_pg/client/tran/EntryExecTranAuAccept.php');
	
	//入力パラメータクラスをインスタンス化します
	$input = new EntryExecTranAuAcceptInput();/* @var $input EntryExecTranAuAcceptInput */
		$input->setShopID($_POST['ShopID']);
		$input->setShopPass($_POST['ShopPass']);
		$input->setOrderID($_POST['OrderID']);
		$input->setAccessID($_POST['AccessID']);
		$input->setAccessPass($_POST['AccessPass']);
		$input->setSiteID($_POST['SiteID']);
		$input->setSitePass($_POST['SitePass']);
		$input->setMemberID($_POST['MemberID']);
		$input->setMemberName( mb_convert_encoding( $_POST['MemberName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setCreateMember($_POST['CreateMember']);
		$input->setClientField1( mb_convert_encoding( $_POST['ClientField1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setClientField2( mb_convert_encoding( $_POST['ClientField2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setClientField3( mb_convert_encoding( $_POST['ClientField3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setCommodity( mb_convert_encoding( $_POST['Commodity'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setRetURL($_POST['RetURL']);
		$input->setPaymentTermSec($_POST['PaymentTermSec']);
		$input->setServiceName( mb_convert_encoding( $_POST['ServiceName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setServiceTel($_POST['ServiceTel']);

	
	//API通信クラスをインスタンス化します
	$exe = new EntryExecTranAuAccept();/* @var $exec EntryExecTranAuAccept */
	
	//パラメータオブジェクトを引数に、実行メソッドを呼びます。
	//正常に終了した場合、結果オブジェクトが返るはずです。
	$output = $exe->exec( $input );/* @var $output EntryExecTranAuAcceptOutput */

	//実行後、その結果を確認します。
	
	if( $exe->isExceptionOccured() ){//取引の処理そのものがうまくいかない（通信エラー等）場合、例外が発生します。

		//サンプルでは、例外メッセージを表示して終了します。
		require_once( PGCARD_SAMPLE_BASE . '/display/Exception.php');
		exit();
		
	}else{
		
		//例外が発生していない場合、出力パラメータオブジェクトが戻ります。
		
		if( $output->isErrorOccurred() ){//出力パラメータにエラーコードが含まれていないか、チェックしています。
			
			//サンプルでは、エラーが発生していた場合、エラー画面を表示して終了します。
			require_once( PGCARD_SAMPLE_BASE . '/display/EntryExecError.php');
			exit();
		}

		//例外発生せず、エラーの戻りもなく、3Dセキュアフラグもオフであるので、実行結果を表示します。
	}
	
}

//EntryExecTranAuAccept入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/EntryExecTranAuAccept.php' );