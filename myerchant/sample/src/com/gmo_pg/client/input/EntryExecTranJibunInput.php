<?php
require_once 'com/gmo_pg/client/input/EntryTranJibunInput.php';
require_once 'com/gmo_pg/client/input/ExecTranJibunInput.php';
/**
 * <b>じぶん銀行決済登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/10/31
 */
class EntryExecTranJibunInput {

	/**
	 * @var EntryTranJibunInput じぶん銀行決済登録入力パラメータ
	 */
	private $entryTranJibunInput;/* @var $entryTranInput EntryTranJibunInput */

	/**
	 * @var ExecTranJibunInput じぶん銀行決済実行入力パラメータ
	 */
	private $execTranJibunInput;/* @var $execTranInput ExecTranJibunInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranJibunInput = new EntryTranJibunInput($params);
		$this->execTranJibunInput = new ExecTranJibunInput($params);
	}

	/**
	 * じぶん銀行決済取引登録入力パラメータ取得
	 *
	 * @return EntryTranJibunInput 取引登録時パラメータ
	 */
	public function &getEntryTranJibunInput() {
		return $this->entryTranJibunInput;
	}

	/**
	 * じぶん銀行決済実行入力パラメータ取得
	 * @return ExecTranJibunInput 決済実行時パラメータ
	 */
	public function &getExecTranJibunInput() {
		return $this->execTranJibunInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranJibunInput->getShopID();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranJibunInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranJibunInput->getOrderID();
	}

	/**
	 * 利用金額取得
	 * @return string 利用金額
	 */
	public function getAmount() {
		return $this->entryTranJibunInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return string 税送料
	 */
	public function getTax() {
		return $this->entryTranJibunInput->getTax();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranJibunInput->getAccessID();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranJibunInput->getAccessPass();
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranJibunInput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranJibunInput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranJibunInput->getClientField3();
	}

	/**
	 * 振込内容取得
	 * @return string 振込内容
	 */
	public function getPayDescription() {
		return $this->execTranJibunInput->getPayDescription();
	}

	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranJibunInput->getRetURL();
	}

	/**
	 * 支払開始期限秒取得
	 * @return string 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranJibunInput->getPaymentTermSec();
	}

	/**
	 * じぶん銀行決済取引登録入力パラメータ設定
	 *
	 * @param EntryTranJibunInput entryTranJibunInput  取引登録入力パラメータ
	 */
	public function setEntryTranJibunInput(&$entryTranJibunInput) {
		$this->entryTranJibunInput = $entryTranJibunInput;
	}

	/**
	 * じぶん銀行決済実行入力パラメータ設定
	 *
	 * @param ExecTranJibunInput  execTranJibunInput   決済実行入力パラメータ
	 */
	public function setExecTranJibunInput(&$execTranJibunInput) {
		$this->execTranJibunInput = $execTranJibunInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranJibunInput->setShopID($shopID);
		$this->execTranJibunInput->setShopID($shopID);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranJibunInput->setShopPass($shopPass);
		$this->execTranJibunInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranJibunInput->setOrderID($orderID);
		$this->execTranJibunInput->setOrderID($orderID);
	}

	/**
	 * 利用金額設定
	 *
	 * @param string $amount
	 */
	public function setAmount($amount) {
		$this->entryTranJibunInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 *
	 * @param string $tax
	 */
	public function setTax($tax) {
		$this->entryTranJibunInput->setTax($tax);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranJibunInput->setAccessID($accessID);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranJibunInput->setAccessPass($accessPass);
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranJibunInput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranJibunInput->setClientField2($clientField2);
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranJibunInput->setClientField3($clientField3);
	}

	/**
	 * 振込内容設定
	 *
	 * @param string $payDescription
	 */
	public function setPayDescription($payDescription) {
		$this->execTranJibunInput->setPayDescription($payDescription);
	}

	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranJibunInput->setRetURL($retURL);
	}

	/**
	 * 支払開始期限秒設定
	 *
	 * @param string $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranJibunInput->setPaymentTermSec($paymentTermSec);
	}

}
?>
