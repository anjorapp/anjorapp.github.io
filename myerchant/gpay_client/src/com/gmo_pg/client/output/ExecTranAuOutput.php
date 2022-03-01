<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>auかんたん決済決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/02/15
 */
class ExecTranAuOutput extends BaseOutput {

	/**
	 * @var string 取引ID
	 */
	private $accessID;

	/**
	 * @var string 決済トークン
	 */
	private $token;

	/**
	 * @var string 呼び出しURL
	 */
	private $startURL;

	/**
	 * @var string 該当トークンの有効期限 YYYYMMDDHHMM
	 */
	private $startLimitDate;

	/**
	 * @var string オーダーID
	 */
	private $orderID;

	/**
	 * @var string 現状態
	 */
	private $status;

	/**
	 * @var string 処理日時
	 */
	private $tranDate;

	/**
	 * @var string 決済情報番号
	 */
	private $payInfoNo;

	/**
	 * @var string 支払方法
	 */
	private $payMethod;

	/**
	 * @var string 改ざんチェック文字列
	 */
	private $checkString;

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
        $this->setAccessID($params->get('AccessID'));
        $this->setToken($params->get('Token'));
        $this->setStartURL($params->get('StartURL'));
        $this->setStartLimitDate($params->get('StartLimitDate'));
        $this->setOrderID($params->get('OrderID'));
        $this->setStatus($params->get('Status'));
        $this->setTranDate($params->get('TranDate'));
        $this->setPayInfoNo($params->get('PayInfoNo'));
        $this->setPayMethod($params->get('PayMethod'));
        $this->setCheckString($params->get('CheckString'));
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->accessID;
	}

	/**
	 * 決済トークン取得
	 * @return string 決済トークン
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * 呼び出しURL取得
	 * @return string 呼び出しURL
	 */
	public function getStartURL() {
		return $this->startURL;
	}

	/**
	 * 該当トークンの有効期限 YYYYMMDDHHMM取得
	 * @return string 該当トークンの有効期限 YYYYMMDDHHMM
	 */
	public function getStartLimitDate() {
		return $this->startLimitDate;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}

	/**
	 * 現状態を取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * 処理日時を取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->tranDate;
	}

	/**
	 * 決済情報番号を取得
	 * @return string 決済情報番号
	 */
	public function getPayInfoNo() {
		return $this->payInfoNo;
	}

	/**
	 * 支払方法を取得
	 * @return string 支払方法
	 */
	public function getPayMethod() {
		return $this->payMethod;
	}

	/**
	 * 改ざんチェック文字列を取得
	 * @return string 改ざんチェック
	 */
	public function getCheckString() {
		return $this->checkString;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->accessID = $accessID;
	}

	/**
	 * 決済トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->token = $token;
	}

	/**
	 * 呼び出しURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->startURL = $startURL;
	}

	/**
	 * 該当トークンの有効期限 YYYYMMDDHHMM設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->startLimitDate = $startLimitDate;
	}

	/**
	 * オーダーID設定
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}

	/**
	 * 現状態設定
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * 処理日時設定
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}

	/**
	 * 決済情報番号設定
	 * @param string $payInfoNo
	 */
	public function setPayInfoNo($payInfoNo) {
		$this->payInfoNo = $payInfoNo;
	}

	/**
	 * 支払方法設定
	 * @param string $payMethod
	 */
	public function setPayMethod($payMethod) {
		$this->payMethod = $payMethod;
	}

	/**
	 * 改ざんチェック文字列設定
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->checkString = $checkString;
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
	    $str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
	    $str .= '&';
	    $str .= 'Token=' . $this->encodeStr($this->getToken());
	    $str .= '&';
	    $str .= 'StartURL=' . $this->encodeStr($this->getStartURL());
	    $str .= '&';
	    $str .= 'StartLimitDate=' . $this->encodeStr($this->getStartLimitDate());
	    $str .= '&';
	    $str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
	    $str .= '&';
	    $str .= 'Status=' . $this->encodeStr($this->getStatus());
	    $str .= '&';
	    $str .= 'TranDate=' . $this->encodeStr($this->getTranDate());
	    $str .= '&';
	    $str .= 'PayInfoNo=' . $this->encodeStr($this->getPayInfoNo());
	    $str .= '&';
	    $str .= 'PayMethod=' . $this->encodeStr($this->getPayMethod());
	    $str .= '&';
	    $str .= 'CheckString=' . $this->encodeStr($this->getCheckString());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>