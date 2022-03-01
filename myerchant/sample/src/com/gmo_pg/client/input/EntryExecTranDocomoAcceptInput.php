<?php
require_once 'com/gmo_pg/client/input/EntryTranDocomoAcceptInput.php';
require_once 'com/gmo_pg/client/input/ExecTranDocomoAcceptInput.php';
/**
 * <b>ドコモ払い_随時決済登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDocomoAcceptInput {

	/**
	 * @var EntryTranDocomoAcceptInput ドコモ払い_随時決済登録入力パラメータ
	 */
	private $entryTranDocomoAcceptInput;/* @var $entryTranInput EntryTranDocomoAcceptInput */

	/**
	 * @var ExecTranDocomoAcceptInput ドコモ払い_随時決済実行入力パラメータ
	 */
	private $execTranDocomoAcceptInput;/* @var $execTranInput ExecTranDocomoAcceptInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranDocomoAcceptInput = new EntryTranDocomoAcceptInput($params);
		$this->execTranDocomoAcceptInput = new ExecTranDocomoAcceptInput($params);
	}

	/**
	 * ドコモ払い_随時決済取引登録入力パラメータ取得
	 *
	 * @return EntryTranDocomoAcceptInput 取引登録時パラメータ
	 */
	public function &getEntryTranDocomoAcceptInput() {
		return $this->entryTranDocomoAcceptInput;
	}

	/**
	 * ドコモ払い_随時決済実行入力パラメータ取得
	 * @return ExecTranDocomoAcceptInput 決済実行時パラメータ
	 */
	public function &getExecTranDocomoAcceptInput() {
		return $this->execTranDocomoAcceptInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranDocomoAcceptInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranDocomoAcceptInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranDocomoAcceptInput->getOrderID();

	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranDocomoAcceptInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranDocomoAcceptInput->getAccessPass();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranDocomoAcceptInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranDocomoAcceptInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranDocomoAcceptInput->getClientField3();
	}
	/**
	 * ドコモ表示項目1取得
	 * @return string ドコモ表示項目1
	 */
	public function getDocomoDisp1() {
		return $this->execTranDocomoAcceptInput->getDocomoDisp1();
	}
	/**
	 * ドコモ表示項目2取得
	 * @return string ドコモ表示項目2
	 */
	public function getDocomoDisp2() {
		return $this->execTranDocomoAcceptInput->getDocomoDisp2();
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranDocomoAcceptInput->getRetURL();
	}
	/**
	 * 支払開始期限秒取得
	 * @return integer 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranDocomoAcceptInput->getPaymentTermSec();
	}
	/**
	 * 利用店舗名取得
	 * @return string 利用店舗名
	 */
	public function getDispShopName() {
		return $this->execTranDocomoAcceptInput->getDispShopName();
	}
	/**
	 * 連絡先電話番号取得
	 * @return string 連絡先電話番号
	 */
	public function getDispPhoneNumber() {
		return $this->execTranDocomoAcceptInput->getDispPhoneNumber();
	}
	/**
	 * メールアドレス取得
	 * @return string メールアドレス
	 */
	public function getDispMailAddress() {
		return $this->execTranDocomoAcceptInput->getDispMailAddress();
	}
	/**
	 * 問合せURL取得
	 * @return string 問合せURL
	 */
	public function getDispShopUrl() {
		return $this->execTranDocomoAcceptInput->getDispShopUrl();
	}

	/**
	 * ドコモ払い_随時決済取引登録入力パラメータ設定
	 *
	 * @param EntryTranDocomoAcceptInput entryTranDocomoAcceptInput  取引登録入力パラメータ
	 */
	public function setEntryTranDocomoAcceptInput(&$entryTranDocomoAcceptInput) {
		$this->entryTranDocomoAcceptInput = $entryTranDocomoAcceptInput;
	}

	/**
	 * ドコモ払い_随時決済実行入力パラメータ設定
	 *
	 * @param ExecTranDocomoAcceptInput  execTranDocomoAcceptInput   決済実行入力パラメータ
	 */
	public function setExecTranDocomoAcceptInput(&$execTranDocomoAcceptInput) {
		$this->execTranDocomoAcceptInput = $execTranDocomoAcceptInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranDocomoAcceptInput->setShopID($shopID);
		$this->execTranDocomoAcceptInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranDocomoAcceptInput->setShopPass($shopPass);
		$this->execTranDocomoAcceptInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranDocomoAcceptInput->setOrderID($orderID);
		$this->execTranDocomoAcceptInput->setOrderID($orderID);

	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranDocomoAcceptInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranDocomoAcceptInput->setAccessPass($accessPass);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranDocomoAcceptInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranDocomoAcceptInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranDocomoAcceptInput->setClientField3($clientField3);
	}
	/**
	 * ドコモ表示項目1設定
	 *
	 * @param string $docomoDisp1
	 */
	public function setDocomoDisp1($docomoDisp1) {
		$this->execTranDocomoAcceptInput->setDocomoDisp1($docomoDisp1);
	}
	/**
	 * ドコモ表示項目2設定
	 *
	 * @param string $docomoDisp2
	 */
	public function setDocomoDisp2($docomoDisp2) {
		$this->execTranDocomoAcceptInput->setDocomoDisp2($docomoDisp2);
	}
	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranDocomoAcceptInput->setRetURL($retURL);
	}
	/**
	 * 支払開始期限秒設定
	 *
	 * @param integer $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranDocomoAcceptInput->setPaymentTermSec($paymentTermSec);
	}
	/**
	 * 利用店舗名設定
	 *
	 * @param string $dispShopName
	 */
	public function setDispShopName($dispShopName) {
		$this->execTranDocomoAcceptInput->setDispShopName($dispShopName);
	}
	/**
	 * 連絡先電話番号設定
	 *
	 * @param string $dispPhoneNumber
	 */
	public function setDispPhoneNumber($dispPhoneNumber) {
		$this->execTranDocomoAcceptInput->setDispPhoneNumber($dispPhoneNumber);
	}
	/**
	 * メールアドレス設定
	 *
	 * @param string $dispMailAddress
	 */
	public function setDispMailAddress($dispMailAddress) {
		$this->execTranDocomoAcceptInput->setDispMailAddress($dispMailAddress);
	}
	/**
	 * 問合せURL設定
	 *
	 * @param string $dispShopUrl
	 */
	public function setDispShopUrl($dispShopUrl) {
		$this->execTranDocomoAcceptInput->setDispShopUrl($dispShopUrl);
	}

}
?>
