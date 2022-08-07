<?php
  include('conexion.php');
  session_start();
  if (isset($_POST['register'])) {
      $Nom = $_POST['Nombre'];
      $A1 = $_POST['Apellido1'];
      $A2 = $_POST['Apellido2'];
      $Carr = $_POST['Carrera'];
      $Email = $_POST['Correo'];
      
      $validar = mysqli_query($conn,"SELECT * FROM alumnos WHERE Correo='$Email';");
      if(mysqli_num_rows($validar)>0){
          echo "<p class=error>El correo ya esta registrado</p>";
          exit();
      }else{
          $insertar = mysqli_query($conn,"INSERT INTO alumnos (`Nombre`,`Apellido1`,`Apellido2`,`Carrera`,`Correo`) VALUE ('$Nom','$A1','$A2','$Carr','$Email');");
          echo "<p class=success>Registro exitoso</p>";
          exit();
      }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../Registroylogin/Estilo.css">
    <link rel="icon" href="../IMG/building-2-fill.png">
  </head>
  <body>
    <div class="container-fluid">
        <br>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand ar tit" href="../HTML/index.html">Golden University</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse position-relative end-0" id="navbarNavDarkDropdown">
                    <nav class="nav position-absolute start-50">
                        <a class="nav-link active tb ar" aria-current="page" href="../HTML/index.html">Inicio</a>
                        <a class="nav-link tb ar" href="../HTML/Oferta.html">Oferta Educativa</a>
                        <a class="nav-link tb ar" href="../HTML/Servicio.html">Servicios</a>
                        <a class="nav-link tb ar" href="../HTML/Acerca.html">Acerca de</a>
                      </nav>
                    <ul class="navbar-nav dropstart position-absolute me-3 end-0">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ar" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-user-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item ar" href="../Registroylogin/login.php"><i class="ri-login-box-line"></i>Inicio de sesion</a></li>  
                            <li><a class="dropdown-item ar" href="../PHP/Perfil.php"><i class="ri-shield-user-line"></i>Perfil</a></li>
                            <hr>
                            <li><a class="dropdown-item ar" href="../PHP/RegAlumnos.php"><i class="ri-user-smile-line"></i>Alumnos</a></li>
                            <li><a class="dropdown-item ar" href="../PHP/RegAdmin.php"><i class="ri-user-4-line"></i>Administrativos</a></li>
                            <li><a class="dropdown-item ar" href="../PHP/RegProf.php"><i class="ri-user-2-line"></i>Profesores</a></li>
                            <hr>
                            <li><a class="dropdown-item ar" href="../HTML/Selconsultas.html"><i class="ri-contacts-book-line"></i>Consultas</a></li>
                            <hr>
                            <li><a class="dropdown-item ar" href="../Registroylogin/Cerrar.php"><i class="ri-door-open-line"></i>Cerrar sesión</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        <i class="ri-user-3-fill ri-8x"></i>
        <form method="post" action="" name="signup-form">
            <div class="form-element">
                <label>Nombre</label>
                <input type="text" name="Nombre" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="form-element">
                <label>Primer apellido</label>
                <input type="text" name="Apellido1" required />
            </div>
            <div class="form-element">
                <label>Segundo apellido</label>
                <input type="text" name="Apellido2" required />
            </div>
            <div class="form-element">
                <label>Carrera</label>
                <input type="text" name="Carrera" required />
            </div>
            <div class="form-element">
                <label>Correo</label>
                <input type="email" name="Correo" required />
            </div>
            <button type="submit" name="register" value="register">Registrarse</button>
        </form>
        <div class="t-30">
        <p>O<a class="linkreg" href="../Registroylogin/login.php"> Ingresa</a></p>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        </div>
    </body>
</html>