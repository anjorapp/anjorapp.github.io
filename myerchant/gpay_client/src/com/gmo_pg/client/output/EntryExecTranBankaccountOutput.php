<?php
require_once 'com/gmo_pg/client/output/EntryTranBankaccountOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranBankaccountOutput.php';
/**
 * <b>口振セレクト登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranBankaccountOutput {

	/**
	 * @var EntryTranBankaccountOutput 口振セレクト登録出力パラメータ
	 */
	private $entryTranBankaccountOutput;/*@var $entryTranBankaccountOutput EntryTranBankaccountOutput */

	/**
	 * @var ExecTranBankaccountOutput 口振セレクト実行出力パラメータ
	 */
	private $execTranBankaccountOutput;/*@var $execTranBankaccountOutput ExecTranBankaccountOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranBankaccountOutput = new EntryTranBankaccountOutput($params);
		$this->execTranBankaccountOutput = new ExecTranBankaccountOutput($params);
	}

	/**
	 * 口振セレクト登録出力パラメータ取得
	 * @return EntryTranBankaccountOutput 口振セレクト登録出力パラメータ
	 */
	public function &getEntryTranBankaccountOutput() {
		return $this->entryTranBankaccountOutput;
	}

	/**
	 * 口振セレクト実行出力パラメータ取得
	 * @return ExecTranBankaccountOutput 口振セレクト実行出力パラメータ
	 */
	public function &getExecTranBankaccountOutput() {
		return $this->execTranBankaccountOutput;
	}

	/**
	 * 口振セレクト登録出力パラメータ設定
	 *
	 * @param EntryTranBankaccountOutput  $entryTranBankaccountOutput 口振セレクト登録出力パラメータ
	 */
	public function setEntryTranBankaccountOutput(&$entryTranBankaccountOutput) {
		$this->entryTranBankaccountOutput = $entryTranBankaccountOutput;
	}

	/**
	 * 口振セレクト決済実行出力パラメータ設定
	 *
	 * @param ExecTranBankaccountOutput $execTranBankaccountOutput 口振セレクト実行出力パラメータ
	 */
	public function setExecTranBankaccountOutput(&$execTranBankaccountOutput) {
		$this->execTranBankaccountOutput = $execTranBankaccountOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranBankaccountOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranBankaccountOutput->getAccessPass();

	}
	/**
	 * 振替指定日取得
	 * @return string 振替指定日
	 */
	public function getTargetDate() {
		return $this->execTranBankaccountOutput->getTargetDate();

	}
	/**
	 * 振替受付終了日取得
	 * @return string 振替受付終了日
	 */
	public function getRequestAcceptEndDate() {
		return $this->execTranBankaccountOutput->getRequestAcceptEndDate();

	}
	/**
	 * 振替結果反映予定日取得
	 * @return string 振替結果反映予定日
	 */
	public function getTransferReturnDate() {
		return $this->execTranBankaccountOutput->getTransferReturnDate();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranBankaccountOutput->setAccessID($accessID);
		$this->execTranBankaccountOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranBankaccountOutput->setAccessPass($accessPass);

	}
	/**
	 * 振替指定日設定
	 *
	 * @param string $targetDate
	 */
	public function setTargetDate($targetDate) {
		$this->execTranBankaccountOutput->setTargetDate($targetDate);

	}
	/**
	 * 振替受付終了日設定
	 *
	 * @param string $requestAcceptEndDate
	 */
	public function setRequestAcceptEndDate($requestAcceptEndDate) {
		$this->execTranBankaccountOutput->setRequestAcceptEndDate($requestAcceptEndDate);

	}
	/**
	 * 振替結果反映予定日設定
	 *
	 * @param string $transferReturnDate
	 */
	public function setTransferReturnDate($transferReturnDate) {
		$this->execTranBankaccountOutput->setTransferReturnDate($transferReturnDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranBankaccountOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranBankaccountOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranBankaccountOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranBankaccountOutput->getErrList();
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
