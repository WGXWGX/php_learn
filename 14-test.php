<?php
	$user['id']=1;
	$user[]=66;
	$user['name']="zhangsan";
	$user[]=77;
	$user['age']=10;
	$user['gender']="male";
	$user['mail']="jian@163.com";
	$user['arr']=array(1,2);
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	//数组的声明方式1 --赋值方式  2--array
	$user[9]=1;
	$user[]='zhangsan';
	$user[0]=10;
	$user[]='male';
	$user[7]='jian@163.com';
	$user[8]=array(1,2);
	
	var_dump($user[2]);
	
	
	echo "<pre>";
	print_r($user);
	echo "</pre>";*/
	
	遍历索引数组
	
	for($i=0;$i<count($arr);$i++){
		echo $arr[$i]."<br />";
	}
	
	$arr1=array(
		'id'=>1,
		'name'=>'zhangsan',
		'age'=>10,
		'gender'=>'male',
		'email'=>'jian@163.com',
		//'arr'=>$arr,
	);
	
	foreach(数组变量名 as 键名=>键值){}
	foreach($arr1 as $k=>$v){
		echo $k."=>".$v."<br />";
	}
	
	echo "<pre>";
	print_r($arr1);
	echo "</pre>";
	
?>









