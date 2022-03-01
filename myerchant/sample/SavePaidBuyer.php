<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/SavePaidBuyerInput.php');
	require_once( 'com/gmo_pg/client/tran/SavePaidBuyer.php');

	//入力パラメータクラスをインスタンス化します
	$input = new SavePaidBuyerInput();/* @var $input SavePaidBuyerInput */

	//各種パラメータを設定しています。
	//実際には、利用金額、オーダーIDといったパラメータをお客様が直接入力することは無く、
	//購買内容を元に加盟店様システムで生成した値が設定されるものと思います。
	$input->setShopID($_POST['ShopID']);
	$input->setShopPass($_POST['ShopPass']);
	$input->setPaidBuyerID($_POST['PaidBuyerID']);
	$input->setCompanyName( mb_convert_encoding( $_POST['CompanyName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setCompanyNameKana( mb_convert_encoding( $_POST['CompanyNameKana'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRepresentativeSei( mb_convert_encoding( $_POST['RepresentativeSei'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRepresentativeMei( mb_convert_encoding( $_POST['RepresentativeMei'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRepresentativeSeiKana( mb_convert_encoding( $_POST['RepresentativeSeiKana'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setRepresentativeMeiKana( mb_convert_encoding( $_POST['RepresentativeMeiKana'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setZipCode( mb_convert_encoding( $_POST['ZipCode'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setPrefecture( mb_convert_encoding( $_POST['Prefecture'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setAddress1( mb_convert_encoding( $_POST['Address1'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setAddress2( mb_convert_encoding( $_POST['Address2'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setAddress3( mb_convert_encoding( $_POST['Address3'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setAuxName( mb_convert_encoding( $_POST['AuxName'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClerkSei( mb_convert_encoding( $_POST['ClerkSei'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClerkMei( mb_convert_encoding( $_POST['ClerkMei'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClerkSeiKana( mb_convert_encoding( $_POST['ClerkSeiKana'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClerkMeiKana( mb_convert_encoding( $_POST['ClerkMeiKana'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setTel($_POST['Tel']);
	$input->setFax($_POST['Fax']);
	$input->setMobileTel($_POST['MobileTel']);
	$input->setEmail($_POST['Email']);
	$input->setEstablishedYear($_POST['EstablishedYear']);
	$input->setEstablishedMonth($_POST['EstablishedMonth']);
	$input->setAnnualSales($_POST['AnnualSales']);
	$input->setBusinessDetailType($_POST['BusinessDetailType']);
	$input->setDealingBrand( mb_convert_encoding( $_POST['DealingBrand'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setShopCount($_POST['ShopCount']);
	$input->setUrl1($_POST['Url1']);
	$input->setUrl2($_POST['Url2']);
	$input->setUrl3($_POST['Url3']);
	$input->setProfile( mb_convert_encoding( $_POST['Profile'] , 'SJIS' , PGCARD_SAMPLE_ENCODING ) );
	$input->setClosingDay($_POST['ClosingDay']);
	$input->setPaymentMethod($_POST['PaymentMethod']);


	//API通信クラスをインスタンス化します
	$exe = new SavePaidBuyer();/* @var $exec SavePaidBuyer */

	//パラメータオブジェクトを引数に、実行メソッドを呼び、結果を受け取ります。
	$output = $exe->exec( $input );/* @var $output SavePaidBuyerOutput */

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

//SavePaidBuyer入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/SavePaidBuyer.php' );