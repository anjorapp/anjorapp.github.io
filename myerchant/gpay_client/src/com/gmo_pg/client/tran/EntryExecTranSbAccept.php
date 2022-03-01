<?php
require_once 'com/gmo_pg/client/output/EntryExecTranSbAcceptOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranSbAccept.php';
require_once 'com/gmo_pg/client/tran/ExecTranSbAccept.php';
/**
 * <b>ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranSbAccept {
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
	 * ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録・決済を実行する
	 *
	 * @param EntryExecTranSbAcceptInput $input    ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録・決済入力パラメータ
	 * @return  EntryExecTranSbAcceptOutput ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// ソフトバンクまとめて支払い(Ｂ)(利用承諾)取引登録入力パラメータを取得
		$entryTranSbAcceptInput =& $input->getEntryTranSbAcceptInput();
		// ソフトバンクまとめて支払い(Ｂ)(利用承諾)決済実行入力パラメータを取得
		$execTranSbAcceptInput =& $input->getExecTranSbAcceptInput();

		// ソフトバンクまとめて支払い(Ｂ)(利用承諾)登録・決済出力パラメータを生成
		$output = new EntryExecTranSbAcceptOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranSbAcceptInput->getAccessId();
		$accessPass = $execTranSbAcceptInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// ソフトバンクまとめて支払い(Ｂ)(利用承諾)取引登録を実行
			$this->log->debug("ソフトバンクまとめて支払い(Ｂ)(利用承諾)取引登録実行");
			$entryTranSbAccept = new EntryTranSbAccept();
			$entryTranSbAcceptOutput = $entryTranSbAccept->exec($entryTranSbAcceptInput);

			if ($this->errorTrap($entryTranSbAccept)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranSbAcceptOutput->getAccessId();
			$accessPass = $entryTranSbAcceptOutput->getAccessPass();
			$execTranSbAcceptInput->setAccessId($accessId);
			$execTranSbAcceptInput->setAccessPass($accessPass);

			$output->setEntryTranSbAcceptOutput($entryTranSbAcceptOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranSbAccept = new ExecTranSbAccept();
		$execTranSbAcceptOutput = $execTranSbAccept->exec($execTranSbAcceptInput);

		$output->setExecTranSbAcceptOutput($execTranSbAcceptOutput);

		$this->errorTrap($execTranSbAccept);

		return $output;
	}


}
?>
