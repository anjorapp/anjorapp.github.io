<?php
require_once 'com/gmo_pg/client/input/BaseInput.php';

/**
 * <b>Paypal仮売上取消入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2014/01/21
 */
class CancelAuthPaypalInput extends BaseInput {

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
	 * オーダーID設定
	 *
	 * @param string $orderId
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
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

		return $str;
	}
}

