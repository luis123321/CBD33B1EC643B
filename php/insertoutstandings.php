<?php 
include_once('conexion.php');
//Variables
$utc = date('U');
$day = date('d');
$month = date('m');
$year = date('Y');
$usertipe = 'Admin';
$image = $_POST['ipimage'];
$title = $_POST['iptitle'];
$content = $_POST['ipcontent'];


//Ejecucion
$sql = "INSERT INTO outstandingnews (utc, day, month, year, usertipe, image, titlect, content) VALUES ($utc,$day,$month,$year,'$usertipe','$image','$title','$content')";
if (mysqli_query($dbconnect,$sql)) {
	echo "Insertado Correctamente";
}else{
	echo "Error".mysqli_error($dbconnect);
}
?>