document.getElementById("guestbook-form").onsubmit = validate;

function validate() {

    console.log("rand");
    var isValid = true;

    // Clear all error messages
    var errors = document.getElementsByClassName("err");
    for (var i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }

    // Check first name
    var first = document.getElementById("firstName").value;
    if (first == "") {
        var errFirst = document.getElementById("err-fname");
        errFirst.style.display = "initial";
        isValid = false;
        console.log("rand1");
    }

    // Check last name
    var last = document.getElementById("lastName").value;
    if (last == "") {
        var errLast = document.getElementById("err-lname");
        errLast.style.display = "initial";
        isValid = false;
        console.log("rand2");
    }

    // Check size
    var meet = document.getElementById("meet").value;
    if (meet == "none") {
        var errMeet = document.getElementById("err-meet");
        errMeet.style.display = "initial";
        isValid = false;
        console.log("rand3");
    }

    // Validate pickup or delivery
    var method = document.getElementsByName("method");
    var methodValue = "";
    for (i = 0; i < method.length; i++) {
        if (method[i].checked) {
            methodValue = method[i].value;
            console.log("rand4");
        }
    }

    return isValid;
}