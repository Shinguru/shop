<?php
	namespace Admin\Controller;
	use Think\Controller;
header("charset=utf8");
	class GoodsController extends Controller{
		
		//商品列表显示
		function showlist(){
			//实例化model
			$goods = D("Goods");
			$info = $goods -> select(); //获得数据信息
			
			$this -> assign('info',$info);
			$this -> display();
			//var_dump(get_defined_constants(true));
		}
		//添加商品
		function add(){
			$this -> display();
		}
		//修改商品
		function update(){
			$this -> display();
		}
	}
