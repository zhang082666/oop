<?php
header("Content-Type:text/html;charset=utf-8");	

/**
 * 继承的操作
 * @author zhangxiaochen <2966761062@qq.com>
 */
 
 //抽象一个鸟
 
 class Bird{
	 
	 //成员属性
	 protected $name = "百灵";
	 public $age = 30;
	 public $sex = "公";
	 
	 //成员方法
	 public function fly(){
		 
		 return "正在飞……";
		 
	 }
	 
 }
 
 class Bailing extends Bird{
	 
	 
	 
 }
 
 class Dianke extends Bird{
	 
	 
	 
 }
 
 
 //实例化一个对象
 $bailing = new Bailing();
 //echo $bailing -> name;
 echo $bailing -> fly();
 
 echo "<br />";
 echo "<br />";
 
 //实例化一个对象
 $dianke = new Dianke();
 echo $dianke -> age;
 echo $dianke -> fly();