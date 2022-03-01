<?php
require_once 'com/gmo_pg/client/output/EntryTranSbOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranSbOutput.php';
/**
 * <b>ソフトバンクケータイ支払い登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/10/18
 */
class EntryExecTranSbOutput {

	/**
	 * @var EntryTranSbOutput ソフトバンクケータイ支払い登録出力パラメータ
	 */
	private $entryTranSbOutput;/*@var $entryTranSbOutput EntryTranSbOutput */

	/**
	 * @var ExecTranSbOutput ソフトバンクケータイ支払い実行出力パラメータ
	 */
	private $execTranSbOutput;/*@var $execTranSbOutput ExecTranSbOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranSbOutput = new EntryTranSbOutput($params);
		$this->execTranSbOutput = new ExecTranSbOutput($params);
	}

	/**
	 * ソフトバンクケータイ支払い登録出力パラメータ取得
	 * @return EntryTranSbOutput ソフトバンクケータイ支払い登録出力パラメータ
	 */
	public function &getEntryTranSbOutput() {
		return $this->entryTranSbOutput;
	}

	/**
	 * ソフトバンクケータイ支払い実行出力パラメータ取得
	 * @return ExecTranSbOutput ソフトバンクケータイ支払い実行出力パラメータ
	 */
	public function &getExecTranSbOutput() {
		return $this->execTranSbOutput;
	}

	/**
	 * ソフトバンクケータイ支払い登録出力パラメータ設定
	 *
	 * @param EntryTranSbOutput  $entryTranSbOutput ソフトバンクケータイ支払い登録出力パラメータ
	 */
	public function setEntryTranSbOutput(&$entryTranSbOutput) {
		$this->entryTranSbOutput = $entryTranSbOutput;
	}

	/**
	 * ソフトバンクケータイ支払い決済実行出力パラメータ設定
	 *
	 * @param ExecTranSbOutput $execTranSbOutput ソフトバンクケータイ支払い実行出力パラメータ
	 */
	public function setExecTranSbOutput(&$execTranSbOutput) {
		$this->execTranSbOutput = $execTranSbOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranSbOutput->getAccessID();
	}

	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranSbOutput->getAccessPass();
	}

	/**
	 * 決済トークン取得
	 * @return string 決済トークン
	 */
	public function getToken() {
		return $this->execTranSbOutput->getToken();
	}

	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranSbOutput->getStartURL();
	}

	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranSbOutput->getStartLimitDate();
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranSbOutput->getOrderID();
	}

	/**
	 * ステータス取得
	 * @return string ステータス
	 */
	public function getStatus() {
		return $this->execTranSbOutput->getStatus();
	}

	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->execTranSbOutput->getTranDate();
	}

	/**
	 * トラッキングID取得
	 * @return string トラッキングID
	 */
	public function getSbTrackingId() {
		return $this->execTranSbOutput->getSbTrackingId();
	}

	/**
	 * チェックストリング取得
	 * @return string チェックストリング
	 */
	public function getCheckString() {
		return $this->execTranSbOutput->getCheckString();
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranSbOutput->setAccessID($accessID);
		$this->execTranSbOutput->setAccessID($accessID);
	}

	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranSbOutput->setAccessPass($accessPass);
	}

	/**
	 * 決済トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranSbOutput->setToken($token);
	}

	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranSbOutput->setStartURL($startURL);
	}

	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranSbOutput->setStartLimitDate($startLimitDate);
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranSbOutput->setOrderID($orderID);
	}

	/**
	 * ステータス設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranSbOutput->setStatus($status);
	}

	/**
	 * 処理日時設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranSbOutput->setTranDate($tranDate);
	}

	/**
	 * トラッキングID時設定
	 *
	 * @param string $sbTrackingId
	 */
	public function setSbTrackingId($sbTrackingId) {
		$this->execTranSbOutput->setSbTrackingId($sbTrackingId);
	}

	/**
	 * チェックストリング設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->execTranSbOutput->setCheckString($checkString);
	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranSbOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranSbOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranSbOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranSbOutput->getErrList();
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
