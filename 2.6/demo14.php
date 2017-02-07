<?php
header("Content-Type:text/html;charset=utf-8");	

/**
 * $this 应用
 * 一个类是不是灵活一些，可扩展性
 * @author zhangxiaochen <2966761062@qq.com>
 */
 
 class Car{
	 
	 //成员属性
	 public $name = "奔驰";
	 public $age = "30";
	 
	 //成员方法
	 public function pao(){
		 
		 $this -> name = "宝马";
		 return $this -> name."正在跑……";
		 
	 }
	 public function biao(){
		 
		 echo $this -> pao();
		 return "正在飙……";
		 
	 }
	 
 }
 
 $obj = new Car();
 
 echo $obj -> biao();