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
    'name'			 => 'Foreground',
    'url'			 => 'http://wikiwonders.net/wiki/Foreground',
    'author'		 => 'Garrick van Buren',
    'descriptionmsg' => 'A MediaWiki skin that focuses on putting your content in the foreground.',
);

$wgValidSkinNames['foreground'] = 'Foreground';
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
