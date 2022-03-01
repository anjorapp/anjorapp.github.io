<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>口座情報照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchMemberBankAccountOutput extends BaseOutput {

	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string 金融機関コード
	 */
	private $bankCode;
	/**
	 * @var string 金融機関名称
	 */
	private $bankName;
	/**
	 * @var string 支店コード
	 */
	private $branchCode;
	/**
	 * @var string 支店名称
	 */
	private $branchName;
	/**
	 * @var string 預金区分
	 */
	private $accountType;
	/**
	 * @var string 口座番号
	 */
	private $accountNumber;
	/**
	 * @var string 口座名義人カナ
	 */
	private $accountName;

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
		$this->setSiteID($params->get('SiteID'));
		$this->setMemberID($params->get('MemberID'));
		$this->setBankCode($params->get('BankCode'));
		$this->setBankName($params->get('BankName'));
		$this->setBranchCode($params->get('BranchCode'));
		$this->setBranchName($params->get('BranchName'));
		$this->setAccountType($params->get('AccountType'));
		$this->setAccountNumber($params->get('AccountNumber'));
		$this->setAccountName($params->get('AccountName'));
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
	 * 金融機関コード取得
	 * @return string 金融機関コード
	 */
	public function getBankCode() {
		return $this->bankCode;
	}
	/**
	 * 金融機関名称取得
	 * @return string 金融機関名称
	 */
	public function getBankName() {
		return $this->bankName;
	}
	/**
	 * 支店コード取得
	 * @return string 支店コード
	 */
	public function getBranchCode() {
		return $this->branchCode;
	}
	/**
	 * 支店名称取得
	 * @return string 支店名称
	 */
	public function getBranchName() {
		return $this->branchName;
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
	 * 口座名義人カナ取得
	 * @return string 口座名義人カナ
	 */
	public function getAccountName() {
		return $this->accountName;
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
	 * 金融機関コード設定
	 *
	 * @param string $bankCode
	 */
	public function setBankCode($bankCode) {
		$this->bankCode = $bankCode;
	}
	/**
	 * 金融機関名称設定
	 *
	 * @param string $bankName
	 */
	public function setBankName($bankName) {
		$this->bankName = $bankName;
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
	 * 支店名称設定
	 *
	 * @param string $branchName
	 */
	public function setBranchName($branchName) {
		$this->branchName = $branchName;
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
	 * 口座名義人カナ設定
	 *
	 * @param string $accountName
	 */
	public function setAccountName($accountName) {
		$this->accountName = $accountName;
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
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'BankCode=' . $this->encodeStr($this->getBankCode());
		$str .='&';
		$str .= 'BankName=' . $this->encodeStr($this->getBankName());
		$str .='&';
		$str .= 'BranchCode=' . $this->encodeStr($this->getBranchCode());
		$str .='&';
		$str .= 'BranchName=' . $this->encodeStr($this->getBranchName());
		$str .='&';
		$str .= 'AccountType=' . $this->encodeStr($this->getAccountType());
		$str .='&';
		$str .= 'AccountNumber=' . $this->encodeStr($this->getAccountNumber());
		$str .='&';
		$str .= 'AccountName=' . $this->encodeStr($this->getAccountName());

		if ($this->isErrorOccurred()) {
			// エラー文字列を連結して返す
			$errString = parent::toString();
			$str .= '&' . $errString;
		}
		return $str;
	}
}?>