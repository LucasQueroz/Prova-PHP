<?php 

    // Função SeculoAno($ano)
    function SeculoAno($ano){
        if($ano >= 1 && $ano <= 100){
            return 1;
        } else if (($ano%100) == 0) {
            return intval($ano/100);
        } else if (($ano%100) != 0) {
            return intval($ano/100) + 1;
        }
    }

    echo "Século: " . SeculoAno(1700);

?>