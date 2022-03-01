<?php
require_once 'com/gmo_pg/client/input/EntryTranAuAcceptInput.php';
require_once 'com/gmo_pg/client/input/ExecTranAuAcceptInput.php';
/**
 * <b>auかんたん決済支払い（利用承諾）登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAuAcceptInput {

	/**
	 * @var EntryTranAuAcceptInput auかんたん決済支払い（利用承諾）登録入力パラメータ
	 */
	private $entryTranAuAcceptInput;/* @var $entryTranInput EntryTranAuAcceptInput */

	/**
	 * @var ExecTranAuAcceptInput auかんたん決済支払い（利用承諾）実行入力パラメータ
	 */
	private $execTranAuAcceptInput;/* @var $execTranInput ExecTranAuAcceptInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranAuAcceptInput = new EntryTranAuAcceptInput($params);
		$this->execTranAuAcceptInput = new ExecTranAuAcceptInput($params);
	}

	/**
	 * auかんたん決済支払い（利用承諾）取引登録入力パラメータ取得
	 *
	 * @return EntryTranAuAcceptInput 取引登録時パラメータ
	 */
	public function &getEntryTranAuAcceptInput() {
		return $this->entryTranAuAcceptInput;
	}

	/**
	 * auかんたん決済支払い（利用承諾）実行入力パラメータ取得
	 * @return ExecTranAuAcceptInput 決済実行時パラメータ
	 */
	public function &getExecTranAuAcceptInput() {
		return $this->execTranAuAcceptInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranAuAcceptInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranAuAcceptInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranAuAcceptInput->getOrderID();

	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranAuAcceptInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranAuAcceptInput->getAccessPass();
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->execTranAuAcceptInput->getSiteID();
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->execTranAuAcceptInput->getSitePass();
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->execTranAuAcceptInput->getMemberID();
	}
	/**
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->execTranAuAcceptInput->getMemberName();
	}
	/**
	 * 会員作成フラグ取得
	 * @return string 会員作成フラグ
	 */
	public function getCreateMember() {
		return $this->execTranAuAcceptInput->getCreateMember();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranAuAcceptInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranAuAcceptInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranAuAcceptInput->getClientField3();
	}
	/**
	 * 摘要取得
	 * @return string 摘要
	 */
	public function getCommodity() {
		return $this->execTranAuAcceptInput->getCommodity();
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranAuAcceptInput->getRetURL();
	}
	/**
	 * 支払開始期限秒取得
	 * @return integer 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranAuAcceptInput->getPaymentTermSec();
	}
	/**
	 * 表示サービス名取得
	 * @return string 表示サービス名
	 */
	public function getServiceName() {
		return $this->execTranAuAcceptInput->getServiceName();
	}
	/**
	 * 表示電話番号取得
	 * @return string 表示電話番号
	 */
	public function getServiceTel() {
		return $this->execTranAuAcceptInput->getServiceTel();
	}

	/**
	 * auかんたん決済支払い（利用承諾）取引登録入力パラメータ設定
	 *
	 * @param EntryTranAuAcceptInput entryTranAuAcceptInput  取引登録入力パラメータ
	 */
	public function setEntryTranAuAcceptInput(&$entryTranAuAcceptInput) {
		$this->entryTranAuAcceptInput = $entryTranAuAcceptInput;
	}

	/**
	 * auかんたん決済支払い（利用承諾）実行入力パラメータ設定
	 *
	 * @param ExecTranAuAcceptInput  execTranAuAcceptInput   決済実行入力パラメータ
	 */
	public function setExecTranAuAcceptInput(&$execTranAuAcceptInput) {
		$this->execTranAuAcceptInput = $execTranAuAcceptInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranAuAcceptInput->setShopID($shopID);
		$this->execTranAuAcceptInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranAuAcceptInput->setShopPass($shopPass);
		$this->execTranAuAcceptInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranAuAcceptInput->setOrderID($orderID);
		$this->execTranAuAcceptInput->setOrderID($orderID);

	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranAuAcceptInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranAuAcceptInput->setAccessPass($accessPass);
	}
	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->execTranAuAcceptInput->setSiteID($siteID);
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->execTranAuAcceptInput->setSitePass($sitePass);
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->execTranAuAcceptInput->setMemberID($memberID);
	}
	/**
	 * 会員名設定
	 *
	 * @param string $memberName
	 */
	public function setMemberName($memberName) {
		$this->execTranAuAcceptInput->setMemberName($memberName);
	}
	/**
	 * 会員作成フラグ設定
	 *
	 * @param string $createMember
	 */
	public function setCreateMember($createMember) {
		$this->execTranAuAcceptInput->setCreateMember($createMember);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranAuAcceptInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranAuAcceptInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranAuAcceptInput->setClientField3($clientField3);
	}
	/**
	 * 摘要設定
	 *
	 * @param string $commodity
	 */
	public function setCommodity($commodity) {
		$this->execTranAuAcceptInput->setCommodity($commodity);
	}
	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranAuAcceptInput->setRetURL($retURL);
	}
	/**
	 * 支払開始期限秒設定
	 *
	 * @param integer $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranAuAcceptInput->setPaymentTermSec($paymentTermSec);
	}
	/**
	 * 表示サービス名設定
	 *
	 * @param string $serviceName
	 */
	public function setServiceName($serviceName) {
		$this->execTranAuAcceptInput->setServiceName($serviceName);
	}
	/**
	 * 表示電話番号設定
	 *
	 * @param string $serviceTel
	 */
	public function setServiceTel($serviceTel) {
		$this->execTranAuAcceptInput->setServiceTel($serviceTel);
	}

}
?>
