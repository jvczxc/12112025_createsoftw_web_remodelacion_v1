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
    </style>
    <h1 class="h1"><?= const_0255 ?></h1>

<div class="padm">
    <p><?= const_0256 ?></p>
</br>
       <?= const_0257 ?>
</div>
    <div class="pricing-container">
        <div class="pricing-card">
            <h2><?= const_0258 ?></h2>
            <div class="price">6 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <h3><?= const_0270 ?></h3>
                <li><?= const_0271 ?></li>
                <li><?= const_0272 ?></li>
                <li><?= const_0273 ?></li>
                <li><?= const_0274 ?></li>
                <li><?= const_0275 ?></li>
                <li><?= const_0276 ?></li>
                <li><?= const_0277 ?></li>
                <li><?= const_0278 ?></li>
                <li><?= const_0279 ?></li>
                <li><?= const_0280 ?></li>
                <li><?= const_0281 ?></li>
                <li><?= const_0282 ?></li>
                <li><?= const_0283 ?></li>
                <li><?= const_0284 ?></li>
                <li><?= const_0285 ?></li>
                <li><?= const_0286 ?></li>
                <li><?= const_0287 ?></li>
                <li><?= const_0288 ?></li>
                <li><?= const_0289 ?></li>
                <li><?= const_0290 ?></li>
                <li><?= const_0291 ?></li>
                <li><?= const_0292 ?></li>
                <li><?= const_0293 ?></li>
                <li><?= const_0294 ?></li>
                <li><?= const_0295 ?></li>
                <li><?= const_0296 ?></li>
                <li><?= const_0297 ?></li>
                <li><?= const_0298 ?></li>
                <li><?= const_0299 ?></li>
                <li><?= const_0300 ?></li>
                <li><?= const_0301 ?></li>
                <li><?= const_0302 ?></li>
                <li><?= const_0303 ?></li>
                <li><?= const_0304 ?></li>
                <li><?= const_0305 ?></li>
                <li><?= const_0306 ?></li>
                <li><?= const_0307 ?></li>
                <li><?= const_0308 ?></li>
                <li><?= const_0309 ?></li>
                <li><?= const_0310 ?></li>
                <li><?= const_0311 ?></li>
                <li><?= const_0312 ?></li>
                <li><?= const_0313 ?></li>
                <li><?= const_0314 ?></li>
                <li><?= const_0315 ?></li>
                <li><?= const_0316 ?></li>
                <li><?= const_0317 ?></li>
                <li><?= const_0318 ?></li>
                <li><?= const_0319 ?></li>
                <li><?= const_0320 ?></li>
                <li><?= const_0321 ?></li>
                <li><?= const_0322 ?></li>
                <li><?= const_0323 ?></li>
                <li><?= const_0324 ?></li>
                <li><?= const_0325 ?></li>
                <li><?= const_0326 ?></li>
                <li><?= const_0327 ?></li>
                <li><?= const_0328 ?></li>
                <li><?= const_0329 ?></li>
                <li><?= const_0330 ?></li>
                <li><?= const_0331 ?></li>
                <li><?= const_0332 ?></li>
                <li><?= const_0333 ?></li>
                <li><?= const_0334 ?></li>
                <li><?= const_0335 ?></li>
                <li><?= const_0336 ?></li>
                <li><?= const_0337 ?></li>
                <li><?= const_0338 ?></li>
                <li><?= const_0339 ?></li>
                <li><?= const_0340 ?></li>
                <li><?= const_0341 ?></li>
                <li><?= const_0342 ?></li>
                <li><?= const_0343 ?></li>
                <li><?= const_0344 ?></li>
                <li><?= const_0345 ?></li>
                <li><?= const_0346 ?></li>
                <li><?= const_0347 ?></li>
                <li><?= const_0348 ?></li>
                <li><?= const_0349 ?></li>
                <li><?= const_0350 ?></li>
                <li><?= const_0351 ?></li>
                <li><?= const_0352 ?></li>
                <li><?= const_0353 ?></li>
                <li><?= const_0354 ?></li>
                <li><?= const_0355 ?></li>
                <li><?= const_0356 ?></li>
                <li><?= const_0357 ?></li>
                <li><?= const_0358 ?></li>
                <li><?= const_0359 ?></li>
                <li><?= const_0360 ?></li>
                <li><?= const_0361 ?></li>
                <li><?= const_0362 ?></li>
                <li><?= const_0363 ?></li>
                <li><?= const_0364 ?></li>
                <li><?= const_0365 ?></li>
                <li><?= const_0366 ?></li>
                <li><?= const_0367 ?></li>
                <li><?= const_0368 ?></li>
                <li><?= const_0369 ?></li>
                <li><?= const_0370 ?></li>
                <li><?= const_0371 ?></li>
                <li><?= const_0372 ?></li>
                <li><?= const_0373 ?></li>
                <li><?= const_0374 ?></li>
                <li><?= const_0375 ?></li>
                <li><?= const_0376 ?></li>
                <li><?= const_0377 ?></li>
                <li><?= const_0378 ?></li>
                <li><?= const_0379 ?></li>
                <li><?= const_0380 ?></li>
                <li><?= const_0381 ?></li>
                <li><?= const_0382 ?></li>
                <li><?= const_0383 ?></li>
                <li><?= const_0384 ?></li>
                <li><?= const_0385 ?></li>
                <li><?= const_0386 ?></li>
                <li><?= const_0387 ?></li>
                <li><?= const_0388 ?></li>
                <li><?= const_0389 ?></li>
                <li><?= const_0390 ?></li>
                <li><?= const_0391 ?></li>
                <li><?= const_0392 ?></li>
                <li><?= const_0393 ?></li>
                <li><?= const_0394 ?></li>
                <li><?= const_0395 ?></li>
                <li><?= const_0396 ?></li>
                <li><?= const_0397 ?></li>
                <li><?= const_0398 ?></li>
                <li><?= const_0399 ?></li>
                <li><?= const_0400 ?></li>
                <li><?= const_0401 ?></li>
                <li><?= const_0402 ?></li>
                <li><?= const_0403 ?></li>
                <li><?= const_0404 ?></li>
                <li><?= const_0405 ?></li>
                <li><?= const_0406 ?></li>
                <li><?= const_0407 ?></li>
                <li><?= const_0408 ?></li>
                <li><?= const_0409 ?></li>
                <li><?= const_0410 ?></li>
                <li><?= const_0411 ?></li>
                <li><?= const_0412 ?></li>
                <li><?= const_0413 ?></li>
                <li><?= const_0414 ?></li>
                <li><?= const_0415 ?></li>
                <li><?= const_0416 ?></li>
                <li><?= const_0417 ?></li>
                <li><?= const_0418 ?></li>
                <li><?= const_0419 ?></li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos"><?= const_0136 ?></a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="180"><?= const_0137 ?></button> 
        </div>

        <div class="pricing-card">
            <h2><?= const_0259 ?></h2>
            <div class="price">6 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <h3><?= const_0421 ?></h3>
                <li><?= const_0422 ?></li>
                <li><?= const_0423 ?></li>
                <li><?= const_0424 ?></li>
                <li><?= const_0425 ?></li>
                <li><?= const_0426 ?></li>
                <li><?= const_0427 ?></li>
                <li><?= const_0428 ?></li>
                <li><?= const_0429 ?></li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos"><?= const_0136 ?></a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="740"><?= const_0137 ?></button> 
        </div>



    </div>
<?php require_once 'view/layouts/footers.php'; ?>
