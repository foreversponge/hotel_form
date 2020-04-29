var error = document.getElementById("inputMiss");
var submitOkay = false;
function validateUsername() {
    var username = document.getElementById("username").value;
    var patt = /[^\w]|[\s]/
    var patt2 = /\s/;
    if (patt.test(username)) {
        return false;

    } else {
        if (patt2.test(username)) {
            return false;
        }
        return true;
    }

}

function validatePassword() {
    var password = document.getElementById("pass").value;
    var patt = /[^\w]|[\s]/;
    var patt2 = /[\w]{6,}/;
    var patt3 = /[\d]+/;
    var patt4 = /[a-zA-Z]+/;

    if (patt.test(password)) {
        return false;
    } else if (patt2.test(password) && patt3.test(password) && patt4.test(password)) {
        return true;
    } else return false;
}

function outputError() {
    if (!validateUsername() && !validatePassword()) {
        error.innerHTML = "username and password doesn't meet the requirement. Please try again";
        console.log(submitOkay);
        return false;
    } else if (!validateUsername()) {
        error.innerHTML = "username doesn't meet the requirement. Please try again";
        return false;
    } else if (!validatePassword()) {
        error.innerHTML = "password doesn't match requirement"
        return false;
    }
    submitOkay = true;
    return true;
}
