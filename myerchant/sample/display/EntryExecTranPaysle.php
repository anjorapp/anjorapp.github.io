<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[EntryExec]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>Paysle登録・決済実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<td><input name="ShopPass" type="text" size="27" tabindex="12" /></td>
			</tr>
			<tr>
				<th scope="row">オーダーID(OrderID)</th>
				<td><input name="OrderID" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">利用料金(Amount)</th>
				<td><input name="Amount" type="text" size="10" tabindex="14" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">税送料(Tax)</th>
				<td><input name="Tax" type="text" size="10" tabindex="15" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">決済タイプ(PaymentType)</th>
				<td><input name="PaymentType" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">取引ID(AccessID)</th>
				<td><input name="AccessID" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">取引パスワード(AccessPass)</th>
				<td><input name="AccessPass" type="text" size="27" tabindex="18" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目1(ClientField1)</th>
				<td><input name="ClientField1" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目2(ClientField2)</th>
				<td><input name="ClientField2" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目3(ClientField3)</th>
				<td><input name="ClientField3" type="text" size="27" tabindex="21" /></td>
			</tr>
			<tr>
				<th scope="row">表示開始日数(DisplayTermDay)</th>
				<td><input name="DisplayTermDay" type="text" size="27" tabindex="22" /></td>
			</tr>
			<tr>
				<th scope="row">支払期限日数(PaymentTermDay)</th>
				<td><input name="PaymentTermDay" type="text" size="27" tabindex="23" /></td>
			</tr>
			<tr>
				<th scope="row">購入者通知日数(NotifyTermDay)</th>
				<td><input name="NotifyTermDay" type="text" size="27" tabindex="24" /></td>
			</tr>
			<tr>
				<th scope="row">購入者氏名(CustomerName)</th>
				<td><input name="CustomerName" type="text" size="27" tabindex="25" /></td>
			</tr>
			<tr>
				<th scope="row">購入者携帯電話番号(CustomerTel)</th>
				<td><input name="CustomerTel" type="text" size="27" tabindex="26" /></td>
			</tr>
			<tr>
				<th scope="row">購入者管理ID(CustomerId)</th>
				<td><input name="CustomerId" type="text" size="27" tabindex="27" /></td>
			</tr>
			<tr>
				<th scope="row">請求書タイトル(InvoiceTitle)</th>
				<td><input name="InvoiceTitle" type="text" size="27" tabindex="28" /></td>
			</tr>
			<tr>
				<th scope="row">商品番号（明細）(ItemId)</th>
				<td><input name="ItemId" type="text" size="27" tabindex="29" /></td>
			</tr>
			<tr>
				<th scope="row">商品名（明細）(ItemName)</th>
				<td><input name="ItemName" type="text" size="27" tabindex="30" /></td>
			</tr>
			<tr>
				<th scope="row">複数商品(MultiItem)</th>
				<td><input name="MultiItem" type="text" size="27" tabindex="31" /></td>
			</tr>
			<tr>
				<th scope="row">数量（明細）(ItemNumbers)</th>
				<td><input name="ItemNumbers" type="text" size="10" tabindex="32" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">単価（明細）(ItemFee)</th>
				<td><input name="ItemFee" type="text" size="10" tabindex="33" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">消費税額(PaysleTax)</th>
				<td><input name="PaysleTax" type="text" size="10" tabindex="34" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">送料(PaysleShippingFee)</th>
				<td><input name="PaysleShippingFee" type="text" size="10" tabindex="35" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">機種名(DeviceName)</th>
				<td><input name="DeviceName" type="text" size="27" tabindex="36" /></td>
			</tr>
			<tr>
				<th scope="row">OSバージョン(OsVersion)</th>
				<td><input name="OsVersion" type="text" size="27" tabindex="37" /></td>
			</tr>
			<tr>
				<th scope="row">画面横幅(WinWidth)</th>
				<td><input name="WinWidth" type="text" size="10" tabindex="38" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">画面縦幅(WinHeight)</th>
				<td><input name="WinHeight" type="text" size="10" tabindex="39" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">画面横方向dpi(Xdpi)</th>
				<td><input name="Xdpi" type="text" size="10" tabindex="40" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">画面縦方向dpi(Ydpi)</th>
				<td><input name="Ydpi" type="text" size="10" tabindex="41" class="num" /></td>
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
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderID() ?></td>
				</tr>
				<tr>
					<th scope="row">現状態(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">決済日付(TranDate)</th>
					<td><?php echo $output->getTranDate() ?></td>
				</tr>
				<tr>
					<th scope="row">表示開始日(PaysleDisplayTerm)</th>
					<td><?php echo $output->getPaysleDisplayTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">支払期限日(PayslePaymentTerm)</th>
					<td><?php echo $output->getPayslePaymentTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">購入者通知日(PaysleNotifyTerm)</th>
					<td><?php echo $output->getPaysleNotifyTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">MD5ハッシュ(CheckString)</th>
					<td><?php echo $output->getCheckString() ?></td>
				</tr>
				<tr>
					<th scope="row">注文管理ID(PaysleOrderSerial)</th>
					<td><?php echo $output->getPaysleOrderSerial() ?></td>
				</tr>
				<tr>
					<th scope="row">バーコードイメージ横幅(PaysleBarcodeWidth)</th>
					<td><?php echo $output->getPaysleBarcodeWidth() ?></td>
				</tr>
				<tr>
					<th scope="row">バーコードイメージ縦幅(PaysleBarcodeHeight)</th>
					<td><?php echo $output->getPaysleBarcodeHeight() ?></td>
				</tr>
				<tr>
					<th scope="row">バーコードイメージ形式(PaysleBarcodeFormat)</th>
					<td><?php echo $output->getPaysleBarcodeFormat() ?></td>
				</tr>
				<tr>
					<th scope="row">バーコードデータ(PaysleBarcode)</th>
					<td><?php echo $output->getPaysleBarcode() ?></td>
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