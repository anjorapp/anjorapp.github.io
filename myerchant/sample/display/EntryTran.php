<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[Entry]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>取引登録/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" maxlength="27" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">処理区分(JobCd)</th>
				<td>
					<select name="JobCd" tabindex="12">
						<option value="AUTH">AUTH:仮売上</option>
						<option value="CHECK">CHECK:有効性チェック</option>
						<option value="CAPTURE">CAPTURE:即時売上</option>
						<option value="FORCERETURN">FORCERETURN:強制返品</option>
						</select>
				</td>
			</tr>
			<tr>
				<th scope="row">商品コード(ItemCode)</th>
				<td><input name="ItemCode" type="text" maxlength="7" size="10" tabindex="13" /></td>
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
				<th scope="row">3D利用(TdFlag)</th>
				<td>
					<label for="isSecure">
						<input name="TdFlag" type="radio" value="1" id="isSecure" tabindex="16" />利用する
					</label>
					<label for="isNotSecure">
						<input name="TdFlag" type="radio" value="0" id="isNotSecure" checked="checked" tabindex="17" />利用しない
					</label>
				</td>
			</tr>
			<tr>
				<th scope="row">3D認証画面店舗名(TdTenantName)</th>
				<td><input name="TdTenantName" type="text" tabindex="18" /></td>
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
				<tr>
					<td colspan="2">
						<a href="ExecTran.php?AccessID=<?php echo urlencode( $output->getAccessId() ) . '&AccessPass=' . urlencode( $output->getAccessPass()) .'&OrderID=' . $_POST['OrderID'] ?>" tabindex="30">
						引き続き決済実行(ExecTran)を行う</a>
					</td>
				</tr>
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