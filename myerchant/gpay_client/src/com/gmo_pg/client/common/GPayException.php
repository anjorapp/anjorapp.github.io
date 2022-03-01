<?php

/**
 * <b>例外クラス</b>
 *
 *  モジュールタイプ(PHP版)独自の、例外を表すクラス。
 *
 * @package com.gmo_pg.client
 * @subpackage common
 * @author GMO PaymentGateway
 * @see commonPackageInfo.php
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class GPayException {

	/**
	 * @var string 例外メッセージ
	 */
	private $message;

	/**
	 * @var Exception 根本例外
	 */
	private $cause;

	/**
	 * コンストラクタ
	 *
	 * @param string message  例外メッセージ
	 * @param cause    原因(直前例外のexceptionインスタンス)
	 */
	public function __construct($message, $cause = null) {
		$this->message = $message;
		$this->cause = $cause ? $cause : null;
	}

	/**
	 * 原因例外取得
	 *
	 * @return Exception 原因となった例外
	 */
	public function getCause() {
		return $this->cause;
	}

	/**
	 * メッセージ取得
	 * @return string 例外メッセージ
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * メッセージ群取得
	 *
	 * @return string エラーメッセージ
	 */
	public function getMessages() {
		$prev = $this;
		$messages = $this->getMessage();
		$messages .= "\n";
		while ($cause = $prev->getCause()) {
			$messages .= $cause->getMessage();
			$messages .= "\n";
			$prev = $prev->getCause();
		}

		return $messages;
	}
}
?>