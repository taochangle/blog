<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>又一个漂亮的博客</title>

<!-- meta -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/blog/Public/Home/img/favicon.ico" rel="shortcut icon">

<!-- css -->
<link rel="stylesheet" href="/blog/Public/Home/css/bootstrap.min.css">
<link rel="stylesheet" href="/blog/Public/Home/css/ionicons.min.css">
<!-- <link rel="stylesheet" href="/blog/Public/Home/css/custom.css"> -->
  <link href="/blog/Public/Home/css/blog.css" rel="stylesheet">
<!-- js -->

<script src="/blog/Public/Home/js/bootstrap.min.js"></script>
<script src="/blog/Public/Home/js/pace.min.js"></script>
<script src="/blog/Public/Home/js/modernizr.custom.js"></script>

<link rel="stylesheet" href="/blog/Public/Home/css/messenger.css" />
<link rel="stylesheet" href="/blog/Public/Home/css/messenger-theme-future.css" />
<link rel="stylesheet" href="/blog/Public/Home/css/messenger-theme-air.css" />
<link rel="stylesheet" href="/blog/Public/Home/css/messenger-theme-block.css" />
<link rel="stylesheet" href="/blog/Public/Home/css/messenger-theme-ice.css" />
<link rel="stylesheet" href="/blog/Public/Home/css/messenger-theme-flat.css" />
<style>
body {
 font-family:微软雅黑
}

</style>
</head>
<body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="/blog/index.php/Home/Index">首页</a>          
          <?php if(is_array($menu)): foreach($menu as $key=>$v): ?><a class="blog-nav-item" href="<?php echo U('Index/category','cid='.$v['cid']);?>"><?php echo ($v["cname"]); ?></a><?php endforeach; endif; ?>
        </nav>
      </div>
    </div>


	

	
	
	
	
 <div class="container">

      <div class="blog-header">
        <p class="lead blog-description">又一个漂亮的博客</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
        
         <?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="blog-post">
            <h3 class="blog-post-title"><a href="<?php echo U('Index/article','aid='.$v['aid']);?>"><?php echo ($v["atitle"]); ?></a></h3>
            <p class="blog-post-meta"><?php echo (date('Y-m-d',$v["atime"])); ?> by <?php echo ($v["name"]); ?> @ <a href="<?php echo U('Index/category','cid='.$v['acid']);?>"><?php echo ($v["cname"]); ?></a></p>
            <p><?php echo (mb_substr(html_entity_decode($v["acontent"]),0,200,'utf-8')); ?>
							……</p>
          </div><!-- /.blog-post --><?php endforeach; endif; ?>
		

			<nav>
  <ul class="pagination">
            	 <?php echo ($page); ?>
            </ul>
          </nav>
        </div><!-- /.blog-main -->

		        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>欢迎访问我的博客. <a href="http://www.taoxin.tk">www.taoxin.tk</a></p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
            
            <?php if(is_array($month)): foreach($month as $key=>$v): ?><li><a href="<?php echo U('category','month='.$v['month']);?>"><?php echo ($v["month"]); ?>月</a></li><?php endforeach; endif; ?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
            <?php if(is_array($allArticle)): foreach($allArticle as $key=>$v): ?><li><a href="<?php echo U('article','aid='.$v['aid']);?>"><?php echo ($v["atitle"]); ?></a></li><?php endforeach; endif; ?>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
	
    <footer class="blog-footer">
      <p>&copy;2016  by <a href="https://taoxin.tk">陶欣</a>.</p>
      <p>
        <a href="#">返回顶部</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/blog/Public/Home/Js/jquery-2.1.3.min.js"></script>
    <script src="/blog/Public/Home/Js/messenger.min.js"></script>
    <script src="/blog/Public/Home/Js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/blog/Public/Home/Js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>