<?php

$tipo = $_GET['accion']; //Toma valor de accion

include('../clases/user.php');

//Create new user
if($tipo == 1){

    $name   = strip_tags(trim($_POST['name']));
    $email  = strip_tags(trim($_POST['email']));
    $phone  = strip_tags(trim($_POST['phone']));
    $date   = date("Y-m-d h:i:s A");

    $obj = new user ($name,$email,$phone,$date);
    $datos_u = $obj->insert($name,$email,$phone,$date);

    //Para hacer un select
    //$datos_i = $obj->select($name,$email,$phone,$date);
    //$_SESSION['users']=$datos_i;

    //die(var_dump($datos_i[0]));
}

?>