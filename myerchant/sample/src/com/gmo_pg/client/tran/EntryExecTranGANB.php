<?php
require_once 'com/gmo_pg/client/output/EntryExecTranGANBOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranGANB.php';
require_once 'com/gmo_pg/client/tran/ExecTranGANB.php';
/**
 * <b>GANB登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranGANB {
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
	 * GANB登録・決済を実行する
	 *
	 * @param EntryExecTranGANBInput $input    GANB登録・決済入力パラメータ
	 * @return  EntryExecTranGANBOutput GANB登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// GANB取引登録入力パラメータを取得
		$entryTranGANBInput =& $input->getEntryTranGANBInput();
		// GANB決済実行入力パラメータを取得
		$execTranGANBInput =& $input->getExecTranGANBInput();

		// GANB登録・決済出力パラメータを生成
		$output = new EntryExecTranGANBOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranGANBInput->getAccessId();
		$accessPass = $execTranGANBInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// GANB取引登録を実行
			$this->log->debug("GANB取引登録実行");
			$entryTranGANB = new EntryTranGANB();
			$entryTranGANBOutput = $entryTranGANB->exec($entryTranGANBInput);

			if ($this->errorTrap($entryTranGANB)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranGANBOutput->getAccessId();
			$accessPass = $entryTranGANBOutput->getAccessPass();
			$execTranGANBInput->setAccessId($accessId);
			$execTranGANBInput->setAccessPass($accessPass);

			$output->setEntryTranGANBOutput($entryTranGANBOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranGANB = new ExecTranGANB();
		$execTranGANBOutput = $execTranGANB->exec($execTranGANBInput);

		$output->setExecTranGANBOutput($execTranGANBOutput);

		$this->errorTrap($execTranGANB);

		return $output;
	}


}
?>
