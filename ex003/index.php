<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
    //0x = hexadecimal || 0b = bnário || 0 = octal
    //LEMBRETE: estudar bases numéricas.

        //$n = 300;
        //echo " o valor da variavel é $n";

        //$v = true;
        //var_dump($v);

        //$d = (int) 3e2; // 3 x 10 ^ 2 = 300 || coerção
        //echo " o valor da variavel é $d";
        //var_dump($d);

        //para variaveis do tipo boolean escritas com comando echo ou print, o valor true aparece como 1 ou qualquer caracter enquanto o valor false aparecerá vazio.

        //$vet = [3, 5.9, 4, "mario", false];
        //var_dump($vet);

        class pessoa {
            private string $nome;
        }

        $p = new pessoa;
        var_dump($p);
    ?>
</body>
</html>