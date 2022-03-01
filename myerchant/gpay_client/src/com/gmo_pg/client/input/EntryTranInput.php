<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>取引登録　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class EntryTranInput extends BaseInput {

	/**
	 * @var string GMO-PGが発行する、PGカード決済サービス中で加盟店様を識別するID
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
	 * @var string 処理区分
	 */
	private $jobCd;

	/**
	 * @var string カード会社が定義する、商材を表すコード
	 */
	private $itemCode;

	/**
	 * @var integer $amount
	 */
	private $amount;

	/**
	 * @var integer $tax
	 */
	private $tax;

	/**
	 * @var string 3Dセキュアの利用有無を表すフラグ
	 */
	private $tdFlag;

	/**
	 * @var string 3Dセキュアの本人認証画面で表示される店舗名
	 */
	private $tdTenantName;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}



	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * 商品コード取得
	 * @return string 商品コード
	 */
	public function getItemCode() {
		return $this->itemCode;
	}

	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->jobCd;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
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
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->tax;
	}

	/**
	 * 3Dセキュア使用フラグ取得
	 * @return string 3Dセキュア使用フラグ
	 */
	public function getTdFlag() {
		return $this->tdFlag;
	}

	/**
	 * 3Dセキュア表示店舗名取得
	 * @return string 3Dセキュア表示店舗名
	 */
	public function getTdTenantName() {
		return $this->tdTenantName;
	}

	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * 商品コード設定
	 *
	 * @param string $itemCode
	 */
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
	}

	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->jobCd = $jobCd;
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
	 * ショップID設定
	 *
	 * @param string $shopId
	 */
	public function setShopId($shopId) {
		$this->shopId = $shopId;
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
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->tax = $tax;
	}

	/**
	 * 3Dセキュア表示店舗名設定
	 *
	 * @param string $tdTenantName
	 */
	public function setTdTenantName($tdTenantName) {
		$this->tdTenantName = $tdTenantName;
	}

	/**
	 * 3Dセキュア使用フラグ設定
	 *
	 * @param string $tdFlag
	 */
	public function setTdFlag($tdFlag) {
		$this->tdFlag = $tdFlag;
	}

	/**
	 * デフォルト値設定
	 */
	public function setDefaultValues() {
	    // 商品コード
        $this->setItemCode('0000990');
        // 3Dセキュア利用フラグ(デフォルトは0=使用しない)
        $this->setTdFlag('0');
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

	    // 各項目の設定(Amount,Taxは値が数値でないものは無効とする)
	    $this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
	    $this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
        $this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
	    $this->setJobCd($this->getStringValue($params, 'JobCd', $this->getJobCd()));
	    $this->setItemCode($this->getStringValue($params, 'ItemCode', $this->getItemCode()));
	    $this->setAmount($this->getIntegerValue($params, 'Amount', $this->getAmount()));
	    $this->setTax($this->getIntegerValue($params, 'Tax', $this->getTax()));
	    $this->setTdFlag($this->getStringValue($params, 'TdFlag', $this->getTdFlag()));
	    $this->setTdTenantName($this->getStringValue($params, 'TdTenantName', $this->getTdTenantName()));
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
	    $str .= 'JobCd=' . $this->encodeStr($this->getJobCd());
	    $str .= '&';
	    $str .= 'ItemCode=' . $this->encodeStr($this->getItemCode());
	    $str .= '&';
	    $str .= 'Amount=' . $this->encodeStr($this->getAmount());
	    $str .= '&';
	    $str .= 'Tax=' . $this->encodeStr($this->getTax());
	    $str .= '&';
	    $str .= 'TdFlag=' . $this->encodeStr($this->getTdFlag());
	    $str .= '&';
	    $str .= 'TdTenantName=' . $this->encodeStr($this->getTdTenantName());

	    return $str;
	}


}
?>