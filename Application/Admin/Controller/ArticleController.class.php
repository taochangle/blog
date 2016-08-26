<?php

namespace Admin\Controller;

use Think\Controller;

class ArticleController extends CommonController {
	public function index() {
		if (isset($_POST['keywords'])){
			$keywords = $_POST['keywords'];
		}

		$Article = M ( 'Article' );
		if(isset($keywords)){
			$count = $Article->where("atitle like '%".$keywords."%' or acontent like '%".$keywords."%' ")->count (); // 查询满足要求的总记录数
		}else{
			$count = $Article->count (); // 查询满足要求的总记录数
		}
		
		
		$Page = new \Think\Page ( $count, 20 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$Category = M ( 'Category' );
		$show = $Page->show (); // 分页显示输出
		if(isset($keywords)){
			$list = $Article->where("atitle like '%".$keywords."%' or acontent like '%".$keywords."%' ")->join ( 'left join category ON category.cid = article.acid' )->order ( 'aorder asc ,atime desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->field ( 'aid,atitle,acontent,acid,cname,atime,aorder' )->select ();				
		}else{
		$list = $Article->join ( 'left join category ON category.cid = article.acid' )->order ( 'aorder asc ,atime desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->field ( 'aid,atitle,acontent,acid,cname,atime,aorder' )->select ();
		}
		$this->assign ( 'count', $count ); // 赋值数据集
		$this->assign ( 'list', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display (); // 输出模板
	}
	public function add() {
		$Category = M ( 'Category' );
		$data = $Category->select ();
		$this->assign ( 'data', $data );
		$this->display ();
	}
	public function doAdd() {
		$data = D ( 'Article' );
		if ($data->create ()) {
			if (false !== $data->add ()) {
				$this->success ( '文章发布成功！' );
			} else {
				$this->error ( '数据写入错误' );
			}
		} else {
			// 字段验证错误
			$this->error ( $data->getError () );
		}
	}
	public function edit() {
		$Category = M ( 'Category' );
		$Article = M ( 'Article' );
		$aid = $_GET ['id'];
		$ArticleData = $Article->where ( 'aid=' . $aid )->find ();
		$CateData = $Category->select ();
		// var_dump($CateData);
		$this->assign ( 'catData', $CateData );
		$this->assign ( 'artData', $ArticleData );
		
		$this->display ();
	}
	function doEdit(){
		$data = D ('Article');
		$aid = $_POST ['aid'];
		if ($data->create()) {
			if (false !== $data->where ( 'aid=' . $aid )->save ()) {
				$this->success('修改成功！','index');
			} else {
				$this->error('数据写入错误');
			}
		}else {
			// 字段验证错误
			$this->error($data->getError());
		}
	}
	public function del() {
		$aid = $_GET ['id'];
		$Article = M ( 'Article' );
		if ($Article->where ( 'aid in(' . $aid.')' )->delete ()) {
			$this->success ( '文章删除成功！' );
		} else {
			$this->error ( $Article->getError () );
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}