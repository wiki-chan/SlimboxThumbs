<?php

/**
 * SlimboxThumbs extension /REWRITTEN/
 * Originally http://www.mediawiki.org/wiki/Extension:SlimboxThumbs
 * Now it does the same, but the code is totally different
 * Required MediaWiki: 1.24+
 *
 * This extension includes a copy of Slimbox.
 * It has one small modification: caption is animated together
 * with image container, instead of original annoying consecutive animation.
 * Also "autoloader" is removed from slimbox2.js, and there is an additional
 * slimboxthumbs.js file.
 *
 * You can however get your own copy of Slimbox and use it by replacing the
 * included one: http://www.digitalia.be/software/slimbox2
 *
 * @license GNU GPL 3.0 or later: http://www.gnu.org/licenses/gpl.html
 * CC-BY-SA should not be used for software, moreover it's incompatible with GPL, and MW is GPL.
 *
 * @file SlimboxThumbs.php
 *
 * @author Vitaliy Filippov <vitalif@mail.ru>
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

define( 'SlimboxThumbs_VERSION', '2015-08-12' );

// Register the extension credits.
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'SlimboxThumbs',
	'url' => 'https://github.com/wiki-chan/SlimboxThumbs',
	'author' => array(
		'[http://yourcmc.ru/wiki/User:VitaliyFilippov Vitaliy Filippov]',
		'[http://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
		'페네트-'
	),
	'descriptionmsg' => 'slimboxthumbs-desc',
	'version' => SlimboxThumbs_VERSION,
);

$dir = dirname( __FILE__ ) . '/';
$wgMessagesDirs['SlimboxThumbs'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['SlimboxThumbs'] = $dir . 'SlimboxThumbs.i18n.php';
$wgHooks['BeforePageDisplay'][] = 'SlimboxThumbs::efSBTAddScripts';
$wgAjaxExportList[] = 'SlimboxThumbs::efSBTGetImageSizes';
$wgAjaxExportList[] = 'SlimboxThumbs::efSBTRemoteThumb';

$wgAutoloadClasses['SlimboxThumbs'] = $dir . 'SlimboxThumbs.class.php';