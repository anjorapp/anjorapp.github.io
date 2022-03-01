<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>カード登録　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class SaveCardOutput extends BaseOutput {

	/**
	 * @var integer 登録カード連番
	 */
	private $cardSeq;

	/**
	 * @var string カード番号（下四桁表示、以上マスク）
	 */
	private $cardNo;

	/**
	 * @var string 仕向先コード
	 */
	private $forward;

	/**
	 * @var array  国際ブランド  国際ブランドを要素にもつ一次元配列
	 */
	private $brand;

	/**
	 * @var array  国内発行フラグ  削除フラグを要素にもつ一次元配列
	 */
	private $domesticFlag;

	/**
	 * @var array  イシュアコード  イシュアコードを要素にもつ一次元配列
	 */
	private $issuerCode;

	/**
	 * @var array  デビット／プリペイドフラグ  デビット／プリペイドフラグを要素にもつ一次元配列
	 */
	private $debitPrepaidIssuerName;

	/**
	 * @var array  デビット／プリペイドカード発行会社名 デビット／プリペイドカード発行会社名を要素にもつ一次元配列
	 */
	private $debitPrepaidFlag;

	/**
	 * @var array  最終仕向先 最終仕向先を要素にもつ一次元配列
	 */
	private $forwardFinal;

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
        $this->setCardNo($params->get('CardNo'));
        $this->setForward($params->get('Forward'));

        $this->setBrand($params->get('Brand'));
        $this->setDomesticFlag($params->get('DomesticFlag'));
        $this->setIssuerCode($params->get('IssuerCode'));
        $this->setDebitPrepaidFlag($params->get('DebitPrepaidFlag'));
        $this->setDebitPrepaidIssuerName($params->get('DebitPrepaidIssuerName'));
        $this->setForwardFinal($params->get('ForwardFinal'));
	}

	/**
	 * カード登録連番取得
	 * @return integer カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}

	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}

	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward() {
		return $this->forward;
	}

	/**
	 * 国際ブランド設定
	 * @param array $brand 国際ブランド
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * 国内発行フラグ
	 * @param array $domesticFlagbrand 国内発行フラグ
	 */
	public function getDomesticFlag() {
		return $this->domesticFlag;
	}

	/**
	 * イシュアコード
	 * @param array $issuerCode イシュアコード
	 */
	public function getIssuerCode() {
		return $this->issuerCode;
	}

	/**
	 * デビット／プリペイドカード発行会社名
	 * @param array $debitPrepaidIssuerName デビット／プリペイドカード発行会社名
	 */
	public function getDebitPrepaidIssuerName() {
		return $this->debitPrepaidIssuerName;
	}

	/**
	 * デビット／プリペイドフラグ
	 * @param array $debitPrepaidIssuerName デビット／プリペイドフラグ
	 */
	public function getDebitPrepaidFlag() {
		return $this->debitPrepaidFlag;
	}

	/**
	 * 最終仕向先
	 * @param array $forwardFinal 最終仕向先
	 */
	public function getForwardFinal() {
		return $this->forwardFinal;
	}

	/**
	 * カード登録連番設定
	 * @param integer $cardSeq カード登録連番
	 */
	public function setCardSeq( $cardSeq) {
		$this->cardSeq =$cardSeq ;
	}

	/**
	 * カード番号設定
	 * @param string $cardNo カード番号
	 */
	public function setCardNo( $cardNo) {
		$this->cardNo = $cardNo;
	}

	/**
	 * 仕向先コード取得
	 * @param string $forward 仕向先コード
	 */
	public function setForward($forward) {
		$this->forward = $forward;
	}

	/**
	 * 国際ブランド設定
	 * @param array $brand 国際ブランド
	 */
	public function setBrand($brand) {
		$this->brand = $brand;
	}

	/**
	 * 国内発行フラグ
	 * @param array $domesticFlagbrand 国内発行フラグ
	 */
	public function setDomesticFlag($domesticFlagbrand) {
		$this->domesticFlag = $domesticFlagbrand;
	}

	/**
	 * イシュアコード
	 * @param array $issuerCode イシュアコード
	 */
	public function setIssuerCode($issuerCode) {
		$this->issuerCode = $issuerCode;
	}

	/**
	 * デビット／プリペイドカード発行会社名
	 * @param array $debitPrepaidIssuerName デビット／プリペイドカード発行会社名
	 */
	public function setDebitPrepaidIssuerName($debitPrepaidIssuerName) {
		$this->debitPrepaidIssuerName = $debitPrepaidIssuerName;
	}

	/**
	 * デビット／プリペイドフラグ
	 * @param array $debitPrepaidIssuerName デビット／プリペイドフラグ
	 */
	public function setDebitPrepaidFlag($debitPrepaidFlag) {
		$this->debitPrepaidFlag = $debitPrepaidFlag;
	}

	/**
	 * 最終仕向先
	 * @param array $forwardFinal 最終仕向先
	 */
	public function setForwardFinal($forwardFinal) {
		$this->forwardFinal = $forwardFinal;
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
	    $str .= '&';
	    $str .= 'CardNo=' . $this->getCardNo();
	    $str .= '&';
	    $str .= 'Forward=' . $this->getForward();

		if (!is_null($this->getBrand())) {
		    $str .= '&';
		    $str .= 'Brand='	.	$this->getBrand();
		    $str .= '&';
		    $str .= 'DomesticFlag='	.	$this->getDomesticFlag();
	    	$str .= '&';
		    $str .= 'IssuerCode='	.	$this->getIssuerCode();
	    	$str .= '&';
		    $str .= 'DebitPrepaidFlag='	.	$this->getDebitPrepaidFlag();
	    	$str .= '&';
		    $str .= 'DebitPrepaidIssuerName='	.	$this->getDebitPrepaidIssuerName();
	    	$str .= '&';
		    $str .= 'ForwardFinal='	.	$this->getForwardFinal();
	    }

	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>