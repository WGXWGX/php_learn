<?php
	//echo (null+1)."<br />";

	$a=10;
	function demo(){
		static $a;
		$a+=11;
		echo $a."<br />";
	}
	/*
	function demo($b){
		//$b=&$a;
		global $a;
		$b+=11;
		$a=$b;
		echo $a;
	}*/
	
	demo($a);
	demo($a);
	/*
	$a=10;
	function aa(){
		
		global $a;
		$a=20;
		echo $a;
	}
	
	aa();*/

?>