<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>PGプリカバリュー利用キャンセル　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class UseCancelOutput extends BaseOutput {

	/**
	 * @var string プリカ番号
	 */
	private $precaNo;
	/**
	 * @var integer プリカ履歴連番
	 */
	private $precaSeq;
	/**
	 * @var string 処理日時
	 */
	private $processDate;
	/**
	 * @var bigDecimal 合計バリュー
	 */
	private $totalValue;


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
		$this->setPrecaSeq($params->get('PrecaSeq'));
		$this->setProcessDate($params->get('ProcessDate'));
		$this->setTotalValue($params->get('TotalValue'));

	}

	/**
	 * プリカ番号取得
	 * @return string プリカ番号
	 */
	public function getPrecaNo() {
		return $this->precaNo;
	}
	/**
	 * プリカ履歴連番取得
	 * @return integer プリカ履歴連番
	 */
	public function getPrecaSeq() {
		return $this->precaSeq;
	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getProcessDate() {
		return $this->processDate;
	}
	/**
	 * 合計バリュー取得
	 * @return bigDecimal 合計バリュー
	 */
	public function getTotalValue() {
		return $this->totalValue;
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
	 * プリカ履歴連番設定
	 *
	 * @param integer $precaSeq
	 */
	public function setPrecaSeq($precaSeq) {
		$this->precaSeq = $precaSeq;
	}
	/**
	 * 処理日時設定
	 *
	 * @param string $processDate
	 */
	public function setProcessDate($processDate) {
		$this->processDate = $processDate;
	}
	/**
	 * 合計バリュー設定
	 *
	 * @param bigDecimal $totalValue
	 */
	public function setTotalValue($totalValue) {
		$this->totalValue = $totalValue;
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
		$str .= 'PrecaSeq=' . $this->encodeStr($this->getPrecaSeq());
		$str .='&';
		$str .= 'ProcessDate=' . $this->encodeStr($this->getProcessDate());
		$str .='&';
		$str .= 'TotalValue=' . $this->encodeStr($this->getTotalValue());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
