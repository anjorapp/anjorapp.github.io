<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>銀行振込(バーチャル口座)決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranVirtualaccountOutput extends BaseOutput {

	/**
	 * @var string 取引ID
	 */
	private $accessID;
	/**
	 * @var string 銀行コード
	 */
	private $bankCode;
	/**
	 * @var string 銀行名
	 */
	private $bankName;
	/**
	 * @var string 支店コード
	 */
	private $branchCode;
	/**
	 * @var string 支店名
	 */
	private $branchName;
	/**
	 * @var string 科目
	 */
	private $accountType;
	/**
	 * @var string 口座番号
	 */
	private $accountNumber;
	/**
	 * @var string 取引口座有効期限
	 */
	private $availableDate;
	/**
	 * @var string 振込コード
	 */
	private $tradeCode;


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
		$this->setAccessID($params->get('AccessID'));
		$this->setBankCode($params->get('BankCode'));
		$this->setBankName($params->get('BankName'));
		$this->setBranchCode($params->get('BranchCode'));
		$this->setBranchName($params->get('BranchName'));
		$this->setAccountType($params->get('AccountType'));
		$this->setAccountNumber($params->get('AccountNumber'));
		$this->setAvailableDate($params->get('AvailableDate'));
		$this->setTradeCode($params->get('TradeCode'));

	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->accessID;
	}
	/**
	 * 銀行コード取得
	 * @return string 銀行コード
	 */
	public function getBankCode() {
		return $this->bankCode;
	}
	/**
	 * 銀行名取得
	 * @return string 銀行名
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
	 * 支店名取得
	 * @return string 支店名
	 */
	public function getBranchName() {
		return $this->branchName;
	}
	/**
	 * 科目取得
	 * @return string 科目
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
	 * 取引口座有効期限取得
	 * @return string 取引口座有効期限
	 */
	public function getAvailableDate() {
		return $this->availableDate;
	}
	/**
	 * 振込コード取得
	 * @return string 振込コード
	 */
	public function getTradeCode() {
		return $this->tradeCode;
	}

	/**
	 * 取引ID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->accessID = $accessID;
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
	 * 銀行名設定
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
	 * 支店名設定
	 *
	 * @param string $branchName
	 */
	public function setBranchName($branchName) {
		$this->branchName = $branchName;
	}
	/**
	 * 科目設定
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
	 * 取引口座有効期限設定
	 *
	 * @param string $availableDate
	 */
	public function setAvailableDate($availableDate) {
		$this->availableDate = $availableDate;
	}
	/**
	 * 振込コード設定
	 *
	 * @param string $tradeCode
	 */
	public function setTradeCode($tradeCode) {
		$this->tradeCode = $tradeCode;
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
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
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
		$str .= 'AvailableDate=' . $this->encodeStr($this->getAvailableDate());
		$str .='&';
		$str .= 'TradeCode=' . $this->encodeStr($this->getTradeCode());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
