<?php 
session_start();
if ($_GET['salir']=="true") {
	session_unset();
	session_destroy();
	echo "<script>location.href='../../'</script>";
}
?>