jQuery(document).ready(function() {
  jQuery(document).foundation();
  var $title = jQuery('h3:contains(":")').text().split(":");
  jQuery('h3:contains(":")').html('<small class="label">' + $title[0] + '</small>' + $title[1]);
  jQuery('#mw-normal-catlinks ul li a').addClass('label');
});