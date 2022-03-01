<?php
require_once 'com/gmo_pg/client/output/EntryExecTranBrandtokenOutput.php';
require_once 'com/gmo_pg/client/tran/EntryTranBrandtoken.php';
require_once 'com/gmo_pg/client/tran/ExecTranBrandtoken.php';
/**
 * <b>ブランドトークン決済登録・決済一括実行　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryExecTranBrandtoken {
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
	 * ブランドトークン決済登録・決済を実行する
	 *
	 * @param EntryExecTranBrandtokenInput $input    ブランドトークン決済登録・決済入力パラメータ
	 * @return  EntryExecTranBrandtokenOutput ブランドトークン決済登録・決済出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {
		// ブランドトークン決済取引登録入力パラメータを取得
		$entryTranBrandtokenInput =& $input->getEntryTranBrandtokenInput();
		// ブランドトークン決済決済実行入力パラメータを取得
		$execTranBrandtokenInput =& $input->getExecTranBrandtokenInput();

		// ブランドトークン決済登録・決済出力パラメータを生成
		$output = new EntryExecTranBrandtokenOutput();

		// 取引ID、取引パスワードを取得
		$accessId = $execTranBrandtokenInput->getAccessId();
		$accessPass = $execTranBrandtokenInput->getAccessPass();

		// 取引ID、取引パスワードが設定されていないとき
		if (is_null($accessId) || 0 == strlen($accessId) || is_null($accessPass)) {
			// ブランドトークン決済取引登録を実行
			$this->log->debug("ブランドトークン決済取引登録実行");
			$entryTranBrandtoken = new EntryTranBrandtoken();
			$entryTranBrandtokenOutput = $entryTranBrandtoken->exec($entryTranBrandtokenInput);

			if ($this->errorTrap($entryTranBrandtoken)) {
				return $output;
			}

			// 取引ID、取引パスワードを決済実行用のパラメータに設定
			$accessId = $entryTranBrandtokenOutput->getAccessId();
			$accessPass = $entryTranBrandtokenOutput->getAccessPass();
			$execTranBrandtokenInput->setAccessId($accessId);
			$execTranBrandtokenInput->setAccessPass($accessPass);

			$output->setEntryTranBrandtokenOutput($entryTranBrandtokenOutput);
		}

		$this->log->debug("取引ID : [$accessId]  取引パスワード : [$accessPass]");

		// 取引登録でエラーが起きたとき決済を実行せずに戻る
		if ($output->isEntryErrorOccurred()) {
			$this->log->debug("<<<取引登録失敗>>>");
			return $output;
		}

		// 決済実行
		$this->log->debug("決済実行");
		$execTranBrandtoken = new ExecTranBrandtoken();
		$execTranBrandtokenOutput = $execTranBrandtoken->exec($execTranBrandtokenInput);

		$output->setExecTranBrandtokenOutput($execTranBrandtokenOutput);

		$this->errorTrap($execTranBrandtoken);

		return $output;
	}


}
?>
