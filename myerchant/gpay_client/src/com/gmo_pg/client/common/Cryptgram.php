<?php
require_once 'com/gmo_pg/client/common/Gmopg_Log.php';
require_once 'com/gmo_pg/client/common/GPayException.php';

/**
 * <b>暗号化プログラム</b>
 *
 *  クエリパラメータの暗号化を実行します。
 *
 * @package com.gmo_pg.client
 * @subpackage common
 * @author GMO PaymentGateway
 * @see commonPackageInfo.php
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class Cryptgram {

	/**
	 * @var Gmopg_Log GMO-PG独自のログクラス
	 */
	private $log;

    /**
     * @var GPayException 発生した例外
     */
    private $exception;

    /**
     * @var string BASE64復号時のデフォルト文字コード
     */
    /*var $DEFAULT_CHARSET_NAME = 'SJIS';*/
    private $DEFAULT_CHARSET_NAME = 'EUCJP';

    /**
     * @var string BASE64復号時の文字コード
     */
    private $charsetName;

    /**
     * コンストラクタ
     *
     * @param string $charset　Base64復号時の文字コード
     */
    public function __construct($charset = null) {
		// 初期化
        $this->log = new Gmopg_Log(get_class($this));
        $this->charsetName = is_null($charset) ? $this->DEFAULT_CHARSET_NAME : $charset;
    }


    /**
     * BASE64暗号化
     *
     * @param string $str    暗号化対象の文字列
     * @return string  暗号化後の文字列
     */
    public function encodeBase64($str) {
        if (!is_null($str)) {
            // 指定文字コードに変換してから暗号化
            $strValue = mb_convert_encoding($str, $this->charsetName, "EUC-JP,UTF-8,SJIS,ASCII");
            return base64_encode($strValue);
        }
        return null;
    }

    /**
     * BASE64複合化
     *
     * @param string $str    復号化対象の文字列
     * @return string  復号後の文字列
     */
    public function decodeBase64($str) {
        if (!is_null($str)) {
            // 先に複合化してから指定文字コードに変換
            $strValue = base64_decode($str);
            return mb_convert_encoding($strValue, $this->charsetName, "EUC-JP,UTF-8,SJIS,ASCII");
        }
        return null;
    }

	/**
	 * 例外発生有無
	 *
	 * <p>
	 *  例外が発生している場合trueを返します。
	 * </p>
	 *
	 * @return boolean 判定結果
	 */
	public function isExceptionOccured() {
		return false == is_null($this->exception);
	}

}
?>