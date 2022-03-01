<?php
require_once 'com/gmo_pg/client/input/EntryTranLinepayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranLinepayInput.php';
/**
 * <b>LINE Pay登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranLinepayInput {

	/**
	 * @var EntryTranLinepayInput LINE Pay登録入力パラメータ
	 */
	private $entryTranLinepayInput;/* @var $entryTranInput EntryTranLinepayInput */

	/**
	 * @var ExecTranLinepayInput LINE Pay実行入力パラメータ
	 */
	private $execTranLinepayInput;/* @var $execTranInput ExecTranLinepayInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranLinepayInput = new EntryTranLinepayInput($params);
		$this->execTranLinepayInput = new ExecTranLinepayInput($params);
	}

	/**
	 * LINE Pay取引登録入力パラメータ取得
	 *
	 * @return EntryTranLinepayInput 取引登録時パラメータ
	 */
	public function &getEntryTranLinepayInput() {
		return $this->entryTranLinepayInput;
	}

	/**
	 * LINE Pay実行入力パラメータ取得
	 * @return ExecTranLinepayInput 決済実行時パラメータ
	 */
	public function &getExecTranLinepayInput() {
		return $this->execTranLinepayInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranLinepayInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranLinepayInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranLinepayInput->getOrderID();

	}
	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranLinepayInput->getJobCd();
	}
	/**
	 * 利用料金取得
	 * @return bigDecimal 利用料金
	 */
	public function getAmount() {
		return $this->entryTranLinepayInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return bigDecimal 税送料
	 */
	public function getTax() {
		return $this->entryTranLinepayInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranLinepayInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranLinepayInput->getAccessPass();
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->execTranLinepayInput->getSiteID();
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->execTranLinepayInput->getSitePass();
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->execTranLinepayInput->getMemberID();
	}
	/**
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->execTranLinepayInput->getMemberName();
	}
	/**
	 * 会員登録フラグ取得
	 * @return string 会員登録フラグ
	 */
	public function getCreateMember() {
		return $this->execTranLinepayInput->getCreateMember();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranLinepayInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranLinepayInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranLinepayInput->getClientField3();
	}
	/**
	 * 加盟店自由項目返却フラグ取得
	 * @return string 加盟店自由項目返却フラグ
	 */
	public function getClientFieldFlag() {
		return $this->execTranLinepayInput->getClientFieldFlag();
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranLinepayInput->getRetURL();
	}
	/**
	 * 処理NG時URL取得
	 * @return string 処理NG時URL
	 */
	public function getErrorRcvURL() {
		return $this->execTranLinepayInput->getErrorRcvURL();
	}
	/**
	 * 商品画像URL取得
	 * @return string 商品画像URL
	 */
	public function getProductImageUrl() {
		return $this->execTranLinepayInput->getProductImageUrl();
	}
	/**
	 * LineメンバーID取得
	 * @return string LineメンバーID
	 */
	public function getMid() {
		return $this->execTranLinepayInput->getMid();
	}
	/**
	 * 受取人連絡先取得
	 * @return string 受取人連絡先
	 */
	public function getDeliveryPlacePhone() {
		return $this->execTranLinepayInput->getDeliveryPlacePhone();
	}
	/**
	 * 決済待機画面用言語取得
	 * @return string 決済待機画面用言語
	 */
	public function getLangCode() {
		return $this->execTranLinepayInput->getLangCode();
	}
	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getProductName() {
		return $this->execTranLinepayInput->getProductName();
	}
	/**
	 * phishing防止用情報(PackageName)取得
	 * @return string phishing防止用情報(PackageName)
	 */
	public function getPackageName() {
		return $this->execTranLinepayInput->getPackageName();
	}
	/**
	 * 端末情報取得
	 * @return string 端末情報
	 */
	public function getUserInfo() {
		return $this->execTranLinepayInput->getUserInfo();
	}
	/**
	 * 戻り先URLスキーム取得
	 * @return string 戻り先URLスキーム
	 */
	public function getReturnUrl() {
		return $this->execTranLinepayInput->getReturnUrl();
	}

	/**
	 * LINE Pay取引登録入力パラメータ設定
	 *
	 * @param EntryTranLinepayInput entryTranLinepayInput  取引登録入力パラメータ
	 */
	public function setEntryTranLinepayInput(&$entryTranLinepayInput) {
		$this->entryTranLinepayInput = $entryTranLinepayInput;
	}

	/**
	 * LINE Pay実行入力パラメータ設定
	 *
	 * @param ExecTranLinepayInput  execTranLinepayInput   決済実行入力パラメータ
	 */
	public function setExecTranLinepayInput(&$execTranLinepayInput) {
		$this->execTranLinepayInput = $execTranLinepayInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranLinepayInput->setShopID($shopID);
		$this->execTranLinepayInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranLinepayInput->setShopPass($shopPass);
		$this->execTranLinepayInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranLinepayInput->setOrderID($orderID);
		$this->execTranLinepayInput->setOrderID($orderID);

	}
	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranLinepayInput->setJobCd($jobCd);
	}
	/**
	 * 利用料金設定
	 *
	 * @param bigDecimal $amount
	 */
	public function setAmount($amount) {
		$this->entryTranLinepayInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param bigDecimal $tax
	 */
	public function setTax($tax) {
		$this->entryTranLinepayInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranLinepayInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranLinepayInput->setAccessPass($accessPass);
	}
	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->execTranLinepayInput->setSiteID($siteID);
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->execTranLinepayInput->setSitePass($sitePass);
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->execTranLinepayInput->setMemberID($memberID);
	}
	/**
	 * 会員名設定
	 *
	 * @param string $memberName
	 */
	public function setMemberName($memberName) {
		$this->execTranLinepayInput->setMemberName($memberName);
	}
	/**
	 * 会員登録フラグ設定
	 *
	 * @param string $createMember
	 */
	public function setCreateMember($createMember) {
		$this->execTranLinepayInput->setCreateMember($createMember);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranLinepayInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranLinepayInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranLinepayInput->setClientField3($clientField3);
	}
	/**
	 * 加盟店自由項目返却フラグ設定
	 *
	 * @param string $clientFieldFlag
	 */
	public function setClientFieldFlag($clientFieldFlag) {
		$this->execTranLinepayInput->setClientFieldFlag($clientFieldFlag);
	}
	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranLinepayInput->setRetURL($retURL);
	}
	/**
	 * 処理NG時URL設定
	 *
	 * @param string $errorRcvURL
	 */
	public function setErrorRcvURL($errorRcvURL) {
		$this->execTranLinepayInput->setErrorRcvURL($errorRcvURL);
	}
	/**
	 * 商品画像URL設定
	 *
	 * @param string $productImageUrl
	 */
	public function setProductImageUrl($productImageUrl) {
		$this->execTranLinepayInput->setProductImageUrl($productImageUrl);
	}
	/**
	 * LineメンバーID設定
	 *
	 * @param string $mid
	 */
	public function setMid($mid) {
		$this->execTranLinepayInput->setMid($mid);
	}
	/**
	 * 受取人連絡先設定
	 *
	 * @param string $deliveryPlacePhone
	 */
	public function setDeliveryPlacePhone($deliveryPlacePhone) {
		$this->execTranLinepayInput->setDeliveryPlacePhone($deliveryPlacePhone);
	}
	/**
	 * 決済待機画面用言語設定
	 *
	 * @param string $langCode
	 */
	public function setLangCode($langCode) {
		$this->execTranLinepayInput->setLangCode($langCode);
	}
	/**
	 * 商品名設定
	 *
	 * @param string $productName
	 */
	public function setProductName($productName) {
		$this->execTranLinepayInput->setProductName($productName);
	}
	/**
	 * phishing防止用情報(PackageName)設定
	 *
	 * @param string $packageName
	 */
	public function setPackageName($packageName) {
		$this->execTranLinepayInput->setPackageName($packageName);
	}
	/**
	 * 端末情報設定
	 *
	 * @param string $userInfo
	 */
	public function setUserInfo($userInfo) {
		$this->execTranLinepayInput->setUserInfo($userInfo);
	}
	/**
	 * 戻り先URLスキーム設定
	 *
	 * @param string $returnUrl
	 */
	public function setReturnUrl($returnUrl) {
		$this->execTranLinepayInput->setReturnUrl($returnUrl);
	}

}
?>
