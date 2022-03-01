<?php
require_once 'com/gmo_pg/client/output/EntryTranSbAcceptOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranSbAcceptOutput.php';
/**
 * <b>ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranSbAcceptOutput {

	/**
	 * @var EntryTranSbAcceptOutput ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録出力パラメータ
	 */
	private $entryTranSbAcceptOutput;/*@var $entryTranSbAcceptOutput EntryTranSbAcceptOutput */

	/**
	 * @var ExecTranSbAcceptOutput ソフトバンクまとめて支払い(Ｂ)(利用承諾)実行出力パラメータ
	 */
	private $execTranSbAcceptOutput;/*@var $execTranSbAcceptOutput ExecTranSbAcceptOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranSbAcceptOutput = new EntryTranSbAcceptOutput($params);
		$this->execTranSbAcceptOutput = new ExecTranSbAcceptOutput($params);
	}

	/**
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録出力パラメータ取得
	 * @return EntryTranSbAcceptOutput ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録出力パラメータ
	 */
	public function &getEntryTranSbAcceptOutput() {
		return $this->entryTranSbAcceptOutput;
	}

	/**
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)実行出力パラメータ取得
	 * @return ExecTranSbAcceptOutput ソフトバンクまとめて支払い(Ｂ)(利用承諾)実行出力パラメータ
	 */
	public function &getExecTranSbAcceptOutput() {
		return $this->execTranSbAcceptOutput;
	}

	/**
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録出力パラメータ設定
	 *
	 * @param EntryTranSbAcceptOutput  $entryTranSbAcceptOutput ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録出力パラメータ
	 */
	public function setEntryTranSbAcceptOutput(&$entryTranSbAcceptOutput) {
		$this->entryTranSbAcceptOutput = $entryTranSbAcceptOutput;
	}

	/**
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)決済実行出力パラメータ設定
	 *
	 * @param ExecTranSbAcceptOutput $execTranSbAcceptOutput ソフトバンクまとめて支払い(Ｂ)(利用承諾)実行出力パラメータ
	 */
	public function setExecTranSbAcceptOutput(&$execTranSbAcceptOutput) {
		$this->execTranSbAcceptOutput = $execTranSbAcceptOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranSbAcceptOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranSbAcceptOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranSbAcceptOutput->getToken();

	}
	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranSbAcceptOutput->getStartURL();

	}
	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranSbAcceptOutput->getStartLimitDate();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranSbAcceptOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranSbAcceptOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranSbAcceptOutput->setToken($token);

	}
	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranSbAcceptOutput->setStartURL($startURL);

	}
	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranSbAcceptOutput->setStartLimitDate($startLimitDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranSbAcceptOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranSbAcceptOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranSbAcceptOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranSbAcceptOutput->getErrList();
		return 0 < count($execErrList);
	}

	/**
	 * エラー発生判定
	 * @return boolean エラー発生有無(true=エラー発生)
	 */
	public function isErrorOccurred() {
		return $this->isEntryErrorOccurred() || $this->isExecErrorOccurred();
	}

}
?>
