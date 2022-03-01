<?php
require_once 'com/gmo_pg/client/input/EntryTranSuicaInput.php';
require_once 'com/gmo_pg/client/input/ExecTranSuicaInput.php';
/**
 * <b>モバイルSuica登録・決済一括実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 03-07-2008 00:00:00
 */
class EntryExecTranSuicaInput {

	/**
	 * @var EntryTranSuicaInput モバイルSuica取引登録入力パラメータ
	 */
	private $entryTranSuicaInput;/* @var $entryTranInput EntryTranSuicaInput */

	/**
	 * @var ExecTranSuicaInput モバイルSuica決済実行入力パラメータ
	 */
	private $execTranSuicaInput;/* @var $execTranInput ExecTranSuicaInput */

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranSuicaInput = new EntryTranSuicaInput($params);
		$this->execTranSuicaInput = new ExecTranSuicaInput($params);
	}

	/**
	 * モバイルSuica取引登録入力パラメータ取得
	 *
	 * @return EntryTranSuicaInput 取引登録時パラメータ
	 */
	public function &getEntryTranSuicaInput() {
		return $this->entryTranSuicaInput;
	}

	/**
	 * モバイルSuica決済実行入力パラメータ取得
	 * @return ExecTranSuicaInput 決済実行時パラメータ
	 */
	public function &getExecTranSuicaInput() {
		return $this->execTranSuicaInput;
	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
		return $this->entryTranSuicaInput->getShopId();
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->entryTranSuicaInput->getShopPass();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->entryTranSuicaInput->getOrderId();
	}

		/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->entryTranSuicaInput->getAmount();
	}

	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->entryTranSuicaInput->getTax();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->execTranSuicaInput->getAccessId();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->execTranSuicaInput->getAccessPass();
	}

		/**
	 * 商品・サービス名を取得します。
	 *
	 * @return	$String	商品・サービス名
	 */
	public function getItemName() {
		return $this->execTranSuicaInput->getItemName();
	}

	/**
	 * メールアドレスを取得します。
	 *
	 * @return	$String	メールアドレス
	 */
	public function getMailAddress() {
		return $this->execTranSuicaInput->getMailAddress();
	}

	/**
	 * 加盟店メールアドレスを取得します。
	 *
     * @deprecated 下位互換のためのメソッドです。getShopMailAddress()をご利用下さい。
	 * @return	$String	加盟店メールアドレス
	 */
	public function getShopMailAdress() {
		return $this->execTranSuicaInput->getShopMailAddress();
	}

	/**
	 * 加盟店メールアドレスを取得します。
	 *
	 * @return	$String	加盟店メールアドレス(正)
	 */
	public function getShopMailAddress() {
		return $this->execTranSuicaInput->getShopMailAddress();
	}

	/**
	 * 決済開始メール付加情報を取得します。
	 *
	 * @return	$String	決済開始メール付加情報
	 */
	public function getSuicaAddInfo1() {
		return $this->execTranSuicaInput->getSuicaAddInfo1();
	}

	/**
	 * 決済完了メール付加情報を取得します。
	 *
	 * @return	$String	決済完了メール付加情報
	 */
	public function getSuicaAddInfo2() {
		return $this->execTranSuicaInput->getSuicaAddInfo2();
	}

	/**
	 * 決済内容確認画面付加情報を取得します。
	 *
	 * @return	$String	決済内容確認画面付加情報
	 */
	public function getSuicaAddInfo3() {
		return $this->execTranSuicaInput->getSuicaAddInfo3();
	}


	/**
	 * 決済完了画面付加情報を取得します。
	 *
	 * @return	$String	決済完了画面付加情報
	 */
	public function getSuicaAddInfo4() {
		return $this->execTranSuicaInput->getSuicaAddInfo4();
	}


	/**
	 * 支払期限日数を取得します。
	 *
	 * @return	$Integer	支払期限日数
	 */
	public function getPaymentTermDay() {
		return $this->execTranSuicaInput->getPaymentTermDay();
	}


	/**
	 * 支払期限秒を取得します。
	 *
	 * @return	$Integer	支払期限秒
	 */
	public function getPaymentTermSec() {
		return $this->execTranSuicaInput->getPaymentTermSec();
	}



	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranSuicaInput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranSuicaInput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranSuicaInput->getClientField3();
	}

	/**
	 * モバイルSuica取引登録入力パラメータ設定
	 *
	 * @param EntryTranSuicaInput entryTranSuicaInput  モバイルSuica取引登録入力パラメータ
	 */
	public function setEntryTranSuicaInput(&$entryTranSuicaInput) {
		$this->entryTranSuicaInput = $entryTranSuicaInput;
	}

	/**
	 * モバイルSuica決済実行入力パラメータ設定
	 *
	 * @param ExecTranSuicaInput  execTranSuicaInput   モバイルSuica決済実行入力パラメータ
	 */
	public function setExecTranSuicaInput(&$execTranSuicaInput) {
		$this->execTranSuicaInput = $execTranSuicaInput;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopId
	 */
	public function setShopId($shopId) {
		$this->entryTranSuicaInput->setShopId($shopId);
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->entryTranSuicaInput->setShopPass($shopPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId
	 */
	public function setOrderId($orderId) {
		$this->entryTranSuicaInput->setOrderId($orderId);
		$this->execTranSuicaInput->setOrderId($orderId);
	}

	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->entryTranSuicaInput->setAmount($amount);
	}

	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->entryTranSuicaInput->setTax($tax);
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessId
	 */
	public function setAccessId($accessId) {
		$this->entryTranSuicaInput->setAccessId($accessId);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranSuicaInput->setAccessPass($accessPass);
	}

	/**
	 * 商品・サービス名を格納します。
	 *
	 * @param	$string	商品・サービス名
	 */
	public function setItemName($string) {
		$this->execTranSuicaInput->setItemName($string);
	}

	/**
	 * メールアドレスを格納します。
	 *
	 * @param	$String	メールアドレス
	 */
	public function setMailAddress($String) {
		$this->execTranSuicaInput->setMailAddress($String);
	}

	/**
	 * 加盟店メールアドレスを格納します。
	 *
     * @deprecated 下位互換のためのメソッドです。setShopMailAddress()をご利用下さい。
	 * @param	$String	加盟店メールアドレス
	 */
	public function setShopMailAdress($String) {
		$this->execTranSuicaInput->setShopMailAddress($String);
	}

	/**
	 * 加盟店メールアドレスを格納します。
	 *
	 * @param	$String	加盟店メールアドレス(正)
	 */
	public function setShopMailAddress($String) {
		$this->execTranSuicaInput->setShopMailAddress($String);
	}


	/**
	 * 決済開始メール付加情報を格納します。
	 *
	 * @param	$String	決済開始メール付加情報
	 */
	public function setSuicaAddInfo1($String) {
		$this->execTranSuicaInput->setSuicaAddInfo1($string);
	}

	/**
	 * 決済完了メール付加情報を格納します。
	 *
	 * @param	$String	決済完了メール付加情報
	 */
	public function setSuicaAddInfo2($String) {
		$this->execTranSuicaInput->setSuicaAddInfo2($string);
	}


	/**
	 * 決済内容確認画面付加情報を格納します。
	 *
	 * @param	$String	決済内容確認画面付加情報
	 */
	public function setSuicaAddInfo3($String) {
		$this->execTranSuicaInput->setSuicaAddInfo3($string);
	}


	/**
	 * 決済完了画面付加情報を格納します。
	 *
	 * @param	$String	決済完了画面付加情報
	 */
	public function setSuicaAddInfo4($String) {
		$this->execTranSuicaInput->setSuicaAddInfo4($string);
	}



	/**
	 * 支払期限日数を格納します。
	 *
	 * @param	$Integer	支払期限日数
	 */
	public function setPaymentTermDay($Integer) {
		$this->execTranSuicaInput->setPaymentTermDay($Integer);
	}


	/**
	 * 支払期限秒を格納します。
	 *
	 * @param	$Integer	支払期限秒
	 */
	public function setPaymentTermSec($Integer) {
		$this->execTranSuicaInput->setPaymentTermSec($Integer);
	}



	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranSuicaInput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranSuicaInput->setClientField2($clientField2);
	}


	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranSuicaInput->setClientField3($clientField3);
	}

}
?>