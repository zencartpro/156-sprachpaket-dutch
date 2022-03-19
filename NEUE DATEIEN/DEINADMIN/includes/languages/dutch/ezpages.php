<?php
**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.5
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: ezpages.php 730 2015-12-22 15:49:16Z webchills $
 */
define('HEADING_TITLE', 'EZ-Pagina\'s');
define('TABLE_HEADING_PAGES', 'Paginatitel');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_VSORT_ORDER', 'Sidebox sorteervolgorde');
define('TABLE_HEADING_HSORT_ORDER', 'Footer sorteervolgorde');
define('TEXT_PAGES_TITLE', 'Paginatitel:');
define('TEXT_PAGES_HTML_TEXT', 'HTML Inhoud:');
define('TABLE_HEADING_DATE_ADDED', 'Datum toegevoegd:');
define('TEXT_PAGES_STATUS_CHANGE', 'Statuswijziging: %s');
define('TEXT_INFO_DELETE_INTRO', 'Wilt u deze pagina verwijderen?');
define('SUCCESS_PAGE_INSERTED', 'Succes: de pagina is toegevoegd.');
define('SUCCESS_PAGE_UPDATED', 'Succes: de pagina is gewijzigd.');
define('SUCCESS_PAGE_REMOVED', 'Succes: de pagina is verwijderd.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Succes: de status van deze pagina is gewijzigd.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Fout: Paginatitel is vereist.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Fout: onbekende status.');
define('ERROR_MULTIPLE_HTML_URL', 'Fout: U heeft meerdere instellingen opgegeven terwijl er slechts één per link is toegestaan ...<br />Kies uit: HTML inhoud -or- Interne Link URL -or- Externe Link URL');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Koptekst:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Sidebox:');
define('TABLE_HEADING_STATUS_FOOTER', 'Voettekst:');
define('TABLE_HEADING_STATUS_TOC', 'Inhoudsopgave:');
define('TABLE_HEADING_CHAPTER', 'Hoofdstuk:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Open een nieuw venster:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Pagina via SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Toon <b>%d</b> tot <b>%d</b> (van <b>%d</b> pagina\'s)');
define('IMAGE_NEW_PAGE', 'Nieuwe Pagina');
define('TEXT_INFO_PAGE_IMAGE', 'Afbeelding');
define('TEXT_INFO_CURRENT_IMAGE', 'Huidige afbeelding:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Kies een pagina ...');

define('TEXT_HEADER_SORT_ORDER', 'Volgorde:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Volgorde:');
define('TEXT_FOOTER_SORT_ORDER', 'Volgorde:');
define('TEXT_TOC_SORT_ORDER', 'Volgorde:');
define('TEXT_CHAPTER', 'Vorig/volgend hoofdstuk:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Hoofdstuk:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Koptekst sorteervolgorde gebruikt voor het genereren van de pagina\'s in een enkele Koptekst-regel; De waarde van de sorteervolgorde moet groter dan nul zijn teneinde deze pagina op regelbasis te tonen');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Sidebox-sorteervolgorde gebruikt voor het genereren van de pagina\'s in een verticale volgorde;sorteervolgorde gebruikt voor het genereren van de pagina\'s inteneinde deze pagina\'s onder elkaar te tonen, anders wordt het beschouwd als HTML tekst for speciale doeleinden');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'Voettekst sorteervolgorde gebruikt voor het genereren van de pagina\'s in een enkele Voettekst-regel; De waarde van de sorteervolgorde moet groter dan nul zijn teneinde deze pagina op regelbasis te tonen');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'Inhoudsopgave-sorteervolgorde gebruikt voor het genereren van de pagina\'s op regelbasis (header/footer, etc) of onder elkaar, gebasserd op individuele instellingen; De waarde van de sorteervolgorde moet groter dan nul zijn teneinde deze pagina te tonen');
define('TEXT_CHAPTER_EXPLAIN', 'De (vorige/volgende) hoofdstukken zijn op volgorde van de inhoudsopgave. Links in de inhoudsopgave bestaan uit de pagina\'s die overeenkomen met het hoofdstuknummer en op volgorde volgens de inhoudsopgave');

define('TEXT_ALT_URL', 'Interne Link URL:');
define('TEXT_ALT_URL_EXPLAIN', 'Indien ingevuld, zal de pagina-inhoud genegeerd worden en wordt de INTERNE alternatieve URL gebruikt<br />Bijvoorbeeld naar Recensies: index.php?main_page=reviews<br />Bijvoorbeeld naar Mijn Account: index.php?main_page=account en met SSL geactiveerd');

define('TEXT_ALT_URL_EXTERNAL', 'Externe Link URL:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Indien ingevuld, zal de pagina-inhoud genegeerd worden en wordt de EXTERNE alternatieve URL gebruikt<br />Bijvoorbeeld naar de externe link: http://www.sashbox.net');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Sorteervolgorde: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Hoofdstuk/Inhoudsopgave');
define('TEXT_SORT_HEADER_TITLE', 'Koptekst');
define('TEXT_SORT_SIDEBOX_TITLE', 'Sidebox');
define('TEXT_SORT_FOOTER_TITLE', 'Voettekst');
define('TEXT_SORT_PAGE_TITLE', 'Paginatitel');
define('TEXT_SORT_PAGE_ID_TITLE', 'Pagina ID, Titel');

define('TEXT_PAGE_TITLE', 'Titel:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>WAARSCHUWING: Meerdere Linkdefinities</strong>');