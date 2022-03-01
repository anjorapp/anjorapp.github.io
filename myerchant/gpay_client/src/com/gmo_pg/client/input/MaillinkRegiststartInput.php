<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>メールリンクカード登録　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class MaillinkRegiststartInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string 実行モード
	 */
	private $execMode;
	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string 会員名
	 */
	private $memberName;
	/**
	 * @var string メールリンク注文番号
	 */
	private $mailLinkOrderNo;
	/**
	 * @var string メールアドレス
	 */
	private $mailAddress;
	/**
	 * @var string メッセージ言語
	 */
	private $lang;
	/**
	 * @var integer テンプレートNo.
	 */
	private $templateNo;
	/**
	 * @var integer 有効日数
	 */
	private $expireDays;


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
	 * 実行モード取得
	 * @return string 実行モード
	 */
	public function getExecMode() {
		return $this->execMode;
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->memberName;
	}
	/**
	 * メールリンク注文番号取得
	 * @return string メールリンク注文番号
	 */
	public function getMailLinkOrderNo() {
		return $this->mailLinkOrderNo;
	}
	/**
	 * メールアドレス取得
	 * @return string メールアドレス
	 */
	public function getMailAddress() {
		return $this->mailAddress;
	}
	/**
	 * メッセージ言語取得
	 * @return string メッセージ言語
	 */
	public function getLang() {
		return $this->lang;
	}
	/**
	 * テンプレートNo.取得
	 * @return integer テンプレートNo.
	 */
	public function getTemplateNo() {
		return $this->templateNo;
	}
	/**
	 * 有効日数取得
	 * @return integer 有効日数
	 */
	public function getExpireDays() {
		return $this->expireDays;
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
	 * 実行モード設定
	 *
	 * @param string $execMode
	 */
	public function setExecMode($execMode) {
		$this->execMode = $execMode;
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
	 * 会員ID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * 会員名設定
	 *
	 * @param string $memberName
	 */
	public function setMemberName($memberName) {
		$this->memberName = $memberName;
	}
	/**
	 * メールリンク注文番号設定
	 *
	 * @param string $mailLinkOrderNo
	 */
	public function setMailLinkOrderNo($mailLinkOrderNo) {
		$this->mailLinkOrderNo = $mailLinkOrderNo;
	}
	/**
	 * メールアドレス設定
	 *
	 * @param string $mailAddress
	 */
	public function setMailAddress($mailAddress) {
		$this->mailAddress = $mailAddress;
	}
	/**
	 * メッセージ言語設定
	 *
	 * @param string $lang
	 */
	public function setLang($lang) {
		$this->lang = $lang;
	}
	/**
	 * テンプレートNo.設定
	 *
	 * @param integer $templateNo
	 */
	public function setTemplateNo($templateNo) {
		$this->templateNo = $templateNo;
	}
	/**
	 * 有効日数設定
	 *
	 * @param integer $expireDays
	 */
	public function setExpireDays($expireDays) {
		$this->expireDays = $expireDays;
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
		$this->setExecMode($this->getStringValue($params, 'ExecMode', $this->getExecMode()));
		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
		$this->setMemberName($this->getStringValue($params, 'MemberName', $this->getMemberName()));
		$this->setMailLinkOrderNo($this->getStringValue($params, 'MailLinkOrderNo', $this->getMailLinkOrderNo()));
		$this->setMailAddress($this->getStringValue($params, 'MailAddress', $this->getMailAddress()));
		$this->setLang($this->getStringValue($params, 'Lang', $this->getLang()));
		$this->setTemplateNo($this->getStringValue($params, 'TemplateNo', $this->getTemplateNo()));
		$this->setExpireDays($this->getStringValue($params, 'ExpireDays', $this->getExpireDays()));

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
		$str .= 'ExecMode=' . $this->encodeStr($this->getExecMode());
		$str .='&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'MemberName=' . $this->encodeStr($this->getMemberName());
		$str .='&';
		$str .= 'MailLinkOrderNo=' . $this->encodeStr($this->getMailLinkOrderNo());
		$str .='&';
		$str .= 'MailAddress=' . $this->encodeStr($this->getMailAddress());
		$str .='&';
		$str .= 'Lang=' . $this->encodeStr($this->getLang());
		$str .='&';
		$str .= 'TemplateNo=' . $this->encodeStr($this->getTemplateNo());
		$str .='&';
		$str .= 'ExpireDays=' . $this->encodeStr($this->getExpireDays());

	    return $str;
	}


}
?>
