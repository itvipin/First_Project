var checkedMap = [];
function submitForm() {
	  var firstNameInput = document.getElementById("firstname");
	  var lastNameInput = document.getElementById("lastname");
	  var addressInput = document.getElementById("address");
	  var emailInput = document.getElementById("email");
	  var genderInput = document.getElementsByName("gender");
	  var cityInput = document.getElementById("city");
	  var dobInput = document.getElementById("dob");
	  var contactInput = document.getElementById("contact");
	  var photoInput = document.getElementById("photo");
	  var formInputs = document.getElementsByClassName('form-control');
	  var spanErrors = document.getElementsByName('Error');
	  
	  //console.log(formInputs);
	  
	  for(var i = 0; i < formInputs.length; i++){
		  if (formInputs[i].value === '')
		  {
			  spanErrors[0].style.display = 'block';
			  return false;
		  }
		}
	  
	  if (firstNameInput.value === '') {
		var firstNameError = document.getElementById('firstNameError');
		firstNameError.style.display = 'block';
		return false;
	  }
	  
	  if (lastNameInput.value === '') {
		var lastNameError = document.getElementById('lastNameError');
		lastNameError.style.display = 'block';
		return false;
	  }
	  if (addressInput.value === '') {
		var addressError = document.getElementById('addressError');
		addressError.style.display = 'block';
		return false;
	  }
		
	  for(var i = 0; i < genderInput.length; i++) {
		 
	    if(genderInput[i].checked){
			checkedMap.push(1);
		} else {
			checkedMap.push(0);
		}
	  }
	  
	  if (!checkedMap.includes(1)) {
		var genderError = document.getElementById('genderError');
		genderError.style.display = 'block';
		return false;
	  }
	  
	  if (cityInput.value === '') {
		var cityError = document.getElementById('cityError');
		cityError.style.display = 'block';
		return false;
	  }
	  
	  if (emailInput.value === '') {
		var emailError = document.getElementById('emailError');
		emailError.style.display = 'block';
		return false;
	  }
	  
	  if (dobInput.value === '') {
		var dobError = document.getElementById('dobError');
		dobError.style.display = 'block';
		return false;
	  }
	     
	  if (contactInput.value === '') {
		var contactError = document.getElementById('contactError');
		contactError.style.display = 'block';
		return false;
	  }
	  
	  if (photoInput.value === '') {
		var photoError = document.getElementById('photoError');
		photoError.style.display = 'block';
		return false;
	  }
	  
	  return true;
	}
	
	function removeValidationError(inputId) {
		var errorStatement = document.getElementById(inputId);
		errorStatement.style.display = 'none';
	}
	
	