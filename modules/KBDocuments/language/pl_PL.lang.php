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
  'LBL_NOT_AN_ADMIN_USER' => 'Nie jest to użytkownik administracyjny',
  'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' => 'Błąd: Nie jest to element wejścia pliku',
  'LBL_KBDOC_ATTACHMENT' => 'Kbdoc_attahment',
  'LBL_ID' => 'ID',
  'LBL_STATUS' => 'Status',
  'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
  'LBL_DOC_STATUS' => 'Status:',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_MODULE_NAME' => 'Baza wiedzy',
  'LBL_MODULE_TITLE' => 'Artykuł bazy wiedzy',
  'LNK_NEW_ARTICLE' => 'Utwórz artykuł',
  'LNK_KBDOCUMENT_LIST' => 'Zobacz dokumenty',
  'LBL_DOC_REV_HEADER' => 'Przegląd dokumentów',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie dokumentu',
  'LBL_KBDOC_TAGS' => 'Tagi:',
  'LBL_KBDOC_BODY' => 'Treść:',
  'LBL_KBDOC_APPROVED_BY' => 'Zatwierdzone przez:',
  'LBL_KBDOC_ATTS_TITLE' => 'Pobierz załącznik:',
  'LBL_SEND_EMAIL' => 'Wyslij e-mail',
  'LBL_SELECT_TAG_BUTTON_TITLE' => 'Wybierz',
  'LBL_ATTACHMENTS' => 'Załączniki:',
  'LBL_EMBEDED_IMAGES' => 'Wbudowane obrazy:',
  'LBL_SHOW_ARTICLE_DETAILS' => 'Pokaż więcej szczegółów:',
  'LBL_HIDE_ARTICLE_DETAILS' => 'Ukryj szczegóły',
  'LBL_TAGS' => 'Tagi:',
  'LBL_NOT_A_VALID_FILE' => 'Nieprawidłowy plik',
  'LBL_SELECT_A_NODE_FROM_TREE' => 'Utwórz nowy tag',
  'LBL_SEARCH' => 'Szukaj',
  'LBL_NEW_TAG_NAME' => 'Nowa nazwa tagu:',
  'LBL_KBDOCUMENT_ID' => 'ID dokumentu',
  'LBL_ARTICLE_TITLE' => 'Tytuł:',
  'LBL_ARTICLE_AUTHOR' => 'Autor:',
  'LBL_ARTICLE_APPROVED_BY' => 'Zatwierdzający:',
  'LBL_ARTICLE_BODY' => 'Treść artykułu:',
  'LBL_NAME' => 'Nazwa dokumentu:',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_CATEGORY' => 'Kategoria',
  'LBL_SUBCATEGORY' => 'Podkategoria',
  'LBL_CREATED_BY' => 'Utworzone przez',
  'LBL_DATE_ENTERED' => 'Data utworzenia',
  'LBL_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_DELETED' => 'Usunięte',
  'LBL_MODIFIED' => 'Zmodyfikowane przez id',
  'LBL_MODIFIED_USER' => 'Zmodyfikowane przez',
  'LBL_CREATED' => 'Utworzone przez',
  'LBL_RELATED_DOCUMENT_ID' => 'ID powiązanego dokumentu',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID wersji powiązanego dokumentu',
  'LBL_IS_TEMPLATE' => 'Jest szablonem',
  'LBL_TEMPLATE_TYPE' => 'Typ dokumentu',
  'LBL_PARENT_TYPE' => 'Typ nadrzędny',
  'LBL_NUMBER' => 'Numer',
  'LBL_TEXT_BODY' => 'Treść',
  'LBL_CREATED_BY_NAME' => 'Utworzone przez',
  'LBL_TAG_ID' => 'Id tagu',
  'LBL_REVISION_NAME' => 'Numer wersji',
  'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Numer wersji dokumentu',
  'LBL_MIME' => 'Typ mime',
  'LBL_REVISION' => 'Wersja',
  'LBL_DOCUMENT' => 'Powiązany dokument',
  'LBL_LATEST_REVISION' => 'ID ostatniego wersji',
  'LBL_LATEST_REVISION_NAME' => 'Nazwa ostatniej wersji',
  'LBL_SELECTED_REVISION_NAME' => 'Nazwa wybranej wersji',
  'LBL_CHANGE_LOG' => 'Zmień log',
  'LBL_ACTIVE_DATE' => 'Data publikacji',
  'LBL_EXPIRATION_DATE' => 'Data wygaśnięcia',
  'LBL_FILE_EXTENSION' => 'Rozszerzenie pliku',
  'LBL_KNOWLEDGE_BASE_SEARCH' => 'Baza wiedzy',
  'LBL_KNOWLEDGE_BASE_ADMIN' => 'Administrator bazy wiedzy',
  'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Administruj bazę wiedzy',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nieokreślony',
  'LBL_DOC_NAME' => 'Nazwa dokumentu:',
  'LBL_FILENAME' => 'Nazwa pliku:',
  'LBL_DOC_VERSION' => 'Wersja:',
  'LBL_CATEGORY_VALUE' => 'Kategoria:',
  'LBL_SUBCATEGORY_VALUE' => 'Podkategoria:',
  'LBL_LAST_REV_CREATOR' => 'Przegląd utworzony przez:',
  'LBL_LAST_REV_DATE' => 'Data wersji:',
  'LBL_DOWNNLOAD_FILE' => 'Załączniki:',
  'LBL_DET_RELATED_DOCUMENT' => 'Powiązany dokument:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Wersja powiązanych dokumentów',
  'LBL_DET_IS_TEMPLATE' => 'Szablon?',
  'LBL_DET_TEMPLATE_TYPE' => 'Typ dokumentu:',
  'LBL_IS_EXTERNAL_ARTICLE' => 'Zewnętrzny artykuł?:',
  'LBL_SHOW_TAGS' => 'Pokaż więcej tagów',
  'LBL_HIDE_TAGS' => 'Ukryj tagi',
  'LBL_TEAM' => 'Zespół:',
  'LBL_DOC_DESCRIPTION' => 'Opis:',
  'LBL_KBDOC_SUBJECT' => 'Temat:',
  'LBL_DOC_ACTIVE_DATE' => 'Data publikacji:',
  'LBL_DOC_EXP_DATE' => 'Data wygaśnięcia:',
  'LBL_LIST_ARTICLES' => 'Zobacz artykuły:',
  'LBL_LIST_FORM_TITLE' => 'Lista dokumentów',
  'LBL_LIST_DOCUMENT' => 'Dokument',
  'LBL_LIST_CATEGORY' => 'Kategoria',
  'LBL_LIST_SUBCATEGORY' => 'Podkategoria',
  'LBL_LIST_REVISION' => 'Przegląd',
  'LBL_LIST_LAST_REV_CREATOR' => 'Opublikowane przez',
  'LBL_LIST_LAST_REV_DATE' => 'Data przeglądu',
  'LBL_LIST_VIEW_DOCUMENT' => 'Zobacz',
  'LBL_LIST_DOWNLOAD' => 'Pobierz',
  'LBL_LIST_ACTIVE_DATE' => 'Data publikacji',
  'LBL_LIST_EXP_DATE' => 'Data wygaśnięcia',
  'LBL_ARTICLE_AUTHOR_LIST' => 'Autor',
  'LBL_LIST_MOST_VIEWED' => 'Najczęściej oglądane artykuły',
  'LBL_LIST_MOST_RECENT' => 'Najnowsze artykuły',
  'LBL_SF_DOCUMENT' => 'Nazwa dokumentu:',
  'LBL_SF_CATEGORY' => 'Kategoria:',
  'LBL_SF_SUBCATEGORY' => 'Podkategoria:',
  'LBL_SF_ACTIVE_DATE' => 'Data publikacji:',
  'LBL_SF_EXP_DATE' => 'Data wygaśnięcia:',
  'DEF_CREATE_LOG' => 'Dokument utworzony',
  'LBL_TAB_SEARCH' => 'Szukaj',
  'LBL_TAB_BROWSE' => 'Przeglądaj',
  'LBL_TAB_ADVANCED' => 'Zaawansowane',
  'LBL_MENU_FTS' => 'Przeszukiwanie całego tekstu',
  'LBL_FTS_EMPTY_STRING' => 'Nie można wykonać przeszukiwania całego tekstu w pustym ciągu',
  'LBL_SEARCH_WITHIN' => 'Szukaj w',
  'LBL_CONTAINING_THESE_WORDS' => 'Zawierające te słowa:',
  'LBL_EXCLUDING_THESE_WORDS' => 'Z wyłączeniem tych słów:',
  'LBL_UNDER_THIS_TAG' => 'Używając tego tagu:',
  'LBL_PUBLISHED' => 'Opublikowano:',
  'LBL_EXPIRES' => 'Wygasa:',
  'LBL_TIMES_VIEWED' => 'Oglądanie częstotliwości:',
  'LBL_SAVE_SEARCH_AS' => 'Zapisz to wyszukiwanie jako:',
  'LBL_SAVE_SEARCH_AS_HELP' => 'Zapisuje twoje określone wpisy jako filtr zapisanych wyszukiwań dla bazy wiedzy.',
  'LBL_PREVIOUS_SAVED_SEARCH' => 'Poprzednio zapisane wyszukiwania:',
  'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Edytuj lub usuń istniejące zapisane wyszukiwanie.',
  'LBL_UPDATE' => 'Aktualizuj',
  'LBL_DELETE' => 'Usuń',
  'LBL_SHOW_OPTIONS' => 'Więcej opcji',
  'LBL_AND' => 'i',
  'LBL_CLEAR' => 'Wyczyść',
  'LBL_LIST_KBDOC_APPROVER_NAME' => 'Nazwa zatwierdzającego',
  'LBL_LIST_VIEWING_FREQUENCY' => 'Częstotliwość',
  'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Podgląd jest niedostępny. Nie znaleziono rekordu dokumentu.',
  'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Podgląd jest niedostępny. Dokument istnieje, ale nie utworzono jeszcze zawartości.',
  'LBL_UNTAGGED_ARTICLES_NODE' => 'Nietagowane artykuły',
  'LBL_TOP_TEN_LIST_TITLE' => 'Dziesięć najczęściej oglądanych artykułów',
  'LBL_SHOW_SYNTAX_HELP' => 'Pomoc Syntax',
  'LBL_MISMATCH_QUOTES_ERR' => 'Twoje zapytanie nie będzie działać w sposób jaki zostało wprowadzone. Musi być zamknięcie cudzysłowiu dla każdego otwarcia cudzysłowiu. Jeśli chcesz wyszukać ciągu znaków z cudzysłowiem, użyj "escape" z odwrotnym ukośnikiem (\\")',
  'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Tag podrzędny',
  'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Tagi podrzędne',
  'LBL_ARTICLE_IN_TREE_HOVER' => 'Artykuł',
  'LBL_ARTICLES_IN_TREE_HOVER' => 'Artykuły',
  'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Ten tag zawiera',
  'ERR_DOC_NAME' => 'Nazwa dokumentu',
  'ERR_DOC_ACTIVE_DATE' => 'Data publikacji',
  'ERR_DOC_EXP_DATE' => 'Data wygaśnięcia',
  'ERR_FILENAME' => 'Nazwa pliku',
  'ERR_DOC_VERSION' => 'Wersja dokumentu',
  'ERR_DELETE_CONFIRM' => 'Czy napewno chcesz usunąć tę wersję dokumentu?',
  'ERR_DELETE_LATEST_VERSION' => 'Nie jesteś upoważniony do usunięcia najnowszej wersji tego dokumentu.',
  'LNK_NEW_MAIL_MERGE' => 'Scalanie poczty',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Szablon scalania poczty:',
  'LBL_TREE_TITLE' => 'Dokumenty',
  'LBL_LIST_DOCUMENT_NAME' => 'Nazwa dokumentu',
  'LBL_CONTRACT_NAME' => 'Nazwa kontraktu:',
  'LBL_LIST_IS_TEMPLATE' => 'Szablon?',
  'LBL_LIST_TEMPLATE_TYPE' => 'Typ dokumentu',
  'LBL_LIST_SELECTED_REVISION' => 'Wybrana wersja',
  'LBL_LIST_LATEST_REVISION' => 'Najnowsza wersja',
  'LBL_CASES_SUBPANEL_TITLE' => 'Powiązane sprawy',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'Powiązane e-maile',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Powiązane kontrakty',
  'LBL_LAST_REV_CREATE_DATE' => 'Data utworzenia ostatniej wersji',
  'LBL_KEYWORDS' => 'Słowa kluczowe:',
  'LBL_CASES' => 'Sprawy',
  'LBL_EMAILS' => 'E-maile',
  'LBL_DEFAULT_ADMIN_MESSAGE' => 'Wybierz akcję z listy rozwijanej',
  'LBL_SELECT_PARENT_TAG_MESSAGE' => 'Wybierz tag nadrzędny z drzewa',
  'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Wybierz tag(i) do usunięcia z drzewa',
  'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' => 'Wybierz tag do zmiany nazwy',
  'LBL_TAG_ALREADY_EXISTS' => 'Tag już istnieje',
  'LBL_TYPE_THE_NEW_TAG_NAME' => 'Wpisz nową nazwę tagu',
  'LBL_SAVING_THE_TAG' => 'Zapisywanie tagu...',
  'LBL_CREATING_NEW_TAG' => 'Tworzenie nowego tagu...',
  'LBL_TAGS_ROOT_LABEL' => 'Tagi',
  'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'FAQ Nie można zmienić nazwy tagu',
  'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Wybierz na początku artykuł',
  'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Wybierz artykuły, aby zastosować tagi',
  'LBL_SELECT_ARTICLES_TO_DELETE' => 'Wybierz na początku artykuły',
  'LBL_SELECT_TAGS_TO_DELETE' => 'Wybierz tagi do usunięcia',
  'LBL_SELECT_A_TAG_FROM_TREE' => 'Wybierz tag z drzewa',
  'LBL_SELECT_TAGS_FROM_TREE' => 'Wybierz tagi z drzewa',
  'LBL_MOVING_ARTICLES_TO_TAG' => 'Przeniesienie artykułów do tagu...',
  'LBL_APPLYING_TAGS_TO_ARTICLES' => 'Zastosowanie tagów w artykułach...',
  'LBL_ROOT_TAG_MESSAGE' => 'Tag główny nie może być wybrany/związany z artykułem',
  'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Nie można zmienić nazwy tagu',
  'LBL_TYPE_NEW_NODE_NAME' => 'Proszę wprowadź nazwę tagu',
  'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Tagi źródła i celu są takie same',
  'LBL_DELETE_TAG' => 'Usuń tag',
  'LBL_SELECT_TAG' => 'Wybierz tag',
  'LBL_APPLY_TAG' => 'Zastosuj tag',
  'LBL_MOVE' => 'Przenieś',
  'LBL_LAUNCHING_TAG_BROWSING' => 'Uruchomianie przeglądania tagów...',
  'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Wystąpił błąd podczas wykonywania tego żadania dla tagów.',
  'LBL_CREATE_NEW_TAG' => 'Utwórz nowy tag',
  'LBL_SEARCH_TAG' => 'Szukaj',
  'LBL_TAG_NAME' => 'Nazwa tagu:',
  'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Wpisz nazwę tagu, aby wyszukać',
  'LBL_KB_NOTIFICATION' => 'Dokument został opublikowany',
  'LBL_KB_PUBLISHED_REQUEST' => 'przypisał do Ciebie dokument do zatwierdzenia i publikacji.',
  'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Status dokumentu został z powrotem zmieniony do wersji roboczej',
  'LBL_CONTRACTS' => 'Kontratky',
  'LBL_SELECT_PARENT_TREE_NOTICE' => 'Wybierz tag nadrzędny z drzewa',
  'LBL_CLICK_APPLY_TAG' => 'Kliknij tag "Zastosuj"',
  'LBL_HEAD_TAGS' => 'Tagi',
);

