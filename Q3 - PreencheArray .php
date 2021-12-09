<?php 

    function PreencheArray() {
        $array = [1,2,3,4];
        $min = 1;
        $max = 20;
        
        for($i = 0; $i < $max; $i++){
            $array[$i] = rand($min, $max);
        }
        
        echo "Array sorteado = [";
        for($i = 0; $i < 20; $i++){
            if($i == $max-1) {
                echo $array[$i];
            } else {
               echo $array[$i] . ", " ; 
            }
            
        }
        echo "]\n";
        
        // busca quanta veses cada valor se repete
        $valores = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        
        for($valor = 1; $valor <= $max; $valor++){
            for($i = 0; $i < $max; $i++){
                if($valor == $array[$i]){
                   $valores[$valor-1]++; 
                }
            }
        }
        
        echo "Quanto cada valor se repete = [";
        for($i = 0; $i < $max; $i++){
            echo $valores[$i] . ", ";
        }
        echo "]\n";
        
        
        // busca qual o valor mais se repete
        $maior = 0;
        $maior_vezes_repete = $valores[0];
        
        for($i = 0; $i < $max; $i++){
            if($maior_vezes_repete < $valores[$i]){
               $maior_vezes_repete =  $valores[$i];
               $maior = $i+1;
            }
        }
        
        echo "\nO número que mais se repete é o " . $maior;
        echo "\nEle se repete " . $maior_vezes_repete . " vezes";
    }
    
    PreencheArray();

?>