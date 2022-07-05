<?php
require_once "../models/userModels.php";
class user_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function user_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	public function CreateUser()
    {
        $user = new UserModel();

        if (isset($_POST['nombres'])&&isset($_POST['apellidos'])) {
	        $user->setNombres($_POST['nombres']);
	        $user->setApellidos($_POST['apellidos']);
	        $user->setCorreo($_POST['correo']);
			$user->setClave($_POST['clave']);
			$user->setTipoUser($_POST['tipoUser']);
        	$userResponse = $user->CreateUser();
	        if ($userResponse == 1) // exitoso
	        {
	            echo "<script>location.href='user.php'</script>";
	        } else {
	            echo "<h1>Error al crear usuario.</h1>";
	        }
		}

    }
    public function ListUser()
    {
        $user = new UserModel();
        $userResponse = $user->ListUser();

    }
	public function getUser($id){
		$user = new UserModel();
        $userResponse = $user->getUser($id);
		return $userResponse;
	}

	public function DeleteUser()
	{
		$user = new UserModel();
		if(isset($_GET['id'])){
			
			$userResponse = $user->DeleteUser($_GET['id']);	
	        if ($userResponse == 1) // exitoso
	        {
	            echo "<script>location.href='user.php'</script>";
	        } else {
	            echo "<h1>Error al eliminar usuario.</h1>";
	        }
		}
		
	}

	public function updateUser($idUser){
		$user = new UserModel();

        if (isset($_POST['nombres'])&&isset($_POST['apellidos'])) {
	        $user->setNombres($_POST['nombres']);
	        $user->setApellidos($_POST['apellidos']);
	        $user->setCorreo($_POST['correo']);
			$user->setTipoUser($_POST['tipoUser']);
        	$userResponse = $user->updateUser($idUser);
	        if ($userResponse == 1) // exitoso
	        {
	            echo "<script>location.href='../views/user.php'</script>";
	        } else {
	            echo "<h1>Error al crear usuario.</h1>";
	        }
		}
		return $userResponse;
	}

	
}
?>