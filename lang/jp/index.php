<?php
define("BASEPATH", dirname(__FILE__));
$Appsetting= BASEPATH . DIRECTORY_SEPARATOR . "_sys". DIRECTORY_SEPARATOR ."init_var.php";
include $Appsetting;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$co['name'];?>">
    <meta name="keywords" content="<?=$co['name'];?>, services, computer, remote access, computer fix">
    <!-- Main Page Title -->
	<title><?=$co['short'];?></title>
    <!--Fevicon-->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
	<!--font-Google-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,600,700,800" rel="stylesheet">
	<!-- Font-awesome css -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- Main Slider css -->
	<link rel="stylesheet" href="assets/css/camera.css">
	<!-- Magnific css -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- Owl carousel css -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Main style css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body data-spy="scroll" data-target=".header-area" data-offset="50" id="home">
	<!--==================================================================== 
							Start Preloader Section 
	=====================================================================-->
	<div class="preloader">
	    <div class="preloader-inner-area">
	        <div class="loader-overlay">
	            <div class="l-preloader">
	                <div class="c-preloader"></div>
	            </div>
	        </div>
	    </div>
	</div> 
	<!--==================================================================== 
							End Preloader Section 
	=====================================================================-->
	<!--==================================================================== 
							Start Header Section 
	=====================================================================-->
	<header class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
                    <div class="logo"> <!--/Start Logo Area -->
                        <a href="<?php BASEPATH ?>">
                        	<img src="assets/images/philtellogo.png" alt="about-image">
						</a>
						</br>
						<a href="../jp"><img src="assets/images/japanicon.png"/></a>
									<a href="../../"><img src="assets/images/ukicon.png"/></a>
                    </div> <!--/End Logo Area -->
                </div>
				 <div class="col-md-9 col-sm-9">
                    <div class="main-menu"> <!-- Start Menu Area -->
                        <div class="navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                    	<a class="smoth-scroll" href="#home">ホーム</a>
                                    </li>
                                    <li>
                                    	<a class="smoth-scroll" href="#about">会社情報</a>
                                    </li>
                                    <li>
                                    	<a class="smoth-scroll" href="#service">サービス一覧
</a>
                                    </li>
                                    <li>
                                    	<a class="smoth-scroll" href="#portfolio">料金</a>
                                    </li>
                                    
                                    <li>
                                    	<a class="smoth-scroll" href="#contact">お問い合わせ</a>
                                    </li>
									
                                    
                                </ul>
                            </div>
                        </div>
                    </div> <!--/End Menu Area -->
                </div>
			</div>
		</div>
	</header> <!--/End Header Area -->
	<!--==================================================================== 
							End	Header Section 
	=====================================================================-->
	<!--==================================================================== 
							Start Slider Section 
	=====================================================================-->
	<section class="slider-area">
		<div class="camera_wrap main-slider">
            <div data-thumb="assets/images/banner.jpg" data-src="assets/images/banner.jpg">
                <div class="camera_caption text-center">
                	<h5 class="fadeInUp animated"><?=$co['name'];?></h5>
                    <h1 class="fadeInDown animated">コンピュリンク PCの修復ツールは、オンラインコンピュータの修理サービスです</h1>
					<a href="#about" class="btn1 fadeInLeft animated">私たちに関しては</a>
                    <a href="#contact" class="btn2 fadeInRight animated">お問い合わせ</a>
                </div>
            </div>
            <div data-thumb="assets/images/banner2.jpg" data-src="assets/images/banner2.jpg">
                <div class="camera_caption text-center">
                	<h5 class="fadeInUp animated">リモートコンピュータの修復</h5>
                    <h1 class="fadeInDown animated">あなたの指先で</h1>
					<a href="#about" class="btn1 fadeInLeft animated">私たちに関しては</a>
                    <a href="#contact" class="btn2 fadeInRight animated">お問い合わせ</a>
                </div>
            </div>
            <div data-thumb="assets/images/banner3.jpg" data-src="assets/images/banner3.jpg">
                <div class="camera_caption text-center">
                	<h1 class="fadeInUp animated">スローコンピュータ？ポップアップ？</h1>
                    <h5 class="fadeInDown animated">我々は正常に戻ってそれを取得します</h5>
					<a href="#about" class="btn1 fadeInLeft animated">私たちに関しては</a>
                    <a href="#contact" class="btn2 fadeInRight animated">お問い合わせ</a>
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->
	</section>
	<!--==================================================================== 
							End	Slider Section 
	=====================================================================-->
	<!--==================================================================== 
							Start About Section 
	=====================================================================-->
	<section class="about-area ptb-1" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="section-top text-center pb-1">
						<h2>会社情報</h2>
                        <p>あなたが必要とするものは、あなたのコンピュータを知っている人です、必要が生じるたびにそこにいます。</p>
						
						<p>おめでとう！ あなたは誰かを見つけました!</p>
					</div>
				</div>
			</div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-img">
                        <img src="assets/images/about.jpg" alt="about-image">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
					<h3>私たちに関して</h3>
                    <p>私たちのチームは、お客様のニーズに焦点を当てた一流の品質のサービスや製品を提供するリーディングカンパニーです。 私たちはあなたのコンピュータの問題を議論し、最適なソリューションを決定するために無料の貴重な診断を提供させていただきます。</p>
					<p>あなたがそこに最高のソースを探していますが、我々は、コンピュータとインターネットセキュリティのためにすべてを持っています！</p>
					
					<h3>我々の使命</h3> <!--Mission-->
                     <p>私たちは、手頃な価格で質の高いサービスを提供するために努力しています。私たちの使命は単純なものです。私たちは、優れたサービスを持つすべての顧客のコンピュータの必要にサービスを提供します。</p>
					 
					 <h3>なぜ私たちを選ぶのか？</h3> <!--Why you choose us-->
                      <p>私たちの知識とサービス指向のスタッフがそれぞれの分野で経験しているし、彼らがやることすべてに効率を提供するために、彼らの専門知識を使用しています。当社の事業は、あなたがあなたとの得るのを助けることです。私達はあなたとすぐに働くことを楽しみにしています！</p>
					  
                        
                    </div>
                </div>
            </div>
		</div>
	</section> <!--/section -->
	<!--==================================================================== 
							End	About Section 
	=====================================================================-->
	<!--==================================================================== 
							Start Corporate Information Section 
	=====================================================================-->
	<section class="feature-area ptb-1 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top portfolio-top text-center pb-1">
                        <h2>特定商取引法に基づく表記</h2>
                        
                    </div>
                </div>
            </div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="feature-content">
                        <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-dashcube"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>販売事業者名</h3>
                                <p>フィルテル・ストラテジック・ソリューションズ株式会社</p>
                            </div>
                        </div><!-- /Single feature item -->
                        <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-address-card"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>住所</h3>
                                 <p>〒271-0068 千葉県松戸市古ケ崎3-3289-1 イーグレットA-205</p>
                                <!-- <p>3-3289-1, Kogasaki, Matsudo, Chiba</p> --->
                            </div>
                        </div><!-- /Single feature item -->
                        <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-black-tie"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>代表者 </h3>
                                <p>ディレクター:新井　イメルダ</p>
                            </div>
                        </div><!-- /Single feature item -->
                        <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Phone</h3>
                                <p>047-727-5376</p>
                            </div>
                        </div><!-- /Single feature item -->
						 <div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>連絡先／電子メール</h3>
                                <p><?=$co['email'];?></p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-edge"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>Company Website</h3>
                                <p>www.<?=$co['domain'];?></p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>販売価格帯</h3>
                                <p>29,000~59,000 JPY</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-question"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>サービス提供までにかかる時間?</h3>
                                <p>注文後10分以内</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>代金の支払時期および方法</h3>
                                <p>クレジットカード決済</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>商品代金以外に必要な費用 ／送料、消費税等</h3>
                                <p>消費税8%</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>返品の取扱条件／返品期限、返品時の送料負担 または解約や退会条件</h3>
                                <p>返金は不可</p>
                            </div>
                        </div><!-- /Single feature item -->
						<div class="single-feature-item">
                            <div class="feature-icon">
                                <i class="fa fa-wrench"></i>
                            </div>
                            <div class="single-feature-content">
                                <h3>不良品の取扱条件</h3>
                                <p>返金は不可</p>
                            </div>
                        </div><!-- /Single feature item -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="feature-img">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1365.8003925296878!2d120.99653105786065!3d14.480849192298182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf0dd30a115b%3A0x79321e0391dfa00f!2sPhilTel+Strategic+Solutions+Inc.!5e0!3m2!1sen!2ssg!4v1531930025658" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12944.27453810452!2d139.88636022838494!3d35.79824833267254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601885275cc0d435%3A0x45a42e75dacc7c25!2sKogasaki%2C+Matsudo%2C+Chiba+Prefecture+271-0068%2C+Japan!5e0!3m2!1sen!2ssg!4v1534226108771" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>     
        </div>
    </section>
	<!--==================================================================== 
							End	Corporate Information Section 
	=====================================================================-->
    <section class="feature-area ptb-1 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top portfolio-top text-center pb-1">
                        <h2>リモートコンピュータの修復の利点</h2> <!--Advantages of remote computer repair-->
                        
                    </div>
                </div>
            </div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="feature-content">
                        <div class="single-feature-item">
                            <div class="single-feature-content">
                                <a href="#"><h3>私たちは手に常にあります</h3></a>
                                <p align="justify"><?=$co['name'];?>は、お客様のコンピュータにすぐに必要な助けを提供する最善の方法です！ガスを無駄にしてコンピュータを修理工場に持ち込むこともなく、技術者があなたの電話に戻り、家やオフィスに来るのを待つ時間もありません。 午前、午後、または深夜にかかわらず、あなたの予定どおりにご利用いただけます。</p>
								
                            </div>
                        </div><!-- /Single feature item -->
                        
                        <div class="single-feature-item">
                            <div class="single-feature-content">
                                <p align="justify"><?=$co['name'];?> それはあなたの個人情報を保護することになると、最高のソリューションです! お使いのコンピュータが店頭に置かれているときに何が見えているのか分かりませんが、 <?=$co['name'];?> では目の前にコンピュータを修復している間だけ、見ているものが見えます！</p>
                            </div>
                        </div><!-- /Single feature item -->
                        <div class="single-feature-item">
                            <div class="single-feature-content">
                                <p>この種の技術は、高速の利便性とセキュリティのための家庭やビジネスコンピュータユーザーのための修理の好ましい方法になってきています。</p>
                            </div>
                        </div><!-- /Single feature item -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="feature-img">
                        <img src="assets/images/feature.jpg" alt="feature-image">
                    </div>
                </div>
            </div>     
        </div>
    </section>
	<!--==================================================================== 
							Start Service Section 
	=====================================================================-->
	<section class="service-area ptb-1" id="service">
		<div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top portfolio-top text-center pb-1">
                        <h2>会社のサービス</h2> <!-- our service -->
                        <p>オンラインでコンピュータの助けが必要なときに、自分で技術的な問題を理解できない場合は、私たちに電話をかけると、Windows PCの問題がリモートで解決されます。</p>
                    </div>
                </div>
            </div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-bolt"></i>
                        </div>
                        <h3>ウイルス - マルウェアの削除</h3>
                        <p>我々は戻ってそれがあった方法にあなたのシステムを得るためなどトロイの木馬 </br> ルートキット、ブラウザがハイジャック、偽のセキュリティソフトウェア、ポップアップなどのすべてのウイルスを削除します。</p>
                    </div>
                </div> <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-bug"></i>
                        </div>
                        <h3>死のブルースクリーン (BSOD)</h3>
                        <p>死の恐ろしいブルースクリーン（BSOD）を取得しますか？私たちは、私たちの診断を実行し、問題の根本を取得し、リモートでそれを修復ます。</p>
                    </div>
                </div> <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-hdd-o"></i>
                        </div>
                        <h3>コンピュータの最適化</h3>
                        <p>コンピュータが遅い実行していますか？ジャンクファイル、レジストリの問題、不要なファイルや多くのビルド時間をかけて。私たちは、最高のパフォーマンスのためにそれを最適化します。</p>
                    </div>
                </div> <!--/End Sungle service item -->
			</div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-cube"></i>
                        </div>
                        <h3>エラーメッセージ</h3>
                        <p>ソフトウェアが完璧ではない、時々エラーが原因破損まで来ることができます。我々のエラーの根本的な原因を見つけ、あなたのためにそれらをクリーンアップします。これは、ブルースクリーンや、あなたのコンピュータ上で作業している間出てくるランダム誤差を含んでいます</p>
                    </div>
                </div> <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h3>処理速度の遅いコンピュータ</h3>
                        <p>ブートに永遠に回転する円を恐ろしいオープンウェブページを、取りますか？私たちは今、円滑な実行しているPCを取り戻すことができます。</p>
                    </div>
                </div> <!--/End Sungle service item -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-item text-center">
                        <div class="service-item-icon">
                            <i class="fa fa-windows"></i>
                        </div>
                        <h3>ウィンドウズの修復</h3>
                        <p>ウィンドウズが起動演技しますか？我々は、ウィンドウズベースのコンピュータの数千人を修理しているし、あなたが見たり、リラックスしながら、あまりにもあなたを修正することができます。</p>
                    </div>
                </div> <!--/End Sungle service item -->
            
		</div>
	</section>
	<!--==================================================================== 
							End	Service Section 
	=====================================================================-->
	<!--==================================================================== 
							Start Facts Section 
	=====================================================================-->
	<section class="facts-area ptb-1">
        <div class="overlay1"></div>
		<div class="container">
		 <div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="single-facts-item text-center">
					   <h6>私たち、迅速と正確なソリューションと素晴らしい品質のサービスを提供します - 世界的に</h6>
						<h1>世界的に</h1>
						
					</div>
				</div>
			</div> <!--/End Section Top-->
			
			
		</div>
	</section>
	<!--==================================================================== 
							End	Facts Section 
	=====================================================================-->
	<!--==================================================================== 
							Start portfolio Section 
	=====================================================================-->
	<section class="portfolio-area ptb-1" id="portfolio">
		<div class="container">
			
			
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>価格設定</h2> <!--/our pricing-->
                        <p>ワンタイムサポートと無制限のサポートメンバーシップなど、手頃な価格のサービスプランの数、で、誰もが言うことができるはずコンピュリンク作品を！」ユアーズしていますか？</p>
                    </div>
                </div>
            </div> <!--/End Section Top-->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pricing-table text-center">
                        <div class="pricing-top">
                            <h4>スターター </h4>
                            <div class="pricing-cost">
                                <span>¥29,000<sub></sub></span>
                            </div>
                        </div><!--/End Price Top-->
                        <ul>
							<li>6ヶ月</li>
                            <li>１テバイスまでサポート</li>
							<li>データバックアップ</li>
							<li>ウイルス•有害ソフトの防止</li>
							<li>定期的な調整と最適化</li>
							<li>専門スタッフのサポート（月曜日〜金曜日）</li>
							<li>ＰＣクリーンアップツール</li>
							<li>データ復旧ツール</li>
							<li>消費税8%</li>
							<li>返金は不可</li>
                            
                        </ul>
                        <a class="btn4" href="#contact">今すぐ購入</a>
                    </div>
                </div> <!-- /End Single Pricing Table -->
                <div class="col-md-3 col-sm-6">
                    
                </div> <!-- /End Single Pricing Table -->
                <div class="col-md-3 col-sm-6">
                    
                </div> <!-- /End Single Pricing Table -->
                <div class="col-md-3 col-sm-6">
                    <div class="pricing-table text-center">
                        <div class="pricing-top">
                            <h4>ベーシック</h4>
                            <div class="pricing-cost">
                                <span>¥39,000<sub>1 yr</sub></span>
                            </div>
                        </div><!--/End Price Top-->
                        <ul>
                            <li>１年間	</li>
                            <li>１テバイスまでサポート</li>
                            <li>データバックアップ</li>
                            <li>ウイルス•有害ソフトの防止</li>
                            <li>定期的な調整と最適化</li>
							<li>専門スタッフのサポート（月曜日〜金曜日）</li>
							<li>ＰＣクリーンアップツール</li>
							<li>データ復旧ツール</li>
							<li>消費税8%</li>
							<li>返金は不可</li>
                        </ul>
                        <a class="btn4" href="#contact">今すぐ購入</a>
                    </div>
                </div> <!-- /End Single Pricing Table -->
            
        </div>
			
		</div>
	</section>
	<!--==================================================================== 
							End	portfolio Section 
	=====================================================================-->
	<!-- ===================================================================
							Start Partner Section
	=====================================================================-->
	<div class="partner-area ptb-1">
		<div class="container">
				<div class="col-md-12">
					<div class="partner-slider">
						<div class="partner-item">
							<img src="assets/images/c1.png" alt="partner-logo">
						</div>
						<div class="partner-item">
							<img src="assets/images/c2.png" alt="partner-logo">
						</div>
						<div class="partner-item">
							<img src="assets/images/c3.png" alt="partner-logo">
						</div>
						<div class="partner-item">
							<img src="assets/images/c4.png" alt="partner-logo">
						</div>
						<div class="partner-item">
							<img src="assets/images/c5.png" alt="partner-logo">
						</div>
						
					</div>
				</div>
		</div>
	</div>
	<!-- ===================================================================
							End Partner Section
	=====================================================================-->
	
    <!--==================================================================== 
                              
    <!--==================================================================== 
                            Start Expertice Section 
    =====================================================================-->
    <section class="expertise-area ptb-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="section-top text-center pb-1">
                        <h2>保険</h2> <!--Our Guarantee-->
                        <p><?=$co['name'];?> は、企業や一般顧客に優れた技術サポートを提供することにより、世界最高レベルの顧客満足度を目指しています。 私たちの目標は、24時間体制でお客様を支援し、最高のITソリューションを提供することです。 </p>
                    </div>
                </div>
            </div> <!--/End Section Top-->
            
        </div>
    </section>
    <!--==================================================================== 
                            End Expertice Section 
    =====================================================================-->
	
	<!--==================================================================== 
							Start Overview Section 
	=====================================================================-->
	
	<!--==================================================================== 
							End Overview Section 
	=====================================================================-->
	
    <!--====================================================================
                        Start Holder Section
    =====================================================================-->
    
    <!--====================================================================
                        End Holder Section
    =====================================================================-->
	
	<!-- ===================================================================
							Start Contact Section
	=====================================================================-->
	<section class="contact-area ptb-1" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="section-top text-center pb-1">
						<h2>お問い合わせ</h2>
                        <p>いつでもお問い合わせ</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-sm-6 col-xs 12">
					<div class="contact-field-area">
						<form id="ajax-contact" action="mail.php" method="post">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="single-contact-field">
										<input type="text"  name="name" class="text-field" id="name" placeholder="名前" required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="single-contact-field">
										<input type="email"  name="email" class="text-field" id="email" placeholder="電子メール　アドレス" required>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="single-contact-field">
										<input type="text"  name="subject" class="text-field" id="subject" placeholder="主題">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="single-contact-field">
										<textarea name="msg" id="msg" placeholder="メッセージ"></textarea>
									</div>
									<input type="submit" name="submit" value="信送" id="submitButton" class="btn3" data-text="Send Message">
								</div>
							</div>
							<div id="form-messages"></div>
						</form>
					</div>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12">
					<div class="contact-info">
						<h3>何か質問を得た場合、私達にメッセージを送信することを躊躇しないでください。24時間以内に返信されます。</h3>
						<ul>
							<li>
								<div class="contact-icon">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="info-text">
									<strong>住所 :</strong><br><?=$co['address1'];?>
                                    <br><?=$co['address2'];?>
									<br><?=$co['city'];?>
								</div>
							</li>
							<li>
								<div class="contact-icon">
									<i class="fa fa-mobile"></i>
								</div>
								<div class="info-text">
									<strong>電話番号:</strong><br><?=$co['phone'];?>
									<br><?=$co['phone2'];?>
                                    <br>
								</div>
							</li>
							
							<li>
								<div class="contact-icon">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div class="info-text">
									<strong>電子メールアドレス:</strong><br><?=$co['email'];?>
                                    <br>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ===================================================================
							End Contact Section
	=====================================================================-->
	<!--==================================================================== 
							Start Footer Section 
	=====================================================================-->
	<footer class="footer-area ptb-1 bg-2 text-center">	
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="footer-logo">
						<img src="assets/images/philtellogo.png" alt="about-image">
					</div>
					<div class="ftr-social-link">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="copy-right">
						<p>コンピュリンク2018によって著作権©| 全著作権所有</p>
					</div> <!-- End Copyright Area -->
				</div>
			</div>
		</div>
	</footer>
	<!--=========== Scroll to top ===========-->
	<div class="scroll-top not-visible">
		<i class="fa fa-angle-double-up"></i>
	</div>
	<!--==================================================================== 
							End Footer Section 
	=====================================================================-->
	<!--====================================================================
							Include All Js File 
	 ====================================================================-->
     <!-- All Plugin -->
	<script src="assets/js/jquery-1.12.4.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoint.js"></script>
	<script src="assets/js/camera.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.min.js"></script>
	<script src="assets/js/contact-form.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <!-- Custom JS -->
	<script src="assets/js/scripts.js"></script>
</body>
</html>