<?php 
	require_once "./header.php";

?>
    <section class="contentDash">
        <h2>Gestión de Usuarios</h2>
        <div class="addUser"><a href="user_add.php" class="btnAddUser">Agregar User<i class="fa-regular fa-plus fa-lg"></i></a></div>
        <section class="tableContent">
            <?php
                include("../controller/user_controller.php");
                $control= new user_controller();
                $control->ListUser();
            ?>
        </section>
        
        <?php require_once "./footer.php"; ?>
    </section>
