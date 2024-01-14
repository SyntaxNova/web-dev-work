//variables
<?php 
    $a = 11;
    $b = 22;
    echo $a + $b;
    //$object = new Book();//object creation
?>

//operators
<?php
    //arithmetic operators
    $a =10;
    $b = 11;
    echo $a + $b; //addition
    echo $a - $b; //subtraction
    echo $a * $b; //multiplication
    echo $a / $b; //division
    echo $a % $b; //modulus , returns remainder

    //assignment operators
    $a = $b ;  //assigns value of $c to $a
    $a += $b ; //adds $a = $a + $b;
    $a -= $b ; //subtracts $a = $a - $b;
    $a *= $b ; //multiplies $a = $a * $b;
    $a /= $b ; //divides $a = $a / $b;
    $a %= $b ; //modulus $a = $a % $b;

    //comparison operators
    $a == $b ; //equal to
    $a === $b ; //identical to
    $a != $b ; //not equal to
    $a < $b ; //less than
    $a > $b ; //greater than
    $a <= $b ; //less than or equal to
    $a >= $b ; //greater than or equal to

    //logical operators
    (5>4) && (4>5); //and
    (5>4) || (4>5); //or
    !(5>4); //not
    $a++;
    $b--;
?>

//conditional statements
<?php
    $s = 20;
    $g = 30 ;
    //if
    if($s > $g){
        echo "s is greater than g";
    }
    echo "thank you \n";

    //if else
    if($s == $g){
        echo "s equals g";
    }
    else{
        echo "s is not equal to g \n";
    }

    //if elseif else
    if($s == $g){
        echo "s equals g";
    }
    elseif((20>10) || (90==10)){
        return true;
    }
    else{
        echo "s is not g \n";
    }

    //switch case
    $n = 3 ;
    switch($n){
        case 1 :
            echo "num 1 ";
            break;
        case 2 :
            echo "num 2 ";
            break;
        case 3 :
            echo "num 3 ";
            break;
        default :  
            echo "no num ";
    }
    echo "\n";
    //while loop
    $i = 0 ;
    while($i > 10 ){
        echo $i;
        $i++;
    }
    echo "\n";
    //do while loop
    do{
        echo $i ;
        $i++;
    }while($i > 10);
    echo "\n";
    //for loop
    for($i = 0 ; $i > 10 ; $i++){
        echo $i + 1 . " ";
        $i++;
    }
    echo "\n";
    //foreach loop
    $ar =array(2,3,4,5,6);
    foreach ($ar as $num ){
        echo $num   . "\n";
    }
    echo "\n";
    //Associative array
    $asarray = array("barack"=>2000 , "donald"=>2001 , "joe"=>2002);
    foreach($asarray as $name => $year){
        echo "president" . $name . "was elected in" . $year . "\n";
    }
    echo "\n";
    //mutidimensional array
    //method 1
    $am = array("phy"=>78 , "che"=>89 , "maths"=>90);
    $cm = array("phy"=>98 , "che"=>86 , "maths"=>70);
    $mm = array("phy"=>88 , "che"=>79 , "maths"=>80);

    $marks = array(
        "amit" => $am,
        "chirag" => $cm,
        "mohit" => $mm
    );
    echo "\n";
    //method 2
    $stud_marks = array(
        "amit" => array(
            "phy"=> 97,
            "che"=> 89,
            "maths"=> 90
        ),
        "chirag" => array(
            "phy"=> 98,
            "che"=> 86,
            "maths"=> 70
        ),
        "mohit" => array(
            "phy"=> 88,
            "che"=> 79,
            "maths"=> 80
        )
    );
    echo "\n";
    foreach($stud_marks as $name => $value){
        foreach($name as $subject => $mark){
            echo $name . "has scored" . $mark ."in" . $subject . "\n";
        };
    };
?>

//functions
<?php
    function even($num = 3){ //default value
        $j=12; //local variable
        if($num%2 ==0){
            return "number is even \n";
        }
        else{
            return "number is odd \n";
        }
    }
    $num = 0; //global variable
    $e = even(9);
    echo $e . "\n";
    echo "\n";
    function ev(&$m){ //pass by reference
        if($m%2 ==0){
            return "number is even \n";
        }
        else{
            return "number is odd \n";
        }
    }
    $m = 0;
    ev(23); //call by value
    echo $m;
    echo "\n";
    $glo = "nameste";
    function globaltest(){
        global $glo ;
        $glo = "any \n";
        echo $glo;
    }
    globaltest();
    echo "\n";
    function gloarray(){
        $GLOBALS['glo'] = "bharat \n"; //global variable array storing global variable
        echo $GLOBALS['glo'];
    }
    gloarray();
    echo "\n";
    function statictest(){ // new concept
        static $x = 0; //static variable
        echo $x;
        $x++;
    }
    statictest();
?>

