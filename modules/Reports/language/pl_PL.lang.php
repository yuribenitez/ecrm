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
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Kroki do wyboru wyświetlanych podsumowań</b><br />1) Kliknij na moduł w okienki <b>Powiązane moduły</b>, który chcesz użyć dla podsumowań w twoim raporcie. Domyślnie, wybrany jest moduł główny (górny węzeł w widoku drzewa).<br />Możesz wybrać powiązany moduł (węzeł podrzędny w widoku drzewa) klikając na moduł. Rozszerz węzeł, aby zobaczyć dodatkowe moduły powiązane z powiązanym modułem. Wybrany moduł decyduje, które raportowalne pola pojawiają się w okienku <b>Dostępne pola</b>.<br />2) Kliknij na pole w okienku <b> Dostępne pola </b>, aby wybrać podsumowania dla twojego raportu. Możesz również szukać pola, wpisując w polu tekstowym w okienku.<br />Po wybraniu jakiejkolwiek liczby pól z modułu wybranego w okienku <b>Powiązane moduły</b>, możesz wybrać inny moduł, z których możesz wybrać jakąkolwiek liczbę pól dla raportów w twoim raporcie<br />Dla raportów matrycowych, możesz wybrać więcej niż jedno pole do wyświetlenia kilku wartości w ramach jednej komórki w twoim raporcie.',
  'LBL_LEAD' => 'Lead',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_STATUS' => 'Status',
  'LBL_MODULE_NAME' => 'Raporty',
  'LBL_REPORT_MODULES' => 'Raportuj moduły',
  'LBL_REPORT_ATT_MODULES' => 'Moduły',
  'LBL_REPORT_EXPAND_ALL' => 'Rozwiń wszystko',
  'LBL_REPORT_COLLAPSE_ALL' => 'Zwiń wszystko',
  'LBL_REPORT_SHOW_CHART' => 'Pokaż wykres',
  'LBL_REPORT_HIDE_CHART' => 'Ukryj wykres',
  'LBL_REPORT_SHOW_DETAILS' => 'Pokaż szczegóły',
  'LBL_REPORT_HIDE_DETAILS' => 'Ukryj szczegóły',
  'LNK_NEW_CONTACT' => 'Utwórz kontakt',
  'LNK_NEW_ACCOUNT' => 'Utwórz klienta',
  'LNK_NEW_OPPORTUNITY' => 'Utrzórz okazję',
  'LNK_NEW_CASE' => 'Utwórz sprawę',
  'LNK_NEW_NOTE' => 'Utwórz notatkę lub załącznik',
  'LNK_NEW_CALL' => 'Zarejestruj rozmowę telefoniczną',
  'LNK_NEW_EMAIL' => 'Archiwizuj e-mail',
  'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
  'LNK_NEW_TASK' => 'Utwórz zadanie',
  'LBL_REPORTS' => 'Raporty',
  'LBL_TITLE' => 'Tytuł',
  'LBL_UNTITLED' => 'Bez tytułu',
  'LBL_MODULE' => 'Moduł',
  'LBL_ACCOUNTS' => 'Klienci',
  'LBL_OPPORTUNITIES' => 'Okazje',
  'LBL_CONTACTS' => 'Kontakty',
  'LBL_LEADS' => 'Leady',
  'LBL_ACCOUNT' => 'Klient',
  'LBL_OPPORTUNITY' => 'Okazja',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_DELETE_ERROR' => 'Tylko właściciele raportów lub administratorzy mogą usunąć raporty.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Raport wierszy i kolumn',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Utwórz tabelaryczny raport, który zawiera wartości wybranych pól wyświetlania dla rekordów spełniających określone kryteria.',
  'LBL_SUMMATION_REPORT' => 'Raport podumowujący',
  'LBL_SUMMATION_REPORT_DESC' => 'Utwórz tabelaryczny raport, który podaje obliczone dane dla rekordów spełniających określone kryteria. Dane te mogą być również reprezentowane w tabeli.',
  'LBL_MATRIX_REPORT' => 'Raport macierzysty',
  'LBL_MATRIX_REPORT_DESC' => 'Utwórz raport podsumowujący, który wyświetla wyniki w formie siatki i pogrupowane maksymalnie przez trzy pola.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Utwórz raport podsumowujący, który wyświetla dodatkowe dane związane z rekordami wyników.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Raport podsumowujący ze szczegółami',
  'LBL_SHOW_QUERY' => 'Pokaż zapytanie',
  'LBL_DO_ROUND' => 'Okrągłe liczby ponad 100000',
  'LBL_SAVE_AS' => 'Zapisz jako',
  'LBL_FILTERS' => 'Filtry',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Wykres niemożliwy do sporządzenia z powodu na niewystarczające dane',
  'LBL_RUNTIME_FILTERS' => 'Filtry uruchomieniowe',
  'LBL_VIEWER_RUNTIME_HELP' => 'Określ wartości Filtrów uruchomieniowych i kliknij przycisk Zastosuj filtry, aby ponownie uruchomić raport.',
  'LBL_REPORT_RESULTS' => 'Wyniki',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Kliknij na \'Uruchom raport\', aby zobaczyć wyniki.',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Filtry raportu zostały zmodyfikowane od ostatniego uruchomienia.',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Raport został zmodyfikowany od ostatniego uruchomienia.',
  'LBL_ADD_NEW_FILTER' => 'Dodaj nowy filtr',
  'LBL_DISPLAY_COLUMNS' => 'Wyświetl kolumny',
  'LBL_SUMMARY_COLUMNS' => 'Kolumny podsumowania',
  'LBL_HIDE_COLUMNS' => 'Ukryj kolumny',
  'LBL_SUBMIT_QUERY' => 'Złóż zapytanie',
  'LBL_QUERY' => 'Zapytanie',
  'LBL_CHANGE' => 'Zmień',
  'LBL_REMOVE' => 'Usuń',
  'LBL_CREATE_CUSTOM_REPORT' => 'Kreator raportu',
  'LBL_CREATE_REPORT' => 'Utwórz raport',
  'LBL_MY_SAVED_REPORTS' => 'Moje zachowane raporty',
  'LBL_MY_TEAMS_REPORTS' => 'Raporty mojego zespołu',
  'LBL_REPORT_NAME' => 'Nazwa raportu',
  'LBL_REPORT_ATT_NAME' => 'Nazwa',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Prognoza obecnego kwartału',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Wszystkie opublikowane raporty',
  'LBL_DETAILED_FORECAST' => 'Szczegółowa prognoza',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Lista kont partnerów',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Lista kont klientów',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Lista telefonów według ostatniej daty kontaktu',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Okazje według źródła leada',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Zatwierdzone deale',
  'LBL_VIEW' => 'Widok',
  'LBL_DELETE' => 'Usuń',
  'LBL_PUBLISH' => 'Publikuj',
  'LBL_UN_PUBLISH' => 'cofnij publikację',
  'LBL_SCHEDULE_REPORT' => 'Raport harmonogramu',
  'LBL_START_DATE' => 'Data rozpoczęcia',
  'LBL_END_DATE' => 'Data zakończenia',
  'LBL_FILTER_DATE_RANGE_START' => 'Od',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Do',
  'LBL_SELECT_RECORD' => 'Wybierz rekord',
  'LBL_TIME_INTERVAL' => 'Przedział czasu',
  'LBL_SCHEDULE_ACTIVE' => 'Aktywny',
  'LBL_SCHEDULE_EMAIL' => 'Raport harmonogramu',
  'LBL_NEXT_RUN' => 'Następny e-mail',
  'LBL_UPDATE_SCHEDULE' => 'Aktualizuj harmonogram',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Nie masz zachowanych raportów.',
  'LBL_MY_REPORTS' => 'Moje raporty',
  'LBL_ACCOUNT_REPORTS' => 'Raporty klientów',
  'LBL_CONTACT_REPORTS' => 'Raporty kontaktów',
  'LBL_OPPORTUNITY_REPORTS' => 'Raporty okazji',
  'LBL_CASE_REPORTS' => 'Raporty spraw',
  'LBL_BUG_REPORTS' => 'Raporty usterek',
  'LBL_LEAD_REPORTS' => 'Raporty leadów',
  'LBL_QUOTE_REPORTS' => 'Raporty wycen',
  'LBL_CALL_REPORTS' => 'Raporty rozmów tel.',
  'LBL_MEETING_REPORTS' => 'Raporty spotkań',
  'LBL_TASK_REPORTS' => 'Raporty zadań',
  'LBL_EMAIL_REPORTS' => 'Raporty e-maili',
  'LBL_ALL_REPORTS' => 'Pokaż raporty',
  'LBL_ACTIVITIES_REPORTS' => 'Raporty działań',
  'LBL_CHART_TYPE' => 'Typ wykresu',
  'LBL_NO_REPORTS' => 'Brak wyników.',
  'LBL_SAVED_SEARCH' => 'Zapisane wyszukiwanie i wygląd',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Raporty klientów mojego zespołu',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Raporty okazji mojego zespołu',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Raporty kontaktów mojego zespołu',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Raporty spraw mojego zespołu',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Raporty usterek mojego zespołu',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Raporty leadów mojego zespołu',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Raporty wycen mojego zespołu',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Raporty rozmów tel. mojego zespołu',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Raporty spotkań mojego zespołu',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Raporty zadań mojego zespołu',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Raporty e-maili mojego zespołu',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Raporty prognóz mojego zespołu',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Raporty celów mojego zespołu',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Raporty kontraktów mojego zespołu',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Raporty zadań projektowych mojego zespołu',
  'LBL_MY_ACCOUNT_REPORTS' => 'Raporty moich klientów',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Raporty moich okazji',
  'LBL_MY_CONTACT_REPORTS' => 'Raporty moich kontaktów',
  'LBL_MY_CASE_REPORTS' => 'Raporty moich spraw',
  'LBL_MY_BUG_REPORTS' => 'Moje raporty usterek',
  'LBL_MY_LEAD_REPORTS' => 'Raporty moich leadów',
  'LBL_MY_QUOTE_REPORTS' => 'Raporty moich wycen',
  'LBL_MY_CALL_REPORTS' => 'Moje raporty rozmów tel.',
  'LBL_MY_MEETING_REPORTS' => 'Raporty moich spotkań',
  'LBL_MY_TASK_REPORTS' => 'Raporty moich zadań',
  'LBL_MY_EMAIL_REPORTS' => 'Raporty moich e-maili',
  'LBL_MY_FORECAST_REPORTS' => 'Raporty moich prognóz',
  'LBL_EXPORT' => 'Eksportuj',
  'LBL_OF' => 'z',
  'LBL_SUCCESS_REPORT' => 'Sukces: Raport',
  'LBL_MY_PROSPECT_REPORTS' => 'Raporty moich celów',
  'LBL_WAS_SAVED' => 'zostało zachowane',
  'LBL_FAILURE_REPORT' => 'Niepowodzenie: Raport',
  'LBL_WAS_NOT_SAVED' => 'nie zostało zachowane',
  'LBL_EQUALS' => 'Jednakowe',
  'LBL_LESS_THAN' => 'Mniej niż',
  'LBL_GREATER_THAN' => 'Więcej niż',
  'LBL_DOES_NOT_EQUAL' => 'Nie jest równe',
  'LBL_ON' => 'W',
  'LBL_BEFORE' => 'Przed',
  'LBL_AFTER' => 'Po',
  'LBL_IS_BETWEEN' => 'Jest pomiędzy',
  'LBL_NOT_ON' => 'Nie na',
  'LBL_CONTAINS' => 'Zawiera',
  'LBL_DOES_NOT_CONTAIN' => 'Nie zawiera',
  'LBL_STARTS_WITH' => 'Zaczyna się od',
  'LBL_ENDS_WITH' => 'Kończy się do',
  'LBL_TO_PDF' => 'Zachowaj jako PDF',
  'LBL_IS' => 'jest',
  'LBL_IS_NOT' => 'nie jest',
  'LBL_ONE_OF' => 'Jest jednym z',
  'LBL_IS_NOT_ONE_OF' => 'Nie jest jednym z',
  'LBL_ANY' => 'Jakikolwiek',
  'LBL_ALL' => 'Przynajmniej',
  'LBL_EXACT' => 'Dokładny',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Niemożliwy do publikacji. Istnieje inny opublikowany raport o tej samej nazwie.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Nie można cofnąć publikacji raportu będącego właśnością innego użytkownika. Posiadasz raport o tej samej nazwie.',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Raporty opublikowanych klientów',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Raporty opublikowanych kontaktów',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Raporty opublikowanych okazji',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Raporty opublikowanych spraw',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Opublikowane raporty usterek',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Raporty opublikowanych leadów',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Raporty opublikowanych wycen',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Opublikowane raporty rozmów tel.',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Raporty opublikowanych spotkań',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Raporty opublikowanych zadań',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Raporty opublikowanych e-maili',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Raporty opublikowanych prognóz',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Raporty opublikowanych celów',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Brak raportów tego typu.',
  'LBL_AND' => 'i',
  'LBL_MISSING_FIELDS' => 'Brakujące pola',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Wybierz przynajmniej jedną kolumnę wyświetlacza.',
  'LBL_MISSING_INPUT_VALUE' => 'brak wartości wejściowej.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'brak drugiej wartości wejściowej.',
  'LBL_NOTHING_WAS_SELECTED' => 'Nic nie zostało wybrane.',
  'LBL_TOTAL' => 'Łączny',
  'LBL_MODULE_NAME_SAVED' => 'Nazwa modułu',
  'LBL_REPORT_TYPE' => 'Typ raportu',
  'LBL_REPORT_LAST_RUN_DATE' => 'Ostatnia data dostępu',
  'LBL_REPORT__ATT_TYPE' => 'Typ',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Zastosuj',
  'LBL_REPORT_RESET_FILTER' => 'Resetuj',
  'LBL_DISPLAY_SUMMARIES' => 'Wybierz podsumowanie wyświetlacza',
  'LBL_HIDE_SUMMARIES' => 'Ukryj podsumowania',
  'LBL_RUN_BUTTON_TITLE' => 'Uruchom raport [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Uruchom raport',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Jako oryginalny typ',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Jako wiersze i kolumny',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Jako podsumowanie',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Jako podsumowanie ze szczegółami',
  'LBL_SUMMATION_WITH_DETAILS' => 'Podsumowanie ze szczegółami',
  'LBL_DUPLICATE_AS_MATRIX' => 'Jako macierz',
  'LBL_SAVE_RUN' => 'Zachowaj i uruchom',
  'LBL_WITH_DETAILS' => 'Ze szczegółami',
  'LBL_CHOOSE_COLUMNS' => 'Wybierz kolumny do wyświetlenia',
  'LBL_CHOOSE_SUMMARIES' => 'Wybierz podsumowania do wyświetlenia',
  'LBL_GROUP_BY' => 'Grupuj według',
  'LBL_ADD_COLUMN' => 'Dodaj kolumnę',
  'LBL_GRAND_TOTAL' => 'Suma',
  'LBL_SEARCH_FORM_TITLE' => 'Lista raportów',
  'LBL_FORECAST_REPORTS' => 'Raporty prognóz',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Raporty moich zadań projektowych',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Raporty opublikowanych zadań projektowych',
  'LBL_PROJECT_TASK_REPORTS' => 'Raporty zadań projektowych',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Ważona średnia kwota',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Ważona kwota sumy',
  'ERR_SELECT_COLUMN' => 'Proszę wybrać najpierw kolumnę wyświetlacza.',
  'LBL_BY_MONTH' => 'Według miesiąca',
  'LBL_BY_YEAR' => 'Według roku',
  'LBL_BY_QUARTER' => 'Według kwartału',
  'LBL_COUNT' => 'Liczba',
  'LBL_SUM' => 'Suma',
  'LBL_AVG' => 'Średnia',
  'LBL_MAX' => 'Max',
  'LBL_MIN' => 'Min',
  'LBL_QUARTER_ABBREVIATION' => 'K',
  'LBL_MONTH' => 'Miesiąc',
  'LBL_YEAR' => 'Rok',
  'LBL_QUARTER' => 'Kwartał',
  'LBL_YESTERDAY' => 'Wczoraj',
  'LBL_TODAY' => 'Dzisiaj',
  'LBL_TOMORROW' => 'Jutro',
  'LBL_LAST_WEEK' => 'Ostatni tydzień',
  'LBL_NEXT_WEEK' => 'Następny tydzień',
  'LBL_LAST_7_DAYS' => 'Ostatnie 7 dni',
  'LBL_NEXT_7_DAYS' => 'Następne 7 dni',
  'LBL_LAST_MONTH' => 'Ostatni miesiąc',
  'LBL_NEXT_MONTH' => 'Następny miesiąc',
  'LBL_LAST_QUARTER' => 'Ostatni kwartał',
  'LBL_THIS_QUARTER' => 'Ten kwartał',
  'LBL_LAST_YEAR' => 'Ostatni rok',
  'LBL_NEXT_YEAR' => 'Następny rok',
  'LBL_SELECT' => 'Wybierz',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Przynajmniej jedną kolumnę podsumowania.',
  'LBL_SHOW_DETAILS' => 'Pokaż szczegóły',
  'LBL_1_REPORT_ON' => 'Raportuj',
  'LBL_2_FILTER' => 'Filtr',
  'LBL_3_GROUP' => '3. Grupa',
  'LBL_3_CHOOSE' => '3. Wybierz kolumny wyswietlacza',
  'LBL_4_CHOOSE' => '4. Wybierz kolumny wyswietlacza',
  'LBL_5_CHART_OPTIONS' => '5. Opcje wykresu',
  'LBL_LABEL' => 'Etykieta',
  'LBL_THIS_MONTH' => 'Ten miesiąc',
  'LBL_LAST_30_DAYS' => 'Ostatnie 30 dni',
  'LBL_NEXT_30_DAYS' => 'Następne 30 dni',
  'LBL_THIS_YEAR' => 'Ten rok',
  'LBL_LIST_FORM_TITLE' => 'Raporty',
  'LBL_PROSPECT_REPORTS' => 'Raporty celów',
  'LBL_IS_EMPTY' => 'Jest pusty',
  'LBL_IS_NOT_EMPTY' => 'Nie jest pusty',
  'LBL_CHART_DESCRIPTION' => 'Opis',
  'LBL_USE_COLUMN_FOR' => 'Serie danych',
  'LBL_RELATED' => 'Powiązany:',
  'LBL_OWNER' => 'Przydzielone do',
  'LBL_TEAM' => 'Zespoły',
  'LBL_TOTAL_IS' => 'Całość wynosi',
  'LBL_WITH_A_TOTAL' => 'o łącznej',
  'LBL_WITH_AN_AVERAGE' => 'o średniej',
  'LBL_WHOSE_MAXIMUM' => 'którego maksymalny/a',
  'LBL_WHOSE_MINIMUM' => 'którego minimalny/a',
  'LBL_ROLLOVER' => 'Rozwiń pasek, aby zobaczyć szczegóły.',
  'LBL_ROLLOVER_WEDGE' => 'Rozwiń klin, aby zobaczyć szczegóły.',
  'LBL_ROLLOVER_SQUARE' => 'Rozwiń kwadrat, aby zobaczyć szczegóły.',
  'LBL_NO_CHART' => 'Brak wykresu',
  'LBL_HORIZ_BAR' => 'Poziomy pasek',
  'LBL_VERT_BAR' => 'Pionowy pasek',
  'LBL_PIE' => 'Koło',
  'LBL_LINE' => 'Linia',
  'LBL_FUNNEL' => 'Lejek',
  'LBL_GROUP_BY_REQUIRED' => 'Przynajmniej jedna grupa i jedna kolumna podsumowania są wymagane, aby wykonać wykres.',
  'MSG_NO_PERMISSIONS' => 'Nie masz pozwolenia do edycji tego raportu',
  'LBL_NONE' => '-- nic --',
  'LBL_NONE_STRING' => 'Nic',
  'LBL_DATE_BASED_FILTERS' => 'Filtry dat są w stosunku do strefy czasowej przydzielonego użytkownika raportu',
  'LBL_CONTRACT_REPORTS' => 'Raporty kontraktów',
  'LBL_MY_CONTRACT_REPORTS' => 'Raporty moich kontraktów',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Raporty opublikowanych kontraktów',
  'LBL_HELLO' => 'Witaj',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'W załączniku jest automatycznie wygenerowany raport wysłany do Ciebie przez aplikację Sugar. Ten raport został utworzony',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'i zachowany jako "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Jeśli chcesz zmienić ustawienia raportu, zaloguj się do aplikacji Sugar i kliknij na kartę "Raporty".',
  'LBL_LIST_PUBLISHED' => 'Opublikowano',
  'LBL_THIS_WEEK' => 'W tym tygodniu',
  'LBL_NEXT_QUARTER' => 'W następnym kwartale',
  'LBL_ADD_RELATE' => 'Dodaj powiązane',
  'LBL_DEL_THIS' => 'Usuń',
  'LBL_ALERT_CANT_ADD' => 'Nie możesz dodać powiązany moduł dopóki nie wybierzesz, od której należy się odnosić. Wybierz moduł w rozwijanej liście na lewo od klikniętego przycisku \'Dodaj powiązane\'.',
  'LBL_BY_DAY' => 'Według dnia',
  'LBL_DAY' => 'Dzień',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Opcjonalne powiązane moduły',
  'LBL_ANY_ONE_OF' => 'Jeden z',
  'LBL_RELATED_TABLE_BLANK' => 'Proszę wybrać moduł, do którego należy się odnieść.',
  'LBL_FILTER_CONDITIONS' => 'Wybierz operatora:',
  'LBL_FILTER_OR' => 'Lub',
  'LBL_FILTER_AND' => 'i',
  'LBL_FILTERS_END' => 'następujących filtrów.',
  'LBL_FAVORITE_REPORTS' => 'Moje ulubione raporty',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Moje ulubione raporty',
  'LBL_ADDED_FAVORITES' => 'raport(y) dodane do moich ulubionych raportów.',
  'LBL_REMOVED_FAVORITES' => 'raport(y) usunięte z moich ulubionych raportów.',
  'LBL_MODULE_TITLE' => 'Raporty: Strona główna',
  'LBL_MODULE_VIEWER_TITLE' => 'Przeglądarka raportów: Strona główna',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Przeglądarka raportów',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Harmonogram',
  'LBL_FAVORITES_TITLE' => 'Moje ulubione raporty',
  'LBL_TABLE_CHANGED' => 'Lista modułów została zmodyfikowana, proszę dokładnie sprawdź kryteria wprowadzone w karcie \'Grupy\'.',
  'LBL_OPTIONAL_HELP' => 'Wybierz pola wyboru do wyświetlenia rekordów głównego głównego nawet jeśli powiązane rekordy modułu nie istnieją. Jeśli pole wyboru nie jest wybrane, rekordy modułu głównego wyświetlą się tylko jeśli mają jeden lub więcej powiązanych rekordów modułu.',
  'LBL_RUNTIME_HELP' => 'Wybierz to pole wyboru, aby umożliwić użytkownikom zmienić wartość filtru przed zachowaniem raportu.',
  'LBL_USER_EMPTY_HELP' => 'Aby zobaczyć rekordy, które nie są przdzielone do żadnych użytkowników, zaznacz pole wyboru "Opcjonalne powiązane moduły\'" w kroku "Szczegóły raportu " oprócz używania opcji "Jest pusty" dla filtru przydzielonego użytkownika. Wyświetlone zostaną wszystkie rekordy, które nie są powiązane z żadnymi użytkownikami.',
  'DEFAULT_REPORT_TITLE_1' => 'Prognoza obecnego kwartału',
  'DEFAULT_REPORT_TITLE_2' => 'Szczegółowa prognoza',
  'DEFAULT_REPORT_TITLE_3' => 'Lista kont partnerów',
  'DEFAULT_REPORT_TITLE_4' => 'Lista kont klientów',
  'DEFAULT_REPORT_TITLE_5' => 'Lista rozmów telefonicznych według ostatniej daty kontaktu',
  'DEFAULT_REPORT_TITLE_6' => 'Okazje według źródła leada',
  'DEFAULT_REPORT_TITLE_7' => 'Otwarte sprawy według użytkownika według statusu',
  'DEFAULT_REPORT_TITLE_8' => 'Otwarte sprawy według miesiąca według użytkownika',
  'DEFAULT_REPORT_TITLE_9' => 'Otwarte sprawy według priorytetu według użytkownika',
  'DEFAULT_REPORT_TITLE_10' => 'Nowe sprawy według miesiąca',
  'DEFAULT_REPORT_TITLE_11' => 'Pipeline według typu według zespołu',
  'DEFAULT_REPORT_TITLE_12' => 'Pipeline według zespołu według użytkownika',
  'DEFAULT_REPORT_TITLE_17' => 'Okazje wygrane według źródła leada',
  'DEFAULT_REPORT_TITLE_13' => 'Zadanie według zespołu według użytkownika',
  'DEFAULT_REPORT_TITLE_14' => 'Rozmowy telefoniczne według zespołu według użytkownika',
  'DEFAULT_REPORT_TITLE_15' => 'Spotkania według zespołu według użytkownika',
  'DEFAULT_REPORT_TITLE_16' => 'Klienci według typu według branży',
  'DEFAULT_REPORT_TITLE_18' => 'Leady według źródła leada',
  'DEFAULT_REPORT_TITLE_19' => 'Moje wskaźniki użytkowania (dzisiaj)',
  'DEFAULT_REPORT_TITLE_20' => 'Moje wskaźniki użytkowania (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_21' => 'Moje wskaźniki użytkowania (ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_22' => 'Moje użytkowanie modułu (dzisiaj)',
  'DEFAULT_REPORT_TITLE_23' => 'Moje użytkowanie modułu (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_24' => 'Moje użytkowanie modułu (ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_25' => 'Wskaźniki użytkowania użytkowników (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_26' => 'Wskaźniki użytkowania użytkowników (ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_27' => 'Moduły używane przez moich bezpośrednich podwładnych (ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_28' => 'Powolne zapytania',
  'DEFAULT_REPORT_TITLE_29' => 'Moje zmodyfikowane rekordy (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_31' => 'Moje ostatnio zmodyfikowane rekordy (ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_32' => 'Rekordy modyfikowane przez moich bezpośrednich podwładnych (ostatnie 30 dni)',
  'DEFAULT_REPORT_TITLE_41' => 'Sesje aktywnych użytkowników (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_42' => 'Podsumowanie sesji użytkowników (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_43' => 'Właściciele kont klientów',
  'DEFAULT_REPORT_TITLE_44' => 'Moje nowe konta klientów',
  'DEFAULT_REPORT_TITLE_45' => 'Okazje według etapu sprzedaży',
  'DEFAULT_REPORT_TITLE_46' => 'Okazje według typu',
  'DEFAULT_REPORT_TITLE_47' => 'Otwarte rozmowy telefoniczne',
  'DEFAULT_REPORT_TITLE_48' => 'Otwarte spotkania',
  'DEFAULT_REPORT_TITLE_49' => 'Otwarte zadania',
  'DEFAULT_REPORT_TITLE_50' => 'Okazje wygrane według klienta',
  'DEFAULT_REPORT_TITLE_51' => 'Okazje wygrane według użytkownika',
  'DEFAULT_REPORT_TITLE_52' => 'Wszystkie otwarte okazje',
  'DEFAULT_REPORT_TITLE_53' => 'Wszystkie zamnięte okazje',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielone do:',
  'LBL_CONTENT' => 'Zawartość',
  'LBL_IS_PUBLISHED' => 'Jest opublikowany',
  'LBL_FAVORITE' => 'Ulubione',
  'LBL_SCHEDULE_TYPE' => 'Typ harmonogramu',
  'LBL_NO_ACCESS' => 'Nie masz dostępu do tego raportu z powodu ograniczonych uprawnień.',
  'LBL_SELECT_REPORT_TYPE' => 'Kliknij ikonę, aby wybrać typ raportu.',
  'LBL_SELECT_MODULE' => 'Wybierz moduł',
  'LBL_NEXT' => 'Następny >',
  'LBL_PREVIOUS' => '< Wstecz',
  'LBL_CANCEL' => 'Anuluj',
  'LBL_AVAILABLE_FIELDS' => 'Dostępne pola',
  'LBL_RELATED_MODULES' => 'Powiązane moduły',
  'LBL_FIELD_NAME' => 'Nazwa pola',
  'LBL_RUN_TIME_LABEL' => 'Czas procesu',
  'LBL_NO_IMAGE' => 'Brak obrazka',
  'LBL_BASIC_FILTERS' => 'Podstawowe filtry',
  'LBL_ADVANCED_FILTERS' => 'Zaawansowane filtry',
  'LBL_ADD_GROUP' => 'Dodaj grupę filtru',
  'LBL_REMOVE_GROUP' => 'Usuń grupę filtru',
  'LBL_FILTER' => 'Filtr',
  'LBL_ADD_FILTER_TO' => 'Dodaj filtr do',
  'LBL_COLUMN_NAME' => 'Nazwa kolumny',
  'LBL_OPTIONAL_MODULES' => 'Opcjonalne moduły',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Wybierz typ raportu',
  'LBL_SELECT_MODULE_BUTTON' => 'Kliknij ikonę, aby wybrać moduł.',
  'LBL_DEFINE_FILTERS' => 'Zdefiniuj filtry',
  'LBL_SELECT_GROUP_BY' => 'Zdefiniuj grupę według',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Wybierz kolumny wyświetlacza',
  'LBL_REPORT_DETAILS' => 'Szczegóły raportu',
  'LBL_REPORT_GROUP_BY' => 'Grupuj według',
  'LBL_CLEAR' => 'Wyczyść',
  'LBL_CHART_OPTIONS' => 'Opcje wykresu',
  'LBL_CHART_DATA_HELP' => 'Wybierz podsumowanie, które będzie wyświetlone na wykresie',
  'LBL_DO_ROUND_HELP' => 'Liczby ponad 100000 będą zaokrąglone w wykresach.<br />Przykład: 350000 będzie wyrażone jako 350K.',
  'LBL_COMBO_TYPE_AHEAD' => 'Szukaj pola',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Raporty macierzysty nie może mieć więcej niż klauzuly, wobec których należy grupować.',
  'LBL_MINIMUM_2_GROUP_BY' => 'Raport macierzysty',
  'LBL_MATRIX_LAYOUT' => 'Opcje wyglądu:',
  'LBL_REMOVE_BTN_HELP' => 'Kliknij, aby usunąć tą grupę filtru',
  'LBL_ADD_BTN_HELP' => 'Kliknij, aby dodać nową grupę filtru. Użyj grupy, aby zastosować logikę I/LUB do zestawów filtri.',
  'LBL_ORDER_BY' => 'Sortuj według',
  'LBL_ASCENDING' => 'Rosnąco',
  'LBL_DESCENDING' => 'Malejąco',
  'LBL_TYPE' => 'Typ',
  'LBL_SUBJECT' => 'Temat',
  'LBL_DATE' => 'Data rozpoczęcia',
  'LBL_1X2' => '1 x 2',
  'LBL_2X1' => '2 x 1',
  'LBL_NO_FILTERS' => 'nie ma filtrów.',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Następujące pole w tym raporcie jest nieważne:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Proszę edytować raport i upewnić się, że inne parametry są nadal ważne.',
  'LBL_CURRENT_USER' => 'Obecny użytkownik',
  'LBL_MODULE_CHANGE_PROMPT' => 'Zmiana wybranego modułu spowoduje utratę filtrów, kolumn wyświetlacza, itd. Czy nadal chcesz kontynuować?',
  'LBL_CANNOT_BE_EMPTY' => 'nie może być pusty.',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Wszystkie pola z wybranego modułu w \'Powiązane moduły\' pojawią się tutaj. Wybierz pole.',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Moduł główny i wszystkie moduły powiązane z modułem głównym pojawią się tutaj. Wybierz moduł.',
  'LBL_PREVIEW_REPORT' => 'Podgląd',
  'LBL_FILTERS_HELP_DESC' => 'Kroki do zdefiniowania filtrów:<br /><br />1) Kliknij na moduł w okienki \'Powiązane moduły\', który chcesz użyć do zdefiniowania filtra. Domyślnie, wybrany jest moduł główny (górny węzeł w widoku drzewa).<br />Możesz wybrać powiązany moduł (węzeł podrzędny w widoku drzewa) klikając na moduł. Rozszerz węzeł, aby zobaczyć dodatkowe moduły powiązane z powiązanym modułem. Wybrany moduł decyduje, któwy raportowalne pola pojawiają się w okienku \'Dostępne pola\'.<br /><br />2) Kliknij na pole w okienku \'Dostępne pola\', aby dodać do filtrów. Możesz również szukać pola, wpisując w polu tekstowym w okienku.<br />Po wybraniu jakiejkolwiek liczby pól z modułu wybranego w okienku \'Powiązane moduły\', możesz wybrać inny moduł, z których możesz wybrać jakąkolwiek liczbę pól do użycia jako filtrów.<br /><br />3) Wybierz I lub LUB, aby wskazać czy wszystkie filtry lub jakiekolwiek filtry, odpowiednio, są używane do znajdywania informacji do raportu.<br /><br />4) [Opcjonalne] Kliknij na \'Dodaj grupę filtru\', aby utworzyć grupę filtrów. Możesz mieć jakąkolwiek liczbę grup filtrów i filtrów w grupie, aby utworzyć zagnieżdżone filtry.<br /><br />5) [Opcjonalne] Wybierz opcję Run-time dla filtru, aby użytkownicy mogli używać filtra do dalszej personalizacji wyników raportów podczas oglądania raportu.',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Kroki do określenia grupy</b>:<br /><br />1) Kliknij na Moduł w okienku <b>Powiązane moduły</b>, który chcesz użyć do grupowania rekordów w twoim raporcie. Domyślnie, zaznaczony jest moduł główny (górny węzeł w widoku drzewa).<br /><br />Klikając na moduł, możesz wybrać moduł powiązany (węzeł podrzędny w widoku drzewa). Rozszerz węzeł, aby zobaczyć dodatkowe moduły powiązane do powiązanego modułu. Moduł, który zaznaczysz określa które raportowalne pola pojawią się w okienku <b>Dostępne pola</b>.<br /><br />2)Kliknij na pole w okienku <b>Dostępne pola</b>, aby grupować rekordy według pola w twoim raporcie. Możesz również szukać pola przez wpisanie w polu tekstowym w okienku.<br /><br />Po zaznaczeniu dowolnej ilości pól w module wybranym w okienku <b>Powiązane pola</b>, możesz zaznaczyć inny moduł, z którego możesz wybrać dowolną ilość pól do grupowania rekordów. Pamiętaj, że raport staje się mniej czytelny, gdy grupujesz według więcej niż kilka pól.<br /><br />Możesz zmienić kolejność pól przez ich przeciągnięcie i upuszczenie w żądanym położeniu. Zmiana kolejności wpływa na sposób wyświetlania wyników.<br /><br />Dla raportów matrycowych, możesz użyć maksymalnie trzy pola do grupowania rekordów.',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Kroki do wyboru kolumn wyświetlania:</b><br /><br />1) Kliknij na Moduł w okienku <b>Powiązane moduły</b>, który chcesz użyć do wyświetlania danych w twoim raporcie. Domyślnie, zaznaczony jest moduł główny (górny węzeł w widoku drzewa), który wybrałeś podczas kroku \'Wybierz moduł\'.<br /><br />Klikając na moduł, możesz wybrać pola z modułu powiązanego (węzeł podrzędny w widoku drzewa). Możesz wybrać również moduły powiązane z modułami powiązanymi z modułem głównym. Wybrany moduł określa które raportowalne pola pojawiają się w okienku "Dostępne pola".<br /><br />2)Kliknij na pole w okienku <b>Dostępne pola</b>, aby wyświetlić dane pola w rekordach w twoim raporcie. Możesz również szukać pola przez wpisanie w polu tekstowym w okienku.<br /><br />Po zaznaczeniu dowolnej ilości pól w module wybranym w okienku <b>Powiązane pola</b>, możesz zaznaczyć inny moduł, z którego możesz wybrać dodatkowe pola. Możesz wybrać dowolną ilość pól, ale pamiętaj, że raport jest wolniej generowany i staje się mniej czytelny, gdy dodajesz więcej niż kilka pól.<br /><br />Możesz zmienić kolejność pól przez ich przeciągnięcie i upuszczenie w żądanym położeniu. Zmiana kolejności pól zmienia kolejność, w której kolymny są wyśietlane w wynikach.<br /><br />Dla raportów matrycowych, możesz użyć maksymalnie trzy pola do grupowania rekordów.',
  'LBL_DCE_LICENSING_REPORT' => 'Raport licencyjny',
  'DEFAULT_REPORT_TITLE_33' => 'Użytkowanie szablonów',
  'DEFAULT_REPORT_TITLE_34' => 'Maksymalna liczba sesji dziennie (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_35' => 'Liczba żądań dziennie (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_36' => 'Logowania dziennie (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_37' => 'Zapytania dziennie (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_38' => 'Pliki dziennie (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_39' => 'Użytkownicy dziennie (ostatnie 7 dni)',
  'DEFAULT_REPORT_TITLE_40' => 'Wykorzystanie pamięci dziennie (ostatnie 7 dni)',
  'LBL_ALT_SHOW' => 'Pokaż',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Ten raport zawiera dane w następującej kolejności kolumn:',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Co godzinę',
    21600 => 'Co 6 godzin',
    43200 => 'Co 12 godzin',
    86400 => 'Dziennie',
    604800 => 'Tygodniowo',
    1209600 => 'Co 2 tygodnie',
    2419200 => 'Co 4 tygodnie',
  ),
);

