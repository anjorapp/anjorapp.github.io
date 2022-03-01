<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/RefundTranBrandtokenOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>ブランドトークン決済返金　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class RefundTranBrandtoken extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 返金を実行する
	 *
	 * @param  RefundTranBrandtokenInput $input  入力パラメータ
	 * @return RefundTranBrandtokenOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // RefundTranBrandtokenOutput作成し、戻す
	    return new RefundTranBrandtokenOutput($resultMap);
	}
}
?>
