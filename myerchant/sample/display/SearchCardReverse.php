<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[SearchCardReverse]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>カード検索(逆引き)/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">

	<?php if( !isset ($_POST['submit']) ){//初期表示です?>

		<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
			<table>
				<tfoot>
					<tr>
						<td colspan="2"><input name="submit" type="submit" value="実行" tabindex="15" /></td>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<th scope="row">サイトID(SiteID)</th>
						<td><input name="SiteID" type="text" maxlength="60" size="30" value="<?php echo isset($_GET['SiteID'])? $_GET['SiteID'] : ''  ?>" tabindex="11" /></td>
					</tr>
					<tr>
						<th scope="row">サイトパスワード(SitePass)</th>
						<td>
							<input name="SitePass" type="text" maxlength="13" size="30" class="num" tabindex="12" />
						</td>
					</tr>
					<tr>
						<th scope="row">カード番号(CardNo)</th>
						<td>
							<input name="CardNo" type="text" maxlength="16" size="30" class="num" tabindex="13" />
						</td>
					</tr>
					<tr>
						<th scope="row">カード情報トークン(Token)</th>
						<td>
							<input name="Token" type="text" size="30" class="num" tabindex="14" />
						</td>
					</tr>
				</tbody>
			</table>
		</form>

	<?php }else{//送信結果の表示です?>

		<table>
			<caption>実行結果</caption>
			<tbody>
				<?php
					$memberList = $output->getMemberList();
					foreach( $memberList as $member ){
				?>
				<tr>
					<th scope="row">会員ID(MemberID)<?php echo $member['MemberID'] ?></th>
				</tr>
				<tr>
					<th scope="row">カード登録日(CreateDate)</th>
					<td><?php echo $member['CreateDate'] ?></td>
				</tr>
				<tr>
					<th scope="row">削除フラグ(DeleteFlag)</th>
					<td><?php echo $member['DeleteFlag'] ?></td>
				</tr>
			</tbody>
				<?php } ?>
		</table>

	<?php }//if( !isset ($_POST['submit']) )?>
</div>

<div id="footer">
	<em>Copyright (c) GMO Payment Gateway,Inc. All Rights Reserved.</em>
</div>

</body>
</html>