<?php
    $a = array("physics" => 99 , "Maths" => 100 , "Chemistry" => 100);
    $b = array("physics" => 92 , "Maths" => 90 , "Chemistry" => 75);
    $c = array("physics" => 84 , "Maths" => 100 , "Chemistry" => 87);

    $students = array("Atharva" => $a , "amit" => $b , "suresh"=>$c) ;

    foreach ($students as $student => $subjects) {
        foreach ($subjects as $subject => $marks) {
            echo $student ." has scored ".$marks. " in ".$subject. "\n" ;
        }
    }

// Or it can write as in Preffered way
//$students = array(
//   "Atharva" => array("physics" => 99 , "Maths" => 100 , "Chemistry" => 100),
//    "amit" => array("physics" => 92 , "Maths" => 90 , "Chemistry" => 75) ,
//    "suresh"=> array("physics" => 84 , "Maths" => 100 , "Chemistry" => 87)
//    ) ;
?>

