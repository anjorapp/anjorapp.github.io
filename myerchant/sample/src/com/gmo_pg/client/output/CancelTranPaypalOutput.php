<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');

/**
 * <b>Paypal払い戻し 出力パラメータクラス</b>
 *
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 12-24-2009 00:00:00
 */
class CancelTranPaypalOutput extends BaseOutput {

	/**
	 * @var string オーダID
	 */
	private $orderId;

	/**
	 * @var string トランザクションID
	 */
	private $tranId;

	/**
	 * @var string 決済日付
	 */
	private $tranDate;

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params  出力パラメータ
	 */

	public function __construct($params = null) {
		parent::__construct($params);

		// 引数がない場合は戻る
		if(is_null($params)) {
			return;
		}

		// マップの展開
		$this->setOrderId($params->get('OrderID'));
		$this->setTranId($params->get('TranID'));
		$this->setTranDate($params->get('TranDate'));
	}


	/**
	 * オーダIDを取得する
	 * @return string オーダID
	 */
	public function getOrderId(){
		return $this->orderId;
	}

	/**
	 * トランザクションIDを取得する
	 * @return string トランザクションID
	 */
	public function getTranId(){
		return $this->tranId;
	}

	/**
	 * 決済日付を取得する
	 * @return string 決済日付
	 */
	public function getTranDate(){
		return $this->tranDate;
	}

	/**
	 * オーダIDを設定する
	 * @param $orderId オーダID
	 */
	public function setOrderId( $orderId ){
		$this->orderId = $orderId;
	}

	/**
	 * トランザクションIDを設定する
	 * @param string $tranId トランザクションID
	 */
	public function setTranId( $tranId ){
		$this->tranId = $tranId;
	}

	/**
	 * 決済日付を設定する
	 * @param string $tranDate 決済日付
	 */
	public function setTranDate( $tranDate ){
		$this->tranDate = $tranDate;
	}


	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str  = 'OrderID=' . $this->getOrderId();
		$str .= '&';
		$str .= 'TranID=' . $this->getTranId();
		$str .= '&';
		$str .= 'TranDate=' . $this->getTranDate();

		if ($this->isErrorOccurred()) {
			// エラー文字列を連結して返す
			$errString = parent::toString();
			$str .= '&' . $errString;
		}
		return $str;
	}
}