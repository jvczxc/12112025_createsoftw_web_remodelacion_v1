<?php 
require_once 'view/layouts/headers.php'; 
/* Filtrar quitado el "." y los 2 ceros */
$dolar1 = $dato3[0]['price'];
$dolar2 = $dato3[1]['price'];
$dolar3 = $dato3[2]['price'];
$dolar1 = str_replace('.00', '', $dolar1);
$dolar2 = str_replace('.00', '', $dolar2);
$dolar3 = str_replace('.00', '', $dolar3);
?>
<style>
        :root {
            --corporate-color: #460809; /* [cite: 1, 15] */
            --corporate-colore: #B11F19; /* [cite: 2, 16] */
            --highlight-color: #FFDF20; /* [cite: 3, 17] */
            --text-color-light: #FFFFFF; /* [cite: 4, 18] */
            --border-color: #FFFFFF; /* [cite: 4, 18] */
        }
        .h1{
            text-align: center;
            color: var(--corporate-color);
            margin-top: 40px;
            margin-bottom: 40px;
        }
       .textos{
            color: 5px solid var(--highlight-color);
        }
       .pricing-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .pricing-card {
            background: var(--corporate-color);
            color: var(--text-color-light);
            border: 2px solid var(--border-color);
            border-radius: 10px;
            width: 300px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            border-color: var(--highlight-color);
        }

        .pricing-card h2 {
            color: var(--highlight-color);
            text-transform: uppercase;
        }

        .price {
            font-size: 2em;
            font-weight: bold;
            margin: 10px 0;
            color: var(--text-color-light);
        }

        .services-list {
            text-align: left;
            font-size: 0.85em;
            list-style: none;
            padding: 0;
            margin: 20px 0;
            height: 800px;
            overflow-y: auto;
            border-bottom: 1px solid var(--corporate-colore);
        }

        .services-list li {
            padding: 5px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .terms-checkbox {
            margin: 15px 0;
            font-size: 0.8em;
        }

        .btn-pay {
            background-color: var(--highlight-color);
            color: #000;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .terms-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            max-width: 1000px;
            margin: 0 auto;
            border-top: 5px solid var(--corporate-color);
            color: #333;
        }

        .terms-container h1, .terms-container h2 {
            color: var(--corporate-color);
        }

        .terms-content {
            height: 400px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            padding: 15px;
            background: #fafafa;
        }
    </style>
    <h1 class="h1"><?= const_0159 ?></h1>
    <div class="pricing-container">
        <div class="pricing-card">
            <h2><?= const_0161 ?></h2>
            <div class="price"><?= $dolar1 ?> USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li><?= const_0179 ?></li>
                <li><?= const_0180 ?></li>
                <li><?= const_0181 ?></li>
                <li><?= const_0182 ?></li>
                <li><?= const_0183 ?></li>
                <li><?= const_0184 ?></li>
                <li><?= const_0185 ?></li>
                <li><?= const_0164 ?></li>
                <li><?= const_0165 ?></li>
                <li>Disco HDD 120 GB</li>
                <li>RAM 2 GB</li>
                <li><?= const_0168 ?></li>
                <li><?= const_0169 ?></li>
                <li><?= const_0170 ?></li>
                <li><?= const_0171 ?></li>
                <li><?= const_0186 ?></li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos"><?= const_0136 ?></a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="<?= $dolar1 ?>"><?= const_0137 ?></button> </div>

        <div class="pricing-card">
            <h2><?= const_0162 ?></h2>
            <div class="price"><?= $dolar2 ?> USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li><?= const_0187 ?></li>
                <li><?= const_0188 ?></li>
                <li><?= const_0181 ?></li>
                <li><?= const_0182 ?></li>
                <li><?= const_0183 ?></li>
                <li><?= const_0189 ?></li>
                <li><?= const_0185 ?></li>
                <li><?= const_0164 ?></li>
                <li><?= const_0190 ?></li>
                <li><?= const_0165 ?></li>
                <li>Disco HDD 720 GB</li>
                <li>RAM 12 GB</li>
                <li><?= const_0174 ?></li>
                <li><?= const_0169 ?></li>
                <li><?= const_0170 ?></li>
                <li><?= const_0175 ?></li>
                <li><?= const_0176 ?></li>
                <li><?= const_0191 ?></li>
                <li><?= const_0192 ?></li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos"><?= const_0136 ?></a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="<?= $dolar2 ?>"><?= const_0137 ?></button> </div>

        <div class="pricing-card">
            <h2><?= const_0163 ?></h2>
            <div class="price"><?= $dolar3 ?> USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li><?= const_0187 ?></li>
                <li><?= const_0193 ?></li>
                <li><?= const_0181 ?></li>
                <li><?= const_0182 ?></li>
                <li><?= const_0183 ?></li>
                <li><?= const_0189 ?></li>
                <li><?= const_0185 ?></li>
                <li><?= const_0164 ?></li>
                <li><?= const_0190 ?></li>
                <li><?= const_0165 ?></li>
                <li>Disco HDD 720 GB</li>
                <li>RAM 12 GB</li>
                <li><?= const_0174 ?></li>
                <li><?= const_0169 ?></li>
                <li><?= const_0170 ?></li>
                <li><?= const_0177 ?></li>
                <li><?= const_0178 ?></li>
                <li><?= const_0194 ?></li>
                <li><?= const_0195 ?></li>
                <li><?= const_0196 ?></li>
                <li><?= const_0197 ?></li>
                <li><?= const_0191 ?></li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos"><?= const_0136 ?></a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="<?= $dolar3 ?>"><?= const_0137 ?></button> </div>
    </div>
<?php require_once 'view/layouts/footers.php';?>