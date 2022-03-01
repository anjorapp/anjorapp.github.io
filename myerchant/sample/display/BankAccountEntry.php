<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[BankAccountEntry]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>口振オンライン申し込み/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">サイトID(SiteID)</th>
				<td><input name="SiteID" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">サイトパスワード(SitePass)</th>
				<td><input name="SitePass" type="text" size="27" tabindex="12" /></td>
			</tr>
			<tr>
				<th scope="row">会員ID(MemberID)</th>
				<td><input name="MemberID" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">会員名(MemberName)</th>
				<td><input name="MemberName" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">会員作成フラグ(CreateMember)</th>
				<td><input name="CreateMember" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">手続き後URL(RetURL)</th>
				<td><input name="RetURL" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">銀行コード(BankCode)</th>
				<td><input name="BankCode" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">支店コード(BranchCode)</th>
				<td><input name="BranchCode" type="text" size="27" tabindex="18" /></td>
			</tr>
			<tr>
				<th scope="row">預金区分(AccountType)</th>
				<td><input name="AccountType" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">口座番号(AccountNumber)</th>
				<td><input name="AccountNumber" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">口座名義カナ(AccountName)</th>
				<td><input name="AccountName" type="text" size="27" tabindex="21" /></td>
			</tr>
			<tr>
				<th scope="row">口座名義(AccountNameKanji)</th>
				<td><input name="AccountNameKanji" type="text" size="27" tabindex="22" /></td>
			</tr>
			<tr>
				<th scope="row">消費者利用端末(ConsumerDevice)</th>
				<td><input name="ConsumerDevice" type="text" size="27" tabindex="23" /></td>
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
					<th scope="row">トランザクションID(TranID)</th>
					<td><?php echo $output->getTranID() ?></td>
				</tr>
				<tr>
					<th scope="row">チェックトークン(Token)</th>
					<td><?php echo $output->getToken() ?></td>
				</tr>
				<tr>
					<th scope="row">金融機関遷移URL(StartUrl)</th>
					<td><?php echo $output->getStartUrl() ?></td>
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