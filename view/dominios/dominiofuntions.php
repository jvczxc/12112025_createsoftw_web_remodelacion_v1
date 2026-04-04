    <style>
        .result { margin-top: 20px; padding: 15px; border-radius: 6px; text-align: center; border: 2px solid transparent; }
        .available { background: #e8f5e9; color: #2e7d32; border-color: #a5d6a7; }
        .taken { background: #ffebee; color: #c62828; border-color: #ef9a9a; }
        .info { font-size: 0.85em; color: #666; margin-top: 10px; }
    </style>


     <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['sld'])) {
        $name = strtolower(trim($_POST['sld']));
        $ext = $_POST['ext'];
        
        // Limpieza de caracteres
        $clean_name = preg_replace('/[^a-z0-9-]/', '', $name);
        $fullsld = $clean_name . $ext;

        // --- LÓGICA DE VERIFICACIÓN MEJORADA ---
        // 1. Intentamos resolver la IP
        $ip = gethostbyname($fullsld);
        $has_ip = ($ip !== $fullsld); // Si son diferentes, el dominio tiene una IP asignada

        // 2. Intento de conexión por socket (timeout de 2 segundos para no colgar el servidor)
        $is_reachable = false;
        if (!$has_ip) {
            $connection = @fsockopen($fullsld, 80, $errno, $errstr, 2);
            if ($connection) {
                $is_reachable = true;
                fclose($connection);
            }
        }

        echo "<div class='result " . (!$has_ip && !$is_reachable ? "available" : "taken") . "'>";
        if (!$has_ip && !$is_reachable) {
            echo "✅ <strong>$fullsld</strong> " . const_0267;
        } else {
            echo "❌ <strong>$fullsld</strong> " . const_0268;
        }
        echo "</div>";
        echo "<p class='info'>" . const_0269 . "</p>";
    }
    ?>
