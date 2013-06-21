jQuery(document).ready(function() {
  jQuery(document).foundation(function (response) {
    console.log(response.errors);
  });

  // Split the namespace title into a title and a label
  var $title = jQuery("h2.title:contains(':')").not(":contains('\"')").not(":contains('as of')").text().split(":");
  jQuery("h2.title:contains(':')").not(":contains('\"')").not(":contains('as of')").html('<small class="label">' + $title[0] + '</small><span>' + $title[1] + '</span>');

  // Turn categories into labels
  jQuery('#mw-normal-catlinks ul li a').addClass('label');

});