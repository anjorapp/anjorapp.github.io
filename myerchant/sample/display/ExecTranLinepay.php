<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[ExecTranLinepay]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>LINE Pay決済実行/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">サイトID(SiteID)</th>
				<td><input name="SiteID" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">サイトパスワード(SitePass)</th>
				<td><input name="SitePass" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">会員ID(MemberID)</th>
				<td><input name="MemberID" type="text" size="27" tabindex="18" /></td>
			</tr>
			<tr>
				<th scope="row">会員名(MemberName)</th>
				<td><input name="MemberName" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">会員登録フラグ(CreateMember)</th>
				<td><input name="CreateMember" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目1(ClientField1)</th>
				<td><input name="ClientField1" type="text" size="27" tabindex="21" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目2(ClientField2)</th>
				<td><input name="ClientField2" type="text" size="27" tabindex="22" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目3(ClientField3)</th>
				<td><input name="ClientField3" type="text" size="27" tabindex="23" /></td>
			</tr>
			<tr>
				<th scope="row">加盟店自由項目返却フラグ(ClientFieldFlag)</th>
				<td><input name="ClientFieldFlag" type="text" size="27" tabindex="24" /></td>
			</tr>
			<tr>
				<th scope="row">決済結果戻しURL(RetURL)</th>
				<td><input name="RetURL" type="text" size="27" tabindex="25" /></td>
			</tr>
			<tr>
				<th scope="row">処理NG時URL(ErrorRcvURL)</th>
				<td><input name="ErrorRcvURL" type="text" size="27" tabindex="26" /></td>
			</tr>
			<tr>
				<th scope="row">商品画像URL(ProductImageUrl)</th>
				<td><input name="ProductImageUrl" type="text" size="27" tabindex="27" /></td>
			</tr>
			<tr>
				<th scope="row">LineメンバーID(Mid)</th>
				<td><input name="Mid" type="text" size="27" tabindex="28" /></td>
			</tr>
			<tr>
				<th scope="row">受取人連絡先(DeliveryPlacePhone)</th>
				<td><input name="DeliveryPlacePhone" type="text" size="27" tabindex="29" /></td>
			</tr>
			<tr>
				<th scope="row">決済待機画面用言語(LangCode)</th>
				<td><input name="LangCode" type="text" size="27" tabindex="30" /></td>
			</tr>
			<tr>
				<th scope="row">商品名(ProductName)</th>
				<td><input name="ProductName" type="text" size="27" tabindex="31" /></td>
			</tr>
			<tr>
				<th scope="row">phishing防止用情報(PackageName)(PackageName)</th>
				<td><input name="PackageName" type="text" size="27" tabindex="32" /></td>
			</tr>
			<tr>
				<th scope="row">端末情報(UserInfo)</th>
				<td><input name="UserInfo" type="text" size="27" tabindex="33" /></td>
			</tr>
			<tr>
				<th scope="row">戻り先URLスキーム(ReturnUrl)</th>
				<td><input name="ReturnUrl" type="text" size="27" tabindex="34" /></td>
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
					<th scope="row">Startフラグ(Start)</th>
					<td><?php echo $output->getStart() ?></td>
				</tr>
				<tr>
					<th scope="row">取引ID(AccessID)</th>
					<td><?php echo $output->getAccessID() ?></td>
				</tr>
				<tr>
					<th scope="row">トークン(Token)</th>
					<td><?php echo $output->getToken() ?></td>
				</tr>
				<tr>
					<th scope="row">支払手続き開始IFのURL(StartURL)</th>
					<td><?php echo $output->getStartURL() ?></td>
				</tr>
				<tr>
					<th scope="row">現状態(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">支払方法(PayMethod)</th>
					<td><?php echo $output->getPayMethod() ?></td>
				</tr>
				<tr>
					<th scope="row">MD5ハッシュ(CheckString)</th>
					<td><?php echo $output->getCheckString() ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目1(ClientField1)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField1() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目2(ClientField2)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField2() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">加盟店自由項目3(ClientField3)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getClientField3() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
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