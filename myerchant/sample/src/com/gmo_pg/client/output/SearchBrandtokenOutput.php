<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>ブランドトークン決済ブランドトークン参照　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchBrandtokenOutput extends BaseOutput {

	/**
	 * @var string トークン連番
	 */
	private $tokenSeq;
	/**
	 * @var string デフォルトフラグ
	 */
	private $defaultFlag;
	/**
	 * @var string カード名称
	 */
	private $cardName;
	/**
	 * @var string カード番号トークン
	 */
	private $cardNoToken;
	/**
	 * @var string 名義人
	 */
	private $holderName;
	/**
	 * @var string 削除フラグ
	 */
	private $deleteFlag;


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
		$this->setDefaultFlag($params->get('DefaultFlag'));
		$this->setCardName($params->get('CardName'));
		$this->setCardNoToken($params->get('CardNoToken'));
		$this->setHolderName($params->get('HolderName'));
		$this->setDeleteFlag($params->get('DeleteFlag'));

	}

	/**
	 * トークン連番取得
	 * @return string トークン連番
	 */
	public function getTokenSeq() {
		return $this->tokenSeq;
	}
	/**
	 * デフォルトフラグ取得
	 * @return string デフォルトフラグ
	 */
	public function getDefaultFlag() {
		return $this->defaultFlag;
	}
	/**
	 * カード名称取得
	 * @return string カード名称
	 */
	public function getCardName() {
		return $this->cardName;
	}
	/**
	 * カード番号トークン取得
	 * @return string カード番号トークン
	 */
	public function getCardNoToken() {
		return $this->cardNoToken;
	}
	/**
	 * 名義人取得
	 * @return string 名義人
	 */
	public function getHolderName() {
		return $this->holderName;
	}
	/**
	 * 削除フラグ取得
	 * @return string 削除フラグ
	 */
	public function getDeleteFlag() {
		return $this->deleteFlag;
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
	 * デフォルトフラグ設定
	 *
	 * @param string $defaultFlag
	 */
	public function setDefaultFlag($defaultFlag) {
		$this->defaultFlag = $defaultFlag;
	}
	/**
	 * カード名称設定
	 *
	 * @param string $cardName
	 */
	public function setCardName($cardName) {
		$this->cardName = $cardName;
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
	 * 名義人設定
	 *
	 * @param string $holderName
	 */
	public function setHolderName($holderName) {
		$this->holderName = $holderName;
	}
	/**
	 * 削除フラグ設定
	 *
	 * @param string $deleteFlag
	 */
	public function setDeleteFlag($deleteFlag) {
		$this->deleteFlag = $deleteFlag;
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
		$str .= 'DefaultFlag=' . $this->encodeStr($this->getDefaultFlag());
		$str .='&';
		$str .= 'CardName=' . $this->encodeStr($this->getCardName());
		$str .='&';
		$str .= 'CardNoToken=' . $this->encodeStr($this->getCardNoToken());
		$str .='&';
		$str .= 'HolderName=' . $this->encodeStr($this->getHolderName());
		$str .='&';
		$str .= 'DeleteFlag=' . $this->encodeStr($this->getDeleteFlag());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
