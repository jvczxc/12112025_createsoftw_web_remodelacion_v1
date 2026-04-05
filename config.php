<?php
if(!session_start()){
    session_start();
}
if(empty($_GET['i'])){
    $index = basename($_SERVER['PHP_SELF']);
    header("location: ".$index."?i=es&w=load");
    }
/* Verificamos si session[i] esta vacio caso que no anclamos al lenguaje por defecto */
if(isset($_GET['i'])){
    $_SESSION['i'] = $_GET['i'];
    $idioma = $_SESSION['i']; // Usamos 'es' por defecto si no hay nada
    }else{
        $idioma = 'es'; // Usamos 'es' por defecto si no hay nada
    }
IF(empty($_SESSION['loader'])){
    $_SESSION['loader'] = "ON";
}
define('captcha_public', '6LeEDoEsAAAAALnXJrnPiegcSXVDzZ3q8XtJXekc');
define('captcha_secret', '6LeEDoEsAAAAAGSrs6ePvE8kb-7IMgZKmGXscjvK');
/* Aqui definimos las URL todas de la web url_cons_1 hasta url_cons_100 */
define("home","index.php?i=".$_SESSION['i']."&w=load");
define("url_cons_0002","index.php?i=".$_SESSION['i']."&w=cursos");
define("url_cons_0003","index.php?i=".$_SESSION['i']."&w=shaiya");
/* Aqui definiremos lo referenta a el email de nuestra empresa */
define("email_empresa","info@createsoftw.com");
define("nombre_empresa","CreateSoftw");
define("telefono_empresa_1","+584169256098");
define("telefono_empresa_2","+584264188098");
define("direccion_empresa","Caracas, Venezuela");
define("facebook_empresa","#");

/* definimos el idioma español por defecto */
switch ($idioma) {
    case "al":/* Aleman */
        include_once "lang/al.php";
        break;
            case "ch":/* chino */
                include_once "lang/ch.php";
        break;
            case "co":/* coreano */
                include_once "lang/co.php";
        break;
            case "en":/* ingles */
                include_once "lang/en.php";
        break;
            case "es":/* español */
                include_once "lang/es.php";
        break;
            case "fr":/* frances */
                include_once "lang/fr.php";
        break;
            case "it":/* italiano */
                include_once "lang/it.php";
        break;
            case "le":/* ver constantes aqui solo desarrollador */
                include_once "lang/le.php";
        break;
            case "pr":/* portugues */
                include_once "lang/pr.php";
        break;
            case "rs":/* ruso */
                include_once "lang/rs.php";
break;
default:
echo "Idioma no soportado";
break;
}


