<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>Paid取引先登録　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SavePaidBuyerInput extends BaseInput {

	/**
	 * @var string ショップID
	 */
	private $shopID;
	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;
	/**
	 * @var string Paid取引先ID
	 */
	private $paidBuyerID;
	/**
	 * @var string 会社名
	 */
	private $companyName;
	/**
	 * @var string 会社名カナ
	 */
	private $companyNameKana;
	/**
	 * @var string 代表者姓
	 */
	private $representativeSei;
	/**
	 * @var string 代表者名
	 */
	private $representativeMei;
	/**
	 * @var string 代表者姓カナ
	 */
	private $representativeSeiKana;
	/**
	 * @var string 代表社名カナ
	 */
	private $representativeMeiKana;
	/**
	 * @var string 郵便番号
	 */
	private $zipCode;
	/**
	 * @var string 都道府県
	 */
	private $prefecture;
	/**
	 * @var string 市区町村
	 */
	private $address1;
	/**
	 * @var string 町名・番地
	 */
	private $address2;
	/**
	 * @var string ビル・マンション名
	 */
	private $address3;
	/**
	 * @var string 部署名 / 支店名
	 */
	private $auxName;
	/**
	 * @var string 担当者姓
	 */
	private $clerkSei;
	/**
	 * @var string 担当者名
	 */
	private $clerkMei;
	/**
	 * @var string 担当者姓カナ
	 */
	private $clerkSeiKana;
	/**
	 * @var string 担当者名カナ
	 */
	private $clerkMeiKana;
	/**
	 * @var string 電話番号
	 */
	private $tel;
	/**
	 * @var string FAX番号
	 */
	private $fax;
	/**
	 * @var string 携帯電話番号
	 */
	private $mobileTel;
	/**
	 * @var string メールアドレス
	 */
	private $email;
	/**
	 * @var integer 設立年月（年）
	 */
	private $establishedYear;
	/**
	 * @var integer 設立年月（月）
	 */
	private $establishedMonth;
	/**
	 * @var integer 年商
	 */
	private $annualSales;
	/**
	 * @var integer 業種番号
	 */
	private $businessDetailType;
	/**
	 * @var string 取り扱いブランド/商品
	 */
	private $dealingBrand;
	/**
	 * @var bigDecimal 店舗数
	 */
	private $shopCount;
	/**
	 * @var string URL1
	 */
	private $url1;
	/**
	 * @var string URL2
	 */
	private $url2;
	/**
	 * @var string URL3
	 */
	private $url3;
	/**
	 * @var string PR
	 */
	private $profile;
	/**
	 * @var string 締め日
	 */
	private $closingDay;
	/**
	 * @var string お支払い方法
	 */
	private $paymentMethod;


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
	 * Paid取引先ID取得
	 * @return string Paid取引先ID
	 */
	public function getPaidBuyerID() {
		return $this->paidBuyerID;
	}
	/**
	 * 会社名取得
	 * @return string 会社名
	 */
	public function getCompanyName() {
		return $this->companyName;
	}
	/**
	 * 会社名カナ取得
	 * @return string 会社名カナ
	 */
	public function getCompanyNameKana() {
		return $this->companyNameKana;
	}
	/**
	 * 代表者姓取得
	 * @return string 代表者姓
	 */
	public function getRepresentativeSei() {
		return $this->representativeSei;
	}
	/**
	 * 代表者名取得
	 * @return string 代表者名
	 */
	public function getRepresentativeMei() {
		return $this->representativeMei;
	}
	/**
	 * 代表者姓カナ取得
	 * @return string 代表者姓カナ
	 */
	public function getRepresentativeSeiKana() {
		return $this->representativeSeiKana;
	}
	/**
	 * 代表社名カナ取得
	 * @return string 代表社名カナ
	 */
	public function getRepresentativeMeiKana() {
		return $this->representativeMeiKana;
	}
	/**
	 * 郵便番号取得
	 * @return string 郵便番号
	 */
	public function getZipCode() {
		return $this->zipCode;
	}
	/**
	 * 都道府県取得
	 * @return string 都道府県
	 */
	public function getPrefecture() {
		return $this->prefecture;
	}
	/**
	 * 市区町村取得
	 * @return string 市区町村
	 */
	public function getAddress1() {
		return $this->address1;
	}
	/**
	 * 町名・番地取得
	 * @return string 町名・番地
	 */
	public function getAddress2() {
		return $this->address2;
	}
	/**
	 * ビル・マンション名取得
	 * @return string ビル・マンション名
	 */
	public function getAddress3() {
		return $this->address3;
	}
	/**
	 * 部署名 / 支店名取得
	 * @return string 部署名 / 支店名
	 */
	public function getAuxName() {
		return $this->auxName;
	}
	/**
	 * 担当者姓取得
	 * @return string 担当者姓
	 */
	public function getClerkSei() {
		return $this->clerkSei;
	}
	/**
	 * 担当者名取得
	 * @return string 担当者名
	 */
	public function getClerkMei() {
		return $this->clerkMei;
	}
	/**
	 * 担当者姓カナ取得
	 * @return string 担当者姓カナ
	 */
	public function getClerkSeiKana() {
		return $this->clerkSeiKana;
	}
	/**
	 * 担当者名カナ取得
	 * @return string 担当者名カナ
	 */
	public function getClerkMeiKana() {
		return $this->clerkMeiKana;
	}
	/**
	 * 電話番号取得
	 * @return string 電話番号
	 */
	public function getTel() {
		return $this->tel;
	}
	/**
	 * FAX番号取得
	 * @return string FAX番号
	 */
	public function getFax() {
		return $this->fax;
	}
	/**
	 * 携帯電話番号取得
	 * @return string 携帯電話番号
	 */
	public function getMobileTel() {
		return $this->mobileTel;
	}
	/**
	 * メールアドレス取得
	 * @return string メールアドレス
	 */
	public function getEmail() {
		return $this->email;
	}
	/**
	 * 設立年月（年）取得
	 * @return integer 設立年月（年）
	 */
	public function getEstablishedYear() {
		return $this->establishedYear;
	}
	/**
	 * 設立年月（月）取得
	 * @return integer 設立年月（月）
	 */
	public function getEstablishedMonth() {
		return $this->establishedMonth;
	}
	/**
	 * 年商取得
	 * @return integer 年商
	 */
	public function getAnnualSales() {
		return $this->annualSales;
	}
	/**
	 * 業種番号取得
	 * @return integer 業種番号
	 */
	public function getBusinessDetailType() {
		return $this->businessDetailType;
	}
	/**
	 * 取り扱いブランド/商品取得
	 * @return string 取り扱いブランド/商品
	 */
	public function getDealingBrand() {
		return $this->dealingBrand;
	}
	/**
	 * 店舗数取得
	 * @return bigDecimal 店舗数
	 */
	public function getShopCount() {
		return $this->shopCount;
	}
	/**
	 * URL1取得
	 * @return string URL1
	 */
	public function getUrl1() {
		return $this->url1;
	}
	/**
	 * URL2取得
	 * @return string URL2
	 */
	public function getUrl2() {
		return $this->url2;
	}
	/**
	 * URL3取得
	 * @return string URL3
	 */
	public function getUrl3() {
		return $this->url3;
	}
	/**
	 * PR取得
	 * @return string PR
	 */
	public function getProfile() {
		return $this->profile;
	}
	/**
	 * 締め日取得
	 * @return string 締め日
	 */
	public function getClosingDay() {
		return $this->closingDay;
	}
	/**
	 * お支払い方法取得
	 * @return string お支払い方法
	 */
	public function getPaymentMethod() {
		return $this->paymentMethod;
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
	 * Paid取引先ID設定
	 *
	 * @param string $paidBuyerID
	 */
	public function setPaidBuyerID($paidBuyerID) {
		$this->paidBuyerID = $paidBuyerID;
	}
	/**
	 * 会社名設定
	 *
	 * @param string $companyName
	 */
	public function setCompanyName($companyName) {
		$this->companyName = $companyName;
	}
	/**
	 * 会社名カナ設定
	 *
	 * @param string $companyNameKana
	 */
	public function setCompanyNameKana($companyNameKana) {
		$this->companyNameKana = $companyNameKana;
	}
	/**
	 * 代表者姓設定
	 *
	 * @param string $representativeSei
	 */
	public function setRepresentativeSei($representativeSei) {
		$this->representativeSei = $representativeSei;
	}
	/**
	 * 代表者名設定
	 *
	 * @param string $representativeMei
	 */
	public function setRepresentativeMei($representativeMei) {
		$this->representativeMei = $representativeMei;
	}
	/**
	 * 代表者姓カナ設定
	 *
	 * @param string $representativeSeiKana
	 */
	public function setRepresentativeSeiKana($representativeSeiKana) {
		$this->representativeSeiKana = $representativeSeiKana;
	}
	/**
	 * 代表社名カナ設定
	 *
	 * @param string $representativeMeiKana
	 */
	public function setRepresentativeMeiKana($representativeMeiKana) {
		$this->representativeMeiKana = $representativeMeiKana;
	}
	/**
	 * 郵便番号設定
	 *
	 * @param string $zipCode
	 */
	public function setZipCode($zipCode) {
		$this->zipCode = $zipCode;
	}
	/**
	 * 都道府県設定
	 *
	 * @param string $prefecture
	 */
	public function setPrefecture($prefecture) {
		$this->prefecture = $prefecture;
	}
	/**
	 * 市区町村設定
	 *
	 * @param string $address1
	 */
	public function setAddress1($address1) {
		$this->address1 = $address1;
	}
	/**
	 * 町名・番地設定
	 *
	 * @param string $address2
	 */
	public function setAddress2($address2) {
		$this->address2 = $address2;
	}
	/**
	 * ビル・マンション名設定
	 *
	 * @param string $address3
	 */
	public function setAddress3($address3) {
		$this->address3 = $address3;
	}
	/**
	 * 部署名 / 支店名設定
	 *
	 * @param string $auxName
	 */
	public function setAuxName($auxName) {
		$this->auxName = $auxName;
	}
	/**
	 * 担当者姓設定
	 *
	 * @param string $clerkSei
	 */
	public function setClerkSei($clerkSei) {
		$this->clerkSei = $clerkSei;
	}
	/**
	 * 担当者名設定
	 *
	 * @param string $clerkMei
	 */
	public function setClerkMei($clerkMei) {
		$this->clerkMei = $clerkMei;
	}
	/**
	 * 担当者姓カナ設定
	 *
	 * @param string $clerkSeiKana
	 */
	public function setClerkSeiKana($clerkSeiKana) {
		$this->clerkSeiKana = $clerkSeiKana;
	}
	/**
	 * 担当者名カナ設定
	 *
	 * @param string $clerkMeiKana
	 */
	public function setClerkMeiKana($clerkMeiKana) {
		$this->clerkMeiKana = $clerkMeiKana;
	}
	/**
	 * 電話番号設定
	 *
	 * @param string $tel
	 */
	public function setTel($tel) {
		$this->tel = $tel;
	}
	/**
	 * FAX番号設定
	 *
	 * @param string $fax
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}
	/**
	 * 携帯電話番号設定
	 *
	 * @param string $mobileTel
	 */
	public function setMobileTel($mobileTel) {
		$this->mobileTel = $mobileTel;
	}
	/**
	 * メールアドレス設定
	 *
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
	/**
	 * 設立年月（年）設定
	 *
	 * @param integer $establishedYear
	 */
	public function setEstablishedYear($establishedYear) {
		$this->establishedYear = $establishedYear;
	}
	/**
	 * 設立年月（月）設定
	 *
	 * @param integer $establishedMonth
	 */
	public function setEstablishedMonth($establishedMonth) {
		$this->establishedMonth = $establishedMonth;
	}
	/**
	 * 年商設定
	 *
	 * @param integer $annualSales
	 */
	public function setAnnualSales($annualSales) {
		$this->annualSales = $annualSales;
	}
	/**
	 * 業種番号設定
	 *
	 * @param integer $businessDetailType
	 */
	public function setBusinessDetailType($businessDetailType) {
		$this->businessDetailType = $businessDetailType;
	}
	/**
	 * 取り扱いブランド/商品設定
	 *
	 * @param string $dealingBrand
	 */
	public function setDealingBrand($dealingBrand) {
		$this->dealingBrand = $dealingBrand;
	}
	/**
	 * 店舗数設定
	 *
	 * @param bigDecimal $shopCount
	 */
	public function setShopCount($shopCount) {
		$this->shopCount = $shopCount;
	}
	/**
	 * URL1設定
	 *
	 * @param string $url1
	 */
	public function setUrl1($url1) {
		$this->url1 = $url1;
	}
	/**
	 * URL2設定
	 *
	 * @param string $url2
	 */
	public function setUrl2($url2) {
		$this->url2 = $url2;
	}
	/**
	 * URL3設定
	 *
	 * @param string $url3
	 */
	public function setUrl3($url3) {
		$this->url3 = $url3;
	}
	/**
	 * PR設定
	 *
	 * @param string $profile
	 */
	public function setProfile($profile) {
		$this->profile = $profile;
	}
	/**
	 * 締め日設定
	 *
	 * @param string $closingDay
	 */
	public function setClosingDay($closingDay) {
		$this->closingDay = $closingDay;
	}
	/**
	 * お支払い方法設定
	 *
	 * @param string $paymentMethod
	 */
	public function setPaymentMethod($paymentMethod) {
		$this->paymentMethod = $paymentMethod;
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
		$this->setPaidBuyerID($this->getStringValue($params, 'PaidBuyerID', $this->getPaidBuyerID()));
		$this->setCompanyName($this->getStringValue($params, 'CompanyName', $this->getCompanyName()));
		$this->setCompanyNameKana($this->getStringValue($params, 'CompanyNameKana', $this->getCompanyNameKana()));
		$this->setRepresentativeSei($this->getStringValue($params, 'RepresentativeSei', $this->getRepresentativeSei()));
		$this->setRepresentativeMei($this->getStringValue($params, 'RepresentativeMei', $this->getRepresentativeMei()));
		$this->setRepresentativeSeiKana($this->getStringValue($params, 'RepresentativeSeiKana', $this->getRepresentativeSeiKana()));
		$this->setRepresentativeMeiKana($this->getStringValue($params, 'RepresentativeMeiKana', $this->getRepresentativeMeiKana()));
		$this->setZipCode($this->getStringValue($params, 'ZipCode', $this->getZipCode()));
		$this->setPrefecture($this->getStringValue($params, 'Prefecture', $this->getPrefecture()));
		$this->setAddress1($this->getStringValue($params, 'Address1', $this->getAddress1()));
		$this->setAddress2($this->getStringValue($params, 'Address2', $this->getAddress2()));
		$this->setAddress3($this->getStringValue($params, 'Address3', $this->getAddress3()));
		$this->setAuxName($this->getStringValue($params, 'AuxName', $this->getAuxName()));
		$this->setClerkSei($this->getStringValue($params, 'ClerkSei', $this->getClerkSei()));
		$this->setClerkMei($this->getStringValue($params, 'ClerkMei', $this->getClerkMei()));
		$this->setClerkSeiKana($this->getStringValue($params, 'ClerkSeiKana', $this->getClerkSeiKana()));
		$this->setClerkMeiKana($this->getStringValue($params, 'ClerkMeiKana', $this->getClerkMeiKana()));
		$this->setTel($this->getStringValue($params, 'Tel', $this->getTel()));
		$this->setFax($this->getStringValue($params, 'Fax', $this->getFax()));
		$this->setMobileTel($this->getStringValue($params, 'MobileTel', $this->getMobileTel()));
		$this->setEmail($this->getStringValue($params, 'Email', $this->getEmail()));
		$this->setEstablishedYear($this->getStringValue($params, 'EstablishedYear', $this->getEstablishedYear()));
		$this->setEstablishedMonth($this->getStringValue($params, 'EstablishedMonth', $this->getEstablishedMonth()));
		$this->setAnnualSales($this->getStringValue($params, 'AnnualSales', $this->getAnnualSales()));
		$this->setBusinessDetailType($this->getStringValue($params, 'BusinessDetailType', $this->getBusinessDetailType()));
		$this->setDealingBrand($this->getStringValue($params, 'DealingBrand', $this->getDealingBrand()));
		$this->setShopCount($this->getStringValue($params, 'ShopCount', $this->getShopCount()));
		$this->setUrl1($this->getStringValue($params, 'Url1', $this->getUrl1()));
		$this->setUrl2($this->getStringValue($params, 'Url2', $this->getUrl2()));
		$this->setUrl3($this->getStringValue($params, 'Url3', $this->getUrl3()));
		$this->setProfile($this->getStringValue($params, 'Profile', $this->getProfile()));
		$this->setClosingDay($this->getStringValue($params, 'ClosingDay', $this->getClosingDay()));
		$this->setPaymentMethod($this->getStringValue($params, 'PaymentMethod', $this->getPaymentMethod()));

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
		$str .= 'PaidBuyerID=' . $this->encodeStr($this->getPaidBuyerID());
		$str .='&';
		$str .= 'CompanyName=' . $this->encodeStr($this->getCompanyName());
		$str .='&';
		$str .= 'CompanyNameKana=' . $this->encodeStr($this->getCompanyNameKana());
		$str .='&';
		$str .= 'RepresentativeSei=' . $this->encodeStr($this->getRepresentativeSei());
		$str .='&';
		$str .= 'RepresentativeMei=' . $this->encodeStr($this->getRepresentativeMei());
		$str .='&';
		$str .= 'RepresentativeSeiKana=' . $this->encodeStr($this->getRepresentativeSeiKana());
		$str .='&';
		$str .= 'RepresentativeMeiKana=' . $this->encodeStr($this->getRepresentativeMeiKana());
		$str .='&';
		$str .= 'ZipCode=' . $this->encodeStr($this->getZipCode());
		$str .='&';
		$str .= 'Prefecture=' . $this->encodeStr($this->getPrefecture());
		$str .='&';
		$str .= 'Address1=' . $this->encodeStr($this->getAddress1());
		$str .='&';
		$str .= 'Address2=' . $this->encodeStr($this->getAddress2());
		$str .='&';
		$str .= 'Address3=' . $this->encodeStr($this->getAddress3());
		$str .='&';
		$str .= 'AuxName=' . $this->encodeStr($this->getAuxName());
		$str .='&';
		$str .= 'ClerkSei=' . $this->encodeStr($this->getClerkSei());
		$str .='&';
		$str .= 'ClerkMei=' . $this->encodeStr($this->getClerkMei());
		$str .='&';
		$str .= 'ClerkSeiKana=' . $this->encodeStr($this->getClerkSeiKana());
		$str .='&';
		$str .= 'ClerkMeiKana=' . $this->encodeStr($this->getClerkMeiKana());
		$str .='&';
		$str .= 'Tel=' . $this->encodeStr($this->getTel());
		$str .='&';
		$str .= 'Fax=' . $this->encodeStr($this->getFax());
		$str .='&';
		$str .= 'MobileTel=' . $this->encodeStr($this->getMobileTel());
		$str .='&';
		$str .= 'Email=' . $this->encodeStr($this->getEmail());
		$str .='&';
		$str .= 'EstablishedYear=' . $this->encodeStr($this->getEstablishedYear());
		$str .='&';
		$str .= 'EstablishedMonth=' . $this->encodeStr($this->getEstablishedMonth());
		$str .='&';
		$str .= 'AnnualSales=' . $this->encodeStr($this->getAnnualSales());
		$str .='&';
		$str .= 'BusinessDetailType=' . $this->encodeStr($this->getBusinessDetailType());
		$str .='&';
		$str .= 'DealingBrand=' . $this->encodeStr($this->getDealingBrand());
		$str .='&';
		$str .= 'ShopCount=' . $this->encodeStr($this->getShopCount());
		$str .='&';
		$str .= 'Url1=' . $this->encodeStr($this->getUrl1());
		$str .='&';
		$str .= 'Url2=' . $this->encodeStr($this->getUrl2());
		$str .='&';
		$str .= 'Url3=' . $this->encodeStr($this->getUrl3());
		$str .='&';
		$str .= 'Profile=' . $this->encodeStr($this->getProfile());
		$str .='&';
		$str .= 'ClosingDay=' . $this->encodeStr($this->getClosingDay());
		$str .='&';
		$str .= 'PaymentMethod=' . $this->encodeStr($this->getPaymentMethod());

	    return $str;
	}


}
?>
