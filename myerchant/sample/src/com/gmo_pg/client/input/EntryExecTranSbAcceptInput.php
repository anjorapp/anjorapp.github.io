<?php
require_once 'com/gmo_pg/client/input/EntryTranSbAcceptInput.php';
require_once 'com/gmo_pg/client/input/ExecTranSbAcceptInput.php';
/**
 * <b>ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranSbAcceptInput {

	/**
	 * @var EntryTranSbAcceptInput ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録入力パラメータ
	 */
	private $entryTranSbAcceptInput;/* @var $entryTranInput EntryTranSbAcceptInput */

	/**
	 * @var ExecTranSbAcceptInput ソフトバンクまとめて支払い(Ｂ)(利用承諾)実行入力パラメータ
	 */
	private $execTranSbAcceptInput;/* @var $execTranInput ExecTranSbAcceptInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranSbAcceptInput = new EntryTranSbAcceptInput($params);
		$this->execTranSbAcceptInput = new ExecTranSbAcceptInput($params);
	}

	/**
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)取引登録入力パラメータ取得
	 *
	 * @return EntryTranSbAcceptInput 取引登録時パラメータ
	 */
	public function &getEntryTranSbAcceptInput() {
		return $this->entryTranSbAcceptInput;
	}

	/**
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)実行入力パラメータ取得
	 * @return ExecTranSbAcceptInput 決済実行時パラメータ
	 */
	public function &getExecTranSbAcceptInput() {
		return $this->execTranSbAcceptInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->entryTranSbAcceptInput->getShopID();

	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranSbAcceptInput->getShopPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranSbAcceptInput->getOrderID();

	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->execTranSbAcceptInput->getAccessID();
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranSbAcceptInput->getAccessPass();
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranSbAcceptInput->getClientField1();
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranSbAcceptInput->getClientField2();
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranSbAcceptInput->getClientField3();
	}
	/**
	 * 決済結果戻しURL取得
	 * @return string 決済結果戻しURL
	 */
	public function getRetURL() {
		return $this->execTranSbAcceptInput->getRetURL();
	}
	/**
	 * 支払開始期限秒取得
	 * @return integer 支払開始期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranSbAcceptInput->getPaymentTermSec();
	}
	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getItemName() {
		return $this->execTranSbAcceptInput->getItemName();
	}

	/**
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)取引登録入力パラメータ設定
	 *
	 * @param EntryTranSbAcceptInput entryTranSbAcceptInput  取引登録入力パラメータ
	 */
	public function setEntryTranSbAcceptInput(&$entryTranSbAcceptInput) {
		$this->entryTranSbAcceptInput = $entryTranSbAcceptInput;
	}

	/**
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)実行入力パラメータ設定
	 *
	 * @param ExecTranSbAcceptInput  execTranSbAcceptInput   決済実行入力パラメータ
	 */
	public function setExecTranSbAcceptInput(&$execTranSbAcceptInput) {
		$this->execTranSbAcceptInput = $execTranSbAcceptInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->entryTranSbAcceptInput->setShopID($shopID);
		$this->execTranSbAcceptInput->setShopID($shopID);

	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranSbAcceptInput->setShopPass($shopPass);
		$this->execTranSbAcceptInput->setShopPass($shopPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranSbAcceptInput->setOrderID($orderID);
		$this->execTranSbAcceptInput->setOrderID($orderID);

	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->execTranSbAcceptInput->setAccessID($accessID);
	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->execTranSbAcceptInput->setAccessPass($accessPass);
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranSbAcceptInput->setClientField1($clientField1);
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranSbAcceptInput->setClientField2($clientField2);
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranSbAcceptInput->setClientField3($clientField3);
	}
	/**
	 * 決済結果戻しURL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->execTranSbAcceptInput->setRetURL($retURL);
	}
	/**
	 * 支払開始期限秒設定
	 *
	 * @param integer $paymentTermSec
	 */
	public function setPaymentTermSec($paymentTermSec) {
		$this->execTranSbAcceptInput->setPaymentTermSec($paymentTermSec);
	}
	/**
	 * 商品名設定
	 *
	 * @param string $itemName
	 */
	public function setItemName($itemName) {
		$this->execTranSbAcceptInput->setItemName($itemName);
	}

}
?>
