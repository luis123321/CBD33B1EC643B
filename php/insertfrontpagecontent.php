<?php
	include 'conexion.php';
	mysqli_set_charset($dbconnect,'utf8');
	include 'frontpagecontent.php';

	//Definicion de variables

	$title1 = $_POST['iptitle1'];
	$content1 = $_POST['ipcontent1'];

	//Consulta 

	$consulta = "UPDATE frontpagecontent SET title='".$title1."', content='".$content1."' WHERE id = 1";
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