<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>GANB支払い停止　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class CancelTranGANBOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var string 加盟店自由項目1
	 */
	private $clientField1;
	/**
	 * @var string 加盟店自由項目2
	 */
	private $clientField2;
	/**
	 * @var string 加盟店自由項目3
	 */
	private $clientField3;
	/**
	 * @var string 累計額
	 */
	private $totalTransferAmount;
	/**
	 * @var string 累計件数
	 */
	private $totalTransferCount;
	/**
	 * @var string 最終振振込額
	 */
	private $latestTransferAmount;
	/**
	 * @var string 最終振込日
	 */
	private $latestTransferDate;
	/**
	 * @var string 最終振込依頼人名
	 */
	private $latestTransferName;
	/**
	 * @var string 最終仕向銀行名
	 */
	private $latestTransferBankName;
	/**
	 * @var string 最終仕向支店名
	 */
	private $latestTransferBranchName;


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
		$this->setOrderID($params->get('OrderID'));
		$this->setStatus($params->get('Status'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));
		$this->setTotalTransferAmount($params->get('TotalTransferAmount'));
		$this->setTotalTransferCount($params->get('TotalTransferCount'));
		$this->setLatestTransferAmount($params->get('LatestTransferAmount'));
		$this->setLatestTransferDate($params->get('LatestTransferDate'));
		$this->setLatestTransferName($params->get('LatestTransferName'));
		$this->setLatestTransferBankName($params->get('LatestTransferBankName'));
		$this->setLatestTransferBranchName($params->get('LatestTransferBranchName'));

	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 加盟店自由項目1取得
	 * @return string 加盟店自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}
	/**
	 * 加盟店自由項目2取得
	 * @return string 加盟店自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}
	/**
	 * 加盟店自由項目3取得
	 * @return string 加盟店自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}
	/**
	 * 累計額取得
	 * @return string 累計額
	 */
	public function getTotalTransferAmount() {
		return $this->totalTransferAmount;
	}
	/**
	 * 累計件数取得
	 * @return string 累計件数
	 */
	public function getTotalTransferCount() {
		return $this->totalTransferCount;
	}
	/**
	 * 最終振振込額取得
	 * @return string 最終振振込額
	 */
	public function getLatestTransferAmount() {
		return $this->latestTransferAmount;
	}
	/**
	 * 最終振込日取得
	 * @return string 最終振込日
	 */
	public function getLatestTransferDate() {
		return $this->latestTransferDate;
	}
	/**
	 * 最終振込依頼人名取得
	 * @return string 最終振込依頼人名
	 */
	public function getLatestTransferName() {
		return $this->latestTransferName;
	}
	/**
	 * 最終仕向銀行名取得
	 * @return string 最終仕向銀行名
	 */
	public function getLatestTransferBankName() {
		return $this->latestTransferBankName;
	}
	/**
	 * 最終仕向支店名取得
	 * @return string 最終仕向支店名
	 */
	public function getLatestTransferBranchName() {
		return $this->latestTransferBranchName;
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
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}
	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}
	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}
	/**
	 * 累計額設定
	 *
	 * @param string $totalTransferAmount
	 */
	public function setTotalTransferAmount($totalTransferAmount) {
		$this->totalTransferAmount = $totalTransferAmount;
	}
	/**
	 * 累計件数設定
	 *
	 * @param string $totalTransferCount
	 */
	public function setTotalTransferCount($totalTransferCount) {
		$this->totalTransferCount = $totalTransferCount;
	}
	/**
	 * 最終振振込額設定
	 *
	 * @param string $latestTransferAmount
	 */
	public function setLatestTransferAmount($latestTransferAmount) {
		$this->latestTransferAmount = $latestTransferAmount;
	}
	/**
	 * 最終振込日設定
	 *
	 * @param string $latestTransferDate
	 */
	public function setLatestTransferDate($latestTransferDate) {
		$this->latestTransferDate = $latestTransferDate;
	}
	/**
	 * 最終振込依頼人名設定
	 *
	 * @param string $latestTransferName
	 */
	public function setLatestTransferName($latestTransferName) {
		$this->latestTransferName = $latestTransferName;
	}
	/**
	 * 最終仕向銀行名設定
	 *
	 * @param string $latestTransferBankName
	 */
	public function setLatestTransferBankName($latestTransferBankName) {
		$this->latestTransferBankName = $latestTransferBankName;
	}
	/**
	 * 最終仕向支店名設定
	 *
	 * @param string $latestTransferBranchName
	 */
	public function setLatestTransferBranchName($latestTransferBranchName) {
		$this->latestTransferBranchName = $latestTransferBranchName;
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
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'TotalTransferAmount=' . $this->encodeStr($this->getTotalTransferAmount());
		$str .='&';
		$str .= 'TotalTransferCount=' . $this->encodeStr($this->getTotalTransferCount());
		$str .='&';
		$str .= 'LatestTransferAmount=' . $this->encodeStr($this->getLatestTransferAmount());
		$str .='&';
		$str .= 'LatestTransferDate=' . $this->encodeStr($this->getLatestTransferDate());
		$str .='&';
		$str .= 'LatestTransferName=' . $this->encodeStr($this->getLatestTransferName());
		$str .='&';
		$str .= 'LatestTransferBankName=' . $this->encodeStr($this->getLatestTransferBankName());
		$str .='&';
		$str .= 'LatestTransferBranchName=' . $this->encodeStr($this->getLatestTransferBranchName());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
