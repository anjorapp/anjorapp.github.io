<?php
require_once 'com/gmo_pg/client/common/ParamParser.php';
/**
 * @abstract
 * <b>出力パラメータ 基底クラス</b>
 *
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class BaseOutput {

	/**
	 * @var array エラー情報リスト ErrHolderオブジェクトの配列
	 */
	private $errList;

	/**
	 * @var string CSV形式のレスポンス
	 */
	private $csvResponse;

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->errList = array();
		if (is_null($params)) {
			return;
		}

		// エラーパラメータを解析してリストに保持
		$errCode = $params->containsKey('errCode') ? $params->get('errCode') : null;
		$errInfo = $params->containsKey('errInfo') ? $params->get('errInfo') : null;
		if ($errCode && $errInfo) {
			$errCode = preg_replace('/\|$/', '', $errCode);
			$errInfo = preg_replace('/\|$/', '', $errInfo);

			$parser = new ParamParser();
			$this->errList = $parser->errParse($errCode, $errInfo);
		}
		$this->csvResponse = $params->containsKey('csvResponse') ? $params->get('csvResponse') : null;
	}

	/**
	 * エラー情報リスト取得
	 * @return array エラーリスト
	 */
	public function &getErrList() {
		return $this->errList;
	}

	/**
	 * エラー情報リストを設定
	 *
	 * @param array $errList
	 */
	public function setErrList(&$errList) {
		$this->errList = $errList;
	}

	/**
	 * CSVレスポンス取得
	 * @return string CSVレスポンス
	 */
	public function getCsvResponse() {
		return $this->csvResponse;
	}

	/**
	 * CSVレスポンス設定
	 *
	 * @param string $csvResponse
	 */
	public function setCsvResponse($csvResponse) {
		$this->csvResponse = $csvResponse;
	}

	/**
	 * エラー発生判定
	 * @return boolean エラー発生フラグ(true=エラーあり)
	 */
	public function isErrorOccurred() {
		return 0 != count($this->errList);
	}

	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	protected function toString() {
		$errCodeBuffer = 'errCode=';
		$errInfoBuffer = 'errInfo=';

		// 各エラーコードとエラー詳細を連結した文字列を生成
		foreach ($this->errList as $errHolder) {
			$errCodeBuffer .= $errHolder->getErrCode() . '|';
			$errInfoBuffer .= $errHolder->getErrInfo() . '|';
		}

		return $errCodeBuffer . '&' . $errInfoBuffer;
	}

	/**
	 * 指定のオブジェクトのURLエンコード文字列表現取得
	 *
	 * @param mixed $obj    変換対象オブジェクト
	 * @return string 変換後の文字列
	 */
	protected function encodeStr($obj) {
		$strValue = $this->nullToEmpty($obj);
		$strValue = urlencode($strValue);
		return $strValue;
	}

	/**
     * 文字列がnullだったら空、それ以外なら元の文字列を返す
     *
     * @param mixed $obj 変換対象オブジェクト
     * @return mixed 変換後の文字列
	 */
    protected function nullToEmpty($obj) {
        return is_null($obj) ? "" : $obj;
    }

}
?>