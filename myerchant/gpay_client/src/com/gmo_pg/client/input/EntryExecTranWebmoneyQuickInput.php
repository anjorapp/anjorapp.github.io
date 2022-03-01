<?php
require_once 'com/gmo_pg/client/input/EntryTranWebmoneyInput.php';
require_once 'com/gmo_pg/client/input/ExecTranWebmoneyQuickInput.php';
/**
 * <b>Webmoney登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranWebmoneyQuickInput {

	/**
	 * @var EntryTranWebmoneyInput Webmoney登録入力パラメータ
	 */
	private $entryTranWebmoneyInput;/* @var $entryTranInput EntryTranWebmoneyInput */

	/**
	 * @var ExecTranWebmoneyQuickInput Webmoney実行入力パラメータ
	 */
	private $execTranWebmoneyInput;/* @var $execTranInput ExecTranWebmoneyQuickInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranWebmoneyInput = new EntryTranWebmoneyInput($params);
		$this->execTranWebmoneyInput = new ExecTranWebmoneyQuickInput($params);
	}

	/**
	 * Webmoney取引登録入力パラメータ取得
	 *
	 * @return EntryTranWebmoneyInput 取引登録時パラメータ
	 */
	public function &getEntryTranWebmoneyInput() {
		return $this->entryTranWebmoneyInput;
	}

	/**
	 * Webmoney実行入力パラメータ取得
	 * @return ExecTranWebmoneyQuickInput 決済実行時パラメータ
	 */
	public function &getExecTranWebmoneyQuickInput() {
		return $this->execTranWebmoneyInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
		return $this->entryTranWebmoneyInput->getShopId();
	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranWebmoneyInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->entryTranWebmoneyInput->getOrderId();
	}
	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->entryTranWebmoneyInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranWebmoneyInput->getTax();
	}
	/**
	 * ショップID取得
	 * @return string ショップID
	 */
// 	public function getShopID() {
// 		return $this->execTranWebmoneyInput->getShopID();
// 	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranWebmoneyInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranWebmoneyInput->getAccessPass();
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
// 	public function getOrderID() {
// 		return $this->execTranWebmoneyInput->getOrderID();
// 	}
	/**
	 * クイックID取得
	 * @return string クイックID
	 */
	public function getQuickID() {
		return $this->execTranWebmoneyInput->getQuickID();
	}
	/**
	 * 商品・サービス名取得
	 * @return string 商品・サービス名
	 */
	public function getItemName() {
		return $this->execTranWebmoneyInput->getItemName();
	}
	/**
	 * 支払期限日数取得
	 * @return integer 支払期限日数
	 */
	public function getPaymentTermDay() {
		return $this->execTranWebmoneyInput->getPaymentTermDay();
	}
	/**
	 * リダイレクトURL取得
	 * @return string リダイレクトURL
	 */
	public function getRedirectURL() {
		return $this->execTranWebmoneyInput->getRedirectURL();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranWebmoneyInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranWebmoneyInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranWebmoneyInput->getClientField3();
	}
	/**
	 * 加盟店自由項目返却フラグ取得
	 * @return string 加盟店自由項目返却フラグ
	 */
	public function getClientFieldFlag() {
		return $this->execTranWebmoneyInput->getClientFieldFlag();
	}

	/**
	 * Webmoney取引登録入力パラメータ設定
	 *
	 * @param EntryTranWebmoneyInput entryTranWebmoneyInput  取引登録入力パラメータ
	 */
	public function setEntryTranWebmoneyInput(&$entryTranWebmoneyInput) {
		$this->entryTranWebmoneyInput = $entryTranWebmoneyInput;
	}

	/**
	 * Webmoney実行入力パラメータ設定
	 *
	 * @param ExecTranWebmoneyQuickInput  execTranWebmoneyInput   決済実行入力パラメータ
	 */
	public function setExecTranWebmoneyQuickInput(&$execTranWebmoneyInput) {
		$this->execTranWebmoneyInput = $execTranWebmoneyInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopId
	 */
	public function setShopId($shopId) {
		$this->entryTranWebmoneyInput->setShopId($shopId);
	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranWebmoneyInput->setShopPass($shopPass);
		$this->execTranWebmoneyInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderId
	 */
	public function setOrderId($orderId) {
		$this->entryTranWebmoneyInput->setOrderId($orderId);
	}
	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranWebmoneyInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranWebmoneyInput->setTax($tax);
	}
	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
// 	public function setShopID($shopID) {
// 		$this->execTranWebmoneyInput->setShopID($shopID);
// 	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranWebmoneyInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranWebmoneyInput->setAccessPass($accessPass);
	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
// 	public function setOrderID($orderID) {
// 		$this->execTranWebmoneyInput->setOrderID($orderID);
// 	}
	/**
	 * クイックID設定
	 *
	 * @param string $quickID
	 */
	public function setQuickID($quickID) {
		$this->execTranWebmoneyInput->setQuickID($quickID);
	}
	/**
	 * 商品・サービス名設定
	 *
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->execTranWebmoneyInput->setItemName($itemName);
	}
	/**
	 * 支払期限日数設定
	 *
	 * @param integer $paymentTermDay
	 */
	public function setPaymentTermDay($paymentTermDay) {
		$this->execTranWebmoneyInput->setPaymentTermDay($paymentTermDay);
	}
	/**
	 * リダイレクトURL設定
	 *
	 * @param string $redirectURL
	 */
	public function setRedirectURL($redirectURL) {
		$this->execTranWebmoneyInput->setRedirectURL($redirectURL);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranWebmoneyInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranWebmoneyInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranWebmoneyInput->setClientField3($clientField3);
	}
	/**
	 * 加盟店自由項目返却フラグ設定
	 *
	 * @param string $clientFieldFlag
	 */
	public function setClientFieldFlag($clientFieldFlag) {
		$this->execTranWebmoneyInput->setClientFieldFlag($clientFieldFlag);
	}

}
?>
