<?php
    include('conexion.php');
    $profID=$_GET['ID'];
    $eliminar="DELETE FROM docentes WHERE ID='$profID';";
    $res=$conn->query($eliminar);
    if($res==TRUE){
        header("Location: ../php/Consultaadmin.php");
    }else{
        echo "Error".$eliminar."<br>".$conn->error;
    }
?>