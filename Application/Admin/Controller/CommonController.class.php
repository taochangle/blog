<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isset($_SESSION['admin'])){				
			$this->error('请先登录',U('User/login'));
		}elseif (isset($_SESSION['admin']['name'])&&isset($_SESSION['admin']['id'])&&!isset($_SESSION['admin']['password'])){
			$this->error('请先解锁',U('User/lockscreen'));
		}
		$Reply = M('Reply');
		$replyCount = $Reply->where('rstatus=0')->count ();
		$this->assign('replyCount',$replyCount);
	}
} 