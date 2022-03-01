<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[ExecTranVirtualaccount]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>銀行振込(バーチャル口座)決済実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
					<td colspan="2"><input name="submit" type="submit" value="実行" tabindex="50" /></td>
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
				<th scope="row">取引ID(AccessID)</th>
				<td><input name="AccessID" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">取引パスワード(AccessPass)</th>
				<td><input name="AccessPass" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">取引有効日数(TradeDays)</th>
				<td><input name="TradeDays" type="text" size="10" tabindex="16" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">取引事由(TradeReason)</th>
				<td><input name="TradeReason" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">振込依頼者氏名(TradeClientName)</th>
				<td><input name="TradeClientName" type="text" size="27" tabindex="18" /></td>
			</tr>
			<tr>
				<th scope="row">振込依頼者メールアドレス(TradeClientMailaddress)</th>
				<td><input name="TradeClientMailaddress" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目１(ClientField1)</th>
				<td><input name="ClientField1" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目２(ClientField2)</th>
				<td><input name="ClientField2" type="text" size="27" tabindex="21" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目３(ClientField3)</th>
				<td><input name="ClientField3" type="text" size="27" tabindex="22" /></td>
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
					<th scope="row">取引ID(AccessID)</th>
					<td><?php echo $output->getAccessID() ?></td>
				</tr>
				<tr>
					<th scope="row">銀行コード(BankCode)</th>
					<td><?php echo $output->getBankCode() ?></td>
				</tr>
				<tr>
					<th scope="row">銀行名(BankName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getBankName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">支店コード(BranchCode)</th>
					<td><?php echo $output->getBranchCode() ?></td>
				</tr>
				<tr>
					<th scope="row">支店名(BranchName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getBranchName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">科目(AccountType)</th>
					<td><?php echo $output->getAccountType() ?></td>
				</tr>
				<tr>
					<th scope="row">口座番号(AccountNumber)</th>
					<td><?php echo $output->getAccountNumber() ?></td>
				</tr>
				<tr>
					<th scope="row">取引口座有効期限(AvailableDate)</th>
					<td><?php echo $output->getAvailableDate() ?></td>
				</tr>
				<tr>
					<th scope="row">振込コード(TradeCode)</th>
					<td><?php echo $output->getTradeCode() ?></td>
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