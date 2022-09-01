
const form = document.getElementById('form');
// const fname = document.getElementById('fname');
// const lname = document.getElementById('lname');
// const gender = document.getElementById('gender');
// const mnumber = document.getElementById('mnumber');
// const dob = document.getElementById('dob');
// const address = document.getElementById('address');
// const inj = document.getElementById('inj');
// const email = document.getElementById('email');
// const username = document.getElementById('username');
const password1 = document.getElementById('password1');
const password2 = document.getElementById('password2');
// const trainer = document.getElementById('trainer');


// password1.addEventListener('input', function() {

// 	// clearTimeout(timeout);

// 	// timeout = setTimeout(() => isPassword(password1.value), 600);

// });

var isValid;
var isValid1;
var isValid2;



function checkInputs() {

	// trim to remove the whitespaces

	// const fnameValue = fname.value.trim();
	// const lnameValue = lname.value.trim();
	// const genderValue = gender.value.trim();
	// const mnumberValue = mnumber.value.trim();
	// const dobValue = dob.value.trim();
	// const addressValue = address.value.trim();
	// const injValue = inj.value.trim();
	// const emailValue = email.value.trim();
	// const usernameValue = username.value.trim();
	const password1Value = password1.value.trim();
	const password2Value = password2.value.trim();
	// const trainerValue = trainer.value.trim();


	// if (fnameValue === '') {
	// 	setErrorFor(fname, 'First name cannot be blank');
	// }
	// else if (isnotvalid(fnameValue)) {
	// 	setErrorFor(fname, 'Invalid Input');
	// }


	// else {
	// 	setSuccessFor(fname);
	// }

	// if (lnameValue === '') {
	// 	setErrorFor(lname, 'Last name cannot be blank');
	// } else if (isnotvalid(lnameValue)) {
	// 	setErrorFor(lname, 'Invalid Input');
	// }
	// else {
	// 	setSuccessFor(lname);
	// }

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }

	// if (mnumberValue === '') {
	// 	setErrorFor(mnumber, 'Mobile No. cannot be blank');
	// } else if (isnotvalidnum(mnumberValue)) {
	// 	setErrorFor(mnumber, 'Invalid Input');
	// }
	// else if (!isValidlen(mnumberValue)) {
	// 	setErrorFor(mnumber, 'Phone no. length is Invalid');
	// }
	// else {
	// 	setSuccessFor(mnumber);
	// }

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }

	// if (addressValue === '') {
	// 	setErrorFor(address, 'Address cannot be blank');
	// } else {
	// 	setSuccessFor(address);
	// }

	// if (injValue === '') {
	// 	setErrorFor(inj, 'Injuries Field cannot be blank,Apply NO if there is no injuries');
	// } else {
	// 	setSuccessFor(inj);
	// }

	// if (emailValue === '') {
	// 	setErrorFor(email, 'Email cannot be blank');
	// } else if (!isEmail(emailValue)) {
	// 	setErrorFor(email, 'Not a valid email');
	// } else {
	// 	setSuccessFor(email);
	// }

	// if (usernameValue === '') {
	// 	setErrorFor(username, 'Username cannot be blank');
	// }
	// else if (!isusername(usernameValue)) {
	// 	setErrorFor(username, 'User Name is Too Short');
	// }
	// else {
	// 	setSuccessFor(username);
	// }

	if (password1Value === '') {
		setErrorFor(password1, 'Password cannot be blank');
		isValid = false;
		return;
	} else if (!pwlength(password1Value)) {
		setErrorFor(password1, 'Too short!Need at least 8');
		isValid = false;
		return;
	} else if (!pwlength4(password1Value)) {
		setErrorFor(password1, 'Uppercase Letters must be included');
		isValid = false;
		return;
	} else if (!pwlength3(password1Value)) {
		setErrorFor(password1, 'Lowercase Letters must be included');
		isValid = false;
		return;
	} else if (!pwlength2(password1Value)) {
		setErrorFor(password1, 'Numbers must be included');
		isValid = false;
		return;
	} else if (!pwlength1(password1Value)) {
		setErrorFor(password1, 'Symbols must be included');
		isValid = false;
		return;
	} else {
		setSuccessFor(password1);
		isValid1 = true;
	}

	if (password2Value === '') {
		setErrorFor(password2, 'Confirm Password cannot be blank');
		isValid = false;
		return;
	} else if (password2Value !== password1Value) {
		setErrorFor(password2, 'Re-Entered Password is wrong');
		isValid = false;
		return;
	} else if (!pwlength(password2Value)) {
		setErrorFor(password2, 'Selected Password is not Strong enough');
		isValid = false;
		return;
	} else {
		setSuccessFor(password2);
		isValid2 = true;
	}

	if (isValid1 === true && isValid2 === true)
	{
		isValid = true;
	}else{
		isValid =false;
	}

	// if (genderValue === ' Gender ') {
	// 	setErrorFor(gender, 'Select a gender');
	// } else {
	// 	setSuccessFor(gender);
	// }
}

// if (injValue === '') {
// 	setErrorFor(inj, 'Injuries Field cannot be blank,Apply NO if there is no injuries');
// } else {
// 	setSuccessFor(inj);
// }

// if (emailValue === '') {
// 	setErrorFor(email, 'Email cannot be blank');
// } else if (!isEmail(emailValue)) {
// 	setErrorFor(email, 'Not a valid email');
// } else {
// 	setSuccessFor(email);
// }

// if (usernameValue === '') {
// 	setErrorFor(username, 'Username cannot be blank');
// }
// else if (!isusername(usernameValue)) {
// 	setErrorFor(username, 'User Name is Too Short');
// }
// else {
// 	setSuccessFor(username);
// }

// if (password1Value === '') {
// 	setErrorFor(password1, 'Password cannot be blank');
// } else if (!pwlength(password1Value)) {
// 	setErrorFor(password1, 'Too short!Need at least 8');
// } else if (!pwlength4(password1Value)) {
// 	setErrorFor(password1, 'Uppercase Letters must be included');
// } else if (!pwlength3(password1Value)) {
// 	setErrorFor(password1, 'Lowercase Letters must be included');
// } else if (!pwlength2(password1Value)) {
// 	setErrorFor(password1, 'Numbers must be included');
// } else if (!pwlength1(password1Value)) {
// 	setErrorFor(password1, 'Symbols must be included');
// } else {
// 	setSuccessFor(password1);
// }

// if (password2Value === '') {
// 	setErrorFor(password2, 'Confirm Password cannot be blank');
// } else {
// 	setSuccessFor(password2);
// }

// if (genderValue === ' Gender ') {
// 	setErrorFor(gender, 'Select a gender');
// } else {
// 	setSuccessFor(gender);
// }

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	// if (input === inj) {
	// 	formControl.className = 'inj__div error';
	// 	small.innerText = message;

	formControl.className = 'form__div error';
	small.innerText = message;

}

function setSuccessFor(input) {
	const formControl = input.parentElement;

	formControl.className = 'form__div success';
}

// function isEmail(email) {
// 	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }

// function isnotvalid(name) {
// 	let invalidn = new RegExp('(?=.*[0-9])')
// 	if (invalidn.test(name)) {
// 		return true;
// 	}
// 	return false;
// }

// function isnotvalidnum(mnumber) {
// 	let invalid = new RegExp('(?=.*[a-z])|(?=.*[A-Z])')
// 	if (invalid.test(mnumber)) {
// 		return true;
// 	}
// 	return false;
// }
// function isValidlen(mnumber) {
// 	let validnum = new RegExp("^[0-9]{10}$")
// 	if (validnum.test(mnumber)) {
// 		return true;
// 	}
// 	return false;
// }

// function isusername(username) {
// 	let invalidu = new RegExp('(?=.{6,})')
// 	if (invalidu.test(username)) {
// 		return true;
// 	}
// 	return false;
// }

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

form.addEventListener("submit", function (e) {
	checkInputs();
	if (!isValid) {
		e.preventDefault();
	}
	// return true;

});


function myunction() {
	var x = document.getElementById("password1");
	var y = document.getElementById("password2");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	if (y.type === "password") {
		y.type = "text";
	} else {
		y.type = "password";
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
