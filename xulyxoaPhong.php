<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$id = $_GET['id'];
		$link = mysql_connect("localhost","root","") or die ("Khong the ket noi CSDL");
		mysql_select_db("final",$link);
		$sql = "DELETE FROM phong where MaPHG = '".$id."'";
		mysql_query($sql,$link);
		header("location:Xoaxemthongtinphonghoc.php");
	?>
</body>
</html>