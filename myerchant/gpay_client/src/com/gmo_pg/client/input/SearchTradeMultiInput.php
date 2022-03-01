<?php
require_once ('com/gmo_pg/client/input/BaseInput.php');
/**
 * <b>取引照会マルチ　入力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchTradeMultiInput extends BaseInput {

	/**
	 * @var ショップID GMOPG発行の、加盟店識別ID
	 */
	private $shopId;

	/**
	 * @var string ショップパスワード
	 */
	private $shopPass;

	/**
	 * @var string オーダーID 加盟店様が発番する、取引のID
	 */
	private $orderId;

	/**
	 * 決済方法
	 * 0：クレジット
	 * 1：モバイルSuica
	 * 2：モバイルEdy
	 * 3：コンビニ
	 * 4：Pay-easy
	 * 5：Paypal
	 * 7：WebMoney
	 * 8：auかんたん決済
	 * 9：ドコモ払い
	 * 10：ドコモ継続決済
	 * 11：ソフトバンクケータイ支払い決済
	 * 12：じぶん銀行決済
	 * 13：au継続課金
	 * 30：PGプリカ
	 * 14：JCBプリカ
	 * 16：NET CASH
	 * 18：楽天ID
	 * 19：多通貨クレジットカード
	 * 20：LINE Pay
	 * 21：ネット銀聯
	 * 22：ソフトバンク継続
	 * 23：銀行振込(バーチャル口座)
	 * 24：リクルートかんたん支払い
	 * 25：リクルートかんたん支払い継続課金
	 * 26：自動売上
	 * 27：ブランドトークン決済
	 * 28：口振セレクト
	 * 29：Paid
	 * 31：ドコモ払い_随時決済
	 * 33：auかんたん決済支払い（利用承諾）
	 * 34：ソフトバンクまとめて支払い(Ｂ)(利用承諾)
	 * 35：Paysle
	 * 36：GANB

	 *
	 * @var string
	 */
	private $payType;

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
	public function getShopId() {
		return $this->shopId;
	}

	/**
	 * ショップパスワード取得
	 * @return string ショップパスワード
	 */
	public function getShopPass() {
		return $this->shopPass;
	}

	/**
	 * オーダーID
	 * @return string オーダーID
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * 決済手段取得
	 * @return  　string $string  決済手段
	 */
	public function getPayType(){
		return $this->payType ;
	}
	/**
	 * ショップID設定
	 *
	 * @param string $shopId ショップID
	 */
	public function setShopId($shopId) {
		$this->shopId = $shopId;
	}

	/**
	 * ショップパスワード設定
	 *
	 * @param string $shopPass ショップパスワード
	 */
	public function setShopPass($shopPass) {
		$this->shopPass = $shopPass;
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
	 * 決済手段設定
	 * @param  　string $string  決済手段
	 */
	public function setPayType($string){
		$this->payType = $string;
	}


	/**
	 * デフォルト値を設定する
	 */
	public function setDefaultValues() {
	}

	/**
	 * 入力パラメータ群の値を設定する
	 *
	 * @param IgnoreCaseMap params 入力パラメータ
	 */
	public function setInputValues($params) {
		// 入力パラメータがnullの場合は設定処理を行わない
	    if (is_null($params)) {
	        return;
	    }

	    // 各項目の設定(CardSeqは値が数値でないものは無効とする)
	    $this->setShopId($this->getStringValue($params, 'ShopID', $this->getShopId()));
	    $this->setShopPass($this->getStringValue($params, 'ShopPass', $this->getShopPass()));
        $this->setOrderId($this->getStringValue($params, 'OrderID', $this->getOrderId()));
        $this->setPayType($this->getStringValue($params, 'PayType', $this->getPayType()));

	}

	/**
	 * 文字列表現
	 * URLのパラメータ文字列の形式の文字列を生成する
	 * @return string 接続文字列表現
	 */
	public function toString() {

	    $str  = 'ShopID=' . $this->encodeStr($this->getShopId());
	    $str .= '&';
	    $str .= 'ShopPass=' . $this->encodeStr($this->getShopPass());
	    $str .= '&';
	    $str .= 'OrderID=' . $this->encodeStr($this->getOrderId());
	    $str .= '&';
	    $str .= 'PayType=' . $this->encodeStr($this->getPayType());

	    return $str;
	}

}
?>
