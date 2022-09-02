<?php 
	include_once('./Validation.php');
	include_once('./DataCorrection.php');
	include_once('./FormSubmission.php');

	if ($_SERVER["REQUEST_METHOD"] === "POST") 	{
		
		$v = new Validation();    //object of class validation.
		$validateErrors = $v->check($_POST);
		If(!empty($validateErrors)){
			echo '<pre>';
		    print_r($validateErrors);	
		}else
		{
			$d = new DataCorrection();	
			$correctedData = $d->correct($_POST);
			$f = new FormSubmission;
			$f->submit($correctedData);
		}
	}
?>