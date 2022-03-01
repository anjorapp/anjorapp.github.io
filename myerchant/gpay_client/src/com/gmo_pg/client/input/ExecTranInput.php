<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>決済実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class ExecTranInput extends BaseInput {

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
	 * @var string 支払方法
	 */
	private $method;

	/**
	 * @var integer 支払回数
	 */
	private $payTimes;

	/**
	 * @var string カード番号
	 */
	private $cardNo;

	/**
	 * @var string トークン
	 */
	private $token;

	/**
	 * @var string サイトID
	 */
	private $siteId;

	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;

	/**
	 * @var string 会員ID
	 */
	private $memberId;

	/**
	 * @var string カード連番モード
	 */
	private $seqMode;

	/**
	 * @var integer 登録カード連番
	 */
	private $cardSeq;

	/**
	 * @var string カードパスワード
	 */
	private $cardPass;

	/**
	 * @var string 有効期限
	 */
	private $expire;

	/**
	 * @var string セキュリティコード
	 */
	private $securityCode;

	/**
	 * @var string HTTP_ACCEPT
	 */
	private $httpAccept;

	/**
	 * @var string HTTP_USER_AGENT
	 */
	private $httpUserAgent;

	/**
	 * @var string 加盟店自由項目1
	 */
	private $clientField1;

	/**
	 * @var string 加盟店自由項目
	 */
	private $clientField2;

	/**
	 * @var string 加盟店自由項目3
	 */
	private $clientField3;

	/**
	 * @var string 加盟店自由項目返却フラグ
	 */
	private $clientFieldFlag;

	/**
     * @var string 使用端末情報
     */
    private $deviceCategory;

    /**
     * @var string 利用明細に記載される文言
     */
    private $displayInfo;

    /**
     * @var string トークンタイプ
     */
    private $tokenType;

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
	    // 加盟店自由項目返却フラグ(固定値)
        $this->clientFieldFlag = "1";
        // 使用端末情報(固定値)
        $this->deviceCategory = "0";
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

	    // 各項目の設定(PayTimesは値が数値でないものは無効とする)
        $this->setAccessId($this->getStringValue($params, 'AccessID', $this->getAccessId()));
	    $this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
	    $this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
	    $this->setMethod($this->getStringValue($params, 'Method', $this->getMethod()));
	    $this->setPayTimes($this->getIntegerValue($params, 'PayTimes', $this->getPayTimes()));
	    $this->setCardNo($this->getStringValue($params, 'CardNo', $this->getCardNo()));
	    $this->setToken($this->getStringValue($params, 'Token', $this->getToken()));
	    $this->setSiteId($this->getStringValue($params, 'SiteID',$this->getSiteId()));
	    $this->setSitePass($this->getStringValue($params , 'SitePass' , $this->getSitePass()));
	    $this->setMemberId($this->getStringValue($params,'MemberID',$this->getMemberId()));
	    $this->setSeqMode($this->getStringValue($params,'SeqMode',$this->getSeqMode()));
	    $this->setCardSeq($this->getIntegerValue($params,'CardSeq',$this->getCardSeq()));
		$this->setCardPass($this->getStringValue($params,'CardPass',$this->getCardPass()));
	    $this->setExpire($this->getStringValue($params, 'Expire', $this->getExpire()));
	    $this->setSecurityCode($this->getStringValue($params, 'SecurityCode', $this->getSecurityCode()));
	    $this->setHttpAccept($this->getStringValue($params, 'HttpAccept', $this->getHttpAccept()));
	    $this->setHttpUserAgent($this->getStringValue($params, 'HttpUserAgent', $this->getHttpUserAgent()));
	    $this->setClientField1($this->getStringValue($params, 'ClientField1', $this->getClientField1()));
	    $this->setClientField2($this->getStringValue($params, 'ClientField2', $this->getClientField2()));
	    $this->setClientField3($this->getStringValue($params, 'ClientField3', $this->getClientField3()));
	    $this->setDisplayInfo($this->getStringValue($params, 'DisplayInfo', $this->getDisplayInfo()));
	    $this->setTokenType($this->getStringValue($params, 'TokenType', $this->getTokenType()));
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
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * 支払回数取得
	 * @return integer 支払回数
	 */
	public function getPayTimes() {
		return $this->payTimes;
	}

	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}

	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteId(){
		return $this->siteId;
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
	public function getMemberId(){
		return $this->memberId;
	}

	/**
	 * カード連番指定モード取得
	 * @return string カード連番指定モード
	 */
	public function getSeqMode(){
		return $this->seqMode;
	}

	/**
	 * 登録カード連番取得
	 * @return integer 登録カード連番
	 */
	public function getCardSeq(){
		return $this->cardSeq;
	}

	/**
	 * カードパスワード取得
	 * @return string カードパスワード
	 */
	public function getCardPass(){
		return $this->cardPass;
	}

	/**
	 * 支払い方法取得
	 * @return string 支払方法
	 */
	public function getMethod() {
		return $this->method;
	}

	/**
	 * 有効期限取得
	 * @return string 有効期限(YYMM)
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
	 * HTTP_ACCEPT取得
	 * @return string HTTP_ACCEPT
	 */
	public function getHttpAccept() {
		return $this->httpAccept;
	}

	/**
	 * HTTP_USER_AGENT取得
	 * @return string HTTP_USER_AGENT
	 */
	public function getHttpUserAgent() {
		return $this->httpUserAgent;
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}

	/**
	 * 利用明細に記載される文言取得
	 * @return string 利用明細に記載される文言
	 */
	public function getDisplayInfo() {
		return $this->displayInfo;
	}

	/**
	 * トークンタイプ取得
	 * @return string トークンタイプ
	 */
	public function getTokenType() {
		return $this->tokenType;
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
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * 支払い方法設定
	 *
	 * @param string $method 支払い方法
	 */
	public function setMethod($method) {
		$this->method = $method;
	}

	/**
	 * 支払回数設定
	 *
	 * @param integer $payTimes 支払回数
	 */
	public function setPayTimes($payTimes) {
		$this->payTimes = $payTimes;
	}

	/**
	 * カード番号設定
	 *
	 * @param string $cardNo カード番号
	 */
	public function setCardNo($cardNo) {
		$this->cardNo = $cardNo;
	}

	/**
	 *トークン設定
	 *
	 * @param string $token トークン
	 */
	public function setToken($token) {
		$this->token = $token;
	}

	/**
	 * サイトID設定
	 * @param string $siteId サイトID
	 */
	public function setSiteId($siteId){
		$this->siteId = $siteId;
	}

	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass サイトパスワード
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}

	/**
	 * 会員ID設定
	 *
	 * @param string $memberId 会員ID
	 */
	public function setMemberId($memberId){
		$this->memberId = $memberId;
	}

	/**
	 * カード連番指定モード設定
	 * @param string $seqMode カード連番指定モード
	 */
	public function setSeqMode($seqMode){
		$this->seqMode = $seqMode;
	}

	/**
	 * 登録カード連番設定
	 * @param integer $cardSeq 登録カード連番
	 */
	public function setCardSeq($cardSeq){
		$this->cardSeq = $cardSeq;
	}

	/**
	 * カードパスワード設定
	 * @param string $cardPass カードパスワード
	 */
	public function setCardPass($cardPass){
		$this->cardPass=$cardPass;
	}

	/**
	 * 有効期限設定
	 *
	 * @param string $expire 有効期限(YYMM)
	 */
	public function setExpire($expire) {
		$this->expire = $expire;
	}

	/**
	 * セキュリティコード設定
	 *
	 * @param string $securityCode セキュリティコード
	 */
	public function setSecurityCode($securityCode) {
		$this->securityCode = $securityCode;
	}

	/**
	 * HTTP_ACCEPT設定
	 *
	 * @param string $httpAccept HTTP_ACCEPT
	 */
	public function setHttpAccept($httpAccept) {
		$this->httpAccept = $httpAccept;
	}

	/**
	 * HTTP_USER_AGENT設定
	 *
	 * @param string $httpUserAgent HTTP_USER_AGENT
	 */
	public function setHttpUserAgent($httpUserAgent) {
		$this->httpUserAgent = $httpUserAgent;
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}

	/**
	 * 利用明細に記載される文言設定
	 *
	 * @param string $clientField3 利用明細に記載される文言
	 */
	public function setDisplayInfo($displayInfo) {
		$this->displayInfo = $displayInfo;
	}

	/**
	 * トークンタイプ設定
	 *
	 * @param string $tokneType トークンタイプ
	 */
	public function setTokenType($tokneType) {
		$this->tokenType = $tokneType;
	}

	/**
	 * 文字列表現
	 * URLのパラメータ文字列の形式の文字列を生成する
	 * @return string 接続文字列表現
	 */
	public function toString() {

	    $str  = 'AccessID=' . $this->encodeStr($this->getAccessId());
	    $str .= '&';
	    $str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
	    $str .= '&';
	    $str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
	    $str .= '&';
	    $str .= 'Method=' . $this->encodeStr($this->getMethod());
	    $str .= '&';
	    $str .= 'PayTimes=' . $this->encodeStr($this->getPayTimes());
	    $str .= '&';
	    $str .= 'CardNo=' . $this->encodeStr($this->getCardNo());
	    $str .= '&';
	    $str .= 'Token=' . $this->encodeStr($this->getToken());
	    $str .= '&';
	    $str .= 'SiteID=' . $this->encodeStr($this->getSiteId());
	    $str .= '&';
	    $str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
	    $str .= '&';
	    $str .= 'MemberID=' . $this->encodeStr($this->getMemberId());
	    $str .= '&';
	    $str .= 'SeqMode=' . $this->encodeStr($this->getSeqMode());
	    $str .= '&';
	    $str .= 'CardSeq=' . $this->encodeStr($this->getCardSeq());
	    $str .= '&';
	    $str .= 'CardPass=' . $this->encodeStr($this->getCardPass());
	    $str .= '&';
	    $str .= 'Expire=' . $this->encodeStr($this->getExpire());
	    $str .= '&';
	    $str .= 'SecurityCode=' . $this->encodeStr($this->getSecurityCode());
	    $str .= '&';
	    $str .= 'HttpAccept=' . $this->encodeStr($this->getHttpAccept());
	    $str .= '&';
	    $str .= 'HttpUserAgent=' . $this->encodeStr($this->getHttpUserAgent());
	    $str .= '&';
	    $str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
	    $str .= '&';
	    $str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
	    $str .= '&';
	    $str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
	    $str .= '&';
	    $str .= 'ClientFieldFlag=' . $this->clientFieldFlag;
	    $str .= '&';
	    $str .= 'DeviceCategory=' . $this->deviceCategory;
	    $str .= '&';
	    $str .= 'DisplayInfo=' . $this->encodeStr($this->getDisplayInfo());
	    $str .= '&';
	    $str .= 'TokenType=' . $this->encodeStr($this->getTokenType());

	    return $str;
	}
}
?>