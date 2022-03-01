<?php
require_once 'com/gmo_pg/client/input/EntryTranSbContinuanceInput.php';
require_once 'com/gmo_pg/client/input/ExecTranSbContinuanceInput.php';
/**
 * <b>ソフトバンク継続登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranSbContinuanceInput {

	/**
	 * @var EntryTranSbContinuanceInput ソフトバンク継続登録入力パラメータ
	 */
	private $entryTranSbContinuanceInput;/* @var $entryTranInput EntryTranSbContinuanceInput */

	/**
	 * @var ExecTranSbContinuanceInput ソフトバンク継続実行入力パラメータ
	 */
	private $execTranSbContinuanceInput;/* @var $execTranInput ExecTranSbContinuanceInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranSbContinuanceInput = new EntryTranSbContinuanceInput($params);
		$this->execTranSbContinuanceInput = new ExecTranSbContinuanceInput($params);
	}

	/**
	 * ソフトバンク継続取引登録入力パラメータ取得
	 *
	 * @return EntryTranSbContinuanceInput 取引登録時パラメータ
	 */
	public function &getEntryTranSbContinuanceInput() {
		return $this->entryTranSbContinuanceInput;
	}

	/**
	 * ソフトバンク継続実行入力パラメータ取得
	 * @return ExecTranSbContinuanceInput 決済実行時パラメータ
	 */
	public function &getExecTranSbContinuanceInput() {
		return $this->execTranSbContinuanceInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranSbContinuanceInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranSbContinuanceInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranSbContinuanceInput->getOrderID();

	}
	/**
	 * 利用料金取得
	 * @return integer 利用料金
	 */
	public function getAmount() {
		return $this->entryTranSbContinuanceInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranSbContinuanceInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranSbContinuanceInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranSbContinuanceInput->getAccessPass();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranSbContinuanceInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranSbContinuanceInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranSbContinuanceInput->getClientField3();
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranSbContinuanceInput->getRetURL();
	}
	/**
	 * 支払開始期限秒取得
	 * @return integer 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranSbContinuanceInput->getPaymentTermSec();
	}
	/**
	 * 課金基準日取得
	 * @return string 課金基準日
	 */
	public function getChargeDay() {
		return $this->execTranSbContinuanceInput->getChargeDay();
	}
	/**
	 * 初月無料フラグ取得
	 * @return string 初月無料フラグ
	 */
	public function getFirstMonthFreeFlag() {
		return $this->execTranSbContinuanceInput->getFirstMonthFreeFlag();
	}

	/**
	 * ソフトバンク継続取引登録入力パラメータ設定
	 *
	 * @param EntryTranSbContinuanceInput entryTranSbContinuanceInput  取引登録入力パラメータ
	 */
	public function setEntryTranSbContinuanceInput(&$entryTranSbContinuanceInput) {
		$this->entryTranSbContinuanceInput = $entryTranSbContinuanceInput;
	}

	/**
	 * ソフトバンク継続実行入力パラメータ設定
	 *
	 * @param ExecTranSbContinuanceInput  execTranSbContinuanceInput   決済実行入力パラメータ
	 */
	public function setExecTranSbContinuanceInput(&$execTranSbContinuanceInput) {
		$this->execTranSbContinuanceInput = $execTranSbContinuanceInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranSbContinuanceInput->setShopID($shopID);
		$this->execTranSbContinuanceInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranSbContinuanceInput->setShopPass($shopPass);
		$this->execTranSbContinuanceInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranSbContinuanceInput->setOrderID($orderID);
		$this->execTranSbContinuanceInput->setOrderID($orderID);

	}
	/**
	 * 利用料金設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranSbContinuanceInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranSbContinuanceInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranSbContinuanceInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranSbContinuanceInput->setAccessPass($accessPass);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranSbContinuanceInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranSbContinuanceInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranSbContinuanceInput->setClientField3($clientField3);
	}
	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranSbContinuanceInput->setRetURL($retURL);
	}
	/**
	 * 支払開始期限秒設定
	 *
	 * @param integer $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranSbContinuanceInput->setPaymentTermSec($paymentTermSec);
	}
	/**
	 * 課金基準日設定
	 *
	 * @param string $chargeDay
	 */
	public function setChargeDay($chargeDay) {
		$this->execTranSbContinuanceInput->setChargeDay($chargeDay);
	}
	/**
	 * 初月無料フラグ設定
	 *
	 * @param string $firstMonthFreeFlag
	 */
	public function setFirstMonthFreeFlag($firstMonthFreeFlag) {
		$this->execTranSbContinuanceInput->setFirstMonthFreeFlag($firstMonthFreeFlag);
	}

}
?>
