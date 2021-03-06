
<!doctype html>
<html>
<head>
<!-- 声明文档使用的字符编码 -->
<meta charset='utf-8'>
<!-- 优先使用 IE 最新版本和 Chrome -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<!-- 页面描述 -->
<meta name="description" content="不超过150个字符"/>
<!-- 页面关键词 -->
<meta name="keywords" content=""/>
<!-- 网页作者 -->
<meta name="author" content="guo,1057540638@qq.com"/>
<!-- 搜索引擎抓取 -->
<meta name="robots" content="index,follow"/>
<!-- 为移动设备添加 viewport -->
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=3,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,target-densityDpi=medium-dpi, minimal-ui" />
<!-- `width=device-width` 会导致 iPhone 5 添加到主屏后以 WebApp 全屏模式打开页面时出现黑边 http://bigc.at/ios-webapp-viewport-meta.orz -->

<!-- iOS 设备 begin -->
<meta name="apple-mobile-web-app-title" content="标题">
<!-- 添加到主屏后的标题（iOS 6 新增） -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- 是否启用 WebApp 全屏模式，删除苹果默认的工具栏和菜单栏 -->

<!--meta name="apple-itunes-app" content="app-id=myAppStoreID, affiliate-data=myAffiliateData, app-argument=myURL" -->
<!-- 添加智能 App 广告条 Smart App Banner（iOS 6+ Safari） -->
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<!-- 设置苹果工具栏颜色 -->
<meta name="format-detection" content="telphone=no, email=no"/>
<!-- 忽略页面中的数字识别为电话，忽略email识别 -->

<!-- 启用360浏览器的极速模式(webkit) -->
<meta name="renderer" content="webkit">
<!-- 避免IE使用兼容模式 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- 不让百度转码 -->
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
<meta name="HandheldFriendly" content="true">
<!-- 微软的老式浏览器 -->
<meta name="MobileOptimized" content="320">
<!-- uc强制竖屏 -->
<meta name="screen-orientation" content="portrait">
<!-- QQ强制竖屏 -->
<meta name="x5-orientation" content="portrait">
<!-- UC强制全屏 -->
<meta name="full-screen" content="yes">
<!-- QQ强制全屏 -->
<meta name="x5-fullscreen" content="true">
<!-- UC应用模式 -->
<meta name="browsermode" content="application">
<!-- QQ应用模式 -->
<meta name="x5-page-mode" content="app">
<!-- windows phone 点击无高光 -->
<meta name="msapplication-tap-highlight" content="no">
<!-- iOS 图标 begin -->
<link rel="apple-touch-icon-precomposed" href="{{ asset('myhome/apple-touch-icon-57x57-precomposed.png') }}"/>
<!-- iPhone 和 iTouch，默认 57x57 像素，必须有 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('myhome/apple-touch-icon-114x114-precomposed.png') }}"/>
<!-- Retina iPhone 和 Retina iTouch，114x114 像素，可以没有，但推荐有 -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('myhome/apple-touch-icon-144x144-precomposed.png') }}"/>
<!-- Retina iPad，144x144 像素，可以没有，但推荐有 -->
<!-- iOS 图标 end -->

<!-- iOS 启动画面 begin -->
<link rel="apple-touch-startup-image" sizes="768x1004" href="{{ asset('myhome/img/App-ios-logo-152x152.png') }}"/>
<!-- iPad 竖屏 768 x 1004（标准分辨率） -->
<link rel="apple-touch-startup-image" sizes="1536x2008" href="{{ asset('myhome/img/App-ios-logo-152x152.png') }}"/>
<!-- iPad 竖屏 1536x2008（Retina） -->
<link rel="apple-touch-startup-image" sizes="1024x748" href="{{ asset('myhome/img/App-ios-logo-152x152.png') }}"/>
<!-- iPad 横屏 1024x748（标准分辨率） -->
<link rel="apple-touch-startup-image" sizes="2048x1496" href="{{ asset('myhome/img/App-ios-logo-152x152.png') }}"/>
<!-- iPad 横屏 2048x1496（Retina） -->

<link rel="apple-touch-startup-image" href="{{ asset('myhome/img/App-ios-logo-152x152.png') }}"/>
<!-- iPhone/iPod Touch 竖屏 320x480 (标准分辨率) -->
<link rel="apple-touch-startup-image" sizes="640x960" href="{{ asset('myhome/img/App-ios-logo-152x152.png') }}"/>
<!-- iPhone/iPod Touch 竖屏 640x960 (Retina) -->
<link rel="apple-touch-startup-image" sizes="640x1136" href="{{ asset('myhome/img/App-ios-logo-152x152.png') }}"/>
<!-- iPhone 5/iPod Touch 5 竖屏 640x1136 (Retina) -->
<!-- iOS 启动画面 end -->

<!-- iOS 设备 end -->
<meta name="msapplication-TileColor" content="#000"/>
<!-- Windows 8 磁贴颜色 -->
<meta name="msapplication-TileImage" content="icon.png') }}"/>
<!-- Windows 8 磁贴图标 -->

<link rel="alternate" type="application/rss+xml" title="RSS" href="{{ asset('myhome/rss.xml') }}"/>
<!-- 添加 RSS 订阅 -->
<link rel="shortcut icon" type="image/ico" href="{{ asset('myhome/favicon.ico') }}"/>
<!-- 添加 favicon icon -->
<!-- sns 社交标签 begin -->
<!-- 参考微博API -->
<meta property="og:type" content="类型" />
<meta property="og:url" content="URL地址" />
<meta property="og:title" content="标题" />
<meta property="og:image" content="图片" />
<meta property="og:description" content="描述" />
<!-- sns 社交标签 end -->
<title>首页</title>
<link rel="stylesheet" href="{{ asset('myhome/css/common.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/font.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/responsive.css') }}">
<!-- banner -->
<link rel="stylesheet" href="{{ asset('myhome/css/swiper.min.css') }}">
<style type="text/css">
  .swiper-wrapper a img{
    width:100%;}
.swiper-pagination-bullet{ background:#BCBCBC; opacity:0.5; }
    .swiper-pagination-bullet-active {background:#FF9F00; opacity:0.8;}
        </style>
</head>

<body ontouchstart="return true;">

<!--头部-->
<header class="search" id="search">
  <div class="header">
    <h1><img src="{{ asset('myhome/img/logo.png') }}"></h1>
    <div class="search-box" id="search-box"><i class="icon-sousuo"></i>
      <input type="search" id="search-input" class="" placeholder="搜索商品" />
      <button id="search-cancel">取消</button>
      <button id="search-submit">搜索</button>
    </div>
    <!--<div class="head-delivery head-r" id="Delivery"><i class="icon-address"></i><span id="head-delivery">选择配送点</span></div>-->
  </div>
  <!--通知公告/客服电话-->
</header>

<!--搜索内容-->
<div class="search-content" id="search-content"> <i class="icon-font"></i> </div>

<!--内容区-->
<article class="main-container">
  <div class="swiper-container" id="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><A href=""><img src="{{ asset('myhome/img/Pic13.jpg') }}" /></A></div>
            <div class="swiper-slide"><A href=""><img src="{{ asset('myhome/img/Pic14.jpg') }}" /></A></div>
            <div class="swiper-slide"><A href=""><img src="{{ asset('myhome/img/Pic15.jpg') }}" /></A></div>
            <div class="swiper-slide"><A href=""><img src="{{ asset('myhome/img/Pic16.jpg') }}" /></A></div>
            <div class="swiper-slide"><A href=""><img src="{{ asset('myhome/img/Pic17.jpg') }}" /></A></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- 分类 -->

    <ul class="category"><!-- 分类图标为方形-->
        <li> <a href="#"> <img src="{{ asset('myhome/img/img05.jpg') }}">
                <p>美食</p>
            </a> </li>
        <li> <a href="#"> <img src="{{ asset('myhome/img/img06.jpg') }}">
                <p>酒店</p>
            </a> </li>
        <li> <a href="#"> <img src="{{ asset('myhome/img/img07.jpg') }}">
                <p>休闲娱乐</p>
            </a> </li>
        <li> <a href="#"> <img src="{{ asset('myhome/img/img08.jpg') }}">
                <p>电影</p>
            </a> </li>
        <li> <a href="#"> <img src="{{ asset('myhome/img/img09.jpg') }}">
                <p>服饰</p>
            </a> </li>
        <li> <a href="#"> <img src="{{ asset('myhome/img/img10.jpg') }}">
                <p>运动健身</p>
            </a> </li>
        <li> <a href="#"> <img src="{{ asset('myhome/img/img11.jpg') }}">
                <p>KTV</p>
            </a> </li>
        <li> <a href="#"> <!--<i class="icon-recom"></i>--><img src="{{ asset('myhome/img/img12.jpg') }}" />
                <p>商家分类</p>
            </a> </li>
    </ul>
    <div class="clearfix"></div>
    <!-- 分类end -->
    <div class="scred">
        <div class="LayerHeader line"><i class="icon-lipin"></i>&nbsp;主题特卖 <a href="" class="fright">全部<i class="icon-arrowright"></i></a></div>
        <div class="zhuti">
            <a class="order-product" href=""><img src="{{ asset('myhome/img/Pic25.jpg')}}" /></a>
            <a href="" class="order-product"><img src="{{ asset('myhome/img/Pic24.jpg')}}" /></a>
            <a href="" class="order-product"><img src="{{ asset('myhome/img/Pic23.jpg')}}" /></a>
        </div>
    </div>

    <div class="scred">
        <div class="LayerHeader line" style="border-bottom:1px solid #eee"><i class="icon-select"></i>&nbsp;品牌推荐 <a href="" class="fright">全部<i class="icon-arrowright"></i></a></div>
        <ul class="category" style=" margin-top:0"><!-- 分类图标为方形-->
            <li> <a href="#"> <img src="{{ asset('myhome/img/img05.jpg') }}">
                    <p>美食</p>
                </a> </li>
            <li> <a href="#"> <img src="{{ asset('myhome/img/img06.jpg') }}">
                    <p>酒店</p>
                </a> </li>
            <li> <a href="#"> <img src="{{ asset('myhome/img/img07.jpg') }}">
                    <p>休闲娱乐</p>
                </a> </li>
            <li> <a href="#"> <img src="{{ asset('myhome/img/img08.jpg') }}">
                    <p>电影</p>
                </a> </li>
            <li> <a href="#"> <img src="{{ asset('myhome/img/img09.jpg') }}">
                    <p>服饰</p>
                </a> </li>
            <li> <a href="#"> <img src="{{ asset('myhome/img/img10.jpg') }}">
                    <p>运动健身</p>
                </a> </li>
            <li> <a href="#"> <img src="{{ asset('myhome/img/img11.jpg') }}">
                    <p>KTV</p>
                </a> </li>
            <li> <a href="#"> <!--<i class="icon-recom"></i>--><img src="{{ asset('myhome/img/img12.jpg') }}" />
                    <p>商家分类</p>
                </a> </li>
        </ul>

    </div>

    <div class="scred">
        <div class="LayerHeader line"><i class="icon-stars"></i>&nbsp;当季热销商品 </div>
        <div class="cations">
            <div class="list">
                <a href="">
                    <div class="tu">
                        <img src="{{ asset('myhome/img/img12.jpg') }}">
                    </div>
                    <p class="tit">云南白药口服液10ml*3支</p>
                    <div>
                        <span class="price">￥12.00</span>
                        <button  class="cart"><i class="icon-cart"></i></button>
                    </div>
                </a>
            </div>
            <div class="list">
                <a href="">
                    <div class="tu">
                        <img src="{{ asset('myhome/img/img13.jpg') }}">
                    </div>
                    <p class="tit">云南白药口服液10ml*3支</p>
                    <div>
                        <span class="price">￥12.00</span>
                        <button  class="cart"><i class="icon-cart"></i></button>
                    </div>
                </a>
            </div>
            <div class="list">
                <a href="">
                    <div class="tu">
                        <img src="{{ asset('myhome/img/img14.jpg') }}">
                    </div>
                    <p class="tit">云南白药口服液10ml*3支</p>
                    <div>
                        <span class="price">￥12.00</span>
                        <button  class="cart"><i class="icon-cart"></i></button>
                    </div>
                </a>
            </div>
            <div class="list">
                <a href="">
                    <div class="tu">
                        <img src="{{ asset('myhome/img/img15.jpg') }}">
                    </div>
                    <p class="tit">云南白药口服液10ml*3支</p>
                    <div>
                        <span class="price">￥12.00</span>
                        <button  class="cart"><i class="icon-cart"></i></button>
                    </div>
                </a>
            </div>
            <div class="list">
                <a href="">
                    <div class="tu">
                        <img src="{{ asset('myhome/img/img16.jpg') }}">
                    </div>
                    <p class="tit">云南白药口服液10ml*3支</p>
                    <div>
                        <span class="price">￥12.00</span>
                        <button  class="cart"><i class="icon-cart"></i></button>
                    </div>
                </a>
            </div>
            <div class="list">
                <a href="">
                    <div class="tu">
                        <img src="{{ asset('myhome/img/img17.jpg') }}">
                    </div>
                    <p class="tit">云南白药口服液10ml*3支</p>
                    <div>
                        <span class="price">￥12.00</span>
                        <button  class="cart"><i class="icon-cart"></i></button>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div style="width:100%; height:1rem"></div>

</article>

<!--底部栏目-->
<menu> <a href="/home"><i class="icon-home"></i>首页</a> <a href="member-order.html"><i class="icon-lipin"></i>疗程购</a><a href=""><i class="icon-selectmore"></i>品牌优购</a> <a href="javascript:void(0)" id="orderCart"><i class="icon-cart"><span>2</span></i>购物车</a> <a href="{{ url('home/user') }}"><i class="icon-head"></i>我的</a> </menu>

<!--弹出圈圈loading-->
<div class="spinner" style="display: none;"><i></i></div>

<!--弹出loading-->
<div class="msg-loading" style="display: none;">
  <div class="msg-box">
    <div class="msg-load">
      <p>loading<span class="dotting"></span></p>
    </div>
    <div class="msg-top"></div>
    <div class="msg-left"></div>
    <div class="msg-right"></div>
  </div>
</div>
</body>
</html>
<script type="text/javascript" src="{{ asset('myhome/js/jquery-1.7.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('myhome/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('myhome/js/swiper.min.js') }}"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
            zoom:true,
        pagination: '.swiper-pagination',
		spaceBetween: 30,
        centeredSlides: true,
		autoplay: 2500,
        //paginationClickable: true,
        //nextButton: '.swiper-button-next',
        //prevButton: '.swiper-button-prev',
        spaceBetween: 30,
		//autoplayDisableOnInteraction:false
    });
    </script>