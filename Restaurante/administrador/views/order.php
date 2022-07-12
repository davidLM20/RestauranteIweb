<?php 
	require_once "./header.php";

?>
    <section class="contentDash">
        <section class="contentSection">
            <h2>Gestión de Pedidos</h2>
            <div class="add"><a href="order_add.php" class="btnAdd">Agregar pedido<i class="fa-regular fa-plus fa-lg"></i></a></div>
            <section class="tableContent">
                <?php
                    include("../controller/order_controller.php");
                    $control= new order_controller();
                    $control->ListOrder();
                ?>
            </section>
        </section>
        
        
        <?php require_once "./footer.php"; ?>
    </section>
