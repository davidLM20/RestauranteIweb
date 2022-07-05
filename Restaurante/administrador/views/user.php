<?php 
	require_once "./header.php";

?>
    <section class="contentDash">
        <section class="contentSection">
            <h2>Gestión de Usuarios</h2>
            <div class="add"><a href="user_add.php" class="btnAdd">Agregar User<i class="fa-regular fa-plus fa-lg"></i></a></div>
            <section class="tableContent">
                <?php
                    include("../controller/user_controller.php");
                    $control= new user_controller();
                    $control->ListUser();
                ?>
            </section>
        </section>
        
        
        <?php require_once "./footer.php"; ?>
    </section>
