<?php
require_once( './config.php');

if( isset($_POST['submit'])) {
	//リダイレクト用パラメータをインスタンス化して、パラメータを設定します
	require_once( 'com/gmo_pg/client/input/WebmoneyQuickStartInput.php');
	require_once( 'com/gmo_pg/client/common/RedirectUtil.php');
	$redirectInput = new WebmoneyQuickStartInput();
	$redirectInput->setAccessID( $_POST['AccessID']);


	//リダイレクトページ表示クラスをインスタンス化して実行します。
	$redirectShow = new RedirectUtil();
	print ($redirectShow->webmoneyQuickStart( WEBMONEY_QUICK_START_RIDIRECT_HTML , $redirectInput ) );
	exit();
}

//WebmoneyQuickStart入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/WebmoneyQuickStart.php' );
