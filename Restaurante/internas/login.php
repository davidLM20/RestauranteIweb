<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <title>Villonaco</title>
</head>

<body>
    <header class="CabeceraPrincipal">
        <section class="logo">
            <img src="../images/App_Logo _Inspiraton _90.png" alt="">
        </section>
        <section class="contenidoCabecera">
            <div class="CC1">
                <h1>Villonaco</h1>
            </div>
            <div class="CC2">
                <div class="usuarioClass">
                    <a class="btnRegistro" href="registro.php">Registro</a>
                    <p>|</p>
                    <a class="btnLogin" href="">Login</a>
                </div>
                <div class="busquedaClass">
                    <input type="search" placeholder="Busqueda">
                </div>
            </div>
        </section>
    </header>
    <nav class="menuPrincipal">
        <a href="../">Inicio</a>
        <a href="">Empresa</a>
        <a href="">Reserva</a>
        <a href="">Quienes somos</a>
        <a href="">Contactos</a>
    </nav>
    
    <main class="principal">
        <h2>Login</h2>
        <section class="frmContent">
            <form class="formulario" method="post" action="../dll/validar.php">
                <div class="grupoInput">
                    <label for="correo" class="labelStyle">Correo</label>
                    <input class="frmInput" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
                </div>
                <div class="grupoInput">
                    <label for="clave" class="labelStyle">Contraseña</label>
                    <input class="frmInput" type="password" name="clave" id="clave" placeholder="Ingrese su Contraseña">
                </div>
                
                <div class="grupoInput" class="labelStyle">
                <button type="submit" value="Procesar" class="btn-submit">Ingresar</button>
                </div>
            </form>
        </section>
        
    </main>
    
    <footer class="piePagina">
        <h6>Copyright 2020. Villonaco</h6>
    </footer>
</body>

</html>