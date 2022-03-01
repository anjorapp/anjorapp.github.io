<?php
require_once 'com/gmo_pg/client/input/EntryTranPaysleInput.php';
require_once 'com/gmo_pg/client/input/ExecTranPaysleInput.php';
/**
 * <b>Paysle登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaysleInput {

	/**
	 * @var EntryTranPaysleInput Paysle登録入力パラメータ
	 */
	private $entryTranPaysleInput;/* @var $entryTranInput EntryTranPaysleInput */

	/**
	 * @var ExecTranPaysleInput Paysle実行入力パラメータ
	 */
	private $execTranPaysleInput;/* @var $execTranInput ExecTranPaysleInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranPaysleInput = new EntryTranPaysleInput($params);
		$this->execTranPaysleInput = new ExecTranPaysleInput($params);
	}

	/**
	 * Paysle取引登録入力パラメータ取得
	 *
	 * @return EntryTranPaysleInput 取引登録時パラメータ
	 */
	public function &getEntryTranPaysleInput() {
		return $this->entryTranPaysleInput;
	}

	/**
	 * Paysle実行入力パラメータ取得
	 * @return ExecTranPaysleInput 決済実行時パラメータ
	 */
	public function &getExecTranPaysleInput() {
		return $this->execTranPaysleInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranPaysleInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranPaysleInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranPaysleInput->getOrderID();

	}
	/**
	 * 利用料金取得
	 * @return integer 利用料金
	 */
	public function getAmount() {
		return $this->entryTranPaysleInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranPaysleInput->getTax();
	}
	/**
	 * 決済タイプ取得
	 * @return string 決済タイプ
	 */
	public function getPaymentType() {
		return $this->entryTranPaysleInput->getPaymentType();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranPaysleInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranPaysleInput->getAccessPass();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranPaysleInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranPaysleInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranPaysleInput->getClientField3();
	}
	/**
	 * 表示開始日数取得
	 * @return string 表示開始日数
	 */
	public function getDisplayTermDay() {
		return $this->execTranPaysleInput->getDisplayTermDay();
	}
	/**
	 * 支払期限日数取得
	 * @return string 支払期限日数
	 */
	public function getPaymentTermDay() {
		return $this->execTranPaysleInput->getPaymentTermDay();
	}
	/**
	 * 購入者通知日数取得
	 * @return string 購入者通知日数
	 */
	public function getNotifyTermDay() {
		return $this->execTranPaysleInput->getNotifyTermDay();
	}
	/**
	 * 購入者氏名取得
	 * @return string 購入者氏名
	 */
	public function getCustomerName() {
		return $this->execTranPaysleInput->getCustomerName();
	}
	/**
	 * 購入者携帯電話番号取得
	 * @return string 購入者携帯電話番号
	 */
	public function getCustomerTel() {
		return $this->execTranPaysleInput->getCustomerTel();
	}
	/**
	 * 購入者管理ID取得
	 * @return string 購入者管理ID
	 */
	public function getCustomerId() {
		return $this->execTranPaysleInput->getCustomerId();
	}
	/**
	 * 請求書タイトル取得
	 * @return string 請求書タイトル
	 */
	public function getInvoiceTitle() {
		return $this->execTranPaysleInput->getInvoiceTitle();
	}
	/**
	 * 商品番号（明細）取得
	 * @return string 商品番号（明細）
	 */
	public function getItemId() {
		return $this->execTranPaysleInput->getItemId();
	}
	/**
	 * 商品名（明細）取得
	 * @return string 商品名（明細）
	 */
	public function getItemName() {
		return $this->execTranPaysleInput->getItemName();
	}
	/**
	 * 複数商品取得
	 * @return string 複数商品
	 */
	public function getMultiItem() {
		return $this->execTranPaysleInput->getMultiItem();
	}
	/**
	 * 数量（明細）取得
	 * @return integer 数量（明細）
	 */
	public function getItemNumbers() {
		return $this->execTranPaysleInput->getItemNumbers();
	}
	/**
	 * 単価（明細）取得
	 * @return integer 単価（明細）
	 */
	public function getItemFee() {
		return $this->execTranPaysleInput->getItemFee();
	}
	/**
	 * 消費税額取得
	 * @return integer 消費税額
	 */
	public function getPaysleTax() {
		return $this->execTranPaysleInput->getPaysleTax();
	}
	/**
	 * 送料取得
	 * @return integer 送料
	 */
	public function getPaysleShippingFee() {
		return $this->execTranPaysleInput->getPaysleShippingFee();
	}
	/**
	 * 機種名取得
	 * @return string 機種名
	 */
	public function getDeviceName() {
		return $this->execTranPaysleInput->getDeviceName();
	}
	/**
	 * OSバージョン取得
	 * @return string OSバージョン
	 */
	public function getOsVersion() {
		return $this->execTranPaysleInput->getOsVersion();
	}
	/**
	 * 画面横幅取得
	 * @return integer 画面横幅
	 */
	public function getWinWidth() {
		return $this->execTranPaysleInput->getWinWidth();
	}
	/**
	 * 画面縦幅取得
	 * @return integer 画面縦幅
	 */
	public function getWinHeight() {
		return $this->execTranPaysleInput->getWinHeight();
	}
	/**
	 * 画面横方向dpi取得
	 * @return integer 画面横方向dpi
	 */
	public function getXdpi() {
		return $this->execTranPaysleInput->getXdpi();
	}
	/**
	 * 画面縦方向dpi取得
	 * @return integer 画面縦方向dpi
	 */
	public function getYdpi() {
		return $this->execTranPaysleInput->getYdpi();
	}

	/**
	 * Paysle取引登録入力パラメータ設定
	 *
	 * @param EntryTranPaysleInput entryTranPaysleInput  取引登録入力パラメータ
	 */
	public function setEntryTranPaysleInput(&$entryTranPaysleInput) {
		$this->entryTranPaysleInput = $entryTranPaysleInput;
	}

	/**
	 * Paysle実行入力パラメータ設定
	 *
	 * @param ExecTranPaysleInput  execTranPaysleInput   決済実行入力パラメータ
	 */
	public function setExecTranPaysleInput(&$execTranPaysleInput) {
		$this->execTranPaysleInput = $execTranPaysleInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranPaysleInput->setShopID($shopID);
		$this->execTranPaysleInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranPaysleInput->setShopPass($shopPass);
		$this->execTranPaysleInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranPaysleInput->setOrderID($orderID);
		$this->execTranPaysleInput->setOrderID($orderID);

	}
	/**
	 * 利用料金設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranPaysleInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranPaysleInput->setTax($tax);
	}
	/**
	 * 決済タイプ設定
	 *
	 * @param string $paymentType
	 */
	public function setPaymentType($paymentType) {
		$this->entryTranPaysleInput->setPaymentType($paymentType);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranPaysleInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranPaysleInput->setAccessPass($accessPass);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranPaysleInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranPaysleInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranPaysleInput->setClientField3($clientField3);
	}
	/**
	 * 表示開始日数設定
	 *
	 * @param string $displayTermDay
	 */
	public function setDisplayTermDay($displayTermDay) {
		$this->execTranPaysleInput->setDisplayTermDay($displayTermDay);
	}
	/**
	 * 支払期限日数設定
	 *
	 * @param string $paymentTermDay
	 */
	public function setPaymentTermDay($paymentTermDay) {
		$this->execTranPaysleInput->setPaymentTermDay($paymentTermDay);
	}
	/**
	 * 購入者通知日数設定
	 *
	 * @param string $notifyTermDay
	 */
	public function setNotifyTermDay($notifyTermDay) {
		$this->execTranPaysleInput->setNotifyTermDay($notifyTermDay);
	}
	/**
	 * 購入者氏名設定
	 *
	 * @param string $customerName
	 */
	public function setCustomerName($customerName) {
		$this->execTranPaysleInput->setCustomerName($customerName);
	}
	/**
	 * 購入者携帯電話番号設定
	 *
	 * @param string $customerTel
	 */
	public function setCustomerTel($customerTel) {
		$this->execTranPaysleInput->setCustomerTel($customerTel);
	}
	/**
	 * 購入者管理ID設定
	 *
	 * @param string $customerId
	 */
	public function setCustomerId($customerId) {
		$this->execTranPaysleInput->setCustomerId($customerId);
	}
	/**
	 * 請求書タイトル設定
	 *
	 * @param string $invoiceTitle
	 */
	public function setInvoiceTitle($invoiceTitle) {
		$this->execTranPaysleInput->setInvoiceTitle($invoiceTitle);
	}
	/**
	 * 商品番号（明細）設定
	 *
	 * @param string $itemId
	 */
	public function setItemId($itemId) {
		$this->execTranPaysleInput->setItemId($itemId);
	}
	/**
	 * 商品名（明細）設定
	 *
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->execTranPaysleInput->setItemName($itemName);
	}
	/**
	 * 複数商品設定
	 *
	 * @param string $multiItem
	 */
	public function setMultiItem($multiItem) {
		$this->execTranPaysleInput->setMultiItem($multiItem);
	}
	/**
	 * 数量（明細）設定
	 *
	 * @param integer $itemNumbers
	 */
	public function setItemNumbers($itemNumbers) {
		$this->execTranPaysleInput->setItemNumbers($itemNumbers);
	}
	/**
	 * 単価（明細）設定
	 *
	 * @param integer $itemFee
	 */
	public function setItemFee($itemFee) {
		$this->execTranPaysleInput->setItemFee($itemFee);
	}
	/**
	 * 消費税額設定
	 *
	 * @param integer $paysleTax
	 */
	public function setPaysleTax($paysleTax) {
		$this->execTranPaysleInput->setPaysleTax($paysleTax);
	}
	/**
	 * 送料設定
	 *
	 * @param integer $paysleShippingFee
	 */
	public function setPaysleShippingFee($paysleShippingFee) {
		$this->execTranPaysleInput->setPaysleShippingFee($paysleShippingFee);
	}
	/**
	 * 機種名設定
	 *
	 * @param string $deviceName
	 */
	public function setDeviceName($deviceName) {
		$this->execTranPaysleInput->setDeviceName($deviceName);
	}
	/**
	 * OSバージョン設定
	 *
	 * @param string $osVersion
	 */
	public function setOsVersion($osVersion) {
		$this->execTranPaysleInput->setOsVersion($osVersion);
	}
	/**
	 * 画面横幅設定
	 *
	 * @param integer $winWidth
	 */
	public function setWinWidth($winWidth) {
		$this->execTranPaysleInput->setWinWidth($winWidth);
	}
	/**
	 * 画面縦幅設定
	 *
	 * @param integer $winHeight
	 */
	public function setWinHeight($winHeight) {
		$this->execTranPaysleInput->setWinHeight($winHeight);
	}
	/**
	 * 画面横方向dpi設定
	 *
	 * @param integer $xdpi
	 */
	public function setXdpi($xdpi) {
		$this->execTranPaysleInput->setXdpi($xdpi);
	}
	/**
	 * 画面縦方向dpi設定
	 *
	 * @param integer $ydpi
	 */
	public function setYdpi($ydpi) {
		$this->execTranPaysleInput->setYdpi($ydpi);
	}

}
?>
