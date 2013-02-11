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
  'LBL_EXPORT' => 'Export',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_MAX' => 'MAX',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_MODULE_NAME' => 'Jelentések',
  'LBL_REPORT_MODULES' => 'Modulok kimutatása',
  'LBL_REPORT_ATT_MODULES' => 'Modulok',
  'LBL_REPORT_EXPAND_ALL' => 'Az összes kibontása',
  'LBL_REPORT_COLLAPSE_ALL' => 'Az összes meghiúsulása',
  'LBL_REPORT_SHOW_CHART' => 'Diagram megjelenítése',
  'LBL_REPORT_HIDE_CHART' => 'Diagram elrejtése',
  'LBL_REPORT_SHOW_DETAILS' => 'Részletek mutatása',
  'LBL_REPORT_HIDE_DETAILS' => 'Részletek elrejtése',
  'LNK_NEW_CONTACT' => 'Kapcsolat létrehozása',
  'LNK_NEW_ACCOUNT' => 'Kliens létrehozása',
  'LNK_NEW_OPPORTUNITY' => 'Új lehetőség lérehozása',
  'LNK_NEW_CASE' => 'Új eset létrehozása',
  'LNK_NEW_NOTE' => 'Új megjegyzés vagy csatolmány',
  'LNK_NEW_CALL' => 'Hívás naplózása',
  'LNK_NEW_EMAIL' => 'Email archiválása',
  'LNK_NEW_MEETING' => 'Találkozó ütemezés',
  'LNK_NEW_TASK' => 'Új feladat',
  'LBL_REPORTS' => 'Jelentések',
  'LBL_TITLE' => 'Titulus',
  'LBL_UNTITLED' => 'névtelen',
  'LBL_MODULE' => 'Modul',
  'LBL_ACCOUNTS' => 'Kliensek',
  'LBL_OPPORTUNITIES' => 'Lehetőségek',
  'LBL_CONTACTS' => 'Kapcsolatok',
  'LBL_LEADS' => 'Ajánlások',
  'LBL_ACCOUNT' => 'Kliens',
  'LBL_OPPORTUNITY' => 'Lehetőség',
  'LBL_CONTACT' => 'Kapcsolat',
  'LBL_LEAD' => 'Ajánlás',
  'LBL_DELETE_ERROR' => 'Csak jelentések tulajdonosai vagy rendszergazdák törölhetik a jelentéseket.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Sorok és oszlopok lekérdezése',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Hozzon létre egy táblázatos jelentést, amely tartalmazza a kijelzőn kiválasztott mezők nyilvántartott értékét  a kritériumoknak megfelelően!',
  'LBL_SUMMATION_REPORT' => 'Összesítő jelentések',
  'LBL_SUMMATION_REPORT_DESC' => 'Hozzon létere egy táblázatos jelentést, amely megjeleníti a kritériumnak megfelelő adatokat. A diagram szintén megjeleníthet adatot!',
  'LBL_MATRIX_REPORT' => 'Mátrix  jelentés',
  'LBL_MATRIX_REPORT_DESC' => 'Hozzon létre egy jelentést, amely megjeleníti táblázatosan és max. hármas csoportosításban az eredményeket!',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Hozzon létre egy jelentést, amely megjeleníti a kapcsolódó adatokat az összesítésben!',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Részletes összesítő jelentés',
  'LBL_SHOW_QUERY' => 'Lekérdezés megjelenítése',
  'LBL_DO_ROUND' => 'Kerekítés 100 000 felett',
  'LBL_SAVE_AS' => 'Mentés másként',
  'LBL_FILTERS' => 'Szűrők',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Nem megjeleníthető adat',
  'LBL_RUNTIME_FILTERS' => 'Run-time szűrők',
  'LBL_VIEWER_RUNTIME_HELP' => 'Adja meg a  Run-time szűrők értékeit és kattintson a Szűrők alkalmazása gombra!',
  'LBL_REPORT_RESULTS' => 'Eredmények',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Kattintson a Futtatás [RUN] gombra az eredmények megtekintéséhez!',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'A lekérdezés szűrői megváltoztak az utolsó futtatás óta.',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'A jelentés az utolsó futtatás óta módosítva lett.',
  'LBL_ADD_NEW_FILTER' => 'Új szűrő hozzáadása',
  'LBL_DISPLAY_COLUMNS' => 'Oszlopok megjelenítése',
  'LBL_SUMMARY_COLUMNS' => 'Összesítő oszlopok',
  'LBL_HIDE_COLUMNS' => 'Oszlopok elrejtése',
  'LBL_SUBMIT_QUERY' => 'Lekérdezés indítása',
  'LBL_QUERY' => 'Lekérdezés',
  'LBL_CHANGE' => 'Módosítás',
  'LBL_REMOVE' => 'Eltávolítás',
  'LBL_CREATE_CUSTOM_REPORT' => 'Jelentés varázsló',
  'LBL_CREATE_REPORT' => 'Új jelentés létrehozása',
  'LBL_MY_SAVED_REPORTS' => 'Mentett jelentéseim',
  'LBL_MY_TEAMS_REPORTS' => 'Csoportom kimutatásai',
  'LBL_REPORT_NAME' => 'Jelentés neve',
  'LBL_REPORT_ATT_NAME' => 'Név',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Aktuális negyedévi előrejelzés',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Összes publikált jelentés',
  'LBL_DETAILED_FORECAST' => 'Részletes előrejelzés',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Partnerkliensek listája',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Vevőkliens lista',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Hívólista lekérdezése legutóbbi kapcsolatok alapján',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Lehetőségek ajánlások forrásai alapján',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Aktuális negyedévi megerősített ajánlások',
  'LBL_VIEW' => 'Mutat',
  'LBL_DELETE' => 'Törlés',
  'LBL_PUBLISH' => 'közzétesz',
  'LBL_UN_PUBLISH' => 'nem publikált',
  'LBL_SCHEDULE_REPORT' => 'Határidők lekérdezése',
  'LBL_START_DATE' => 'Kezdés dátuma',
  'LBL_END_DATE' => 'Befejezés dátuma',
  'LBL_FILTER_DATE_RANGE_START' => 'Ettől',
  'LBL_FILTER_DATE_RANGE_FINISH' => '-ig',
  'LBL_SELECT_RECORD' => 'Válasszon tételt',
  'LBL_TIME_INTERVAL' => 'Idő intervallum',
  'LBL_SCHEDULE_ACTIVE' => 'Aktív',
  'LBL_SCHEDULE_EMAIL' => 'Ütemezések jelentése',
  'LBL_NEXT_RUN' => 'Következő E-mail',
  'LBL_UPDATE_SCHEDULE' => 'ütemezés aktualizálása',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Nincs mentett kimutatása.',
  'LBL_MY_REPORTS' => 'Kimutatásaim',
  'LBL_ACCOUNT_REPORTS' => 'Kliens jelentések',
  'LBL_CONTACT_REPORTS' => 'Kapcsolat jelentések',
  'LBL_OPPORTUNITY_REPORTS' => 'Lehetőségek kimutatásai',
  'LBL_CASE_REPORTS' => 'Eset jelentések',
  'LBL_BUG_REPORTS' => 'Hibajelentések',
  'LBL_LEAD_REPORTS' => 'Ajánlások jelentések',
  'LBL_QUOTE_REPORTS' => 'Ajánlat jelentések',
  'LBL_CALL_REPORTS' => 'Hívás jelentések',
  'LBL_MEETING_REPORTS' => 'Találkozó jelentések',
  'LBL_TASK_REPORTS' => 'Feladat jelentések',
  'LBL_EMAIL_REPORTS' => 'E-mail jelentések',
  'LBL_ALL_REPORTS' => 'Jelentések megtekintése',
  'LBL_ACTIVITIES_REPORTS' => 'Tevékenységek jelentései',
  'LBL_CHART_TYPE' => 'Diagramtípus',
  'LBL_NO_REPORTS' => 'Nincs eredmény.',
  'LBL_SAVED_SEARCH' => 'Mentett keresések és elrendezési lehetőségek',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Csoportom klienseinek jelentései',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Csoportom lehetőségeinek jelentései',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Csoportom kapcsolatainak jelentései',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Csoportom eseteinek jelentései',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Csoportom hiba jelentései',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Csoportom ajánlásainak jelentései',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Csoportom ajánlatainak jelentései',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Csoportom hívás jelentései',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Csoportom találkozó jelentései',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Csoportom feladat jelentései',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Csoportom Email jelentései',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Csoportom előrejelzés jelentései',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Csoportom cél jelentései',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Csoportom szerződés jelentései',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Csoportom projekt feladatainak jelentései',
  'LBL_MY_ACCOUNT_REPORTS' => 'Klienseim jelentései',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Lehetőségeim jelentései',
  'LBL_MY_CONTACT_REPORTS' => 'Kapcsolataim jelentései',
  'LBL_MY_CASE_REPORTS' => 'Eseteim jelentései',
  'LBL_MY_BUG_REPORTS' => 'Hibajelentéseim',
  'LBL_MY_LEAD_REPORTS' => 'Ajánlásaim jelentései',
  'LBL_MY_QUOTE_REPORTS' => 'Ajánlataim jelentései',
  'LBL_MY_CALL_REPORTS' => 'Hívásaim jelentései',
  'LBL_MY_MEETING_REPORTS' => 'Találkozóim jelentései',
  'LBL_MY_TASK_REPORTS' => 'Feladataim jelentései',
  'LBL_MY_EMAIL_REPORTS' => 'Emailjeim jelentései',
  'LBL_MY_FORECAST_REPORTS' => 'Előrejelzéseim jelentései',
  'LBL_OF' => 'a(z)',
  'LBL_SUCCESS_REPORT' => 'Siker: Lekérdezés',
  'LBL_MY_PROSPECT_REPORTS' => 'Céljaim jelentései',
  'LBL_WAS_SAVED' => 'mentve',
  'LBL_FAILURE_REPORT' => 'Hiba: Lekérdezés',
  'LBL_WAS_NOT_SAVED' => 'nem lett elmentve',
  'LBL_EQUALS' => 'Egyenlõ',
  'LBL_LESS_THAN' => 'Kevesebb, mint',
  'LBL_GREATER_THAN' => 'Nagyobb, mint',
  'LBL_DOES_NOT_EQUAL' => 'Nem egyenlő',
  'LBL_ON' => 'rajta',
  'LBL_BEFORE' => 'Előtt',
  'LBL_AFTER' => 'Után',
  'LBL_IS_BETWEEN' => 'Között',
  'LBL_NOT_ON' => 'Not on',
  'LBL_CONTAINS' => 'Tartalmaz',
  'LBL_DOES_NOT_CONTAIN' => 'nem tartalmaz(za)',
  'LBL_STARTS_WITH' => 'Kezdés ezzel',
  'LBL_ENDS_WITH' => 'befejezve ezzel',
  'LBL_TO_PDF' => 'Mentés PDF-be',
  'LBL_PDF_TIMESTAMP' => 'É_h_n_ó_p',
  'LBL_CSV_TIMESTAMP' => 'É_h_n_ó_p_mp',
  'LBL_IS' => 'Egyenlõ',
  'LBL_IS_NOT' => 'nem egyenlő',
  'LBL_ONE_OF' => 'Egyik közülük a(z)',
  'LBL_IS_NOT_ONE_OF' => 'Nem közülük való a(z)',
  'LBL_ANY' => 'Minden',
  'LBL_ALL' => 'Legalább',
  'LBL_EXACT' => 'Pontos',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Nem lehet közzétenni. Van egy másik nyilvánosságra hozott jelentése azonos néven.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Nem lehet egy közzétett jelentést elrejteni a tulajdonoson kívül. Ön csak a saját jelentéseinek állapotát módosíthatja.',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Publikált kliens jelentéseim',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Publikált szerződések jelentései',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Publikált lehetőségek jelentései',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Publikált esetek jelentései',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Publikált hibák jelentései',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Publikált ajánlások jelentései',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Publikált ajánlatok jelentései',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Publikált hívások jelentései',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Publikált találkozók jelentései',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Publikált feladatok jelentései',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Publikált Emailek jelentései',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Publikált előrejelzések jelentései',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Publikált célok jelentései',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Nincs ilyen fajta jelentés.',
  'LBL_AND' => 'és',
  'LBL_MISSING_FIELDS' => 'Hiányzó mezők',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Válasszon legalább egy oszlopot!',
  'LBL_MISSING_INPUT_VALUE' => 'hiányzó bemeneti érték.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'hiányzó második bekérendő adat.',
  'LBL_NOTHING_WAS_SELECTED' => 'nem történt kiválasztás.',
  'LBL_TOTAL' => 'Összesen',
  'LBL_MODULE_NAME_SAVED' => 'Modul név',
  'LBL_REPORT_TYPE' => 'Jelentés típusa',
  'LBL_REPORT_LAST_RUN_DATE' => 'Hozzárférés a(z)',
  'LBL_REPORT__ATT_TYPE' => 'Típus',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Alkalmaz',
  'LBL_REPORT_RESET_FILTER' => 'Alapbeállítás',
  'LBL_DISPLAY_SUMMARIES' => 'Válassza az összesítések megjelenítését',
  'LBL_HIDE_SUMMARIES' => 'Összesítések elrejtése',
  'LBL_RUN_BUTTON_TITLE' => 'Jelentés futtatása [Alt + R]',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Jelentés futtatása',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Mint az eredeti típus',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'soronként és oszloponként',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Összegzésként',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Összegzésként részletezve',
  'LBL_SUMMATION_WITH_DETAILS' => 'Részletes összegzés',
  'LBL_DUPLICATE_AS_MATRIX' => 'Mátrixként',
  'LBL_SAVE_RUN' => 'Mentés és fiuttatás',
  'LBL_WITH_DETAILS' => 'Részletezve',
  'LBL_CHOOSE_COLUMNS' => 'Válasszon oszlopot a megjelenítéshez',
  'LBL_CHOOSE_SUMMARIES' => 'Válasszon összesítést a megjelenítéshez',
  'LBL_GROUP_BY' => 'Csoport szerint',
  'LBL_ADD_COLUMN' => 'Oszlopot hozzáad',
  'LBL_GRAND_TOTAL' => 'Mindösszesen',
  'LBL_SEARCH_FORM_TITLE' => 'Jelentés lista',
  'LBL_FORECAST_REPORTS' => 'Előrejelzés jelentései',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Projektfeladataim jelentései',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Projektfeladataim jelentései közzétéve',
  'LBL_PROJECT_TASK_REPORTS' => 'Projektfeladat jelentései',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Súlyozott átlagolt összeg',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Súlyozott összegek összesítése',
  'ERR_SELECT_COLUMN' => 'Kérjük, válasszon egy oszlopcsoportokat először!',
  'LBL_BY_MONTH' => 'Hónapok szerin',
  'LBL_BY_YEAR' => 'Év szerint',
  'LBL_BY_QUARTER' => 'Negyedév',
  'LBL_COUNT' => 'Számlálás',
  'LBL_SUM' => 'ÖSSZ.',
  'LBL_AVG' => 'ÁTL.',
  'LBL_MIN' => 'Minimum',
  'LBL_MONTH' => 'Hónap',
  'LBL_YEAR' => 'Év',
  'LBL_QUARTER' => 'Negyed',
  'LBL_YESTERDAY' => 'Tegnap',
  'LBL_TODAY' => 'Ma',
  'LBL_TOMORROW' => 'Holnap',
  'LBL_LAST_WEEK' => 'Múlt hét',
  'LBL_NEXT_WEEK' => 'Következő hét',
  'LBL_LAST_7_DAYS' => 'Utolsó 7 nap',
  'LBL_NEXT_7_DAYS' => 'Következő 7 nap',
  'LBL_LAST_MONTH' => 'Múlt hónap',
  'LBL_NEXT_MONTH' => 'Következő hónap',
  'LBL_LAST_QUARTER' => 'Elmúlt negyedév',
  'LBL_THIS_QUARTER' => 'Aktuális negyedév',
  'LBL_LAST_YEAR' => 'Múlt év',
  'LBL_NEXT_YEAR' => 'Következő év',
  'LBL_SELECT' => 'Választás',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Legalább egy összesítő oszlopot.',
  'LBL_SHOW_DETAILS' => 'Részletek mutatása',
  'LBL_1_REPORT_ON' => '1. jelentés a(z)',
  'LBL_2_FILTER' => '2. Szűrő',
  'LBL_3_GROUP' => '3. Csoport',
  'LBL_3_CHOOSE' => '3. Válassza ki a megjelenő oszlopokat',
  'LBL_4_CHOOSE' => '4.  Válassza ki a megjelenő oszlopokat',
  'LBL_5_CHART_OPTIONS' => 'Diagram beállításai',
  'LBL_LABEL' => 'Címke',
  'LBL_THIS_MONTH' => 'Aktuális hónap',
  'LBL_LAST_30_DAYS' => 'Elmúlt 30 nap',
  'LBL_NEXT_30_DAYS' => 'Következő 30 nap',
  'LBL_THIS_YEAR' => 'Aktuális év',
  'LBL_LIST_FORM_TITLE' => 'Jelentések',
  'LBL_PROSPECT_REPORTS' => 'Cél jelentések',
  'LBL_IS_EMPTY' => 'Üres',
  'LBL_IS_NOT_EMPTY' => 'Nem üres',
  'LBL_CHART_DESCRIPTION' => 'Leírás',
  'LBL_USE_COLUMN_FOR' => 'Adatsorok',
  'LBL_RELATED' => 'Kapcsolódó:',
  'LBL_OWNER' => 'Felelős',
  'LBL_TEAM' => 'Csoportok',
  'LBL_TOTAL_IS' => 'Végösszeg',
  'CHART_COUNT_PATTERN' => '{count} {module} ahol a(z) {group_label} a(z) {group_text}',
  'LBL_WITH_A_TOTAL' => 'összesítve',
  'LBL_WITH_AN_AVERAGE' => 'átlaggal',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} of {currency_symbol}{numerical_value}{thousands} ahol a(z) {group_label} a(z) {group_text}',
  'LBL_WHOSE_MAXIMUM' => 'amelynek maximuma',
  'LBL_WHOSE_MINIMUM' => 'amelynél a legkisebb',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} a(z) {numerical_value}{thousands} ahol a(z){group_label} a(z) {group_text}',
  'LBL_ROLLOVER' => 'Mozgassa a csúszkát a részletek megtekintéséhez!',
  'LBL_ROLLOVER_WEDGE' => 'Mozgassa a sarkot a részletek megjelenítéséhez!',
  'LBL_ROLLOVER_SQUARE' => 'Mozgassa a négyzetet a részletek megtekintéséhez!',
  'LBL_NO_CHART' => 'Nincs diagram',
  'LBL_HORIZ_BAR' => 'Vízszintes sáv',
  'LBL_VERT_BAR' => 'Függőleges  sáv',
  'LBL_PIE' => 'kör',
  'LBL_LINE' => 'Vonal',
  'LBL_FUNNEL' => 'Tölcsér',
  'LBL_GROUP_BY_REQUIRED' => 'Legalább egy csoport és egy összesítő oszlop szükséges a diagram elkészítéséhez.',
  'MSG_NO_PERMISSIONS' => 'Önnek nincs jogosultsága ennek a jelentésnek a szerkesztéséhez.',
  'LBL_NONE' => '-- nincs --',
  'LBL_NONE_STRING' => 'Nincs',
  'LBL_DATE_BASED_FILTERS' => 'Az adatszűrők kapcsolódnak a hozzárendelt felhasználó idő zónájához',
  'LBL_CONTRACT_REPORTS' => 'Szerződések jelentései',
  'LBL_MY_CONTRACT_REPORTS' => 'Szerződéseim jelentései',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Közzétett szerződés jelentései',
  'LBL_HELLO' => 'Helló',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Egy Ön által küldött automatikusan generált jelentés lett csatolva a SugarCRM alkalmazásból. Riport létrehozva:',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'és elmentve ezzel a névvel "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Ha szeretné megváltoztatni jelentésének beállításait, jeletkezzen be a Sugar-alkalmazásba, és klikkeljen a Jelentések [Reports] fülre.',
  'LBL_LIST_PUBLISHED' => 'Publikálva',
  'LBL_THIS_WEEK' => 'Ezen a héten',
  'LBL_NEXT_QUARTER' => 'Következő negyed',
  'LBL_ADD_RELATE' => 'Összekapcsolás hozzáadása',
  'LBL_DEL_THIS' => 'Eltávolítás',
  'LBL_ALERT_CANT_ADD' => 'Nem tud hozzáadni egy kapcsolódó modult, amíg ki nem választ egy táblát, amítől függ.<br />Válasszon egy modult az "Összekapcsolás hozzáadása" gomb baloldalán található lenyíló menüből.',
  'LBL_BY_DAY' => 'Napok szerint',
  'LBL_DAY' => 'Nap',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Választható kapcsolódó modulok',
  'LBL_ANY_ONE_OF' => 'Valamelyike',
  'LBL_RELATED_TABLE_BLANK' => 'Kérem, válasszon egy kapcsolódó modult!',
  'LBL_FILTER_CONDITIONS' => 'Vásszon operátort:',
  'LBL_FILTER_OR' => 'VAGY',
  'LBL_FILTER_AND' => 'ÉS',
  'LBL_FILTERS_END' => 'Az alábbi szűrői:',
  'LBL_FAVORITE_REPORTS' => 'Kedvenceim',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Kedvenceim jelentései',
  'LBL_ADDED_FAVORITES' => 'jelentés(ek) hozzáadva a Kedvenc jelentéseimhez',
  'LBL_REMOVED_FAVORITES' => 'jeletés(ek eltávolítva a Kedvenc jelentéseimből',
  'LBL_MODULE_TITLE' => 'Jelentések: Főoldal',
  'LBL_MODULE_VIEWER_TITLE' => 'Jelentés nézegető: Főoldal',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Jelentés nézegető',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Ütemező',
  'LBL_FAVORITES_TITLE' => 'Kedvenceim jelentései',
  'LBL_TABLE_CHANGED' => 'A modul lista módosítva lett, kérem ellenőrizze a Csoport-fülön a belépés feltételeit!',
  'LBL_OPTIONAL_HELP' => 'Válassza ki a négyzeteket, hogy megjelenítse a főmodul az adatokat akkor is, ha a kapcsolódó modul adatai nem léteznek. Ha a négyzet nincs bejelölve, a főmodul csak akkor jeleníti meg az adatokat, ha  kapcsolódó modulnak van egy vagy több adata.',
  'LBL_RUNTIME_HELP' => 'Jelölje be ezt az opciót, hogy engedélyezze a felhasználónak a jelentéskészítés előtt a szűrők értékeinek módosítását.',
  'LBL_USER_EMPTY_HELP' => 'Annak érdekében, hogy megtekinthesse azokat a rekordokat, amelyekhez nincsenek hozzárendelt  felhasználók, ellenőrizze a "Kapcsolódó opcionális modulok" jelölőnégyzetet a "Jelentések Részletei" lépés alatt. Használja az "üres" opciót a Kapcsolódó felhasználók szűrőjét. Ez megjeleníti az összes nem kapcsolódó felhasználók rekordjait.',
  'DEFAULT_REPORT_TITLE_1' => 'Aktuális negyedévi előrejelzés',
  'DEFAULT_REPORT_TITLE_2' => 'Részletes előrejelzés',
  'DEFAULT_REPORT_TITLE_3' => 'Partnerkliens lista',
  'DEFAULT_REPORT_TITLE_4' => 'Vevőkliens lista',
  'DEFAULT_REPORT_TITLE_5' => 'Hívások listája - Utolsó kapcsolati dátuma szerint',
  'DEFAULT_REPORT_TITLE_6' => 'Lehetőségek - Ajánlás forrása szerint',
  'DEFAULT_REPORT_TITLE_7' => 'Nyitott esetek - Felhasználók és státusz szerint',
  'DEFAULT_REPORT_TITLE_8' => 'Nyitott esetek - Hónap és felhasználók szerint',
  'DEFAULT_REPORT_TITLE_9' => 'Nyitott esetek - Prioritás és felhasználók szerint',
  'DEFAULT_REPORT_TITLE_10' => 'Új esetek - Hónapok szerint',
  'DEFAULT_REPORT_TITLE_11' => 'Adatcsatorna - típus és csoport szerint',
  'DEFAULT_REPORT_TITLE_12' => 'Adatcsatorna - Csoport és felhasználó szerint',
  'DEFAULT_REPORT_TITLE_17' => 'Megnyert lehetőségek - Ajánlás forrása szerint',
  'DEFAULT_REPORT_TITLE_13' => 'Feladatok - Csoport és felhasználó szerint',
  'DEFAULT_REPORT_TITLE_14' => 'Hívások - Csoport és felhasználók szerint',
  'DEFAULT_REPORT_TITLE_15' => 'Találkozók - Csoport és felhasználók szerint',
  'DEFAULT_REPORT_TITLE_16' => 'Kliensek - Típus és ágazat szerint',
  'DEFAULT_REPORT_TITLE_18' => 'Ajánlások - Ajánlás forrása szerint',
  'DEFAULT_REPORT_TITLE_19' => 'Általam használt mértékek (ma)',
  'DEFAULT_REPORT_TITLE_20' => 'Általam használt mértékek (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_21' => 'Általam használt mértékek (utolsó 30 nap)',
  'DEFAULT_REPORT_TITLE_22' => 'Általam használt modulok (ma)',
  'DEFAULT_REPORT_TITLE_23' => 'Általam használt modulok (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_24' => 'Általam használt modulok (utolsó 30 nap)',
  'DEFAULT_REPORT_TITLE_25' => 'Felhasználók által használt mértékek (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_26' => 'Felhasználók által használt mértékek (utolsó 30 nap)',
  'DEFAULT_REPORT_TITLE_27' => 'Modulok használata közvetlen jelentéseimben (utolsó 30 nap)',
  'DEFAULT_REPORT_TITLE_28' => 'Lassú lekérdezések',
  'DEFAULT_REPORT_TITLE_29' => 'Módosított rekordjaim (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_31' => 'Nemrég módosított rekordjaim (utolsó 30 nap)',
  'DEFAULT_REPORT_TITLE_32' => 'Közvetlen jelentéseim alapján módosított rekordok (utolsó 30)',
  'DEFAULT_REPORT_TITLE_41' => 'Aktív felhasználói munkafolyamatok (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_42' => 'Felhasználói folyamatok összefoglaló',
  'DEFAULT_REPORT_TITLE_43' => 'Vevőkliens tulajdonosok',
  'DEFAULT_REPORT_TITLE_44' => 'Új vevőklienseim',
  'DEFAULT_REPORT_TITLE_45' => 'Lehetőségek - Értékesítés állapota szerint',
  'DEFAULT_REPORT_TITLE_46' => 'Lehetőségek - Típus szerint',
  'DEFAULT_REPORT_TITLE_47' => 'Nyitott hívások',
  'DEFAULT_REPORT_TITLE_48' => 'Nyitott találkozók',
  'DEFAULT_REPORT_TITLE_49' => 'Nyitott feladatok',
  'DEFAULT_REPORT_TITLE_50' => 'Megnyert lehetőségek - Kliensek szerint',
  'DEFAULT_REPORT_TITLE_51' => 'Megnyert lehetőségek - Felhasználók szerint',
  'DEFAULT_REPORT_TITLE_52' => 'Összes nyitott lehetőség',
  'DEFAULT_REPORT_TITLE_53' => 'Összes lezárt lehetőség',
  'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
  'LBL_CONTENT' => 'Tartalom',
  'LBL_IS_PUBLISHED' => 'Közzétéve',
  'LBL_FAVORITE' => 'Kedvenc',
  'LBL_SCHEDULE_TYPE' => 'Ütemző típusa',
  'LBL_NO_ACCESS' => 'Nem fér hozzá ehhez az oldalhoz. Lépjen kapcsolatba a webhely rendszergazdájával, a hozzáféréshez!',
  'LBL_SELECT_REPORT_TYPE' => 'Kattintson egy ikonra a típus kiválasztásához!',
  'LBL_SELECT_MODULE' => 'Kérjük, válasszon egy kapcsolódó modul.',
  'LBL_NEXT' => 'Következő>',
  'LBL_PREVIOUS' => '<Vissza',
  'LBL_CANCEL' => 'Mégsem',
  'LBL_AVAILABLE_FIELDS' => 'Elérhető mezők',
  'LBL_RELATED_MODULES' => 'Kapcsolódó modulok',
  'LBL_FIELD_NAME' => 'Mező neve',
  'LBL_RUN_TIME_LABEL' => 'Futtatás',
  'LBL_NO_IMAGE' => 'Nincs kép',
  'LBL_BASIC_FILTERS' => 'Alapvető szűrők',
  'LBL_ADVANCED_FILTERS' => 'Speciális szűrők',
  'LBL_ADD_GROUP' => 'Szűrőcsoport hozzáadása',
  'LBL_REMOVE_GROUP' => 'Szűrési csoport eltávolítása',
  'LBL_FILTER' => 'Szűrő',
  'LBL_ADD_FILTER_TO' => 'Szűrő hozzáadása a(z)',
  'LBL_COLUMN_NAME' => 'Oszlop neve:',
  'LBL_OPTIONAL_MODULES' => 'Opcionális modulok',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Válassza ki a jelentés típusát',
  'LBL_SELECT_MODULE_BUTTON' => 'Kattintson egy ikonra, válasszon ki egy modult!',
  'LBL_DEFINE_FILTERS' => 'Adjon meg szűrőket',
  'LBL_SELECT_GROUP_BY' => 'Válasszon a csoportot a',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Válassza ki a megjelenítendő oszlopokat',
  'LBL_REPORT_DETAILS' => 'Jelentés részletek',
  'LBL_REPORT_GROUP_BY' => 'Csoport alábbiak szerint',
  'LBL_CLEAR' => 'Töröl',
  'LBL_CHART_OPTIONS' => 'Diagram beállításai',
  'LBL_CHART_DATA_HELP' => 'Válassza ki az összegzést, amely meg fog jelenni a diagramban!',
  'LBL_DO_ROUND_HELP' => 'A 100000 feletti számok kerekítve lesznek a diagramban.',
  'LBL_COMBO_TYPE_AHEAD' => 'Mező keresése',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Egy Mátrix-jelentés nem tartalmazhat 3-nál több csoportot a szabály szerint',
  'LBL_MINIMUM_2_GROUP_BY' => 'Egy Mátrix-jelentésnek legalább 2 csoportot kell tartalmaznia a szabály szerint',
  'LBL_MATRIX_LAYOUT' => 'Elrendezés beállításai:',
  'LBL_REMOVE_BTN_HELP' => 'Klikkeljen ennek a szűrőcsoportnak a törléséhez!',
  'LBL_ADD_BTN_HELP' => 'Klikkeljen egy új szűrőcsoportra a hozzáadáshoz! Használja a csoportok "ÉS" / "VAGY" logikai műveleteit a szűrők beállításainál!',
  'LBL_ORDER_BY' => 'Rendezés',
  'LBL_ASCENDING' => 'Növekvő',
  'LBL_DESCENDING' => 'Csökkenő',
  'LBL_TYPE' => 'Típus',
  'LBL_SUBJECT' => 'Tárgy',
  'LBL_STATUS' => 'Állapot',
  'LBL_DATE' => 'Kezdés dátuma',
  'LBL_1X2' => '1 x 2',
  'LBL_2X1' => '2 x 1',
  'LBL_NO_FILTERS' => 'nincs szűrő.',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'A jelentés következő mezője már nem érvényes:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Kérjük, szerkessze meg a jelentést, és győződjön meg róla, hogy az egyéb paraméterek még mindig relevánsak.',
  'LBL_CURRENT_USER' => 'Aktuális felhasználó',
  'LBL_MODULE_CHANGE_PROMPT' => 'A kiválasztott modul szerkesztése hatással van a szűrők, oszlopok megjelenítésére, stb. Biztosan szeretné folytatni?',
  'LBL_CANNOT_BE_EMPTY' => 'nem lehet üres.',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Valamennyi lekérdezhető mező itt látható, amely kiválasztható a Kapcsolódó modulokhoz. Válasszon egy mezőt!',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'A főmodul és a hozzákapcsolódó összes modul itt látható. Válasszon egy modult!',
  'LBL_PREVIEW_REPORT' => 'Előnézet',
  'LBL_FILTERS_HELP_DESC' => 'Szűrők meghatározásának lépései:<br />1. Kattintson a Modulra a Kapcsolódó Modulok mezőben a Modulra, amit szűrők meghatározására kíván használni. Alapértelmezetten az első modul kerül kiválasztásra.<br />Választhat egy kapcsolódó modult a modulra kattintással, illetve választhat a kapcsolódó modulhoz kapcsolódó modulok közül is. A kiválasztott modul meghatározza az Elérhető mezők-ben megjelenő mezőket.<br />2. Kattintson egy mezőre az Elérhető Mezők-ben a szűrőkhöz történő hozzáadáshoz. Egy mező kereséséhez írja be a nevét a Text Box-ba.<br />Miután kiválasztott tetszőleges számú mezőt a modulból, választhat egy másik modulból is mezőket.<br />3. Válassza az AND vagy OR logikai műveletet annak meghatározására, hogy a szűrési feltételek egyszerre, vagy egyenként kerüljenek alkalmazásra a keresés során.<br />4. [Nem kötelező] Kattintson a "Szűrőcsoport hozzáadása" gombra szűrőcsoport létrehozásához. Tetszőleges számú csoportot és azokon belül tetszőleges számú szűrőt hozhat létre.<br />5. [Nem kötelező] Válassza a Run-time beállítást, ha engedélyezi a felhasználóknak hogy a megjelenő eredményen további szűréseket végezzenek, és azok valósidőben alkalmazásra kerüljenek.',
  'LBL_GROUP_BY_HELP_DESC' => 'Csoport meghatározásának lépései:<br />1. Kattintson a Modulra a Kapcsolódó Modulok mezőben a Modulra, amit rekordok csoportosítására kíván használni. Alapértelmezetten az első modul kerül kiválasztásra.<br />Választhat egy kapcsolódó modult a modulra kattintással, illetve választhat a kapcsolódó modulhoz kapcsolódó modulok közül is. A kiválasztott modul meghatározza az Elérhető mezők-ben megjelenő mezőket.<br />2. Kattintson a Mezőre az Elérhető Mezők-ben a rekordok csoportosításához a jelentésben található mezővel. Egy mező kereséséhez írja be a nevét a Text Box-ba.<br />Miután kiválasztott tetszőleges számú mezőt a modulból, választhat egy másik modulból is mezőket. Viszont a jelentés olvashatatlanná válhat, ha a szükségesnél több mezőt csoportosít.<br />Megváltoztathatja a mezők sorrendjét Drag&Drop-al. Ez hatással lehet az eredmények megjelenésére.<br />A Mátrix Jelentéseknél legfeljebb három mező csoportosítására van lehetőség.',
  'LBL_DISPLAY_COLS_HELP_DESC' => 'Megjelenítendő oszlopok kiválasztásának lépései:<br />1. Kattintson a Modulra a Kapcsolódó Modulok mezőben a Modulra, amit az adatok megjelenítésére kíván használni. Alapértelmezetten az első modul kerül kiválasztásra, amit a Modul Kiválasztása lépésnél választ ki.<br />Választhat egy kapcsolódó modult a modulra kattintással, illetve választhat a kapcsolódó modulhoz kapcsolódó modulok közül is. A kiválasztott modul meghatározza az Elérhető mezők-ben megjelenő mezőket.<br />2. Kattintson a Mezőre az Elérhető Mezők-ben a mező adat rekordokban történő megjelenítéséhez a jelentésben. Egy mező kereséséhez írja be a nevét a Text Box-ba.<br />Miután kiválasztott tetszőleges számú mezőt a modulból, választhat egy másik modulból is mezőket. Tetszőleges számú mezőt választhat ki, viszont a jelentés generálásanagyon lelassulhat vagy olvashatatlanná válhat, ha a szükségesnél több mezőt ad hozzá.<br />Megváltoztathatja a mezők sorrendjét Drag&Drop-al. Ez hatással lehet az oszlopok megjelenésére.',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => 'Összefoglalók megjelenítésének lépései:<br />1. Kattintson a Modulra a Kapcsolódó Modulok mezőben a Modulra, amit összefoglalók megjelenítésére kíván használni. Alapértelmezetten az első modul kerül kiválasztásra.<br />Választhat egy kapcsolódó modult a modulra kattintással, illetve választhat a kapcsolódó modulhoz kapcsolódó modulok közül is. A kiválasztott modul meghatározza az Elérhető mezők-ben megjelenő mezőket.<br />2. Kattintson a Mezőre az Elérhető Mezők-ben az összefoglalók kiválasztásához. Egy mező kereséséhez írja be a nevét a Text Box-ba.<br />Miután kiválasztott tetszőleges számú mezőt a modulból, választhat egy másik modulból is mezőket az összefoglalók számára.<br />A Mátrix Jelentéseknél választhat több mezőt is, több érték megjelenítéséhez egy cellában.',
  'LBL_DCE_LICENSING_REPORT' => 'Licenc jelentés',
  'DEFAULT_REPORT_TITLE_33' => 'Sablon használata',
  'DEFAULT_REPORT_TITLE_34' => 'Max munkafolyamat / nap (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_35' => 'Lekérés / nap (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_36' => 'Bejelentkezések / nap (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_37' => 'Lekérdezések / nap (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_38' => 'Fájlok / nap (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_39' => 'Felhasználók / nap (utolsó 7 nap)',
  'DEFAULT_REPORT_TITLE_40' => 'Memóriahasználat / nap (utolsó 7 nap)',
  'LBL_ALT_SHOW' => 'Mutat',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Ez a jelentés az adatokat a következő oszloprendezettség szerint tartalmazza:',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Óránkénti',
    21600 => 'Minden 6 óra',
    43200 => 'Minden 12 óra',
    86400 => 'Napi',
    604800 => 'Heti',
    1209600 => 'Minden 2 hét',
    2419200 => 'Minden 4 hét',
  ),
);

