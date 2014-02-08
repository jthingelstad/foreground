<?php

/**
 * Foreground Skin
 *
 * @file
 * @ingroup Skins
 * @author Garrick Van Buren, Jamie Thingelstad
 * @license 2-clause BSD
 */

if( ! defined( 'MEDIAWIKI' ))
{
	die("Wiki Wonders What You're Doing");
}


$wgExtensionCredits['skin'][] = array(
	'path'		 => __FILE__,
	'name'		 => 'Foreground',
	'url'		 => 'http://foreground.thingelstad.com/',
	'author'	 => array(
		'Garrick Van Buren',
		'Jamie Thingelstad',
		'...'
		),
	'descriptionmsg' => 'foreground-desc'
);

$wgValidSkinNames['foreground'] = 'Foreground';

$wgAutoloadClasses['SkinForeground'] = __DIR__.'/Foreground.skin.php';

$wgExtensionMessagesFiles['SkinForeground'] = __DIR__.'/Foreground.i18n.php';

$wgResourceModules['skins.foreground'] = array(
	'styles'         => array(
    	'foreground/assets/stylesheets/normalize.css',
        'foreground/assets/stylesheets/font-awesome.css',
    	'foreground/assets/stylesheets/foundation.css',
    	'foreground/assets/stylesheets/foreground.css',
        'foreground/assets/stylesheets/foreground-print.css',
    	'foreground/assets/stylesheets/jquery.autocomplete.css',
    	'foreground/assets/stylesheets/responsive-tables.css'
    ),
    'scripts'        => array(
        'foreground/assets/scripts/vendor/custom.modernizr.js',
        'foreground/assets/scripts/vendor/fastclick.js',
        'foreground/assets/scripts/vendor/responsive-tables.js',
        'foreground/assets/scripts/foundation/foundation.js',
        'foreground/assets/scripts/foundation/foundation.topbar.js',
        'foreground/assets/scripts/foundation/foundation.dropdown.js',
        'foreground/assets/scripts/foundation/foundation.section.js',
        'foreground/assets/scripts/foundation/foundation.clearing.js',
        'foreground/assets/scripts/foundation/foundation.cookie.js',
        'foreground/assets/scripts/foundation/foundation.placeholder.js',
        'foreground/assets/scripts/foundation/foundation.forms.js',
        'foreground/assets/scripts/foundation/foundation.alerts.js',
        'foreground/assets/scripts/foreground.js'
    ),
    'remoteBasePath' => &$GLOBALS['wgStylePath'],
    'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);
