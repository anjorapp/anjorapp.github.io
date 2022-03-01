<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>ブランドトークン決済ブランドトークン削除　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class DeleteBrandtokenOutput extends BaseOutput {

	/**
	 * @var string トークン連番
	 */
	private $tokenSeq;


	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params  出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
		if (is_null($params)) {
            return;
        }

        // マップの展開
		$this->setTokenSeq($params->get('TokenSeq'));

	}

	/**
	 * トークン連番取得
	 * @return string トークン連番
	 */
	public function getTokenSeq() {
		return $this->tokenSeq;
	}

	/**
	 * トークン連番設定
	 *
	 * @param string $tokenSeq
	 */
	public function setTokenSeq($tokenSeq) {
		$this->tokenSeq = $tokenSeq;
	}

	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'TokenSeq=' . $this->encodeStr($this->getTokenSeq());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
