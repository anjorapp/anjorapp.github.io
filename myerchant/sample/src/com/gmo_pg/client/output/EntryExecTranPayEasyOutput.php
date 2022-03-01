<?php
require_once 'com/gmo_pg/client/output/EntryTranPayEasyOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranPayEasyOutput.php';
/**
 * <b>PayEasy取引登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 03-07-2008 00:00:00
 */
class EntryExecTranPayEasyOutput {

	/**
	 * @var EntryTranPayEasyOutput PayEasy取引登録出力パラメータ
	 */
	private $entryTranPayEasyOutput;

	/**
	 * @var ExecTranPayEasyOutput PayEasy決済実行出力パラメータ
	 */
	private $execTranPayEasyOutput;/*@var $execTranPayEasyOutput ExecTranPayEasyOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranPayEasyOutput = new EntryTranPayEasyOutput($params);
		$this->execTranPayEasyOutput = new ExecTranPayEasyOutput($params);
	}

	/**
	 * PayEasy取引登録出力パラメータ取得
	 * @return EntryTranPayEasyOutput PayEasy取引登録出力パラメータ
	 */
	public function &getEntryTranPayEasyOutput() {
		return $this->entryTranPayEasyOutput;
	}

	/**
	 * PayEasy決済実行出力パラメータ取得
	 * @return ExecTranPayEasyOutput PayEasy決済実行出力パラメータ
	 */
	public function &getExecTranPayEasyOutput() {
		return $this->execTranPayEasyOutput;
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranPayEasyOutput->getAccessPass();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->entryTranPayEasyOutput->getAccessId();
	}
/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->execTranPayEasyOutput->getOrderId();
	}
	/**
	 * お客様番号を取得します。
	 *
	 * @return	$String	お客様番号
	 */
	public function getCustId() {
		return $this->execTranPayEasyOutput->getCustId();
	}
	/**
	 * 確認番号を取得します。
	 *
	 * @return	$String	確認番号
	 */
	public function getConfNo() {
		return $this->execTranPayEasyOutput->getConfNo();
	}

	/**
	 * 収納機関番号を取得します。
	 *
	 * @return	$String	収納機関番号
	 */
	public function getBkCode() {
		return $this->execTranPayEasyOutput->getBkCode();
	}

	/**
	 * 暗号化決済番号を取得します。
	 *
	 * @return	$String	暗号化決済番号
	 */
	public function getEncryptReceiptNo() {
		return $this->execTranPayEasyOutput->getEncryptReceiptNo();
	}

	/**
	 * 支払期限日時を取得します。
	 *
	 * @return	$timestamp	支払期限日時
	 */
	public function getPaymentTerm() {
		return $this->execTranPayEasyOutput->getPaymentTerm();
	}

	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->execTranPayEasyOutput->getTranDate();
	}

	/**
	 * MD5ハッシュ取得
	 * @return string チェック文字列
	 */
	public function getCheckString() {
		return $this->execTranPayEasyOutput->getCheckString();
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranPayEasyOutput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranPayEasyOutput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranPayEasyOutput->getClientField3();
	}

	/**
	 * 金融機関選択画面URL取得
	 * @return string 金融機関選択画面URL
	 */
	public function getPaymentURL() {
		return $this->execTranPayEasyOutput->getPaymentURL();
	}

	/**
	 * PayEasy取引登録出力パラメータ設定
	 *
	 * @param EntryTranPayEasyOutput  $entryTranPayEasyOutput PayEasy取引登録出力パラメータ
	 */
	public function setEntryTranPayEasyOutput(&$entryTranPayEasyOutput) {
		$this->entryTranPayEasyOutput = $entryTranPayEasyOutput;
	}

	/**
	 * PayEasy決済実行出力パラメータ設定
	 *
	 * @param ExecTranOutput $execTranOutput PayEasy決済実行出力パラメータ
	 */
	public function setExecTranPayEasyOutput(&$execTranPayEasyOutput) {
		$this->execTranPayEasyOutput = $execTranPayEasyOutput;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string accessId 取引ID
	 */
	public function setAccessId($accessId) {
		$this->entryTranPayEasyOutput->setAccessId($accessId);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranPayEasyOutput->setAccessPass($accessPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->entryTranPayEasyOutput->setOrderId($orderId);
	}
	/**
	 * お客様番号を格納します。
	 *
	 * @param	$String	お客様番号
	 */
	public function setCustId($String) {
		$this->execTranPayEasyOutput->setCustId($String);
	}

	/**
	 * 収納機関番号を格納します。
	 *
	 * @param	$String	収納機関番号
	 */
	public function setBkCode($String) {
		$this->execTranPayEasyOutput->setBkCode($String);
	}

	/**
	 * 確認番号を格納します。
	 *
	 * @param	$String	確認番号
	 */
	public function setConfNo($String) {
		$this->execTranPayEasyOutput->setConfNo($String);
	}

	/**
	 * 暗号化決済番号を格納します。
	 *
	 * @param	$String	暗号化決済番号
	 */
	public function setEncryptReceiptNo($String) {
		$this->execTranPayEasyOutput->setEncryptReceiptNo($String);
	}

	/**
	 * 支払期限日時を格納します。
	 *
	 * @param	$timestamp	支払期限日時
	 */
	public function setPaymentTerm($timestamp) {
		$this->execTranPayEasyOutput->setPaymentTerm($timestamp);
	}

	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate 決済日付
	 */
	public function setTranDate($tranDate) {
		$this->execTranPayEasyOutput->setTranDate($tranDate);
	}

	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString チェック文字列
	 */
	public function setCheckString($checkString) {
		$this->execTranPayEasyOutput->setCheckString($checkString);
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->execTranPayEasyOutput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->execTranPayEasyOutput->setClientField2($clientField2);
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->execTranPayEasyOutput->setClientField3($clientField3);
	}

	/**
	 * 金融機関選択画面URL
	 *
	 * @param string $paymentURL
	 */
	public function setPaymentURL($paymentURL) {
		$this->execTranPayEasyOutput->setPaymentURL($paymentURL);
	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranPayEasyOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranPayEasyOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranPayEasyOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranPayEasyOutput->getErrList();
		return 0 < count($execErrList);
	}

	/**
	 * エラー発生判定
	 * @return boolean エラー発生有無(true=エラー発生)
	 */
	public function isErrorOccurred() {
		return $this->isEntryErrorOccurred() || $this->isExecErrorOccurred();
	}



}
?>