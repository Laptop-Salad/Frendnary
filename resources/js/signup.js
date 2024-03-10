import './bootstrap';

const username = $("#username");
const password = $("#password");
const passwordConf = $("#password_confirmation");

// Paragraphs to display if criteria is met
const userAvail = $("#userAvail"); 
const userCharMin = $("#userCharMin");
const userCharMax = $("#userCharMax");

const passCapital = $("#passCapital");
const passNum = $("#passNum");
const passSpecial = $("#passSpecial");
const passCharMin = $("#passCharMin");
const passCharMax = $("#passCharMax");

const passMatch = $("#passMatch");

// End

// Keep track of met criteria
var tUserAvail = false; 
var tUserCharMin = false; 
var tUserCharMax = false;

var tPassCapital = false;
var tPassNum = false;
var tPassSpecial = false;
var tPassCharMin = false;
var tPassCharMax = false;

var tPassMatch = false;

// End

const submit = $("#submit");

function userMeetsCharMin () {
    return username.val().length >= 3;
}

function userMeetsCharMax () {
  return username.val().length <= 36;
}

async function userIsAvail () {
  if (username.val() == "") {
    return false;
  }

  try {
    const response = await axios.get('/userAvail/' + username.val());
    // handle success
    return response.data.userAvail;
  } catch (error) {
    // handle error
    return false;
  }
}

function passDoesMatch () {
    return password.val() == passwordConf.val();
}

function passHasCapital () {
    return password.val() !== password.val().toLowerCase();
}

function passHasNum () {
    return /\d/.test(password.val);
}

function passHasSpecial () {
    return !(/^[a-zA-Z0-9]+$/.test(password.val()));
}

function passMeetsCharMin () {
    return password.val().length >= 8;
}

function passMeetsCharMax () {
  return password.val().length <= 24;
}

username.on("change", async function () {
    if (await userIsAvail()) {
      userAvail.html("Username is available ✅");
      tUserAvail = true;
    } else {
      userAvail.html("Username is not available ❌");
      tUserAvail = false; 
    }

    if (userMeetsCharMin()) {
      userCharMin.html("Has 3 or more characters ✅");
      tUserCharMin = true; 
    } else {
      userCharMin.html("Does not have 3 or more characters ❌");
      tUserCharMin = false; 
    }

    if (userMeetsCharMax()) {
      userCharMax.html("Has 36 characters or less ✅");
      tUserCharMax = true; 
    } else {
      userCharMax.html("Is more than 36 characters ❌");
      tUserCharMax = false; 
    }

    checkAllValid();
})

password.on("change", function () {
  if (passHasCapital()) {
    passCapital.html("Has a capital letter ✅");
    tPassCapital = true;
  } else {
    passCapital.html("Does not have a capital letter ❌");
    tPassCapital = false;
  }

  if (passHasNum()) {
    passNum.html("Has a number ✅");
    tPassNum = true;
  } else {
    passNum.html("Does not have a number ❌");
    tPassNum = false;
  }

  if (passHasSpecial()) {
    passSpecial.html("Has a special character ✅");
    tPassSpecial = true;
  } else {
    passSpecial.html("Does not have a special character ❌");
    tPassSpecial = false;
  }

  if (passMeetsCharMin()) {
    passCharMin.html("Has 8 or more characters ✅");
    tPassCharMin = true;
  } else {
    passCharMin.html("Does not have 8 or more characters ❌");
    tPassCharMin = false;
  }

  if (passMeetsCharMax()) {
    passCharMax.html("Has 24 characters or less ✅");
    tPassCharMax = true;
  } else {
    passCharMax.html("Is more than 24 characters ❌");
    tPassCharMax = false;
  }

  if (passDoesMatch()) {
    passMatch.html("Passwords match ✅");
    tPassMatch = true;
  } else {
    passMatch.html("Passwords do not match ❌");
    tPassMatch = false;
  }

  checkAllValid();
})

passwordConf.on("change", function () {
  if (passDoesMatch()) {
    passMatch.html("Passwords match ✅");
    tPassMatch = true;
  } else {
    passMatch.html("Passwords do not match ❌");
    tPassMatch = false;
  }

  checkAllValid();
})


function checkAllValid () {
  if (
    tUserAvail &&
    tUserCharMin &&
    tUserCharMax &&
    tPassCapital &&
    tPassNum &&
    tPassSpecial &&
    tPassCharMin &&
    tPassCharMax &&
    tPassMatch
  ) {
    submit.prop("disabled", false);
  } else {
    $("#submit").prop("disabled", true);
  }
}
