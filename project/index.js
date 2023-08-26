const form = document.getElementById('form');
const username = document.getElementById('name');
const number = document.getElementById('number');
const email = document.getElementById('email');
const password = document.getElementById('password');

function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'field error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'field success';
}

form.addEventListener('submit', function (e) {
    e.preventDefault();
    console.log('Form submitted'); // Add this line

    if (username.value === '') {
        showError(username, 'Name is required!');
    } else {
        showSuccess(username);
    }

    if (email.value === '') {
        showError(email, 'Email is required!');
    } else {
        showSuccess(email);
    }

    if (password.value === '') {
        showError(password, 'Password is required!');
    } else {
        showSuccess(password);
    }

    if (number.value === '') {
        showError(number, 'Number is required!');
    } else {
        showSuccess(number);
    }

    console.log('Validation complete'); // Add this line

    if (form.querySelectorAll('.field.success').length === 4) {
        console.log('Submitting form'); // Add this line
        form.submit();
    }
});


// Validation for login form
const loginForm = document.getElementById('login');
const loginEmail = document.getElementById('useremail');
const loginPassword = document.getElementById('userpass');

loginForm.addEventListener('submit', function (e) {
    e.preventDefault();
    console.log('Form submitted'); // Add this line
    function showError(input, message) {
        const formControl = input.parentElement;
        formControl.className = 'field error';
        const small = formControl.querySelector('small');
        small.innerText = message;
    }

    function showSuccess(input) {
        const formControl = input.parentElement;
        formControl.className = 'field success';
    }
    if (loginEmail.value === '') {
        showError(loginEmail, 'Email is required!');
    } else {
        showSuccess(loginEmail);
    }

    if (loginPassword.value === '') {
        showError(loginPassword, 'Password is required!');
    } else {
        showSuccess(loginPassword);
    }

    console.log('Validation complete'); // Add this line

    if (loginForm.querySelectorAll('.field.success').length === 2) {
        console.log('Submitting form'); // Add this line
        loginForm.submit();
    }
});