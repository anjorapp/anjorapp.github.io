<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[UseValue]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>PGプリカバリュー利用/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">プリカ番号(PrecaNo)</th>
				<td><input name="PrecaNo" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">プリカ認証番号(PrecaPass)</th>
				<td><input name="PrecaPass" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">バリュー(Value)</th>
				<td><input name="Value" type="text" size="10" tabindex="15" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目(ClientField)</th>
				<td><input name="ClientField" type="text" size="27" tabindex="16" /></td>
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
					<th scope="row">プリカ番号(PrecaNo)</th>
					<td><?php echo $output->getPrecaNo() ?></td>
				</tr>
				<tr>
					<th scope="row">プリカ履歴連番(PrecaSeq)</th>
					<td><?php echo $output->getPrecaSeq() ?></td>
				</tr>
				<tr>
					<th scope="row">処理日時(ProcessDate)</th>
					<td><?php echo $output->getProcessDate() ?></td>
				</tr>
				<tr>
					<th scope="row">合計バリュー(TotalValue)</th>
					<td><?php echo $output->getTotalValue() ?></td>
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