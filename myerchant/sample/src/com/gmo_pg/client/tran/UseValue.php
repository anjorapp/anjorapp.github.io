<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/UseValueOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>PGプリカバリュー利用　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class UseValue extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * バリュー利用を実行する
	 *
	 * @param  UseValueInput $input  入力パラメータ
	 * @return UseValueOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // UseValueOutput作成し、戻す
	    return new UseValueOutput($resultMap);
	}
}
?>
