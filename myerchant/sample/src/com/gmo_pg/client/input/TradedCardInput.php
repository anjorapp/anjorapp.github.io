<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>取引後カード登録　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class TradedCardInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopId;

	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;

	/**
	 * @var string オーダーID
	 */
	private $orderId;

	/**
	 * @var string サイトID
	 */
	private $siteId;

	/**
	 * @var string サイトパスワード
	 */
	private $sitePass;

	/**
	 * @var string 会員ID
	 */
	private $memberId;

	/**
	 * @var string カード連番モード
	 */
	private $seqMode;

	/**
	 * @var string 洗替・継続課金フラグ
	 */
	private $defaultFlag;

	/**
	 * @var integer カード登録連番
	 */
	private $cardSeq;

	/**
	 * @var string 名義人
	 */
	private $holderName;

	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}

	/**
	 * デフォルト値を設定する
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

		// 各項目の設定(PayTimesは値が数値でないものは無効とする)
		$this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
		$this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
		$this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
		$this->setSiteId($this->getStringValue($params, 'SiteID', $this->getSiteId()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setMemberId($this->getStringValue($params,'MemberID',$this->getMemberId()));
		$this->setSeqMode($this->getStringValue($params,'SeqMode',$this->getSeqMode()));
		$this->setDefaultFlag($this->getStringValue($params, 'DefaultFlag', $this->getDefaultFlag()));
		$this->setCardSeq($this->getIntegerValue($params, 'CardSeq', $this->getCardSeq()));
		$this->setHolderName($this->getStringValue($params, 'HolderName', $this->getHolderName()));
	}


	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopId() {
		return $this->shopId;
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->shopPass;
	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteId() {
		return $this->siteId;
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
	public function getMemberId(){
		return $this->memberId;
	}

	/**
	 * カード連番指定モード取得
	 * @return string カード連番指定モード
	 */
	public function getSeqMode(){
		return $this->seqMode;
	}

	/**
	 * 洗替・継続課金フラグ取得
	 * @retrun string 洗替・継続課金フラグ
	 */
	public function getDefaultFlag() {
		return $this->defaultFlag;
	}

	/**
	 * カード登録番号
	 * @return integer number カード登録番号
	 */
	public function getCardSeq() {
		return $this->cardSeq;
	}

	/**
	 * 名義人取得
	 * @return string 名義人
	 */
	public function getHolderName() {
		return $this->holderName;
	}

	/**
	 * ショップID設定
	 *
	 * @param string $shopId ショップID
	 */
	public function setShopId($shopId) {
		$this->shopId = $shopId;
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass ショップパスワード
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}

	/**
	 * オーダーID設定
	 *
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * 会員ID設定
	 * @param string $memberId 会員ID
	 */
	public function setMemberId($memberId){
		$this->memberId = $memberId;
	}

	/**
	 * カード連番指定モード設定
	 * @param string $seqMode カード連番指定モード
	 */
	public function setSeqMode($seqMode){
		$this->seqMode = $seqMode;
	}

	/**
	 * サイトID設定
	 *
	 * @param string $siteId サイトID
	 */
	public function setSiteId($siteId) {
		$this->siteId = $siteId;
	}

	/**
	 * サイトパスワード設定
	 *
	 * @param string $sitePass サイトパスワード
	 */
	public function setSitePass($sitePass) {
		$this->sitePass = $sitePass;
	}

	/**
	 * 洗替・継続課金フラグ設定
	 * @param string $defaultFlag 洗替・継続課金フラグ
	 */
	public function setDefaultFlag($defaultFlag) {
		$this->defaultFlag = $defaultFlag;
	}

	/**
	 * カード登録連番
	 * @param integer $cardSeq カード登録連番
	 */
	public function setCardSeq($cardSeq) {
		$this->cardSeq = $cardSeq;
	}

	/**
	 * 名義人設定
	 * @param string $holderName 名義人
	 */
	public function setHolderName($holderName) {
		$this->holderName = $holderName;
	}

	/**
	 * 文字列表現
	 * URLのパラメータ文字列の形式の文字列を生成する
	 * @return string 接続文字列表現
	 */
	public function toString() {

		$str  = 'ShopID=' . $this->encodeStr($this->getShopId());
		$str .= '&';
		$str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
		$str .= '&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
		$str .= '&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteId());
		$str .= '&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .= '&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberId());
		$str .= '&';
		$str .= 'SeqMode=' . $this->encodeStr($this->getSeqMode());
		$str .= '&';
		$str .= 'DefaultFlag=' . $this->encodeStr($this->getDefaultFlag());
		$str .= '&';
		$str .= 'CardSeq=' . $this->encodeStr($this->getCardSeq());
		$str .= '&';
		$str .= 'HolderName=' . $this->encodeStr($this->getHolderName());

		return $str;
	}
}
?>