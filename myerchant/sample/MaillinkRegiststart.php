<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/MaillinkRegiststartInput.php');
	require_once( 'com/gmo_pg/client/tran/MaillinkRegiststart.php');

	//入力パラメータクラスをインスタンス化します
	$input = new MaillinkRegiststartInput();/* @var $input MaillinkRegiststartInput */

	//各種パラメータを設定しています。
	//実際には、利用金額、オーダーIDといったパラメータをお客様が直接入力することは無く、
	//購買内容を元に加盟店様システムで生成した値が設定されるものと思います。
	$input->setShopID($_POST['ShopID']);
	$input->setShopPass($_POST['ShopPass']);
	$input->setExecMode($_POST['ExecMode']);
	$input->setSiteID($_POST['SiteID']);
	$input->setMemberID($_POST['MemberID']);
	$input->setMemberName( mb_convert_encoding( $_POST['MemberName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setMailLinkOrderNo($_POST['MailLinkOrderNo']);
	$input->setMailAddress($_POST['MailAddress']);
	$input->setLang($_POST['Lang']);
	$input->setTemplateNo($_POST['TemplateNo']);
	$input->setExpireDays($_POST['ExpireDays']);


	//API通信クラスをインスタンス化します
	$exe = new MaillinkRegiststart();/* @var $exec MaillinkRegiststart */

	//パラメータオブジェクトを引数に、実行メソッドを呼び、結果を受け取ります。
	$output = $exe->exec( $input );/* @var $output MaillinkRegiststartOutput */

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

//MaillinkRegiststart入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/MaillinkRegiststart.php' );