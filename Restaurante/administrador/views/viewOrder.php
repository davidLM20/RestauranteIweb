<?php 
	require_once "./header.php";
?>

<section class="contentDash">
    <section class="contentSection">
        <h2>Ver Pedido</h2>
        <?php
            extract($_GET);
            include("../controller/order_controller.php");
            $control = new order_controller();
            $idOrder = $_GET['id'];
            $listaOrder = $control ->getOrder($idOrder);
        ?>
        <section class="frmContent">
            <form method="post" action="../controller/order_update.php" class="formulario">
                <input type="hidden" name="id" value="<?php echo $listaOrder[0]; ?>">
                <div class="grupoInput">
                    <label for="nombreCliente" class="labelStyle">Nombre del Cliente</label>
                    <input class="frmInput" type="text" name="nombreCliente" id="nombreCliente" value="<?php echo $listaOrder[1]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="entrada" class="labelStyle">Entrada</label>
                    <input class="frmInput" type="text" name="entrada" id="entrada" value="<?php echo $listaOrder[2]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="platoFuerte" class="labelStyle">Plato Fuerte</label>
                    <input class="frmInput" type="text" name="platoFuerte" id="platoFuerte" value="<?php echo $listaOrder[3]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="postre" class="labelStyle">Postre</label>
                    <input class="frmInput" type="text" name="postre" id="postre" value="<?php echo $listaOrder[4]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="estado" class="labelStyle">Estado</label>
                    <input class="frmInput" type="text" name="estado" id="estado" value="<?php echo $listaOrder[5]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="total" class="labelStyle">Total</label>
                    <input class="frmInput" type="text" name="total" id="total" value="<?php echo $listaOrder[6]; ?>">
                </div>
                
            </form>

        </section>
    </section>
    <?php require_once "./footer.php"; ?>
</section>