<?php

/**
 * foreground.com foundation wiki skin.
 *
 * @file
 * @ingroup Skins
 * @author WikiWonders <skins@wikiwonders.net>
 * @license 2-clause BSD
 */

if( ! defined( 'MEDIAWIKI' ))
{
	die('Wiki Wonders What Youre Doing');
}
 
$wgExtensionCredits['skin'][] = array(
    'path'			 => __FILE__,
    'name'			 => 'foreground',
    'url'			 => '[http://wikiwonders.net]',
    'author'		 => '[http://wikiwonders.net WikiWonders]',
    'descriptionmsg' => 'The base WikiWonders skin with Zurbs Foundation atop it',
);

$wgValidSkinNames['foreground'] = 'foreground';
$wgAutoloadClasses['Skinforeground'] = __DIR__.'/foreground.skin.php';
$wgExtensionMessagesFiles['foreground'] = __DIR__.'/foreground.i18n.php';
 
$wgResourceModules['skins.foreground'] = array(
	'styles' => array(
    	'foreground/assets/stylesheets/normalize.css' => array('media' => 'screen'),		
    	'foreground/assets/stylesheets/foundation.css' => array('media' => 'screen'),
    	'foreground/assets/stylesheets/foreground.css' => array('media' => 'screen'),
    	'foreground/assets/stylesheets/jquery.autocomplete.css' => array('media' => 'screen'),
    	'foreground/assets/stylesheets/responsive-tables.css' => array('media' => 'screen')
    ),
    'remoteBasePath' => &$GLOBALS['wgStylePath'],
    'localBasePath' => &$GLOBALS['wgStyleDirectory']
);