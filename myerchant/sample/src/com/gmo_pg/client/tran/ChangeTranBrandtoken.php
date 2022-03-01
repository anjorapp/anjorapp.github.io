<?php
require_once ('com/gmo_pg/client/common/Cryptgram.php');
require_once ('com/gmo_pg/client/common/GPayException.php');
require_once ('com/gmo_pg/client/output/ChangeTranBrandtokenOutput.php');
require_once ('com/gmo_pg/client/tran/BaseTran.php');
/**
 * <b>ブランドトークン決済金額変更　実行クラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage tran
 * @see tranPackageInfo.php
 * @author GMO PaymentGateway
 */
class ChangeTranBrandtoken extends BaseTran {

	/**
	 * コンストラクタ
	 */
	public function __construct() {
	    parent::__construct();
	}

	/**
	 * 金額変更を実行する
	 *
	 * @param  ChangeTranBrandtokenInput $input  入力パラメータ
	 * @return ChangeTranBrandtokenOutput $output 出力パラメータ
	 * @exception GPayException
	 */
	public function exec(&$input) {

        // 接続しプロトコル呼び出し・結果取得
        $resultMap = $this->callProtocol($input->toString());
	    // 戻り値がnullの場合、nullを戻す
        if (is_null($resultMap)) {
		    return null;
        }

        // ChangeTranBrandtokenOutput作成し、戻す
	    return new ChangeTranBrandtokenOutput($resultMap);
	}
}
?>
