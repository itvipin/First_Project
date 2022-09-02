function submitForm() {
	
	var formInputs = document.getElementsByClassName('form-control');
	var spanErrors = document.getElementsByName('Error');
	//console.log(spanErrors);
	  
	for(var i = 0; i < formInputs.length; i++) {
		
	  if (formInputs[i].value === '')
	  {
		  spanErrors[i].style.display = 'block';
		  return false;
	  }
	} 
	  return true;
	}
	
function removeValidationError(inputId) {
	
		var errorStatement = document.getElementById(inputId);
		errorStatement.style.display = 'none';
	}
	
	