<?php
header("Content-Type:text/html;charset=utf-8");

/**
 * 抽象一个类
 * 实例化一个类
 * 调用类中的成员属性和成员方法
 * @author zhangxiaochen <2966761062@qq.com>
 */	
 
 class You{
	 
	 public $zuiba = "嘴巴";
	 public $bizi = "鼻子";
	 public $erduo = "耳朵";
	 public $yanjing = "眼睛";
	 
	 public function wan(){
		 
		 return "正在玩……";
		 
	 }
	 public function shui(){
		 
		 return "正在睡……";
		 
	 }
	 public function chi(){
		 
		 return "正在吃……";
		 
	 }
	 
 }
 
 //实例化一个对象
 $obj = new You();
 
 //调用成员属性
 echo $obj -> zuiba;
 echo $obj -> bizi;
 echo $obj -> yanjing;
 
 //调用成员方法
 echo $obj -> wan();