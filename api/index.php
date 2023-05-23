<?php

// Verifica se a solicitação é para a rota /api/
if ($_SERVER['REQUEST_URI'] === '/api/') {
    // Lógica para lidar com a solicitação da rota /api/
    // Por exemplo, você pode retornar um JSON de resposta
    $response = [
        'message' => 'Esta é a rota /api/'
    ];
    
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// Outra lógica do seu aplicativo

// ...
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GABRIEL</title>
    <style>
        body {
            display: block;
            background-image: url(/imagens/Music.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .tela {
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="tela">
        <?php
            $g = "GABRIEL";
            $c = "JUCATI"; 
            $d = "DE";
            echo $g . " " . $d . " " . $c;
        ?>
    </div>
</body>
</html>
