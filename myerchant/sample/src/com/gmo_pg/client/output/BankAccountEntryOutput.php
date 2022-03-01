<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>口振オンライン申し込み　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class BankAccountEntryOutput extends BaseOutput {

	/**
	 * @var string トランザクションID
	 */
	private $tranID;
	/**
	 * @var string チェックトークン
	 */
	private $token;
	/**
	 * @var string 金融機関遷移URL
	 */
	private $startUrl;


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
		$this->setTranID($params->get('TranID'));
		$this->setToken($params->get('Token'));
		$this->setStartUrl($params->get('StartUrl'));

	}

	/**
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTranID() {
		return $this->tranID;
	}
	/**
	 * チェックトークン取得
	 * @return string チェックトークン
	 */
	public function getToken() {
		return $this->token;
	}
	/**
	 * 金融機関遷移URL取得
	 * @return string 金融機関遷移URL
	 */
	public function getStartUrl() {
		return $this->startUrl;
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
	 * チェックトークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->token = $token;
	}
	/**
	 * 金融機関遷移URL設定
	 *
	 * @param string $startUrl
	 */
	public function setStartUrl($startUrl) {
		$this->startUrl = $startUrl;
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
		$str .= 'TranID=' . $this->encodeStr($this->getTranID());
		$str .='&';
		$str .= 'Token=' . $this->encodeStr($this->getToken());
		$str .='&';
		$str .= 'StartUrl=' . $this->encodeStr($this->getStartUrl());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
