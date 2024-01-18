<?php
    $x = 4;
    if($x > 5){
        echo $x . " ";
    }else if($x = 5){  // not a comparison operator
        echo $x++ . " " ;
    }else{
        echo $x-- . " ";
    }
    echo $x-- . "\n";
?>