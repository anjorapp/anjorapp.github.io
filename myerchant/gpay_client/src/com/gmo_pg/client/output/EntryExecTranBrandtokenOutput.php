<?php
require_once 'com/gmo_pg/client/output/EntryTranBrandtokenOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranBrandtokenOutput.php';
/**
 * <b>ブランドトークン決済登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranBrandtokenOutput {

	/**
	 * @var EntryTranBrandtokenOutput ブランドトークン決済登録出力パラメータ
	 */
	private $entryTranBrandtokenOutput;/*@var $entryTranBrandtokenOutput EntryTranBrandtokenOutput */

	/**
	 * @var ExecTranBrandtokenOutput ブランドトークン決済実行出力パラメータ
	 */
	private $execTranBrandtokenOutput;/*@var $execTranBrandtokenOutput ExecTranBrandtokenOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranBrandtokenOutput = new EntryTranBrandtokenOutput($params);
		$this->execTranBrandtokenOutput = new ExecTranBrandtokenOutput($params);
	}

	/**
	 * ブランドトークン決済登録出力パラメータ取得
	 * @return EntryTranBrandtokenOutput ブランドトークン決済登録出力パラメータ
	 */
	public function &getEntryTranBrandtokenOutput() {
		return $this->entryTranBrandtokenOutput;
	}

	/**
	 * ブランドトークン決済実行出力パラメータ取得
	 * @return ExecTranBrandtokenOutput ブランドトークン決済実行出力パラメータ
	 */
	public function &getExecTranBrandtokenOutput() {
		return $this->execTranBrandtokenOutput;
	}

	/**
	 * ブランドトークン決済登録出力パラメータ設定
	 *
	 * @param EntryTranBrandtokenOutput  $entryTranBrandtokenOutput ブランドトークン決済登録出力パラメータ
	 */
	public function setEntryTranBrandtokenOutput(&$entryTranBrandtokenOutput) {
		$this->entryTranBrandtokenOutput = $entryTranBrandtokenOutput;
	}

	/**
	 * ブランドトークン決済決済実行出力パラメータ設定
	 *
	 * @param ExecTranBrandtokenOutput $execTranBrandtokenOutput ブランドトークン決済実行出力パラメータ
	 */
	public function setExecTranBrandtokenOutput(&$execTranBrandtokenOutput) {
		$this->execTranBrandtokenOutput = $execTranBrandtokenOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranBrandtokenOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranBrandtokenOutput->getAccessPass();

	}
	/**
	 * 取引状態取得
	 * @return string 取引状態
	 */
	public function getStatus() {
		return $this->execTranBrandtokenOutput->getStatus();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranBrandtokenOutput->getOrderID();

	}
	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward() {
		return $this->execTranBrandtokenOutput->getForward();

	}
	/**
	 * 承認番号取得
	 * @return string 承認番号
	 */
	public function getApprove() {
		return $this->execTranBrandtokenOutput->getApprove();

	}
	/**
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTranID() {
		return $this->execTranBrandtokenOutput->getTranID();

	}
	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->execTranBrandtokenOutput->getTranDate();

	}
	/**
	 * 加盟店向け自由項目1取得
	 * @return string 加盟店向け自由項目1
	 */
	public function getClientField1() {
		return $this->execTranBrandtokenOutput->getClientField1();

	}
	/**
	 * 加盟店向け自由項目2取得
	 * @return string 加盟店向け自由項目2
	 */
	public function getClientField2() {
		return $this->execTranBrandtokenOutput->getClientField2();

	}
	/**
	 * 加盟店向け自由項目3取得
	 * @return string 加盟店向け自由項目3
	 */
	public function getClientField3() {
		return $this->execTranBrandtokenOutput->getClientField3();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranBrandtokenOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranBrandtokenOutput->setAccessPass($accessPass);

	}
	/**
	 * 取引状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranBrandtokenOutput->setStatus($status);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranBrandtokenOutput->setOrderID($orderID);

	}
	/**
	 * 仕向先コード設定
	 *
	 * @param string $forward
	 */
	public function setForward($forward) {
		$this->execTranBrandtokenOutput->setForward($forward);

	}
	/**
	 * 承認番号設定
	 *
	 * @param string $approve
	 */
	public function setApprove($approve) {
		$this->execTranBrandtokenOutput->setApprove($approve);

	}
	/**
	 * トランザクションID設定
	 *
	 * @param string $tranID
	 */
	public function setTranID($tranID) {
		$this->execTranBrandtokenOutput->setTranID($tranID);

	}
	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranBrandtokenOutput->setTranDate($tranDate);

	}
	/**
	 * 加盟店向け自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranBrandtokenOutput->setClientField1($clientField1);

	}
	/**
	 * 加盟店向け自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranBrandtokenOutput->setClientField2($clientField2);

	}
	/**
	 * 加盟店向け自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranBrandtokenOutput->setClientField3($clientField3);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranBrandtokenOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranBrandtokenOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranBrandtokenOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranBrandtokenOutput->getErrList();
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
