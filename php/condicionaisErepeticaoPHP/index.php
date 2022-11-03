<?php
    //precedencias e operadores booleanos
    $bool = true && false; //&& executa primeiro
    var_dump($bool);
    
    $bool = true and false; //= executa primiro
    var_dump($bool);

    $bool = (true and false); //() executa primeiro
    var_dump($bool);

    $bool = true || false;
    var_dump($bool);

    $bool = false or true;
    var_dump($bool);

    $bool = (true or false);
    var_dump($bool);

    //condicionais e comparadores
    $nota = 8;

    if($nota >= 7){
        if($nota == 10){
            echo "Aluno aprovado exemplar\n";
        }elseif($nota >=9 && $nota < 10){
            echo "Aluno aprovado com louvor\n";
        }else{
            echo "Aluno aprovado\n";
        }
    }else if($nota >= 5 && $nota < 7){
        echo "Aluno de recuperação\n";
    }else{
        echo "Aluno reprovado\n";
    }

    $valor = rand(0,4); //rand é uma função que gera um valor aleatorio entre 0 e 4 nesse caso

    switch($valor){
        case 0:
            echo "valor = ", $valor;
            break;
        case 1:
            echo "valor = ", $valor;
            break;
        case 2:
            echo "valor = ", $valor;
            break;
        case 3:
            echo "valor = ", $valor;
            break;
        default:
            echo "default";
            break;
    }

    
