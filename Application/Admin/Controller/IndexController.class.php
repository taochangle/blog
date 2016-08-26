<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends CommonController {
	public function index() {
		
		$disk = round(disk_free_space("D:")/1024/1024/1024,2);
		$this->assign('disk',$disk);
		
		//内存
		
		$memery =  $this->memory_usage();
		$this->assign('memery',$memery);
		//文章
		$Article = M('Article');
		$articleCount = $Article->count ();
		$this->assign('articleCount',$articleCount);
		
		//分类
		$Category = M('Category');
		$categoryCount = $Category->count ();
		$this->assign('categoryCount',$categoryCount);
		$this->display ();
	}
	function memory_usage() {
		$memory = (! function_exists ( 'memory_get_usage' )) ? '0' : round ( memory_get_usage () / 1024 / 1024, 2 ) ;
		return $memory;
	}
}