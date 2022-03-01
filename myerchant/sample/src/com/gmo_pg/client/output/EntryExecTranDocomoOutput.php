<?php
require_once 'com/gmo_pg/client/output/EntryTranDocomoOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranDocomoOutput.php';
/**
 * <b>ドコモケータイ払い登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/06/14
 */
class EntryExecTranDocomoOutput {

	/**
	 * @var EntryTranDocomoOutput ドコモケータイ払い登録出力パラメータ
	 */
	private $entryTranDocomoOutput;/*@var $entryTranDocomoOutput EntryTranDocomoOutput */

	/**
	 * @var ExecTranDocomoOutput ドコモケータイ払い実行出力パラメータ
	 */
	private $execTranDocomoOutput;/*@var $execTranDocomoOutput ExecTranDocomoOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranDocomoOutput = new EntryTranDocomoOutput($params);
		$this->execTranDocomoOutput = new ExecTranDocomoOutput($params);
	}

	/**
	 * ドコモケータイ払い登録出力パラメータ取得
	 * @return EntryTranDocomoOutput ドコモケータイ払い登録出力パラメータ
	 */
	public function &getEntryTranDocomoOutput() {
		return $this->entryTranDocomoOutput;
	}

	/**
	 * ドコモケータイ払い実行出力パラメータ取得
	 * @return ExecTranDocomoOutput ドコモケータイ払い実行出力パラメータ
	 */
	public function &getExecTranDocomoOutput() {
		return $this->execTranDocomoOutput;
	}

	/**
	 * ドコモケータイ払い登録出力パラメータ設定
	 *
	 * @param EntryTranDocomoOutput  $entryTranDocomoOutput ドコモケータイ払い登録出力パラメータ
	 */
	public function setEntryTranDocomoOutput(&$entryTranDocomoOutput) {
		$this->entryTranDocomoOutput = $entryTranDocomoOutput;
	}

	/**
	 * ドコモケータイ払い決済実行出力パラメータ設定
	 *
	 * @param ExecTranDocomoOutput $execTranDocomoOutput ドコモケータイ払い実行出力パラメータ
	 */
	public function setExecTranDocomoOutput(&$execTranDocomoOutput) {
		$this->execTranDocomoOutput = $execTranDocomoOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranDocomoOutput->getAccessID();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranDocomoOutput->getAccessPass();
	}

	/**
	 * 決済トークン取得
	 * @return string 決済トークン
	 */
	public function getToken() {
		return $this->execTranDocomoOutput->getToken();
	}

	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranDocomoOutput->getStartURL();
	}

	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranDocomoOutput->getStartLimitDate();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranDocomoOutput->getOrderID();
	}

	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranDocomoOutput->getStatus();
	}

	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->execTranDocomoOutput->getTranDate();
	}

	/**
	 * ドコモ決済番号取得
	 * @return string ドコモ決済番号
	 */
	public function getDocomoSettlementCode() {
		return $this->execTranDocomoOutput->getDocomoSettlementCode();
	}

	/**
	 * 改ざんチェック文字列取得
	 * @return string 改ざんチェック文字列
	 */
	public function getCheckString() {
		return $this->execTranDocomoOutput->getCheckString();
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranDocomoOutput->setAccessID($accessID);
		$this->execTranDocomoOutput->setAccessID($accessID);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranDocomoOutput->setAccessPass($accessPass);
	}

	/**
	 * 決済トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranDocomoOutput->setToken($token);
	}

	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranDocomoOutput->setStartURL($startURL);
	}

	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranDocomoOutput->setStartLimitDate($startLimitDate);
	}

	/**
	 * オーダーID設定
	 * @param string オーダーID
	 */
	public function setOrderID($orderID) {
		$this->execTranDocomoOutput->setOrderID($orderID);
	}

	/**
	 * 現状態設定
	 * @param string 現状態
	 */
	public function setStatus($status) {
		$this->execTranDocomoOutput->setStatus($status);
	}

	/**
	 * 処理日時設定
	 * @param string 処理日時
	 */
	public function setTranDate($tranDate) {
		$this->execTranDocomoOutput->setTranDate($tranDate);
	}

	/**
	 * ドコモ決済番号設定
	 * @param string ドコモ決済番号
	 */
	public function setDocomoSettlementCode($docomoSettlementCode) {
		$this->execTranDocomoOutput->setDocomoSettlementCode($docomoSettlementCode);
	}

	/**
	 * 改ざんチェック文字列設定
	 * @param string 改ざんチェック文字列
	 */
	public function setCheckString($checkString) {
		$this->execTranDocomoOutput->setCheckString($checkString);
	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranDocomoOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranDocomoOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranDocomoOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranDocomoOutput->getErrList();
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
