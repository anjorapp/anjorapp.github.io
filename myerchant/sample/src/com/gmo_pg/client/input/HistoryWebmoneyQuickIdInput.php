<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>WebmoneyクイックID利用明細URL取得　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class HistoryWebmoneyQuickIdInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string クイックID
	 */
	private $quickID;
	/**
	 * @var string 戻り先URL
	 */
	private $returnUrl;


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
	 * クイックID取得
	 * @return string クイックID
	 */
	public function getQuickID() {
		return $this->quickID;
	}
	/**
	 * 戻り先URL取得
	 * @return string 戻り先URL
	 */
	public function getReturnUrl() {
		return $this->returnUrl;
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
	 * クイックID設定
	 *
	 * @param string $quickID
	 */
	public function setQuickID($quickID) {
		$this->quickID = $quickID;
	}
	/**
	 * 戻り先URL設定
	 *
	 * @param string $returnUrl
	 */
	public function setReturnUrl($returnUrl) {
		$this->returnUrl = $returnUrl;
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
		$this->setQuickID($this->getStringValue($params, 'QuickID', $this->getQuickID()));
		$this->setReturnUrl($this->getStringValue($params, 'ReturnUrl', $this->getReturnUrl()));

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
		$str .= 'QuickID=' . $this->encodeStr($this->getQuickID());
		$str .='&';
		$str .= 'ReturnUrl=' . $this->encodeStr($this->getReturnUrl());

	    return $str;
	}


}
?>
