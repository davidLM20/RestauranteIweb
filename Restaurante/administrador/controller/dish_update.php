<?php
    extract($_POST);
    include("../controller/dish_controller.php");
    $control= new dish_controller();
    if(isset($_POST['id'])){
        $idDish = $_POST['id'];
        $control->UpdateDish($idDish);
    }    
?>