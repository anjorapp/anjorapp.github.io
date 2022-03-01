<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>Paysle決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranPaysleInput extends BaseInput {

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
	 * @var string 表示開始日数
	 */
	private $displayTermDay;
	/**
	 * @var string 支払期限日数
	 */
	private $paymentTermDay;
	/**
	 * @var string 購入者通知日数
	 */
	private $notifyTermDay;
	/**
	 * @var string 購入者氏名
	 */
	private $customerName;
	/**
	 * @var string 購入者携帯電話番号
	 */
	private $customerTel;
	/**
	 * @var string 購入者管理ID
	 */
	private $customerId;
	/**
	 * @var string 請求書タイトル
	 */
	private $invoiceTitle;
	/**
	 * @var string 商品番号（明細）
	 */
	private $itemId;
	/**
	 * @var string 商品名（明細）
	 */
	private $itemName;
	/**
	 * @var string 複数商品
	 */
	private $multiItem;
	/**
	 * @var integer 数量（明細）
	 */
	private $itemNumbers;
	/**
	 * @var integer 単価（明細）
	 */
	private $itemFee;
	/**
	 * @var integer 消費税額
	 */
	private $paysleTax;
	/**
	 * @var integer 送料
	 */
	private $paysleShippingFee;
	/**
	 * @var string 機種名
	 */
	private $deviceName;
	/**
	 * @var string OSバージョン
	 */
	private $osVersion;
	/**
	 * @var integer 画面横幅
	 */
	private $winWidth;
	/**
	 * @var integer 画面縦幅
	 */
	private $winHeight;
	/**
	 * @var integer 画面横方向dpi
	 */
	private $xdpi;
	/**
	 * @var integer 画面縦方向dpi
	 */
	private $ydpi;


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
	 * 表示開始日数取得
	 * @return string 表示開始日数
	 */
	public function getDisplayTermDay() {
		return $this->displayTermDay;
	}
	/**
	 * 支払期限日数取得
	 * @return string 支払期限日数
	 */
	public function getPaymentTermDay() {
		return $this->paymentTermDay;
	}
	/**
	 * 購入者通知日数取得
	 * @return string 購入者通知日数
	 */
	public function getNotifyTermDay() {
		return $this->notifyTermDay;
	}
	/**
	 * 購入者氏名取得
	 * @return string 購入者氏名
	 */
	public function getCustomerName() {
		return $this->customerName;
	}
	/**
	 * 購入者携帯電話番号取得
	 * @return string 購入者携帯電話番号
	 */
	public function getCustomerTel() {
		return $this->customerTel;
	}
	/**
	 * 購入者管理ID取得
	 * @return string 購入者管理ID
	 */
	public function getCustomerId() {
		return $this->customerId;
	}
	/**
	 * 請求書タイトル取得
	 * @return string 請求書タイトル
	 */
	public function getInvoiceTitle() {
		return $this->invoiceTitle;
	}
	/**
	 * 商品番号（明細）取得
	 * @return string 商品番号（明細）
	 */
	public function getItemId() {
		return $this->itemId;
	}
	/**
	 * 商品名（明細）取得
	 * @return string 商品名（明細）
	 */
	public function getItemName() {
		return $this->itemName;
	}
	/**
	 * 複数商品取得
	 * @return string 複数商品
	 */
	public function getMultiItem() {
		return $this->multiItem;
	}
	/**
	 * 数量（明細）取得
	 * @return integer 数量（明細）
	 */
	public function getItemNumbers() {
		return $this->itemNumbers;
	}
	/**
	 * 単価（明細）取得
	 * @return integer 単価（明細）
	 */
	public function getItemFee() {
		return $this->itemFee;
	}
	/**
	 * 消費税額取得
	 * @return integer 消費税額
	 */
	public function getPaysleTax() {
		return $this->paysleTax;
	}
	/**
	 * 送料取得
	 * @return integer 送料
	 */
	public function getPaysleShippingFee() {
		return $this->paysleShippingFee;
	}
	/**
	 * 機種名取得
	 * @return string 機種名
	 */
	public function getDeviceName() {
		return $this->deviceName;
	}
	/**
	 * OSバージョン取得
	 * @return string OSバージョン
	 */
	public function getOsVersion() {
		return $this->osVersion;
	}
	/**
	 * 画面横幅取得
	 * @return integer 画面横幅
	 */
	public function getWinWidth() {
		return $this->winWidth;
	}
	/**
	 * 画面縦幅取得
	 * @return integer 画面縦幅
	 */
	public function getWinHeight() {
		return $this->winHeight;
	}
	/**
	 * 画面横方向dpi取得
	 * @return integer 画面横方向dpi
	 */
	public function getXdpi() {
		return $this->xdpi;
	}
	/**
	 * 画面縦方向dpi取得
	 * @return integer 画面縦方向dpi
	 */
	public function getYdpi() {
		return $this->ydpi;
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
	 * 表示開始日数設定
	 *
	 * @param string $displayTermDay
	 */
	public function setDisplayTermDay($displayTermDay) {
		$this->displayTermDay = $displayTermDay;
	}
	/**
	 * 支払期限日数設定
	 *
	 * @param string $paymentTermDay
	 */
	public function setPaymentTermDay($paymentTermDay) {
		$this->paymentTermDay = $paymentTermDay;
	}
	/**
	 * 購入者通知日数設定
	 *
	 * @param string $notifyTermDay
	 */
	public function setNotifyTermDay($notifyTermDay) {
		$this->notifyTermDay = $notifyTermDay;
	}
	/**
	 * 購入者氏名設定
	 *
	 * @param string $customerName
	 */
	public function setCustomerName($customerName) {
		$this->customerName = $customerName;
	}
	/**
	 * 購入者携帯電話番号設定
	 *
	 * @param string $customerTel
	 */
	public function setCustomerTel($customerTel) {
		$this->customerTel = $customerTel;
	}
	/**
	 * 購入者管理ID設定
	 *
	 * @param string $customerId
	 */
	public function setCustomerId($customerId) {
		$this->customerId = $customerId;
	}
	/**
	 * 請求書タイトル設定
	 *
	 * @param string $invoiceTitle
	 */
	public function setInvoiceTitle($invoiceTitle) {
		$this->invoiceTitle = $invoiceTitle;
	}
	/**
	 * 商品番号（明細）設定
	 *
	 * @param string $itemId
	 */
	public function setItemId($itemId) {
		$this->itemId = $itemId;
	}
	/**
	 * 商品名（明細）設定
	 *
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->itemName = $itemName;
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
	 * 数量（明細）設定
	 *
	 * @param integer $itemNumbers
	 */
	public function setItemNumbers($itemNumbers) {
		$this->itemNumbers = $itemNumbers;
	}
	/**
	 * 単価（明細）設定
	 *
	 * @param integer $itemFee
	 */
	public function setItemFee($itemFee) {
		$this->itemFee = $itemFee;
	}
	/**
	 * 消費税額設定
	 *
	 * @param integer $paysleTax
	 */
	public function setPaysleTax($paysleTax) {
		$this->paysleTax = $paysleTax;
	}
	/**
	 * 送料設定
	 *
	 * @param integer $paysleShippingFee
	 */
	public function setPaysleShippingFee($paysleShippingFee) {
		$this->paysleShippingFee = $paysleShippingFee;
	}
	/**
	 * 機種名設定
	 *
	 * @param string $deviceName
	 */
	public function setDeviceName($deviceName) {
		$this->deviceName = $deviceName;
	}
	/**
	 * OSバージョン設定
	 *
	 * @param string $osVersion
	 */
	public function setOsVersion($osVersion) {
		$this->osVersion = $osVersion;
	}
	/**
	 * 画面横幅設定
	 *
	 * @param integer $winWidth
	 */
	public function setWinWidth($winWidth) {
		$this->winWidth = $winWidth;
	}
	/**
	 * 画面縦幅設定
	 *
	 * @param integer $winHeight
	 */
	public function setWinHeight($winHeight) {
		$this->winHeight = $winHeight;
	}
	/**
	 * 画面横方向dpi設定
	 *
	 * @param integer $xdpi
	 */
	public function setXdpi($xdpi) {
		$this->xdpi = $xdpi;
	}
	/**
	 * 画面縦方向dpi設定
	 *
	 * @param integer $ydpi
	 */
	public function setYdpi($ydpi) {
		$this->ydpi = $ydpi;
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
		$this->setDisplayTermDay($this->getStringValue($params, 'DisplayTermDay', $this->getDisplayTermDay()));
		$this->setPaymentTermDay($this->getStringValue($params, 'PaymentTermDay', $this->getPaymentTermDay()));
		$this->setNotifyTermDay($this->getStringValue($params, 'NotifyTermDay', $this->getNotifyTermDay()));
		$this->setCustomerName($this->getStringValue($params, 'CustomerName', $this->getCustomerName()));
		$this->setCustomerTel($this->getStringValue($params, 'CustomerTel', $this->getCustomerTel()));
		$this->setCustomerId($this->getStringValue($params, 'CustomerId', $this->getCustomerId()));
		$this->setInvoiceTitle($this->getStringValue($params, 'InvoiceTitle', $this->getInvoiceTitle()));
		$this->setItemId($this->getStringValue($params, 'ItemId', $this->getItemId()));
		$this->setItemName($this->getStringValue($params, 'ItemName', $this->getItemName()));
		$this->setMultiItem($this->getStringValue($params, 'MultiItem', $this->getMultiItem()));
		$this->setItemNumbers($this->getStringValue($params, 'ItemNumbers', $this->getItemNumbers()));
		$this->setItemFee($this->getStringValue($params, 'ItemFee', $this->getItemFee()));
		$this->setPaysleTax($this->getStringValue($params, 'PaysleTax', $this->getPaysleTax()));
		$this->setPaysleShippingFee($this->getStringValue($params, 'PaysleShippingFee', $this->getPaysleShippingFee()));
		$this->setDeviceName($this->getStringValue($params, 'DeviceName', $this->getDeviceName()));
		$this->setOsVersion($this->getStringValue($params, 'OsVersion', $this->getOsVersion()));
		$this->setWinWidth($this->getStringValue($params, 'WinWidth', $this->getWinWidth()));
		$this->setWinHeight($this->getStringValue($params, 'WinHeight', $this->getWinHeight()));
		$this->setXdpi($this->getStringValue($params, 'Xdpi', $this->getXdpi()));
		$this->setYdpi($this->getStringValue($params, 'Ydpi', $this->getYdpi()));

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
		$str .= 'DisplayTermDay=' . $this->encodeStr($this->getDisplayTermDay());
		$str .='&';
		$str .= 'PaymentTermDay=' . $this->encodeStr($this->getPaymentTermDay());
		$str .='&';
		$str .= 'NotifyTermDay=' . $this->encodeStr($this->getNotifyTermDay());
		$str .='&';
		$str .= 'CustomerName=' . $this->encodeStr($this->getCustomerName());
		$str .='&';
		$str .= 'CustomerTel=' . $this->encodeStr($this->getCustomerTel());
		$str .='&';
		$str .= 'CustomerId=' . $this->encodeStr($this->getCustomerId());
		$str .='&';
		$str .= 'InvoiceTitle=' . $this->encodeStr($this->getInvoiceTitle());
		$str .='&';
		$str .= 'ItemId=' . $this->encodeStr($this->getItemId());
		$str .='&';
		$str .= 'ItemName=' . $this->encodeStr($this->getItemName());
		$str .='&';
		$str .= 'MultiItem=' . $this->encodeStr($this->getMultiItem());
		$str .='&';
		$str .= 'ItemNumbers=' . $this->encodeStr($this->getItemNumbers());
		$str .='&';
		$str .= 'ItemFee=' . $this->encodeStr($this->getItemFee());
		$str .='&';
		$str .= 'PaysleTax=' . $this->encodeStr($this->getPaysleTax());
		$str .='&';
		$str .= 'PaysleShippingFee=' . $this->encodeStr($this->getPaysleShippingFee());
		$str .='&';
		$str .= 'DeviceName=' . $this->encodeStr($this->getDeviceName());
		$str .='&';
		$str .= 'OsVersion=' . $this->encodeStr($this->getOsVersion());
		$str .='&';
		$str .= 'WinWidth=' . $this->encodeStr($this->getWinWidth());
		$str .='&';
		$str .= 'WinHeight=' . $this->encodeStr($this->getWinHeight());
		$str .='&';
		$str .= 'Xdpi=' . $this->encodeStr($this->getXdpi());
		$str .='&';
		$str .= 'Ydpi=' . $this->encodeStr($this->getYdpi());

	    return $str;
	}


}
?>
