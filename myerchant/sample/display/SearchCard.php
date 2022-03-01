<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[SearchCard]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>カード検索/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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

	<?php }else{//送信結果の表示です?>

		<table>
			<caption>実行結果</caption>
			<tbody>
				<?php
					$cardList = $output->getCardList();
					foreach( $cardList as $card ){
				?>
				<tr>
					<td colspan="2">登録連番<?php echo $card['CardSeq'] ?></td>
				</tr>
				<tr>
					<th scope="row">デフォルトフラグ(DefaultFlag)</th>
					<td><?php echo $card['DefaultFlag'] ?></td>
				</tr>
				<tr>
					<th scope="row">カード名称(CardName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $card['CardName'] , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">カード番号(CardNo)</th>
					<td><?php echo $card['CardNo'] ?></td>
				</tr>
				<tr>
					<th scope="row">有効期限(Expire)</th>
					<td><?php echo $card['Expire'] ?></td>
				</tr>
				<tr>
					<th scope="row">カード名義人(HolderName)</th>
					<td><?php echo $card['HolderName'] ?></td>
				</tr>
				<tr>
					<th scope="row">削除フラグ(DeleteFlag)</th>
					<td><?php echo $card['DeleteFlag'] ?></td>
				</tr>
				<tr>
					<th scope="row">国際ブランド(Brand)</th>
					<td><?php echo $card['Brand'] ?></td>
				</tr>
				<tr>
					<th scope="row">国内発行フラグ(DomesticFlag)</th>
					<td><?php echo $card['DomesticFlag'] ?></td>
				</tr>
				<tr>
					<th scope="row">イシュアコード(IssuerCode)</th>
					<td><?php echo $card['IssuerCode'] ?></td>
				</tr>
				<tr>
					<th scope="row">デビット／プリペイドフラグ(DebitPrepaidFlag)</th>
					<td><?php echo $card['DebitPrepaidFlag'] ?></td>
				</tr>
				<tr>
					<th scope="row">デビット／プリペイドカード発行会社名(DebitPrepaidIssuerName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $card['DebitPrepaidIssuerName'] , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">最終仕向先(ForwardFinal)</th>
					<td><?php echo $card['ForwardFinal'] ?></td>
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