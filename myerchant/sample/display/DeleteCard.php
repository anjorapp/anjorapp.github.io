<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[DeleteCard]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>カード削除/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	
	<?php if( !isset ($_POST['submit']) ){//初期表示です ?>
	
		<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
			<table>
				<tfoot>
					<tr>
						<td colspan="2"><input name="submit" type="submit" value="実行" tabindex="14" /></td>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<th scope="row">会員ID(MemberID)</th>
						<td><input name="MemberID" type="text" maxlength="60" size="30" value="<?php echo isset($_GET['MemberID'])? $_GET['MemberID'] : ''  ?>" tabindex="11" /></td>
					</tr>
					<tr>
						<th scope="row">登録カード連番(CardSeq)</th>
						<td>
							<input name="CardSeq" type="text" maxlength="2" size="5" class="num" tabindex="12" />
						</td>
					</tr>
					<tr>
						<th scope="row">カード連番モード(SeqMode)</th>
						<td>
						<label for="seq0">
							<input name="SeqMode" id="seq0" type="radio" value="0" checked="checked" tabindex="13" />論理
						</label>
						<label for="seq1">
							<input name="SeqMode" id="seq1" type="radio" value="1" tabindex="14" />物理
						</label>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		
	<?php }else{//送信結果の表示です ?>
	
		<table>
			<caption>実行結果</caption>
			<tbody>
				<tr>
					<th scope="row">カード連番(CardSeq)</th>
					<td><?php echo $output->getCardSeq() ?></td>
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