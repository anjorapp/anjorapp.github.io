<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>コンビニ決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 03-07-2008 00:00:00
 */
class ExecTranCvsOutput extends BaseOutput {

	/**
	 * オーダーID
	 */
	private $orderId;

	/**
	 * 支払先コンビニコード
	 */
	private $convenience;

	/**
	 * 確認番号
	 */
	private $confNo;

	/**
	 * 受付番号
	 */
	private $receiptNo;

	/**
	 * 支払期限日時
	 */
	private $paymentTerm = null;

	/**
	 * 決済日付（yyyyMMddHHmmss）
	 */
	private $tranDate;

	/**
	 * 払込票URL
	 */
	private $receiptUrl;

	/**
	 * MD5ハッシュ（orderId～tranDate + ショップパスワードのMD5ハッシュ）
	 */
	private $checkString;

	/**
	 * 加盟店自由項目1
	 */
	private $clientField1;

	/**
	 * 加盟店自由項目2
	 */
	private $clientField2;

	/**
	 * 加盟店自由項目3
	 */
	private $clientField3;

	/**
	 * コンストラクタ
	 *
	 * @param IgnoreCaseMap $params 出力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);

		// 引数が無い場合は戻る
        if (is_null($params)) {
            return;
        }

        // マップの展開
        $this->setOrderId($params->get('OrderID'));
        $this->setConvenience($params->get('Convenience'));
        $this->setConfNo($params->get('ConfNo'));
        $this->setReceiptNo($params->get('ReceiptNo'));
        $this->setPaymentTerm($params->get('PaymentTerm'));
        $this->setTranDate($params->get('TranDate'));
        $receiptUrl = $params->get('ReceiptUrl');
		if (!is_null($receiptUrl) && 0 != strlen($receiptUrl)) {
        	// 払込票URLが返却された場合のみセットする。
        	$this->setReceiptUrl($receiptUrl);
        }
        $this->setCheckString($params->get('CheckString'));
        $this->setClientField1($params->get('ClientField1'));
        $this->setClientField2($params->get('ClientField2'));
        $this->setClientField3($params->get('ClientField3'));

	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * 支払先コンビニコードを取得します。
	 *
	 * @return	$String	支払先コンビニコード
	 */
	public function getConvenience() {
		return $this->convenience;
	}

	/**
	 * 確認番号を取得します。
	 *
	 * @return	$String	確認番号
	 */
	public function getConfNo() {
		return $this->confNo;
	}

	/**
	 * 受付番号を取得します。
	 *
	 * @return	$String	受付番号
	 */
	public function getReceiptNo() {
		return $this->receiptNo;
	}

	/**
	 * 支払期限日時を取得します。
	 *
	 * @return	$timestamp	支払期限日時
	 */
	public function getPaymentTerm() {
		return $this->paymentTerm;
	}

	/**
	 * 決済日付取得
	 * @return string 決済日付(yyyyMMddHHmmss形式)
	 */
	public function getTranDate() {
		return $this->tranDate;
	}

	/**
	 * 払込票URL取得
	 * @return string 払込票URL
	 */
	public function getReceiptUrl() {
		return $this->receiptUrl;
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
	 * オーダーID設定
	 *
	 * @param string $orderId オーダーID
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}

	/**
	 * 支払先コンビニコードを格納します。
	 *
	 * @param	$String	支払先コンビニコード
	 */
	public function setConvenience($String) {
		$this->convenience = $String;
	}

	/**
	 * 確認番号を格納します。
	 *
	 * @param	$String	確認番号
	 */
	public function setConfNo($String) {
		$this->confNo = $String;
	}

	/**
	 * 支払期限日時を格納します。
	 *
	 * @param	$timestamp	支払期限日時
	 */
	public function setPaymentTerm($timestamp) {
		$this->paymentTerm = $timestamp;
	}

	/**
	 * 受付番号を格納します。
	 *
	 * @param	$String	受付番号
	 */
	public function setReceiptNo($String) {
		$this->receiptNo = $String;
	}


	/**
	 * 決済日付設定
	 *
	 * @param string $tranDate 決済日付(yyyyMMddHHmmss形式)
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}

	/**
	 * 払込票URL設定
	 *
	 * @param string $receiptUrl 払込票URL
	 */
	public function setReceiptUrl($receiptUrl) {
		$this->receiptUrl = $receiptUrl;
	}

	/**
	 * MD5ハッシュ設定
	 *
	 * @param string $checkString MD5ハッシュ
	 */
	public function setCheckString($checkString) {
		$this->checkString = $checkString;
	}

	/**
	 * 加盟店自由項目1設定
	 *
	 * @param string $clientField1 加盟店自由項目1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}

	/**
	 * 加盟店自由項目2設定
	 *
	 * @param string $clientField2 加盟店自由項目2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}

	/**
	 * 加盟店自由項目3設定
	 *
	 * @param string $clientField3 加盟店自由項目3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
	}


	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return 出力パラメータ文字列表現
	 */
	public function toString() {
		$str ='';
	    $str .= 'OrderID=' . $this->getOrderId();
        $str .= '&';
	    $str .= 'Convenience=' . $this->getConvenience();
        $str .= '&';
        $str .= 'ConfNo=' . $this->getConfNo();
        $str .= '&';
        $str .= 'ReceiptNo=' . $this->getReceiptNo();
        $str .= '&';
        $str .= 'PaymentTerm=' . $this->getPaymentTerm();
        $str .= '&';
        $str .= 'TranDate=' . $this->getTranDate();
        $str .= '&';
        $str .= 'ReceiptUrl=' . $this->getReceiptUrl();
        $str .= '&';
        $str .= 'CheckString=' . $this->getCheckString();
        $str .= '&';
        $str .= 'ClientField1=' . $this->getClientField1();
        $str .= '&';
        $str .= 'ClientField2=' . $this->getClientField2();
        $str .= '&';
        $str .= 'ClientField3=' . $this->getClientField3();

        if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }


        return $str;
	}

}
?>