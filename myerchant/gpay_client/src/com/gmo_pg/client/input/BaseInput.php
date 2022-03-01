<?php
require_once 'com/gmo_pg/client/common/Gmopg_Log.php';
require_once 'com/gmo_pg/client/common/IgnoreCaseMap.php';
/**
 * <b>API入力パラメータ基底クラス</b>
 *
 * @abstract
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class BaseInput {

	/**
	 * @var Gmopg_Log
	 */
	private $log;

	/**
	 * コンストラクタ
	 *
	 * @param array $params    入力パラメータ
	 */
	public function __construct($params = null) {
		$this->log = new Gmopg_Log(get_class($this));

		// 入力パラメータのマップを変換
		$convertMap = $this->convertParamsMap($params);
		// デフォルト値設定
		$this->setDefaultValues();
		if (is_null($params)) {
			return;
		}
		// 入力パラメータ群の値を設定
		$this->setInputValues($convertMap);
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
	 * 入力パラメータ値取得
	 *
	 * <p>
	 * 指定のパラメータが見つからなかったときはデフォルト値を返す
	 *</p>
	 * @param IgnoreCaseMap $params    入力パラメータ
	 * @param string $name    パラメータ名
	 * @param mixed $defaultValue    デフォルト値
	 */
	protected function getParameterValue($params, $name, $defaultValue) {
		if (false == $params->containsKey($name)) {
			return $defaultValue;
		}
		return $params->get($name);
	}

	/**
	 * 入力パラメータ値取得
	 *
	 * @param IgnoreCaseMap $params    入力パラメータ
	 * @param string $name    パラメータ名
	 * @param mixed $defaultValue    デフォルト値
	 * @return string 入力パラメータの値
	 */
	protected function getStringValue($params, $name, $defaultValue) {
		return $this->getParameterValue($params, $name, $defaultValue);
	}

	/**
	 * 入力パラメータ数値取得
	 *
	 * <p>
	 *  $nameパラメータを返却する。値が数値以外の場合、nullを返却する。
	 * </p>
	 * @param IgnoreCaseMap $params    入力パラメータ
	 * @param string $name    パラメータ名
	 * @param string $defaultValue    デフォルト値
	 * @return integer 入力パラメータの値
	 */
	protected function getIntegerValue($params, $name, $defaultValue) {
		if (false == $params->containsKey($name)) {
			return $defaultValue;
		}
		$value = $params->get($name);
		return is_numeric($value) ? $value : null;
	}

	/**
	 * 入力パラメータ変換
	 *
	 * <p>
	 *  パラメータのarrayからIgnoreCaseMapを生成して返す。
	 * </p>
	 *
	 * @param array $params    入力パラメータ
	 */
	protected function convertParamsMap($params) {
		if (is_null($params)) {
			return null;
		}

		$convert = array();
		foreach ($params as $key => $value) {
			if (is_array($value)) {
				$values = $value;
				if (0 == count($values)) {
					$value = "";
				}
				else {
					$value = $values[0];
				}
			}
			$convert[$key] = $value;
		}

		return new IgnoreCaseMap($convert);
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

	/**
	 * デフォルト値を設定する
	 */
	protected function setDefaultValues() {
	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param params    入力パラメータ
	 */
	protected function setInputValues($params) {
	}

}
?>