
<?php
    include("../controller/order_controller.php");
    $control= new order_controller();
    extract($_GET);
    $id = $_GET['id'];
    $control -> DeleteOrder($id)
?>
 