form = document.getElementById('form');
 username = document.getElementById('username');
 password = document.getElementById('password');

 form.addEventListener('submit', e => {
	if(!checkInputs()){
		e.preventDefault();
	}
	
});

function checkInputs() {
	// trim to remove the whitespaces
	 usernameValue = username.value.trim();
   passwordValue = password.value.trim();
   
	 isSucessful = true; 


	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(username);
	}

	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(password);
	}

	return isSucessful;
	
}
function setErrorFor(input, message) {
    formControl = input.parentElement;
    small = formControl.querySelector('small');
   formControl.className = 'form-control error';
   small.innerText = message;
}

function setSuccessFor(input) {
    formControl = input.parentElement;
   formControl.className = 'form-control success';
}