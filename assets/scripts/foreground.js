jQuery(document).ready(function() {
  jQuery(document).foundation(function (response) {
    console.log(response.errors);
  });

  jQuery('[id^=ca-nstab] a').addClass('icon-file').text(' ' + jQuery('[id^=ca-nstab] a').text());
  jQuery('li#ca-talk a').addClass('icon-comments').text(' ' + jQuery('li#ca-talk a').text());
  jQuery('li#ca-edit a').addClass('icon-edit').text(' ' + jQuery('li#ca-edit a').text());
  jQuery('li#ca-form_edit a').addClass('icon-edit-sign').text(' ' + jQuery('li#ca-form_edit a').text());
  jQuery('li#ca-history a').addClass('icon-archive').text(' ' + jQuery('li#ca-history a').text());
  jQuery('li#ca-delete a').addClass('icon-remove').text(' ' + jQuery('li#ca-delete a').text());
  jQuery('li#ca-move a').addClass('icon-truck').text(' ' + jQuery('li#ca-move a').text());
  jQuery('li#ca-protect a').addClass('icon-shield').text(' ' + jQuery('li#ca-protect a').text());
  jQuery('li#ca-unprotect a').addClass('icon-shield').text(' ' + jQuery('li#ca-unprotect a').text());
  jQuery('li#ca-watch a').addClass('icon-star-empty').text(' ' + jQuery('li#ca-watch a').text());
  jQuery('li#ca-unwatch a').addClass('icon-star').text(' ' + jQuery('li#ca-unwatch a').text());
  jQuery('li#ca-purge a').addClass('icon-refresh').text(' ' + jQuery('li#ca-purge a').text());
  jQuery('li#t-smwbrowselink a').addClass('icon-eye-open').text(' ' + jQuery('li#t-smwbrowselink a').text());



  // Split the namespace title into a title and a label
  var $title = jQuery("h2.title:contains(':')").not(":contains('\"')").not(":contains('as of')").text().split(":");
  jQuery("h2.title:contains(':')").not(":contains('\"')").not(":contains('as of')").html('<small class="label">' + $title[0] + '</small><span>' + $title[1] + '</span>');

  // Turn categories into labels
  jQuery('#mw-normal-catlinks ul li a').addClass('label');

  // Make the Page Action button respond to hover
  jQuery('a.button.dropdown').mouseenter(function(){
    jQuery('ul#drop1').addClass('open').addClass('right').css('top', '32px').css('left', '785px');
  });
  jQuery('ul#drop1').mouseleave(function(){
    jQuery('ul#drop1').removeClass('open').css('top', '-9999px').css('left', '785px');
  });

});