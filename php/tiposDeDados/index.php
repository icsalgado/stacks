<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de variaveis</title>
</head>
<body>
    <h1>Tipos de Variaveis em PHP</h1>

    <?php

        date_default_timezone_set("America/Sao_Paulo");

        echo date("d/M/Y - H:i:s");

        print "\n<h2>Agora as variáveis</h2>\n";
        $string = "essa e uma string";
        $numero = 4;
        $vetor = array('PHP', 'HTML', 'CSS');
        var_dump($numero);
        
        echo "<h2>$string</h2>\n";
        
        print_r($vetor);
    ?>
</body>
</html>