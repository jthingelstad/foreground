jQuery(document).foundation();

jQuery(document).ready(function() {
  // Add the 'less than IE9' class to appropriate version of IE by checking for their support of cssFloat (true in v9)
  if (!jQuery.support.cssFloat) { jQuery('html').addClass('lt-ie9').addClass('no-js'); }

  // The Echo extension puts an item in personal tools that Foreground really should have in the top menu
  // to make this easier, we move it here and loaded earlier to speed up transform
  jQuery("#pt-notifications").prependTo("#echo-notifications");
<<<<<<< HEAD
=======
  
  // Append font-awesome icons
  jQuery('[id^=ca-nstab] a').prepend('<i class="fa fa-file fa-fw"></i> ')
  jQuery('li#ca-talk a').prepend('<i class="fa fa-comments-o fa-fw"></i> ')
  jQuery('li#ca-edit a').prepend('<i class="fa fa-pencil-square-o fa-fw"></i> ')
  jQuery('li#ca-viewsource a').prepend('<i class="fa fa-book fa-fw"></i> ')
  jQuery('li#ca-form_edit a').prepend('<i class="fa fa-pencil-square fa-fw"></i> ')
  jQuery('li#ca-history a').prepend('<i class="fa fa-archive fa-fw"></i> ')
  jQuery('li#ca-delete a').prepend('<i class="fa fa-trash-o fa-fw"></i> ')
  jQuery('li#ca-move a').prepend('<i class="fa fa-truck fa-fw"></i> ')
  jQuery('li#ca-protect a').prepend('<i class="fa fa-shield fa-fw"></i> ')
  jQuery('li#ca-unprotect a').prepend('<i class="fa fa-shield fa-fw"></i> ')
  jQuery('li#ca-watch a').prepend('<i class="fa fa-star-o fa-fw"></i> ')
  jQuery('li#ca-unwatch a').prepend('<i class="fa fa-star fa-fw"></i> ')
  jQuery('li#ca-purge a').prepend('<i class="fa fa-refresh fa-fw"></i> ')
  jQuery('li#ca-undelete a').prepend('<i class="fa fa-undo fa-fw"></i> ')
  jQuery('li#ca-ask_delete_permanently a').prepend('<i class="fa fa-cut fa-fw"></i> ')
>>>>>>> refs/heads/master

<<<<<<< HEAD
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
=======
if ( jQuery( '#ca-addsection' ).length ) {
  jQuery('li#ca-addsection a').html('<i class="fa fa-plus fa-fw"></i> ' + jQuery('li#ca-addsection a').attr('title').replace(/\[.+/g,""))
}

  jQuery('li#pt-uls a').prepend('<i class="fa fa-book fa-fw"></i> ')
  jQuery('li#pt-userpage a').prepend('<i class="fa fa-user fa-fw"></i> ')
  jQuery('li#pt-mytalk a').prepend('<i class="fa fa-comments fa-fw"></i> ')
  jQuery('li#pt-adminlinks a').prepend('<i class="fa fa-bolt fa-fw"></i> ')
  jQuery('li#pt-preferences a').prepend('<i class="fa fa-ellipsis-h fa-fw"></i> ')
  jQuery('li#pt-watchlist a').prepend('<i class="fa fa-th-list fa-fw"></i> ')
  jQuery('li#pt-mycontris a').prepend('<i class="fa fa-smile-o fa-fw"></i> ')
  jQuery('li#pt-logout a').prepend('<i class="fa fa-power-off fa-fw"></i> ')
>>>>>>> refs/heads/master

  jQuery('li#t-smwbrowselink a').prepend('<i class="fa fa-eye fa-fw"></i> ')
  jQuery('li#t-whatlinkshere a').prepend('<i class="fa fa-arrows fa-fw"></i> ')
  jQuery('li#t-blockip a').prepend('<i class="fa fa-ban fa-fw"></i> ')
  jQuery('li#t-recentchangeslinked a').prepend('<i class="fa fa-bars fa-fw"></i> ')
  jQuery('li#t-contributions a').prepend('<i class="fa fa-smile-o fa-fw"></i> ')
  jQuery('li#t-log a').prepend('<i class="fa fa-bars fa-fw"></i> ')
  jQuery('li#t-emailuser a').prepend('<i class="fa fa-envelope fa-fw"></i> ')
  jQuery('li#t-userrights a').prepend('<i class="fa fa-gavel fa-fw"></i> ')
  jQuery('li#t-upload a').prepend('<i class="fa fa-upload fa-fw"></i> ')
  jQuery('li#t-specialpages a').prepend('<i class="fa fa-magic fa-fw"></i> ')
  jQuery('li#t-print a').prepend('<i class="fa fa-print fa-fw"></i> ')
  jQuery('li#t-permalink a').prepend('<i class="fa fa-dot-circle-o fa-fw"></i> ')
  jQuery('li#t-info a').prepend('<i class="fa fa-info fa-fw"></i> ')

  jQuery('ul#toolbox-dropdown.dropdown>li#n-recentchanges a').prepend('<i class="fa fa-tasks fa-fw"></i> ')
  jQuery('ul#toolbox-dropdown.dropdown>li#n-help a').prepend('<i class="fa fa-question fa-fw"></i> ')

  // Add Button class to submit buttons with the page body//
  jQuery('#page-content input[type="submit"]').addClass('button');

  // Turn categories into labels
  jQuery('#mw-normal-catlinks ul li a').addClass('label');

});
