    <style>
/*
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #eceff1; display: flex; justify-content: center; padding: 50px 20px; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); width: 100%; max-width: 450px; }
        h2 { text-align: center; color: #333; margin-top: 0; }
        
        .input-text { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 16px; box-sizing: border-box; margin-bottom: 20px; }
        
        .radio-container { display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 20px; justify-content: center; background: #f9f9f9; padding: 15px; border-radius: 8px; }
        .radio-option { display: flex; align-items: center; cursor: pointer; font-weight: bold; color: #555; }
        .radio-option input { margin-right: 8px; cursor: pointer; transform: scale(1.2); }

        button { width: 100%; padding: 14px; background: #2ecc71; color: white; border: none; border-radius: 6px; font-size: 16px; font-weight: bold; cursor: pointer; }
        button:hover { background: #27ae60; }
*/
        .result { margin-top: 20px; padding: 15px; border-radius: 6px; text-align: center; border: 2px solid transparent; }
        .available { background: #e8f5e9; color: #2e7d32; border-color: #a5d6a7; }
        .taken { background: #ffebee; color: #c62828; border-color: #ef9a9a; }
        .info { font-size: 0.85em; color: #666; margin-top: 10px; }
        .padeoer { margin-bottom: 50px;}
    </style>
<section class="domain-search-section padeoer">
            <h2><?= const_0122 ?></h2>
            <div class="domain-form" method="POST">
                <div class="input-group">
                    <input type="text" name="sld" id="sld" placeholder="Escribe el nombre aquí..." required 
                    value="<?php echo isset($_POST['sld']) ? htmlspecialchars($_POST['sld']) : ''; ?>"
                    onkeyup="dominios(0)">
                </div>
                <!-- <div class="domain-options"> -->
         <!-- Aqui -->
        <div class="domain-options">
                    <label>
                        <input type="radio" id="ext" onclick="dominio('.com')" name="ext" value=".com" checked> <?= const_0014 ?>
                    </label>
                    <label>
                        <input type="radio" id="ext" onclick="dominio('.net')" name="ext" value=".net"> <?= const_0015 ?>
                    </label>
                    <label>
                        <input type="radio" id="ext" onclick="dominio('.org')" name="ext" value=".org"> <?= const_0016 ?>
                    </label>
                    <label>
                        <input type="radio" id="ext" onclick="dominio('.io')" name="ext" value=".io"> <?= const_0017 ?>
                    </label>
                    <label>
                        <input type="radio" id="ext" onclick="dominio('.dev')" name="ext" value=".dev"> <?= const_0018 ?>
                    </label>
                </div> 
            </div>
            <div id="out_domain"></div>
</section>
