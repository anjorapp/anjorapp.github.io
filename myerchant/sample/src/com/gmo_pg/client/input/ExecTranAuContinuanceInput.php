<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>auかんたん決済継続課金決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2013/06/05
 */
class ExecTranAuContinuanceInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;

	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;

	/**
	 * @var string 取引ID
	 */
	private $accessID;

	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;

	/**
	 * @var string オーダーID
	 */
	private $orderID;

	/**
	 * @var string サイトID
	 */
	private $siteID;

	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;

	/**
	 * @var string 会員ID
	 */
	private $memberID;

	/**
	 * @var string 会員名
	 */
	private $memberName;

	/**
	 * @var string 会員作成フラグ
	 */
	private $createMember;

	/**
	 * @var string 自由項目１
	 */
	private $clientField1;

	/**
	 * @var string 自由項目２
	 */
	private $clientField2;

	/**
	 * @var string 自由項目３
	 */
	private $clientField3;

	/**
	 * @var string 摘要
	 */
	private $commodity;

	/**
	 * @var string 課金タイミング区分
	 */
	private $accountTimingKbn;

	/**
	 * @var string 課金タイミング
	 */
	private $accountTiming;

	/**
	 * @var string 初回課金日
	 */
	private $firstAccountDate;

	/**
	 * @var string 決済結果戻しURL
	 */
	private $retURL;

	/**
	 * @var string 決済結果URL有効期限秒
	 */
	private $paymentTermSec;

	/**
	 * @var string 表示サービス名
	 */
	private $serviceName;

	/**
	 * @var string 表示電話番号
	 */
	private $serviceTel;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->shopPass;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->accessID;
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}

	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}

	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->sitePass;
	}

	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}

	/**
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->memberName;
	}

	/**
	 * 会員作成フラグ取得
	 * @return string 会員作成フラグ
	 */
	public function getCreateMember() {
		return $this->createMember;
	}

	/**
	 * 自由項目１取得
	 * @return string 自由項目１
	 */
	public function getClientField1() {
		return $this->clientField1;
	}

	/**
	 * 自由項目２取得
	 * @return string 自由項目２
	 */
	public function getClientField2() {
		return $this->clientField2;
	}

	/**
	 * 自由項目３取得
	 * @return string 自由項目３
	 */
	public function getClientField3() {
		return $this->clientField3;
	}

	/**
	 * 摘要取得
	 * @return string 摘要
	 */
	public function getCommodity() {
		return $this->commodity;
	}

	/**
	 * 課金タイミング区分取得
	 * @return string 課金タイミング区分
	 */
	public function getAccountTimingKbn() {
		return $this->accountTimingKbn;
	}

	/**
	 * 課金タイミング取得
	 * @return string 課金タイミング
	 */
	public function getAccountTiming() {
		return $this->accountTiming;
	}

	/**
	 * 初回課金日取得
	 * @return string 初回課金日
	 */
	public function getFirstAccountDate() {
		return $this->firstAccountDate;
	}

	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->retURL;
	}

	/**
	 * 決済結果URL有効期限秒取得
	 * @return integer 決済結果URL有効期限秒
	 */
	public function getPaymentTermSec() {
		return $this->paymentTermSec;
	}

	/**
	 * 表示サービス名取得
	 * @return string 表示サービス名
	 */
	public function getServiceName() {
		return $this->serviceName;
	}

	/**
	 * 表示電話番号取得
	 * @return string 表示電話番号
	 */
	public function getServiceTel() {
		return $this->serviceTel;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->shopID = $shopID;
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->accessID = $accessID;
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}

	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->siteID = $siteID;
	}

	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}

	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}

	/**
	 * 会員名設定
	 *
	 * @param string $memberName
	 */
	public function setMemberName($memberName) {
		$this->memberName = $memberName;
	}

	/**
	 * 会員作成フラグ設定
	 *
	 * @param string $createMember
	 */
	public function setCreateMember($createMember) {
		$this->createMember = $createMember;
	}

	/**
	 * 自由項目１設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 自由項目２設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 自由項目３設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}

	/**
	 * 摘要設定
	 *
	 * @param string $commodity
	 */
	public function setCommodity($commodity) {
		$this->commodity = $commodity;
	}

	/**
	 * 課金タイミング区分設定
	 *
	 * @param string $accountTimingKbn
	 */
	public function setAccountTimingKbn($accountTimingKbn) {
		$this->accountTimingKbn = $accountTimingKbn;
	}

	/**
	 * 課金タイミング設定
	 *
	 * @param string $accountTiming
	 */
	public function setAccountTiming($accountTiming) {
		$this->accountTiming = $accountTiming;
	}

	/**
	 * 初回課金日設定
	 *
	 * @param string $firstAccountDate
	 */
	public function setFirstAccountDate($firstAccountDate) {
		$this->firstAccountDate = $firstAccountDate;
	}

	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->retURL = $retURL;
	}

	/**
	 * 決済結果URL有効期限秒設定
	 *
	 * @param integer $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->paymentTermSec = $paymentTermSec;
	}

	/**
	 * 表示サービス名設定
	 *
	 * @param string $serviceName
	 */
	public function setServiceName($serviceName) {
		$this->serviceName = $serviceName;
	}

	/**
	 * 表示電話番号設定
	 *
	 * @param string $serviceTel
	 */
	public function setServiceTel($serviceTel) {
		$this->serviceTel = $serviceTel;
	}


	/**
	 * デフォルト値設定
	 */
	public function setDefaultValues() {

	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

	    $this->setShopID($this->getStringValue($params, 'ShopID', $this->getShopID()));
	    $this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
	    $this->setAccessID($this->getStringValue($params, 'AccessID', $this->getAccessID()));
	    $this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
	    $this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
	    $this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
	    $this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
	    $this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
	    $this->setMemberName($this->getStringValue($params, 'MemberName', $this->getMemberName()));
	    $this->setCreateMember($this->getStringValue($params, 'CreateMember', $this->getCreateMember()));
	    $this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
	    $this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
	    $this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));
	    $this->setCommodity($this->getStringValue($params, 'Commodity', $this->getCommodity()));
	    $this->setAccountTimingKbn($this->getStringValue($params, 'AccountTimingKbn', $this->getAccountTimingKbn()));
	    $this->setAccountTiming($this->getStringValue($params, 'AccountTiming', $this->getAccountTiming()));
	    $this->setFirstAccountDate($this->getStringValue($params, 'FirstAccountDate', $this->getFirstAccountDate()));
	    $this->setRetURL($this->getStringValue($params, 'RetURL', $this->getRetURL()));
	    $this->setPaymentTermSec($this->getStringValue($params, 'PaymentTermSec', $this->getPaymentTermSec()));
	    $this->setServiceName($this->getStringValue($params, 'ServiceName', $this->getServiceName()));
	    $this->setServiceTel($this->getStringValue($params, 'ServiceTel', $this->getServiceTel()));
	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
	    $str .= 'ShopID=' . $this->encodeStr($this->getShopID());
	    $str .= '&';
	    $str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
	    $str .= '&';
	    $str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
	    $str .= '&';
	    $str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
	    $str .= '&';
	    $str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
	    $str .= '&';
	    $str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
	    $str .= '&';
	    $str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
	    $str .= '&';
	    $str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
	    $str .= '&';
	    $str .= 'MemberName=' . $this->encodeStr($this->getMemberName());
	    $str .= '&';
	    $str .= 'CreateMember=' . $this->encodeStr($this->getCreateMember());
	    $str .= '&';
	    $str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
	    $str .= '&';
	    $str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
	    $str .= '&';
	    $str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
	    $str .= '&';
	    $str .= 'Commodity=' . $this->encodeStr($this->getCommodity());
	    $str .= '&';
	    $str .= 'AccountTimingKbn=' . $this->encodeStr($this->getAccountTimingKbn());
	    $str .= '&';
	    $str .= 'AccountTiming=' . $this->encodeStr($this->getAccountTiming());
	    $str .= '&';
	    $str .= 'FirstAccountDate=' . $this->encodeStr($this->getFirstAccountDate());
	    $str .= '&';
	    $str .= 'RetURL=' . $this->encodeStr($this->getRetURL());
	    $str .= '&';
	    $str .= 'PaymentTermSec=' . $this->encodeStr($this->getPaymentTermSec());
	    $str .= '&';
	    $str .= 'ServiceName=' . $this->encodeStr($this->getServiceName());
	    $str .= '&';
	    $str .= 'ServiceTel=' . $this->encodeStr($this->getServiceTel());

	    return $str;
	}


}
?>