<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[ChargePreca]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>PGプリカチャージ/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
			<tr>
				<th scope="row">プリカ番号(PrecaNo)</th>
				<td><input name="PrecaNo" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">プリカ認証番号(PrecaPass)</th>
				<td><input name="PrecaPass" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">金額(Amount)</th>
				<td><input name="Amount" type="text" size="10" tabindex="16" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">チャージタイプ(ChargeType)</th>
				<td><input name="ChargeType" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目(ClientField)</th>
				<td><input name="ClientField" type="text" size="27" tabindex="18" /></td>
			</tr>
			<tr>
				<th scope="row">本人認証サービス利用フラグ(TdFlag)</th>
				<td><input name="TdFlag" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">3DS表示店舗名(TdTenantName)</th>
				<td><input name="TdTenantName" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">チャージ結果受信URL(RetURL)</th>
				<td><input name="RetURL" type="text" size="27" tabindex="21" /></td>
			</tr>
			<tr>
				<th scope="row">本人認証手続き開始期限(AuthProcessTermSec)</th>
				<td><input name="AuthProcessTermSec" type="text" size="10" tabindex="22" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">カード番号(CardNo)</th>
				<td><input name="CardNo" type="text" size="27" tabindex="23" /></td>
			</tr>
			<tr>
				<th scope="row">有効期限(Expire)</th>
				<td><input name="Expire" type="text" size="27" tabindex="24" /></td>
			</tr>
			<tr>
				<th scope="row">セキュリティコード(SecurityCode)</th>
				<td><input name="SecurityCode" type="text" size="27" tabindex="25" /></td>
			</tr>
			<tr>
				<th scope="row">カード情報トークン(Token)</th>
				<td><input name="Token" type="text" size="27" tabindex="26" /></td>
			</tr>
			<tr>
				<th scope="row">サイトID(SiteID)</th>
				<td><input name="SiteID" type="text" size="27" tabindex="27" /></td>
			</tr>
			<tr>
				<th scope="row">サイトパスワード(SitePass)</th>
				<td><input name="SitePass" type="text" size="27" tabindex="28" /></td>
			</tr>
			<tr>
				<th scope="row">会員ID(MemberID)</th>
				<td><input name="MemberID" type="text" size="27" tabindex="29" /></td>
			</tr>
			<tr>
				<th scope="row">カード登録連番モード(SeqMode)</th>
				<td><input name="SeqMode" type="text" size="27" tabindex="30" /></td>
			</tr>
			<tr>
				<th scope="row">カード登録連番(CardSeq)</th>
				<td><input name="CardSeq" type="text" size="27" tabindex="31" /></td>
			</tr>
			<tr>
				<th scope="row">支払先コンビニコード(CvsCode)</th>
				<td><input name="CvsCode" type="text" size="27" tabindex="32" /></td>
			</tr>
			<tr>
				<th scope="row">氏名(CustomerName)</th>
				<td><input name="CustomerName" type="text" size="27" tabindex="33" /></td>
			</tr>
			<tr>
				<th scope="row">フリガナ(CustomerKana)</th>
				<td><input name="CustomerKana" type="text" size="27" tabindex="34" /></td>
			</tr>
			<tr>
				<th scope="row">電話番号(TelNo)</th>
				<td><input name="TelNo" type="text" size="27" tabindex="35" /></td>
			</tr>
			<tr>
				<th scope="row">支払期限日数(PaymentTermDay)</th>
				<td><input name="PaymentTermDay" type="text" size="27" tabindex="36" /></td>
			</tr>
			<tr>
				<th scope="row">お問合せ先(ReceiptsDisp11)</th>
				<td><input name="ReceiptsDisp11" type="text" size="27" tabindex="37" /></td>
			</tr>
			<tr>
				<th scope="row">お問合せ先電話番号(ReceiptsDisp12)</th>
				<td><input name="ReceiptsDisp12" type="text" size="27" tabindex="38" /></td>
			</tr>
			<tr>
				<th scope="row">お問合せ先受付時間(ReceiptsDisp13)</th>
				<td><input name="ReceiptsDisp13" type="text" size="27" tabindex="39" /></td>
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
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderID() ?></td>
				</tr>
				<tr>
					<th scope="row">ステータス(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">決済日付(TranDate)</th>
					<td><?php echo $output->getTranDate() ?></td>
				</tr>
				<tr>
					<th scope="row">チェックストリング(CheckString)</th>
					<td><?php echo $output->getCheckString() ?></td>
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
					<th scope="row">ACS呼出判定(ACS)</th>
					<td><?php echo $output->getACS() ?></td>
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
					<th scope="row">本人認証手続きURL(AuthProcessingURL)</th>
					<td><?php echo $output->getAuthProcessingURL() ?></td>
				</tr>
				<tr>
					<th scope="row">本人認証手続き呼出パラメータ(AuthProcessingHash)</th>
					<td><?php echo $output->getAuthProcessingHash() ?></td>
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
					<th scope="row">受付番号(ReceiptNo)</th>
					<td><?php echo $output->getReceiptNo() ?></td>
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
					<th scope="row">金融機関選択画面URL(PaymentURL)</th>
					<td><?php echo $output->getPaymentURL() ?></td>
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