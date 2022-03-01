<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>メールリンク決済開始　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class MaillinkstartOutput extends BaseOutput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string メールリンク注文番号
	 */
	private $mailLinkOrderNo;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string メールリンクＵＲＬ
	 */
	private $maillinkUrl;
	/**
	 * @var string 処理日時
	 */
	private $processDate;
	/**
	 * @var string 有効期限日付
	 */
	private $expireDate;


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
		$this->setMailLinkOrderNo($params->get('MailLinkOrderNo'));
		$this->setOrderID($params->get('OrderID'));
		$this->setMaillinkUrl($params->get('MaillinkUrl'));
		$this->setProcessDate($params->get('ProcessDate'));
		$this->setExpireDate($params->get('ExpireDate'));

	}

	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}
	/**
	 * メールリンク注文番号取得
	 * @return string メールリンク注文番号
	 */
	public function getMailLinkOrderNo() {
		return $this->mailLinkOrderNo;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * メールリンクＵＲＬ取得
	 * @return string メールリンクＵＲＬ
	 */
	public function getMaillinkUrl() {
		return $this->maillinkUrl;
	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getProcessDate() {
		return $this->processDate;
	}
	/**
	 * 有効期限日付取得
	 * @return string 有効期限日付
	 */
	public function getExpireDate() {
		return $this->expireDate;
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
	 * メールリンク注文番号設定
	 *
	 * @param string $mailLinkOrderNo
	 */
	public function setMailLinkOrderNo($mailLinkOrderNo) {
		$this->mailLinkOrderNo = $mailLinkOrderNo;
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
	 * メールリンクＵＲＬ設定
	 *
	 * @param string $maillinkUrl
	 */
	public function setMaillinkUrl($maillinkUrl) {
		$this->maillinkUrl = $maillinkUrl;
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
	 * 有効期限日付設定
	 *
	 * @param string $expireDate
	 */
	public function setExpireDate($expireDate) {
		$this->expireDate = $expireDate;
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
		$str .= 'MailLinkOrderNo=' . $this->encodeStr($this->getMailLinkOrderNo());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'MaillinkUrl=' . $this->encodeStr($this->getMaillinkUrl());
		$str .='&';
		$str .= 'ProcessDate=' . $this->encodeStr($this->getProcessDate());
		$str .='&';
		$str .= 'ExpireDate=' . $this->encodeStr($this->getExpireDate());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
