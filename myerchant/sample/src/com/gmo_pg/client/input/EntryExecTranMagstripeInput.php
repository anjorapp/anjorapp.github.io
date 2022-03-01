<?php
require_once 'com/gmo_pg/client/input/EntryTranInput.php';
require_once 'com/gmo_pg/client/input/ExecTranMagstripeInput.php';
/**
 * <b>クレジットカード決済登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranMagstripeInput {

	/**
	 * @var EntryTranInput クレジットカード決済登録入力パラメータ
	 */
	private $entryTranInput;/* @var $entryTranInput EntryTranInput */

	/**
	 * @var ExecTranMagstripeInput クレジットカード決済実行入力パラメータ
	 */
	private $execTranMagstripeInput;/* @var $execTranInput ExecTranMagstripeInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranInput = new EntryTranInput($params);
		$this->execTranMagstripeInput = new ExecTranMagstripeInput($params);
	}

	/**
	 * クレジットカード決済取引登録入力パラメータ取得
	 *
	 * @return EntryTranInput 取引登録時パラメータ
	 */
	public function &getEntryTranInput() {
		return $this->entryTranInput;
	}

	/**
	 * クレジットカード決済実行入力パラメータ取得
	 * @return ExecTranMagstripeInput 決済実行時パラメータ
	 */
	public function &getExecTranMagstripeInput() {
		return $this->execTranMagstripeInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
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
	public function getOrderID() {
		return $this->entryTranInput->getOrderID();

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
	 * 本人認証サービス
利用フラグ取得
	 * @return string 本人認証サービス
利用フラグ
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
	public function getAccessID() {
		return $this->execTranMagstripeInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranMagstripeInput->getAccessPass();
	}
	/**
	 * 支払方法取得
	 * @return string 支払方法
	 */
	public function getMethod() {
		return $this->execTranMagstripeInput->getMethod();
	}
	/**
	 * 支払回数取得
	 * @return string 支払回数
	 */
	public function getPayTimes() {
		return $this->execTranMagstripeInput->getPayTimes();
	}
	/**
	 * 磁気ストライプ区分取得
	 * @return string 磁気ストライプ区分
	 */
	public function getMagstripeType() {
		return $this->execTranMagstripeInput->getMagstripeType();
	}
	/**
	 * 磁気ストライプ取得
	 * @return string 磁気ストライプ
	 */
	public function getMagstripeData() {
		return $this->execTranMagstripeInput->getMagstripeData();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranMagstripeInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranMagstripeInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranMagstripeInput->getClientField3();
	}
	/**
	 * 加盟店自由項目返却フラグ取得
	 * @return string 加盟店自由項目返却フラグ
	 */
	public function getClientFieldFlag() {
		return $this->execTranMagstripeInput->getClientFieldFlag();
	}

	/**
	 * クレジットカード決済取引登録入力パラメータ設定
	 *
	 * @param EntryTranInput entryTranInput  取引登録入力パラメータ
	 */
	public function setEntryTranInput(&$entryTranInput) {
		$this->entryTranInput = $entryTranInput;
	}

	/**
	 * クレジットカード決済実行入力パラメータ設定
	 *
	 * @param ExecTranMagstripeInput  execTranMagstripeInput   決済実行入力パラメータ
	 */
	public function setExecTranMagstripeInput(&$execTranMagstripeInput) {
		$this->execTranMagstripeInput = $execTranMagstripeInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranInput->setShopId($shopID);
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
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranInput->setOrderId($orderID);
		$this->execTranMagstripeInput->setOrderID($orderID);

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
	 * 本人認証サービス
利用フラグ設定
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
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranMagstripeInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranMagstripeInput->setAccessPass($accessPass);
	}
	/**
	 * 支払方法設定
	 *
	 * @param string $method
	 */
	public function setMethod($method) {
		$this->execTranMagstripeInput->setMethod($method);
	}
	/**
	 * 支払回数設定
	 *
	 * @param string $payTimes
	 */
	public function setPayTimes($payTimes) {
		$this->execTranMagstripeInput->setPayTimes($payTimes);
	}
	/**
	 * 磁気ストライプ区分設定
	 *
	 * @param string $magstripeType
	 */
	public function setMagstripeType($magstripeType) {
		$this->execTranMagstripeInput->setMagstripeType($magstripeType);
	}
	/**
	 * 磁気ストライプ設定
	 *
	 * @param string $magstripeData
	 */
	public function setMagstripeData($magstripeData) {
		$this->execTranMagstripeInput->setMagstripeData($magstripeData);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranMagstripeInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranMagstripeInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranMagstripeInput->setClientField3($clientField3);
	}
	/**
	 * 加盟店自由項目返却フラグ設定
	 *
	 * @param string $clientFieldFlag
	 */
	public function setClientFieldFlag($clientFieldFlag) {
		$this->execTranMagstripeInput->setClientFieldFlag($clientFieldFlag);
	}

}
?>
