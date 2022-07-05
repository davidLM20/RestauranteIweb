<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class DishModel
{
    private $idDish;
    private $nombrePlato;
    private $descripcion;

    #region Set y Get
    public function getIdDish(){
        return $this->IdDish;
    }
    public function setNombrePlato($nombrePlato){
        $this->nombrePlato = $nombrePlato;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function ListDish() {
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL=$miconexion->consulta("select id, nombrePlato, descripcion from platos");
        $resSQL=$miconexion->verconsultacrud('deleteDish.php','updateDish.php');
        //$this->Disconnect();
        return $resSQL;
    }

    public function CreateDish() {
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL=$miconexion->consulta("insert into platos values('','$this->nombrePlato','$this->descripcion')");
    
        //$this->Disconnect();
        return $resSQL;
    }
    public function getDish($id){
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resutConsulta=$miconexion->consulta("select * from platos where id= $id");
        $listaDish=$miconexion->consulta_lista();
        return $listaDish;
    }

    public function DeleteUser($id){
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL=$miconexion->consulta("delete from platos where platos.id = '$id'");
        return $resSQL;   
    }

    public function UpdateUser($id){
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $resSQL=$miconexion->consulta("update platos set nombrePlato='$this->nombrePlato', descripcion='$this->descripcion' where id= $id");
        return $resSQL;
    }
}