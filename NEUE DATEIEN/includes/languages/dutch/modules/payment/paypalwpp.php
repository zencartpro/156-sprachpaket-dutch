<?php
/**
* @package languageDefines
* @copyright Copyright 2003-2019 Zen Cart Development Team
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: paypalwpp.php 714 2019-10-16 11:57:24Z webchills $
*/

define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'PayPal Express');

define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'PayPal Express (Pro 2.0 Payflow Edition) (UK)');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'PayPal Payflow Pro - Gateway');
define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Express via Payflow Pro');

  if (IS_ADMIN_FLAG === true) {
if (!defined('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE')) define('MODULE_PAYMENT_PAYPALWPP_MODULE_MODE', 'undefined');
    define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>PayPal Express Checkout</strong>%s<br />' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank">Beheer uw PayPal account.</a>' : '<a href="https://www.paypal.com" target="_blank">Beheer uw PayPal account.</a>') . '<br /><br /><font color="green">Configuratie Instructies:</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal-ec" target="_blank">Aanmelden voor uw PayPal account - klik hier.</a><br />' .
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... en klik "install" Hierboven om PayPal Express Checkout-ondersteuning in te schakelen.<br /><a href="http://www.zen-cart.com/getpaypal" target="_blank">Voor meer gedetailleerde hulp, zie dit FAQ artikel</a><br />') .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '') ? '<br /><span class="alert">2. </span><strong>API geloofsbrieven</strong> uit de API Geloofsbrieven optie in uw PayPal-Profiel instellingen. (Klik <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_get-api-signature&generic-flow=true" target="_blank">hier voor API geloofsbrieven</a>.) <br />Dit moduul gebruikt de <strong>API Handtekening</strong> optie -- u moet de gebruikersnaam, wachtwoord en handtekening ingeven in de velden hieronder.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>PAYFLOW geloofsbrieven</strong> Dit moduul vereist uw <strong>PAYFLOW Partner+Verkoper+Gebruiker+wachtwwoord instelling</strong> ingevuld in de 4 velden hieronder. Deze worden gebruikt om met het Payflow systeem te communiceren en transacties te machtigen op uw account.' : '<span class="alert">2. </span>Zorg ervoor dat u de juiste beveiligingsgegevens hebt ingevoerd voor gebruikersnaam/ww enz, hieronder.') ) .
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br /><br /><span class="alert">3. </span>In uw PayPal account, activeer <strong>Instant Payment Notificatie</strong>:<br />onder "Profile", selecteer <em>Instant Payment Notification Preferences</em><ul style="margin-top: 0.5;"><li>klik de checkbox om IPN te activeren</li><li>als er niet al een URL is gespecificeerd, stel de URL in op:<br /><nobr><pre>'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</pre></nobr></li></ul>' : '') .
'<font color="green"><hr /><strong>Vereisten:</strong></font><br /><hr />*<strong>CURL</strong> Wordt gebruikt voor uitgaande communicatie met de gateway over poorten 80 en 443, dus moet actief zijn op uw hosting server en in staat zijn om SSL te gebruiken.<br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Creditcard');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Snel, Veilig uitchecken met PayPal:');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'PayPal Expres Uitcheck');
  define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'PayPal Direct Betalen');
  define('MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE', 'Creditcard');  //(gebruikt voor payflow transacties)
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Sorry, maar we konden uw creditcard niet verwerken.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'De door u ingevoerde creditcardgegevens bevatten een fout. Controleer het en probeer het opnieuw.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Credit Card Voornaam:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', 'Credit Card Achternaam:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Cardhouders Naam:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Credit Card Type:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Credit Card Nummer:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Credit Card Verloop Datum:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Credit Card publicatie Datum:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV Number:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(op achterzijde credit card)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Je credit card is niet geaccepteerd. Probeer een andere kaart of neem contact op met uw bank voor meer informatie.');
  define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'We hebben uw bestelling niet kunnen verwerken. Probeer het opnieuw, selecteer een alternatieve betaalmethode of neem contact op met de winkel eigenaar voor hulp.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Er is een fout opgetreden toen we de betalingsverwerker probeerden te contacten. Probeer het opnieuw, selecteer een alternatieve betaalmethode of neem contact op met de winkel eigenaar voor hulp.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE', 'Dear store owner,' . "\n" . 'Er is een fout opgetreden bij het starten van een PayPal Express Checkout transactie. Uit beleefdheid is alleen het fout nummer getoond aan de klant. De details van de fout worden hieronder weergegeven.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT', 'ALARM: PayPal Express Uitcheck Fout');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'De adresgegevens die u hebt ingevoerd, lijken niet geldig te zijn of kunnen niet worden aangepast. Selecteer of voeg een ander adres toe en probeer het opnieuw.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'Het adres dat u bij PayPal heeft geselecteerd is geen bevestigd adres. Ga terug naar PayPal en selecteer of voeg een bevestig adres toe en probeer het opnieuw.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal kon deze transactie niet succesvol financieren. Kies alstublieft een andere betaaloptie of bekijk financieringsopties in uw PayPal-account voordat u verder gaat.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED', 'Sorry, PayPal heeft de transactie geweigerd en heeft ons geadviseerd om contact op te nemen met de klantenservice van PayPal voor meer informatie. Selecteer uw alternatieve betaalmethode om uw aankoop af te ronden.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Er is een fout opgetreden toen we uw creditcard hebben geprobeerd. Probeer het opnieuw, selecteer een alternatieve betaalmethode of neem contact op met de winkel eigenaar voor hulp.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'We verontschuldigen ons voor het ongemak, maar de creditcard die u heeft ingevoerd is niet een die we accepteren. Gelieve een andere creditcard te gebruiken.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Er was een probleem met het valideren van uw account. Probeer het opnieuw.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* De cardhouder\'s naam moet tenminste ' . CC_OWNER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* Het credit card nummer moet tenminste ' . CC_NUMBER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT', 'ALARM: Adresverificatie Fout. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT', 'ALARM: Card CVV Code Verificatie Fout. ');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT', ' De bestelling is in afwachting van de beoordeling door de winkelier.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL', ' - U moet uw PayPal API-referenties registreren voordat u geavanceerde transactieverwerking kunt uitvoeren.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'De staat die aan uw account is toegewezen, is niet geldig. Ga alsjeblieft naar uw accountinstellingen en verander het.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Excuses voor het ongemak. De betaling kan niet worden gestart, omdat het PayPal-account dat door de winkelhouder is geconfigureerd, geen PayPal-websitebetalingspro account of PayPal-gatewaydiensten is aangeschaft. Kies een alternatieve betaalmethode voor uw bestelling.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Excuses voor het ongemak. De PayPal-accountverificatie instellingen zijn nog niet opgericht of de beveiligingsinformatie van de API is onjuist. We kunnen uw transactie niet voltooien. Gelieve de winkel eigenaar te melden, zodat ze dit probleem kunnen oplossen.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'We vinden het spijtig maar, het PayPal-account dat door de winkelbeheerder is geconfigureerd, is gevestigd in een land dat momenteel niet wordt ondersteund voor Website Payments Pro. Kies alstublieft een andere betaalmethode om uw bestelling te voltooien.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOOT: Module is nog niet geconfigureerd)</span>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Er is een probleem opgetreden bij het ophalen van transactiegegevens. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR', 'Er is een probleem opgedaan met transacties die overeenkomen met de door u opgegeven criteria. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Er was een probleem om de transactie te annuleren. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Er is een probleem opgetreden bij het terugbetalen van het opgegeven transactiebedrag. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Er was een probleem met de machtiging van de transactie. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Er is een probleem opgetreden met de transactie. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Uw terugbetalingsverzoek is afgewezen door PayPal.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'U heeft een gedeeltelijke terugbetaling gevraagd, maar heeft geen bedrag opgegeven.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'U heeft gevraagd om een volledige terugbetaling, maar heeft het veld Bevestigen niet gecontroleerd om uw bedoeling te verifiëren.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'U heeft een machtiging aangevraagd, maar heeft geen bedrag opgegeven.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'U heeft een opname gevraagd, maar heeft geen bedrag opgegeven.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Bevestig');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'U heeft gevraagd om een transactie te verwijderen, maar heeft het Bevestig-veld niet bevestigd voor verwijdering.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Bevestig');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'U heeft een machtiging aangevraagd, maar heeft het Bevestig-veld niet bevestigd.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'U heeft geld aangevraagd-Capture maar heeft het vak Confirm niet gecontroleerd ter bevestiging.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'PayPal teruggave voor %s geïnitieerd. Transactie ID: %s. Vernieuw het scherm om de bevestigingsgegevens te zien die zijn geüpdatet in de sectie Bestelstatusgeschiedenis / Opmerkingen.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'PayPal Authorisatie voor %s geïnitieerd. Vernieuw het scherm om de bevestigingsgegevens te zien die zijn geüpdatet in de sectie Bestelstatusgeschiedenis / Opmerkingen.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'PayPal Opname voor %s geïnitieerd. Ontvangst ID: %s. Vernieuw het scherm om de bevestigingsgegevens te zien die zijn geüpdatet in de sectie Bestelstatusgeschiedenis / Opmerkingen.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'PayPal Annulerings verzoek geïnitieerd. Transactie ID: %s. Vernieuw het scherm om de bevestigingsgegevens te zien die zijn geüpdatet in de sectie Bestelstatusgeschiedenis / Opmerkingen.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Er was een fout in de poging tot transactie. Raadpleeg de API Reference Guide of transactie logboeken voor gedetailleerde informatie.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Excuses voor het ongemak; Op dit moment kunnen we PayPal echter niet gebruiken om orders te verwerken vanuit de geografische regio die u heeft geselecteerd als uw PayPal-adres. Gelieve verder te gaan met de normale afhandeling en selecteer uit de beschikbare betaalmethoden om uw bestelling te voltooien.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Het lijkt erop dat uw bestelling tweemaal is ingediend. Controleer het via Mijn account om de werkelijke bestelgegevens te zien. Gebruik het formulier Contactformulier als uw bestelling hier niet verschijnt, maar is al betaald uit uw PayPal-account, zodat we onze records kunnen controleren en deze met u kunnen afstemmen.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Klik hier om te betalen via PayPal Express Checkout');

// EC buttons -- Do not change these values
///// You should only use choices listed on this page: https://developer.paypal.com/docs/classic/api/buttons/ or https://www.paypal-techsupport.com/app/answers/detail/a_id/632
  //define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/nl_NL/i/btn/btn_xpressCheckout.gif');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypalobjects.com/webstatic/nl_NL/btn/btn_checkout_pp_142x27.png');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypalobjects.com/nl_NL/i/btn/btn_xpressCheckoutsm.gif');

  //define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'Checkout with PayPal. The safer, easier way to pay.');
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', '');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/nl_NL/i/logo/PayPal_mark_37x23.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/nl_NL/i/logo/PayPal_mark_50x34.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/nl_NL/i/bnr/horizontal_solution_PP.gif');
  //define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/nl_NL/i/bnr/horizontal_solution_PPeCheck.gif');
  define('MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG', 'https://www.paypalobjects.com/nl_NL/i/btn/btn1_for_hub.gif');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.
// A BETTER WAY, HOWEVER, is to simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal EC settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
 ////// Styling of pseudo cart contents display section
  //define('MODULE_PAYMENT_PAYPAL_LOGO_IMAGE', ''); // https path to your customized logo
  //define('MODULE_PAYMENT_PAYPAL_CART_BORDER_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Voornaam:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Achternaam:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Bedrijfsnaam:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresnaam:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Straat:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Plaats:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Provincie:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Postcode:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Land:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'E-mail koper:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Koper ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Status koper:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Status adres:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Betaalwijze:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Status betaling:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Pending Reason:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Factuur:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Betaaldatum:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Valuta:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Bruto hoeveelhied:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Toeslag betaalwijze:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Wisselkoers:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Items in winkelwagen:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Type:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Parent Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Order Terugbetalingen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Als u deze bestelling in zijn geheel wilt terugbetalen, klik hier:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Doe volledige terugbetaling');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Doe gedeeltelijke terugbetaling');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... Of voer de gedeelte in ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Voer de ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'Terugbetaalbedrag hier en klik op Partial Refund');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*Een volledige terugbetaling mag niet worden uitgereikt nadat een gedeeltelijke terugbetaling is toegepast. <br /> * Meerdere gedeeltelijke restituties zijn toegestaan tot het resterende onbetaalde saldo.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Opmerking om aan de klant te tonen:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Terugbetaald door winkel manager.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Bevestig: ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS', 'Systeem opmerkingen: ');
  define('MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG', 'Beschermings kwalificatie:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Order Authorisaties</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Als u een deel van deze bestelling wilt toestaan, vul hier het bedrag in:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Authorisatie');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Vastleggen van vergunningen</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Als u al of een deel van de uitstaande geautoriseerde bedragen voor deze bestelling wilt vastleggen, voert u het Opname bedrag in en selecteert u of dit de definitieve opname voor deze bestelling is. Controleer het bevestigingsvak voordat u uw opnameverzoek verzendt.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Vastleggen');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Bedrag vastleggen:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Dit is de laatste opname?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Opmerking om aan de klant te tonen:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Bedankt voor je bestelling.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Bevestig: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Annuleer Order Authorisaties</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Als u een machtiging wilt annuleren, voert u hier de autorisatie-ID in en bevestig:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Opmerking om aan de klant te tonen:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Bedankt voor uw steun. Kom nog eens terug.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Annuleer');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Trans. State:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Auth. Code:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Adres match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Dagen om te vestigen:');

// this text is used to announce the username/password when the module creates the customer account and emails data to them:
  define('EMAIL_EC_ACCOUNT_INFORMATION', 'Uw accountinloggegevens, die u kunt gebruiken om uw aankoop te beoordelen, zijn als volgt:');

  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Eenmalige kosten behorend bij ');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT', 'Toeslag');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG', 'Administratie en verzendkosten');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Kortingen');
  define('MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG', 'Krediet toegekend, zoals kortingsbonnen, cadeaukaarten, etc');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT', 'Betaling vanwege fraude Status: ');
  define('MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO', 'Dit is een geautomatiseerde kennisgeving om u te adviseren dat PayPal de betaling voor een nieuwe bestelling heeft gemarkeerd als Required Payment Review door hun Fraude team. Normaal gesproken is de review binnen 36 uur afgerond. Het wordt sterk geadviseerd dat u de bestelling niet verzendt totdat de betaling is voltooid. U kunt de meest recente status van de bestelling zien door u in te loggen op uw PayPal-account en de recente transacties te bekijken.');

  define('MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS', 'PROBLEEM: We vinden het spijtig. PayPal heeft onverwacht een leeg adres teruggegeven. <br /> Om uw aankoop af te ronden, vul alstublieft uw adres in door op "Aanmelden" te klikken. Knop hieronder om een account in onze winkel te maken. Dan kunt u PayPal nogmaals selecteren wanneer u doorgaat met het afrekenen. Onze excuses voor het ongemak. Als u problemen heeft met de afhandeling, klik dan op de link Contact opnemen om de details aan ons te verklaren, zodat we u kunnen helpen bij uw aankoop en het probleem in de toekomst voorkomen. Bedankt.');

  define('MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS', 'Alle artikelen in uw winkelmandje (Zie details in de winkel en op uw winkelbewijs).');
define('MODULES_PAYMENT_PAYPALWPP_MESSAGE_STACK_CHECKOUT_SHIPPING', 'Sie zahlen mit PayPal und verwenden eine bei PayPal hinterlegte Lieferadresse.<br/>Wir möchten sicherstellen, dass diese Lieferadresse korrekt ist, daher haben wir Sie wieder auf diese Seite geleitet.<br/>Bitte prüfen Sie die Lieferanschrift und ändern Sie sie falls das nötig sein sollte..<br/>Adresse korrekt? Fein!<br/>Clicken Sie rechts unten auf weiter und bestätigen Sie dann im letzten Schritt nochmals mit dem Button Kaufen.<br/>PayPal Zahlung und Bestellung werden erst durchgeführt, wenn Sie die Bestellung auf diese Weise bestätigen.');