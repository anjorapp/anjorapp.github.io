<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[TradedCard]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>取引後カード登録/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">

	<?php if( !isset ($_POST['submit']) ){//初期表示です?>

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
						<td><input name="OrderID" type="text" maxlength="27" size="30" value="<?php echo isset($_GET['OrderID'])? $_GET['OrderID'] : ''  ?>"  tabindex="11" /></td>
					</tr>
					<tr>
						<th scope="row">会員ID(MemberID)</th>
						<td><input name="MemberID" type="text" maxlength="60" size="30" value="<?php echo isset($_GET['MemberID'])? $_GET['MemberID'] : ''  ?>" tabindex="12" /></td>
					</tr>
					<tr>
						<th align="left">カード登録連番モード</th>
						<td>
							<select id="text" name="SeqMode" tabindex="13">
								<option value="">無指定</option>
								<option selected="selected" value="0">論理モード(デフォルト)</option>
								<option value="1">物理モード</option>
							</select>
						</td>
					</tr>
					<tr>
						<th align="left">洗替・継続課金フラグ</th>
						<td>
							<select id="text" name="DefaultFlag" tabindex="14">
								<option value="">無指定</option>
								<option selected="selected" value="0">継続課金対象としない(デフォルト)</option>
								<option value="1">継続課金対象とする</option>
							</select>
						</td>
					</tr>
					<tr>
						<th scope="row">カード登録連番</th>
						<td><input name="CardSeq" type="text" maxlength="4" size="30" value="<?php echo isset($_GET['"CardSeq"'])? $_GET['"CardSeq"'] : ''  ?>" tabindex="15" /></td>
					</tr>
					<tr>
						<th scope="row">カード名義人</th>
						<td><input name="HolderName" type="text" maxlength="50" size="30" value="<?php echo isset($_GET['HolderName'])? $_GET['HolderName'] : ''  ?>" tabindex="16" /></td>
					</tr>
				</tbody>
			</table>
		</form>

	<?php }else{//送信結果の表示です ?>

		<table>
			<caption>実行結果</caption>
			<tfoot>
				<tr>
					<td colspan="2">
						<a href="SearchCard.php?MemberID=<?php echo $_POST['MemberID'] ?>" tabindex="13">
						この会員のカードを表示</a>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<th scope="row">登録カード連番(CardSeq)</th>
					<td><?php echo $output->getCardSeq() ?></td>
				</tr>
				<tr>
					<th scope="row">カード番号(CardNo)</th>
					<td><?php echo $output->getCardNo() ?></td>
				</tr>
				<tr>
					<th scope="row">仕向先カード会社(Forward)</th>
					<td><?php echo $output->getForward() ?></td>
				</tr>
			</tbody>
		</table>

	<?php }//if( !isset ($_POST['submit']) )?>
</div>

<div id="footer">
	<em>Copyright (c) GMO Payment Gateway,Inc. All Rights Reserved.</em>
</div>

</body>
</html>