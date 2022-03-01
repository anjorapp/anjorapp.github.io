<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>PGプリカPGプリカ照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchPrecaOutput extends BaseOutput {

	/**
	 * @var string プリカ番号
	 */
	private $precaNo;
	/**
	 * @var integer 合計バリュー
	 */
	private $totalValue;
	/**
	 * @var string 最終チャージ日時
	 */
	private $lastChargeDate;
	/**
	 * @var string 最終利用日時
	 */
	private $lastUseDate;
	/**
	 * @var integer 履歴件数
	 */
	private $totalCnt;


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
		$this->setPrecaNo($params->get('PrecaNo'));
		$this->setTotalValue($params->get('TotalValue'));
		$this->setLastChargeDate($params->get('LastChargeDate'));
		$this->setLastUseDate($params->get('LastUseDate'));
		$this->setTotalCnt($params->get('TotalCnt'));

	}

	/**
	 * プリカ番号取得
	 * @return string プリカ番号
	 */
	public function getPrecaNo() {
		return $this->precaNo;
	}
	/**
	 * 合計バリュー取得
	 * @return integer 合計バリュー
	 */
	public function getTotalValue() {
		return $this->totalValue;
	}
	/**
	 * 最終チャージ日時取得
	 * @return string 最終チャージ日時
	 */
	public function getLastChargeDate() {
		return $this->lastChargeDate;
	}
	/**
	 * 最終利用日時取得
	 * @return string 最終利用日時
	 */
	public function getLastUseDate() {
		return $this->lastUseDate;
	}
	/**
	 * 履歴件数取得
	 * @return integer 履歴件数
	 */
	public function getTotalCnt() {
		return $this->totalCnt;
	}

	/**
	 * プリカ番号設定
	 *
	 * @param string $precaNo
	 */
	public function setPrecaNo($precaNo) {
		$this->precaNo = $precaNo;
	}
	/**
	 * 合計バリュー設定
	 *
	 * @param integer $totalValue
	 */
	public function setTotalValue($totalValue) {
		$this->totalValue = $totalValue;
	}
	/**
	 * 最終チャージ日時設定
	 *
	 * @param string $lastChargeDate
	 */
	public function setLastChargeDate($lastChargeDate) {
		$this->lastChargeDate = $lastChargeDate;
	}
	/**
	 * 最終利用日時設定
	 *
	 * @param string $lastUseDate
	 */
	public function setLastUseDate($lastUseDate) {
		$this->lastUseDate = $lastUseDate;
	}
	/**
	 * 履歴件数設定
	 *
	 * @param integer $totalCnt
	 */
	public function setTotalCnt($totalCnt) {
		$this->totalCnt = $totalCnt;
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
		$str .= 'PrecaNo=' . $this->encodeStr($this->getPrecaNo());
		$str .='&';
		$str .= 'TotalValue=' . $this->encodeStr($this->getTotalValue());
		$str .='&';
		$str .= 'LastChargeDate=' . $this->encodeStr($this->getLastChargeDate());
		$str .='&';
		$str .= 'LastUseDate=' . $this->encodeStr($this->getLastUseDate());
		$str .='&';
		$str .= 'TotalCnt=' . $this->encodeStr($this->getTotalCnt());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
