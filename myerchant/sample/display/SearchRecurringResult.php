<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[SearchRecurringResult]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>自動売上自動売上結果照会/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">自動売上ID(RecurringID)</th>
				<td><input name="RecurringID" type="text" size="27" tabindex="13" /></td>
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
					<th scope="row">課金手段(Method)</th>
					<td><?php echo $output->getMethod() ?></td>
				</tr>
				<tr>
					<th scope="row">ショップID(ShopID)</th>
					<td><?php echo $output->getShopID() ?></td>
				</tr>
				<tr>
					<th scope="row">自動売上ID(RecurringID)</th>
					<td><?php echo $output->getRecurringID() ?></td>
				</tr>
				<tr>
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderID() ?></td>
				</tr>
				<tr>
					<th scope="row">課金日(ChargeDate)</th>
					<td><?php echo $output->getChargeDate() ?></td>
				</tr>
				<tr>
					<th scope="row">取引状態 または 振替依頼レコード状態(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">利用金額(Amount)</th>
					<td><?php echo $output->getAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">税送料(Tax)</th>
					<td><?php echo $output->getTax() ?></td>
				</tr>
				<tr>
					<th scope="row">次回課金日(NextChargeDate)</th>
					<td><?php echo $output->getNextChargeDate() ?></td>
				</tr>
				<tr>
					<th scope="row">アクセスID(AccessID)</th>
					<td><?php echo $output->getAccessID() ?></td>
				</tr>
				<tr>
					<th scope="row">アクセスパスワード(AccessPass)</th>
					<td><?php echo $output->getAccessPass() ?></td>
				</tr>
				<tr>
					<th scope="row">仕向先(Forward)</th>
					<td><?php echo $output->getForward() ?></td>
				</tr>
				<tr>
					<th scope="row">承認番号(ApprovalNo)</th>
					<td><?php echo $output->getApprovalNo() ?></td>
				</tr>
				<tr>
					<th scope="row">サイトID(SiteID)</th>
					<td><?php echo $output->getSiteID() ?></td>
				</tr>
				<tr>
					<th scope="row">メンバーID(MemberID)</th>
					<td><?php echo $output->getMemberID() ?></td>
				</tr>
				<tr>
					<th scope="row">通帳記載内容(PrintStr)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getPrintStr() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">振替結果詳細コード(Result)</th>
					<td><?php echo $output->getResult() ?></td>
				</tr>
				<tr>
					<th scope="row">自動売上エラーコード(ChargeErrCode)</th>
					<td><?php echo $output->getChargeErrCode() ?></td>
				</tr>
				<tr>
					<th scope="row">自動売上エラー詳細コード(ChargeErrInfo)</th>
					<td><?php echo $output->getChargeErrInfo() ?></td>
				</tr>
				<tr>
					<th scope="row">処理日時(ProcessDate)</th>
					<td><?php echo $output->getProcessDate() ?></td>
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