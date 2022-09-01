const form = document.getElementById('form');
const username = document.getElementById('username');
// const email = document.getElementById('email');
const password = document.getElementById('password');
var typ = document.getElementById('type')
// const unameav = document.getElementById('uname_response');

// var usernameErr = passwordErr = true;
var isValid;

form.addEventListener("submit", function (e) {
	checkInputs();
	if (!isValid) {
		e.preventDefault();
	}
	// return true;

});

// window.onload = function () {
// 	form.onsubmit = function onSubmit(form){
// 		var isValid = true;
// 		checkInputs();

// 		if(!isValid){
// 			return false;
// 		}else{
// 			return true;
// 		}
// 	}
// }
// function modechange(){
// 	var typeValue = typ.value;


// 	if (typeValue === '') {
// 		// setErrorFor(typ, 'Please select a login Type');
// 		// usernameErr = false;
// 	}else if (typeValue === '1') {
// 		// setSuccessFor(typ);
// 		modechanger1();
// 	}else {
// 		// setSuccessFor(typ);
// 		modechanger2();
// 	}
// }

function checkInputs() {

	// trim to remove the whitespaces

	const usernameValue = username.value.trim();
	// const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	// var typeValue = typ.value;
	// const unameavValue = unameav.value.trim();

	// alert(unameavValue);

	// if (typeValue === '') {
	// 	setErrorFor(typ, 'Please select a login Type');
	// 	isValid = false;
	// 	// usernameErr = false;

	// } else if (typeValue === '1') {
	// 	setSuccessFor(typ);
	// 	modechanger1();
	// 	isValid = true;
	// }else {
	// 	setSuccessFor(typ);
	// 	modechanger2();
	// 	isValid = true;
	// }

	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
		isValid = false;
		// usernameErr = false;

	} 
	else {
		setSuccessFor(username);
		isValid = true;
	}

	// if(emailValue === '') {
	// 	setErrorFor(email, 'Email cannot be blank');
	// } else if (!isEmail(emailValue)) {
	// 	setErrorFor(email, 'Not a valid email');
	// } else {
	// 	setSuccessFor(email);
	// }

	if (passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
		isValid = false;
		// passwordErr = false;
	} else {
		setSuccessFor(password);
		if(isValid === true){
			isValid = true;
		}
	}

	// if ((usernameErr || passwordErr) == true) {
	// 	return false;
	// }

	// else {
	// 	return true;
	// }
}


// function modechanger1() {
// 	const pri = document.getElementById('Mem')
// 	pri.innerText = ' (TRAINER)';
// 	document.getElementById('form').action = './trainer/login.php';
// }

// function modechanger2() {
// 	const pri = document.getElementById('Mem')
// 	pri.innerText = ' (MEMBER)';
// 	document.getElementById('form').action = './member/login.php';
// }

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form__div error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form__div success';
}