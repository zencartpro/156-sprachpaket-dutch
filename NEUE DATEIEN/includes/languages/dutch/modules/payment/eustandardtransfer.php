<?php
/**
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: eustandardtransfer.php 574 2015-12-23 20:36:14 webchills $
*/
define('MODULE_PAYMENT_EUTRANSFER_TEXT_TITLE', 'Postwissel');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_DESCRIPTION', 
'<div class="eustandardtransferdescription">Gebruik de volgende details om het bedrag van uw order over te maken:<br />' .
'<br />Bank name:  ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKNAM) .
'<br />Account Name: ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCNAM) . 
'<br />IBAN:    ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCIBAN) .
'<br />BIC/SWIFT:   ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKBIC) .
'<br/>Uw order zal worden verwerkt als wij de betaling hebben ontvangen.</div>');
   
define('MODULE_PAYMENT_EUTRANSFER_TEXT_EMAIL_FOOTER', 
"Gebruik de volgende details om het bedrag van uw order over te maken:\n" .
"\nBank naam:  " . MODULE_PAYMENT_EUTRANSFER_BANKNAM .
"\nAccount Naam: " . MODULE_PAYMENT_EUTRANSFER_ACCNAM . 
"\nIBAN:    " . MODULE_PAYMENT_EUTRANSFER_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_EUTRANSFER_BANKBIC . 
"\n\nUw order zal worden verwerkt als wij de betaling hebben ontvangen.");