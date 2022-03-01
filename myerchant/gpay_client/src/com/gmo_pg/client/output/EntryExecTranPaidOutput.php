<?php
require_once 'com/gmo_pg/client/output/EntryTranPaidOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranPaidOutput.php';
/**
 * <b>Paid登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaidOutput {

	/**
	 * @var EntryTranPaidOutput Paid登録出力パラメータ
	 */
	private $entryTranPaidOutput;/*@var $entryTranPaidOutput EntryTranPaidOutput */

	/**
	 * @var ExecTranPaidOutput Paid実行出力パラメータ
	 */
	private $execTranPaidOutput;/*@var $execTranPaidOutput ExecTranPaidOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranPaidOutput = new EntryTranPaidOutput($params);
		$this->execTranPaidOutput = new ExecTranPaidOutput($params);
	}

	/**
	 * Paid登録出力パラメータ取得
	 * @return EntryTranPaidOutput Paid登録出力パラメータ
	 */
	public function &getEntryTranPaidOutput() {
		return $this->entryTranPaidOutput;
	}

	/**
	 * Paid実行出力パラメータ取得
	 * @return ExecTranPaidOutput Paid実行出力パラメータ
	 */
	public function &getExecTranPaidOutput() {
		return $this->execTranPaidOutput;
	}

	/**
	 * Paid登録出力パラメータ設定
	 *
	 * @param EntryTranPaidOutput  $entryTranPaidOutput Paid登録出力パラメータ
	 */
	public function setEntryTranPaidOutput(&$entryTranPaidOutput) {
		$this->entryTranPaidOutput = $entryTranPaidOutput;
	}

	/**
	 * Paid決済実行出力パラメータ設定
	 *
	 * @param ExecTranPaidOutput $execTranPaidOutput Paid実行出力パラメータ
	 */
	public function setExecTranPaidOutput(&$execTranPaidOutput) {
		$this->execTranPaidOutput = $execTranPaidOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranPaidOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranPaidOutput->getAccessPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranPaidOutput->getOrderID();

	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranPaidOutput->getStatus();

	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranPaidOutput->getClientField1();

	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranPaidOutput->getClientField2();

	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranPaidOutput->getClientField3();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranPaidOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranPaidOutput->setAccessPass($accessPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranPaidOutput->setOrderID($orderID);

	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranPaidOutput->setStatus($status);

	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranPaidOutput->setClientField1($clientField1);

	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranPaidOutput->setClientField2($clientField2);

	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranPaidOutput->setClientField3($clientField3);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranPaidOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranPaidOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranPaidOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranPaidOutput->getErrList();
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
