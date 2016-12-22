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

<!--meta name="apple-itunes-app" content="app-id=myAppStoreID, affiliate-data=myAffiliateData, app-argument=myasset" -->
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
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57x57-precomposed.png"/>
<!-- iPhone 和 iTouch，默认 57x57 像素，必须有 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png"/>
<!-- Retina iPhone 和 Retina iTouch，114x114 像素，可以没有，但推荐有 -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png"/>
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
<meta name="msapplication-TileImage" content="icon.png"/>
<!-- Windows 8 磁贴图标 -->

<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml"/>
<!-- 添加 RSS 订阅 -->
<link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
<!-- 添加 favicon icon -->
<!-- sns 社交标签 begin -->
<!-- 参考微博API -->
<meta property="og:type" content="类型" />
<meta property="og:asset" content="asset地址" />
<meta property="og:title" content="标题" />
<meta property="og:image" content="图片" />
<meta property="og:description" content="描述" />
<!-- sns 社交标签 end -->
<title>我的资料</title>
<link rel="stylesheet" href="{{ asset('myhome/css/common.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/font.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('myhome/css/responsive.css') }}">
</head>

<body ontouchstart="return true;">
<form action='/home/user/userupdate/{{$list->user_id}}' method='post' enctype='multipart/form-data'>
	<!--头部-->
	<header>
		<div class="header">
			<h1>我的资料</h1>
			<a href="/home/user" class="return"><i></i></a>
			<button type="submit" class="head-r">保存</button>
		</div>
	</header>
	
	<!--内容区-->
	<article class="main-container">

			<input type='hidden' name='_token' value='{{ csrf_token() }}'>
			<input type="hidden" value="{{$list->photo}}" name="photo" >
		<div class="list list-title">
			<ul class="line">
				<li><i>手机号码：</i>{{ $list->username }}</li>
				<li><i>昵　　称：</i><input type="text" name="nickname" id="name" placeholder="填写您的昵称" value="{{ $list->nickname }}"></li>
				<li><i>性　　别：</i>
					<label><input type="radio" name="sex" id="radio" value="m" {{ ($list->sex == 'm')?"checked":'' }} />男</label>&nbsp;&nbsp;
					<label><input type="radio" name="sex" id="radio" value="w" {{ ($list->sex == 'w')?"checked":'' }} />女</label>&nbsp;&nbsp;
				</li>
				<li><i>年　　龄：</i><input type="datetime" name="age" id="name" placeholder="填写您的出生日期" value="{{ $list->age }}"></li>
				<li class="head"><i>我的头像：</i><img id="pic" src="{{ url('upload/user/'.$list->photo) }}"><input style="display: none" type="file" id="img" name="xphoto" ><button type="button" onclick="demo();"  >点击上传<br><font>(200x200像素)</font></button></li>
			</ul>
			<ul class="line">
				<li><i>推荐人：</i>123</li>
			</ul>
		</div>
		</form>
	</article>

</body>
</html>
<script type="text/javascript" src="{{ asset('myhome/js/jquery-1.7.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('myhome/js/swipe-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('myhome/js/common.js') }}"></script>
<script type="text/javascript">

        function demo(){
            $("#img").click();  //隐藏了input:file样式后，点击头像就可以本地上传
            $("#img").on("change",function(){
                var objUrl = getObjectURL(this.files[0]) ; //获取图片的路径，该路径不是图片在本地的路径
                if (objUrl) {
                    $("#pic").attr("src", objUrl) ; //将图片路径存入src中，显示出图片
                }
            });
        }


    //建立一個可存取到該file的url
    function getObjectURL(file) {
        var url = null ;
        if (window.createObjectURL!=undefined) { // basic
            url = window.createObjectURL(file) ;
        } else if (window.URL!=undefined) { // mozilla(firefox)
            url = window.URL.createObjectURL(file) ;
        } else if (window.webkitURL!=undefined) { // webkit or chrome
            url = window.webkitURL.createObjectURL(file) ;
        }
        return url ;
    }
</script>