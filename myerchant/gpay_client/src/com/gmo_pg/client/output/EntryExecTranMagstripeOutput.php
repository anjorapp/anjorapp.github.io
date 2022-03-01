<?php
require_once 'com/gmo_pg/client/output/EntryTranOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranOutput.php';
/**
 * <b>クレジットカード決済登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranMagstripeOutput {

	/**
	 * @var EntryTranOutput クレジットカード決済登録出力パラメータ
	 */
	private $entryTranOutput;/*@var $entryTranOutput EntryTranOutput */

	/**
	 * @var ExecTranMagstripeOutput クレジットカード決済実行出力パラメータ
	 */
	private $execTranMagstripeOutput;/*@var $execTranMagstripeOutput ExecTranMagstripeOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranOutput = new EntryTranOutput($params);
		$this->execTranMagstripeOutput = new ExecTranMagstripeOutput($params);
	}

	/**
	 * クレジットカード決済登録出力パラメータ取得
	 * @return EntryTranOutput クレジットカード決済登録出力パラメータ
	 */
	public function &getEntryTranOutput() {
		return $this->entryTranOutput;
	}

	/**
	 * クレジットカード決済実行出力パラメータ取得
	 * @return ExecTranMagstripeOutput クレジットカード決済実行出力パラメータ
	 */
	public function &getExecTranMagstripeOutput() {
		return $this->execTranMagstripeOutput;
	}

	/**
	 * クレジットカード決済登録出力パラメータ設定
	 *
	 * @param EntryTranOutput  $entryTranOutput クレジットカード決済登録出力パラメータ
	 */
	public function setEntryTranOutput(&$entryTranOutput) {
		$this->entryTranOutput = $entryTranOutput;
	}

	/**
	 * クレジットカード決済決済実行出力パラメータ設定
	 *
	 * @param ExecTranMagstripeOutput $execTranMagstripeOutput クレジットカード決済実行出力パラメータ
	 */
	public function setExecTranMagstripeOutput(&$execTranMagstripeOutput) {
		$this->execTranMagstripeOutput = $execTranMagstripeOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranOutput->getAccessId();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranOutput->getAccessPass();

	}
	/**
	 * ACS呼出判定取得
	 * @return string ACS呼出判定
	 */
	public function getACS() {
		return $this->execTranMagstripeOutput->getACS();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranMagstripeOutput->getOrderID();

	}
	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward() {
		return $this->execTranMagstripeOutput->getForward();

	}
	/**
	 * 支払方法取得
	 * @return string 支払方法
	 */
	public function getMethod() {
		return $this->execTranMagstripeOutput->getMethod();

	}
	/**
	 * 支払回数取得
	 * @return integer 支払回数
	 */
	public function getPayTimes() {
		return $this->execTranMagstripeOutput->getPayTimes();

	}
	/**
	 * 承認番号取得
	 * @return string 承認番号
	 */
	public function getApprove() {
		return $this->execTranMagstripeOutput->getApprove();

	}
	/**
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTranID() {
		return $this->execTranMagstripeOutput->getTranID();

	}
	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->execTranMagstripeOutput->getTranDate();

	}
	/**
	 * MD5ハッシュ取得
	 * @return string MD5ハッシュ
	 */
	public function getCheckString() {
		return $this->execTranMagstripeOutput->getCheckString();

	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranMagstripeOutput->getClientField1();

	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranMagstripeOutput->getClientField2();

	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranMagstripeOutput->getClientField3();

	}
	/**
	 * 実行磁気ストライプ区分取得
	 * @return string 実行磁気ストライプ区分
	 */
	public function getMagstripeType() {
		return $this->execTranMagstripeOutput->getMagstripeType();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranOutput->setAccessId($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranOutput->setAccessPass($accessPass);

	}
	/**
	 * ACS呼出判定設定
	 *
	 * @param string $aCS
	 */
	public function setACS($aCS) {
		$this->execTranMagstripeOutput->setACS($aCS);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranMagstripeOutput->setOrderID($orderID);

	}
	/**
	 * 仕向先コード設定
	 *
	 * @param string $forward
	 */
	public function setForward($forward) {
		$this->execTranMagstripeOutput->setForward($forward);

	}
	/**
	 * 支払方法設定
	 *
	 * @param string $method
	 */
	public function setMethod($method) {
		$this->execTranMagstripeOutput->setMethod($method);

	}
	/**
	 * 支払回数設定
	 *
	 * @param integer $payTimes
	 */
	public function setPayTimes($payTimes) {
		$this->execTranMagstripeOutput->setPayTimes($payTimes);

	}
	/**
	 * 承認番号設定
	 *
	 * @param string $approve
	 */
	public function setApprove($approve) {
		$this->execTranMagstripeOutput->setApprove($approve);

	}
	/**
	 * トランザクションID設定
	 *
	 * @param string $tranID
	 */
	public function setTranID($tranID) {
		$this->execTranMagstripeOutput->setTranID($tranID);

	}
	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranMagstripeOutput->setTranDate($tranDate);

	}
	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->execTranMagstripeOutput->setCheckString($checkString);

	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranMagstripeOutput->setClientField1($clientField1);

	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranMagstripeOutput->setClientField2($clientField2);

	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranMagstripeOutput->setClientField3($clientField3);

	}
	/**
	 * 実行磁気ストライプ区分設定
	 *
	 * @param string $magstripeType
	 */
	public function setMagstripeType($magstripeType) {
		$this->execTranMagstripeOutput->setMagstripeType($magstripeType);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranMagstripeOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranMagstripeOutput->getErrList();
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
