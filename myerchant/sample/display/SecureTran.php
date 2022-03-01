<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[SecureTran]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>本人認証後取引実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	<table>
		<caption>実行結果</caption>
		<tbody>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><?php echo $output->getOrderId() ?></td>
			</tr>
			<tr>
				<th scope="row">仕向先カード会社(Forward)</th>
				<td><?php echo $output->getForward() ?></td>
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
				<th scope="row">承認番号(Approve)</th>
				<td><?php echo $output->getApprovalNo() ?></td>
			</tr>
			<tr>
				<th scope="row">トランザクションID(TranID)</th>
				<td><?php echo $output->getTranId() ?></td>
			</tr>
			<tr>
				<th scope="row">決済日付(TranDate)</th>
				<td><?php echo $output->getTranDate() ?></td>
			</tr>
			<tr>
				<th scope="row">チェック文字列(CheckString)</th>
				<td><?php echo $output->getCheckString() ?></td>
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
</div>

<div id="footer">
	<em>Copyright (c) GMO Payment Gateway,Inc. All Rights Reserved.</em>
</div>

</body>
</html>