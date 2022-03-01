<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>自動売上自動売上結果照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchRecurringResultOutput extends BaseOutput {

	/**
	 * @var string 課金手段
	 */
	private $method;
	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string 自動売上ID
	 */
	private $recurringID;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 課金日
	 */
	private $chargeDate;
	/**
	 * @var string 取引状態 または 振替依頼レコード状態
	 */
	private $status;
	/**
	 * @var integer 利用金額
	 */
	private $amount;
	/**
	 * @var integer 税送料
	 */
	private $tax;
	/**
	 * @var string 次回課金日
	 */
	private $nextChargeDate;
	/**
	 * @var string アクセスID
	 */
	private $accessID;
	/**
	 * @var string アクセスパスワード
	 */
	private $accessPass;
	/**
	 * @var string 仕向先
	 */
	private $forward;
	/**
	 * @var string 承認番号
	 */
	private $approvalNo;
	/**
	 * @var string サイトID
	 */
	private $siteID;
	/**
	 * @var string メンバーID
	 */
	private $memberID;
	/**
	 * @var string 通帳記載内容
	 */
	private $printStr;
	/**
	 * @var string 振替結果詳細コード
	 */
	private $result;
	/**
	 * @var string 自動売上エラーコード
	 */
	private $chargeErrCode;
	/**
	 * @var string 自動売上エラー詳細コード
	 */
	private $chargeErrInfo;
	/**
	 * @var string 処理日時
	 */
	private $processDate;


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
		$this->setMethod($params->get('Method'));
		$this->setShopID($params->get('ShopID'));
		$this->setRecurringID($params->get('RecurringID'));
		$this->setOrderID($params->get('OrderID'));
		$this->setChargeDate($params->get('ChargeDate'));
		$this->setStatus($params->get('Status'));
		$this->setAmount($params->get('Amount'));
		$this->setTax($params->get('Tax'));
		$this->setNextChargeDate($params->get('NextChargeDate'));
		$this->setAccessID($params->get('AccessID'));
		$this->setAccessPass($params->get('AccessPass'));
		$this->setForward($params->get('Forward'));
		$this->setApprovalNo($params->get('ApprovalNo'));
		$this->setSiteID($params->get('SiteID'));
		$this->setMemberID($params->get('MemberID'));
		$this->setPrintStr($params->get('PrintStr'));
		$this->setResult($params->get('Result'));
		$this->setChargeErrCode($params->get('ChargeErrCode'));
		$this->setChargeErrInfo($params->get('ChargeErrInfo'));
		$this->setProcessDate($params->get('ProcessDate'));

	}

	/**
	 * 課金手段取得
	 * @return string 課金手段
	 */
	public function getMethod() {
		return $this->method;
	}
	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}
	/**
	 * 自動売上ID取得
	 * @return string 自動売上ID
	 */
	public function getRecurringID() {
		return $this->recurringID;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 課金日取得
	 * @return string 課金日
	 */
	public function getChargeDate() {
		return $this->chargeDate;
	}
	/**
	 * 取引状態 または 振替依頼レコード状態取得
	 * @return string 取引状態 または 振替依頼レコード状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->tax;
	}
	/**
	 * 次回課金日取得
	 * @return string 次回課金日
	 */
	public function getNextChargeDate() {
		return $this->nextChargeDate;
	}
	/**
	 * アクセスID取得
	 * @return string アクセスID
	 */
	public function getAccessID() {
		return $this->accessID;
	}
	/**
	 * アクセスパスワード取得
	 * @return string アクセスパスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}
	/**
	 * 仕向先取得
	 * @return string 仕向先
	 */
	public function getForward() {
		return $this->forward;
	}
	/**
	 * 承認番号取得
	 * @return string 承認番号
	 */
	public function getApprovalNo() {
		return $this->approvalNo;
	}
	/**
	 * サイトID取得
	 * @return string サイトID
	 */
	public function getSiteID() {
		return $this->siteID;
	}
	/**
	 * メンバーID取得
	 * @return string メンバーID
	 */
	public function getMemberID() {
		return $this->memberID;
	}
	/**
	 * 通帳記載内容取得
	 * @return string 通帳記載内容
	 */
	public function getPrintStr() {
		return $this->printStr;
	}
	/**
	 * 振替結果詳細コード取得
	 * @return string 振替結果詳細コード
	 */
	public function getResult() {
		return $this->result;
	}
	/**
	 * 自動売上エラーコード取得
	 * @return string 自動売上エラーコード
	 */
	public function getChargeErrCode() {
		return $this->chargeErrCode;
	}
	/**
	 * 自動売上エラー詳細コード取得
	 * @return string 自動売上エラー詳細コード
	 */
	public function getChargeErrInfo() {
		return $this->chargeErrInfo;
	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getProcessDate() {
		return $this->processDate;
	}

	/**
	 * 課金手段設定
	 *
	 * @param string $method
	 */
	public function setMethod($method) {
		$this->method = $method;
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
	 * 自動売上ID設定
	 *
	 * @param string $recurringID
	 */
	public function setRecurringID($recurringID) {
		$this->recurringID = $recurringID;
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
	 * 課金日設定
	 *
	 * @param string $chargeDate
	 */
	public function setChargeDate($chargeDate) {
		$this->chargeDate = $chargeDate;
	}
	/**
	 * 取引状態 または 振替依頼レコード状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->tax = $tax;
	}
	/**
	 * 次回課金日設定
	 *
	 * @param string $nextChargeDate
	 */
	public function setNextChargeDate($nextChargeDate) {
		$this->nextChargeDate = $nextChargeDate;
	}
	/**
	 * アクセスID設定
	 *
	 * @param string $accessID
	 */
	public function setAccessID($accessID) {
		$this->accessID = $accessID;
	}
	/**
	 * アクセスパスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
	}
	/**
	 * 仕向先設定
	 *
	 * @param string $forward
	 */
	public function setForward($forward) {
		$this->forward = $forward;
	}
	/**
	 * 承認番号設定
	 *
	 * @param string $approvalNo
	 */
	public function setApprovalNo($approvalNo) {
		$this->approvalNo = $approvalNo;
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
	 * メンバーID設定
	 *
	 * @param string $memberID
	 */
	public function setMemberID($memberID) {
		$this->memberID = $memberID;
	}
	/**
	 * 通帳記載内容設定
	 *
	 * @param string $printStr
	 */
	public function setPrintStr($printStr) {
		$this->printStr = $printStr;
	}
	/**
	 * 振替結果詳細コード設定
	 *
	 * @param string $result
	 */
	public function setResult($result) {
		$this->result = $result;
	}
	/**
	 * 自動売上エラーコード設定
	 *
	 * @param string $chargeErrCode
	 */
	public function setChargeErrCode($chargeErrCode) {
		$this->chargeErrCode = $chargeErrCode;
	}
	/**
	 * 自動売上エラー詳細コード設定
	 *
	 * @param string $chargeErrInfo
	 */
	public function setChargeErrInfo($chargeErrInfo) {
		$this->chargeErrInfo = $chargeErrInfo;
	}
	/**
	 * 処理日時設定
	 *
	 * @param string $processDate
	 */
	public function setProcessDate($processDate) {
		$this->processDate = $processDate;
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
		$str .= 'Method=' . $this->encodeStr($this->getMethod());
		$str .='&';
		$str .= 'ShopID=' . $this->encodeStr($this->getShopID());
		$str .='&';
		$str .= 'RecurringID=' . $this->encodeStr($this->getRecurringID());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'ChargeDate=' . $this->encodeStr($this->getChargeDate());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());
		$str .='&';
		$str .= 'NextChargeDate=' . $this->encodeStr($this->getNextChargeDate());
		$str .='&';
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
		$str .='&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .='&';
		$str .= 'Forward=' . $this->encodeStr($this->getForward());
		$str .='&';
		$str .= 'ApprovalNo=' . $this->encodeStr($this->getApprovalNo());
		$str .='&';
		$str .= 'SiteID=' . $this->encodeStr($this->getSiteID());
		$str .='&';
		$str .= 'MemberID=' . $this->encodeStr($this->getMemberID());
		$str .='&';
		$str .= 'PrintStr=' . $this->encodeStr($this->getPrintStr());
		$str .='&';
		$str .= 'Result=' . $this->encodeStr($this->getResult());
		$str .='&';
		$str .= 'ChargeErrCode=' . $this->encodeStr($this->getChargeErrCode());
		$str .='&';
		$str .= 'ChargeErrInfo=' . $this->encodeStr($this->getChargeErrInfo());
		$str .='&';
		$str .= 'ProcessDate=' . $this->encodeStr($this->getProcessDate());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
