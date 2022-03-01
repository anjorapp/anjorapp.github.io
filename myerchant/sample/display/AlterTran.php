<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[Alter]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>取引変更/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	<?php
		 if( !isset ($_POST['submit']) ){//初期表示です
	?>
	<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
		<table>
			<tbody>
				<tr>
					<th scope="row">取引ID(AccessID)</th>
					<td><input name="AccessID" type="text" value="<?php echo isset($_GET['AccessID'])? $_GET['AccessID'] : '' ?>" tabindex="11" /></td>
				</tr>
				<tr>
					<th scope="row">取引パスワード(AccessPass)</th>
					<td><input name="AccessPass" type="text" value="<?php echo isset($_GET['AccessPass'])? $_GET['AccessPass'] : '' ?>" tabindex="12" /></td>
				</tr>
				<tr>
					<th scope="row">処理区分(JobCd)</th>
					<td>
						<select name="JobCd" tabindex="14">
							<option value="AUTH">AUTH:仮売上</option>
							<option value="CAPTURE">CAPTURE:即時売上</option>
							<option value="SALES">SALES:実売上</option>
							<option value="VOID">VOID:取消</option>
							<option value="RETURN">RETURN:返品</option>
							<option value="RETURNX">RETURNX:月跨返品</option>
						</select>
					</td>
				</tr>
			</tbody>
		</table>

		<table>
			<caption>処理区分が仮売上または即時売上の場合、以下の項目が必要</caption>
			<tbody>
				<tr>
					<th scope="row">利用金額(Amount)</th>
					<td><input name="Amount" type="text" maxlength="8" size="10" tabindex="16" class="num" /></td>
				</tr>
				<tr>
					<th scope="row">税送料(Tax)</th>
					<td><input name="Tax" type="text" maxlength="7" size="10" tabindex="17" class="num" /></td>
				</tr>

				<tr>
					<th scope="row">支払方法(PayMethod)</th>
					<td>
						<select name="PayMethod" tabindex="18">
							<option value="1">1:一括</option>
							<option value="2">2:分割</option>
							<option value="3">3:ボーナス一括</option>
							<option value="4">4:ボーナス分割</option>
							<option value="5">5:リボ</option>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row">支払回数(PayTimes)</th>
					<td><input name="PayTimes" type="text" maxlength="3" class="num" size="5" tabindex="19" /></td>
				</tr>
			</tbody>
		</table>

		<table>
			<caption>
			取り消されている決済に対して再オーソリを行う場合（処理区分が”CAPTURE”のとき有効）、<br/>
			仮売上の決済に対して実売上を行う場合<br/>
			に以下の項目が指定できます。
			</caption>
			<tbody>
				<tr>
					<th scope="row">利用日(DisplayDate)</th>
					<td><input name="DisplayDate" type="text" maxlength="6" size="10" tabindex="20" class="num" /></td>
				</tr>
			</tbody>
		</table>

		<input name="submit" type="submit" value="実行"  tabindex="24" />
	</form>
	<?php
		}else{//送信結果の表示です
	?>
		<table>
			<caption>実行結果</caption>
			<tbody>
				<tr>
					<th scope="row">取引ID(AccessID)</th>
					<td><?php echo $output->getAccessID() ?></td>
				</tr>
				<tr>
					<th scope="row">取引パスワード(AccessPass)</th>
					<td><?php echo $output->getAccessPass() ?></td>
				</tr>
				<tr>
					<th scope="row">仕向先カード会社(Forward)</th>
					<td><?php echo $output->getForward() ?></td>
				</tr>
				<tr>
					<th scope="row">承認番号(Approve)</th>
					<td><?php echo $output->getApprovalNo() ?></td>
				</tr>
				<tr>
					<th scope="row">トランザクションID(TranID)</th>
					<td><?php echo $output->getTranId() ?></td>
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