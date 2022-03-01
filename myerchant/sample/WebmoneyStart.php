<?php
require_once( './config.php');

if( isset($_POST['submit'])) {
	//リダイレクト用パラメータをインスタンス化して、パラメータを設定します
	require_once( 'com/gmo_pg/client/input/WebmoneyStartParam.php');
	require_once( 'com/gmo_pg/client/common/RedirectUtil.php');
	$redirectInput = new WebmoneyStartParam();
	$redirectInput->setAccessId( $_POST['AccessID']);

	//リダイレクトページ表示クラスをインスタンス化して実行します。
	$redirectShow = new RedirectUtil();
	print ($redirectShow->webmoneyStart( WEBMONEY_START_RIDIRECT_HTML , $redirectInput ) );
	exit();
}

//EntryTranWebmoney入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/WebmoneyStart.php' );
