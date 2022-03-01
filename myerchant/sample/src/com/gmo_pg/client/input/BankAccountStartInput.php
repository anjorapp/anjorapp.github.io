<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>口振オンライン金融機関遷移　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class BankAccountStartInput extends BaseInput {

	/**
	 * @var string トランザクションID
	 */
	private $tranID;
	/**
	 * @var string トークン
	 */
	private $token;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTranID() {
		return $this->tranID;
	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->token;
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
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->token = $token;
	}


	/**
	 * デフォルト値設定
	 */
	public function setDefaultValues() {

	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

		$this->setTranID($this->getStringValue($params, 'TranID', $this->getTranID()));
		$this->setToken($this->getStringValue($params, 'Token', $this->getToken()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'TranID=' . $this->encodeStr($this->getTranID());
		$str .='&';
		$str .= 'Token=' . $this->encodeStr($this->getToken());

	    return $str;
	}


}
?>
