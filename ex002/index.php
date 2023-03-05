<!DOCTYPE html>
<html lang="pt0br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de php</h1>

    <?php
        date_default_timezone_set("America/sao_paulo");
        // config a time zone do servidor para mostrar infos da nossa time zone
        echo "hoje é dia " . date("d/M/Y");     
        echo " e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>