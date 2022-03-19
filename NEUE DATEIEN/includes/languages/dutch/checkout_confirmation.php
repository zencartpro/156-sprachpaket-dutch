<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_confirmation.php 730 2012-12-07 07:49:16Z webchills $
 */

define('NAVBAR_TITLE_1', 'Afrekenen');
define('NAVBAR_TITLE_2', 'Bevestiging');

define('HEADING_TITLE', 'Stap 3 van 3 - Bevestigen bestelling');
define('TEXT_ZUSATZ_SCHRITT3','Controleer en bevestig uw aankoop door klikken van de "Bevestig Aankoop" knop onderaan de pagina.');
define('HEADING_BILLING_ADDRESS', 'Betalingsinfo');
define('HEADING_DELIVERY_ADDRESS', 'Verzendinfo');
define('HEADING_SHIPPING_METHOD', 'Verzendmethode:');
define('HEADING_PAYMENT_METHOD', 'Betalingsmethode:');
define('HEADING_PRODUCTS', 'Inhoud winkelwagen');
define('HEADING_TAX', 'BTW');
define('HEADING_ORDER_COMMENTS', 'Speciale instructies of opmerkingen bestelling');
// als er geen opmerkingen zijn
define('NO_COMMENTS_TEXT', 'Geen');
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Laatste stap</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- volgende om uw bestelling te bevestigen. Hartelijk bedankt!');

define('OUT_OF_STOCK_CAN_CHECKOUT', 'Artikelen aangeduid met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' zijn niet voorradig.<br />Artikelen die niet op voorraad zijn worden in backorder geplaats.');

// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Prijs');
define('TABLE_HEADING_PRODUCTIMAGE','Afbeelding');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','Ik heb gelezen en ga accoord met de <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><u>gebruiksvoorwaarden</u></a> gebonden aan deze order.');
define('TEXT_NON_EU_COUNTRIES','Noot:<br/>Uw order word versturd naare een land buiten de EU. Uw pakketten kunnen onderworpen zijn aan de douanerechten en invoerrechten van het land waar u uw bestelling heeft verzonden. Deze kosten zijn altijd de verantwoordelijkheid van de ontvanger.');
