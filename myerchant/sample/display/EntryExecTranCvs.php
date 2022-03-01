<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[EntryExec]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>コンビニ取引登録・決済実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	<?php
		 if( !isset ($_POST['submit']) ){//初期表示です
	?>
	<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
		<table>
			<tbody>
				<tr>
					<th scope="row">オーダーID(OrderID)</th>
					<td><input name="OrderID" type="text" maxlength="27" size="27" tabindex="11" /></td>
				</tr>
				<tr>
					<th scope="row">利用金額(Amount)</th>
					<td><input name="Amount" type="text" maxlength="8" size="10" tabindex="14" class="num" /></td>
				</tr>
				<tr>
					<th scope="row">税送料(Tax)</th>
					<td><input name="Tax" type="text" maxlength="7" size="10" tabindex="15" class="num" /></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目１(ClientField1)</th>
					<td><input name="ClientField1" type="text" maxlength="100" tabindex="19" /> </td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目２(ClientField2)</th>
					<td><input name="ClientField2" type="text" maxlength="100" tabindex="20" /> </td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目３(ClientField3)</th>
					<td><input name="ClientField3" type="text" maxlength="100" tabindex="21" /> </td>
				</tr>
			</tbody>
		</table>
		<table>
			<tbody>
				<tr>
					<th scope="row">メールアドレス</th>
					<td><input name="MailAddress" type="text" maxlength="256" class="text" tabindex="22" /></td>
				</tr>
				<tr>
					<th scope="row">加盟店メールアドレス</th>
					<td><input name="ShopMailAdress" type="text" maxlength="256" class="text"  tabindex="23" /></td>
				</tr>
				<tr>
					<th scope="row">支払先コンビニ</th>
					<td><input name="Convenience" type="text" maxlength="5" class="text"  tabindex="24" /></td>
				</tr>
				<tr>
					<th scope="row">氏名</th>
					<td><input name="CustomerName" type="text" maxlength="40" class="text"  tabindex="25" /></td>
				</tr>
				<tr>
					<th scope="row">フリガナ</th>
					<td><input name="CustomerKana" type="text" maxlength="40" class="text"  tabindex="26" /></td>
				</tr>
				<tr>
					<th scope="row">電話番号</th>
					<td><input name="TelNo" type="text" maxlength="13" class="text"  tabindex="27" /></td>
				</tr>
				<tr>
					<th scope="row">支払期限日数</th>
					<td><input name="PaymentTermDay" type="text" maxlength="3" class="num" size="5" tabindex="28" /></td>
				</tr>
				<tr>
					<th scope="row">予約番号</th>
					<td><input name="ReserveNo" type="text" maxlength="20" class="text" tabindex="29" /></td>
				</tr>
				<tr>
					<th scope="row">会員番号</th>
					<td><input name="MemberNo" type="text" maxlength="20" class="text" tabindex="30" /></td>
				</tr>
				<tr>
					<th scope="row">POSレジ表示欄1</th>
					<td><input name="RegisterDisp1" type="text" maxlength="32" class="text" tabindex="31" /></td>
				</tr>
				<tr>
					<th scope="row">POSレジ表示欄2</th>
					<td><input name="RegisterDisp2" type="text" maxlength="32" class="text" tabindex="32" /></td>
				</tr>
				<tr>
					<th scope="row">POSレジ表示欄3</th>
					<td><input name="RegisterDisp3" type="text" maxlength="32" class="text" tabindex="33" /></td>
				</tr>
				<tr>
					<th scope="row">POSレジ表示欄4</th>
					<td><input name="RegisterDisp4" type="text" maxlength="32" class="text" tabindex="34" /></td>
				</tr>
				<tr>
					<th scope="row">POSレジ表示欄5</th>
					<td><input name="RegisterDisp5" type="text" maxlength="32" class="text" tabindex="35" /></td>
				</tr>
				<tr>
					<th scope="row">POSレジ表示欄6</th>
					<td><input name="RegisterDisp6" type="text" maxlength="32" class="text" tabindex="36" /></td>
				</tr>
				<tr>
					<th scope="row">POSレジ表示欄7</th>
					<td><input name="RegisterDisp7" type="text" maxlength="32" class="text" tabindex="37" /></td>
				</tr>
				<tr>
					<th scope="row">POSレジ表示欄8</th>
					<td><input name="RegisterDisp8" type="text" maxlength="32" class="text" tabindex="38" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄1</th>
					<td><input name="ReceiptsDisp1" type="text" maxlength="60" class="text" tabindex="39" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄2</th>
					<td><input name="ReceiptsDisp2" type="text" maxlength="60" class="text" tabindex="40" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄3</th>
					<td><input name="ReceiptsDisp3" type="text" maxlength="60" class="text" tabindex="41" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄4</th>
					<td><input name="ReceiptsDisp4" type="text" maxlength="60" class="text" tabindex="42" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄5</th>
					<td><input name="ReceiptsDisp5" type="text" maxlength="60" class="text" tabindex="43" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄6</th>
					<td><input name="ReceiptsDisp6" type="text" maxlength="60" class="text" tabindex="44" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄7</th>
					<td><input name="ReceiptsDisp7" type="text" maxlength="60" class="text" tabindex="45" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄8</th>
					<td><input name="ReceiptsDisp8" type="text" maxlength="60" class="text" tabindex="46" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄9</th>
					<td><input name="ReceiptsDisp9" type="text" maxlength="60" class="text" tabindex="47" /></td>
				</tr>
				<tr>
					<th scope="row">レシート表示欄10</th>
					<td><input name="ReceiptsDisp10" type="text" maxlength="60" class="text" tabindex="48" /></td>
				</tr>
				<tr>
					<th scope="row">お問合せ先</th>
					<td><input name="ReceiptsDisp11" type="text" maxlength="60" class="text" tabindex="49" /></td>
				</tr>
				<tr>
					<th scope="row">お問合せ先電話番号</th>
					<td><input name="ReceiptsDisp12" type="text" maxlength="60" class="text" tabindex="50" /></td>
				</tr>
				<tr>
					<th scope="row">お問合せ先受付時間</th>
					<td><input name="ReceiptsDisp13" type="text" maxlength="60" class="text" tabindex="51" /></td>
				</tr>
			</tbody>
		</table>
		<input name="submit" type="submit" value="実行"  tabindex="52" />
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
					<th scope="row">取引ID(AccessID)</th>
					<td><?php echo $output->getAccessId() ?></td>
				</tr>
				<tr>
					<th scope="row">取引PASS(AccessPass)</th>
					<td><?php echo $output->getAccessPass() ?></td>
				</tr>
				<tr>
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderId() ?></td>
				</tr>

				<tr>
					<th scope="row">確認番号(ConfNo)</th>
					<td><?php echo $output->getConfNo() ?></td>
				</tr>
				<tr>
					<th scope="row">受付番号(ReceiptNo)</th>
					<td><?php echo $output->getReceiptNo() ?></td>
				</tr>
				<tr>
					<th scope="row">支払期限日時(PaymentTerm)</th>
					<td><?php echo $output->getPaymentTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">決済日付(TranDate)</th>
					<td><?php echo $output->getTranDate() ?></td>
				</tr>
				<tr>
					<th scope="row">払込票URL(ReceiptUrl)</th>
					<td><?php echo $output->getReceiptUrl() ?></td>
				</tr>
				<tr>
					<th scope="row">チェック文字列(CheckString)</th>
					<td><?php echo $output->getCheckString() ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目１(ClientField1)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField1() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目２(ClientField2)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField2() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目３(ClientField3)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField3() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
			</tbody>
		</table>
	<?php
		}//if( !isset ($_POST['submit']) )
	?>
</div>

<div id="footer">
	<em>Copyright (c) GMO Payment Gateway,Inc. All Rights Reserved.</em>
</div>


</body>
</html>