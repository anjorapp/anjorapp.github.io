<?php
require_once 'com/gmo_pg/client/input/EntryTranDocomoContinuanceInput.php';
require_once 'com/gmo_pg/client/input/ExecTranDocomoContinuanceInput.php';
/**
 * <b>ドコモ継続決済　登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/08/21
 */
class EntryExecTranDocomoContinuanceInput {

	/**
	 * @var EntryTranDocomoContinuanceInput ドコモ継続決済登録入力パラメータ
	 */
	private $entryTranDocomoContinuanceInput;/* @var $entryTranInput EntryTranDocomoContinuanceInput */

	/**
	 * @var ExecTranDocomoContinuanceInput ドコモ継続決済実行入力パラメータ
	 */
	private $execTranDocomoContinuanceInput;/* @var $execTranInput ExecTranDocomoContinuanceInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranDocomoContinuanceInput = new EntryTranDocomoContinuanceInput($params);
		$this->execTranDocomoContinuanceInput = new ExecTranDocomoContinuanceInput($params);
	}

	/**
	 * ドコモ継続決済取引登録入力パラメータ取得
	 *
	 * @return EntryTranDocomoContinuanceInput 取引登録時パラメータ
	 */
	public function &getEntryTranDocomoContinuanceInput() {
		return $this->entryTranDocomoContinuanceInput;
	}

	/**
	 * ドコモ継続決済実行入力パラメータ取得
	 * @return ExecTranDocomoContinuanceInput 決済実行時パラメータ
	 */
	public function &getExecTranDocomoContinuanceInput() {
		return $this->execTranDocomoContinuanceInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranDocomoContinuanceInput->getShopID();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranDocomoContinuanceInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranDocomoContinuanceInput->getOrderID();
	}

	/**
	 * 利用金額取得
	 * @return string 利用金額
	 */
	public function getAmount() {
		return $this->entryTranDocomoContinuanceInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return string 税送料
	 */
	public function getTax() {
		return $this->entryTranDocomoContinuanceInput->getTax();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranDocomoContinuanceInput->getAccessID();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranDocomoContinuanceInput->getAccessPass();
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranDocomoContinuanceInput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranDocomoContinuanceInput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranDocomoContinuanceInput->getClientField3();
	}

	/**
	 * ドコモ表示項目1取得
	 * @return string ドコモ表示項目1
	 */
	public function getDocomoDisp1() {
		return $this->execTranDocomoContinuanceInput->getDocomoDisp1();
	}

	/**
	 * ドコモ表示項目2取得
	 * @return string ドコモ表示項目2
	 */
	public function getDocomoDisp2() {
		return $this->execTranDocomoContinuanceInput->getDocomoDisp2();
	}

	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranDocomoContinuanceInput->getRetURL();
	}

	/**
	 * 確認日取得
	 * @return string 確認日
	 */
	public function getConfirmBaseDate() {
		return $this->execTranDocomoContinuanceInput->getConfirmBaseDate();
	}

	/**
	 * 初月無料フラグ取得
	 * @return string 初月無料フラグ
	 */
	public function getFirstMonthFreeFlag() {
		return $this->execTranDocomoContinuanceInput->getFirstMonthFreeFlag();
	}

	/**
	 * 支払開始期限秒取得
	 * @return string 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranDocomoContinuanceInput->getPaymentTermSec();
	}

	/**
	 * 利用店舗名取得
	 * @return string 利用店舗名
	 */
	public function getDispShopName() {
		return $this->execTranDocomoContinuanceInput->getDispShopName();
	}

	/**
	 * 連絡先電話番号取得
	 * @return string 連絡先電話番号
	 */
	public function getDispPhoneNumber() {
		return $this->execTranDocomoContinuanceInput->getDispPhoneNumber();
	}

	/**
	 * メールアドレス取得
	 * @return string メールアドレス
	 */
	public function getDispMailAddress() {
		return $this->execTranDocomoContinuanceInput->getDispMailAddress();
	}

	/**
	 * 問合せURL取得
	 * @return string 問合せURL
	 */
	public function getDispShopUrl() {
		return $this->execTranDocomoContinuanceInput->getDispShopUrl();
	}

	/**
	 * ドコモ継続決済取引登録入力パラメータ設定
	 *
	 * @param EntryTranDocomoContinuanceInput entryTranDocomoContinuanceInput  取引登録入力パラメータ
	 */
	public function setEntryTranDocomoContinuanceInput(&$entryTranDocomoContinuanceInput) {
		$this->entryTranDocomoContinuanceInput = $entryTranDocomoContinuanceInput;
	}

	/**
	 * ドコモ継続決済実行入力パラメータ設定
	 *
	 * @param ExecTranDocomoContinuanceInput  execTranDocomoContinuanceInput   決済実行入力パラメータ
	 */
	public function setExecTranDocomoContinuanceInput(&$execTranDocomoContinuanceInput) {
		$this->execTranDocomoContinuanceInput = $execTranDocomoContinuanceInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranDocomoContinuanceInput->setShopID($shopID);
		$this->execTranDocomoContinuanceInput->setShopID($shopID);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranDocomoContinuanceInput->setShopPass($shopPass);
		$this->execTranDocomoContinuanceInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranDocomoContinuanceInput->setOrderID($orderID);
		$this->execTranDocomoContinuanceInput->setOrderID($orderID);
	}

	/**
	 * 利用金額設定
	 *
	 * @param string $amount
	 */
	public function setAmount($amount) {
		$this->entryTranDocomoContinuanceInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 *
	 * @param string $tax
	 */
	public function setTax($tax) {
		$this->entryTranDocomoContinuanceInput->setTax($tax);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranDocomoContinuanceInput->setAccessID($accessID);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranDocomoContinuanceInput->setAccessPass($accessPass);
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranDocomoContinuanceInput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranDocomoContinuanceInput->setClientField2($clientField2);
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranDocomoContinuanceInput->setClientField3($clientField3);
	}

	/**
	 * ドコモ表示項目1設定
	 *
	 * @param string $docomoDisp1
	 */
	public function setDocomoDisp1($docomoDisp1) {
		$this->execTranDocomoContinuanceInput->setDocomoDisp1($docomoDisp1);
	}

	/**
	 * ドコモ表示項目2設定
	 *
	 * @param string $docomoDisp2
	 */
	public function setDocomoDisp2($docomoDisp2) {
		$this->execTranDocomoContinuanceInput->setDocomoDisp2($docomoDisp2);
	}

	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranDocomoContinuanceInput->setRetURL($retURL);
	}

	/**
	 * 確認日設定
	 *
	 * @param string $confirmBaseDate
	 */
	public function setConfirmBaseDate($confirmBaseDate) {
		$this->execTranDocomoContinuanceInput->setConfirmBaseDate($confirmBaseDate);
	}

	/**
	 * 初月無料フラグ設定
	 *
	 * @param string $firstMonthFreeFlag
	 */
	public function setFirstMonthFreeFlag($firstMonthFreeFlag) {
		$this->execTranDocomoContinuanceInput->setFirstMonthFreeFlag($firstMonthFreeFlag);
	}

	/**
	 * 支払開始期限秒設定
	 *
	 * @param string $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranDocomoContinuanceInput->setPaymentTermSec($paymentTermSec);
	}

	/**
	 * 利用店舗名設定
	 *
	 * @param string $dispShopName
	 */
	public function setDispShopName($dispShopName) {
		$this->execTranDocomoContinuanceInput->setDispShopName($dispShopName);
	}

	/**
	 * 連絡先電話番号設定
	 *
	 * @param string $dispPhoneNumber
	 */
	public function setDispPhoneNumber($dispPhoneNumber) {
		$this->execTranDocomoContinuanceInput->setDispPhoneNumber($dispPhoneNumber);
	}

	/**
	 * メールアドレス設定
	 *
	 * @param string $dispMailAddress
	 */
	public function setDispMailAddress($dispMailAddress) {
		$this->execTranDocomoContinuanceInput->setDispMailAddress($dispMailAddress);
	}

	/**
	 * 問合せURL設定
	 *
	 * @param string $dispShopUrl
	 */
	public function setDispShopUrl($dispShopUrl) {
		$this->execTranDocomoContinuanceInput->setDispShopUrl($dispShopUrl);
	}
}
?>
