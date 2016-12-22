@extends('admin.Default')
@section('content')
    <div class="left-main left-off">
        <div class="sidebar-fold"><span class="glyphicon glyphicon-menu-hamburger"></span></div>
        <div class="subNavBox">
            <div class="sBox">
                <div class="subNav sublist-down"><span class="title-icon glyphicon glyphicon-chevron-up"></span><span class="sublist-title">药品管理</span>
                </div>
                <ul class="navContent">
                    <li >
                        <div class="showtitle" style="width:100px;"><img src="{{ url('/myadmin/img/leftimg.png') }}" />商品列表</div>
                        <a href="/admin/type"><span class="sublist-icon glyphicon glyphicon-user"></span><span class="sub-title">药品列表</span></a> </li>
                    <li >
                        <div class="showtitle" style="width:100px;"><img src="{{ url('/myadmin/img/leftimg.png') }}" />添加商品</div>
                        <a href="/admin/type"><span class="sublist-icon glyphicon glyphicon-user"></span><span class="sub-title">添加药品</span></a> </li>

                </ul>
            </div>
            <div class="sBox">
                <div class="subNav sublist-down"><span class="title-icon glyphicon glyphicon-chevron-up"></span><span class="sublist-title">前台管理</span>
                </div>
                <ul class="navContent">
                    <li >
                        <div class="showtitle" style="width:100px;"><img src="{{ url('/myadmin/img/leftimg.png') }}" />商品列表</div>
                        <a href="####"><span class="sublist-icon glyphicon glyphicon-user"></span><span class="sub-title">板块列表</span></a> </li>
                    <li >
                        <div class="showtitle" style="width:100px;"><img src="{{ url('/myadmin/img/leftimg.png') }}" />添加板块</div>
                        <a href="####"><span class="sublist-icon glyphicon glyphicon-user"></span><span class="sub-title">添加药品</span></a> </li>

                </ul>
            </div>
            <div class="sBox">
                <div class="subNav sublist-down"><span class="title-icon glyphicon glyphicon-chevron-up"></span><span class="sublist-title">关于我们</span></div>
                <ul class="navContent">
                    <li>
                        <div class="showtitle" style="width:100px;"><img src="{{ url('/myadmin/img/leftimg.png') }}" />添加新闻</div>
                        <a href="#"><span class="sublist-icon glyphicon glyphicon-user"></span><span class="sub-title">添加新闻</span></a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="right-product right-off">
        <div class="container-fluid">

            <div class="message-manage info-center">

                <div class="manage-record">
                    <h6 class="margin-big-top">
                        <span class="pull-left manage-title border-bottom-main">发送记录</span>
                        <span class="pull-right record-fond">
						<div class="select-table pull-right">
							<div>
								<input readonly="readonly" value="全部站点" type="text">
								<span>
								<img src="{{ url('/myadmin/statics/console/images/icon_lit1.png') }}" width="10">
								</span>
							</div>
						</div>
						<span class="pull-right margin-small-top">按站点查找：</span>
						</span>

                    </h6>
                    <div class="clearfix"></div>
                    <div class="table-margin">
                        <table class="table table-bordered table-header">
                            <thead>
                            <tr>
                                <td class="w60">发送内容</td>
                                <td class="w10">发送时间</td>
                                <td class="w10">使用站点</td>
                                <td class="w10">条数</td>
                                <td class="w10">状态</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>23</td>
                                <td>23</td>
                                <td>23</td>
                                <td>23</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <div class="show-page padding-big-right hidden">
                <div class="page">
                </div>
            </div>


        </div>
    </div>
@stop