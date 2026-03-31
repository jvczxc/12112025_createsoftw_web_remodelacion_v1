<?php
require_once('config.php'); 
   require_once 'controller/controlador.php';
    if(empty($_GET['w'])){$_GET['w']=0;}
        if(isset($_GET['m'])):
            if(method_exists("ModeloControlador",$_GET['m'])):
                ModeloControlador::index($_GET['m']);
            endif;
        elseif(isset($_GET['w']) and $_GET['w'] === 'vps_pre_armado'):
            ModeloControlador::vps_pre_armado(); /* Publicidad de armado de servidores shaiya */
        elseif(isset($_GET['w']) and $_GET['w'] === 'server_dedicado'):
            ModeloControlador::server_dedicado(); /* Venta de servidores dedicados */
        elseif(isset($_GET['w']) and $_GET['w'] === 'dominio_y_hosting'):
            ModeloControlador::dominio_y_hosting(); /* Venta de dominios y hosting (RESELLER) */
        elseif(isset($_GET['w']) and $_GET['w'] === 'tyc'):
            ModeloControlador::tyc(); /* Terminos y condiciones */
        else:
            ModeloControlador::index();/* Pagina principal Sin envio de datos back End */
        endif;