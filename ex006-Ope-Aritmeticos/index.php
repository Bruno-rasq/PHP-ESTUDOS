<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>

<h1>Operadores Aritméticos</h1>

<p> no PHP o sinal utilizado para somar valores é o <strong>+</strong>, diferentemente do Javascript que o sinal de mais pode tbm ser usado como concatenação</p>

    <ul>
        <li><p> <strong>"."</strong> = Operador de concatenação</p></li>

        <li><p> <strong>"+"</strong> = Operador de adição</p></li>

        <li><p> <strong>"-"</strong> = Operador de subtração</p></li>

        <li><p> <strong> "*"</strong> = Operador de multiplicação</p></li>

        <li><p> <strong>"/"</strong> = Operador de divisão</p></li>

        <li><p> <strong>"%"</strong> = Operador de porcentagem ( calcula o resto da divisão)</p></li>

         <li><p> <strong> "**"</strong> = Operador de exponenciação</p></li>
    </ul>



<?php 
    $soma = "2" + "2";
    echo "o resultado da soma é $soma";
    var_dump($soma);

    // funciona mesmo se os valores numericos estiverem dentro de strings

    //$soma = "2" + "2"; = 4
    // e o php não interpreta o resultado como uma string.
    // nas versões antigas ele retorna o valor 0

    // em versões antigas tnm do php, se parecer uma string com valor numerico antes de outros caracteres o interpretador ignorava os caracteres e utilizava só os numeros

        // exem "10 olá" + " 101 dalmatas" => "10" + "101" = 111

        // porem se o valor vier depois do caracter o mesmo não se aplica.

        // exem "nota 10" + " 101 dalmatas" => "0" + "101" = 101
?>
    
</body>
</html>