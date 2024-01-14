<?php
    //method 1
    $a = array("key1"=>"value1","key2"=>"value2","key3"=>"value3","key4"=>"value4");
    $b = array("key1"=>"value1","key2"=>"value2","key3"=>"value3","key4"=>"value4");
    $c = array("key1"=>"value1","key2"=>"value2","key3"=>"value3","key4"=>"value4");

    $mult1 = array(
        "ar1"=> $a,
        "ar2"=> $b,
        "ar3"=> $c
    );

    $mult2 = array(
        "arr1"=> array(
            "key1"=>"value1",
            "key2"=>"value2",
            "key3"=>"value3",
            "key4"=>"value4"
        ),
        "arr2"=> array(
            "key1"=>"value1",
            "key2"=>"value2",
            "key3"=>"value3",
            "key4"=>"value4"
        ),
        "arr3"=> array(
            "key1"=>"value1",
            "key2"=>"value2",
            "key3"=>"value3",
            "key4"=>"value4"
        )
    );
    foreach($mult1 as $key1=>$val1){
        echo $key1." ";
        foreach($val1 as $key2=>$val2){
            echo $key2." ".$val2;
        }
        echo "\n";
    }
    echo "\n";
    foreach($mult2 as $key3=>$val3){
        echo $key3." ";
        foreach($val3 as $key4=>$val4){
            echo $key4." ".$val4;
        }
        echo "\n";
    }
?>

