<?php
require_once 'com/gmo_pg/client/output/EntryExecTranDocomoAcceptOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranDocomoAccept.php';
require_once 'com/gmo_pg/client/tran/ExecTranDocomoAccept.php';
/**
 * <b>ドコモ払い_随時決済登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranDocomoAccept {
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
	 * ドコモ払い_随時決済登録・決済を実行する
	 *
	 * @param EntryExecTranDocomoAcceptInput $input    ドコモ払い_随時決済登録・決済入力パラメータ
	 * @return  EntryExecTranDocomoAcceptOutput ドコモ払い_随時決済登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// ドコモ払い_随時決済取引登録入力パラメータを取得
		$entryTranDocomoAcceptInput =& $input->getEntryTranDocomoAcceptInput();
		// ドコモ払い_随時決済決済実行入力パラメータを取得
		$execTranDocomoAcceptInput =& $input->getExecTranDocomoAcceptInput();

		// ドコモ払い_随時決済登録・決済出力パラメータを生成
		$output = new EntryExecTranDocomoAcceptOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranDocomoAcceptInput->getAccessId();
		$accessPass = $execTranDocomoAcceptInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// ドコモ払い_随時決済取引登録を実行
			$this->log->debug("ドコモ払い_随時決済取引登録実行");
			$entryTranDocomoAccept = new EntryTranDocomoAccept();
			$entryTranDocomoAcceptOutput = $entryTranDocomoAccept->exec($entryTranDocomoAcceptInput);

			if ($this->errorTrap($entryTranDocomoAccept)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranDocomoAcceptOutput->getAccessId();
			$accessPass = $entryTranDocomoAcceptOutput->getAccessPass();
			$execTranDocomoAcceptInput->setAccessId($accessId);
			$execTranDocomoAcceptInput->setAccessPass($accessPass);

			$output->setEntryTranDocomoAcceptOutput($entryTranDocomoAcceptOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranDocomoAccept = new ExecTranDocomoAccept();
		$execTranDocomoAcceptOutput = $execTranDocomoAccept->exec($execTranDocomoAcceptInput);

		$output->setExecTranDocomoAcceptOutput($execTranDocomoAcceptOutput);

		$this->errorTrap($execTranDocomoAccept);

		return $output;
	}


}
?>
