<?php
header("Content-Type:text/html;charset=utf-8");

/**
 * 抽象一个类
 * 调用成员属性和成员方法
 * 修改成员属性的值
 * 调用成员方法添加参数
 * @author zhangxiaochen <2966761062@qq.com>
 */	
 
 class Car{
	 
	 //成员属性
	 public $name = "奔驰";
	 public $age = "30";
	 
	 
	 //成员方法
	 public function chi(){
		 
		 return "正在吃……";
		 
	 }
	  public function wan($a){
		 
		 return $a."正在玩……";
		 
	 }
	  public function shui(){
		 
		 return "正在睡……";
		 
	 }
	 
 }
  $obj = new Car();
 
 echo $obj -> name;
 $obj -> name = "宝马";
 echo "<br />";
 echo $obj ->name;
 echo "<br />";
 echo $obj -> wan("儿子");