<?php
include("../seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../cssAdmin/estilosAdmin.css">
    <script src="https://kit.fontawesome.com/938a6f3c60.js" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/938a6f3c60.js" crossorigin="anonymous"></script>
    <title>Villonaco</title>
</head>
<body>
    <header class="CabeceraPrincipal">
        <section class="logo">
            <img src="../../images/App_Logo _Inspiraton _90.png" alt="">
        </section>
        <section class="contenidoCabecera">
            <div class="CC1">
                <h1>Villonaco</h1>
            </div>
            <div class="CC2">
                <div class="CCUser">
                    <div class="Usuario">
                        <span class="usuarioName" ><?php echo $_SESSION['username'];?></span>
                        <img class="avatar" src="../../images/Rectangle_9.png" alt="">
                    </div>
                    <a class="btnExit" href="../seguridad/exit.php?salir=true">Cerrar Sesion</a>
                </div>
                
            </div>
        </section>
    </header>
    <main class="administrador">
        <section class="sideBar">
            <nav class="menuSideBar">
                <a href="dashboard.php" class="btnMenu">Inicio</a>
                <a href="" class="btnMenu">Encuesta</a>
                <a href="user.php" class="btnMenu">Usuarios</a>
                <a href="dishes.php" class="btnMenu">Platos</a>
                <a href="" class="btnMenu">Mi perfil</a>
            </nav>
        </section>