<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[Entry]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>PayPal決済実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	<?php
		 if( !isset ($_POST['submit']) ){//初期表示
	?>
	<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
		<table>
			<tbody>
			<tr>
				<th scope="row">取引ID(AccessID)</th>
				<td><input name="AccessID" type="text" value="<?php echo isset($_GET['AccessID'])? $_GET['AccessID'] : '' ?>" tabindex="1" /></td>
			</tr>
			<tr>
				<th scope="row">取引パスワード(AccessPass)</th>
				<td><input name="AccessPass" type="text" value="<?php echo isset($_GET['AccessPass'])? $_GET['AccessPass'] : '' ?>" tabindex="2" /></td>
			</tr>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" maxlength="27" value="<?php echo isset($_GET['OrderID'])? $_GET['OrderID'] : '' ?>" tabindex="3" /></td>
			</tr>
			<tr>
				<th scope="row">商品名(ItemName)</th>
				<td><input name="ItemName" type="text" maxlength="27" value="<?php echo isset($_GET['ItemName'])? $_GET['ItemName'] : '' ?>" tabindex="4" /></td>
			</tr>
			<tr>
				<th scope="row">リダイレクトURL(RedirectURL)</th>
				<td><input name="RedirectURL" type="text" maxlength="1000" value="<?php echo isset($_GET['RedirectURL'])? $_GET['RedirectURL'] : '' ?>" tabindex="5" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目１(ClientField1)</th>
				<td><input name="ClientField1" type="text" maxlength="100" tabindex="6" /> </td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目２(ClientField2)</th>
				<td><input name="ClientField2" type="text" maxlength="100" tabindex="7" /> </td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目３(ClientField3)</th>
				<td><input name="ClientField3" type="text" maxlength="100" tabindex="8" /> </td>
			</tr>
			</tbody>
		</table>
		<input name="submit" type="submit" value="実行" tabindex="9" />
	</form>
	<?php
		}else{//送信結果の表示です
	?>
		<table>
			<caption>実行結果</caption>
			<tbody>
				<tr>
					<th scope="row">オーダID(OrderID)</th>
					<td><?php echo $output->getOrderId() ?></td>
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