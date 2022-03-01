<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>カード情報詳細カード詳細情報取得　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchCardDetailOutput extends BaseOutput {

	/**
	 * @var array カード番号（下四桁表示、以上マスク） カード番号を要素にもつ一次元配列
	 */
	private $cardNo;

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
	 * @var array  加盟店任意設定情報1 加盟店任意設定情報1を要素にもつ一次元配列
	 */
	private $info1;

	/**
	 * @var array  加盟店任意設定情報2 加盟店任意設定情報2を要素にもつ一次元配列
	 */
	private $info2;

	/**
	 * @var array  加盟店任意設定情報3 加盟店任意設定情報3を要素にもつ一次元配列
	 */
	private $info3;

	/**
	 * @var array  加盟店任意設定情報4 加盟店任意設定情報4を要素にもつ一次元配列
	 */
	private $info4;

	/**
	 * @var array  加盟店任意設定情報5 加盟店任意設定情報5を要素にもつ一次元配列
	 */
	private $info5;


	/**
	 * @var array カードの配列。カード情報の連想配列が繰り返される、二次元配列。例：
	 *
	 *	<code>
	 *	$cardList =
	 * 		array(
	 *			array(
	 *	 			'CardNo'	=>	'************1111',
	 * 				'Brand'	=>	'VISA'
	 * 				'DomesticFlag'	=>	'1'
	 * 				'IssuerCode'	=>	'2a99660'
	 * 				'DebitPrepaidFlag'	=>	'1'
	 * 				'DebitPrepaidIssuerName'	=>	'IssuerName'
	 * 				'ForwardFinal'	=>	'15250'
	 *				'Info1'			=>	'AAA'
	 *				'Info2'			=>	'BBB'
	 *				'Info3'			=>	'CCC'
	 *				'Info4'			=>	'DDD'
	 *				'Info5'			=>	'EEE'
	 *			),
	 *			array(
	 * 				'CardNo'	=>	'************2222',
	 * 				'Brand'	=>	'VISA'
	 * 				'DomesticFlag'	=>	'0'
	 * 				'IssuerCode'	=>	''
	 * 				'DebitPrepaidFlag'	=>	''
	 * 				'DebitPrepaidIssuerName'	=>	'IssuerName'
	 * 				'ForwardFinal'	=>	'15250'
	 *				'Info1'			=>	''
	 *				'Info2'			=>	'RRR'
	 *				'Info3'			=>	''
	 *				'Info4'			=>	'TTT'
	 *				'Info5'			=>	'UUU'
	 *			),
	 *  	)
	 * </code>
	 *
	 */
	private $cardList = null;


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
		//カードは複数返るので、全てマップに展開
		$cardArray = null;
		$tmp =  $params->get('CardNo');
		$cardNo					=	$params->get('CardNo');
		$brand					=	$params->get('Brand');
		$domesticFlag			=	$params->get('DomesticFlag');
		$issuerCode				=	$params->get('IssuerCode');
		$debitPrepaidFlag		=	$params->get('DebitPrepaidFlag');
		$debitPrepaidIssuerName	=	$params->get('DebitPrepaidIssuerName');
		$forwardFinal			=	$params->get('ForwardFinal');
		$info1                  =   $params->get('Info1');
		$info2                  =   $params->get('Info2');
		$info3                  =   $params->get('Info3');
		$info4                  =   $params->get('Info4');
		$info5                  =   $params->get('Info5');


		if( is_null( $cardNo ) ){
			return;
		}
		//項目ごとに配列として設定
		if( !is_null( $cardNo ) ){
			$this->setCardNo(explode('|',$cardNo ) );
		}
		if( !is_null( $brand ) ){
			$this->setBrand(explode('|',$brand ) );
		}
		if( !is_null( $domesticFlag ) ){
			$this->setDomesticFlag(explode('|',$domesticFlag ) );
		}
		if( !is_null( $issuerCode ) ){
			$this->setIssuerCode(explode('|',$issuerCode ) );
		}
		if( !is_null( $debitPrepaidIssuerName ) ){
			$this->setDebitPrepaidIssuerName(explode('|',$debitPrepaidIssuerName ) );
		}
		if( !is_null( $debitPrepaidFlag ) ){
			$this->setDebitPrepaidFlag(explode('|',$debitPrepaidFlag ) );
		}
		if( !is_null( $forwardFinal ) ){
			$this->setForwardFinal(explode('|',$forwardFinal ));
		}
		if( !is_null( $info1 ) ){
		    $this->setInfo1(explode('|', $info1 ));
		}
		if( !is_null( $info2 ) ){
		    $this->setInfo2(explode('|', $info2 ));
		}
		if( !is_null( $info3 ) ){
		    $this->setInfo3(explode('|', $info3 ));
		}
		if( !is_null( $info4 ) ){
		    $this->setInfo4(explode('|', $info4 ));
		}
		if( !is_null( $info5 ) ){
		    $this->setInfo5(explode('|', $info5 ));
		}

		//カード配列を作成
		$cardList = null;
		$count = count( $this->cardNo );
		for( $i = 0 ; $i < $count; $i++ ){
			$tmp = null;
			$tmp['CardNo']					= $this->cardNo[$i];
			$tmp['Brand']					= $this->brand[$i];
			$tmp['DomesticFlag']			= $this->domesticFlag[$i];
			$tmp['IssuerCode']				= $this->issuerCode[$i];
			$tmp['DebitPrepaidFlag']		= $this->debitPrepaidFlag[$i];
			$tmp['DebitPrepaidIssuerName']	= $this->debitPrepaidIssuerName[$i];
			$tmp['ForwardFinal']			= $this->forwardFinal[$i];
			$tmp['Info1']                   = $this->info1[$i];
			$tmp['Info2']                   = $this->info2[$i];
			$tmp['Info3']                   = $this->info3[$i];
			$tmp['Info4']                   = $this->info4[$i];
			$tmp['Info5']                   = $this->info5[$i];

			$cardList[]	=	$tmp;
		}
		$this->cardList = $cardList;
	}

	/**
	 * カード番号の配列取得
	 * @return array カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
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
	 * デビット／プリペイドフラグ
	 * @param array $debitPrepaidIssuerName イシュアコード
	 */
	public function getDebitPrepaidIssuerName() {
		return $this->debitPrepaidIssuerName;
	}

	/**
	 * デビット／プリペイドカード発行会社名
	 * @param array $debitPrepaidIssuerName デビット／プリペイドカード発行会社名
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
	 * 加盟店任意設定情報1
	 * @return array $info1 加盟店任意設定情報1
	 */
	public function getInfo1() {
	    return $this->info1;
	}

	/**
	 * 加盟店任意設定情報2
	 * @return array $info2 加盟店任意設定情報2
	 */
	public function getInfo2() {
	    return $this->info2;
	}

	/**
	 * 加盟店任意設定情報3
	 * @return array $info3 加盟店任意設定情報3
	 */
	public function getInfo3() {
	    return $this->info3;
	}

	/**
	 * 加盟店任意設定情報4
	 * @return array $info4 加盟店任意設定情報4
	 */
	public function getInfo4() {
	    return $this->info4;
	}

	/**
	 * 加盟店任意設定情報5
	 * @return array $info5 加盟店任意設定情報5
	 */
	public function getInfo5() {
	    return $this->info5;
	}

	/**
	 * カードリスト取得
	 * <p>
	 * 	　$cardListを返します
	 * </p>
	 * @return array カードリスト
	 */
	public function getCardList() {
		return $this->cardList;
	}

	/**
	 * カード番号設定
	 * @param array $cardNo カード番号
	 */
	public function setCardNo( $cardNo) {
		$this->cardNo = $cardNo;
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
	 * デビット／プリペイドフラグ
	 * @param array $debitPrepaidIssuerName イシュアコード
	 */
	public function setDebitPrepaidIssuerName($debitPrepaidIssuerName) {
		$this->debitPrepaidIssuerName = $debitPrepaidIssuerName;
	}

	/**
	 * デビット／プリペイドカード発行会社名
	 * @param array $debitPrepaidIssuerName デビット／プリペイドカード発行会社名
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
	 * 加盟店設定任意情報1
	 * @param array $info1 加盟店任意設定情報1
	 */
	public function setInfo1($info1) {
	    $this->info1 = $info1;
	}

	/**
	 * 加盟店設定任意情報2
	 * @param array $info2 加盟店任意設定情報2
	 */
	public function setInfo2($info2) {
	    $this->info2 = $info2;
	}

	/**
	 * 加盟店設定任意情報3
	 * @param array $info3 加盟店任意設定情報3
	 */
	public function setInfo3($info3) {
	    $this->info3 = $info3;
	}

	/**
	 * 加盟店設定任意情報4
	 * @param array $info4 加盟店任意設定情報4
	 */
	public function setInfo4($info4) {
	    $this->info4 = $info4;
	}

	/**
	 * 加盟店設定任意情報5
	 * @param array $info5 加盟店任意設定情報5
	 */
	public function setInfo5($info5) {
	    $this->info5 = $info5;
	}

	/**
	 * カードリスト設定
	 * @param array $cardList カードリスト設定
	 */
	public function setCardList($cardList) {
		$this->cardList = $cardList;
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
		$str .= 'CardNo='					. (is_null($this->cardNo)?'':implode('|',$this->cardNo));
		$str .= '&';
		$str .= 'Brand='					. (is_null($this->brand)?'':implode('|',$this->brand));
		$str .= '&';
		$str .= 'DomesticFlag='				. (is_null($this->domesticFlag)?'':implode('|',$this->domesticFlag));
		$str .= '&';
		$str .= 'IssuerCode='				. (is_null($this->issuerCode)?'':implode('|',$this->issuerCode));
		$str .= '&';
		$str .= 'DebitPrepaidFlag='			. (is_null($this->debitPrepaidFlag)?'':implode('|',$this->debitPrepaidFlag));
		$str .= '&';
		$str .= 'DebitPrepaidIssuerName='	. (is_null($this->debitPrepaidIssuerName)?'':implode('|',$this->debitPrepaidIssuerName));
		$str .= '&';
		$str .= 'ForwardFinal='				. (is_null($this->forwardFinal)?'':implode('|',$this->forwardFinal));
		$str .= '&';
		$str .= 'Info1='                    . (is_null($this->info1)?'':implode('|', $this->info1));
		$str .= '&';
		$str .= 'Info2='                    . (is_null($this->info2)?'':implode('|', $this->info2));
		$str .= '&';
		$str .= 'Info3='                    . (is_null($this->info3)?'':implode('|', $this->info3));
		$str .= '&';
		$str .= 'Info4='                    . (is_null($this->info4)?'':implode('|', $this->info4));
		$str .= '&';
		$str .= 'Info5='                    . (is_null($this->info5)?'':implode('|', $this->info5));

		if ($this->isErrorOccurred()) {
			// エラー文字列を連結して返す
			$errString = parent::toString();
			$str .= '&' . $errString;
		}

		return $str;
	}

}
?>
