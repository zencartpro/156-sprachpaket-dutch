<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 730 2015-12-22 18:49:16Z hugo13 $
 */

define('NAVBAR_TITLE_1', 'Inloggen');
define('NAVBAR_TITLE_2', 'Wachtwoord vergeten');

define('HEADING_TITLE', 'Wachtwoord vergeten');

define('TEXT_MAIN', 'Type hieronder uw e-mailadres dan sturen wij u een mail met een nieuw wachtwoord.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - nieuw wachtwoord');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Er is een nieuw wachtwoord aangevraagd vanaf ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Uw nieuwe wachtwoord voor \'' . STORE_NAME . '\' is:' . "\n\n" . '   %s' . "\n\nNadat u bent ingelogd met dit nieuwe wachtwoord, kan u dit wijzigen vanuit de 'Mijn account' pagina.");

define('SUCCESS_PASSWORD_SENT', 'Bedankt. Als het e-mailadres in ons systeem voorkomt, dan sturen we naar dat e-mailadres instructies voor het herstellen van uw wachtwoord.');
