<?php

/**
 * Foreground Skin
 *
 * @file
 * @ingroup Skins
 * @author Garrick Van Buren, Jamie Thingelstad, Tom Hutchison
 * @license BSD-2-Clause
 */

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'foreground' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['SkinForeground'] = __DIR__ . '/i18n';
	/* wfWarn(
		'Deprecated PHP entry point used for foreground skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return;
}

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Foreground',
	'url' => 'https://github.com/thingles/foreground',
	'author' => array(
		'Garrick Van Buren',
		'Jamie Thingelstad',
		'Tom Hutchison',
		'...'
	),
	'version' => '2.0.1-alpha',
	'descriptionmsg' => 'foreground-desc',
	'license-name' => 'BSD-2-Clause'
);

$wgValidSkinNames['foreground'] = 'Foreground';

$wgAutoloadClasses['SkinForeground'] = __DIR__ . '/Foreground.skin.php';
$wgAutoloadClasses['foregroundTemplate'] = __DIR__ . '/Foreground.skin.php';

$wgMessagesDirs['SkinForeground'] = __DIR__ . '/i18n';

$wgResourceModules['skins.foreground.styles'] = array(
	'position'       => 'top',
	'styles'         => array(
		'foreground/assets/stylesheets/normalize.css',
		'foreground/assets/stylesheets/font-awesome.css',
		'foreground/assets/stylesheets/foundation.css',
		'foreground/assets/stylesheets/foreground.css',
		'foreground/assets/stylesheets/foreground-print.css'
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);

$wgResourceModules['skins.foreground.modernizr'] = array(
	'position'       => 'top',
	'scripts'        => array(
		'foreground/assets/scripts/vendor/modernizr.js'
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);

$wgResourceModules['skins.foreground.js'] = array(
	'position'       => 'bottom',
	'scripts'        => array(
		'foreground/assets/scripts/vendor/fastclick.js',
		'foreground/assets/scripts/vendor/placeholder.js',
		'foreground/assets/scripts/foundation/foundation.js',
		'foreground/assets/scripts/foundation/foundation.topbar.js',
		'foreground/assets/scripts/foundation/foundation.dropdown.js',
		'foreground/assets/scripts/foundation/foundation.joyride.js',
		'foreground/assets/scripts/foundation/foundation.accordion.js',
		'foreground/assets/scripts/foundation/foundation.alert.js',
		'foreground/assets/scripts/foundation/foundation.clearing.js',
		'foreground/assets/scripts/foundation/foundation.equalizer.js',
		'foreground/assets/scripts/foundation/foundation.interchange.js',
		'foreground/assets/scripts/foundation/foundation.offcanvas.js',
		'foreground/assets/scripts/foundation/foundation.orbit.js',
		'foreground/assets/scripts/foundation/foundation.reveal.js',
		'foreground/assets/scripts/foundation/foundation.tab.js',
		'foreground/assets/scripts/foundation/foundation.tooltip.js',
		'foreground/assets/scripts/foreground.js',
	),
	'dependencies'   => array(
		'jquery.cookie',
		'skins.foreground.modernizr',
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);
