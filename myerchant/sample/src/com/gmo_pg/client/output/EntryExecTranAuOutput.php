<?php
require_once 'com/gmo_pg/client/output/EntryTranAuOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranAuOutput.php';
/**
 * <b>auかんたん決済登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/02/15
 */
class EntryExecTranAuOutput {

	/**
	 * @var EntryTranAuOutput auかんたん決済登録出力パラメータ
	 */
	private $entryTranAuOutput;/*@var $entryTranAuOutput EntryTranAuOutput */

	/**
	 * @var ExecTranAuOutput auかんたん決済実行出力パラメータ
	 */
	private $execTranAuOutput;/*@var $execTranAuOutput ExecTranAuOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranAuOutput = new EntryTranAuOutput($params);
		$this->execTranAuOutput = new ExecTranAuOutput($params);
	}

	/**
	 * auかんたん決済登録出力パラメータ取得
	 * @return EntryTranAuOutput auかんたん決済登録出力パラメータ
	 */
	public function &getEntryTranAuOutput() {
		return $this->entryTranAuOutput;
	}

	/**
	 * auかんたん決済実行出力パラメータ取得
	 * @return ExecTranAuOutput auかんたん決済実行出力パラメータ
	 */
	public function &getExecTranAuOutput() {
		return $this->execTranAuOutput;
	}

	/**
	 * auかんたん決済登録出力パラメータ設定
	 *
	 * @param EntryTranAuOutput  $entryTranAuOutput auかんたん決済登録出力パラメータ
	 */
	public function setEntryTranAuOutput(&$entryTranAuOutput) {
		$this->entryTranAuOutput = $entryTranAuOutput;
	}

	/**
	 * auかんたん決済決済実行出力パラメータ設定
	 *
	 * @param ExecTranAuOutput $execTranAuOutput auかんたん決済実行出力パラメータ
	 */
	public function setExecTranAuOutput(&$execTranAuOutput) {
		$this->execTranAuOutput = $execTranAuOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranAuOutput->getAccessID();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranAuOutput->getAccessPass();
	}

	/**
	 * 決済トークン取得
	 * @return string 決済トークン
	 */
	public function getToken() {
		return $this->execTranAuOutput->getToken();
	}

	/**
	 * 呼び出しURL取得
	 * @return string 呼び出しURL
	 */
	public function getStartURL() {
		return $this->execTranAuOutput->getStartURL();
	}

	/**
	 * 該当トークンの有効期限 YYYYMMDDHHMM取得
	 * @return string 該当トークンの有効期限 YYYYMMDDHHMM
	 */
	public function getStartLimitDate() {
		return $this->execTranAuOutput->getStartLimitDate();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranAuOutput->getOrderID();
	}

	/**
	 * 現状態を取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranAuOutput->getStatus();
	}

	/**
	 * 処理日時を取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->execTranAuOutput->getTranDate();
	}

	/**
	 * 決済情報番号を取得
	 * @return string 決済情報番号
	 */
	public function getPayInfoNo() {
		return $this->execTranAuOutput->getPayInfoNo();
	}

	/**
	 * 支払方法を取得
	 * @return string 支払方法
	 */
	public function getPayMethod() {
		return $this->execTranAuOutput->getPayMethod();
	}

	/**
	 * 改ざんチェック文字列を取得
	 * @return string 改ざんチェック
	 */
	public function getCheckString() {
		return $this->execTranAuOutput->getCheckString();
	}


	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranAuOutput->setAccessID($accessID);
		$this->execTranAuOutput->setAccessID($accessID);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranAuOutput->setAccessPass($accessPass);
	}

	/**
	 * 決済トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranAuOutput->setToken($token);
	}

	/**
	 * 呼び出しURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranAuOutput->setStartURL($startURL);
	}

	/**
	 * 該当トークンの有効期限 YYYYMMDDHHMM設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranAuOutput->setStartLimitDate($startLimitDate);
	}

	/**
	 * オーダーID設定
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranAuOutput->setOrderID($orderID);
	}

	/**
	 * 現状態設定
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranAuOutput->setStatus($status);
	}

	/**
	 * 処理日時設定
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranAuOutput->setTranDate($tranDate);
	}

	/**
	 * 決済情報番号設定
	 * @param string $payInfoNo
	 */
	public function setPayInfoNo($payInfoNo) {
		$this->execTranAuOutput->setPayInfoNo($payInfoNo);
	}

	/**
	 * 支払方法設定
	 * @param string $payMethod
	 */
	public function setPayMethod($payMethod) {
		$this->execTranAuOutput->setPayMethod($payMethod);
	}

	/**
	 * 改ざんチェック文字列設定
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->execTranAuOutput->setCheckString($checkString);
	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranAuOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranAuOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranAuOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranAuOutput->getErrList();
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