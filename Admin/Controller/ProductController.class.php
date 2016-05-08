<?php
	namespace Admin\Controller;
	use Think\Controller;
	
	class ProductController extends Controller{
		
		//商品列表显示
		function showlist(){
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
