<?php 
	require_once "./header.php";

?>
<section class="contentDash">
    <h2>Gestión de Platos</h2>
    <div class="addUser"><a href="dish_add.php" class="btnAddUser">Agregar Plato<i class="fa-regular fa-plus fa-lg"></i></a></div>
    <section class="tableContent">
        <?php
            include("../controller/dish_controller.php");
            $control= new dish_controller();
            $control->ListDish();
        ?>
    </section>
            
    <?php require_once "./footer.php"; ?>
</section>