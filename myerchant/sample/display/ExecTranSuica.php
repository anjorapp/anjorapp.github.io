<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[Exec]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>モバイルSuica決済実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
					<th scope="row">オーダーID(OrderID)</th>
					<td><input name="OrderID" type="text" maxlength="27" value="<?php echo isset($_GET['OrderID'])? $_GET['OrderID'] : '' ?>" tabindex="13" /></td>
				</tr>
				<tr>
					<th scope="row">商品・サービス名</th>
					<td><input name="ItemName" type="text" maxlength="40" class="text"  tabindex="14" /></td>
				</tr>
				<tr>
					<th scope="row">メールアドレス</th>
					<td><input name="MailAddress" type="text" maxlength="256" class="text" tabindex="15" /></td>
				</tr>
				<tr>
					<th scope="row">加盟店メールアドレス</th>
					<td><input name="ShopMailAdress" type="text" maxlength="256" class="text"  tabindex="16" /></td>
				</tr>
				<tr>
					<th scope="row">決済開始メール付加情報</th>
					<td><input name="SuicaAddInfo1" type="text" maxlength="256" class="text"  tabindex="17" /></td>
				</tr>
				<tr>
					<th scope="row">決済終了メール付加情報</th>
					<td><input name="SuicaAddInfo2" type="text" maxlength="256" class="text"  tabindex="18" /></td>
				</tr>
				<tr>
					<th scope="row">決済内容確認画面付加情報</th>
					<td><input name="SuicaAddInfo3" type="text" maxlength="256" class="text"  tabindex="19" /></td>
				</tr>
				<tr>
					<th scope="row">決済完了画面付加情報</th>
					<td><input name="SuicaAddInfo4" type="text" maxlength="256" class="text"  tabindex="20" /></td>
				</tr>
				<tr>
					<th scope="row">支払期限日数</th>
					<td><input name="PaymentTermDay" type="text" maxlength="3" class="num" size="5" tabindex="21" /></td>
				</tr>
				<tr>
					<th scope="row">支払期限秒</th>
					<td><input name="PaymentTermSec" type="text" maxlength="5" class="num" size="5" tabindex="22" /></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目１(ClientField1)</th>
					<td><input name="ClientField1" type="text" maxlength="100" tabindex="23" /> </td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目２(ClientField2)</th>
					<td><input name="ClientField2" type="text" maxlength="100" tabindex="24" /> </td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目３(ClientField3)</th>
					<td><input name="ClientField3" type="text" maxlength="100" tabindex="25" /> </td>
				</tr>
			</tbody>
		</table>
		<input name="submit" type="submit" value="実行"  tabindex="27" />
	</form>
	<?php 
		}else{//送信結果の表示です
	?>
		<table>
			<caption>実行結果</caption>
			<tbody>
				<tr>
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderId() ?></td>
				</tr>
				<tr>
					<th scope="row">Suica注文番号(SuicaOrderNo)</th>
					<td><?php echo $output->getSuicaOrderNo() ?></td>
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
					<th scope="row">決済日付(TranDate)</th>
					<td><?php echo $output->getTranDate() ?></td>
				</tr>
				<tr>
					<th scope="row">チェック文字列(CheckString)</th>
					<td><?php echo $output->getCheckString() ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目１(ClientField1)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField1() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目２(ClientField2)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField2() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目３(ClientField3)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField3() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
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