<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[SaveCard]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>カード登録/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	<?php
		 if( !isset ($_POST['submit']) ){//初期表示です
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
				<tr>
					<th scope="row">カード有効期限YYMM(Expire)</th>
					<td>
						<input name="Expire" type="text" maxlength="4" size="5" tabindex="15" />
					</td>
				</tr>
				<tr>
					<th scope="row">カード番号(CardNo)</th>
					<td>
						<input name="CardNo" type="text" maxlength="16" size="20" tabindex="16" />
					</td>
				</tr>
				<tr>
					<th scope="row">カードパスワード(CardPass)</th>
					<td>
						<input name="CardPass" type="text" maxlength="20" size="20" tabindex="16" />
					</td>
				</tr>
				<tr>
					<th scope="row">カード会社略称(CardName)</th>
					<td>
						<input name="CardName" type="text" maxlength="10" size="10" tabindex="17" />
					</td>
				</tr>
				<tr>
					<th scope="row">カード名義人(HolderName)</th>
					<td>
						<input name="HolderName" type="text" maxlength="50" size="30" tabindex="18" />
					</td>
				</tr>
				<tr>
					<th scope="row">通常使うカードに指定(DefaultFlag)</th>
					<td>
						<label for="def1">
							<input name="DefaultFlag" id="def1" type="radio" value="1" tabindex="19" />する
						</label>
						<label for="def0">
							<input name="DefaultFlag" id="def0" type="radio" value="0" checked="checked" tabindex="20" />しない
						</label>
					</td>
				</tr>
				<tr>
					<th scope="row">トークン(Token)</th>
					<td>
						<input name="Token" type="text" maxlength="512" size="50" tabindex="21" />
					</td>
				</tr>
				<tr>
					<th scope="row">更新区分(UpdateType)</th>
					<td>
						<input name="UpdateType" type="text" maxlength="512" size="50" tabindex="22" />
					</td>
				</tr>
				<tr>
					<th scope="row">登録済み会員ID(SrcMemberID)</th>
					<td>
						<input name="SrcMemberID" type="text" maxlength="512" size="50" tabindex="23" />
					</td>
				</tr>
				<tr>
					<th scope="row">登録済みカード登録連番(SrcCardSeq)</th>
					<td>
						<input name="SrcCardSeq" type="text" maxlength="512" size="50" tabindex="24" />
					</td>
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
					<th scope="row">カード連番(CardSeq)</th>
					<td><?php echo $output->getCardSeq() ?></td>
				</tr>
				<tr>
					<th scope="row">カード番号(CardNo)</th>
					<td><?php echo $output->getCardNo() ?></td>
				</tr>
				<tr>
					<th scope="row">仕向先カード会社コード(Forward)</th>
					<td><?php echo $output->getForward() ?></td>
				</tr>
				<tr>
					<th scope="row">国際ブランド(Brand)</th>
					<td><?php echo $output->getBrand() ?></td>
				</tr>
				<tr>
					<th scope="row">国内発行フラグ(DomesticFlag)</th>
					<td><?php echo $output->getDomesticFlag() ?></td>
				</tr>
				<tr>
					<th scope="row">イシュアコード(IssuerCode)</th>
					<td><?php echo $output->getIssuerCode() ?></td>
				</tr>
				<tr>
					<th scope="row">デビット／プリペイドフラグ(DebitPrepaidFlag)</th>
					<td><?php echo $output->getDebitPrepaidFlag() ?></td>
				</tr>
				<tr>
					<th scope="row">デビット／プリペイドカード発行会社名(DebitPrepaidIssuerName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getDebitPrepaidIssuerName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">最終仕向先(ForwardFinal)</th>
					<td><?php echo $output->getForwardFinal() ?></td>
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