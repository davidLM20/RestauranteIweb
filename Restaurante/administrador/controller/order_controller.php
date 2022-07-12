<?php
require_once "../models/orderModels.php";
class order_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function order_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	public function CreateOrder()
    {
        $order = new OrderModel();
        $subtotal = 0;
        if (isset($_POST['nombreCliente'])) {
	        $order->setNombreCliente($_POST['nombreCliente']);
	        $order->setEntrada($_POST['entrada']);
	        $order->setPlatoFuerte($_POST['platoFuerte']);
			$order->setPostre($_POST['postre']);
			$order->setEstado($_POST['estado']);

            if(isset($_REQUEST['entrada'])){
                $subtotal = $subtotal + 3;
            };
            if(isset($_REQUEST['platoFuerte'])){
                $subtotal = $subtotal + 4;
            };
            if(isset($_REQUEST['postre'])){
                $subtotal = $subtotal + 1.50;
            };  

            $_POST['total'] = $subtotal;
            
            $order->setTotal($_POST['total']);
        	$orderResponse = $order->CreateOrder();
	        if ($orderResponse == 1) // exitoso
	        {
	            echo "<script>location.href='order.php'</script>";
	        } else {
	            echo "<h1>Error al crear order.</h1>";
	        }
		}

    }
    public function ListOrder()
    {
        $order = new OrderModel();
        $orderResponse = $order->ListOrder();

    }
	public function getOrder($id){
		$order = new OrderModel();
        $orderResponse = $order->getOrder($id);
		return $orderResponse;
	}

	public function DeleteOrder()
	{
		$order = new OrderModel();
		if(isset($_GET['id'])){
			
			$orderResponse = $order->DeleteOrder($_GET['id']);	
	        if ($orderResponse == 1) // exitoso
	        {
	            echo "<script>location.href='order.php'</script>";
	        } else {
	            echo "<h1>Error al eliminar order.</h1>";
	        }
		}
		
	}

	public function updateOrder($idOrder){
		$order = new OrderModel();

        if (isset($_POST['nombreCliente'])) {
	        $order->setNombreCliente($_POST['nombreCliente']);
	        $order->setEntrada($_POST['entrada']);
	        $order->setPlatoFuerte($_POST['platofuerte']);
			$order->setEstado($_POST['estado']);
            $order->setTotal($_POST['Total']);
        	$orderResponse = $order->updateOrder($idOrder);
	        if ($orderResponse == 1) // exitoso
	        {
	            echo "<script>location.href='../views/order.php'</script>";
	        } else {
	            echo "<h1>Error al crear order.</h1>";
	        }
		}
		return $orderResponse;
	}

	
}
?>