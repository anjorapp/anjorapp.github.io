<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>PGプリカバリュー利用　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class UseValueInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string プリカ番号
	 */
	private $precaNo;
	/**
	 * @var string プリカ認証番号
	 */
	private $precaPass;
	/**
	 * @var integer バリュー
	 */
	private $value;
	/**
	 * @var string 加盟店自由項目
	 */
	private $clientField;


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
	 * プリカ番号取得
	 * @return string プリカ番号
	 */
	public function getPrecaNo() {
		return $this->precaNo;
	}
	/**
	 * プリカ認証番号取得
	 * @return string プリカ認証番号
	 */
	public function getPrecaPass() {
		return $this->precaPass;
	}
	/**
	 * バリュー取得
	 * @return integer バリュー
	 */
	public function getValue() {
		return $this->value;
	}
	/**
	 * 加盟店自由項目取得
	 * @return string 加盟店自由項目
	 */
	public function getClientField() {
		return $this->clientField;
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
	 * プリカ番号設定
	 *
	 * @param string $precaNo
	 */
	public function setPrecaNo($precaNo) {
		$this->precaNo = $precaNo;
	}
	/**
	 * プリカ認証番号設定
	 *
	 * @param string $precaPass
	 */
	public function setPrecaPass($precaPass) {
		$this->precaPass = $precaPass;
	}
	/**
	 * バリュー設定
	 *
	 * @param integer $value
	 */
	public function setValue($value) {
		$this->value = $value;
	}
	/**
	 * 加盟店自由項目設定
	 *
	 * @param string $clientField
	 */
	public function setClientField($clientField) {
		$this->clientField = $clientField;
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
		$this->setPrecaNo($this->getStringValue($params, 'PrecaNo', $this->getPrecaNo()));
		$this->setPrecaPass($this->getStringValue($params, 'PrecaPass', $this->getPrecaPass()));
		$this->setValue($this->getStringValue($params, 'Value', $this->getValue()));
		$this->setClientField($this->getStringValue($params, 'ClientField', $this->getClientField()));

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
		$str .= 'PrecaNo=' . $this->encodeStr($this->getPrecaNo());
		$str .='&';
		$str .= 'PrecaPass=' . $this->encodeStr($this->getPrecaPass());
		$str .='&';
		$str .= 'Value=' . $this->encodeStr($this->getValue());
		$str .='&';
		$str .= 'ClientField=' . $this->encodeStr($this->getClientField());

	    return $str;
	}


}
?>
