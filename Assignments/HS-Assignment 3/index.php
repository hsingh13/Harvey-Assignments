
<?php

include 'header.php';
require 'functions.php';

//include (/HS-Assignment 3/Header);
//include (/HS-Assignment 3/Footer);
//include (/HS-Assignment 3/Functions);

echo 'Los Angeles ', $Los_Angeles->format('F j, Y, g:i a');


echo '<br> New York ', $New_York->format('F j, Y, g:i a');



include 'footer.php';
?>