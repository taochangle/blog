<?php
function check_verify($code, $id = '') {
	$verify = new \Think\Verify ( array (
			'reset' => false 
	) );
	return $verify->check ( $code, $id );
}
/**
 * 功能：检测一个目录是否存在，不存在则创建它
 * 
 * @param string $path
 *        	待检测的目录
 * @return boolean
 */
function makeDir($path) {
	return is_dir ( $path ) or (makeDir ( dirname ( $path ) ) and @mkdir ( $path, 0777 ));
}

/**
 * 功能：检测一个目录是否存在，存在则删除它
 * 
 * @param string $path
 *        	待检测的目录
 * @return boolean
 */
function delDir($path) {
	if (is_file ( $path )) {
		unlink ( $path );
		return;
	}
	
	$handle = opendir ( $path );
	while ( $filename = readdir ( $handle ) ) {
		if ($filename == '.' || $filename == '..') {
			continue;
		}
		$new_path = $path . '/' . $filename;
		if (is_dir ( $new_path )) {
			del_dir ( $new_path );
		}
		if (is_file ( $new_path )) {
			unlink ( $new_path );
		}
	}
	closedir ( $handle );
	rmdir ( $path );
}
?>