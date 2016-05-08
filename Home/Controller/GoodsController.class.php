<?php
namespace Home\Controller;
use Think\Controller;
//商品控制器
class GoodsController extends Controller {
	//商品列表
	function showlist() {
		//跨控制器调用
		//$user = new UserController();
		//$user = A('User');
		//echo $user -> number();
		//echo R('User/number');
		//echo R('Admin/Product/xxx');
		$this -> display();
	}

	//商品详细信息
	function detail() {
		$this -> display();
	}

}
