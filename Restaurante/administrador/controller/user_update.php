<?php
    extract($_POST);
    include("../controller/user_controller.php");
    $control= new user_controller();
    if(isset($_POST['id'])){
        $idUser = $_POST['id'];
        $control->updateUser($idUser);
    }    
?>