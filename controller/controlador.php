<?php
class ModeloControlador{
    private $model;
    function __construct(){
        $this->model = new Modelo();
    }
    /*Aqui llamamos*/
    static function index(){
        //$producto = new Modelo();
        //$dato = $producto->mostrar('productos', '1');/* Se definen variables $tabla, $condicion */
        require_once 'view/index.php';
    }
    static function vps_pre_armado(){           require_once 'view/vps_pre_armado.php';    }
    static function server_dedicado(){          require_once 'view/server_dedicado.php';    }
    static function dominio_y_hosting(){        require_once 'view/dominio_y_hosting.php';    }
    static function tyc(){                      require_once 'view/tyc.php';    }
    static function construcion(){              require_once 'view/construcion.php';    }

}