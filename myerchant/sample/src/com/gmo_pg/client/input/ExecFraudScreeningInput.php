<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
require_once( 'com/gmo_pg/client/input/RedItemHolder.php');
/**
 * <b>不正防止実行　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class ExecFraudScreeningInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string 実行モード
	 */
	private $execMode;
	/**
	 * @var string 取引ID
	 */
	private $accessID;
	/**
	 * @var string 取引パスワード
	 */
	private $accessPass;
	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var bigDecimal 決済金額
	 */
	private $redAmt;
	/**
	 * @var string 通貨コード
	 */
	private $redCurrCd;
	/**
	 * @var string クレジットカード番号
	 */
	private $redAcctNum;
	/**
	 * @var string カード有効期限
	 */
	private $redCardExpDt;
	/**
	 * @var string 請求先情報有無判定フラグ
	 */
	private $redCustTypeCd;
	/**
	 * @var string ユーザID
	 */
	private $redCustId;
	/**
	 * @var string カード名義
	 */
	private $redCustFname;
	/**
	 * @var string 請求先顧客苗字
	 */
	private $redCustLname;
	/**
	 * @var string 請求先顧客住所１
	 */
	private $redCustAddr1;
	/**
	 * @var string 請求先顧客住所２
	 */
	private $redCustAddr2;
	/**
	 * @var string 請求先顧客住所３
	 */
	private $redCustAddr3;
	/**
	 * @var string 請求先顧客都道府県
	 */
	private $redCustCity;
	/**
	 * @var string 請求先顧客郵便番号
	 */
	private $redCustPostalCd;
	/**
	 * @var string 請求先顧客国
	 */
	private $redCustCntryCd;
	/**
	 * @var string 請求先顧客電話番号
	 */
	private $redCustHomePhone;
	/**
	 * @var string 請求先顧客メールアドレス
	 */
	private $redCustEmail;
	/**
	 * @var string エンドユーザIPアドレス
	 */
	private $redCustIpAddr;
	/**
	 * @var string リピータフラグ
	 */
	private $redEbtPrevcust;
	/**
	 * @var integer ユーザID登録後経過日数
	 */
	private $redEbtTof;
	/**
	 * @var string 発送先情報有無判定フラグ
	 */
	private $redShipTypeCd;
	/**
	 * @var string 発送先名前
	 */
	private $redShipFname;
	/**
	 * @var string 発送先苗字
	 */
	private $redShipLname;
	/**
	 * @var string 発送先住所１
	 */
	private $redShipAddr1;
	/**
	 * @var string 発送先住所２
	 */
	private $redShipAddr2;
	/**
	 * @var string 発送先住所３
	 */
	private $redShipAddr3;
	/**
	 * @var string 発送先都道府県
	 */
	private $redShipCity;
	/**
	 * @var string 発送先郵便番号
	 */
	private $redShipPostalCd;
	/**
	 * @var string 加盟店名
	 */
	private $redEmpCompany;
	/**
	 * @var string デバイス情報
	 */
	private $redEbtDeviceprint;
	/**
	 * @var string 予備項目8
	 */
	private $redEbtUserData8;
	/**
	 * @var string 予備項目9
	 */
	private $redEbtUserData9;
	/**
	 * @var integer 再購入日数
	 */
	private $redEbtUserData11;
	/**
	 * @var integer 過去購買回数
	 */
	private $redEbtUserData12;
	/**
	 * @var string 与信結果
	 */
	private $redEbtUserData13;
	/**
	 * @var string 郵便局・営業所留フラグ
	 */
	private $redEbtUserData15;
	/**
	 * @var string 郵便局・営業所名
	 */
	private $redEbtUserData16;
	/**
	 * @var integer ユーザポイント残高
	 */
	private $redEbtUserData17;
	/**
	 * @var integer カード登録変更回数
	 */
	private $redEbtUserData18;
	/**
	 * @var string 予備項目19
	 */
	private $redEbtUserData19;
	/**
	 * @var integer カードTOF
	 */
	private $redEbtUserData20;
	/**
	 * @var string 予備項目21
	 */
	private $redEbtUserData21;
	/**
	 * @var string 予備項目22
	 */
	private $redEbtUserData22;
	/**
	 * @var string 予備項目23
	 */
	private $redEbtUserData23;
	/**
	 * @var string 予備項目24
	 */
	private $redEbtUserData24;
	/**
	 * @var string 予備項目25
	 */
	private $redEbtUserData25;
	/**
	 * @var integer 繰り返し回数
	 */
	private $redOiRepeat;
	/**
	 * @var array 商品情報リスト
	 */
	private $redItemList;
	/**
	 * @var string 電文タイプ
	 */
	private $telegramType;


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
	 * 実行モード取得
	 * @return string 実行モード
	 */
	public function getExecMode() {
		return $this->execMode;
	}
	/**
	 * 取引ID取得
	 * @return string 取引ID
	 */
	public function getAccessID() {
		return $this->accessID;
	}
	/**
	 * 取引パスワード取得
	 * @return string 取引パスワード
	 */
	public function getAccessPass() {
		return $this->accessPass;
	}
	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 決済金額取得
	 * @return bigDecimal 決済金額
	 */
	public function getRedAmt() {
		return $this->redAmt;
	}
	/**
	 * 通貨コード取得
	 * @return string 通貨コード
	 */
	public function getRedCurrCd() {
		return $this->redCurrCd;
	}
	/**
	 * クレジットカード番号取得
	 * @return string クレジットカード番号
	 */
	public function getRedAcctNum() {
		return $this->redAcctNum;
	}
	/**
	 * カード有効期限取得
	 * @return string カード有効期限
	 */
	public function getRedCardExpDt() {
		return $this->redCardExpDt;
	}
	/**
	 * 請求先情報有無判定フラグ取得
	 * @return string 請求先情報有無判定フラグ
	 */
	public function getRedCustTypeCd() {
		return $this->redCustTypeCd;
	}
	/**
	 * ユーザID取得
	 * @return string ユーザID
	 */
	public function getRedCustId() {
		return $this->redCustId;
	}
	/**
	 * カード名義取得
	 * @return string カード名義
	 */
	public function getRedCustFname() {
		return $this->redCustFname;
	}
	/**
	 * 請求先顧客苗字取得
	 * @return string 請求先顧客苗字
	 */
	public function getRedCustLname() {
		return $this->redCustLname;
	}
	/**
	 * 請求先顧客住所１取得
	 * @return string 請求先顧客住所１
	 */
	public function getRedCustAddr1() {
		return $this->redCustAddr1;
	}
	/**
	 * 請求先顧客住所２取得
	 * @return string 請求先顧客住所２
	 */
	public function getRedCustAddr2() {
		return $this->redCustAddr2;
	}
	/**
	 * 請求先顧客住所３取得
	 * @return string 請求先顧客住所３
	 */
	public function getRedCustAddr3() {
		return $this->redCustAddr3;
	}
	/**
	 * 請求先顧客都道府県取得
	 * @return string 請求先顧客都道府県
	 */
	public function getRedCustCity() {
		return $this->redCustCity;
	}
	/**
	 * 請求先顧客郵便番号取得
	 * @return string 請求先顧客郵便番号
	 */
	public function getRedCustPostalCd() {
		return $this->redCustPostalCd;
	}
	/**
	 * 請求先顧客国取得
	 * @return string 請求先顧客国
	 */
	public function getRedCustCntryCd() {
		return $this->redCustCntryCd;
	}
	/**
	 * 請求先顧客電話番号取得
	 * @return string 請求先顧客電話番号
	 */
	public function getRedCustHomePhone() {
		return $this->redCustHomePhone;
	}
	/**
	 * 請求先顧客メールアドレス取得
	 * @return string 請求先顧客メールアドレス
	 */
	public function getRedCustEmail() {
		return $this->redCustEmail;
	}
	/**
	 * エンドユーザIPアドレス取得
	 * @return string エンドユーザIPアドレス
	 */
	public function getRedCustIpAddr() {
		return $this->redCustIpAddr;
	}
	/**
	 * リピータフラグ取得
	 * @return string リピータフラグ
	 */
	public function getRedEbtPrevcust() {
		return $this->redEbtPrevcust;
	}
	/**
	 * ユーザID登録後経過日数取得
	 * @return integer ユーザID登録後経過日数
	 */
	public function getRedEbtTof() {
		return $this->redEbtTof;
	}
	/**
	 * 発送先情報有無判定フラグ取得
	 * @return string 発送先情報有無判定フラグ
	 */
	public function getRedShipTypeCd() {
		return $this->redShipTypeCd;
	}
	/**
	 * 発送先名前取得
	 * @return string 発送先名前
	 */
	public function getRedShipFname() {
		return $this->redShipFname;
	}
	/**
	 * 発送先苗字取得
	 * @return string 発送先苗字
	 */
	public function getRedShipLname() {
		return $this->redShipLname;
	}
	/**
	 * 発送先住所１取得
	 * @return string 発送先住所１
	 */
	public function getRedShipAddr1() {
		return $this->redShipAddr1;
	}
	/**
	 * 発送先住所２取得
	 * @return string 発送先住所２
	 */
	public function getRedShipAddr2() {
		return $this->redShipAddr2;
	}
	/**
	 * 発送先住所３取得
	 * @return string 発送先住所３
	 */
	public function getRedShipAddr3() {
		return $this->redShipAddr3;
	}
	/**
	 * 発送先都道府県取得
	 * @return string 発送先都道府県
	 */
	public function getRedShipCity() {
		return $this->redShipCity;
	}
	/**
	 * 発送先郵便番号取得
	 * @return string 発送先郵便番号
	 */
	public function getRedShipPostalCd() {
		return $this->redShipPostalCd;
	}
	/**
	 * 加盟店名取得
	 * @return string 加盟店名
	 */
	public function getRedEmpCompany() {
		return $this->redEmpCompany;
	}
	/**
	 * デバイス情報取得
	 * @return string デバイス情報
	 */
	public function getRedEbtDeviceprint() {
		return $this->redEbtDeviceprint;
	}
	/**
	 * 予備項目8取得
	 * @return string 予備項目8
	 */
	public function getRedEbtUserData8() {
		return $this->redEbtUserData8;
	}
	/**
	 * 予備項目9取得
	 * @return string 予備項目9
	 */
	public function getRedEbtUserData9() {
		return $this->redEbtUserData9;
	}
	/**
	 * 再購入日数取得
	 * @return integer 再購入日数
	 */
	public function getRedEbtUserData11() {
		return $this->redEbtUserData11;
	}
	/**
	 * 過去購買回数取得
	 * @return integer 過去購買回数
	 */
	public function getRedEbtUserData12() {
		return $this->redEbtUserData12;
	}
	/**
	 * 与信結果取得
	 * @return string 与信結果
	 */
	public function getRedEbtUserData13() {
		return $this->redEbtUserData13;
	}
	/**
	 * 郵便局・営業所留フラグ取得
	 * @return string 郵便局・営業所留フラグ
	 */
	public function getRedEbtUserData15() {
		return $this->redEbtUserData15;
	}
	/**
	 * 郵便局・営業所名取得
	 * @return string 郵便局・営業所名
	 */
	public function getRedEbtUserData16() {
		return $this->redEbtUserData16;
	}
	/**
	 * ユーザポイント残高取得
	 * @return integer ユーザポイント残高
	 */
	public function getRedEbtUserData17() {
		return $this->redEbtUserData17;
	}
	/**
	 * カード登録変更回数取得
	 * @return integer カード登録変更回数
	 */
	public function getRedEbtUserData18() {
		return $this->redEbtUserData18;
	}
	/**
	 * 予備項目19取得
	 * @return string 予備項目19
	 */
	public function getRedEbtUserData19() {
		return $this->redEbtUserData19;
	}
	/**
	 * カードTOF取得
	 * @return integer カードTOF
	 */
	public function getRedEbtUserData20() {
		return $this->redEbtUserData20;
	}
	/**
	 * 予備項目21取得
	 * @return string 予備項目21
	 */
	public function getRedEbtUserData21() {
		return $this->redEbtUserData21;
	}
	/**
	 * 予備項目22取得
	 * @return string 予備項目22
	 */
	public function getRedEbtUserData22() {
		return $this->redEbtUserData22;
	}
	/**
	 * 予備項目23取得
	 * @return string 予備項目23
	 */
	public function getRedEbtUserData23() {
		return $this->redEbtUserData23;
	}
	/**
	 * 予備項目24取得
	 * @return string 予備項目24
	 */
	public function getRedEbtUserData24() {
		return $this->redEbtUserData24;
	}
	/**
	 * 予備項目25取得
	 * @return string 予備項目25
	 */
	public function getRedEbtUserData25() {
		return $this->redEbtUserData25;
	}
	/**
	 * 繰り返し回数取得
	 * @return integer 繰り返し回数
	 */
	public function getRedOiRepeat() {
		return $this->redOiRepeat;
	}
	/**
	 * 商品情報リスト取得
	 * @return array 商品情報リスト
	 */
	public function getRedItemList() {
		return $this->redItemList;
	}
	/**
	 * 電文タイプ取得
	 * @return string 電文タイプ
	 */
	public function getTelegramType() {
		return $this->telegramType;
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
	 * 実行モード設定
	 *
	 * @param string $execMode
	 */
	public function setExecMode($execMode) {
		$this->execMode = $execMode;
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
	 * 取引パスワード設定
	 *
	 * @param string $accessPass
	 */
	public function setAccessPass($accessPass) {
		$this->accessPass = $accessPass;
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
	 * 決済金額設定
	 *
	 * @param bigDecimal $redAmt
	 */
	public function setRedAmt($redAmt) {
		$this->redAmt = $redAmt;
	}
	/**
	 * 通貨コード設定
	 *
	 * @param string $redCurrCd
	 */
	public function setRedCurrCd($redCurrCd) {
		$this->redCurrCd = $redCurrCd;
	}
	/**
	 * クレジットカード番号設定
	 *
	 * @param string $redAcctNum
	 */
	public function setRedAcctNum($redAcctNum) {
		$this->redAcctNum = $redAcctNum;
	}
	/**
	 * カード有効期限設定
	 *
	 * @param string $redCardExpDt
	 */
	public function setRedCardExpDt($redCardExpDt) {
		$this->redCardExpDt = $redCardExpDt;
	}
	/**
	 * 請求先情報有無判定フラグ設定
	 *
	 * @param string $redCustTypeCd
	 */
	public function setRedCustTypeCd($redCustTypeCd) {
		$this->redCustTypeCd = $redCustTypeCd;
	}
	/**
	 * ユーザID設定
	 *
	 * @param string $redCustId
	 */
	public function setRedCustId($redCustId) {
		$this->redCustId = $redCustId;
	}
	/**
	 * カード名義設定
	 *
	 * @param string $redCustFname
	 */
	public function setRedCustFname($redCustFname) {
		$this->redCustFname = $redCustFname;
	}
	/**
	 * 請求先顧客苗字設定
	 *
	 * @param string $redCustLname
	 */
	public function setRedCustLname($redCustLname) {
		$this->redCustLname = $redCustLname;
	}
	/**
	 * 請求先顧客住所１設定
	 *
	 * @param string $redCustAddr1
	 */
	public function setRedCustAddr1($redCustAddr1) {
		$this->redCustAddr1 = $redCustAddr1;
	}
	/**
	 * 請求先顧客住所２設定
	 *
	 * @param string $redCustAddr2
	 */
	public function setRedCustAddr2($redCustAddr2) {
		$this->redCustAddr2 = $redCustAddr2;
	}
	/**
	 * 請求先顧客住所３設定
	 *
	 * @param string $redCustAddr3
	 */
	public function setRedCustAddr3($redCustAddr3) {
		$this->redCustAddr3 = $redCustAddr3;
	}
	/**
	 * 請求先顧客都道府県設定
	 *
	 * @param string $redCustCity
	 */
	public function setRedCustCity($redCustCity) {
		$this->redCustCity = $redCustCity;
	}
	/**
	 * 請求先顧客郵便番号設定
	 *
	 * @param string $redCustPostalCd
	 */
	public function setRedCustPostalCd($redCustPostalCd) {
		$this->redCustPostalCd = $redCustPostalCd;
	}
	/**
	 * 請求先顧客国設定
	 *
	 * @param string $redCustCntryCd
	 */
	public function setRedCustCntryCd($redCustCntryCd) {
		$this->redCustCntryCd = $redCustCntryCd;
	}
	/**
	 * 請求先顧客電話番号設定
	 *
	 * @param string $redCustHomePhone
	 */
	public function setRedCustHomePhone($redCustHomePhone) {
		$this->redCustHomePhone = $redCustHomePhone;
	}
	/**
	 * 請求先顧客メールアドレス設定
	 *
	 * @param string $redCustEmail
	 */
	public function setRedCustEmail($redCustEmail) {
		$this->redCustEmail = $redCustEmail;
	}
	/**
	 * エンドユーザIPアドレス設定
	 *
	 * @param string $redCustIpAddr
	 */
	public function setRedCustIpAddr($redCustIpAddr) {
		$this->redCustIpAddr = $redCustIpAddr;
	}
	/**
	 * リピータフラグ設定
	 *
	 * @param string $redEbtPrevcust
	 */
	public function setRedEbtPrevcust($redEbtPrevcust) {
		$this->redEbtPrevcust = $redEbtPrevcust;
	}
	/**
	 * ユーザID登録後経過日数設定
	 *
	 * @param integer $redEbtTof
	 */
	public function setRedEbtTof($redEbtTof) {
		$this->redEbtTof = $redEbtTof;
	}
	/**
	 * 発送先情報有無判定フラグ設定
	 *
	 * @param string $redShipTypeCd
	 */
	public function setRedShipTypeCd($redShipTypeCd) {
		$this->redShipTypeCd = $redShipTypeCd;
	}
	/**
	 * 発送先名前設定
	 *
	 * @param string $redShipFname
	 */
	public function setRedShipFname($redShipFname) {
		$this->redShipFname = $redShipFname;
	}
	/**
	 * 発送先苗字設定
	 *
	 * @param string $redShipLname
	 */
	public function setRedShipLname($redShipLname) {
		$this->redShipLname = $redShipLname;
	}
	/**
	 * 発送先住所１設定
	 *
	 * @param string $redShipAddr1
	 */
	public function setRedShipAddr1($redShipAddr1) {
		$this->redShipAddr1 = $redShipAddr1;
	}
	/**
	 * 発送先住所２設定
	 *
	 * @param string $redShipAddr2
	 */
	public function setRedShipAddr2($redShipAddr2) {
		$this->redShipAddr2 = $redShipAddr2;
	}
	/**
	 * 発送先住所３設定
	 *
	 * @param string $redShipAddr3
	 */
	public function setRedShipAddr3($redShipAddr3) {
		$this->redShipAddr3 = $redShipAddr3;
	}
	/**
	 * 発送先都道府県設定
	 *
	 * @param string $redShipCity
	 */
	public function setRedShipCity($redShipCity) {
		$this->redShipCity = $redShipCity;
	}
	/**
	 * 発送先郵便番号設定
	 *
	 * @param string $redShipPostalCd
	 */
	public function setRedShipPostalCd($redShipPostalCd) {
		$this->redShipPostalCd = $redShipPostalCd;
	}
	/**
	 * 加盟店名設定
	 *
	 * @param string $redEmpCompany
	 */
	public function setRedEmpCompany($redEmpCompany) {
		$this->redEmpCompany = $redEmpCompany;
	}
	/**
	 * デバイス情報設定
	 *
	 * @param string $redEbtDeviceprint
	 */
	public function setRedEbtDeviceprint($redEbtDeviceprint) {
		$this->redEbtDeviceprint = $redEbtDeviceprint;
	}
	/**
	 * 予備項目8設定
	 *
	 * @param string $redEbtUserData8
	 */
	public function setRedEbtUserData8($redEbtUserData8) {
		$this->redEbtUserData8 = $redEbtUserData8;
	}
	/**
	 * 予備項目9設定
	 *
	 * @param string $redEbtUserData9
	 */
	public function setRedEbtUserData9($redEbtUserData9) {
		$this->redEbtUserData9 = $redEbtUserData9;
	}
	/**
	 * 再購入日数設定
	 *
	 * @param integer $redEbtUserData11
	 */
	public function setRedEbtUserData11($redEbtUserData11) {
		$this->redEbtUserData11 = $redEbtUserData11;
	}
	/**
	 * 過去購買回数設定
	 *
	 * @param integer $redEbtUserData12
	 */
	public function setRedEbtUserData12($redEbtUserData12) {
		$this->redEbtUserData12 = $redEbtUserData12;
	}
	/**
	 * 与信結果設定
	 *
	 * @param string $redEbtUserData13
	 */
	public function setRedEbtUserData13($redEbtUserData13) {
		$this->redEbtUserData13 = $redEbtUserData13;
	}
	/**
	 * 郵便局・営業所留フラグ設定
	 *
	 * @param string $redEbtUserData15
	 */
	public function setRedEbtUserData15($redEbtUserData15) {
		$this->redEbtUserData15 = $redEbtUserData15;
	}
	/**
	 * 郵便局・営業所名設定
	 *
	 * @param string $redEbtUserData16
	 */
	public function setRedEbtUserData16($redEbtUserData16) {
		$this->redEbtUserData16 = $redEbtUserData16;
	}
	/**
	 * ユーザポイント残高設定
	 *
	 * @param integer $redEbtUserData17
	 */
	public function setRedEbtUserData17($redEbtUserData17) {
		$this->redEbtUserData17 = $redEbtUserData17;
	}
	/**
	 * カード登録変更回数設定
	 *
	 * @param integer $redEbtUserData18
	 */
	public function setRedEbtUserData18($redEbtUserData18) {
		$this->redEbtUserData18 = $redEbtUserData18;
	}
	/**
	 * 予備項目19設定
	 *
	 * @param string $redEbtUserData19
	 */
	public function setRedEbtUserData19($redEbtUserData19) {
		$this->redEbtUserData19 = $redEbtUserData19;
	}
	/**
	 * カードTOF設定
	 *
	 * @param integer $redEbtUserData20
	 */
	public function setRedEbtUserData20($redEbtUserData20) {
		$this->redEbtUserData20 = $redEbtUserData20;
	}
	/**
	 * 予備項目21設定
	 *
	 * @param string $redEbtUserData21
	 */
	public function setRedEbtUserData21($redEbtUserData21) {
		$this->redEbtUserData21 = $redEbtUserData21;
	}
	/**
	 * 予備項目22設定
	 *
	 * @param string $redEbtUserData22
	 */
	public function setRedEbtUserData22($redEbtUserData22) {
		$this->redEbtUserData22 = $redEbtUserData22;
	}
	/**
	 * 予備項目23設定
	 *
	 * @param string $redEbtUserData23
	 */
	public function setRedEbtUserData23($redEbtUserData23) {
		$this->redEbtUserData23 = $redEbtUserData23;
	}
	/**
	 * 予備項目24設定
	 *
	 * @param string $redEbtUserData24
	 */
	public function setRedEbtUserData24($redEbtUserData24) {
		$this->redEbtUserData24 = $redEbtUserData24;
	}
	/**
	 * 予備項目25設定
	 *
	 * @param string $redEbtUserData25
	 */
	public function setRedEbtUserData25($redEbtUserData25) {
		$this->redEbtUserData25 = $redEbtUserData25;
	}
	/**
	 * 商品情報リスト設定
	 *
	 * @param array $redItemList
	 */
	public function setRedItemList($redItemList) {
		if (is_array($redItemList) && count($redItemList) > 0){
			$this->redItemList = $redItemList;
			$this->redOiRepeat = count($redItemList);
		} else {
			$this->redItemList = array();
		}
	}
	/**
	 * 電文タイプ設定
	 *
	 * @param string $telegramType
	 */
	public function setTelegramType($telegramType) {
		$this->telegramType = $telegramType;
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
		$this->setExecMode($this->getStringValue($params, 'ExecMode', $this->getExecMode()));
		$this->setAccessID($this->getStringValue($params, 'AccessID', $this->getAccessID()));
		$this->setAccessPass($this->getStringValue($params, 'AccessPass', $this->getAccessPass()));
		$this->setOrderID($this->getStringValue($params, 'OrderID', $this->getOrderID()));
		$this->setRedAmt($this->getStringValue($params, 'RedAmt', $this->getRedAmt()));
		$this->setRedCurrCd($this->getStringValue($params, 'RedCurrCd', $this->getRedCurrCd()));
		$this->setRedAcctNum($this->getStringValue($params, 'RedAcctNum', $this->getRedAcctNum()));
		$this->setRedCardExpDt($this->getStringValue($params, 'RedCardExpDt', $this->getRedCardExpDt()));
		$this->setRedCustTypeCd($this->getStringValue($params, 'RedCustTypeCd', $this->getRedCustTypeCd()));
		$this->setRedCustId($this->getStringValue($params, 'RedCustId', $this->getRedCustId()));
		$this->setRedCustFname($this->getStringValue($params, 'RedCustFname', $this->getRedCustFname()));
		$this->setRedCustLname($this->getStringValue($params, 'RedCustLname', $this->getRedCustLname()));
		$this->setRedCustAddr1($this->getStringValue($params, 'RedCustAddr1', $this->getRedCustAddr1()));
		$this->setRedCustAddr2($this->getStringValue($params, 'RedCustAddr2', $this->getRedCustAddr2()));
		$this->setRedCustAddr3($this->getStringValue($params, 'RedCustAddr3', $this->getRedCustAddr3()));
		$this->setRedCustCity($this->getStringValue($params, 'RedCustCity', $this->getRedCustCity()));
		$this->setRedCustPostalCd($this->getStringValue($params, 'RedCustPostalCd', $this->getRedCustPostalCd()));
		$this->setRedCustCntryCd($this->getStringValue($params, 'RedCustCntryCd', $this->getRedCustCntryCd()));
		$this->setRedCustHomePhone($this->getStringValue($params, 'RedCustHomePhone', $this->getRedCustHomePhone()));
		$this->setRedCustEmail($this->getStringValue($params, 'RedCustEmail', $this->getRedCustEmail()));
		$this->setRedCustIpAddr($this->getStringValue($params, 'RedCustIpAddr', $this->getRedCustIpAddr()));
		$this->setRedEbtPrevcust($this->getStringValue($params, 'RedEbtPrevcust', $this->getRedEbtPrevcust()));
		$this->setRedEbtTof($this->getStringValue($params, 'RedEbtTof', $this->getRedEbtTof()));
		$this->setRedShipTypeCd($this->getStringValue($params, 'RedShipTypeCd', $this->getRedShipTypeCd()));
		$this->setRedShipFname($this->getStringValue($params, 'RedShipFname', $this->getRedShipFname()));
		$this->setRedShipLname($this->getStringValue($params, 'RedShipLname', $this->getRedShipLname()));
		$this->setRedShipAddr1($this->getStringValue($params, 'RedShipAddr1', $this->getRedShipAddr1()));
		$this->setRedShipAddr2($this->getStringValue($params, 'RedShipAddr2', $this->getRedShipAddr2()));
		$this->setRedShipAddr3($this->getStringValue($params, 'RedShipAddr3', $this->getRedShipAddr3()));
		$this->setRedShipCity($this->getStringValue($params, 'RedShipCity', $this->getRedShipCity()));
		$this->setRedShipPostalCd($this->getStringValue($params, 'RedShipPostalCd', $this->getRedShipPostalCd()));
		$this->setRedEmpCompany($this->getStringValue($params, 'RedEmpCompany', $this->getRedEmpCompany()));
		$this->setRedEbtDeviceprint($this->getStringValue($params, 'RedEbtDeviceprint', $this->getRedEbtDeviceprint()));
		$this->setRedEbtUserData8($this->getStringValue($params, 'RedEbtUserData8', $this->getRedEbtUserData8()));
		$this->setRedEbtUserData9($this->getStringValue($params, 'RedEbtUserData9', $this->getRedEbtUserData9()));
		$this->setRedEbtUserData11($this->getStringValue($params, 'RedEbtUserData11', $this->getRedEbtUserData11()));
		$this->setRedEbtUserData12($this->getStringValue($params, 'RedEbtUserData12', $this->getRedEbtUserData12()));
		$this->setRedEbtUserData13($this->getStringValue($params, 'RedEbtUserData13', $this->getRedEbtUserData13()));
		$this->setRedEbtUserData15($this->getStringValue($params, 'RedEbtUserData15', $this->getRedEbtUserData15()));
		$this->setRedEbtUserData16($this->getStringValue($params, 'RedEbtUserData16', $this->getRedEbtUserData16()));
		$this->setRedEbtUserData17($this->getStringValue($params, 'RedEbtUserData17', $this->getRedEbtUserData17()));
		$this->setRedEbtUserData18($this->getStringValue($params, 'RedEbtUserData18', $this->getRedEbtUserData18()));
		$this->setRedEbtUserData19($this->getStringValue($params, 'RedEbtUserData19', $this->getRedEbtUserData19()));
		$this->setRedEbtUserData20($this->getStringValue($params, 'RedEbtUserData20', $this->getRedEbtUserData20()));
		$this->setRedEbtUserData21($this->getStringValue($params, 'RedEbtUserData21', $this->getRedEbtUserData21()));
		$this->setRedEbtUserData22($this->getStringValue($params, 'RedEbtUserData22', $this->getRedEbtUserData22()));
		$this->setRedEbtUserData23($this->getStringValue($params, 'RedEbtUserData23', $this->getRedEbtUserData23()));
		$this->setRedEbtUserData24($this->getStringValue($params, 'RedEbtUserData24', $this->getRedEbtUserData24()));
		$this->setRedEbtUserData25($this->getStringValue($params, 'RedEbtUserData25', $this->getRedEbtUserData25()));
		$this->setRedItemList($this->getStringValue($params, 'RedItemList', $this->getRedItemList()));
		$this->setTelegramType($this->getStringValue($params, 'TelegramType', $this->getTelegramType()));

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
		$str .= 'ExecMode=' . $this->encodeStr($this->getExecMode());
		$str .='&';
		$str .= 'AccessID=' . $this->encodeStr($this->getAccessID());
		$str .='&';
		$str .= 'AccessPass=' . $this->encodeStr($this->getAccessPass());
		$str .='&';
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'RED_AMT=' . $this->encodeStr($this->getRedAmt());
		$str .='&';
		$str .= 'RED_CURR_CD=' . $this->encodeStr($this->getRedCurrCd());
		$str .='&';
		$str .= 'RED_ACCT_NUM=' . $this->encodeStr($this->getRedAcctNum());
		$str .='&';
		$str .= 'RED_CARD_EXP_DT=' . $this->encodeStr($this->getRedCardExpDt());
		$str .='&';
		$str .= 'RED_CUST_TYPE_CD=' . $this->encodeStr($this->getRedCustTypeCd());
		$str .='&';
		$str .= 'RED_CUST_ID=' . $this->encodeStr($this->getRedCustId());
		$str .='&';
		$str .= 'RED_CUST_FNAME=' . $this->encodeStr($this->getRedCustFname());
		$str .='&';
		$str .= 'RED_CUST_LNAME=' . $this->encodeStr($this->getRedCustLname());
		$str .='&';
		$str .= 'RED_CUST_ADDR1=' . $this->encodeStr($this->getRedCustAddr1());
		$str .='&';
		$str .= 'RED_CUST_ADDR2=' . $this->encodeStr($this->getRedCustAddr2());
		$str .='&';
		$str .= 'RED_CUST_ADDR3=' . $this->encodeStr($this->getRedCustAddr3());
		$str .='&';
		$str .= 'RED_CUST_CITY=' . $this->encodeStr($this->getRedCustCity());
		$str .='&';
		$str .= 'RED_CUST_POSTAL_CD=' . $this->encodeStr($this->getRedCustPostalCd());
		$str .='&';
		$str .= 'RED_CUST_CNTRY_CD=' . $this->encodeStr($this->getRedCustCntryCd());
		$str .='&';
		$str .= 'RED_CUST_HOME_PHONE=' . $this->encodeStr($this->getRedCustHomePhone());
		$str .='&';
		$str .= 'RED_CUST_EMAIL=' . $this->encodeStr($this->getRedCustEmail());
		$str .='&';
		$str .= 'RED_CUST_IP_ADDR=' . $this->encodeStr($this->getRedCustIpAddr());
		$str .='&';
		$str .= 'RED_EBT_PREVCUST=' . $this->encodeStr($this->getRedEbtPrevcust());
		$str .='&';
		$str .= 'RED_EBT_TOF=' . $this->encodeStr($this->getRedEbtTof());
		$str .='&';
		$str .= 'RED_SHIP_TYPE_CD=' . $this->encodeStr($this->getRedShipTypeCd());
		$str .='&';
		$str .= 'RED_SHIP_FNAME=' . $this->encodeStr($this->getRedShipFname());
		$str .='&';
		$str .= 'RED_SHIP_LNAME=' . $this->encodeStr($this->getRedShipLname());
		$str .='&';
		$str .= 'RED_SHIP_ADDR1=' . $this->encodeStr($this->getRedShipAddr1());
		$str .='&';
		$str .= 'RED_SHIP_ADDR2=' . $this->encodeStr($this->getRedShipAddr2());
		$str .='&';
		$str .= 'RED_SHIP_ADDR3=' . $this->encodeStr($this->getRedShipAddr3());
		$str .='&';
		$str .= 'RED_SHIP_CITY=' . $this->encodeStr($this->getRedShipCity());
		$str .='&';
		$str .= 'RED_SHIP_POSTAL_CD=' . $this->encodeStr($this->getRedShipPostalCd());
		$str .='&';
		$str .= 'RED_EMP_COMPANY=' . $this->encodeStr($this->getRedEmpCompany());
		$str .='&';
		$str .= 'RED_EBT_DEVICEPRINT=' . $this->encodeStr($this->getRedEbtDeviceprint());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA8=' . $this->encodeStr($this->getRedEbtUserData8());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA9=' . $this->encodeStr($this->getRedEbtUserData9());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA11=' . $this->encodeStr($this->getRedEbtUserData11());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA12=' . $this->encodeStr($this->getRedEbtUserData12());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA13=' . $this->encodeStr($this->getRedEbtUserData13());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA15=' . $this->encodeStr($this->getRedEbtUserData15());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA16=' . $this->encodeStr($this->getRedEbtUserData16());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA17=' . $this->encodeStr($this->getRedEbtUserData17());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA18=' . $this->encodeStr($this->getRedEbtUserData18());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA19=' . $this->encodeStr($this->getRedEbtUserData19());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA20=' . $this->encodeStr($this->getRedEbtUserData20());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA21=' . $this->encodeStr($this->getRedEbtUserData21());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA22=' . $this->encodeStr($this->getRedEbtUserData22());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA23=' . $this->encodeStr($this->getRedEbtUserData23());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA24=' . $this->encodeStr($this->getRedEbtUserData24());
		$str .='&';
		$str .= 'RED_EBT_USER_DATA25=' . $this->encodeStr($this->getRedEbtUserData25());
		$str .='&';
		$str .= 'RED_OI_REPEAT=' . $this->encodeStr($this->getRedOiRepeat());

		// 商品情報の入力パラメータを設定
		$count = 1;
		foreach( $this->redItemList as $redItemHolder ){

			$str .='&';
			$str .= 'RED_ITEM_QTY' . $count . '=' . $this->encodeStr($redItemHolder->getRedItemQty());
			$str .='&';
			$str .= 'RED_ITEM_PROD_CD' . $count . '=' . $this->encodeStr($redItemHolder->getRedItemProdCd());
			$str .='&';
			$str .= 'RED_ITEM_MAN_PART_NO' . $count . '=' . $this->encodeStr($redItemHolder->getRedItemManPartNo());
			$str .='&';
			$str .= 'RED_ITEM_DESC' . $count . '=' . $this->encodeStr($redItemHolder->getRedItemDesc());
			$str .='&';
			$str .= 'RED_EBT_ITEM_CST' . $count . '=' . $this->encodeStr($redItemHolder->getRedEbtItemCst());
			$str .='&';
			$str .= 'RED_ITEM_GIFT_MSG' . $count . '=' . $this->encodeStr($redItemHolder->getRedItemGiftMsg());

			$count++;
		}

		$str .='&';
		$str .= 'TelegramType=' . $this->encodeStr($this->getTelegramType());

		return $str;
	}


}
?>
