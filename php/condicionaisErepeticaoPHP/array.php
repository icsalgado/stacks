<?php

    //arrays

    $array = array("chave" => "valor");//usando metodo construtor
    $array1 = ["valor1", "valor2"];
    $array2 = ["chave2" => "valor2"];
    print_r($array);
    print_r($array1);
    print_r($array2);

    //multidimensionais

    $aluno = [
        [
            "Nome" => "Iuri",
            "Endereco" => [
            "Cidade" => "Porto Alegre",
            "Estado" => "RS",
            "Pais" => "Brasil"
            ]
        ],
        [
            "Nome" => "João",
            "Endereco" => [
            "Cidade" => "São Paulo",
            "Estado" => "SP",
            "Pais" => "Brasil"
            ]
        ]
    ];

    print_r($aluno);

    //for

    for($i = 0; $i < count($aluno); $i++){
        print_r($aluno[$i]["Endereco"]);
    }

    //bubblesort
    $vetor = [];

    for($i = 0; $i <= 3; $i++){
        $vetor[$i] = rand(0, 100);
    }

    var_dump($vetor);

    for($j = 0; $j < 3; $j++){
        for($posicaoAtual = 0; $posicaoAtual < 3 - $j; $posicaoAtual++){
            $proximaPosicao = $posicaoAtual+1;

            if($vetor[$proximaPosicao] < $vetor[$posicaoAtual]){
                $auxiliar = $vetor[$posicaoAtual];
                $vetor[$posicaoAtual] = $vetor[$proximaPosicao];
                $vetor[$proximaPosicao] = $auxiliar;
            }
        }
    }

    var_dump($vetor);

    foreach($vetor as $indice => $value){
        echo "[" . $indice . "] => " . gettype($value) . " " . $value . "\n";
    }

?>