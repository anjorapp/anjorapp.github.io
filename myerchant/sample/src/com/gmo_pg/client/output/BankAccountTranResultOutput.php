<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>口振オンライン口座振替申込トランザクション状態照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class BankAccountTranResultOutput extends BaseOutput {

	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string 会員ID
	 */
	private $memberID;
	/**
	 * @var string トランザクションID
	 */
	private $tranID;
	/**
	 * @var string 登録結果
	 */
	private $status;
	/**
	 * @var string 金融機関コード
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
	 * @var string 口座名義人カナ
	 */
	private $accountName;
	/**
	 * @var string 本人確認済結果
	 */
	private $accountIdentification;


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
		$this->setTranID($params->get('TranID'));
		$this->setStatus($params->get('Status'));
		$this->setBankCode($params->get('BankCode'));
		$this->setBranchCode($params->get('BranchCode'));
		$this->setAccountType($params->get('AccountType'));
		$this->setAccountNumber($params->get('AccountNumber'));
		$this->setAccountName($params->get('AccountName'));
		$this->setAccountIdentification($params->get('AccountIdentification'));

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
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTranID() {
		return $this->tranID;
	}
	/**
	 * 登録結果取得
	 * @return string 登録結果
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 金融機関コード取得
	 * @return string 金融機関コード
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
	 * 口座名義人カナ取得
	 * @return string 口座名義人カナ
	 */
	public function getAccountName() {
		return $this->accountName;
	}
	/**
	 * 本人確認済結果取得
	 * @return string 本人確認済結果
	 */
	public function getAccountIdentification() {
		return $this->accountIdentification;
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
	 * トランザクションID設定
	 *
	 * @param string $tranID
	 */
	public function setTranID($tranID) {
		$this->tranID = $tranID;
	}
	/**
	 * 登録結果設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
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
	 * 口座名義人カナ設定
	 *
	 * @param string $accountName
	 */
	public function setAccountName($accountName) {
		$this->accountName = $accountName;
	}
	/**
	 * 本人確認済結果設定
	 *
	 * @param string $accountIdentification
	 */
	public function setAccountIdentification($accountIdentification) {
		$this->accountIdentification = $accountIdentification;
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
		$str .= 'TranID=' . $this->encodeStr($this->getTranID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
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
		$str .= 'AccountIdentification=' . $this->encodeStr($this->getAccountIdentification());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
