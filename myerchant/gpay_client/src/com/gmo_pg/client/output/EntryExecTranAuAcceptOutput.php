<?php
require_once 'com/gmo_pg/client/output/EntryTranAuAcceptOutput.php';
require_once 'com/gmo_pg/client/output/ExecTranAuAcceptOutput.php';
/**
 * <b>auかんたん決済支払い（利用承諾）登録・決済一括実行  出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAuAcceptOutput {

	/**
	 * @var EntryTranAuAcceptOutput auかんたん決済支払い（利用承諾）登録出力パラメータ
	 */
	private $entryTranAuAcceptOutput;/*@var $entryTranAuAcceptOutput EntryTranAuAcceptOutput */

	/**
	 * @var ExecTranAuAcceptOutput auかんたん決済支払い（利用承諾）実行出力パラメータ
	 */
	private $execTranAuAcceptOutput;/*@var $execTranAuAcceptOutput ExecTranAuAcceptOutput */

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->entryTranAuAcceptOutput = new EntryTranAuAcceptOutput($params);
		$this->execTranAuAcceptOutput = new ExecTranAuAcceptOutput($params);
	}

	/**
	 * auかんたん決済支払い（利用承諾）登録出力パラメータ取得
	 * @return EntryTranAuAcceptOutput auかんたん決済支払い（利用承諾）登録出力パラメータ
	 */
	public function &getEntryTranAuAcceptOutput() {
		return $this->entryTranAuAcceptOutput;
	}

	/**
	 * auかんたん決済支払い（利用承諾）実行出力パラメータ取得
	 * @return ExecTranAuAcceptOutput auかんたん決済支払い（利用承諾）実行出力パラメータ
	 */
	public function &getExecTranAuAcceptOutput() {
		return $this->execTranAuAcceptOutput;
	}

	/**
	 * auかんたん決済支払い（利用承諾）登録出力パラメータ設定
	 *
	 * @param EntryTranAuAcceptOutput  $entryTranAuAcceptOutput auかんたん決済支払い（利用承諾）登録出力パラメータ
	 */
	public function setEntryTranAuAcceptOutput(&$entryTranAuAcceptOutput) {
		$this->entryTranAuAcceptOutput = $entryTranAuAcceptOutput;
	}

	/**
	 * auかんたん決済支払い（利用承諾）決済実行出力パラメータ設定
	 *
	 * @param ExecTranAuAcceptOutput $execTranAuAcceptOutput auかんたん決済支払い（利用承諾）実行出力パラメータ
	 */
	public function setExecTranAuAcceptOutput(&$execTranAuAcceptOutput) {
		$this->execTranAuAcceptOutput = $execTranAuAcceptOutput;
	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->entryTranAuAcceptOutput->getAccessID();

	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->entryTranAuAcceptOutput->getAccessPass();

	}
	/**
	 * トークン取得
	 * @return string トークン
	 */
	public function getToken() {
		return $this->execTranAuAcceptOutput->getToken();

	}
	/**
	 * 支払手続き開始IFのURL取得
	 * @return string 支払手続き開始IFのURL
	 */
	public function getStartURL() {
		return $this->execTranAuAcceptOutput->getStartURL();

	}
	/**
	 * 支払開始期限日時取得
	 * @return string 支払開始期限日時
	 */
	public function getStartLimitDate() {
		return $this->execTranAuAcceptOutput->getStartLimitDate();

	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->entryTranAuAcceptOutput->setAccessID($accessID);

	}
	/**
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->entryTranAuAcceptOutput->setAccessPass($accessPass);

	}
	/**
	 * トークン設定
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->execTranAuAcceptOutput->setToken($token);

	}
	/**
	 * 支払手続き開始IFのURL設定
	 *
	 * @param string $startURL
	 */
	public function setStartURL($startURL) {
		$this->execTranAuAcceptOutput->setStartURL($startURL);

	}
	/**
	 * 支払開始期限日時設定
	 *
	 * @param string $startLimitDate
	 */
	public function setStartLimitDate($startLimitDate) {
		$this->execTranAuAcceptOutput->setStartLimitDate($startLimitDate);

	}

	/**
	 * 取引登録エラーリスト取得
	 * @return  array エラーリスト
	 */
	public function &getEntryErrList() {
		return $this->entryTranAuAcceptOutput->getErrList();
	}

	/**
	 * 決済実行エラーリスト取得
	 * @return array エラーリスト
	 */
	public function &getExecErrList() {
		return $this->execTranAuAcceptOutput->getErrList();
	}

	/**
	 * 取引登録エラー発生判定
	 * @return boolean 取引登録時エラー有無(true=エラー発生)
	 */
	public function isEntryErrorOccurred() {
		$entryErrList =& $this->entryTranAuAcceptOutput->getErrList();
		return 0 < count($entryErrList);
	}

	/**
	 * 決済実行エラー発生判定
	 * @return boolean 決済実行時エラー有無(true=エラー発生)
	 */
	public function isExecErrorOccurred() {
		$execErrList =& $this->execTranAuAcceptOutput->getErrList();
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
