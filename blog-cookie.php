<?php
	//setcookie('cookie键名','cookie键值',生存时间)
	
	//setcookie('name','laoshan',time()+20);
	//setcookie('name','laoxie');
	if($_COOKIE['name']){
		echo "123";
	}else{
		echo "456";
	}

?>
