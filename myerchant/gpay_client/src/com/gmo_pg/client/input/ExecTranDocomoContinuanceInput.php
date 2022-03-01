<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>ドコモ継続決済　決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/08/21
 */
class ExecTranDocomoContinuanceInput extends BaseInput {

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
	 * @var string 加盟店自由項目1
	 */
	private $clientField1;

	/**
	 * @var string 加盟店自由項目2
	 */
	private $clientField2;

	/**
	 * @var string 加盟店自由項目3
	 */
	private $clientField3;

	/**
	 * @var string ドコモ表示項目1
	 */
	private $docomoDisp1;

	/**
	 * @var string ドコモ表示項目2
	 */
	private $docomoDisp2;

	/**
	 * @var string 決済結果戻しURL
	 */
	private $retURL;

	/**
	 * @var string 確認日
	 */
	private $confirmBaseDate;

	/**
	 * @var string 初月無料フラグ
	 */
	private $firstMonthFreeFlag;

	/**
	 * @var string 支払開始期限秒
	 */
	private $paymentTermSec;

	/**
	 * @var string 利用店舗名
	 */
	private $dispShopName;

	/**
	 * @var string 連絡先電話番号
	 */
	private $dispPhoneNumber;

	/**
	 * @var string メールアドレス
	 */
	private $dispMailAddress;

	/**
	 * @var string 問合せURL
	 */
	private $dispShopUrl;


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
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}

	/**
	 * ドコモ表示項目1取得
	 * @return string ドコモ表示項目1
	 */
	public function getDocomoDisp1() {
		return $this->docomoDisp1;
	}

	/**
	 * ドコモ表示項目2取得
	 * @return string ドコモ表示項目2
	 */
	public function getDocomoDisp2() {
		return $this->docomoDisp2;
	}

	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->retURL;
	}

	/**
	 * 確認日取得
	 * @return string 確認日
	 */
	public function getConfirmBaseDate() {
		return $this->confirmBaseDate;
	}

	/**
	 * 初月無料フラグ取得
	 * @return string 初月無料フラグ
	 */
	public function getFirstMonthFreeFlag() {
		return $this->firstMonthFreeFlag;
	}

	/**
	 * 支払開始期限秒取得
	 * @return integer 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->paymentTermSec;
	}

	/**
	 * 利用店舗名取得
	 * @return string 利用店舗名
	 */
	public function getDispShopName() {
		return $this->dispShopName;
	}

	/**
	 * 連絡先電話番号取得
	 * @return string 連絡先電話番号
	 */
	public function getDispPhoneNumber() {
		return $this->dispPhoneNumber;
	}

	/**
	 * メールアドレス取得
	 * @return string メールアドレス
	 */
	public function getDispMailAddress() {
		return $this->dispMailAddress;
	}

	/**
	 * 問合せURL取得
	 * @return string 問合せURL
	 */
	public function getDispShopUrl() {
		return $this->dispShopUrl;
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
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}

	/**
	 * ドコモ表示項目1設定
	 *
	 * @param string $docomoDisp1
	 */
	public function setDocomoDisp1($docomoDisp1) {
		$this->docomoDisp1 = $docomoDisp1;
	}

	/**
	 * ドコモ表示項目2設定
	 *
	 * @param string $docomoDisp2
	 */
	public function setDocomoDisp2($docomoDisp2) {
		$this->docomoDisp2 = $docomoDisp2;
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
	 * 確認日設定
	 *
	 * @param string $confirmBaseDate
	 */
	public function setConfirmBaseDate($confirmBaseDate) {
		$this->confirmBaseDate = $confirmBaseDate;
	}

	/**
	 * 初月無料フラグ設定
	 *
	 * @param string $firstMonthFreeFlag
	 */
	public function setFirstMonthFreeFlag($firstMonthFreeFlag) {
		$this->firstMonthFreeFlag = $firstMonthFreeFlag;
	}

	/**
	 * 支払開始期限秒設定
	 *
	 * @param integer $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->paymentTermSec = $paymentTermSec;
	}

	/**
	 * 利用店舗名設定
	 *
	 * @param string $dispShopName
	 */
	public function setDispShopName($dispShopName) {
		$this->dispShopName = $dispShopName;
	}

	/**
	 * 連絡先電話番号設定
	 *
	 * @param string $dispPhoneNumber
	 */
	public function setDispPhoneNumber($dispPhoneNumber) {
		$this->dispPhoneNumber = $dispPhoneNumber;
	}

	/**
	 * メールアドレス設定
	 *
	 * @param string $dispMailAddress
	 */
	public function setDispMailAddress($dispMailAddress) {
		$this->dispMailAddress = $dispMailAddress;
	}

	/**
	 * 問合せURL設定
	 *
	 * @param string $dispShopUrl
	 */
	public function setDispShopUrl($dispShopUrl) {
		$this->dispShopUrl = $dispShopUrl;
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
	    $this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
	    $this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
	    $this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));
	    $this->setDocomoDisp1($this->getStringValue($params, 'DocomoDisp1', $this->getDocomoDisp1()));
	    $this->setDocomoDisp2($this->getStringValue($params, 'DocomoDisp2', $this->getDocomoDisp2()));
	    $this->setRetURL($this->getStringValue($params, 'RetURL', $this->getRetURL()));
	    $this->setConfirmBaseDate($this->getStringValue($params, 'ConfirmBaseDate', $this->getConfirmBaseDate()));
	    $this->setFirstMonthFreeFlag($this->getStringValue($params, 'FirstMonthFreeFlag', $this->getFirstMonthFreeFlag()));
	    $this->setPaymentTermSec($this->getStringValue($params, 'PaymentTermSec', $this->getPaymentTermSec()));
	    $this->setDispShopName($this->getStringValue($params, 'DispShopName', $this->getDispShopName()));
	    $this->setDispPhoneNumber($this->getStringValue($params, 'DispPhoneNumber', $this->getDispPhoneNumber()));
	    $this->setDispMailAddress($this->getStringValue($params, 'DispMailAddress', $this->getDispMailAddress()));
	    $this->setDispShopUrl($this->getStringValue($params, 'DispShopUrl', $this->getDispShopUrl()));
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
	    $str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
	    $str .= '&';
	    $str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
	    $str .= '&';
	    $str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
	    $str .= '&';
	    $str .= 'DocomoDisp1=' . $this->encodeStr($this->getDocomoDisp1());
	    $str .= '&';
	    $str .= 'DocomoDisp2=' . $this->encodeStr($this->getDocomoDisp2());
	    $str .= '&';
	    $str .= 'RetURL=' . $this->encodeStr($this->getRetURL());
	    $str .= '&';
	    $str .= 'ConfirmBaseDate=' . $this->encodeStr($this->getConfirmBaseDate());
	    $str .= '&';
	    $str .= 'FirstMonthFreeFlag=' . $this->encodeStr($this->getFirstMonthFreeFlag());
	    $str .= '&';
	    $str .= 'PaymentTermSec=' . $this->encodeStr($this->getPaymentTermSec());
	    $str .= '&';
	    $str .= 'DispShopName=' . $this->encodeStr($this->getDispShopName());
	    $str .= '&';
	    $str .= 'DispPhoneNumber=' . $this->encodeStr($this->getDispPhoneNumber());
	    $str .= '&';
	    $str .= 'DispMailAddress=' . $this->encodeStr($this->getDispMailAddress());
	    $str .= '&';
	    $str .= 'DispShopUrl=' . $this->encodeStr($this->getDispShopUrl());
	    return $str;
	}


}
?>
