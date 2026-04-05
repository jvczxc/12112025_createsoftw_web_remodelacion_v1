<?php
class Modelo{
    private $Modelo;
    private $db;
    private $datos;
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=createso_datosVPS;charset=utf8', 'createso_vpsdatos', 'Tresado37#');
    }
    public function insertar($tabla, $data){
        //print_r($data);
        //print_r($tabla);
        //exit();
        $consulta = "INSERT INTO $tabla values (null,$data)";
        $resultado = $this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function mostrar($tabla, $condicion){
        $consul = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
        $resu = $this->db->query($consul);
        while($filas = $resu->fetch(PDO::FETCH_ASSOC)){ /* Esto no entiendo como se llama */
            $this->Modelo[] = $filas; /* Me llama la atencion como obtengo las variables */
        }
        return $this->Modelo;
    }
    public function actualizar($tabla, $data, $condicion){
        $consulta = "UPDATE ".$tabla." SET ".$data." WHERE ".$condicion.";";
        $resultado = $this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function eliminar($tabla, $condicion){
        $consulta = "DELETE FROM ".$tabla." WHERE ".$condicion.";";
        $resultado = $this->db->query($consulta);
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
} 