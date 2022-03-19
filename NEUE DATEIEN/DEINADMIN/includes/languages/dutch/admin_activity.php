<?php
/**
 * @package admin languageDefines Dutch Zen Cart Version 1.5.5e
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php 794 2015-01-22 09:24:50Z webchills $
 */

define('HEADING_TITLE', 'Admin Activiteiten Log Manager');
define('HEADING_SUB1', 'Bekijk of exporteer Logs');
define('HEADING_SUB2', 'Loggeschiedenis opschonen');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Exporteer bestandsformaat:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Exporteer filenaam:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Opslaan naar bestand op de server? (anders wordt het bestand direct gedownload van dit venster)');
define('TEXT_ACTIVITY_EXPORT_DEST','Bestemming: ');
define('TEXT_PROCESSED', 'Verwerkt.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Exporteren afgerond. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'Waarschuwing: Export mislukt. Kon niet met succes naar het bestand schrijven');

define('TEXT_INSTRUCTIONS','<u>Instructies</u><br />U kunt deze pagina gebruiken om uw Zen Cart Admin User Access Activity te exporteren naar een CSV file voor archivering.<br />U zou deze informatie moeten bewaren in het geval van fraude onderzoek als uw site is gehackt. Dit is verplicht voor PCI Compliance.<br />
<ol><li>Kies om op het scherm te bekijken, of om naar een bestand te exporteren.<li>Geef een bestandsnaam op.<li>Klik Opslaan om door te gaan.<li>Kies voor openen of opslaan van het bestand, afhankelijk van wat uw browser aanbied.</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Leeg de Admin Activity Log tabel in de database<br />WAARSCHUWING: MAAK EERST EEN BACKUP VAN UW DATABASE voordat u deze update uitvoerd!</strong><br />The Admin Activity Log is een volgmethode welke de activiteit in de Admin vastlegt. <br />De log kan heel snel, heel groot worden en moet van tijd tot tijd opgeschoond worden.<br />Waarschuwingen worden gegeven bij 50,000 records of 60 dagen,resp welke als eerste zich voordoet.<br /><span class="alert">OPMERKING: Voor PCI Compliance, u bent verplicht om de admin activity log geschiedenis te bewaren voor een periode van 12 maanden.<br />Het beste is om uw logs te archiveren door te kiezen voor EXPORT NAAR CSV en hier boven op save te klikken *VOORDAT* de log data geleegd wordt.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">Waarschuwing!: U staat op het punt om *belangrijke* audit records uit uw database te VERWIJDEREN.</span></strong><br />U moet EERST bevestigen dat u een betrouwbare BACKUP  van uw database heeft voor u verder gaat.<br />Bij doorgaan accepteerdu dat deze informatie zal worden verwijderd en begrijpt u de verantwoordelijkheid tov deze data.<br /><br />I begrijp de consequentie en wens door te gaan met de verwijdering door klikkenvan Reset:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', 'Legen van de Admin Activiteiten Log is <strong>afgerond</strong>');
define('TEXT_NO_RECORDS_FOUND', 'Geen records gevonden met het door u geselecteerde filter.');

define('TEXT_EXPORTFORMAT0', 'Export als HTML (ideaal voor on-screen viewing)');
define('TEXT_EXPORTFORMAT1', 'Export naar CSV (ideal voor het importeren in spreadsheets)');
define('TEXT_EXPORTFORMAT2', 'Export naar TXT');
define('TEXT_EXPORTFORMAT3', 'Export naar XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Welke log data wilt u zien?');
define('TEXT_EXPORTFILTER0', 'Alle gelogde data, ongeacht het gevoeligheidsniveau.');
define('TEXT_EXPORTFILTER1', 'INFO - Algemeen gelogde informatie');
define('TEXT_EXPORTFILTER2', 'OPMERKING - Belangrijke info, welke regelmatig bekeken zou moeten worden');
define('TEXT_EXPORTFILTER3', 'WAARSCHUWING - Activiteiten welke dagelijks bekeken zouden moeten worden');
define('TEXT_EXPORTFILTER4', 'Zowel een  OPMERKING als WAARSCHUWING (veel voorkomende combinatie om te inspecteren).');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Interpretatie van de log data</strong><ul>
<li><strong>Belangrijkheid</strong> - De normen voor loggen zijn over het algemeen beschreven in volgorde belangrijkheid:<ul>
<li><strong>INFO</strong> verwijst naar algemene activiteiten. Deze kunnen opmerkelijke details inhouden.</li>
<li><strong>OPMERKING</strong> verwijst naar activiteiten welke gebruik maakte van hogere voorrechten en kunnen zijn het aanmaken van nieuwe admin gebruikers of toevoegen van een betaal modules. Het duidt ook aan wanneer data wordt verzonden  aan de webpagina zoals risico volle inhoud als ingebedde tags of scripts, als maleware inhoud wordt toegevoegd aan uw product/categorie/paginas door medewerkers of indringer op de website. Deze moeten regelmatig worden onderzocht op afwijkingen  en ongeoorloofde activiteiten.</li>
<li><strong>WAARSCHUWING</strong> is verbonden met KRITISCHE zaken als verwijderen van eenbetaalmoduul of verwijderenvan admin gebruikers. Deze activiteiten zullen problemen geven als ze niet tijdig worden onderkend. Deze zal meerdere malen moeten worden onderzocht, aanbevolen is dagelijks.</li>
</ul>
<li><strong>admin_gebruiker</strong> - Hiermee wordt het gebruikers ID van de gebruikersaccount weergegeven, gevolgd door hun gebruikersnaam van de admin. Indien niet ingelogd, wordt 0 getoond.</li>
<li><strong>pagina_toegang</strong> - Dit geeft de naam van de bezochte pagina aan, zodat u tips geeft over het soort activiteit dat plaatsvindt.</li>
<li><strong>parameters</strong> - Dit is de rest van de URL van de bezochte pagina, en geeft een verdere indicatie van de soort activiteit die door de bezoeker wordt uitgevoerd.</li>
<li><strong>gemarkeerde</strong> - Als dit ingesteld is op 1, dat geeft aan dat u de inhoud die in het veld "postdata" is opgenomen, moet inspecteren op onbevoegde invoer van een script of iframe of andere potentieel gevaarlijke inhoud. Een uitleg van verdachte inhoud verschijnt in het "attentie" veld.</li>
<li><strong>attentie</strong> - Dit bevat suggesties die verband houden met het soort verdachte activiteiten die in het veld "postdata" moeten worden beoordeeld, indien gemarkeerd.</li>
<li><strong>logbericht</strong> - Dit bevat alle berichten die door het systeem zijn opgenomen over de activiteit die plaatsvindt, zoals de installatie van een bepaalde module.</li>
<li><strong>postdata</strong> - Dit bevat de ruwe POST-gegevens (met een aantal gevoelige informatie die is gerebruceerd) voor een makkelijke beoordeling in geval van verdenking van kwaadaardige activiteiten.</li>
</ul></p>');