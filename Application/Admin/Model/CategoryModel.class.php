<?php
namespace Admin\Model;

use Think\Model;
class CategoryModel extends Model {
	// 自动验证设置
	protected $_validate = array(
			array('cname', 'require', '分类名必须填写！', 1),//1为必须验证
			array('cname', '', '分类已经存在', 0, 'unique', self::MODEL_INSERT),
			array('cdesc', 'require', '内容必须填写',1),
			array('corder', 'require', '排序必须填写',1),
			array('corder','number','排序应为纯数字！'),
	);
	// 自动填充设置
	protected $_auto = array(
			array('ctime', 'time', self::MODEL_INSERT, 'function'),
	);
}