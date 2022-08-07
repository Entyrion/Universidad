<?php
    include('conexion.php');
    $adminID=$_GET['ID'];
    $eliminar="DELETE FROM administrativos WHERE ID='$adminID';";
    $res=$conn->query($eliminar);
    if($res==TRUE){
        header("Location: ../php/Consultaadmin.php");
    }else{
        echo "Error".$eliminar."<br>".$conn->error;
    }
?>