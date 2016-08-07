
<?php include 'header.php'; ?>

 <form action="#" method="post">

 <strong>Enter first integer:</strong>
 
  <input type="number" name="first" />

<select name="Operators">
    <option value="Please Select Operator">Please Select Operator</option>
    <option value="+">+</option>
    <option value="-">-</option>
     <option value="*">*</option>
     <option value="/">/</option>
</select>

<strong>Enter second integer:</strong>

  <input type="number" name="second" />

  <input type="submit" name="submit"  value="Calculate" />
  <input type="reset" name="reset" value="Clear" />
</form>

<?php require 'functions.php';
      include 'footer.php'; ?>