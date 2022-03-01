<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>カード削除 出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class DeleteCardOutput extends BaseOutput {

	/**
	 * @var integer 登録カード連番
	 */
	private $cardSeq;

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
        $this->setCardSeq($params->get('CardSeq'));
	}

	/**
	 * カード登録連番取得
	 * @return Integer カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}

	/**
	 * カード登録連番設定
	 * @param Integer $cardSeq カード登録連番
	 */
	public function setCardSeq( $cardSeq) {
		$this->cardSeq =$cardSeq ;
	}

	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
	    $str  = 'CardSeq=' . $this->getCardSeq();

	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>