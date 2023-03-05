<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Aula de strings em PHP</h1>

    <?php 
        //strings = cadeias de caracteres entre aspas ""

        //quatro formatos de strings:
            //-Double quoted = aspas duplas
            //-Single quoted = aspas simples
            //Heredoc
            //Nowdoc

        
            // Operador de concatenção = (.)
            // "curso" . "de" . "php" = curso de php

        //Double quoted  existe interpretação de conteudo, enquanto single quoted não.
        
        // exm: $nome = "Bruno  \u{1F30e}";
            //Echo "Olá, meu nome é $nome"; = Olá, meu nome é Bruno (emoji)

            //$nome = 'Bruno \u{1F30e}';
            //Echo "Olá, meu nome é $nome"; = Olá, meu nome é Bruno \u{1F30e}

        // const ESTADO = "SC";
        //ECHO "mono no ESTADO"; = mono no ESTADO
        //ECHO 'mono no ESTADO'; = mono no ESTADO

        //ECHO "mono no estado de  " . ESTADO; = mono no estado de SC   

    
        //const ESTADO = "SC";
        //ECHo "mono no ESTADO ";
        //ECHO 'mono no ESTADO '; 

        //ECHO "mono no estado de  " . ESTADO ;

        // dentre de aspas duplas podem aspas simples
        // dentro de aspas simples podem aspas duplas

        // dentro de aspas sinples nao podem aspas simples
        // dentro de aspas duplas nao podem aspas duplas

        //echo "ano atual: " . date('Y');

        //Sequencia de escape:
            // $nome = "Bruno";
            // $snome = "Dias";

            // ECHO "$nome "Rasq_" $snome"; => ERRO
            // ECHO '$nome "Rasq_" $snome'; => $nome "Rasq_" $snome

            // ECHO "$nome \"Rasq_\" $snome"; => Bruno "Rasq_" Dias

       
    ?>
    
</body>
</html>