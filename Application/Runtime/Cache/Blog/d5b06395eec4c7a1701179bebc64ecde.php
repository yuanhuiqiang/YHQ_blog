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
    <style>
        .markdown-toc ul{
            padding-left: 20px;
        }
        p{
            word-wrap: break-word;
        }
/*        ::-webkit-scrollbar {/*滚动条整体样式*/
            width: 10px;     /*高宽分别对应横竖滚动条的尺寸*/
            height: 1px;
        }
        ::-webkit-scrollbar-thumb {/*滚动条里面小方块*/
            border-radius: 10px;
             -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
            background: #535353;
        }
        ::-webkit-scrollbar-track {/*滚动条里面轨道*/
            -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
            border-radius: 10px;
            background: #EDEDED;
        }*/
    </style>
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
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
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

    <div class="container-fluid">

        <div class="col-md-offset-1 col-md-8 main-col">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 id="post_title">cccccccc</h1>
                    <div class="meta" id="post_meta">post on mm</div>
                </div>
                <div class="panel-body">
                    <div class="markdown-body">
                        <div id="test-editormd-view">
                            <textarea style="display:none;" name="test-editormd-markdown-doc">###Hello world!</textarea>
                        </div>
                    </div>
                </div>
                <div class="pannel-footer"></div>

            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">回复</h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" height="30px"
                                         src="https://dn-phphub.qbox.me/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100"
                                         alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">小米</h5>
                                <div><p>我是老大我怕谁</p></div>
                                <div style="width:100%">
                                    <a class="btn btn-default pull-right" href="javascript:volid(0);" role="button" onclick="toggle()">收起回复</a>
                                    <a class="btn btn-default pull-right" href="javascript:volid(0);" role="button">点赞</a>
                                </div>
                                <div class="clearfix"></div>
                                <div id="listt" >
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" height="30px"
                                                         src="https://dn-phphub.qbox.me/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100"
                                                         alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                ...
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" height="30px"
                                                         src="https://dn-phphub.qbox.me/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100"
                                                         alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                ...
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" height="30px"
                                                         src="https://dn-phphub.qbox.me/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100"
                                                         alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                ...
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" height="30px"
                                                         src="https://dn-phphub.qbox.me/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100"
                                                         alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                ...
                                            </div>
                                        </li>
                                    </ul>
                                    <div>
                                        <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                        <form>
                                            <div class="form-group">
                                                    <textarea class="form-control" rows="3" style="resize:vertical;"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </form>
                                    </div>
                                </div>

                                <script>
                                    function toggle() {
                                        $("#listt").slideToggle("slow");
                                    }

                                </script>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" height="30px"
                                         src="https://dn-phphub.qbox.me/uploads/avatars/1_1479342408.png?imageView2/1/w/100/h/100"
                                         alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">主要评论</h4>
                                <div><p>我是老大我怕谁</p></div>
                                <div class="clearfix"></div>
                                <div style="width:100%">
                                    <a class="btn btn-default pull-right" href="javascript:volid(0);" role="button" onclick="togglec()">收起回复</a>
                                    <a class="btn btn-default pull-right" href="javascript:volid(0);" role="button">点赞</a>
                                </div>
                                <div class="clearfix"></div>

                                <div id="listc" >
                                    <div>
                                        <form>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" style="resize:vertical;"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </form>
                                    </div>
                                </div>

                                <script>
                                    function togglec() {
                                        $("#listc").slideToggle("slow");
                                    }

                                </script>
                            </div>
                        </li>

                    </ul>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>评论</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" style="resize:vertical;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                    </form>
                </div>
                <div class="pannel-footer"></div>

            </div>
        </div>

        <div class="col-md-3 side-bar"  id="right-side-bar" style="position: sticky;top: 20px;" >
            <div class="panel panel-default">
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#anchor-list" data-toggle="tab">本章目录</a></li>
                        <!--<li role="presentation"><a href="#page-list" data-toggle="tab">书籍目录</a></li>-->
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="anchor-list">
                            <div class="markdown-body editormd-preview-container"  style="overflow: auto"
                                 id="custom-toc-container"></div>
                        </div>
                        <div class="tab-pane" id="page-list">
                            <ul class="markdown-toc-list">
                                <?php if(is_array($article_list)): foreach($article_list as $key=>$article): ?><li><a href="<?php echo U('article/detail', array('category'=>$current_category,'article'=>$key));?>" class="toc-level-1"><?php echo ($article); ?></a></li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="clearfix"></div>

    </div>
    <div class="footer" style="color: #ccc">
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

<script src="/yhq_blog/Template/Public/vendors/jquery/dist/jquery.min.js"></script>

<script src="/yhq_blog/Template/Public/vendors/editormd/lib/marked.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/editormd/lib/prettify.min.js"></script>

<script src="/yhq_blog/Template/Public/vendors/editormd/lib/raphael.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/editormd/lib/underscore.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/editormd/lib/sequence-diagram.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/editormd/lib/flowchart.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/editormd/lib/jquery.flowchart.min.js"></script>
<script src="/yhq_blog/Template/Public/vendors/editormd/editormd.js"></script>

<script>
    // 文档加载
    $(function () {
        var testEditormdView, testEditormdView2;
        $.get("<?php echo U('index/ajaxDetail');?>", {
            id: '<?php echo ($post_id); ?>',
        }, function (response) {
            if(response.status==0){
                alert(response.info);
            }else {

                $("#post_title").html(response.data.post_title);
                $("#post_meta").html("posted on "+response.data.post_date+" | "+ "by" + response.data.author_name);
                testEditormdView = editormd.markdownToHTML("test-editormd-view", {
                    markdown: response.data.post_content,//+ "\r\n" + $("#append-test").text(),
                    // htmlDecode      : false,       // 开启 HTML 标签解析，为了安全性，默认不开启
                    htmlDecode: "style,script,iframe",  // you can filter tags decode
                    //toc             : false,
                    tocm: true,    // Using [TOCM]
                    tocContainer: "#custom-toc-container", // 自定义 ToC 容器层
                    //gfm             : false,
                    //tocDropdown     : true,
                    // markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
                    emoji: true,
                    taskList: true,
                    tex: true,  // 默认不解析
                    flowChart: true,  // 默认不解析
                    sequenceDiagram: true,  // 默认不解析

                });

            }

        });
    });
</script>

<script>
    // 设置侧边栏高度为当前屏幕高度-300px
    $('#right-side-bar  .tab-content').css({ "height": window.screen.availHeight-300+"px",
        "overflow-y":"auto","word-wrap":"break-word","padding-top":"10px",});

</script>

</body>
</html>