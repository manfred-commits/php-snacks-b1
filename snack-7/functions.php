<?php
// FUNZIONI

function getAverage($array){
    $average=0;
    $length=0;

    

        $length=count($array);

        foreach($array as $numbers){

            $average+=$numbers;
        }

        
        $average=$average / $length;
    
    return round($average,2);
}

// /FUNZIONI

?>