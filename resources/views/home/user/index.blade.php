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
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=3,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
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
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57x57-precomposed.png') }}"/>
<!-- iPhone 和 iTouch，默认 57x57 像素，必须有 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png') }}"/>
<!-- Retina iPhone 和 Retina iTouch，114x114 像素，可以没有，但推荐有 -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png') }}"/>
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

<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml"/>
<!-- 添加 RSS 订阅 -->
<link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
<!-- 添加 favicon icon -->
<!-- sns 社交标签 begin -->
<!-- 参考微博API -->
<meta property="og:type" content="类型" />
<meta property="og:url" content="URL地址" />
<meta property="og:title" content="标题" />
<meta property="og:image" content="图片" />
<meta property="og:description" content="描述" />
<!-- sns 社交标签 end -->
<title>会员中心</title>
<link rel="stylesheet" href="{{ asset('myhome/css/common.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/font.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/responsive.css') }}">
</head>

<body ontouchstart="return true;">

	<!--内容区-->
	<article class="main-container">

		<div class="member-header" style="background-color:#E94343;">
			<button class="button" onclick="location.href='{{ url("home/user/") }}'"><span class="return"><i></i></span></button>
			<!--<button class="rbutton"></button><a class="setting">设置</a><a href="" class="icon-notice"></a>-->
			<div class="rbutton"><a href=""><i class="icon-review"></i></a>&nbsp;<a href=""><i class="icon-code"></i></a></div>

			@if(session()->has('homeuser'))
				<div class="memberhead"><img src="{{ url('upload/user/'.$list->photo) }}" alt=""><i class="icon-woman"></i></div>
				<p>{{ $list->nickname }}</p>
			@else
				<div class="memberhead"><img src="" alt=""><i class="icon-woman"></i></div>
				<p><a href="{{ url('home/user/login') }}">登录</a>&nbsp;|&nbsp;<a href="{{ url('home/user/register') }}">注册</a></p>
			@endif
			<div class="zhanghu"><a href="{{ url('home/user/userinfo') }}">账户管理</a></div>
			<div class="clearfix"></div>
			<ul>
				<li class="line-w"><b>0</b>待付款</li>
				<li class="line-w"><b>0</b>待发货</li>
				<li class="line-w"><b>0</b>待收货</li>
				<li class="line-w"><b>0</b>待评价</li>
				<li><b>0</b>已完成</li>
			</ul>

		</div>

		<div class="list">
			<ul class="line zixun">
				<li><a href="{{ url('chat/doctor') }}"><i class="icon-laoren"></i>药师咨询</a></li>
				<li ><a href=""><i class="icon-wechat"></i>在线客服</a></li>
			</ul>
			<ul class="line">
				<li onclick="location.href='member-order.html'"><i class="icon-allorders"></i>我的订单<span class="icon-arrowright"></span></li>
			</ul>
			<ul class="line">
				<li onclick="location.href='{{ url("home/user/dizhi") }}'"><i class="icon-address"></i>收货地址<span class="icon-arrowright"></span></li>
			</ul>
			<ul class="line">
				<li onclick="location.href='member-coupon.html'"><i class="icon-coupons"></i>优惠券<span class="icon-arrowright"></span></li>
				<li onclick="location.href='{{ url("home/user/pwd") }}'"><i class="icon-pwd"></i>修改密码<span class="icon-arrowright"></span></li>
			</ul>
			<ul class="line">
				<li><i class="icon-out"></i><a href="{{ url('/loginout/home') }}">退出</a></li>
			</ul>
		</div>
		<div style="margin:60px;"></div>
	</article>
	<menu> <a href="index.html"><i class="icon-home"></i>首页</a> <a href="member-order.html"><i class="icon-lipin"></i>疗程购</a><a href=""><i class="icon-selectmore"></i>品牌优购</a> <a href="javascript:void(0)" id="orderCart"><i class="icon-cart"><span>2</span></i>购物车</a> <a href="{{ url('home/user') }}"><i class="icon-head"></i>我的</a> </menu>
</body>
</html>
<script type="text/javascript" src="{{ asset('myhome/js/jquery-1.7.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('myhome/js/swipe-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('myhome/js/common.js') }}"></script>
