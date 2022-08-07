<?php
    include('conexion.php');
    $stdid=$_GET['ID'];
    $eliminar="DELETE FROM alumnos WHERE ID='$stdid';";
    $res=$conn->query($eliminar);
    if($res==TRUE){
        header("Location: ../php/Consultaa.php");
    }else{
        echo "Error".$eliminar."<br>".$conn->error;
    }
?>