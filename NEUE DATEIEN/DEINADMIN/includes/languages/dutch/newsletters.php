<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.5
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2011-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Nieuwsbrief- en productnotificatie manager');

define('TABLE_HEADING_NEWSLETTERS', 'Nieuwsbrieven');
define('TABLE_HEADING_SIZE', 'Grootte');
define('TABLE_HEADING_MODULE', 'Module');
define('TABLE_HEADING_SENT', 'Verstuurd');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_NEWSLETTER_MODULE', 'Module:');
define('TEXT_NEWSLETTER_TITLE', 'Onderwerp:');
define('TEXT_NEWSLETTER_CONTENT', 'Alleen tekst <br />Inhoud:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Opgemaakte tekst <br />Inhoud:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Datum verzonden:');

define('TEXT_INFO_DELETE_INTRO', 'Weet je zeker dat je deze nieuwsbrief wilt verwijderen?');

define('TEXT_PLEASE_WAIT', 'Even geduld .. e-mails aan het versturen ..<br /><br />Gelieve dit proces niet te onderbreken!');
define('TEXT_FINISHED_SENDING_EMAILS', 'E-mails verzonden!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s e-mails verwerkt. (Elke checkbox staat voor 1 ontvanger. Beweeg over de checkbox om het e-mailadres te bekijken.)<br /><br />Let op je mailbox van ('.EMAIL_FROM.') in verband met:<ul><li>a) bounce berichten</li><li>b) e-mailadressen die niet langer bestaan</li><li>c) verzoeken tot verwijdering</li></ul>Verwijderen kan via Admin -> Klanten -> Klantgegevens.');

define('ERROR_NEWSLETTER_TITLE', 'Fout: Onderwerp van nieuwsbrief verplicht.');
define('ERROR_NEWSLETTER_MODULE', 'Fout: Module nieuwsbrief vereist.');
define('ERROR_PLEASE_SELECT_AUDIENCE','Fout: Selecteer een doelgroep voor deze nieuwsbrief');