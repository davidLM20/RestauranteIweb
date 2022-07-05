<?php 
	require_once "./header.php";

?>
    <section class="contentDash">
        <h2 >Nuevo Plato</h2>
        <!--<div class="addUser"><a href="user_add.php" class="btnAddUser">Add User</a></div>-->
        <section class="frmContent">
            <form method="post" action="" class="formulario">
                <div class="grupoInput">
                    <label for="nombrePlato" class="labelStyle">Nombre del plato</label>
                    <input class="frmInput" type="text" name="nombrePlato" id="nombrePlato" placeholder="Ingrese el nombre del plato">
                </div>
                <div class="grupoInput">
                    <label for="descripcion" class="labelStyle">Descripcion</label>
                    <input class="frmInput" type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripción">
                </div>
                <div class="grupoInput">
                    <button type="summit" value="CreateDish" class="btnAddUser">
                        Procesar
                        <?php
                            include("../controller/dish_controller.php");
                            $control= new dish_controller();
                            $control->CreateDish();
                        ?>
                    </button>
                </div>
            </form>

        </section>
        
        <?php require_once "./footer.php"; ?>
    </section>
