<?php
    include("../controller/user_controller.php");
    $control= new user_controller();
    extract($_POST);
    if(isset($_POST['id'])){
        $idUser = $_POST['id'];
        $control -> DeleteUser($idUser);
    }
?>