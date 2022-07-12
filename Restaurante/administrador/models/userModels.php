<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class UserModel 
{
  private $idUser;
  private $nombres;
  private $apellidos;
  private $correo;
  private $clave;
  private $tipoUser;
 

  #region Set y Get
  public function getIdUser(){
    return $this->idUser;
  }
  public function setNombres($nombres){
    $this->nombres = $nombres;
  }
  public function setApellidos($apellidos){
    $this->apellidos = $apellidos;
  }
  public function setCorreo($correo){
    $this->correo = $correo;
  }
  public function setClave($clave){
    $this->clave = md5($clave);
  }
  public function setTipoUser($tipoUser){
    $this->tipoUser = $tipoUser;
  }


  public function ListUser() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select id as Identificador, nombres as Nombres, apellidos as Apellidos, correo as Correo from usuarios");
    $resSQL=$miconexion->verconsultacrud('deleteUser.php', 'updateUser.php');
    //$this->Disconnect();
    return $resSQL;
  }
  public function CreateUser() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into usuarios values('','$this->nombres','$this->apellidos','$this->correo','$this->clave','$this->tipoUser')");

    //$this->Disconnect();
    return $resSQL;
  }
  
  public function getUser($id){
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resutConsulta=$miconexion->consulta("select* from usuarios where id= $id");
		$listaUser=$miconexion->consulta_lista();
    return $listaUser;
  }

  public function DeleteUser($id){
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("delete from usuarios where usuarios.id = '$id'");
    return $resSQL;

  }

  public function UpdateUser($id){
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("update usuarios set nombres='$this->nombres', apellidos='$this->apellidos', correo='$this->correo', tipoUser='$this->tipoUser' where id= $id");
    return $resSQL;
  }

}