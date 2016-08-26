<?php

namespace Admin\Controller;

use Think\Controller;

class ReplyController extends CommonController {
	public function index() {
		$Reply = M('Reply');
		$count      = $Reply->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $Reply->join('left join article on article.aid = reply.raid')->field('rid,rname,remail,rstatus,rtime,rcontent,atitle')->order('rtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
	public function edit() {
		if (!isset($_GET['id'])||!isset($_GET['status'])){
			$this->error('参数错误！');
		}
		$Reply = M('Reply');
		$rid = $_GET['id'];
		
		if($_GET['status']==1){
			$rstatus= 0;
		}else{
			$rstatus = 1;
		}

		$Reply->rstatus = $rstatus;
		if(false!== $Reply->where('rid='.$rid)->save()){
			$this->success('修改成功！');
		}else{
			$this->error('修改失败！');
		}		
	}
	
	public function del() {
		$rid = $_GET ['id'];
		$Reply = M('Reply');

		if ($Reply->where ( 'rid=' . $rid )->delete ()) {
			$this->success ( '删除成功！' );
		} else {
			$this->error ( '删除失败！' );
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}