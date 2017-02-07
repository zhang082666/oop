<?php
header("Content-Type:text/html;charset=utf-8");	
/**
 * 抽象一个类
 * 实例化一个类
 * 调用类中的成员属性和成员方法
 * @author zhangxiaochen <2966761062@qq.com>
 */
 class Man{
	 
	 public $name = "杰克";
	 public $age = "28";
	 public $home = "加利福尼亚州";
	 public $name2 = "大卫";
	 public $home2 = "澳大利亚";
	 public $daishu = "袋鼠";
	 
	public function wan(){
		
		return "正在玩……";
		
	}
	public function lvxing(){
		
		return "正在旅行……";
		
	}
	public function shui(){
		
		return "正在睡……";
		
	}
	 
 }
 //实例化一个对象
 $obj = new Man();
 //调用成员属性，不要加$符号
 echo $obj -> age;
 echo "的";
 echo $obj -> name;
 echo "在";
 echo $obj -> home;
 
 //调用方法
 echo $obj ->lvxing();
 
 echo "<br />";
  //实例化一个对象
 $obj = new Man();
 //调用成员属性，不要加$符号
 echo $obj -> age;
 echo "的";
 echo $obj -> name2;
 echo "在";
 echo $obj -> home2;
 
 //调用方法
 echo $obj ->wan();
 echo $obj -> daishu;
 echo "，哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈";