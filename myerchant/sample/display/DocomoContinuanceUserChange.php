<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[DocomoContinuanceUserChange]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>ドコモ継続決済継続課金変更(お客様)/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<td><input name="ShopPass" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">取引ID(AccessID)</th>
				<td><input name="AccessID" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">取引パスワード(AccessPass)</th>
				<td><input name="AccessPass" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">利用金額(Amount)</th>
				<td><input name="Amount" type="text" size="10" tabindex="11" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">税送料(Tax)</th>
				<td><input name="Tax" type="text" size="10" tabindex="11" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">ドコモ表示項目1(DocomoDisp1)</th>
				<td><input name="DocomoDisp1" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">ドコモ表示項目2(DocomoDisp2)</th>
				<td><input name="DocomoDisp2" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">決済結果戻しURL(RetURL)</th>
				<td><input name="RetURL" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">支払開始期限秒(PaymentTermSec)</th>
				<td><input name="PaymentTermSec" type="text" size="10" tabindex="11" class="num" /></td>
			</tr>
			</tbody>
		</table>
	</form>
	<?php
		}else{//送信結果の表示です
	?>
		<table>
			<caption>実行結果</caption>

			<tbody>
				<tr>
					<th scope="row">取引ID(AccessID)</th>
					<td><?php echo $output->getAccessID() ?></td>
				</tr>
				<tr>
					<th scope="row">決済トークン(Token)</th>
					<td><?php echo $output->getToken() ?></td>
				</tr>
				<tr>
					<th scope="row">支払手続き開始IFのURL(StartURL)</th>
					<td><?php echo $output->getStartURL() ?></td>
				</tr>
				<tr>
					<th scope="row">支払開始期限日時(StartLimitDate)</th>
					<td><?php echo $output->getStartLimitDate() ?></td>
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