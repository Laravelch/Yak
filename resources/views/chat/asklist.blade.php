<!DOCTYPE html>
<html class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <!-- 启用360浏览器的极速模式(webkit) -->
  <meta name="renderer" content="webkit">
  <!-- 避免IE使用兼容模式 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	<script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
  <!-- 适应移动端end -->
	<title>药剂师工作台</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
</head>
<body>
	<div id="user-b">
		<!--html5 nav-->
		
	    <div class="myorder-tab">
	    	<div class="myorder-nav">
		    	<ul id="tab_btn" class="coupon-list">
		    		<li class="pick">咨询列表</li>
		    		<li><span class="bar"></span>审核列表</li>
		    		<li><span class="bar"></span>个人设置</li>
		    	</ul>
		    	<div class="cl"></div>
		    </div>
		    <div class="myorder-content">
		    	<ul >
		    		<li class="mc-all cc-one tab_content show">
		    			<ul id="did">
							@foreach($list as $k=>$v)
		    				<li>
		    					<a href="{{ url('/chat/send/'.$v->sender_id) }}">
		    						<div class="mc-sum-box">
			    						<div class="myorder-sum fl"><img src="{{ url('/upload/user/'.$v->photo ) }}"><p class='tishi' style='display:none' >0</p></div>
				    					<div class="myorder-text">
				    						<h1><span class='tith1' id="name">{{ $v->nickname }} </span ><span class='tith2' id="time">{{ $v->created_at }}</span></h1>
				    						
				    						<div class="myorder-cost">
				    							<span id="content">{{ $v->content }}</span>

				    						</div>
				    					</div>
			    					</div>
			    					
		    					</a>
		    				</li>
							@endforeach
		    			</ul>
		    		</li>
		    		<li class="mc-all mc-two tab_content">
		    			<ul>
		    				<li>
		    					<div class="mc-sum-box">
		    						<div class="myorder-sum fl"><img src="images/myorder2.jpg"></div>
			    					<div class="myorder-text">
			    						<h1>优选越南青皮金煌芒果</h1>
			    						<h2>规格：4斤装</h2>
			    						<div class="myorder-cost">
			    							<span>数量:1</span>
			    							<span class="mc-t">￥49.00/件</span>
			    						</div>
			    					</div>
		    					</div>
		    					<div class="mc-sum-Am">
		    						共1件商品，免运费<span>实付：<span class="mc-t">￥49.00</span></span>
		    					</div>
		    					<h3>未付款</h3>
		    				</li>
		    			</ul>
		    		</li>
		    		<li class="mc-all mc-three tab_content">
		    			<ul>
		    				<li>
		    					<div class="mc-sum-box">
		    						<div class="myorder-sum fl"><img src="images/pay1.jpg"></div>
			    					<div class="myorder-text">
			    						<h1>越南进口白肉火龙果</h1>
			    						<h2>规格：2个装</h2>
			    						<div class="myorder-cost">
			    							<span>数量:1</span>
			    							<span class="mc-t">￥14.00/件</span>
			    						</div>
			    					</div>
		    					</div>
		    					<div class="mc-sum-Am">
		    						共1件商品，免运费<span>实付：<span class="mc-t">￥14.00</span></span>
		    					</div>
		    					<h3>已付款，已发货</h3>
		    				</li>
		    			</ul>
		    		</li>
		    	</ul>
		    </div>
	    </div>
	    <!--footer begin-->

	    <!--footer end-->
	</div>
	<script type="text/javascript">
    //TAB切换
    var tab_Btns_box=document.getElementById('tab_btn');
    var tab_Btns=tab_Btns_box.getElementsByTagName('li');
    var tab_contents=document.getElementsByClassName('tab_content');
    for(var i=0;i<tab_Btns.length;i++){
    tab_Btns[i].index=i;

    tab_Btns[i].onclick=function(){
     for(var i=0;i<tab_Btns.length;i++){
     if(i!==this.index){
     tab_Btns[i].classList.remove('pick')
     }
     }
     tab_Btns[this.index].className="pick";

     for(var j=0;j<tab_contents.length;j++){
     if(j!==this.index){
         tab_contents[j].classList.remove('show');
     }
         tab_contents[this.index].classList.add('show');
     }
    }
    }
    setInterval("dosel()",1000);
	var n=0;
	var leng="";
	var strr='';
	var style="style='display:none'"
    function getMyDate(str){
        var oDate = new Date(str),
            oYear = oDate.getFullYear(),
            oMonth = oDate.getMonth()+1,
            oDay = oDate.getDate(),
            oHour = oDate.getHours(),
            oMin = oDate.getMinutes(),
            oSen = oDate.getSeconds(),
            oTime = oYear +'-'+ getzf(oMonth) +'-'+ getzf(oDay) +' '+ getzf(oHour) +':'+ getzf(oMin) +':'+getzf(oSen);//最后拼接时间
        return oTime;
    }
    function getzf(num){
        if(parseInt(num) < 10){
            num = '0'+num;
        }
        return num;
    }
    function dosel()
	{
		$.ajax({
            url: '{{url("doctor/askinfo")}}',
            type: 'POST',
            dataType: 'json',
            cache: false,
            data: { _token: "{{ csrf_token() }}" },
			success:function(data){
                if(n==0){
                    n++;
                    leng=data.length;
                    for(var i=0;i<data.length;i++)
                    {
                        if(data[i].count==0){
                            $("#count"+i).css("display","none");
                        }else{
                           // $("#count"+i).attr("style='display:block'");
                            $("#count"+i).css("display","block");

                        }

                        //alert(style1);
                        var time=getMyDate(parseInt(data[i].time));
                        var str ="<li><a href='/chat/send/"+data[i].sender_id+" ' ><div class='mc-sum-box'><div class='myorder-sum fl'><img src='/upload/user/"+data[i].photo+"'><p class='tishi'  id='count"+i+"' >"+data[i].count+"</p></div><div class='myorder-text'><h1><span class='tith1' id='name'>"+data[i].nickname+"</span ><span class='tith2' id='time"+i+"'>"+time+"</span></h1><div class='myorder-cost'><span id='content"+i+"' >"+(data[i].content)+"</span></div></div></div></a></li>";
                        strr=strr+str;
                        var tip = $(strr);
                        $("#did").html(tip);
                        if(data[i].count==0){
                            $("#count"+i).css("display","none");
                        }else{
                            // $("#count"+i).attr("style='display:block'");
                            $("#count"+i).css("display","block");

                        }

                    }
				}else if(n>0 && data.length>leng){
                    if(data[adta.length-1].count==0){
                        $("#count"+i).css("display","none");
                    }else{
                        // $("#count"+i).attr("style='display:block'");
                        $("#count"+i).css("display","block");

                    }
                    	//alert(data[0].content);
                    	//alert(data[adta.length-1].content);
                        var time=getMyDate(parseInt(data[0].time));
                    	var str ="<li><a href='/chat/send/"+data[0].sender_id+" ' ><div class='mc-sum-box'><div class='myorder-sum fl'><img src='/upload/user/"+data[i].photo+"'><p class='tishi' "+style1+" id='count"+i+"' >"+data[0].count+"</p></div><div class='myorder-text'><h1><span class='tith1' id='name'>"+data[0].nickname+"</span ><span class='tith2' id='time"+i+"'>"+time+"</span></h1><div class='myorder-cost'><span id='content"+i+"' >"+(data[0].content)+"</span></div></div></div></a></li>";
                        //var str ="<li><a href= ><div class='mc-sum-box'><div class='myorder-sum fl'><img src= ></div><div class='myorder-text'><h1><span class='tith1' id='name'>"+data[data.length-1].nickname+"</span ><span class='tith2' id='time'>"+time+"</span></h1><div class='myorder-cost'><span id='content'>"+(data[data.length-1].content)+"</span></div></div></div></a></li>";
                        strr=str+strr;
                        var tip = $(strr);
                        $("#did").html(tip);
                        leng=data.length;

				}else{
				    //alert(1111);
                    for(var i=0;i<data.length;i++)
                    {
                        if(data[i].count==0){
                            $("#count"+i).css("display","none");
						}else{
                            $("#count"+i).css("display","block");
						}
                        var time=getMyDate(parseInt(data[i].time));
                        //alert(data[i].count);
                        $("#count"+i).html(data[i].count);
                        $("#content"+i).html(data[i].content);
                        $("#time"+i).html(time);
                    }
				}

            },
            error: function(data) {

            },
		});
    }

    </script>
</body>
</html>