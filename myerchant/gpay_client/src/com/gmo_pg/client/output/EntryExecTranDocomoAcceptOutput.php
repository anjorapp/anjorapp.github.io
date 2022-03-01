<?php
require_once 'com/gmo_pg/client/output/EntryTranDocomoAcceptOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranDocomoAcceptOutput.php';
/**
 * <b>ドコモ払い_随時決済登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDocomoAcceptOutput {

	/**
	 * @var EntryTranDocomoAcceptOutput ドコモ払い_随時決済登録出力パラメータ
	 */
	private $entryTranDocomoAcceptOutput;/*@var $entryTranDocomoAcceptOutput EntryTranDocomoAcceptOutput */

	/**
	 * @var ExecTranDocomoAcceptOutput ドコモ払い_随時決済実行出力パラメータ
	 */
	private $execTranDocomoAcceptOutput;/*@var $execTranDocomoAcceptOutput ExecTranDocomoAcceptOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranDocomoAcceptOutput = new EntryTranDocomoAcceptOutput($params);
		$this->execTranDocomoAcceptOutput = new ExecTranDocomoAcceptOutput($params);
	}

	/**
	 * ドコモ払い_随時決済登録出力パラメータ取得
	 * @return EntryTranDocomoAcceptOutput ドコモ払い_随時決済登録出力パラメータ
	 */
	public function &getEntryTranDocomoAcceptOutput() {
		return $this->entryTranDocomoAcceptOutput;
	}

	/**
	 * ドコモ払い_随時決済実行出力パラメータ取得
	 * @return ExecTranDocomoAcceptOutput ドコモ払い_随時決済実行出力パラメータ
	 */
	public function &getExecTranDocomoAcceptOutput() {
		return $this->execTranDocomoAcceptOutput;
	}

	/**
	 * ドコモ払い_随時決済登録出力パラメータ設定
	 *
	 * @param EntryTranDocomoAcceptOutput  $entryTranDocomoAcceptOutput ドコモ払い_随時決済登録出力パラメータ
	 */
	public function setEntryTranDocomoAcceptOutput(&$entryTranDocomoAcceptOutput) {
		$this->entryTranDocomoAcceptOutput = $entryTranDocomoAcceptOutput;
	}

	/**
	 * ドコモ払い_随時決済決済実行出力パラメータ設定
	 *
	 * @param ExecTranDocomoAcceptOutput $execTranDocomoAcceptOutput ドコモ払い_随時決済実行出力パラメータ
	 */
	public function setExecTranDocomoAcceptOutput(&$execTranDocomoAcceptOutput) {
		$this->execTranDocomoAcceptOutput = $execTranDocomoAcceptOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranDocomoAcceptOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranDocomoAcceptOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranDocomoAcceptOutput->getToken();

	}
	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranDocomoAcceptOutput->getStartURL();

	}
	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranDocomoAcceptOutput->getStartLimitDate();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranDocomoAcceptOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranDocomoAcceptOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranDocomoAcceptOutput->setToken($token);

	}
	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranDocomoAcceptOutput->setStartURL($startURL);

	}
	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranDocomoAcceptOutput->setStartLimitDate($startLimitDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranDocomoAcceptOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranDocomoAcceptOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranDocomoAcceptOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranDocomoAcceptOutput->getErrList();
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
