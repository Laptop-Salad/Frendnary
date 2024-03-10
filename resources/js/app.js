import './bootstrap';

// Navbar
$("#navOpen").on("click", function () {
    // Close defaultNav
    $("#defaultNav").hide();

    // Open navToggledContent
    $("#navToggledContent").show();
});
  
$("#navClose").on("click", function () {
    // Close navToggledContent
    $("#navToggledContent").hide();

    // Open defaultNav
    $("#defaultNav").show();
});
  
// Navbar end

// Popup Messages
$("#msgSuccess button").on("click", function () {
    $("#msgSuccess").hide();
})

$("#msgError button").on("click", function () {
    $("#msgError").hide();
})
// Popup Messages end