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
  'LBL_MODULE_FAVICON' => 'Wyświetl ikonę modułu jako favicon (ikonę strony)',
  'LBL_MODULE_FAVICON_HELP' => 'Jeśli jesteś w module z ikoną, użyj ikony modułu jako favicon (ikonę strony), zamiast faviconu motywu, w karcie przeglądarki.',
  'LBL_LDAP_USER_FILTER_DESC' => 'Dowolne dodatkowe parametry filtra do zastosowania podczas uwierzytelniania użytkowników np.is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
  'ERR_EZPDF_DISABLE' => 'Ostrzeżenie: Klasa EXPDF jest wyłączona z tabeli konfiguracyjnej i ustawiona jako klasa PDF. Proszę "Zapisz" tą formę, aby ustawić TCPDF jako klasa PDF.',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Nazwa kodującej tabeli.<br />Ta opcja jest zignorowana dla Unikodu TrueType, Unikodu OpenType oraz symbolicznych czcionek.<br />Kodowanie definiuje powiązanie między kodem (od 0 do 255) a znakiem zawartym w czcionce.<br />Pierwsze 128 są stałe i korespondują do ASCII.',
  'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
  'LBL_PROXY_PORT' => 'Port',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
  'ADVANCED' => 'Zaawansowane',
  'DEFAULT_CURRENCY_ISO4217' => 'Symbol waluty wg ISO 4217',
  'DEFAULT_CURRENCY_NAME' => 'Nazwa waluty',
  'DEFAULT_CURRENCY_SYMBOL' => 'Symbol waluty',
  'DEFAULT_CURRENCY' => 'Waluta Domyślna',
  'DEFAULT_DATE_FORMAT' => 'Domyślny format daty',
  'DEFAULT_DECIMAL_SEP' => 'Symbol dziesiętny',
  'DEFAULT_LANGUAGE' => 'Domyślny język',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Separator tysięcy',
  'DEFAULT_SYSTEM_SETTINGS' => 'Interfejs użytkownika',
  'DEFAULT_THEME' => 'Domyślny temat',
  'DEFAULT_TIME_FORMAT' => 'Domyślny format czasu',
  'DISPLAY_RESPONSE_TIME' => 'Wyświetlaj czas odpowiedzi serwera',
  'IMAGES' => 'Znaki graficzne',
  'LBL_ADMIN_WIZARD' => 'Kreator admin',
  'LBL_ALLOW_USER_TABS' => 'Zezwalaj użytkownikom na ukrycie kart',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Ustawienia systemowe',
  'LBL_ENABLE_MAILMERGE' => 'Czy włączyć scalanie poczty?',
  'LBL_LOGVIEW' => 'Konfiguruj ustawienia dziennika',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Czy używać autentykacji SMTP?',
  'LBL_MAIL_SMTPPASS' => 'Hasło SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Serwer SMTP:',
  'LBL_MAIL_SMTPUSER' => 'Nazwa użytkownika SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Typ serwera SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Specyfikacje serwera SMTP',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawcę e-mail:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Hasło Yahoo! Mail:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',
  'LBL_GMAIL_SMTPPASS' => 'Hasło Gmail:',
  'LBL_GMAIL_SMTPUSER' => 'Adres e-mail Gmail:',
  'LBL_EXCHANGE_SMTPPASS' => 'Zamień hasło:',
  'LBL_EXCHANGE_SMTPUSER' => 'Zamień nazwę użytkownika:',
  'LBL_EXCHANGE_SMTPPORT' => 'Zamień port serwera:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Zamień serwer:',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Pozwól użytkownikom korzystać z tego konta dla e-maili wychodzących:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Po wybraniu tej opcji, użytkownicy będą mogli wysyłać e-maile przy użyciu tego samego konta poczty wychodzącej używanego do wysyłania powiadomień systemu i alertów. Jeśli opcja nie jest wybrana, użytkownicy nadal mogą korzystać z serwera poczty wychodzącej po podaniu swoich danych konta.',
  'LBL_MAILMERGE_DESC' => 'Ta opcja powinna być zaznaczona tylko wtedy, gdy masz Sugar plug-in dla Microsoft® Word®.',
  'LBL_MAILMERGE' => 'Ustawienia scalania poczty',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimalny odstęp czasowy auto-odświeżania narzędzia',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'To jest minimalna wartość, którą można wybrać do auto-odświeżania narzędzi. Ustawienie do "Nigdy" całkowicie wyłącza opcję auto-odświeżania narzędzi.',
  'LBL_MODULE_NAME' => 'Ustawienia systemowe',
  'LBL_MODULE_ID' => 'Konfigurator',
  'LBL_MODULE_TITLE' => 'Interfejs użytkownika',
  'LBL_NOTIFY_FROMADDRESS' => 'Adres "Od":',
  'LBL_NOTIFY_SUBJECT' => 'Temat listu:',
  'LBL_PORTAL_ON_DESC' => 'Umożliwia dostęp do spraw, notatek i innych danych poprzez zewnętrzny własny portal samoobsługowy.',
  'LBL_PORTAL_ON' => 'Czy włączyć integracje z własnym portalem samoobsługowym?',
  'LBL_PORTAL_TITLE' => 'Własny portal samoobsługowy',
  'LBL_PROXY_AUTH' => 'Autentykacja?',
  'LBL_PROXY_HOST' => 'Proxy host',
  'LBL_PROXY_ON_DESC' => 'Konfiguruje adres serwera proxy i ustawienia autoryzacji',
  'LBL_PROXY_ON' => 'Czy użyć serwera proxy?',
  'LBL_PROXY_PASSWORD' => 'Hasło',
  'LBL_PROXY_TITLE' => 'Ustawienia proxy',
  'LBL_PROXY_USERNAME' => 'Nazwa użytkownika',
  'LBL_RESTORE_BUTTON_LABEL' => 'Przywracanie',
  'LBL_SYSTEM_SETTINGS' => 'Ustawienia systemowe',
  'LBL_SKYPEOUT_ON_DESC' => 'Klikając na numer telefonu pozwala na połącznie z użyciem SkypeOut®. Aby skorzystać z tej funkcji numer musi być podany odpowienim formacie: "+"  "Kod Kraju" "Numer". Więcej: <a href="http://www.skype.com/help/faq/skypeout.html#calling" target="skype">skype® faq</a>',
  'LBL_SKYPEOUT_ON' => 'Czy uruchomić integracje ze SkypeOut®?',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_USE_REAL_NAMES' => 'Pokaż pełną nazwę użytkownika (nie login)',
  'LBL_USE_REAL_NAMES_DESC' => 'Wyświetl pełne nazwy użytkowników, zamiast nazw użytkowników w polach zadań.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Widok elementów listy na stronie',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Widok elementów subpaneli na stronie',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Widok elementów listy na stronie',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Widok elementów subpaneli na stronie',
  'LOG_MEMORY_USAGE' => 'Dziennik użycia pamięci',
  'LOG_SLOW_QUERIES' => 'Dziennik szybkości wykonywania zapytań',
  'LOCK_HOMEPAGE_HELP' => 'To ustawienie zapobiega:<BR> 1) dodawaniu nowych stron startowych na stronie głównej <BR>2) zmiany położenia zakładek na Stronie główej, poprzez ich przeciąganie i upuszczanie.',
  'CURRENT_LOGO' => 'Bieżące logo',
  'CURRENT_LOGO_HELP' => 'To logo jest wyświetlone w lewym górnym rogu aplikacji Sugar.',
  'NEW_LOGO' => 'Załaduj nowe logo',
  'NEW_LOGO_HELP' => 'Plik obrazka może być w formacie .png lub .jpg.<BR>Rekomendowany wymiar to 212x40 pikseli.',
  'NEW_QUOTE_LOGO' => 'Załaduj nowe logo oferty',
  'NEW_QUOTE_LOGO_HELP' => 'Wymagany format pliku to .jpg.<BR>Rekomendowany wymiar to 867x74 pikseli.',
  'QUOTES_CURRENT_LOGO' => 'Logo w ofertach',
  'SLOW_QUERY_TIME_MSEC' => 'Próg czasu dla szybkości wykonywania zapytań (msec)',
  'STACK_TRACE_ERRORS' => 'Wyświetlaj spis śladów błędów',
  'UPLOAD_MAX_SIZE' => 'Maksymalna wielkość ładowania',
  'VERIFY_CLIENT_IP' => 'Sprawdzaj numer IP użytkownika',
  'LOCK_HOMEPAGE' => 'Wyłącz opcję dostosowania wyglądu dla użytkownika',
  'LOCK_SUBPANELS' => 'Wyłącz opcję dostosowania subpaneli dla użytkownika',
  'MAX_DASHLETS' => 'Maksymalna liczba zakładek na stronie głównej',
  'SYSTEM_NAME' => 'Nazwa systemu',
  'SYSTEM_NAME_WIZARD' => 'Nazwa:',
  'SYSTEM_NAME_HELP' => 'Jest to nazwa wyświetlana na pasku tytułowym twojej przeglądarki.',
  'LBL_OC_STATUS' => 'Domyślny status klienta offline',
  'DEFAULT_OC_STATUS' => 'Włącz domyślnie klienta offline',
  'LBL_OC_STATUS_DESC' => 'Zaznacz tutaj czy chcesz, aby użytkownik miał dostęp do klienta offline. Możesz także skonfigurować dostęp na poziomie użytkownika.',
  'SESSION_TIMEOUT' => 'Limit czasu sesji portalu',
  'SESSION_TIMEOUT_UNITS' => 'sekund',
  'LBL_LDAP_TITLE' => 'Wsparcie autentykacji porzez LDAP',
  'LBL_LDAP_ENABLE' => 'Włącz LDAP',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Serwer:',
  'LBL_LDAP_SERVER_PORT' => 'Numer portu:',
  'LBL_LDAP_ADMIN_USER' => 'Autentykowany użytkownik:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Używane do wyszukiwania użytkownika Sugar. [Moze wymagać pełnej nazwy]<br>Jeśli nie zostanie użyte - powiąże anonimowo].',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Hasło autentykacji:',
  'LBL_LDAP_AUTHENTICATION' => 'Uwierzytelnienie:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Połącz się z serwerem LDAP używając  poświadczeń określonych użytkowników',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatyczne tworzenie użytkowników:',
  'LBL_LDAP_USER_DN' => 'Użytkownik DN:',
  'LBL_LDAP_GROUP_DN' => 'Grupa DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Przykład: ou=groups,dc=example,dc=com',
  'LBL_LDAP_USER_FILTER' => 'Filtr użytkownika:',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Członkostwo grupy:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Użytkownicy muszą być członkami określonej grupy',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Atrybut użytkownika:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Unikalny identyfikator osoby, który będzie używany, aby sprawdzić czy jest członkiem grupy. Przykład: uid',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Atrybut grupy, który będzie używany do filtrowania  wobec atrybutu użytkownika. Przykład: memberUid',
  'LBL_LDAP_GROUP_ATTR' => 'Atrybut grupy:',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atrybut logowania:',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Atrybut powiązany:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Przykład powiązania użytkownika LDAP:[<b>AD:</b> userPrincipalName] [<b>openLDAP:</b> userPrincipalName] [<b>Mac OS X:</b> uid]',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Przykład wyszukiwania użytkownika LDAP:[<b>AD:</b> userPrincipalName] [<b>openLDAP:</b> dn] [<b>Mac OS X:</b> dn]',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Przykład: ldap.example.com',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Przykład: 389',
  'LBL_LDAP_GROUP_NAME' => 'Nazwa grupy:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Przykład cn=sugarcrm',
  'LBL_LDAP_USER_DN_DESC' => 'Przykład: ou=people,dc=example,dc=com',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Jeżeli autentykowany użytkownik nie istnieje w aplikacji - zostanie automatycznie utworzony w Sugar.',
  'LBL_LDAP_ENC_KEY' => 'Klucz szyfrowania:',
  'DEVELOPER_MODE' => 'Tryb developerski',
  'SHOW_DOWNLOADS_TAB' => 'Wyświetl kartę Pliki do pobrania',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Po wybraniu, karta Pobierz pojawi się w ustawieniach użytkownika i zapewni użytkownikom dostęp do wtyczek Sugar i innych dostępnych plików',
  'LBL_LDAP_ENC_KEY_DESC' => 'Dla auntentykacji SOAP authentication, kiedy LDAP jest używany.',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Rozszeżenie php_mcrypt musi być włączone  w pliku php.ini.',
  'LBL_ALL' => 'Wszystko',
  'LBL_MARK_POINT' => 'Punkt zaznaczenia',
  'LBL_NEXT_' => 'Następny>>',
  'LBL_REFRESH_FROM_MARK' => 'Odśwież od znaku',
  'LBL_SEARCH' => 'Szukaj:',
  'LBL_REG_EXP' => 'Zarejestrowanie wygasa:',
  'LBL_IGNORE_SELF' => 'Samoczynne ignorowanie:',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Zaznacz, od kiedy rozpocząć zapis dziennika',
  'LBL_DISPLAYING_LOG' => 'Wyświetl dziennik',
  'LBL_YOUR_PROCESS_ID' => 'ID Twojego procesu',
  'LBL_YOUR_IP_ADDRESS' => 'Twój adres IP to',
  'LBL_IT_WILL_BE_IGNORED' => 'będzie zignorowane',
  'LBL_LOG_NOT_CHANGED' => 'dziennik nie zmienił się',
  'LBL_ALERT_JPG_IMAGE' => 'Formatem pliku obrazka musi być jpg.  Nadpisz nowy plik z nowym rozszerzeniem .jpg.',
  'LBL_ALERT_TYPE_IMAGE' => 'Formatem pliku obrazka musi być jpg lub png.  Nadpisz nowy plik z nowym rozszerzeniem .jpg lub .png.',
  'LBL_ALERT_SIZE_RATIO' => 'Współczynnik zmniejszenia obrazka powinien wynosić od 1:1 do 10:1.  Obrazek zostanie przeskalowany.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'Współczynnik zmniejszenia obrazka powinien wynosić od 3:1 do 20:1.  Nadpisz nowy plik z takimi parametrami.',
  'ERR_ALERT_FILE_UPLOAD' => 'Błąd podczas ładowania obrazka.',
  'LBL_LOGGER' => 'Ustawienia dziennika',
  'LBL_LOGGER_FILENAME' => 'Nazwa pliku dziennika',
  'LBL_LOGGER_FILE_EXTENSION' => 'Rozszerzenie',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksymalna wielkość pliku',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Domyślny format daty',
  'LBL_LOGGER_LOG_LEVEL' => 'Poziom dziennika',
  'LBL_LOGGER_MAX_LOGS' => 'Maksymalna ilość dzienników (before rolling)',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Dołącz po nazwie pliku',
  'LBL_VCAL_PERIOD' => 'Okres czasu uaktualniania vCal:',
  'vCAL_HELP' => 'Użyj tego ustawienia, aby określić ile do przodu (od dzisiejszej daty) system będzie podawał informacje o  statusie Wolny/Zajęty. Aby wyłączyć ten status, zaznacz 0. Możesz wybrać liczbę miesięcy od 1 do 12.',
  'LBL_PDFMODULE_NAME' => 'Ustawienia PDF',
  'SUGARPDF_BASIC_SETTINGS' => 'Właściwości dokumentu',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Zaawansowane ustawienia',
  'SUGARPDF_LOGO_SETTINGS' => 'Obrazy',
  'PDF_CREATOR' => 'Kreator PDF',
  'PDF_CREATOR_INFO' => 'Zdefiniuj kreator dokumentu.<br />Zwykle jest to nazwa aplikacji, która generuje PDF.',
  'PDF_AUTHOR' => 'Autor',
  'PDF_AUTHOR_INFO' => 'Autor pojawia się we właściwościach dokumentu.',
  'PDF_HEADER_LOGO' => 'Dla dokumentów PDF kalkulacji',
  'PDF_HEADER_LOGO_INFO' => 'Ten obraz pojawia się w domyślnym nagłówku w dokumentach PDF kalkulacji.',
  'PDF_NEW_HEADER_LOGO' => 'Wybierz nowy obraz dla Kalkulacji',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Format pliku może być .jpg lub .png. (Tylko .jpg dla EZPDF)<br />Rekomendowany rozmiar to 867x74 px.',
  'PDF_HEADER_LOGO_WIDTH' => 'Szerokość obrazu Kalkulacji',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Zmień skalę załadowanego obrazu, który pojawia się w dokumentach PDF Kalkulacji. (tylko TCPDF)',
  'PDF_SMALL_HEADER_LOGO' => 'Dla dokumentów PDF raportów',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Ten obraz pojawia się w domyślnym nagłówku w dokumentach PDF raportów.<br />Ten obraz pojawia się również w lewym górnym rogu aplikacji Sugar.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Wybierz nowy obraz dla raportów',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Format pliku może być .jpg lub .png. (Tylko .jpg dla EZPDF)<br />Rekomendowany rozmiar to 212x40 px.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Szerokość obrazu raportów',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Zmień skalę załadowanego obrazu, który pojawia się w dokumentach PDF raportów. (tylko TCPDF)',
  'PDF_HEADER_STRING' => 'Ciąg nagłówków',
  'PDF_HEADER_STRING_INFO' => 'Ciąg opisów nagłówków',
  'PDF_HEADER_TITLE' => 'Tytuł nagłówka',
  'PDF_FILENAME' => 'Domyślna nazwa pliku',
  'PDF_FILENAME_INFO' => 'Domyślna nazwa pliku dla wygenerowanych plików PDF',
  'PDF_TITLE' => 'Tytuł',
  'PDF_TITLE_INFO' => 'Tytuł pojawia się we właściwościach dokumentu.',
  'PDF_SUBJECT' => 'Temat',
  'PDF_SUBJECT_INFO' => 'Temat pojawia się we właściwościach dokumentu.',
  'PDF_KEYWORDS' => 'Słowa kluczowe',
  'PDF_KEYWORDS_INFO' => 'Kojarz słowa kluczowe z dokumentem, generalnie w formie "keyword1 keyword2..."',
  'PDF_COMPRESSION' => 'Kompresja',
  'PDF_COMPRESSION_INFO' => 'Aktywuje lub dezaktywuje kompresję strony.<br />Po aktywacji, wewnętrzna reprezentacja każdej strony jest skompresowana, co prowadzi do stosunku kompresji około 2 dla wynikłego dokumentu.',
  'PDF_JPEG_QUALITY' => 'Jakość JPEG (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'ustaw domyślną jakość kompresji JPEG (1-100)',
  'PDF_PDF_VERSION' => 'Wersja PDF',
  'PDF_PDF_VERSION_INFO' => 'Ustaw wersję PDF (sprawdź odniesienie PDF dla poprawnych wartości).',
  'PDF_PROTECTION' => 'Ochrona dokumentu',
  'PDF_PROTECTION_INFO' => 'Ustaw ochronę dokumentu<br /> - kopia: kopiowanie tekstu i zdjęć do schowka<br /> - druk: drukowanie dokumentu<br /> - modyfikacja: modyfikować (z wyjątkiem adnotacji i formularzy)<br /> - annot-formy: dodaj adnotacje i formy<br /> Uwaga: ochrona przed modyfikacją jest dla osób, którzy mają pełny produkt Acrobat.',
  'PDF_USER_PASSWORD' => 'Hasło użytkownika',
  'PDF_USER_PASSWORD_INFO' => 'Jeśli nie ustawisz żadnego hasła, dokument zostanie otwarty jak zwykle.<br />Jeśli ustawisz hasło użytkownika, przeglądarka PDF zapyta o to przed otwarciem dokumentu.<br />Hasło główne "master", jeśli inne od hasła użytkownika, może być używane do uzyskania pełnego dostępu.',
  'PDF_OWNER_PASSWORD' => 'Hasło właściciela',
  'PDF_OWNER_PASSWORD_INFO' => 'Jeśli nie ustawisz żadnego hasła, dokument zostanie otwarty jak zwykle.<br />Jeśli ustawisz hasło użytkownika, przeglądarka PDF zapyta o to przed otwarciem dokumentu.<br />Hasło główne "master", jeśli inne od hasła użytkownika, może być używane do uzyskania pełnego dostępu.',
  'PDF_ACL_ACCESS' => 'Kontrola dostępu',
  'PDF_ACL_ACCESS_INFO' => 'Kontrola domyślnego dostępu dla generowania PDF.',
  'K_CELL_HEIGHT_RATIO' => 'Stosunek wysokości komórek',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Jeśli wysokość komórki jest mniejsza niż (Wysokość czcionki x Stosunek wysokości komórek), to (Wysokość czcionki x Stosunek wysokości komórek) jest używana jako wysokość komórki. (Wysokość czcionki x Stosunek wysokości komórek) jest używana jako wysokość komórki gdy żadna wysokość nie jest zdefiniowana.',
  'K_TITLE_MAGNIFICATION' => 'Powiększenie tytułu',
  'K_TITLE_MAGNIFICATION_INFO' => 'Powiększenie tytułu w odniesieniu do rozmiaru głównej czcionki.',
  'K_SMALL_RATIO' => 'Faktor małej czcionki',
  'K_SMALL_RATIO_INFO' => 'Faktor redukcji dla małej czcionki.',
  'HEAD_MAGNIFICATION' => 'Powiększenie nagłówka',
  'HEAD_MAGNIFICATION_INFO' => 'Faktor powiększenia dla tytułów.',
  'PDF_IMAGE_SCALE_RATIO' => 'Stosunek skali obrazów',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Stosunek używany do skalowania obrazów',
  'PDF_UNIT' => 'Jednostka',
  'PDF_UNIT_INFO' => 'jednostka miary dokumentu',
  'PDF_GD_WARNING' => 'Nie masz zainstalowanej biblioteki GD dla PHP. Bez zainstalowanej biblioteki GD, tylko loga JPEG mogą być wyświetlane w dokumentach PDF.',
  'LBL_IMG_RESIZED' => '(zmieniony rozmiar dla wyświetlacza)',
  'LBL_FONTMANAGER_BUTTON' => 'Menedżer PDF czcionki',
  'LBL_FONTMANAGER_TITLE' => 'Menedżer PDF czcionki',
  'LBL_FONT_BOLD' => 'Pogrubienie',
  'LBL_FONT_ITALIC' => 'Kursywa',
  'LBL_FONT_BOLDITALIC' => 'Pogrubienie/Kursywa',
  'LBL_FONT_REGULAR' => 'Normalna',
  'LBL_FONT_TYPE_CORE' => 'Podstawowa',
  'LBL_FONT_TYPE_TYPE1' => 'Typ1',
  'LBL_FONT_LIST_NAME' => 'Nazwa',
  'LBL_FONT_LIST_FILENAME' => 'Nazwa Pliku',
  'LBL_FONT_LIST_TYPE' => 'Typ',
  'LBL_FONT_LIST_STYLE' => 'Styl',
  'LBL_FONT_LIST_STYLE_INFO' => 'Styl czcionki',
  'LBL_FONT_LIST_ENC' => 'Kodowanie',
  'LBL_FONT_LIST_EMBEDDED' => 'Wbudowane',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Sprawdź, aby wbudować czcionkę w plik PDF',
  'LBL_FONT_LIST_CIDINFO' => 'Informacje CID',
  'LBL_FONT_LIST_FILESIZE' => 'Rozmiar czcionki (KB)',
  'LBL_ADD_FONT' => 'Dodaj czcionkę',
  'LBL_BACK' => 'Wstecz',
  'LBL_REMOVE' => 'usuń',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Czy na pewno chcesz usunąć tą czcionkę?',
  'LBL_ADDFONT_TITLE' => 'Dodaj czcionkę PDF',
  'LBL_PDF_PATCH' => 'Poprawka',
  'LBL_PDF_ENCODING_TABLE' => 'Tabela kodowania',
  'LBL_PDF_FONT_FILE' => 'Plik czcionek',
  'LBL_PDF_FONT_FILE_INFO' => 'Plik .ttf lub .otf lub .pfb',
  'LBL_PDF_METRIC_FILE' => 'Plik metryczny',
  'LBL_PDF_METRIC_FILE_INFO' => 'Plik .afm lub .ufm',
  'LBL_ADD_FONT_BUTTON' => 'Dodaj',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Ten plik nie ma prawidłowego rozszerzenia pliku.',
  'LBL_PDF_INSTRUCTIONS' => 'Instrukcje',
  'ERR_MISSING_CIDINFO' => 'Pole informacji CID nie może byc puste.',
  'LBL_ADDFONTRESULT_TITLE' => 'Wynik procesu dodawania czcionki',
  'LBL_STATUS_FONT_SUCCESS' => 'SUKCES: Czcionka została dodana do SugarCRM.',
  'LBL_STATUS_FONT_ERROR' => 'BŁĄD: Czcionka nie została dodana. Spójrz na rejestr poniżej.',
  'LBL_FONT_MOVE_DEFFILE' => 'Przenieś plik definicji czcionki do:',
  'LBL_FONT_MOVE_FILE' => 'Przenieś plik czcionki do:',
  'ERR_LOADFONTFILE' => 'BŁĄD: Błąd ZaładujPlikCzcionki',
  'ERR_FONT_EMPTYFILE' => 'BŁĄD: Pusta nazwa pliku!',
  'ERR_FONT_UNKNOW_TYPE' => 'BŁĄD: Nieznany typ czcionki:',
  'ERR_DELETE_CORE_FILE' => 'BŁĄD: Usunięcie czcionki podstawowej nie jest możliwe.',
  'ERR_NO_FONT_PATH' => 'BŁĄD: Brak dostępnej ścieżki czcionki!',
  'ERR_NO_CUSTOM_FONT_PATH' => 'BŁĄD: Brak dostępnej ścieżki czcionki niestandardowej',
  'ERR_FONT_NOT_WRITABLE' => 'nie jest zapisywalna.',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'nie istnieje lub nie jest w katalogu.',
  'ERR_FONT_MAKEFONT' => 'BŁĄD: Błąd MakeFont',
  'ERR_FONT_ALREADY_EXIST' => 'BŁĄD: Ta czcionka już istnieje. Cofnij...',
  'ERR_PDF_NO_UPLOAD' => 'Błąd podczas ładowania czcionki lub pliku metrycznego.',
  'LBL_WIZARD_TITLE' => 'Kreator admin',
  'LBL_WIZARD_WELCOME_TAB' => 'Witaj',
  'LBL_WIZARD_WELCOME_TITLE' => 'Witaj w Sugar!',
  'LBL_WIZARD_WELCOME' => 'Kliknij Dalej, aby zlokalizować i skonfigurować aplikację Sugar. Jeśli chcesz skonfigurować aplikację Sugar, kliknij Pomiń.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Dalej >',
  'LBL_WIZARD_BACK_BUTTON' => '< Wstecz',
  'LBL_WIZARD_SKIP_BUTTON' => 'Pomiń',
  'LBL_WIZARD_FINISH_BUTTON' => 'Zakończ',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Kontynuuj',
  'LBL_WIZARD_FINISH_TAB' => 'Zakończ',
  'LBL_WIZARD_FINISH_TITLE' => 'System podstawowy konfiguracji jest gotowy',
  'LBL_WIZARD_FINISH' => 'Kliknij Kontynuuj, aby skonfigurować twoje ustawienia.<br /><br />Aby skonfigurować dodatkowe ustawienia systemowe, kliknij tutaj.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Podaj nazwę twojej organizacji i logo w celu budowania marki Sugar.',
  'LBL_WIZARD_LOCALE_DESC' => 'Określ, jak chcesz aby dane w aplikacji Sugar były wyświetlane, na podstawie twojego położenia geograficznego. Ustawienia podane tutaj będą ustawieniami domyślnymi. Użytkownicy będą mogli ustawić swoje własne preferencje.',
  'LBL_WIZARD_SMTP_DESC' => 'Podaj konto e-mail, które będzie używane do wysyłania e-maili, takich jak powiadomienia do zadań i nowe hasła użytkownika. Użytkownicy będą otrzymywać e-maile od aplikacji Sugar, jako wysłane z określonego konta e-mail.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Moduł Raporty jest tylko dostępny dla klienta Sugar Mobile iPhone.',
);

