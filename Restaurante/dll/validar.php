<?php
	session_start();
   if(($_POST['correo']) && ($_POST['clave']))
   {
      $correo=$_POST['correo'];
      $clave=md5($_POST['clave']); 

      include ("config.php");
		include ("class_mysqli.php");
		$miconexion = new clase_mysqli;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
		$miconexion->consulta("select * from usuarios where correo='$correo' and clave='$clave'");

		$list=$miconexion->consulta_lista();
		if ($list[0]) {
            $_SESSION['autentificado'] = TRUE;
            $_SESSION['username'] = $list[1]." ".$list[2];
	        $_SESSION['roll'] = $list[5]; 
            if($list[5] == 1){
                //$_SESSION['local_path']=$local_path;
                echo "<script>location.href='../administrador/index.php'</script>";
            }else{
                echo "<script>location.href='../'</script>";

            }
		}else{
			echo '<script>alert("Datos Incorrectos...");</script>';
	        echo "<script>location.href='../internas/login.php'</script>";
		}
   }
?>