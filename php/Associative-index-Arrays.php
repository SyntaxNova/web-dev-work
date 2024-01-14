<?php
    $associativeindexarray = array("key1"=>"value1","key2"=>"value2","key3"=>"value3");

    foreach($associativeindexarray as $key=>$value){
        echo "for ".$key." value is ".$value."\n";
    }
/*
output
    for key1 value is value1
    for key2 value is value2
    for key3 value is value3
*/
?>