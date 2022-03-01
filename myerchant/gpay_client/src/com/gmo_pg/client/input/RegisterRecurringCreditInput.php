<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>自動売上自動売上登録　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class RegisterRecurringCreditInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string 自動売上ID
	 */
	private $recurringID;
	/**
	 * @var integer 課金金額
	 */
	private $amount;
	/**
	 * @var integer 税送料
	 */
	private $tax;
	/**
	 * @var string 対象種別
	 */
	private $registType;
	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string カード番号
	 */
	private $cardNo;
	/**
	 * @var string カード有効期限
	 */
	private $expire;
	/**
	 * @var string 元取引オーダーID
	 */
	private $srcOrderID;
	/**
	 * @var string 課金日
	 */
	private $chargeDay;
	/**
	 * @var string 課金月
	 */
	private $chargeMonth;
	/**
	 * @var string 課金開始日
	 */
	private $chargeStartDate;
	/**
	 * @var string 課金停止日
	 */
	private $chargeStopDate;
	/**
	 * @var string 加盟店向け自由項目1
	 */
	private $clientField1;
	/**
	 * @var string 加盟店向け自由項目2
	 */
	private $clientField2;
	/**
	 * @var string 加盟店向け自由項目3
	 */
	private $clientField3;


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
	 * 自動売上ID取得
	 * @return string 自動売上ID
	 */
	public function getRecurringID() {
		return $this->recurringID;
	}
	/**
	 * 課金金額取得
	 * @return integer 課金金額
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->tax;
	}
	/**
	 * 対象種別取得
	 * @return string 対象種別
	 */
	public function getRegistType() {
		return $this->registType;
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->sitePass;
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}
	/**
	 * カード有効期限取得
	 * @return string カード有効期限
	 */
	public function getExpire() {
		return $this->expire;
	}
	/**
	 * 元取引オーダーID取得
	 * @return string 元取引オーダーID
	 */
	public function getSrcOrderID() {
		return $this->srcOrderID;
	}
	/**
	 * 課金日取得
	 * @return string 課金日
	 */
	public function getChargeDay() {
		return $this->chargeDay;
	}
	/**
	 * 課金月取得
	 * @return string 課金月
	 */
	public function getChargeMonth() {
		return $this->chargeMonth;
	}
	/**
	 * 課金開始日取得
	 * @return string 課金開始日
	 */
	public function getChargeStartDate() {
		return $this->chargeStartDate;
	}
	/**
	 * 課金停止日取得
	 * @return string 課金停止日
	 */
	public function getChargeStopDate() {
		return $this->chargeStopDate;
	}
	/**
	 * 加盟店向け自由項目1取得
	 * @return string 加盟店向け自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}
	/**
	 * 加盟店向け自由項目2取得
	 * @return string 加盟店向け自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}
	/**
	 * 加盟店向け自由項目3取得
	 * @return string 加盟店向け自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
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
	 * 自動売上ID設定
	 *
	 * @param string $recurringID
	 */
	public function setRecurringID($recurringID) {
		$this->recurringID = $recurringID;
	}
	/**
	 * 課金金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
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
	 * 対象種別設定
	 *
	 * @param string $registType
	 */
	public function setRegistType($registType) {
		$this->registType = $registType;
	}
	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->siteID = $siteID;
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * カード番号設定
	 *
	 * @param string $cardNo
	 */
	public function setCardNo($cardNo) {
		$this->cardNo = $cardNo;
	}
	/**
	 * カード有効期限設定
	 *
	 * @param string $expire
	 */
	public function setExpire($expire) {
		$this->expire = $expire;
	}
	/**
	 * 元取引オーダーID設定
	 *
	 * @param string $srcOrderID
	 */
	public function setSrcOrderID($srcOrderID) {
		$this->srcOrderID = $srcOrderID;
	}
	/**
	 * 課金日設定
	 *
	 * @param string $chargeDay
	 */
	public function setChargeDay($chargeDay) {
		$this->chargeDay = $chargeDay;
	}
	/**
	 * 課金月設定
	 *
	 * @param string $chargeMonth
	 */
	public function setChargeMonth($chargeMonth) {
		$this->chargeMonth = $chargeMonth;
	}
	/**
	 * 課金開始日設定
	 *
	 * @param string $chargeStartDate
	 */
	public function setChargeStartDate($chargeStartDate) {
		$this->chargeStartDate = $chargeStartDate;
	}
	/**
	 * 課金停止日設定
	 *
	 * @param string $chargeStopDate
	 */
	public function setChargeStopDate($chargeStopDate) {
		$this->chargeStopDate = $chargeStopDate;
	}
	/**
	 * 加盟店向け自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}
	/**
	 * 加盟店向け自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}
	/**
	 * 加盟店向け自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
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
		$this->setRecurringID($this->getStringValue($params, 'RecurringID', $this->getRecurringID()));
		$this->setAmount($this->getStringValue($params, 'Amount', $this->getAmount()));
		$this->setTax($this->getStringValue($params, 'Tax', $this->getTax()));
		$this->setRegistType($this->getStringValue($params, 'RegistType', $this->getRegistType()));
		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
		$this->setCardNo($this->getStringValue($params, 'CardNo', $this->getCardNo()));
		$this->setExpire($this->getStringValue($params, 'Expire', $this->getExpire()));
		$this->setSrcOrderID($this->getStringValue($params, 'SrcOrderID', $this->getSrcOrderID()));
		$this->setChargeDay($this->getStringValue($params, 'ChargeDay', $this->getChargeDay()));
		$this->setChargeMonth($this->getStringValue($params, 'ChargeMonth', $this->getChargeMonth()));
		$this->setChargeStartDate($this->getStringValue($params, 'ChargeStartDate', $this->getChargeStartDate()));
		$this->setChargeStopDate($this->getStringValue($params, 'ChargeStopDate', $this->getChargeStopDate()));
		$this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
		$this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
		$this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));

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
		$str .= 'RecurringID=' . $this->encodeStr($this->getRecurringID());
		$str .='&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());
		$str .='&';
		$str .= 'RegistType=' . $this->encodeStr($this->getRegistType());
		$str .='&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'CardNo=' . $this->encodeStr($this->getCardNo());
		$str .='&';
		$str .= 'Expire=' . $this->encodeStr($this->getExpire());
		$str .='&';
		$str .= 'SrcOrderID=' . $this->encodeStr($this->getSrcOrderID());
		$str .='&';
		$str .= 'ChargeDay=' . $this->encodeStr($this->getChargeDay());
		$str .='&';
		$str .= 'ChargeMonth=' . $this->encodeStr($this->getChargeMonth());
		$str .='&';
		$str .= 'ChargeStartDate=' . $this->encodeStr($this->getChargeStartDate());
		$str .='&';
		$str .= 'ChargeStopDate=' . $this->encodeStr($this->getChargeStopDate());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());

	    return $str;
	}


}
?>
