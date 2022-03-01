<?php
require_once 'com/gmo_pg/client/input/EntryTranAuInput.php';
require_once 'com/gmo_pg/client/input/ExecTranAuInput.php';
/**
 * <b>auかんたん決済登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/02/15
 */
class EntryExecTranAuInput {

	/**
	 * @var EntryTranAuInput auかんたん決済登録入力パラメータ
	 */
	private $entryTranAuInput;/* @var $entryTranInput EntryTranAuInput */

	/**
	 * @var ExecTranAuInput auかんたん決済実行入力パラメータ
	 */
	private $execTranAuInput;/* @var $execTranInput ExecTranAuInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranAuInput = new EntryTranAuInput($params);
		$this->execTranAuInput = new ExecTranAuInput($params);
	}

	/**
	 * auかんたん決済取引登録入力パラメータ取得
	 *
	 * @return EntryTranAuInput 取引登録時パラメータ
	 */
	public function &getEntryTranAuInput() {
		return $this->entryTranAuInput;
	}

	/**
	 * auかんたん決済実行入力パラメータ取得
	 * @return ExecTranAuInput 決済実行時パラメータ
	 */
	public function &getExecTranAuInput() {
		return $this->execTranAuInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranAuInput->getShopID();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranAuInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranAuInput->getOrderID();
	}

	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranAuInput->getJobCd();
	}

	/**
	 * 利用金額取得
	 * @return string 利用金額
	 */
	public function getAmount() {
		return $this->entryTranAuInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return string 税送料
	 */
	public function getTax() {
		return $this->entryTranAuInput->getTax();
	}

	/**
	 * 決済タイプ取得
	 * @return string 決済タイプ
	 */
	public function getPaymentType() {
		return $this->entryTranAuInput->getPaymentType();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranAuInput->getAccessID();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranAuInput->getAccessPass();
	}

	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->execTranAuInput->getSiteID();
	}

	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->execTranAuInput->getSitePass();
	}

	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->execTranAuInput->getMemberID();
	}

	/**
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->execTranAuInput->getMemberName();
	}

	/**
	 * 会員作成フラグ取得
	 * @return string 会員作成フラグ
	 */
	public function getCreateMember() {
		return $this->execTranAuInput->getCreateMember();
	}

	/**
	 * 自由項目１取得
	 * @return string 自由項目１
	 */
	public function getClientField1() {
		return $this->execTranAuInput->getClientField1();
	}

	/**
	 * 自由項目２取得
	 * @return string 自由項目２
	 */
	public function getClientField2() {
		return $this->execTranAuInput->getClientField2();
	}

	/**
	 * 自由項目３取得
	 * @return string 自由項目３
	 */
	public function getClientField3() {
		return $this->execTranAuInput->getClientField3();
	}

	/**
	 * 摘要取得
	 * @return string 摘要
	 */
	public function getCommodity() {
		return $this->execTranAuInput->getCommodity();
	}

	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranAuInput->getRetURL();
	}

	/**
	 * 決済結果URL有効期限秒取得
	 * @return string 決済結果URL有効期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranAuInput->getPaymentTermSec();
	}

	/**
	 * 表示サービス名取得
	 * @return string 表示サービス名
	 */
	public function getServiceName() {
		return $this->execTranAuInput->getServiceName();
	}

	/**
	 * 表示電話番号取得
	 * @return string 表示電話番号
	 */
	public function getServiceTel() {
		return $this->execTranAuInput->getServiceTel();
	}

	/**
	 * au承諾番号取得
	 * @return string au承諾番号
	 */
	public function getAuAcceptCode() {
		return $this->execTranAuInput->getAuAcceptCode();
	}

	/**
	 * auかんたん決済取引登録入力パラメータ設定
	 *
	 * @param EntryTranAuInput entryTranAuInput  取引登録入力パラメータ
	 */
	public function setEntryTranAuInput(&$entryTranAuInput) {
		$this->entryTranAuInput = $entryTranAuInput;
	}

	/**
	 * auかんたん決済実行入力パラメータ設定
	 *
	 * @param ExecTranAuInput  execTranAuInput   決済実行入力パラメータ
	 */
	public function setExecTranAuInput(&$execTranAuInput) {
		$this->execTranAuInput = $execTranAuInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranAuInput->setShopID($shopID);
		$this->execTranAuInput->setShopID($shopID);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranAuInput->setShopPass($shopPass);
		$this->execTranAuInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranAuInput->setOrderID($orderID);
		$this->execTranAuInput->setOrderID($orderID);
	}

	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranAuInput->setJobCd($jobCd);
	}

	/**
	 * 利用金額設定
	 *
	 * @param string $amount
	 */
	public function setAmount($amount) {
		$this->entryTranAuInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 *
	 * @param string $tax
	 */
	public function setTax($tax) {
		$this->entryTranAuInput->setTax($tax);
	}

	/**
	 * 決済タイプ設定
	 *
	 * @param string $paymentType
	 */
	public function setPaymentType($paymentType) {
		$this->entryTranAuInput->setPaymentType($paymentType);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranAuInput->setAccessID($accessID);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranAuInput->setAccessPass($accessPass);
	}

	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->execTranAuInput->setSiteID($siteID);
	}

	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->execTranAuInput->setSitePass($sitePass);
	}

	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->execTranAuInput->setMemberID($memberID);
	}

	/**
	 * 会員名設定
	 *
	 * @param string $memberName
	 */
	public function setMemberName($memberName) {
		$this->execTranAuInput->setMemberName($memberName);
	}

	/**
	 * 会員作成フラグ設定
	 *
	 * @param string $createMember
	 */
	public function setCreateMember($createMember) {
		$this->execTranAuInput->setCreateMember($createMember);
	}

	/**
	 * 自由項目１設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranAuInput->setClientField1($clientField1);
	}

	/**
	 * 自由項目２設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranAuInput->setClientField2($clientField2);
	}

	/**
	 * 自由項目３設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranAuInput->setClientField3($clientField3);
	}

	/**
	 * 摘要設定
	 *
	 * @param string $commodity
	 */
	public function setCommodity($commodity) {
		$this->execTranAuInput->setCommodity($commodity);
	}

	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranAuInput->setRetURL($retURL);
	}

	/**
	 * 決済結果URL有効期限秒設定
	 *
	 * @param string $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranAuInput->setPaymentTermSec($paymentTermSec);
	}

	/**
	 * 表示サービス名設定
	 *
	 * @param string $serviceName
	 */
	public function setServiceName($serviceName) {
		$this->execTranAuInput->setServiceName($serviceName);
	}

	/**
	 * 表示電話番号設定
	 *
	 * @param string $serviceTel
	 */
	public function setServiceTel($serviceTel) {
		$this->execTranAuInput->setServiceTel($serviceTel);
	}

	/**
	 * au承諾番号
	 *
	 * @param string $auAcceptCode
	 */
	public function setAuAcceptCode($auAcceptCode) {
		$this->execTranAuInput->setAuAcceptCode($auAcceptCode);
	}
}
?>