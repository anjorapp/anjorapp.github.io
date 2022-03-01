<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[SearchTrade]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>取引照会/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	
	<?php if( !isset ($_POST['submit']) ){//初期表示です ?>
	
		<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
			<table>
				<tbody>
					<tr>
						<th scope="row">オーダーID(OrderID)</th>
						<td><input name="OrderID" type="text" maxlength="27" /></td>
					</tr>
				</tbody>
			</table>		
			<input name="submit" type="submit" value="実行" />
		</form>
		
	<?php }else{//送信結果の表示です ?>
	
		<table>
			<caption>実行結果</caption>
			<tfoot>
				<tr>
					<td colspan="2">
						<a href="AlterTran.php?<?php echo 'AccessID=' . $output->getAccessId() . '&AccessPass=' . $output->getAccesspass() ?>">この取引を変更</a>
						<a href="TradedCard.php?OrderID=<?php echo $output->getOrderId() ?>">この取引で利用したカードを登録</a>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderId() ?></td>
				</tr>
				<tr>
					<th scope="row">ステータス(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">処理日時(ProcessDate)</th>
					<td><?php echo $output->getProcessDate() ?></td>
				</tr>
				<tr>
					<th scope="row">処理区分(JobCd)</th>
					<td><?php echo $output->getJobCd() ?></td>
				</tr>
				<tr>
					<th scope="row">取引ID(AccessID)</th>
					<td><?php echo $output->getAccessId() ?></td>
				</tr>
				<tr>
					<th scope="row">取引Pass(AccessPass)</th>
					<td><?php echo $output->getAccessPass() ?></td>
				</tr>
				<tr>
					<th scope="row">商品コード(ItemCode)</th>
					<td><?php echo $output->getItemCode() ?></td>
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
					<th scope="row">サイトID(SiteID)</th>
					<td><?php echo $output->getSiteId() ?></td>
				</tr>
				<tr>
					<th scope="row">会員ID(MemberID)</th>
					<td><?php echo $output->getMemberId() ?></td>
				</tr>
				<tr>
					<th scope="row">カード番号(CardNo)</th>
					<td><?php echo $output->getCardNo() ?></td>
				</tr>
				<tr>
					<th scope="row">有効期限(Expire)</th>
					<td><?php echo $output->getExpire() ?></td>
				</tr>
				<tr>
					<th scope="row">支払方法(Method)</th>
					<td><?php echo $output->getMethod() ?></td>
				</tr>
				<tr>
					<th scope="row">支払回数(PayTimes)</th>
					<td><?php echo $output->getPayTimes() ?></td>
				</tr>
				<tr>
					<th scope="row">仕向先カード会社(Forward)</th>
					<td><?php echo $output->getForward() ?></td>
				</tr>
				<tr>
					<th scope="row">トランザクションID(TranID)</th>
					<td><?php echo $output->getTranId() ?></td>
				</tr>
				<tr>
					<th scope="row">承認番号(Approve)</th>
					<td><?php echo $output->getApprovalNo() ?></td>
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
	<?php }//if( !isset ($_POST['submit']) ) ?>
</div>

<div id="footer">
	<em>Copyright (c) GMO Payment Gateway,Inc. All Rights Reserved.</em>
</div>

</body>
</html>