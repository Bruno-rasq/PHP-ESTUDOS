<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    
</head>
<body>
    <header>
        <h1>Resultado do processamento.</h1>
    </header>
    <main>
        <?php 
          //var_dump($_REQUEST);  // junção de $_GET e $_POST

          $nome = $_GET["nome"] ?? "sem nome";
          $snome = $_GET["sobrenome"] ?? "Desconhecido";

          echo "<p>Olá, <strong>$nome $snome</strong> . Prazer em conhece-lo.</p>"
        ?>

        <p><a href="javascript:history.go(-1)"> voltar a página anterior</a></p>
    </main>
</body>
</html>