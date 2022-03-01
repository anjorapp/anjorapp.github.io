<?php
require_once 'com/gmo_pg/client/input/EntryTranDocomoInput.php';
require_once 'com/gmo_pg/client/input/ExecTranDocomoInput.php';
/**
 * <b>ドコモケータイ払い登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/06/14
 */
class EntryExecTranDocomoInput {

	/**
	 * @var EntryTranDocomoInput ドコモケータイ払い登録入力パラメータ
	 */
	private $entryTranDocomoInput;/* @var $entryTranInput EntryTranDocomoInput */

	/**
	 * @var ExecTranDocomoInput ドコモケータイ払い実行入力パラメータ
	 */
	private $execTranDocomoInput;/* @var $execTranInput ExecTranDocomoInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranDocomoInput = new EntryTranDocomoInput($params);
		$this->execTranDocomoInput = new ExecTranDocomoInput($params);
	}

	/**
	 * ドコモケータイ払い取引登録入力パラメータ取得
	 *
	 * @return EntryTranDocomoInput 取引登録時パラメータ
	 */
	public function &getEntryTranDocomoInput() {
		return $this->entryTranDocomoInput;
	}

	/**
	 * ドコモケータイ払い実行入力パラメータ取得
	 * @return ExecTranDocomoInput 決済実行時パラメータ
	 */
	public function &getExecTranDocomoInput() {
		return $this->execTranDocomoInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranDocomoInput->getShopID();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranDocomoInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranDocomoInput->getOrderID();
	}

	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranDocomoInput->getJobCd();
	}

	/**
	 * 利用金額取得
	 * @return string 利用金額
	 */
	public function getAmount() {
		return $this->entryTranDocomoInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return string 税送料
	 */
	public function getTax() {
		return $this->entryTranDocomoInput->getTax();
	}

	/**
	 * 決済タイプ取得
	 * @return string 決済タイプ
	 */
	public function getPaymentType() {
		return $this->entryTranDocomoInput->getPaymentType();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranDocomoInput->getAccessID();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranDocomoInput->getAccessPass();
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranDocomoInput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranDocomoInput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranDocomoInput->getClientField3();
	}

	/**
	 * ドコモ表示項目1取得
	 * @return string ドコモ表示項目1
	 */
	public function getDocomoDisp1() {
		return $this->execTranDocomoInput->getDocomoDisp1();
	}

	/**
	 * ドコモ表示項目2取得
	 * @return string ドコモ表示項目2
	 */
	public function getDocomoDisp2() {
		return $this->execTranDocomoInput->getDocomoDisp2();
	}

	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranDocomoInput->getRetURL();
	}

	/**
	 * 支払開始期限秒取得
	 * @return string 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranDocomoInput->getPaymentTermSec();
	}

	/**
	 * 利用店舗名取得
	 * @return string 利用店舗名
	 */
	public function getDispShopName() {
		return $this->execTranDocomoInput->getDispShopName();
	}

	/**
	 * 連絡先電話番号取得
	 * @return string 連絡先電話番号
	 */
	public function getDispPhoneNumber() {
		return $this->execTranDocomoInput->getDispPhoneNumber();
	}

	/**
	 * メールアドレス取得
	 * @return string メールアドレス
	 */
	public function getDispMailAddress() {
		return $this->execTranDocomoInput->getDispMailAddress();
	}

	/**
	 * 問合せURL取得
	 * @return string 問合せURL
	 */
	public function getDispShopUrl() {
		return $this->execTranDocomoInput->getDispShopUrl();
	}

	/**
	 * 利用承諾番号取得
	 * @return string 利用承諾番号
	 */
	public function getDocomoAcceptCode() {
		return $this->execTranDocomoInput->getDocomoAcceptCode();
	}

	/**
	 * ドコモケータイ払い取引登録入力パラメータ設定
	 *
	 * @param EntryTranDocomoInput entryTranDocomoInput  取引登録入力パラメータ
	 */
	public function setEntryTranDocomoInput(&$entryTranDocomoInput) {
		$this->entryTranDocomoInput = $entryTranDocomoInput;
	}

	/**
	 * ドコモケータイ払い実行入力パラメータ設定
	 *
	 * @param ExecTranDocomoInput  execTranDocomoInput   決済実行入力パラメータ
	 */
	public function setExecTranDocomoInput(&$execTranDocomoInput) {
		$this->execTranDocomoInput = $execTranDocomoInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranDocomoInput->setShopID($shopID);
		$this->execTranDocomoInput->setShopID($shopID);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranDocomoInput->setShopPass($shopPass);
		$this->execTranDocomoInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranDocomoInput->setOrderID($orderID);
		$this->execTranDocomoInput->setOrderID($orderID);
	}

	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranDocomoInput->setJobCd($jobCd);
	}

	/**
	 * 利用金額設定
	 *
	 * @param string $amount
	 */
	public function setAmount($amount) {
		$this->entryTranDocomoInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 *
	 * @param string $tax
	 */
	public function setTax($tax) {
		$this->entryTranDocomoInput->setTax($tax);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranDocomoInput->setAccessID($accessID);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranDocomoInput->setAccessPass($accessPass);
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranDocomoInput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranDocomoInput->setClientField2($clientField2);
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranDocomoInput->setClientField3($clientField3);
	}

	/**
	 * ドコモ表示項目1設定
	 *
	 * @param string $docomoDisp1
	 */
	public function setDocomoDisp1($docomoDisp1) {
		$this->execTranDocomoInput->setDocomoDisp1($docomoDisp1);
	}

	/**
	 * ドコモ表示項目2設定
	 *
	 * @param string $docomoDisp2
	 */
	public function setDocomoDisp2($docomoDisp2) {
		$this->execTranDocomoInput->setDocomoDisp2($docomoDisp2);
	}

	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranDocomoInput->setRetURL($retURL);
	}

	/**
	 * 支払開始期限秒設定
	 *
	 * @param string $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranDocomoInput->setPaymentTermSec($paymentTermSec);
	}

	/**
	 * 利用店舗名設定
	 *
	 * @param string $dispShopName
	 */
	public function setDispShopName($dispShopName) {
		$this->execTranDocomoInput->setDispShopName($dispShopName);
	}

	/**
	 * 連絡先電話番号設定
	 *
	 * @param string $dispPhoneNumber
	 */
	public function setDispPhoneNumber($dispPhoneNumber) {
		$this->execTranDocomoInput->setDispPhoneNumber($dispPhoneNumber);
	}

	/**
	 * メールアドレス設定
	 *
	 * @param string $dispMailAddress
	 */
	public function setDispMailAddress($dispMailAddress) {
		$this->execTranDocomoInput->setDispMailAddress($dispMailAddress);
	}

	/**
	 * 問合せURL設定
	 *
	 * @param string $dispShopUrl
	 */
	public function setDispShopUrl($dispShopUrl) {
		$this->execTranDocomoInput->setDispShopUrl($dispShopUrl);
	}

	/**
	 * 利用承諾番号設定
	 * @return string 利用承諾番号
	 */
	public function setDocomoAcceptCode($docomoAcceptCode) {
		return $this->execTranDocomoInput->setDocomoAcceptCode($docomoAcceptCode);
	}

}
?>
