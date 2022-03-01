<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[CancelTranGANB]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>GANB支払い停止/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
					<th scope="row">現状態(Status)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getStatus() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目1(ClientField1)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField1() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目2(ClientField2)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField2() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目3(ClientField3)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField3() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">累計額(TotalTransferAmount)</th>
					<td><?php echo $output->getTotalTransferAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">累計件数(TotalTransferCount)</th>
					<td><?php echo $output->getTotalTransferCount() ?></td>
				</tr>
				<tr>
					<th scope="row">最終振振込額(LatestTransferAmount)</th>
					<td><?php echo $output->getLatestTransferAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">最終振込日(LatestTransferDate)</th>
					<td><?php echo $output->getLatestTransferDate() ?></td>
				</tr>
				<tr>
					<th scope="row">最終振込依頼人名(LatestTransferName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getLatestTransferName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">最終仕向銀行名(LatestTransferBankName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getLatestTransferBankName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">最終仕向支店名(LatestTransferBranchName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getLatestTransferBranchName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
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