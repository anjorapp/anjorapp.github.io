<?php
require_once 'com/gmo_pg/client/input/EntryTranInput.php';
require_once 'com/gmo_pg/client/input/ExecTranInput.php';
/**
 * <b>登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class EntryExecTranInput {

	/**
	 * @var EntryTranInput 取引登録入力パラメータ
	 */
	private $entryTranInput;/* @var $entryTranInput EntryTranInput */

	/**
	 * @var ExecTranInput 決済実行入力パラメータ
	 */
	private $execTranInput;/* @var $execTranInput ExecTranInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranInput = new EntryTranInput($params);
		$this->execTranInput = new ExecTranInput($params);
	}

	/**
	 * 取引登録入力パラメータ取得
	 *
	 * @return EntryTranInput 取引登録時パラメータ
	 */
	public function &getEntryTranInput() {
		return $this->entryTranInput;
	}

	/**
	 * 決済実行入力パラメータ取得
	 * @return ExecTranInput 決済実行時パラメータ
	 */
	public function &getExecTranInput() {
		return $this->execTranInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
		return $this->entryTranInput->getShopId();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->entryTranInput->getOrderId();
	}

	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranInput->getJobCd();
	}

	/**
	 * 商品コード取得
	 * @return string 商品コード
	 */
	public function getItemCode() {
		return $this->entryTranInput->getItemCode();
	}

	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->entryTranInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranInput->getTax();
	}

	/**
	 * 3Dセキュア使用フラグ取得
	 * @return string 3Dセキュア使用フラグ
	 */
	public function getTdFlag() {
		return $this->entryTranInput->getTdFlag();
	}

	/**
	 * 3Dセキュア表示店舗名取得
	 * @return string 3Dセキュア表示店舗名
	 */
	public function getTdTenantName() {
		return $this->entryTranInput->getTdTenantName();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->execTranInput->getAccessId();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranInput->getAccessPass();
	}

	/**
	 * 支払い方法取得
	 * @return string 支払方法
	 */
	public function getMethod() {
		return $this->execTranInput->getMethod();
	}

	/**
	 * 支払回数取得
	 * @return integer 支払回数
	 */
	public function getPayTimes() {
		return $this->execTranInput->getPayTimes();
	}

	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->execTranInput->getCardNo();
	}

	/**
	 * 有効期限取得
	 * @return string 有効期限
	 */
	public function getExpire() {
		return $this->execTranInput->getExpire();
	}

	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteId(){
		return $this->execTranInput->getSiteId();
	}

	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass(){
		return $this->execTranInput->getSitePass();
	}

	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberId(){
		return $this->execTranInput->getMemberId();
	}

	/**
	 * カード登録連番取得
	 * @return integer カード登録連番
	 */
	public function getCardSeq(){
		return $this->execTranInput->getCardSeq();
	}

	/**
	 * カード連番モード取得
	 * @return string カード連番モード
	 */
	public function getSeqMode(){
		return $this->execTranInput->getSeqMode();
	}

	/**
	 * カードパスワード取得
	 * @return string カードパスワード
	 */
	public function getCardPass(){
		return $this->execTranInput->getCardPass();
	}

	/**
	 * セキュリティコード取得
	 * @return string セキュリティコード
	 */
	public function getSecurityCode() {
		return $this->execTranInput->getSecurityCode();
	}

	/**
	 * HTTP_ACCEPT取得
	 * @return string HTTP_ACCEPT
	 */
	public function getHttpAccept() {
		return $this->execTranInput->getHttpAccept();
	}

	/**
	 * HTTP_USER_AGENT取得
	 * @return string HTTP_USER_AGENT
	 */
	public function getHttpUserAgent() {
		return $this->execTranInput->getHttpUserAgent();
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranInput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranInput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranInput->getClientField3();
	}

	/**
	 * 利用明細に記載される文言取得
	 * @return string 利用明細に記載される文言
	 */
	public function getDisplayInfo() {
		return $this->execTranInput->getDisplayInfo();
	}

	/**
	 * トークンタイプ取得
	 * @return string トークンタイプ
	 */
	public function getTokenType() {
		return $this->execTranInput->getTokenType();
	}

	/**
	 * 取引登録入力パラメータ設定
	 *
	 * @param EntryTranInput entryTranInput  取引登録入力パラメータ
	 */
	public function setEntryTranInput(&$entryTranInput) {
		$this->entryTranInput = $entryTranInput;
	}

	/**
	 * 決済実行入力パラメータ設定
	 *
	 * @param ExecTranInput  決済実行入力パラメータ
	 */
	public function setExecTranInput(&$execTranInput) {
		$this->execTranInput = $execTranInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopId
	 */
	public function setShopId($shopId) {
		$this->entryTranInput->setShopId($shopId);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId
	 */
	public function setOrderId($orderId) {
		$this->entryTranInput->setOrderId($orderId);
		$this->execTranInput->setOrderId($orderId);
	}

	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranInput->setJobCd($jobCd);
	}

	/**
	 * 商品コード設定
	 *
	 * @param string $itemCode
	 */
	public function setItemCode($itemCode) {
		$this->entryTranInput->setItemCode($itemCode);
	}

	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranInput->setTax($tax);
	}

	/**
	 * 3Dセキュア使用フラグ設定
	 *
	 * @param string $tdFlag
	 */
	public function setTdFlag($tdFlag) {
		$this->entryTranInput->setTdFlag($tdFlag);
	}

	/**
	 * 3Dセキュア表示店舗名設定
	 *
	 * @param string $tdTenantName
	 */
	public function setTdTenantName($tdTenantName) {
		$this->entryTranInput->setTdTenantName($tdTenantName);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessId
	 */
	public function setAccessId($accessId) {
		$this->execTranInput->setAccessId($accessId);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranInput->setAccessPass($accessPass);
	}

	/**
	 * 支払い方法設定
	 *
	 * @param string $method
	 */
	public function setMethod($method) {
		$this->execTranInput->setMethod($method);
	}

	/**
	 * 支払回数設定
	 *
	 * @param string $payTimes
	 */
	public function setPayTimes($payTimes) {
		$this->execTranInput->setPayTimes($payTimes);
	}

	/**
	 * カード番号設定
	 *
	 * @param string $cardNo
	 */
	public function setCardNo($cardNo) {
		$this->execTranInput->setCardNo($cardNo);
	}

	/**
	 * 有効期限設定
	 *
	 * @param string $expire
	 */
	public function setExpire($expire) {
		$this->execTranInput->setExpire($expire);
	}

	/**
	 * サイトID設定
	 * @param string $siteID
	 */
	public function setSiteId($siteID){
		$this->execTranInput->setSiteId($siteID);
	}

	/**
	 * サイトパスワード設定
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass){
		$this->execTranInput->setSitePass($sitePass);
	}

	/**
	 * 会員ID設定
	 * @param string $memberId
	 */
	public function setMemberId($memberId){
		$this->execTranInput->setMemberId($memberId);
	}

	/**
	 * カード登録連番設定
	 * @param integer $cardseq
	 */
	public function setCardSeq($cardseq){
		$this->execTranInput->setCardSeq($cardseq);
	}

	/**
	 * カード連番モード設定
	 * @param string $seqMode
	 */
	public function setSeqMode($seqMode){
		$this->execTranInput->setSeqMode($seqMode);
	}

	/**
	 * カードパスワード設定
	 * @param string $cardPass
	 */
	public function setCardPass($cardPass){
		$this->execTranInput->setCardPass($cardPass);
	}


	/**
	 * セキュリティコード設定
	 *
	 * @param string $securityCode
	 */
	public function setSecurityCode($securityCode) {
		$this->execTranInput->setSecurityCode($securityCode);
	}


	/**
	 * HTTP_ACCEPT設定
	 *
	 * @param string $httpAccept
	 */
	public function setHttpAccept($httpAccept) {
		$this->execTranInput->setHttpAccept($httpAccept);
	}


	/**
	 * HTTP_USER_AGENT設定
	 *
	 * @param string $httpUserAgent
	 */
	public function setHttpUserAgent($httpUserAgent) {
		$this->execTranInput->setHttpUserAgent($httpUserAgent);
	}


	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranInput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranInput->setClientField2($clientField2);
	}


	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranInput->setClientField3($clientField3);
	}

	/**
	 * 利用明細に記載される文言設定
	 *
	 * @param string $displayInfo
	 */
	public function setDisplayInfo($displayInfo) {
		$this->execTranInput->setDisplayInfo($displayInfo);
	}

	/**
	 * トークンタイプ設定
	 *
	 * @param string $tokenType
	 */
	public function setTokenType($tokenType) {
		$this->execTranInput->setTokenType($tokenType);
	}
}
?>