<?php
/**
 * @package languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 794 2013-08-17 09:24:50Z webchills $
 */

define('TEXT_MAIN','Dit is de algemene tekst voor de door <a href="http://zen-cart.nl">zen-cart.nl</a> uitgegeven Nederlandse versie (Dutch language) indien geen template is gekozen. Deze tekst kunt u vinden in: <strong>/includes/languages/dutch/index.php</strong>');

// Showroom vs winkel
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Welkom <span class="greetUser">bezoeker!</span> Wilt u zich <a href="%s">aanmelden</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Welkom, kijk rustig rond in onze showroom.');
}

define('TEXT_GREETING_PERSONAL', 'Welkom terug <span class="greetUser">%s</span>! Wilt u de <a href="%s">nieuwste toevoegingen</a> aan ons assortiment zien?');

define('TEXT_INFORMATION', 'Dit is de welkomstpagina van het bedrijf.');

//verplaats naar dutch
//define('TABLE_HEADING_FEATURED_PRODUCTS','Aanbevolen artikel...');

//define('TABLE_HEADING_NEW_PRODUCTS', 'Nieuwe artikelen voor %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Verwachte artikelen');
//define('TABLE_HEADING_DATE_EXPECTED', 'Datum verwacht');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // dit deel gaat over de inhoud van de artikeloverzicht pagina's
  define('HEADING_TITLE', 'Beschikbare artikelen');
  define('TABLE_HEADING_IMAGE', 'Product afbeelding');
  define('TABLE_HEADING_MODEL', 'Model');
  define('TABLE_HEADING_PRODUCTS', 'Naam artikel');
  define('TABLE_HEADING_MANUFACTURER', 'Producent');
  define('TABLE_HEADING_QUANTITY', 'Aantal');
  define('TABLE_HEADING_PRICE', 'Prijs');
  define('TABLE_HEADING_WEIGHT', 'Gewicht');
  define('TABLE_HEADING_BUY_NOW', 'Nu kopen!');
  define('TEXT_NO_PRODUCTS', 'In deze categorie zijn op dit moment geen artikelen aanwezig.');
  define('TEXT_NO_PRODUCTS2', 'Van deze producent zijn op dit moment geen artikelen aanwezig.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Aantal artikelen: ');
  define('TEXT_SHOW', 'Sorteren op:');
  define('TEXT_BUY', 'Koop 1 \'');
  define('TEXT_NOW', '\' nu');
  define('TEXT_ALL_CATEGORIES', 'Alle categorie??n');
  define('TEXT_ALL_MANUFACTURERS', 'Alle merken');
} elseif ($category_depth == 'top') {
  // dit deel gaat over wat er bovenaan de "home" pagina komt te staan als er geen opties danwel artikelen zijn geselecteerd
  /*Vervang deze tekst door de door u gewenste koptekst. Bijvoorbeeld: 'Welkom in mijn webwinkel!'*/
  define('HEADING_TITLE', 'Gefeliciteerd! De installatie van Zen Cart als eCommerce oplossing is gelukt.');
} elseif ($category_depth == 'nested') {
  // dit deel gaat over het weergeven van een subcategorie
  /*Vervang deze tekst door de door u gewenste koptekst. Bijvoorbeeld: 'Welkom in mijn webwinkel!'*/
  define('HEADING_TITLE', 'Gefeliciteerd! Een geslaagde installatie van Zen Cart winkel als een eCommerce oplossing.');
}
