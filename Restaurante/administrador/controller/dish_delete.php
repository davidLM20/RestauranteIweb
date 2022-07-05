<?php
    include("../controller/dish_controller.php");
    $control= new dish_controller();
    extract($_POST);
    if(isset($_POST['id'])){
        $idDish = $_POST['id'];
        $control -> DeleteDish($idDish);
    }
?>