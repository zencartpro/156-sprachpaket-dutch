<?php

/**
 * SALES REPORT 3.1
 *
 * The language file contains all the text that appears on the report. The first set of
 * configuration defines actually impact the report's output and behavior.
 *
 * @author     Frank Koehl (PM: BlindSide)
 * @author     Conor Kerr <conor.kerr_zen-cart@dev.ceon.net>
 * @updated by stellarweb to work with version 1.5.0 02-29-12 
 * @copyright  Portions Copyright 2003-2006 Zen Cart Development Team
 * @copyright  Portions Copyright 2003 osCommerce
 * @license    http://www.gnu.org/copyleft/gpl.html   GNU Public License V2.0
 */


/*
** CONFIGURATION DEFINES
*/
//////////////////////////////////////////////////////////
// DEFAULT SEARCH OPTIONS
// These values are loaded into the report when (a) the
// report is laoded fresh, or (b) when the defaults button
// is pressed.  If you prefer to have no option set for a
// given entry, you may leave its define empty. Valid
// entries are in the comments following each define.
// Default settings are in brackets [].
//
define('DEFAULT_DATE_SEARCH_TYPE', 'preset'); // ['preset'], 'Klant' (mag niet leeg zijn als de volgende 3 opties zijn ingesteld!)
define('DEFAULT_DATE_PRESET', 'YTD'); // ['gisteren'], 'vandaag', 'deze maand', 'laatste_maand', 'laatste_jaar', 'YTD', 'klant'
define('DEFAULT_START_DATE', ''); // (date in mm-dd-yyyy formaat)
define('DEFAULT_END_DATE', ''); // (date in mm-dd-yyyy formaat)

define('DEFAULT_DATE_TARGET', 'purchased'); // ['verkocht'], 'status'
define('DEFAULT_DATE_STATUS', ''); // (status nummer) [laagste status nummer]
define('DEFAULT_PAYMENT_METHOD', ''); // [enige invoer in `orders.payment_module_code` veld]
define('DEFAULT_CURRENT_STATUS', ''); // [status nummer]
define('DEFAULT_MANUFACTURER', ''); // manufacturers_id van Admin > Catalog > Producenten ("mID=##" in the URL)

define('DEFAULT_TIMEFRAME', 'year'); // ['dag'], 'week', 'maand', 'jaar'
define('DEFAULT_TIMEFRAME_SORT', ''); // ['asc'], 'desc'
define('DEFAULT_DETAIL_LEVEL', 'order'); // ['timeframe'], 'product', 'order', 'matrix'

// order line items: 'oID', 'last_name', 'num_products', 'goods', 'shipping', 'discount', 'gc_sold', 'gc_used', 'grand'
// product line items: 'pID', 'name', 'manufacturer', 'model', 'base_price', 'quantity', 'onetime_charges', 'grand'
define('DEFAULT_LI_SORT_A', 'model');
define('DEFAULT_LI_SORT_ORDER_A', ''); // 'asc', 'desc'
define('DEFAULT_LI_SORT_B', 'name');
define('DEFAULT_LI_SORT_ORDER_B', ''); // 'asc', 'desc'

define('DEFAULT_OUTPUT_FORMAT', 'display'); // ['display'], 'print', 'csv'
define('DEFAULT_AUTO_PRINT', ''); // 'true', ['false']
define('DEFAULT_CSV_HEADER', ''); // 'true', ['false']


//////////////////////////////////////////////////////////
// DISPLAY EMPTY TIMEFRAME LINES
// Setting this define to true will disable displaying
// a timeframe line if that timeframe is empty.  By
// default, an empty timeframe displays the value of the
// define TEXT_NO_DATA.
//
// Be aware, if this is enabled and your search yields
// no results at all, the screen will look as if no search
// was performed (which is why this is disabled by default)
//
define('DISPLAY_EMPTY_TIMEFRAMES', false);

//////////////////////////////////////////////////////////
// REPORTING A SUBSET OF CUSTOMERS / PRODUCTS
// By checking the boxes to 'Only Include Specific customers
// or Products (SEARCH_SPECIFIC_CUSTOMERS/PRODUCTS),
// only orders for those customers / products will be
// included in the result. By default, the included customers/
// products will be printed above the results table. If this
// gets too long, this printout can be disabled with
// the DISPLAY booleans below.
//
// If you often want a specific product, you can set a 
// default here, e.g.:
// define('INCLUDE_PRODUCTS', '10, 15');
//
define('INCLUDE_PRODUCTS', '');
define('INCLUDE_CUSTOMERS', '');
define('DISPLAY_TABLE_HEADING_CUSTOMERS', true);
define('DISPLAY_TABLE_HEADING_PRODUCTS', true);
define('TEXT_CUSTOMER_TABLE_HEADING', ' Orders for: ');  //Prefix used to print before customer name(s) when filtering by customer


//////////////////////////////////////////////////////////
// PRODUCT MANUFACTURERS COLUMN
// Setting this define to true will display the
// manufacturer on each product line item, and will default
// to the value of TEXT_NONE if there is no manufacturer.
// False will remove the manufacturer column from the report.
//
define('DISPLAY_MANUFACTURER', false);


//////////////////////////////////////////////////////////
// ONE-TIME FEES COLUMN
// If your store does not have *any* one-time fees on its
// products, you can disable displaying the column.
//
// Note that this switch does not affect math calculations,
// so if you happen to have a product with fees attached,
// they will still be accounted for and appear in the total.
//
define('DISPLAY_ONE_TIME_FEES', false);


//////////////////////////////////////////////////////////
// DECIMAL PLACES IN AVERAGES
// Sets the number of decimal places displayed in averages
// on timeframe statistics display
//
define('NUM_DECIMAL_PLACES', 2);


//////////////////////////////////////////////////////////
// TIMEFRAME DATE DISPLAY
// These control the display format of the start and end
// dates of each timeframe line.  Each define corresponds
// to the timeframe of its namesake.  See the PHP manual
// entry on the date() function for a table on the accepted
// formatting characters: http://us2.php.net/date
//
if (strtolower(DATE_FORMAT) == 'm/d/y') {
  // Use US date format (m/d/Y)
  define('TIME_DISPLAY_DAY', 'n-j-Y');
  define('TIME_DISPLAY_WEEK', 'n-j-Y');
  define('TIME_DISPLAY_MONTH', 'n-j-Y');
  define('TIME_DISPLAY_YEAR', 'n-j-Y');
  define('DATE_SPACER', ' thru<br/>&nbsp;&nbsp;&nbsp;');
} else if (strtolower(DATE_FORMAT) == 'd/m/y') {
  // Use UK date format (d/m/Y)
  define('TIME_DISPLAY_DAY', 'jS-M-y');
  define('TIME_DISPLAY_WEEK', 'jS-M-y');
  define('TIME_DISPLAY_MONTH', 'jS-M-y');
  define('TIME_DISPLAY_YEAR', 'jS-M-y');
  define('DATE_SPACER', ' to<br/>&nbsp;&nbsp;&nbsp;');
}


//////////////////////////////////////////////////////////
// EXCLUDE SPECIFIED PRODUCTS
// Prevents specified products from appearing on the sales
// report at all.  **ADDING PRODUCTS TO THIS DEFINE WILL
// IMPACT TOTALS CALCULATIONS!**
//
// The value of the product will be excluded from totals
// for gc_sold, gc_sold_qty, goods, num_products, and
// diff_products.
//
// The values for gc_used, gc_used_qty, discount,
// discount_qty, tax, and shipping all come from the
// orders_total table, and so CANNOT be excluded based
// on product ID.
//
// If an order is made up entirely of excluded products,
// and has no shipping, discounts, tax, or used gift
// certificates, it will have a total of 0.  In this
// situation, the order will not be displayed in the results.
//
// EXAMPLE: define('EXCLUDE_PRODUCTS', serialize(array(25, 14, 43)) );
//
define('EXCLUDE_PRODUCTS', serialize(array( )));



/*
** LANGUAGE DEFINES
*/
// Search menu heading
define('PAGE_HEADING', 'Verkoop Rapport');
define('HEADING_TITLE_SEARCH', '1. Verzamelen &amp; Filter Data');
define('HEADING_TITLE_SORT', '2. Sorteer &amp; Resultaten opgeven');
define('HEADING_TITLE_PROCESS', '3. Genereer Rapport');
define('SEARCH_TIMEFRAME', 'Tijdsbestek');
define('SEARCH_TIMEFRAME_DAY', 'Dagelijks');
define('SEARCH_TIMEFRAME_WEEK', 'Weekelijks');
define('SEARCH_TIMEFRAME_MONTH', 'Maandelijks');
define('SEARCH_TIMEFRAME_YEAR', 'Jaarlijks');
define('SEARCH_TIMEFRAME_SORT', 'Tijdsbestek Sorteren');
define('SEARCH_DATE_PRESET', 'Vooraf ingestelde datumbereik');
define('SEARCH_DATE_CUSTOM', 'Aangepaste datumbereik');
define('SEARCH_DATE_TODAY', 'Vandaag (%s)');
define('SEARCH_DATE_YESTERDAY', 'Gisteren (%s)');
define('SEARCH_DATE_LAST_MONTH', 'Laatste Maand (%s)');
define('SEARCH_DATE_THIS_MONTH', 'Deze Maand (%s)');
define('SEARCH_DATE_LAST_YEAR', 'Laatste Jaar (%s)');
define('SEARCH_DATE_YTD', 'YTD (%s)');
define('SEARCH_START_DATE', 'Start Datum');
define('SEARCH_END_DATE', 'End Date (inclusief)');
define('SEARCH_DATE_FORMAT', 'mm/dd/yyyy');
define('SEARCH_DATE_TARGET', 'Zoek datum van...');
define('SEARCH_PAYMENT_METHOD', 'Betaal Methode');
define('SEARCH_PAYMENT_METHOD_TO_OMIT','Betalings Methode weglaten');
define('SEARCH_CURRENT_STATUS', 'Huidige Order Status');
define('SEARCH_SPECIFIC_CUSTOMERS', 'Alleen gespecificeerde klant-IDs (komma gescheiden lijst)');
define('SEARCH_SPECIFIC_PRODUCTS', 'Alleen gespecificeerde product-IDs (komma gescheiden lijst)');
define('SEARCH_MANUFACTURER', 'Product Producent');
define('SEARCH_DETAIL_LEVEL', 'Getoonde Informatie');
define('SEARCH_OUTPUT_FORMAT', 'Output Formaat');
define('SEARCH_SORT_PRODUCT', 'Sorteer products ...');
define('SEARCH_SORT_ORDER', 'Sorteer orders...');
define('SEARCH_SORT_THEN', 'Sorteer daarna volgens...');
define('BUTTON_SEARCH', 'Laat mij het bedrag zien!');
define('BUTTON_LOAD_DEFAULTS', 'Rapport standaards');
define('BUTTON_DEFAULT_SEARCH', 'Snelle zoek');
define('SEARCH_WAIT_TEXT', 'Bezig, een ogenblik...');


// Form element text
// radio buttons
define('RADIO_DATE_TARGET_PURCHASED', 'Order aankoop');
define('RADIO_DATE_TARGET_STATUS', 'Toegewezen status (selecteer onder)');
define('RADIO_TIMEFRAME_SORT_ASC', 'Oudste bovenaan');
define('RADIO_TIMEFRAME_SORT_DESC', 'Nieuwste bovenaan');
define('RADIO_LI_SORT_ASC', 'Oplopend');
define('RADIO_LI_SORT_DESC', 'Aflopend');

// dropdown menus
define('SELECT_DETAIL_TIMEFRAME', 'Totalen tijdsbestekken');
define('SELECT_DETAIL_PRODUCT', '&nbsp;+ Productlijn Items');
define('SELECT_DETAIL_ORDER', '&nbsp;+ Orderlijn Items');
define('SELECT_DETAIL_MATRIX', 'Tijdsbestek Statistieken');
define('SELECT_OUTPUT_DISPLAY', 'Toon op scherm');
define('SELECT_OUTPUT_PRINT', 'Print Formaat');
define('SELECT_OUTPUT_CSV', 'CSV Export');
define('SELECT_PRODUCT_ID', 'Product ID');
define('SELECT_QUANTITY', 'Hoeveelheid');
define('SELECT_LAST_NAME', 'Klant. Laatste Naam');

// checkboxes
define('CHECKBOX_AUTO_PRINT', 'Print rapport automatisch');
define('CHECKBOX_CSV_HEADER', 'Kolom titels in de 1e rij');
define('CHECKBOX_NEW_WINDOW', 'Open resultaat in nieuw scherm');


// Report Column Headings
// Timeframe
define('TABLE_HEADING_TIMEFRAME', 'Tijdsbestek');
define('TABLE_HEADING_NUM_ORDERS', 'Aantal Orders');
define('TABLE_HEADING_NUM_PRODUCTS', 'Aantal Producten');
define('TABLE_HEADING_TOTAL_GOODS', 'Goederen waarde');
define('TABLE_HEADING_TAX', 'BTW');
define('TABLE_HEADING_GOODS_TAX', 'Goederen belasting');
define('TABLE_HEADING_ORDER_RECORDED_TAX', 'Bestel Rec. belasting');
define('TABLE_HEADING_SHIPPING', 'Verzenden');
define('TABLE_HEADING_DISCOUNTS', 'Kortingen');
define('TABLE_HEADING_GC_SOLD', 'Gift Cert. verkocht');
define('TABLE_HEADING_GC_USED', 'Gift Cert. gebruikt');
define('TABLE_HEADING_TOTAL', 'Totaal');
define('TABLE_FOOTER_TIMEFRAMES', ' Tijdsbestek');

// Order Line Items
define('TABLE_HEADING_ORDERS_ID', 'Order ID');
define('TABLE_HEADING_CUSTOMER', 'Klant');
define('TABLE_HEADING_ORDER_TOTAL', 'Order Totaal');
define('TABLE_HEADING_ORDER_TOTAL_VALIDATION', 'Niet geldig');

// Product Line Items
define('TABLE_HEADING_PRODUCT_ID', 'Prod ID');
define('TABLE_HEADING_PRODUCT_NAME', 'Product Naam');
define('TABLE_HEADING_MANUFACTURER', 'Producent');
define('TABLE_HEADING_MODEL', 'Model No.');
define('TABLE_HEADING_BASE_PRICE', 'Basis Prijs');
define('TABLE_HEADING_QUANTITY', 'Aant.');
define('TABLE_HEADING_ONETIME_CHARGES', 'eenmalige kosten');
define('TABLE_HEADING_PRODUCT_TOTAL', 'Product Totaal');

// Data Matrix
define('MATRIX_GENERAL_STATS', 'Algemene Statistieken');
define('MATRIX_ORDER_REVENUE', 'Totaal Omzet');
define('MATRIX_ORDER_PRODUCT_COUNT', 'Totale Producttelling');
define('MATRIX_LARGEST', 'Grootste Order: ');
define('MATRIX_SMALLEST', 'Kleinste Order: ');
define('MATRIX_AVERAGES', 'Gemiddelde');
define('MATRIX_AVG_ORDER', '&nbsp;order waarde');
define('MATRIX_AVG_PROD_ORDER', '&nbsp;producten per order');
define('MATRIX_AVG_PROD_ORDER_DIFF', '&nbsp;unieke producten per order');
define('MATRIX_AVG_ORDER_CUST', '&nbsp;orders per klant');
define('MATRIX_ORDER_STATS', 'Order Statistieken');
define('MATRIX_TOTAL_PAYMENTS', 'Betaal methoden');
define('MATRIX_TOTAL_CC', 'Credit Cards');
define('MATRIX_TOTAL_SHIPPING', 'Verzend methoden');
define('MATRIX_TOTAL_CURRENCIES', 'Gebruikte valuta');
define('MATRIX_TOTAL_CUSTOMERS', 'Unieke Klanten');
define('MATRIX_PRODUCT_STATS', 'Product Statistieken');
define('MATRIX_PRODUCT_SPREAD', 'Product spreiding');
define('MATRIX_PRODUCT_REVENUE_RATIO', 'Totaal omzet %');
define('MATRIX_PRODUCT_QUANTITY_RATIO', 'Totaal aantal %');


// CSV Export
define('CSV_FILENAME_PREFIX', 'verkopen_');
define('CSV_HEADING_START_DATE', 'Start Datum');
define('CSV_HEADING_END_DATE', 'Eind Datum');
define('CSV_HEADING_LAST_NAME', 'Achternaam');
define('CSV_HEADING_FIRST_NAME', 'Voornaam');
define('CSV_SEPARATOR', ',');
define('CSV_NEWLINE', "\n");


// Print Format
define('PRINT_DATE_TO', ' waar ');
define('PRINT_DATE_TARGET', 'Datum van ');
define('PRINT_TIMEFRAMES', '%s tijdbereik gesorteerd %s');
define('PRINT_DATE_PURCHASED', 'order creatie');
define('PRINT_DATE_STATUS', 'toegewezen status');
define('PRINT_ORDER_STATUS', '%s [%s]');
define('PRINT_PAYMENT_METHOD', 'Betaal Methode:');
define('PRINT_CURRENT_STATUS', 'Huidige Order Status:');
define('PRINT_DETAIL_LEVEL', 'Tonen ');

// javascript pop-up alert window
define('ALERT_JS_HIGHLIGHT', '#FF40CF');
define('ALERT_MSG_START', "Er zijn 1 of meer fouten met de zoek parameters:");
define('ALERT_DATE_INVALID', "> Een van de ingegeven datums is ongeldig");
define('ALERT_DATE_MISSING', "> U moet een datum kiezen, of een bereik definiëren");
define('ALERT_CSV_CONFLICT', "> CSV uitdraai is niet beschikbaar voor " . SELECT_DETAIL_MATRIX . " toon");
define('ALERT_MSG_FINISH', "corrigeer de items en stuur opnieuw uw zoek in.");

// Other text defines
define('ERROR_MISSING_REQ_INFO', 'Fout: Verplichte velden zijn leeg');
define('ALT_TEXT_SORT_ASC', 'Sorteer in AFLOPENDE bestelling');
define('ALT_TEXT_SORT_DESC', 'Sorteer in OPLOPENDE bestelling');
define('TEXT_REPORT_TIMESTAMP', 'Rapport Tijd: ');
define('TEXT_PARSE_TIME', 'Gebruikte tijd: %s sec.');
define('TEXT_EMPTY_SELECT', '(geeft niets)');
define('TEXT_QTY', '| Aant: ');
define('TEXT_DIFF', '| Verschil: ');
define('TEXT_SAME', '| (gelijk)');
define('TEXT_SAME_ONE', '| --');
define('TEXT_PRINT_FORMAT', 'toon rapport in print formaat');
define('TEXT_PRINT_FORMAT_TITLE', 'TIP: klik \'' . PAGE_HEADING . '\' om terug te keren naar scherm');
define('TEXT_NO_DATA', '-- Geen ORDERS in dit tijdsbestek --');