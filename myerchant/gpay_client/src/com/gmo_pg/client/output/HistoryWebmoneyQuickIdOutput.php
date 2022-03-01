<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>WebmoneyクイックID利用明細URL取得　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class HistoryWebmoneyQuickIdOutput extends BaseOutput {

	/**
	 * @var string クイックID
	 */
	private $quickID;
	/**
	 * @var string 利用明細画面URL
	 */
	private $historyUrl;
	/**
	 * @var string 有効期限
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
		$this->setQuickID($params->get('QuickID'));
		$this->setHistoryUrl($params->get('HistoryUrl'));
		$this->setExpireDate($params->get('ExpireDate'));

	}

	/**
	 * クイックID取得
	 * @return string クイックID
	 */
	public function getQuickID() {
		return $this->quickID;
	}
	/**
	 * 利用明細画面URL取得
	 * @return string 利用明細画面URL
	 */
	public function getHistoryUrl() {
		return $this->historyUrl;
	}
	/**
	 * 有効期限取得
	 * @return string 有効期限
	 */
	public function getExpireDate() {
		return $this->expireDate;
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
	 * 利用明細画面URL設定
	 *
	 * @param string $historyUrl
	 */
	public function setHistoryUrl($historyUrl) {
		$this->historyUrl = $historyUrl;
	}
	/**
	 * 有効期限設定
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
		$str .= 'QuickID=' . $this->encodeStr($this->getQuickID());
		$str .='&';
		$str .= 'HistoryUrl=' . $this->encodeStr($this->getHistoryUrl());
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
