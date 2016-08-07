<html>

<head>

</head>

<body>

<form method="post">
  Enter first integer:
  <input type="number" name="first" value="1st">

 <select>
  <option value="add">+</option>
  <option value="subtract">&minus;</option>
  <option value="multiply">&lowast;</option>
  <option value="division">/</option>
</select>

 

  Enter second integer:
  <input type="number" name="second" value="2nd">

  <br><br>
  <input type="submit" value="Submit">
  
</form>

<div>

</div>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

}
?>

<p>If you click the "Submit" button, the form-data will be sent to a page called "action_page.php".</p>


