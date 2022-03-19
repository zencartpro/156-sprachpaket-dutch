<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.5
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_queue.php 730 2015-12-22 15:49:16Z webchills $
 */

define('HEADING_TITLE', TEXT_GV_NAME . ' wachtrij');

define('TABLE_HEADING_CUSTOMERS', 'Klant');
define('TABLE_HEADING_ORDERS_ID', 'Order nummer.');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Waarde');
define('TABLE_HEADING_DATE_PURCHASED', 'Besteldatum');
define('TABLE_HEADING_ACTION', 'Actie(s)');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Onlangs heeft u een ' . TEXT_GV_NAME . ' gekocht uit onze webwinkel.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Vanwege veiligheidsredenen was dit tegoed niet onmiddelijk aan u vrijgegeven. ' .
                                          'Vanaf dit moment is het tegoed wel beschikbaar, en kunt u onze webwinkel bezoeken en de waarde van de ' . TEXT_GV_NAME . ' via email toesturen aan iemand anders of het voor uzelf gebruiken' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'De ' . TEXT_GV_NAME . '(nen) die u heeft gekocht, hebben een waarde van: %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Wij danken u voor het vertrouwen in ' . STORE_NAME . ' en zien u graag terug!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Aankoop');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Bestelnummer');

define('TEXT_EDIT_ORDER','Wijzig bestelnummer ');
define('TEXT_GV_NONE','Geen ' . TEXT_GV_NAME . ' voor vrijgave');
?>