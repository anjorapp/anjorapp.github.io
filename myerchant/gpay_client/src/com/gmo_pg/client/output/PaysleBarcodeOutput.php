<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>Paysleバーコード発行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class PaysleBarcodeOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;
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
