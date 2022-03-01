<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>PGプリカPGプリカ履歴照会　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchPrecaHistoryInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string プリカ番号
	 */
	private $precaNo;
	/**
	 * @var string プリカ認証番号
	 */
	private $precaPass;
	/**
	 * @var string 検索タイプ
	 */
	private $searchType;
	/**
	 * @var string 日付
	 */
	private $day;
	/**
	 * @var string 月
	 */
	private $month;
	/**
	 * @var integer プリカ履歴連番
	 */
	private $precaSeq;
	/**
	 * @var string 処理タイプ
	 */
	private $processType;
	/**
	 * @var integer 開始位置
	 */
	private $offset;
	/**
	 * @var integer 最大検索数
	 */
	private $limit;
	/**
	 * @var string 加盟店自由項目返却フラグ
	 */
	private $clientFieldFlag;


	/**
	 * コンストラクタ
	 *
	 * @param array $params 入力パラメータ
	 */
	public function __construct($params = null) {
		parent::__construct($params);
	}


	/**
	 * ショップID取得
	 * @return string ショップID
	 */
	public function getShopID() {
		return $this->shopID;
	}
	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->shopPass;
	}
	/**
	 * プリカ番号取得
	 * @return string プリカ番号
	 */
	public function getPrecaNo() {
		return $this->precaNo;
	}
	/**
	 * プリカ認証番号取得
	 * @return string プリカ認証番号
	 */
	public function getPrecaPass() {
		return $this->precaPass;
	}
	/**
	 * 検索タイプ取得
	 * @return string 検索タイプ
	 */
	public function getSearchType() {
		return $this->searchType;
	}
	/**
	 * 日付取得
	 * @return string 日付
	 */
	public function getDay() {
		return $this->day;
	}
	/**
	 * 月取得
	 * @return string 月
	 */
	public function getMonth() {
		return $this->month;
	}
	/**
	 * プリカ履歴連番取得
	 * @return integer プリカ履歴連番
	 */
	public function getPrecaSeq() {
		return $this->precaSeq;
	}
	/**
	 * 処理タイプ取得
	 * @return string 処理タイプ
	 */
	public function getProcessType() {
		return $this->processType;
	}
	/**
	 * 開始位置取得
	 * @return integer 開始位置
	 */
	public function getOffset() {
		return $this->offset;
	}
	/**
	 * 最大検索数取得
	 * @return integer 最大検索数
	 */
	public function getLimit() {
		return $this->limit;
	}
	/**
	 * 加盟店自由項目返却フラグ取得
	 * @return string 加盟店自由項目返却フラグ
	 */
	public function getClientFieldFlag() {
		return $this->clientFieldFlag;
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
	 * ショップパスワード設定
	 *
	 * @param string $shopPass
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
	}
	/**
	 * プリカ番号設定
	 *
	 * @param string $precaNo
	 */
	public function setPrecaNo($precaNo) {
		$this->precaNo = $precaNo;
	}
	/**
	 * プリカ認証番号設定
	 *
	 * @param string $precaPass
	 */
	public function setPrecaPass($precaPass) {
		$this->precaPass = $precaPass;
	}
	/**
	 * 検索タイプ設定
	 *
	 * @param string $searchType
	 */
	public function setSearchType($searchType) {
		$this->searchType = $searchType;
	}
	/**
	 * 日付設定
	 *
	 * @param string $day
	 */
	public function setDay($day) {
		$this->day = $day;
	}
	/**
	 * 月設定
	 *
	 * @param string $month
	 */
	public function setMonth($month) {
		$this->month = $month;
	}
	/**
	 * プリカ履歴連番設定
	 *
	 * @param integer $precaSeq
	 */
	public function setPrecaSeq($precaSeq) {
		$this->precaSeq = $precaSeq;
	}
	/**
	 * 処理タイプ設定
	 *
	 * @param string $processType
	 */
	public function setProcessType($processType) {
		$this->processType = $processType;
	}
	/**
	 * 開始位置設定
	 *
	 * @param integer $offset
	 */
	public function setOffset($offset) {
		$this->offset = $offset;
	}
	/**
	 * 最大検索数設定
	 *
	 * @param integer $limit
	 */
	public function setLimit($limit) {
		$this->limit = $limit;
	}
	/**
	 * 加盟店自由項目返却フラグ設定
	 *
	 * @param string $clientFieldFlag
	 */
	public function setClientFieldFlag($clientFieldFlag) {
		$this->clientFieldFlag = $clientFieldFlag;
	}


	/**
	 * デフォルト値設定
	 */
	public function setDefaultValues() {

	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap $params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

		$this->setShopID($this->getStringValue($params, 'ShopID', $this->getShopID()));
		$this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
		$this->setPrecaNo($this->getStringValue($params, 'PrecaNo', $this->getPrecaNo()));
		$this->setPrecaPass($this->getStringValue($params, 'PrecaPass', $this->getPrecaPass()));
		$this->setSearchType($this->getStringValue($params, 'SearchType', $this->getSearchType()));
		$this->setDay($this->getStringValue($params, 'Day', $this->getDay()));
		$this->setMonth($this->getStringValue($params, 'Month', $this->getMonth()));
		$this->setPrecaSeq($this->getStringValue($params, 'PrecaSeq', $this->getPrecaSeq()));
		$this->setProcessType($this->getStringValue($params, 'ProcessType', $this->getProcessType()));
		$this->setOffset($this->getStringValue($params, 'Offset', $this->getOffset()));
		$this->setLimit($this->getStringValue($params, 'Limit', $this->getLimit()));
		$this->setClientFieldFlag($this->getStringValue($params, 'ClientFieldFlag', $this->getClientFieldFlag()));

	}

	/**
	 * 文字列表現
	 * @return string 接続文字列表現
	 */
	public function toString() {
		$str ='';
		$str .= 'ShopID=' . $this->encodeStr($this->getShopID());
		$str .='&';
		$str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
		$str .='&';
		$str .= 'PrecaNo=' . $this->encodeStr($this->getPrecaNo());
		$str .='&';
		$str .= 'PrecaPass=' . $this->encodeStr($this->getPrecaPass());
		$str .='&';
		$str .= 'SearchType=' . $this->encodeStr($this->getSearchType());
		$str .='&';
		$str .= 'Day=' . $this->encodeStr($this->getDay());
		$str .='&';
		$str .= 'Month=' . $this->encodeStr($this->getMonth());
		$str .='&';
		$str .= 'PrecaSeq=' . $this->encodeStr($this->getPrecaSeq());
		$str .='&';
		$str .= 'ProcessType=' . $this->encodeStr($this->getProcessType());
		$str .='&';
		$str .= 'Offset=' . $this->encodeStr($this->getOffset());
		$str .='&';
		$str .= 'Limit=' . $this->encodeStr($this->getLimit());
		$str .='&';
		$str .= 'ClientFieldFlag=' . $this->encodeStr($this->getClientFieldFlag());

	    return $str;
	}


}
?>
