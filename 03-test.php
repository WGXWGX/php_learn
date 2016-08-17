<?php
	
	function login($name,$pass){
		if($name=='admin' && $pass=='12345'){
			return true;
		}else{
			return FALSE;
		}
	}
	
	if(isset($_POST['sub'])){
		$name=$_POST['username'];
		$pass=$_POST['pass'];
		
		//echo $name."||".$pass;
		//die();
		
		
		$result=login($name,$pass);
		
		//var_dump($result);
		//die();
		
		if($result){
			echo "<script>alert('登录成功')</script>";
		}else{
			echo "<script>alert('登录失败')</script>";
		}
	}
	/*
	function aa(){
		$a=10;
		echo $a;
		return;    //ret
		$b=$a+1;
		echo $b;
	}
	
	aa();*/

?>

<form action="03-test.php" method="post">
	用户名:<input type="text" name="username"><br />
	密&nbsp;码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">
</form>

