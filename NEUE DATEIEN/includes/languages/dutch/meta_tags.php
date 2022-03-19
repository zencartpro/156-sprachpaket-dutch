<?php
/**
 * Zen Cart German Specific
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: meta_tags.php 626 2019-04-13 18:48:28Z webchills $
 */

// pagina titel
define('TITLE', 'Zen Cart 1.5.6');

// Site slogan
define('SITE_TAGLINE', 'Duitstalige versie');

// Hier uw eigen kernbergrippen plaatsen over uw site
define('CUSTOM_KEYWORDS', 'ecommerce, open source, E-winkel, online winkelen, webwinkel');

// Language
define('META_TAG_LANGUAGE', 'nl');
// Alleen Home Pagina:
  define('HOME_PAGE_META_DESCRIPTION', '');
  define('HOME_PAGE_META_KEYWORDS', '');

  // NOOT: Indien HOME_PAGE_TITLE leeg is (standaard) zal TITLE en SITE_TAGLINE worden gebruikt.
  define('HOME_PAGE_TITLE', ''); // gewoonlijk leeg laten


// EZ-Pages meta-tags.  Volg dit patroon voor alle ez-paginas waar u metatags hebt gemaakt. Vervang de # met de ezpagina id.
// Als u standaard wilt gebruiken voor enige of de 3 items voor een gegeven pagina, als u niet wil definiëren.
// (vb: de Title tag is niet ingesteld, zodat de gehele breedte standaard kan worden gebruikt.)
// herhaal patroon zoveel als nodig
  define('META_TAG_DESCRIPTION_EZPAGE_#','');
  define('META_TAG_KEYWORDS_EZPAGE_#','');
  define('META_TAG_TITLE_EZPAGE_#', '');

// Per-Page meta-tags. Volg dit patroon voor individuele pagina's die u wilt overschrijven. Dit is handig voornamelijk voor extra pagina's.
// vervang "page_name" met de HOOFDLETTER naam op uw hoofd_pagina= waarde, bijvoorbeeld OVER_ONS of VERZENDINFO enz.
// herhaal patroon zoveel als nodig
  define('META_TAG_DESCRIPTION_page_name','');
  define('META_TAG_KEYWORDS_page_name','');
  define('META_TAG_TITLE_page_name', '');

// Recensie pagina kan een introtekst hebben
define('META_TAGS_REVIEW', 'Beoordelingen: ');

// lijstscheidingsteken voor kernwoorden
// Defineer de standaardsectie weergave/output
define('PRIMARY_SECTION', ' - ');

// defineer de 2e sectie weergave/output
  define('SECONDARY_SECTION', ' - ');

// defineer de derde sectie weergave/output ;-)
define('TERTIARY_SECTION', ' - ');

// Defineer scheidingsteken.. gewoonlijk een spatie of een comma plus een spatie
  define('METATAGS_DIVIDER', ' ');

// Defineeer welke paginas robots/spiders niet moeten indexeren
// Dit word over het algemaan gebruikt voor account-beheer paginas en specifieke SSL paginas, normaal niet nodig hier aanpassingen in te doen.
  define('ROBOTS_PAGES_TO_SKIP','login,logoff,create_account,account,account_edit,account_history,account_history_info,account_newsletters,account_notifications,account_password,address_book,advanced_search,advanced_search_result,checkout_success,checkout_process,checkout_shipping,checkout_payment,checkout_confirmation,cookie_usage,create_account_success,contact_us,download,download_timeout,customers_authorization,down_for_maintenance,password_forgotten,time_out,unsubscribe,info_shopping_cart,gv_faq,gv_redeem,gv_send,popup_image,popup_image_additional,product_reviews_write,ssl_check,shopping_cart,no_account,order_status');


