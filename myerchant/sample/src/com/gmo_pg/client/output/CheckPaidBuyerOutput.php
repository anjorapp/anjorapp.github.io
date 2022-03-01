<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>Paid取引先ステータス確認　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class CheckPaidBuyerOutput extends BaseOutput {

	/**
	 * @var string Paid取引先ID
	 */
	private $paidBuyerID;
	/**
	 * @var string 審査状態
	 */
	private $buyerStatus;


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
		$this->setPaidBuyerID($params->get('PaidBuyerID'));
		$this->setBuyerStatus($params->get('BuyerStatus'));

	}

	/**
	 * Paid取引先ID取得
	 * @return string Paid取引先ID
	 */
	public function getPaidBuyerID() {
		return $this->paidBuyerID;
	}
	/**
	 * 審査状態取得
	 * @return string 審査状態
	 */
	public function getBuyerStatus() {
		return $this->buyerStatus;
	}

	/**
	 * Paid取引先ID設定
	 *
	 * @param string $paidBuyerID
	 */
	public function setPaidBuyerID($paidBuyerID) {
		$this->paidBuyerID = $paidBuyerID;
	}
	/**
	 * 審査状態設定
	 *
	 * @param string $buyerStatus
	 */
	public function setBuyerStatus($buyerStatus) {
		$this->buyerStatus = $buyerStatus;
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
		$str .= 'PaidBuyerID=' . $this->encodeStr($this->getPaidBuyerID());
		$str .='&';
		$str .= 'BuyerStatus=' . $this->encodeStr($this->getBuyerStatus());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
