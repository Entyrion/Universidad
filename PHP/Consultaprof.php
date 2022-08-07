<?php
    include('Conexion.php');
    $Consultaa="SELECT * FROM docentes";
    $result=$conn->query($Consultaa);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta docentes</title>
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
            <div class="row">
                <div class="col-12">
                    <table class="table mt-5">
                        <thead class="thead-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Materia</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                        </thead>
                        <tbody>
                            <?php
                                if($result->fetch_assoc()){
                                    while($row=$result->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $row['ID'] ?></td>
                                <td><?php echo $row['Nombre'] ?></td>
                                <td><?php echo $row['Apellido1'] ?></td>
                                <td><?php echo $row['Apellido2'] ?></td>
                                <td><?php echo $row['Materia'] ?></td>
                                <td><?php echo $row['Correo'] ?></td>
                                <td><a class="btn btn-info" href="Modificarprof.php?ID=<?php echo $row['ID']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="Deleteprof.php?ID=<?php echo $row['ID']; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                                    }}
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </body>
</html>