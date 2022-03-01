<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />
	<title>[SavePaidBuyer]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>Paid取引先登録/モジュールタイプ(PHP) 呼び出しサンプル</h1>
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
				<th scope="row">Paid取引先ID(PaidBuyerID)</th>
				<td><input name="PaidBuyerID" type="text" size="27" tabindex="13" /></td>
			</tr>
			<tr>
				<th scope="row">会社名(CompanyName)</th>
				<td><input name="CompanyName" type="text" size="27" tabindex="14" /></td>
			</tr>
			<tr>
				<th scope="row">会社名カナ(CompanyNameKana)</th>
				<td><input name="CompanyNameKana" type="text" size="27" tabindex="15" /></td>
			</tr>
			<tr>
				<th scope="row">代表者姓(RepresentativeSei)</th>
				<td><input name="RepresentativeSei" type="text" size="27" tabindex="16" /></td>
			</tr>
			<tr>
				<th scope="row">代表者名(RepresentativeMei)</th>
				<td><input name="RepresentativeMei" type="text" size="27" tabindex="17" /></td>
			</tr>
			<tr>
				<th scope="row">代表者姓カナ(RepresentativeSeiKana)</th>
				<td><input name="RepresentativeSeiKana" type="text" size="27" tabindex="18" /></td>
			</tr>
			<tr>
				<th scope="row">代表社名カナ(RepresentativeMeiKana)</th>
				<td><input name="RepresentativeMeiKana" type="text" size="27" tabindex="19" /></td>
			</tr>
			<tr>
				<th scope="row">郵便番号(ZipCode)</th>
				<td><input name="ZipCode" type="text" size="27" tabindex="20" /></td>
			</tr>
			<tr>
				<th scope="row">都道府県(Prefecture)</th>
				<td><input name="Prefecture" type="text" size="27" tabindex="21" /></td>
			</tr>
			<tr>
				<th scope="row">市区町村(Address1)</th>
				<td><input name="Address1" type="text" size="27" tabindex="22" /></td>
			</tr>
			<tr>
				<th scope="row">町名・番地(Address2)</th>
				<td><input name="Address2" type="text" size="27" tabindex="23" /></td>
			</tr>
			<tr>
				<th scope="row">ビル・マンション名(Address3)</th>
				<td><input name="Address3" type="text" size="27" tabindex="24" /></td>
			</tr>
			<tr>
				<th scope="row">部署名 / 支店名(AuxName)</th>
				<td><input name="AuxName" type="text" size="27" tabindex="25" /></td>
			</tr>
			<tr>
				<th scope="row">担当者姓(ClerkSei)</th>
				<td><input name="ClerkSei" type="text" size="27" tabindex="26" /></td>
			</tr>
			<tr>
				<th scope="row">担当者名(ClerkMei)</th>
				<td><input name="ClerkMei" type="text" size="27" tabindex="27" /></td>
			</tr>
			<tr>
				<th scope="row">担当者姓カナ(ClerkSeiKana)</th>
				<td><input name="ClerkSeiKana" type="text" size="27" tabindex="28" /></td>
			</tr>
			<tr>
				<th scope="row">担当者名カナ(ClerkMeiKana)</th>
				<td><input name="ClerkMeiKana" type="text" size="27" tabindex="29" /></td>
			</tr>
			<tr>
				<th scope="row">電話番号(Tel)</th>
				<td><input name="Tel" type="text" size="27" tabindex="30" /></td>
			</tr>
			<tr>
				<th scope="row">FAX番号(Fax)</th>
				<td><input name="Fax" type="text" size="27" tabindex="31" /></td>
			</tr>
			<tr>
				<th scope="row">携帯電話番号(MobileTel)</th>
				<td><input name="MobileTel" type="text" size="27" tabindex="32" /></td>
			</tr>
			<tr>
				<th scope="row">メールアドレス(Email)</th>
				<td><input name="Email" type="text" size="27" tabindex="33" /></td>
			</tr>
			<tr>
				<th scope="row">設立年月（年）(EstablishedYear)</th>
				<td><input name="EstablishedYear" type="text" size="10" tabindex="34" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">設立年月（月）(EstablishedMonth)</th>
				<td><input name="EstablishedMonth" type="text" size="10" tabindex="35" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">年商(AnnualSales)</th>
				<td><input name="AnnualSales" type="text" size="10" tabindex="36" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">業種番号(BusinessDetailType)</th>
				<td><input name="BusinessDetailType" type="text" size="10" tabindex="37" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">取り扱いブランド/商品(DealingBrand)</th>
				<td><input name="DealingBrand" type="text" size="27" tabindex="38" /></td>
			</tr>
			<tr>
				<th scope="row">店舗数(ShopCount)</th>
				<td><input name="ShopCount" type="text" size="10" tabindex="39" class="num" /></td>
			</tr>
			<tr>
				<th scope="row">URL1(Url1)</th>
				<td><input name="Url1" type="text" size="27" tabindex="40" /></td>
			</tr>
			<tr>
				<th scope="row">URL2(Url2)</th>
				<td><input name="Url2" type="text" size="27" tabindex="41" /></td>
			</tr>
			<tr>
				<th scope="row">URL3(Url3)</th>
				<td><input name="Url3" type="text" size="27" tabindex="42" /></td>
			</tr>
			<tr>
				<th scope="row">PR(Profile)</th>
				<td><input name="Profile" type="text" size="27" tabindex="43" /></td>
			</tr>
			<tr>
				<th scope="row">締め日(ClosingDay)</th>
				<td><input name="ClosingDay" type="text" size="27" tabindex="44" /></td>
			</tr>
			<tr>
				<th scope="row">お支払い方法(PaymentMethod)</th>
				<td><input name="PaymentMethod" type="text" size="27" tabindex="45" /></td>
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
					<th scope="row">Paid取引先ID(PaidBuyerID)</th>
					<td><?php echo $output->getPaidBuyerID() ?></td>
				</tr>
				<tr>
					<th scope="row">Paid番号(PaidID)</th>
					<td><?php echo $output->getPaidID() ?></td>
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