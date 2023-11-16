<?php
    $a=10 ;
    $b=2 ;
    $n=1 ;
    echo "  Loops  " ;
    while($n<=12){
       echo $n+=1 ;
       $n++; 
    }
    while($n<=12){
        echo $n+=1 ;
        if($n==5){
         break ; //continue keyword pass next command , not execute.
        }
        $n++; 
     }
     do {
        $n++;
        echo $n*3;
     } while ($n <= 10);
     echo "  while loop ends  "  ;
    
    for ($i=1; $i<12 ; $i++) { 
        echo $i+=1 ;
    }
    echo "  for loop ends  " ;
    $arr =array(1,2,3,4,5,6,7,8,9,0);
    foreach ($arr as $key) {
        $key++;
        echo $key*2 ;
    }
    echo "  foreach loop ends  " ;
?>