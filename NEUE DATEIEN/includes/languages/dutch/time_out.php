<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 729 2011-08-09 15:49:16Z hugo13 $
 */

define('NAVBAR_TITLE', 'Maximale inlogtijd overschreden');
define('HEADING_TITLE', 'Sorry! Uw inlogsessie is niet langer geldig.');
define('HEADING_TITLE_LOGGED_IN', 'Sorry! Deze actie is afgeschermd. ');
define('TEXT_INFORMATION', '<p>Als u een bestelling aan het plaatsen was log dan in en uw winkelwagen zal worden hersteld. U kunt daarna opnieuw afrekenen.</p><p>Als u een bestelling had geplaatst en u de status wilde controleren' . (DOWNLOAD_ENABLED == 'true' ? ', of als het om een artikel gaat dat u wilde downloaden' : '') . ', Ga dan naar de <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mijn account</a> pagina om uw bestelling terug te zien.</p><p>If you are using a <b>CheckOut WithOut an Account</b> connection, your session was timed out because you connected via an Order Status E-Mail and you must start over.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'U bent ingelogd en kan als u dat wil verder winkelen. Kies een categorie uit het menu.');

define('HEADING_RETURNING_CUSTOMER', 'Inloggen');
define('TEXT_PASSWORD_FORGOTTEN', 'Wachtwoord vergeten?');
?>