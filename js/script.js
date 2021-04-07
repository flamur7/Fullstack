const form = document.getElementById('form');
 fullname = document.getElementById('fullname');
 username = document.getElementById('username');
 email = document.getElementById('email');
 password = document.getElementById('password');
 order = document.getElementById('order');

form.addEventListener('submit', e => {
	if(!checkInputs()){
		e.preventDefault();
	}
	
});

function checkInputs() {
	// trim to remove the whitespaces
	 fullnameValue = fullname.value.trim();
	 usernameValue = username.value.trim();
	 emailValue = email.value.trim();
	 passwordValue = password.value.trim();
	 orderValue = order.value.trim();
	 
	 isSucessful = true; 

	 if(fullnameValue === '') {
		setErrorFor(fullname, 'Fullname cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(fullname);
	}

	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(username);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
		isSucessful = false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(password);
	}
	if(orderValue === '') {
		setErrorFor(order, 'Order cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(order);
		
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
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}