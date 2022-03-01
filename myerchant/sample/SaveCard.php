<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/SaveCardInput.php');
	require_once( 'com/gmo_pg/client/tran/SaveCard.php');

	//入力パラメータクラスをインスタンス化します
	$input = new SaveCardInput();/* @var $input SaveCardInput */

	//このサンプルでは、サイトID・パスワードはコンフィグファイルで
	//定数defineしています。
	$input->setSiteId( PGCARD_SITE_ID );
	$input->setSitePass( PGCARD_SITE_PASS );

	//会員IDは必須です
	$input->setMemberId( $_POST['MemberID'] );

	$input->setSeqMode( $_POST['SeqMode'] );

	//カード登録連番が指定された場合、パラメータに設定します。
	$cardSeq = $_POST['CardSeq'];
	if( 0 < strlen( $cardSeq ) ){
		//登録カード連番
		$input->setCardSeq( $cardSeq );
	}

	//カード番号を設定します。
	//この例では、トークン＞カード番号入力の優先順位で設定しています。
	$token = $_POST['Token'];
	if( 0 < strlen( $token ) )
	{
		$input->setToken( $_POST['Token']);
	}else{
		$input->setCardNo( $_POST['CardNo'] );
		$input->setCardPass( $_POST['CardPass'] );
		$input->setExpire( $_POST['Expire'] );
		$input->setHolderName( $_POST['HolderName']);
		$input->setUpdateType( $_POST['UpdateType']);
	}
	$input->setCardName( mb_convert_encoding( $_POST['CardName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setDefaultFlag( $_POST['DefaultFlag']);

	$input->setSrcMemberID( $_POST['SrcMemberID']);
	$input->setSrcCardSeq( $_POST['SrcCardSeq']);

	//API通信クラスをインスタンス化します
	$exe = new SaveCard();/* @var $exec SearchCard */

	//パラメータオブジェクトを引数に、実行メソッドを呼びます。
	//正常に終了した場合、結果オブジェクトが返るはずです。
	$output = $exe->exec( $input );/* @var $output SaveCardOutput */

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

//SaveCard入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/SaveCard.php' );