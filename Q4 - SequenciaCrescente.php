<?php 

    function SequenciaCrescente($array) {
        
        $falhas = 0;
        
        for ($i = 0; $i < count($array); $i++) {
             echo $array[$i] . ', ';
        }
        
        if(count($array) <= 2){
            echo 'true';
            return;
        }
        
        $valor_atual;
        
        for ($i = 0; $i < count($array); $i++) {
            $valor_atual = $array[$i];
            for ($j = 1 + $i; $j < count($array); $j++) {
                 $sucessor = $array[$j];
                 if($valor_atual >= $sucessor){
                    $falhas++;
                 }
            }
        }
        
        if($falhas <= 1){
            echo 'true';
        } else {
            echo 'false';
        }
        
    }
    
    $array = [3, 5, 67, 98, 3];
    
    echo SequenciaCrescente($array);

?>