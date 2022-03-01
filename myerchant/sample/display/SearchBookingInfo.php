<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[Entry]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>実売予約照会/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<tr>
					<th scope="row">予約ステータス(BookingStatus)</th>
					<td><?php echo $output->getBookingStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">実売予約日(BookingDate)</th>
					<td><?php echo $output->getBookingDate() ?></td>
				</tr>
				<tr>
					<th scope="row">処理結果仕向先コード(ResultForward)</th>
					<td><?php echo $output->getResultForward() ?></td>
				</tr>
				<tr>
					<th scope="row">処理結果承認番号(ResultApprove)</th>
					<td><?php echo $output->getResultApprove() ?></td>
				</tr>
				<tr>
					<th scope="row">処理結果トランザクションID(ResultTranId)</th>
					<td><?php echo $output->getResultTranId() ?></td>
				</tr>
				<tr>
					<th scope="row">処理結果決済日付(ResultTranDate)</th>
					<td><?php echo $output->getResultTranDate() ?></td>
				</tr>
				<tr>
					<th scope="row">処理結果エラーコード(ResultErrCode)</th>
					<td><?php echo $output->getResultErrCode() ?></td>
				</tr>
				<tr>
					<th scope="row">処理結果エラー詳細コード(ResultErrInfo)</th>
					<td><?php echo $output->getResultErrInfo() ?></td>
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