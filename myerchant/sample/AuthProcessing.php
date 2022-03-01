<?php
require_once( './config.php');

if( isset($_POST['submit'])) {
	//リダイレクト用パラメータをインスタンス化して、パラメータを設定します
	require_once( 'com/gmo_pg/client/input/AuthProcessingInput.php');
	require_once( 'com/gmo_pg/client/common/RedirectUtil.php');
	$redirectInput = new AuthProcessingInput();
	$redirectInput->setAccessID( $_POST['AccessID']);
	$redirectInput->setAuthProcessingHash( $_POST['AuthProcessingHash']);


	//リダイレクトページ表示クラスをインスタンス化して実行します。
	$redirectShow = new RedirectUtil();
	print ($redirectShow->authProcessing( AUTH_PROCESSING_RIDIRECT_HTML , $redirectInput ) );
	exit();
}

//AuthProcessing入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/AuthProcessing.php' );
