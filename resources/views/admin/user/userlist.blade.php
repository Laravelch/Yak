﻿@extends('admin.Default')
@section('type')
    <link href="{{ asset('myadmin/css/plugins/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet">
@stop
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户信息： <small>所有用户信息</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_data_tables.html#">选项1</a>
                                </li>
                                <li><a href="table_data_tables.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ url('admin/user/userlist') }}" style="display: none" method="post" name="myform">
                            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                            <input type='hidden' name='_method' value='DELETE'>
                        </form>
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr >
                                <th >用户编号</th>
                                <th >用户头像</th>
                                <th >用户名</th>
                                <th >用户昵称</th>
                                <th >用户真实姓名</th>
                                <th >用户性别</th>
                                <th >用户年龄</th>
                                <th >用户手机</th>
                                <th >用户积分</th>
                                <th >用户状态</th>
                                <th >&nbsp;&nbsp;&nbsp;操&nbsp;&nbsp;&nbsp;作&nbsp;&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($list as $v)
                                <tr align="center">
                                    <td>{{$v->user_id}}</td>
                                    <td><img src="{{ url('upload/user/'.$v->photo) }}" width="30"height="30" alt="还没有头像"></td>
                                    <td>{{$v->username}}</td>
                                    <td>{{$v->nickname}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->sex == 'm'?'男':'女'}}</td>
                                    <td>{{$v->age}}</td>
                                    <td>{{$v->phone}}</td>
                                    <td>{{$v->integral}}</td>
                                    <td>
                                        @if ($v->status == 1)
                                            <a href="{{ url('admin/user/userlist/status/'.$v->user_id.'/'.$v->status) }}">正常</a>
                                        @else
                                            <a href="{{ url('admin/user/userlist/status/'.$v->user_id.'/'.$v->status) }}">冻结</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a onclick="doDel({{ $v->user_id }}, this)">删除</a> |
                                        <a href="/stu/{{$v->user_id}}/edit">修改</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Mainly scripts -->
@stop
@section('script')

    <script>




        function doDel(id,bn){

            if(confirm("你确定要删除吗？")){
                $.ajax({
                    url:'{{ url("admin/user/ajax/deluser") }}',
                    async:false,				//是否异步
                    type:'post',				//请求方式
                    data:{id:id, '_token': $('input[name=_token]').val()},				//发送的数据
                    dataType:'json',			//响应的数据类型
                    success:function(data)		//成功时回调函数
                    {
                        if(data == '删除用户成功!'){
                            $(bn).parent().parent().remove();
                        }else{
                            alert(data);
                        }

                    }
                });
            }
        }
        $(document).ready(function () {
            $('.dataTables-example').dataTable();

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function (sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function (value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"]);

        }
    </script>

@stop