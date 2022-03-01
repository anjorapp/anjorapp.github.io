<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>カード照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class SearchCardOutput extends BaseOutput {

	/**
	 * @var array 登録カード連番配列 カード登録連番を要素に持つ一次元配列
	 *
	 */
	private $cardSeq;

	/**
	 * @var array 洗替・継続課金フラグ配列  洗替・継続課金フラグを要素にもつ一次元配列 '1'=洗替・継続課金時に利用されるカード
	 *
	 */
	private $defaultFlag;

	/**
	 * @var array  カード会社略称配列 カード会社略称を要素にもつ一次元配列
	 */
	private $cardName;

	/**
	 * @var array カード番号（下四桁表示、以上マスク） カード番号を要素にもつ一次元配列
	 */
	private $cardNo;

	/**
	 * @var array 有効期限 有効期限を要素にもつ一次元配列
	 */
	private $expire;

	/**
	 * @var array カード名義人 カード名義人を要素にもつ一次元配列
	 */
	private $holderName;

	/**
	 * @var array  削除フラグ  削除フラグを配列にもつ一次元配列 '1'=削除カード
	 */
	private $deleteFlag;

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
	 * @var array カードの配列。カード情報の連想配列が繰り返される、二次元配列。例：
	 *
	 *	<code>
	 *	$cardList =
	 * 		array(
	 *			array(
	 *				'CardSeq' =>	1 ,
	 *				'DefaultFlag'	=>	'1',
	 * 				'CardName'	=>	'SUMITOMO'
	 *	 			'CardNo'	=>	'************1111',
	 * 				'Expire'	=>	'1308',
	 * 				'HolderName'	=>	'MEIGI NIN',
	 * 				'DeleteFlag'	=>	'0'
	 *			),
	 *			array(
	 *				'CardSeq' =>	2 ,
	 *				'DefaultFlag'	=>	'0',
	 * 				'CardName'	=>	'DINERS'
	 * 				'CardNo'	=>	'************2222',
	 *	 			'Expire'	=>	'0812',
	 * 				'HolderName'	=>	'MEIGI NIN',
	 * 				'DeleteFlag'	=>	'0'
	 *			),
	 *  	)
	 * </code>
	 *
	 *  カード詳細情報取得が利用可能な場合、下記の通り。
	 *	<code>
	 *	$cardList =
	 * 		array(
	 *			array(
	 *				'CardSeq' =>	1 ,
	 *				'DefaultFlag'	=>	'1',
	 * 				'CardName'	=>	'SUMITOMO'
	 *	 			'CardNo'	=>	'************1111',
	 * 				'Expire'	=>	'1308',
	 * 				'HolderName'	=>	'MEIGI NIN',
	 * 				'DeleteFlag'	=>	'0'
	 * 				'Brand'	=>	'VISA'
	 * 				'DomesticFlag'	=>	'1'
	 * 				'IssuerCode'	=>	'2a99660'
	 * 				'DebitPrepaidFlag'	=>	'1'
	 * 				'DebitPrepaidIssuerName'	=>	'IssuerName'
	 * 				'ForwardFinal'	=>	'15250'
	 *			),
	 *			array(
	 *				'CardSeq' =>	2 ,
	 *				'DefaultFlag'	=>	'0',
	 * 				'CardName'	=>	'DINERS'
	 * 				'CardNo'	=>	'************2222',
	 *	 			'Expire'	=>	'0812',
	 * 				'HolderName'	=>	'MEIGI NIN',
	 * 				'DeleteFlag'	=>	'0'
	 * 				'Brand'	=>	'VISA'
	 * 				'DomesticFlag'	=>	'0'
	 * 				'IssuerCode'	=>	''
	 * 				'DebitPrepaidFlag'	=>	''
	 * 				'DebitPrepaidIssuerName'	=>	'IssuerName'
	 * 				'ForwardFinal'	=>	'15250'
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
        $tmp =  $params->get('CardSeq');
        $cardSeq = $params->get('CardSeq');
        $default = $params->get('DefaultFlag');
        $cardName	=	$params->get('CardName');
        $cardNo		=	$params->get('CardNo');
        $expire		=	$params->get('Expire');
        $holderName	=	$params->get('HolderName');
        $delete		=	$params->get('DeleteFlag');
        $brand					=	$params->get('Brand');
        $domesticFlag			=	$params->get('DomesticFlag');
        $issuerCode				=	$params->get('IssuerCode');
        $debitPrepaidFlag		=	$params->get('DebitPrepaidFlag');
        $debitPrepaidIssuerName	=	$params->get('DebitPrepaidIssuerName');
        $forwardFinal			=	$params->get('ForwardFinal');


        if( is_null( $cardSeq ) ){
        	return;
        }
        //項目ごとに配列として設定
        if( !is_null( $cardSeq ) ){
        	$this->setCardSeq(	explode('|'	,$cardSeq ) );
        }
        if( !is_null( $default ) ){
        	$this->setDefaultFlag(	explode('|'	,$default ) );
        }
        if( !is_null( $cardName ) ){
        	$this->setCardName(explode('|',$cardName ) );
        }
        if( !is_null( $cardNo ) ){
        	$this->setCardNo(explode('|',$cardNo ) );
        }
        if( !is_null( $expire ) ){
        	$this->setExpire(explode('|',$expire ) );
        }
        if( !is_null( $holderName ) ){
        	$this->setHolderName(explode('|',$holderName ) );
        }
        if( !is_null( $delete ) ){
        	$this->setDeleteFlag(explode('|',$delete ) );
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

        //カード配列を作成
        $cardList = null;
        $count = count( $this->cardSeq );
        for( $i = 0 ; $i < $count; $i++ ){
        	$tmp = null;
        	$tmp['CardSeq']		=	$this->cardSeq[$i];
        	$tmp['DefaultFlag']	=	$this->defaultFlag[$i];
        	$tmp['CardName']	=	$this->cardName[$i];
        	$tmp['CardNo']		=	$this->cardNo[$i];
        	$tmp['Expire']		=	$this->expire[$i];
        	$tmp['HolderName']	=	$this->holderName[$i];
        	$tmp['DeleteFlag']	=	$this->deleteFlag[$i];

	        if( !is_null( $brand ) ){
	        	$tmp['Brand']				=	$this->brand[$i];
	       		$tmp['DomesticFlag']		=	$this->domesticFlag[$i];
	       		$tmp['IssuerCode']			=	$this->issuerCode[$i];
	       		$tmp['DebitPrepaidFlag']	=	$this->debitPrepaidFlag[$i];
	       		$tmp['DebitPrepaidIssuerName']	=	$this->debitPrepaidIssuerName[$i];
	       		$tmp['ForwardFinal']		=	$this->forwardFinal[$i];
	        }
        	$cardList[]	=	$tmp;
        }
        $this->cardList = $cardList;
	}

	/**
	 * カード登録連番配列の配列取得
	 * @return array カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}

	/**
	 * 洗替・継続課金対象フラグの配列取得
	 * @return array 洗替・継続課金対象フラグ
	 */
	public function getDefaultFlag(){
		return $this->defaultFlag;
	}

	/**
	 * カード会社略称の配列取得
	 * @return array カード会社略称
	 */
	public function getCardName(){
		return $this->cardName;
	}

	/**
	 * カード番号の配列取得
	 * @return array カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}

	/**
	 * 有効期限配列取得
	 * @return array 有効期限(YYMM)
	 */
	public function getExpire() {
		return $this->expire;
	}

	/**
	 * カード名義人名の配列取得
	 * @return array カード名義人
	 */
	public function getHolderName() {
		return $this->holderName;
	}

	/**
	 * 削除フラグ配列取得
	 * @return array 削除フラグ
	 */
	public function getDeleteFlag() {
		return $this->deleteFlag;
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
	 * カード登録連番設定
	 * @param array $cardSeq カード登録連番
	 */
	public function setCardSeq( $cardSeq) {
		$this->cardSeq =$cardSeq ;
	}

	/**
	 * 洗替・継続課金対象フラグ設定
	 *
	 * @param array $defaultFlag 洗替・継続課金対象フラグ
	 */
	public function setDefaultFlag($defaultFlag) {
		$this->defaultFlag = $defaultFlag;
	}

	/**
	 * カード会社略称設定
	 *
	 * @param array $cardName カード会社略称
	 */
	public function setCardName($cardName) {
		$this->cardName = $cardName;
	}

	/**
	 * カード番号設定
	 * @param array $cardNo カード番号
	 */
	public function setCardNo( $cardNo) {
		$this->cardNo = $cardNo;
	}

	/**
	 * 有効期限設定
	 *
	 * @param array $expire 有効期限(YYMM)
	 */
	public function setExpire($expire) {
		$this->expire = $expire;
	}

	/**
	 * カード名義人設定
	 *
	 * @param array $holderName カード名義人
	 */
	public function setHolderName($holderName) {
		$this->holderName = $holderName;
	}

	/**
	 * 削除フラグ設定
	 * @param array $deleteFlag 削除フラグ
	 */
	public function setDeleteFlag($deleteFlag) {
		$this->deleteFlag = $deleteFlag;
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
	    $str  = 'CardSeq='		.	(is_null($this->cardSeq)? '' : implode('|',$this->cardSeq));
	    $str .= '&';
	    $str .= 'DefaultFlag='	.	 (is_null($this->defaultFlag)? '' : implode('|',$this->defaultFlag));
	    $str .= '&';
		$str .= 'CardName='		.	(is_null($this->cardName)?'':implode('|',$this->cardName));
	    $str .= '&';
	    $str .= 'CardNo='		.	(is_null($this->cardNo)?'':implode('|',$this->cardNo));
	    $str .= '&';
		$str .= 'Expire='		.	(is_null($this->expire)?'':implode('|',$this->expire));
	    $str .= '&';
		$str .= 'HolderName='	.	(is_null($this->holderName)?'':implode('|' ,$this->holderName));
	    $str .= '&';
	    $str .= 'DeleteFlag='	.	(is_null($this->deleteFlag)?'':implode('|',$this->deleteFlag));

	    if (!is_null($this->brand)) {
		    $str .= '&';
		    $str .= 'Brand='	.	(is_null($this->brand)?'':implode('|',$this->brand));
		    $str .= '&';
		    $str .= 'DomesticFlag='	.	(is_null($this->domesticFlag)?'':implode('|',$this->domesticFlag));
	    	$str .= '&';
		    $str .= 'IssuerCode='	.	(is_null($this->issuerCode)?'':implode('|',$this->issuerCode));
	    	$str .= '&';
		    $str .= 'DebitPrepaidFlag='	.	(is_null($this->debitPrepaidFlag)?'':implode('|',$this->debitPrepaidFlag));
	    	$str .= '&';
		    $str .= 'DebitPrepaidIssuerName='	.	(is_null($this->debitPrepaidIssuerName)?'':implode('|',$this->debitPrepaidIssuerName));
	    	$str .= '&';
		    $str .= 'ForwardFinal='	.	(is_null($this->forwardFinal)?'':implode('|',$this->forwardFinal));
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