<?php
	$str="dsnlknkl";
	
	
	function re_r($str){
		/*
		if(strlen($str)==0){
			return;
		}*/
		if(strlen($str)>0){
			re_r(substr($str,0,1));
			echo substr($str,0,1)."&nbsp;";
			return;
		}
	}
	
	re_r($str);

?>