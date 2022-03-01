<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/TradedCardInput.php');
	require_once( 'com/gmo_pg/client/tran/TradedCard.php');

	//入力パラメータクラスをインスタンス化します
	$input = new TradedCardInput();/* @var $input TradedCardInput */

	//このサンプルでは、ショップID・サイトID・パスワードはコンフィグファイルで
	//定数defineしています。
	$input->setShopId( PGCARD_SHOP_ID );
	$input->setShopPass( PGCARD_SHOP_PASS );
	$input->setSiteId( PGCARD_SITE_ID );
	$input->setSitePass( PGCARD_SITE_PASS );

	//登録したい取引と、会員IDを指定します。
	$input->setMemberId( $_POST['MemberID'] );
	$input->setOrderId( $_POST['OrderID'] );
	$input->setSeqMode($_POST['SeqMode']);
	$input->setDefaultFlag($_POST['DefaultFlag']);
	$input->setCardSeq($_POST['CardSeq']);
	$input->setHolderName($_POST['HolderName']);

	//API通信クラスをインスタンス化します
	$exe = new TradedCard();/* @var $exec TradedTran */

	//パラメータオブジェクトを引数に、実行メソッドを呼びます。
	//正常に終了した場合、結果オブジェクトが返るはずです。
	$output = $exe->exec( $input );/* @var $output TradedCardOutput */

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

//TradedCard入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/TradedCard.php' );