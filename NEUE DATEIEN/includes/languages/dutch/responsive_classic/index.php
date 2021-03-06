<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: picaflor-azul Sun Dec 13 16:46:52 2015 -0500 New in v1.5.5 $
 */

define('TEXT_MAIN','Dit is de algemene tekst voor de door <a href="http://zen-cart.nl">zen-cart.nl</a> uitgegeven Nederlandse versie (Dutch language) indien geen template is gekozen. Deze tekst kunt u vinden in: <strong>/includes/languages/dutch/index.php</strong>');

// Showroom vs winkel
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Welkom <span class="greetUser">bezoeker!</span> Wilt u zich <a href="%s">aanmelden</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Welkom, kijk rustig rond in onze showroom.');
}

define('TEXT_GREETING_PERSONAL', 'Welkom terug <span class="greetUser">%s</span>! Wilt u de <a href="%s">nieuwste toevoegingen</a> aan ons assortiment zien?');

define('TEXT_INFORMATION', 'De welkomstpagina van je bedrijf kun je hier kwijt.');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // dit deel gaat over de artikeloverzicht pagina's
  define('HEADING_TITLE', 'Beschikbare artikelen');
  define('TABLE_HEADING_IMAGE', 'Productfoto');
  define('TABLE_HEADING_MODEL', 'Model');
  define('TABLE_HEADING_PRODUCTS', 'Naam artikel');
  define('TABLE_HEADING_MANUFACTURER', 'Merk');
  define('TABLE_HEADING_QUANTITY', 'Aantal');
  define('TABLE_HEADING_PRICE', 'Prijs');
  define('TABLE_HEADING_WEIGHT', 'Gewicht');
  define('TABLE_HEADING_BUY_NOW', 'Nu kopen!');
  define('TEXT_NO_PRODUCTS', 'In deze categorie zijn op dit moment geen artikelen aanwezig.');
  define('TEXT_NO_PRODUCTS2', 'Van dit merk zijn op dit moment geen artikelen aanwezig.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Aantal artikelen: ');
  define('TEXT_SHOW', 'Filter resultaat op:');
  define('TEXT_BUY', 'Koop 1 \'');
  define('TEXT_NOW', '\' nu');
  define('TEXT_ALL_CATEGORIES', 'Alle categorie??n');
  define('TEXT_ALL_MANUFACTURERS', 'Alle producenten');
} elseif ($category_depth == 'top') {
  // dit deel gaat over wat er bovenaan de "home" pagina komt te staan als er geen opties danwel artikelen zijn geselecteerd
  /*Vervang deze tekst door de door u gewenste koptekst. Bijvoorbeeld: 'Welkom in mijn webwinkel!'*/
  define('HEADING_TITLE', 'Welkom in onze webwinkel!');
} elseif ($category_depth == 'nested') {
  // dit deel gaat over het weergeven van een subcategorie
  /*Vervang deze tekst door de door u gewenste koptekst. Bijvoorbeeld: 'Welkom in mijn webwinkel!'*/
  define('HEADING_TITLE', 'Welkom in onze webwinkel!');
}