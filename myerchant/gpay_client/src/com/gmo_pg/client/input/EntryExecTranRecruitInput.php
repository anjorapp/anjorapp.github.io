<?php
require_once 'com/gmo_pg/client/input/EntryTranRecruitInput.php';
require_once 'com/gmo_pg/client/input/ExecTranRecruitInput.php';
/**
 * <b>リクルートかんたん支払い登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranRecruitInput {

	/**
	 * @var EntryTranRecruitInput リクルートかんたん支払い登録入力パラメータ
	 */
	private $entryTranRecruitInput;/* @var $entryTranInput EntryTranRecruitInput */

	/**
	 * @var ExecTranRecruitInput リクルートかんたん支払い実行入力パラメータ
	 */
	private $execTranRecruitInput;/* @var $execTranInput ExecTranRecruitInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranRecruitInput = new EntryTranRecruitInput($params);
		$this->execTranRecruitInput = new ExecTranRecruitInput($params);
	}

	/**
	 * リクルートかんたん支払い取引登録入力パラメータ取得
	 *
	 * @return EntryTranRecruitInput 取引登録時パラメータ
	 */
	public function &getEntryTranRecruitInput() {
		return $this->entryTranRecruitInput;
	}

	/**
	 * リクルートかんたん支払い実行入力パラメータ取得
	 * @return ExecTranRecruitInput 決済実行時パラメータ
	 */
	public function &getExecTranRecruitInput() {
		return $this->execTranRecruitInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranRecruitInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranRecruitInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranRecruitInput->getOrderID();

	}
	/**
	 * 処理区分取得
	 * @return string 処理区分
	 */
	public function getJobCd() {
		return $this->entryTranRecruitInput->getJobCd();
	}
	/**
	 * 利用料金取得
	 * @return integer 利用料金
	 */
	public function getAmount() {
		return $this->entryTranRecruitInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranRecruitInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranRecruitInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranRecruitInput->getAccessPass();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranRecruitInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranRecruitInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranRecruitInput->getClientField3();
	}
	/**
	 * 加盟店自由項目返却フラグ取得
	 * @return string 加盟店自由項目返却フラグ
	 */
	public function getClientFieldFlag() {
		return $this->execTranRecruitInput->getClientFieldFlag();
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranRecruitInput->getRetURL();
	}
	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getItemName() {
		return $this->execTranRecruitInput->getItemName();
	}
	/**
	 * 支払開始期限秒取得
	 * @return integer 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranRecruitInput->getPaymentTermSec();
	}

	/**
	 * リクルートかんたん支払い取引登録入力パラメータ設定
	 *
	 * @param EntryTranRecruitInput entryTranRecruitInput  取引登録入力パラメータ
	 */
	public function setEntryTranRecruitInput(&$entryTranRecruitInput) {
		$this->entryTranRecruitInput = $entryTranRecruitInput;
	}

	/**
	 * リクルートかんたん支払い実行入力パラメータ設定
	 *
	 * @param ExecTranRecruitInput  execTranRecruitInput   決済実行入力パラメータ
	 */
	public function setExecTranRecruitInput(&$execTranRecruitInput) {
		$this->execTranRecruitInput = $execTranRecruitInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranRecruitInput->setShopID($shopID);
		$this->execTranRecruitInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranRecruitInput->setShopPass($shopPass);
		$this->execTranRecruitInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranRecruitInput->setOrderID($orderID);
		$this->execTranRecruitInput->setOrderID($orderID);

	}
	/**
	 * 処理区分設定
	 *
	 * @param string $jobCd
	 */
	public function setJobCd($jobCd) {
		$this->entryTranRecruitInput->setJobCd($jobCd);
	}
	/**
	 * 利用料金設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranRecruitInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranRecruitInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranRecruitInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranRecruitInput->setAccessPass($accessPass);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranRecruitInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranRecruitInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranRecruitInput->setClientField3($clientField3);
	}
	/**
	 * 加盟店自由項目返却フラグ設定
	 *
	 * @param string $clientFieldFlag
	 */
	public function setClientFieldFlag($clientFieldFlag) {
		$this->execTranRecruitInput->setClientFieldFlag($clientFieldFlag);
	}
	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranRecruitInput->setRetURL($retURL);
	}
	/**
	 * 商品名設定
	 *
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->execTranRecruitInput->setItemName($itemName);
	}
	/**
	 * 支払開始期限秒設定
	 *
	 * @param integer $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranRecruitInput->setPaymentTermSec($paymentTermSec);
	}

}
?>
