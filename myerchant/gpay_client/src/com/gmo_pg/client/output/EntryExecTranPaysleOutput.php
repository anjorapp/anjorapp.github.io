<?php
require_once 'com/gmo_pg/client/output/EntryTranPaysleOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranPaysleOutput.php';
/**
 * <b>Paysle登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaysleOutput {

	/**
	 * @var EntryTranPaysleOutput Paysle登録出力パラメータ
	 */
	private $entryTranPaysleOutput;/*@var $entryTranPaysleOutput EntryTranPaysleOutput */

	/**
	 * @var ExecTranPaysleOutput Paysle実行出力パラメータ
	 */
	private $execTranPaysleOutput;/*@var $execTranPaysleOutput ExecTranPaysleOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranPaysleOutput = new EntryTranPaysleOutput($params);
		$this->execTranPaysleOutput = new ExecTranPaysleOutput($params);
	}

	/**
	 * Paysle登録出力パラメータ取得
	 * @return EntryTranPaysleOutput Paysle登録出力パラメータ
	 */
	public function &getEntryTranPaysleOutput() {
		return $this->entryTranPaysleOutput;
	}

	/**
	 * Paysle実行出力パラメータ取得
	 * @return ExecTranPaysleOutput Paysle実行出力パラメータ
	 */
	public function &getExecTranPaysleOutput() {
		return $this->execTranPaysleOutput;
	}

	/**
	 * Paysle登録出力パラメータ設定
	 *
	 * @param EntryTranPaysleOutput  $entryTranPaysleOutput Paysle登録出力パラメータ
	 */
	public function setEntryTranPaysleOutput(&$entryTranPaysleOutput) {
		$this->entryTranPaysleOutput = $entryTranPaysleOutput;
	}

	/**
	 * Paysle決済実行出力パラメータ設定
	 *
	 * @param ExecTranPaysleOutput $execTranPaysleOutput Paysle実行出力パラメータ
	 */
	public function setExecTranPaysleOutput(&$execTranPaysleOutput) {
		$this->execTranPaysleOutput = $execTranPaysleOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranPaysleOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranPaysleOutput->getAccessPass();

	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->execTranPaysleOutput->getOrderID();

	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->execTranPaysleOutput->getStatus();

	}
	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->execTranPaysleOutput->getTranDate();

	}
	/**
	 * 表示開始日取得
	 * @return string 表示開始日
	 */
	public function getPaysleDisplayTerm() {
		return $this->execTranPaysleOutput->getPaysleDisplayTerm();

	}
	/**
	 * 支払期限日取得
	 * @return string 支払期限日
	 */
	public function getPayslePaymentTerm() {
		return $this->execTranPaysleOutput->getPayslePaymentTerm();

	}
	/**
	 * 購入者通知日取得
	 * @return string 購入者通知日
	 */
	public function getPaysleNotifyTerm() {
		return $this->execTranPaysleOutput->getPaysleNotifyTerm();

	}
	/**
	 * MD5ハッシュ取得
	 * @return string MD5ハッシュ
	 */
	public function getCheckString() {
		return $this->execTranPaysleOutput->getCheckString();

	}
	/**
	 * 注文管理ID取得
	 * @return string 注文管理ID
	 */
	public function getPaysleOrderSerial() {
		return $this->execTranPaysleOutput->getPaysleOrderSerial();

	}
	/**
	 * バーコードイメージ横幅取得
	 * @return string バーコードイメージ横幅
	 */
	public function getPaysleBarcodeWidth() {
		return $this->execTranPaysleOutput->getPaysleBarcodeWidth();

	}
	/**
	 * バーコードイメージ縦幅取得
	 * @return string バーコードイメージ縦幅
	 */
	public function getPaysleBarcodeHeight() {
		return $this->execTranPaysleOutput->getPaysleBarcodeHeight();

	}
	/**
	 * バーコードイメージ形式取得
	 * @return string バーコードイメージ形式
	 */
	public function getPaysleBarcodeFormat() {
		return $this->execTranPaysleOutput->getPaysleBarcodeFormat();

	}
	/**
	 * バーコードデータ取得
	 * @return string バーコードデータ
	 */
	public function getPaysleBarcode() {
		return $this->execTranPaysleOutput->getPaysleBarcode();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranPaysleOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranPaysleOutput->setAccessPass($accessPass);

	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->execTranPaysleOutput->setOrderID($orderID);

	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->execTranPaysleOutput->setStatus($status);

	}
	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->execTranPaysleOutput->setTranDate($tranDate);

	}
	/**
	 * 表示開始日設定
	 *
	 * @param string $paysleDisplayTerm
	 */
	public function setPaysleDisplayTerm($paysleDisplayTerm) {
		$this->execTranPaysleOutput->setPaysleDisplayTerm($paysleDisplayTerm);

	}
	/**
	 * 支払期限日設定
	 *
	 * @param string $payslePaymentTerm
	 */
	public function setPayslePaymentTerm($payslePaymentTerm) {
		$this->execTranPaysleOutput->setPayslePaymentTerm($payslePaymentTerm);

	}
	/**
	 * 購入者通知日設定
	 *
	 * @param string $paysleNotifyTerm
	 */
	public function setPaysleNotifyTerm($paysleNotifyTerm) {
		$this->execTranPaysleOutput->setPaysleNotifyTerm($paysleNotifyTerm);

	}
	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->execTranPaysleOutput->setCheckString($checkString);

	}
	/**
	 * 注文管理ID設定
	 *
	 * @param string $paysleOrderSerial
	 */
	public function setPaysleOrderSerial($paysleOrderSerial) {
		$this->execTranPaysleOutput->setPaysleOrderSerial($paysleOrderSerial);

	}
	/**
	 * バーコードイメージ横幅設定
	 *
	 * @param string $paysleBarcodeWidth
	 */
	public function setPaysleBarcodeWidth($paysleBarcodeWidth) {
		$this->execTranPaysleOutput->setPaysleBarcodeWidth($paysleBarcodeWidth);

	}
	/**
	 * バーコードイメージ縦幅設定
	 *
	 * @param string $paysleBarcodeHeight
	 */
	public function setPaysleBarcodeHeight($paysleBarcodeHeight) {
		$this->execTranPaysleOutput->setPaysleBarcodeHeight($paysleBarcodeHeight);

	}
	/**
	 * バーコードイメージ形式設定
	 *
	 * @param string $paysleBarcodeFormat
	 */
	public function setPaysleBarcodeFormat($paysleBarcodeFormat) {
		$this->execTranPaysleOutput->setPaysleBarcodeFormat($paysleBarcodeFormat);

	}
	/**
	 * バーコードデータ設定
	 *
	 * @param string $paysleBarcode
	 */
	public function setPaysleBarcode($paysleBarcode) {
		$this->execTranPaysleOutput->setPaysleBarcode($paysleBarcode);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranPaysleOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranPaysleOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranPaysleOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranPaysleOutput->getErrList();
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
