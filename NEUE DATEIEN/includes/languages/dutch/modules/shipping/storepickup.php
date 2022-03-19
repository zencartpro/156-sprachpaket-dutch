<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Thu Feb 14 23:03:50 2013 -0500 Modified in v1.5.2 $
 */

define('MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE', 'Afhalen winkel');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION', 'Afhalen bestelling op adres winkel');
define('MODULE_SHIPPING_STOREPICKUP_TEXT_WAY', 'Afhalen');


// Het volgende is de definiering voor meerdere locaties/methodes op basis van taal. Het wordt alleen gebruikt als de klant een taal kiest anders dan de winkelstandaard.
// De inhoud van MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS definitie moet hetzelfde zijn als van de meerdere locaties ingesteld in het verzendmoduul in admin, alleen met naam wijziging.
// Voorbeeld format zijn:
// "Locatie Een, 5.00; Locatie Twee, 3.50; Locatie Drie, 0.00"
// "Locatie Een, Locatie Twee, Locatie Drie"
// of laat het leeg en gebruik de tekst zoals gedefiniëerd in Admin, onverschillig welke taal
// TIP: Dit moet echt leeg zijn voor de standaard taal, anders wordt de in Admin ingestelde instelling nooit gebruikt.
define('MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS', "");
