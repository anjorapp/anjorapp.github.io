<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[ExecFraudScreening]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>不正防止実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	<?php
		 if( !isset ($_POST['submit']) ){//初期表示
	?>
	<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
		<table>
			<tfoot>
				<tr>
					<td colspan="2"><input name="submit" type="submit" value="実行" tabindex="74" /></td>
				</tr>
			</tfoot>
			<tbody>
			<tr>
				<th scope="row">ショップID(ShopID)</th>
				<td><input name="ShopID" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">ショップパスワード(ShopPass)</th>
				<td><input name="ShopPass" type="text" size="27" tabindex="12" /></td>
			</tr>
			<tr>
				<th scope="row">実行モード(ExecMode)</th>
				<td><input name="ExecMode" type="text" size="27" tabindex="13" value="CHECK_OVERSEA" /></td>
			</tr>
			<tr>
				<th scope="row">取引ID(AccessID)</th>
				<td><input name="AccessID" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">取引パスワード(AccessPass)</th>
				<td><input name="AccessPass" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">決済金額(RedAmt)</th>
				<td><input name="RedAmt" type="text" size="10" tabindex="17" class="num" value="10000" /></td>
			</tr>
			<tr>
				<th scope="row">通貨コード(RedCurrCd)</th>
				<td><input name="RedCurrCd" type="text" size="27" tabindex="18" value="JPY" /></td>
			</tr>
			<tr>
				<th scope="row">クレジットカード番号(RedAcctNum)</th>
				<td><input name="RedAcctNum" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">カード有効期限(RedCardExpDt)</th>
				<td><input name="RedCardExpDt" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">請求先情報有無判定フラグ(RedCustTypeCd)</th>
				<td><input name="RedCustTypeCd" type="text" size="27" tabindex="21" value="B" /></td>
			</tr>
			<tr>
				<th scope="row">ユーザID(RedCustId)</th>
				<td><input name="RedCustId" type="text" size="27" tabindex="22" value="CustId123" /></td>
			</tr>
			<tr>
				<th scope="row">カード名義(RedCustFname)</th>
				<td><input name="RedCustFname" type="text" size="27" tabindex="23" value="TARO YAMADA" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客苗字(RedCustLname)</th>
				<td><input name="RedCustLname" type="text" size="27" tabindex="24" value="山田" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客住所１(RedCustAddr1)</th>
				<td><input name="RedCustAddr1" type="text" size="27" tabindex="25" value="住所１" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客住所２(RedCustAddr2)</th>
				<td><input name="RedCustAddr2" type="text" size="27" tabindex="26" value="住所２" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客住所３(RedCustAddr3)</th>
				<td><input name="RedCustAddr3" type="text" size="27" tabindex="27" value="住所３アパート" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客都道府県(RedCustCity)</th>
				<td><input name="RedCustCity" type="text" size="27" tabindex="28" value="都道府県" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客郵便番号(RedCustPostalCd)</th>
				<td><input name="RedCustPostalCd" type="text" size="27" tabindex="29" value="1500043" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客国(RedCustCntryCd)</th>
				<td><input name="RedCustCntryCd" type="text" size="27" tabindex="30" value="JPN" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客電話番号(RedCustHomePhone)</th>
				<td><input name="RedCustHomePhone" type="text" size="27" tabindex="31" value="0312345678" /></td>
			</tr>
			<tr>
				<th scope="row">請求先顧客メールアドレス(RedCustEmail)</th>
				<td><input name="RedCustEmail" type="text" size="27" tabindex="32" value="test@gmo-pg.com" /></td>
			</tr>
			<tr>
				<th scope="row">エンドユーザIPアドレス(RedCustIpAddr)</th>
				<td><input name="RedCustIpAddr" type="text" size="27" tabindex="33" value="192.0.2.0" /></td>
			</tr>
			<tr>
				<th scope="row">リピータフラグ(RedEbtPrevcust)</th>
				<td><input name="RedEbtPrevcust" type="text" size="27" tabindex="34" value="Y" /></td>
			</tr>
			<tr>
				<th scope="row">ユーザID登録後経過日数(RedEbtTof)</th>
				<td><input name="RedEbtTof" type="text" size="10" tabindex="35" class="num" value ="100" /></td>
			</tr>
			<tr>
				<th scope="row">発送先情報有無判定フラグ(RedShipTypeCd)</th>
				<td><input name="RedShipTypeCd" type="text" size="27" tabindex="36" value="S" /></td>
			</tr>
			<tr>
				<th scope="row">発送先名前(RedShipFname)</th>
				<td><input name="RedShipFname" type="text" size="27" tabindex="37" value="次郎" /></td>
			</tr>
			<tr>
				<th scope="row">発送先苗字(RedShipLname)</th>
				<td><input name="RedShipLname" type="text" size="27" tabindex="38" value="山田" /></td>
			</tr>
			<tr>
				<th scope="row">発送先住所１(RedShipAddr1)</th>
				<td><input name="RedShipAddr1" type="text" size="27" tabindex="39" value="送り先１" /></td>
			</tr>
			<tr>
				<th scope="row">発送先住所２(RedShipAddr2)</th>
				<td><input name="RedShipAddr2" type="text" size="27" tabindex="40" value="送り先２" /></td>
			</tr>
			<tr>
				<th scope="row">発送先住所３(RedShipAddr3)</th>
				<td><input name="RedShipAddr3" type="text" size="27" tabindex="41" value="送り先３アパート" /></td>
			</tr>
			<tr>
				<th scope="row">発送先都道府県(RedShipCity)</th>
				<td><input name="RedShipCity" type="text" size="27" tabindex="42" value="発送都道府県" /></td>
			</tr>
			<tr>
				<th scope="row">発送先郵便番号(RedShipPostalCd)</th>
				<td><input name="RedShipPostalCd" type="text" size="27" tabindex="43" value="1500043" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店名(RedEmpCompany)</th>
				<td><input name="RedEmpCompany" type="text" size="27" tabindex="44" value="PG COMPANY" /></td>
			</tr>
			<tr>
				<th scope="row">デバイス情報(RedEbtDeviceprint)</th>
				<td><input name="RedEbtDeviceprint" type="text" size="27" tabindex="45" value="" /></td>
			</tr>
			<tr>
				<th scope="row">予備項目8(RedEbtUserData8)</th>
				<td><input name="RedEbtUserData8" type="text" size="27" tabindex="46" value=""/></td>
			</tr>
			<tr>
				<th scope="row">予備項目9(RedEbtUserData9)</th>
				<td><input name="RedEbtUserData9" type="text" size="27" tabindex="47" value=""/></td>
			</tr>
			<tr>
				<th scope="row">再購入日数(RedEbtUserData11)</th>
				<td><input name="RedEbtUserData11" type="text" size="10" tabindex="48" class="num" value="30" /></td>
			</tr>
			<tr>
				<th scope="row">過去購買回数(RedEbtUserData12)</th>
				<td><input name="RedEbtUserData12" type="text" size="10" tabindex="49" class="num" value="1" /></td>
			</tr>
			<tr>
				<th scope="row">与信結果(RedEbtUserData13)</th>
				<td><input name="RedEbtUserData13" type="text" size="27" tabindex="50" value="" /></td>
			</tr>
			<tr>
				<th scope="row">郵便局・営業所留フラグ(RedEbtUserData15)</th>
				<td><input name="RedEbtUserData15" type="text" size="27" tabindex="51" value="Y" /></td>
			</tr>
			<tr>
				<th scope="row">郵便局・営業所名(RedEbtUserData16)</th>
				<td><input name="RedEbtUserData16" type="text" size="27" tabindex="52" value="郵便局" /></td>
			</tr>
			<tr>
				<th scope="row">ユーザポイント残高(RedEbtUserData17)</th>
				<td><input name="RedEbtUserData17" type="text" size="10" tabindex="53" class="num" value="200" /></td>
			</tr>
			<tr>
				<th scope="row">カード登録変更回数(RedEbtUserData18)</th>
				<td><input name="RedEbtUserData18" type="text" size="10" tabindex="54" class="num" value="2" /></td>
			</tr>
			<tr>
				<th scope="row">予備項目19(RedEbtUserData19)</th>
				<td><input name="RedEbtUserData19" type="text" size="27" tabindex="55" value="" /></td>
			</tr>
			<tr>
				<th scope="row">カードTOF(RedEbtUserData20)</th>
				<td><input name="RedEbtUserData20" type="text" size="27" tabindex="56" class="num" value="110" /></td>
			</tr>
			<tr>
				<th scope="row">予備項目21(RedEbtUserData21)</th>
				<td><input name="RedEbtUserData21" type="text" size="27" tabindex="57" value="" /></td>
			</tr>
			<tr>
				<th scope="row">予備項目22(RedEbtUserData22)</th>
				<td><input name="RedEbtUserData22" type="text" size="27" tabindex="58" value="" /></td>
			</tr>
			<tr>
				<th scope="row">予備項目23(RedEbtUserData23)</th>
				<td><input name="RedEbtUserData23" type="text" size="27" tabindex="59" value="" /></td>
			</tr>
			<tr>
				<th scope="row">予備項目24(RedEbtUserData24)</th>
				<td><input name="RedEbtUserData24" type="text" size="27" tabindex="60" value="" /></td>
			</tr>
			<tr>
				<th scope="row">予備項目25(RedEbtUserData25)</th>
				<td><input name="RedEbtUserData25" type="text" size="27" tabindex="61" value="" /></td>
			</tr>
			<tr>
				<th scope="row">商品個数１(RedItemQty1)</th>
				<td><input name="RedItemQty1" type="text" size="10" tabindex="62" class="num" value="1" /></td>
			</tr>
			<tr>
				<th scope="row">商品識別コード１(RedItemProdCd1)</th>
				<td><input name="RedItemProdCd1" type="text" size="27" tabindex="63" value="ABC123" /></td>
			</tr>
			<tr>
				<th scope="row">商品IAN/JANコード１(RedItemManPartNo1)</th>
				<td><input name="RedItemManPartNo1" type="text" size="27" tabindex="64" value="1234567" /></td>
			</tr>
			<tr>
				<th scope="row">商品カテゴリー１(RedItemDesc1)</th>
				<td><input name="RedItemDesc1" type="text" size="27" tabindex="65" value="Footwear" /></td>
			</tr>
			<tr>
				<th scope="row">商品単価１(RedEbtItemCst1)</th>
				<td><input name="RedEbtItemCst1" type="text" size="10" tabindex="66" class="num" value="10000" /></td>
			</tr>
			<tr>
				<th scope="row">商品名１(RedItemGiftMsg1)</th>
				<td><input name="RedItemGiftMsg1" type="text" size="27" tabindex="67" value="Ｇｉｆｔ　Ｍｅｓｓａｇｅ" /></td>
			</tr>
			<tr>
				<th scope="row">商品個数２(RedItemQty2)</th>
				<td><input name="RedItemQty2" type="text" size="10" tabindex="68" class="num" value="2" /></td>
			</tr>
			<tr>
				<th scope="row">商品識別コード２(RedItemProdCd2)</th>
				<td><input name="RedItemProdCd2" type="text" size="27" tabindex="69" value="DEF456" /></td>
			</tr>
			<tr>
				<th scope="row">商品IAN/JANコード２(RedItemManPartNo2)</th>
				<td><input name="RedItemManPartNo2" type="text" size="27" tabindex="70" value="2234567" /></td>
			</tr>
			<tr>
				<th scope="row">商品カテゴリー２(RedItemDesc2)</th>
				<td><input name="RedItemDesc2" type="text" size="27" tabindex="71" value="Shoes" /></td>
			</tr>
			<tr>
				<th scope="row">商品単価２(RedEbtItemCst2)</th>
				<td><input name="RedEbtItemCst2" type="text" size="10" tabindex="72" class="num" value="20000" /></td>
			</tr>
			<tr>
				<th scope="row">商品名２(RedItemGiftMsg2)</th>
				<td><input name="RedItemGiftMsg2" type="text" size="27" tabindex="73" value="Ｓｈｏｅｓ　Ｎａｍｅ" /></td>
			</tr>
			<tr>
				<th scope="row">電文タイプ(TelegramType)</th>
				<td><input name="TelegramType" type="text" size="27" tabindex="74" /></td>
			</tr>

			</tbody>
		</table>
	</form>
	<?php
		}else{//送信結果の表示です
	?>
		<table>
			<caption>実行結果</caption>
			<tfoot>

			</tfoot>
			<tbody>
				<tr>
					<th scope="row">ReD Request ID(RedReqId)</th>
					<td><?php echo $output->getRedReqId() ?></td>
				</tr>
				<tr>
					<th scope="row">Order/TransactionID(RedOrdId)</th>
					<td><?php echo $output->getRedOrdId() ?></td>
				</tr>
				<tr>
					<th scope="row">Status code(RedStatCd)</th>
					<td><?php echo $output->getRedStatCd() ?></td>
				</tr>
				<tr>
					<th scope="row">ReD Shield Status Code(RedFraudStatCd)</th>
					<td><?php echo $output->getRedFraudStatCd() ?></td>
				</tr>
				<tr>
					<th scope="row">ReD Shield Response Code(RedFraudRspCd)</th>
					<td><?php echo $output->getRedFraudRspCd() ?></td>
				</tr>
				<tr>
					<th scope="row">ReD Shield Response Message(RedFraudRspMsg)</th>
					<td><?php echo $output->getRedFraudRspMsg() ?></td>
				</tr>
				<tr>
					<th scope="row">ReD Shield Transaction ID(RedFraudRecId)</th>
					<td><?php echo $output->getRedFraudRecId() ?></td>
				</tr>

			</tbody>
		</table>
	<?php
		}//if( !isset ($_POST['submit']) )
	?>
</div>

<div id="footer">
	<em>Copyright (c) 2008 GMO Payment Gateway,Inc. All Rights Reserved.</em>
</div>

</body>
</html>