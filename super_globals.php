<!DOCTYPE html>
<html>
<body>

<form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  <label for="fname">FName:<label/>
  <input type="text" name="fname" ><br><br>
  <label for="lname">LName:<label/>
  <input type="text" name="lname" ><br><br>
  <input type="submit">
  
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $fname= $_POST['fname'];
	$lname= $_POST['lname'];
	    echo "</br>";
		echo "</br>";
		If(empty($fname))
		{
			echo "First name in empty";
		}		else{	
	
        echo "First Name is ".$fname."</br>";
		}
		If(empty($lname))
		{
			echo"last name in empty";
		}else
		{
		echo "</br>Last Name is ".$lname; 	
		}		
}
?>
</body>
</html>