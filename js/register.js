form = document.getElementById('form');
 firstname = document.getElementById('firstname');
 lastname = document.getElementById('lastname');
 username = document.getElementById('username');
 email = document.getElementById('email');
 password = document.getElementById('password');
 password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
    // trim to remove the whitespaces
     firstnameValue = firstname.value.trim();
     lastnameValue = lastname.value.trim();
	 usernameValue = username.value.trim();
	 emailValue = email.value.trim();
	 passwordValue = password.value.trim();
	 password2Value = password2.value.trim();
    
     
     if(firstnameValue === '') {
		setErrorFor(firstname, 'First name cannot be blank');
	} else {
		setSuccessFor(firstname);
    }
    if(lastnameValue === '') {
		setErrorFor(lastname, 'Last name cannot be blank');
	} else {
		setSuccessFor(lastname);
    }
    

	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
		// location.replace("index.html");
	}
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
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

