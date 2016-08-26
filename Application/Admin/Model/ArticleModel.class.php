<?php
namespace Admin\Model;

use Think\Model;
class ArticleModel extends Model {
	// 自动验证设置
	protected $_validate = array(
			array('atitle', 'require', '标题必须填写！', 1),//1为必须验证
			//array('cname', '', '分类已经存在', 0, 'unique', self::MODEL_INSERT),
			array('acontent', 'require', '内容必须填写',1),
			array('aorder', 'require', '排序必须填写',1),
			array('aorder','number','排序应为纯数字！'),
			array('acid', 'require', '分类必须选择',1),
	);
	// 自动填充设置
	protected $_auto = array(
			array('atime', 'time', self::MODEL_INSERT, 'function'),
	);
}