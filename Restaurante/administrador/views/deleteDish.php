<?php
    include("../controller/dish_controller.php");
    $control= new dish_controller();
    extract($_GET);
    $idDish = $_GET['id'];
    $control -> DeleteDish($id);
?>
