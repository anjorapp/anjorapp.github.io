<?php
require_once 'com/gmo_pg/client/output/EntryTranJcbPrecaOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranJcbPrecaOutput.php';
/**
 * <b>JCBプリカ登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranJcbPrecaOutput {

	/**
	 * @var EntryTranJcbPrecaOutput JCBプリカ登録出力パラメータ
	 */
	private $entryTranJcbPrecaOutput;/*@var $entryTranJcbPrecaOutput EntryTranJcbPrecaOutput */

	/**
	 * @var ExecTranJcbPrecaOutput JCBプリカ実行出力パラメータ
	 */
	private $execTranJcbPrecaOutput;/*@var $execTranJcbPrecaOutput ExecTranJcbPrecaOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranJcbPrecaOutput = new EntryTranJcbPrecaOutput($params);
		$this->execTranJcbPrecaOutput = new ExecTranJcbPrecaOutput($params);
	}

	/**
	 * JCBプリカ登録出力パラメータ取得
	 * @return EntryTranJcbPrecaOutput JCBプリカ登録出力パラメータ
	 */
	public function &getEntryTranJcbPrecaOutput() {
		return $this->entryTranJcbPrecaOutput;
	}

	/**
	 * JCBプリカ実行出力パラメータ取得
	 * @return ExecTranJcbPrecaOutput JCBプリカ実行出力パラメータ
	 */
	public function &getExecTranJcbPrecaOutput() {
		return $this->execTranJcbPrecaOutput;
	}

	/**
	 * JCBプリカ登録出力パラメータ設定
	 *
	 * @param EntryTranJcbPrecaOutput  $entryTranJcbPrecaOutput JCBプリカ登録出力パラメータ
	 */
	public function setEntryTranJcbPrecaOutput(&$entryTranJcbPrecaOutput) {
		$this->entryTranJcbPrecaOutput = $entryTranJcbPrecaOutput;
	}

	/**
	 * JCBプリカ決済実行出力パラメータ設定
	 *
	 * @param ExecTranJcbPrecaOutput $execTranJcbPrecaOutput JCBプリカ実行出力パラメータ
	 */
	public function setExecTranJcbPrecaOutput(&$execTranJcbPrecaOutput) {
		$this->execTranJcbPrecaOutput = $execTranJcbPrecaOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranJcbPrecaOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranJcbPrecaOutput->getAccessPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranJcbPrecaOutput->getOrderID();

	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranJcbPrecaOutput->getStatus();

	}
	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->execTranJcbPrecaOutput->getAmount();

	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->execTranJcbPrecaOutput->getTax();

	}
	/**
	 * 利用前残高取得
	 * @return integer 利用前残高
	 */
	public function getBeforeBalance() {
		return $this->execTranJcbPrecaOutput->getBeforeBalance();

	}
	/**
	 * 利用後残高取得
	 * @return integer 利用後残高
	 */
	public function getAfterBalance() {
		return $this->execTranJcbPrecaOutput->getAfterBalance();

	}
	/**
	 * カードアクティベートステータス取得
	 * @return string カードアクティベートステータス
	 */
	public function getCardActivateStatus() {
		return $this->execTranJcbPrecaOutput->getCardActivateStatus();

	}
	/**
	 * カード有効期限ステータス取得
	 * @return string カード有効期限ステータス
	 */
	public function getCardTermStatus() {
		return $this->execTranJcbPrecaOutput->getCardTermStatus();

	}
	/**
	 * カード有効ステータス取得
	 * @return string カード有効ステータス
	 */
	public function getCardInvalidStatus() {
		return $this->execTranJcbPrecaOutput->getCardInvalidStatus();

	}
	/**
	 * カードWEB参照ステータス取得
	 * @return string カードWEB参照ステータス
	 */
	public function getCardWebInquiryStatus() {
		return $this->execTranJcbPrecaOutput->getCardWebInquiryStatus();

	}
	/**
	 * カード有効期限取得
	 * @return string カード有効期限
	 */
	public function getCardValidLimit() {
		return $this->execTranJcbPrecaOutput->getCardValidLimit();

	}
	/**
	 * 券種コード取得
	 * @return string 券種コード
	 */
	public function getCardTypeCode() {
		return $this->execTranJcbPrecaOutput->getCardTypeCode();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranJcbPrecaOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranJcbPrecaOutput->setAccessPass($accessPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranJcbPrecaOutput->setOrderID($orderID);

	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranJcbPrecaOutput->setStatus($status);

	}
	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->execTranJcbPrecaOutput->setAmount($amount);

	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->execTranJcbPrecaOutput->setTax($tax);

	}
	/**
	 * 利用前残高設定
	 *
	 * @param integer $beforeBalance
	 */
	public function setBeforeBalance($beforeBalance) {
		$this->execTranJcbPrecaOutput->setBeforeBalance($beforeBalance);

	}
	/**
	 * 利用後残高設定
	 *
	 * @param integer $afterBalance
	 */
	public function setAfterBalance($afterBalance) {
		$this->execTranJcbPrecaOutput->setAfterBalance($afterBalance);

	}
	/**
	 * カードアクティベートステータス設定
	 *
	 * @param string $cardActivateStatus
	 */
	public function setCardActivateStatus($cardActivateStatus) {
		$this->execTranJcbPrecaOutput->setCardActivateStatus($cardActivateStatus);

	}
	/**
	 * カード有効期限ステータス設定
	 *
	 * @param string $cardTermStatus
	 */
	public function setCardTermStatus($cardTermStatus) {
		$this->execTranJcbPrecaOutput->setCardTermStatus($cardTermStatus);

	}
	/**
	 * カード有効ステータス設定
	 *
	 * @param string $cardInvalidStatus
	 */
	public function setCardInvalidStatus($cardInvalidStatus) {
		$this->execTranJcbPrecaOutput->setCardInvalidStatus($cardInvalidStatus);

	}
	/**
	 * カードWEB参照ステータス設定
	 *
	 * @param string $cardWebInquiryStatus
	 */
	public function setCardWebInquiryStatus($cardWebInquiryStatus) {
		$this->execTranJcbPrecaOutput->setCardWebInquiryStatus($cardWebInquiryStatus);

	}
	/**
	 * カード有効期限設定
	 *
	 * @param string $cardValidLimit
	 */
	public function setCardValidLimit($cardValidLimit) {
		$this->execTranJcbPrecaOutput->setCardValidLimit($cardValidLimit);

	}
	/**
	 * 券種コード設定
	 *
	 * @param string $cardTypeCode
	 */
	public function setCardTypeCode($cardTypeCode) {
		$this->execTranJcbPrecaOutput->setCardTypeCode($cardTypeCode);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranJcbPrecaOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranJcbPrecaOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranJcbPrecaOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranJcbPrecaOutput->getErrList();
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
