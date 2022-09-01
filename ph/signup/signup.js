// src="https://www.payhere.lk/lib/payhere.js"



// const trainer = document.getElementById('trainer');





// form.addEventListener("submit", function (e) {
// 	checkInputs();
// 	if (!isValid) {
// 		e.preventDefault();
// 	}
// 	else if(isValid){
// 		payhere.startPayment(payment);
// 	}



// });


function checkInputs() {
	var isValid = false;
	var fnameValid = false;
	var lnameValid = false;
	var mobileValid = false;
	var addressValid = false;
	var emailValid = false;
	var usernameValid = false;
	var pwd1Valid = false;
	var pwd2Valid = false;
	var checkBoxValid = false;


	const form = document.getElementById('form');
	const fname = document.getElementById('fname');
	const lname = document.getElementById('lname');
	// const gender = document.getElementById('gender');
	const mnumber = document.getElementById('mnumber');
	// const dob = document.getElementById('dob');
	const address = document.getElementById('address');
	// const inj = document.getElementById('inj');
	const email = document.getElementById('email');
	const username = document.getElementById('username');
	const password1 = document.getElementById('password1');
	const password2 = document.getElementById('password2');
	const checkbox1 = document.getElementById('mycheck');
	const unameresponse = document.getElementById('uname_response');


	// trim to remove the whitespaces

	const fnameValue = fname.value.trim();
	const lnameValue = lname.value.trim();
	// const genderValue = gender.value.trim();
	const mnumberValue = mnumber.value.trim();
	// const dobValue = dob.value.trim();
	const addressValue = address.value.trim();
	const injValue = inj.value.trim();
	const emailValue = email.value.trim();
	const usernameValue = username.value.trim();
	const password1Value = password1.value.trim();
	const password2Value = password2.value.trim();
	// const trainerValue = trainer.value.trim();


	if (fnameValue === '') {
		setErrorFor(fname, 'First name cannot be blank');
		fnameValid = false;
	}
	else if (isnotvalid(fnameValue)) {
		setErrorFor(fname, 'Invalid Input');
		fnameValid = false;
	}
	else {
		setSuccessFor(fname);
		fnameValid = true;
	}

	if (lnameValue === '') {
		setErrorFor(lname, 'Last name cannot be blank');
		lnameValid = false;
	} else if (isnotvalid(lnameValue)) {
		setErrorFor(lname, 'Invalid Input');
		lnameValid = false;
	} else {
		setSuccessFor(lname);

		lnameValid = true;


	}

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }

	if (mnumberValue === '') {
		setErrorFor(mnumber, 'Mobile No. cannot be blank');
		mobileValid = false;
	} else if (isnotvalidnum(mnumberValue)) {
		setErrorFor(mnumber, 'Invalid Input');
		mobileValid = false;
	}
	else if (!isValidlen(mnumberValue)) {
		setErrorFor(mnumber, 'Phone no. length is Invalid');
		mobileValid = false;
	} else {
		setSuccessFor(mnumber);

		mobileValid = true;


	}

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }

	if (addressValue === '') {
		setErrorFor(address, 'Address cannot be blank');
		addressValid = false;
	} else {
		setSuccessFor(address);
		addressValid = true;

		addressValid = true;

	}

	// if (injValue === '') {
	// 	setErrorFor(inj, 'Injuries Field cannot be blank,Apply NO if there is no injuries');
	// 	isValid = false;
	// } else {
	// 	setSuccessFor(inj);
	// 	isValid = true;
	// }

	if (emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
		emailValid = false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
		emailValid = false;
	} else {
		setSuccessFor(email);
		emailValid = true;

		emailValid = true;

	}

	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
		usernameValid = false;
	} else if (!isusername(usernameValue)) {
		setErrorFor(username, 'User Name is Too Short');
		usernameValid = false;
	} else if (unameresponse.innerText == 'Not Available') {
		setErrorFor(username, '');
		usernameValid = false;
	} else {
		setSuccessFor(username);
		usernameValid = true;
	}

	if (password1Value === '') {
		setErrorFor(password1, 'Password cannot be blank');
		pwd1Valid = false;
	} else if (!pwlength(password1Value)) {
		setErrorFor(password1, 'Too short! Need at least 8');
		pwd1Valid = false;
	} else if (!pwlength4(password1Value)) {
		setErrorFor(password1, 'Uppercase Letters must be included');
		pwd1Valid = false;
	} else if (!pwlength3(password1Value)) {
		setErrorFor(password1, 'Lowercase Letters must be included');
		pwd1Valid = false;
	} else if (!pwlength2(password1Value)) {
		setErrorFor(password1, 'Numbers must be included');
		pwd1Valid = false;
	} else if (!pwlength1(password1Value)) {
		setErrorFor(password1, 'Symbols must be included');
		pwd1Valid = false;
	} else {
		setSuccessFor(password1);
		pwd1Valid = true;

	}

	if (password2Value === '') {
		setErrorFor(password2, 'Confirm Password cannot be blank');
		pwd2Valid = false;
		// } else if (!pwlength(password2Value)) {
		// 	setErrorFor(password2, 'Selected Password is not Strong enough');
		// 	pwd2Valid = false;
	} else if (password2Value !== password1Value) {
		setErrorFor(password2, 'Re-Entered Password is wrong');
		pwd2Valid = false;
	} else {
		setSuccessFor(password2);

		pwd2Valid = true;

	}



	checkbox1.setAttribute("required", "");

	if (checkbox1.checked != true) {
		checkBoxValid = false;
	} else {

		checkBoxValid = true;


	}

	console.log(lnameValid);

	return (fnameValid && lnameValid && mobileValid && addressValid && emailValid && usernameValid && pwd1Valid && pwd2Valid && checkBoxValid);

}


function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	if (input === inj) {
		formControl.className = 'inj__div error';
		small.innerText = message;
	} else {
		formControl.className = 'form__div error';
		small.innerText = message;
	}

}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	if (input === inj) {
		formControl.className = 'inj__div success';
	} else {
		formControl.className = 'form__div success';
	}
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isnotvalid(name) {
	let invalidn = new RegExp('(?=.*[0-9])|(?=.*\\W)')
	if (invalidn.test(name)) {
		return true;
	}
	return false;
}

function isnotvalidnum(mnumber) {
	let invalid = new RegExp('(?=.*[a-z])|(?=.*[A-Z])')
	if (invalid.test(mnumber)) {
		return true;
	}
	return false;
}
function isValidlen(mnumber) {
	let validnum = new RegExp("^[0-9]{10}$")
	if (validnum.test(mnumber)) {
		return true;
	}
	return false;
}

function isusername(username) {
	let invalidu = new RegExp('(?=.{6,})')
	if (invalidu.test(username)) {
		return true;
	}
	return false;
}

function isusername2(username) {
	let invalidu = new RegExp('(?=.*[\s])')
	if (invalidu.test(username)) {
		return true;
	}
	return false;
}

function pwlength(password) {
	let validp = new RegExp('(?=.{8,})')
	if (validp.test(password)) {
		return true;
	}
	return false;
}

function pwlength1(password1) {
	let validp = new RegExp('(?=.*\\W)')
	if (validp.test(password1)) {
		return true;
	}
	return false;
}

function pwlength2(password1) {
	let validp = new RegExp('(?=.*[0-9])')
	if (validp.test(password1)) {
		return true;
	}
	return false;
}

function pwlength3(password1) {
	let validp = new RegExp('(?=.*[a-z])')
	if (validp.test(password1)) {
		return true;
	}
	return false;
}

function pwlength4(password1) {
	let validp = new RegExp('(?=.*[A-Z])')
	if (validp.test(password1)) {
		return true;
	}
	return false;
}
// function isPassword(password){
// 	let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
// 	let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))')

// 	const formCon = password1.parentElement;
// 	const small = formCon.querySelector('small');

// 	if(strongPassword.test(password1)) {
// 		small.innerText = 'Strong Password';
// 		small.style.textcolor ='green';
// 		small.style.display = 'visible';

//     } else if(mediumPassword.test(password1)) {
// 		small.innerText = 'Medium Password';
// 		small.style.textcolor ='blue';
// 		small.style.display = 'visible';
//     } else {
// 		small.innerText = 'Weak Password';
// 		small.style.textcolor ='read';
// 		small.style.display = 'visible';
//     }
// }

function passwordChanged() {

	const formControl = password1.parentElement;
	const small = formControl.querySelector('small');

	var pwd = document.getElementById("password1");

	var verystrongRegex = new RegExp("^(?=.{14,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
	var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
	var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
	var enoughRegex = new RegExp("(?=.{8,}).*", "g");


	if (pwd.value.length == 0) {
		small.innerHTML = 'Type Password';
	} else if (false == enoughRegex.test(pwd.value)) {
		small.innerHTML = 'More Characters';
	} else if (verystrongRegex.test(pwd.value)) {
		small.innerHTML = '<span style="color:#03a5fc">Very Strong!</span>';
		setSuccessFor(password1);
	}
	else if (strongRegex.test(pwd.value)) {
		small.innerHTML = '<span style="color:#2ecc70">Strong!</span>';
		setSuccessFor(password1);
	} else if (mediumRegex.test(pwd.value)) {
		small.innerHTML = '<span style="color:orange">Medium!</span>';
	} else {
		formControl.className = 'form__div error';
		small.innerHTML = '<span style="color:red">Weak!';
	}
}




function passwordChanged2() {

	const password1 = document.getElementById('password1');
	const password2 = document.getElementById('password2');

	const password1Value = password1.value.trim();
	const password2Value = password2.value.trim();

	if (password2Value !== password1Value) {
		setErrorFor(password2, 'Re-Entered Password is wrong');
		pwd2Valid = false;
	} else {
		setSuccessFor(password2);

		pwd2Valid = true;

	}

}


