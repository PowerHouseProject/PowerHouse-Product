
const form = document.getElementById('form');
const form2 = document.getElementById('acc_form');
const form3 = document.getElementById('pw_form');

form.addEventListener('submit', e => {
	e.preventDefault();
    
	var result = checkInputs();
   
    if( result === true){
        document.getElementById("form").submit();
    }
});

function checkInputs() {

	var fnameValid = false;
	var lnameValid = false;
	var mobileValid = false;
	var addressValid = false;

	const fname = document.getElementById('fname');
	const lname = document.getElementById('lname');
	const mnumber = document.getElementById('mnumber');
	const address = document.getElementById('address');
	
    const fnameValue = fname.value.trim();
	const lnameValue = lname.value.trim();
	const mnumberValue = mnumber.value.trim();
	const addressValue = address.value.trim();

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

	if (addressValue === '') {
		setErrorFor(address, 'Address cannot be blank');
		addressValid = false;
	} else {
		setSuccessFor(address);
		addressValid = true;
	}
	return (fnameValid && lnameValid && mobileValid && addressValid );
}

form2.addEventListener('submit', e => {
	e.preventDefault();
    
	var result2 = checkInputs2();
   
    if( result2 === true){
        document.getElementById("acc_form").submit();
    }
});

function checkInputs2() {
	
    var emailValid = false;
	const email = document.getElementById('email');

	const emailValue = email.value.trim();

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
	return (emailValid);
}

form3.addEventListener('submit', e => {
	e.preventDefault();
    
	var result3 = checkInputs3();
   
    if( result3 === true){
        document.getElementById("pw_form").submit();
    }
});

function checkInputs3() {

	var pwdValid = false;
    var pwd1Valid = false;
	var pwd2Valid = false;

    const password = document.getElementById('password');
	const password1 = document.getElementById('password1');
	const password2 = document.getElementById('password2');

    const passwordValue = password.value.trim();
	const password1Value = password1.value.trim();
	const password2Value = password2.value.trim();

    if (passwordValue === '') {
		setErrorFor(password, 'Current Password Must be Included');
		pwd1Valid = false;
	}else{
        pwdValid = true;
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
	} else if (password2Value !== password1Value) {
		setErrorFor(password2, 'Re-Entered Password is wrong');
		pwd2Valid = false;
	} else {
		setSuccessFor(password2);
		pwd2Valid = true;
	}

	return (pwdValid && pwd1Valid && pwd2Valid );
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


