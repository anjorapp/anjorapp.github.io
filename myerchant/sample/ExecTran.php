<?php
define("BASEPATH", dirname(__FILE__));

require_once( BASEPATH.DIRECTORY_SEPARATOR.'config.php');

if( isset( $_POST['submit'] ) ){
	require_once( BASEPATH.DIRECTORY_SEPARATOR.'src/com/gmo_pg/client/input/ExecTranInput.php');
	require_once( BASEPATH.DIRECTORY_SEPARATOR.'src/com/gmo_pg/client/tran/ExecTran.php');

	//入力パラメータクラスをインスタンス化します
	$input = new ExecTranInput();/* @var $input ExecTranInput */

	//各種パラメータを設定します。

	//カード番号入力型・会員ID決済型に共通する値です。
	$input->setAccessId( $_POST['AccessID'] );
	$input->setAccessPass( $_POST['AccessPass'] );
	$input->setOrderId( $_POST['OrderID'] );

	//支払方法に応じて、支払回数のセット要否が異なります。
	$method = $_POST['PayMethod'];
	$input->setMethod( $method );
	if( $method == '2' || $method == '4'){//支払方法が、分割またはボーナス分割の場合、支払回数を設定します。
		$input->setPayTimes( $_POST['PayTimes'] );
	}

	//このサンプルでは、加盟店自由項目１～３を全て利用していますが、これらの項目は任意項目です。
	//利用しない場合、設定する必要はありません。
	//また、加盟店自由項目に２バイトコードを設定する場合、SJISに変換して設定してください。
	$input->setClientField1( mb_convert_encoding( $_POST['ClientField1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClientField2( mb_convert_encoding( $_POST['ClientField2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClientField3( mb_convert_encoding( $_POST['ClientField3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setDisplayInfo( mb_convert_encoding( $_POST['DisplayInfo'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );

	//HTTP_ACCEPT,HTTP_USER_AGENTは、3Dセキュアサービスをご利用の場合のみ必要な項目です。
	//Entryで3D利用フラグをオンに設定した場合のみ、設定してください。
	//設定する場合、カード所有者のブラウザから送信されたリクエストヘッダの値を、無加工で
	//設定してください。
	$input->setHttpUserAgent( $_SERVER['HTTP_USER_AGENT']);
	$input->setHttpAccept( $_SERVER['HTTP_ACCEPT' ]);

	//ここから、カード番号入力型決済/トークン/会員ID型決済それぞれの場合で
	//異なるパラメータを設定します。

	//ここでは、トークン＞会員ID＞カード番号の優先順位で、カード情報を設定しています。
	$token    = $_POST['Token'];
	$tokenType    = $_POST['TokenType'];
	$memberId = $_POST['MemberID'];

	if( 0 < strlen( $token ) ){//トークン決済

		//トークン決済の場合、カード番号/有効期限/セキュリティコードの設定は不要です。
		//設定した場合無視され、トークン取得時に設定した値が適用されます。
		$input->setToken( $token );
		$input->setTokenType($tokenType);

	}elseif( 0 < strlen( $memberId )  ){//会員ID決済
		//サンプルでは、サイトID・サイトパスワードはコンスタント定義しています。
		$input->setSiteId( PGCARD_SITE_ID );
		$input->setSitePass( PGCARD_SITE_PASS );

		//会員IDは必須です。
		$input->setMemberId( $memberId );

		//登録カード連番は任意です。
		$cardSeq = $_POST['CardSeq'];
		if( 0< strlen( $cardSeq ) ){
			$input->setCardSeq( $cardSeq );
		}

	}else{//カード番号決済

		//カード番号・有効期限は必須です。
		$input->setCardNo( $_POST['CardNo'] );
		$input->setExpire( $_POST['Expire'] );

		//セキュリティコードは任意です。
		$input->setSecurityCode( $_POST['SecurityCode'] );
	}

	//API通信クラスをインスタンス化します
	$exe = new ExecTran();/* @var $exec ExecTran */

	//パラメータオブジェクトを引数に、実行メソッドを呼びます。
	//正常に終了した場合、結果オブジェクトが返るはずです。
	$output = $exe->exec( $input );/* @var $output ExecTranOutput */

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

		}else if( $output->isTdSecure() ){//決済実行の場合、3Dセキュアフラグをチェックします。

			//3Dセキュアフラグがオンである場合、リダイレクトページを表示する必要があります。
			//サンプルでは、モジュールタイプに標準添付されるリダイレクトユーティリティを利用しています。

			//リダイレクト用パラメータをインスタンス化して、パラメータを設定します
			require_once( 'com/gmo_pg/client/input/AcsParam.php');
			require_once( 'com/gmo_pg/client/common/RedirectUtil.php');
			$redirectInput = new AcsParam();
			$redirectInput->setAcsUrl( $output->getAcsUrl() );
			$redirectInput->setMd( $_POST['AccessID'] );
			$redirectInput->setPaReq( $output->getPaReq() );
			$redirectInput->setTermUrl( PGCARD_SAMPLE_URL . '/SecureTran.php');

			//リダイレクトページ表示クラスをインスタンス化して実行します。
			$redirectShow = new RedirectUtil();
			print ($redirectShow->createRedirectPage( PGCARD_SECURE_RIDIRECT_HTML , $redirectInput ) );
			exit();

		}

		//例外発生せず、エラーの戻りもなく、3Dセキュアフラグもオフであるので、実行結果を表示します。
	}

}

//ExecTran入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/ExecTran.php' );