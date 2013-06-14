jQuery(document).ready(function() {
  jQuery(document).foundation();
  // Split the namespace title into a title and a label
  var $title = jQuery('h2:not(:contains("\""))').jQuery('h2:contains(":")').text().split(":");
  jQuery('h2:not(:contains("\""))').jQuery('h2:contains(":")').html('<small class="label">' + $title[0] + '</small><div class="clear_both"></div>' + $title[1]);

  // Turn categories into labels
  jQuery('#mw-normal-catlinks ul li a').addClass('label');

});