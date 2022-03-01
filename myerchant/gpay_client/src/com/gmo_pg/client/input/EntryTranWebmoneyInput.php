<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');

/**
 * <b>Webmoney取引登録　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 12-22-2009 00:00:00
 */
class EntryTranWebmoneyInput extends BaseInput {

	/**
	 * @var string GMO-PGが発行する、PGマルチペイメントサービス中で加盟店様を識別するID
	 */
	private $shopId;

	/**
	 * @var string ショップIDと対になるパスワード
	 */
	private $shopPass;

	/**
	 * @var string 加盟店様が発行する、オーダー取引を識別するID
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
	 * オーダIDの設定
	 * @param $orderid - オーダID
	 */
	public function setOrderId( $orderId ){
		$this->orderId = $orderId;
	}

	/**
	 * 金額の設定
	 * @param $amount 金額
	 */
	public function setAmount( $amount ){
		$this->amount = $amount;
	}

	/**
	 * 税送料の設定
	 * @param $tax 税送料
	 */
	public function setTax( $tax ){
		$this->tax = $tax;
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

		if(is_null($params)) {
			return;
		}

		$this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
		$this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
		$this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
		$this->setAmount($this->getIntegerValue($params, 'Amount', $this->getAmount()));
		$this->setTax($this->getIntegerValue($params, 'Tax', $this->getTax()));
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
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
		$str .= '&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .= '&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());

		return $str;
	}
}