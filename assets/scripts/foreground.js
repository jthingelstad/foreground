jQuery(document).foundation();

jQuery(document).ready(function() {
  // Add the 'less than IE9' class to appropriate version of IE by checking for their support of cssFloat (true in v9)
  if (!jQuery.support.cssFloat) { jQuery('html').addClass('lt-ie9').addClass('no-js'); }

  // The Echo extension puts an item in personal tools that Foreground really should have in the top menu
  // to make this easier, we move it here and loaded earlier to speed up transform
  jQuery("#pt-notifications").prependTo("#echo-notifications");
  
  // Append font-awesome icons
  jQuery('[id^=ca-nstab] a').prepend('<div id="drop-icon"><i class="fa fa-file fa-fw"></i></div>')
  jQuery('li#ca-talk a').prepend('<div id="drop-icon"><i class="fa fa-comments-o fa-fw"></i></div>')
  jQuery('li#ca-edit a').prepend('<div id="drop-icon"><i class="fa fa-pencil-square-o fa-fw"></i></div>')
  jQuery('li#ca-viewsource a').prepend('<div id="drop-icon"><i class="fa fa-book fa-fw"></i></div>')
  jQuery('li#ca-form_edit a').prepend('<div id="drop-icon"><i class="fa fa-pencil-square fa-fw"></i></div>')
  jQuery('li#ca-history a').prepend('<div id="drop-icon"><i class="fa fa-archive fa-fw"></i></div>')
  jQuery('li#ca-delete a').prepend('<div id="drop-icon"><i class="fa fa-trash-o fa-fw"></i></div>')
  jQuery('li#ca-move a').prepend('<div id="drop-icon"><i class="fa fa-truck fa-fw"></i></div>')
  jQuery('li#ca-protect a').prepend('<div id="drop-icon"><i class="fa fa-shield fa-fw"></i></div>')
  jQuery('li#ca-unprotect a').prepend('<div id="drop-icon"><i class="fa fa-shield fa-fw"></i></div>')
  jQuery('li#ca-watch a').prepend('<div id="drop-icon"><i class="fa fa-star-o fa-fw"></i></div>')
  jQuery('li#ca-unwatch a').prepend('<div id="drop-icon"><i class="fa fa-star fa-fw"></i></div>')
  jQuery('li#ca-purge a').prepend('<div id="drop-icon"><i class="fa fa-refresh fa-fw"></i></div>')
  jQuery('li#ca-undelete a').prepend('<div id="drop-icon"><i class="fa fa-undo fa-fw"></i></div>')
  jQuery('li#ca-ask_delete_permanently a').prepend('<div id="drop-icon"><i class="fa fa-cut fa-fw"></i></div>')

if ( jQuery( '#ca-addsection' ).length ) {
  jQuery('li#ca-addsection a').html('<div id="drop-icon"><i class="fa fa-plus fa-fw"></i></div>' + jQuery('li#ca-addsection a').attr('title').replace(/\[.+/g,""))
}

  jQuery('li#pt-uls a').prepend('<div id="drop-icon"><i class="fa fa-book fa-fw"></i></div>')
  jQuery('li#pt-userpage a').prepend('<div id="drop-icon"><i class="fa fa-user fa-fw"></i></div>')
  jQuery('li#pt-mytalk a').prepend('<div id="drop-icon"><i class="fa fa-comments fa-fw"></i></div>')
  jQuery('li#pt-adminlinks a').prepend('<div id="drop-icon"><i class="fa fa-bolt fa-fw"></i></div>')
  jQuery('li#pt-preferences a').prepend('<div id="drop-icon"><i class="fa fa-ellipsis-h fa-fw"></i></div>')
  jQuery('li#pt-watchlist a').prepend('<div id="drop-icon"><i class="fa fa-th-list fa-fw"></i></div>')
  jQuery('li#pt-mycontris a').prepend('<div id="drop-icon"><i class="fa fa-smile-o fa-fw"></i></div>')
  jQuery('li#pt-logout a').prepend('<div id="drop-icon"><i class="fa fa-power-off fa-fw"></i></div>')

  jQuery('li#t-smwbrowselink a').prepend('<div id="drop-icon"><i class="fa fa-eye fa-fw"></i></div>')
  jQuery('li#t-whatlinkshere a').prepend('<div id="drop-icon"><i class="fa fa-arrows fa-fw"></i></div>')
  jQuery('li#t-blockip a').prepend('<div id="drop-icon"><i class="fa fa-ban fa-fw"></i></div>')
  jQuery('li#t-recentchangeslinked a').prepend('<div id="drop-icon"><i class="fa fa-bars fa-fw"></i></div>')
  jQuery('li#t-contributions a').prepend('<div id="drop-icon"><i class="fa fa-smile-o fa-fw"></i></div>')
  jQuery('li#t-log a').prepend('<div id="drop-icon"><i class="fa fa-bars fa-fw"></i></div>')
  jQuery('li#t-emailuser a').prepend('<div id="drop-icon"><i class="fa fa-envelope fa-fw"></i></div>')
  jQuery('li#t-userrights a').prepend('<div id="drop-icon"><i class="fa fa-gavel fa-fw"></i></div>')
  jQuery('li#t-upload a').prepend('<div id="drop-icon"><i class="fa fa-upload fa-fw"></i></div>')
  jQuery('li#t-specialpages a').prepend('<div id="drop-icon"><i class="fa fa-magic fa-fw"></i></div>')
  jQuery('li#t-print a').prepend('<div id="drop-icon"><i class="fa fa-print fa-fw"></i></div>')
  jQuery('li#t-permalink a').prepend('<div id="drop-icon"><i class="fa fa-dot-circle-o fa-fw"></i></div>')
  jQuery('li#t-info a').prepend('<div id="drop-icon"><i class="fa fa-info fa-fw"></i></div>')
  jQuery('li#feedlinks a').prepend('<div id="drop-icon"><i class="fa fa-rss fa-fw"></i></div>')
  
  jQuery('ul#toolbox-dropdown.dropdown>li#n-recentchanges a').prepend('<div id="drop-icon"><i class="fa fa-tasks fa-fw"></i></div>')
  jQuery('ul#toolbox-dropdown.dropdown>li#n-help a').prepend('<div id="drop-icon"><i class="fa fa-question fa-fw"></i></div>')


  // Turn categories into labels
  jQuery('#mw-normal-catlinks ul li a').addClass('label');

});
