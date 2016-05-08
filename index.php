<?php
header("charset=utf8");
//引入框架的核心程
define('APP_DEBUG',True); // 开启调试模式
define('APP_PATH','../shop/');
define('THINK_PATH',realpath('../tp3/ThinkPHP').'/');
//定义css,imges,js常量
define('SITE_URL', 'http://shop.com/');
define('CSS_URL', SITE_URL.'Public/home/css/');
define('IMG_URL', SITE_URL.'Public/home/images/');
define('JS_URL', SITE_URL.'Public/home/js/');

//制作一个输出调试函数
function show_bug($msg){
	echo "<pre style='color:red'>";
	var_dump($msg);
	echo "<pre/>";
}
//后台css,images,js常量
define('ADMIN_CSS_URL', SITE_URL.'Public/admin/css/');
define('ADMIN_IMG_URL', SITE_URL.'Public/admin/img/');
define('ADMIN_JS_URL', SITE_URL.'Public/admin/js/');
require THINK_PATH.'ThinkPHP.php';
