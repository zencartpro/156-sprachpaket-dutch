<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: product_free_shipping.php 730 2015-12-22 17:49:16Z webchills $
 */
// Definieer altijd gratis verzenden als een tekst, een afbeelding of een combinatie van beiden.
// Commenteer degenen die u niet wilt gebruiken
// om niks weer te geven, commenteer ze allemaal uit behalve aan het eind een definitie als ''
// define('TEXT_PRODUCT_FREE_SHIPPING_ICON', 'GRATIS VERZENDEN'); // voor tekst of stel in als '' om niks weer te geven
define('TEXT_PRODUCT_FREE_SHIPPING_ICON', zen_image(DIR_WS_TEMPLATE_IMAGES . 'always-free-shipping.gif', 'Gratis verzending!')); // voor een afbeeelding