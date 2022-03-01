<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>PGプリカチャージ　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ChargePrecaInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string プリカ番号
	 */
	private $precaNo;
	/**
	 * @var string プリカ認証番号
	 */
	private $precaPass;
	/**
	 * @var bigDecimal 金額
	 */
	private $amount;
	/**
	 * @var string チャージタイプ
	 */
	private $chargeType;
	/**
	 * @var string 加盟店自由項目
	 */
	private $clientField;
	/**
	 * @var string 本人認証サービス利用フラグ
	 */
	private $tdFlag;
	/**
	 * @var string 3DS表示店舗名
	 */
	private $tdTenantName;
	/**
	 * @var string チャージ結果受信URL
	 */
	private $retURL;
	/**
	 * @var integer 本人認証手続き開始期限
	 */
	private $authProcessTermSec;
	/**
	 * @var string カード番号
	 */
	private $cardNo;
	/**
	 * @var string 有効期限
	 */
	private $expire;
	/**
	 * @var string セキュリティコード
	 */
	private $securityCode;
	/**
	 * @var string カード情報トークン
	 */
	private $token;
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
	 * @var string カード登録連番モード
	 */
	private $seqMode;
	/**
	 * @var string カード登録連番
	 */
	private $cardSeq;
	/**
	 * @var string 支払先コンビニコード
	 */
	private $cvsCode;
	/**
	 * @var string 氏名
	 */
	private $customerName;
	/**
	 * @var string フリガナ
	 */
	private $customerKana;
	/**
	 * @var string 電話番号
	 */
	private $telNo;
	/**
	 * @var string 支払期限日数
	 */
	private $paymentTermDay;
	/**
	 * @var string お問合せ先
	 */
	private $receiptsDisp11;
	/**
	 * @var string お問合せ先電話番号
	 */
	private $receiptsDisp12;
	/**
	 * @var string お問合せ先受付時間
	 */
	private $receiptsDisp13;


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
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
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
	 * 金額取得
	 * @return bigDecimal 金額
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * チャージタイプ取得
	 * @return string チャージタイプ
	 */
	public function getChargeType() {
		return $this->chargeType;
	}
	/**
	 * 加盟店自由項目取得
	 * @return string 加盟店自由項目
	 */
	public function getClientField() {
		return $this->clientField;
	}
	/**
	 * 本人認証サービス利用フラグ取得
	 * @return string 本人認証サービス利用フラグ
	 */
	public function getTdFlag() {
		return $this->tdFlag;
	}
	/**
	 * 3DS表示店舗名取得
	 * @return string 3DS表示店舗名
	 */
	public function getTdTenantName() {
		return $this->tdTenantName;
	}
	/**
	 * チャージ結果受信URL取得
	 * @return string チャージ結果受信URL
	 */
	public function getRetURL() {
		return $this->retURL;
	}
	/**
	 * 本人認証手続き開始期限取得
	 * @return integer 本人認証手続き開始期限
	 */
	public function getAuthProcessTermSec() {
		return $this->authProcessTermSec;
	}
	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}
	/**
	 * 有効期限取得
	 * @return string 有効期限
	 */
	public function getExpire() {
		return $this->expire;
	}
	/**
	 * セキュリティコード取得
	 * @return string セキュリティコード
	 */
	public function getSecurityCode() {
		return $this->securityCode;
	}
	/**
	 * カード情報トークン取得
	 * @return string カード情報トークン
	 */
	public function getToken() {
		return $this->token;
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
	 * カード登録連番モード取得
	 * @return string カード登録連番モード
	 */
	public function getSeqMode() {
		return $this->seqMode;
	}
	/**
	 * カード登録連番取得
	 * @return string カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}
	/**
	 * 支払先コンビニコード取得
	 * @return string 支払先コンビニコード
	 */
	public function getCvsCode() {
		return $this->cvsCode;
	}
	/**
	 * 氏名取得
	 * @return string 氏名
	 */
	public function getCustomerName() {
		return $this->customerName;
	}
	/**
	 * フリガナ取得
	 * @return string フリガナ
	 */
	public function getCustomerKana() {
		return $this->customerKana;
	}
	/**
	 * 電話番号取得
	 * @return string 電話番号
	 */
	public function getTelNo() {
		return $this->telNo;
	}
	/**
	 * 支払期限日数取得
	 * @return string 支払期限日数
	 */
	public function getPaymentTermDay() {
		return $this->paymentTermDay;
	}
	/**
	 * お問合せ先取得
	 * @return string お問合せ先
	 */
	public function getReceiptsDisp11() {
		return $this->receiptsDisp11;
	}
	/**
	 * お問合せ先電話番号取得
	 * @return string お問合せ先電話番号
	 */
	public function getReceiptsDisp12() {
		return $this->receiptsDisp12;
	}
	/**
	 * お問合せ先受付時間取得
	 * @return string お問合せ先受付時間
	 */
	public function getReceiptsDisp13() {
		return $this->receiptsDisp13;
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
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
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
	 * 金額設定
	 *
	 * @param bigDecimal $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	/**
	 * チャージタイプ設定
	 *
	 * @param string $chargeType
	 */
	public function setChargeType($chargeType) {
		$this->chargeType = $chargeType;
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
	 * 本人認証サービス利用フラグ設定
	 *
	 * @param string $tdFlag
	 */
	public function setTdFlag($tdFlag) {
		$this->tdFlag = $tdFlag;
	}
	/**
	 * 3DS表示店舗名設定
	 *
	 * @param string $tdTenantName
	 */
	public function setTdTenantName($tdTenantName) {
		$this->tdTenantName = $tdTenantName;
	}
	/**
	 * チャージ結果受信URL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->retURL = $retURL;
	}
	/**
	 * 本人認証手続き開始期限設定
	 *
	 * @param integer $authProcessTermSec
	 */
	public function setAuthProcessTermSec($authProcessTermSec) {
		$this->authProcessTermSec = $authProcessTermSec;
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
	 * 有効期限設定
	 *
	 * @param string $expire
	 */
	public function setExpire($expire) {
		$this->expire = $expire;
	}
	/**
	 * セキュリティコード設定
	 *
	 * @param string $securityCode
	 */
	public function setSecurityCode($securityCode) {
		$this->securityCode = $securityCode;
	}
	/**
	 * カード情報トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->token = $token;
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
	 * カード登録連番モード設定
	 *
	 * @param string $seqMode
	 */
	public function setSeqMode($seqMode) {
		$this->seqMode = $seqMode;
	}
	/**
	 * カード登録連番設定
	 *
	 * @param string $cardSeq
	 */
	public function setCardSeq($cardSeq) {
		$this->cardSeq = $cardSeq;
	}
	/**
	 * 支払先コンビニコード設定
	 *
	 * @param string $cvsCode
	 */
	public function setCvsCode($cvsCode) {
		$this->cvsCode = $cvsCode;
	}
	/**
	 * 氏名設定
	 *
	 * @param string $customerName
	 */
	public function setCustomerName($customerName) {
		$this->customerName = $customerName;
	}
	/**
	 * フリガナ設定
	 *
	 * @param string $customerKana
	 */
	public function setCustomerKana($customerKana) {
		$this->customerKana = $customerKana;
	}
	/**
	 * 電話番号設定
	 *
	 * @param string $telNo
	 */
	public function setTelNo($telNo) {
		$this->telNo = $telNo;
	}
	/**
	 * 支払期限日数設定
	 *
	 * @param string $paymentTermDay
	 */
	public function setPaymentTermDay($paymentTermDay) {
		$this->paymentTermDay = $paymentTermDay;
	}
	/**
	 * お問合せ先設定
	 *
	 * @param string $receiptsDisp11
	 */
	public function setReceiptsDisp11($receiptsDisp11) {
		$this->receiptsDisp11 = $receiptsDisp11;
	}
	/**
	 * お問合せ先電話番号設定
	 *
	 * @param string $receiptsDisp12
	 */
	public function setReceiptsDisp12($receiptsDisp12) {
		$this->receiptsDisp12 = $receiptsDisp12;
	}
	/**
	 * お問合せ先受付時間設定
	 *
	 * @param string $receiptsDisp13
	 */
	public function setReceiptsDisp13($receiptsDisp13) {
		$this->receiptsDisp13 = $receiptsDisp13;
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
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
		$this->setPrecaNo($this->getStringValue($params, 'PrecaNo', $this->getPrecaNo()));
		$this->setPrecaPass($this->getStringValue($params, 'PrecaPass', $this->getPrecaPass()));
		$this->setAmount($this->getStringValue($params, 'Amount', $this->getAmount()));
		$this->setChargeType($this->getStringValue($params, 'ChargeType', $this->getChargeType()));
		$this->setClientField($this->getStringValue($params, 'ClientField', $this->getClientField()));
		$this->setTdFlag($this->getStringValue($params, 'TdFlag', $this->getTdFlag()));
		$this->setTdTenantName($this->getStringValue($params, 'TdTenantName', $this->getTdTenantName()));
		$this->setRetURL($this->getStringValue($params, 'RetURL', $this->getRetURL()));
		$this->setAuthProcessTermSec($this->getStringValue($params, 'AuthProcessTermSec', $this->getAuthProcessTermSec()));
		$this->setCardNo($this->getStringValue($params, 'CardNo', $this->getCardNo()));
		$this->setExpire($this->getStringValue($params, 'Expire', $this->getExpire()));
		$this->setSecurityCode($this->getStringValue($params, 'SecurityCode', $this->getSecurityCode()));
		$this->setToken($this->getStringValue($params, 'Token', $this->getToken()));
		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
		$this->setSeqMode($this->getStringValue($params, 'SeqMode', $this->getSeqMode()));
		$this->setCardSeq($this->getStringValue($params, 'CardSeq', $this->getCardSeq()));
		$this->setCvsCode($this->getStringValue($params, 'CvsCode', $this->getCvsCode()));
		$this->setCustomerName($this->getStringValue($params, 'CustomerName', $this->getCustomerName()));
		$this->setCustomerKana($this->getStringValue($params, 'CustomerKana', $this->getCustomerKana()));
		$this->setTelNo($this->getStringValue($params, 'TelNo', $this->getTelNo()));
		$this->setPaymentTermDay($this->getStringValue($params, 'PaymentTermDay', $this->getPaymentTermDay()));
		$this->setReceiptsDisp11($this->getStringValue($params, 'ReceiptsDisp11', $this->getReceiptsDisp11()));
		$this->setReceiptsDisp12($this->getStringValue($params, 'ReceiptsDisp12', $this->getReceiptsDisp12()));
		$this->setReceiptsDisp13($this->getStringValue($params, 'ReceiptsDisp13', $this->getReceiptsDisp13()));

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
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'PrecaNo=' . $this->encodeStr($this->getPrecaNo());
		$str .='&';
		$str .= 'PrecaPass=' . $this->encodeStr($this->getPrecaPass());
		$str .='&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'ChargeType=' . $this->encodeStr($this->getChargeType());
		$str .='&';
		$str .= 'ClientField=' . $this->encodeStr($this->getClientField());
		$str .='&';
		$str .= 'TdFlag=' . $this->encodeStr($this->getTdFlag());
		$str .='&';
		$str .= 'TdTenantName=' . $this->encodeStr($this->getTdTenantName());
		$str .='&';
		$str .= 'RetURL=' . $this->encodeStr($this->getRetURL());
		$str .='&';
		$str .= 'AuthProcessTermSec=' . $this->encodeStr($this->getAuthProcessTermSec());
		$str .='&';
		$str .= 'CardNo=' . $this->encodeStr($this->getCardNo());
		$str .='&';
		$str .= 'Expire=' . $this->encodeStr($this->getExpire());
		$str .='&';
		$str .= 'SecurityCode=' . $this->encodeStr($this->getSecurityCode());
		$str .='&';
		$str .= 'Token=' . $this->encodeStr($this->getToken());
		$str .='&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'SeqMode=' . $this->encodeStr($this->getSeqMode());
		$str .='&';
		$str .= 'CardSeq=' . $this->encodeStr($this->getCardSeq());
		$str .='&';
		$str .= 'CvsCode=' . $this->encodeStr($this->getCvsCode());
		$str .='&';
		$str .= 'CustomerName=' . $this->encodeStr($this->getCustomerName());
		$str .='&';
		$str .= 'CustomerKana=' . $this->encodeStr($this->getCustomerKana());
		$str .='&';
		$str .= 'TelNo=' . $this->encodeStr($this->getTelNo());
		$str .='&';
		$str .= 'PaymentTermDay=' . $this->encodeStr($this->getPaymentTermDay());
		$str .='&';
		$str .= 'ReceiptsDisp11=' . $this->encodeStr($this->getReceiptsDisp11());
		$str .='&';
		$str .= 'ReceiptsDisp12=' . $this->encodeStr($this->getReceiptsDisp12());
		$str .='&';
		$str .= 'ReceiptsDisp13=' . $this->encodeStr($this->getReceiptsDisp13());

	    return $str;
	}


}
?>
