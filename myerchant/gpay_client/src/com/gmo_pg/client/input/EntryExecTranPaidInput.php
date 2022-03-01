<?php
require_once 'com/gmo_pg/client/input/EntryTranPaidInput.php';
require_once 'com/gmo_pg/client/input/ExecTranPaidInput.php';
/**
 * <b>Paid登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaidInput {

	/**
	 * @var EntryTranPaidInput Paid登録入力パラメータ
	 */
	private $entryTranPaidInput;/* @var $entryTranInput EntryTranPaidInput */

	/**
	 * @var ExecTranPaidInput Paid実行入力パラメータ
	 */
	private $execTranPaidInput;/* @var $execTranInput ExecTranPaidInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranPaidInput = new EntryTranPaidInput($params);
		$this->execTranPaidInput = new ExecTranPaidInput($params);
	}

	/**
	 * Paid取引登録入力パラメータ取得
	 *
	 * @return EntryTranPaidInput 取引登録時パラメータ
	 */
	public function &getEntryTranPaidInput() {
		return $this->entryTranPaidInput;
	}

	/**
	 * Paid実行入力パラメータ取得
	 * @return ExecTranPaidInput 決済実行時パラメータ
	 */
	public function &getExecTranPaidInput() {
		return $this->execTranPaidInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranPaidInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranPaidInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranPaidInput->getOrderID();

	}
	/**
	 * 利用金額取得
	 * @return bigDecimal 利用金額
	 */
	public function getAmount() {
		return $this->entryTranPaidInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return bigDecimal 税送料
	 */
	public function getTax() {
		return $this->entryTranPaidInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranPaidInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranPaidInput->getAccessPass();
	}
	/**
	 * Paid取引先ID取得
	 * @return string Paid取引先ID
	 */
	public function getPaidBuyerID() {
		return $this->execTranPaidInput->getPaidBuyerID();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranPaidInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranPaidInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranPaidInput->getClientField3();
	}
	/**
	 * 加盟店自由項目返却フラグ取得
	 * @return string 加盟店自由項目返却フラグ
	 */
	public function getClientFieldFlag() {
		return $this->execTranPaidInput->getClientFieldFlag();
	}
	/**
	 * 注文内容取得
	 * @return string 注文内容
	 */
	public function getContents() {
		return $this->execTranPaidInput->getContents();
	}

	/**
	 * Paid取引登録入力パラメータ設定
	 *
	 * @param EntryTranPaidInput entryTranPaidInput  取引登録入力パラメータ
	 */
	public function setEntryTranPaidInput(&$entryTranPaidInput) {
		$this->entryTranPaidInput = $entryTranPaidInput;
	}

	/**
	 * Paid実行入力パラメータ設定
	 *
	 * @param ExecTranPaidInput  execTranPaidInput   決済実行入力パラメータ
	 */
	public function setExecTranPaidInput(&$execTranPaidInput) {
		$this->execTranPaidInput = $execTranPaidInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranPaidInput->setShopID($shopID);
		$this->execTranPaidInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranPaidInput->setShopPass($shopPass);
		$this->execTranPaidInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranPaidInput->setOrderID($orderID);
		$this->execTranPaidInput->setOrderID($orderID);

	}
	/**
	 * 利用金額設定
	 *
	 * @param bigDecimal $amount
	 */
	public function setAmount($amount) {
		$this->entryTranPaidInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param bigDecimal $tax
	 */
	public function setTax($tax) {
		$this->entryTranPaidInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranPaidInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranPaidInput->setAccessPass($accessPass);
	}
	/**
	 * Paid取引先ID設定
	 *
	 * @param string $paidBuyerID
	 */
	public function setPaidBuyerID($paidBuyerID) {
		$this->execTranPaidInput->setPaidBuyerID($paidBuyerID);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranPaidInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranPaidInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranPaidInput->setClientField3($clientField3);
	}
	/**
	 * 加盟店自由項目返却フラグ設定
	 *
	 * @param string $clientFieldFlag
	 */
	public function setClientFieldFlag($clientFieldFlag) {
		$this->execTranPaidInput->setClientFieldFlag($clientFieldFlag);
	}
	/**
	 * 注文内容設定
	 *
	 * @param string $contents
	 */
	public function setContents($contents) {
		$this->execTranPaidInput->setContents($contents);
	}

}
?>
