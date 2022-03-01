<?php
require_once 'com/gmo_pg/client/input/EntryTranBankaccountInput.php';
require_once 'com/gmo_pg/client/input/ExecTranBankaccountInput.php';
/**
 * <b>口振セレクト登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranBankaccountInput {

	/**
	 * @var EntryTranBankaccountInput 口振セレクト登録入力パラメータ
	 */
	private $entryTranBankaccountInput;/* @var $entryTranInput EntryTranBankaccountInput */

	/**
	 * @var ExecTranBankaccountInput 口振セレクト実行入力パラメータ
	 */
	private $execTranBankaccountInput;/* @var $execTranInput ExecTranBankaccountInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranBankaccountInput = new EntryTranBankaccountInput($params);
		$this->execTranBankaccountInput = new ExecTranBankaccountInput($params);
	}

	/**
	 * 口振セレクト取引登録入力パラメータ取得
	 *
	 * @return EntryTranBankaccountInput 取引登録時パラメータ
	 */
	public function &getEntryTranBankaccountInput() {
		return $this->entryTranBankaccountInput;
	}

	/**
	 * 口振セレクト実行入力パラメータ取得
	 * @return ExecTranBankaccountInput 決済実行時パラメータ
	 */
	public function &getExecTranBankaccountInput() {
		return $this->execTranBankaccountInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranBankaccountInput->getShopID();
	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranBankaccountInput->getShopPass();
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranBankaccountInput->getOrderID();

	}
	/**
	 * 利用料金取得
	 * @return integer 利用料金
	 */
	public function getAmount() {
		return $this->entryTranBankaccountInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranBankaccountInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranBankaccountInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranBankaccountInput->getAccessPass();
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->execTranBankaccountInput->getSiteID();
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->execTranBankaccountInput->getSitePass();
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->execTranBankaccountInput->getMemberID();
	}
	/**
	 * 振替指定日取得
	 * @return string 振替指定日
	 */
	public function getTargetDate() {
		return $this->execTranBankaccountInput->getTargetDate();
	}
	/**
	 * 請求内容取得
	 * @return string 請求内容
	 */
	public function getRemarks() {
		return $this->execTranBankaccountInput->getRemarks();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranBankaccountInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranBankaccountInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranBankaccountInput->getClientField3();
	}
	/**
	 * チェックモード取得
	 * @return string チェックモード
	 */
	public function getCheckMode() {
		return $this->execTranBankaccountInput->getCheckMode();
	}

	/**
	 * 口振セレクト取引登録入力パラメータ設定
	 *
	 * @param EntryTranBankaccountInput entryTranBankaccountInput  取引登録入力パラメータ
	 */
	public function setEntryTranBankaccountInput(&$entryTranBankaccountInput) {
		$this->entryTranBankaccountInput = $entryTranBankaccountInput;
	}

	/**
	 * 口振セレクト実行入力パラメータ設定
	 *
	 * @param ExecTranBankaccountInput  execTranBankaccountInput   決済実行入力パラメータ
	 */
	public function setExecTranBankaccountInput(&$execTranBankaccountInput) {
		$this->execTranBankaccountInput = $execTranBankaccountInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranBankaccountInput->setShopID($shopID);
	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranBankaccountInput->setShopPass($shopPass);
	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranBankaccountInput->setOrderID($orderID);
		$this->execTranBankaccountInput->setOrderID($orderID);

	}
	/**
	 * 利用料金設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranBankaccountInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranBankaccountInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranBankaccountInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranBankaccountInput->setAccessPass($accessPass);
	}
	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->execTranBankaccountInput->setSiteID($siteID);
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->execTranBankaccountInput->setSitePass($sitePass);
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->execTranBankaccountInput->setMemberID($memberID);
	}
	/**
	 * 振替指定日設定
	 *
	 * @param string $targetDate
	 */
	public function setTargetDate($targetDate) {
		$this->execTranBankaccountInput->setTargetDate($targetDate);
	}
	/**
	 * 請求内容設定
	 *
	 * @param string $remarks
	 */
	public function setRemarks($remarks) {
		$this->execTranBankaccountInput->setRemarks($remarks);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranBankaccountInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranBankaccountInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranBankaccountInput->setClientField3($clientField3);
	}
	/**
	 * チェックモード設定
	 *
	 * @param string $checkMode
	 */
	public function setCheckMode($checkMode) {
		$this->execTranBankaccountInput->setCheckMode($checkMode);
	}

}
?>
