<html>
<body>
<!-- Assignment 07/07/2016 
 Shows the current date and time in at least two different time zones -->


<?php 

echo "<strong>User Information </strong><br>";

echo "<strong>UserAgent: </strong><br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "<strong>Address: </strong><br>";

echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

echo "<strong>Host:</strong>";
echo $hostname= getenv('HTTP_HOST');

echo "<br>";
echo "<strong>Time Information</strong> <br>";

echo "<strong> Eastern </strong>" .date("F j, Y, g:i a");
echo "<br>";
date_default_timezone_set('America/Los_Angeles');
echo "<strong> Pacific  </strong> " .date('F j, Y, g:i a');

?>


</body>
<html>