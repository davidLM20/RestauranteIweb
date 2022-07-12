<?php 
	require_once "./header.php";

?>
    <section class="contentDash">
        <section class="contentSection">
            <h2 >Nuevo Pedido</h2>
            <!--<div class="addUser"><a href="user_add.php" class="btnAddUser">Add User</a></div>-->
            <section class="frmContent">
                <form method="post" action="" class="formulario">
                    <div class="grupoInput">
                        <label for="nombreCliente" class="labelStyle">Nombre del comensal</label>
                        <input class="frmInput" type="text" name="nombreCliente" id="nombreCliente" placeholder="Ingrese su nombre">
                    </div>
                    <div class='select'>
                        <label for="entrada">Entrada | $3,00</label>
                        <input class="checkSelect" type="radio" name="entrada" value="Coctel De Camaron"><label class="optionSelect">Coctel De Camaron</label>
                        <input class="checkSelect" type="radio" name="entrada" value="Rollos De Pollo"><label class="optionSelect">Rollos De Pollo</label>
                        <input class="checkSelect" type="radio" name="entrada" value="Enrrollado"><label class="optionSelect">Enrrollado de papa con atun</label>
                    </div>
                    <div class='select'>
                        <label for="platoFuerte">Plato Fuerte | $4,00</label>
                        <input class="checkSelect" type="radio" name="platoFuerte" value="Coctel De Camaron"><label class="optionSelect">Coctel De Camaron</label>
                        <input class="checkSelect" type="radio" name="platoFuerte" value="Rollos De Pollo"><label class="optionSelect">Rollos De Pollo</label>
                        <input class="checkSelect" type="radio" name="platoFuerte" value="Enrrollado"><label class="optionSelect">Enrrollado de papa con atun</label>
                    </div>
                    <div class='select'>
                        <label for="postre">Postre | $1,50</label>
                        <input class="checkSelect" type="radio" name="postre" value="Coctel De Camaron"><label class="optionSelect">Coctel De Camaron</label>
                        <input class="checkSelect" type="radio" name="postre" value="Rollos De Pollo"><label class="optionSelect">Rollos De Pollo</label>
                        <input class="checkSelect" type="radio" name="postre" value="Enrrollado"><label class="optionSelect">Enrrollado de papa con atun</label>
                    </div>
                    <div class="grupoInput">
                        <label for="estado" class="labelStyle"></label>
                        <select style="visibility:hidden" class="frmInput" id="estado" name="estado">
                            <option value="Pendiente">Pendiente</option>
                        </select>
                    </div>
                    <div class="grupoInput">
                        <button type="summit" value="CreateOrder" class="btnAdd">
                            Procesar
                            <?php
                                include("../controller/order_controller.php");
                                $control= new order_controller();
                                $control->CreateOrder();
                            ?>
                        </button>
                    </div>
                </form>

            </section>
        </section>
        
        <?php require_once "./footer.php"; ?>
    </section>
