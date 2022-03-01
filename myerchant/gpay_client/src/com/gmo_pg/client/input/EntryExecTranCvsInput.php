<?php
require_once 'com/gmo_pg/client/input/EntryTranCvsInput.php';
require_once 'com/gmo_pg/client/input/ExecTranCvsInput.php';
/**
 * <b>コンビニ登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 03-07-2008 00:00:00
 */
class EntryExecTranCvsInput {

	/**
	 * @var EntryTranCvsInput コンビニ取引登録入力パラメータ
	 */
	private $entryTranCvsInput;/* @var $entryTranInput EntryTranCvsInput */

	/**
	 * @var ExecTranCvsInput コンビニ決済実行入力パラメータ
	 */
	private $execTranCvsInput;/* @var $execTranInput ExecTranCvsInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranCvsInput = new EntryTranCvsInput($params);
		$this->execTranCvsInput = new ExecTranCvsInput($params);
	}

	/**
	 * コンビニ取引登録入力パラメータ取得
	 *
	 * @return EntryTranCvsInput 取引登録時パラメータ
	 */
	public function &getEntryTranCvsInput() {
		return $this->entryTranCvsInput;
	}

	/**
	 * コンビニ決済実行入力パラメータ取得
	 * @return ExecTranCvsInput 決済実行時パラメータ
	 */
	public function &getExecTranCvsInput() {
		return $this->execTranCvsInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
		return $this->entryTranCvsInput->getShopId();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranCvsInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->entryTranCvsInput->getOrderId();
	}

	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->entryTranCvsInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranCvsInput->getTax();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->execTranCvsInput->getAccessId();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranCvsInput->getAccessPass();
	}

	/**
	 * 支払先コンビニコードを取得します。
	 *
	 * @return	$String	支払先コンビニコード
	 */
	public function getConvenience() {
		return $this->execTranCvsInput->getConvenience();
	}

	/**
	 * 氏名を取得します。
	 *
	 * @return	$String	氏名
	 */
	public function getCustomerName() {
		return $this->execTranCvsInput->getCustomerName();
	}

	/**
	 * フリガナを取得します。
	 *
	 * @return	$String	フリガナ
	 */
	public function getCustomerKana() {
		return $this->execTranCvsInput->getCustomerKana();
	}

	/**
	 * 電話番号を取得します。
	 *
	 * @return	$String	電話番号
	 */
	public function getTelNo() {
		return $this->execTranCvsInput->getTelNo();
	}

	/**
	 * メールアドレスを取得します。
	 *
	 * @return	$String	メールアドレス
	 */
	public function getMailAddress() {
		return $this->execTranCvsInput->getMailAddress();
	}

	/**
	 * 加盟店メールアドレスを取得します。
	 *
     * @deprecated 下位互換のためのメソッドです。getShopMailAddress()をご利用下さい。
	 * @return	$String	加盟店メールアドレス
	 */
	public function getShopMailAdress() {
		return $this->execTranCvsInput->getShopMailAddress();
	}

	/**
	 * 加盟店メールアドレスを取得します。
	 *
	 * @return	$String	加盟店メールアドレス(正)
	 */
	public function getShopMailAddress() {
		return $this->execTranCvsInput->getShopMailAddress();
	}

	/**
	 * 支払期限日数を取得します。
	 *
	 * @return	$Integer	支払期限日数
	 */
	public function getPaymentTermDay() {
		return $this->execTranCvsInput->getPaymentTermDay();
	}

	/**
	 * 予約番号を取得します。
	 *
	 * @return	$String	予約番号
	 */
	public function getReserveNo() {
		return $this->execTranCvsInput->getReserveNo();
	}

	/**
	 * 会員番号を取得します。
	 *
	 * @return	$String	会員番号
	 */
	public function getMemberNo() {
		return $this->execTranCvsInput->getMemberNo();
	}

	/**
	 * フリースペース1を取得します。
	 *
	 * @return	$String	フリースペース1
	 */
	public function getRegisterDisp1() {
		return $this->execTranCvsInput->getRegisterDisp1();
	}

	/**
	 * フリースペース2を取得します。
	 *
	 * @return	$String	フリースペース2
	 */
	public function getRegisterDisp2() {
		return $this->execTranCvsInput->getRegisterDisp2();
	}

	/**
	 * フリースペース3を取得します。
	 *
	 * @return	$String	フリースペース3
	 */
	public function getRegisterDisp3() {
		return $this->execTranCvsInput->getRegisterDisp3();
	}

	/**
	 * フリースペース4を取得します。
	 *
	 * @return	$String	フリースペース4
	 */
	public function getRegisterDisp4() {
		return $this->execTranCvsInput->getRegisterDisp4();
	}

	/**
	 * フリースペース5を取得します。
	 *
	 * @return	$String	フリースペース5
	 */
	public function getRegisterDisp5() {
		return $this->execTranCvsInput->getRegisterDisp5();
	}

	/**
	 * フリースペース6を取得します。
	 *
	 * @return	$String	フリースペース6
	 */
	public function getRegisterDisp6() {
		return $this->execTranCvsInput->getRegisterDisp6();
	}

	/**
	 * フリースペース7を取得します。
	 *
	 * @return	$String	フリースペース7
	 */
	public function getRegisterDisp7() {
		return $this->execTranCvsInput->getRegisterDisp7();
	}

	/**
	 * フリースペース8を取得します。
	 *
	 * @return	$String	フリースペース8
	 */
	public function getRegisterDisp8() {
		return $this->execTranCvsInput->getRegisterDisp8();
	}

	/**
	 * お客様へのご案内1を取得します。
	 *
	 * @return	$String	お客様へのご案内1
	 */
	public function getReceiptsDisp1() {
		return $this->execTranCvsInput->getReceiptsDisp1();
	}

	/**
	 * お客様へのご案内2を取得します。
	 *
	 * @return	$String	お客様へのご案内2
	 */
	public function getReceiptsDisp2() {
		return $this->execTranCvsInput->getReceiptsDisp2();
	}

	/**
	 * お客様へのご案内3を取得します。
	 *
	 * @return	$String	お客様へのご案内3
	 */
	public function getReceiptsDisp3() {
		return $this->execTranCvsInput->getReceiptsDisp3();
	}

	/**
	 * お客様へのご案内4を取得します。
	 *
	 * @return	$String	お客様へのご案内4
	 */
	public function getReceiptsDisp4() {
		return $this->execTranCvsInput->getReceiptsDisp4();
	}

	/**
	 * お客様へのご案内5を取得します。
	 *
	 * @return	$String	お客様へのご案内5
	 */
	public function getReceiptsDisp5() {
		return $this->execTranCvsInput->getReceiptsDisp5();
	}

	/**
	 * お客様へのご案内6を取得します。
	 *
	 * @return	$String	お客様へのご案内6
	 */
	public function getReceiptsDisp6() {
		return $this->execTranCvsInput->getReceiptsDisp6();
	}

	/**
	 * お客様へのご案内7を取得します。
	 *
	 * @return	$String	お客様へのご案内7
	 */
	public function getReceiptsDisp7() {
		return $this->execTranCvsInput->getReceiptsDisp7();
	}

	/**
	 * お客様へのご案内8を取得します。
	 *
	 * @return	$String	お客様へのご案内8
	 */
	public function getReceiptsDisp8() {
		return $this->execTranCvsInput->getReceiptsDisp8();
	}

	/**
	 * お客様へのご案内9を取得します。
	 *
	 * @return	$String	お客様へのご案内9
	 */
	public function getReceiptsDisp9() {
		return $this->execTranCvsInput->getReceiptsDisp9();
	}

	/**
	 * お客様へのご案内10を取得します。
	 *
	 * @return	$String	お客様へのご案内10
	 */
	public function getReceiptsDisp10() {
		return $this->execTranCvsInput->getReceiptsDisp10();
	}

	/**
	 * お問合せ先を取得します。
	 *
	 * @return	$String	お問合せ先
	 */
	public function getReceiptsDisp11() {
		return $this->execTranCvsInput->getReceiptsDisp11();
	}

	/**
	 * お問合せ先電話番号を取得します。
	 *
	 * @return	$String	お問合せ先電話番号
	 */
	public function getReceiptsDisp12() {
		return $this->execTranCvsInput->getReceiptsDisp12();
	}

	/**
	 * お問合せ先受付時間を取得します。
	 *
	 * @return	$String	お問合せ先受付時間
	 */
	public function getReceiptsDisp13() {
		return $this->execTranCvsInput->getReceiptsDisp13();
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranCvsInput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranCvsInput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranCvsInput->getClientField3();
	}

	/**
	 * コンビニ取引登録入力パラメータ設定
	 *
	 * @param EntryTranCvsInput entryTranCvsInput  コンビニ取引登録入力パラメータ
	 */
	public function setEntryTranCvsInput(&$entryTranCvsInput) {
		$this->entryTranCvsInput = $entryTranCvsInput;
	}

	/**
	 * コンビニ決済実行入力パラメータ設定
	 *
	 * @param ExecTranCvsInput  execTranCvsInput   コンビニ決済実行入力パラメータ
	 */
	public function setExecTranCvsInput(&$execTranCvsInput) {
		$this->execTranCvsInput = $execTranCvsInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopId
	 */
	public function setShopId($shopId) {
		$this->entryTranCvsInput->setShopId($shopId);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranCvsInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId
	 */
	public function setOrderId($orderId) {
		$this->entryTranCvsInput->setOrderId($orderId);
		$this->execTranCvsInput->setOrderId($orderId);
	}

	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranCvsInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranCvsInput->setTax($tax);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessId
	 */
	public function setAccessId($accessId) {
		$this->execTranCvsInput->setAccessId($accessId);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranCvsInput->setAccessPass($accessPass);
	}

	/**
	 * 支払先コンビニコードを格納します。
	 *
	 * @param	$String	支払先コンビニコード
	 */
	public function setConvenience($String) {
		$this->execTranCvsInput->setConvenience($String);
	}

	/**
	 * 氏名を格納します。
	 *
	 * @param	$String	氏名
	 */
	public function setCustomerName($String) {
		$this->execTranCvsInput->setCustomerName($String);
	}

	/**
	 * フリガナを格納します。
	 *
	 * @param	$String	フリガナ
	 */
	public function setCustomerKana($String) {
		$this->execTranCvsInput->setCustomerKana($String);
	}

	/**
	 * 電話番号を格納します。
	 *
	 * @param	$String	電話番号
	 */
	public function setTelNo($String) {
		$this->execTranCvsInput->setTelNo($String);
	}
	/**
	 * メールアドレスを格納します。
	 *
	 * @param	$String	メールアドレス
	 */
	public function setMailAddress($String) {
		$this->execTranCvsInput->setMailAddress($String);
	}

	/**
	 * 加盟店メールアドレスを格納します。
	 *
     * @deprecated 下位互換のためのメソッドです。setShopMailAddress()をご利用下さい。
	 * @param	$String	加盟店メールアドレス
	 */
	public function setShopMailAdress($String) {
		$this->execTranCvsInput->setShopMailAddress($String);
	}

	/**
	 * 加盟店メールアドレスを格納します。
	 *
	 * @param	$String	加盟店メールアドレス(正)
	 */
	public function setShopMailAddress($String) {
		$this->execTranCvsInput->setShopMailAddress($String);
	}

	/**
	 * 支払期限日数を格納します。
	 *
	 * @param	$Integer	支払期限日数
	 */
	public function setPaymentTermDay($Integer) {
		$this->execTranCvsInput->setPaymentTermDay($Integer);
	}

	/**
	 * 予約番号を格納します。
	 *
	 * @param	$String	予約番号
	 */
	public function setReserveNo($String) {
		$this->execTranCvsInput->setReserveNo($String);
	}

	/**
	 * 会員番号を格納します。
	 *
	 * @param	$String	会員番号
	 */
	public function setMemberNo($String) {
		$this->execTranCvsInput->setMemberNo($String);
	}

	/**
	 * フリースペース1を格納します。
	 *
	 * @param	$String	フリースペース1
	 */
	public function setRegisterDisp1($String) {
		$this->execTranCvsInput->setRegisterDisp1($String);
	}

	/**
	 * フリースペース2を格納します。
	 *
	 * @param	$String	フリースペース2
	 */
	public function setRegisterDisp2($String) {
		$this->execTranCvsInput->setRegisterDisp2($String);
	}

	/**
	 * フリースペース3を格納します。
	 *
	 * @param	$String	フリースペース3
	 */
	public function setRegisterDisp3($String) {
		$this->execTranCvsInput->setRegisterDisp3($String);
	}

	/**
	 * フリースペース4を格納します。
	 *
	 * @param	$String	フリースペース4
	 */
	public function setRegisterDisp4($String) {
		$this->execTranCvsInput->setRegisterDisp4($String);
	}

	/**
	 * フリースペース5を格納します。
	 *
	 * @param	$String	フリースペース5
	 */
	public function setRegisterDisp5($String) {
		$this->execTranCvsInput->setRegisterDisp5($String);
	}

	/**
	 * フリースペース6を格納します。
	 *
	 * @param	$String	フリースペース6
	 */
	public function setRegisterDisp6($String) {
		$this->execTranCvsInput->setRegisterDisp6($String);
	}

	/**
	 * フリースペース7を格納します。
	 *
	 * @param	$String	フリースペース7
	 */
	public function setRegisterDisp7($String) {
		$this->execTranCvsInput->setRegisterDisp7($String);
	}

	/**
	 * フリースペース8を格納します。
	 *
	 * @param	$String	フリースペース8
	 */
	public function setRegisterDisp8($String) {
		$this->execTranCvsInput->setRegisterDisp8($String);
	}

	/**
	 * お客様へのご案内1を格納します。
	 *
	 * @param	$String	お客様へのご案内1
	 */
	public function setReceiptsDisp1($String) {
		$this->execTranCvsInput->setReceiptsDisp1($String);
	}

	/**
	 * お客様へのご案内2を格納します。
	 *
	 * @param	$String	お客様へのご案内2
	 */
	public function setReceiptsDisp2($String) {
		$this->execTranCvsInput->setReceiptsDisp2($String);
	}

	/**
	 * お客様へのご案内3を格納します。
	 *
	 * @param	$String	お客様へのご案内3
	 */
	public function setReceiptsDisp3($String) {
		$this->execTranCvsInput->setReceiptsDisp3($String);
	}

	/**
	 * お客様へのご案内4を格納します。
	 *
	 * @param	$String	お客様へのご案内4
	 */
	public function setReceiptsDisp4($String) {
		$this->execTranCvsInput->setReceiptsDisp4($String);
	}

	/**
	 * お客様へのご案内5を格納します。
	 *
	 * @param	$String	お客様へのご案内5
	 */
	public function setReceiptsDisp5($String) {
		$this->execTranCvsInput->setReceiptsDisp5($String);
	}

	/**
	 * お客様へのご案内6を格納します。
	 *
	 * @param	$String	お客様へのご案内6
	 */
	public function setReceiptsDisp6($String) {
		$this->execTranCvsInput->setReceiptsDisp6($String);
	}

	/**
	 * お客様へのご案内7を格納します。
	 *
	 * @param	$String	お客様へのご案内7
	 */
	public function setReceiptsDisp7($String) {
		$this->execTranCvsInput->setReceiptsDisp7($String);
	}

	/**
	 * お客様へのご案内8を格納します。
	 *
	 * @param	$String	お客様へのご案内8
	 */
	public function setReceiptsDisp8($String) {
		$this->execTranCvsInput->setReceiptsDisp8($String);
	}

	/**
	 * お客様へのご案内9を格納します。
	 *
	 * @param	$String	お客様へのご案内9
	 */
	public function setReceiptsDisp9($String) {
		$this->execTranCvsInput->setReceiptsDisp9($String);
	}

	/**
	 * お客様へのご案内10を格納します。
	 *
	 * @param	$String	お客様へのご案内10
	 */
	public function setReceiptsDisp10($String) {
		$this->execTranCvsInput->setReceiptsDisp10($String);
	}

	/**
	 * お問合せ先を格納します。
	 *
	 * @param	$String	お問合せ先
	 */
	public function setReceiptsDisp11($String) {
		$this->execTranCvsInput->setReceiptsDisp11($String);
	}

	/**
	 * お問合せ先電話番号を格納します。
	 *
	 * @param	$String	お問合せ先電話番号
	 */
	public function setReceiptsDisp12($String) {
		$this->execTranCvsInput->setReceiptsDisp12($String);
	}

	/**
	 * お問合せ先受付時間を格納します。
	 *
	 * @param	$String	お問合せ先受付時間
	 */
	public function setReceiptsDisp13($String) {
		$this->execTranCvsInput->setReceiptsDisp13($String);
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranCvsInput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranCvsInput->setClientField2($clientField2);
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranCvsInput->setClientField3($clientField3);
	}

}
?>