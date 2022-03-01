<?php
require_once ('com/gmo_pg/client/output/BaseOutput.php');
/**
 * <b>PGプリカPGプリカ履歴照会　出力パラメータクラス</b>
 *
 * @package com.gmo_pg.client
 * @subpackage output
 * @see outputPackageInfo.php
 * @author GMO PaymentGateway
 */
class SearchPrecaHistoryOutput extends BaseOutput {

	/**
	 * @var string プリカ番号
	 */
	private $precaNo;
	/**
	 * @var integer 合計バリュー
	 */
	private $totalValue;
	/**
	 * @var integer 検索結果件数
	 */
	private $cnt;
	/**
	 * @var integer プリカ履歴連番
	 */
	private $precaSeq;
	/**
	 * @var string 処理日時
	 */
	private $processDate;
	/**
	 * @var string 処理タイプ
	 */
	private $processType;
	/**
	 * @var integer バリュー
	 */
	private $value;
	/**
	 * @var integer 有効バリュー
	 */
	private $validValue;
	/**
	 * @var string バリュー有効期限
	 */
	private $expireDate;
	/**
	 * @var integer 処理対象プリカ履歴連番
	 */
	private $targetPrecaSeq;
	/**
	 * @var string 加盟店自由項目
	 */
	private $clientField;

	private $searchPrecaHistoryList = null;

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
		$this->setPrecaNo($params->get('PrecaNo'));
		$this->setTotalValue($params->get('TotalValue'));
		$this->setCnt($params->get('Cnt'));

		//履歴情報は複数返るので、全てマップに展開
		$cardArray = null;
		$tmp =  $params->get('PrecaSeq');

		$precaSeq = $params->get('PrecaSeq');
		$processDate = $params->get('ProcessDate');
		$processType = $params->get('ProcessType');
		$value = $params->get('Value');
		$validValue = $params->get('ValidValue');
		$expireDate = $params->get('ExpireDate');
		$targetPrecaSeq = $params->get('TargetPrecaSeq');
		$clientField = $params->get('ClientField');

		if (is_null( $precaSeq)){
			return;
		}

		// 項目ごとに配列として設定
		if (!is_null( $precaSeq)){
			$this->setPrecaSeq(	explode('|'	,$precaSeq ) );
		}
		if (!is_null($processDate)){
			$this->setProcessDate(	explode('|'	,$processDate ) );
		}
		if (!is_null($processType)){
			$this->setProcessType(	explode('|'	,$processType ) );
		}
		if (!is_null($value)){
			$this->setValue(	explode('|'	,$value ) );
		}
		if (!is_null($validValue)){
			$this->setValidValue(	explode('|'	,$validValue ) );
		}
		if (!is_null($expireDate)){
			$this->setExpireDate(	explode('|'	,$expireDate ) );
		}
		if (!is_null($targetPrecaSeq)){
			$this->setTargetPrecaSeq(	explode('|'	,$targetPrecaSeq ) );
		}
		if (!is_null($clientField)){
			$this->setClientField(	explode('|'	,$clientField ) );
		}

		//履歴情報配列を作成
		$searchPrecaHistoryList = null;
		$count = count( $this->precaSeq );
		for ($i = 0 ; $i < $count; $i++ ) {
			$tmp = null;
			$tmp['PrecaSeq'] = $this->precaSeq[$i];
			$tmp['ProcessDate'] = $this->processDate[$i];
			$tmp['ProcessType'] = $this->processType[$i];
			$tmp['Value'] = $this->value[$i];
			$tmp['ValidValue'] = $this->validValue[$i];
			$tmp['ExpireDate'] = $this->expireDate[$i];
			$tmp['TargetPrecaSeq'] = $this->targetPrecaSeq[$i];
			$tmp['ClientField'] = $this->clientField[$i];

			$searchPrecaHistoryList[]	=	$tmp;
		}
		$this->searchPrecaHistoryList = $searchPrecaHistoryList;
	}

	/**
	 * プリカ番号取得
	 * @return string プリカ番号
	 */
	public function getPrecaNo() {
		return $this->precaNo;
	}
	/**
	 * 合計バリュー取得
	 * @return integer 合計バリュー
	 */
	public function getTotalValue() {
		return $this->totalValue;
	}
	/**
	 * 検索結果件数取得
	 * @return integer 検索結果件数
	 */
	public function getCnt() {
		return $this->cnt;
	}
	/**
	 * プリカ履歴連番取得
	 * @return integer プリカ履歴連番
	 */
	public function getPrecaSeq() {
		return $this->precaSeq;
	}
	/**
	 * 処理日時取得
	 * @return string 処理日時
	 */
	public function getProcessDate() {
		return $this->processDate;
	}
	/**
	 * 処理タイプ取得
	 * @return string 処理タイプ
	 */
	public function getProcessType() {
		return $this->processType;
	}
	/**
	 * バリュー取得
	 * @return integer バリュー
	 */
	public function getValue() {
		return $this->value;
	}
	/**
	 * 有効バリュー取得
	 * @return integer 有効バリュー
	 */
	public function getValidValue() {
		return $this->validValue;
	}
	/**
	 * バリュー有効期限取得
	 * @return string バリュー有効期限
	 */
	public function getExpireDate() {
		return $this->expireDate;
	}
	/**
	 * 処理対象プリカ履歴連番取得
	 * @return integer 処理対象プリカ履歴連番
	 */
	public function getTargetPrecaSeq() {
		return $this->targetPrecaSeq;
	}
	/**
	 * 加盟店自由項目取得
	 * @return string 加盟店自由項目
	 */
	public function getClientField() {
		return $this->clientField;
	}

	/**
	 * 履歴情報取得
	 * <p>
	 * 	$searchPrecaHistoryListを返します
	 * </p>
	 * @return array 履歴情報リスト
	 */
	public function getSearchPrecaHistoryList() {
		return $this->searchPrecaHistoryList;
	}

	/**
	 * プリカ番号設定
	 *
	 * @param string $precaNo
	 */
	public function setPrecaNo($precaNo) {
		$this->precaNo = $precaNo;
	}
	/**
	 * 合計バリュー設定
	 *
	 * @param integer $totalValue
	 */
	public function setTotalValue($totalValue) {
		$this->totalValue = $totalValue;
	}
	/**
	 * 検索結果件数設定
	 *
	 * @param integer $cnt
	 */
	public function setCnt($cnt) {
		$this->cnt = $cnt;
	}
	/**
	 * プリカ履歴連番設定
	 *
	 * @param integer $precaSeq
	 */
	public function setPrecaSeq($precaSeq) {
		$this->precaSeq = $precaSeq;
	}
	/**
	 * 処理日時設定
	 *
	 * @param string $processDate
	 */
	public function setProcessDate($processDate) {
		$this->processDate = $processDate;
	}
	/**
	 * 処理タイプ設定
	 *
	 * @param string $processType
	 */
	public function setProcessType($processType) {
		$this->processType = $processType;
	}
	/**
	 * バリュー設定
	 *
	 * @param integer $value
	 */
	public function setValue($value) {
		$this->value = $value;
	}
	/**
	 * 有効バリュー設定
	 *
	 * @param integer $validValue
	 */
	public function setValidValue($validValue) {
		$this->validValue = $validValue;
	}
	/**
	 * バリュー有効期限設定
	 *
	 * @param string $expireDate
	 */
	public function setExpireDate($expireDate) {
		$this->expireDate = $expireDate;
	}
	/**
	 * 処理対象プリカ履歴連番設定
	 *
	 * @param integer $targetPrecaSeq
	 */
	public function setTargetPrecaSeq($targetPrecaSeq) {
		$this->targetPrecaSeq = $targetPrecaSeq;
	}
	/**
	 * 加盟店自由項目設定
	 *
	 * @param string $clientField
	 */
	public function setClientField($clientField) {
		$this->clientField = $clientField;
	}

	/**
	 * 履歴情報設定
	 * @param $searchPrecaHistoryList
	 */
	public function setSearchPrecaHistoryList($searchPrecaHistoryList) {
		$this->searchPrecaHistoryList = $searchPrecaHistoryList;
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
		$str .= 'PrecaNo=' . $this->encodeStr($this->getPrecaNo());
		$str .='&';
		$str .= 'TotalValue=' . $this->encodeStr($this->getTotalValue());
		$str .='&';
		$str .= 'Cnt=' . $this->encodeStr($this->getCnt());
		$str .='&';
		$str .= 'PrecaSeq=' . (is_null($this->getPrecaSeq())?'':implode('|',$this->encodeStr($this->getPrecaSeq())));
		$str .='&';
		$str .= 'ProcessDate=' . (is_null($this->getProcessDate())?'':implode('|',$this->encodeStr($this->getProcessDate())));
		$str .='&';
		$str .= 'ProcessType=' . (is_null($this->getProcessType())?'':implode('|',$this->encodeStr($this->getProcessType())));
		$str .='&';
		$str .= 'Value=' . (is_null($this->getValue())?'':implode('|',$this->encodeStr($this->getValue())));
		$str .='&';
		$str .= 'ValidValue=' . (is_null($this->getValidValue())?'':implode('|',$this->encodeStr($this->getValidValue())));
		$str .='&';
		$str .= 'ExpireDate=' . (is_null($this->getExpireDate())?'':implode('|',$this->encodeStr($this->getExpireDate())));
		$str .='&';
		$str .= 'TargetPrecaSeq=' . (is_null($this->getTargetPrecaSeq())?'':implode('|',$this->encodeStr($this->getTargetPrecaSeq())));
		$str .='&';
		$str .= 'ClientField=' . (is_null($this->getClientField())?'':implode('|',$this->encodeStr($this->getClientField())));

	    if ($this->isErrorOccurred()) {
            // エラー文字列を連結して返す
            $errString = parent::toString();
            $str .= '&' . $errString;
        }

        return $str;
	}

}
?>
