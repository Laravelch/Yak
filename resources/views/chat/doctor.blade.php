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
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57x57-precomposed.png"/>
<!-- iPhone 和 iTouch，默认 57x57 像素，必须有 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png"/>
<!-- Retina iPhone 和 Retina iTouch，114x114 像素，可以没有，但推荐有 -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png"/>
<!-- Retina iPad，144x144 像素，可以没有，但推荐有 -->
<!-- iOS 图标 end -->

<!-- iOS 启动画面 begin -->
<link rel="apple-touch-startup-image" sizes="768x1004" href="img/App-ios-logo-152x152.png"/>
<!-- iPad 竖屏 768 x 1004（标准分辨率） -->
<link rel="apple-touch-startup-image" sizes="1536x2008" href="img/App-ios-logo-152x152.png"/>
<!-- iPad 竖屏 1536x2008（Retina） -->
<link rel="apple-touch-startup-image" sizes="1024x748" href="img/App-ios-logo-152x152.png"/>
<!-- iPad 横屏 1024x748（标准分辨率） -->
<link rel="apple-touch-startup-image" sizes="2048x1496" href="img/App-ios-logo-152x152.png"/>
<!-- iPad 横屏 2048x1496（Retina） -->

<link rel="apple-touch-startup-image" href="img/App-ios-logo-152x152.png"/>
<!-- iPhone/iPod Touch 竖屏 320x480 (标准分辨率) -->
<link rel="apple-touch-startup-image" sizes="640x960" href="img/App-ios-logo-152x152.png"/>
<!-- iPhone/iPod Touch 竖屏 640x960 (Retina) -->
<link rel="apple-touch-startup-image" sizes="640x1136" href="img/App-ios-logo-152x152.png"/>
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
<meta property="og:url" content="URL地址" />
<meta property="og:title" content="标题" />
<meta property="og:image" content="图片" />
<meta property="og:description" content="描述" />
<!-- sns 社交标签 end -->
<title>药师咨询</title>
<link rel="stylesheet" href=" {{ asset('myhome/css/common.css')}}" >
<link rel="stylesheet" href="{{ asset('myhome/css/font.css')}}">
<link rel="stylesheet" href="{{ asset('myhome/css/header.css')}}">
<link rel="stylesheet" href="{{ asset('myhome/css/footer.css')}}">
<link rel="stylesheet" href="{{ asset('css/doctor.css')}}">
<link rel="stylesheet" href="{{ asset('myhome/css/responsive.css')}}">
<script type="text/javascript">
function imgopen(num1)
{
	$('.popup').css('display','block');
	var div1;
	div1='#'+num1;
	//console.log(div1);
	$(div1).css('display','block');
}
function imgclose(num)
{
	var div2;
	$('.popup').css('display','none');
	//alert('aaa');
	div2='#'+num;
	$(div2).css('display','none');
}
</script>
</head>

<body ontouchstart="return true;">

	<!--头部-->
	{{--<header>--}}
		{{--<div class="header">--}}
			{{--<h1>药师咨询</h1>--}}
			{{--<a href="order.html" class="return"><i></i></a>--}}
		{{--</div>--}}
	{{--</header>--}}
	<!--内容区-->
	<article class="main-container add-product">
		<!--产品-->
		<div class="list-content cartlist order-Pro">
			<ul class="yaosh-list">
                @foreach ($list as $v)
				<li class="line">
                <div class="yaoshi-list">
                	<img class="head" src="{{asset('myhome/img/head01.jpg')}}" />
                    <a href="javascript:imgopen('yaoshi_{{$v->id}}')" class="zizhi yaoshi_01">资质查看</a>
                    <div class="zzfloat zizhi_1" id="yaoshi_{{$v->id}}">
                   		<img src="{{asset('myhome/img/'.$v->credimg) }}" />
                        <p><strong>资质名称</strong>：{{ $v->credname }}</p>
                        <p><strong>资质编号</strong>:{{ $v->crednum }}</p>
                        <p><strong>查询地址</strong>:http://www.sda.gov.cn/WS01/CL0001</p>
                        <button onClick="imgclose('yaoshi_{{$v->id}}')" class="">关闭</button>
                    </div>
                    <div class="popup"></div>
                    <div class="yaoshi-info">
                   
                        <p class="yaoshi-name">{{ $v->name }}&nbsp;&nbsp;<img src="{{asset('myhome/img/stars.png')  }}" class="star" /><img src="{{asset('myhome/img/stars.png')  }}" class="star" /><img src="{{asset('myhome/img/stars.png')  }}" class="star" /><img src="{{asset('myhome/img/stars.png')  }}" class="star" /><img src="{{asset('myhome/img/stars.png')  }}" class="star" /> </p>
                        <span class="jieda">解答：{{ $v->count }}次</span>
                        <span class="haoping">好评:{{ $v->good }}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="biaoqian">
                	<span>医药企业多年经验</span>
                    <span>用药精准</span>
                    
                    <span>医药企业多年经验</span><span>熟悉药理</span>
                </div>
					<a href="{{url('chat/send/'.$v->id)}}" class="zixunbtn">在线咨询{{session()->get('id')}}</a>
				</li>
                @endforeach
			</ul>
		</div>
		
	</article>
</body>
</html>
<script type="text/javascript" src="{{asset('myhome/js/jquery-1.7.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('myhome/js/swipe-min.js')}}"></script>
<script type="text/javascript" src="{{asset('myhome/js/common.js')}}"></script>
