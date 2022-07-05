<?php 
	require_once "./header.php";

?>
<section class="contentDash">
    <section class="contentSection">
        <h2>Gestión de Platos</h2>
        <div class="add"><a href="dish_add.php" class="btnAdd">Agregar Plato<i class="fa-regular fa-plus fa-lg"></i></a></div>
        <section class="tableContent">
            <?php
                include("../controller/dish_controller.php");
                $control= new dish_controller();
                $control->ListDish();
            ?>
        </section>
    </section>
            
    <?php require_once "./footer.php"; ?>
</section>