<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/SearchTradeInput.php');
	require_once( 'com/gmo_pg/client/tran/SearchTrade.php');
	
	//入力パラメータクラスをインスタンス化します
	$input = new SearchTradeInput();/* @var $input SearchTradeInput */
	
	//各種パラメータを設定します。

	//カード番号入力型・会員ID決済型に共通する値です。
	$input->setShopId( PGCARD_SHOP_ID );
	$input->setShopPass( PGCARD_SHOP_PASS );
	$input->setOrderId( $_POST['OrderID'] );
	
	
	//API通信クラスをインスタンス化します
	$exe = new SearchTrade();/* @var $exec SearchTrade */
	
	//パラメータオブジェクトを引数に、実行メソッドを呼びます。
	//正常に終了した場合、結果オブジェクトが返るはずです。
	$output = $exe->exec( $input );/* @var $output SearchTradeOutput */

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

//SearchTrade入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/SearchTrade.php' );