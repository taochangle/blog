<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>后台管理</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/Public/Admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/Public/Admin/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/Public/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Public/Admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/Public/Admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="/Public/Admin/js/html5shiv.min.js"></script>
  <script src="/Public/Admin/js/respond.min.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="/Public/kindeditor/themes/simple/simple.css" />
  <link rel="stylesheet" href="/Public/kindeditor/themes/qq/qq.css" />
  <link rel="stylesheet" href="/Public/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Public/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/Public/Admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<link rel="stylesheet" href="/Public/Admin/dist/css/jquery-confirm.min.css" />
<script charset="utf-8" src="/Public/Admin/dist/js/jquery-confirm.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>管理</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>后台管理</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="/Public/Admin/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="/Public/Admin/#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">你有4条消息</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="/Public/Admin/#">
                      <div class="pull-left">
                        <img src="/Public/Admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="/Public/Admin/#">
                      <div class="pull-left">
                        <img src="/Public/Admin/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="/Public/Admin/#">
                      <div class="pull-left">
                        <img src="/Public/Admin/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="/Public/Admin/#">
                      <div class="pull-left">
                        <img src="/Public/Admin/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="/Public/Admin/#">
                      <div class="pull-left">
                        <img src="/Public/Admin/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="/Public/Admin/#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="/Public/Admin/#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="/Public/Admin/#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="/Public/Admin/#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="/Public/Admin/#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="/Public/Admin/#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="/Public/Admin/#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="/Public/Admin/#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="/Public/Admin/#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="/Public/Admin/#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="/Public/Admin/#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="/Public/Admin/#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="/Public/Admin/#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="/Public/Admin/#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="/Public/Admin/#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/<?php echo ($_SESSION['user']['avatar']); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ($_SESSION['user']['name']); ?></span>
            </a> 
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/<?php echo ($_SESSION['user']['avatar']); ?>" class="img-circle" alt="更换头像" onclick='changePic()'>
				
                <p>
                  <?php echo ($_SESSION['user']['name']); ?>
                  <small> </small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="/Public/Admin/#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="/Public/Admin/#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="/Public/Admin/#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo U('User/changePassword');?>" class="btn btn-default btn-flat">更改密码</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo U('User/logout');?>" class="btn btn-default btn-flat">注销登陆</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
           <!--   <a href="/Public/Admin/#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
             <a target='_blank' href=""><i class="fa fa-home"></i></a>
          </li>
        </ul>
      </div>

    </nav>
    
    <script>
    	function changePic(){
    		window.location.href="<?php echo U('User/changePic');?>";
    	}
    </script>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/<?php echo $_SESSION['user']['avatar'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ($_SESSION['user']['name']); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
              <li class="active treeview">
          <a href="<?php echo U('Index/index');?>">
            <i class="fa fa-dashboard"></i> <span>首页</span>
          </a>
        </li>
        <li class="header">内容管理</li>

					<li class="treeview"><a href="#"> <i class="fa fa-table"></i>
							<span>分类管理</span> <span class="pull-right-container"> <i
								class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo U('Category/index');?>"><i
									class="fa fa-list"></i> 分类列表</a></li>
							<li><a href="<?php echo U('Category/add');?>"><i
									class="fa fa-plus-circle"></i> 添加分类 </a></li>
						</ul></li>
					<li class="treeview"><a href="#"><i class="fa fa-book"></i>
							<span>文章管理</span> <span class="pull-right-container"> <i
								class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo U('Article/index');?>"><i
									class="fa  fa-list-alt"></i> 文章列表</a></li>
							<li><a href="<?php echo U('Article/add');?>"><i
									class="fa fa-plus"></i> 添加文章 </a></li>
						</ul>
						
						</li>
											<li class="treeview"><a href="#"><i class="fa fa-file-image-o"></i>
							<span>图片管理</span> <span class="pull-right-container"> <i
								class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo U('Image/index');?>"><i
									class="fa  fa-th-list"></i> 图片列表</a></li>
							<li><a href="<?php echo U('Image/add');?>"><i
									class="fa fa-plus"></i> 上传图片 </a></li>
						</ul>
						
						</li>
					<li class="treeview"><a href="<?php echo U('Reply/index');?>"><i class="fa fa-comments"></i>
							<span>评论管理</span> <span class="pull-right-container"> <small
								class="label pull-right bg-green"><?php echo ($replyCount); ?></small>
						</span> </a>
</li>
					<li class="header">其他</li>
					<li class="treeview"><a href="#"><i class="fa fa-user"></i>
							<span>个人资料</span> <span class="pull-right-container"> <i
								class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo U('User/changePassword');?>"><i
									class="fa fa-lock"></i> 密码修改</a></li>
							<li><a href="<?php echo U('User/changePic');?>"><i
									class="fa  fa-file-image-o"></i> 头像修改 </a></li>
						</ul>
						
						</li>

				<!-- 	<li class="header">LABELS</li>
					<li><a href="/Public/Admin/#"><i
							class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
					<li><a href="/Public/Admin/#"><i
							class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
					<li><a href="/Public/Admin/#"><i
							class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
				</ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        后台管理
        <small>Version 1.0</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
<div class="row">
	<div class="col-md-8">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">文章发布</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form class="form-horizontal" method="post" action="<?php echo U('Article/doAdd');?>">
				<div class="box-body">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">文章标题</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputEmail3"
								placeholder="文章标题" name='atitle'>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">分类</label>

						<div class="col-sm-10">
							<select class="form-control" name='acid'>
							<option value="">请选择一个分类</option>
								<?php if(is_array($data)): foreach($data as $key=>$v): ?><option value="<?php echo ($v["cid"]); ?>"><?php echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">文章排序</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPassword3"
								placeholder="文章排序" name='aorder' value='1'>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">正文</label>

						<div class="col-sm-10">
							<textarea name='acontent' class="form-control" rows="5"
								placeholder="分类描述"></textarea>
						</div>
					</div>

				</div>
				<input type="hidden" name='auid' value="<?php echo ($_SESSION['user']['id']); ?>"/>
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-info pull-right">发布</button>
				</div>
				<!-- /.box-footer -->
			</form>
		</div>
	</div>


</div>
<script>
$(function(){
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="acontent"]', {
            allowFileManager : true,
            //autoHeightMode : true,
            height:'500px',
            skinType:'simple',
            afterCreate : function() {
                this.loadPlugin('autoheight');
            },
            afterUpload : function(url) {
                var firstimageoption = '<option value="' + url + '">' + url + '</option>';
                var selectoption = '<option value="' + url + '" selected="selected">' + url + '</option>';
                $("#firstimage").append(firstimageoption);
                $("#images").append(selectoption);
            }
        });
    });
})
</script>
 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2016  陶欣 All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="/Public/Admin/#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="/Public/Admin/#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="/Public/Admin/javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="/Public/Admin/javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="/Public/Admin/javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="/Public/Admin/javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="/Public/Admin/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="/Public/Admin/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="/Public/Admin/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="/Public/Admin/javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/Public/Admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/Public/Admin/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/Public/Admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/Public/Admin/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="/Public/Admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/Public/Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/Public/Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="/Public/Admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="/Public/Admin/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="/Public/Admin/dist/js/demo.js"></script>

</body>
</html>