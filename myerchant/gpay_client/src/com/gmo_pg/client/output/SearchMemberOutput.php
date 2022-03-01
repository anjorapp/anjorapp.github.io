<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>会員照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 * @version 1.0
 * @created 01-01-2008 00:00:00
 */
class SearchMemberOutput extends BaseOutput {

	/**
	 * @var string 会員ID
	 *
	 */
	private $memberId;

	/**
	 * @var string 会員名
	 */
	private $memberName;

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
        $this->setMemberId($params->get('MemberID'));
        $this->setMemberName($params->get('MemberName'));
	}

	/**
	 * 会員ID取得
	 * @return string 会員ID
	 */
	public function getMemberId() {
		return $this->memberId;
	}

	/**
	 * 会員名取得
	 * @return string 会員名
	 */
	public function getMemberName() {
		return $this->memberName;
	}

	/**
	 * 会員ID設定
	 *
	 * @param string $memberId 会員ID
	 */
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
	}

	/**
	 * 会員名設定
	 *
	 * @param string $memberName 会員名
	 */
	public function setMemberName($memberName) {
		$this->memberName = $memberName;
	}


	/**
	 * 文字列表現
	 * <p>
	 *  現在の各パラメータを、パラメータ名=値&パラメータ名=値の形式で取得します。
	 * </p>
	 * @return string 出力パラメータの文字列表現
	 */
	public function toString() {
	    $str  = 'MemberID=' . $this->getMemberId();
	    $str  .= '&';
	    $str  .= 'MemberName=' . $this->getMemberName();

	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>