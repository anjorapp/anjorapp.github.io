<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>銀行振込(バーチャル口座)継続口座登録　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class AssignVirtualaccountOutput extends BaseOutput {

	/**
	 * @var string 継続ID
	 */
	private $reserveID;
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
		$this->setReserveID($params->get('ReserveID'));
		$this->setBankCode($params->get('BankCode'));
		$this->setBankName($params->get('BankName'));
		$this->setBranchCode($params->get('BranchCode'));
		$this->setBranchName($params->get('BranchName'));
		$this->setAccountType($params->get('AccountType'));
		$this->setAccountNumber($params->get('AccountNumber'));

	}

	/**
	 * 継続ID取得
	 * @return string 継続ID
	 */
	public function getReserveID() {
		return $this->reserveID;
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
	 * 継続ID設定
	 *
	 * @param string $reserveID
	 */
	public function setReserveID($reserveID) {
		$this->reserveID = $reserveID;
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
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'ReserveID=' . $this->encodeStr($this->getReserveID());
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


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
