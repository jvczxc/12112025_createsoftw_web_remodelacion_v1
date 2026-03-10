<?php
// Directorio actual
$dir = __DIR__;

// Función para limpiar nombres de archivo
function limpiar_nombre($nombre) {
    // Reemplazar vocales acentuadas por vocales sin acento
    $acentos = [
        'á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ú'=>'u',
        'Á'=>'A','É'=>'E','Í'=>'I','Ó'=>'O','Ú'=>'U',
        'à'=>'a','è'=>'e','ì'=>'i','ò'=>'o','ù'=>'u',
        'ä'=>'a','ë'=>'e','ï'=>'i','ö'=>'o','ü'=>'u',
        'â'=>'a','ê'=>'e','î'=>'i','ô'=>'o','û'=>'u',
        'ã'=>'a','õ'=>'o','ñ'=>'n','ç'=>'c'
    ];
    $nombre = strtr($nombre, $acentos);

    // Separar nombre y extensión
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $base = pathinfo($nombre, PATHINFO_FILENAME);

    // Eliminar caracteres que no sean letras o números
    $base = preg_replace('/[^a-zA-Z0-9]/', '', $base);

    // Reconstruir nombre
    return $ext ? $base . '.' . $ext : $base;
}

// Procesar archivos en el directorio
$archivos = scandir($dir);
foreach ($archivos as $archivo) {
    if ($archivo === '.' || $archivo === '..' || is_dir($archivo) || $archivo === basename(__FILE__)) {
        continue;
    }
    $nuevo_nombre = limpiar_nombre($archivo);
    if ($nuevo_nombre !== $archivo && !file_exists($nuevo_nombre)) {
        rename($archivo, $nuevo_nombre);
        echo "Renombrado: $archivo -> $nuevo_nombre<br>";
    }
}
?>