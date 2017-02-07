<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * class 类名{} 类名首字母大写
 * 属性：轮胎 玻璃 壳 防震器    成员属性
 * 方法：跑 车震 飙车 接客 载人 成员方法
 * 在成员属性和成员方法里一定要添加一个修饰词  就是public
 * @author zhangxiaochen <2966761062@qq.com>
 */	
 class Car{
	 
	 public $name = "曼巴赫";
	 public $age = "30";
	 
	 public function pao(){
		 
		 return "正在跑……";
		 
	 }
	 public function moca(){
		 
		 return "正在摩擦……";
		 
	 }
	 
	 
 }
 class Person{
	 
	 public $huabanxie = "滑板鞋";
	 public $yiboliangbu = "一步两步";
	 public $shishang = "时尚时尚最时尚";
	 
	 public function chi(){
		 
		 return "正在吃……";
		 
	 }
	 public function shui(){
		 
		 return "正在睡……";
		 
	 }
	 public function wan(){
		 
		 return "正在玩……";
		 
	 }
	 
 }
 $obj = new Person();
 
 var_dump($obj);
 
 $obj2 = $obj;
 var_dump($obj2);
 
 $obj2 = new Person();
 var_dump($obj2);