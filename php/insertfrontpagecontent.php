<?php
	include 'conexion.php';
	mysqli_set_charset($dbconnect,'utf8');
	include 'frontpagecontent.php';

	
	//Definicion de variables 

	$title = $_POST['title'];
	$content = $_POST['content'];
	$num = $_POST['num'];

	//Consulta 1

	$consulta = "UPDATE frontpagecontent SET title='".$title."', content='".$content."' WHERE id = '".$num."'";
	mysqli_query($dbconnect,$consulta);
	mysqli_close($dbconnect);

	echo '
		<html>
		<head>
			<meta http-equiv="REFRESH" content="0;url=../index.php">
			
		</head>
		</html>
	';



 ?>