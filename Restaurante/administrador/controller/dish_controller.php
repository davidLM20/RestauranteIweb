<?php

require_once "../models/dishesModels.php";
class dish_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function user_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}

    public function CreateDish()
    {
        $dish = new DishModel();

        if (isset($_POST['nombrePlato'])) {
	        $dish->setNombrePlato($_POST['nombrePlato']);
	        $dish->setDescripcion($_POST['description']);
        	$dishResponse = $dish->CreateDish();
	        if ($dishResponse == 1) // exitoso
	        {
	            echo "<script>location.href='dish.php'</script>";
	        } else {
	            echo "<h1>Error al crear dish.</h1>";
	        }
		}

    }
    public function ListDish()
    {
        $dish = new DishModel();
        $dishResponse = $dish->ListDish();

    }
    public function getDish($id){
		$dish = new DishModel();
        $dishResponse = $dish->getDish($id);
		return $dishResponse;
	}
    public function DeleteDish()
	{
		$dish = new DishModel();
		if(isset($_GET['idDish'])){
			
			$dishResponse = $dish->DeleteDish($_GET['idDish']);	
	        if ($dishResponse == 1) // exitoso
	        {
	            echo "<script>location.href='dish.php'</script>";
	        } else {
	            echo "<h1>Error al eliminar usuario.</h1>";
	        }
		}
		
	}

    public function updateDish($idDish){
		$dish = new DishModel();

        if (isset($_POST['nombrePlato'])) {
	        $dish->setNombrePlato($_POST['nombrePlato']);
	        $dish->setDescripcion($_POST['descripcion']);
        	$dishResponse = $dish->updateDish($idDish);
	        if ($dishResponse == 1) // exitoso
	        {
	            echo "<script>location.href='../views/dish.php'</script>";
	        } else {
	            echo "<h1>Error al crear dish.</h1>";
	        }
		}
		return $dishResponse;
	}

}    
?>