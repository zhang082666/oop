<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * 实例化一个类
 * 调用类中的成员属性和成员方法
 * @author zhangxiaochen <2966761062@qq.com>
 */	
 
 class Car{
	 
	 public $yanjing = "眼睛";
	 public $bizi = "鼻子";
	 public $zuiba = "嘴巴";
	 public $erduo = "耳朵";
	 
	 public function chi(){
		 
		 return "正在吃……";
		 
	 }
	 public function wan(){
		 
		 return "正在玩……";
		 
	 }
	 public function shui(){
		 
		 return "正在睡……";
		 
	 }
	 
 }
 
 //实例化一个对象
 $obj = new Car();
 //调用成员属性，不要加$符号
 echo $obj -> yanjing;
 echo $obj -> bizi;
 //不可以调用不存在的成员属性
 
 //调用方法
 echo $obj -> wan();
 //也不能调用不存在的成员方法