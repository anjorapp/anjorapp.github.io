<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>ブランドトークン決済ブランドトークン登録／更新　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class TradedBrandtokenOutput extends BaseOutput {

	/**
	 * @var string トークン連番
	 */
	private $tokenSeq;
	/**
	 * @var string カード番号トークン
	 */
	private $cardNoToken;
	/**
	 * @var string 仕向先コード
	 */
	private $forward;


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
		$this->setCardNoToken($params->get('CardNoToken'));
		$this->setForward($params->get('Forward'));

	}

	/**
	 * トークン連番取得
	 * @return string トークン連番
	 */
	public function getTokenSeq() {
		return $this->tokenSeq;
	}
	/**
	 * カード番号トークン取得
	 * @return string カード番号トークン
	 */
	public function getCardNoToken() {
		return $this->cardNoToken;
	}
	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward() {
		return $this->forward;
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
	 * カード番号トークン設定
	 *
	 * @param string $cardNoToken
	 */
	public function setCardNoToken($cardNoToken) {
		$this->cardNoToken = $cardNoToken;
	}
	/**
	 * 仕向先コード設定
	 *
	 * @param string $forward
	 */
	public function setForward($forward) {
		$this->forward = $forward;
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
		$str .='&';
		$str .= 'CardNoToken=' . $this->encodeStr($this->getCardNoToken());
		$str .='&';
		$str .= 'Forward=' . $this->encodeStr($this->getForward());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
