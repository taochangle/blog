<?php

namespace Admin\Controller;

use Think\Controller;

class UserController extends Controller {
	public function login() {
		$this->display ();
	}
	function lockscreen() {
		$this->display ();
	}
	public function doLogin() {
		
		// 先验证验证吗
		if (! isset ( $_POST ['verify'] )) {
			$this->error ( '请输入验证码！' );
		}
		$code = $_POST ['verify'];
		if (! check_verify ( $code, 1 )) {
			$this->error ( '验证码错误！' );
		}
		
		// 验证用户名密码
		$rules = array (
				array (
						'password',
						'md5',
						3,
						'function' 
				) 
		) // 对password字段在新增和编辑的时候使md5函数处理
;
		$Admin = D ( 'Admin' );
		if ($data = $Admin->auto ( $rules )->create ()) {
			$where = array ();
			$where ['name'] = $data ['name'];
			$where ['password'] = $data ['password'];
			$result = $Admin->where ( $where )->field ( 'id,name,password,image' )->find ();
			if ($result) {
				session ( 'admin.id', $result ['id'] );
				session ( 'admin.name', $result ['name'] );
				session ( 'admin.password', $result ['password'] );
				session ( 'admin.avatar', $result ['image'] );
				$data['datetime'] = time();
				if($result = $Admin->where('id='.$result ['id'])->save($data)){
				$this->success ( '登录成功！', U ( 'Admin/Index/index' ) );
				}else{
					$this->error ( '登录失败！' );
				}
			} else {
				$this->error ( '用户名或密码错误！' );
			}
		} else {
			// 字段验证错误
			var_dump ( $data );
			$this->error ( $data->getError () );
		}
	}
	
	//解锁
	function unlock() {
		if (($_POST ['password'] == '')) {
			$this->error ( '请输入密码！' );
		}
		$Admin = D ( 'Admin' );
		$where ['name'] = $_POST ['name'];
		$where ['password'] = md5 ( $_POST ['password'] );
		$result = $Admin->where ( $where )->field ( 'id,name,password,image' )->find ();
		if ($result) {
			session ( 'admin.id', $result ['id'] );
			session ( 'admin.name', $result ['name'] );
			session ( 'admin.password', $result ['password'] );
			session ( 'admin.avatar', $result ['image'] );
			$data['datetime'] = time();
			if($result = $User->where('id='.$result ['id'])->save($data)){
				$this->success ( '登录成功！', U ( 'Admin/Index/index' ) );
			}else{
				$this->error ( '登录失败！' );
			}
		} else {
			$this->error ( '用户名或密码错误！' );
		}
	}
	public function logout() {
		session ( 'admin.password', null );
		if (! isset ( $_SESSION ['admin'] ['password'] )) {
			$this->success ( '注销成功！', U ( 'User/lockscreen' ) );
		}
	}
	public function verify() {
		$config = array (
				'fontSize' => 20, // 验证码字体大小
				'length' => 4, // 验证码位数
				'useNoise' => false 
		); // 关闭验证码杂点
		$Verify = new \Think\Verify ( $config );
		$Verify->entry ( 1 );
	}
	function changePassword(){
		$this->display();
	}
	function doChangePassword() {
		$User = M ( 'User' );
		$oldPwd = md5($_POST['oldPwd']);
		$newPwd1 = md5($_POST['newPwd1']);
		$newPwd2 = md5($_POST['newPwd2']);
		if($newPwd1!=$newPwd2){
			$this->error('确认密码不正确！');
		}
		$id = $_SESSION['user']['id'];
		$data = $User->where ( 'id=' . $id )->find ();
		if ($data['password']!=$oldPwd){
			$this->error('旧密码错误');
		}
	
		if(strlen($_POST['newPwd1'])<6){
			$this->error('新密码长度不够6位');
		}
	
		$data['password'] = $newPwd1;
		if($data = $User->where ( 'id=' . $id )->save($data)){
			session('admin.password',null);
			$this->success('更新成功，请重新登陆！','lockscreen');
		}else{
			$this->success('更新失败');
		}
	}
	
	function changePic(){
		$this->display();
	}
	
	function doUploadPic(){
	if (IS_POST) {
            header('Content-Type: text/html; charset=utf-8');
            $result = array();
            $id = $_GET["id"];
            $msg = '';
        	$rand= time();
            $path='Public/Upload/avatar/'.$id.'/'.$rand.'/';
            if (file_exists($path)) {
                delDir($path);
            }
            $avatars = array("__avatar1");
            $avatar = $_FILES[$avatars['0']];
            if ($avatar['error'] > 0 ){
                $msg .= $avatar['error'];
            }
            
            if(!file_exists($path)){
                makeDir($path);
            }
            $savePath = $path.$rand. ".jpg";
            if(move_uploaded_file($avatar["tmp_name"], $savePath)){
                $result['msg'] = $msg;
                $result['success'] = true;
                
                
                $User = M ( 'User' );
                $data['image'] = $savePath;
                if($data = $User->where ( 'id=' . $_SESSION['user']['id'] )->save($data)){
                	session ( 'user.avatar', $savePath );
                	echo json_encode($result);
                }else{
                	$result['success'] = false;
            }               
            }else{
                $result['success'] = false;
            }
        }
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}