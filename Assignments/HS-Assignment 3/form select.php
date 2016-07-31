
<?php



if(isset($_POST['formSubmit']) )
{
  $varName= $_POST['formDisplay'];
  $errorMessage = "";
 
}

if(!isset($_POST['submit']) ) 
{
  $errorMessage .= "You forgot to select place from the drop-box!";
}
 
 
?>