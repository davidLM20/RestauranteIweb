<?php
    extract($_POST);
    include("../controller/user_controller.php");
    $control= new user_controller();
    if(isset($_POST['idUser'])){
        $idUser = $_POST['idUser'];
        $control->updateUser($idUser);
    }    
?>