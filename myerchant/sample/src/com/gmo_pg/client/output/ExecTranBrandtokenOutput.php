<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>ブランドトークン決済決済実行　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranBrandtokenOutput extends BaseOutput {

	/**
	 * @var string 取引状態
	 */
	private $status;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 仕向先コード
	 */
	private $forward;
	/**
	 * @var string 承認番号
	 */
	private $approve;
	/**
	 * @var string トランザクションID
	 */
	private $tranID;
	/**
	 * @var string 決済日付
	 */
	private $tranDate;
	/**
	 * @var string 加盟店向け自由項目1
	 */
	private $clientField1;
	/**
	 * @var string 加盟店向け自由項目2
	 */
	private $clientField2;
	/**
	 * @var string 加盟店向け自由項目3
	 */
	private $clientField3;


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
		$this->setStatus($params->get('Status'));
		$this->setOrderID($params->get('OrderID'));
		$this->setForward($params->get('Forward'));
		$this->setApprove($params->get('Approve'));
		$this->setTranID($params->get('TranID'));
		$this->setTranDate($params->get('TranDate'));
		$this->setClientField1($params->get('ClientField1'));
		$this->setClientField2($params->get('ClientField2'));
		$this->setClientField3($params->get('ClientField3'));

	}

	/**
	 * 取引状態取得
	 * @return string 取引状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 仕向先コード取得
	 * @return string 仕向先コード
	 */
	public function getForward() {
		return $this->forward;
	}
	/**
	 * 承認番号取得
	 * @return string 承認番号
	 */
	public function getApprove() {
		return $this->approve;
	}
	/**
	 * トランザクションID取得
	 * @return string トランザクションID
	 */
	public function getTranID() {
		return $this->tranID;
	}
	/**
	 * 決済日付取得
	 * @return string 決済日付
	 */
	public function getTranDate() {
		return $this->tranDate;
	}
	/**
	 * 加盟店向け自由項目1取得
	 * @return string 加盟店向け自由項目1
	 */
	public function getClientField1() {
		return $this->clientField1;
	}
	/**
	 * 加盟店向け自由項目2取得
	 * @return string 加盟店向け自由項目2
	 */
	public function getClientField2() {
		return $this->clientField2;
	}
	/**
	 * 加盟店向け自由項目3取得
	 * @return string 加盟店向け自由項目3
	 */
	public function getClientField3() {
		return $this->clientField3;
	}

	/**
	 * 取引状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
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
	 * 仕向先コード設定
	 *
	 * @param string $forward
	 */
	public function setForward($forward) {
		$this->forward = $forward;
	}
	/**
	 * 承認番号設定
	 *
	 * @param string $approve
	 */
	public function setApprove($approve) {
		$this->approve = $approve;
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
	 * 決済日付設定
	 *
	 * @param string $tranDate
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}
	/**
	 * 加盟店向け自由項目1設定
	 *
	 * @param string $clientField1
	 */
	public function setClientField1($clientField1) {
		$this->clientField1 = $clientField1;
	}
	/**
	 * 加盟店向け自由項目2設定
	 *
	 * @param string $clientField2
	 */
	public function setClientField2($clientField2) {
		$this->clientField2 = $clientField2;
	}
	/**
	 * 加盟店向け自由項目3設定
	 *
	 * @param string $clientField3
	 */
	public function setClientField3($clientField3) {
		$this->clientField3 = $clientField3;
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
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'Forward=' . $this->encodeStr($this->getForward());
		$str .='&';
		$str .= 'Approve=' . $this->encodeStr($this->getApprove());
		$str .='&';
		$str .= 'TranID=' . $this->encodeStr($this->getTranID());
		$str .='&';
		$str .= 'TranDate=' . $this->encodeStr($this->getTranDate());
		$str .='&';
		$str .= 'ClientField1=' . $this->encodeStr($this->getClientField1());
		$str .='&';
		$str .= 'ClientField2=' . $this->encodeStr($this->getClientField2());
		$str .='&';
		$str .= 'ClientField3=' . $this->encodeStr($this->getClientField3());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
