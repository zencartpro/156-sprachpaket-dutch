<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: backup_mysql.php 730 2015-12-22 15:49:16Z webchills $
 */

// define the locations of the mysql utilities.  Typical location is in '/usr/bin/' ... but not on Windows servers.
// try 'c:/mysql/bin/mysql.exe' and 'c:/mysql/bin/mysqldump.exe' on Windows hosts ... change drive letter and path as needed
define('LOCAL_EXE_MYSQL',     '/usr/bin/mysql');  // used for restores
define('LOCAL_EXE_MYSQLDUMP', '/usr/bin/mysqldump');  // used for backups

// the following are the language definitions
define('HEADING_TITLE', 'Database Backup Manager - MySQL');
define('WARNING_NOT_SECURE_FOR_DOWNLOADS','<span class="errorText">NOOT: SSL is niet ingeschakeld. Geen enkele download van deze pagina zal worden versleuteld. Backup en Herstellen zal wel goed werken, maar de download/upload bestanden van/naar de server zijn een veiligheids risico.');
define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Grootte');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nieuwe Backup');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Lokaal Herstellen');
define('TEXT_INFO_NEW_BACKUP', 'Onderbreek het back-up proces niet, wat een paar minuten kan duren.');
define('TEXT_INFO_UNPACK', '<br><br>(na uitpakken bestand vanuit het archief)');
define('TEXT_INFO_RESTORE', 'Onderbreek het restore proces niet. <br> <br> Hoe groter de backup, hoe langer dit proces duurt!<br><br>Indien mogelijk gebruik dan de mysql client.<br><br>Bijvoorbeeld:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Onderbreek het restauratieproces niet. <br> <br> Hoe groter de backup, hoe langer dit proces duurt!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Het geupload bestand moet een ruwe sql tekst bestand zijn.');
define('TEXT_INFO_DATE', 'Datum:');
define('TEXT_INFO_SIZE', 'Grootte:');
define('TEXT_INFO_COMPRESSION', 'Compressie:');
define('TEXT_INFO_USE_GZIP', 'Gebruik GZIP');
define('TEXT_INFO_USE_ZIP', 'Gebruik ZIP');
define('TEXT_INFO_SKIP_LOCKS', 'Sla Lock optie over (controleer dit als u een LOCK TABLES permissions fout krijgt)');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Geen Compressie (Pure SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Download zonder op te slaan op server');
define('TEXT_INFO_BEST_THROUGH_HTTPS', '(Veiliger via een veilige HTTPS connectie)');
define('TEXT_DELETE_INTRO', 'Weet u zeker dat u deze backup wilt verwijderen?');
define('TEXT_NO_EXTENSION', 'Neen');
define('TEXT_BACKUP_DIRECTORY', 'Backup Directorie:');
define('TEXT_LAST_RESTORATION', 'Laatste Restore:');
define('TEXT_FORGET', '(Vergeten)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fout: Backup directory bestaat niet. Instellen in configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Fout: Backup directorie is niet beschrijfbaar.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Fout: Downloadlink niet aanvaardbaar.');
define('ERROR_CANT_BACKUP_IN_SAFE_MODE','FOUT: Dit backup script werkt zelden wanneer Safe_Mode is ingeschakeld of open_basedir beperkingen zijn van kracht.<br />Als u geen fouten krijgt om een back-up te maken, controleer dan of het bestand minder dan 200kb is. Zo ja, dan is de backup waarschijnlijk onbetrouwbaar.');
define('ERROR_EXEC_DISABLED','Fout: Het commando van uw servers "exec () " is uitgeschakeld. Dit script kan niet worden uitgevoerd. Vraag uw host als ze bereid zijn om PHP exec () opnieuw in te schakelen.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Fout: kon het opgegeven bestand niet verwijderen. U moet mogelijk FTP gebruiken om het bestand te verwijderen, vanwege een beperking van de serverrechten configuratie.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succes: De laatste restore datum is verwijderd.');
define('SUCCESS_DATABASE_SAVED', 'Succes: De database is opgeslagen.');
define('SUCCESS_DATABASE_RESTORED', 'Succes: De database is hersteld.');
define('SUCCESS_BACKUP_DELETED', 'Succes: De backup is verwijderd.');
define('FAILURE_DATABASE_NOT_SAVED', 'Fout: De database is NIETopgeslagen.');
define('FAILURE_DATABASE_NOT_SAVED_UTIL_NOT_FOUND', 'Fout: Kan het MYSQLDUMP-back-up programma niet vinden. BACKUP MISLUKT.');
define('FAILURE_DATABASE_NOT_RESTORED', 'Fout: de database is mogelijk niet goed hersteld. Controleer het zorgvuldig.');
define('FAILURE_DATABASE_NOT_RESTORED_FILE_NOT_FOUND', 'Fout: De database is NIET hersteld. FOUT: Bestand niet gevonden: %s');
define('FAILURE_DATABASE_NOT_RESTORED_UTIL_NOT_FOUND', 'Fout: Kan het MYSQL-restoreprogramma niet vinden. RESTORE MISLUKT.');
define('FAILURE_BACKUP_FAILED_CHECK_PERMISSIONS','De back-up is mislukt omdat er een fout was met het starten van het back-upprogramma (mysqldump of mysqldump.exe). <br /> Als u op Windows 2003-server draait, moet u mogelijk toestemming wijzigen op cmd.exe om speciale toegang tot het internet gastaccount mogelijk te maken Om te lezen/uitvoeren. <br /> U moet met uw webhost overleggen over waarom exec() commando mislukt wanneer u de mysqldump binary/programma uitvoert.');