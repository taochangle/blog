<?php

namespace Admin\Controller;

use Think\Controller;

class CategoryController extends CommonController {
	public function index() {
		$Category = M ( 'Category' );
		$count = $Category->count (); // 查询满足要求的总记录数
		$Page = new \Think\Page ( $count, 10 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show (); // 分页显示输出
		$list = $Category->order ( 'corder asc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		$this->assign ( 'list', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$this->display ();
	}
	public function add(){
		$this->display();
	}
	public function doAdd() {
		$data = D ( 'Category' );
		if ($data->create ()) {
			if (false !== $data->add ()) {
				$this->success ( '添加分类成功！' );
			} else {
				$this->error ( '添加分类失败！' );
			}
		} else {
			$this->error ( $data->getError () );
		}
	}
	public function del() {
		$cid = $_GET ['id'];
		$Category = M ( 'Category' );
		$Article = M ( 'Article' );
		$content = $Article->where ( 'acid=' . $cid )->find ();
		if (isset ( $content )) {
			$this->error ( '该分类下存在文章，不能直接删除！' );
		}
		if ($Category->where ( 'cid=' . $cid )->delete ()) {
			$this->success ( '删除成功！' );
		} else {
			$this->error ( '删除失败！' );
		}
	}
	public function edit() {
		$Category = M ( 'Category' );
		$cid = $_GET ['id'];
		$data = $Category->where ( 'cid=' . $cid )->find ();
		$this->assign ( 'data', $data );
		$this->display ();
	}
	public function doEdit() {
		$data = D ( 'Category' );
		$cid = $_POST ['cid'];
		if ($data->create ()) {
			if (false !== $data->where ( 'cid=' . $cid )->save ()) {
				$this->success ( '修改成功！', 'index' );
			} else {
				$this->error ( '修改成功！' );
			}
		} else {
			$this->error ( $data->getError () );
		}
	}

}