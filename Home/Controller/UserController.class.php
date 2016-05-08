<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//空操作
	function _empty(){
		echo "this is an empty Function!";
	}
	//用户登录
    function login(){
    	//调用视图display()
    	$this -> display();
    }
	
	function register(){
		$this->display();
	}
	
}
