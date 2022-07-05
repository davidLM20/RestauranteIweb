<?php 
	require_once "./header.php";
?>

<section class="contentDash">
    <h2>Actualizar Usuario</h2>
    <?php
        extract($_GET);
        include("../controller/user_controller.php");
        $control = new user_controller();
        $idUser = $_GET['id'];
        $listaUser = $control ->getUser($idUser);
        $listaRol[1]="Administrador";
		$listaRol[2]="Visitante";
    ?>
    <section class="frmContent">
            <form method="post" action="../controller/user_update.php" class="formulario">
                <input type="hidden" name="id" value="<?php echo $listaUser[0]; ?>">
                <div class="grupoInput">
                    <label for="nombres" class="labelStyle">Nombres</label>
                    <input class="frmInput" type="text" name="nombres" id="nombres" value="<?php echo $listaUser[1]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="apellidos" class="labelStyle">Apellidos</label>
                    <input class="frmInput" type="text" name="apellidos" id="apellidos" value="<?php echo $listaUser[2]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="correo" class="labelStyle">Correo</label>
                    <input class="frmInput" type="email" name="correo" id="correo" value="<?php echo $listaUser[3]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="tipoUser" class="labelStyle">Tipo de usuario</label>
                    <select class="frmInput" id="tipoUser" name="tipoUser">
                        <option value="<?php echo $listaUser[5]; ?>"><?php echo $listaRol[$listaUser[5]]; ?></option>
                        <option value="1">Administrador</option>
                        <option value="2">Visitante</option>
                    </select>
                </div>
                <div class="grupoInput">
                    <button type="summit" value="user_update" class="btnAddUser">
                        Actualizar  
                    </button>
                </div>
            </form>

        </section>

    <?php require_once "./footer.php"; ?>
</section>