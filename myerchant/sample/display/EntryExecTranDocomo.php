<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[EntryExec]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>ドコモ払い登録・決済実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">ショップID(ShopID)</th>
				<td><input name="ShopID" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">ショップパスワード(ShopPass)</th>
				<td><input name="ShopPass" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">処理区分(JobCd)</th>
				<td><input name="JobCd" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">利用金額(Amount)</th>
				<td><input name="Amount" type="text" size="10" tabindex="11" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">税送料(Tax)</th>
				<td><input name="Tax" type="text" size="10" tabindex="11" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">決済タイプ(PaymentType)</th>
				<td><input name="PaymentType" type="text" size="10" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">取引ID(AccessID)</th>
				<td><input name="AccessID" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">取引パスワード(AccessPass)</th>
				<td><input name="AccessPass" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目1(ClientField1)</th>
				<td><input name="ClientField1" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目2(ClientField2)</th>
				<td><input name="ClientField2" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目3(ClientField3)</th>
				<td><input name="ClientField3" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">ドコモ表示項目1(DocomoDisp1)</th>
				<td><input name="DocomoDisp1" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">ドコモ表示項目2(DocomoDisp2)</th>
				<td><input name="DocomoDisp2" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">決済結果戻しURL(RetURL)</th>
				<td><input name="RetURL" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">支払開始期限秒(PaymentTermSec)</th>
				<td><input name="PaymentTermSec" type="text" size="10" tabindex="11" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">利用店舗名(DispShopName)</th>
				<td><input name="DispShopName" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">連絡先電話番号(DispPhoneNumber)</th>
				<td><input name="DispPhoneNumber" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">メールアドレス(DispMailAddress)</th>
				<td><input name="DispMailAddress" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">問合せURL(DispShopUrl)</th>
				<td><input name="DispShopUrl" type="text" size="27" tabindex="11" /></td>
			</tr>
			<tr>
				<th scope="row">ドコモ承諾番号(DocomoAcceptCode)</th>
				<td><input name="DocomoAcceptCode" type="text" size="27" tabindex="11" /></td>
			</tr>
			</tbody>
		</table>
		<input name="submit" type="submit" value="実行"  tabindex="52" />
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
					<th scope="row">決済トークン(Token)</th>
					<td><?php echo $output->getToken() ?></td>
				</tr>
				<tr>
					<th scope="row">支払手続き開始IFのURL(StartURL)</th>
					<td><?php echo $output->getStartURL() ?></td>
				</tr>
				<tr>
					<th scope="row">支払開始期限日時(StartLimitDate)</th>
					<td><?php echo $output->getStartLimitDate() ?></td>
				</tr>
				<tr>
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderID() ?></td>
				</tr>
				<tr>
					<th scope="row">現状態(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">処理日時(TranDate)</th>
					<td><?php echo $output->getTranDate() ?></td>
				</tr>
				<tr>
					<th scope="row">ドコモ決済番号(DocomoSettlementCode)</th>
					<td><?php echo $output->getDocomoSettlementCode() ?></td>
				</tr>
				<tr>
					<th scope="row">改ざんチェック文字列(CheckString)</th>
					<td><?php echo $output->getCheckString() ?></td>
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