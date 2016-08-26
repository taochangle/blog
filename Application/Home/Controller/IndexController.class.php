<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
	function __construct() {
		parent::__construct ();
		$Category = M ( 'Category' );
		$menu = $Category->order ( 'ctime desc' )->select ();
		$Article =M('Article');
		$month = $Article->order ( 'atime desc' )->getField("DISTINCT FROM_UNIXTIME(atime,'%m') as month,aid");
		// 最近10篇
		$allArticle = $Article->order ( 'atime desc' )->limit ( 0, 10 )->select ();
		$this->assign ( 'allArticle', $allArticle ); // 赋值分页输出
		$this->assign ( 'menu', $menu );
		$this->assign ( 'month', $month );

	}
	public function index() {
		$Article = M ( 'Article' );
		$allArticle = $Article->order ( 'atime desc' )->limit ( 0, 10 )->select ();
		$this->assign ( 'allArticle', $allArticle ); // 赋值分页输出
		$count = $Article->count (); // 查询满足要求的总记录数
		$Page = new \Think\Page ( $count, 5 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show (); // 分页显示输出
		                        // $Dao = M();
		                        
		// $list = $Dao->query("select name,aid,atitle,cname,cid,acontent,count(zid) as zancount from article a left join zan z on a.aid = z.zaid left join user on user.id = a.auid left join category c on c.cid = a.acid GROUP by a.aid ORDER BY a.atime DESC");
		$list = $Article->join ( 'left join zan on aid = zaid left join user on id = auid left join category  on cid =acid' )->group ( 'aid' )->order ( 'atime desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->field ( 'name,aid,atitle,cname,cid,acontent,count(zid) as zancount,atime,acid' )->select ();
		$this->assign ( 'list', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		$Category = M ( 'Category' );
		$Category = $Category->select ();
		$this->assign ( 'Category', $Category ); // 赋值分页输出
		
		$this->display (); // 输出模板
	}
	function article() {
		if (! isset ( $_GET ['aid'] )) {
			$this->error ( '文章不存在！' );
		}
		
		// 导航需要数据
		
		$Category = M ( 'Category' );
		$Category = $Category->select ();
		$this->assign ( 'Category', $Category ); // 赋值分页输出
		
		$aid = $_GET ['aid'];
		
		$Article = M ( 'Article' );

		$data = $Article->where ( 'aid=' . $aid )->join ( 'left join category ON category.cid = article.acid left join user ON user.id = article.auid' )->field ( 'aid,atitle,acontent,acid,cname,atime,aorder,name' )->find ();
		$this->assign ( 'data', $data ); // 赋值数据集
		                                 // var_dump($data);
		                                 
		// /评论
		                                 // 评论
		$Reply = M ( 'Reply' );
		$count = $Reply->where ( 'rstatus=1 and raid=' . $aid )->count (); // 查询满足要求的总记录数
		$Page = new \Think\Page ( $count, 5 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show (); // 分页显示输出
		                             // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$replyList = $Reply->where ( 'rstatus=1 and raid=' . $aid )->order ( 'rtime desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->select ();
		$this->assign ( 'replyList', $replyList ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		                             // $this->display(); // 输出模板
		                             
		// 赞数量
		
		$Zan = M ( 'Zan' );
		$zancount = $Zan->join ( 'inner join article on article.aid = zan.zaid' )->where ( "aid=" . $aid )->count ();
		$this->assign ( 'zanCount', $zancount );
		
		$this->display (); // 输出模板
	}
	function category() {
		if (!isset ( $_GET ['cid'] )&&!isset($_GET['month'])) {
			//$this->error ( '分类不存在！' );
		}
		$month = $_GET['month'];
		$Category = M ( 'Category' );
		$cid = $_GET ['cid'];
		$Article = M ( 'Article' );
		if($month){
			$count = $Article->where ("FROM_UNIXTIME(atime,'%m')=".$month )->order ( 'atime desc' )->limit ( 0, 5 )->count ();
		}else{
			$count = $Article->where ( 'acid=' . $cid )->order ( 'atime desc' )->limit ( 0, 5 )->count ();
		}
		
		$Page = new \Think\Page ( $count, 5 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show (); // 分页显示输出
		if($month){
			$list = $Article->where (" FROM_UNIXTIME(atime,'%m')=".$month )->join ( 'left join zan on aid = zaid left join user on id = auid left join category  on cid =acid' )->group ( 'aid' )->order ( 'atime desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->field ( 'name,aid,atitle,cname,cid,acontent,count(zid) as zancount,atime,acid' )->select ();
			
		}else{
			$list = $Article->where ( 'acid=' . $cid )->join ( 'left join zan on aid = zaid left join user on id = auid left join category  on cid =acid' )->group ( 'aid' )->order ( 'atime desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->field ( 'name,aid,atitle,cname,cid,acontent,count(zid) as zancount,atime,acid' )->select ();
			
		}
			$this->assign ( 'list', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		                                 // var_dump($show);
		$this->display ('index'); // 输出模板
	}
	function search() {
		if (! isset ( $_GET ['keywords'] )) {
			$this->error ( '请输入关键词！' );
		}
		
		$Category = M ( 'Category' );
		$keywords = $_GET ['keywords'];
		$Article = M ( 'Article' );
		$count = $Article->where ( "atitle like '%" . $keywords . "%' or acontent like '%" . $keywords . "%' " )->count (); // 查询满足要求的总记录数
		$Page = new \Think\Page ( $count, 5 ); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show (); // 分页显示输出
		$list = $Article->where ( "atitle like '%" . $keywords . "%' or acontent like '%" . $keywords . "%' " )->join ( 'left join zan on aid = zaid left join user on id = auid left join category  on cid =acid' )->group ( 'aid' )->order ( 'atime desc' )->limit ( $Page->firstRow . ',' . $Page->listRows )->field ( 'name,aid,atitle,cname,cid,acontent,count(zid) as zancount,atime,acid' )->select ();
		$this->assign ( 'list', $list ); // 赋值数据集
		$this->assign ( 'page', $show ); // 赋值分页输出
		                                 // var_dump($show);
		$this->display ('index'); // 输出模板
	}
	public function reply() {
		if (! isset ( $_POST ['rname'] ) || ! isset ( $_POST ['rcontent'] ) || ! isset ( $_POST ['remail'] )) {
			$this->error ( '昵称或内容不能为空！' );
		}
		if (! isset ( $_POST ['raid'] )) {
			$this->error ( '文章不存在！' );
		}
		if (strlen ( $_POST ['rcontent'] ) < 10) {
			$this->error ( '内容不得小于10个字符！' );
		}
		
		$pattern = '/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/';
		if (! preg_match ( $pattern, $_POST ['remail'] )) {
			$this->error ( '邮箱格式错误！' );
		}
		$Reply = M ( 'Reply' );
		// 创建数据后写入到数据库
		$data ['rip'] = get_client_ip ();
		$data ['rname'] = $_POST ['rname'];
		$data ['raid'] = $_POST ['raid'];
		$data ['remail'] = $_POST ['remail'];
		$data ['rcontent'] = $_POST ['rcontent'];
		$data ['rtime'] = time ();
		if ($result = $Reply->data ( $data )->add ()) {
			$this->success ( '评论成功，审核通过后显示！' );
		} else {
			$this->error ( '评论失败！' );
		}
	}
	function ChaXunYiZan() {
		$aid = $_GET ['aid'];
		$Zan = M ( 'Zan' );
		$currIP = get_client_ip ();
		$count = $Zan->join ( 'inner join article on article.aid = zan.zaid' )->where ( "aid='" . $aid . "' and zip ='" . $currIP . "'" )->count ();
		if ($count > 0) {
			echo 'false';
		} else {
			echo 'true';
		}
	}
	function zan() {
		$aid = $_GET ['aid'];
		$Zan = M ( 'Zan' );
		$currIP = get_client_ip ();
		
		$data ['zip'] = $currIP;
		$data ['zaid'] = $aid;
		
		if ($result = $Zan->data ( $data )->add ()) {
			echo 'true';
		} else {
			echo 'false';
		}
	}
}