<?php
	include("../../clases/conexion.php");
    
	$name	=$_POST['name'];
	$email	=$_POST['email'];
	$phone	=$_POST['phone'];
	$date   =   date("Y-m-d h:i:s A");
	//$date   =date("Y-m-d");
    $conn = mysqli_connect($servername, $username, $password,$db);
	
	$sql = "INSERT INTO `user`( `name`, `email`, `phone`, `date`) 
	VALUES ('$name','$email','$phone','$date')";
	
    if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}	
    mysqli_close($conn);
?>