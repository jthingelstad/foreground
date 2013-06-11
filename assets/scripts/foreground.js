jQuery(document).ready(function() {
  jQuery(document).foundation();
  var $title = jQuery('h3:contains(":")').text().split(":");

  // Split the namespace title into a title and a label
  jQuery('h3:contains(":")').html('<small class="label">' + $title[0] + '</small>' + $title[1]);

  // Turn categories into labels
  jQuery('#mw-normal-catlinks ul li a').addClass('label');

});