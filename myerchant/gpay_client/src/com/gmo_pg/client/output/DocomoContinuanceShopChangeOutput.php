<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>ドコモ継続決済　継続課金変更(加盟店)　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/08/21
 */
class DocomoContinuanceShopChangeOutput extends BaseOutput {

	/**
	 * @var string オーダID
	 */
	private $orderID;

	/**
	 * @var string 現状態
	 */
	private $status;

	/**
	 * @var string 利用金額
	 */
	private $amount;

	/**
	 * @var string 税送料
	 */
	private $tax;

	/**
	 * @var string 変更利用金額
	 */
	private $changeAmount;

	/**
	 * @var string 変更利用税送料
	 */
	private $changeTax;

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
        $this->setAmount($params->get('Amount'));
        $this->setTax($params->get('Tax'));
        $this->setChangeAmount($params->get('ChangeAmount'));
        $this->setChangeTax($params->get('ChangeTax'));
	}

	/**
	 * オーダID取得
	 * @return string オーダID
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
	 * 利用金額取得
	 * @return string 利用金額
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * 税送料取得
	 * @return string 税送料
	 */
	public function getTax() {
		return $this->tax;
	}

	/**
	 * 変更利用金額取得
	 * @return string 変更利用金額
	 */
	public function getChangeAmount() {
		return $this->changeAmount;
	}

	/**
	 * 変更利用税送料取得
	 * @return string 変更利用税送料
	 */
	public function getChangeTax() {
		return $this->changeTax;
	}

	/**
	 * オーダID設定
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
	 * 利用金額設定
	 *
	 * @param string $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * 税送料設定
	 *
	 * @param string $tax
	 */
	public function setTax($tax) {
		$this->tax = $tax;
	}

	/**
	 * 変更利用金額設定
	 *
	 * @param string $changeAmount
	 */
	public function setChangeAmount($changeAmount) {
		$this->changeAmount = $changeAmount;
	}

	/**
	 * 変更利用税送料設定
	 *
	 * @param string $changeTax
	 */
	public function setChangeTax($changeTax) {
		$this->changeTax = $changeTax;
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
	    $str .= '&';
	    $str .= 'Status=' . $this->encodeStr($this->getStatus());
	    $str .= '&';
	    $str .= 'Amount=' . $this->encodeStr($this->getAmount());
	    $str .= '&';
	    $str .= 'Tax=' . $this->encodeStr($this->getTax());
	    $str .= '&';
	    $str .= 'ChangeAmount=' . $this->encodeStr($this->getChangeAmount());
	    $str .= '&';
	    $str .= 'ChangeTax=' . $this->encodeStr($this->getChangeTax());

	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
