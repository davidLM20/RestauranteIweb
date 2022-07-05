
<?php
    include("../controller/user_controller.php");
    $control= new user_controller();
    extract($_GET);
    $id = $_GET['id'];
    $control -> DeleteUser($id)
?>
 