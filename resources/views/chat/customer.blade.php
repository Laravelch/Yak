<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>微客服</title>
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--<meta name="format-detection" content="telephone = no" />-->
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="微客服" />
    <meta name="msapplication-TileColor" content="#090a0a">
    <link rel="stylesheet" href="{{ asset('css/css_style.css') }}">
    <script type="text/javascript" src="{{ asset('js/zepto.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
</head>
<body class="grayBy">


    <div class="customer_box" id="did" style="margin-bottom:30px;">
        <div id="kk1"></div>
    </div>
    <div class="send_fixed">
        <span class="face_icon"></span>
            <input id="Text1" type="text" name="content" class="send_input"/>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input id="Button1" type="button" onclick="receive()" value="发送" class="send_btn"  />
    </div>
    <script type="text/javascript">
        setInterval("dosend()",600);
       var content = $('input[name=content]').val();
       var scl=document.body;
        var n=0; //记录Ajax的访问次数；
        var leng=0; //记录请求数据的长度；
        var did=$(document).scrollTop();
        var times=[];
        function dosend(){
            n++;
            if(n<2){
                $.ajax({
                    url: '{{url('chat/send/echo')}}',
                    type: 'POST',
                    dataType: 'json',
                    cache: false,
                    data: { _token: "{{ csrf_token() }}",rid:"{{$rid}}" },
                    success: function(data) {
                        var strrr="<div class='times'><span class='timess'>"+data[0].created_at+"</span></div>";
                        var tipss = $(strrr);
                        $("#did").append(tipss);
                        for(var i=0;i<data.length;i++) {
                            var strr = "<div class='times' ><span class='timess'>"+data[i].created_at+"</span><div>";
                            var tips = $(strr);
                            var date = data[i].created_at;
                            date = date.replace(/-/g,'/');
                            times[i] = new Date(date).getTime();
                            if(times[i]-times[i-1]>60000){
                                $("#did").append(tips);
                            }
                            if(data[i].sender_id =="{{$sid}}" ){
                                var str="<div class='ask_box'> <i class='pic'><img src='{{ asset("myhome/img/mpic1.jpg")}}' /></i> <p>"+ data[i].content  +"</p> </div> ";
                                var tip = $(str);
                                $("#did").append(tip);
                            }else{
                                var str="<div class='answer_box'> <i class='pic'><img src='{{ asset("myhome/img/mpic2.jpg")}}'/></i> <p>"+ data[i].content +"</p> </div> ";
                                var tip = $(str);
                                $("#did").append(tip);
                            }
                        }
                        scl.scrollTop=scl.scrollHeight;
                       // document.documentElement.scrollTop=document.documentElement.scrollHeight;
                        leng=data.length;
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    }
                });
            }else {
                $.ajax({
                    url: '{{url('chat/send/echo')}}',
                    type: 'POST',
                    dataType: 'json',
                    cache: false,
                    data: {_token: "{{ csrf_token() }}",rid:"{{$rid}}"},
                    success: function (data) {
                        var strr = "<div class='times' ><span class='timess'>"+data[data.length-1].created_at+"</span><div>";
                        var tips = $(strr);
                        var date = data[data.length-1].created_at;
                        date = date.replace(/-/g,'/');
                        times[data.length] = new Date(date).getTime();
                        //alert(leng)
                        if(times[data.length]-times[leng]>60000){
                            $("#did").append(tips);
                        }
                        if (data.length > leng) {
                            if(data[data.length-1].sender_id =="{{$sid}}" ){
                                var str="<div class='ask_box'> <i class='pic'><img src='{{ asset("myhome/img/mpic1.jpg")}}' /></i> <p>"+ data[data.length-1].content +"</p> </div> ";
                                var tip = $(str);
                                $("#did").append(tip);
                            }else{
                                var str="<div class='answer_box'> <i class='pic'><img src='{{ asset("myhome/img/mpic2.jpg")}}'/></i> <p>"+ data[data.length-1].content +"</p> </div> ";
                                var tip = $(str);
                                $("#did").append(tip);
                            }
                            var m=document.body.scrollTop;
                            scl.scrollTop=scl.scrollHeight;
                            //document.documentElement.scrollTop=document.documentElement.scrollHeight;
                            leng=data.length;

                        }
                    },
                    error: function (xhr, status, error) {
                        console.log(xhr);
                        console.log(status);
                        console.log(error);
                    }
                });
            }
        }

      // console.log(content);
        function receive() {

            $.ajax({
                url: '{{url('chat/receive')}}',
                type: 'POST',
                dataType: 'json',
                cache: false,
                data: { _token: "{{ csrf_token() }}", receiver_id: "{{ $rid }}", sender_id: "{{ $sid }}", content: $('input[name=content]').val(),},
                success: function(data) {
                    //alert(data[data.length-1].created_at);

                },
                error: function(data) {
                    if(data.id){

                    }else{
                        var str="<div class='ask_box'><img src='{{ asset("myhome/img/warning-icon.png")}}' width='23px'> <i class='pic'><img src='{{ asset("myhome/img/mpic1.jpg")}}'/></i> <p>"+a+"</p> </div> ";
                        var tip = $(str);
                        $("#did").append(tip);
                        var m=document.body.scrollTop;
                        scl.scrollTop=scl.scrollHeight;
                    }
                },

            });
            $('#Text1').val("");
        }
       //alert(document.body.scrollTop);
    </script>
</body>
</html>
