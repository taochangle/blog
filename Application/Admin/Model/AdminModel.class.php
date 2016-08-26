<?php
namespace Admin\Model;

use Think\Model;
class AdminModel extends Model {

	// 自动验证设置
	protected $_validate = array(
		
			//array('cname', '', '分类已经存在', 0, 'unique', self::MODEL_INSERT),
			array('name', 'require', '内容必须填写',1),
			array('password', 'require', '排序必须填写',1),
	);
	// 自动填充设置
	protected $_auto = array(
			array('datetime', 'time', self::MODEL_INSERT, 'function'),
	);
}