<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>ドコモケータイ払い決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 2012/06/14
 */
class ExecTranDocomoOutput extends BaseOutput {

	/**
	 * @var string 取引ID
	 */
	private $accessID;

	/**
	 * @var string 決済トークン
	 */
	private $token;

	/**
	 * @var string 支払手続き開始IFのURL
	 */
	private $startURL;

	/**
	 * @var string 支払開始期限日時
	 */
	private $startLimitDate;

	/**
	 * オーダーID
	 */
	private $orderID;

	/**
	 * 現状態
	 */
	private $status;

	/**
	 * 処理日時
	 */
	private $tranDate;

	/**
	 * ドコモ決済番号
	 */
	private $docomoSettlementCode;

	/**
	 * 改ざんチェック文字列
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
        $this->setDocomoSettlementCode($params->get('DocomoSettlementCode'));
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
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->startURL;
	}

	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
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
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	 public function getTranDate() {
	 	return $this->tranDate;
	 }

	/**
	 * ドコモ決済番号取得
	 * @return string ドコモ決済番号
	 */
	 public function getDocomoSettlementCode() {
	 	return $this->docomoSettlementCode;
	 }

	 /**
	 * 改ざんチェック文字列取得
	 * @return string 改ざんチェック文字列
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
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->startURL = $startURL;
	}

	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->startLimitDate = $startLimitDate;
	}

	/**
	 * オーダーID設定
	 * @param string オーダーID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}

	/**
	 * 現状態設定
	 * @param string 現状態
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * 処理日時設定
	 * @param string 処理日時
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}

	/**
	 * ドコモ決済番号設定
	 * @param string ドコモ決済番号
	 */
	public function setDocomoSettlementCode($docomoSettlementCode) {
		$this->docomoSettlementCode = $docomoSettlementCode;
	}

	/**
	 * 改ざんチェック文字列設定
	 * @param string 改ざんチェック文字列
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

		if (null != $this->getDocomoSettlementCode()) {
			$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
			$str .= '&';
			$str .= 'Status=' . $this->encodeStr($this->getStatus());
			$str .= '&';
			$str .= 'TranDate=' . $this->encodeStr($this->getTranDate());
			$str .= '&';
			$str .= 'DocomoSettlementCode=' . $this->encodeStr($this->getDocomoSettlementCode());
			$str .= '&';
			$str .= 'CheckString=' . $this->encodeStr($this->getCheckString());
		} else {
			$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
			$str .= '&';
			$str .= 'Token=' . $this->encodeStr($this->getToken());
			$str .= '&';
			$str .= 'StartURL=' . $this->encodeStr($this->getStartURL());
			$str .= '&';
			$str .= 'StartLimitDate=' . $this->encodeStr($this->getStartLimitDate());
		}

	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
