<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.5
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 729 2011-08-09 15:49:16Z hugo13 $
 */

define('HEADING_TITLE', 'Admin pagina registratie');
define('TEXT_PAGE_KEY', 'Pagina sleutel');
define('TEXT_LANGUAGE_KEY', 'Pagina naam');
define('TEXT_MAIN_PAGE', 'Pagina bestandsnaam');
define('TEXT_PAGE_PARAMS', 'Pagina parameters');
define('TEXT_MENU_KEY', 'Menu');
define('TEXT_DISPLAY_ON_MENU', 'Weergave op het menu?');
define('TEXT_SORT_ORDER', 'Sorteervolgorde');

define('TEXT_EXAMPLE_PAGE_KEY', '(Bijv. mijnModPaginaNaam)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(Bijv. BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(Bijv. FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(Bijv. optie=1 of, meer gebruikelijk, leeglaten)');
define('TEXT_SELECT_MENU', 'Selecteer Menu');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Pagina sleutel niet ingevoerd. Alle admin pagina\'s moeten een unieke pagina sleutel hebben.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Pagina sleutel bestaat reeds. Pagina sleutels moeten uniek zijn.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Taalsleutel niet ingevoerd. Alle Admin paginas moeten een taalsleutel hebben die alle tekst van een menu link definieerd.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'De ingevoerde taaltoets is niet gedefinieerd. Controleer of deze correct is gespeld.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'De bestandsnaam definitie voor de pagina is niet ingevoerd.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'De ingevoerde bestandsnaam definitie bestaat niet. Controleer of deze correct is gespeld.');
define('ERROR_MENU_NOT_CHOSEN', 'Geen menu gekozen. U moet de nieuwe pagina met een menu associëren, ook al zal het niet worden weergegeven op dat menu.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Uw admin pagina is geregistreerd.');
