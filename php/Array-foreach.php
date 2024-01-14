<?php
    $colour = array("red"=>1 , "orange"=>3 , "green"=> 2, "voilet"=> 4, "vibgyor"=>0);
    //associative array

    foreach($colour as $nstr=>$code){
        echo $nstr . " has code " . $code . "\n";
    }
    /*
    output foreach :
        red has code 1
        orange has code 3
        green has code 2
        voilet has code 4
        vibgyor has code 0
    */
?>