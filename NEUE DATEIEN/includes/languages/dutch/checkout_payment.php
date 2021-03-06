<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 730 2015-12-22 17:49:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Afrekenen - Stap 1');
define('NAVBAR_TITLE_2', 'Betaalmethode - Stap 2');

define('HEADING_TITLE', 'Stap 2 van 3 - Betaalgegevens');

define('TABLE_HEADING_BILLING_ADDRESS', 'Factuuradres');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Uw factuuradres wordt aan de linkerzijde getoont. Factuuradres moet gelijk zijn aan het adres van uw creditcard! U kunt het factuuradres wijzigen door op de <em>Wijzig adres</em> knop te klikken.');
define('TITLE_BILLING_ADDRESS', 'Factuuradres:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Betaalmethode');
define('TEXT_SELECT_PAYMENT_METHOD', 'Kies een betaalmethode.');
define('TITLE_PLEASE_SELECT', 'Maak keuze');
define('TEXT_ENTER_PAYMENT_INFORMATION', '');
define('TABLE_HEADING_COMMENTS', 'Speciale instructies of opmerkingen bestelling');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Momenteel niet beschikbaar');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Sorry, wij accepteren nog geen internet betalingen uit uw regio.</span><br />Neem alstublieft even contact met ons op voor een alternatieve betaalmethode.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Doorgaan naar Stap 4</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- om uw bestelling te bevestigen.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Voorwaarden en betalingscondities</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Lees en accepteer alstublieft de voorwaarden en betalingscondities die op de bestelling van toepassing zijn door het selectievakje aantevinken. De voorwaarden en betalingscondities kunt u <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><span class="pseudolink">hier [klik]</span></a>lezen.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Ik heb de voorwaarden en betalingscondities zoals van toepassing op deze bestelling gelezen en ga hier uitdrukkelijk mee akkoord.</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Totaal te voldoen: ');
define('TEXT_YOUR_TOTAL','Uw totaal');