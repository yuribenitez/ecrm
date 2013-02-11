<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/en/msa/master_subscription_agreement_11_April_2011.pdf
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_UW_START_DESC3' => 'Click Next to perform a check on your system to make sure that the system is ready for the upgrade. The check includes file permissions, database privileges and server settings.',
  'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START' => 'Finding all pertinent files to check.',
  'LBL_UW_TITLE_END' => 'Debrief',
  'LBL_UW_FOLLOWING_MODULES_UPGRADED' => 'The following modules are detected as Studio-customized and have been upgraded',
  'LBL_START_UPGRADE_IN_PROGRESS' => 'Start in progress',
  'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Preflight Check in Progress',
  'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Upgrade Scripts in Progress',
  'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Upgrade Summary in Progress',
  'LBL_UPGRADE_IN_PROGRESS' => 'in progress',
  'LBL_UPGRADE_TIME_ELAPSED' => 'Time elapsed',
  'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Upgrade Cancel and Cleanup in Progress',
  'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Upload Checks in Progress',
  'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Uploading Upgrade Package',
  'LBL_UW_DORP_THE_OLD_SCHMEA' => 'Would you like Sugar to drop the depricated 451 Schema ?',
  'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Upgrade Wizard Drops old 451 schema',
  'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manual Drop Schema Post Upgrade',
  'LBL_UW_DROP_SCHEMA_METHOD' => 'Old Schema Drop Method',
  'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Show Old Schema that could be dropped',
  'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
  'LBL_LAYOUT_MERGE_DESC' => 'There are new fields available which have been added as part of this upgrade and can be automatically appended to your existing module layouts. To learn more about the new fields, please refer to the Release Notes for the version to which you are upgrading.<br /><br />If you do not wish to append the new fields, please uncheck the module, and your custom layouts will remain unchanged. The fields will be available in Studio after the upgrade.',
  'ERR_UW_PHP_FILE_ERRORS' => 
  array (
    1 => '1<br />The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    2 => '2<br />The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    3 => '3<br />The uploaded file was only partially uploaded.',
    4 => '4<br />No file was uploaded.',
    5 => '5<br />Unknown error.',
    6 => '6<br />Missing a temporary folder.',
    7 => '7<br />Failed to write file to disk.',
    8 => '8<br />File upload stopped by extension.',
  ),
  'LBL_UW_CHARSET_SCHEMA_CHANGE' => 'Character Set Schema Changes',
  'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP Setting: Call Time Pass By Reference',
  'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parameter',
  'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES' => 'MS SQL Server & PHP Magic Quotes GPC',
  'LBL_UW_COMPLIANCE_PHP_INI' => 'Location of php.ini',
  'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimum PHP Version',
  'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP Setting: Safe Mode',
  'LBL_UW_COMPLIANCE_TITLE' => 'Server Settings Check',
  'LBL_UW_COMPLIANCE_TITLE2' => 'Detected Settings',
  'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
  'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE' => 'Custom Table Schema Changes',
  'LBL_UW_DB_CHOICE1' => 'Upgrade Wizard Runs SQL',
  'LBL_UW_DB_CHOICE2' => 'Manual SQL Queries',
  'LBL_UW_DB_INSERT_FAILED' => 'INSERT failed - compared results differ',
  'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
  'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
  'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
  'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
  'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
  'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
  'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
  'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
  'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
  'LBL_UW_DB_PERMS' => 'Necessary Privilege',
  'LBL_UW_DESC_MODULES_INSTALLED' => 'The following upgrade packages have been installed:',
  'LBL_UW_END_DESC' => 'The system has been upgraded.',
  'LBL_UW_FILE_NEEDS_DIFF' => 'File Requires Manual Diff',
  'LBL_UW_NONE' => 'None',
  'LBL_UW_START_DESC2' => 'Note: We recommend that you backup the Sugar database and the system files (all of the files in the SugarCRM folder) before upgrading your production system. We highly recommend that you perform a test upgrade on a cloned instance of your production system first.',
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'DESC_MODULES_INSTALLED' => 'Järgnevad moodulid on installitud:',
  'DESC_MODULES_QUEUED' => 'Järgnevad moodulid on installimiseks valmis:',
  'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Ei saa gruppi määratleda',
  'ERR_UW_CANNOT_DETERMINE_USER' => 'Ei saa omanikku määratleda',
  'ERR_UW_CONFIG_WRITE' => 'Viga config.php uue versiooni info uuendamisel.',
  'ERR_UW_CONFIG' => 'Palun muuda oma config.php fail kirjutatavaks ja lae see leht üles.',
  'ERR_UW_DIR_NOT_WRITABLE' => 'Kataloog pole kirjutatav',
  'ERR_UW_FILE_NOT_COPIED' => 'Fail pole kopeeritud',
  'ERR_UW_FILE_NOT_DELETED' => 'Probleem paketi eemaldamisel',
  'ERR_UW_FILE_NOT_READABLE' => 'Fail on loetamatu',
  'ERR_UW_FILE_NOT_WRITABLE' => 'Faili ei saa liigutada või kirjutada',
  'ERR_UW_FLAVOR_2' => 'Uuenda Flavor:',
  'ERR_UW_FLAVOR' => 'SugarCRM System Flavor:',
  'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log ei saa luua/kirjutada. Palun paranda õigused oma SugarCRM kataloogis.',
  'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload määra väärtus suuremaks kui 1. Palun muuda see oma php.ini ja restardi veebiserver.',
  'ERR_UW_MYSQL_VERSION' => 'SugarCRM nõuab MySQL versiooni 4.1.2 või uuemat. Leitud:',
  'ERR_UW_NO_FILE_UPLOADED' => 'Palun täpsusta faili nng proovi uuesti!',
  'ERR_UW_NO_FILES' => 'Ilmnes viga, faile ei leidunud kontrollimiseks.',
  'ERR_UW_NO_MANIFEST' => 'Zip fail on kaotanud manifest.php faili. Ei saa jätkata.',
  'ERR_UW_NO_VIEW' => 'Mittekehtiv vaade on täpsustatud.',
  'ERR_UW_NO_VIEW2' => 'Vaadet ei defineeritud. Palun mine admin avalehele navigeerimiseks sellele lehele.',
  'ERR_UW_NOT_VALID_UPLOAD' => 'Mittekehtiv üleslaadimine.',
  'ERR_UW_NO_CREATE_TMP_DIR' => 'Ei saa luua ajutist kataloogi. Kontrolli faili õiguseid.',
  'ERR_UW_ONLY_PATCHES' => 'Sellelt lehelt saad üleslaadida vaid patch´e.',
  'ERR_UW_PREFLIGHT_ERRORS' => 'Lennueelse kontrolli käigus leitud vead',
  'ERR_UW_UPLOAD_ERR' => 'Viga faili uuendamisel, palun proovi uuesti!<br />\\n',
  'ERR_UW_VERSION' => 'SugarCRM Süsteemi versioon:',
  'ERR_UW_WRONG_TYPE' => 'See leht pole käivitamiseks',
  'LBL_BUTTON_BACK' => '< Tagasi',
  'LBL_BUTTON_CANCEL' => 'Tühista',
  'LBL_BUTTON_DELETE' => 'Kustuta leht',
  'LBL_BUTTON_DONE' => 'Tehtud',
  'LBL_BUTTON_EXIT' => 'Välju',
  'LBL_BUTTON_INSTALL' => 'Eelkontrolli uuendamine',
  'LBL_BUTTON_NEXT' => 'Edasi >',
  'LBL_BUTTON_RECHECK' => 'Järelkontroll',
  'LBL_BUTTON_RESTART' => 'Taaskäivita',
  'LBL_UPLOAD_UPGRADE' => 'Lae uuenduspakett',
  'LBL_UPLOAD_FILE_NOT_FOUND' => 'Üleslaetud faili ei leitud',
  'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Faili varund',
  'LBL_UW_BACKUP_FILES_EXIST' => 'Selle uuenduse varundatud failid on leitavad',
  'LBL_UW_BACKUP' => 'Faili VARUND',
  'LBL_UW_CANCEL_DESC' => 'Uuendamine on tühistatud. Iga ajutine fail, mida kopeeriti ja iga uuendatud fail, mida üleslaeti on kustutatud.',
  'LBL_UW_CHECK_ALL' => 'Kontrolli kõik',
  'LBL_UW_CHECKLIST' => 'Uuendamise sammud',
  'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Ülekirjutatud failide varundid on järgnevas kataloogis:',
  'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Mesti käsitsi järgnevad failid:',
  'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Uuendamisprotsess: manuaalselt mestitud failid',
  'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Palun kasutage ükskõik millist teile tuttavat meetodit nende failide mestimiseks. Seni kuni see valmib on teie SugarCRM install ebakindlas olekus ja uuendamine puudulik.',
  'LBL_UW_COMPLETE' => 'Lõpetatud',
  'LBL_UW_CONTINUE_CONFIRMATION' => 'See uue Sugari versioon sisaldab uut litsentsilepingut. Kas soovid jätkata?',
  'LBL_UW_COMPLIANCE_ALL_OK' => 'Kõik süsteemi sätete nõuded on rahuldatud',
  'LBL_UW_COMPLIANCE_CURL' => 'cURL moodul',
  'LBL_UW_COMPLIANCE_IMAP' => 'IMAP moodul',
  'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings moodul',
  'LBL_UW_COMPLIANCE_MEMORY' => 'PHP säte: mälu limiit',
  'LBL_UW_COMPLIANCE_MYSQL' => 'Minimaalne MySQL Version',
  'LBL_UW_COPIED_FILES_TITLE' => 'Failid on edukalt kopeeritud',
  'LBL_UW_DB_ISSUES_PERMS' => 'Andmebaasi privileegid',
  'LBL_UW_DB_ISSUES' => 'Andmebaasi probleemid',
  'LBL_UW_DB_METHOD' => 'Andmebaasi uuendamise meetod',
  'LBL_UW_DB_NO_ERRORS' => 'Kõik privileegid on saadaval',
  'LBL_UW_END_DESC2' => 'If you have chosen to manually run any steps such as file merges or SQL queries, please do this now. Your system will be in an unstable state until those steps are completed.',
  'LBL_UW_END_LOGOUT_PRE' => 'Uuendamine on lõpetatud.',
  'LBL_UW_END_LOGOUT_PRE2' => 'Kliki Tehtud Uuendamise viisardist väljumiseks.',
  'LBL_UW_END_LOGOUT' => 'Kui plaanid kasutada järgmist uuendamispaketti kasutades Uuendamise viisardit, siis logi välja ja tagasi sisse.',
  'LBL_UW_END_LOGOUT2' => 'Logi välja',
  'LBL_UW_REPAIR_INDEX' => 'For database performance improvements, please run the Repair Index script.',
  'LBL_UW_FILE_DELETED' => 'on eemaldatud.',
  'LBL_UW_FILE_GROUP' => 'Grupp',
  'LBL_UW_FILE_ISSUES_PERMS' => 'Faili õigused',
  'LBL_UW_FILE_ISSUES' => 'Faili probleemid',
  'LBL_UW_FILE_NO_ERRORS' => 'Kõik kirjutatavad failid',
  'LBL_UW_FILE_OWNER' => 'Omanik',
  'LBL_UW_FILE_PERMS' => 'Õigused',
  'LBL_UW_FILE_UPLOADED' => 'on üleslaetud.',
  'LBL_UW_FILE' => 'Faili nimi:',
  'LBL_UW_FILES_QUEUED' => 'Järgnevad uuendamispaketid on installimiseks valmis:',
  'LBL_UW_FILES_REMOVED' => 'Järgmised failid eemaldatakse süsteemist:',
  'LBL_UW_NEXT_TO_UPLOAD' => 'Kliki Järgmine Uuendamispakettide üleslaadimiseks.',
  'LBL_UW_FROZEN' => 'Lae pakett enne jätkamist.',
  'LBL_UW_HIDE_DETAILS' => 'Peida lisainfo',
  'LBL_UW_IN_PROGRESS' => 'Töös',
  'LBL_UW_INCLUDING' => 'Kaasaarvatud',
  'LBL_UW_INCOMPLETE' => 'Ebatäielik',
  'LBL_UW_INSTALL' => 'Faili install',
  'LBL_UW_MANUAL_MERGE' => 'Faili mestimine',
  'LBL_UW_MODULE_READY_UNINSTALL' => 'Moodul on valmis deinstalleerimiseks. Kliki " Teosta" deinstalleerimise teostamiseks.',
  'LBL_UW_MODULE_READY' => 'Moodul on valmis installimiseks. Kliki Teosta installimiseks.',
  'LBL_UW_NO_INSTALLED_UPGRADES' => 'Registreeritud uuendusi ei avastatud.',
  'LBL_UW_NOT_AVAILABLE' => 'Pole saadaval',
  'LBL_UW_OVERWRITE_DESC' => 'Kõik muudetud failid kirjutatakse üle, kaasaarvatud iga kohandamine ja malli muudatus, mida oled teinud. Kas oled kindel, et soovid jätkata?',
  'LBL_UW_OVERWRITE_FILES_CHOICE1' => 'Kirjuta kõik vailid üle',
  'LBL_UW_OVERWRITE_FILES_CHOICE2' => 'Manuaalne mestimine - säilita kõik',
  'LBL_UW_OVERWRITE_FILES' => 'Mestimismeetod',
  'LBL_UW_PATCH_READY' => 'Patch on valmis teostamiseks. Kliki allolevat linki "Teosta" uuendamisprotsessi lõpetamiseks.',
  'LBL_UW_PATCH_READY2' => 'The following file(s) have new fields or modified screen layouts applied via the Studio. The patch you are about to install also contains changes to the file(s). For each file you may:<br /><br />    * [Default] Retain your version by leaving the checkbox blank. The patch modifications will be ignored.<br />    * orAccept the updated files by selecting the checkbox. Your layouts will need to be re-applied via Studio.',
  'LBL_UW_PREFLIGHT_ADD_TASK' => 'Luua ülesanne manuaalse mestimise jaoks?',
  'LBL_UW_PREFLIGHT_COMPLETE' => 'Eelkontrolli ülevaatamine',
  'LBL_UW_PREFLIGHT_DIFF' => 'Liigendatud',
  'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Teavita end e-kirjaga manuaalse mestimise korral?',
  'LBL_UW_PREFLIGHT_FILES_DESC' => 'Allolevad failid on muudetud. Vaata üle ühikud, mis nõuavad manuaalset mestimist. Iga avastatud paigutuse muudatused on automaatselt märkimata. Märgista linnukesega, mis peaks olema ülekirjutatav.',
  'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Manuaalne faili mestimne pole nõutud.',
  'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Pole vaja.',
  'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Automaatselt säilitatud failid:',
  'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Kõik eelkontrolli testid on läbitud.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Kliki Järgmine uuendatud failide kopeerimseks süsteemi.',
  'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Märkus: Järgnev uuendamisprotsessist on nõutav, ja klikates Järgmine eeldab sinulut protsessi lõpuleviimist. Kui sa ei soovi jätkata, siis kliki Tühista.',
  'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Vali/Tühista kõikide failide valik',
  'LBL_UW_REBUILD_TITLE' => 'Taasta tulemus',
  'LBL_UW_SCHEMA_CHANGE' => 'Skeemi muudatused',
  'LBL_UW_SHOW_COMPLIANCE' => 'Näita avastatud sätted',
  'LBL_UW_SHOW_DB_PERMS' => 'Näita puuduvad andmebaasi õigused',
  'LBL_UW_SHOW_DETAILS' => 'Näita üksikasju',
  'LBL_UW_SHOW_DIFFS' => 'Näita faile, mis nõuavad manuaalset mestimist',
  'LBL_UW_SHOW_NW_FILES' => 'Näita ebakorrektsete õigustega faile',
  'LBL_UW_SHOW_SCHEMA' => 'Näita skeemimuudatuse skripti',
  'LBL_UW_SHOW_SQL_ERRORS' => 'Näita ebakorrektseid päringuid',
  'LBL_UW_SHOW' => 'Näita',
  'LBL_UW_SKIPPED_FILES_TITLE' => 'Vahelejäetud failid',
  'LBL_UW_SKIPPING_FILE_OVERWRITE' => 'Faili ülekirjutamise vahelejätmine - valitud manuaalne mestimine.',
  'LBL_UW_SQL_RUN' => 'Kontrolli, millal SQL käivitatakse manuaalselt',
  'LBL_UW_START_DESC' => 'See viisard aitab sul seda Sugari osa uuendada.',
  'LBL_UW_START_UPGRADED_UW_DESC' => 'Uus uuendamise viisard jätkab uuendamis protsessi. Palun jätka oma uuendamist.',
  'LBL_UW_START_UPGRADED_UW_TITLE' => 'Teretulemast uude Uuendamis viisardisse',
  'LBL_UW_SYSTEM_CHECK_CHECKING' => 'Kontrollimine, palun oota. See võtab kuni 30 sekundit.',
  'LBL_UW_SYSTEM_CHECK_FILES' => 'Failid',
  'LBL_UW_SYSTEM_CHECK_FOUND' => 'Leitud',
  'LBL_UW_TITLE_CANCEL' => 'Tühista',
  'LBL_UW_TITLE_COMMIT' => 'Teosta uuendamine',
  'LBL_UW_TITLE_PREFLIGHT' => 'Eelkontrolli ülevaatamine',
  'LBL_UW_TITLE_START' => 'Teretulemast',
  'LBL_UW_TITLE_SYSTEM_CHECK' => 'Süsteemi kontroll',
  'LBL_UW_TITLE_UPLOAD' => 'Lae pakett',
  'LBL_UW_TITLE' => 'Täienda viisard',
  'LBL_UW_UNINSTALL' => 'Deinstalli',
  'LBL_UW_ACCEPT_THE_LICENSE' => 'Aktsepteeri litsents',
  'LBL_UW_CONVERT_THE_LICENSE' => 'Konverteeri litsents',
  'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES' => 'Uuendatud/kohandatud moodulid',
  'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED' => 'Järgnevad moodulid on avastatud kui kohandatud ja säilitatud',
  'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Süsteemikontroll teostamisel',
  'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Litsentsi kontroll teostamisel',
  'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Faili kopeerimine teostamisel',
  'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Uuendamine teostamisel',
  'LBL_UW_COMMIT_DESC' => 'Kliki Järgmine lisauuenduse skriptide käivitamiseks.',
  'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Uuendamine võib võtta natuke aega',
  'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Vahelejäetud päringud',
  'LBL_INCOMPATIBLE_PHP_VERSION' => 'Nõutav php versioon 5 või enam.',
  'ERR_CHECKSYS_PHP_INVALID_VER' => 'Sinu PHP versioon pole Sugari poolt toetatud. Sul on vaja installda versioon, mis Sugariga ühildub. Sinu versioon on',
  'LBL_ML_ACTION' => 'Tegevus',
  'LBL_ML_CANCEL' => 'Tühista',
  'LBL_ML_COMMIT' => 'Teosta',
  'LBL_ML_DESCRIPTION' => 'Kirjeldus',
  'LBL_ML_INSTALLED' => 'Installi kuupäev',
  'LBL_ML_NAME' => 'Nimi',
  'LBL_ML_PUBLISHED' => 'Avaldamiskuupäev',
  'LBL_ML_TYPE' => 'Tüüp',
  'LBL_ML_UNINSTALLABLE' => 'Mitteinstallitav',
  'LBL_ML_VERSION' => 'Versioon',
  'LBL_ML_INSTALL' => 'Installi',
  'LBL_CURRENT_PHP_VERSION' => '(Sinu praegune php versioon on',
  'LBL_RECOMMENDED_PHP_VERSION' => 'Soovitatav php versioon on 5.2.1 või enam)',
  'LBL_MODULE_NAME' => 'Uuendamis Viisard',
  'LBL_UPLOAD_SUCCESS' => 'Uuendamispakett on edukalt üleslaetud. Kliki Järgmine viimase ülevaatuse teostamiseks.',
  'LBL_UW_TITLE_LAYOUTS' => 'Kinnita paigutused',
  'LBL_LAYOUT_MODULE_TITLE' => 'Paigutused',
  'LBL_LAYOUT_MERGE_TITLE' => 'Kliki Järgmine muudatuste kinnitamiseks ja lõpeta uuendamine.',
  'LBL_LAYOUT_MERGE_TITLE2' => 'Kliki Järgmine uuenduse lõpetamiseks.',
  'LBL_UW_CONFIRM_LAYOUTS' => 'Kinnita paigutused',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Kinnita paigutuse tulemused',
  'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Järgnevad paigutused mestiti edukalt:',
  'LBL_SELECT_FILE' => 'Vali fail:',
);

