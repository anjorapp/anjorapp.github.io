<?php
require_once 'com/gmo_pg/client/output/EntryExecTranPaysleOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranPaysle.php';
require_once 'com/gmo_pg/client/tran/ExecTranPaysle.php';
/**
 * <b>Paysle登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranPaysle {
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
	 * Paysle登録・決済を実行する
	 *
	 * @param EntryExecTranPaysleInput $input    Paysle登録・決済入力パラメータ
	 * @return  EntryExecTranPaysleOutput Paysle登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// Paysle取引登録入力パラメータを取得
		$entryTranPaysleInput =& $input->getEntryTranPaysleInput();
		// Paysle決済実行入力パラメータを取得
		$execTranPaysleInput =& $input->getExecTranPaysleInput();

		// Paysle登録・決済出力パラメータを生成
		$output = new EntryExecTranPaysleOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranPaysleInput->getAccessId();
		$accessPass = $execTranPaysleInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// Paysle取引登録を実行
			$this->log->debug("Paysle取引登録実行");
			$entryTranPaysle = new EntryTranPaysle();
			$entryTranPaysleOutput = $entryTranPaysle->exec($entryTranPaysleInput);

			if ($this->errorTrap($entryTranPaysle)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranPaysleOutput->getAccessId();
			$accessPass = $entryTranPaysleOutput->getAccessPass();
			$execTranPaysleInput->setAccessId($accessId);
			$execTranPaysleInput->setAccessPass($accessPass);

			$output->setEntryTranPaysleOutput($entryTranPaysleOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranPaysle = new ExecTranPaysle();
		$execTranPaysleOutput = $execTranPaysle->exec($execTranPaysleInput);

		$output->setExecTranPaysleOutput($execTranPaysleOutput);

		$this->errorTrap($execTranPaysle);

		return $output;
	}


}
?>
