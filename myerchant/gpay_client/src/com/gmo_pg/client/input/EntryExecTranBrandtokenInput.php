<?php
require_once 'com/gmo_pg/client/input/EntryTranBrandtokenInput.php';
require_once 'com/gmo_pg/client/input/ExecTranBrandtokenInput.php';
/**
 * <b>ブランドトークン決済登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranBrandtokenInput {

	/**
	 * @var EntryTranBrandtokenInput ブランドトークン決済登録入力パラメータ
	 */
	private $entryTranBrandtokenInput;/* @var $entryTranInput EntryTranBrandtokenInput */

	/**
	 * @var ExecTranBrandtokenInput ブランドトークン決済実行入力パラメータ
	 */
	private $execTranBrandtokenInput;/* @var $execTranInput ExecTranBrandtokenInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranBrandtokenInput = new EntryTranBrandtokenInput($params);
		$this->execTranBrandtokenInput = new ExecTranBrandtokenInput($params);
	}

	/**
	 * ブランドトークン決済取引登録入力パラメータ取得
	 *
	 * @return EntryTranBrandtokenInput 取引登録時パラメータ
	 */
	public function &getEntryTranBrandtokenInput() {
		return $this->entryTranBrandtokenInput;
	}

	/**
	 * ブランドトークン決済実行入力パラメータ取得
	 * @return ExecTranBrandtokenInput 決済実行時パラメータ
	 */
	public function &getExecTranBrandtokenInput() {
		return $this->execTranBrandtokenInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranBrandtokenInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranBrandtokenInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranBrandtokenInput->getOrderID();

	}
	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranBrandtokenInput->getJobCd();
	}
	/**
	 * 商品コード取得
	 * @return string 商品コード
	 */
	public function getItemCode() {
		return $this->entryTranBrandtokenInput->getItemCode();
	}
	/**
	 * 利用料金取得
	 * @return integer 利用料金
	 */
	public function getAmount() {
		return $this->entryTranBrandtokenInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranBrandtokenInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranBrandtokenInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranBrandtokenInput->getAccessPass();
	}
	/**
	 * トークン種別取得
	 * @return string トークン種別
	 */
	public function getTokenType() {
		return $this->execTranBrandtokenInput->getTokenType();
	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranBrandtokenInput->getToken();
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->execTranBrandtokenInput->getSiteID();
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->execTranBrandtokenInput->getSitePass();
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->execTranBrandtokenInput->getMemberID();
	}
	/**
	 * 連番モード取得
	 * @return string 連番モード
	 */
	public function getSeqMode() {
		return $this->execTranBrandtokenInput->getSeqMode();
	}
	/**
	 * トークン連番取得
	 * @return integer トークン連番
	 */
	public function getTokenSeq() {
		return $this->execTranBrandtokenInput->getTokenSeq();
	}
	/**
	 * 加盟店向け自由項目1取得
	 * @return string 加盟店向け自由項目1
	 */
	public function getClientField1() {
		return $this->execTranBrandtokenInput->getClientField1();
	}
	/**
	 * 加盟店向け自由項目2取得
	 * @return string 加盟店向け自由項目2
	 */
	public function getClientField2() {
		return $this->execTranBrandtokenInput->getClientField2();
	}
	/**
	 * 加盟店向け自由項目3取得
	 * @return string 加盟店向け自由項目3
	 */
	public function getClientField3() {
		return $this->execTranBrandtokenInput->getClientField3();
	}

	/**
	 * ブランドトークン決済取引登録入力パラメータ設定
	 *
	 * @param EntryTranBrandtokenInput entryTranBrandtokenInput  取引登録入力パラメータ
	 */
	public function setEntryTranBrandtokenInput(&$entryTranBrandtokenInput) {
		$this->entryTranBrandtokenInput = $entryTranBrandtokenInput;
	}

	/**
	 * ブランドトークン決済実行入力パラメータ設定
	 *
	 * @param ExecTranBrandtokenInput  execTranBrandtokenInput   決済実行入力パラメータ
	 */
	public function setExecTranBrandtokenInput(&$execTranBrandtokenInput) {
		$this->execTranBrandtokenInput = $execTranBrandtokenInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranBrandtokenInput->setShopID($shopID);
		$this->execTranBrandtokenInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranBrandtokenInput->setShopPass($shopPass);
		$this->execTranBrandtokenInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranBrandtokenInput->setOrderID($orderID);
		$this->execTranBrandtokenInput->setOrderID($orderID);

	}
	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranBrandtokenInput->setJobCd($jobCd);
	}
	/**
	 * 商品コード設定
	 *
	 * @param string $itemCode
	 */
	public function setItemCode($itemCode) {
		$this->entryTranBrandtokenInput->setItemCode($itemCode);
	}
	/**
	 * 利用料金設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranBrandtokenInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranBrandtokenInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranBrandtokenInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranBrandtokenInput->setAccessPass($accessPass);
	}
	/**
	 * トークン種別設定
	 *
	 * @param string $tokenType
	 */
	public function setTokenType($tokenType) {
		$this->execTranBrandtokenInput->setTokenType($tokenType);
	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranBrandtokenInput->setToken($token);
	}
	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->execTranBrandtokenInput->setSiteID($siteID);
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->execTranBrandtokenInput->setSitePass($sitePass);
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->execTranBrandtokenInput->setMemberID($memberID);
	}
	/**
	 * 連番モード設定
	 *
	 * @param string $seqMode
	 */
	public function setSeqMode($seqMode) {
		$this->execTranBrandtokenInput->setSeqMode($seqMode);
	}
	/**
	 * トークン連番設定
	 *
	 * @param integer $tokenSeq
	 */
	public function setTokenSeq($tokenSeq) {
		$this->execTranBrandtokenInput->setTokenSeq($tokenSeq);
	}
	/**
	 * 加盟店向け自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranBrandtokenInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店向け自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranBrandtokenInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店向け自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranBrandtokenInput->setClientField3($clientField3);
	}

}
?>
