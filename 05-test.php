<?php
	//如果一个变量后面有括号$val=hello $val()就将寻找到与变量名
	//同名的函数
	function hello($a,$b){
		return $a+$b;
	}
	
	$val="hello";
	echo "结果:".$val(3,4)."<br />";

?>