<?php
require_once( './config.php');

if( isset($_POST['submit'])) {
	//リダイレクト用パラメータをインスタンス化して、パラメータを設定します
	require_once( 'com/gmo_pg/client/input/BankAccountStartInput.php');
	require_once( 'com/gmo_pg/client/common/RedirectUtil.php');
	$redirectInput = new BankAccountStartInput();
	$redirectInput->setTranID( $_POST['TranID']);
	$redirectInput->setToken( $_POST['Token']);


	//リダイレクトページ表示クラスをインスタンス化して実行します。
	$redirectShow = new RedirectUtil();
	print ($redirectShow->bankAccountStart( BANK_ACCOUNT_START_RIDIRECT_HTML , $redirectInput ) );
	exit();
}

//BankAccountStart入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/BankAccountStart.php' );
