<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/EntryTranSbAcceptOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>ソフトバンクまとめて支払い(Ｂ)(利用承諾)取引登録　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class EntryTranSbAccept extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 取引登録を実行する
	 *
	 * @param  EntryTranSbAcceptInput $input  入力パラメータ
	 * @return EntryTranSbAcceptOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // EntryTranSbAcceptOutput作成し、戻す
	    return new EntryTranSbAcceptOutput($resultMap);
	}
}
?>
