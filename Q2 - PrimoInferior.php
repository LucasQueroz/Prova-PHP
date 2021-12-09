<?php 

    function PrimoInferior($num){
        if($num < 0){
            return 0;
        } else if($num == 1){
            return 1;
        } 
        
        else {
            $inferior = $num - 1;
            while((($inferior % 2) == 0) || (($inferior % 3) == 0)){
                $inferior--;
            }
            return $inferior;
        }
    }

    echo PrimoInferior(30);

?>