<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= const_0021 ?></title>
    <link rel="icon" href="view/img/logo/logo.png" type="image/png">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="view/js/jquery-3.2.1.slim.min.js"></script>
	<script src="view/js/jquery.min.js"></script>
    <style>
        .backbuton{
            background-color: #FFDF20;
            border-radius: 5px;
            padding: 0px 3px;
            text-decoration: none;
            height: 42px;
            width: 110px;
        }
        .fontprice{
            font-size: 0.5em;
            color: var(--highlight-color);
        }
    </style>
</head>
<body>
<!-- reemplazar el texto quue conincidan con las definiciones const del archivo config.php por las constatntes -->
<?php if(isset($_SESSION['loader']) AND $_SESSION['loader'] == "ON" ): 
$_SESSION['loader'] = "OFF";
?>

<div id="loading-overlay">
        <div class="loader"></div>
        <p><?= const_0022 ?></p>
    </div>
<?php endif; ?>
    <div id="main-content" class="skeleton">

        <header>
            <nav class="nav-container">
                <a href="index.php?w=index&i=<?php echo $_SESSION['i']; ?>">
                <div class="logo-container">
                        <img src="view/img/logo/logo.png" alt="Logo Createsoftw" title="<?= const_0121 ?>" class="logo-img">
                        <span class="logo-text"><?= const_0057 ?></span>
                    </div>
                </a>
                
                <ul class="nav-links">
                    <li><a href="index.php?w=index&i=<?php echo $_SESSION['i']; ?>"><?= const_0001 ?></a></li>
                    
                     <li class="dropdown">
                        <a href="#"><?= const_0059 ?> <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-item"><?= const_0032 ?> <i class="fas fa-caret-right"></i></a>
                                <ul class="dropdown-menu-submenu">
                                    <li><a href="index.php?w=index&i=<?php echo $_SESSION['i']; ?>&#contacts" class="dropdown-item"><?= const_0033 ?></a></li>
                                    <li><a href="http://templates.createsoftw.com" class="dropdown-item"><?= const_0034 ?></a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-item"><?= const_0002 ?><i class="fas fa-caret-right"></i></a>
                                <ul class="dropdown-menu-submenu">
                                    <li><a href="index.php?w=vps_pre_armado&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0023 ?></a></li>
                                    <li><a href="index.php?w=server_dedicado&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0024 ?></a></li>
                                    <li><a href="index.php?w=dominio_y_hosting&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0025 ?></a></li>
                                    <li><a href="index.php?w=paneles&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0025a ?></a></li>
                                    <li><a href="index.php?w=webshaiya&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0032 ?></a></li>
                                </ul>
                            </li>
                            <!-- <li class="dropdown-submenu">
                                <a href="#"><?= const_0058 ?> <i class="fas fa-caret-down"></i></a>
                                <ul class="dropdown-menu-submenu">
                                    <li><a href="index.php?w=construcion&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0026a ?></a></li>
                                    <li><a href="index.php?w=construcion&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0026 ?></a></li>
                                    <li><a href="index.php?w=construcion&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0027 ?></a></li>
                                    <li><a href="index.php?w=construcion&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0028 ?></a></li>
                                    <li><a href="index.php?w=construcion&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0029 ?></a></li>
                                    <li><a href="index.php?w=construcion&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0030 ?></a></li>
                                    <li><a href="index.php?w=construcion&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0031 ?></a></li>
                                </ul>
                            </li> -->
                            <li class="dropdown-submenu">
                                <a href="#"><?= const_0003 ?> <i class="fas fa-caret-down"></i></a>
                                <ul class="dropdown-menu-submenu">
                                    <li><a href="index.php?w=server_dedicado&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0035 ?></a></li>
                                    <li><a href="index.php?w=vps&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0036 ?></a></li>
                                    <li><a href="index.php?w=dominio_y_hosting&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0037 ?></a></li>
                                    <li><a href="index.php?w=solo&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0038 ?></a></li>
                                    <li><a href="index.php?w=hosting&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0039 ?></a></li>
                                    <li><a href="index.php?w=migra&i=<?php echo $_SESSION['i']; ?>" class="dropdown-item"><?= const_0040 ?></a></li>
                               </ul>
                            </li>
                        </ul>
                    </li>
                   

                    <li class="dropdown">
                        <a href="index.php?w=construcion&i=<?php echo $_SESSION['i']; ?>"><?php echo $_SESSION['i']; ?> <i class="fa fa-globe"></i> <i class="fas fa-caret-down"></i></a>
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
                                <a class="dropdown-item" href="'.$index.'?i=ch&w='.$_GET['w'].'">'. const_0056.' </a></li>
                                <a class="dropdown-item" href="'.$index.'?i=es&w='.$_GET['w'].'">'. const_0048.' </a></li>
                                <a class="dropdown-item" href="'.$index.'?i=en&w='.$_GET['w'].'">'. const_0049.' </a></li>
                                <a class="dropdown-item" href="'.$index.'?i=pr&w='.$_GET['w'].'">'. const_0050.' </a></li>
                                <a class="dropdown-item" href="'.$index.'?i=co&w='.$_GET['w'].'">'. const_0051.' </a></li>
                                <a class="dropdown-item" href="'.$index.'?i=fr&w='.$_GET['w'].'">'. const_0052.' </a></li>
                                <a class="dropdown-item" href="'.$index.'?i=al&w='.$_GET['w'].'">'. const_0053.' </a></li>
                                <a class="dropdown-item" href="'.$index.'?i=it&w='.$_GET['w'].'">'. const_0054.' </a></li>
                                <a class="dropdown-item" href="'.$index.'?i=rs&w='.$_GET['w'].'">'. const_0055.' </a></li>
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
                    <li class="backbuton"><a href="http://clientes.createsoftw.com" class="auth-link" target="_blank"><font color='#B11F19'><?= const_0095 ?></font></a></li>
                </ul>
                
                <button class="menu-toggle" aria-label="<?= const_0261 ?>"><i class="fas fa-bars"></i></button>
            </nav>
        </header>