<?php
	session_start();
	if (isset($_SESSION['autentificado']) && isset($_SESSION['username']) && isset($_SESSION['roll'])){
		include("../../dll/config.php"); 
		include("../../dll/class_mysqli.php");
		$miconexion = new clase_mysqli;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	}else{
		header('Location: ../../');
	}
?>