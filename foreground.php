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
	$wgMessagesDirs['foreground'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the Foregrond skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Foreground skin requires MediaWiki 1.25+' );
}
