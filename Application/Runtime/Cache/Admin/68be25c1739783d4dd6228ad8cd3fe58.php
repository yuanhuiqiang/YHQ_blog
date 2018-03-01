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
                <h3>评论系统
                    <small></small>
                </h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="搜索...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>


        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>评论列表</h2>
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
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" role="tab"
                                                                          data-toggle="tab" aria-expanded="true">搜索</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" data-toggle="tab"
                                                                    onclick="comment_ShowActions()"
                                                                    aria-expanded="false">操作</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1">
                                    <row class="form-inline">
                                            <div class="form-group">
                                                <label class="control-label">时间段</label>
                                                <div id="reportrange_right" class="form-control"
                                                     style="min-width: 250px;background: #fff; cursor: pointer; padding: 5px 10px; margin-right:10px; border: 1px solid #ccc">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="form-group" style="padding:  0px 5px 10px 0px">
                                                <label class="control-label">作者</label>
                                                <input type="text" class="form-control" placeholder="作者"
                                                       name="comment_author_name">
                                            </div>
                                            <div class="form-group" style="padding:  0px 5px 10px 0px">
                                                <label class="control-label">评论ID</label>
                                                <input type="text" class="form-control" placeholder="评论ID"
                                                       name="comment_id">
                                            </div>
                                            <div class="form-group" style="padding:  0px 5px 10px 0px">
                                                <label class="control-label">内容</label>
                                                <input type="text" class="form-control" placeholder="内容"
                                                       name="comment_content">
                                            </div>
                                        <!--站点-->
                                        <div class="form-group" style="padding:  0px 5px 10px 0px">
                                            <label class="control-label">站点</label>
                                            <select class="form-control" data-live-search="true"
                                                    name="site_id">
                                                <option value="-1">全部</option>
                                            </select>
                                        </div>
                                        <!--文章SID-->
                                        <div class="form-group" style="padding:  0px 5px 10px 0px">
                                            <label class="control-label">文章SID</label>
                                            <input type="text" class="form-control" placeholder="文章SID"
                                                   name="cp_source_id">
                                        </div>
                                        <!--评论状态-->
                                        <div class="form-group" style="padding:  0px 5px 10px 0px">
                                            <label class="control-label">评论状态</label>
                                            <select class="form-control" data-live-search="true"
                                                    name="comment_status">
                                                <!--<option value="-1">全部</option>-->
                                                <option value="0">已审核/待审核</option>
                                                <option value="1">已审核</option>
                                                <option value="2">待审核</option>
                                                <option value="3">垃圾评论</option>
                                                <option value="4">回收站</option>
                                            </select>
                                        </div>
                                        <!--按钮-->
                                        <div class="form-group" style="padding:  0px 5px 10px 0px">
                                            <button id="search_reset_btn" onclick="comment_SearchReset()"
                                                    style="margin-bottom: 0px"
                                                    class="btn btn-primary">重置
                                            </button>
                                            <button id="search_submit_btn" type="submit" style="margin-bottom: 0px"
                                                    onclick="comment_SearchSubmit()" class="btn btn-success">
                                                搜索
                                            </button>
                                        </div>

                                    </row>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2">
                                    <row class="form-inline">
                                        <div style="padding:10px;overflow: auto">
                                            <div class="form-group" id="actions">
                                                <!--<button type="button" onclick="comment_MultiDel()" class="btn btn-primary">批量驳回</button>-->
                                            </div>
                                        </div>
                                    </row>
                                </div>
                            </div>
                        </div>
                        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action"
                               style="width:100%">
                            <thead></thead>
                            <tbody></tbody>
                        </table>

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


    <script>

        /* DATERANGEPICKER */
        function init_DaterangepickerRight() {

            if (typeof ($.fn.daterangepicker) === 'undefined') {
                return;
            }
            console.log('init_DaterangepickerRight');

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange_right span').html(start.format('YYYY-M-D') + ' 至 ' + end.format('YYYY-M-D'));
            };

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',   //最小时间
                maxDate: '12/31/2020',  //最大时间
                dateLimit: {
                    days: 60
                }, //起止时间的最大间隔
                showDropdowns: true,
                showWeekNumbers: true,  //是否显示第几周
                timePicker: false,      //是否显示小时和分钟
                timePickerIncrement: 1, //时间的增量，单位为分钟
                timePicker12Hour: true, //是否使用12小时制来显示时间
                ranges: {
                    '今日': [moment(), moment()],
                    '昨日': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '最近7日': [moment().subtract(6, 'days'), moment()],
                    '最近30日': [moment().subtract(29, 'days'), moment()],
                    '本月': [moment().startOf('month'), moment().endOf('month')],
                    '上个月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',  //日期选择框的弹出位置
                buttonClasses: ['btn btn-default'],  // 按钮 class
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY', //控件中from和to 显示的日期格式
                separator: ' to ',
                locale: {
                    applyLabel: '确定',
                    cancelLabel: '取消',
                    fromLabel: '起始时间',
                    toLabel: '结束时间',
                    customRangeLabel: '自定义',
                    daysOfWeek: ['日', '一', '二', '三', '四', '五', '六'],
                    monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
                    firstDay: 1,
                    weekLabel: '周数' //一年第几周
                }
            };

//        $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange_right span').html("");

            $('#reportrange_right').daterangepicker(optionSet1, cb);

            $('#reportrange_right').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange_right').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange_right').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange_right').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });

            $('#options1').click(function () {
                $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
            });

            $('#options2').click(function () {
                $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
            });

            $('#destroy').click(function () {
                $('#reportrange_right').data('daterangepicker').remove();
            });

        }

        /* DATATABLE */
        var comments_table;
        function init_DataTables() {
            //是否引入datatable
            if (typeof ($.fn.DataTable) === 'undefined') {
                return;
            }
            //初始化文章列表
            comments_table = $('#datatable-checkbox').dataTable({
                //三个配置加起来可现实滚动条
                sScrollXInner: "110%",
                sScrollX: "100%",
                bScrollCollapse: true,
                bAutoWidth: true, //自适应宽度

                paging: true,
                pagingType: "full_numbers",
                lengthMenu: [[5, 10, 25, -1], [5, 10, 25, "All"]],//第一个为值 第二个数组为显示
                processing: true,  //显示加载提示
                searching: true, //是否开启搜索
                serverSide: true,//开启服务器获取数据
                order: [[1, "desc"]], //默认第二列排序
                dom: 'rt<"datatable_foot_l_p"lp>',//i 长度 f 过滤 t 表 i 信息 p 分页 r 加载
                rowId: 'id', //每个tr都会带id 值为对应data中值 默认为DT_RowId
                ajax: { // 获取数据
                    url: "<?php echo U('comment/getList');?>",
                    type: "POST",
                    dataType: "json", //返回json数据,此时需要columns来对应每列的数据，若返回为数组，则按0 1 2 3数组下标填充至td
                    data: function (d) {
                        var comment_status = $("#tab_content1  select[name='comment_status']").val();
                        d.columns[12].search.value = comment_status;
                    },
                    "error": function () {
                        alert("服务器未正常响应，请重试");
                    }
                },
                columns: [ //定义列数据来源 title表示th显示内容   还有个"DT_RowId":"a"属性，添加后每个tr都会有id=a属性
                    /*0*/{
                        data: null,
                        title: "<input type='checkbox' class='flat' name='checklist' id='comment_check_all' />",
                        orderable: false
                    },
                    /*1*/{title: "评论ID", name: 'comment_id', data: "comment_id", width: 200},       //title是表头  name是请求时的键名  data是表格显示的数据
                    /*2*/{title: "作者", name: 'comment_author_name', data: "comment_author_name", defaultContent: "默认值"},
                    /*3*/{title: "作者IP", name: 'comment_author_ip', data: "comment_author_ip", defaultContent: "默认值"},
                    /*4*/{
                        title: "作者邮箱",
                        name: 'comment_author_email',
                        data: "comment_author_email",
                        defaultContent: "默认值"
                    },
                    /*5*/{title: "作者主页", name: 'comment_author_url', data: "comment_author_url", defaultContent: "默认值"},
                    /*6*/{title: "评论内容", name: 'comment_content', data: "comment_content", defaultContent: "默认值"},
                    /*7*/{
                        title: "发布于",
                        name: 'site_name',
                        data: "site_name",
                        defaultContent: "默认值"
                    },
                    /*8*/{title: "所属SID", name: 'cp_source_id', data: "cp_source_id"},
                    /*9*/{title: "评论日期", name: 'comment_date', data: "comment_date"},
                    /*10*/{title: "点赞统计", name: 'comment_spcount', data: "comment_spcount"},
                    /*11*/{title: "差评统计", name: 'comment_opcount', data: "comment_opcount"},
                    /*12*/{title: "评论状态", name: 'comment_status', data: "comment_status"},
                    /*13*/{title: "站点ID", name: 'site_id', data: "site_id"},

                    /*-1*/{title: "动作", name: 'action', data: null, class: "align-center"} // 自定义列
                ],
                "columnDefs": [ //自定义列
                    {
                        targets: 0,
                        orderable: false,
                        searchable: false,  //全局搜索时排除该列
                        width: 15,
                        render: function (data, type, row, meta) {
                            return '<input type="checkbox" name="comment_check_list" value="' + row.comment_id + '"  class="flat"/>'
                        }
                    },
                    {
                        targets: -1, //改写哪一列
                        width: 750,
                        render: function (data, type, row) {
                            return "<button class='btn btn-info' onclick='comment_Edit(" + row.comment_id + ")'>修改</button>" +
                                "<button class='btn btn-info' onclick='comment_Edit(" + row.comment_id + ")'>查看</button>";
                        }
                    },
                    {
                        targets: 2,
                        width: 270,
                        render: function (data, type, row) {
                            return "<strong>" + row.comment_author_name + "</strong><br>" +
                                "<a href='" + row.comment_author_url + "'>" + row.comment_author_url + "</a><br>" +
                                "<a href='mailto:" + row.comment_author_email + "'>" + row.comment_author_email + "</a><br>" +
                                "<a href='" + row.comment_author_ip + "'>" + row.comment_author_ip + "</a>"
                        }
                    },
                    {
                        targets: 7,
                        width: 270,
                        render: function (data, type, row) {
                            return "<a href='javascript:void(0)'><strong>站点：" + row.site_name + "</strong></a><br>" +
                                "<a href='javascript:void(0)'>文章SID：" + row.cp_source_id + "</a><br>" +
                                "<a href='javascript:void(0);' onclick=''>共计评论："+row.comment_count+"条</a><br>"
                        }
                    },
                    {
                        targets: [3, 4, 5, 8,13],
                        visible: false //隐藏列

                    },
                    {
                        targets: [6],
                        width: 600
                    },
                    {
                        targets: [7, 8, 9, 10, 11, 12,13],
                        width: 450
                    },
                    {
                        targets: 12, //改写哪一列
                        width: 800,
                        render: function (data, type, row) {
                            switch (row.comment_status) {
                                case '1':
                                    return "已审核";
                                case '2':
                                    return "待审核";
                                case '3':
                                    return "垃圾评论";
                                case '4':
                                    return "回收站";
                            }
                        }
                    },
                    {
                        targets: -1,
                        orderable: false,  //禁止排序
                        searchable: false //禁止搜索
//                        visible: false //隐藏列
                    },
                    {
                        targets: [1],
                        orderData: [1, 2]  //如果第二列进行排序，有相同数据则按照第三列顺序排列
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
                },
                "createdRow": function (row, data, index) { //行回调函数
//                    if (data.teacher_id % 2 == 0) {
//                        $('td', row).eq(0).css({"color": "#00A8FF", "font-weight": "bold"});
//                    }
                }

            });
            //iCheck
            comments_table.on('draw.dt', function () {
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
                $(".bulk_action input[name='comment_check_list']").on('ifChecked', function () {

                    $(this).parent().parent().parent().addClass('selected');

                    var checkCount = $(".bulk_action input[name='comment_check_list']:checked").length;
                    var count = $(".bulk_action input[name='comment_check_list']").length;
                    if (checkCount == count) {
                        $('.bulk_action input#comment_check_all').iCheck('check');
                    } else {
                        $('.bulk_action input#comment_check_all').iCheck('uncheck');
                    }

                });
                $(".bulk_action input[name='comment_check_list']").on('ifUnchecked', function () {

                    $(this).parent().parent().parent().removeClass('selected');
                    $('.bulk_action input#comment_check_all').iCheck('uncheck');

                });
                $('.bulk_action input#comment_check_all').on('ifChecked', function () {

                    $(this).parent().parent().parent().addClass('selected');
                    $(".bulk_action input[name='comment_check_list']").iCheck('check');

                });
                $('.bulk_action input#comment_check_all').on('ifUnchecked', function () {

                    $(this).parent().parent().parent().removeClass('selected');
                    var checkCount = $(".bulk_action input[name='comment_check_list']:checked").length;
                    var count = $(".bulk_action input[name='comment_check_list']").length;
                    if (checkCount == count) {
                        $(".bulk_action input[name='comment_check_list']").iCheck('uncheck');
                    } else {

                    }
                });
            });
        }

        /*根据表格搜索条件中的评论状态 显示合适的操作按钮*/
        function comment_ShowActions() {
            switch (comments_table.api().column(12).search()) {
                case ''://状态为全部
                case '0':
                    $('#actions').html("" +
                        "<button type='button' class='btn btn-primary' onclick=\"comment_ChangeStatus('approve')\">批量批准</button>" +
                        "<button type='button' onclick=\"comment_ChangeStatus('unapprove')\" class='btn btn-primary'>批量驳回</button>" +
                        "<button type='button' onclick=\"comment_ChangeStatus('markAsSpam')\" class='btn btn-primary'>批量标记垃圾评论</button>" +
                        "<button type='button' onclick=\"comment_ChangeStatus('moveToTrash')\" class='btn btn-primary'>批量移至回收站</button>");
                    break;
                case '1'://状态为待审核
                    $('#actions').html("" +
                        "<button type='button' class='btn btn-primary' onclick=\"comment_ChangeStatus('approve')\">批量批准</button>" +
                        "<button type='button' onclick=\"comment_ChangeStatus('markAsSpam')\" class='btn btn-primary'>批量标记垃圾评论</button>" +
                        "<button type='button' onclick=\"comment_ChangeStatus('moveToTrash')\" class='btn btn-primary'>批量移至回收站</button>");
                    break;
                case '2'://状态为已审核
                    $('#actions').html("" +
                        "<button type='button' onclick=\"comment_ChangeStatus('unapprove')\" class='btn btn-primary'>批量驳回</button>" +
                        "<button type='button' onclick=\"comment_ChangeStatus('markAsSpam')\" class='btn btn-primary'>批量标记垃圾评论</button>" +
                        "<button type='button' onclick=\"comment_ChangeStatus('moveToTrash')\" class='btn btn-primary'>批量移至回收站</button>")
                    break;
                case '3'://状态为垃圾评论
                    $('#actions').html("" +
                        "<button type='button' onclick=\"comment_ChangeStatus('notSpam')\" class='btn btn-primary'>不是记垃圾评论</button>" +
                        "<button type='button' class='btn btn-primary' onclick=\"comment_ChangeStatus('delete')\">永久删除</button>");

                    break;
                case '4'://状态为回收站
                    $('#actions').html("" +
                        "<button type='button' onclick=\"comment_MarkAsSpam('markAsSpam')\" class='btn btn-primary'>批量标记垃圾评论</button>" +
                        "<button type='button' onclick=\"comment_Restore('restore')\" class='btn btn-primary'>还原</button>" +
                        "<button type='button' class='btn btn-primary' onclick=\"comment_Delete('delete')\">永久删除</button>");
                    break;
            }
        }
        /*批量批准*/
        function comment_ChangeStatus(status) {
            var comment_id = [];
            $(".bulk_action input[name='comment_check_list']:checked").each(function () {
                comment_id.push(this.value);
            });

            $.ajax({
                type: "post",
                url: "<?php echo U('comment/changestatus');?>",
                data: {
                    status: status,
                    comment_id: comment_id
                },
                dataType: "json",
                success: function (data) {
                    if (data.status == 1) {
                        alert(data.msg);
                    } else {
                        alert(data.msg);
                    }
                },
                error: function (error) {
                    alert("服务器异常");
                }
            });
        }

        /* 文章搜索表单提交 */
        function comment_SearchSubmit() {

            var time_range = $('#reportrange_right span').html();
            var comment_author_name = $("#tab_content1  input[name='comment_author_name']").val();
            var comment_content = $("#tab_content1  input[name='comment_content']").val();
            var site_id = $("#tab_content1  select[name='site_id']").val();
            var cp_source_id = $("#tab_content1  input[name='cp_source_id']").val();
            var comment_status = $("#tab_content1  select[name='comment_status']").val();

            comments_table.api()
                .column(9).search(time_range)
                .column(8).search(cp_source_id)
                .column(2).search(comment_author_name)
                .column(6).search(comment_content)
                .column(13).search(site_id)
                .column(12).search(comment_status)
                .draw();
        }
        /* 文章搜索表单重置 */
        function comment_SearchReset() {

            $('#reportrange_right span').html('');
            $("#tab_content1  input[name='comment_author_name']").val('');
            $("#tab_content1  input[name='comment_content']").val('');
            $("#tab_content1  select[name='site_id']").val('-1');
            $("#tab_content1  input[name='cp_source_id']").val('');
            $("#tab_content1  select[name='comment_status']").val('0');

            comments_table.api()
                .column(9).search('')
                .column(8).search('')
                .column(2).search('')
                .column(6).search('')
                .column(13).search('')
                .column(12).search('0')
                .draw();

        }

        $(document).ready(function () {

            init_DaterangepickerRight();
            init_DataTables();

        });

    </script>

</body>
</html>