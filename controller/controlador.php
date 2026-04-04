<?php
require_once 'model/crud.php';
class ModeloControlador{
    private $model;
    function __construct(){
        $this->model = new Modelo();
    }
    /*Aqui llamamos*/
    static function index(){
        require_once 'view/index.php';
    }
    static function vps_pre_armado(){
        $producto = new Modelo();
        $dato1 = $producto->mostrar('cs_products', 'id = 9');/* Se definen variables $tabla, $condicion */
        $dato2 = $producto->mostrar('cs_products', 'id = 20');/* Se definen variables $tabla, $condicion */
        $dato3 = $producto->mostrar('cs_products', 'id = 21');/* Se definen variables $tabla, $condicion */
        require_once 'view/vps_pre_armado.php';    
        }
        static function server_dedicado(){          
        $producto = new Modelo();
        $dato1 = $producto->mostrar('cs_products', 'id = 10');/* Se definen variables $tabla, $condicion */
        $dato2 = $producto->mostrar('cs_products', 'id = 22');/* Se definen variables $tabla, $condicion */
        $dato3 = $producto->mostrar('cs_products', 'id = 23');/* Se definen variables $tabla, $condicion */
        require_once 'view/server_dedicado.php';    
    }
    static function dominio_y_hosting(){        require_once 'view/dominio_y_hosting.php';    }
    static function paneles(){                  require_once 'view/paneles.php';    }
    static function hosting(){                  require_once 'view/hosting.php';    }
    static function migra(){                    require_once 'view/migra.php';    }
    static function solo(){                     require_once 'view/solo.php';    }
    static function vps(){                      require_once 'view/vps.php';    }
    static function webshaiya(){                require_once 'view/webshaiya.php';    }
    static function tyc(){                      require_once 'view/tyc.php';    }
    static function construcion(){              require_once 'view/construcion.php';    }

}