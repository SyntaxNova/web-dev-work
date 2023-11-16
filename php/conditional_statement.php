<?php 

    $a=10 ;
    $b=20 ;
    $operator="*" ;

    echo "IF Statement " ;
    if($a>=$b){
        echo "a is bigger or equal" ;
    }
    echo "thank you" ;

    echo "IF-else Statement " ;
    
    if($a>=$b){
        echo "a is bigger or equal" ;
    }
    else{
        echo "b is smaller" ;
    }
    

    echo "IF-elseif-else Statement " ;
    if($a==$b){
        echo "a and b is not equal" ;
    }
    elseif($a%$b=0){
        echo "a is divisible by b" ;
    }
    else{
        echo "else is the statement" ;
    }
    

    echo "switch Statement " ;
    
    switch($operator){
        case "+" :
            echo $a + $b ;
        case "-" :
            echo $a - $b ;
        case "*" :
            echo $a * $b ;
        case "%" :
            echo $a % $b ;
        default :
            echo "this is not supported" ;
    }
    echo "thank you" ;
?>