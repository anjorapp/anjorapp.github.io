<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[SearchPrecaHistory]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>PGプリカPGプリカ履歴照会/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">プリカ番号(PrecaNo)</th>
				<td><input name="PrecaNo" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">プリカ認証番号(PrecaPass)</th>
				<td><input name="PrecaPass" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">検索タイプ(SearchType)</th>
				<td><input name="SearchType" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">日付(Day)</th>
				<td><input name="Day" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">月(Month)</th>
				<td><input name="Month" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">プリカ履歴連番(PrecaSeq)</th>
				<td><input name="PrecaSeq" type="text" size="10" tabindex="18" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">処理タイプ(ProcessType)</th>
				<td><input name="ProcessType" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">開始位置(Offset)</th>
				<td><input name="Offset" type="text" size="10" tabindex="20" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">最大検索数(Limit)</th>
				<td><input name="Limit" type="text" size="10" tabindex="21" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目返却フラグ(ClientFieldFlag)</th>
				<td><input name="ClientFieldFlag" type="text" size="27" tabindex="22" /></td>
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
					<th scope="row">プリカ番号(PrecaNo)</th>
					<td><?php echo $output->getPrecaNo() ?></td>
				</tr>
				<tr>
					<th scope="row">合計バリュー(TotalValue)</th>
					<td><?php echo $output->getTotalValue() ?></td>
				</tr>
				<tr>
					<th scope="row">検索結果件数(Cnt)</th>
					<td><?php echo $output->getCnt() ?></td>
				</tr>

				<?php
					$searchPrecaHistoryList = $output->getSearchPrecaHistoryList();
					foreach( $searchPrecaHistoryList as $history ){
				?>
					<tr>
						<td colspan="2">プリカ履歴連番<?php echo $history['PrecaSeq'] ?></td>
					</tr>
					<tr>
						<th scope="row">処理日時(ProcessDate)</th>
						<td><?php echo $history['ProcessDate'] ?></td>
					</tr>
					<tr>
						<th scope="row">処理タイプ(ProcessType)</th>
						<td><?php echo $history['ProcessType'] ?></td>
					</tr>
					<tr>
						<th scope="row">バリュー(Value)</th>
						<td><?php echo $history['Value'] ?></td>
					</tr>
					<tr>
						<th scope="row">有効バリュー(ValidValue)</th>
						<td><?php echo $history['ValidValue'] ?></td>
					</tr>
					<tr>
						<th scope="row">バリュー有効期限(ExpireDate)</th>
						<td><?php echo $history['ExpireDate'] ?></td>
					</tr>
					<tr>
						<th scope="row">処理対象プリカ履歴連番(TargetPrecaSeq)</th>
						<td><?php echo $history['TargetPrecaSeq'] ?></td>
					</tr>
					<tr>
						<th scope="row">加盟店自由項目(ClientField)</th>
						<td><?php echo $history['ClientField'] ?></td>
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