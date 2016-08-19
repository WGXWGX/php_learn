<?php
	$str="dsnlknklvnsdl";
	
	
	function re_r($str){
		if(strlen($str)>0){
			re_r(substr($str,0,1));
			echo substr($str,0,1)."&nbsp;";
			return;
		}
	}
	
	re_r($str);
	/*
	for($i=0;$i<strlen($str);$i++){
		$str1.=$str[$i]."&nbsp;";
	}
	
	echo $str1;*/
	//d s n ...... l

?>