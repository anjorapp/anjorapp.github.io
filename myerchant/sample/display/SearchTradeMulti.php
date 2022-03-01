<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[SearchTrade]-PGマルチペイメントサービス−モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>取引照会/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">

	<?php if( !isset ($_POST['submit']) ){//初期表示です ?>

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
						<td><input name="OrderID" type="text" maxlength="27" tabindex="13" /></td>
					</tr>
					<tr>
					<th scope="row">決済方法(PayType)</th>
					<td>
						<select name="PayType" tabindex="14">
							<option value="0">0：クレジット </option>
							<option value="1">1：モバイルSuica </option>
							<option value="2">2：モバイルEdy </option>
							<option value="3">3：コンビニ </option>
							<option value="4">4：Pay-easy</option>
							<option value="5">5：Paypal</option>
							<option value="7">7：Webmoney</option>
							<option value="8">8：auかんたん決済</option>
							<option value="9">9：ドコモ払い</option>
							<option value="10">10：ドコモ継続決済</option>
							<option value="11">11：ソフトバンクまとめて支払い(Ｂ)</option>
							<option value="12">12：じぶん銀行</option>
							<option value="13">13：au継続</option>
							<option value="14">14：JCBプリカ</option>
							<option value="16">16：NET CASH</option>
							<option value="18">18：楽天ID</option>
							<option value="19">19：多通貨クレジットカード</option>
							<option value="20">20：LINE Pay</option>
							<option value="21">21：ネット銀聯</option>
							<option value="22">22：ソフトバンク継続</option>
							<option value="23">23：銀行振込(バーチャル口座)</option>
							<option value="24">24：リクルートかんたん支払い</option>
							<option value="25">25：リクルートかんたん支払い継続課金</option>
							<option value="27">27：ブランドトークン決済</option>
							<option value="28">28：口振セレクト</option>
							<option value="29">29：Paid</option>
							<option value="31">31：ドコモ払い_随時決済</option>
							<option value="33">33：auかんたん決済支払い（利用承諾）</option>
							<option value="34">34：ソフトバンクまとめて支払い(Ｂ)(利用承諾)</option>
							<option value="35">35：Paysle</option>
							<option value="36">36：GANB</option>

						</select>
					</td>
				</tr>
				</tbody>
			</table>
			<input name="submit" type="submit" value="実行" tabindex="50" />
		</form>

	<?php }else{//送信結果の表示です ?>

		<table>
			<caption>実行結果</caption>
			<tfoot>

			</tfoot>
			<tbody>
				<tr>
					<th scope="row">オーダーID(OrderID)</th>
					<td><?php echo $output->getOrderId() ?></td>
				</tr>
				<tr>
					<th scope="row">ステータス(Status)</th>
					<td><?php echo $output->getStatus() ?></td>
				</tr>
				<tr>
					<th scope="row">処理日時(ProcessDate)</th>
					<td><?php echo $output->getProcessDate() ?></td>
				</tr>
				<tr>
					<th scope="row">処理区分(JobCd)</th>
					<td><?php echo $output->getJobCd() ?></td>
				</tr>
				<tr>
					<th scope="row">取引ID(AccessID)</th>
					<td><?php echo $output->getAccessId() ?></td>
				</tr>
				<tr>
					<th scope="row">取引Pass(AccessPass)</th>
					<td><?php echo $output->getAccessPass() ?></td>
				</tr>
				<tr>
					<th scope="row">商品コード(ItemCode)</th>
					<td><?php echo $output->getItemCode() ?></td>
				</tr>
				<tr>
					<th scope="row">通貨コード(Currency)</th>
					<td><?php echo $output->getCurrency() ?></td>
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
					<th scope="row">利用金額BigDecimal(AmountBigDecimal)</th>
					<td><?php echo $output->getAmountBigDecimal() ?></td>
				</tr>
				<tr>
					<th scope="row">税送料BigDecimal(TaxBigDecimal)</th>
					<td><?php echo $output->getTaxBigDecimal() ?></td>
				</tr>
				<tr>
					<th scope="row">サイトID(SiteID)</th>
					<td><?php echo $output->getSiteId() ?></td>
				</tr>
				<tr>
					<th scope="row">会員ID(MemberID)</th>
					<td><?php echo $output->getMemberId() ?></td>
				</tr>
				<tr>
					<th scope="row">カード番号(CardNo)</th>
					<td><?php echo $output->getCardNo() ?></td>
				</tr>
				<tr>
					<th scope="row">有効期限(Expire)</th>
					<td><?php echo $output->getExpire() ?></td>
				</tr>
				<tr>
					<th scope="row">支払方法(Method)</th>
					<td><?php echo $output->getMethod() ?></td>
				</tr>
				<tr>
					<th scope="row">支払回数(PayTimes)</th>
					<td><?php echo $output->getPayTimes() ?></td>
				</tr>
				<tr>
					<th scope="row">仕向先カード会社(Forward)</th>
					<td><?php echo $output->getForward() ?></td>
				</tr>
				<tr>
					<th scope="row">トランザクションID(TranID)</th>
					<td><?php echo $output->getTranId() ?></td>
				</tr>
				<tr>
					<th scope="row">承認番号(Approve)</th>
					<td><?php echo $output->getApprovalNo() ?></td>
				</tr>
				<tr>
					<th scope="row">決済方法(PayType)</th>
					<td><?php echo $output->getPayType() ?></td>
				</tr>
				<tr>
					<th scope="row">支払先コンビニ(CvsCode)</th>
					<td><?php echo $output->getCvsCode() ?></td>
				</tr>
				<tr>
					<th scope="row">コンビニ確認番号(CvsConfNo)</th>
					<td><?php echo $output->getCvsConfNo() ?></td>
				</tr>
				<tr>
					<th scope="row">コンビニ受付番号(CvsReceiptNo)</th>
					<td><?php echo $output->getCvsReceiptNo() ?></td>
				</tr>
				<tr>
					<th scope="row">Edy受付番号(EdyReceiptNo)</th>
					<td><?php echo $output->getEdyReceiptNo() ?></td>
				</tr>
				<tr>
					<th scope="row">Edy注文番号(EdyOrderNo)</th>
					<td><?php echo $output->getEdyOrderNo() ?></td>
				</tr>
				<tr>
					<th scope="row">Suica受付番号(SuicaReceiptNo)</th>
					<td><?php echo $output->getSuicaReceiptNO() ?></td>
				</tr>
				<tr>
					<th scope="row">Suica注文番号(SuicaOrderNo)</th>
					<td><?php echo $output->getSuicaOrderNo() ?></td>
				</tr>
				<tr>
					<th scope="row">Pay-easyお客様番号(CustId)</th>
					<td><?php echo $output->getCustId() ?></td>
				</tr>
				<tr>
					<th scope="row">Pay-easy収納機関番号(BkCode)</th>
					<td><?php echo $output->getBkCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Pay-easy確認番号(ConfNo)</th>
					<td><?php echo $output->getConfNo() ?></td>
				</tr>
				<tr>
					<th scope="row">Pay-easy暗号化決済番号(EncryptReceiptNo)</th>
					<td><?php echo $output->getEncryptReceiptNo() ?></td>
				</tr>
				<tr>
					<th scope="row">支払期限日時(PaymentTerm)</th>
					<td><?php echo $output->getPaymentTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">Payeasy 金融機関選択画面URL(PayeasyPaymentURL)</th>
					<td><?php echo $output->getPayeasyPaymentURL() ?></td>
				</tr>
				<tr>
					<th scope="row">WebMoney管理番号(WebMoneyManagementNo)</th>
					<td><?php echo $output->getWebmoneyManagementNo() ?></td>
				</tr>
				<tr>
					<th scope="row">WebMoney決済コード(WebMoneySettleCode)</th>
					<td><?php echo $output->getWebmoneySettleCode() ?></td>
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
				<tr>
					<th scope="row">auかんたん決済決済情報番号(AuPayInfoNo)</th>
					<td><?php echo $output->getAuPayInfoNo() ?></td>
				</tr>
				<tr>
					<th scope="row">auかんたん決済支払方法(AuPayMethod)</th>
					<td><?php echo $output->getAuPayMethod() ?></td>
				</tr>
				<tr>
					<th scope="row">auかんたん決済キャンセル金額(AuCancelAmount)</th>
					<td><?php echo $output->getAuCancelAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">auかんたん決済キャンセル税送料(AuCancelTax)</th>
					<td><?php echo $output->getAuCancelTax() ?></td>
				</tr>
				<tr>
					<th scope="row">ドコモ決済番号(DocomoSettlementCode)</th>
					<td><?php echo $output->getDocomoSettlementCode() ?></td>
				</tr>
				<tr>
					<th scope="row">ドコモキャンセル金額(DocomoCancelAmount)</th>
					<td><?php echo $output->getDocomoCancelAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">ドコモキャンセル税送料(DocomoCancelTax)</th>
					<td><?php echo $output->getDocomoCancelTax() ?></td>
				</tr>
				<tr>
					<th scope="row">ドコモ増加金額(DocomoIncreaseAmount)</th>
					<td><?php echo $output->getDocomoIncreaseAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">ドコモ増加税送料(DocomoIncreaseTax)</th>
					<td><?php echo $output->getDocomoIncreaseTax() ?></td>
				</tr>
				<tr>
					<th scope="row">ソフトバンク処理トラッキングID(SbTrackingId)</th>
					<td><?php echo $output->getSbTrackingId() ?></td>
				</tr>
				<tr>
					<th scope="row">ソフトバンクキャンセル金額(SbCancelAmount)</th>
					<td><?php echo $output->getSbCancelAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">ソフトバンクキャンセル税送料(SbCancelTax)</th>
					<td><?php echo $output->getSbCancelTax() ?></td>
				</tr>
				<tr>
					<th scope="row">じぶん銀行受付番号(JibunReceiptNo)</th>
					<td><?php echo $output->getJibunReceiptNo() ?></td>
				</tr>
				<tr>
					<th scope="row">au継続 初回課金利用金額(FirstAmount)</th>
					<td><?php echo $output->getFirstAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">au継続 初回課金税送料(FirstTax)</th>
					<td><?php echo $output->getFirstTax() ?></td>
				</tr>
				<tr>
					<th scope="row">au継続 課金タイミング区分(AccountTimingKbn)</th>
					<td><?php echo $output->getAccountTimingKbn() ?></td>
				</tr>
				<tr>
					<th scope="row">au継続 課金タイミング(AccountTiming)</th>
					<td><?php echo $output->getAccountTiming() ?></td>
				</tr>
				<tr>
					<th scope="row">au継続 初回課金日(FirstAccountDate)</th>
					<td><?php echo $output->getFirstAccountDate() ?></td>
				</tr>
				<tr>
					<th scope="row">au継続 auエラーコード(AuContinuanceErrCode)</th>
					<td><?php echo $output->getAuContinuanceErrCode() ?></td>
				</tr>
				<tr>
					<th scope="row">au継続 auエラー詳細(AuContinuanceErrInfo)</th>
					<td><?php echo $output->getAuContinuanceErrInfo() ?></td>
				</tr>
				<tr>
					<th scope="row">au継続 au継続課金ID(AuContinueAccountId)</th>
					<td><?php echo $output->getAuContinueAccountId() ?></td>
				</tr>
				<tr>
					<th scope="row">最終処理日時(ProcessLastDate)</th>
					<td><?php echo $output->getProcessLastDate() ?></td>
				</tr>
				<tr>
					<th scope="row">JcbPreca 伝票番号(JcbPrecaSalesCode)</th>
					<td><?php echo $output->getJcbPrecaSalesCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Netcash NET CASH決済方法(NetCashPayType)</th>
					<td><?php echo $output->getNetCashPayType() ?></td>
				</tr>
				<tr>
					<th scope="row">RakutenId 注文日(OrderDate)</th>
					<td><?php echo $output->getOrderDate() ?></td>
				</tr>
				<tr>
					<th scope="row">RakutenId 完了日(CompletionDate)</th>
					<td><?php echo $output->getCompletionDate() ?></td>
				</tr>
				<tr>
					<th scope="row">RakutenId クーポン金額(RakutenidCouponFee)</th>
					<td><?php echo $output->getRakutenidCouponFee() ?></td>
				</tr>
				<tr>
					<th scope="row">RakutenId サブスクリプションID(SubscriptionId)</th>
					<td><?php echo $output->getSubscriptionId() ?></td>
				</tr>
				<tr>
					<th scope="row">RakutenId 決済用サブスクリプションID(SettlementSubscriptionId)</th>
					<td><?php echo $output->getSettlementSubscriptionId() ?></td>
				</tr>
				<tr>
					<th scope="row">Linepay LINE Pay商品名(LinepayProductName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getLinepayProductName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">Linepay LINE Payキャンセル金額(LinepayCancelAmount)</th>
					<td><?php echo $output->getLinepayCancelAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">Linepay LINE Payキャンセル税送料(LinepayCancelTax)</th>
					<td><?php echo $output->getLinepayCancelTax() ?></td>
				</tr>
				<tr>
					<th scope="row">Linepay LINE Pay支払手段(LinepayPayMethod)</th>
					<td><?php echo $output->getLinepayPayMethod() ?></td>
				</tr>
				<tr>
					<th scope="row">Unionpay 商品名(CommodityName)</th>
					<td><?php echo $output->getCommodityName() ?></td>
				</tr>
				<tr>
					<th scope="row">SbContinuance 課金開始月(SbStartChargeMonth)</th>
					<td><?php echo $output->getSbStartChargeMonth() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 振込要求金額(VaRequestAmount)</th>
					<td><?php echo $output->getVaRequestAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 取引有効期限(VaExpireDate)</th>
					<td><?php echo $output->getVaExpireDate() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 取引事由(VaTradeReason)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getVaTradeReason() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 振込依頼者氏名(VaTradeClientName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getVaTradeClientName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 振込依頼者メールアドレス(VaTradeClientMailaddress)</th>
					<td><?php echo $output->getVaTradeClientMailaddress() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 銀行コード(VaBankCode)</th>
					<td><?php echo $output->getVaBankCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 銀行名(VaBankName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getVaBankName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 支店コード(VaBranchCode)</th>
					<td><?php echo $output->getVaBranchCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 支店名(VaBranchName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getVaBranchName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 科目(VaAccountType)</th>
					<td><?php echo $output->getVaAccountType() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 口座番号(VaAccountNumber)</th>
					<td><?php echo $output->getVaAccountNumber() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 照会番号(VaInInquiryNumber)</th>
					<td><?php echo $output->getVaInInquiryNumber() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 勘定日(VaInSettlementDate)</th>
					<td><?php echo $output->getVaInSettlementDate() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 入金額(VaInAmount)</th>
					<td><?php echo $output->getVaInAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 振込依頼人コード(VaInClientCode)</th>
					<td><?php echo $output->getVaInClientCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 振込依頼人名(VaInClientName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getVaInClientName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 摘要(VaInSummary)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getVaInSummary() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 継続口座ID(VaReserveID)</th>
					<td><?php echo $output->getVaReserveID() ?></td>
				</tr>
				<tr>
					<th scope="row">Virtualaccount 振込コード(VaTradeCode)</th>
					<td><?php echo $output->getVaTradeCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Recruit 注文番号(RcOrderId)</th>
					<td><?php echo $output->getRcOrderId() ?></td>
				</tr>
				<tr>
					<th scope="row">Recruit 顧客IDハッシュ値(RcCustomerId)</th>
					<td><?php echo $output->getRcCustomerId() ?></td>
				</tr>
				<tr>
					<th scope="row">Recruit 注文時刻(RcOrderTime)</th>
					<td><?php echo $output->getRcOrderTime() ?></td>
				</tr>
				<tr>
					<th scope="row">Recruit 行使ポイント数(RcUsePoint)</th>
					<td><?php echo $output->getRcUsePoint() ?></td>
				</tr>
				<tr>
					<th scope="row">Recruit リクルート原資クーポン割引額(RcUseCoupon)</th>
					<td><?php echo $output->getRcUseCoupon() ?></td>
				</tr>
				<tr>
					<th scope="row">Recruit 加盟店様原資クーポン割引額(RcUseShopCoupon)</th>
					<td><?php echo $output->getRcUseShopCoupon() ?></td>
				</tr>
				<tr>
					<th scope="row">Recruit オーソリ期限延長実施日(RcUpdateAuthDay)</th>
					<td><?php echo $output->getRcUpdateAuthDay() ?></td>
				</tr>
				<tr>
					<th scope="row">RecruitContinuance 契約番号(RcContractId)</th>
					<td><?php echo $output->getRcContractId() ?></td>
				</tr>
				<tr>
					<th scope="row">RecruitContinuance 課金開始月(RcStartChargeMonth)</th>
					<td><?php echo $output->getRcStartChargeMonth() ?></td>
				</tr>
				<tr>
					<th scope="row">Brandtoken カード番号トークン(CardNoToken)</th>
					<td><?php echo $output->getCardNoToken() ?></td>
				</tr>
				<tr>
					<th scope="row">Bankaccount 振替指定日(BaTargetDate)</th>
					<td><?php echo $output->getBaTargetDate() ?></td>
				</tr>
				<tr>
					<th scope="row">Bankaccount 請求依頼受付終了日(BaRequestAcceptEndDate)</th>
					<td><?php echo $output->getBaRequestAcceptEndDate() ?></td>
				</tr>
				<tr>
					<th scope="row">Bankaccount 振替結果反映予定日(BaTransferReturnDate)</th>
					<td><?php echo $output->getBaTransferReturnDate() ?></td>
				</tr>
				<tr>
					<th scope="row">Bankaccount 実引落日(BaWithdrawalDate)</th>
					<td><?php echo $output->getBaWithdrawalDate() ?></td>
				</tr>
				<tr>
					<th scope="row">Bankaccount 振替結果コード(BaResultCode)</th>
					<td><?php echo $output->getBaResultCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Paid Paidキャンセル金額(PaidCancelAmount)</th>
					<td><?php echo $output->getPaidCancelAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">Paid Paidキャンセル税送料(PaidCancelTax)</th>
					<td><?php echo $output->getPaidCancelTax() ?></td>
				</tr>
				<tr>
					<th scope="row">Paid Paid取引先ID(PaidBuyerID)</th>
					<td><?php echo $output->getPaidBuyerID() ?></td>
				</tr>
				<tr>
					<th scope="row">Paid Paid伝票番号(PaidCode)</th>
					<td><?php echo $output->getPaidCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Paid 注文内容(PaidContents)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getPaidContents() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">DocomoAccept ドコモ承諾番号(DocomoAcceptCode)</th>
					<td><?php echo $output->getDocomoAcceptCode() ?></td>
				</tr>
				<tr>
					<th scope="row">AuAccept au決済情報番号(AuAcceptCode)</th>
					<td><?php echo $output->getAuAcceptCode() ?></td>
				</tr>
				<tr>
					<th scope="row">SbAccept SB承諾番号(SbAcceptCode)</th>
					<td><?php echo $output->getSbAcceptCode() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle 表示開始日(PaysleDisplayTerm)</th>
					<td><?php echo $output->getPaysleDisplayTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle 支払期限日(PayslePaymentTerm)</th>
					<td><?php echo $output->getPayslePaymentTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle 購入者通知日(PaysleNotifyTerm)</th>
					<td><?php echo $output->getPaysleNotifyTerm() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle 注文管理ID(PaysleOrderSerial)</th>
					<td><?php echo $output->getPaysleOrderSerial() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle バーコードイメージ横幅(PaysleBarcodeWidth)</th>
					<td><?php echo $output->getPaysleBarcodeWidth() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle バーコードイメージ縦幅(PaysleBarcodeHeight)</th>
					<td><?php echo $output->getPaysleBarcodeHeight() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle バーコードイメージ形式(PaysleBarcodeFormat)</th>
					<td><?php echo $output->getPaysleBarcodeFormat() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle バーコードデータ(PaysleBarcode)</th>
					<td><?php echo $output->getPaysleBarcode() ?></td>
				</tr>
				<tr>
					<th scope="row">Paysle 入金日時(FinishDate)</th>
					<td><?php echo $output->getFinishDate() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 銀行コード(GanbBankCode)</th>
					<td><?php echo $output->getGanbBankCode() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 銀行名 (GanbBankName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getGanbBankName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 支店コード(GanbBranchCode)</th>
					<td><?php echo $output->getGanbBranchCode() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 支店名(GanbBranchName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getGanbBranchName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 預金種別(GanbAccountType)</th>
					<td><?php echo $output->getGanbAccountType() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 口座番号(GanbAccountNumber)</th>
					<td><?php echo $output->getGanbAccountNumber() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 口座名義(GanbAccountHolderName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getGanbAccountHolderName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 取引有効日数(GanbExpireDays)</th>
					<td><?php echo $output->getGanbExpireDays() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 取引有効期限(GanbExpireDate)</th>
					<td><?php echo $output->getGanbExpireDate() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 取引事由(GanbTradeReason)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getGanbTradeReason() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 取引依頼人名(GanbTradeClientName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getGanbTradeClientName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 累計額(GanbTotalTransferAmount)</th>
					<td><?php echo $output->getGanbTotalTransferAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 累計回数(GanbTotalTransferCount)</th>
					<td><?php echo $output->getGanbTotalTransferCount() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 最終振込額(GanbLatestTransferAmount)</th>
					<td><?php echo $output->getGanbLatestTransferAmount() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 最終振込日(GanbLatestTransferDate)</th>
					<td><?php echo $output->getGanbLatestTransferDate() ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 最終振込依頼人名(GanbLatestTransferName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getGanbLatestTransferName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>
				<tr>
					<th scope="row">GANB 最終仕向銀行名(GanbLatestTransferBankName)</th>
					<td><?php echo htmlspecialchars( mb_convert_encoding( $output->getGanbLatestTransferBankName() , PGCARD_SAMPLE_ENCODING , 'SJIS') ) ?></td>
				</tr>

			</tbody>
		</table>
	<?php }//if( !isset ($_POST['submit']) ) ?>
</div>

<div id="footer">
	<em>Copyright (c) 2008 GMO Payment Gateway,Inc. All Rights Reserved.</em>
</div>

</body>
</html>
