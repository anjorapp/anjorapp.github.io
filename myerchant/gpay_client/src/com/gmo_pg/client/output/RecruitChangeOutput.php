<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>リクルートかんたん支払い金額変更　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class RecruitChangeOutput extends BaseOutput {

	/**
	 * @var string オーダーID
	 */
	private $orderID;
	/**
	 * @var string 現状態
	 */
	private $status;
	/**
	 * @var integer 利用金額
	 */
	private $amount;
	/**
	 * @var integer 税送料
	 */
	private $tax;
	/**
	 * @var string 行使ポイント数
	 */
	private $rcUsePoint;
	/**
	 * @var string リクルート原資クーポン割引額
	 */
	private $rcUseCoupon;
	/**
	 * @var string 加盟店様原資クーポン割引額
	 */
	private $rcUseShopCoupon;


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
		$this->setOrderID($params->get('OrderID'));
		$this->setStatus($params->get('Status'));
		$this->setAmount($params->get('Amount'));
		$this->setTax($params->get('Tax'));
		$this->setRcUsePoint($params->get('RcUsePoint'));
		$this->setRcUseCoupon($params->get('RcUseCoupon'));
		$this->setRcUseShopCoupon($params->get('RcUseShopCoupon'));

	}

	/**
	 * オーダーID取得
	 * @return string オーダーID
	 */
	public function getOrderID() {
		return $this->orderID;
	}
	/**
	 * 現状態取得
	 * @return string 現状態
	 */
	public function getStatus() {
		return $this->status;
	}
	/**
	 * 利用金額取得
	 * @return integer 利用金額
	 */
	public function getAmount() {
		return $this->amount;
	}
	/**
	 * 税送料取得
	 * @return integer 税送料
	 */
	public function getTax() {
		return $this->tax;
	}
	/**
	 * 行使ポイント数取得
	 * @return string 行使ポイント数
	 */
	public function getRcUsePoint() {
		return $this->rcUsePoint;
	}
	/**
	 * リクルート原資クーポン割引額取得
	 * @return string リクルート原資クーポン割引額
	 */
	public function getRcUseCoupon() {
		return $this->rcUseCoupon;
	}
	/**
	 * 加盟店様原資クーポン割引額取得
	 * @return string 加盟店様原資クーポン割引額
	 */
	public function getRcUseShopCoupon() {
		return $this->rcUseShopCoupon;
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
	 * 現状態設定
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}
	/**
	 * 利用金額設定
	 *
	 * @param integer $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	/**
	 * 税送料設定
	 *
	 * @param integer $tax
	 */
	public function setTax($tax) {
		$this->tax = $tax;
	}
	/**
	 * 行使ポイント数設定
	 *
	 * @param string $rcUsePoint
	 */
	public function setRcUsePoint($rcUsePoint) {
		$this->rcUsePoint = $rcUsePoint;
	}
	/**
	 * リクルート原資クーポン割引額設定
	 *
	 * @param string $rcUseCoupon
	 */
	public function setRcUseCoupon($rcUseCoupon) {
		$this->rcUseCoupon = $rcUseCoupon;
	}
	/**
	 * 加盟店様原資クーポン割引額設定
	 *
	 * @param string $rcUseShopCoupon
	 */
	public function setRcUseShopCoupon($rcUseShopCoupon) {
		$this->rcUseShopCoupon = $rcUseShopCoupon;
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
		$str .= 'OrderID=' . $this->encodeStr($this->getOrderID());
		$str .='&';
		$str .= 'Status=' . $this->encodeStr($this->getStatus());
		$str .='&';
		$str .= 'Amount=' . $this->encodeStr($this->getAmount());
		$str .='&';
		$str .= 'Tax=' . $this->encodeStr($this->getTax());
		$str .='&';
		$str .= 'RcUsePoint=' . $this->encodeStr($this->getRcUsePoint());
		$str .='&';
		$str .= 'RcUseCoupon=' . $this->encodeStr($this->getRcUseCoupon());
		$str .='&';
		$str .= 'RcUseShopCoupon=' . $this->encodeStr($this->getRcUseShopCoupon());


	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
