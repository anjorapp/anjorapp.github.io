<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>口振オンライン申し込み　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class BankAccountEntryInput extends BaseInput {

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
	 * @var string 会員名
	 */
	private $memberName;
	/**
	 * @var string 会員作成フラグ
	 */
	private $createMember;
	/**
	 * @var string 手続き後URL
	 */
	private $retURL;
	/**
	 * @var string 銀行コード
	 */
	private $bankCode;
	/**
	 * @var string 支店コード
	 */
	private $branchCode;
	/**
	 * @var string 預金区分
	 */
	private $accountType;
	/**
	 * @var string 口座番号
	 */
	private $accountNumber;
	/**
	 * @var string 口座名義カナ
	 */
	private $accountName;
	/**
	 * @var string 口座名義
	 */
	private $accountNameKanji;
	/**
	 * @var string 消費者利用端末
	 */
	private $consumerDevice;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
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
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->memberName;
	}
	/**
	 * 会員作成フラグ取得
	 * @return string 会員作成フラグ
	 */
	public function getCreateMember() {
		return $this->createMember;
	}
	/**
	 * 手続き後URL取得
	 * @return string 手続き後URL
	 */
	public function getRetURL() {
		return $this->retURL;
	}
	/**
	 * 銀行コード取得
	 * @return string 銀行コード
	 */
	public function getBankCode() {
		return $this->bankCode;
	}
	/**
	 * 支店コード取得
	 * @return string 支店コード
	 */
	public function getBranchCode() {
		return $this->branchCode;
	}
	/**
	 * 預金区分取得
	 * @return string 預金区分
	 */
	public function getAccountType() {
		return $this->accountType;
	}
	/**
	 * 口座番号取得
	 * @return string 口座番号
	 */
	public function getAccountNumber() {
		return $this->accountNumber;
	}
	/**
	 * 口座名義カナ取得
	 * @return string 口座名義カナ
	 */
	public function getAccountName() {
		return $this->accountName;
	}
	/**
	 * 口座名義取得
	 * @return string 口座名義
	 */
	public function getAccountNameKanji() {
		return $this->accountNameKanji;
	}
	/**
	 * 消費者利用端末取得
	 * @return string 消費者利用端末
	 */
	public function getConsumerDevice() {
		return $this->consumerDevice;
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
	 * 会員名設定
	 *
	 * @param string $memberName
	 */
	public function setMemberName($memberName) {
		$this->memberName = $memberName;
	}
	/**
	 * 会員作成フラグ設定
	 *
	 * @param string $createMember
	 */
	public function setCreateMember($createMember) {
		$this->createMember = $createMember;
	}
	/**
	 * 手続き後URL設定
	 *
	 * @param string $retURL
	 */
	public function setRetURL($retURL) {
		$this->retURL = $retURL;
	}
	/**
	 * 銀行コード設定
	 *
	 * @param string $bankCode
	 */
	public function setBankCode($bankCode) {
		$this->bankCode = $bankCode;
	}
	/**
	 * 支店コード設定
	 *
	 * @param string $branchCode
	 */
	public function setBranchCode($branchCode) {
		$this->branchCode = $branchCode;
	}
	/**
	 * 預金区分設定
	 *
	 * @param string $accountType
	 */
	public function setAccountType($accountType) {
		$this->accountType = $accountType;
	}
	/**
	 * 口座番号設定
	 *
	 * @param string $accountNumber
	 */
	public function setAccountNumber($accountNumber) {
		$this->accountNumber = $accountNumber;
	}
	/**
	 * 口座名義カナ設定
	 *
	 * @param string $accountName
	 */
	public function setAccountName($accountName) {
		$this->accountName = $accountName;
	}
	/**
	 * 口座名義設定
	 *
	 * @param string $accountNameKanji
	 */
	public function setAccountNameKanji($accountNameKanji) {
		$this->accountNameKanji = $accountNameKanji;
	}
	/**
	 * 消費者利用端末設定
	 *
	 * @param string $consumerDevice
	 */
	public function setConsumerDevice($consumerDevice) {
		$this->consumerDevice = $consumerDevice;
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

		$this->setSiteID($this->getStringValue($params, 'SiteID', $this->getSiteID()));
		$this->setSitePass($this->getStringValue($params, 'SitePass', $this->getSitePass()));
		$this->setMemberID($this->getStringValue($params, 'MemberID', $this->getMemberID()));
		$this->setMemberName($this->getStringValue($params, 'MemberName', $this->getMemberName()));
		$this->setCreateMember($this->getStringValue($params, 'CreateMember', $this->getCreateMember()));
		$this->setRetURL($this->getStringValue($params, 'RetURL', $this->getRetURL()));
		$this->setBankCode($this->getStringValue($params, 'BankCode', $this->getBankCode()));
		$this->setBranchCode($this->getStringValue($params, 'BranchCode', $this->getBranchCode()));
		$this->setAccountType($this->getStringValue($params, 'AccountType', $this->getAccountType()));
		$this->setAccountNumber($this->getStringValue($params, 'AccountNumber', $this->getAccountNumber()));
		$this->setAccountName($this->getStringValue($params, 'AccountName', $this->getAccountName()));
		$this->setAccountNameKanji($this->getStringValue($params, 'AccountNameKanji', $this->getAccountNameKanji()));
		$this->setConsumerDevice($this->getStringValue($params, 'ConsumerDevice', $this->getConsumerDevice()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'SitePass=' . $this->encodeStr($this->getSitePass());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'MemberName=' . $this->encodeStr($this->getMemberName());
		$str .='&';
		$str .= 'CreateMember=' . $this->encodeStr($this->getCreateMember());
		$str .='&';
		$str .= 'RetURL=' . $this->encodeStr($this->getRetURL());
		$str .='&';
		$str .= 'BankCode=' . $this->encodeStr($this->getBankCode());
		$str .='&';
		$str .= 'BranchCode=' . $this->encodeStr($this->getBranchCode());
		$str .='&';
		$str .= 'AccountType=' . $this->encodeStr($this->getAccountType());
		$str .='&';
		$str .= 'AccountNumber=' . $this->encodeStr($this->getAccountNumber());
		$str .='&';
		$str .= 'AccountName=' . $this->encodeStr($this->getAccountName());
		$str .='&';
		$str .= 'AccountNameKanji=' . $this->encodeStr($this->getAccountNameKanji());
		$str .='&';
		$str .= 'ConsumerDevice=' . $this->encodeStr($this->getConsumerDevice());

	    return $str;
	}


}
?>
