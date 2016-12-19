<a href='xx.php?num=2'>跳转</a>

<?php
	include "conn.php";
	if(isset($_GET['num'])){
		$num=$_GET['num'];
		//echo $num;
		$sql="select * from blog limit $num,2";
		//echo $sql;
		//die();
		$query=mysqli_query($link,$sql);
		//var_dump($query);
		//die();
		
	}
	while($rs=mysqli_fetch_array($query)){
	
?>

<h2><?php echo $rs['title'];?></h2>
<p><?php echo $rs['content'];?></p>

<?php
	}
?>
