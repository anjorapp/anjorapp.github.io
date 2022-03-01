<?php
require_once 'com/gmo_pg/client/input/EntryTranWebmoneyInput.php';
require_once 'com/gmo_pg/client/input/ExecTranWebmoneyInput.php';

/**
 * <b>Webmoney登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 04-08-2010
 */
class EntryExecTranWebmoneyInput {

	/**
	 * @var EntryTranWebmoneyInput Webmoney取引登録入力パラメタ
	 */
	private $entryTranWebmoneyInput;

	/**
	 * @var ExecTranWebmoneyInput Webmoney決済実行入力パラメタ
	 */
	private $execTranWebmoneyInput;

	/**
	 * コンストラクタ
	 * @param array $params 入力パラメタ
	 */
	public function __construct($params = null) {
		$this->entryTranWebmoneyInput = new EntryTranWebmoneyInput($params);
		$this->execTranWebmoneyInput = new ExecTranWebmoneyInput($params);
	}

	/**
	 * 取引登録入力パラメータ取得
	 *
	 * @return EntryTranInput Webmoney取引登録時パラメータ
	 */
	public function &getEntryTranWebmoneyInput(){
		return $this->entryTranWebmoneyInput;
	}

	/**
	 * 決済実行入力パラメタ
	 * @return ExecTranWebmoneyInput Webmoney決済実行時パラメタ
	 */
	public function &getExecTranWebmoneyInput(){
		return $this->execTranWebmoneyInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
		return $this->entryTranWebmoneyInput->getShopId();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass(){
		return $this->entryTranWebmoneyInput->getShopPass();
	}

	/**
	 * アクセスID取得
	 * @return string アクセスID
	 */
	public function getAccessId(){
		return $this->execTranWebmoneyInput->getAccessId();
	}

	/**
	 * アクセスパス取得
	 * @return string アクセスパス
	 */
	public function getAccessPass(){
		return $this->execTranWebmoneyInput->getAccessPass();
	}

	/**
	 * オーダID取得
	 * @return string オーダID
	 */
	public function getOrderId() {
		return $this->entryTranWebmoneyInput->getOrderId();
	}

	/**
	 * 利用金額取得
	 * @return string 利用金額
	 */
	public function getAmount(){
		return $this->entryTranWebmoneyInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return string 税送料
	 */
	public function getTax(){
		return $this->entryTranWebmoneyInput->getTax();
	}

	/**
	 * 商品名
	 * @return string 商品名
	 */
	public function getItemName(){
		return $this->execTranWebmoneyInput->getItemName();
	}

	/**
	 * 氏名取得
	 * @return string 氏名
	 */
	public function getCustomerName(){
		return $this->execTranWebmoneyInput->getCustomerName();
	}

	/**
	 * メールアドレス取得
	 * @return string メールアドレス
	 */
	public function getMailAddress(){
		return $this->execTranWebmoneyInput->getMailAddress();
	}

	/**
	 * 加盟店メールアドレス取得
	 * @return string 加盟店メールアドレス
	 */
	public function getShopMailAddress(){
		return $this->execTranWebmoneyInput->getShopMailAddress();
	}

	/**
	 * 支払期限日数取得
	 * @return string 支払期限日数
	 */
	public function getPaymentTermDay(){
		return $this->execTranWebmoneyInput->getPaymentTermDay();
	}

	/**
	 * リダイレクトURL
	 * @return string リダイレクトURL
	 */
	public function getRedirectURL(){
		return $this->execTranWebmoneyInput->getRedirectURL();
	}

	/**
	 * 加盟店自由項目1
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1(){
		return $this->execTranWebmoneyInput->getClientField1();
	}

	/**
	 * 加盟店自由項目2
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2(){
		return $this->execTranWebmoneyInput->getClientField2();
	}

	/**
	 * 加盟店自由項目3
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3(){
		return $this->execTranWebmoneyInput->getClientField3();
	}

	/**
	 * Webmoney取引登録入力パラメータ設定
	 *
	 * @param EntryTranInput entryTranInput  取引登録入力パラメータ
	 */
	public function setEntryTranWebmoneyInput( &$entryTranWebmoneyInput ){
		$this->entryTranWebmoneyInput = $entryTranWebmoneyInput;
	}

	/**
	 * Webmoney決済実行入力パラメタ設定
	 * @param $execTranWebmoneyInput 決済実行入力パラメタ
	 */
	public function setExecTranWebmoneyInput( &$execTranWebmoneyInput ){
		$this->execTranWebmoneyInput = $execTranWebmoneyInput;
	}

	/**
	 * ショップIDの設定
	 * @param $shopId ショップId
	 */
	public function setShopId( $shopId ){
		$this->entryTranWebmoneyInput->setShopId($shopId);
		$this->execTranWebmoneyInput->setShopId($shopId);
	}

	/**
	 * ショップパスの設定
	 * @param $shopPass ショップパス
	 */
	public function setShopPass( $shopPass ){
		$this->entryTranWebmoneyInput->setShopPass($shopPass);
		$this->execTranWebmoneyInput->setShopPass($shopPass);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessId
	 */
	public function setAccessId($accessId) {
		$this->execTranWebmoneyInput->setAccessId($accessId);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranWebmoneyInput->setAccessPass($accessPass);
	}

	/**
	 * オーダID設定
	 * @param string $orderId
	 */
	public function setOrderId( $orderId ){
		$this->entryTranWebmoneyInput->setOrderId($orderId);
		$this->execTranWebmoneyInput->setOrderId($orderId);
	}

	/**
	 * 金額設定
	 * @param $amount 金額
	 */
	public function setAmount( $amount ){
		$this->entryTranWebmoneyInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 * @param $tax 税送料
	 */
	public function setTax( $tax ){
		$this->entryTranWebmoneyInput->setTax($tax);
	}

	/**
	 * 商品名設定
	 * @param $itemName 商品名
	 */
	public function setItemName( $itemName ){
		$this->execTranWebmoneyInput->setItemName($itemName);
	}

	/**
	 * 氏名設定
	 * @param string $customerName 氏名
	 */
	public function setCustomerName( $customerName ){
		$this->execTranWebmoneyInput->setCustomerName($customerName);
	}

	/**
	 * メールアドレス設定
	 * @param string $mailAddress メールアドレス
	 */
	public function setMailAddress( $mailAddress ){
		$this->execTranWebmoneyInput->setMailAddress($mailAddress);
	}

	/**
	 * 加盟店メールアドレス設定
	 * @param string $shopMailAddress 加盟店メールアドレス
	 */
	public function setShopMailAddress( $shopMailAddress ){
		$this->execTranWebmoneyInput->setShopMailAddress($shopMailAddress);
	}

	/**
	 * 支払期限日数設定
	 * @param string $paymentTermDay 支払期限日数
	 */
	public function setPaymentTermDay( $paymentTermDay ){
		$this->execTranWebmoneyInput->setPaymentTermDay($paymentTermDay);
	}

	/**
	 * リダイレクトURL設定
	 * @param $redirectURL リダイレクトURL
	 */
	public function setRedirectURL( $redirectURL ){
		$this->execTranWebmoneyInput->setRedirectURL($redirectURL);
	}

	/**
	 * 加盟店自由項目1設定
	 * @param $clientFiled1 加盟店自由項目1
	 */
	public function setClientField1( $clientFiled1 ){
		$this->execTranWebmoneyInput->setClientField1($clientFiled1);
	}

	/**
	 * 加盟店自由項目2設定
	 * @param $clientFiled2 加盟店自由項目2
	 */
	public function setClientField2( $clientFiled2 ){
		$this->execTranWebmoneyInput->setClientField2($clientFiled2);
	}

	/**
	 * 加盟店自由項目3設定
	 * @param $clientFiled3 加盟店自由項目3
	 */
	public function setClientField3( $clientFiled3 ){
		$this->execTranWebmoneyInput->setClientField3($clientFiled3);
	}
}
