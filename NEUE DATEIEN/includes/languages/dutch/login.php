<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 729 2011-08-09 15:49:16Z hugo13 $
 */

define('NAVBAR_TITLE', 'Inloggen');
define('HEADING_TITLE', 'Welkom, alstublieft inloggen');

define('HEADING_NEW_CUSTOMER', 'Nieuwe klant? Dan alstublieft eerst account aanmaken');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Nieuwe klant');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Als nieuwe klant van <strong>' . STORE_NAME . '</strong> kunt u hier uw inlogaccount aanmaken. Het afleveradres kunt u altijd bij uw bestelling wijzigen. Uw persoonlijke gegevens worden veilig opgeslagen en alleen gebruikt volgens onze Privacy verklaring.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Hebt u een PayPal account? Wilt u snel afrekenen met uw creditcard? Gebruik dan hieronder de PayPal knop om snel en gemakkelijk af te rekenen.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">of</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Maak nu een inlogaccount aan bij <strong>' . STORE_NAME . '</strong> waardoor u sneller kan bestellen, de status van uw bestellingen kan inzien, eerdere bestellingen kan weergeven en van al onze overige aanbiedingen kan genieten.');

define('HEADING_RETURNING_CUSTOMER', 'Bestaande klant: alstublieft inloggen');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Bestaande klant');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Om door te gaan alstublieft inloggen met uw <strong>' . STORE_NAME . '</strong> account.');

define('TEXT_PASSWORD_FORGOTTEN', 'Uw wachtwoord vergeten');

define('TEXT_LOGIN_ERROR', 'Fout: Het opgegeven e-mail adres en/of wachtwoord horen niet bij elkaar.');
define('TEXT_VISITORS_CART', '<strong>NOOT:</strong> De inhoud van uw winkelwagen zal voor uw gemak worden bewaard en worden toegevoegd zodra u inlogd. <a href="javascript:session_win();">[Meer info]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Privacyverklaring</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Bevestig uw akkoord met onze privacyverklaring door het selectievakje aan te klikken. Onze privacy verklaring kunt u </span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">hier lezen</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Ik heb de privayverklaring gelezen en ga akkoord met de inhoud ervan.</span>');

define('ERROR_SECURITY_ERROR', 'Er was een beveiligingsfout bij het aanmelden.');

define('TEXT_LOGIN_BANNED', 'Fout: Toegang geweigerd.');
