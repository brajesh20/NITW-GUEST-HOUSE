var error = document.getElementById("error-login");
var mail_error = document.getElementById("mail-error-login");
var password_error = document.getElementById("password-error-login");


function resetFormFields() {
    document.getElementById("name-sign-up").value = "";
    document.getElementById("email-sign-up").value = "";
    document.getElementById("mobile-sign-up").value = "";
    document.getElementById("password-sign-up").value = "";
    document.getElementById("reenter-password-sign-up").value = "";
    document.getElementById("mail-sign-up-login").value = "";
    document.getElementById("password-sign-up-login").value = "";
    document.getElementById("error").innerHTML = "";
    document.getElementById("name-error").innerHTML = "";
    document.getElementById("mail-error").innerHTML = "";
    document.getElementById("mobile-error").innerHTML = "";
    document.getElementById("password-error").innerHTML = "";
    document.getElementById("confirm-password-error").innerHTML = "";
    document.getElementById("mail-error-login").innerHTML = "";
    document.getElementById("password-error-login").innerHTML = "";
    
}

function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password-sign-up-login");
    var eyeIcon = document.getElementById("eye-icon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.src = "eye-off.png";
    } else {
        passwordInput.type = "password";
        eyeIcon.src = "eye.png";
    }
}

let users = [
    { emailid: 'rajdeep@gmail.com', passwords: 'Rajdeep@12' },
    { emailid: 'brajesh@gmail.com', passwords: 'Brajesh@12' },
    { emailid: 'riddhi@gmail.com', passwords: 'Riddhi@12' },
    { emailid: 'saurabh@gmail.com', passwords: 'Saurabh@12' }
];

function validateFormLogin(event) {
    event.preventDefault();
    var email = document.getElementById("mail-sign-up-login").value;
    var password = document.getElementById("password-sign-up-login").value;

    

    

    if (!isValidEmail(email)) {
        mail_error.innerHTML = "Please enter a valid Email address.";
        error.innerHTML = "*Invalid Credentials. Please check them again.<br>";
        return false;
    } else if (!isValidPassword(password)) {
        password_error.innerHTML = "Incorrect format of password.";
        error.innerHTML = "*Invalid Credentials. Please check them again.<br>";
        return false;
    } else if (!validateUserPresent(users, email, password)) {
        error.innerHTML = "No user with such username and password exists.";
        return false;
    } else {
        window.location.href = "../final.html";
    }

}
function isValidPassword(password) {
    var hasLowerCase = /[a-z]/.test(password);
    var hasUpperCase = /[A-Z]/.test(password);
    var hasDigit = /\d/.test(password);
    var hasSpecialChar = /[@$^]/.test(password);
    var isLengthValid = password.length >= 8;

    return hasLowerCase && hasUpperCase && hasDigit && hasSpecialChar && isLengthValid;
}

function validateForm(event) {
    var flag = true;
    event.preventDefault();
    var name = document.getElementById("name-sign-up").value;
    var email = document.getElementById("email-sign-up").value;
    var mobile = document.getElementById("mobile-sign-up").value;
    var password = document.getElementById("password-sign-up").value;
    var confirmPassword = document.getElementById("reenter-password-sign-up").value;
    var error = document.getElementById("error");
    var name_error = document.getElementById("name-error");
    var mail_error = document.getElementById("mail-error");
    var mobile_error = document.getElementById("mobile-error");
    var password_error = document.getElementById("password-error");
    var confirm_password_error = document.getElementById("confirm-password-error");

    if (name === "") {
        name_error.innerHTML = "Name cannot be empty.";
        error.innerHTML = "*Invalid Credentials. Please check them again.<br>";
        flag = false;
    } else if (!isValidEmail(email)) {
        mail_error.innerHTML = "Please enter a valid Email address.";
        error.innerHTML = "*Invalid Credentials. Please check them again.<br>";
        name_error.innerHTML="";
        flag = false;
    } else if (!isValidMobile(mobile)) {
        mail_error.innerHTML = "";
        mobile_error.innerHTML = "Please enter a valid Mobile number.";
        error.innerHTML = "*Invalid Credentials. Please check them again.<br>";
        flag =  false;
    } else if (!isValidPassword(password)) {
        mobile_error.innerHTML="";
        if(password!==""){
            password_error.innerHTML = "Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one digit, and special characters.";
        }
        error.innerHTML = "*Invalid Credentials. Please check them again.<br>";
        flag =  false;
    } else if (password !== confirmPassword) {
        confirm_password_error.innerHTML = "Passwords do not match.";
        error.innerHTML = "*Invalid Credentials. Please check them again.<br>";
        password_error.innerHTML="";
        flag = false;
    } else {
        confirm_password_error.innerHTML="";
        error.innerHTML="";
        let newUser = { emailid: email, passwords: password };
        users.push(newUser);
        flag = true;
    }
    return flag;
    // if (flag) {
    //     var pswrd = document.getElementById('pswrd');
    //     pswrd.style.visibility = 'hidden';
    
    //     // Create an input text field for OTP
    //     var otpInput = document.createElement('input');
    //     otpInput.type = 'text';
    //     otpInput.placeholder = 'Enter OTP';
    //     otpInput.id = 'otp-input';
    
    //     // Append the input field to the form
    //     var parent = document.getElementById('pswrd');
    //     var child = document.querySelector('.password-container');
    //     parent.removeChild(child);
    //     var signUpForm = document.querySelector('#jadu');
    //     signUpForm.appendChild(otpInput);

    //     return true;
    // }
}


function validateUserPresent(users, email, password) {
    for (let i = 0; i < users.length; i++) {
        if (users[i].emailid === email && users[i].passwords === password) {
            return true;
        }
    }
    return false;
}


function isValidEmail(email) {
    var containsAtSymbol = email.indexOf('@') !== -1;
    if (!containsAtSymbol) {
        return false;
    }
    var parts = email.split('@');
    var username = parts[0];
    var domain = parts[1];
    var isUsernameValid = username.length > 0;
    var isDomainValid = domain.length > 0;
    if (!isUsernameValid || !isDomainValid) {
        return false;
    }
    var domainParts = domain.split('.');
    var isDotPresent = domainParts.length > 1;
    return isDotPresent;
}

function isValidMobile(mobile) {
    if (mobile.length === 10) {
        return true;
    }
    return false;
}




const signUpForm = document.querySelector('.sign-up form');
signUpForm.addEventListener('submit', validateForm);

const loginForm = document.querySelector('.sign-in form');
loginForm.addEventListener('submit', validateFormLogin);

const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
    error.innerHTML="";
    mail_error.innerHTML="";
    password_error.innerHTML="";
    resetFormFields();
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
    error.innerHTML="";
    mail_error.innerHTML="";
    password_error.innerHTML="";
    resetFormFields();
});


const togglePasswordSignup = document.getElementById('toggle-password-signup');
const togglePasswordLogin = document.getElementById('toggle-password-login');
const passwordInputSignup = document.getElementById('password-sign-up');
const passwordInputLogin = document.getElementById('password-sign-up-login');
const eyeIconSignup = document.querySelector('.sign-up .eye-icon');
const eyeIconLogin = document.querySelector('.sign-in .eye-icon');

togglePasswordSignup.addEventListener('click', function() {
    const type = passwordInputSignup.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInputSignup.setAttribute('type', type);
    eyeIconSignup.classList.toggle('fa-eye-slash');
});

togglePasswordLogin.addEventListener('click', function() {
    const type = passwordInputLogin.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInputLogin.setAttribute('type', type);
    eyeIconLogin.classList.toggle('fa-eye-slash');
});