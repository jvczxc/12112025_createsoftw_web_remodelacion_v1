<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= const_0236 ?></title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            text-align: center;
            padding: 40px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 90%;
        }

        .icon {
            font-size: 50px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        p {
            font-size: 1.1rem;
            color: #7f8c8d;
            line-height: 1.6;
        }

        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .footer {
            margin-top: 30px;
            font-size: 0.9rem;
            color: #bdc3c7;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="icon">🏗️</div>
        <h1><?= const_0237 ?></h1>
        <p><?= const_0238 ?></p>
        
        <div class="loader"></div>

        <div class="footer">
            &copy; 2026 <?= const_0239 ?>
        </div>
    </div>

</body>
</html>