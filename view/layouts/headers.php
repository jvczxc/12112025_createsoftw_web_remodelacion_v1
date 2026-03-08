<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= const_0021 ?></title>
    <link rel="icon" href="view/img/logo/logo.png" type="image/png">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<!-- reemplazar el texto quue conincidan con las definiciones const del archivo config.php por las constatntes -->
    <div id="loading-overlay">
        <div class="loader"></div>
        <p><?= const_0022 ?></p>
    </div>

    <div id="main-content" class="skeleton">

        <header>
            <nav class="nav-container">
                <div class="logo-container">
                    <img src="view/img/logo/logo.png" alt="Logo Createsoftw" title="Desarrollo de webs, video juegos, cursos y mas visitanos" class="logo-img">
                    <span class="logo-text"><?= const_0057 ?></span>
                </div>
                
                <ul class="nav-links">
                    <li><a href="#inicio"><?= const_0001 ?></a></li>
                    
                    <li class="dropdown">
                        <a href="#"><?= const_0002 ?> <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item"><?= const_0023 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0024 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0025 ?></a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#"><?= const_0058 ?> <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item"><?= const_0026 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0027 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0028 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0029 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0030 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0031 ?></a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#"><?= const_0059 ?> <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item"><?= const_0032 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0033 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0034 ?></a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#"><?= const_0060 ?> <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item"><?= const_0035 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0036 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0037 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0038 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0039 ?></a></li>
                            <li><a href="#" class="dropdown-item"><?= const_0040 ?></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><?= const_0047 ?> <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                    <?php
                    $index = basename($_SERVER['PHP_SELF']);
               if($_SESSION['i']=='es'){
                    echo '
                    <li><a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    ';
               }elseif($_SESSION['i']=='ch'){
                
                    echo '
                    9<a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    1<a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    2<a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    3<a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    4<a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    5<a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    6<a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    7<a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    8<a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    ';
               }elseif($_SESSION['i']=='rs'){
                
                    echo '
                    <li><a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    ';
               }elseif($_SESSION['i']=='it'){
                
                    echo '
                    <li><a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    ';
               }elseif($_SESSION['i']=='al'){
                
                    echo '
                    <li><a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    ';
               }elseif($_SESSION['i']=='fr'){
                
                    echo '
                    <li><a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    ';
               }elseif($_SESSION['i']=='co'){
                
                    echo '
                    <li><a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    ';
               }elseif($_SESSION['i']=='pr'){
                
                    echo '
                    <li><a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    ';
               }elseif($_SESSION['i']=='en'){
                
                    echo '
                    <li><a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                    <li><a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                    ';
               }
               
               ?>

                        </ul>
                    </li>

                    <li><a href="#login" class="auth-link">Iniciar sesión</a></li>
                    <li><a href="#register" class="auth-link">Registrarse</a></li>
                </ul>
                
                <button class="menu-toggle" aria-label="Abrir menú"><i class="fas fa-bars"></i></button>
            </nav>
        </header>