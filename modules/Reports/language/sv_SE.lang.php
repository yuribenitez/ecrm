<?php

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





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Skapa en tabellformrapport som innehåller värdena utvalda ur synliga fält för poster som matchar de angivna kriterierna.',
  'LBL_SUMMATION_REPORT_DESC' => 'Skapa en tabellform rapport som innehåller beräknade data för poster som matchar de angivna kriterierna. Uppgifterna kan också presenteras i ett diagram',
  'LBL_MATRIX_REPORT_DESC' => 'Skapa en summering rapport som visar resultatet i ett rutnät format och grupperas med högst tre fält.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Skapa en summering rapport som visar ytterligare information relaterat till poster i resultatet.',
  'LBL_VIEWER_RUNTIME_HELP' => 'Ange värden för <b>Run-time filter</b> och klicka knappen <b>Använd Filter</b> för att köra om rapporten.',
  'LBL_RUNTIME_HELP' => 'Markera den här rutan för att tillåta användare att byta filtervärden innan de kör rapporten.',
  'LBL_USER_EMPTY_HELP' => 'För att visa poster som inte tilldelas någon användare, markera kryssrutan "Valfria relaterade moduler" i "Rapporterdetaljer" steget istället föratt använda \'är tomt\' alternativet för den tilldelade användarens filter. Detta kommer att visa alla poster som inte är relaterade till någon användare.',
  'DEFAULT_REPORT_TITLE_27' => 'Moduler som används av Mina Direkta Rapporter (Senaste 30 dagarna)',
  'DEFAULT_REPORT_TITLE_32' => 'Poster ändrade av Mina Direkta Rapporter (Senaste 30 dagarna)',
  'DEFAULT_REPORT_TITLE_41' => 'Aktiva användaresessions (Senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_42' => 'Sammanfattning av användarsessioner (Senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_50' => 'Möjligheter vunnits av konto',
  'LBL_CHART_DATA_HELP' => 'Välj den sammanställning som ska visas i diagrammet.',
  'LBL_DO_ROUND_HELP' => 'Siffror över 100000 kommer att avrundas i diagram.<br />Exempel: 350.000 kommer att uttryckas som 350K.',
  'LBL_MAXIMUM_3_GROUP_BY' => 'En matrisrapport kan inte ha mer än tre grupperingssatser.',
  'LBL_MINIMUM_2_GROUP_BY' => 'En matrisrapport måste ha minst två grupperingssatser.',
  'LBL_ADD_BTN_HELP' => 'Klicka för att lägga till ett nytt filtergrupp. Använd grupper för att tillämpa och/eller logik i uppsättningar av filter.',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Redigera rapporten och kontrollerar för att se till att alla parametrar fortfarande är aktuella.',
  'LBL_MODULE_CHANGE_PROMPT' => 'Ändring av den valda modulen kommer att resultera i att filter, visade kolumner, etc går förlorade. Vill du fortfarande vill fortsätta?',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Alla rapporteras fält från den valda modulen i <b>Relaterade Moduler</b> visas här. Välj ett fält.',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Den primära modulen och alla moduler relaterade till den primära modulen visas här. Välj en modul.',
  'LBL_LEADS' => 'Leads',
  'LBL_LEAD' => 'Lead',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_SUM' => 'SUM',
  'LBL_MAX' => 'MAX',
  'LBL_MIN' => 'MIN',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_FILTER' => 'Filter',
  'LBL_STATUS' => 'Status',
  'LBL_1X2' => '1 X 2',
  'LBL_2X1' => '2 X 1',
  'LBL_MODULE_NAME' => 'Rapporter',
  'LBL_REPORT_MODULES' => 'Rapport moduler',
  'LBL_REPORT_ATT_MODULES' => 'Moduler',
  'LBL_REPORT_EXPAND_ALL' => 'Utöka alla',
  'LBL_REPORT_COLLAPSE_ALL' => 'Dra ihop alla',
  'LBL_REPORT_SHOW_CHART' => 'Visa graf',
  'LBL_REPORT_HIDE_CHART' => 'Göm graf',
  'LBL_REPORT_SHOW_DETAILS' => 'Visa detaljer',
  'LBL_REPORT_HIDE_DETAILS' => 'Dölj detaljer',
  'LNK_NEW_CONTACT' => 'Skapa kontakt',
  'LNK_NEW_ACCOUNT' => 'Skapa organisation',
  'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
  'LNK_NEW_CASE' => 'Skapa ärende',
  'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
  'LNK_NEW_CALL' => 'Schemalägg telefonsamtal',
  'LNK_NEW_EMAIL' => 'Arkivera epost',
  'LNK_NEW_MEETING' => 'Schemalägg möte',
  'LNK_NEW_TASK' => 'Skapa uppgift',
  'LBL_REPORTS' => 'Rapporter',
  'LBL_TITLE' => 'Titel',
  'LBL_UNTITLED' => 'saknar titel',
  'LBL_MODULE' => 'Modul',
  'LBL_ACCOUNTS' => 'Organisationer',
  'LBL_OPPORTUNITIES' => 'Affärsmöjligheter',
  'LBL_CONTACTS' => 'Kontakter',
  'LBL_ACCOUNT' => 'Organisation',
  'LBL_OPPORTUNITY' => 'Affärsmöjlighet',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_DELETE_ERROR' => 'Endast ägare av rapporten eller administratörer kan ta bort rapporten.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Rader och kolumner rapport',
  'LBL_SUMMATION_REPORT' => 'Summerings rapport',
  'LBL_MATRIX_REPORT' => 'Matris rapport',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Summerings rapport med detaljer',
  'LBL_SHOW_QUERY' => 'Visa query',
  'LBL_DO_ROUND' => 'Avrunda nummer över 100000',
  'LBL_SAVE_AS' => 'Spara som',
  'LBL_FILTERS' => 'Filter',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Kan inte rita grafen på grund av otillräckligt data',
  'LBL_RUNTIME_FILTERS' => 'Körnings filter',
  'LBL_REPORT_RESULTS' => 'Resultat',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Klicka på kör rapport för att visa resultat.',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Rapport filter har ändrats sedan senaste körningen.',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Rapporten har ändrats sedan senaste körningen.',
  'LBL_ADD_NEW_FILTER' => 'Lägg till nytt filter',
  'LBL_DISPLAY_COLUMNS' => 'Visa kolumner',
  'LBL_SUMMARY_COLUMNS' => 'Summerings kolumner',
  'LBL_HIDE_COLUMNS' => 'Dölj kolumner',
  'LBL_SUBMIT_QUERY' => 'Kör Fråga',
  'LBL_QUERY' => 'Fråga',
  'LBL_CHANGE' => 'Redigera',
  'LBL_REMOVE' => 'Radera',
  'LBL_CREATE_CUSTOM_REPORT' => 'Skapa anpassad rapport',
  'LBL_CREATE_REPORT' => 'Skapa rapport',
  'LBL_MY_SAVED_REPORTS' => 'Mina sparade rapporter',
  'LBL_MY_TEAMS_REPORTS' => 'Mitt teams rapporter',
  'LBL_REPORT_NAME' => 'Rapportnamn',
  'LBL_REPORT_ATT_NAME' => 'Namn',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Prognos över aktuellt kvartal',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Alla publicerade rapporter',
  'LBL_DETAILED_FORECAST' => 'Detaljerad prognos',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Partner Organisationslista',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Kund Organisationslista',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Anropa lista m.h.a sista datumet för kontakt',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Affärsmöjlighet från Leadskälla',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Antal affärer för nuvarande månad',
  'LBL_VIEW' => 'visa',
  'LBL_DELETE' => 'Radera',
  'LBL_PUBLISH' => 'publicera',
  'LBL_UN_PUBLISH' => 'tag ned',
  'LBL_SCHEDULE_REPORT' => 'Schemalägg rapport',
  'LBL_START_DATE' => 'Startdatum',
  'LBL_END_DATE' => 'Slutdatum',
  'LBL_FILTER_DATE_RANGE_START' => 'Från',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Till',
  'LBL_SELECT_RECORD' => 'Väl post',
  'LBL_TIME_INTERVAL' => 'Tidsintervall',
  'LBL_SCHEDULE_ACTIVE' => 'Aktiv',
  'LBL_SCHEDULE_EMAIL' => 'Schemalägg rapport',
  'LBL_NEXT_RUN' => 'Nästa epostmeddelande',
  'LBL_UPDATE_SCHEDULE' => 'Uppdatera schemaläggning',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Du har inga sparade rapporter',
  'LBL_MY_REPORTS' => 'Mina rapporter',
  'LBL_ACCOUNT_REPORTS' => 'Organisationsrapporter',
  'LBL_CONTACT_REPORTS' => 'Kontaktrapporter',
  'LBL_OPPORTUNITY_REPORTS' => 'Affärsmöjlighetsrapproter',
  'LBL_CASE_REPORTS' => 'Ärenderapporter',
  'LBL_BUG_REPORTS' => 'Bugg rapporter',
  'LBL_LEAD_REPORTS' => 'Leadrapporter',
  'LBL_QUOTE_REPORTS' => 'Offertrapporter',
  'LBL_CALL_REPORTS' => 'Telefonsamtalsrapporter',
  'LBL_MEETING_REPORTS' => 'Mötesrapporter',
  'LBL_TASK_REPORTS' => 'Uppgiftsrapporter',
  'LBL_EMAIL_REPORTS' => 'Epostrapporter',
  'LBL_ALL_REPORTS' => 'Alla rapporter',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitetsrapport',
  'LBL_CHART_TYPE' => 'Diagram typ',
  'LBL_NO_REPORTS' => 'Inga resultat.',
  'LBL_SAVED_SEARCH' => 'Sparad sökning & layout',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Mitt teams organisationsrapporter',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Mitt teams affärsmöjlighetsrapporter',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Mitt teams kontaktrapporter',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Mitt teams ärenderapporter',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Mitt teams buggrapporter',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Mitt teams leadrapporter',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Mitt teams offertrapporter',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Mitt teams telefonsamtalsrapporter',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Mitt teams mötesrapporter',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Mitt teams uppgiftsrapporter',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Mitt teams epostraporter',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Mitt teams prognosrapporter',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Mitt teams targetrapporter',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Mitt teams kontraktraporter',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Mitt teams projektuppgiftsrapporter',
  'LBL_MY_ACCOUNT_REPORTS' => 'Mina organisationsrapporter',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Mina affärsmöjlighetsrapporter',
  'LBL_MY_CONTACT_REPORTS' => 'Mina kontaktrapporter',
  'LBL_MY_CASE_REPORTS' => 'Mina ärenderapporter',
  'LBL_MY_BUG_REPORTS' => 'Mina buggrapporter',
  'LBL_MY_LEAD_REPORTS' => 'Mina leadrapporter',
  'LBL_MY_QUOTE_REPORTS' => 'Mina offertrapporter',
  'LBL_MY_CALL_REPORTS' => 'Mina telefonsamtalsrapporter',
  'LBL_MY_MEETING_REPORTS' => 'Mina mötesrapporter',
  'LBL_MY_TASK_REPORTS' => 'Mina uppgiftsraporter',
  'LBL_MY_EMAIL_REPORTS' => 'Mina epostrapporter',
  'LBL_MY_FORECAST_REPORTS' => 'Mina prognosrapporter',
  'LBL_EXPORT' => 'Exportera',
  'LBL_OF' => 'eller',
  'LBL_SUCCESS_REPORT' => 'GENOMFÖRD: Rapport',
  'LBL_MY_PROSPECT_REPORTS' => 'Mina target rapporter',
  'LBL_WAS_SAVED' => 'sparades',
  'LBL_FAILURE_REPORT' => 'MISSLYCKADES: Rapport',
  'LBL_WAS_NOT_SAVED' => 'sparades inte',
  'LBL_EQUALS' => 'Lika med',
  'LBL_LESS_THAN' => 'Mindre än',
  'LBL_GREATER_THAN' => 'Större än',
  'LBL_DOES_NOT_EQUAL' => 'Inte lika med',
  'LBL_ON' => 'På',
  'LBL_BEFORE' => 'Före',
  'LBL_AFTER' => 'Efter',
  'LBL_IS_BETWEEN' => 'Mellan',
  'LBL_NOT_ON' => 'Inte på',
  'LBL_CONTAINS' => 'Innehåller',
  'LBL_DOES_NOT_CONTAIN' => 'Innehåller inte',
  'LBL_STARTS_WITH' => 'Startar med',
  'LBL_ENDS_WITH' => 'Slutar med',
  'LBL_TO_PDF' => 'Spara som PDF',
  'LBL_IS' => 'Är',
  'LBL_IS_NOT' => 'Är inte',
  'LBL_ONE_OF' => 'Är en av',
  'LBL_IS_NOT_ONE_OF' => 'Är inte en av',
  'LBL_ANY' => 'Någon',
  'LBL_ALL' => 'Åtminstone',
  'LBL_EXACT' => 'Exakt',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Kunde inte publicera. Det finns redan en publicerad rapport med samma namn.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Kan inte ångra en publicering av en rapport som ägs av en annan användare. Du har en rapport med samma namn.',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Publicerade organisations rapporter',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Publicerade kontakt rapporter',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Publicerade affärsmöjlighets rapporter',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Publicerade ärende rapporter',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Publicerade bugg rapporter',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Publicerade lead rapporter',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Publicerade offert rapporter',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Publicerade telefonsamtals rapporter',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Publicerade mötes rapporter',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Publicerade uppgifts rapporter',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Publicrade epost rapporter',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Publicerade prognos rapporter',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Publicerade target rapporter',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Det finns inga rapporter av denna typ.',
  'LBL_AND' => 'och',
  'LBL_MISSING_FIELDS' => 'Saknade fält',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Visa minst en kolumn.',
  'LBL_MISSING_INPUT_VALUE' => 'saknar inmatningsvärde.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'Saknar ett andra inmatningsvärde.',
  'LBL_NOTHING_WAS_SELECTED' => 'inget valdes.',
  'LBL_TOTAL' => 'Totalt',
  'LBL_MODULE_NAME_SAVED' => 'Modulnamn',
  'LBL_REPORT_TYPE' => 'Rapporttyp',
  'LBL_REPORT_LAST_RUN_DATE' => 'Senast visad',
  'LBL_REPORT__ATT_TYPE' => 'Typ',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Lägg till',
  'LBL_REPORT_RESET_FILTER' => 'Återställ',
  'LBL_DISPLAY_SUMMARIES' => 'Visa sammanställning',
  'LBL_HIDE_SUMMARIES' => 'Dölj sammanställning',
  'LBL_RUN_BUTTON_TITLE' => 'Kör raport [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Kör rapport',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Som originaltyp',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Som rader och kolumner',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Som summering',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Som summering med detaljer',
  'LBL_SUMMATION_WITH_DETAILS' => 'Summering med detaljer',
  'LBL_DUPLICATE_AS_MATRIX' => 'Som matris',
  'LBL_SAVE_RUN' => 'Spara och kör',
  'LBL_WITH_DETAILS' => 'Med detaljer',
  'LBL_CHOOSE_COLUMNS' => 'Välj vilka kolumner som ska visas',
  'LBL_CHOOSE_SUMMARIES' => 'Välj vilken sammanställning som ska visas',
  'LBL_GROUP_BY' => 'Gruppera enligt',
  'LBL_ADD_COLUMN' => 'Lägg till kolumn',
  'LBL_GRAND_TOTAL' => 'Totalt',
  'LBL_SEARCH_FORM_TITLE' => 'Sök rapport',
  'LBL_FORECAST_REPORTS' => 'Prognos raporter',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Mina projektuppgifts rapporter',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Publicerade projektuppgifts rapporter',
  'LBL_PROJECT_TASK_REPORTS' => 'Projektuppgifts rapporter',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Avvägd medelsumma',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Avvägd summa',
  'ERR_SELECT_COLUMN' => 'Var god välj visningskolumn först.',
  'LBL_BY_MONTH' => 'Efter månad',
  'LBL_BY_YEAR' => 'Efter år',
  'LBL_BY_QUARTER' => 'Efter kvartal',
  'LBL_COUNT' => 'Antal',
  'LBL_AVG' => 'MEDEL',
  'LBL_MONTH' => 'Månad',
  'LBL_YEAR' => 'År',
  'LBL_QUARTER' => 'Kvartal',
  'LBL_YESTERDAY' => 'Igår',
  'LBL_TODAY' => 'Idag',
  'LBL_TOMORROW' => 'Imorgon',
  'LBL_LAST_WEEK' => 'Senaste veckan',
  'LBL_NEXT_WEEK' => 'Nästa vecka',
  'LBL_LAST_7_DAYS' => 'Senaste 7 dagarna',
  'LBL_NEXT_7_DAYS' => 'Kommande 7 dagarna',
  'LBL_LAST_MONTH' => 'Senaste månaden',
  'LBL_NEXT_MONTH' => 'Kommande månad',
  'LBL_LAST_QUARTER' => 'Senaste kvartalet',
  'LBL_THIS_QUARTER' => 'Det här kvartalet',
  'LBL_LAST_YEAR' => 'Senaste året',
  'LBL_NEXT_YEAR' => 'Det här året',
  'LBL_SELECT' => 'Välj',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Minst en summringskolumn',
  'LBL_SHOW_DETAILS' => 'Visa detaljer',
  'LBL_1_REPORT_ON' => '1. Rapportera om',
  'LBL_2_FILTER' => '2. Filter',
  'LBL_3_GROUP' => '3. Gruppera',
  'LBL_3_CHOOSE' => '3. Välj kolumner att visa',
  'LBL_4_CHOOSE' => '4. Välj kolumner att visa',
  'LBL_5_CHART_OPTIONS' => '5. Diagram alternativ',
  'LBL_LABEL' => 'Etikett',
  'LBL_THIS_MONTH' => 'Den här månaden',
  'LBL_LAST_30_DAYS' => 'Senaste 30 dagarna',
  'LBL_NEXT_30_DAYS' => 'Kommande 30 dagarna',
  'LBL_THIS_YEAR' => 'Det här året',
  'LBL_LIST_FORM_TITLE' => 'Rapporter',
  'LBL_PROSPECT_REPORTS' => 'Target raporter',
  'LBL_IS_EMPTY' => 'Är tom',
  'LBL_IS_NOT_EMPTY' => 'Är inte tom',
  'LBL_CHART_DESCRIPTION' => 'Diagram beskrivning',
  'LBL_USE_COLUMN_FOR' => 'Välj en dataserie för diagram',
  'LBL_RELATED' => 'Relaterad:',
  'LBL_OWNER' => 'Tilldelad till',
  'LBL_TEAM' => 'Team',
  'LBL_TOTAL_IS' => 'Totalt är',
  'CHART_COUNT_PATTERN' => '{count} {module} när {group_label} är {group_text}',
  'LBL_WITH_A_TOTAL' => 'med en total',
  'LBL_WITH_AN_AVERAGE' => 'med ett medel',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} av {currency_symbol}{numerical_value}{thousands} när {group_label} är {group_text}',
  'LBL_WHOSE_MAXIMUM' => 'vars max',
  'LBL_WHOSE_MINIMUM' => 'vars minimum',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} är {numerical_value}{thousands} när {group_label} är {group_text}',
  'LBL_ROLLOVER' => 'För muspekaren över en stapel för detaljer',
  'LBL_ROLLOVER_WEDGE' => 'För muspekaren över en kant för detaljer',
  'LBL_ROLLOVER_SQUARE' => 'För muspekaren över en kvadrat för detaljer',
  'LBL_NO_CHART' => 'Inget diagram',
  'LBL_HORIZ_BAR' => 'Horisontell list',
  'LBL_VERT_BAR' => 'Vertikal list',
  'LBL_PIE' => 'Paj',
  'LBL_LINE' => 'Linje',
  'LBL_FUNNEL' => 'Tratt',
  'LBL_GROUP_BY_REQUIRED' => 'Summeringsrapport med en grupperingskolumn och en summeringskolumn krävs för att kunna generera en graf',
  'MSG_NO_PERMISSIONS' => 'Du saknar rättigheter att redigera den här rapporten',
  'LBL_NONE' => '-- ingen --',
  'LBL_NONE_STRING' => 'Ingen',
  'LBL_DATE_BASED_FILTERS' => '<i>Datumfilter är relaterat till tidszonen för rapporterna<b>Tilldelad</b> användare</i>',
  'LBL_CONTRACT_REPORTS' => 'Kontrakt rapporter',
  'LBL_MY_CONTRACT_REPORTS' => 'Mina kontrakt rapporter',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Publicerade kontrakt rapporter',
  'LBL_HELLO' => 'Hej',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Bifogad är en automatiskt genererad rapport, skickad till dig från Sugar. Rapporten skapades',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'och sparad med namnet \\"',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '\\". Om du önskar ändra rapportinställningarna, logga in i Sugar applikationen och klicka på \\"Rapporter\\" tabben.',
  'LBL_LIST_PUBLISHED' => 'Publicerad',
  'LBL_THIS_WEEK' => 'Den här veckan',
  'LBL_NEXT_QUARTER' => 'Nästa kvartal',
  'LBL_ADD_RELATE' => 'Lägg till relaterad',
  'LBL_DEL_THIS' => 'Ta bort',
  'LBL_ALERT_CANT_ADD' => 'Du kan inte lägga till en relatderad modul, innan du valt en tabell att relatera från.\\nVälj en modul i drop-listan till vänster om \\"Lägg till Relaterad\\"-knappen',
  'LBL_BY_DAY' => 'Efter dag',
  'LBL_DAY' => 'Dag',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Valfri',
  'LBL_ANY_ONE_OF' => 'Någon av',
  'LBL_RELATED_TABLE_BLANK' => 'Var god välj en modul att relatera till.',
  'LBL_FILTER_CONDITIONS' => 'Välj poster som uppfyller',
  'LBL_FILTER_OR' => 'Någon',
  'LBL_FILTER_AND' => 'Alla',
  'LBL_FILTERS_END' => 'av följande filter.',
  'LBL_FAVORITE_REPORTS' => 'Mina favorit rapporter',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Mina favoritrapporter',
  'LBL_ADDED_FAVORITES' => 'rapport(erna) lades till i Mina favorit rapporter',
  'LBL_REMOVED_FAVORITES' => 'rapport(erna) togs bort från Mina favorit rapporter.',
  'LBL_MODULE_TITLE' => 'Rapporter: Hem',
  'LBL_MODULE_VIEWER_TITLE' => 'Rapporter: Hem',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Rapporter',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Schemalägg',
  'LBL_FAVORITES_TITLE' => 'Rapporter: Mina favaorit rapporter',
  'LBL_TABLE_CHANGED' => 'Lista över moduler har ändrats, vänligen kontrollera kriterierna som är valda under grupptabben.',
  'LBL_OPTIONAL_HELP' => 'Välj den här boxen för att visa de primära postera för modulerna, även om de relaterade posterna inte finns. Om den här boxen inte är vald, kommer de primära posterna enbart att visas om det existerar minst 1, eller flera.',
  'DEFAULT_REPORT_TITLE_1' => 'Aktuell kvartalsprognos',
  'DEFAULT_REPORT_TITLE_2' => 'Detaljerad prognos',
  'DEFAULT_REPORT_TITLE_3' => 'Partner Organisationslista',
  'DEFAULT_REPORT_TITLE_4' => 'Kund Organisationslista',
  'DEFAULT_REPORT_TITLE_5' => 'Anropa Lista Över senaste kontaktade',
  'DEFAULT_REPORT_TITLE_6' => 'Affärsmöjligheter per Leadkälla',
  'DEFAULT_REPORT_TITLE_7' => 'Öppna ärenden per Användare per Status',
  'DEFAULT_REPORT_TITLE_8' => 'Öppna ärenden per månad efter Användare',
  'DEFAULT_REPORT_TITLE_9' => 'Öppna ärenden per Prioritet per användare',
  'DEFAULT_REPORT_TITLE_10' => 'Nya ärenden per Månad',
  'DEFAULT_REPORT_TITLE_11' => 'Pipeline per Typ per Team',
  'DEFAULT_REPORT_TITLE_12' => 'Pipeline per Team per Användare',
  'DEFAULT_REPORT_TITLE_17' => 'Vunna affärsmöjligheter efter Lead source',
  'DEFAULT_REPORT_TITLE_13' => 'Uppgifter per Team per Användare',
  'DEFAULT_REPORT_TITLE_14' => 'Telefonsamtal per Team per Användare',
  'DEFAULT_REPORT_TITLE_15' => 'Möten per Team per Användare',
  'DEFAULT_REPORT_TITLE_16' => 'Organisationer per Typ per Industri',
  'DEFAULT_REPORT_TITLE_18' => 'Leads per Lead källa',
  'DEFAULT_REPORT_TITLE_19' => 'Min användnings statistik (idag)',
  'DEFAULT_REPORT_TITLE_20' => 'Min användnings statistik (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_21' => 'Min användnings statistik  (senaste 30 dagarna)',
  'DEFAULT_REPORT_TITLE_22' => 'Min modul statistik (idag)',
  'DEFAULT_REPORT_TITLE_23' => 'Min modul statistik (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_24' => 'Min modul statistik (senaste 30 dagarna)',
  'DEFAULT_REPORT_TITLE_25' => 'Användarstatistik (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_26' => 'Användarstatistik (senaste 30 dagarna)',
  'DEFAULT_REPORT_TITLE_28' => 'Tunga frågor',
  'DEFAULT_REPORT_TITLE_29' => 'Mina ändrade poster (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_31' => 'Mina ändrade poster (senaste 30 dagarna)',
  'DEFAULT_REPORT_TITLE_43' => 'Kund konto ägare',
  'DEFAULT_REPORT_TITLE_44' => 'Mina nya kundkonton',
  'DEFAULT_REPORT_TITLE_45' => 'Affärsmöjligheter per försäljningssteg',
  'DEFAULT_REPORT_TITLE_46' => 'Affärsmöjligheter per typ',
  'DEFAULT_REPORT_TITLE_47' => 'Öppna samtal',
  'DEFAULT_REPORT_TITLE_48' => 'Öppna möten',
  'DEFAULT_REPORT_TITLE_49' => 'Öppna uppgifter',
  'DEFAULT_REPORT_TITLE_51' => 'Affärsmöjligheter vunna per användare',
  'DEFAULT_REPORT_TITLE_52' => 'Alla öppna affärsmöjligheter',
  'DEFAULT_REPORT_TITLE_53' => 'Alla stängda affärsmöjligheter',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
  'LBL_CONTENT' => 'Innehåll',
  'LBL_IS_PUBLISHED' => 'Är publicerad',
  'LBL_FAVORITE' => 'Favorit',
  'LBL_SCHEDULE_TYPE' => 'Typ av schemalägggning',
  'LBL_NO_ACCESS' => 'Du får inte se denna rapport på grund av rättighetsbegränsningar.',
  'LBL_SELECT_REPORT_TYPE' => 'Klicka på en ikon för att välja rapporttyp.',
  'LBL_SELECT_MODULE' => 'Välj modul',
  'LBL_NEXT' => 'Nästa >',
  'LBL_PREVIOUS' => '< Tillbaka',
  'LBL_CANCEL' => 'Avbryt',
  'LBL_AVAILABLE_FIELDS' => 'Tillgängliga fält',
  'LBL_RELATED_MODULES' => 'Relaterade moduler',
  'LBL_FIELD_NAME' => 'Fältnamn',
  'LBL_RUN_TIME_LABEL' => 'Körning',
  'LBL_NO_IMAGE' => 'Ingen bild',
  'LBL_BASIC_FILTERS' => 'Standard filter',
  'LBL_ADVANCED_FILTERS' => 'Avancerade filter',
  'LBL_ADD_GROUP' => 'Lägg till grupp',
  'LBL_REMOVE_GROUP' => 'Ta bort filter grupp',
  'LBL_ADD_FILTER_TO' => 'Lägg till filter till',
  'LBL_COLUMN_NAME' => 'Kolumnnamn',
  'LBL_OPTIONAL_MODULES' => 'Övriga moduler',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Välj rapporttyp',
  'LBL_SELECT_MODULE_BUTTON' => 'Klicka på en ikon för att välja modul',
  'LBL_DEFINE_FILTERS' => 'Definiera filter',
  'LBL_SELECT_GROUP_BY' => 'Definiera gruppera på',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Välj kolumner som visas',
  'LBL_REPORT_DETAILS' => 'Rapportdetaljer',
  'LBL_REPORT_GROUP_BY' => 'Gruppera enligt',
  'LBL_CLEAR' => 'Rensa',
  'LBL_CHART_OPTIONS' => 'Graf inställningar',
  'LBL_COMBO_TYPE_AHEAD' => 'Sök efter fält',
  'LBL_MATRIX_LAYOUT' => 'Layout inställningar:',
  'LBL_REMOVE_BTN_HELP' => 'Klicka för att ta bort denna filter grupp',
  'LBL_ORDER_BY' => 'Sortera på',
  'LBL_ASCENDING' => 'Stigande',
  'LBL_DESCENDING' => 'Fallande',
  'LBL_TYPE' => 'Typ',
  'LBL_SUBJECT' => 'Ämne',
  'LBL_DATE' => 'Startdatum',
  'LBL_NO_FILTERS' => 'har inga filter.',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Följande fält i den här rapporten är inte längre giltiga:',
  'LBL_CURRENT_USER' => 'Nuvarande användare',
  'LBL_CANNOT_BE_EMPTY' => 'kan inte vara tom.',
  'LBL_PREVIEW_REPORT' => 'Förhandsgranska',
  'LBL_DCE_LICENSING_REPORT' => 'Licensrapport',
  'DEFAULT_REPORT_TITLE_33' => 'Mall användning',
  'DEFAULT_REPORT_TITLE_34' => 'Max sessioner per dag (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_35' => 'Antal förfrågningar per dag (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_36' => 'Antal inloggningar per dag (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_37' => 'Frågor per dag (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_38' => 'Filer per dag (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_39' => 'Användare per dag (senaste 7 dagarna)',
  'DEFAULT_REPORT_TITLE_40' => 'Minnesanvändning per dag (senaste 7 dagarna)',
  'LBL_ALT_SHOW' => 'Visa',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Denna rapport innehåller data i följande kolumn ordning:',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Varje timme',
    21600 => 'Var 6:e timme',
    43200 => 'Var 12:e timme',
    86400 => 'Daglig',
    604800 => 'Veckovis',
    1209600 => 'Varannan vecka',
    2419200 => 'Var 4:e vecka',
  ),
);

