<?php
require_once 'com/gmo_pg/client/output/EntryExecTranAuAcceptOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranAuAccept.php';
require_once 'com/gmo_pg/client/tran/ExecTranAuAccept.php';
/**
 * <b>auかんたん決済支払い（利用承諾）登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranAuAccept {
	/**
	 * @var Gmopg_Log ログ
	 */
	private $log;

	/**
	 * @var GPayException 例外
	 */
	private $exception;

	/**
	 * コンストラクタ
	 */
	public function __construct() {
		$this->log = new Gmopg_Log(get_class($this));
	}

	/**
	 * 例外の発生を判定する
	 *
	 * @param mixed $target    判定対象
	 */
	private function errorTrap(&$target) {
		if (is_null($target->getException())) {
			return false;
		}
		$this->exception = $target->getException();
		return true;
	}

	/**
	 * 例外の発生を判定する
	 *
	 * @return  boolean 判定結果(true=エラーアリ)
	 */
	public function isExceptionOccured() {
		return false == is_null($this->exception);
	}

	/**
	 * 例外を返す
	 *
	 * @return  GPayException 例外
	 */
	public function &getException() {
		return $this->exception;
	}

	/**
	 * auかんたん決済支払い（利用承諾）登録・決済を実行する
	 *
	 * @param EntryExecTranAuAcceptInput $input    auかんたん決済支払い（利用承諾）登録・決済入力パラメータ
	 * @return  EntryExecTranAuAcceptOutput auかんたん決済支払い（利用承諾）登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// auかんたん決済支払い（利用承諾）取引登録入力パラメータを取得
		$entryTranAuAcceptInput =& $input->getEntryTranAuAcceptInput();
		// auかんたん決済支払い（利用承諾）決済実行入力パラメータを取得
		$execTranAuAcceptInput =& $input->getExecTranAuAcceptInput();

		// auかんたん決済支払い（利用承諾）登録・決済出力パラメータを生成
		$output = new EntryExecTranAuAcceptOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranAuAcceptInput->getAccessId();
		$accessPass = $execTranAuAcceptInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// auかんたん決済支払い（利用承諾）取引登録を実行
			$this->log->debug("auかんたん決済支払い（利用承諾）取引登録実行");
			$entryTranAuAccept = new EntryTranAuAccept();
			$entryTranAuAcceptOutput = $entryTranAuAccept->exec($entryTranAuAcceptInput);

			if ($this->errorTrap($entryTranAuAccept)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranAuAcceptOutput->getAccessId();
			$accessPass = $entryTranAuAcceptOutput->getAccessPass();
			$execTranAuAcceptInput->setAccessId($accessId);
			$execTranAuAcceptInput->setAccessPass($accessPass);

			$output->setEntryTranAuAcceptOutput($entryTranAuAcceptOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranAuAccept = new ExecTranAuAccept();
		$execTranAuAcceptOutput = $execTranAuAccept->exec($execTranAuAcceptInput);

		$output->setExecTranAuAcceptOutput($execTranAuAcceptOutput);

		$this->errorTrap($execTranAuAccept);

		return $output;
	}


}
?>
