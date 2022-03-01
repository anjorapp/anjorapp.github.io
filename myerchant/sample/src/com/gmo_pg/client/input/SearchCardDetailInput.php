<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>カード情報詳細カード詳細情報取得　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchCardDetailInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string カード番号
	 */
	private $cardNo;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string カード登録連番モード
	 */
	private $seqMode;
	/**
	 * @var string カード登録連番
	 */
	private $cardSeq;
	/**
	 * @var string トークン
	 */
	private $token;
	/**
	 * @var string 検索タイプ
	 */
	private $searchType;

	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->shopPass;
	}
	/**
	 * カード番号取得
	 * @return string カード番号
	 */
	public function getCardNo() {
		return $this->cardNo;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * サイトパスワード取得
	 * @return string サイトパスワード
	 */
	public function getSitePass() {
		return $this->sitePass;
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * カード登録連番モード取得
	 * @return string カード登録連番モード
	 */
	public function getSeqMode() {
		return $this->seqMode;
	}
	/**
	 * カード登録連番取得
	 * @return string カード登録連番
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}
	/**
	 * トークン
	 * @return string トークン
	 */
	public function getToken() {
		return $this->token;
	}
	/**
	 * 検索タイプ
	 * @return string 検索タイプ
	 */
	public function getSearchType() {
	    return $this->searchType;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopID
	 */
	public function setShopID($shopID) {
		$this->shopID = $shopID;
	}
	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}
	/**
	 * カード番号設定
	 *
	 * @param string $cardNo
	 */
	public function setCardNo($cardNo) {
		$this->cardNo = $cardNo;
	}
	/**
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}
	/**
	 * サイトID設定
	 *
	 * @param string $siteID
	 */
	public function setSiteID($siteID) {
		$this->siteID = $siteID;
	}
	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}
	/**
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * カード登録連番モード設定
	 *
	 * @param string $seqMode
	 */
	public function setSeqMode($seqMode) {
		$this->seqMode = $seqMode;
	}
	/**
	 * カード登録連番設定
	 *
	 * @param string $cardSeq
	 */
	public function setCardSeq($cardSeq) {
		$this->cardSeq = $cardSeq;
	}
	/**
	 * トークン
	 *
	 * @param string $token
	 */
	public function setToken($token) {
		$this->token = $token;
	}
	/**
	 * 検索タイプ
	 *
	 * @param string $searchType
	 */
	public function setSearchType($searchType) {
	    $this->searchType = $searchType;
	}

	/**
	 * デフォルト値設定
	 */
	public function setDefaultValues() {

	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

		$this->setShopID($this->getStringValue($params, 'ShopID', $this->getShopID()));
		$this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
		$this->setCardNo($this->getStringValue($params, 'CardNo', $this->getCardNo()));
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
		$this->setSeqMode($this->getStringValue($params, 'SeqMode', $this->getSeqMode()));
		$this->setCardSeq($this->getStringValue($params, 'CardSeq', $this->getCardSeq()));
		$this->setToken($this->getStringValue($params, 'Token', $this->getToken()));
		$this->setSearchType($this->getStringValue($params, 'SearchType', $this->getSearchType()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'ShopID=' . $this->encodeStr($this->getShopID());
		$str .='&';
		$str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
		$str .='&';
		$str .= 'CardNo=' . $this->encodeStr($this->getCardNo());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'SeqMode=' . $this->encodeStr($this->getSeqMode());
		$str .='&';
		$str .= 'CardSeq=' . $this->encodeStr($this->getCardSeq());
		$str .='&';
		$str .= 'Token=' . $this->encodeStr($this->getToken());
		$str .='&';
		$str .= 'SearchType=' . $this->encodeStr($this->getSearchType());

	    return $str;
	}


}
?>
