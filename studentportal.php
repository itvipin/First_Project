<?php
// echo "<pre>"; print_r($_POST); exit;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST['username'];
    echo "$name</br>";
	$password = $_POST['password'];
	echo "$password</br>";
	$gender = $_POST['gender'];
	echo "$gender</br>";
	$language = $_POST['language'];
	echo "<pre>";
	print_r($language);
	$photo = $_POST['photo'];
	echo "$photo</br>";
	
}
?>