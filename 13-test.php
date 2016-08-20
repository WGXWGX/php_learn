<?php
	$dirname="F:\db";

	function total($dirname,&$dirnum,&$filenum){
		$dir=opendir($dirname);
		readdir($dir)."<br />";
		readdir($dir)."<br />";
		
		while(($filename=readdir($dir))){
			$newfile=$dirname.'/'.$filename;
			if(is_dir($newfile)){
				total($newfile,$dirnum,$filenum);
				$dirnum++;
			}else{
				$filenum++;
			}
		}
		closedir($dir);
		
		
		
	}
	
	$dirnum=0;
	$filenum=0;
	total($dirname,$dirnum,$filenum);
	echo $dirnum."<br />";
	echo $filenum."<br />";
	

?>