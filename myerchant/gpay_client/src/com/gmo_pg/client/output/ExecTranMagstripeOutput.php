<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>クレジットカード決済決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranMagstripeOutput extends BaseOutput {

	/**
	 * @var string ACS呼出判定
	 */
	private $aCS;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 仕向先コード
	 */
	private $forward;
	/**
	 * @var string 支払方法
	 */
	private $method;
	/**
	 * @var integer 支払回数
	 */
	private $payTimes;
	/**
	 * @var string 承認番号
	 */
	private $approve;
	/**
	 * @var string トランザクションID
	 */
	private $tranID;
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
	 * @var string 実行磁気ストライプ区分
	 */
	private $magstripeType;


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
		$this->setACS($params->get('ACS'));
		$this->setOrderID($params->get('OrderID'));
		$this->setForward($params->get('Forward'));
		$this->setMethod($params->get('Method'));
		$this->setPayTimes($params->get('PayTimes'));
		$this->setApprove($params->get('Approve'));
		$this->setTranID($params->get('TranID'));
		$this->setTranDate($params->get('TranDate'));
		$this->setCheckString($params->get('CheckString'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));
		$this->setMagstripeType($params->get('MagstripeType'));

	}

	/**
	 * ACS呼出判定取得
	 * @return string ACS呼出判定
	 */
	public function getACS() {
		return $this->aCS;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward() {
		return $this->forward;
	}
	/**
	 * 支払方法取得
	 * @return string 支払方法
	 */
	public function getMethod() {
		return $this->method;
	}
	/**
	 * 支払回数取得
	 * @return integer 支払回数
	 */
	public function getPayTimes() {
		return $this->payTimes;
	}
	/**
	 * 承認番号取得
	 * @return string 承認番号
	 */
	public function getApprove() {
		return $this->approve;
	}
	/**
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTranID() {
		return $this->tranID;
	}
	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->tranDate;
	}
	/**
	 * MD5ハッシュ取得
	 * @return string MD5ハッシュ
	 */
	public function getCheckString() {
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
	 * 実行磁気ストライプ区分取得
	 * @return string 実行磁気ストライプ区分
	 */
	public function getMagstripeType() {
		return $this->magstripeType;
	}

	/**
	 * ACS呼出判定設定
	 *
	 * @param string $aCS
	 */
	public function setACS($aCS) {
		$this->aCS = $aCS;
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
	 * 仕向先コード設定
	 *
	 * @param string $forward
	 */
	public function setForward($forward) {
		$this->forward = $forward;
	}
	/**
	 * 支払方法設定
	 *
	 * @param string $method
	 */
	public function setMethod($method) {
		$this->method = $method;
	}
	/**
	 * 支払回数設定
	 *
	 * @param integer $payTimes
	 */
	public function setPayTimes($payTimes) {
		$this->payTimes = $payTimes;
	}
	/**
	 * 承認番号設定
	 *
	 * @param string $approve
	 */
	public function setApprove($approve) {
		$this->approve = $approve;
	}
	/**
	 * トランザクションID設定
	 *
	 * @param string $tranID
	 */
	public function setTranID($tranID) {
		$this->tranID = $tranID;
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
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->checkString = $checkString;
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}
	/**
	 * 実行磁気ストライプ区分設定
	 *
	 * @param string $magstripeType
	 */
	public function setMagstripeType($magstripeType) {
		$this->magstripeType = $magstripeType;
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
		$str .= 'ACS=' . $this->encodeStr($this->getACS());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'Forward=' . $this->encodeStr($this->getForward());
		$str .='&';
		$str .= 'Method=' . $this->encodeStr($this->getMethod());
		$str .='&';
		$str .= 'PayTimes=' . $this->encodeStr($this->getPayTimes());
		$str .='&';
		$str .= 'Approve=' . $this->encodeStr($this->getApprove());
		$str .='&';
		$str .= 'TranID=' . $this->encodeStr($this->getTranID());
		$str .='&';
		$str .= 'TranDate=' . $this->encodeStr($this->getTranDate());
		$str .='&';
		$str .= 'CheckString=' . $this->encodeStr($this->getCheckString());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'MagstripeType=' . $this->encodeStr($this->getMagstripeType());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
