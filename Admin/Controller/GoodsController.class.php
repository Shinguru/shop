<?php
	namespace Admin\Controller;
	use Think\Controller;
header("charset=utf8");
	class GoodsController extends Controller{
		
		//商品列表显示
		function showlist(){
			//实例化model
			$goods = D("Goods");
			$info = $goods -> select();
			//show_bug($info);
			foreach($info as $k => $v){
				echo $v['goods_name'];
			}
			
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
