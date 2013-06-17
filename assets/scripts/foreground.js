jQuery(document).ready(function() {
  jQuery(document).foundation();
  // Split the namespace title into a title and a label
  var $title = jQuery("h2:contains(':')").not(":contains('\"')").text().split(":");
  jQuery("h2:contains(':')").not(":contains('\"')").html('<small class="label">' + $title[0] + '</small>' + $title[1]);

  // Turn categories into labels
  jQuery('#mw-normal-catlinks ul li a').addClass('label');

});