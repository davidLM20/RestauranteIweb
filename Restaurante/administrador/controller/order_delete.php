<?php
    include("../controller/order_controller.php");
    $control= new order_controller();
    extract($_POST);
    if(isset($_POST['id'])){
        $idOrder = $_POST['id'];
        $control -> DeleteOrder($idOrder);
    }
?>