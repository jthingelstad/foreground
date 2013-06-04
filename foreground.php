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
    'name'			 => 'foreground',
    'url'			 => 'http://wikiwonders.net/wiki/Foreground',
    'author'		 => 'WikiWonders',
    'descriptionmsg' => 'A MediaWiki skin that focuses on putting your content in the foreground.',
);

$wgValidSkinNames['foreground'] = 'foreground';

$wgAutoloadClasses['Skinforeground'] = __DIR__.'/foreground.skin.php';

$wgExtensionMessagesFiles['foreground'] = __DIR__.'/foreground.i18n.php';

$wgResourceModules['skins.foreground'] = array(
	'styles'         => array(
    	'foreground/assets/stylesheets/normalize.css' => array('media' => 'screen'),
    	'foreground/assets/stylesheets/foundation.css' => array('media' => 'screen'),
    	'foreground/assets/stylesheets/foreground.css' => array('media' => 'screen'),
        'foreground/assets/stylesheets/foreground-print.css' => array('media' => 'print'),
    	'foreground/assets/stylesheets/jquery.autocomplete.css' => array('media' => 'screen'),
    	'foreground/assets/stylesheets/responsive-tables.css' => array('media' => 'screen')
    ),
    'scripts'        => array(
        'foreground/assets/scripts/vendor/custom.modernizr.js',
        'foreground/assets/scripts/foundation/foundation.js',
        'foreground/assets/scripts/foundation/foundation.topbar.js',
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


//$wgHooks['BeforePageDisplay'][] = 'SkinForeground::Foreground_Skin_Setup';