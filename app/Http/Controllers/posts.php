<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posts extends Controller
{
    public function index(){
        return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {font-size:16pt;　color: #656565; font-family: trajan-sans-pro, sans-serif;　transition: .3s;}
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px 10px 0px;}
.catImg {position: relative; display: block; margin: 0 auto; width: 100%; height: 420px; overflow: hidden; max-width: 980px; margin: 0 auto 100px; padding-bottom: 50px; letter-spacing: 0.115em;}
.imgHolder.scroll1{/* -webkit-animation: scroll1 80s linear infinite; */ animation: scroll1 100s linear infinite; position: absolute; display: block; top: 0; left: 0;}
@-webkit-keyframes scroll1{
	from{
		transform: translateX(0px)
	}to{
		transform: translateX(-1274px)
	}
}
@keyframes scroll1{
	from{
		transform: translateX(0px)
	}to{
		transform: translateX(-1274px)
	}
}
#top-image{height:500px;}
.recomend {max-width: 980px; margin: 0 auto 100px; padding-bottom: 50px; letter-spacing: 0.115em;}
.recomend h2{font-family: toppan-bunkyu-mincho-pr6n, serif; color: #656565; font-size: 22px; text-align:center;}
.swiper-wrapper{position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-transition-property: -webkit-transform;
    transition-property: -webkit-transform;
    -o-transition-property: transform;
    transition-property: transform;
    transition-property: transform,-webkit-transform;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;}
#imgProductImage{width:100%; height:214.52px;}
.swiper_inner .item_name , .item_price, a{
    font-size: 12px;
    line-height: 1.2;
    text-align: center;
    display: block;
    margin-top: 16px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-feature-settings: "palt";
    color: #656565;
    letter-spacing: 0.115em;
    text-decoration: none;
}
#category{font-size: 22px; max-width: 980px; margin: 0 auto;}
#category h2 {margin-bottom: 50px; letter-spacing: 0.1em;}
#category .list {display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-pack: justify; -ms-flex-pack: justify; justify-content: space-between; -webkit-box-align: center; -ms-flex-align: center; align-items: center; padding: 0 63px; margin: 0 auto 80px; letter-spacing: 0.1em; list-style:none;}
#category .list li{font-size: 15px; -webkit-font-smoothing: antialiased;}

</style>
</head>
<body>
  <h1>Index</h1>
  <span class="catImg">
    <span class="imgHolder scroll1" style="width: 3822px;">
      <span class="item" style="width: 1274px;"><img src="https://cdn.pixabay.com/photo/2017/12/26/09/15/woman-3040029_1280.jpg" id="top-image"></span>
      <span class="item" style="width: 1274px;"><img src="https://cdn.pixabay.com/photo/2015/02/19/13/51/woman-642118_1280.jpg" id="top-image"></span>
      <span class="item" style="width: 1274px;"><img src="https://cdn.pixabay.com/photo/2014/09/03/20/15/legs-434918_1280.jpg" id="top-image"></span>
    </span>
  </span>
  <div class="recomend">
    <h2>オススメアイテム</h2>
    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
		<div class="swiper-slide swiper-slide-active" style="width: 160.8px; margin-right: 44px;">
				<div class="swiper_inner">
			<a href="/Form/Product/ProductDetail.aspx?shop=0&amp;pid=UUWFB201131&amp;vid=&amp;bid=UUN01&amp;cat=WOMTOE007&amp;swrd=">
				<span class="item_img">
					<img id="imgProductImage" src="https://cdn.pixabay.com/photo/2016/12/06/09/30/blank-1886001_1280.png" onerror="this.onerror=null; this.src='https://d13bk85vz164q6.cloudfront.net/underson/ProductImages/NowPrinting_M.jpg'" border="0" alt="ダブルクロスシャツ【ウィメンズ】" class="">
				</span>
				<span class="item_name">ダブルクロスシャツ【ウィメンズ】</span>
				<p class="item_price">
					¥12,600+税
				</p>
			</a>
		</div>
	</div>
		<div class="swiper-slide swiper-slide-next" style="width: 160.8px; margin-right: 44px;">
				<div class="swiper_inner">
			<a href="/Form/Product/ProductDetail.aspx?shop=0&amp;pid=UUWGG201166&amp;vid=&amp;bid=UUN01&amp;cat=WOMINE006&amp;swrd=">
				<span class="item_img">
					<img id="imgProductImage" src="https://cdn.pixabay.com/photo/2018/07/23/06/45/sneaker-3556131_1280.jpg" onerror="this.onerror=null; this.src='https://d13bk85vz164q6.cloudfront.net/underson/ProductImages/NowPrinting_M.jpg'" border="0" alt="レギュラーソング" class="">
				</span>
				<span class="item_name">レギュラーソング</span>
				<p class="item_price">
					¥2,700+税
				</p>
			</a>
		</div>
	</div>
		<div class="swiper-slide" style="width: 160.8px; margin-right: 44px;">
				<div class="swiper_inner">
			<a href="/Form/Product/ProductDetail.aspx?shop=0&amp;pid=UUWFP201133&amp;vid=&amp;bid=UUN01&amp;cat=WOMPTE016&amp;swrd=">
				<span class="item_img">
					<img id="imgProductImage" src="https://cdn.pixabay.com/photo/2015/09/20/02/06/lipstick-947895_1280.jpg" onerror="this.onerror=null; this.src='https://d13bk85vz164q6.cloudfront.net/underson/ProductImages/NowPrinting_M.jpg'" border="0" alt="ダブルクロスワイドトラウザーズ【ウィメンズ】" class="">
				</span>
				<span class="item_name">ダブルクロスワイドトラウザーズ【ウィメンズ】</span>
				<p class="item_price">
					¥13,000+税
				</p>
			</a>
		</div>
	</div>
		<div class="swiper-slide" style="width: 160.8px; margin-right: 44px;">
				<div class="swiper_inner">
			<a href="/Form/Product/ProductDetail.aspx?shop=0&amp;pid=UUWGG194151&amp;vid=&amp;bid=UUN01&amp;cat=WOMINE001&amp;swrd=">
				<span class="item_img">
					<img id="imgProductImage" src="https://cdn.pixabay.com/photo/2015/05/20/02/52/backpack-774720_1280.jpg" onerror="this.onerror=null; this.src='https://d13bk85vz164q6.cloudfront.net/underson/ProductImages/NowPrinting_M.jpg'" border="0" alt="ハーフトップ" class="">
				</span>
				<span class="item_name">ハーフトップ</span>
				<p class="item_price">
					¥3,600+税
				</p>
			</a>
		</div>
	</div>
		<div class="swiper-slide" style="width: 160.8px;">
				<div class="swiper_inner">
			<a href="/Form/Product/ProductDetail.aspx?shop=0&amp;pid=UUMCT195001&amp;vid=&amp;bid=UUN01&amp;cat=MENNBE003&amp;swrd=">
				<span class="item_img">
					<img id="imgProductImage" src="https://cdn.pixabay.com/photo/2017/02/20/15/28/home-2082922_1280.jpg" onerror="this.onerror=null; this.src='https://d13bk85vz164q6.cloudfront.net/underson/ProductImages/NowPrinting_M.jpg'" border="0" alt="リラックスグラフィックＴシャツVol.1【メンズ】" class="">
				</span>
				<span class="item_name">リラックスグラフィックＴシャツVol.1【メンズ】</span>
				<p class="item_price">
					¥8,800+税
				</p>
			</a>
		</div>
	</div>
  </div>
  <div id="category" class="sec">
      <h2>カテゴリー</h2>
      <ul class="list">
        <li><a href="/Form/Product/ProductList.aspx?shop=0&amp;cat=&amp;udns=2">すべて</a></li>
        <li><a href="/Form/Product/ProductList.aspx?shop=0&amp;cat=&amp;cicon=1&amp;udns=2">新着商品</a></li>
        <li><a href="/Form/Product/ProductList.aspx?shop=0&amp;cat=TOE&amp;udns=2">トップス</a></li>
        <li><a href="/Form/Product/ProductList.aspx?shop=0&amp;cat=PTE&amp;udns=2">ボトムス</a></li>
        <li><a href="/Form/Product/ProductList.aspx?shop=0&amp;cat=INE&amp;udns=2">アンダーウェア</a></li>
        <li><a href="/Form/Product/ProductList.aspx?shop=0&amp;cat=BAB&amp;udns=2">ベビー</a></li>
      </ul>
  </div>
  <div id="Foot">
        


<!-- ////////// footer START ////////// -->
<style type="text/css">
/* .fat-nav {
  top: 147px;
  left: 0;
  z-index: 1000;
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.8);

  -moz-transition-property: -moz-transform;
  -o-transition-property: -o-transform;
  -webkit-transition-property: -webkit-transform;
  transition-property: transform;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  overflow-y: auto;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch;
} */
.fat-nav__wrapper {
  width: 100%;
  height: 100%;
  display: table;
  table-layout: fixed;
}
.fat-nav.active {
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1);
}
.fat-nav li {
  list-style-type: none;
  color: #656565;
  font-size: 18px;
  font-weight: 500;
}
/* .fat-nav li, .fat-nav li a {
  color: #fff;
} */
.fat-nav li a {
  text-decoration: none;
}
.fat-nav .fat-nav-white{
  width:100%;
}
.fat-nav .nav-main{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack:distribute;
  justify-content: space-around;
  margin: 0 auto;
  max-width: 1000px;
  width: 100%;
  padding: 0 0 64px;
  /* border-bottom: 1px solid #000000; */
}
.fat-nav .nav-main .nav_jp{
  font-size: 14px;
}
.fat-nav .nav-main li{
  font-size: 14px;
}
.arrow{
  position: relative;
  display: inline-block;
  padding-right: 30px;
}

.arrow::after{
  content: '';
  width: 10px;
  height: 10px;
  border: 0px;
  border-top: solid 1px #656565;
  border-right: solid 1px #656565;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(135deg);
  position: absolute;
  top: 0;
  right: 4px;
  margin-top: -1px !important;
}
.hover .arrow::after{
  content: '';
  width: 10px;
  height: 10px;
  border: 0px;
  border-top: solid 1px #656565;
  border-right: solid 1px #656565;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  position: absolute;
  top: 0;
  right: 4px;
  margin-top: 6px !important;
}






.sub-nav-area{
  margin: 0 auto;
  max-width: 1000px;
  width: 100%;
  padding: 50px 2% 26px 0;
}

.sub-nav-area .sub-nav-contents li{
  font-size: 14px;
  letter-spacing : 1.87px;
  color : #656565;
  margin:0 20px 40px;
}
.fat-nav .sub-nav-area .sub-nav-contents li a{
  color: #656565;
}
.sub-nav-area .sub-nav-contents{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}


/* メガナビ */
#gnav > ul {
  display: flex;
  justify-content: space-between;
  align-items: center;
  /* padding-left: 50px; */
  /* width: 840px ;*/
  width: 500px;
}
#gnav > ul > li {
  /* display: table-cell; */
  /* margin-right: 2em; */
}
#gnav > ul > li.hover {
  color: #656565;
}
#gnav > ul > li.hover > span,
#gnav > ul > li.hover > a {
  color: #656565;
}
#gnav > ul > li.hover .menu {
  max-height: 9999px;
  opacity: 1;
}
/* #gnav > ul > li > a {
  display: block;
  padding: 25.5px 1em 15.5px;
  transition: all .2s ease-in;
} */
#gnav > ul .menu {
  transition: all .2s ease-in;
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  width: 100%;
  left: 0;
  text-align: center;
  position: absolute;
}
#gnav > ul .menu .menu_inner {
  padding: 25px 20px 0;
  width: 100%;
  margin: 5px auto 0;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
#gnav > ul .menu .menu_inner li {
  font-size: 13px;
  letter-spacing: 1.87px;
  color: #656565;
  margin: 0 20px 40px;
}
#gnav > ul .menu a {
  color: #656565;
}

.foot_mailmagazine a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width:190px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border: 1px solid #656565;
  margin: 0 auto;
}
.foot_mailmagazine a:before {
  content: '';
  background-size: contain;
  background-repeat: no-repeat;
  display: inline-block;
  vertical-align: top;
  width: 14px;
  height: 16px;
  background-image: url(../../../SmartPhone/Contents/ImagePkg/common/underson/drawer-menu-sns02.svg);
  margin: 5px 10px 0 0;
}
#gnav .toggle{cursor: pointer;}
.text_about{
  font-size: 11px;
  color: #8D8C8C;
  text-align: center;
  line-height: 1.6;
}
.text_about .copy{
  font-size: 10px;
  margin-top: 20px;
  letter-spacing: 0.05rem;
}
@media screen and (max-width: 1024px){
#gnav > ul .menu .menu_inner li{
  font-size:calc(13 * (100vw / 1024));
  letter-spacing: 1.87px;
  color: #656565;
  margin: 0 calc(10 * (100vw / 1024)) 40px;
}
}

#gnav > ul.footerSnsNav {
  width: 300px;
  margin: 80px auto 0;
}

ul.footerSnsNav li img {
  width: 25px;
}
</style>
<footer id="footer" class="footer">
	<div class="footer-inner">
		<div class="footer_nav">
      <div class="fat-nav">
        <div class="fat-nav__wrapper">
          <div class="fat-nav-white">
            <div class="nav-main">
              <div id="gnav">
                <ul>
                  <li><a href="/Form/Inquiry/InquiryInput.aspx">問い合わせ</a></li>
                  <li><a href="http://ma-card.com/" target="_brank">MAカード</a></li>
                  <li class="nav_jp">
                    
                    
                    <a href="https://undersonunderson.com/Form/Login.aspx?nurl=%2f">ログイン・会員登録</a>
                    
                  </li>
                  <li class="toggle">
                    <span class="arrow nav_jp">インフォ</span>
                    <div class="menu">
                      <ul class="menu_inner">
                        <li><a href="/Page/guide/Default.aspx">ご利用ガイド</a></li>
                        <li><a href="/Page/guide/notice.aspx">ご利用規約</a></li>
                        <li><a href="/Page/guide/disclaimer.aspx">免責事項</a></li>
                        <li><a href="/Page/guide/privacy.aspx">プライバシーポリシー</a></li>
                        <li><a href="/Page/guide/tokutei.aspx">特定商取引に基づく表示</a></li>
                        <li><a href="/Form/User/MailMagazineRegistInput.aspx">メールマガジン登録</a></li>
                        <li><a href="https://www.ms-lab.com/profile.html" target="_brank">会社情報</a></li>
                        <li><a href="/Page/link.aspx" target="_brank">LINK</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
                <ul class="footerSnsNav">
                  <li>
                    <a href="https://www.instagram.com/underson.underson/" target="_brank">
                      <img src="https://underson.mash-cdn.com/SmartPhone/Contents/ImagePkg/common/underson/drawer-menu-sns01.svg" width="16px">
                    </a>
                  </li>
                  <li>
                    <a href="http://nav.cx/sxUbhWK" target="_brank">
                      <img src="https://underson.mash-cdn.com/SmartPhone/Contents/ImagePkg/common/underson/LINE_icn.svg" width="16px">
                    </a>
                  </li>
                  <li>
                    <a href="/Form/User/MailMagazineRegistInput.aspx">
                      <img src="https://underson.mash-cdn.com/SmartPhone/Contents/ImagePkg/common/underson/drawer-menu-sns02.svg">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text_about">
        <p>
          通販サイトです。<br>
          オフィシャルオンラインストアでは人気アイテムをすべて取り揃えております。
        </p>
        <p class="copy">© onlineshop</p>
      </div>
			<!-- <div id="tab">
				<ul id="tab-head" class="footer_info">
					<li id="tab-h1"><a href="#tab-b1">コンタクト</a></li>
					<li id="tab-h2"><a href="#tab-b2">MAカード</a></li>
					<li id="tab-h3"><a href="#tab-b3">ログイン</a></li>
					<li id="tab-h4"><a href="#tab-b4">インフォ</a></li>
				</ul>
				<div id="tab-body">
					<div id="tab-b4">
						<ul>
							<li><a href="">ご利用ガイド</a></li>
							<li><a href="">ご利用規約</a></li>
							<li><a href="">免責事項</a></li>
							<li><a href="/Page/guide/privacy.aspx">プライバシーポリシー</a></li>
							<li><a href="/Page/guide/tokutei.aspx">特定商取引に基づく表示</a></li>
							<li><a href="/Form/User/MailMagazineRegistInput.aspx">メールマガジン登録</a></li>
							<li><a href="https://www.mashsportlab.com/profile.html" target="_brank">会社情報</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>

		
	</div>
  <div class="modal modal-filter hide" id="modalSearch">
    <div class="modal-overlay"></div>
    <div class="modal-wrapper">
      <div class="modal-inner">
        <div id="headerSearch">

          <div class="btn-close" id="modalCloseBtn"></div>
          <!-- <a href="/Page/AdvancedSearch.aspx">詳しく検索</a> -->
        </div>

      </div>
    </div>
  </div>
</footer>
<link href="/Css/modal.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" charset="UTF-8" src="/Js/modal.js"></script>
<script type="text/javascript">
  $(function () {
    var process = function () {
      gnavMenu.init();
    };
    if (Sys && Sys.Application) { Sys.Application.add_load(process); } else { process(); }
  });
  /* ==============================================================
    ヘッダー関係の設定
  ============================================================== */
  var gnavMenu = {
    /* 初期化
    ------------------------------------------------------------ */
    init: function () {
      var f, t, a;
      $('#gnav > ul > li.toggle .menu a').click(function () {
        a = 1;
      });
      $("#gnav > ul > li.toggle").bind('mouseenter mouseleave click', function () {
        if (f == 1 && event.type != 'mouseover' && event.type != 'mouseout') {
          f = 0;
          return false;
        }
        if (!a) {
          if (event.type == 'mouseout' || (event.type == 'click' && $(this).hasClass("hover") == true)) {
            gnavMenu.hideSubMenu($(this));
          } else if (event.type == 'mouseover' || (event.type == 'click' && $(this).hasClass("hover") == false)) {
            $("#gnav > ul > li.toggle").each(function (index) {
              gnavMenu.hideSubMenu($(this));
            });
            gnavMenu.showSubMenu($(this));
          }
          f = 1;
          t = setTimeout(function () {
            f = 0;
            t = null;
          }, 250);
          return false;
        }
      });
    },
    /* サブメニューを表示
    ------------------------------------------------------------ */
    showSubMenu: function (target) {
      if (target.hasClass("hover") === false) {
        target.addClass("hover");
      }
    },
    /* サブメニューを非表示
    ------------------------------------------------------------ */
    hideSubMenu: function (target) {
      if (target.hasClass("hover") === true) {
        // box.slideUp(300);
        target.removeClass("hover");
      }
    },
  }

  
</script>
<!-- ////////// footer END ////////// -->






<!-- w2tracker -->

<div id="ctl00_BodyFooterMain_AccessLogTrackerScript1_divTracker">
<script type="text/javascript">
<!--
	var w2accesslog_account_id = "095_Underson";
	var w2accesslog_target_domain = "undersonunderson.com";
	var w2accesslog_cookie_root = "/";
	var w2accesslog_getlog_path = "/Scripts/getlog.gif";

	
	document.write(unescape("%3Csc" + "ript type='text/javascript' src='" + (("https:" == document.location.protocol) ? "https:" : "http:") + "//undersonunderson.com/Scripts/tracker.js'%3E%3C/sc" + "ript%3E"));
// -->
</script><script type="text/javascript" src="https://undersonunderson.com/Scripts/tracker.js"></script>
</div>



<script type="text/javascript">
		(function (i,s,o,g,r,a,m) {
			i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-18442995-22', {'allowLinker': true});
		ga('require', 'linker');
		ga('linker:autoLink', ['usagi-online.com','ma-card.com']);	
		ga('send', 'pageview');
</script>
<div id="ctl00_BodyFooterMain_AccessLogTrackerScript1_divGetLog">
<script type="text/javascript">
<!--
	getlog();
// -->
</script>
</div>





    </div>
</body>
</html>
EOF;

    }
}
