<?php
class Validation
{

    public $errors = [];

    private $labelMap = ['firstname' => 'First Name', 'lastname' => 'Last Name', 'address' => 'Address', 'gender' => 'Gender', 'city' => 'City', 'email' => 'Email', 'dob' => 'Age', 'contact' => 'Contact Number', 'photo' => 'Photo'];

    private function validateEmpty($allValues)
    {	
        foreach ($allValues as $key => $value)
        {
			print_r($key);
            if (empty($value))
            {
                $this->errors[$key] = $this->labelMap[$key] . " is required";
            }
        };
		
		return $this->errors;
    }

    private function validateEmail($allValues)
    {
        $isEmail = preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $allValues["email"]);
        if (!$isEmail)
        {
            $this->errors['email'] = $this->labelMap['email'] . " is invalid";
        };
        return $this->errors;
    }

    private function validateDob($allValues)
    {
        $calAge = (date('Y') - date('Y', strtotime($allValues["dob"])));
        if ($calAge < 18)
        {
            $this->errors['dob'] = "Your age is $calAge and You are not Elligble";
        };
        return $this->errors;
    }

    function check($postValues)
    {
        $validationErrors = $this->validateEmpty($postValues);
        //  When Email is not empty, check for email format
        if (empty($validationErrors['email']))
        {
            $this->validateEmail($postValues);
        };
		if (empty($validationErrors['dob']))
		{
            $this->validateDob($postValues);
		};
        return $this->errors;
    }
}

?>
