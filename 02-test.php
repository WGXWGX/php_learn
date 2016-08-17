<?php
	//function aa(){}  无参函数
	//function aa($a,$b....){} 有参函数
	//有return的叫函数 没有return叫过程
	
	
	function table($rows,$cols){
		echo "<table border='1' align='center' width='800'>";
		echo "<caption>".$rows."行".$cols."列表格</caption>";
		for($i=0;$i<$rows;$i++){
			echo "<tr>";
			for($j=0;$j<$cols;$j++){
				echo "<td>";
				echo $i;
				echo "</td>";
			}
			echo "</tr>";
		}
	
		echo "</table>";
	}
	
	table(8,6);
	table(5,3);
	table(4,3);
	
	/*
	if(isset($_POST['sub'])){
		$rows=$_POST['rows'];
		$cols=$_POST['cols'];
		echo "<table border='1' align='center' width='800'>";
		echo "<caption>".$rows."行".$cols."列表格</caption>";
		for($i=0;$i<$rows;$i++){
			echo "<tr>";
			for($j=0;$j<$cols;$j++){
				echo "<td>";
				echo $i;
				echo "</td>";
			}
			echo "</tr>";
		}
	
		echo "</table>";
	}

	*/

?>

<meta charset="UTF-8">
<form action="02-test.php" method="post">
	行数:<input type="text" name="rows"><br />
	列数:<input type="text" name="cols"><br />
	<input type="submit" name="sub" value="提交">
</form>