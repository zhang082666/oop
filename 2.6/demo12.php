<?php
header("Content-Type:text/html;charset=utf-8");	

/**
 * 抽象一个数据库操作
 * @author zhangxiaochen <2966761062@qq.com>
 */
 class MVC{
	 
	 public $root = "root";
	 public $password = "";
	 public $ip = "127.0.0.1";
	 public $dateName = "mvc";
	 
	 public function __construct(){
		 
		 echo $this -> connect();
		 
	 }
	 //连接数据库
	 public function conntect(){
		 
		 return "链接数据库成功";
		 
	 }
	 
	 //add数据
	 public function add(){
		 
		 
		 
	 }
	 //del数据
	 public function del(){
		 
		 
		 
	 }
	 //edit数据
	 public function edit(){
		 
		 
		 
	 }
	 //select数据
	 public function lists(){
		 
		 
		 
	 }
	 
	 //关闭数据库
	 public function close(){
		 
		 
		 
	 }
	 
 }
 
 $obj = new MVC();