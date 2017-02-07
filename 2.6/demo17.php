<?php
header("Content-Type:text/html;charset=utf-8");

/**
 * 构造方法和析构方法
 * 
 * @author zhangxiaochen <2966761062@qq.com>
 */
 
 class Bird{
	 
	 public $name = "百灵鸟";
	 public $age = "10";
	 
	 //构造方法初始化 __construct
	 public function __construct(){
		 
		 echo "我想养一个鸟";
		 
	 }
	 
	 //飞的方法
	 public function fly(){
		 
		 return $this -> name."正在飞……";
		 
	 }
	 
	 //析构方法
	 public function __destruct(){
		 
		 echo "对象不可用";
		 
	 }
	 
 }
 
 $bailing = new Bird();
 echo $bailing -> fly();
 echo "<br />";