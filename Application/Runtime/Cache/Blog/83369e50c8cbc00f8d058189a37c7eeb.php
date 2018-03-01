<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://v3.bootcss.com/dist/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
<div id="wrap">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">完美世界</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo U('/blog/post');?>">文章 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">小说</a></li>
                    <li><a href="#">直播</a></li>
                    <li><a href="#">项目</a></li>
                    <li><a href="#">工具</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">用户007 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">个人信息</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">注销</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9 main-col">
                <div class="alert alert-warning"><p>警告信息</p></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <ul class="list-inline">
                            <li><a href="<?php echo ($filter_url['recent']); ?>">最新</a></li>
                            <li><a href="<?php echo ($filter_url['view']); ?>">最热</a></li>
                            <li><a href="<?php echo ($filter_url['comment']); ?>">热评</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">

                            <?php if(is_array($post_list)): $i = 0; $__LIST__ = $post_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($i % 2 );++$i;?><li class="list-group-item">

                                    <div class="pull-left"><a href="#"><img class="media-object img-circle "
                                                                            style="height: 30px"
                                                                            src="https://dn-phphub.qbox.me/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100"
                                                                            alt="..."></a></div>
                                    <div class="pull-right"><a href="#"> <span>查看数</span>|<span>回复数</span>|<span>更新时间</span>
                                    </a></div>
                                    <h5 class="media-heading"><a href="<?php echo U('detail',array('id'=>$post['post_id']));?>"><?php echo ($post["post_title"]); ?></a>
                                    </h5>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="pannel-footer text-right remove-padding-horizontal ">
                        <nav aria-label="...">
                            <?php echo ($page_html); ?>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="col-md-3 side-bar">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="post_search" placeholder="搜索">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">分类</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <?php if(is_array($cat_list)): $i = 0; $__LIST__ = $cat_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><a href="<?php echo ($cat['cat_id']==$current_cat?U(''):U('',array('cat'=>$cat['cat_id']))); ?>"
                                   class="list-group-item <?php echo ($cat['cat_id']==$current_cat?'active':''); ?>"><?php echo ($cat["cat_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">标签</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-inline">
                            <?php if(is_array($tag_list)): $i = 0; $__LIST__ = $tag_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><a href="<?php echo ($tag['tag_id']==$current_tag?U(''):U('',array('tag'=>$tag['tag_id']))); ?>"
                                   class=" <?php echo ($tag['tag_id']==$current_tag?'active':''); ?>"><?php echo ($tag["tag_name"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="footer" style="color: #ccc;background-color: #fff">
        <div class="container">
            <div class="row">
                <div class="col-sm-5"><p>
                    © 2013——2020 gouguoyin.cn 京ICP备17047024号 Powered By GouGuoyin </p></div>
                <div class="col-sm-6"><p>
                    已运行1851天16小时59分50秒 </p></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).keydown(function(event){
        if (event.keyCode == 13) {
            $('form').each(function() {
                event.preventDefault();
            });
        }
    });
    $('#post_search').keydown(function (e) {
        if (e.keyCode == 13){
            var default_url = "<?php echo U('',array('keyword'=>default_keyword));?>";
            var url =$.trim($(this).val())==''? "<?php echo U('');?>":default_url.replace('default_keyword',$(this).val());
            self.location.href=url;
            e.preventDefault();
        }
    });

</script>
</body>
</html>