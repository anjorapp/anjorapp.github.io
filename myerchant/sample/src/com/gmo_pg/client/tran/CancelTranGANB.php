<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/CancelTranGANBOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>GANB支払い停止　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class CancelTranGANB extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 支払い停止を実行する
	 *
	 * @param  CancelTranGANBInput $input  入力パラメータ
	 * @return CancelTranGANBOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // CancelTranGANBOutput作成し、戻す
	    return new CancelTranGANBOutput($resultMap);
	}
}
?>
