const form = document.getElementById('form');
const name = document.getElementById('name');
const number = document.getElementById('number');
const email = document.getElementById('email');
const comment = document.getElementById('comment');

function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'field error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'field success';
    const small = formControl.querySelector('small');
    small.innerText = '';
}


form.addEventListener('submit', function (e) {
    e.preventDefault();
    console.log('Form submitted'); // Add this line

    if (name.value === '') {
        showError(name, 'Name is required!');
    } else {
        showSuccess(name);
    }

    if (email.value === '') {
        showError(email, 'Email is required!');
    } else {
        showSuccess(email);
    }

    if (number.value === '') {
        showError(number, 'Number is required!');
    } else {
        showSuccess(number);
    }

    if (comment.value === '') {
        showError(comment, 'Write at least one sentence!');
    } else {
        showSuccess(comment);
    }

    console.log('Validation complete'); // Add this line

    if (form.querySelectorAll('.field.success').length === 4) {
        console.log('Submitting form'); // Add this line
        form.submit();
    }
});