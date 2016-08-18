<?php
	$arr=array(1,2,-3,4,-5,-6,9,8);
	$arr1=array_filter($arr,demo);
	
	function demo($n){
		if($n>0){
			return true;
		}else{
			return false;
		}
	}
	
	echo "<pre>";
	print_r($arr1);
	echo "</pre>";

?>