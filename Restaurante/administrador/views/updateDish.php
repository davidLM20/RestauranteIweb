<?php 
	require_once "./header.php";
?>

<section class="contentDash">
    <h2>Actualizar Plato</h2>
    <?php
        extract($_GET);
        include("../controller/dish_controller.php");
        $control = new dish_controller();
        $idDish = $_GET['id'];
        $listaDish = $control ->getDish($idDish);
    ?>
    <section class="frmContent">
            <form method="post" action="../controller/dish_update.php" class="formulario">
                <input type="hidden" name="id" value="<?php echo $listaDish[0]; ?>">
                <div class="grupoInput">
                    <label for="nombrePlato" class="labelStyle">Nombre del Plato</label>
                    <input class="frmInput" type="text" name="nombrePlato" id="nombrePlato" value="<?php echo $listaDish[1]; ?>">
                </div>
                <div class="grupoInput">
                    <label for="descripcion" class="labelStyle">Descripcion</label>
                    <input class="frmInput" type="text" name="descripcion" id="descripcion" value="<?php echo $listaDish[2]; ?>">
                </div>
                <div class="grupoInput">
                    <button type="summit" value="dish_update" class="btnAddUser">
                        Actualizar  
                    </button>
                </div>
            </form>

        </section>

    <?php require_once "./footer.php"; ?>
</section>