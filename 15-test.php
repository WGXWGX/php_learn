<?php
	//二维数组的声明
	$user=array(
		array(1,'zhangsan',20,'male'),
		array(2,'lisi',23,'male'),
		array(3,'wangwu',24,'female'),
	);
	
	//echo $user[0][1];
	foreach($user as $v){
		//var_dump($v);
		//echo "<br />";
		foreach($v as $value){
			echo $value."<br />";
		}
		
	}
	
	

?>