<?php 
	require_once "./header.php";

?>
    <section class="contentDash">
        <h2 >Nuevo Usuarios</h2>
        <!--<div class="addUser"><a href="user_add.php" class="btnAddUser">Add User</a></div>-->
        <section class="frmContent">
            <form method="post" action="" class="formulario">
                <div class="grupoInput">
                    <label for="nombres" class="labelStyle">Nombres</label>
                    <input class="frmInput" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
                </div>
                <div class="grupoInput">
                    <label for="apellidos" class="labelStyle">Apellidos</label>
                    <input class="frmInput" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
                </div>
                <div class="grupoInput">
                    <label for="correo" class="labelStyle">Correo</label>
                    <input class="frmInput" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
                </div>
                <div class="grupoInput">
                    <label for="clave" class="labelStyle">Clave</label>
                    <input class="frmInput" type="password" name="clave" id="clave" placeholder="Ingrese su clave">
                </div>
                <div class="grupoInput">
                    <label for="tipoUser" class="labelStyle">Tipo de usuario</label>
                    <select class="frmInput" id="tipoUser" name="tipoUser">
                        <option>--</option>
                        <option value="1">Administrador</option>
                        <option value="2">Visitante</option>
                    </select>
                </div>
                <div class="grupoInput">
                    <button type="summit" value="CreateUser" class="btnAddUser">
                        Procesar
                        <?php
                            include("../controller/user_controller.php");
                            $control= new user_controller();
                            $control->CreateUser();
                        ?>
                    </button>
                </div>
            </form>

        </section>
        
        <?php require_once "./footer.php"; ?>
    </section>
