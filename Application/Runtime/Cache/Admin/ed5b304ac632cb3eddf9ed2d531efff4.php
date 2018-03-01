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
    <link href="/YHQ_Blog/Template/Public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/YHQ_Blog/Template/Public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/YHQ_Blog/Template/Public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/YHQ_Blog/Template/Public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/YHQ_Blog/Template/Public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="/YHQ_Blog/Template/Public/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="/YHQ_Blog/Template/Public/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <!-- Datatables -->
    <link href="/YHQ_Blog/Template/Public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/YHQ_Blog/Template/Admin/Static/css/custom.min.css" rel="stylesheet">



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
    <img src="/YHQ_Blog/Template/Admin/Static/img/img.jpg" alt="..." class="img-circle profile_img">
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
                    <img src="/YHQ_Blog/Template/Admin/Static/img/img.jpg" alt="">John Doe
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
                            <span class="image"><img src="/YHQ_Blog/Template/Admin/Static/img/img.jpg" alt="Profile Image"/></span>
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
                            <span class="image"><img src="/YHQ_Blog/Template/Admin/Static/img/img.jpg" alt="Profile Image"/></span>
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
                            <span class="image"><img src="/YHQ_Blog/Template/Admin/Static/img/img.jpg" alt="Profile Image"/></span>
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
                            <span class="image"><img src="/YHQ_Blog/Template/Admin/Static/img/img.jpg" alt="Profile Image"/></span>
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
                <h3>文章
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
                        <h2>文章列表</h2>
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
                                                                    aria-expanded="false">操作</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1">
                                    <row class="form-inline">
                                        <div style="padding:10px;overflow: auto">
                                            <div class="form-group">
                                                <label class="control-label">时间段</label>
                                                <div id="reportrange_right" class="form-control"
                                                     style="min-width: 250px;background: #fff; cursor: pointer; padding: 5px 10px; margin-right:10px; border: 1px solid #ccc">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">标题名</label>
                                                <input type="text" class="form-control" placeholder="标题"
                                                       name="title_name">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">分类</label>
                                                <select class="form-control" data-live-search="true" name="cat_id">
                                                    <option value="-1">全部</option>
                                                    <option value="0">默认分类</option>
                                                    <option value="1">前端</option>
                                                </select>
                                            </div>
                                            <div class="form-group pull-right">
                                                <button id="search_reset_btn" onclick="post_SearchReset()"
                                                        class="btn btn-primary">重置
                                                </button>
                                                <button id="search_submit_btn" type="submit"
                                                        onclick="post_SearchSubmit()" class="btn btn-success">
                                                    搜索
                                                </button>
                                            </div>


                                        </div>
                                    </row>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2">
                                    <row class="form-inline">
                                        <div style="padding:10px;overflow: auto">
                                            <div class="form-group">
                                                <button type="button" onclick="post_MultiDel()" class="btn btn-primary">
                                                    批量删除
                                                </button>
                                                <button type="button" class="btn btn-primary"
                                                        onclick="post_OpenModifyForm()">批量快速编辑
                                                </button>
                                                 <a class='btn btn-primary' href="<?php echo U('blog_post/create');?>">添加新文章</a>
                                            </div>
                                        </div>
                                    </row>
                                </div>
                            </div>
                        </div>

                        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                            <thead></thead>
                            <tbody></tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>


        <!--快速修改表单模态框-->
        <div class="modal fade post-modify-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">快速编辑</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal form-label-left input_mask">
                            <!--分类-->
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label>分类</label>
                                <select name="cat_id" class="select2_multiple form-control" multiple="multiple"
                                        style="height: 150px;">
                                </select>
                            </div>
                            <!--标签-->
                            <div class=" col-md-12 col-sm-12 col-xs-12 control-group">
                                <label>标签</label>
                                <input id="tags_1" type="text" class="tags form-control" value="" name="tag_name"/>
                                <div id="suggestions-container"
                                     style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                            </div>
                            <div class="clearfix"></div>
                            <!--评论-->
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label>评论状态</label>
                                <select class="select2_single form-control" tabindex="-1" name="comment_status">
                                    <option value="-1">--不更改评论状态--</option>
                                    <option value="1">允许</option>
                                    <option value="0">不允许</option>
                                </select>
                            </div>
                            <!--文章状态-->
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label>文章状态</label>
                                <select class="select2_single form-control" tabindex="-1" name="post_status"
                                        onchange="post_PassInputDisable(this.options[this.options.selectedIndex].value)">
                                    <option value="-1">--不更改文章状态--</option>
                                    <option value="1">已发布</option>
                                    <option value="2">私密</option>
                                    <option value="3">等待复审</option>
                                    <option value="4">草稿</option>
                                </select>
                            </div>
                            <!--顶置-->
                            <!--<div class="col-md-6 col-sm-6 col-xs-12 form-group">-->
                            <!--<select class="select2_single form-control" tabindex="-1" name="sticky">-->
                            <!--<option value="-1">&#45;&#45;更改顶置选项&#45;&#45;<</option>-->
                            <!--<option value="1">顶置</option>-->
                            <!--<option value="0">不顶置</option>-->
                            <!--</select>-->
                            <!--</div>-->
                            <!--密码-->
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label>设置访问密码</label>
                                <input type="text" class="form-control " disabled="disabled" placeholder="设置访问密码"
                                       name="post_password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" onclick="post_QuickEdit()">保存</button>
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
<script src="/YHQ_Blog/Template/Public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/YHQ_Blog/Template/Public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/YHQ_Blog/Template/Public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/YHQ_Blog/Template/Public/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="/YHQ_Blog/Template/Public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- jQuery custom content scroller -->
<script src="/YHQ_Blog/Template/Public/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- iCheck -->
<script src="/YHQ_Blog/Template/Public/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/YHQ_Blog/Template/Public/vendors/moment/min/moment.min.js"></script>
<script src="/YHQ_Blog/Template/Public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="/YHQ_Blog/Template/Public/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="/YHQ_Blog/Template/Public/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="/YHQ_Blog/Template/Public/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="/YHQ_Blog/Template/Public/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="/YHQ_Blog/Template/Public/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Autosize -->
<script src="/YHQ_Blog/Template/Public/vendors/autosize/dist/autosize.min.js"></script>
<!-- Datatables -->
<script src="/YHQ_Blog/Template/Public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/YHQ_Blog/Template/Public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- Custom Theme Scripts -->
<!--<script src="/YHQ_Blog/Template/Admin/Static/js/custom.min.js"></script>-->
<script src="/YHQ_Blog/Template/Admin/Static/js/custom.js"></script>


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
        var posts_table;
        function init_DataTables() {
            //是否引入datatable
            if(typeof ($.fn.DataTable) === 'undefined'){
                return;
            }
            //初始化文章列表
            posts_table = $('#datatable-checkbox').dataTable({

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
                serverSide: true,//开启服务器获取数据
                order: [[1, "desc"]], //默认第二列排序
                dom: 'rt<"datatable_foot_l_p"lp>',//i 长度 f 过滤 t 表 i 信息 p 分页 r 加载
                rowId: 'id', //每个tr都会带id 值为对应data中值 默认为DT_RowId
                ajax: { // 获取数据
                    url: "<?php echo U('blog_post/getList');?>",
                    type: "POST",
                    dataType: "json", //返回json数据,此时需要columns来对应每列的数据，若返回为数组，则按0 1 2 3数组下标填充至td
                    data: function (d) {
                        //添加额外的参数传给服务器
                        d.extra_search = "少时诵诗书所所所";//配合input做多列搜索
                        // d.extra_search = $('#reportrange span').html();
                        // $.extend(d,searchParams); //给d扩展参数 类似数组合并
                    },
                    dataSrc: function (result) {   //也可以为赋值字符串如tabledata，相当于return result.tabledata;
                        //处理接受到的数据，仅将接受到的数据中的数据部分返回即可，以下为必要参数，
                        //  "draw" => $draw, //请求与返回的draw必须一致
//                      "recordsTotal" =>111,  // 记录总数
//                      "recordsFiltered" =>111, // 过滤后的记录总数
//                      "data" =>$infos // 数据,
//                      error 可选。你可以定义一个错误来描述服务器出了问题后的友好提示
//                      还有几个可以实现自动绑定的参数DT_RowId DT_RowClass DT_RowData DT_RowAttr  都是给tr添加东西的，
//                     DT_RowData可以通过jq对象访问： $(this).parent().parent().data("DT_RowData")
                        return result.data;
                    },
                    "error": function () {
                        alert("服务器未正常响应，请重试");
                    }
                },
                columns: [ //定义列数据来源 title表示th显示内容   还有个"DT_RowId":"a"属性，添加后每个tr都会有id=a属性
                    {
                        data: null,
                        title: "<input type='checkbox' class='flat' name='checklist' id='post_check_all' />",
                        orderable: false
                    },
                    {title: "post_id", name: 'post_id', data: "post_id"},       //title是表头  name是请求时的键名  data是表格显示的数据
                    {title: "user_id", name: 'user_id', data: "user_id", defaultContent: "默认值"},
                    {title: "post_date", name: 'post_date', data: "post_date"},//隐藏
                    {title: "post_title", name: 'post_title', data: "post_title"},
                    {title: "post_excerpt", name: 'post_excerpt', data: "post_excerpt"},
                    {title: "cat_id", name: 'cat_id', data: "cat_id"},
                    {title: "cat_name", name: 'cat_name', data: "cat_name"},
                    {title: "post_private", name: 'post_private', data: "post_private"},
                    {title: "action", name: 'action', data: null, class: "align-center"} // 自定义列
                ],
                "columnDefs": [ //自定义列
                    {
                        targets: 0,
                        orderable: false,
                        searchable: false,  //全局搜索时排除该列
                        width: 15,
                        render: function (data, type, row, meta) {
                            return '<input type="checkbox" name="post_check_list" value="' + row.post_id + '"  class="flat"/>'
                        }
                    },
                    {
                        targets: -1, //改写哪一列
                        data: "",
                        width: 130,
                        render: function (data, type, row) {
                            // return "<a href='"+full.teacher_id+"'>look at my href</a>";
                            return "<button class='btn btn-info' onclick='post_Edit(" + row.post_id + ")'>修改</button>" +
                                "   <button name='btn-del' class='btn btn-danger' onclick='post_Del(" + row.post_id + ")'>删除</button>";
                        }
                    },
                    {
                        targets: [2,6],
                        visible: false //隐藏列
                    },
                    {
                        targets: [-1, -2],
                        orderable: false,  //禁止排序
                        searchable: false //禁止搜索
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
            posts_table.on('draw.dt', function () {
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

        //tags input
        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }
        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }
        function onChangeTag(input, tag) {
            alert("Changed a tag: " + tag);
        }
        function init_TagsInput() {

            if (typeof $.fn.tagsInput !== 'undefined') {

                $('#tags_1').tagsInput({
                    width: 'auto'
                });

            }

        }

        // 初始化模态框
        function init_BootstrapModal() {
            $('.post-modify-form-modal').modal({
                keyboard: true,
                show: false
            })
            //关闭窗口时，将表单数据清空
            $('.post-modify-form-modal').on('hidden.bs.modal', function () {
                $(".post-modify-form-modal select[name='cat_id']").val('');
                $(".post-modify-form-modal select[name='cat_id']").html('');
                $('#tags_1').importTags('');
                $(".post-modify-form-modal select[name='comment_status']").val('-1');
                $(".post-modify-form-modal select[name='post_status']").val('-1');
                $(".post-modify-form-modal input[name='post_password']").val('');
                $(".post-modify-form-modal input[name='post_password'][disabled='disabled']").removeAttr('disabled');
            })
        }
        //文章编辑模态框密码input禁用触发
        function post_PassInputDisable(post_status) {
            $(".post-modify-form-modal input[name='post_password']").val('');
            if(post_status==2){
                $(".post-modify-form-modal input[name='post_password'][disabled='disabled']").removeAttr('disabled');
            }else {
                $(".post-modify-form-modal input[name='post_password']").attr('disabled','disabled');
            }
        }

        //获取分类下拉列表
        function loadCategoryOption(){
               $.ajax({
                    type: "post",
                    url: "<?php echo U('blog_category/getAll');?>",
                    data: '',
                    dataType: "json",
                    success: function (category_respones) {
                        if (category_respones.status == 1) {
                            var category_data = category_respones.data;
                                $("#tab_content1  select[name='cat_id']").html('');
                                $("#tab_content1  select[name='cat_id']").append("<option value='-1'>全部</option>");
                                $.each(category_data, function (i, cat_item) {
                                    $("#tab_content1  select[name='cat_id']").append("<option value=" + cat_item.cat_id + ">" + cat_item.cat_name + "</option>");
                                });
                        }
                    }
                });
        }

        // 点击编辑时初始化表单数据
        function post_OpenModifyForm() {

            var post_id = [];
            $(".bulk_action input[name='post_check_list']:checked").each(function () {
                post_id.push(this.value);
            });

            if (post_id.length > 0) {
                //获取全部分类信息
                var category = [];
                $.ajax({
                    type: "post",
                    url: "<?php echo U('blog_category/getAll');?>",
                    data: '',
                    dataType: "json",
                    success: function (category_respones) {
                        if (category_respones.status == 1) {
                            var category_data = category_respones.data;
                            if (post_id.length == 1) {
                                //单个修改
                                $.ajax({
                                    type: "post",
                                    url: "<?php echo U('blog_post/getItemById');?>",
                                    data: {'post_id': post_id},
                                    dataType: "json",
                                    success: function (data) {
                                        if (data.status == 1) {
                                            var post_data = data.data;

                                            $(".post-modify-form-modal select[name='cat_id']").html('');
                                            $.each(category_data, function (i, cat_item) {
                                                $(".post-modify-form-modal select[name='cat_id']").append("<option value=" + cat_item.cat_id + ">" + cat_item.cat_name + "</option>");
                                            });
                                            $(".post-modify-form-modal select option[value='-1']").hide();
                                            if(post_data.cat_id!=null){
                                                $(".post-modify-form-modal select[name='cat_id']").val(post_data.cat_id.split(','));
                                            }
                                        
                                            $('#tags_1').importTags(post_data.tag_name==null?'':post_data.tag_name);
                                            $(".post-modify-form-modal select[name='comment_status']").val(post_data.comment_status);
                                            $(".post-modify-form-modal select[name='post_status']").val(post_data.post_status);
                                            if (post_data.post_status == 2) {
                                                $(".post-modify-form-modal input[name='post_password']").val(post_data.post_password);
                                                $(".post-modify-form-modal input[name='post_password']").removeAttr('disabled');
                                            } else {
                                                $(".post-modify-form-modal input[name='post_password']").val('');
                                                $(".post-modify-form-modal input[name='post_password']").attr('disabled', 'disabled');
                                            }

                                            $('.post-modify-form-modal').modal('show');

                                        } else {

                                            alert("服务器异常");
                                        }
                                    },
                                    error: function (error) {
                                        alert("服务器异常");
                                    }
                                });
                            } else {
                                //多个修改


                                $(".post-modify-form-modal select[name='cat_id']").html('');
                                $.each(category_data, function (i, cat_item) {
                                    $(".post-modify-form-modal select[name='cat_id']").append("<option value=" + cat_item.cat_id + ">" + cat_item.cat_name + "</option>");
                                });
                                $(".post-modify-form-modal select option[value='-1']").show();
                                $(".post-modify-form-modal select[name='cat_id']").val('-1');
                                $('#tags_1').importTags('');
                                $(".post-modify-form-modal select[name='comment_status']").val('-1');
                                $(".post-modify-form-modal select[name='post_status']").val('-1');
                                $(".post-modify-form-modal input[name='post_password']").val('');
                                $(".post-modify-form-modal input[name='post_password']").attr('disabled', 'disabled');
                                $('.post-modify-form-modal').modal('show');
                            }
                            $(".post-modify-form-modal select[name='post_status']").val('-1');
                        } else {
                            alert("获取文章信息失败");
                        }

                    },
                    error: function (error) {
                        alert("获取文章信息失败");
                    }
                });


            } else {
                alert("请先选择文章");
            }


        }
        // 编辑
        function tag_Edit() {

            var jsonData = {
                "tag_id": $(".post-modify-form-modal input[name='tag_id']").val(),
                "tag_name": $(".post-modify-form-modal input[name='tag_name']").val(),
                "tag_img": $(".post-modify-form-modal input[name='tag_img']").val(),
                "tag_description": $(".post-modify-form-modal textarea[name='tag_description']").val(),
            };
            $.ajax({
                type: "post",
                url: "<?php echo U('blog_tag/update');?>",
                data: jsonData,
                dataType: "json",
                success: function (data) {
                    if (data.status == 1) {
                        $('.post-modify-form-modal').modal('hide');
                        tag_table.api().ajax.reload(null, false); //1.10之后
                    } else {
                        alert(data.msg);
                    }
                },
                error: function (error) {
                    alert("服务器异常");
                }
            });
        }
        /* 文章批量删除 */
        function post_MultiDel() {
            if (confirm('你确定要删除这些篇文章么?')) {
                var post_id = [];
                $(".bulk_action input[name='post_check_list']:checked").each(function () {
                    post_id.push(this.value);
                });
                // 确定
                var jsonData = {
                    "post_id": post_id
                };

                $.ajax({
                    type: "post",
                    url: "<?php echo U('blog_post/del');?>",
                    data: jsonData,
                    dataType: "json",
                    success: function (data) {
                        // var msg = eval(msg);
                        if (data.status == 1) {
                            alert(data.msg);
                            posts_table.api().ajax.reload(); //1.10之后
                        } else {
                            alert(data.msg);
                        }
                    },
                    error: function (error) {
                        alert("服务器异常");
                    }
                });
            } else {
                return;
            }

        }
        /* 文章批量修改 */
        function post_QuickEdit() {

            var post_id = [];
            $(".bulk_action input[name='post_check_list']:checked").each(function () {
                post_id.push(this.value);
            });
            // 确定

            var jsonData = {
                "post_id": post_id,
                "cat_id": $(".post-modify-form-modal select[name='cat_id']").val(),
                "tag_name": $(".post-modify-form-modal input[name='tag_name']").val().split(','),
                "comment_status": $(".post-modify-form-modal select[name='comment_status']").val(),
                "post_status": $(".post-modify-form-modal select[name='post_status']").val(),
                "post_password": $(".post-modify-form-modal input[name='post_password']").val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo U('blog_post/update');?>",
                data: jsonData,
                dataType: "json",
                success: function (data) {
                    // var msg = eval(msg);
                    console.log(data);
                    if (data.status == 1) {
                        $('.post-modify-form-modal').modal('hide');
                        posts_table.api().ajax.reload(null, false); //1.10之后
                    } else {
                        alert(data.msg);
                    }
                },
                error: function (error) {
                    alert("服务器异常");
                }
            });
        }
        /* 文章删除 */
        function post_Del(post_id) {
            if (confirm('你确定要删除这篇文章么?')) {
                // 确定
                var jsonData = {
                    "post_id": post_id
                };
                $.ajax({
                    type: "post",
                    url: "<?php echo U('blog_post/del');?>",
                    data: jsonData,
                    dataType: "json",
                    success: function (data) {
                        // var msg = eval(msg);
                        if (data.status == 1) {
                            alert(data.msg);
                            posts_table.api().ajax.reload(); //1.10之后
                        } else {
                            alert(data.msg);
                        }
                    },
                    error: function (error) {
                        alert("服务器异常");
                    }
                });
            } else {
                return;
            }

        }
        /* 文章修改 */
        function post_Edit(id) {
           var url = "<?php echo U('blog_post/edit');?>"
           window.location.replace(url+"?id="+id);

        }
        /* 文章搜索表单提交 */
        function post_SearchSubmit() {

            var time_range = $('#reportrange_right span').html();
            var title_name = $("#tab_content1  input[name='title_name']").val();
            var cat_id = $("#tab_content1  select[name='cat_id']").val();

            posts_table.api()
                .column(3).search(time_range)
                .column(4).search(title_name)
                .column(6).search(cat_id)
                .draw();

        }
        /* 文章搜索表单重置 */
        function post_SearchReset() {

            $('#reportrange_right span').html('');
            $("#tab_content1  input[name='title_name']").val('');
            $("#tab_content1  select[name='cat_id']").val('-1');

            posts_table.api()
                .column(3).search('')
                .column(4).search('')
                .column(6).search('')
                .draw();

        }

        $(document).ready(function () {

            init_DaterangepickerRight();
            init_DataTables();
            init_TagsInput();
            init_BootstrapModal();
            loadCategoryOption();


        });

    </script>

</body>
</html>