<?php require_once 'view/layouts/headers.php'; ?>
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
            height: 300px;
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
            height: 300px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            padding: 15px;
            background: #fafafa;
        }
    </style>
    <h1 class="h1">Elije como quieres tu VPS prearmado de Shaiya y haz realidad tu emprendimiento.</h1>
    <h1 class="h1">Tipos de VPS.</h1>
    <div class="pricing-container">
        <div class="pricing-card">
            <h2>Básico</h2>
            <div class="price">25 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li>Dirección de IP dedicada</li>
                <li>2 Núcleos x 3.0 Ghz</li>
                <li>Disco HDD 120 GB</li>
                <li>RAM 2 GB</li>
                <li>Ancho Banda 200 MBP/s Puertos Ilimitado</li>
                <li>Localización: Data-Center Canadá</li>
                <li>WINDOWS 2016 R2</li>
                <li>Mitigación DDOS hasta 200MBs</li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos">Acepto los Términos</a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="25">Pagar Ahora</button> </div>

        <div class="pricing-card">
            <h2>Emprendedor</h2>
            <div class="price">60 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li>2 Núcleos x 3.0 Ghz</li>
                <li>Disco HDD 720 GB</li>
                <li>RAM 12 GB</li>
                <li>Ancho Banda 500 MBP/s</li>
                <li>Localización: Data-Center Canadá</li>
                <li>WINDOWS 2016 R2</li>
                <li>Mitigación DDOS hasta 500MBs</li>
                <li>Hasta 80 PJs ON sin lag</li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos">Acepto los Términos</a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="60">Pagar Ahora</button> </div>

        <div class="pricing-card">
            <h2>Empresario</h2>
            <div class="price">80 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li>2 Núcleos x 3.0 Ghz</li>
                <li>Disco HDD 720 GB</li>
                <li>RAM 12 GB</li>
                <li>Ancho Banda 500 MBP/s</li>
                <li>Localización: Data-Center Canadá</li>
                <li>WINDOWS 2016 R2</li>
                <li>Mitigación DDOS hasta 2GBs</li>
                <li>Hasta 300 PJs ON sin lag</li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos">Acepto los Términos</a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="80">Pagar Ahora</button> </div>
    </div>
<?php require_once 'view/layouts/footers.php'; ?>