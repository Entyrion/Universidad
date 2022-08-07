<?php
include('conexion.php');
session_start();
    $Nom = $_POST['Nombre'];
    $Cor = $_POST['Correo'];
    $Msg = $_POST['Msg'];
    
    $insertar = mysqli_query($conn,"INSERT INTO mensajes (`Nombre`,`Correo`,`Mensaje`) VALUE ('$Nom','$Cor','$Msg');");
    header("Location: ../HTML/index.html");
    exit();
?>