<?php
require_once 'com/gmo_pg/client/output/EntryTranRakutenIdOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranRakutenIdOutput.php';
/**
 * <b>楽天ID登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranRakutenIdOutput {

	/**
	 * @var EntryTranRakutenIdOutput 楽天ID登録出力パラメータ
	 */
	private $entryTranRakutenIdOutput;/*@var $entryTranRakutenIdOutput EntryTranRakutenIdOutput */

	/**
	 * @var ExecTranRakutenIdOutput 楽天ID実行出力パラメータ
	 */
	private $execTranRakutenIdOutput;/*@var $execTranRakutenIdOutput ExecTranRakutenIdOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranRakutenIdOutput = new EntryTranRakutenIdOutput($params);
		$this->execTranRakutenIdOutput = new ExecTranRakutenIdOutput($params);
	}

	/**
	 * 楽天ID登録出力パラメータ取得
	 * @return EntryTranRakutenIdOutput 楽天ID登録出力パラメータ
	 */
	public function &getEntryTranRakutenIdOutput() {
		return $this->entryTranRakutenIdOutput;
	}

	/**
	 * 楽天ID実行出力パラメータ取得
	 * @return ExecTranRakutenIdOutput 楽天ID実行出力パラメータ
	 */
	public function &getExecTranRakutenIdOutput() {
		return $this->execTranRakutenIdOutput;
	}

	/**
	 * 楽天ID登録出力パラメータ設定
	 *
	 * @param EntryTranRakutenIdOutput  $entryTranRakutenIdOutput 楽天ID登録出力パラメータ
	 */
	public function setEntryTranRakutenIdOutput(&$entryTranRakutenIdOutput) {
		$this->entryTranRakutenIdOutput = $entryTranRakutenIdOutput;
	}

	/**
	 * 楽天ID決済実行出力パラメータ設定
	 *
	 * @param ExecTranRakutenIdOutput $execTranRakutenIdOutput 楽天ID実行出力パラメータ
	 */
	public function setExecTranRakutenIdOutput(&$execTranRakutenIdOutput) {
		$this->execTranRakutenIdOutput = $execTranRakutenIdOutput;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranRakutenIdOutput->getOrderID();

	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranRakutenIdOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranRakutenIdOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranRakutenIdOutput->getToken();

	}
	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranRakutenIdOutput->getStartURL();

	}
	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranRakutenIdOutput->getStartLimitDate();

	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranRakutenIdOutput->getStatus();

	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->execTranRakutenIdOutput->getTranDate();

	}
	/**
	 * 改ざんチェック文字列取得
	 * @return string 改ざんチェック文字列
	 */
	public function getCheckString() {
		return $this->execTranRakutenIdOutput->getCheckString();

	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranRakutenIdOutput->setOrderID($orderID);
		$this->execTranRakutenIdOutput->setOrderID($orderID);

	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranRakutenIdOutput->setAccessID($accessID);
		$this->execTranRakutenIdOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranRakutenIdOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranRakutenIdOutput->setToken($token);

	}
	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranRakutenIdOutput->setStartURL($startURL);

	}
	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranRakutenIdOutput->setStartLimitDate($startLimitDate);

	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranRakutenIdOutput->setStatus($status);

	}
	/**
	 * 処理日時設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranRakutenIdOutput->setTranDate($tranDate);

	}
	/**
	 * 改ざんチェック文字列設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->execTranRakutenIdOutput->setCheckString($checkString);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranRakutenIdOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranRakutenIdOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranRakutenIdOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranRakutenIdOutput->getErrList();
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
