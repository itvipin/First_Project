<?php
$fname = "Ashwani";
$lname = "goyal";
$age = 16;
$address = ["City" => "Jalandhar", "state" => "Punjab", "Country" => "India", ];
$gender = 1;

echo "Name : $fname" . " $lname <br>";

$ageString = "Adult";
if ($age < 18)
{
    $ageString = "Minor";
}
echo "Age Grade : $ageString ($age) <br>";
/*
echo "City : " .$address['City']."<br>";
echo "State : " .$address['state']."<br>";
echo "Country : " .$address['Country']."<br>";
*/
foreach ($address as $label => $val)
{
    echo "$label=$val<br>";
}
//gender determinimg condition
/*
if($gender == 1) { 
	echo "Gender : Male";
} elseif($gender == 0){
	echo "Gender : Female";
} else {
	echo "Gender : Not Determind";
}
*/

switch ($gender)
{
    case 1:
        echo "Gender: Male";
    break;
    case 0:
        echo "Gender: Female";
    break;
    default:
        echo "Gender : Not Determind";
    break;
}

