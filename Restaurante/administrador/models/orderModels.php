<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class OrderModel 
{
  private $idorder;
  private $nombreCliente;
  private $entrada;
  private $platoFuerte;
  private $postre;
  private $estado;
  private $total;
 

  #region Set y Get
  public function getIdorder(){
    return $this->idorder;
  }
  public function setNombreCliente($nombreCliente){
    $this->nombreCliente = $nombreCliente;
  }
  public function setEntrada($entrada){
    $this->entrada = $entrada;
  }
  public function setPlatoFuerte($platofuerte){
    $this->platofuerte = $platofuerte;
  }
  public function setPostre($postre){
    $this->postre = $postre;
  }
  public function setEstado($estado){
    $this->estado = $estado;
  }
  public function setTotal($total){
    $this->total = $total;
  }



  public function Listorder() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select id as Identificador, nombreCliente as 'Nombre', entrada as Entrada, platofuerte as PlatoFuerte, postre, estado, total as Coste from pedidos");
    $resSQL=$miconexion->verconsultacrud('deleteorder.php', 'viewOrder.php');
    //$this->Disconnect();
    return $resSQL;
  }
  public function Createorder() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into pedidos values('','$this->nombreCliente','$this->entrada','$this->platofuerte','$this->postre','$this->estado', '$this->total')");

    //$this->Disconnect();
    return $resSQL;
  }
  
  public function getorder($id){
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resutConsulta=$miconexion->consulta("select* from pedidos where id= $id");
		$listaorder=$miconexion->consulta_lista();
    return $listaorder;
  }

  public function Deleteorder($id){
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("delete from pedidos where pedidos.id = '$id'");
    return $resSQL;

  }

  public function Updateorder($id){
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("update pedidos set nombreCliente='$this->nombreCliente', entrada='$this->entrada', platofuerte='$this->platofuerte', estado='$this->estado' where id= $id");
    return $resSQL;
  }

}