
function validateFeedback()
{
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var valid = true;
	
	var isEmailValid =  email.search(/.+@.+[.]{1}.+/);
	
	if(isEmailValid == -1)
	{
		alert("Error: Please Input a valid e-mail address.")
		valid = false;
	}
	
	var isPhoneValid = phone.search(/^\d{3}[-\s]{0,1}\d{3}[-\s]{0,1}\d{4}/);
	
	if(isPhoneValid == -1)
	{
		alert("Error: Please input a valid phone number.")
		valid = false;
	}
	
	return valid;
}

