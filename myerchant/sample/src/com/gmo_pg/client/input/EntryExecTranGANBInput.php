<?php
require_once 'com/gmo_pg/client/input/EntryTranGANBInput.php';
require_once 'com/gmo_pg/client/input/ExecTranGANBInput.php';
/**
 * <b>GANB登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranGANBInput {

	/**
	 * @var EntryTranGANBInput GANB登録入力パラメータ
	 */
	private $entryTranGANBInput;/* @var $entryTranInput EntryTranGANBInput */

	/**
	 * @var ExecTranGANBInput GANB実行入力パラメータ
	 */
	private $execTranGANBInput;/* @var $execTranInput ExecTranGANBInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranGANBInput = new EntryTranGANBInput($params);
		$this->execTranGANBInput = new ExecTranGANBInput($params);
	}

	/**
	 * GANB取引登録入力パラメータ取得
	 *
	 * @return EntryTranGANBInput 取引登録時パラメータ
	 */
	public function &getEntryTranGANBInput() {
		return $this->entryTranGANBInput;
	}

	/**
	 * GANB実行入力パラメータ取得
	 * @return ExecTranGANBInput 決済実行時パラメータ
	 */
	public function &getExecTranGANBInput() {
		return $this->execTranGANBInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranGANBInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranGANBInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranGANBInput->getOrderID();

	}
	/**
	 * 利用料金取得
	 * @return bigDecimal 利用料金
	 */
	public function getAmount() {
		return $this->entryTranGANBInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return bigDecimal 税送料
	 */
	public function getTax() {
		return $this->entryTranGANBInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranGANBInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranGANBInput->getAccessPass();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranGANBInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranGANBInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranGANBInput->getClientField3();
	}
	/**
	 * 口座名義任意名取得
	 * @return string 口座名義任意名
	 */
	public function getAccountHolderOptionalName() {
		return $this->execTranGANBInput->getAccountHolderOptionalName();
	}
	/**
	 * 取引有効日数取得
	 * @return integer 取引有効日数
	 */
	public function getTradeDays() {
		return $this->execTranGANBInput->getTradeDays();
	}
	/**
	 * 取引事由取得
	 * @return string 取引事由
	 */
	public function getTradeReason() {
		return $this->execTranGANBInput->getTradeReason();
	}
	/**
	 * 振込依頼人氏名取得
	 * @return string 振込依頼人氏名
	 */
	public function getTradeClientName() {
		return $this->execTranGANBInput->getTradeClientName();
	}
	/**
	 * 振込依頼人メールアドレス取得
	 * @return string 振込依頼人メールアドレス
	 */
	public function getTradeClientMailaddress() {
		return $this->execTranGANBInput->getTradeClientMailaddress();
	}

	/**
	 * GANB取引登録入力パラメータ設定
	 *
	 * @param EntryTranGANBInput entryTranGANBInput  取引登録入力パラメータ
	 */
	public function setEntryTranGANBInput(&$entryTranGANBInput) {
		$this->entryTranGANBInput = $entryTranGANBInput;
	}

	/**
	 * GANB実行入力パラメータ設定
	 *
	 * @param ExecTranGANBInput  execTranGANBInput   決済実行入力パラメータ
	 */
	public function setExecTranGANBInput(&$execTranGANBInput) {
		$this->execTranGANBInput = $execTranGANBInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranGANBInput->setShopID($shopID);
		$this->execTranGANBInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranGANBInput->setShopPass($shopPass);
		$this->execTranGANBInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranGANBInput->setOrderID($orderID);
		$this->execTranGANBInput->setOrderID($orderID);

	}
	/**
	 * 利用料金設定
	 *
	 * @param bigDecimal $amount
	 */
	public function setAmount($amount) {
		$this->entryTranGANBInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param bigDecimal $tax
	 */
	public function setTax($tax) {
		$this->entryTranGANBInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranGANBInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranGANBInput->setAccessPass($accessPass);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranGANBInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranGANBInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranGANBInput->setClientField3($clientField3);
	}
	/**
	 * 口座名義任意名設定
	 *
	 * @param string $accountHolderOptionalName
	 */
	public function setAccountHolderOptionalName($accountHolderOptionalName) {
		$this->execTranGANBInput->setAccountHolderOptionalName($accountHolderOptionalName);
	}
	/**
	 * 取引有効日数設定
	 *
	 * @param integer $tradeDays
	 */
	public function setTradeDays($tradeDays) {
		$this->execTranGANBInput->setTradeDays($tradeDays);
	}
	/**
	 * 取引事由設定
	 *
	 * @param string $tradeReason
	 */
	public function setTradeReason($tradeReason) {
		$this->execTranGANBInput->setTradeReason($tradeReason);
	}
	/**
	 * 振込依頼人氏名設定
	 *
	 * @param string $tradeClientName
	 */
	public function setTradeClientName($tradeClientName) {
		$this->execTranGANBInput->setTradeClientName($tradeClientName);
	}
	/**
	 * 振込依頼人メールアドレス設定
	 *
	 * @param string $tradeClientMailaddress
	 */
	public function setTradeClientMailaddress($tradeClientMailaddress) {
		$this->execTranGANBInput->setTradeClientMailaddress($tradeClientMailaddress);
	}

}
?>
