<?php
require_once 'com/gmo_pg/client/output/EntryTranVirtualaccountOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranVirtualaccountOutput.php';
/**
 * <b>銀行振込(バーチャル口座)登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranVirtualaccountOutput {

	/**
	 * @var EntryTranVirtualaccountOutput 銀行振込(バーチャル口座)登録出力パラメータ
	 */
	private $entryTranVirtualaccountOutput;/*@var $entryTranVirtualaccountOutput EntryTranVirtualaccountOutput */

	/**
	 * @var ExecTranVirtualaccountOutput 銀行振込(バーチャル口座)実行出力パラメータ
	 */
	private $execTranVirtualaccountOutput;/*@var $execTranVirtualaccountOutput ExecTranVirtualaccountOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranVirtualaccountOutput = new EntryTranVirtualaccountOutput($params);
		$this->execTranVirtualaccountOutput = new ExecTranVirtualaccountOutput($params);
	}

	/**
	 * 銀行振込(バーチャル口座)登録出力パラメータ取得
	 * @return EntryTranVirtualaccountOutput 銀行振込(バーチャル口座)登録出力パラメータ
	 */
	public function &getEntryTranVirtualaccountOutput() {
		return $this->entryTranVirtualaccountOutput;
	}

	/**
	 * 銀行振込(バーチャル口座)実行出力パラメータ取得
	 * @return ExecTranVirtualaccountOutput 銀行振込(バーチャル口座)実行出力パラメータ
	 */
	public function &getExecTranVirtualaccountOutput() {
		return $this->execTranVirtualaccountOutput;
	}

	/**
	 * 銀行振込(バーチャル口座)登録出力パラメータ設定
	 *
	 * @param EntryTranVirtualaccountOutput  $entryTranVirtualaccountOutput 銀行振込(バーチャル口座)登録出力パラメータ
	 */
	public function setEntryTranVirtualaccountOutput(&$entryTranVirtualaccountOutput) {
		$this->entryTranVirtualaccountOutput = $entryTranVirtualaccountOutput;
	}

	/**
	 * 銀行振込(バーチャル口座)決済実行出力パラメータ設定
	 *
	 * @param ExecTranVirtualaccountOutput $execTranVirtualaccountOutput 銀行振込(バーチャル口座)実行出力パラメータ
	 */
	public function setExecTranVirtualaccountOutput(&$execTranVirtualaccountOutput) {
		$this->execTranVirtualaccountOutput = $execTranVirtualaccountOutput;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->entryTranVirtualaccountOutput->getOrderID();

	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranVirtualaccountOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranVirtualaccountOutput->getAccessPass();

	}
	/**
	 * 銀行コード取得
	 * @return string 銀行コード
	 */
	public function getBankCode() {
		return $this->execTranVirtualaccountOutput->getBankCode();

	}
	/**
	 * 銀行名取得
	 * @return string 銀行名
	 */
	public function getBankName() {
		return $this->execTranVirtualaccountOutput->getBankName();

	}
	/**
	 * 支店コード取得
	 * @return string 支店コード
	 */
	public function getBranchCode() {
		return $this->execTranVirtualaccountOutput->getBranchCode();

	}
	/**
	 * 支店名取得
	 * @return string 支店名
	 */
	public function getBranchName() {
		return $this->execTranVirtualaccountOutput->getBranchName();

	}
	/**
	 * 科目取得
	 * @return string 科目
	 */
	public function getAccountType() {
		return $this->execTranVirtualaccountOutput->getAccountType();

	}
	/**
	 * 口座番号取得
	 * @return string 口座番号
	 */
	public function getAccountNumber() {
		return $this->execTranVirtualaccountOutput->getAccountNumber();

	}
	/**
	 * 取引口座有効期限取得
	 * @return string 取引口座有効期限
	 */
	public function getAvailableDate() {
		return $this->execTranVirtualaccountOutput->getAvailableDate();

	}
	/**
	 * 振込コード取得
	 * @return string 振込コード
	 */
	public function getTradeCode() {
		return $this->execTranVirtualaccountOutput->getTradeCode();

	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->entryTranVirtualaccountOutput->setOrderID($orderID);

	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranVirtualaccountOutput->setAccessID($accessID);
		$this->execTranVirtualaccountOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranVirtualaccountOutput->setAccessPass($accessPass);

	}
	/**
	 * 銀行コード設定
	 *
	 * @param string $bankCode
	 */
	public function setBankCode($bankCode) {
		$this->execTranVirtualaccountOutput->setBankCode($bankCode);

	}
	/**
	 * 銀行名設定
	 *
	 * @param string $bankName
	 */
	public function setBankName($bankName) {
		$this->execTranVirtualaccountOutput->setBankName($bankName);

	}
	/**
	 * 支店コード設定
	 *
	 * @param string $branchCode
	 */
	public function setBranchCode($branchCode) {
		$this->execTranVirtualaccountOutput->setBranchCode($branchCode);

	}
	/**
	 * 支店名設定
	 *
	 * @param string $branchName
	 */
	public function setBranchName($branchName) {
		$this->execTranVirtualaccountOutput->setBranchName($branchName);

	}
	/**
	 * 科目設定
	 *
	 * @param string $accountType
	 */
	public function setAccountType($accountType) {
		$this->execTranVirtualaccountOutput->setAccountType($accountType);

	}
	/**
	 * 口座番号設定
	 *
	 * @param string $accountNumber
	 */
	public function setAccountNumber($accountNumber) {
		$this->execTranVirtualaccountOutput->setAccountNumber($accountNumber);

	}
	/**
	 * 取引口座有効期限設定
	 *
	 * @param string $availableDate
	 */
	public function setAvailableDate($availableDate) {
		$this->execTranVirtualaccountOutput->setAvailableDate($availableDate);

	}
	/**
	 * 振込コード設定
	 *
	 * @param string $tradeCode
	 */
	public function setTradeCode($tradeCode) {
		$this->execTranVirtualaccountOutput->setTradeCode($tradeCode);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranVirtualaccountOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranVirtualaccountOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranVirtualaccountOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranVirtualaccountOutput->getErrList();
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
