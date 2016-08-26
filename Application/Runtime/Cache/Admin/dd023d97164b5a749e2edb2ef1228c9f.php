<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>管理员登陆</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/Public/Admin/index2.html"><b>后台管理系统</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">登录</p>

    <form action="<?php echo U('User/doLogin');?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="用户名" name='name'>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="密码" name='password'>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
            <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="验证码" name='verify'>
        <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <img src="<?php echo U('User/verify');?>" alt="" onclick="javascript:this.src='<?php echo U('Admin/User/verify/id');?>'+'/'+Math.random()"/>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">登 录</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="/Public/Admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/Public/Admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/Public/Admin/plugins/iCheck/icheck.min.js"></script>

</body>
</html>