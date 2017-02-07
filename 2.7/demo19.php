<?php
header("Content-Type:text/html;charset=utf-8");	

/**
 * 还是继承的操作
 * @author zhangxiaochen <2966761062@qq.com>
 */
 
 //抽象一个鸟
 class Bird{
	 
	 //成员属性
	 public $name = "百灵";
	 public $age = 30;
	 public $sex = "公";
	 
	 //成员方法
	 public function __construct($name,$age,$sex){
		 
		 $this -> name = $name;
		 $this -> age = $age;
		 $this -> sex = $sex;
		 
	 }
	 
	 public function fly(){
		 
		 return $this -> name."正在飞……";
		 
	 }
	 
 }
 class Bailing extends Bird{
	 
	 public function fly(){
		 
		 //重载父类的方法
		 echo parent::fly();
		 
		 return "这个有冲突么";
		 
	 }
	 
 }
 
 //实例化一个对象
 
 //$bailing = new Bird("罗小黑",50,"母");
 
 //echo $bailing -> name;
 
 $bailing = new Bailing("罗小黑",50,"母");
 
 echo $bailing -> fly();	