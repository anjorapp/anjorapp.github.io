<?php
require_once 'com/gmo_pg/client/output/EntryExecTranBankaccountOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranBankaccount.php';
require_once 'com/gmo_pg/client/tran/ExecTranBankaccount.php';
/**
 * <b>口振セレクト登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranBankaccount {
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
	 * 口振セレクト登録・決済を実行する
	 *
	 * @param EntryExecTranBankaccountInput $input    口振セレクト登録・決済入力パラメータ
	 * @return  EntryExecTranBankaccountOutput 口振セレクト登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// 口振セレクト取引登録入力パラメータを取得
		$entryTranBankaccountInput =& $input->getEntryTranBankaccountInput();
		// 口振セレクト決済実行入力パラメータを取得
		$execTranBankaccountInput =& $input->getExecTranBankaccountInput();

		// 口振セレクト登録・決済出力パラメータを生成
		$output = new EntryExecTranBankaccountOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranBankaccountInput->getAccessId();
		$accessPass = $execTranBankaccountInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// 口振セレクト取引登録を実行
			$this->log->debug("口振セレクト取引登録実行");
			$entryTranBankaccount = new EntryTranBankaccount();
			$entryTranBankaccountOutput = $entryTranBankaccount->exec($entryTranBankaccountInput);

			if ($this->errorTrap($entryTranBankaccount)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranBankaccountOutput->getAccessId();
			$accessPass = $entryTranBankaccountOutput->getAccessPass();
			$execTranBankaccountInput->setAccessId($accessId);
			$execTranBankaccountInput->setAccessPass($accessPass);

			$output->setEntryTranBankaccountOutput($entryTranBankaccountOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranBankaccount = new ExecTranBankaccount();
		$execTranBankaccountOutput = $execTranBankaccount->exec($execTranBankaccountInput);

		$output->setExecTranBankaccountOutput($execTranBankaccountOutput);

		$this->errorTrap($execTranBankaccount);

		return $output;
	}


}
?>
