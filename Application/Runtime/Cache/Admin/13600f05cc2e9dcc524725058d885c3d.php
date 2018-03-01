<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

    <!--header部分-->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <title>Gentelella Alela! |</title>




    <!-- Bootstrap -->
    <link href="/yhq_blog/Template/Public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/yhq_blog/Template/Public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/yhq_blog/Template/Public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/yhq_blog/Template/Public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/yhq_blog/Template/Public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="/yhq_blog/Template/Public/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="/yhq_blog/Template/Public/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <!-- Datatables -->
    <link href="/yhq_blog/Template/Public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/yhq_blog/Template/Admin/Static/css/custom.min.css" rel="stylesheet">



<!--/header部分-->

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                    
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <!--左边菜单用户信息简要显示-->
<div class="profile_pic">
    <img src="/yhq_blog/Template/Admin/Static/img/img.jpg" alt="..." class="img-circle profile_img">
</div>
<div class="profile_info">
    <span>Welcome,</span>
    <h2>John Doe</h2>
</div>
<!--/左边菜单用户信息简要显示-->
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <!-- 左边菜单 -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> 文章 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo U('blog_post/index');?>">文章列表</a></li>
                    <li><a href="<?php echo U('blog_post/create');?>">文章添加</a></li>
                    <li><a href="<?php echo U('blog_category/index');?>">分类管理</a></li>
                    <li><a href="<?php echo U('blog_tag/index');?>">标签管理</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-home"></i> 评论 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo U('comment_site/index');?>">站点列表</a></li>
                    <li><a href="<?php echo U('comment_post/index');?>">文章列表</a></li>
                    <li><a href="<?php echo U('comment/index');?>">评论列表</a></li>
                    <li><a href="<?php echo U('comment_setting/index');?>">评论设置</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> 媒体 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">图片</a></li>
                    <li><a href="#">音频</a></li>
                    <li><a href="#">视频</a></li>
                    <li><a href="#">文件</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> 用户 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">

                </ul>
            </li>
            <li><a><i class="fa fa-table"></i> 直播 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">在线用户</a></li>
                    <li><a href="#">服务器状态</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-bar-chart-o"></i> 小说 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">书籍</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-clone"></i>影院 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">电影列表</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i>公众号 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">电影列表</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-windows"></i> 商城 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">订单列表</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-sitemap"></i> 系统设置 <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#">订单列表</a></li>
                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#level1_2">Level One</a>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
        </ul>
    </div>
</div>
<!-- /左边菜单 -->
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <!-- 菜单底部按钮 -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /菜单底部按钮 -->
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <!--顶部菜单-->
<div class="nav_menu">
    <nav>
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                   aria-expanded="false">
                    <img src="/yhq_blog/Template/Admin/Static/img/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                        <a href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
            </li>

            <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                   aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                        <a>
                            <span class="image"><img src="/yhq_blog/Template/Admin/Static/img/img.jpg" alt="Profile Image"/></span>
                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="image"><img src="/yhq_blog/Template/Admin/Static/img/img.jpg" alt="Profile Image"/></span>
                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="image"><img src="/yhq_blog/Template/Admin/Static/img/img.jpg" alt="Profile Image"/></span>
                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="image"><img src="/yhq_blog/Template/Admin/Static/img/img.jpg" alt="Profile Image"/></span>
                            <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                            <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                        </a>
                    </li>
                    <li>
                        <div class="text-center">
                            <a>
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!--/顶部菜单-->
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>站点</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>站点列表</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action"
                               style="width:100%">
                            <thead></thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">

                <!--站点-->
                <div class="x_panel">
                    <div class="x_title">
                        <h2>新增站点</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div id="site_add_form" class="form-horizontal form-label-left input_mask">

                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control" placeholder="站点名称" name="site_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="URL地址" class="form-control"
                                              name="site_url"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-success" onclick="site_Add()">添加</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--修改表单模态框-->
        <div class="modal fade site-modify-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">站点编辑</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal form-label-left input_mask">

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group" style="display: none">
                                <label>站点ID</label>
                                <input type="text" class="form-control " placeholder="站点ID" name="site_id" disabled>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label>APPID</label>
                                <input type="text" class="form-control " placeholder="站点ID" name="site_appid" disabled>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label>站点名称</label>
                                <input type="text" class="form-control " placeholder="站点名称" name="site_name">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label>URL地址</label>
                                <textarea placeholder="URL地址" class="form-control" name="site_url"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" onclick="site_Edit()">保存</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <!--网页底部-->
<div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
</div>
<div class="clearfix"></div>
<!--/网页底部-->
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/yhq_blog/Template/Public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/yhq_blog/Template/Public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/yhq_blog/Template/Public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/yhq_blog/Template/Public/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="/yhq_blog/Template/Public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- jQuery custom content scroller -->
<script src="/yhq_blog/Template/Public/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- iCheck -->
<script src="/yhq_blog/Template/Public/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/yhq_blog/Template/Public/vendors/moment/min/moment.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="/yhq_blog/Template/Public/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="/yhq_blog/Template/Public/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="/yhq_blog/Template/Public/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="/yhq_blog/Template/Public/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Autosize -->
<script src="/yhq_blog/Template/Public/vendors/autosize/dist/autosize.min.js"></script>
<!-- Datatables -->
<script src="/yhq_blog/Template/Public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- Custom Theme Scripts -->
<!--<script src="/yhq_blog/Template/Admin/Static/js/custom.min.js"></script>-->
<script src="/yhq_blog/Template/Admin/Static/js/custom.js"></script>


    <script type="text/javascript">

        // 初始化DATATABLE
        var site_table;
        function init_DataTables() {
            //是否引入datatable
            if (typeof ($.fn.DataTable) === 'undefined') {
                return;
            }
            //初始化文章列表
            site_table = $('#datatable-checkbox').dataTable({
                "sScrollX": "100%",
                "bScrollCollapse": true,
                bAutoWidth: true, //自适应宽度
                paging: true,
                pagingType: "full_numbers",
//            displayStart: 20,  //若开启分页且分页大小为10 则从第三页显示
//            lengthMenu: [5, 10, 25, 50],
                lengthMenu: [[5, 10, 25, -1], [5, 10, 25, "All"]],//第一个为值 第二个数组为显示
                processing: true,  //显示加载提示
                searching: true, //是否开启搜索
                serverSide: false,//开启服务器获取数据
                order: [[1, "desc"]], //默认第二列排序
                dom: 'frt<"datatable_foot_l_p"lp>',//i 长度 f 过滤 t 表 i 信息 p 分页 r 加载
                rowId: 'id', //每个tr都会带id 值为对应data中值 默认为DT_RowId
                ajax: { // 获取数据
                    url: "<?php echo U('comment_site/getList');?>",
                    type: "POST",
                    dataType: "json", //返回json数据,此时需要columns来对应每列的数据，若返回为数组，则按0 1 2 3数组下标填充至td
                    "error": function () {
                        alert("服务器未正常响应，请重试");
                    }
                },
                columns: [
                    {
                        data: null,
                        title: "<input type='checkbox' class='flat' name='checklist' id='post_check_all' />",
                        orderable: false
                    },
                    {title: "id", name: 'site_id', data: "site_id"},
                    {title: "站点名称", name: 'site_name', data: "site_name", defaultContent: "默认值"},
                    {title: "appid", name: 'site_appid', data: "site_appid"},
                    {title: "站点地址", name: 'site_url', data: "site_url"},
                    {title: "操作", name: 'action', data: null, class: "align-center"} // 自定义列
                ],
                "columnDefs": [
                    {
                        targets: 0,
                        orderable: false,
                        searchable: false,  //全局搜索时排除该列
                        width: 15,
                        render: function (data, type, row, meta) {
                            return '<input type="checkbox" name="post_check_list" value="' + row.site_id + '"  class="flat"/>'
                        }
                    },
                    {
                        targets: -1, //改写哪一列
                        orderable: false,  //禁止排序
                        searchable: false, //禁止搜索
                        width: 130,
                        render: function (data, type, row) {
                            return  "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='.site-modify-form-modal' onclick=\"site_OpenModifyForm(\'" + row.site_id + "\')\">编辑</button>" +
                                "   <button name='btn-del' class='btn btn-danger' onclick="+"site_Del(\'" + row.site_id + "\')"+">删除</button>";
                        }
                    },
                    {
                        targets: [2],
                        orderData: [2, 1]  //如果第二列进行排序，有相同数据则按照第三列顺序排列
                    }
                ],
                "language": { // 定义语言
                    "sProcessing": "加载中...",
                    "sLengthMenu": "每页显示 _MENU_ 条记录",
                    "sZeroRecords": "没有匹配的结果",
                    "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                    "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                    "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                    "sInfoPostFix": "",
                    "sSearch": "搜索:",
                    "sUrl": "",
                    "sEmptyTable": "表中数据为空",
                    "sLoadingRecords": "载入中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "上一页",
                        "sNext": "下一页",
                        "sLast": "末页"
                    },
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    }
                }
            });
            //渲染iCheck
            site_table.on('draw.dt', function () {
                //由于是后期渲染的，需要初始化下icheck,并绑定事件
                if ($("input.flat")[0]) {
                    $(document).ready(function () {
                        $('input.flat').iCheck({
                            checkboxClass: 'icheckbox_flat-green',
                            radioClass: 'iradio_flat-green'
                        });
                    });
                }
                // Table
                $(".bulk_action input[name='post_check_list']").on('ifChecked', function () {

                    $(this).parent().parent().parent().addClass('selected');

                    var checkCount = $(".bulk_action input[name='post_check_list']:checked").length;
                    var count = $(".bulk_action input[name='post_check_list']").length;
                    if (checkCount == count) {
                        $('.bulk_action input#post_check_all').iCheck('check');
                    } else {
                        $('.bulk_action input#post_check_all').iCheck('uncheck');
                    }

                });
                $(".bulk_action input[name='post_check_list']").on('ifUnchecked', function () {

                    $(this).parent().parent().parent().removeClass('selected');
                    $('.bulk_action input#post_check_all').iCheck('uncheck');

                });
                $('.bulk_action input#post_check_all').on('ifChecked', function () {

                    $(this).parent().parent().parent().addClass('selected');
                    $(".bulk_action input[name='post_check_list']").iCheck('check');

                });
                $('.bulk_action input#post_check_all').on('ifUnchecked', function () {

                    $(this).parent().parent().parent().removeClass('selected');
                    var checkCount = $(".bulk_action input[name='post_check_list']:checked").length;
                    var count = $(".bulk_action input[name='post_check_list']").length;
                    if (checkCount == count) {
                        $(".bulk_action input[name='post_check_list']").iCheck('uncheck');
                    } else {

                    }
                });
            });
        }
        // 初始化模态框
        function init_BootstrapModal() {
            $('.site-modify-form-modal').modal({
                keyboard: true,
                show: false
            })
            //关闭窗口时，将表单数据清空
            $('.site-modify-form-modal').on('hidden.bs.modal', function () {
                $(".site-modify-form-modal input[name='site_id']").val('');
                $(".site-modify-form-modal input[name='site_appid']").val('');
                $(".site-modify-form-modal input[name='site_name']").val('');
                $(".site-modify-form-modal textarea[name='site_url']").val('');
            })
        }


        // 增加
        function site_Add() {
            // console.log("add action");
            var jsonData = {
                "site_id": $("#site_add_form input[name='site_id']").val(),
                "site_name": $("#site_add_form input[name='site_name']").val(),
                "site_url": $("#site_add_form textarea[name='site_url']").val(),
            };
            $.ajax({
                type: 'post',
                url: "<?php echo U('comment_site/add');?>",
                data: jsonData,
                dataType: "json",
                success: function (msg) {
                    if (msg.status == true) {
                        alert("添加成功");
                        $("#site_add_form input[name='site_id']").val('');
                        $("#site_add_form input[name='site_name']").val('');
                        $("#site_add_form textarea[name='site_url']").val('');
                        site_table.api().ajax.reload(); //1.10之后
                    } else {
                        alert("添加失败");
                    }
                },
                error: function (error) {
                    console.log(error);

                }
            });
        }
        // 删除
        function site_Del(id) {
            if (confirm('你确定要删除该记录?')) {
                // 确定
                var jsonData = {
                    "site_id": id
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo U('comment_site/del');?>",
                    data: jsonData,
                    dataType: "json",
                    success: function (data) {
                        if (data.status == 1) {
                            alert("删除成功");
                            site_table.api().ajax.reload(null, false); //1.10之后
                        } else {
                            alert(data.msg);
                        }
                    },
                    error: function (error) {
                        alert("服务器异常");
                    }
                });
            } else {
                // 取消
                return;
            }

        }
        // 点击编辑时初始化表单数据
        function site_OpenModifyForm(site_id) {
            $.ajax({
                type: "post",
                url: "<?php echo U('comment_site/getItemById');?>",
                data: {'site_id': site_id},
                dataType: "json",
                success: function (data) {
                    // var msg = eval(msg);
//                    console.log(data);
                    if (data.status == 1) {
                        $(".site-modify-form-modal input[name='site_id']").val(data.data['site_id']);
                        $(".site-modify-form-modal input[name='site_appid']").val(data.data['site_appid']);
                        $(".site-modify-form-modal input[name='site_name']").val(data.data['site_name']);
                        $(".site-modify-form-modal textarea[name='site_url']").val(data.data['site_url']);
                    } else {
                        alert(data.msg);
                    }
                },
                error: function (error) {
                    alert("服务器异常");
                }
            });


        }
        // 编辑
        function site_Edit() {

            var jsonData = {
                "site_id": $(".site-modify-form-modal input[name='site_id']").val(),
                "site_appid": $(".site-modify-form-modal input[name='site_appid']").val(),
                "site_name": $(".site-modify-form-modal input[name='site_name']").val(),
                "site_url": $(".site-modify-form-modal textarea[name='site_url']").val(),
            };
            $.ajax({
                type: "post",
                url: "<?php echo U('comment_site/update');?>",
                data: jsonData,
                dataType: "json",
                success: function (data) {
                    if (data.status == 1) {
                        $('.site-modify-form-modal').modal('hide');
                        site_table.api().ajax.reload(null, false); //1.10之后
                    } else {
                        alert(data.msg);
                    }
                },
                error: function (error) {
                    alert("服务器异常");
                }
            });
        }


        $(document).ready(function () {

            init_DataTables();
            init_BootstrapModal();
        });

    </script>

</body>
</html>