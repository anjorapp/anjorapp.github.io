<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[SearchChargeStatus]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>PGプリカチャージ状態照会/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" size="27" tabindex="13" /></td>
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
					<th scope="row">取引ID(AccessID)</th>
					<td><?php echo $output->getAccessID() ?></td>
				</tr>
				<tr>
					<th scope="row">取引パスワード(AccessPass)</th>
					<td><?php echo $output->getAccessPass() ?></td>
				</tr>
				<tr>
					<th scope="row">オーダーID (OrderID)</th>
					<td><?php echo $output->getOrderID() ?></td>
				</tr>
				<tr>
					<th scope="row">ステータス(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">金額(Amount)</th>
					<td><?php echo $output->getAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">決済日付(TranDate)</th>
					<td><?php echo $output->getTranDate() ?></td>
				</tr>
				<tr>
					<th scope="row">プリカ番号(PrecaNo)</th>
					<td><?php echo $output->getPrecaNo() ?></td>
				</tr>
				<tr>
					<th scope="row">プリカ履歴連番(PrecaSeq)</th>
					<td><?php echo $output->getPrecaSeq() ?></td>
				</tr>
				<tr>
					<th scope="row">バリュー有効期限(ExpireDate)</th>
					<td><?php echo $output->getExpireDate() ?></td>
				</tr>
				<tr>
					<th scope="row">チャージタイプ(ChargeType)</th>
					<td><?php echo $output->getChargeType() ?></td>
				</tr>
				<tr>
					<th scope="row">仕向先コード(Forward)</th>
					<td><?php echo $output->getForward() ?></td>
				</tr>
				<tr>
					<th scope="row">承認番号(Approve)</th>
					<td><?php echo $output->getApprove() ?></td>
				</tr>
				<tr>
					<th scope="row">支払先コンビニコード(CvsCode)</th>
					<td><?php echo $output->getCvsCode() ?></td>
				</tr>
				<tr>
					<th scope="row">確認番号(CvsConfNo)</th>
					<td><?php echo $output->getCvsConfNo() ?></td>
				</tr>
				<tr>
					<th scope="row">受付番号(CvsReceiptNo)</th>
					<td><?php echo $output->getCvsReceiptNo() ?></td>
				</tr>
				<tr>
					<th scope="row">支払期限日時(PaymentTerm)</th>
					<td><?php echo $output->getPaymentTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">払込票URL(ReceiptURL)</th>
					<td><?php echo $output->getReceiptURL() ?></td>
				</tr>
				<tr>
					<th scope="row">お客様番号(CustID)</th>
					<td><?php echo $output->getCustID() ?></td>
				</tr>
				<tr>
					<th scope="row">収納機関番号(BkCode)</th>
					<td><?php echo $output->getBkCode() ?></td>
				</tr>
				<tr>
					<th scope="row">確認番号(ConfNo)</th>
					<td><?php echo $output->getConfNo() ?></td>
				</tr>
				<tr>
					<th scope="row">金融機関選択画面URL(PayeasyPaymentURL)</th>
					<td><?php echo $output->getPayeasyPaymentURL() ?></td>
				</tr>
				<tr>
					<th scope="row">入金確定日時(FinishDate)</th>
					<td><?php echo $output->getFinishDate() ?></td>
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