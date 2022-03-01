<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>Paysle決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranPaysleOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var string 決済日付
	 */
	private $tranDate;
	/**
	 * @var string 表示開始日
	 */
	private $paysleDisplayTerm;
	/**
	 * @var string 支払期限日
	 */
	private $payslePaymentTerm;
	/**
	 * @var string 購入者通知日
	 */
	private $paysleNotifyTerm;
	/**
	 * @var string MD5ハッシュ
	 */
	private $checkString;
	/**
	 * @var string 注文管理ID
	 */
	private $paysleOrderSerial;
	/**
	 * @var string バーコードイメージ横幅
	 */
	private $paysleBarcodeWidth;
	/**
	 * @var string バーコードイメージ縦幅
	 */
	private $paysleBarcodeHeight;
	/**
	 * @var string バーコードイメージ形式
	 */
	private $paysleBarcodeFormat;
	/**
	 * @var string バーコードデータ
	 */
	private $paysleBarcode;


	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params  出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
		if (is_null($params)) {
            return;
        }

        // マップの展開
		$this->setOrderID($params->get('OrderID'));
		$this->setStatus($params->get('Status'));
		$this->setTranDate($params->get('TranDate'));
		$this->setPaysleDisplayTerm($params->get('PaysleDisplayTerm'));
		$this->setPayslePaymentTerm($params->get('PayslePaymentTerm'));
		$this->setPaysleNotifyTerm($params->get('PaysleNotifyTerm'));
		$this->setCheckString($params->get('CheckString'));
		$this->setPaysleOrderSerial($params->get('PaysleOrderSerial'));
		$this->setPaysleBarcodeWidth($params->get('PaysleBarcodeWidth'));
		$this->setPaysleBarcodeHeight($params->get('PaysleBarcodeHeight'));
		$this->setPaysleBarcodeFormat($params->get('PaysleBarcodeFormat'));
		$this->setPaysleBarcode($params->get('PaysleBarcode'));

	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->tranDate;
	}
	/**
	 * 表示開始日取得
	 * @return string 表示開始日
	 */
	public function getPaysleDisplayTerm() {
		return $this->paysleDisplayTerm;
	}
	/**
	 * 支払期限日取得
	 * @return string 支払期限日
	 */
	public function getPayslePaymentTerm() {
		return $this->payslePaymentTerm;
	}
	/**
	 * 購入者通知日取得
	 * @return string 購入者通知日
	 */
	public function getPaysleNotifyTerm() {
		return $this->paysleNotifyTerm;
	}
	/**
	 * MD5ハッシュ取得
	 * @return string MD5ハッシュ
	 */
	public function getCheckString() {
		return $this->checkString;
	}
	/**
	 * 注文管理ID取得
	 * @return string 注文管理ID
	 */
	public function getPaysleOrderSerial() {
		return $this->paysleOrderSerial;
	}
	/**
	 * バーコードイメージ横幅取得
	 * @return string バーコードイメージ横幅
	 */
	public function getPaysleBarcodeWidth() {
		return $this->paysleBarcodeWidth;
	}
	/**
	 * バーコードイメージ縦幅取得
	 * @return string バーコードイメージ縦幅
	 */
	public function getPaysleBarcodeHeight() {
		return $this->paysleBarcodeHeight;
	}
	/**
	 * バーコードイメージ形式取得
	 * @return string バーコードイメージ形式
	 */
	public function getPaysleBarcodeFormat() {
		return $this->paysleBarcodeFormat;
	}
	/**
	 * バーコードデータ取得
	 * @return string バーコードデータ
	 */
	public function getPaysleBarcode() {
		return $this->paysleBarcode;
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}
	/**
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}
	/**
	 * 表示開始日設定
	 *
	 * @param string $paysleDisplayTerm
	 */
	public function setPaysleDisplayTerm($paysleDisplayTerm) {
		$this->paysleDisplayTerm = $paysleDisplayTerm;
	}
	/**
	 * 支払期限日設定
	 *
	 * @param string $payslePaymentTerm
	 */
	public function setPayslePaymentTerm($payslePaymentTerm) {
		$this->payslePaymentTerm = $payslePaymentTerm;
	}
	/**
	 * 購入者通知日設定
	 *
	 * @param string $paysleNotifyTerm
	 */
	public function setPaysleNotifyTerm($paysleNotifyTerm) {
		$this->paysleNotifyTerm = $paysleNotifyTerm;
	}
	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->checkString = $checkString;
	}
	/**
	 * 注文管理ID設定
	 *
	 * @param string $paysleOrderSerial
	 */
	public function setPaysleOrderSerial($paysleOrderSerial) {
		$this->paysleOrderSerial = $paysleOrderSerial;
	}
	/**
	 * バーコードイメージ横幅設定
	 *
	 * @param string $paysleBarcodeWidth
	 */
	public function setPaysleBarcodeWidth($paysleBarcodeWidth) {
		$this->paysleBarcodeWidth = $paysleBarcodeWidth;
	}
	/**
	 * バーコードイメージ縦幅設定
	 *
	 * @param string $paysleBarcodeHeight
	 */
	public function setPaysleBarcodeHeight($paysleBarcodeHeight) {
		$this->paysleBarcodeHeight = $paysleBarcodeHeight;
	}
	/**
	 * バーコードイメージ形式設定
	 *
	 * @param string $paysleBarcodeFormat
	 */
	public function setPaysleBarcodeFormat($paysleBarcodeFormat) {
		$this->paysleBarcodeFormat = $paysleBarcodeFormat;
	}
	/**
	 * バーコードデータ設定
	 *
	 * @param string $paysleBarcode
	 */
	public function setPaysleBarcode($paysleBarcode) {
		$this->paysleBarcode = $paysleBarcode;
	}

	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'TranDate=' . $this->encodeStr($this->getTranDate());
		$str .='&';
		$str .= 'PaysleDisplayTerm=' . $this->encodeStr($this->getPaysleDisplayTerm());
		$str .='&';
		$str .= 'PayslePaymentTerm=' . $this->encodeStr($this->getPayslePaymentTerm());
		$str .='&';
		$str .= 'PaysleNotifyTerm=' . $this->encodeStr($this->getPaysleNotifyTerm());
		$str .='&';
		$str .= 'CheckString=' . $this->encodeStr($this->getCheckString());
		$str .='&';
		$str .= 'PaysleOrderSerial=' . $this->encodeStr($this->getPaysleOrderSerial());
		$str .='&';
		$str .= 'PaysleBarcodeWidth=' . $this->encodeStr($this->getPaysleBarcodeWidth());
		$str .='&';
		$str .= 'PaysleBarcodeHeight=' . $this->encodeStr($this->getPaysleBarcodeHeight());
		$str .='&';
		$str .= 'PaysleBarcodeFormat=' . $this->encodeStr($this->getPaysleBarcodeFormat());
		$str .='&';
		$str .= 'PaysleBarcode=' . $this->encodeStr($this->getPaysleBarcode());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
