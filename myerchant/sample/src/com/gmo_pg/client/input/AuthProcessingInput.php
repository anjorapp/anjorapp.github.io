<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>PGプリカ本人認証手続き　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class AuthProcessingInput extends BaseInput {

	/**
	 * @var string 取引ID 
	 */
	private $accessID;
	/**
	 * @var string 本人認証手続き呼出パラメータ
	 */
	private $authProcessingHash;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * 取引ID 取得
	 * @return string 取引ID 
	 */
	public function getAccessID() {
		return $this->accessID;
	}
	/**
	 * 本人認証手続き呼出パラメータ取得
	 * @return string 本人認証手続き呼出パラメータ
	 */
	public function getAuthProcessingHash() {
		return $this->authProcessingHash;
	}

	/**
	 * 取引ID 設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->accessID = $accessID;
	}
	/**
	 * 本人認証手続き呼出パラメータ設定
	 *
	 * @param string $authProcessingHash
	 */
	public function setAuthProcessingHash($authProcessingHash) {
		$this->authProcessingHash = $authProcessingHash;
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

		$this->setAccessID($this->getStringValue($params, 'AccessID', $this->getAccessID()));
		$this->setAuthProcessingHash($this->getStringValue($params, 'AuthProcessingHash', $this->getAuthProcessingHash()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
		$str .='&';
		$str .= 'AuthProcessingHash=' . $this->encodeStr($this->getAuthProcessingHash());

	    return $str;
	}


}
?>
