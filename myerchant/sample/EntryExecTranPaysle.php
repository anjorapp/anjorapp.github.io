<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/EntryTranPaysleInput.php');
	require_once( 'com/gmo_pg/client/input/ExecTranPaysleInput.php');
	require_once( 'com/gmo_pg/client/input/EntryExecTranPaysleInput.php');
	require_once( 'com/gmo_pg/client/tran/EntryExecTranPaysle.php');
	
	//入力パラメータクラスをインスタンス化します
	$input = new EntryExecTranPaysleInput();/* @var $input EntryExecTranPaysleInput */
		$input->setShopID($_POST['ShopID']);
		$input->setShopPass($_POST['ShopPass']);
		$input->setOrderID($_POST['OrderID']);
		$input->setAmount($_POST['Amount']);
		$input->setTax($_POST['Tax']);
		$input->setPaymentType($_POST['PaymentType']);
		$input->setAccessID($_POST['AccessID']);
		$input->setAccessPass($_POST['AccessPass']);
		$input->setClientField1( mb_convert_encoding( $_POST['ClientField1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setClientField2( mb_convert_encoding( $_POST['ClientField2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setClientField3( mb_convert_encoding( $_POST['ClientField3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setDisplayTermDay($_POST['DisplayTermDay']);
		$input->setPaymentTermDay($_POST['PaymentTermDay']);
		$input->setNotifyTermDay($_POST['NotifyTermDay']);
		$input->setCustomerName( mb_convert_encoding( $_POST['CustomerName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setCustomerTel($_POST['CustomerTel']);
		$input->setCustomerId($_POST['CustomerId']);
		$input->setInvoiceTitle( mb_convert_encoding( $_POST['InvoiceTitle'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setItemId($_POST['ItemId']);
		$input->setItemName( mb_convert_encoding( $_POST['ItemName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
		$input->setMultiItem($_POST['MultiItem']);
		$input->setItemNumbers($_POST['ItemNumbers']);
		$input->setItemFee($_POST['ItemFee']);
		$input->setPaysleTax($_POST['PaysleTax']);
		$input->setPaysleShippingFee($_POST['PaysleShippingFee']);
		$input->setDeviceName($_POST['DeviceName']);
		$input->setOsVersion($_POST['OsVersion']);
		$input->setWinWidth($_POST['WinWidth']);
		$input->setWinHeight($_POST['WinHeight']);
		$input->setXdpi($_POST['Xdpi']);
		$input->setYdpi($_POST['Ydpi']);

	
	//API通信クラスをインスタンス化します
	$exe = new EntryExecTranPaysle();/* @var $exec EntryExecTranPaysle */
	
	//パラメータオブジェクトを引数に、実行メソッドを呼びます。
	//正常に終了した場合、結果オブジェクトが返るはずです。
	$output = $exe->exec( $input );/* @var $output EntryExecTranPaysleOutput */

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

//EntryExecTranPaysle入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/EntryExecTranPaysle.php' );