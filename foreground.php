<?php

/**
 * WikiWonders Foreground Skin
 *
 * @file
 * @ingroup Skins
 * @author WikiWonders <skins@wikiwonders.net>
 * @license 2-clause BSD
 */

if( ! defined( 'MEDIAWIKI' ))
{
	die("Wiki Wonders What You're Doing");
}

$wgExtensionCredits['skin'][] = array(
    'path'			 => __FILE__,
    'name'			 => 'Foreground',
    'url'			 => 'http://foreground.wikiwonders.net/',
    'author'		 => 'WikiWonders',
    'descriptionmsg' => 'A MediaWiki skin that focuses on putting your content in the foreground.',
);

$wgValidSkinNames['foreground'] = 'foreground';

$wgAutoloadClasses['Skinforeground'] = __DIR__.'/foreground.skin.php';

$wgExtensionMessagesFiles['foreground'] = __DIR__.'/foreground.i18n.php';

$wgResourceModules['skins.foreground'] = array(
	'styles'         => array(
    	'Foreground/assets/stylesheets/normalize.css',
        'Foreground/assets/stylesheets/font-awesome.css',
    	'Foreground/assets/stylesheets/foundation.css',
    	'Foreground/assets/stylesheets/foreground.css',
        'Foreground/assets/stylesheets/foreground-print.css',
    	'Foreground/assets/stylesheets/jquery.autocomplete.css',
    	'Foreground/assets/stylesheets/responsive-tables.css'
    ),
    'scripts'        => array(
        'Foreground/assets/scripts/vendor/custom.modernizr.js',
        'Foreground/assets/scripts/foundation/foundation.js',
        'Foreground/assets/scripts/foundation/foundation.topbar.js',
        'Foreground/assets/scripts/foundation/foundation.dropdown.js',
        'Foreground/assets/scripts/foundation/foundation.section.js',
        'Foreground/assets/scripts/foundation/foundation.clearing.js',
        'Foreground/assets/scripts/foundation/foundation.cookie.js',
        'Foreground/assets/scripts/foundation/foundation.placeholder.js',
        'Foreground/assets/scripts/foundation/foundation.forms.js',
        'Foreground/assets/scripts/foundation/foundation.alerts.js',
        'Foreground/assets/scripts/foreground.js'
    ),
    'remoteBasePath' => &$GLOBALS['wgStylePath'],
    'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);
