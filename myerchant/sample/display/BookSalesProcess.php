<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[Entry]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>実売予約/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<td><input name="ShopID" type="text" size="27" /></td>
			</tr>
			<tr>
				<th scope="row">ショップパスワード(ShopPass)</th>
				<td><input name="ShopPass" type="text" size="27" /></td>
			</tr>
			<tr>
				<th scope="row">取引ID(AccessID)</th>
				<td><input name="AccessID" type="text" maxlength="32" size="32" /></td>
			</tr>
			<tr>
				<th scope="row">取引パスワード(AccessPass)</th>
				<td><input name="AccessPass" type="text" maxlength="32" size="32" /></td>
			</tr>
			<tr>
				<th scope="row">実売予約日(BookingDate)</th>
				<td><input name="BookingDate" type="text" maxlength="8" size="8" /></td>
			</tr>
			<tr>
				<th scope="row">利用金額(Amount)</th>
				<td><input name="Amount" type="text" maxlength="8" size="10" class="num" /></td>
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
					<td><?php echo $output->getAccessId() ?></td>
				</tr>
				<tr>
					<th scope="row">取引PASS(AccessPass)</th>
					<td><?php echo $output->getAccessPass() ?></td>
				</tr>
				<tr>
					<th scope="row">予約情報バージョン(BookingInfoVersion)</th>
					<td><?php echo $output->getBookingInfoVersion() ?></td>
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