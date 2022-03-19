<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: freeoptions.php 729 2011-08-09 15:49:16Z hugo13 $
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Opties gratis verzenden');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', 'Gratis opties worden gebruikt om een optie gratis verzending weer te geven wanneer andere verzendmethodes worden weergegeven.
Kan ingesteld zijn als: Altijd weergeven, Totaal bestelling, gewicht bestelling of op basis van het aantal items.
De optie geen verzendkosten module word niet getoond als de Geen Verzendkosten module word weergegeven.<br /><br />
Totaal instellen op >= 0.00 en <= niks (leeg laten) zal dit moduul activeren om te worden getoond bij alle verzendmethodes, behalve voor Geen verzendkosten - gratis verzending.<br /><br />
NOOT: Door alle instellingen voor totaal, gewicht en aantal items leeg te laten zal deze moduul worden gedeactiveerd.<br /><br />
NOOT: De Optie geen verzendkosten zal niet worden getoond als Geen Verzendkosten wordt gebruikt bij Gewicht=0 is gratis verzenden.
zie: Geen verzendkosten');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Geen verzendkosten');