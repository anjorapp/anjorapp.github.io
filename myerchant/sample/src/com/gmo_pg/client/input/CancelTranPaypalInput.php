<?php
require_once 'com/gmo_pg/client/input/BaseInput.php';

/**
 * <b>Paypal払い戻し入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 12-24-2009 00:00:00
 */
class CancelTranPaypalInput extends BaseInput {

	/**
	 * @var string GMO-PGが発行する、PGマルチペイメントサービス中で加盟店様を識別するID
	 */
	private $shopId;

	/**
	 * @var string ショップIDと対になるパスワード
	 */
	private $shopPass;

	/**
	 * @var string 取引ID。GMO-PGが払い出した、取引を特定するID
	 */
	private $accessId;

	/**
	 * @var string 取引パスワード。取引IDと対になるパスワード
	 */
	private $accessPass;


	/**
	 * @var string オーダーID。加盟店様が発番した、取引を表すID
	 */
	private $orderId;

	/**
	 * @var integer $amount
	 */
	private $amount;

	/**
	 * @var integer $tax
	 */
	private $tax;

	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}

	/**
	 * デフォルト値を設定する
	 */
	public function setDefaultValues() {
	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		if (is_null($params)) {
			return;
		}

		$this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
		$this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
		$this->setAccessId($this->getStringValue($params, 'AccessID', $this->getAccessId()));
		$this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
		$this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
		$this->setAmount($this->getIntegerValue($params, 'Amount', $this->getAmount()));
		$this->setTax($this->getIntegerValue($params, 'Tax', $this->getTax()));
	}

	/**
	 * ショップId取得
	 * @return string ショップId
	 */
	public function getShopId(){
		return $this->shopId;
	}


	/**
	 * ショップパスワードの取得
	 * @return string ショップパスワード
	 */
	public function getShopPass(){
		return $this->shopPass;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->accessId;
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}

	/**
	 * オーダIDの取得
	 * @return string オーダId
	 */
	public function getOrderId(){
		return $this->orderId;
	}

	/**
	 * 金額の取得
	 * @return string 金額
	 */
	public function getAmount(){
		return $this->amount;
	}

	/**
	 * 税送料の取得
	 * @return string 税送料
	 */
	public function getTax(){
		return $this->tax;
	}

	/**
	 * ショップIdの設定
	 * @param $shopId ショップId
	 */
	public function setShopId( $shopId ){
		$this->shopId = $shopId;
	}

	/**
	 * ショップパスワードの設定
	 * @param $shopPass ショップパスワード
	 */
	public function setShopPass( $shopPass ){
		$this->shopPass = $shopPass;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessId 取引ID
	 */
	public function setAccessId($accessId) {
		$this->accessId = $accessId;
	}

	/**
	 * 取引パスワードを設定
	 *
	 * @param string $accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}

	/**
	 * 金額の設定
	 * @param $amount 金額
	 */
	public function setAmount( $amount ){
		$this->amount = $amount;
	}

	/**
	 * オーダIDの設定
	 * @param $orderid - オーダID
	 */
	public function setOrderId( $orderId ){
		$this->orderId = $orderId;
	}

	/**
	 * 税送料の設定
	 * @param $tax 税送料
	 */
	public function setTax( $tax ){
		$this->tax = $tax;
	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str  = 'ShopID=' . $this->encodeStr($this->getShopId());
		$str .= '&';
		$str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
		$str .= '&';
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessId());
		$str .= '&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .= '&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
		$str .= '&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .= '&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());

		return $str;
	}
}

