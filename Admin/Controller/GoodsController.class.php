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
			//利用数组方式实现数据添加
			$goods = D('Goods');
			if(!empty($_POST)){
				$goods ->create();//收集post表单数据
				$add = $goods->add();
				if($add){
					$this->succuss('添加商品成功',U('Goods/showlist'));
				}else{
					echo "false";
				}
			}else{
				$this ->display();
			}
			
		}
		//修改商品
		function update(){
			$this -> display();
		}
	}
