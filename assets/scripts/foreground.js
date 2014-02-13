jQuery(document).foundation();

jQuery(document).ready(function() {
  // Add the 'less than IE9' class to appropriate version of IE by checking for their support of cssFloat (true in v9)
  if (!jQuery.support.cssFloat) { jQuery('html').addClass('lt-ie9').addClass('no-js'); }

  // The Echo extension puts an item in personal tools that Foreground really should have in the top menu
  // to make this easier, we move it here and loaded earlier to speed up transform
  jQuery("#pt-notifications").prependTo("#echo-notifications");

  // Add classes for font-awesome
  jQuery('[id^=ca-nstab] a').addClass('fa fa-file fa-fw').text(' ' + jQuery('[id^=ca-nstab] a').text());
  jQuery('li#ca-talk a').addClass('fa fa-comments fa-fw').text(' ' + jQuery('li#ca-talk a').text());
  jQuery('li#ca-talk.new a').addClass('fa fa-comments-o fa-fw').text(' ' + jQuery('li#ca-talk.new a').text());
  jQuery('li#ca-edit a').addClass('fa fa-pencil-square-o fa-fw').text(' ' + jQuery('li#ca-edit a').text());
  jQuery('li#ca-viewsource a').addClass('fa fa-book fa-fw').text(' ' + jQuery('li#ca-viewsource a').text());
  jQuery('li#ca-form_edit a').addClass('fa fa-pencil-square fa-fw').text(' ' + jQuery('li#ca-form_edit a').text());
  jQuery('li#ca-history a').addClass('fa fa-archive fa-fw').text(' ' + jQuery('li#ca-history a').text());
  jQuery('li#ca-delete a').addClass('fa fa-trash-o fa-fw').text(' ' + jQuery('li#ca-delete a').text());
  jQuery('li#ca-undelete a').addClass('fa fa-undo fa-fw').text(' ' + jQuery('li#ca-undelete a').text());
  jQuery('li#ca-move a').addClass('fa fa-truck fa-fw').text(' ' + jQuery('li#ca-move a').text());
  jQuery('li#ca-protect a').addClass('fa fa-shield fa-fw').text(' ' + jQuery('li#ca-protect a').text());
  jQuery('li#ca-unprotect a').addClass('fa fa-shield fa-fw').text(' ' + jQuery('li#ca-unprotect a').text());
  jQuery('li#ca-watch a').addClass('fa fa-star-o fa-fw').text(' ' + jQuery('li#ca-watch a').text());
  jQuery('li#ca-unwatch a').addClass('fa fa-star fa-fw').text(' ' + jQuery('li#ca-unwatch a').text());
  jQuery('li#ca-purge a').addClass('fa fa-refresh fa-fw').text(' ' + jQuery('li#ca-purge a').text());
  jQuery('li#ca-ask_delete_permanently a').addClass('fa fa-cut fa-fw').text(' ' + jQuery('li#ca-ask_delete_permanently a').text());
  if ( jQuery( '#ca-addsection' ).length ) {
        jQuery('li#ca-addsection a').addClass('fa fa-plus fa-fw').text(' ' + jQuery('li#ca-addsection a').attr('title').replace(/\[.+/g,""));
  }
  jQuery('li#pt-userpage a').addClass('fa fa-user').text(' ' + jQuery('li#pt-userpage a').text());
  jQuery('li#pt-mytalk a').addClass('fa fa-comments').text(' ' + jQuery('li#pt-mytalk a').text());
  jQuery('li#pt-adminlinks a').addClass('fa fa-bolt').text(' ' + jQuery('li#pt-adminlinks a').text());
  jQuery('li#pt-preferences a').addClass('fa fa-ellipsis-h').text(' ' + jQuery('li#pt-preferences a').text());
  jQuery('li#pt-watchlist a').addClass('fa fa-th-list').text(' ' + jQuery('li#pt-watchlist a').text());
  jQuery('li#pt-mycontris a').addClass('fa fa-smile-o').text(' ' + jQuery('li#pt-mycontris a').text());
  jQuery('li#pt-logout a').addClass('fa fa-power-off').text(' ' + jQuery('li#pt-logout a').text());

  jQuery('li#t-smwbrowselink a').addClass('fa fa-eye').text(' ' + jQuery('li#t-smwbrowselink a').text());
  jQuery('li#t-whatlinkshere a').addClass('fa fa-arrows').text(' ' + jQuery('li#t-whatlinkshere a').text());
  jQuery('li#t-blockip a').addClass('fa fa-ban').text(' ' + jQuery('li#t-blockip a').text());
  jQuery('li#t-recentchangeslinked a').addClass('fa fa-bars').text(' ' + jQuery('li#t-recentchangeslinked a').text());
  jQuery('li#t-contributions a').addClass('fa fa-smile-o').text(' ' + jQuery('li#t-contributions a').text());
  jQuery('li#t-log a').addClass('fa fa-bars').text(' ' + jQuery('li#t-log a').text());
  jQuery('li#t-emailuser a').addClass('fa fa-envelope').text(' ' + jQuery('li#t-emailuser a').text());
  jQuery('li#t-userrights a').addClass('fa fa-gavel').text(' ' + jQuery('li#t-userrights a').text());
  jQuery('li#t-upload a').addClass('fa fa-upload').text(' ' + jQuery('li#t-upload a').text());
  jQuery('li#t-specialpages a').addClass('fa fa-magic').text(' ' + jQuery('li#t-specialpages a').text());
  jQuery('li#t-print a').addClass('fa fa-print').text(' ' + jQuery('li#t-print a').text());
  jQuery('li#t-permalink a').addClass('fa fa-dot-circle-o').text(' ' + jQuery('li#t-permalink a').text());
  jQuery('li#t-info a').addClass('fa fa-info').text(' ' + jQuery('li#t-info a').text());

  jQuery('ul#toolbox-dropdown.dropdown>li#n-recentchanges a').addClass('fa fa-tasks').text(' ' + jQuery('ul#toolbox-dropdown.dropdown>li#n-recentchanges a').text());
  jQuery('ul#toolbox-dropdown.dropdown>li#n-help a').addClass('fa fa-question').text(' ' + jQuery('ul#toolbox-dropdown.dropdown>li#n-help a').text());

  // Add Button class to submit buttons with the page body//
  jQuery('#page-content input[type="submit"]').addClass('button');

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
