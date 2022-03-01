<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>Paysleバーコード発行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class PaysleBarcodeInput extends BaseInput {

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
