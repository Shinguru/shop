<?php
namespace Admin\Controller;
use Think\Controller;
//后台首页控制器
class IndexController extends  Controller{
	function index(){
		$this -> display();
	}
	//后台头部
	function head(){
		$this -> display();
	}
	
	//左边
	function left(){
		$this->display();
	}
	
	//右边
	function right(){
		$this -> display();
	}
}
