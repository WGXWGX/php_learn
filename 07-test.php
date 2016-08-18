<?php
	//1:bool copy  ( string $source  , string $dest )
	//2:bool chown  ( string $filename  , mixed  $user  )
	//带有mixed，表示你可以传任意类型的数据
	//ugo  user group other
	//3：bool arsort  ( array &$array  [, int $sort_flags  = SORT_REGULAR  ] )
	//带有&参数的函数 表示引用赋值 带有[]的时候里面的参数可选 
	//4:int array_unshift  ( array &$array  , mixed  $var  [, mixed  $...  ] )
	//带有...表示可以传递任意多个参数
	//5:array array_filter  ( array $input  [, callable  $callback  = ""  ] )
	//callable 回调函数
	function demo($x,$y){
		return $x+$y;
	}
	
	function test($x,$y){
		return $x*$x+$y*$y;
	}
	
	
	function sum($a,$b,$fun){
		return ($a+$b+$fun($a,$b));
	}
	
	//echo test(1,2);
	echo sum(1,2,demo);
	echo sum(1,2,test);
	
	
	/*
	function demo(){
		$args=func_get_args();
		$sum=0;
		for($i=0;$i<count($args);$i++){
			$sum+=$args[$i];
		}
		
		echo $sum;
		//var_dump($args);
	}
	
	demo(1,2,3,4,5,6,7,8,9);*/
	
	/*
	function aa($a,$b=3){
		echo $a."||".$b."<br />";
	}
	
	aa(4,7);
	aa(9);*/
	
	
	/*
	$arr=array(1,9,5,4,10);
	arsort($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";*/
?>