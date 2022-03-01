<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/SalesTranBrandtokenOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>ブランドトークン決済実売上　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class SalesTranBrandtoken extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 実売上を実行する
	 *
	 * @param  SalesTranBrandtokenInput $input  入力パラメータ
	 * @return SalesTranBrandtokenOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // SalesTranBrandtokenOutput作成し、戻す
	    return new SalesTranBrandtokenOutput($resultMap);
	}
}
?>
