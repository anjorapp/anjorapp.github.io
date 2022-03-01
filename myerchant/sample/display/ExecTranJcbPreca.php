<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[ExecTranJcbPreca]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>JCBプリカ決済実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">取引ID(AccessID)</th>
				<td><input name="AccessID" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">取引パスワード(AccessPass)</th>
				<td><input name="AccessPass" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">カード番号(CardNo)</th>
				<td><input name="CardNo" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">認証番号(ApprovalNo)</th>
				<td><input name="ApprovalNo" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目1(ClientField1)</th>
				<td><input name="ClientField1" type="text" size="27" tabindex="18" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目2(ClientField2)</th>
				<td><input name="ClientField2" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目3(ClientField3)</th>
				<td><input name="ClientField3" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">持ち回り情報(CarryInfo)</th>
				<td><input name="CarryInfo" type="text" size="27" tabindex="21" /></td>
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
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderID() ?></td>
				</tr>
				<tr>
					<th scope="row">現状態(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">利用金額(Amount)</th>
					<td><?php echo $output->getAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">税送料(Tax)</th>
					<td><?php echo $output->getTax() ?></td>
				</tr>
				<tr>
					<th scope="row">利用前残高(BeforeBalance)</th>
					<td><?php echo $output->getBeforeBalance() ?></td>
				</tr>
				<tr>
					<th scope="row">利用後残高(AfterBalance)</th>
					<td><?php echo $output->getAfterBalance() ?></td>
				</tr>
				<tr>
					<th scope="row">カードアクティベートステータス(CardActivateStatus)</th>
					<td><?php echo $output->getCardActivateStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">カード有効期限ステータス(CardTermStatus)</th>
					<td><?php echo $output->getCardTermStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">カード有効ステータス(CardInvalidStatus)</th>
					<td><?php echo $output->getCardInvalidStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">カードWEB参照ステータス(CardWebInquiryStatus)</th>
					<td><?php echo $output->getCardWebInquiryStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">カード有効期限(CardValidLimit)</th>
					<td><?php echo $output->getCardValidLimit() ?></td>
				</tr>
				<tr>
					<th scope="row">券種コード(CardTypeCode)</th>
					<td><?php echo $output->getCardTypeCode() ?></td>
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