<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[SearchCardDetail]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>カード情報詳細カード詳細情報取得/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">カード番号(CardNo)</th>
				<td><input name="CardNo" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">サイトID(SiteID)</th>
				<td><input name="SiteID" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">サイトパスワード(SitePass)</th>
				<td><input name="SitePass" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">会員ID(MemberID)</th>
				<td><input name="MemberID" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">カード登録連番モード(SeqMode)</th>
				<td><input name="SeqMode" type="text" size="27" tabindex="18" /></td>
			</tr>
			<tr>
				<th scope="row">カード登録連番(CardSeq)</th>
				<td><input name="CardSeq" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">トークン(Token)</th>
				<td><input name="Token" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">検索タイプ(Searchtype)</th>
				<td><input name="SearchType" type="text" size="27" tabindex="21" /></td>
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
				<?php
					$cardList = $output->getCardList();
					foreach( $cardList as $card ){
				?>
				<tr>
					<th scope="row">カード番号(CardNo)</th>
					<td><?php echo $card['CardNo'] ?></td>
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
					<th scope="row">最終仕向先のカード会社コード(ForwardFinal)</th>
					<td><?php echo $card['ForwardFinal'] ?></td>
				</tr>
				<tr>
					<th scope="row">任意設定情報1(Info1)</th>
					<td><?php echo $card['Info1'] ?></td>
				</tr>
				<tr>
					<th scope="row">任意設定情報2(Info2)</th>
					<td><?php echo $card['Info2'] ?></td>
				</tr>
				<tr>
					<th scope="row">任意設定情報3(Info3)</th>
					<td><?php echo $card['Info3'] ?></td>
				</tr>
				<tr>
					<th scope="row">任意設定情報4(Info4)</th>
					<td><?php echo $card['Info4'] ?></td>
				</tr>
				<tr>
					<th scope="row">任意設定情報5(Info5)</th>
					<td><?php echo $card['Info5'] ?></td>
				</tr>

			</tbody>
				<?php } ?>
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