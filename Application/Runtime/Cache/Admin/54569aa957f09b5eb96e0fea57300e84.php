<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>用户登陆</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/Public/Admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/Public/Admin/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Public/Admin/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="/Public/Admin/js/html5shiv.min.js"></script>
  <script src="/Public/Admin/js/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="#"> <b>后台管理系统</b></a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><?php echo ($_SESSION['user']['name']); ?></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="/<?php echo ($_SESSION['user']['avatar']); ?>" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method='post' action="<?php echo U('User/unlock');?>">
      <div class="input-group">
        <input type="password" class="form-control" placeholder="password" name='password'>
		<input type="hidden" name='type' value='1'/>
		<input type="hidden" name='name' value="<?php echo ($_SESSION['user']['name']); ?>"/>
        <div class="input-group-btn">
          <button name='submit' type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    输入密码进行登陆
  </div>
  <div class="text-center">
    <a href="<?php echo U('user/login');?>">切换用户</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2016 <b><a href="http://almsaeedstudio.com" class="text-black">Almsaeed Studio</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<script src="/Public/Admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/Public/Admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>