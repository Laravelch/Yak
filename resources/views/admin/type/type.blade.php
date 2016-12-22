﻿@extends('admin.Default')
@section('type')
    <link href="{{ asset('myadmin/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('myadmin/css/plugins/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet">
@stop
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><a data-toggle="modal" class="btn-primary" href="#modal-form-one">添加顶级分类</a></h5>
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

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>分类名</th>
                                <th>等级</th>
                                <th>所属</th>

                                <th>操作</th>

                            </tr>
                            </thead>
                            <tbody id="tbody">
                            @foreach($list as $k=>$v)
                                <tr class="gradeX" id="{{ $k+1 }}">
                                    <td>{{ $v['id'] }}</td>
                                    <td>{{ $v['name'] }}</td>
                                    <td>{{ $v['path'] }}
                                    </td>
                                    <td>{{ $v['pname'] }}</td>
                                    <td class="center">
                                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form">添加子版块</a>
                                        <a  class="btn btn-primary" onclick="delType(this)">删除</a></td>


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
    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <button class="close"
                                    data-dismiss="modal">&times;
                            </button>
                            <h3 class="m-t-none m-b">添加子分类</h3>


                            <div class="form-group">
                                <label>父类：</label>
                                <input type="text" placeholder="" disabled class="form-control">
                            </div>
                            <div class="form-group">
                                <label>子类：</label>
                                <input type="text" placeholder="子分类名" class="form-control">
                            </div>
                            <div>

                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"
                                        onclick="suSon()" ><strong>提交</strong>
                                </button>

                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-form-one" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <button class="close"
                                    data-dismiss="modal">&times;
                            </button>
                            <h3 class="m-t-none m-b">添加顶级分类</h3>

                            <div class="form-group">
                                <label>顶级：</label>
                                <input type="text" placeholder="顶级分类名" class="form-control" id="sub-top">
                            </div>
                            <div>

                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"
                                        onclick="subTop()"><strong>提交</strong>
                                </button>

                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <!-- iCheck -->
    <script src="{{ asset('myadmin/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
        function subTop() {
            var name = $('#sub-top').val();

            $.ajax({
                url: '{{url("admin/type/add")}}',
                type: 'POST',
                dataType: 'json',
                cache: false,
                data: {_token: "{{ csrf_token() }}", name: name, type_id: 0, path: '0,'},
                success: function (data) {
                    var tr =  '<tr class="gradeX" id=""><td>'+data[0].name+'</td><td>'+data[0].path+'</td><td>'+data[0].pname+'</td><td class="center"><a data-toggle="modal" class="btn btn-primary" href="#modal-form">添加子版块</a></td></tr>';
                    alert(tr);
                    $('#tbody').append(tr);
                    $('#modal-form-one').modal('hide');

                },
                error: function (data) {

                },
            });
        }
        function subSon() {
            var name = $('#sub-top').val();

            $.ajax({
                url: '{{url("admin/type/add")}}',
                type: 'POST',
                dataType: 'json',
                cache: false,
                data: {_token: "{{ csrf_token() }}", name: name, type_id: 0, path: '0,'},
                success: function (data) {

                    alert(data);
                    $('#modal-form-one').modal('hide');

                },
                error: function (data) {

                },
            });
        }
        function delType(obj) {
            var id = $(obj).parentsUntil('#tbody').children('td').eq(0).html();
            alert(val);
            $.ajax({
                url: '{{url("admin/type/del")}}',
                type: 'POST',
                dataType: 'json',
                cache: false,
                data: {_token: "{{ csrf_token() }}", id: id},
                success: function (data) {

                    alert(data);
                    $('#modal-form-one').modal('hide');

                },
                error: function (data) {

                },
            });
        }
    </script>
    <script>
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