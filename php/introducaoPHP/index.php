<?php
    $categorias = []; //declara um vetor vazio
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    $nome = 'Iuri';
    $idade = '31';

    //print_r ($categorias);
    //echo count($categorias);

    if($idade >= 6 && $idade <= 12){
        for($i = 0; $i <= count($categorias)-1; $i++){
            if($categorias[$i] == 'infantil'){
                echo "O atleta ",$nome," compete na categoria ",$categorias[$i];
            }
        }
    }else if($idade > 12 && $idade <= 18){
        for($i = 0; $i <= count($categorias)-1; $i++){
            if($categorias[$i] == 'adolescente'){
                echo "O atleta ",$nome," compete na categoria ",$categorias[$i];
            }
        }
    }else{
        for($i = 0; $i <= count($categorias)-1; $i++){
            if($categorias[$i] == 'adulto'){
                echo "O atleta ",$nome," compete na categoria ",$categorias[$i];
            }
        }
    }


?>