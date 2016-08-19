<?php
	$dir="F:\db";
	
	//readFileDir($dir);
	function readFileDir($dir){
		if(!is_dir($dir)){
			return false;
		}
		
		//打开文件句柄 打开文件夹
		$handle=opendir($dir);
		while(($file=readdir($handle)) !=FALSE){
			if($file=='.' || $file=='..'){
				continue;
			}
			$file=$dir.DIRECTORY_SEPARATOR.$file;
			
			if(is_file($file)){
				//var_dump($file);
				//die();
				echo $file."<br />";
			}else if(is_dir($file)){
				//echo $file
				//echo 123;
				readFileDir($file);
			}
		}
		
	}
?>