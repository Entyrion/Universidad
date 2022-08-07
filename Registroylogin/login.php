<?php
include('config.php');
session_start();
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $validar="SELECT * FROM usuarios WHERE USUARIO='$username' AND PASS='$password'";
    $result=$connection->query($validar);

    if(mysqli_num_rows($result)>0){
        echo "<p class='success'>El usuario existe</p>";
        echo " Bienvenido";
        echo "<script> console.log('Bienvenido')</script>";
        $row = $result->fetch_assoc();
        $_SESSION['user_id']=$row['USUARIO'];
        exit();
    }else if($numsrow==0){
        echo "El usuario no existe";
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="Estilo.css">
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand ar tit" href="../HTML/index.html">Golden University</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse position-relative end-0" id="navbarNavDarkDropdown">
                    <nav class="nav position-absolute start-50">
                        <a class="nav-link active tb ar" aria-current="page" href="index.html">Inicio</a>
                        <a class="nav-link tb ar" href="Oferta.html">Oferta Educativa</a>
                        <a class="nav-link tb ar" href="Servicio.html">Servicios</a>
                        <a class="nav-link tb ar" href="Acerca.html">Acerca de</a>
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
            <br>
            <div class="row mt-5">
                <div class="col-12">
                    <i class="ri-user-3-fill ri-8x"></i>
                    <form method="post" action="" name="signin-form">
                        <div class="form-element">
                            <label>Usuario</label>
                            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                        </div>
                        <div class="form-element">
                            <label>Contraseña</label>
                            <input type="password" name="password" required />
                        </div>
                        <button type="submit" name="login" value="login">Login</button>
                    </form>
                    <div class="t-30">
                    <p>O<a class="linkreg" href="register.php"> Registrate</a></p>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
