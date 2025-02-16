alert("test");

const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const confirmedPasswordInput = form.querySelector('input[name="confirmedPassword"]');
const phoneInput = form.querySelector('input[name="phone"]');


function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword) {
    return password === confirmedPassword;
}

function isPhoneNumberValid(phoneNumber) {
    return /^\d{9}$/.test(phoneNumber);
}


function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateEmail() {
    setTimeout(function () {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}

function validatePassword() {
    setTimeout(function () {
            const condition = arePasswordsSame(
                confirmedPasswordInput.previousElementSibling.value,
                confirmedPasswordInput.value
            );
            markValidation(confirmedPasswordInput, condition);
        },
        1000
    );
}

function validatePhoneNumber() {
    const phoneInput = form.querySelector('input[name="phone"]');
    setTimeout(function () {
        markValidation(phoneInput, isPhoneNumberValid(phoneInput.value));
    }, 1000);
}


emailInput.addEventListener('keyup', validateEmail);
confirmedPasswordInput.addEventListener('keyup', validatePassword);
if (phoneInput) phoneInput.addEventListener('keyup', validatePhoneNumber);