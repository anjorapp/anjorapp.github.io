<?php
require_once 'com/gmo_pg/client/output/EntryTranCvsOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranCvsOutput.php';
/**
 * <b>コンビニ取引登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 03-07-2008 00:00:00
 */
class EntryExecTranCvsOutput {

	/**
	 * @var EntryTranCvsOutput コンビニ取引登録出力パラメータ
	 */
	private $entryTranCvsOutput;

	/**
	 * @var ExecTranCvsOutput コンビニ決済実行出力パラメータ
	 */
	private $execTranCvsOutput;/*@var $execTranCvsOutput ExecTranCvsOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranCvsOutput = new EntryTranCvsOutput($params);
		$this->execTranCvsOutput = new ExecTranCvsOutput($params);
	}

	/**
	 * コンビニ取引登録出力パラメータ取得
	 * @return EntryTranCvsOutput コンビニ取引登録出力パラメータ
	 */
	public function &getEntryTranCvsOutput() {
		return $this->entryTranCvsOutput;
	}

	/**
	 * コンビニ決済実行出力パラメータ取得
	 * @return ExecTranCvsOutput コンビニ決済実行出力パラメータ
	 */
	public function &getExecTranCvsOutput() {
		return $this->execTranCvsOutput;
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranCvsOutput->getAccessPass();
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->entryTranCvsOutput->getAccessId();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->execTranCvsOutput->getOrderId();
	}
	/**
	 * 支払先コンビニコードを取得します。
	 *
	 * @return	$String	支払先コンビニコード
	 */
	public function getConvenience() {
		return $this->execTranCvsOutput->getConvenience();
	}

	/**
	 * 確認番号を取得します。
	 *
	 * @return	$String	確認番号
	 */
	public function getConfNo() {
		return $this->execTranCvsOutput->getConfNo();
	}

	/**
	 * 受付番号を取得します。
	 *
	 * @return	$String	Cvs受付番号
	 */
	public function getReceiptNo() {
		return $this->execTranCvsOutput->getReceiptNo();
	}

	/**
	 * 支払期限日時を取得します。
	 *
	 * @return	$timestamp	支払期限日時
	 */
	public function getPaymentTerm() {
		return $this->execTranCvsOutput->getPaymentTerm();
	}

	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->execTranCvsOutput->getTranDate();
	}

	/**
	 * 払込票URL取得
	 * @return string 決済日付
	 */
	public function getReceiptUrl() {
		return $this->execTranCvsOutput->getReceiptUrl();
	}

	/**
	 * MD5ハッシュ取得
	 * @return string チェック文字列
	 */
	public function getCheckString() {
		return $this->execTranCvsOutput->getCheckString();
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranCvsOutput->getClientField1();
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranCvsOutput->getClientField2();
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranCvsOutput->getClientField3();
	}

	/**
	 * コンビニ取引登録出力パラメータ設定
	 *
	 * @param EntryTranCvsOutput  $entryTranCvsOutput コンビニ取引登録出力パラメータ
	 */
	public function setEntryTranCvsOutput(&$entryTranCvsOutput) {
		$this->entryTranCvsOutput = $entryTranCvsOutput;
	}

	/**
	 * コンビニ決済実行出力パラメータ設定
	 *
	 * @param ExecTranOutput $execTranOutput コンビニ決済実行出力パラメータ
	 */
	public function setExecTranCvsOutput(&$execTranCvsOutput) {
		$this->execTranCvsOutput = $execTranCvsOutput;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string accessId 取引ID
	 */
	public function setAccessId($accessId) {
		$this->entryTranCvsOutput->setAccessId($accessId);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string accessPass 取引パスワード
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranCvsOutput->setAccessPass($accessPass);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->entryTranCvsOutput->setOrderId($orderId);
	}

	/**
	 * 支払先コンビニコードを格納します。
	 *
	 * @param	$String	支払先コンビニコード
	 */
	public function setConvenience($String) {
		$this->execTranCvsOutput->setConvenience($String);
	}

	/**
	 * 確認番号を格納します。
	 *
	 * @param	$String	確認番号
	 */
	public function setConfNo($String) {
		$this->execTranCvsOutput->setConfNo($String);
	}

	/**
	 * 支払期限日時を格納します。
	 *
	 * @param	$timestamp	支払期限日時
	 */
	public function setPaymentTerm($timestamp) {
		$this->execTranCvsOutput->setPaymentTerm($timestamp);
	}

	/**
	 * 受付番号を格納します。
	 *
	 * @param	$String	受付番号
	 */
	public function setReceiptNo($String) {
		$this->execTranCvsOutput->setReceiptNo($String);
	}

	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate 決済日付
	 */
	public function setTranDate($tranDate) {
		$this->execTranCvsOutput->setTranDate($tranDate);
	}

	/**
	 * 払込票URL設定
	 *
	 * @param string $receiptUrl 払込票URL
	 */
	public function setReceiptUrl($receiptUrl) {
		$this->execTranCvsOutput->setReceiptUrl($receiptUrl);
	}

	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString チェック文字列
	 */
	public function setCheckString($checkString) {
		$this->execTranCvsOutput->setCheckString($checkString);
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->execTranCvsOutput->setClientField1($clientField1);
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->execTranCvsOutput->setClientField2($clientField2);
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->execTranCvsOutput->setClientField3($clientField3);
	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranCvsOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranCvsOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranCvsOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranCvsOutput->getErrList();
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