<?php
/**
 * <b>不正防止実行　入力パラメータ商品情報クラス（汎用版）</b>
 *
 * @package com.gmo_pg.client
 * @subpackage input
 * @see inputPackageInfo.php
 * @author GMO PaymentGateway
 */
class RedItemHolder {

	/**
	 * @var integer 商品個数
	 */
	private $redItemQty;
	/**
	 * @var string 商品識別コード
	 */
	private $redItemProdCd;
	/**
	 * @var string 商品IAN/JANコード
	 */
	private $redItemManPartNo;
	/**
	 * @var string 商品カテゴリー
	 */
	private $redItemDesc;
	/**
	 * @var bigDecimal 商品単価
	 */
	private $redEbtItemCst;
	/**
	 * @var string 商品名
	 */
	private $redItemGiftMsg;


	/**
	 * 商品個数取得
	 * @return integer 商品個数
	 */
	public function getRedItemQty() {
		return $this->redItemQty;
	}
	/**
	 * 商品識別コード取得
	 * @return string 商品識別コード
	 */
	public function getRedItemProdCd() {
		return $this->redItemProdCd;
	}
	/**
	 * 商品IAN/JANコード取得
	 * @return string 商品IAN/JANコード
	 */
	public function getRedItemManPartNo() {
		return $this->redItemManPartNo;
	}
	/**
	 * 商品カテゴリー取得
	 * @return string 商品カテゴリー
	 */
	public function getRedItemDesc() {
		return $this->redItemDesc;
	}
	/**
	 * 商品単価取得
	 * @return bigDecimal 商品単価
	 */
	public function getRedEbtItemCst() {
		return $this->redEbtItemCst;
	}
	/**
	 * 商品名取得
	 * @return string 商品名
	 */
	public function getRedItemGiftMsg() {
		return $this->redItemGiftMsg;
	}

	/**
	 * 商品個数設定
	 *
	 * @param integer $redItemQty
	 */
	public function setRedItemQty($redItemQty) {
		$this->redItemQty = $redItemQty;
	}
	/**
	 * 商品識別コード設定
	 *
	 * @param string $redItemProdCd
	 */
	public function setRedItemProdCd($redItemProdCd) {
		$this->redItemProdCd = $redItemProdCd;
	}
	/**
	 * 商品IAN/JANコード設定
	 *
	 * @param string $redItemManPartNo
	 */
	public function setRedItemManPartNo($redItemManPartNo) {
		$this->redItemManPartNo = $redItemManPartNo;
	}
	/**
	 * 商品カテゴリー設定
	 *
	 * @param string $redItemDesc
	 */
	public function setRedItemDesc($redItemDesc) {
		$this->redItemDesc = $redItemDesc;
	}
	/**
	 * 商品単価設定
	 *
	 * @param bigDecimal $redEbtItemCst
	 */
	public function setRedEbtItemCst($redEbtItemCst) {
		$this->redEbtItemCst = $redEbtItemCst;
	}
	/**
	 * 商品名設定
	 *
	 * @param string $redItemGiftMsg
	 */
	public function setRedItemGiftMsg($redItemGiftMsg) {
		$this->redItemGiftMsg = $redItemGiftMsg;
	}

}
