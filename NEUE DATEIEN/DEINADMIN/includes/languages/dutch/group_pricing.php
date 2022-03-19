<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.5
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: group_pricing.php 730 2015-12-22 15:49:16Z webchills $
 */
define('HEADING_TITLE', 'Groepsprijzen');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Naam groep');
define('TABLE_HEADING_GROUP_AMOUNT', '% korting');
define('TABLE_HEADING_ACTION', 'Actie(s)');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Nieuwe prijsgroep');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Wijzig prijsgroep');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Verwijder prijsgroep');

define('TEXT_NEW_INTRO', 'Voer de nieuwe prijsgroep in met alle relevante gegevens');
define('TEXT_EDIT_INTRO', 'Maak de noodzakelijke wijziging(en)');
define('TEXT_DELETE_INTRO', 'Weet je zeker dat je deze prijsgroep wilt verwijderen?');
define('TEXT_DELETE_PRICING_GROUP', 'Verwijder prijsgroep');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>WAARSCHUWING:</b> Er zijn nog steeds %s klanten gekoppeld aan deze categorie!');

define('TEXT_GROUP_PRICING_NAME', 'Naam prijsgroep: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Kortingspercentage: ');
define('TEXT_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_LAST_MODIFIED', 'Datum laatste wijziging:');
define('TEXT_CUSTOMERS', 'Klanten in prijsgroep:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','FOUT: Klanten zijn aanwezig in deze groep. Bevestig aub. dat alle leden van deze groep verwijderd moeten worden en dat ook de groep verwijderd wordt');
define('ERROR_MODULE_NOT_CONFIGURED','Let op: prijsgroepen zijn gedefiniëerd, maar nog niet geactiveerd in de ORDER TOTAAL Module.<br />Ga naar: Admin->Modules->Order Total->Membership Discount (ot_group_pricing) en installeer/configureer de module.');