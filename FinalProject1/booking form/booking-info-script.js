function validateBookingInfo() {
    var name = document.getElementById("name-input").value;
    var contact = document.getElementById("contact-input").value;
    var check_in_date = document.getElementById("check-in-input").value;
    var check_out_date = document.getElementById("check-out-input").value;
    var today_date = new Date();

    var start_date=check_in_date;
    var end_date=check_out_date;

    var name_error = document.getElementById("name-booking-info");
    var contact_error = document.getElementById("contact-booking-info");
    var check_in_error = document.getElementById("check-in-booking-info");
    var check_out_error = document.getElementById("check-out-booking-info");

    name_error.innerHTML = ""; // Clear previous error message
    contact_error.innerHTML = ""; // Clear previous error message
    check_in_error.innerHTML = ""; // Clear previous error message
    check_out_error.innerHTML = ""; // Clear previous error message

    if (name === "") {
        name_error.innerHTML = "Name cannot be empty";
        return false;
    } else if (!isValidMobile(contact)) {
        contact_error.innerHTML = "Please enter a valid Mobile number.";
        return false;
    }else if(checkEmpty(start_date)) 
    {
        check_in_error.innerHTML = "Check in date can't be empty.";
        return false;
    }
    else if(checkEmpty(end_date)) 
    {
        check_out_error.innerHTML = "Check out date can't be empty.";
        return false;
    }
    else if (!validateDate(today_date, new Date(check_in_date))) {
        check_in_error.innerHTML = "Check in date can't be before today's date";
        return false;
    } else if (!validateDate(new Date(check_in_date), new Date(check_out_date))) {
        check_out_error.innerHTML = "Check out date can't be before check in date";
        return false;
    } else {
        resetFields();
        window.location.href="https://rzp.io/l/47siMLg";
    }
}
function resetFields() {
    document.getElementById('name-input').value= '';
    document.getElementById('contact-input').value = '';
    document.getElementById('check-in-input').value = '';
    document.getElementById('check-out-input').value = '';
}
function isValidMobile(mobile) {
    if (mobile.length === 10) {
        return true;
    }
    return false;
}

function checkEmpty(date) {
    return date.trim() === '';
}


function validateDate(start, end) {
    if (end.getYear() < start.getYear()) {
        return false;
    }
    if (end.getMonth() < start.getMonth()) {
        return false;
    }
    if (end.getDate() < start.getDate()) {
        return false;
    }
    return true;
}
