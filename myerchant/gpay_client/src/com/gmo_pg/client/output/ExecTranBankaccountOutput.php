<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>口振セレクト請求依頼　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecTranBankaccountOutput extends BaseOutput {

	/**
	 * @var string 取引ID
	 */
	private $accessID;
	/**
	 * @var string 振替指定日
	 */
	private $targetDate;
	/**
	 * @var string 振替受付終了日
	 */
	private $requestAcceptEndDate;
	/**
	 * @var string 振替結果反映予定日
	 */
	private $transferReturnDate;


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
		$this->setTargetDate($params->get('TargetDate'));
		$this->setRequestAcceptEndDate($params->get('RequestAcceptEndDate'));
		$this->setTransferReturnDate($params->get('TransferReturnDate'));

	}

	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->accessID;
	}
	/**
	 * 振替指定日取得
	 * @return string 振替指定日
	 */
	public function getTargetDate() {
		return $this->targetDate;
	}
	/**
	 * 振替受付終了日取得
	 * @return string 振替受付終了日
	 */
	public function getRequestAcceptEndDate() {
		return $this->requestAcceptEndDate;
	}
	/**
	 * 振替結果反映予定日取得
	 * @return string 振替結果反映予定日
	 */
	public function getTransferReturnDate() {
		return $this->transferReturnDate;
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
	 * 振替指定日設定
	 *
	 * @param string $targetDate
	 */
	public function setTargetDate($targetDate) {
		$this->targetDate = $targetDate;
	}
	/**
	 * 振替受付終了日設定
	 *
	 * @param string $requestAcceptEndDate
	 */
	public function setRequestAcceptEndDate($requestAcceptEndDate) {
		$this->requestAcceptEndDate = $requestAcceptEndDate;
	}
	/**
	 * 振替結果反映予定日設定
	 *
	 * @param string $transferReturnDate
	 */
	public function setTransferReturnDate($transferReturnDate) {
		$this->transferReturnDate = $transferReturnDate;
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
		$str .= 'TargetDate=' . $this->encodeStr($this->getTargetDate());
		$str .='&';
		$str .= 'RequestAcceptEndDate=' . $this->encodeStr($this->getRequestAcceptEndDate());
		$str .='&';
		$str .= 'TransferReturnDate=' . $this->encodeStr($this->getTransferReturnDate());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
