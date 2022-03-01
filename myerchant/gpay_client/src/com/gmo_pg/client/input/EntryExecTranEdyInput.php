<?php
require_once 'com/gmo_pg/client/input/EntryTranEdyInput.php';
require_once 'com/gmo_pg/client/input/ExecTranEdyInput.php';
/**
 * <b>モバイルEdy登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 03-07-2008 00:00:00
 */
class EntryExecTranEdyInput {

	/**
	 * @var EntryTranEdyInput モバイルEdy取引登録入力パラメータ
	 */
	private $entryTranEdyInput;/* @var $entryTranInput EntryTranEdyInput */

	/**
	 * @var ExecTranEdyInput モバイルEdy決済実行入力パラメータ
	 */
	private $execTranEdyInput;/* @var $execTranInput ExecTranEdyInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranEdyInput = new EntryTranEdyInput($params);
		$this->execTranEdyInput = new ExecTranEdyInput($params);
	}

	/**
	 * モバイルEdy取引登録入力パラメータ取得
	 *
	 * @return EntryTranEdyInput 取引登録時パラメータ
	 */
	public function &getEntryTranEdyInput() {
		return $this->entryTranEdyInput;
	}

	/**
	 * モバイルEdy決済実行入力パラメータ取得
	 * @return ExecTranEdyInput 決済実行時パラメータ
	 */
	public function &getExecTranEdyInput() {
		return $this->execTranEdyInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
		return $this->entryTranEdyInput->getShopId();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranEdyInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->entryTranEdyInput->getOrderId();
	}

		/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->entryTranEdyInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranEdyInput->getTax();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->execTranEdyInput->getAccessId();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranEdyInput->getAccessPass();
	}



	/**
	 * メールアドレスを取得します。
	 *
	 * @return	$String	メールアドレス
	 */
	public function getMailAddress() {
		return $this->execTranEdyInput->getMailAddress();
	}

	/**
	 * 加盟店メールアドレスを取得します。
	 *
     * @deprecated 下位互換のためのメソッドです。getShopMailAddress()をご利用下さい。
	 * @return	$String	加盟店メールアドレス
	 */
	public function getShopMailAdress() {
		return $this->execTranEdyInput->getShopMailAddress();
	}

	/**
	 * 加盟店メールアドレスを取得します。
	 *
	 * @return	$String	加盟店メールアドレス(正)
	 */
	public function getShopMailAddress() {
		return $this->execTranEdyInput->getShopMailAddress();
	}

	/**
	 * 決済開始メール付加情報を取得します。
	 *
	 * @return	$String	決済開始メール付加情報
	 */
	public function getEdyAddInfo1() {
		return $this->execTranEdyInput->getEdyAddInfo1();
	}

	/**
	 * 決済完了メール付加情報を取得します。
	 *
	 * @return	$String	決済完了メール付加情報
	 */
	public function getEdyAddInfo2() {
		return $this->execTranEdyInput->getEdyAddInfo2();
	}




	/**
	 * 支払期限日数を取得します。
	 *
	 * @return	$Integer	支払期限日数
	 */
	public function getPaymentTermDay() {
		return $this->execTranEdyInput->getPaymentTermDay();
	}


	/**
	 * 支払期限秒を取得します。
	 *
	 * @return	$Integer	支払期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranEdyInput->getPaymentTermSec();
	}


	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranEdyInput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranEdyInput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranEdyInput->getClientField3();
	}

	/**
	 * モバイルEdy取引登録入力パラメータ設定
	 *
	 * @param EntryTranEdyInput entryTranEdyInput  モバイルEdy取引登録入力パラメータ
	 */
	public function setEntryTranEdyInput(&$entryTranEdyInput) {
		$this->entryTranEdyInput = $entryTranEdyInput;
	}

	/**
	 * モバイルEdy決済実行入力パラメータ設定
	 *
	 * @param ExecTranEdyInput  execTranEdyInput   モバイルEdy決済実行入力パラメータ
	 */
	public function setExecTranEdyInput(&$execTranEdyInput) {
		$this->execTranEdyInput = $execTranEdyInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopId
	 */
	public function setShopId($shopId) {
		$this->entryTranEdyInput->setShopId($shopId);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranEdyInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId
	 */
	public function setOrderId($orderId) {
		$this->entryTranEdyInput->setOrderId($orderId);
		$this->execTranEdyInput->setOrderId($orderId);
	}

	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranEdyInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranEdyInput->setTax($tax);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessId
	 */
	public function setAccessId($accessId) {
		$this->entryTranEdyInput->setAccessId($accessId);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranEdyInput->setAccessPass($accessPass);
	}



	/**
	 * メールアドレスを格納します。
	 *
	 * @param	$String	メールアドレス
	 */
	public function setMailAddress($String) {
		$this->execTranEdyInput->setMailAddress($String);
	}

	/**
	 * 加盟店メールアドレスを格納します。
	 *
     * @deprecated 下位互換のためのメソッドです。setShopMailAddress()をご利用下さい。
	 * @param	$String	加盟店メールアドレス
	 */
	public function setShopMailAdress($String) {
		$this->execTranEdyInput->setShopMailAddress($String);
	}

	/**
	 * 加盟店メールアドレスを格納します。
	 *
	 * @param	$String	加盟店メールアドレス(正)
	 */
	public function setShopMailAddress($String) {
		$this->execTranEdyInput->setShopMailAddress($String);
	}

	/**
	 * 決済開始メール付加情報を格納します。
	 *
	 * @param	$String	決済開始メール付加情報
	 */
	public function setEdyAddInfo1($String) {
		$this->execTranEdyInput->setEdyAddInfo1($string);
	}

	/**
	 * 決済完了メール付加情報を格納します。
	 *
	 * @param	$String	決済完了メール付加情報
	 */
	public function setEdyAddInfo2($String) {
		$this->execTranEdyInput->setEdyAddInfo2($string);
	}






	/**
	 * 支払期限日数を格納します。
	 *
	 * @param	$Integer	支払期限日数
	 */
	public function setPaymentTermDay($Integer) {
		$this->execTranEdyInput->setPaymentTermDay($Integer);
	}


	/**
	 * 支払期限秒を格納します。
	 *
	 * @param	$Integer	支払期限秒
	 */
	public function setPaymentTermSec($Integer) {
		$this->execTranEdyInput->setPaymentTermSec($Integer);
	}



	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranEdyInput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranEdyInput->setClientField2($clientField2);
	}


	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranEdyInput->setClientField3($clientField3);
	}

}
?>