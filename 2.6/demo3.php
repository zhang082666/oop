<?php
header("Content-Type:text/html;charset=utf-8");	
/**
 * 抽象一个类
 * class 类名{} 类名字的首字母大写
 * 属性：轮胎 玻璃 壳 防震器 成员属性
 * 方法：跑 车震 飙车 接客   成员方法
 * 在成员属性和成员方法里一定要加一个修饰词就是public
 * @author zhangxiaochen <2966761062@qq.com>
 */
 class Car{
	 
	 public $name = "布加迪威龙";
	 public $age = "30";
	 
	 public function pao(){
		 
		 return "正在跑……";
		 
	 }
	 public function biao(){
		 
		return "正在飙……";
	
	 }
	 
 }
 class Person{
	 
	 public $yanjing = "眼睛";
	 public $bizi = "鼻子";
	 public $erduo = "耳朵";
	 public $zuiba = "嘴巴";
	 
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