import './bootstrap';

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
  