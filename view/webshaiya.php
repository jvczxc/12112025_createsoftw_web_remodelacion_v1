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
        .padm{
            padding: 30px 50px;
            text-align: justify;
             color: var(--corporate-color);
             font-size: 1.1em;
        }
        h3{
            color: var(--highlight-color);
             text-transform: uppercase;
        }
        .subtitle{
            color: var(--corporate-colore);
            font-weight: bold;
        }
    </style>
    <h1 class="h1"><?= const_0138 ?></h1>

<div class="padm">
    <p><?= const_0139 ?></p>
</br>
    <?= const_0140 ?>
</div>
    <div class="pricing-container">
        <div class="pricing-card">
            <h2><?= const_0141 ?></h2>
            <div class="price">225 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <h3><?= const_0143 ?></h3>
                <li><?= const_0144 ?></li>
                <li><?= const_0145 ?></li>
                <li><?= const_0146 ?></li>
                <li><?= const_0147 ?></li>
                <li><?= const_0148 ?></li>
                <li><?= const_0149 ?></li>
                <li><?= const_0150 ?></li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos"><?= const_0136 ?></a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="740"><?= const_0137 ?></button> 
        </div>
        <div class="pricing-card">
            <h2><?= const_0142 ?></h2>
            <div class="price">350 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <h3><?= const_0143 ?></h3>
                <li><?= const_0144 ?></li>
                <li><?= const_0145 ?></li>
                <li><?= const_0151 ?></li>
                <li><?= const_0146 ?></li>
                <li><?= const_0152 ?></li>
                <li><?= const_0153 ?></li>
                <li><?= const_0148 ?></li>
                <li><?= const_0149 ?></li>
                <li><?= const_0150 ?></li>
                <li class="subtitle"><?= const_0154 ?></li>
                <li><?= const_0155 ?></li>
                <li><?= const_0156 ?></li>
                <li><?= const_0157 ?></li>
                <li><?= const_0158 ?></li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos"><?= const_0136 ?></a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="740"><?= const_0137 ?></button> 
        </div>



    </div>
<?php require_once 'view/layouts/footers.php'; ?>