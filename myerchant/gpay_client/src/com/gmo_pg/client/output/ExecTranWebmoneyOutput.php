<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');

/**
 * <b>Webmoney決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 04-08-2010
 */
class ExecTranWebmoneyOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderId;

	/**
	 * @var string 支払期限日時
	 */
	private $paymentTerm;

	/**
	 * @var string 決済日付
	 */
	private $tranDate;

	/**
	 * @var string MD5ハッシュ
	 */
	private $checkString;

	/**
	 * @var string 加盟店自由項目1
	 */
	private $clientField1;

	/**
	 * @var string 加盟店自由項目2
	 */
	private $clientField2;

	/**
	 * @var string 加盟店自由項目3
	 */
	private $clientField3;


	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params 出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
		if (is_null($params)) {
			return;
		}

		// マップの展開
		$this->setOrderId($params->get('OrderID'));
		$this->setPaymentTerm($params->get('PaymentTerm'));
		$this->setTranDate($params->get('TranDate'));
		$this->setCheckString($params->get('CheckString'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * 支払期限日時取得
	 * @return string 支払期限日時
	 */
	public function getPaymentTerm(){
		return $this->paymentTerm;
	}

	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate(){
		return $this->tranDate;
	}

	/**
	 * MD5ハッシュ取得
	 * @return string MD5ハッシュ
	 */
	public function getCheckString(){
		return $this->checkString;
	}

	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}

	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}

	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * 支払期限日時設定
	 *
	 * @param string $paymentTerm 支払期限日時
	 */
	public function setPaymentTerm($paymentTerm) {
		$this->paymentTerm = $paymentTerm;
	}

	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate 決済日付
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}

	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString MD5ハッシュ
	 */
	public function setCheckString($checkString) {
		$this->checkString = $checkString;
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}

	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return 出力パラメータ文字列表現
	 */
	public function toString() {
		$str  = 'OrderID=' . $this->getOrderId();
		$str .= '&';
		$str .= 'PaymentTerm=' . $this->getPaymentTerm();
		$str .= '&';
		$str .= 'TranDate=' . $this->getTranDate();
		$str .= '&';
		$str .= 'CheckString=' . $this->getCheckString();
		$str .= '&';
		$str .= 'ClientField1=' . $this->getClientField1();
		$str .= '&';
		$str .= 'ClientField2=' . $this->getClientField2();
		$str .= '&';
		$str .= 'ClientField3=' . $this->getClientField3();

		if ($this->isErrorOccurred()) {
			// エラー文字列を連結して返す
			$errString = parent::toString();
			$str .= '&' . $errString;
		}
		return $str;
	}
}
