<?php
require_once 'com/gmo_pg/client/input/BaseInput.php';
/**
 * <b>金額変更入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class ChangeTranInput extends BaseInput {

	/**
	 * @var string GMO-PGが発行する、PGカード決済システム中で加盟店様を識別するID
	 */
	private $shopId;

	/**
	 * @var string GMO-PGが発行する、ショップIDに対応するパスワード
	 */
	private $shopPass;

	/**
	 * @var string 取引登録時にPGカード決済システムから払い出される、取引を特定するID
	 */
	private $accessId;

	/**
	 * @var string 取引IDと一対になるパスワード
	 */
	private $accessPass;

	/**
	 * @var string 実行したい処理区分
	 */
	private $jobCd;

	/**
	 * @var integer 利用金額。決済される金額は、この値と税送料(tax)の合算値。
	 */
	private $amount;

	/**
	 * @var integer 税送料。品代以外の、送料等を表す値
	 */
	private $tax;

	/**
	 * @var string 利用日
	 */
	private $displayDate;

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
	 *
	 * @access private
	 */
	public function setDefaultValues() {
	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータが無い(=null)場合は設定処理を行わない。
	    if (is_null($params)) {
	        return;
	    }

	    // 各項目の設定(Amount,Tax,PayTimesは値が数値でないものは無効とする)
	    $this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
	    $this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
	    $this->setAccessId($this->getStringValue($params, 'AccessID', $this->getAccessId()));
	    $this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
	    $this->setJobCd($this->getStringValue($params, 'JobCd', $this->getJobCd()));
	    $this->setAmount($this->getIntegerValue($params, 'Amount', $this->getAmount()));
	    $this->setTax($this->getIntegerValue($params, 'Tax', $this->getTax()));
	    $this->setDisplayDate($this->getStringValue($params, 'DisplayDate', $this->getDisplayDate()));
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
		return $this->shopId;
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
	 * 処理区分取得
	 * @return string 処理区分コード
	 */
	public function getJobCd() {
		return $this->jobCd;
	}

	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * 税送料取得
	 * @return string 税送料
	 */
	public function getTax() {
		return $this->tax;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopId ショップID
	 */
	public function setShopId($shopId) {
		$this->shopId = $shopId;
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass ショップパスワード
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}

	public function getDisplayDate() {
		return $this->displayDate;
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
	 * 取引パスワード設定
	 *
	 * @param string $accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}

	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd 処理区分コード
	 */
	public function setJobCd($jobCd) {
		$this->jobCd = $jobCd;
	}

	/**
	 * 利用金額設定
	 *
	 * @param integer $amount 利用金額
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * 税送料設定
	 *
	 * @param integer $tax 税送料
	 */
	public function setTax($tax) {
		$this->tax = $tax;
	}

	public function setDisplayDate($displayDate) {
		$this->displayDate = $displayDate;
	}

	/**
	 * 文字列表現
	 * URLのパラメータ文字列の形式の文字列を生成する
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
	    $str .= 'JobCd=' . $this->encodeStr($this->getJobCd());
	    $str .= '&';
	    $str .= 'Amount=' . $this->encodeStr($this->getAmount());
	    $str .= '&';
	    $str .= 'Tax=' . $this->encodeStr($this->getTax());
	    $str .= '&';
	    $str .= 'DisplayDate=' . $this->encodeStr($this->getDisplayDate());

	    return $str;
	}
}
?>