<?php

/**
* phpBB Extension - marttiphpbb stopforumspamreport
* @copyright (c) 2015 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
 
$lang = array_merge($lang, array(

	'ACP_STOPFORUMSPAMREPORT_APIKEY'			=> 'Chiave API',
	'ACP_STOPFORUMSPAMREPORT_APIKEY_EXPLAIN'	=> 'La chiave API fornita da stopforumspam.com',
	'ACP_STOPFORUMSPAMREPORT_APIKEY_SAVED'		=> 'Chiave API salvata con successo.',
	'ACP_STOPFORUMSPAMREPORT_REPORT'			=> 'Segnala utente a stopforumspam.com',
	'ACP_STOPFORUMSPAMREPORT_REPORT_EXPLAIN'	=> 'Per l’uso di questa caratteristica è necessaria una chiave API fornita da <a href="https://stopforumspam.com">stopforumspam.com</a>.',
));
