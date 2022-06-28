<?php 
	require_once "./header.php";

?>
<section class="contentDash">
    <h2>¿Seguro que quiere eliminar el usuario?</h2>
    <div class="addUser">
        <a href="deleteUser.php" class="btnAddUser">
            Eliminar Usuario
            <?php
                include("../controller/user_controller.php");
                $control= new user_controller();
                $control->DeleteUser();
            ?>
        </a>
    </div>

    <?php require_once "./footer.php"; ?>
</section>