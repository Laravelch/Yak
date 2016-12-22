<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>H+ 后台主题UI框架 - 主页</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="{{ asset('myadmin/css/bootstrap.min.css?v=3.4.0') }}" rel="stylesheet">
    <link href="{{ asset('myadmin/font-awesome/css/font-awesome.css?v=4.3.0') }}" rel="stylesheet">

    <!-- Morris -->
    <link href="{{ asset('myadmin/css/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('myadmin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('myadmin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('myadmin/css/style.css?v=2.2.0') }}" rel="stylesheet">


    @yield('type')
</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">

                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('myadmin/img/profile_small.jpg') }}" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Beaut-zihan</strong>
                             </span>  <span class="text-muted text-xs block">超级管理员 <b class="caret"></b></span> </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="####">修改头像</a>
                            </li>
                            <li><a href="####">个人资料</a>
                            </li>
                            <li><a href="####">联系我们</a>
                            </li>
                            <li><a href="####">信箱</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="####">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        H+
                    </div>

                </li>
                <li class="active">
                    <a href="../CThtml/index.html"><i class="fa fa-th-large"></i> <span class="nav-label">主页</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="../CThtml/index_1.html">主页示例一</a>
                        </li>
                        <li><a href="../CThtml/index_2.html">主页示例二</a>
                        </li>
                        <li><a href="../CThtml/index_3.html">主页示例三</a>
                        </li>
                        <li><a href="../CThtml/index_4.html">主页示例四</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="####"><i class="fa fa-cutlery"></i> <span class="nav-label">用户管理 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('admin/user/userlist') }}">用户列表</a>
                        </li>
                        <li><a href="####">添加用户</a>
                        </li>
                        <li><a href="####">订单管理</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="####"><i class="fa fa-cutlery"></i> <span class="nav-label">商品管理 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="/admin/product">商品列表</a>
                        </li>
                        <li><a href="####">商品添加</a>
                        </li>
                        <li><a href="####">商品详情</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="####"><i class="fa fa-cutlery"></i> <span class="nav-label">类型管理 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="/admin/type">分类列表</a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            @yield('content')
        </div>


    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('myadmin/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('myadmin/js/bootstrap.min.js?v=3.4.0') }}"></script>
<script src="{{ asset('myadmin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('myadmin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>


<script src="{{ asset('myadmin/js/plugins/jeditable/jquery.jeditable.js') }}"></script>

<!-- Data Tables -->
<script src="{{ asset('myadmin/js/plugins/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('myadmin/js/plugins/dataTables/dataTables.bootstrap.js') }}"></script>


<!-- Flot -->
<script src="{{ asset('myadmin/js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('myadmin/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('myadmin/js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('myadmin/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('myadmin/js/plugins/flot/jquery.flot.pie.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('myadmin/js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('myadmin/js/demo/peity-demo.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('myadmin/js/hplus.js?v=2.2.0') }}"></script>
<script src="{{ asset('myadmin/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('myadmin/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- GITTER -->
<script src="{{ asset('myadmin/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

<!-- EayPIE -->
<script src="{{ asset('myadmin/js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('myadmin/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset('myadmin/js/demo/sparkline-demo.js') }}"></script>

{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--WinMove();--}}
        {{--setTimeout(function () {--}}
            {{--$.gritter.add({--}}
                {{--title: '您有2条未读信息',--}}
                {{--text: '请前往<a href="../CThtml/mailbox.html" class="text-warning">收件箱</a>查看今日任务',--}}
                {{--time: 10000--}}
            {{--});--}}
        {{--}, 2000);--}}


        {{--$('.chart').easyPieChart({--}}
            {{--barColor: '#f8ac59',--}}
            {{--//                scaleColor: false,--}}
            {{--scaleLength: 5,--}}
            {{--lineWidth: 4,--}}
            {{--size: 80--}}
        {{--});--}}

        {{--$('.chart2').easyPieChart({--}}
            {{--barColor: '#1c84c6',--}}
            {{--//                scaleColor: false,--}}
            {{--scaleLength: 5,--}}
            {{--lineWidth: 4,--}}
            {{--size: 80--}}
        {{--});--}}

        {{--var data1 = [--}}
            {{--[0, 4], [1, 8], [2, 5], [3, 10], [4, 4], [5, 16], [6, 5], [7, 11], [8, 6], [9, 11], [10, 30], [11, 10], [12, 13], [13, 4], [14, 3], [15, 3], [16, 6]--}}
        {{--];--}}
        {{--var data2 = [--}}
            {{--[0, 1], [1, 0], [2, 2], [3, 0], [4, 1], [5, 3], [6, 1], [7, 5], [8, 2], [9, 3], [10, 2], [11, 1], [12, 0], [13, 2], [14, 8], [15, 0], [16, 0]--}}
        {{--];--}}
        {{--$("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [--}}
            {{--data1, data2--}}
        {{--], {--}}
            {{--series: {--}}
                {{--lines: {--}}
                    {{--show: false,--}}
                    {{--fill: true--}}
                {{--},--}}
                {{--splines: {--}}
                    {{--show: true,--}}
                    {{--tension: 0.4,--}}
                    {{--lineWidth: 1,--}}
                    {{--fill: 0.4--}}
                {{--},--}}
                {{--points: {--}}
                    {{--radius: 0,--}}
                    {{--show: true--}}
                {{--},--}}
                {{--shadowSize: 2--}}
            {{--},--}}
            {{--grid: {--}}
                {{--hoverable: true,--}}
                {{--clickable: true,--}}
                {{--tickColor: "#d5d5d5",--}}
                {{--borderWidth: 1,--}}
                {{--color: '#d5d5d5'--}}
            {{--},--}}
            {{--colors: ["#1ab394", "#464f88"],--}}
            {{--xaxis: {},--}}
            {{--yaxis: {--}}
                {{--ticks: 4--}}
            {{--},--}}
            {{--tooltip: false--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
@yield('script')

</body>

</html>