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
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_' => '',
  'LBL_GOOD_FILE' => 'Import fájl olvasása sikerült',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'A rekord hiba miatt kihagyva',
  'LBL_UPDATE_SUCCESSFULLY' => 'Rekordok sikeresen frissítve',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Rekordok sikeresen létrehozva',
  'LBL_STEP_4_TITLE' => '4. lépés: Fájl importálás',
  'LBL_STEP_5_TITLE' => '5. lépés: Az eredmények megtekintése',
  'LBL_CUSTOM_ENCLOSURE' => 'Mezők határolókaraktere:',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'A közzététel nem lehetséges. Már van egy Importálási megfeleltetés ugyanezen a néven.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Más tulajdonában lévő megfeleltetés közzétételének visszavonása nem lehetséges. Önnek van egy ugyanilyen nevű importálási megfeleltetése.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Import nincs beállítva erre a modultípusra',
  'LBL_IMPORT_TYPE' => 'Művelet importálása',
  'LBL_IMPORT_BUTTON' => 'Rekordok létrehozása',
  'LBL_UPDATE_BUTTON' => 'Rekord létrehozása és frissítése',
  'LBL_ERROR_INVALID_BOOL' => 'Érvénytelen érték (legyen 1 vagy 0)',
  'LBL_NO_ID' => 'Azonosító kötelező',
  'LBL_PRE_CHECK_SKIPPED' => 'Elő ellenőrzés kihagyva',
  'LBL_IMPORT_ERROR' => 'Importálási hibák adódtak',
  'LBL_ERROR' => 'Hiba:',
  'LBL_NOLOCALE_NEEDED' => 'Helyi konvertálás nem szükséges',
  'LBL_FIELD_NAME' => 'Mezőnév',
  'LBL_VALUE' => 'Érték',
  'LBL_ROW_NUMBER' => 'Sor száma',
  'LBL_NONE' => 'Egyik sem',
  'LBL_REQUIRED_VALUE' => 'A szükséges érték hiányzik',
  'LBL_ID_EXISTS_ALREADY' => 'Ez az azonosító már létezik ebben a táblázatban',
  'LBL_ASSIGNED_USER' => 'Ha a felhasználó nem létezik, használja az aktuális felhasználót',
  'LBL_SHOW_HIDDEN' => 'Mezők mutatása, hogy normál módon nem importálható',
  'LBL_UPDATE_RECORDS' => 'A rekordok importálása helyett frissítse azokat (Nem visszafordítható)',
  'LBL_TEST' => 'Teszt import (nem menti és változtatja meg az adatokat)',
  'LBL_TRUNCATE_TABLE' => 'Táblák kiürítése importálás előtt (minden rekordot töröl)',
  'LBL_RELATED_ACCOUNTS' => 'Ne hozzon létre kapcsolódó klienseket',
  'LBL_NO_DATECHECK' => 'Dátum ellenőrzés kihagyása (gyorsabb, de hibát okoz, ha a dátum hibás)',
  'LBL_NO_WORKFLOW' => 'Ne indítson munkafolyamatot az importálás alatt',
  'LBL_NO_EMAILS' => 'Ne küldjön ki email értesítéseket az importálás alatt',
  'LBL_NO_PRECHECK' => 'Natív formátum mód',
  'LBL_STRICT_CHECKS' => 'Használjon szigorú szabályrendszert (Ellenőrizze az email címeket és a telefonszámokat is)',
  'LBL_ERROR_SELECTING_RECORD' => 'Hiba a rekord kiválasztásban:',
  'LBL_ERROR_DELETING_RECORD' => 'Hiba a rekord törlésben:',
  'LBL_NOT_SET_UP' => 'Import nincs beállítva ehhez a modul típushoz',
  'LBL_ARE_YOU_SURE' => 'Biztos benne? Ez minden adatot töröl ebben a modulban.',
  'LBL_NO_RECORD' => 'Nincs ilyen rekord ezzel az azonosítóval a frissítéshez',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Import nincs beállítva ehhez a modultípushoz',
  'LBL_DEBUG_MODE' => 'Hibakeresés mód engedélyezése',
  'LBL_ERROR_INVALID_ID' => 'Az azonosító túl hosszú ehhez a mezőhöz (maximum 36 karakter)',
  'LBL_ERROR_INVALID_PHONE' => 'Érvénytelen telefonszám',
  'LBL_ERROR_INVALID_NAME' => 'Karakterlánc túl hosszú, hogy beleférjen a mezőbe',
  'LBL_ERROR_INVALID_VARCHAR' => 'Karakterlánc túl hosszú, hogy beleférjen a mezőbe',
  'LBL_ERROR_INVALID_DATE' => 'Érvénytelen dátum formátum',
  'LBL_ERROR_INVALID_DATETIME' => 'Érvénytelen dátum-idő',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Érvénytelen dátum-idő',
  'LBL_ERROR_INVALID_TIME' => 'Érvénytelen idő',
  'LBL_ERROR_INVALID_INT' => 'Érvénytelen egész szám',
  'LBL_ERROR_INVALID_NUM' => 'Érvénytelen számérték',
  'LBL_ERROR_INVALID_EMAIL' => 'Érvénytelen e-mail cím',
  'LBL_ERROR_INVALID_USER' => 'Érvénytelen felhasználói név vagy azonosító',
  'LBL_ERROR_INVALID_TEAM' => 'Érvénytelen csoportnév vagy azonosító',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Érvénytelen fiók név vagy azonosító',
  'LBL_ERROR_INVALID_RELATE' => 'Érvénytelen relációs mező',
  'LBL_ERROR_INVALID_CURRENCY' => 'Érvénytelen pénznem érték',
  'LBL_ERROR_INVALID_FLOAT' => 'Érvénytelen lebegőpontos szám',
  'LBL_ERROR_NOT_IN_ENUM' => 'Ez az érték nincs a legördülő listában. Az engedélyezett értékek:',
  'LBL_NOT_MULTIENUM' => 'Ez nem MultiEnum',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Import nincs beállítva ehhez a modul típushoz',
  'LBL_IMPORT_MODULE_NO_USERS' => 'Vigyázat: Nincsenek felhasználók felvéve a rendszerben. Ha importálást végez anélkül hogy felhasználókat adna a rendszerhez, minden rekord az Adminisztrátor tulajdonába kerül.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'A közzététel nem lehetséges. Már van egy Importálási megfeleltetés, ugyanezen a néven.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Más tulajdonában lévő megfeleltetés közzétételének visszavonása nem lehetséges. Önnek van egy ugyanilyen nevű importálási megfeleltetése.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'A könyvtár',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'nem létezik vagy nem írható',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'A file feltöltése sikertelen. Lehetséges hogy a php.ini \'upload_max_filesize\' beállítása túl kis értékre van állítva',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Fájl túl nagy. Max:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Változtassa meg a $sugar_config[\'upload_maxsize\'] -t a config.php-ben.',
  'LBL_MODULE_NAME' => 'Betöltés',
  'LBL_TRY_AGAIN' => 'Próbálja újra',
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Rendszer adminisztrátor felhasználót nem tud importálni',
  'ERR_MULTIPLE' => 'Több oszlop került meghatározásra az azonos mező névvel',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Kötelező mezők hiányoznak:',
  'ERR_MISSING_MAP_NAME' => 'Hiányzik az egyéni megfeleltetés neve',
  'ERR_SELECT_FULL_NAME' => 'Nem jelölhető ki teljes név, ha a keresztnév és vezetéknév ki vannak jelölve.',
  'ERR_SELECT_FILE' => 'Válassza ki a feltölteni kívánt fájlt.',
  'LBL_SELECT_FILE' => 'Válasszon fájlt:',
  'LBL_CUSTOM' => 'Egyéni',
  'LBL_CUSTOM_CSV' => 'Egyedi, vesszővel tagolt fájl',
  'LBL_CSV' => 'Vesszővel tagolt fájl',
  'LBL_TAB' => 'Tabulátorral tagolt fájl',
  'LBL_CUSTOM_DELIMITED' => 'Egyedi tagolt fájl',
  'LBL_CUSTOM_DELIMITER' => 'Mezők által határolt:',
  'LBL_FILE_OPTIONS' => 'Fájl opciók',
  'LBL_CUSTOM_TAB' => 'Egyedi TAB tagolású file',
  'LBL_DONT_MAP' => '-- A mező megfeleltetése nem lehetséges --',
  'LBL_STEP_1_TITLE' => '1. lépés: Adatforrás kiválasztása és importálás indítása',
  'LBL_WHAT_IS' => 'Mi az adatforrás?',
  'LBL_ACT' => 'ACT!',
  'LBL_MY_SAVED' => 'Mentett megfeleltetéseim:',
  'LBL_PUBLISH' => 'Közzétesz',
  'LBL_DELETE' => 'Töröl',
  'LBL_PUBLISHED_SOURCES' => 'Közzétett megfeleltetések:',
  'LBL_UNPUBLISH' => 'Nem teszi közzé',
  'LBL_NEXT' => 'Következő>',
  'LBL_BACK' => '<Vissza',
  'LBL_STEP_2_TITLE' => '2. lépés: Töltse fel az importálandó fájlt',
  'LBL_HAS_HEADER' => 'Van fejléc:',
  'LBL_NOTES' => 'Jegyzet:',
  'LBL_NOW_CHOOSE' => 'Most válassza ki a fájlt az importáláshoz:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'A Microsoft Outlook 98 és 2000 tud vesszővel tagolt értékeket tartalmazó (.csv - Comma Separated Values) formátumot exportálni, ami felhasználható a rendszerbe importáláshoz. Az Outlookból történő exportáláshoz kövesse az alábbi lépéseket:',
  'LBL_OUTLOOK_NUM_1' => 'Indítsa el az Outlook-t',
  'LBL_OUTLOOK_NUM_2' => 'Válassza a File menü Import és Export... pontját',
  'LBL_OUTLOOK_NUM_3' => 'Válassza az Export fájlba menüpontot és nyomja meg a Tovább gombot',
  'LBL_OUTLOOK_NUM_4' => 'Válassza a vesszővel tagolt értékek (azaz .csv Windows) és nyomja meg a Tovább gombot.<br />Megjegyzés: Előfordulhat hogy telepíteni kell az export komponenst',
  'LBL_OUTLOOK_NUM_5' => 'Válassza a Kapcsolatok mappát és nyomja meg a Tovább gombot. Választhat különböző Kapcsolatok mappákat, ha Önnek több ilyen is van.',
  'LBL_OUTLOOK_NUM_6' => 'Válasszon egy fájlnevet, majd kattintson a Tovább gombra',
  'LBL_OUTLOOK_NUM_7' => 'Kattintson a Befejezésre',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com tud vesszővel tagolt értékeket tartalmazó (.csv - Comma Separated Values) formátumot exportálni, ami felhasználható a rendszerbe importáláshoz. A Salesforce.com-ról történő exportáláshoz kövesse az alábbi lépéseket:',
  'LBL_SF_NUM_1' => 'Nyissa meg böngészőben a http://www.salesforce.com oldalt, és jelentkezzen be az email címével és jelszavával',
  'LBL_SF_NUM_2' => 'Kattintson a Jelentések fülre a felső menüben',
  'LBL_SF_NUM_3' => 'Fiókok exportálása: Kilkkeljen az Aktív fiókók linkre Kapcsolatok exportálásához: Kattintson a Levelezési listák linkre',
  'LBL_SF_NUM_4' => '1. lépés: Válassza ki a jelentés típusát, válassza a Táblázatos jelentést és nyomja meg a Tovább gombot',
  'LBL_SF_NUM_5' => '2. lépés: Válassza ki a jelentés oszlopai-t amiket exportálni akar, és nyomja meg a Tovább gombot',
  'LBL_SF_NUM_6' => '3. lépés: Válassza ki az információkat az összefoglaláshoz, majd nyomja meg a Tovább gombot',
  'LBL_SF_NUM_7' => '4. lépés: Rendezze a jelentés oszlopait, majd nyomja meg a Tovább gombot.',
  'LBL_SF_NUM_8' => '5. lépés: Válassza ki a riport feltételeit, majd a Kezdő Dátum alatt válasszon egy dátumot, ami elég régi ahhoz hogy minden fiók beépüljön. Exportálhatja a Fiókok egy kisebb csoportját is részletes feltételek megadásával. Ha készen van, nyomja meg a Run Report gombot',
  'LBL_SF_NUM_9' => 'A jelentés létrejön, és az oldal megjeleníti Jelentés generálás állapota: Kész. Most nyomja meg az Export az Excel-be gombot',
  'LBL_SF_NUM_10' => 'Az Export Jelentés: Export File Formátum alatt válassza a vesszővel elválasztott (Comma Delimited) .csv-t, és nyomja meg az Export gombot.',
  'LBL_SF_NUM_11' => 'Egy felugró ablakban megadhatja az export file mentésének helyét.',
  'LBL_IMPORT_ACT_TITLE' => 'Az ACT! képes vesszővel tagolt értékek (.csv - Comma Separated Values) formátumot exportálni, ami felhasználható a rendszerbe importáláshoz. Az ACT!-ból történő exportáláshoz kövesse az alábbi lépéseket:',
  'LBL_ACT_NUM_1' => 'ACT! indítása',
  'LBL_ACT_NUM_2' => 'Válassza a File menüben a Data Exchange menüpontot, azután az Export... menüpontot',
  'LBL_ACT_NUM_3' => 'Válassza file típusnak a Text-Delimited típust',
  'LBL_ACT_NUM_4' => 'Válasszon egy file nevet és egy elérési utat az exportált adatok számára, és nyomja meg a Tovább gombot',
  'LBL_ACT_NUM_5' => 'Válassza a csak Kapcsolat rekordok-at',
  'LBL_ACT_NUM_6' => 'Kattintson a Beállítások ... gombra',
  'LBL_ACT_NUM_7' => 'Válassza ki a vesszőt , mint a mező elválasztó karaktert',
  'LBL_ACT_NUM_8' => 'Jelölje ki az Igen, exportáld a mezőneveket checkbox-ot, és nyomja meg az OK gombot',
  'LBL_ACT_NUM_9' => 'Kattintson a Tovább gombra',
  'LBL_ACT_NUM_10' => 'Válassza ki az összes rekordot, és nyomja meg a Befejezés gombot',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Sok alkalmazás képes adatokat exportálni a vesszővel tagolt szöveges file (Comma Delimited text file .csv) formátumban, a következő lépésekkel:',
  'LBL_CUSTOM_NUM_1' => 'Indítsa el az alkalmazást és nyissa meg az adatfile-t',
  'LBL_CUSTOM_NUM_2' => 'Válassza ki a Mentés másként ... , vagy Export ... menüpontot',
  'LBL_CUSTOM_NUM_3' => 'Mentse a file-t CSV vagy vesszővel tagolt értékek (Comma Separated Values) formátumban',
  'LBL_IMPORT_TAB_TITLE' => 'Sok alkalmazás képes adatokat exportálni a Tabulátorral Tagolt szöveges file (Tab Delimited text file .csv) formátumban, a következő lépésekkel:',
  'LBL_TAB_NUM_1' => 'Indítsa el az alkalmazást és nyissa meg az adatfile-t',
  'LBL_TAB_NUM_2' => 'Válassza ki a Mentés másként ... , vagy Export ... menüpontot',
  'LBL_TAB_NUM_3' => 'Mentse a file-t TSV vagy Tabulátorral Tagolt Értékek (Tab Separated Values) formátumban',
  'LBL_STEP_3_TITLE' => '3. lépés: Ellenőrizze a mezőket és importáljon',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Az alul található listában válassza ki az import file azon mezőit, amiket importálni kell a rendszer megfelelő mezőibe. Ha készen van nyomja meg az Import most gombot:',
  'LBL_DATABASE_FIELD' => 'Adatbázis mező',
  'LBL_HEADER_ROW' => 'Fejléc sor',
  'LBL_ROW' => 'Sor',
  'LBL_SAVE_AS_CUSTOM' => 'Mentés mint Egyéni megfeleltetés:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Egyéni megfeleltetés neve:',
  'LBL_CONTACTS_NOTE_1' => 'A Vezetéknév és a Teljes név is legyen megfeleltetve.',
  'LBL_CONTACTS_NOTE_2' => 'Ha a Teljes név meg van feleltetve, akkor az Utónév és a Vezetéknév legyen kihagyva.',
  'LBL_CONTACTS_NOTE_3' => 'Ha a Teljes név meg van feleltetve, akkor a tartalma Vezetéknév és Utónév részekre lesz bontva az adatbázisba illesztéskor.',
  'LBL_CONTACTS_NOTE_4' => 'A 2. és 3. Cím Utca mezők együtt, összefűzve jelennek meg az adatbázisban.',
  'LBL_ACCOUNTS_NOTE_1' => 'A 2. és 3. Cím Utca mezők együtt összefűzve az elsődleges Cím Utca mezőben jelennek meg az adatbázisban.',
  'LBL_REQUIRED_NOTE' => 'Kötelező mező (k):',
  'LBL_IMPORT_NOW' => 'Import most',
  'LBL_CANNOT_OPEN' => 'Nem tudja megnyitni az importált fájlt olvasásra',
  'LBL_NOT_SAME_NUMBER' => 'Nem volt azonos a mezők száma soronként a fájlban',
  'LBL_NO_LINES' => 'Nem találhatók sorok az importált fájlban.',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Az importálandói fájl már feldolgozott, vagy nem létezik',
  'LBL_SUCCESS' => 'Sikeres:',
  'LBL_FAILURE' => 'Importálási hiba:',
  'LBL_SUCCESSFULLY' => 'Sikeresen importálva',
  'LBL_LAST_IMPORT_UNDONE' => 'Az utolsó import visszavonásra került',
  'LBL_NO_IMPORT_TO_UNDO' => 'Nincs visszavonható import',
  'LBL_FAIL' => 'Sikertelen',
  'LBL_RECORDS_SKIPPED' => 'Egy vagy több hiányzó mező miatt kimaradtak rekordok',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Kimaradtak rekordok már létező vagy túl hosszú azonosító miatt (max. 36 karakter)',
  'LBL_RESULTS' => 'Eredmények',
  'LBL_IMPORT_MORE' => 'További importálás',
  'LBL_FINISHED' => 'Vissza a',
  'LBL_UNDO_LAST_IMPORT' => 'Utolsó import visszavonása',
  'LBL_LAST_IMPORTED' => 'Utoljára létrehozott',
  'ERR_MULTIPLE_PARENTS' => 'Csak egy Szülő azonosítót adhat meg',
  'LBL_DUPLICATES' => 'Azonosakat talált',
  'LNK_DUPLICATE_LIST' => 'Duplikációk listájának letöltése',
  'LNK_ERROR_LIST' => 'Töltse le a hibák listáját',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Sikertelenül importált rekordok letöltése.',
  'LBL_UNIQUE_INDEX' => 'Index választása a duplikálási összehasonlításhoz',
  'LBL_VERIFY_DUPS' => 'Ellenőrizze ismétlődő bejegyzéseket a kiválasztott indexekkel szemben.',
  'LBL_INDEX_USED' => 'Használt Index(ek)',
  'LBL_INDEX_NOT_USED' => 'Nem használt index(ek):',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Fájlt nem sikerült feltölteni. Ellenőrizze a fájl jogosultságokat az Ön Sugar telepítési gyorsítótár könyvtárban.',
  'LBL_IMPORT_FIELDDEF_ID' => 'Egyedi azonosító szám',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Név vagy azonosító',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefonszám',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Csoportnév vagy azonosító',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Bármely szöveg',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Bármely szöveg',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Bármely szöveg',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Idő',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Dátum',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Dátum-Idő',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Felhasználó név vagy azonosító',
  'LBL_IMPORT_FIELDDEF_BOOL' => '\'0 \'Vagy \'1\'',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-mail cím',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numerikus (nem decimális)',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numerikus (nem decimális)',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numerikus (nem decimális)',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numerikus (decimális megengedett)',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numerikus (decimális megengedett)',
  'LBL_DATE_FORMAT' => 'Dátum formátum:',
  'LBL_TIME_FORMAT' => 'Idő formátum:',
  'LBL_TIMEZONE' => 'Időzóna:',
  'LBL_ADD_ROW' => 'Mező hozzáadása',
  'LBL_REMOVE_ROW' => 'Mező törlése',
  'LBL_DEFAULT_VALUE' => 'Alapértelmezett érték',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Speciális beállítások megjelenítése',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Speciális beállítások elrejtése',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Oszlopok láthatóságának engedélyezése',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Látható oszlopok elrejtése',
  'LBL_SAVE_MAPPING_AS' => 'Megfeleltetés mentése másként',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Egyszeres idézőjel (\')',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dupla idézőjel (")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Egyik sem',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Egyéb:',
  'LBL_IMPORT_COMPLETE' => 'Az importálás befejeződött',
  'LBL_IMPORT_RECORDS' => 'Rekordok importálása',
  'LBL_IMPORT_RECORDS_OF' => 'a(z)',
  'LBL_IMPORT_RECORDS_TO' => 'ba',
  'LBL_CURRENCY' => 'Pénznem',
  'LBL_CURRENCY_SIG_DIGITS' => 'Pénznem számjeggyel',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Példa',
  'LBL_NUMBER_GROUPING_SEP' => 'Ezres elválasztó',
  'LBL_DECIMAL_SEP' => 'Tizedesjel',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Név megjelenítés formátuma',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '"s" Köszöntés<br />"f" Keresztnév<br />"l" Vezetéknév',
  'LBL_CHARSET' => 'Fájl kódolás',
  'LBL_MY_SAVED_HELP' => 'A mentett leképezés az adott adatforrás egy korábban használt kombinációját, és az adatbázis elérést biztosító mezők megjelenítését határozza meg az importált fájlban.<br /><br />Kattintson a Publikál gombra a más felhasználók számára elérhető leképezéshez.<br />Kattintson a Nem Publikál gombra a más felhasználók számára nem elérhető leképezéshez.',
  'LBL_MY_PUBLISHED_HELP' => 'A publikált leképezés az adott adatforrás egy korábban használt kombinációját, és az adatbázis elérést biztosító mezők megjelenítését határozza meg az importált fájlban.',
  'LBL_ENCLOSURE_HELP' => 'A speciális karakter használható csatolva a tervezett terület tartalmához, beleértve az összes karaktert, amelyek elválasztásra szolgálnak.<br /><br />Példa: Ha az elválasztó vessző (,) és a speciális karakter egy idézőjel ("),<br />Az importált "Cupertino, Kalifornia" nevek ugyanabban a mezőben fognak megjelenni Cupertino, Kalifornia-ként.<br />Ha nincsenek speciális karakterek vagy ha a két speciális karakter különböző,<br />A "Cupertino, Kalifornia" nevek a két szomszédos területen, mint "Cupertino és a "California" fognak megjelenni.<br /><br />Megjegyzés: Az importált fájl lehet, hogy nem tartalmaz semmilyen speciális karaktert.<br />Az alapértelmezett speciális karakter az idézőjelet, melyek az Excel-ben a vesszővel és tabulátorral tagolt fájlok.',
  'LBL_DELIMITER_COMMA_HELP' => 'Válassza ezt az opciót, ha a karakter, amely elválasztja a mezőket az import fájlban egy vessző, vagy ha a fájl kiterjesztése. csv.',
  'LBL_DELIMITER_TAB_HELP' => 'Válassza ezt az opciót, ha a karakter, amely elválasztja a mezőket az import fájlban egy TAB, és a fájl kiterjesztése. txt.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Válassza ezt a lehetőséget, ha az import file-ben található szeparátor karakter nem Vessző, nem Tabulátor és írja be a Határoló mezőbe a karaktert.',
  'LBL_DATABASE_FIELD_HELP' => 'Válasszon egy mezőt az összes mező listájából, ami létezik a modul adatbázisában.',
  'LBL_HEADER_ROW_HELP' => 'Ezek a mezőnevek találhatók az import fájl fejlécében.',
  'LBL_DEFAULT_VALUE_HELP' => 'Jelzi a használni kívánt mezők értékeit a létrehozott vagy naprakész nyilvántartásban, ha a mező  nem tartalmaz adatokat az importált fájlban.',
  'LBL_ROW_HELP' => 'Ez az adat az első a fejléc után az import fájlban.',
  'LBL_SAVE_MAPPING_HELP' => 'Írja be a nevét a megadott adatbázis mezőkhöz a fenti leképezett mezőkbe az importált fájl mezőkben.',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Adja meg a beállításokat az import fájlban az adatok megfelelő importálásához. <br />Ezek a beállítások nem írják felül az Ön beállításait. A létrehozott és frissített rekordok tartalmazni fogják beállításait a Fiókom oldalon.',
  'LBL_IMPORT_FILE_SETTINGS' => 'Import fájl beállításai',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Válasszon mezőket az import file-ban a duplikációk ellenőrzéséhez.<br />Ha a kiválasztott mezők adatai megegyeznek egy már létező rekordban található adatokkal, az új rekord nem jön létre a duplikált adatokat tartalmazó sor adataival.<br />A duplikációkat tartalmazó sorok megtalálhatóak az Importálás Eredményében.',
  'LBL_IMPORT_STARTED' => 'Importálás megkezdődött:',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'A frissítés nem hajtható végre jogosultság probléma miatt',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Biztos törölni szeretné ezt a megfeleltetést?',
);

