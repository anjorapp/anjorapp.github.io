<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/DeleteWebmoneyQuickIdOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>WebmoneyクイックID削除　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class DeleteWebmoneyQuickId extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * クイックID削除を実行する
	 *
	 * @param  DeleteWebmoneyQuickIdInput $input  入力パラメータ
	 * @return DeleteWebmoneyQuickIdOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // DeleteWebmoneyQuickIdOutput作成し、戻す
	    return new DeleteWebmoneyQuickIdOutput($resultMap);
	}
}
?>
