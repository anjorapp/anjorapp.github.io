<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>Webmoneyクイック決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranWebmoneyQuickOutput extends BaseOutput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string クイックID
	 */
	private $quickID;
	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var string 処理日時
	 */
	private $tranDate;
	/**
	 * @var string キャンセル区分
	 */
	private $payCancel;
	/**
	 * @var string 管理番号
	 */
	private $managementNo;
	/**
	 * @var string 決済コード
	 */
	private $settleCode;
	/**
	 * @var string 抽選結果表示ＵＲＬ
	 */
	private $campaignUrl;
	/**
	 * @var string MD5ハッシュ
	 */
	private $checkString;
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
	 * @var string 次処理種別
	 */
	private $nextStep;
	/**
	 * @var string 支払期限日時
	 */
	private $paymentTerm;


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
		$this->setShopID($params->get('ShopID'));
		$this->setOrderID($params->get('OrderID'));
		$this->setQuickID($params->get('QuickID'));
		$this->setStatus($params->get('Status'));
		$this->setTranDate($params->get('TranDate'));
		$this->setPayCancel($params->get('PayCancel'));
		$this->setManagementNo($params->get('ManagementNo'));
		$this->setSettleCode($params->get('SettleCode'));
		$this->setCampaignUrl($params->get('CampaignUrl'));
		$this->setCheckString($params->get('CheckString'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));
		$this->setNextStep($params->get('NextStep'));
		$this->setPaymentTerm($params->get('PaymentTerm'));

	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * クイックID取得
	 * @return string クイックID
	 */
	public function getQuickID() {
		return $this->quickID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getTranDate() {
		return $this->tranDate;
	}
	/**
	 * キャンセル区分取得
	 * @return string キャンセル区分
	 */
	public function getPayCancel() {
		return $this->payCancel;
	}
	/**
	 * 管理番号取得
	 * @return string 管理番号
	 */
	public function getManagementNo() {
		return $this->managementNo;
	}
	/**
	 * 決済コード取得
	 * @return string 決済コード
	 */
	public function getSettleCode() {
		return $this->settleCode;
	}
	/**
	 * 抽選結果表示ＵＲＬ取得
	 * @return string 抽選結果表示ＵＲＬ
	 */
	public function getCampaignUrl() {
		return $this->campaignUrl;
	}
	/**
	 * MD5ハッシュ取得
	 * @return string MD5ハッシュ
	 */
	public function getCheckString() {
		return $this->checkString;
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
	 * 次処理種別取得
	 * @return string 次処理種別
	 */
	public function getNextStep() {
		return $this->nextStep;
	}
	/**
	 * 支払期限日時取得
	 * @return string 支払期限日時
	 */
	public function getPaymentTerm() {
		return $this->paymentTerm;
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
	 * オーダーID設定
	 *
	 * @param string $orderID
	 */
	public function setOrderID($orderID) {
		$this->orderID = $orderID;
	}
	/**
	 * クイックID設定
	 *
	 * @param string $quickID
	 */
	public function setQuickID($quickID) {
		$this->quickID = $quickID;
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
	 * 処理日時設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}
	/**
	 * キャンセル区分設定
	 *
	 * @param string $payCancel
	 */
	public function setPayCancel($payCancel) {
		$this->payCancel = $payCancel;
	}
	/**
	 * 管理番号設定
	 *
	 * @param string $managementNo
	 */
	public function setManagementNo($managementNo) {
		$this->managementNo = $managementNo;
	}
	/**
	 * 決済コード設定
	 *
	 * @param string $settleCode
	 */
	public function setSettleCode($settleCode) {
		$this->settleCode = $settleCode;
	}
	/**
	 * 抽選結果表示ＵＲＬ設定
	 *
	 * @param string $campaignUrl
	 */
	public function setCampaignUrl($campaignUrl) {
		$this->campaignUrl = $campaignUrl;
	}
	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString
	 */
	public function setCheckString($checkString) {
		$this->checkString = $checkString;
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
	 * 次処理種別設定
	 *
	 * @param string $nextStep
	 */
	public function setNextStep($nextStep) {
		$this->nextStep = $nextStep;
	}
	/**
	 * 支払期限日時設定
	 *
	 * @param string $paymentTerm
	 */
	public function setPaymentTerm($paymentTerm) {
		$this->paymentTerm = $paymentTerm;
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
		$str .= 'ShopID=' . $this->encodeStr($this->getShopID());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'QuickID=' . $this->encodeStr($this->getQuickID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'TranDate=' . $this->encodeStr($this->getTranDate());
		$str .='&';
		$str .= 'PayCancel=' . $this->encodeStr($this->getPayCancel());
		$str .='&';
		$str .= 'ManagementNo=' . $this->encodeStr($this->getManagementNo());
		$str .='&';
		$str .= 'SettleCode=' . $this->encodeStr($this->getSettleCode());
		$str .='&';
		$str .= 'CampaignUrl=' . $this->encodeStr($this->getCampaignUrl());
		$str .='&';
		$str .= 'CheckString=' . $this->encodeStr($this->getCheckString());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());
		$str .='&';
		$str .= 'NextStep=' . $this->encodeStr($this->getNextStep());
		$str .='&';
		$str .= 'PaymentTerm=' . $this->encodeStr($this->getPaymentTerm());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
