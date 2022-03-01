<?php
require_once 'com/gmo_pg/client/output/EntryTranWebmoneyOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranWebmoneyQuickOutput.php';
/**
 * <b>Webmoney登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranWebmoneyQuickOutput {

	/**
	 * @var EntryTranWebmoneyOutput Webmoney登録出力パラメータ
	 */
	private $entryTranWebmoneyOutput;/*@var $entryTranWebmoneyOutput EntryTranWebmoneyOutput */

	/**
	 * @var ExecTranWebmoneyQuickOutput Webmoney実行出力パラメータ
	 */
	private $execTranWebmoneyOutput;/*@var $execTranWebmoneyOutput ExecTranWebmoneyQuickOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranWebmoneyOutput = new EntryTranWebmoneyOutput($params);
		$this->execTranWebmoneyOutput = new ExecTranWebmoneyQuickOutput($params);
	}

	/**
	 * Webmoney登録出力パラメータ取得
	 * @return EntryTranWebmoneyOutput Webmoney登録出力パラメータ
	 */
	public function &getEntryTranWebmoneyOutput() {
		return $this->entryTranWebmoneyOutput;
	}

	/**
	 * Webmoney実行出力パラメータ取得
	 * @return ExecTranWebmoneyQuickOutput Webmoney実行出力パラメータ
	 */
	public function &getExecTranWebmoneyQuickOutput() {
		return $this->execTranWebmoneyOutput;
	}

	/**
	 * Webmoney登録出力パラメータ設定
	 *
	 * @param EntryTranWebmoneyOutput  $entryTranWebmoneyOutput Webmoney登録出力パラメータ
	 */
	public function setEntryTranWebmoneyOutput(&$entryTranWebmoneyOutput) {
		$this->entryTranWebmoneyOutput = $entryTranWebmoneyOutput;
	}

	/**
	 * Webmoney決済実行出力パラメータ設定
	 *
	 * @param ExecTranWebmoneyQuickOutput $execTranWebmoneyOutput Webmoney実行出力パラメータ
	 */
	public function setExecTranWebmoneyQuickOutput(&$execTranWebmoneyOutput) {
		$this->execTranWebmoneyOutput = $execTranWebmoneyOutput;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->entryTranWebmoneyOutput->getOrderId();

	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessId() {
		return $this->entryTranWebmoneyOutput->getAccessId();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranWebmoneyOutput->getAccessPass();

	}
	/**
	 * ショップID取得
	 * @return string ショップID
	 */
// 	public function getShopID() {
// 		return $this->execTranWebmoneyOutput->getShopID();

// 	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
// 	public function getOrderID() {
// 		return $this->execTranWebmoneyOutput->getOrderID();

// 	}
	/**
	 * クイックID取得
	 * @return string クイックID
	 */
	public function getQuickID() {
		return $this->execTranWebmoneyOutput->getQuickID();

	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranWebmoneyOutput->getStatus();

	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->execTranWebmoneyOutput->getTranDate();

	}
	/**
	 * キャンセル区分取得
	 * @return string キャンセル区分
	 */
	public function getPayCancel() {
		return $this->execTranWebmoneyOutput->getPayCancel();

	}
	/**
	 * 管理番号取得
	 * @return string 管理番号
	 */
	public function getManagementNo() {
		return $this->execTranWebmoneyOutput->getManagementNo();

	}
	/**
	 * 決済コード取得
	 * @return string 決済コード
	 */
	public function getSettleCode() {
		return $this->execTranWebmoneyOutput->getSettleCode();

	}
	/**
	 * 抽選結果表示ＵＲＬ取得
	 * @return string 抽選結果表示ＵＲＬ
	 */
	public function getCampaignUrl() {
		return $this->execTranWebmoneyOutput->getCampaignUrl();

	}
	/**
	 * MD5ハッシュ取得
	 * @return string MD5ハッシュ
	 */
	public function getCheckString() {
		return $this->execTranWebmoneyOutput->getCheckString();

	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->execTranWebmoneyOutput->getClientField1();

	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->execTranWebmoneyOutput->getClientField2();

	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->execTranWebmoneyOutput->getClientField3();
	}

	/**
	 * 次処理種別取得
	 * @return string 次処理種別
	 */
	public function getNextStep() {
		return $this->execTranWebmoneyOutput->getNextStep();
	}

	/**
	 * 支払期限日時取得
	 * @return string 支払期限日時
	 */
	public function getPaymentTerm() {
		return $this->execTranWebmoneyOutput->getPaymentTerm();
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId
	 */
	public function setOrderId($orderId) {
		$this->entryTranWebmoneyOutput->setOrderId($orderId);

	}
	/**
	 * 取引ID設定
	 *
	 * @param string $accessId
	 */
	public function setAccessId($accessId) {
		$this->entryTranWebmoneyOutput->setAccessId($accessId);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranWebmoneyOutput->setAccessPass($accessPass);

	}
	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
// 	public function setShopID($shopID) {
// 		$this->execTranWebmoneyOutput->setShopID($shopID);

// 	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
// 	public function setOrderID($orderID) {
// 		$this->execTranWebmoneyOutput->setOrderID($orderID);

// 	}
	/**
	 * クイックID設定
	 *
	 * @param string $quickID
	 */
	public function setQuickID($quickID) {
		$this->execTranWebmoneyOutput->setQuickID($quickID);

	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranWebmoneyOutput->setStatus($status);

	}
	/**
	 * 処理日時設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranWebmoneyOutput->setTranDate($tranDate);

	}
	/**
	 * キャンセル区分設定
	 *
	 * @param string $payCancel
	 */
	public function setPayCancel($payCancel) {
		$this->execTranWebmoneyOutput->setPayCancel($payCancel);

	}
	/**
	 * 管理番号設定
	 *
	 * @param string $managementNo
	 */
	public function setManagementNo($managementNo) {
		$this->execTranWebmoneyOutput->setManagementNo($managementNo);

	}
	/**
	 * 決済コード設定
	 *
	 * @param string $settleCode
	 */
	public function setSettleCode($settleCode) {
		$this->execTranWebmoneyOutput->setSettleCode($settleCode);

	}
	/**
	 * 抽選結果表示ＵＲＬ設定
	 *
	 * @param string $campaignUrl
	 */
	public function setCampaignUrl($campaignUrl) {
		$this->execTranWebmoneyOutput->setCampaignUrl($campaignUrl);

	}
	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->execTranWebmoneyOutput->setCheckString($checkString);

	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->execTranWebmoneyOutput->setClientField1($clientField1);

	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->execTranWebmoneyOutput->setClientField2($clientField2);

	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->execTranWebmoneyOutput->setClientField3($clientField3);
	}
	/**
	 * 次処理種別設定
	 *
	 * @param string $nextStep
	 */
	public function setNextStep($nextStep) {
		$this->execTranWebmoneyOutput->setNextStep($nextStep);
	}
	/**
	 * 支払期限日時設定
	 *
	 * @param string $paymentTerm
	 */
	public function setPaymentTerm($paymentTerm) {
		$this->execTranWebmoneyOutput->setPaymentTerm($paymentTerm);
	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranWebmoneyOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranWebmoneyOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranWebmoneyOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranWebmoneyOutput->getErrList();
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
