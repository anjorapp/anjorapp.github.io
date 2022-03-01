<?php
require_once 'com/gmo_pg/client/input/EntryTranUnionpayInput.php';
require_once 'com/gmo_pg/client/input/ExecTranUnionpayInput.php';
/**
 * <b>ネット銀聯登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranUnionpayInput {

	/**
	 * @var EntryTranUnionpayInput ネット銀聯登録入力パラメータ
	 */
	private $entryTranUnionpayInput;/* @var $entryTranInput EntryTranUnionpayInput */

	/**
	 * @var ExecTranUnionpayInput ネット銀聯実行入力パラメータ
	 */
	private $execTranUnionpayInput;/* @var $execTranInput ExecTranUnionpayInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranUnionpayInput = new EntryTranUnionpayInput($params);
		$this->execTranUnionpayInput = new ExecTranUnionpayInput($params);
	}

	/**
	 * ネット銀聯取引登録入力パラメータ取得
	 *
	 * @return EntryTranUnionpayInput 取引登録時パラメータ
	 */
	public function &getEntryTranUnionpayInput() {
		return $this->entryTranUnionpayInput;
	}

	/**
	 * ネット銀聯実行入力パラメータ取得
	 * @return ExecTranUnionpayInput 決済実行時パラメータ
	 */
	public function &getExecTranUnionpayInput() {
		return $this->execTranUnionpayInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranUnionpayInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranUnionpayInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranUnionpayInput->getOrderID();

	}
	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranUnionpayInput->getJobCd();
	}
	/**
	 * 利用料金取得
	 * @return integer 利用料金
	 */
	public function getAmount() {
		return $this->entryTranUnionpayInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranUnionpayInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranUnionpayInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranUnionpayInput->getAccessPass();
	}
	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getCommodityName() {
		return $this->execTranUnionpayInput->getCommodityName();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranUnionpayInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranUnionpayInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranUnionpayInput->getClientField3();
	}
	/**
	 * 加盟店自由項目返却フラグ取得
	 * @return string 加盟店自由項目返却フラグ
	 */
	public function getClientFieldFlag() {
		return $this->execTranUnionpayInput->getClientFieldFlag();
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranUnionpayInput->getRetURL();
	}
	/**
	 * 処理NG時URL取得
	 * @return string 処理NG時URL
	 */
	public function getErrorRcvURL() {
		return $this->execTranUnionpayInput->getErrorRcvURL();
	}

	/**
	 * ネット銀聯取引登録入力パラメータ設定
	 *
	 * @param EntryTranUnionpayInput entryTranUnionpayInput  取引登録入力パラメータ
	 */
	public function setEntryTranUnionpayInput(&$entryTranUnionpayInput) {
		$this->entryTranUnionpayInput = $entryTranUnionpayInput;
	}

	/**
	 * ネット銀聯実行入力パラメータ設定
	 *
	 * @param ExecTranUnionpayInput  execTranUnionpayInput   決済実行入力パラメータ
	 */
	public function setExecTranUnionpayInput(&$execTranUnionpayInput) {
		$this->execTranUnionpayInput = $execTranUnionpayInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranUnionpayInput->setShopID($shopID);
		$this->execTranUnionpayInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranUnionpayInput->setShopPass($shopPass);
		$this->execTranUnionpayInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranUnionpayInput->setOrderID($orderID);
		$this->execTranUnionpayInput->setOrderID($orderID);

	}
	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranUnionpayInput->setJobCd($jobCd);
	}
	/**
	 * 利用料金設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranUnionpayInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranUnionpayInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranUnionpayInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranUnionpayInput->setAccessPass($accessPass);
	}
	/**
	 * 商品名設定
	 *
	 * @param string $commodityName
	 */
	public function setCommodityName($commodityName) {
		$this->execTranUnionpayInput->setCommodityName($commodityName);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranUnionpayInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranUnionpayInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranUnionpayInput->setClientField3($clientField3);
	}
	/**
	 * 加盟店自由項目返却フラグ設定
	 *
	 * @param string $clientFieldFlag
	 */
	public function setClientFieldFlag($clientFieldFlag) {
		$this->execTranUnionpayInput->setClientFieldFlag($clientFieldFlag);
	}
	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranUnionpayInput->setRetURL($retURL);
	}
	/**
	 * 処理NG時URL設定
	 *
	 * @param string $errorRcvURL
	 */
	public function setErrorRcvURL($errorRcvURL) {
		$this->execTranUnionpayInput->setErrorRcvURL($errorRcvURL);
	}

}
?>
