<?php 

    function SequenciaCrescente($array) {
        
        $predecessor = $array[0];
        $sucessor = $array[1];
        $falhas = 0;
        
        for ($i = 0; $i < count($array); $i++) {
             echo $array[$i] . ', ';
        }
        
        for ($p = 0, $s = 1; $s < count($array); $p++ and $s++) {
             if($predecessor >= $sucessor){
                 $falhas++;
             } 
             
             $predecessor = $array[$p];
             $sucessor = $array[$s];
        }
        
        if($falhas <= 1){
            echo 'true';
        } else {
            echo 'false';
        }
        
    }
    
    $array = [1, 2, 1, 2];
    
    echo SequenciaCrescente($array);

?>