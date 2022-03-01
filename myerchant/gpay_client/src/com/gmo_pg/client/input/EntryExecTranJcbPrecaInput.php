<?php
require_once 'com/gmo_pg/client/input/EntryTranJcbPrecaInput.php';
require_once 'com/gmo_pg/client/input/ExecTranJcbPrecaInput.php';
/**
 * <b>JCBプリカ登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranJcbPrecaInput {

	/**
	 * @var EntryTranJcbPrecaInput JCBプリカ登録入力パラメータ
	 */
	private $entryTranJcbPrecaInput;/* @var $entryTranInput EntryTranJcbPrecaInput */

	/**
	 * @var ExecTranJcbPrecaInput JCBプリカ実行入力パラメータ
	 */
	private $execTranJcbPrecaInput;/* @var $execTranInput ExecTranJcbPrecaInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranJcbPrecaInput = new EntryTranJcbPrecaInput($params);
		$this->execTranJcbPrecaInput = new ExecTranJcbPrecaInput($params);
	}

	/**
	 * JCBプリカ取引登録入力パラメータ取得
	 *
	 * @return EntryTranJcbPrecaInput 取引登録時パラメータ
	 */
	public function &getEntryTranJcbPrecaInput() {
		return $this->entryTranJcbPrecaInput;
	}

	/**
	 * JCBプリカ実行入力パラメータ取得
	 * @return ExecTranJcbPrecaInput 決済実行時パラメータ
	 */
	public function &getExecTranJcbPrecaInput() {
		return $this->execTranJcbPrecaInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranJcbPrecaInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranJcbPrecaInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranJcbPrecaInput->getOrderID();

	}
	/**
	 * 利用料金取得
	 * @return integer 利用料金
	 */
	public function getAmount() {
		return $this->entryTranJcbPrecaInput->getAmount();
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranJcbPrecaInput->getTax();
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranJcbPrecaInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranJcbPrecaInput->getAccessPass();
	}
	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->execTranJcbPrecaInput->getCardNo();
	}
	/**
	 * 認証番号取得
	 * @return string 認証番号
	 */
	public function getApprovalNo() {
		return $this->execTranJcbPrecaInput->getApprovalNo();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranJcbPrecaInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranJcbPrecaInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranJcbPrecaInput->getClientField3();
	}
	/**
	 * 持ち回り情報取得
	 * @return string 持ち回り情報
	 */
	public function getCarryInfo() {
		return $this->execTranJcbPrecaInput->getCarryInfo();
	}

	/**
	 * JCBプリカ取引登録入力パラメータ設定
	 *
	 * @param EntryTranJcbPrecaInput entryTranJcbPrecaInput  取引登録入力パラメータ
	 */
	public function setEntryTranJcbPrecaInput(&$entryTranJcbPrecaInput) {
		$this->entryTranJcbPrecaInput = $entryTranJcbPrecaInput;
	}

	/**
	 * JCBプリカ実行入力パラメータ設定
	 *
	 * @param ExecTranJcbPrecaInput  execTranJcbPrecaInput   決済実行入力パラメータ
	 */
	public function setExecTranJcbPrecaInput(&$execTranJcbPrecaInput) {
		$this->execTranJcbPrecaInput = $execTranJcbPrecaInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranJcbPrecaInput->setShopID($shopID);
		$this->execTranJcbPrecaInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranJcbPrecaInput->setShopPass($shopPass);
		$this->execTranJcbPrecaInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranJcbPrecaInput->setOrderID($orderID);
		$this->execTranJcbPrecaInput->setOrderID($orderID);

	}
	/**
	 * 利用料金設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranJcbPrecaInput->setAmount($amount);
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranJcbPrecaInput->setTax($tax);
	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranJcbPrecaInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranJcbPrecaInput->setAccessPass($accessPass);
	}
	/**
	 * カード番号設定
	 *
	 * @param string $cardNo
	 */
	public function setCardNo($cardNo) {
		$this->execTranJcbPrecaInput->setCardNo($cardNo);
	}
	/**
	 * 認証番号設定
	 *
	 * @param string $approvalNo
	 */
	public function setApprovalNo($approvalNo) {
		$this->execTranJcbPrecaInput->setApprovalNo($approvalNo);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranJcbPrecaInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranJcbPrecaInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranJcbPrecaInput->setClientField3($clientField3);
	}
	/**
	 * 持ち回り情報設定
	 *
	 * @param string $carryInfo
	 */
	public function setCarryInfo($carryInfo) {
		$this->execTranJcbPrecaInput->setCarryInfo($carryInfo);
	}

}
?>
