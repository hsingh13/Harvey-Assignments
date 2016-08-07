<?php

function add($first,$second){

    $result=$first+$second;
    return $result;
}

function subtract($first,$second){
  
    $result=$first-$second;
    return $result;  
}

function multiply($first,$second){
    
    $result=$first*$second;
    return $result;
}

function divide($first,$second){
   
   $result=$first/$second;
    return $result; 
}


If (isset($_POST['submit'])) {

$first= $_POST['first'];  // Storing first textbox value in variable
$second= $_POST['second'];   // Storing second textbox value in variable
$operator= $_POST['Operators']; // Storing operator value in variable

    If ((!($first or $second)=="") && (!($operator=='Please Select Operator'))) {
        
        If ($operator=="+") {   
            echo "<strong>".$first." ".$operator." ".$second." = ".add($first,$second)."</strong>";
        }
        If ($operator=="-") {
            echo "<strong>".$first." ".$operator." ".$second." = ".subtract($first,$second)."</strong>";
        }
        If ($operator=="*") {
            echo "<strong>".$first." ".$operator." ".$second." = ".multiply($first,$second)."</strong>";
        }
        If ($operator=="/") {
            echo "<strong>".$first." ".$operator." ".$second." = ".divide($first,$second)."</strong>";
        }
    }

    else { 
        echo "Please populate all of the fields with correct values!!";
    }
}



?>