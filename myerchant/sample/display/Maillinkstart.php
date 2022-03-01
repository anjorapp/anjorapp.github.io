<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[Maillinkstart]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>メールリンク決済開始/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">実行モード(ExecMode)</th>
				<td><input name="ExecMode" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">メールリンク注文番号(MailLinkOrderNo)</th>
				<td><input name="MailLinkOrderNo" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">商品名(ItemName)</th>
				<td><input name="ItemName" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">通貨コード(Currency)</th>
				<td><input name="Currency" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">利用金額(Amount)</th>
				<td><input name="Amount" type="text" size="10" tabindex="17" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">税送料(Tax)</th>
				<td><input name="Tax" type="text" size="10" tabindex="18" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">購入者氏名(CustomerName)</th>
				<td><input name="CustomerName" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">メールアドレス(MailAddress)</th>
				<td><input name="MailAddress" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">テンプレートNo.(TemplateNo)</th>
				<td><input name="TemplateNo" type="text" size="10" tabindex="21" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">メッセージ言語(Lang)</th>
				<td><input name="Lang" type="text" size="27" tabindex="22" /></td>
			</tr>
			<tr>
				<th scope="row">有効日数(ExpireDays)</th>
				<td><input name="ExpireDays" type="text" size="10" tabindex="23" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目１(ClientField1)</th>
				<td><input name="ClientField1" type="text" size="27" tabindex="24" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目２(ClientField2)</th>
				<td><input name="ClientField2" type="text" size="27" tabindex="25" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目３(ClientField3)</th>
				<td><input name="ClientField3" type="text" size="27" tabindex="26" /></td>
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
					<th scope="row">ショップID(ShopID)</th>
					<td><?php echo $output->getShopID() ?></td>
				</tr>
				<tr>
					<th scope="row">メールリンク注文番号(MailLinkOrderNo)</th>
					<td><?php echo $output->getMailLinkOrderNo() ?></td>
				</tr>
				<tr>
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderID() ?></td>
				</tr>
				<tr>
					<th scope="row">メールリンクＵＲＬ(MaillinkUrl)</th>
					<td><?php echo $output->getMaillinkUrl() ?></td>
				</tr>
				<tr>
					<th scope="row">処理日時(ProcessDate)</th>
					<td><?php echo $output->getProcessDate() ?></td>
				</tr>
				<tr>
					<th scope="row">有効期限日付(ExpireDate)</th>
					<td><?php echo $output->getExpireDate() ?></td>
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