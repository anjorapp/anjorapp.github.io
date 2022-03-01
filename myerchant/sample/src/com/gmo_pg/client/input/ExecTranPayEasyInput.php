<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>PayEasy決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 02-07-2008 00:00:00
 */
class ExecTranPayEasyInput extends BaseInput {

	/**
	 * @var string 取引ID。GMO-PGが払い出した、取引を特定するID
	 */
	private $accessId;

	/**
	 * @var string 取引パスワード。取引IDと対になるパスワード
	 */
	private $accessPass;

	/**
	 * @var string オーダーID。加盟店様が発番した、取引を表すID
	 */
	private $orderId;


	/**
	 * 氏名
	 *
	 */
	private $customerName;

	/**
	 * フリガナ
	 *
	 */
	private $customerKana;

	/**
	 * 電話番号
	 *
	 */
	private $telNo;

	/**
	 * メールアドレス
	 *
	 */
	private $mailAddress;

	/**
	 * 加盟店メールアドレス(正)
	 *
	 */
	private $shopMailAddress;

	/**
	 * 支払期限日数
	 *
	 */
	private $paymentTermDay;


	/**
	 * フリースペース1
	 *
	 */
	private $registerDisp1;

	/**
	 * フリースペース2
	 *
	 */
	private $registerDisp2;

	/**
	 * フリースペース3
	 *
	 */
	private $registerDisp3;

	/**
	 * フリースペース4
	 *
	 */
	private $registerDisp4;

	/**
	 * フリースペース5
	 *
	 */
	private $registerDisp5;

	/**
	 * フリースペース6
	 *
	 */
	private $registerDisp6;

	/**
	 * フリースペース7
	 *
	 */
	private $registerDisp7;

	/**
	 * フリースペース8
	 *
	 */
	private $registerDisp8;

	/**
	 * お客様へのご案内1
	 *
	 */
	private $receiptsDisp1;

	/**
	 * お客様へのご案内2
	 *
	 */
	private $receiptsDisp2;

	/**
	 * お客様へのご案内3
	 *
	 */
	private $receiptsDisp3;

	/**
	 * お客様へのご案内4
	 *
	 */
	private $receiptsDisp4;

	/**
	 * お客様へのご案内5
	 *
	 */
	private $receiptsDisp5;

	/**
	 * お客様へのご案内6
	 *
	 */
	private $receiptsDisp6;

	/**
	 * お客様へのご案内7
	 *
	 */
	private $receiptsDisp7;

	/**
	 * お客様へのご案内8
	 *
	 */
	private $receiptsDisp8;

	/**
	 * お客様へのご案内9
	 *
	 */
	private $receiptsDisp9;

	/**
	 * お客様へのご案内10
	 *
	 */
	private $receiptsDisp10;

	/**
	 * お問合せ先
	 *
	 */
	private $receiptsDisp11;

	/**
	 * お問合せ先電話番号
	 *
	 */
	private $receiptsDisp12;

	/**
	 * お問合せ先受付時間
	 *
	 */
	private $receiptsDisp13;

	/**
	 * @var string 加盟店自由項目1
	 */
	private $clientField1;

	/**
	 * @var string 加盟店自由項目
	 */
	private $clientField2;

	/**
	 * @var string 加盟店自由項目3
	 */
	private $clientField3;

	/**
	 * @var string 加盟店自由項目返却フラグ
	 */
	private $clientFieldFlag;

	/**
	 * @var string 決済タイプ
	 */
	private $paymentType;

	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}

	/**
	 * デフォルト値を設定する
	 */
	public function setDefaultValues() {
	    // 加盟店自由項目返却フラグ(固定値)
        $this->clientFieldFlag = "1";
	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

	    // 各項目の設定
        $this->setAccessId($this->getStringValue($params, 'AccessID', $this->getAccessId()));
	    $this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
	    $this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));


	    $this->setCustomerName($this->getStringValue($params, 'CustomerName', $this->getCustomerName()));
	    $this->setCustomerKana($this->getStringValue($params, 'CustomerKana', $this->getCustomerKana()));
	    $this->setTelNo($this->getStringValue($params, 'TelNo', $this->getTelNo()));
	    $this->setPaymentTermDay($this->getIntegerValue($params, 'PaymentTermDay', $this->getPaymentTermDay()));
	    $this->setMailAddress($this->getStringValue($params, 'MailAddress', $this->getMailAddress()));
	    // スペルミス対応
	    if(isset($params['ShopMailAddress']))
	    	$this->setShopMailAddress($this->getStringValue($params, 'ShopMailAddress', $this->getShopMailAddress()));
	    else
	    	$this->setShopMailAddress($this->getStringValue($params, 'ShopMailAdress', $this->getShopMailAddress()));
	    $this->setRegisterDisp1($this->getStringValue($params, 'RegisterDisp1', $this->getRegisterDisp1()));
	    $this->setRegisterDisp2($this->getStringValue($params, 'RegisterDisp2', $this->getRegisterDisp2()));
	    $this->setRegisterDisp3($this->getStringValue($params, 'RegisterDisp3', $this->getRegisterDisp3()));
	    $this->setRegisterDisp4($this->getStringValue($params, 'RegisterDisp4', $this->getRegisterDisp4()));
	    $this->setRegisterDisp5($this->getStringValue($params, 'RegisterDisp5', $this->getRegisterDisp5()));
	    $this->setRegisterDisp6($this->getStringValue($params, 'RegisterDisp6', $this->getRegisterDisp6()));
	    $this->setRegisterDisp7($this->getStringValue($params, 'RegisterDisp7', $this->getRegisterDisp7()));
	    $this->setRegisterDisp8($this->getStringValue($params, 'RegisterDisp8', $this->getRegisterDisp8()));
	    $this->setReceiptsDisp1($this->getStringValue($params, 'ReceiptsDisp1', $this->getReceiptsDisp1()));
	    $this->setReceiptsDisp2($this->getStringValue($params, 'ReceiptsDisp2', $this->getReceiptsDisp2()));
	    $this->setReceiptsDisp3($this->getStringValue($params, 'ReceiptsDisp3', $this->getReceiptsDisp3()));
	    $this->setReceiptsDisp4($this->getStringValue($params, 'ReceiptsDisp4', $this->getReceiptsDisp4()));
	    $this->setReceiptsDisp5($this->getStringValue($params, 'ReceiptsDisp5', $this->getReceiptsDisp5()));
	    $this->setReceiptsDisp6($this->getStringValue($params, 'ReceiptsDisp6', $this->getReceiptsDisp6()));
	    $this->setReceiptsDisp7($this->getStringValue($params, 'ReceiptsDisp7', $this->getReceiptsDisp7()));
	    $this->setReceiptsDisp8($this->getStringValue($params, 'ReceiptsDisp8', $this->getReceiptsDisp8()));
	    $this->setReceiptsDisp9($this->getStringValue($params, 'ReceiptsDisp9', $this->getReceiptsDisp9()));
	    $this->setReceiptsDisp10($this->getStringValue($params, 'ReceiptsDisp10', $this->getReceiptsDisp10()));
	    $this->setReceiptsDisp11($this->getStringValue($params, 'ReceiptsDisp11', $this->getReceiptsDisp11()));
	    $this->setReceiptsDisp12($this->getStringValue($params, 'ReceiptsDisp12', $this->getReceiptsDisp12()));
	    $this->setReceiptsDisp13($this->getStringValue($params, 'ReceiptsDisp13', $this->getReceiptsDisp13()));


	    $this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
	    $this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
	    $this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));

	    $this->setPaymentType($this->getStringValue($params, 'PaymentType', $this->getPaymentType()));

	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->accessId;
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}



	/**
	 * 氏名を取得します。
	 *
	 * @return	$String	氏名
	 */
	public function getCustomerName() {
		return $this->customerName;
	}


	/**
	 * フリガナを取得します。
	 *
	 * @return	$String	フリガナ
	 */
	public function getCustomerKana() {
		return $this->customerKana;
	}


	/**
	 * 電話番号を取得します。
	 *
	 * @return	$String	電話番号
	 */
	public function getTelNo() {
		return $this->telNo;
	}


	/**
	 * メールアドレスを取得します。
	 *
	 * @return	$String	メールアドレス
	 */
	public function getMailAddress() {
		return $this->mailAddress;
	}

	/**
	 * 加盟店メールアドレスを取得します。
	 *
   * @deprecated 下位互換のためのメソッドです。getShopMailAddress()をご利用下さい。
	 * @return	$String	加盟店メールアドレス
	 */
	public function getShopMailAdress() {
		return $this->shopMailAddress;
	}

	/**
	 * 加盟店メールアドレスを取得します。
	 *
	 * @return	$String	加盟店メールアドレス(正)
	 */
	public function getShopMailAddress() {
		return $this->shopMailAddress;
	}

	/**
	 * 支払期限日数を取得します。
	 *
	 * @return	$Integer	支払期限日数
	 */
	public function getPaymentTermDay() {
		return $this->paymentTermDay;
	}




	/**
	 * フリースペース1を取得します。
	 *
	 * @return	$String	フリースペース1
	 */
	public function getRegisterDisp1() {
		return $this->registerDisp1;
	}


	/**
	 * フリースペース2を取得します。
	 *
	 * @return	$String	フリースペース2
	 */
	public function getRegisterDisp2() {
		return $this->registerDisp2;
	}


	/**
	 * フリースペース3を取得します。
	 *
	 * @return	$String	フリースペース3
	 */
	public function getRegisterDisp3() {
		return $this->registerDisp3;
	}

	/**
	 * フリースペース4を取得します。
	 *
	 * @return	$String	フリースペース4
	 */
	public function getRegisterDisp4() {
		return $this->registerDisp4;
	}


	/**
	 * フリースペース5を取得します。
	 *
	 * @return	$String	フリースペース5
	 */
	public function getRegisterDisp5() {
		return $this->registerDisp5;
	}

	/**
	 * フリースペース6を取得します。
	 *
	 * @return	$String	フリースペース6
	 */
	public function getRegisterDisp6() {
		return $this->registerDisp6;
	}

	/**
	 * フリースペース7を取得します。
	 *
	 * @return	$String	フリースペース7
	 */
	public function getRegisterDisp7() {
		return $this->registerDisp7;
	}

	/**
	 * フリースペース8を取得します。
	 *
	 * @return	$String	フリースペース8
	 */
	public function getRegisterDisp8() {
		return $this->registerDisp8;
	}


	/**
	 * お客様へのご案内1を取得します。
	 *
	 * @return	$String	お客様へのご案内1
	 */
	public function getReceiptsDisp1() {
		return $this->receiptsDisp1;
	}



	/**
	 * お客様へのご案内2を取得します。
	 *
	 * @return	$String	お客様へのご案内2
	 */
	public function getReceiptsDisp2() {
		return $this->receiptsDisp2;
	}



	/**
	 * お客様へのご案内3を取得します。
	 *
	 * @return	$String	お客様へのご案内3
	 */
	public function getReceiptsDisp3() {
		return $this->receiptsDisp3;
	}


	/**
	 * お客様へのご案内4を取得します。
	 *
	 * @return	$String	お客様へのご案内4
	 */
	public function getReceiptsDisp4() {
		return $this->receiptsDisp4;
	}



	/**
	 * お客様へのご案内5を取得します。
	 *
	 * @return	$String	お客様へのご案内5
	 */
	public function getReceiptsDisp5() {
		return $this->receiptsDisp5;
	}


	/**
	 * お客様へのご案内6を取得します。
	 *
	 * @return	$String	お客様へのご案内6
	 */
	public function getReceiptsDisp6() {
		return $this->receiptsDisp6;
	}


	/**
	 * お客様へのご案内7を取得します。
	 *
	 * @return	$String	お客様へのご案内7
	 */
	public function getReceiptsDisp7() {
		return $this->receiptsDisp7;
	}



	/**
	 * お客様へのご案内8を取得します。
	 *
	 * @return	$String	お客様へのご案内8
	 */
	public function getReceiptsDisp8() {
		return $this->receiptsDisp8;
	}


	/**
	 * お客様へのご案内9を取得します。
	 *
	 * @return	$String	お客様へのご案内9
	 */
	public function getReceiptsDisp9() {
		return $this->receiptsDisp9;
	}


	/**
	 * お客様へのご案内10を取得します。
	 *
	 * @return	$String	お客様へのご案内10
	 */
	public function getReceiptsDisp10() {
		return $this->receiptsDisp10;
	}


	/**
	 * お問合せ先を取得します。
	 *
	 * @return	$String	お問合せ先
	 */
	public function getReceiptsDisp11() {
		return $this->receiptsDisp11;
	}


	/**
	 * お問合せ先電話番号を取得します。
	 *
	 * @return	$String	お問合せ先電話番号
	 */
	public function getReceiptsDisp12() {
		return $this->receiptsDisp12;
	}


	/**
	 * お問合せ先受付時間を取得します。
	 *
	 * @return	$String	お問合せ先受付時間
	 */
	public function getReceiptsDisp13() {
		return $this->receiptsDisp13;
	}





	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}

	/**
	 * 決済タイプ取得
	 * @return string 決済タイプ
	 */
	public function getPaymentType() {
		return $this->paymentType;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessId 取引ID
	 */
	public function setAccessId($accessId) {
		$this->accessId = $accessId;
	}

	/**
	 * 取引パスワードを設定
	 *
	 * @param string $accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}



	/**
	 * 氏名を格納します。
	 *
	 * @param	$String	氏名
	 */
	public function setCustomerName($String) {
		$this->customerName = $String;
	}

	/**
	 * フリガナを格納します。
	 *
	 * @param	$String	フリガナ
	 */
	public function setCustomerKana($String) {
		$this->customerKana = $String;
	}

	/**
	 * 電話番号を格納します。
	 *
	 * @param	$String	電話番号
	 */
	public function setTelNo($String) {
		$this->telNo = $String;
	}

	/**
	 * メールアドレスを格納します。
	 *
	 * @param	$String	メールアドレス
	 */
	public function setMailAddress($String) {
		$this->mailAddress = $String;
	}

	/**
	 * 加盟店メールアドレスを格納します。
	 *
   * @deprecated 下位互換のためのメソッドです。setShopMailAddress()をご利用下さい。
	 * @param	$String	加盟店メールアドレス
	 */
	public function setShopMailAdress($String) {
		$this->shopMailAddress = $String;
	}

	/**
	 * 加盟店メールアドレスを格納します。
	 *
	 * @param	$String	加盟店メールアドレス(正)
	 */
	public function setShopMailAddress($String) {
		$this->shopMailAddress = $String;
	}

	/**
	 * 支払期限日数を格納します。
	 *
	 * @param	$Integer	支払期限日数
	 */
	public function setPaymentTermDay($Integer) {
		$this->paymentTermDay = $Integer;
	}



	/**
	 * フリースペース1を格納します。
	 *
	 * @param	$String	フリースペース1
	 */
	public function setRegisterDisp1($String) {
		$this->registerDisp1 = $String;
	}

	/**
	 * フリースペース2を格納します。
	 *
	 * @param	$String	フリースペース2
	 */
	public function setRegisterDisp2($String) {
		$this->registerDisp2 = $String;
	}

	/**
	 * フリースペース3を格納します。
	 *
	 * @param	$String	フリースペース3
	 */
	public function setRegisterDisp3($String) {
		$this->registerDisp3 = $String;
	}

	/**
	 * フリースペース4を格納します。
	 *
	 * @param	$String	フリースペース4
	 */
	public function setRegisterDisp4($String) {
		$this->registerDisp4 = $String;
	}

	/**
	 * フリースペース5を格納します。
	 *
	 * @param	$String	フリースペース5
	 */
	public function setRegisterDisp5($String) {
		$this->registerDisp5 = $String;
	}

	/**
	 * フリースペース6を格納します。
	 *
	 * @param	$String	フリースペース6
	 */
	public function setRegisterDisp6($String) {
		$this->registerDisp6 = $String;
	}

	/**
	 * フリースペース7を格納します。
	 *
	 * @param	$String	フリースペース7
	 */
	public function setRegisterDisp7($String) {
		$this->registerDisp7 = $String;
	}

	/**
	 * フリースペース8を格納します。
	 *
	 * @param	$String	フリースペース8
	 */
	public function setRegisterDisp8($String) {
		$this->registerDisp8 = $String;
	}

	/**
	 * お客様へのご案内1を格納します。
	 *
	 * @param	$String	お客様へのご案内1
	 */
	public function setReceiptsDisp1($String) {
		$this->receiptsDisp1 = $String;
	}

	/**
	 * お客様へのご案内2を格納します。
	 *
	 * @param	$String	お客様へのご案内2
	 */
	public function setReceiptsDisp2($String) {
		$this->receiptsDisp2 = $String;
	}

	/**
	 * お客様へのご案内3を格納します。
	 *
	 * @param	$String	お客様へのご案内3
	 */
	public function setReceiptsDisp3($String) {
		$this->receiptsDisp3 = $String;
	}

	/**
	 * お客様へのご案内4を格納します。
	 *
	 * @param	$String	お客様へのご案内4
	 */
	public function setReceiptsDisp4($String) {
		$this->receiptsDisp4 = $String;
	}

	/**
	 * お客様へのご案内5を格納します。
	 *
	 * @param	$String	お客様へのご案内5
	 */
	public function setReceiptsDisp5($String) {
		$this->receiptsDisp5 = $String;
	}

	/**
	 * お客様へのご案内6を格納します。
	 *
	 * @param	$String	お客様へのご案内6
	 */
	public function setReceiptsDisp6($String) {
		$this->receiptsDisp6 = $String;
	}

	/**
	 * お客様へのご案内7を格納します。
	 *
	 * @param	$String	お客様へのご案内7
	 */
	public function setReceiptsDisp7($String) {
		$this->receiptsDisp7 = $String;
	}

	/**
	 * お客様へのご案内8を格納します。
	 *
	 * @param	$String	お客様へのご案内8
	 */
	public function setReceiptsDisp8($String) {
		$this->receiptsDisp8 = $String;
	}

	/**
	 * お客様へのご案内9を格納します。
	 *
	 * @param	$String	お客様へのご案内9
	 */
	public function setReceiptsDisp9($String) {
		$this->receiptsDisp9 = $String;
	}

	/**
	 * お客様へのご案内10を格納します。
	 *
	 * @param	$String	お客様へのご案内10
	 */
	public function setReceiptsDisp10($String) {
		$this->receiptsDisp10 = $String;
	}

	/**
	 * お問合せ先を格納します。
	 *
	 * @param	$String	お問合せ先
	 */
	public function setReceiptsDisp11($String) {
		$this->receiptsDisp11 = $String;
	}

	/**
	 * お問合せ先電話番号を格納します。
	 *
	 * @param	$String	お問合せ先電話番号
	 */
	public function setReceiptsDisp12($String) {
		$this->receiptsDisp12 = $String;
	}

	/**
	 * お問合せ先受付時間を格納します。
	 *
	 * @param	$String	お問合せ先受付時間
	 */
	public function setReceiptsDisp13($String) {
		$this->receiptsDisp13 = $String;
	}



	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}

	/**
	 * 決済タイプ
	 *
	 * @param string $paymentType
	 */
	public function setPaymentType($paymentType) {
		$this->paymentType = $paymentType;
	}

	/**
	 * 文字列表現
	 * URLのパラメータ文字列の形式の文字列を生成する
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
	    $str .= 'AccessID=' . $this->encodeStr($this->getAccessId());
	    $str .= '&';
	    $str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
	    $str .= '&';
	    $str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
	    $str .= '&';
	    $str .= 'CustomerName=' . $this->encodeStr($this->getCustomerName());
	    $str .= '&';
	    $str .= 'CustomerKana=' . $this->encodeStr($this->getCustomerKana());
	    $str .= '&';
	    $str .= 'TelNo=' . $this->encodeStr($this->getTelNo());
	    $str .= '&';
	    $str .= 'PaymentTermDay=' . $this->encodeStr($this->getPaymentTermDay());
	    $str .= '&';
	    $str .= 'MailAddress=' . $this->encodeStr($this->getMailAddress());
	    $str .= '&';
	    $str .= 'ShopMailAddress=' . $this->encodeStr($this->getShopMailAddress());
	    $str .= '&';
	    $str .= 'RegisterDisp1=' . $this->encodeStr($this->getRegisterDisp1());
	    $str .= '&';
	    $str .= 'RegisterDisp2=' . $this->encodeStr($this->getRegisterDisp2());
	    $str .= '&';
	    $str .= 'RegisterDisp3=' . $this->encodeStr($this->getRegisterDisp3());
	    $str .= '&';
	    $str .= 'RegisterDisp4=' . $this->encodeStr($this->getRegisterDisp4());
	    $str .= '&';
	    $str .= 'RegisterDisp5=' . $this->encodeStr($this->getRegisterDisp5());
	    $str .= '&';
	    $str .= 'RegisterDisp6=' . $this->encodeStr($this->getRegisterDisp6());
	    $str .= '&';
	    $str .= 'RegisterDisp7=' . $this->encodeStr($this->getRegisterDisp7());
	    $str .= '&';
	    $str .= 'RegisterDisp8=' . $this->encodeStr($this->getRegisterDisp8());
	    $str .= '&';
	    $str .= 'ReceiptsDisp1=' . $this->encodeStr($this->getReceiptsDisp1());
	    $str .= '&';
	    $str .= 'ReceiptsDisp2=' . $this->encodeStr($this->getReceiptsDisp2());
	    $str .= '&';
	    $str .= 'ReceiptsDisp3=' . $this->encodeStr($this->getReceiptsDisp3());
	    $str .= '&';
	    $str .= 'ReceiptsDisp4=' . $this->encodeStr($this->getReceiptsDisp4());
	    $str .= '&';
	    $str .= 'ReceiptsDisp5=' . $this->encodeStr($this->getReceiptsDisp5());
	    $str .= '&';
	    $str .= 'ReceiptsDisp6=' . $this->encodeStr($this->getReceiptsDisp6());
	    $str .= '&';
	    $str .= 'ReceiptsDisp7=' . $this->encodeStr($this->getReceiptsDisp7());
	    $str .= '&';
	    $str .= 'ReceiptsDisp8=' . $this->encodeStr($this->getReceiptsDisp8());
	    $str .= '&';
	    $str .= 'ReceiptsDisp9=' . $this->encodeStr($this->getReceiptsDisp9());
	    $str .= '&';
	    $str .= 'ReceiptsDisp10=' . $this->encodeStr($this->getReceiptsDisp10());
	    $str .= '&';
	    $str .= 'ReceiptsDisp11=' . $this->encodeStr($this->getReceiptsDisp11());
	    $str .= '&';
	    $str .= 'ReceiptsDisp12=' . $this->encodeStr($this->getReceiptsDisp12());
	    $str .= '&';
	    $str .= 'ReceiptsDisp13=' . $this->encodeStr($this->getReceiptsDisp13());
	    $str .= '&';
	    $str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
	    $str .= '&';
	    $str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
	    $str .= '&';
	    $str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
	    $str .= '&';
	    $str .= 'ClientFieldFlag=' . $this->clientFieldFlag;
	    $str .= '&';
	    $str .= 'PaymentType=' . $this->encodeStr($this->getPaymentType());

	    return $str;
	}
}
?>