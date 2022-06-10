<?php
	include("../../clases/conexion.php");

	try{
		$conn = mysqli_connect("localhost","root","");
	}catch(Exception $e){
		echo "<br>".$e->getMessage();
	}
	

	// 1. Conexion start
	if (!$conn) {
		error_log("Failed to connect to MySQL: " . mysqli_error($conn));
		die('Internal server error');
	}
	// 2. Select a database to use 
	$db_select = mysqli_select_db($conn, "actotal");
	if (!$db_select) {
    	error_log("Database selection failed: " . mysqli_error($conn));
    die('Internal server error');
	}

	//Toma los datos mas recientes de la DB
	$sql = " SELECT *,MAX(Date) FROM user GROUP BY Date DESC ";

	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

			$datedata = $row['Date'];
			$data = date("d/m/Y", strtotime($datedata));

	?>
	<div class="viewUser">
        <div class="viewUserson">
          <p><span>Nombre:</span><?=$row['name'];?></p>
          <p><span>Teléfono:</span><?=$row['email'];?></p>          
        </div>
        <div class="viewUserson">
          <p><span>Email:</span><?=$row['phone'];?></p>
		  <p><span>Ingresado:</span><?=$data?></p>
          <!-- <p><span>Ingresado:</span><?=$row['Date'];?></p> -->
        </div>
      </div>
	<?php	
		}
	}else {
		//echo "0 results";
	}
	mysqli_close($conn);
?>