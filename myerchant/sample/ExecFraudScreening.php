<?php
require_once( './config.php');

if( isset( $_POST['submit'] ) ){
	require_once( 'com/gmo_pg/client/input/ExecFraudScreeningInput.php');
	require_once( 'com/gmo_pg/client/tran/ExecFraudScreening.php');
	require_once( 'com/gmo_pg/client/input/RedItemHolder.php');

	//入力パラメータクラスをインスタンス化します
	$input = new ExecFraudScreeningInput();/* @var $input ExecFraudScreeningInput */

	//このサンプルでは、ショップID・パスワードはコンフィグファイルで
	//定数defineしています。
	$input->setShopId(PGCARD_SHOP_ID);
	$input->setShopPass(PGCARD_SHOP_PASS);

	//各種パラメータを設定しています。
	//実際には、利用金額、オーダーIDといったパラメータをお客様が直接入力することは無く、
	//購買内容を元に加盟店様システムで生成した値が設定されるものと思います。
	$input->setShopID($_POST['ShopID']);
	$input->setShopPass($_POST['ShopPass']);
	$input->setExecMode($_POST['ExecMode']);
	$input->setAccessID($_POST['AccessID']);
	$input->setAccessPass($_POST['AccessPass']);
	$input->setOrderID($_POST['OrderID']);
	$input->setRedAmt($_POST['RedAmt']);
	$input->setRedCurrCd($_POST['RedCurrCd']);
	$input->setRedAcctNum($_POST['RedAcctNum']);
	$input->setRedCardExpDt($_POST['RedCardExpDt']);
	$input->setRedCustTypeCd($_POST['RedCustTypeCd']);
	$input->setRedCustId($_POST['RedCustId']);
	$input->setRedCustFname($_POST['RedCustFname']);
	$input->setRedCustLname($_POST['RedCustLname']);
	$input->setRedCustAddr1($_POST['RedCustAddr1']);
	$input->setRedCustAddr2($_POST['RedCustAddr2']);
	$input->setRedCustAddr3($_POST['RedCustAddr3']);
	$input->setRedCustCity($_POST['RedCustCity']);
	$input->setRedCustPostalCd($_POST['RedCustPostalCd']);
	$input->setRedCustCntryCd($_POST['RedCustCntryCd']);
	$input->setRedCustHomePhone($_POST['RedCustHomePhone']);
	$input->setRedCustEmail($_POST['RedCustEmail']);
	$input->setRedCustIpAddr($_POST['RedCustIpAddr']);
	$input->setRedEbtPrevcust($_POST['RedEbtPrevcust']);
	$input->setRedEbtTof($_POST['RedEbtTof']);
	$input->setRedShipTypeCd($_POST['RedShipTypeCd']);
	$input->setRedShipFname($_POST['RedShipFname']);
	$input->setRedShipLname($_POST['RedShipLname']);
	$input->setRedShipAddr1($_POST['RedShipAddr1']);
	$input->setRedShipAddr2($_POST['RedShipAddr2']);
	$input->setRedShipAddr3($_POST['RedShipAddr3']);
	$input->setRedShipCity($_POST['RedShipCity']);
	$input->setRedShipPostalCd($_POST['RedShipPostalCd']);
	$input->setRedEmpCompany($_POST['RedEmpCompany']);
	$input->setRedEbtDeviceprint($_POST['RedEbtDeviceprint']);
	$input->setRedEbtUserData8($_POST['RedEbtUserData8']);
	$input->setRedEbtUserData9($_POST['RedEbtUserData9']);
	$input->setRedEbtUserData11($_POST['RedEbtUserData11']);
	$input->setRedEbtUserData12($_POST['RedEbtUserData12']);
	$input->setRedEbtUserData13($_POST['RedEbtUserData13']);
	$input->setRedEbtUserData15($_POST['RedEbtUserData15']);
	$input->setRedEbtUserData16($_POST['RedEbtUserData16']);
	$input->setRedEbtUserData17($_POST['RedEbtUserData17']);
	$input->setRedEbtUserData18($_POST['RedEbtUserData18']);
	$input->setRedEbtUserData19($_POST['RedEbtUserData19']);
	$input->setRedEbtUserData20($_POST['RedEbtUserData20']);
	$input->setRedEbtUserData21($_POST['RedEbtUserData21']);
	$input->setRedEbtUserData22($_POST['RedEbtUserData22']);
	$input->setRedEbtUserData23($_POST['RedEbtUserData23']);
	$input->setRedEbtUserData24($_POST['RedEbtUserData24']);
	$input->setRedEbtUserData25($_POST['RedEbtUserData25']);

	$itemList = array();

	$itemHolder1 = new RedItemHolder();
	$itemHolder2 = new RedItemHolder();

	$itemHolder1->setRedItemQty($_POST['RedItemQty1']);
	$itemHolder1->setRedItemProdCd($_POST['RedItemProdCd1']);
	$itemHolder1->setRedItemManPartNo($_POST['RedItemManPartNo1']);
	$itemHolder1->setRedItemDesc($_POST['RedItemDesc1']);
	$itemHolder1->setRedEbtItemCst($_POST['RedEbtItemCst1']);
	$itemHolder1->setRedItemGiftMsg($_POST['RedItemGiftMsg1']);

	$itemHolder2->setRedItemQty($_POST['RedItemQty2']);
	$itemHolder2->setRedItemProdCd($_POST['RedItemProdCd2']);
	$itemHolder2->setRedItemManPartNo($_POST['RedItemManPartNo2']);
	$itemHolder2->setRedItemDesc($_POST['RedItemDesc2']);
	$itemHolder2->setRedEbtItemCst($_POST['RedEbtItemCst2']);
	$itemHolder2->setRedItemGiftMsg($_POST['RedItemGiftMsg2']);

	$itemList[] = $itemHolder1;
	$itemList[] = $itemHolder2;

	$input->setRedItemList($itemList);

	$input->setTelegramType($_POST['TelegramType']);


	//API通信クラスをインスタンス化します
	$exe = new ExecFraudScreening();/* @var $exec ExecFraudScreening */

	//パラメータオブジェクトを引数に、実行メソッドを呼び、結果を受け取ります。
	$output = $exe->exec( $input );/* @var $output ExecFraudScreeningOutput */

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

//ExecFraudScreening入力・結果画面
require_once( PGCARD_SAMPLE_BASE . '/display/ExecFraudScreening.php' );