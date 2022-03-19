<?php
/**
 * @package admin language Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: display_logs.php 730 2015-12-22 15:49:16Z webchills $
 */
 
define('HEADING_TITLE', 'Display Debug Log Files');

define('TABLE_HEADING_FILENAME', 'Bestandsnaam');
define('TABLE_HEADING_MODIFIED', 'Datum Bijgewerkt');
define('TABLE_HEADING_FILESIZE', 'Bestandsgrote (bytes)');  /*v1.0.3a*/
define('TABLE_HEADING_DELETE', 'Verwijder?');
define('TABLE_HEADING_ACTION', 'Actie');

define('BUTTON_DELETE_SELECTED', 'button_delete_selected.gif');
define('DELETE_SELECTED_ALT', 'Verwijder alle geselecteerde files');
define('BUTTON_DELETE_ALL', 'button_delete_all.gif');
define('DELETE_ALL_ALT', 'Verwijder alle files in de welke worden getoond');

define('ICON_INFO_VIEW', 'Toon de inhoud van dit bestand');

define('TEXT_HEADING_INFO', 'Bestands inhoud');
define('TEXT_MOST_RECENT', 'meest recent');
define('TEXT_OLDEST', 'oudste');
$imageName = zen_image(DIR_WS_IMAGES . 'icon_info.gif', ICON_INFO_VIEW);
define('TEXT_INSTRUCTIONS', '<br /><br />De bestanden kunnen in oplopend of aflopend volgorde worden gesorteerd (op basis van de laatst gewijzigde datum) door op de knop te klikken <em>' . TABLE_HEADING_MODIFIED . '</em> link. Klik op een ' . $imageName . ' icoon om de inhoud te tonen van het bestand. Alleen de eerste % bytes van het geselecteerde bestand worden gelezen, als een bestand te groot is, zal <em>File Grootte</em> oplichtend worden getoond als <span class="bigfile">dit</span>.<br /><br />Klik de <strong>verwijder alles</strong> knop zal alle getoonde bestanden verwijderen; klik <strong>verwijder geselecteerd</strong> zal alleen de aangeduide bestanden verwijderen.<br /><br />van de huidig getoonde %s %u van %u log files.<br />');
define('JS_MESSAGE_DELETE_ALL_CONFIRM', 'Weet u zeker dat u deze \'+n+\' bestanden wilt verwijderen?');
define('JS_MESSAGE_DELETE_SELECTED_CONFIRM', 'Weet u zeker dat u de \'+geselecteerd+\' bestanden wilt verwijderen?');

define('WARNING_NOT_SECURE','<span class="errorText">NOOT: SSL is niet ingeschakeld. Bestandsinhoud die u op deze pagina ziet, wordt niet gecodeerd en kan een beveiligingsrisico opleveren.</span>');
define('WARNING_NO_FILES_SELECTED', 'Er zijn geen bestanden geselecteerd voor verwijdering!');
define('WARNING_SOME_FILES_DELETED', 'Waarschuwing: Alleen %u van %u log files zijn verwijderd; controleer rechten.');
define('SUCCESS_FILES_DELETED', '%u log files zijn verwijderd.');