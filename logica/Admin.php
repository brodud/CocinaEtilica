<?php
require_once("persistencia/Conexion.php");
require_once("persistencia/AdminDAO.php");

class Admin extends Persona {

    public function __construct($id=0, $nombre="", $apellido="", $correo="", $clave=""){
        parent::__construct($id, $nombre, $apellido, $correo, $clave);
    }
    
    public function autenticar(){
        $conexion = new Conexion();
        $conexion -> abrir();
        $adminDAO = new AdminDAO("", "", "", $this -> correo, $this -> clave);
        $conexion -> ejecutar($adminDAO -> autenticar());
        $tupla = $conexion -> registro();
        $conexion -> cerrar();
        if($tupla != null){
            $this -> id = $tupla[0];
            return true;
        }else{
            return false;
        }
    }


public function consultar(){
        $conexion = new Conexion();
        $adminDAO = new AdminDAO($this -> id);
        $conexion -> abrir();
        $conexion -> ejecutar($adminDAO -> consultar());
        $datos = $conexion -> registro();
        $this -> nombre = $datos[0];
        $this -> apellido = $datos[1];
        $this -> correo = $datos[2];
        $conexion->cerrar();
    }
}

?>