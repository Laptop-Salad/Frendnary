import './bootstrap';

var tUsername = false;
var tPassword = false;

$("#username").on("change", function () {
    if ($("#username").val() == "") {
        tUsername = false;
    } else {
        tUsername = true;
    }

    checkAllValid();
})

$("#password").on("change", function () {
    if ($("#password").val() == "") {
        tPassword = false;
    } else {
        tPassword = true;
    }

    checkAllValid();
})

function checkAllValid () {
    if (tUsername && tPassword) {
        $("#submit").prop("disabled", false);
    } else {
        $("#submit").prop("disabled", true);
    }
}

