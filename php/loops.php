// while loop
<?php
    $a = 0;
    while($a < 10 ){
        echo $a." ";
        $a++;
   }
   echo "\n";
?>

//do-while loop
<?php
    $b = 1;
    do{
        echo $b." ";
        $b++;
    }while($b < 11);
    echo "\n";
?>

//for loop
<?php
    for($i=1 ; $i<11 ; $i++){
        echo $i." ";
    }
    echo "\n";
?>

<?php
    /*
    OUTPUT:
        // while loop
        0 1 2 3 4 5 6 7 8 9 

        // do-while loop
        1 2 3 4 5 6 7 8 9 10 

        // for loop
        1 2 3 4 5 6 7 8 9 10
    */
?>