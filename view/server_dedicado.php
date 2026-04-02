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
            height: 310px;
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
    <h1 class="h1">Tu elijes la velocidad y nosotros te la damos.</h1>
    <div class="pricing-container">
        <div class="pricing-card">
            <h2>Servidor dedicado Basico</h2>
            <div class="price">180 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li>Memoria: hasta 576 GB</li>
                <li>Discos de almacenamiento SSD NVMe y HDD SAS Soft RAID</li>
                <li>SLA: 99,95%</li>
                <li>AB público: de 3 Gb/s a 5 Gb/s(1)</li>
                <li>AB privado: de 5 Gb/s</li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos">Acepto los Términos</a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="180">Pagar Ahora</button> 
        </div>

        <div class="pricing-card">
            <h2>Servidor dedicado Emprendedor</h2>
            <div class="price">740 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li>Memoria: hasta 1,5 TB</li>
                <li>SLA: 99,99%</li>
                <li>Ancho de banda público garantizado desde 5 Gb/s hasta 25 Gb/s(1)</li>
                <li>Ancho de banda privado de 25 Gb/s incluido</li>
                <li>OVHcloud Link Aggregation</li>
                <li>Compatible con 3-AZ en París</li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos">Acepto los Términos</a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="740">Pagar Ahora</button> 
        </div>

        <div class="pricing-card">
            <h2>Servidor Empresario Master Full</h2>
            <div class="price">1900 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <li>Memoria: hasta 2 TB</li>
                <li>SLA: 99,99 %</li>
                <li>Doble fuente de alimentación</li>
                <li>Discos «hot swap»</li>
                <li>AB público: de 10 Gb/s a 25 Gb/s(1)</li>
                <li>OVHcloud Link Aggregation</li>
                <li>25 Gb/s de ancho de banda privado incluido y garantizado</li>
                <li>Compatible con 3-AZ en París</li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos">Acepto los Términos</a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="1900">Pagar Ahora</button> 
        </div>

    </div>
<?php require_once 'view/layouts/footers.php'; ?>