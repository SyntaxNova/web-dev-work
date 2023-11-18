<?php
    $years =array("bill"=> 1993 , "george"=> 2001 , "barack"=> 2009) ; //key:value pairs
    echo $years["bill"] ;

    foreach ($years as $name => $years) {
        echo $name." was elected in ".$years."\n";
    } ;

?>