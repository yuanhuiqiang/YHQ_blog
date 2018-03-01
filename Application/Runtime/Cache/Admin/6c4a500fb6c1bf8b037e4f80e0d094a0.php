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



    <!-- editormd -->
    <link href="/yhq_blog/Template/Public/vendors/editormd/css/editormd.css" rel="stylesheet">

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
                <h3>文章编辑</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>文章内容</h2>
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
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12"><h3>标题</h3></label>

                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control" placeholder="填写文章标题" name="post_title">
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="ln_solid"></div>
                        <div id="alerts"></div>

                        <div id="test-editormd">
                            <textarea style="display:none;"></textarea>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <!--发布-->
                <div class="x_panel">
                    <div class="x_title">
                        <h2>发布</h2>
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

                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                   <button type="button" class="btn btn-danger  pull-left" onclick="delPost()">删除</button>
                            <?php switch(ACTION_NAME): case "edit": ?><button type="button" class="btn btn-primary pull-right" onclick="updatePost()">更新</button><?php break;?>
                                <?php default: ?><button type="button" class="btn btn-success pull-right" onclick="publicPost()">发布</button><?php endswitch;?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- start accordion -->
                        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <a class="panel-heading" style="padding: 5px" role="tab" id="headingOne"
                                   data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    公开度
                                </a>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <form action="" class="form-horizontal">
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="" value="1" 
                                                               name="post_private"> 公开
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="2"
                                                               name="post_private" > 密码保护
                                                    </label>
                                                </div>
                                                <div style="margin-left: 20px;">
                                                    <input type="password" class="form-control" name="post_password"
                                                           placeholder="请输入密码" style="display: none;">
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="3"
                                                               name="post_private"> 私密
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <a class="panel-heading collapsed" style="padding: 5px" role="tab"
                                   id="headingTwo" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    时间
                                </a>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <form action="" class="form-horizontal">

                                            <div class="form-group">
                                                <div class='input-group date' id='myDatepicker4'>
                                                    <input type='text' class="form-control" name="post_date"
                                                           style="font-size: 12px"
                                                           readonly="readonly"/>
                                                    <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <a class="panel-heading collapsed" style="padding: 5px" role="tab"
                                   id="headingThree" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    状态
                                </a>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <form action="" class="form-horizontal">
                                            <div class="form-group">
                                                <select class="form-control" name="post_status">
                                                    <option value="1">已发布</option>
                                                    <option value="2">草稿</option>
                                                    <option value="3">等待复审</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of accordion -->

                    </div>
                </div>
                <!--分类-->
                <div class="x_panel">
                    <div class="x_title">
                        <h2>分类</h2>
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
                        <form action="" class="form-horizontal form-label-left input_mask">
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12" id="cat_list">
                                    <div class="checkbox">
                                        <label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a href="javascript:void(0);" onclick="showAddCategory()">+添加新分类</a>
                        <div class="ln_solid"></div>
                        <form class="form-horizontal form-label-left input_mask" style="display: none;"
                              id="add_cat_form">
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="new_cat_name" class="form-control" placeholder="填写分类名称">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <select class="select2_single form-control" tabindex="-1" name="cat_parent_id">
                                        <option value="-1">选择父分类</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="button" class="btn btn-success" onclick="submitAddCategory()">添加
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--标签-->
                <div class="x_panel">
                    <div class="x_title">
                        <h2>标签</h2>
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
                        <form class="">

                            <div class="control-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">添加标签</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="tags_1" type="text" class="tags form-control" name="tag_name"
                                           value=""/>
                                           </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">选择已有标签</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <select class="select2_single form-control" tabindex="-1" id="tag_list">
                                    </select>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-success" onclick="selectTag()">添加</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <!--封面-->
                <div class="x_panel">
                    <div class="x_title">
                        <h2>封面</h2>
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
                        <br/>
                        <a href="">设置特色图片</a>
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


    <!-- editormd -->
    <script src="/yhq_blog/Template/Public/vendors/editormd/editormd.js"></script>
    <script type="text/javascript">

        $('#myDatepicker4').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true,
            format: 'YYYY-MM-DD HH:mm:ss', //控件中from和to 显示的日期格式
        });
        function setDatetime(){
            var date = new Date();
            var day = date.getDay();
            var month = date.getMonth();
            var year = date.getFullYear();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            if(day<10){
                day = '0'+day;
            }
            if(month<10){
                month = '0'+month;
            }
            if(hours<10){
                hours = '0'+hours;
            }
            if(minutes<10){
                minutes = '0'+minutes;
            }
            if(seconds<10){
                seconds = '0'+seconds;
            }
            $('#myDatepicker4 input[name="post_date"]').val(year+'-'+month+'-'+day+' '+hours+':'+minutes+':'+seconds);
        }


        /* editormd */
        var testEditor;
        function init_editormd() {
            testEditor = editormd("test-editormd", {
                width: "100%",
                height : 640,
                path: '/yhq_blog/Template/Public/vendors/editormd/lib/',
                saveHTMLToTextarea : true,
                onload : function() {

                    <?php switch(ACTION_NAME): case "edit": ?>loadPost();<?php break;?>
                        <?php default: endswitch;?>
                }
            });
            //testEditor.getMarkdown();       // 获取 Markdown 源码
            //testEditor.getHTML();           // 获取 Textarea 保存的 HTML 源码
            //testEditor.getPreviewedHTML();  // 获取预览窗口里的 HTML，在开启 watch 且没有开启 saveHTMLToTextarea 时使用
        }

        /* AUTOSIZE */
        function init_autosize() {

            if (typeof $.fn.autosize !== 'undefined') {

                autosize($('.resizable_textarea'));

            }

        }
        ;

        /* TAG INPUT */
        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }

        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }

        function onChangeTag(input, tag) {
            alert("Changed a tag: " + tag);
        }

        //tags input
        function init_TagsInput() {

            if (typeof $.fn.tagsInput !== 'undefined') {

                $('#tags_1').tagsInput({
                    width: 'auto'
                });

            }

        }
        function enablePassInput() {
            
            $.each($('input:radio[name="post_private"]'),function(index,item){
                item.onchange = function(){
                    var val = $('input:radio[name="post_private"]:checked').val();
                    if (val=='2') {
                        $("input[name='post_password']").show();
                    }else{
                        $("input[name='post_password']").hide();
                    }
                }
            })
               
        }




        //新增分类操作
        function showAddCategory() {
            $("#add_cat_form").slideToggle("fast");
        }
        function resetAddCategory() {
            $("#add_cat_form input[name='new_cat_name']").val('');
            $("#add_cat_form select[name='cat_parent_id']").val('-1');
        }
        function submitAddCategory() {

            var jsonData = {
                "cat_name": $("#add_cat_form input[name='new_cat_name']").val(),
                "cat_parent_id": $("#add_cat_form select[name='cat_parent_id']").val(),
            };
            jsonData.cat_parent_id == '-1' ? delete jsonData.cat_parent_id : '';
            $.ajax({
                type: "post",
                url: "<?php echo U('blog_category/add');?>",
                data: jsonData,
                dataType: "json",
                success: function (data) {
                    if (data.status == 1) {
                        flushCategoryList();
                        resetAddCategory();

                    }
                    alert(data.msg);
                },
                error: function (error) {
                    alert("服务器异常");
                }
            });

        }
        //刷新添加分类显示列表
        function flushCategoryList() {
            $.ajax({
                type: "post",
                url: "<?php echo U('blog_category/getAll');?>",
                data: '',
                dataType: "json",
                success: function (category_respones) {
                    if (category_respones.status == 1) {
                        var category_data = category_respones.data;
                        $("#add_cat_form select[name='cat_parent_id']").html("<option value='-1'>选择父级分类</option>");

                        $("#cat_list").html("");
                        $.each(category_data, function (i, cat_item) {
                            $("#add_cat_form select[name='cat_parent_id']").append("<option value=" + cat_item.cat_id + ">" + cat_item.cat_name + "</option>");
                            $("#cat_list").append("<div class='checkbox'><label><input type='checkbox' value=" +
                                cat_item.cat_id + " name='cat_id'> " +
                                cat_item.cat_name + "</label></div>");
                        });

                    } else {
                        alert("服务器异常");
                    }
                },
                error: function (error) {
                    alert("服务器异常");
                }

            });
        }
        function flushTagList() {
            $.ajax({
                type: "post",
                url: "<?php echo U('blog_tag/getAll');?>",
                data: '',
                dataType: "json",
                success: function (tag_respones) {
                    if (tag_respones.status == 1) {
                        var tag_data = tag_respones.data;
                        $("#tag_list").html("");
                        $.each(tag_data, function (i, tag_item) {
                            $("#tag_list").append("<option value=" + tag_item.tag_name + ">" + tag_item.tag_name + "</option>");

                        });

                    } else {
                        alert("服务器异常");
                    }
                },
                error: function (error) {
                    alert("服务器异常");
                }

            });
        }
        //选择已存在标签
        function selectTag() {
            var tag_arr = $('#tags_1').val().split(",");
            for (var i in tag_arr) {
                if (tag_arr[i] == $("#tag_list").val()) {
                    return false;
                }
            }
            $('#tags_1').addTag($("#tag_list").val());
            ;
        }

        <?php switch(ACTION_NAME): case "edit": ?>//加载将要编辑的文章信息
                function loadPost() {
                    var post_id = "<?php echo ($_GET['id']); ?>";
                    $.ajax({
                        type: "post",
                        url: "<?php echo U('blog_post/getItemById');?>",
                        data: {'post_id': post_id},
                        dataType: "json",
                        success: function (respones) {
                            if (respones.status == 1) {
                                $("input[name='post_title']").val(respones.data.post_title);
                                testEditor.appendMarkdown(respones.data.post_content);
                                $("input[name='post_private'][value='" + respones.data.post_private + "']").prop("checked", 'checked');
                                if( $('input:radio[name="post_private"]:checked').val()=='2'){
                                    $("input[name='post_password']").show();
                                    $("input[name='post_password']").val(respones.data.post_password);
                                }else{
                                    $("input[name='post_password']").hide();
                                }
                                
                                $("input[name='post_date']").val(respones.data.post_date);
                                $("select[name='post_status']").val(respones.data.post_status);
                                if(respones.data.cat_id){
                                    $("input[name='cat_id']").val(respones.data.cat_id.split(','));
                                }
                                if(respones.data.tag_name){
                                    $("input[name='tag_name']").importTags(respones.data.tag_name);
                                }
                            }
                        }
                    });
                }
                //对文章执 行更新
                function updatePost() {
                    var post_id = "<?php echo ($_GET['id']); ?>";
                    var cat_id = [];
                    $('input[name="cat_id"]:checked').each(function(){
                        cat_id.push($(this).val());
                    });
                    var json_data = {
                        'post_id': post_id,
                        'post_title': $("input[name='post_title']").val(),
                        'post_content':testEditor.getMarkdown(),
                        'post_private': $("input[name='post_private']:checked").val(),
                        'post_password':$("input[name='post_password']").val(),
                        'post_date': $("input[name='post_date']").val(),
                        'post_status': $("select[name='post_status']").val(),
                        'cat_id': cat_id,
                        'tag_name': $("input[name='tag_name']").val().split(','),
                    }
                    $.ajax({
                        type: "post",
                        url: "<?php echo U('blog_post/update');?>",
                        data: json_data,
                        dataType: "json",
                        success: function (respones) {
                            if (respones.status == 1) {
                                alert("更新成功");
                            }else{
                                alert("更新失败");
                            }
                        }
                    });
                }

                function delPost() {
                    var post_id = "<?php echo ($_GET['id']); ?>";
                    $.ajax({
                        type: "post",
                        url: "<?php echo U('blog_post/del');?>",
                        data: {
                            "post_id":post_id
                        },
                        dataType: "json",
                        success: function (respones) {
                            if (respones.status == 1) {
                                alert("删除成功");
                                window.location.replace("<?php echo U('blog_post/create');?>");
                            }else{
                                alert("删除失败");
                            }
                        }
                    });
                }<?php break;?>
            <?php default: ?>
                function publicPost(){
                    var cat_id = [];
                    $('input[name="cat_id"]:checked').each(function(){
                        cat_id.push($(this).val());
                    });
                    var json_data = {
                        'post_title': $("input[name='post_title']").val(),
                        'post_content':testEditor.getMarkdown(),
                        'post_private': $("input[name='post_private']:checked").val(),
                        'post_password':$("input[name='post_password']").val(),
                        'post_date': $("input[name='post_date']").val(),
                        'post_status': $("select[name='post_status']").val(),
                        'cat_id': cat_id,
                        'tag_name': $("input[name='tag_name']").val().split(','),
                    }

                    $.ajax({
                        type: "post",
                        url: "<?php echo U('blog_post/store');?>",
                        data: json_data,
                        dataType: "json",
                        success: function (respones) {
                            if (respones.status == 1) {
                                var url = "<?php echo U('blog_post/edit');?>"
                                window.location.replace(url+"?id="+respones.data);
                            }
                        }
                    });
                }<?php endswitch;?>


        $(document).ready(function () {
            enablePassInput();
            setDatetime();
            flushCategoryList();
            flushTagList();
            init_editormd();
            init_TagsInput();
            init_autosize();

        });
    </script>

</body>
</html>