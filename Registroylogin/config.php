<?php
//Este programa es donde hace la conexion con la base de datos
$usr="root";
$pswd="";
$Host="127.0.0.1";
$DB= 'test';


$connection = mysqli_connect($Host,$usr,$pswd,$DB);
if(mysqli_connect_errno()){
    echo "Fallo de conexion";
    exit();
}
?>
