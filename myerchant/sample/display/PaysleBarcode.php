<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[PaysleBarcode]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>Paysleバーコード発行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">機種名(DeviceName)</th>
				<td><input name="DeviceName" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">OSバージョン(OsVersion)</th>
				<td><input name="OsVersion" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">画面横幅(WinWidth)</th>
				<td><input name="WinWidth" type="text" size="10" tabindex="18" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">画面縦幅(WinHeight)</th>
				<td><input name="WinHeight" type="text" size="10" tabindex="19" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">画面横方向dpi(Xdpi)</th>
				<td><input name="Xdpi" type="text" size="10" tabindex="20" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">画面縦方向dpi(Ydpi)</th>
				<td><input name="Ydpi" type="text" size="10" tabindex="21" class="num" /></td>
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
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderID() ?></td>
				</tr>
				<tr>
					<th scope="row">バーコードイメージ横幅(PaysleBarcodeWidth)</th>
					<td><?php echo $output->getPaysleBarcodeWidth() ?></td>
				</tr>
				<tr>
					<th scope="row">バーコードイメージ縦幅(PaysleBarcodeHeight)</th>
					<td><?php echo $output->getPaysleBarcodeHeight() ?></td>
				</tr>
				<tr>
					<th scope="row">バーコードイメージ形式(PaysleBarcodeFormat)</th>
					<td><?php echo $output->getPaysleBarcodeFormat() ?></td>
				</tr>
				<tr>
					<th scope="row">バーコードデータ(PaysleBarcode)</th>
					<td><?php echo $output->getPaysleBarcode() ?></td>
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