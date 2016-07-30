<html>

<body>

<?php 
/* Uses a loop to output a range of numbers in word format (ie 'ten' instead of '10') */

 
$Word  = array('zero','one','two','three','four','five','six','seven','eight','nine','ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen','twenty');

    $number = 1;
    
  while ($number <= 20) {
            $NumberToWord = $Word[$number];
            
        echo "<strong>",$number,"</strong> in word format is <strong>", $NumberToWord,"</strong>.<br>";
            $number++;
            
    }

echo "<br>";

// 2) Uses a different loop to go through an associative array showing the indices/values

$Words  = array('one','two','three','four','five','six','seven','eight','nine','ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen','twenty');

    foreach ($Words as $key => $val) {
        echo("<strong>" . ($key + 1) . "</strong> in word format is <strong>{$val}</strong>.<br />");
    }
    


/* EXTRA CREDIT - Additionally use nested loops to output several rows of numbers with a
	variable number of rows and columns set inside the script. Ex:
		1 2 3 4
		5 6 7 8   */

 echo "<br>";

for( $i=1; $i<2; $i++)
{

 for( $j=1; $j<21; $j++){

      echo " ", $j;

         { 

         if ($j %4 == 0){
            echo "<br>";
            }  
        }
    }
}
   
?>


</body>

</html>