<?php 
    //if elseif else

    $a=10;
    $b = 30;

    if($a>$b){
        echo "a is greater than b \n";
    }elseif($b>$a){
        echo "b is greater than a \n";
    }else{
        echo "numbers are same \n";
    }
//b is greater than a : output

    $i = 5;
    switch($i){
        case 1 : 
            echo "yohoo 1 ";
            break;
        case 2 :
            echo "yohoo 2 ";
            break;
        case 3 :
            echo "yohoo 3 ";
            break;
        default :
            echo "oops! 404 not found";
    }
    /* output for i = 5;
    b is greater than a 
    oops! 404 not found
    */
?>


