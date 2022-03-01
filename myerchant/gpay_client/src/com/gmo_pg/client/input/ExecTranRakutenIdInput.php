<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>楽天ID決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranRakutenIdInput extends BaseInput {

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
	 * @var string 商品ID
	 */
	private $itemId;
	/**
	 * @var string サブ商品ID
	 */
	private $itemSubId;
	/**
	 * @var string 商品名
	 */
	private $itemName;
	/**
	 * @var string 決済結果戻しURL
	 */
	private $retURL;
	/**
	 * @var string 処理NG時URL
	 */
	private $errorRcvURL;
	/**
	 * @var integer 支払開始期限秒
	 */
	private $paymentTermSec;
	/**
	 * @var string 複数商品
	 */
	private $multiItem;
	/**
	 * @var string サブスクリプションタイプ
	 */
	private $subscriptionType;
	/**
	 * @var string サブスクリプション名
	 */
	private $subscriptionName;
	/**
	 * @var string 決済用サブスクリプションID
	 */
	private $settlementSubscriptionId;


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
	 * 商品ID取得
	 * @return string 商品ID
	 */
	public function getItemId() {
		return $this->itemId;
	}
	/**
	 * サブ商品ID取得
	 * @return string サブ商品ID
	 */
	public function getItemSubId() {
		return $this->itemSubId;
	}
	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getItemName() {
		return $this->itemName;
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->retURL;
	}
	/**
	 * 処理NG時URL取得
	 * @return string 処理NG時URL
	 */
	public function getErrorRcvURL() {
		return $this->errorRcvURL;
	}
	/**
	 * 支払開始期限秒取得
	 * @return integer 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->paymentTermSec;
	}
	/**
	 * 複数商品取得
	 * @return string 複数商品
	 */
	public function getMultiItem() {
		return $this->multiItem;
	}
	/**
	 * サブスクリプションタイプ取得
	 * @return string サブスクリプションタイプ
	 */
	public function getSubscriptionType() {
		return $this->subscriptionType;
	}
	/**
	 * サブスクリプション名取得
	 * @return string サブスクリプション名
	 */
	public function getSubscriptionName() {
		return $this->subscriptionName;
	}
	/**
	 * 決済用サブスクリプションID取得
	 * @return string 決済用サブスクリプションID
	 */
	public function getSettlementSubscriptionId() {
		return $this->settlementSubscriptionId;
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
	 * 商品ID設定
	 *
	 * @param string $itemId
	 */
	public function setItemId($itemId) {
		$this->itemId = $itemId;
	}
	/**
	 * サブ商品ID設定
	 *
	 * @param string $itemSubId
	 */
	public function setItemSubId($itemSubId) {
		$this->itemSubId = $itemSubId;
	}
	/**
	 * 商品名設定
	 *
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->itemName = $itemName;
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
	 * 処理NG時URL設定
	 *
	 * @param string $errorRcvURL
	 */
	public function setErrorRcvURL($errorRcvURL) {
		$this->errorRcvURL = $errorRcvURL;
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
	 * 複数商品設定
	 *
	 * @param string $multiItem
	 */
	public function setMultiItem($multiItem) {
		$this->multiItem = $multiItem;
	}
	/**
	 * サブスクリプションタイプ設定
	 *
	 * @param string $subscriptionType
	 */
	public function setSubscriptionType($subscriptionType) {
		$this->subscriptionType = $subscriptionType;
	}
	/**
	 * サブスクリプション名設定
	 *
	 * @param string $subscriptionName
	 */
	public function setSubscriptionName($subscriptionName) {
		$this->subscriptionName = $subscriptionName;
	}
	/**
	 * 決済用サブスクリプションID設定
	 *
	 * @param string $settlementSubscriptionId
	 */
	public function setSettlementSubscriptionId($settlementSubscriptionId) {
		$this->settlementSubscriptionId = $settlementSubscriptionId;
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
		$this->setItemId($this->getStringValue($params, 'ItemId', $this->getItemId()));
		$this->setItemSubId($this->getStringValue($params, 'ItemSubId', $this->getItemSubId()));
		$this->setItemName($this->getStringValue($params, 'ItemName', $this->getItemName()));
		$this->setRetURL($this->getStringValue($params, 'RetURL', $this->getRetURL()));
		$this->setErrorRcvURL($this->getStringValue($params, 'ErrorRcvURL', $this->getErrorRcvURL()));
		$this->setPaymentTermSec($this->getStringValue($params, 'PaymentTermSec', $this->getPaymentTermSec()));
		$this->setMultiItem($this->getStringValue($params, 'MultiItem', $this->getMultiItem()));
		$this->setSubscriptionType($this->getStringValue($params, 'SubscriptionType', $this->getSubscriptionType()));
		$this->setSubscriptionName($this->getStringValue($params, 'SubscriptionName', $this->getSubscriptionName()));
		$this->setSettlementSubscriptionId($this->getStringValue($params, 'SettlementSubscriptionId', $this->getSettlementSubscriptionId()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'ShopID=' . $this->encodeStr($this->getShopID());
		$str .='&';
		$str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
		$str .='&';
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
		$str .='&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'ItemId=' . $this->encodeStr($this->getItemId());
		$str .='&';
		$str .= 'ItemSubId=' . $this->encodeStr($this->getItemSubId());
		$str .='&';
		$str .= 'ItemName=' . $this->encodeStr($this->getItemName());
		$str .='&';
		$str .= 'RetURL=' . $this->encodeStr($this->getRetURL());
		$str .='&';
		$str .= 'ErrorRcvURL=' . $this->encodeStr($this->getErrorRcvURL());
		$str .='&';
		$str .= 'PaymentTermSec=' . $this->encodeStr($this->getPaymentTermSec());
		$str .='&';
		$str .= 'MultiItem=' . $this->encodeStr($this->getMultiItem());
		$str .='&';
		$str .= 'SubscriptionType=' . $this->encodeStr($this->getSubscriptionType());
		$str .='&';
		$str .= 'SubscriptionName=' . $this->encodeStr($this->getSubscriptionName());
		$str .='&';
		$str .= 'SettlementSubscriptionId=' . $this->encodeStr($this->getSettlementSubscriptionId());

	    return $str;
	}


}
?>
