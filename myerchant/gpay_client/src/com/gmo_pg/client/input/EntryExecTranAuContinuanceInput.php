<?php
require_once 'com/gmo_pg/client/input/EntryTranAuContinuanceInput.php';
require_once 'com/gmo_pg/client/input/ExecTranAuContinuanceInput.php';
/**
 * <b>auかんたん決済継続課金登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2013/06/05
 */
class EntryExecTranAuContinuanceInput {

	/**
	 * @var EntryTranAuContinuanceInput auかんたん決済継続課金登録入力パラメータ
	 */
	private $entryTranAuContinuanceInput;/* @var $entryTranInput EntryTranAuContinuanceInput */

	/**
	 * @var ExecTranAuContinuanceInput auかんたん決済継続課金実行入力パラメータ
	 */
	private $execTranAuContinuanceInput;/* @var $execTranInput ExecTranAuContinuanceInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranAuContinuanceInput = new EntryTranAuContinuanceInput($params);
		$this->execTranAuContinuanceInput = new ExecTranAuContinuanceInput($params);
	}

	/**
	 * auかんたん決済継続課金取引登録入力パラメータ取得
	 *
	 * @return EntryTranAuContinuanceInput 取引登録時パラメータ
	 */
	public function &getEntryTranAuContinuanceInput() {
		return $this->entryTranAuContinuanceInput;
	}

	/**
	 * auかんたん決済継続課金実行入力パラメータ取得
	 * @return ExecTranAuContinuanceInput 決済実行時パラメータ
	 */
	public function &getExecTranAuContinuanceInput() {
		return $this->execTranAuContinuanceInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranAuContinuanceInput->getShopID();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranAuContinuanceInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranAuContinuanceInput->getOrderID();
	}

	/**
	 * 課金利用金額取得
	 * @return string 課金利用金額
	 */
	public function getAmount() {
		return $this->entryTranAuContinuanceInput->getAmount();
	}

	/**
	 * 課金税送料取得
	 * @return string 課金税送料
	 */
	public function getTax() {
		return $this->entryTranAuContinuanceInput->getTax();
	}

	/**
	 * 初回課金利用金額取得
	 * @return string 初回課金利用金額
	 */
	public function getFirstAmount() {
		return $this->entryTranAuContinuanceInput->getFirstAmount();
	}

	/**
	 * 初回課金税送料取得
	 * @return string 初回課金税送料
	 */
	public function getFirstTax() {
		return $this->entryTranAuContinuanceInput->getFirstTax();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranAuContinuanceInput->getAccessID();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranAuContinuanceInput->getAccessPass();
	}

	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->execTranAuContinuanceInput->getSiteID();
	}

	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->execTranAuContinuanceInput->getSitePass();
	}

	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->execTranAuContinuanceInput->getMemberID();
	}

	/**
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->execTranAuContinuanceInput->getMemberName();
	}

	/**
	 * 会員作成フラグ取得
	 * @return string 会員作成フラグ
	 */
	public function getCreateMember() {
		return $this->execTranAuContinuanceInput->getCreateMember();
	}

	/**
	 * 自由項目１取得
	 * @return string 自由項目１
	 */
	public function getClientField1() {
		return $this->execTranAuContinuanceInput->getClientField1();
	}

	/**
	 * 自由項目２取得
	 * @return string 自由項目２
	 */
	public function getClientField2() {
		return $this->execTranAuContinuanceInput->getClientField2();
	}

	/**
	 * 自由項目３取得
	 * @return string 自由項目３
	 */
	public function getClientField3() {
		return $this->execTranAuContinuanceInput->getClientField3();
	}

	/**
	 * 摘要取得
	 * @return string 摘要
	 */
	public function getCommodity() {
		return $this->execTranAuContinuanceInput->getCommodity();
	}

	/**
	 * 課金タイミング区分取得
	 * @return string 課金タイミング区分
	 */
	public function getAccountTimingKbn() {
		return $this->execTranAuContinuanceInput->getAccountTimingKbn();
	}

	/**
	 * 課金タイミング取得
	 * @return string 課金タイミング
	 */
	public function getAccountTiming() {
		return $this->execTranAuContinuanceInput->getAccountTiming();
	}

	/**
	 * 初回課金日取得
	 * @return string 初回課金日
	 */
	public function getFirstAccountDate() {
		return $this->execTranAuContinuanceInput->getFirstAccountDate();
	}

	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranAuContinuanceInput->getRetURL();
	}

	/**
	 * 決済結果URL有効期限秒取得
	 * @return string 決済結果URL有効期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranAuContinuanceInput->getPaymentTermSec();
	}

	/**
	 * 表示サービス名取得
	 * @return string 表示サービス名
	 */
	public function getServiceName() {
		return $this->execTranAuContinuanceInput->getServiceName();
	}

	/**
	 * 表示電話番号取得
	 * @return string 表示電話番号
	 */
	public function getServiceTel() {
		return $this->execTranAuContinuanceInput->getServiceTel();
	}

	/**
	 * auかんたん決済継続課金取引登録入力パラメータ設定
	 *
	 * @param entryTranAuContinuanceInput entryTranAuContinuanceInput  取引登録入力パラメータ
	 */
	public function setEntryTranAuContinuanceInput(&$entryTranAuContinuanceInput) {
		$this->entryTranAuContinuanceInput = $entryTranAuContinuanceInput;
	}

	/**
	 * auかんたん決済継続課金実行入力パラメータ設定
	 *
	 * @param execTranAuContinuanceInput  execTranAuContinuanceInput   決済実行入力パラメータ
	 */
	public function setExecTranAuContinuanceInput(&$execTranAuContinuanceInput) {
		$this->execTranAuContinuanceInput = $execTranAuContinuanceInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranAuContinuanceInput->setShopID($shopID);
		$this->execTranAuContinuanceInput->setShopID($shopID);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranAuContinuanceInput->setShopPass($shopPass);
		$this->execTranAuContinuanceInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranAuContinuanceInput->setOrderID($orderID);
		$this->execTranAuContinuanceInput->setOrderID($orderID);
	}

	/**
	 * 課金利用金額設定
	 *
	 * @param string $amount
	 */
	public function setAmount($amount) {
		$this->entryTranAuContinuanceInput->setAmount($amount);
	}

	/**
	 * 課金税送料設定
	 *
	 * @param string $tax
	 */
	public function setTax($tax) {
		$this->entryTranAuContinuanceInput->setTax($tax);
	}

	/**
	 * 初回課金利用金額設定
	 *
	 * @param string $firstAmount
	 */
	public function setFirstAmount($firstAmount) {
		$this->entryTranAuContinuanceInput->setFirstAmount($firstAmount);
	}

	/**
	 * 初回課金税送料設定
	 *
	 * @param string $firstTax
	 */
	public function setFirstTax($firstTax) {
		$this->entryTranAuContinuanceInput->setFirstTax($firstTax);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranAuContinuanceInput->setAccessID($accessID);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranAuContinuanceInput->setAccessPass($accessPass);
	}

	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->execTranAuContinuanceInput->setSiteID($siteID);
	}

	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->execTranAuContinuanceInput->setSitePass($sitePass);
	}

	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->execTranAuContinuanceInput->setMemberID($memberID);
	}

	/**
	 * 会員名設定
	 *
	 * @param string $memberName
	 */
	public function setMemberName($memberName) {
		$this->execTranAuContinuanceInput->setMemberName($memberName);
	}

	/**
	 * 会員作成フラグ設定
	 *
	 * @param string $createMember
	 */
	public function setCreateMember($createMember) {
		$this->execTranAuContinuanceInput->setCreateMember($createMember);
	}

	/**
	 * 自由項目１設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranAuContinuanceInput->setClientField1($clientField1);
	}

	/**
	 * 自由項目２設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranAuContinuanceInput->setClientField2($clientField2);
	}

	/**
	 * 自由項目３設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranAuContinuanceInput->setClientField3($clientField3);
	}

	/**
	 * 摘要設定
	 *
	 * @param string $commodity
	 */
	public function setCommodity($commodity) {
		$this->execTranAuContinuanceInput->setCommodity($commodity);
	}

	/**
	 * 課金タイミング区分設定
	 *
	 * @param string $accountTimingKbn
	 */
	public function setAccountTimingKbn($accountTimingKbn) {
		$this->execTranAuContinuanceInput->setAccountTimingKbn($accountTimingKbn);
	}

	/**
	 * 課金タイミング設定
	 *
	 * @param string $accountTiming
	 */
	public function setAccountTiming($accountTiming) {
		$this->execTranAuContinuanceInput->setAccountTiming($accountTiming);
	}

	/**
	 * 初回課金日設定
	 *
	 * @param string $firstAccountDate
	 */
	public function setFirstAccountDate($firstAccountDate) {
		$this->execTranAuContinuanceInput->setFirstAccountDate($firstAccountDate);
	}

	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranAuContinuanceInput->setRetURL($retURL);
	}

	/**
	 * 決済結果URL有効期限秒設定
	 *
	 * @param string $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranAuContinuanceInput->setPaymentTermSec($paymentTermSec);
	}

	/**
	 * 表示サービス名設定
	 *
	 * @param string $serviceName
	 */
	public function setServiceName($serviceName) {
		$this->execTranAuContinuanceInput->setServiceName($serviceName);
	}

	/**
	 * 表示電話番号設定
	 *
	 * @param string $serviceTel
	 */
	public function setServiceTel($serviceTel) {
		$this->execTranAuContinuanceInput->setServiceTel($serviceTel);
	}

}
?>