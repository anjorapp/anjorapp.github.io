<?php
/**
 * <b>出力エラー情報クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class ErrHolder {

	/**
	 * @var string エラーコード
	 */
	private $errCode;

	/**
	 * @var string エラー詳細
	 */
	private $errInfo;

	/**
	 * エラーコードを取得
	 * @return string エラーコード
	 */
	public function getErrCode() {
		return $this->errCode;
	}

	/**
	 * エラー詳細取得
	 * @return string エラー詳細コード
	 */
	public function getErrInfo() {
		return $this->errInfo;
	}

	/**
	 * エラーコード設定
	 *
	 * @param string $errCode エラーコード
	 */
	public function setErrCode($errCode) {
		$this->errCode = $errCode;
	}

	/**
	 * エラー詳細設定
	 *
	 * @param string $errInfo エラー詳細コード
	 */
	public function setErrInfo($errInfo) {
		$this->errInfo = $errInfo;
	}

}
?>