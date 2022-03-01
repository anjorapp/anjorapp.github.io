<?php
require_once 'com/gmo_pg/client/output/EntryTranGANBOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranGANBOutput.php';
/**
 * <b>GANB登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranGANBOutput {

	/**
	 * @var EntryTranGANBOutput GANB登録出力パラメータ
	 */
	private $entryTranGANBOutput;/*@var $entryTranGANBOutput EntryTranGANBOutput */

	/**
	 * @var ExecTranGANBOutput GANB実行出力パラメータ
	 */
	private $execTranGANBOutput;/*@var $execTranGANBOutput ExecTranGANBOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranGANBOutput = new EntryTranGANBOutput($params);
		$this->execTranGANBOutput = new ExecTranGANBOutput($params);
	}

	/**
	 * GANB登録出力パラメータ取得
	 * @return EntryTranGANBOutput GANB登録出力パラメータ
	 */
	public function &getEntryTranGANBOutput() {
		return $this->entryTranGANBOutput;
	}

	/**
	 * GANB実行出力パラメータ取得
	 * @return ExecTranGANBOutput GANB実行出力パラメータ
	 */
	public function &getExecTranGANBOutput() {
		return $this->execTranGANBOutput;
	}

	/**
	 * GANB登録出力パラメータ設定
	 *
	 * @param EntryTranGANBOutput  $entryTranGANBOutput GANB登録出力パラメータ
	 */
	public function setEntryTranGANBOutput(&$entryTranGANBOutput) {
		$this->entryTranGANBOutput = $entryTranGANBOutput;
	}

	/**
	 * GANB決済実行出力パラメータ設定
	 *
	 * @param ExecTranGANBOutput $execTranGANBOutput GANB実行出力パラメータ
	 */
	public function setExecTranGANBOutput(&$execTranGANBOutput) {
		$this->execTranGANBOutput = $execTranGANBOutput;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranGANBOutput->getOrderID();

	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranGANBOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranGANBOutput->getAccessPass();

	}
	/**
	 * 銀行コード取得
	 * @return string 銀行コード
	 */
	public function getBankCode() {
		return $this->execTranGANBOutput->getBankCode();

	}
	/**
	 * 銀行名取得
	 * @return string 銀行名
	 */
	public function getBankName() {
		return $this->execTranGANBOutput->getBankName();

	}
	/**
	 * 支店コード取得
	 * @return string 支店コード
	 */
	public function getBranchCode() {
		return $this->execTranGANBOutput->getBranchCode();

	}
	/**
	 * 支店名取得
	 * @return string 支店名
	 */
	public function getBranchName() {
		return $this->execTranGANBOutput->getBranchName();

	}
	/**
	 * 預金種別取得
	 * @return string 預金種別
	 */
	public function getAccountType() {
		return $this->execTranGANBOutput->getAccountType();

	}
	/**
	 * 口座番号取得
	 * @return string 口座番号
	 */
	public function getAccountNumber() {
		return $this->execTranGANBOutput->getAccountNumber();

	}
	/**
	 * 口座名義取得
	 * @return string 口座名義
	 */
	public function getAccountHolderName() {
		return $this->execTranGANBOutput->getAccountHolderName();

	}
	/**
	 * 取引有効期限取得
	 * @return string 取引有効期限
	 */
	public function getAvailableDate() {
		return $this->execTranGANBOutput->getAvailableDate();

	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranGANBOutput->setOrderID($orderID);

	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranGANBOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranGANBOutput->setAccessPass($accessPass);

	}
	/**
	 * 銀行コード設定
	 *
	 * @param string $bankCode
	 */
	public function setBankCode($bankCode) {
		$this->execTranGANBOutput->setBankCode($bankCode);

	}
	/**
	 * 銀行名設定
	 *
	 * @param string $bankName
	 */
	public function setBankName($bankName) {
		$this->execTranGANBOutput->setBankName($bankName);

	}
	/**
	 * 支店コード設定
	 *
	 * @param string $branchCode
	 */
	public function setBranchCode($branchCode) {
		$this->execTranGANBOutput->setBranchCode($branchCode);

	}
	/**
	 * 支店名設定
	 *
	 * @param string $branchName
	 */
	public function setBranchName($branchName) {
		$this->execTranGANBOutput->setBranchName($branchName);

	}
	/**
	 * 預金種別設定
	 *
	 * @param string $accountType
	 */
	public function setAccountType($accountType) {
		$this->execTranGANBOutput->setAccountType($accountType);

	}
	/**
	 * 口座番号設定
	 *
	 * @param string $accountNumber
	 */
	public function setAccountNumber($accountNumber) {
		$this->execTranGANBOutput->setAccountNumber($accountNumber);

	}
	/**
	 * 口座名義設定
	 *
	 * @param string $accountHolderName
	 */
	public function setAccountHolderName($accountHolderName) {
		$this->execTranGANBOutput->setAccountHolderName($accountHolderName);

	}
	/**
	 * 取引有効期限設定
	 *
	 * @param string $availableDate
	 */
	public function setAvailableDate($availableDate) {
		$this->execTranGANBOutput->setAvailableDate($availableDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranGANBOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranGANBOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranGANBOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranGANBOutput->getErrList();
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
