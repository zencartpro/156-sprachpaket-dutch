<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.5
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: categories.php 730 2014-02-09 15:30:16Z webchills $
 */

define('HEADING_TITLE', 'Categorie / Artikelen');
define('HEADING_TITLE_GOTO', 'Ga naar:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorieën/Artikelen');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Rang');

define('TABLE_HEADING_PRICE','Prijs');
define('TABLE_HEADING_QUANTITY','Voorraad');

define('TABLE_HEADING_ACTION', 'Actie(s)');
define('TABLE_HEADING_STATUS', 'Status');

define('TEXT_CATEGORIES', 'Categorieën:');
define('TEXT_SUBCATEGORIES', 'Subcategorieën:');
define('TEXT_PRODUCTS', 'Artikelen:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Prijs:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Tariefgroep belasting');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Gemiddelde beoordeling:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Hoeveelheid:');
define('TEXT_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_DATE_AVAILABLE', 'Startdatum:');
define('TEXT_LAST_MODIFIED', 'Datum laatste wijziging:');
define('TEXT_IMAGE_NONEXISTENT', 'Afbeelding komt niet voor');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Voeg een nieuwe categorie of nieuw artikel toe aan dit niveau.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Meer informatie is te vinden op de <a href="http://%s" target="blank">website</a> van dit artikel.');
define('TEXT_PRODUCT_DATE_ADDED', 'Artikel is toegevoegd op %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Dit artikel is weer in voorraad op %s.');

define('TEXT_EDIT_INTRO', 'Maak de noodzakelijke wijziging(en)');
define('TEXT_EDIT_CATEGORIES_ID', 'Categorie ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Naam categorie:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Afbeelding categorie');
define('TEXT_EDIT_SORT_ORDER', 'Rangschikking:');

define('TEXT_INFO_COPY_TO_INTRO', 'Kies een nieuwe categorie om dit artikel naar toe te kopiëren');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Huidige categorieën: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nieuwe categorie');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Wijzig categorie');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Verwijder categorie');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Verplaats categorie');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Verwijder artikel');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Verplaats artikel');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopieer naar');

define('TEXT_DELETE_CATEGORY_INTRO', 'Weet je zeker dat je deze categorie wilt verwijderen?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Waarschuwing:</strong> Gekoppelde artikelen waarvan de hoofdcategorie verwijderd is, worden NIET correct geprijsd. Zorg ervoor dat eerst de koppelingen verwijderd danwel verplaatst zijn naar een andere categorie. Daarna kan de categorie verwijderd worden');
define('TEXT_DELETE_PRODUCT_INTRO', 'Weet je zeker dat je dit artikel wilt verwijderen?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>Waarschuwing:</b> er zijn %s subcategorieën gekoppeld aan deze categorie!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Waarschuwing: </b> er zijn %s artikelen gekoppeld aan deze categorie!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Kies de categorie waar <b>%s</b> opgeslagen moet worden.');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Kies de categorie waar <b>%s</b> opgeslagen moet worden.');
define('TEXT_MOVE', 'Verplaats <b>%s</b> naar:');

define('TEXT_NEW_CATEGORY_INTRO', 'Voer de categorie in met alle relevante gegevens');
define('TEXT_CATEGORIES_NAME', 'Categorienaam:');
define('TEXT_CATEGORIES_IMAGE', 'Categorie afbeelding:');
define('TEXT_SORT_ORDER', 'Rangschikking:');

define('TEXT_PRODUCTS_STATUS', 'Status voorraad:');
define('TEXT_PRODUCTS_VIRTUAL', 'Artikel is virtueel:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Gratis verzenden:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Toon voorraad:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Startdatum:');
define('TEXT_PRODUCT_AVAILABLE', 'Op voorraad');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Niet op voorraad');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Ja, sla het verzendadres over');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Nee, er is een verzendadres nodig');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Ja, altijd gratis versturen');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Nee, de normale verzendmethodes gelden');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Ja, toon hoeveelheid');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Nee, toon geen hoeveelheid');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabrikant:');
define('TEXT_PRODUCTS_NAME', 'Naam artikel:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Beschrijving artikel:');
define('TEXT_PRODUCTS_QUANTITY', 'Aantal in voorraad:');
define('TEXT_PRODUCTS_MODEL', 'Artikel model:');
define('TEXT_PRODUCTS_IMAGE', 'Afbeelding artikel:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Opslaan in directory:');
define('TEXT_PRODUCTS_URL', 'URL artikel:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(zonder http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Artikelprijs (netto):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Artikelprijs (bruto):');
define('TEXT_PRODUCTS_WEIGHT', 'Artikel verzendgewicht (kg):');

define('EMPTY_CATEGORY', 'Lege categorie');

define('TEXT_HOW_TO_COPY', 'Kopieermethode:');
define('TEXT_COPY_AS_LINK', 'Koppel artikel');
define('TEXT_COPY_AS_DUPLICATE', 'Dupliceer artikel');

define('TEXT_RESTRICT_PRODUCT_TYPE', 'Beperkt voor artikelsoort');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', 'Deze categorie is beperkt voor deze artikelsoort(en)');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','Dit artikelsoort kan niet aan deze categorie worden toegevoegd. Kijk de restrictie van deze categorie na.');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Alleen gebruiken voor gedupliceerde artikelen...');
  define('TEXT_COPY_ATTRIBUTES','Kopieer artikelopties naar duplicaat?');
  define('TEXT_COPY_ATTRIBUTES_YES','Ja');
  define('TEXT_COPY_ATTRIBUTES_NO','Nee');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Huidige artikel: ');
  define('TABLE_HEADING_MODEL', 'Model');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Opties veranderen voor artikel ID ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Verwijder <strong>alle</strong> artikelopties voor:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopieer opties naar een ander artikel of naar een gehele categorie van:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopieer opties naar een ander <strong>artikel</strong> van:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopieer opties naar een ander <strong>categorie</strong> van:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Hoe om te gaan met bestaande opties van een artikel?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Verwijder</strong> eerste bestaande opties en voeg daarna nieuwe opties toe.');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Wijzig</strong> bestaande opties met nieuwe instellingen/prijzen en voeg daarna nieuwe opties toe.');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Negeer</strong> bestaande opties en voeg alleen nieuwe opties toe.');

  define('SUCCESS_ATTRIBUTES_DELETED','Opties met succes verwijderd');
  define('SUCCESS_ATTRIBUTES_UPDATE','Opties met succes gewijzigd');

  define('ICON_ATTRIBUTES','Ingestelde opties');

  define('TEXT_CATEGORIES_IMAGE_DIR','Overbrengen naar directory:');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>Of, selecteer een bestaand image bestand van de server, bestandsnaam:</strong>');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Waarschuwing: Laat geen voorraad zien, standaard ingesteld op 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Waarschuwing: Laat geen voorraad zien, standaard ingesteld op 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Maak een keuze:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Ingestelde opties voor:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Downloads: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Vanaf prijs i.c.m. uitbreidingsopties:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Ja');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Nee');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Getoonde prijs bestaat uit prijs inclusief standaardopties en eventueel gekozen opties');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Getoonde prijs bestaat uit prijs inclusief standaardopties en eventueel gekozen opties');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Minimum bestelhoeveelheid:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Artikel verpakt per:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Maximale bestelhoeveelheid:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = onbeperkt, 1 = geen hoeveelheidsbox, of maximum bestelhoeveelheid');

  define('TEXT_PRODUCTS_MIXED','Minimale bestelhoeveelheid / verpakkingseenheid mix:');

  define('TEXT_PRODUCT_IS_FREE','Artikel is gratis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Artikel is gratis');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Artikel is gratis');

  define('TEXT_PRODUCT_IS_CALL','Informeer naar prijs bij dit artikel:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Informeer naar prijs bij dit artikel');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Informeer naar prijs bij dit artikel');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Verwijder nieuwe opties </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Invoegen nieuwe opties </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Wijzig opties </strong>');

  define('TEXT_SHIPPING_INFO',
  '<strong>Virtuele artikelen</strong> hebben geen verzendkosten en zijn niet verplicht een afleveradres in te vullen, zoals nu voor de services van ' . TEXT_GV_NAMES . ', etc.<br />' .
  '<strong>Always Gratis verzenden</strong> is zonder een verzendtarief maar heeft wel een afleveradres nodig<br />' .
  '<strong>Downloads</strong> worden bij de Virtuele artikelen ingedeeld - geen van de opties hoeft te worden aangekruisd./>'
  );

  define('TEXT_ANY_TYPE', 'Ieder Type');
  define('TABLE_HEADING_PRODUCT_TYPES', 'Artikelsoort(en)');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Verander categorie status voor:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Verander categorie status naar: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'UIT');
define('TEXT_CATEGORIES_STATUS_ON', 'AAN');
define('TEXT_PRODUCTS_STATUS_INFO', 'Verander alle artikel status naar: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'UIT');
define('TEXT_PRODUCTS_STATUS_ON', 'AAN');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Ongewijzigd');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>Waarschuwing ...</strong><br />Opmerking: het uitzetten van een categorie zorgt er voor dat alle artikelen in deze categorie ook niet langer beschikbaar zijn. Gekoppelde artikelen in deze categorie, die gedeeld worden met andere categorieën, zijn eveneens niet langer beschikbaar.');

define('TEXT_PRODUCTS_STATUS_ON_OF',' van ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' actief ');

define('TEXT_CATEGORIES_DESCRIPTION', 'Beschrijving categorie:');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', 'Categorie Meta Tags Definitie');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', 'Definieëer Custom Meta Tags');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', 'Titel:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Keywords:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Meta Tag Omschrijving:');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'Waarschuwing: Er staan artikelen in de hoogste categorie. Hierdoor worden de artikelen niet goed geprijsd. Gevonden artikelen: ');

