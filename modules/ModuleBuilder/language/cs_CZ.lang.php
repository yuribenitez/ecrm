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
  'help' => 
  array (
    'subPanelEditor' => 
    array (
      'Hidden' => 'Skryté položky nejsou vidět ze subpanelů',
      'Default' => 'Standardní pole jsou vidět ze subpanelů',
    ),
    'layoutEditor' => 
    array (
      'saveBtn' => 'Klepnutím na tlačítko Uložit uložíte všechny neuložené změny.<br />Tyto změny se neukazují dokud se nevypropagují do modulu.',
    ),
    'package' => 
    array (
      'description' => 'Toto je popis balíčku, který se zobrazí během instalace.',
      'deletebtn' => 'Klepněte na tlačítko Odstranit pro odstraníte tohoto balíčku a všech souborů, které se k němu vztahují.',
      'savebtn' => 'Klepnutím na tlačítko Uložit uložíte všechny zadané údaje vztahující se k balíčku.',
      'new_module' => 'Klepněte na tlačítko Nový modul pro vytvoření nového modulu tohoto balíčku.',
    ),
    'module' => 
    array (
      'deletebtn' => 'Klepněte na tlačítko Odstranit pro odstranění modul.',
      'savebtn' => 'Klepnutím na tlačítko Uložit uložíte všechny zadané údaje vztahující se k modulu.',
      'type_basic' => 'Šablona Základní typ poskytuje základní pole, jako je Název, Přiděleno týmu, Datum vytvoření a Popis polí.',
    ),
    'listViewEditor' => 
    array (
      'Hidden' => 'Skrytá pole nejsou v současné době k dispozici pro uživatele v ListViews.',
      'Available' => 'Dostupná pole nejsou zobrazena ve výchozím nastavení, ale mohou být přidána do ListViews uživatelů.',
      'Default' => 'Výchozí pole se zobrazí v ListViews, která nejsou přizpůsobena uživateli.',
    ),
    'popupListViewEditor' => 
    array (
      'Hidden' => 'Skrytá pole nejsou v současné době k dispozici pro uživatele v ListViews.',
      'Default' => 'Výchozí pole se zobrazí v ListViews, která nejsou přizpůsobena uživateli.',
    ),
    'searchViewEditor' => 
    array (
      'Hidden' => 'Skryté položky se neukází v Hledání.',
      'Default' => 'Výchozí pole se zobrazí v poli Hledat.',
    ),
    'exportcustom' => 
    array (
      'description' => 'Toto je popis balíčku, který se zobrazí během instalace.',
    ),
    'studioWizard' => 
    array (
      'mbBtn' => 'Použijte Module Builder pro vytvoření nového modulu',
      'backBtn' => 'Návrat k předchozímu kroku.',
      'moduleBtn' => 'Klikněte pro editaci tohoto modulu.',
      'newPackage' => 'Klepněte na tlačítko Nový balíček pro vytvoření nového balíčku.',
    ),
    'labelsHelp' => 
    array (
      'saveBtn' => 'Klepnutím na tlačítko Uložit uložíte všechny změny.',
    ),
  ),
  'assistantHelp' => 
  array (
    'studioWizard' => 
    array (
      'mbBtn' => 'Použijte Module Builder pro vytvoření nového modulu',
      'backBtn' => 'Návrat k předchozímu kroku.',
      'moduleBtn' => 'Klikněte pro editaci tohoto modulu.',
      'newPackage' => 'Klepněte na tlačítko Nový balíček pro vytvoření nového balíčku.',
    ),
    'searchViewEditor' => 
    array (
      'Hidden' => 'Skryté položky se neukází v Hledání.',
      'Default' => 'Výchozí pole se zobrazí v poli Hledat.',
    ),
  ),
  'labelTypes' => 
  array (
    '' => 'Často používané popisky',
    'all' => 'všechny popisky',
  ),
  'LBL_STUDIO' => 'Studio',
  'LBL_MODULE_TITLE' => 'Studio',
  'LBL_EC_EXPORTBTN' => 'Export',
  'LBL_RESET' => 'Reset',
  'fieldTypes' => 
  array (
    'html' => 'HTML',
    'url' => 'URL',
    'varchar' => 'Textové pole',
    'int' => 'integer',
    'float' => 'Plovoucí',
    'bool' => '"Checkbox"',
    'enum' => '"Dropdown"',
    'multienum' => '"MultiSelect"',
    'date' => 'Datum',
    'phone' => 'Telefon',
    'currency' => 'Měna',
    'radioenum' => 'Rádio',
    'relate' => 'Vazba',
    'address' => 'Adresa',
    'text' => 'Oblast textu',
    'iframe' => 'Rám',
    'image' => 'Obrázek',
    'encrypt' => 'Šifrovat',
    'datetimecombo' => 'Datum a čas',
    'decimal' => 'Desetinný',
  ),
  'LBL_HOME_EDIT_DROPDOWNS' => 'Editor "dropdownu"',
  'LBL_AS_SHOW' => 'V budoucnu zobrazit pomocníka .',
  'LBL_AS_IGNORE' => 'V budoucnu ignorovat pomocníka.',
  'LBL_AS_SAYS' => 'Pomocník říká:',
  'LBL_MODULEBUILDER' => 'Stavitel modulu',
  'LBL_DROPDOWNEDITOR' => 'Editor výběrových polí',
  'LBL_EDIT_DROPDOWN' => 'Upravit dropdown',
  'LBL_DEVELOPER_TOOLS' => 'Studio',
  'LBL_SUGARPORTAL' => 'Editor Sugar portálu',
  'LBL_SYNCPORTAL' => 'Synchronizace portálu',
  'LBL_PACKAGE_LIST' => 'Seznam balíků',
  'LBL_HOME' => 'Domů',
  'LBL_NONE' => '-žádný-',
  'LBL_DEPLOYE_COMPLETE' => 'Nasadit kompletní',
  'LBL_DEPLOY_FAILED' => 'Došlo k chybě při nasazování procesu, může váš balíček není správně nainstalován',
  'LBL_ADD_FIELDS' => 'Přidat příslušné pole',
  'LBL_AVAILABLE_SUBPANELS' => 'Dostupné sub-panely',
  'LBL_ADVANCED' => 'Rozšiřené',
  'LBL_ADVANCED_SEARCH' => 'Rozšiřené',
  'LBL_BASIC' => 'Základní',
  'LBL_BASIC_SEARCH' => 'Základní',
  'LBL_CURRENT_LAYOUT' => 'Rozvržení',
  'LBL_CURRENCY' => 'Měna',
  'LBL_DASHLET' => 'Sugar budík',
  'LBL_DASHLETLISTVIEW' => 'Zobrazení seznamu Sugar budíků',
  'LBL_DASHLETSEARCH' => 'Hledání Sugar budíků',
  'LBL_POPUP' => 'Překryvné zobrazení',
  'LBL_POPUPLIST' => 'Překryvný seznam',
  'LBL_POPUPLISTVIEW' => 'Popup zobrazení seznamu',
  'LBL_POPUPSEARCH' => 'Překryvné vyhledávání',
  'LBL_DASHLETSEARCHVIEW' => 'Hledání Sugar budíků',
  'LBL_DISPLAY_HTML' => 'Zobrazit HTML kód',
  'LBL_DETAILVIEW' => 'Detailní zobrazení',
  'LBL_DROP_HERE' => '[Položit zde]',
  'LBL_EDIT' => 'Úprava',
  'LBL_EDIT_LAYOUT' => 'Úprava rozvržení',
  'LBL_EDIT_ROWS' => 'Úprava řádků',
  'LBL_EDIT_COLUMNS' => 'Úprava sloupců',
  'LBL_EDIT_LABELS' => 'Úprava popisek',
  'LBL_EDIT_FIELDS' => 'Upravit pole',
  'LBL_EDIT_PORTAL' => 'Upravit portál pro',
  'LBL_EDITVIEW' => 'Zobrazení úprav',
  'LBL_FILLER' => '(výplň)',
  'LBL_FIELDS' => 'Pole',
  'LBL_FAILED_TO_SAVE' => 'Uložení se nezdařilo',
  'LBL_FAILED_PUBLISHED' => 'Publikování selhalo',
  'LBL_HOMEPAGE_PREFIX' => 'Moje',
  'LBL_LAYOUT_PREVIEW' => 'Náhled nákresu',
  'LBL_LAYOUTS' => 'Nákresy',
  'LBL_LISTVIEW' => 'Zobrazení seznamu',
  'LBL_MODULES' => 'Moduly:',
  'LBL_NEW_PACKAGE' => 'Nový balík',
  'LBL_NEW_PANEL' => 'Nový panel',
  'LBL_NEW_ROW' => 'Nový řádek',
  'LBL_PACKAGE_DELETED' => 'Balík smazán',
  'LBL_PUBLISHING' => 'Publikuji...',
  'LBL_PUBLISHED' => 'Publikováno',
  'LBL_SELECT_FILE' => 'Vybrat soubor',
  'LBL_SAVE_LAYOUT' => 'Uložit rozvržení',
  'LBL_SELECT_A_SUBPANEL' => 'Vybrat Subpanel',
  'LBL_SELECT_SUBPANEL' => 'Vybrat Subpanel',
  'LBL_SUBPANELS' => 'Pod-panely',
  'LBL_SUBPANEL' => 'Pod-panel',
  'LBL_SUBPANEL_TITLE' => 'Nadpis:',
  'LBL_SEARCH_FORMS' => 'Hledání',
  'LBL_SEARCH' => 'Hledat',
  'LBL_STAGING_AREA' => 'Staging Area (přetáhněte sem položky)',
  'LBL_SUGAR_FIELDS_STAGE' => 'Sugar Pole (klikněte na pole pro přidání do staging area)',
  'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (klikněte na položku pro přidání do stagging area)',
  'LBL_TOOLBOX' => 'Nástroje',
  'LBL_VIEW_SUGAR_FIELDS' => 'Zobrazit Sugar pole',
  'LBL_VIEW_SUGAR_BIN' => 'Zobrazit Sugar Bin',
  'LBL_QUICKCREATE' => 'Rychlé vytvoření',
  'LBL_EDIT_DROPDOWNS' => 'Upravit globální "dropdown"',
  'LBL_ADD_DROPDOWN' => 'Přidat nový "dropdown"',
  'LBL_BLANK' => '-prázdný-',
  'LBL_TAB_ORDER' => 'Pořadí záložek',
  'LBL_TAB_PANELS' => 'Zobrazit panely jako tabulky záložky',
  'LBL_TAB_PANELS_HELP' => 'Zobrazit každý panel jako jeho vlastní kartu místo toho, mít je všechny na jedné obrazovce',
  'LBL_DROPDOWN_TITLE_NAME' => 'Jméno',
  'LBL_DROPDOWN_LANGUAGE' => 'Jazyk',
  'LBL_DROPDOWN_ITEMS' => 'Seznam položek',
  'LBL_DROPDOWN_ITEM_NAME' => 'Jméno položky',
  'LBL_DROPDOWN_ITEM_LABEL' => 'Zobrazit štítek',
  'LBL_SYNC_TO_DETAILVIEW' => 'Synchronizovat do detailního pohledu',
  'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Zvolte tuto možnost pro synchronizaci rozvržení EditView (změnovém pohledu) na odpovídající rozvržení DetailView (detailního pohledu). Rozvržení Polí a Položek v EditView bude synchronizováno a uloženo automaticky do DetailView po kliknutí na tlačítko Uložit nebo Uložit & Rozmístni v EditView.<br />Změny v rozvržení nebudou moci být provedeny v DetailView (detailním pohledu).',
  'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Tento DetailView (detailní pohled) je synchronizován s odpovídající rozvržení EditView (změnovém pohledu). <br />Rozvržení Polí a Položek v rozvržení DetailView (detailního pohledu) reflektuje rozvržení Polí a Položek v rozvržení EditView (změnovém pohledu).<br />Změny v rozvržení DetailView (detailního pohledu) nemohou být uloženy',
  'LBL_COPY_FROM_EDITVIEW' => 'Zkopíruj z EditView (změnového pohledu)',
  'LBL_DROPDOWN_BLANK_WARNING' => 'Hodnoty jsou povinné pro Jméno položky i Štítek zobraz. Pro přidání prázdné položky, klikněte Přidat bez vložení hodnoty pro Jméno položky i Štítek zobraz.',
  'LBL_WIRELESSLAYOUTS' => 'Rozvržení pro mobil',
  'LBL_WIRELESSEDITVIEW' => 'Zobrazení úprav pro mobil',
  'LBL_WIRELESSDETAILVIEW' => 'Zobrazení detailu pro mobil',
  'LBL_WIRELESSLISTVIEW' => 'Zobrazení seznamu pro mobil',
  'LBL_WIRELESSSEARCH' => 'Zobrazení vyhledávání pro mobil',
  'LBL_BTN_ADD_DEPENDENCY' => 'Přidat vazbu',
  'LBL_BTN_EDIT_FORMULA' => 'Editovat výraz',
  'LBL_DEPENDENCY' => 'Vazba',
  'LBL_CALCULATED' => 'Vypočtená hodnota',
  'LBL_READ_ONLY' => 'Pouze pro čtení',
  'LBL_FORMULA' => 'Výraz',
  'LBL_FORMULA_BUILDER' => 'Tvořič výrazů',
  'LBL_FORMULA_INVALID' => 'Chybné pravidlo',
  'LBL_FORMULA_TYPE' => 'Pravidlo musí být typu',
  'LBL_NO_FIELDS' => 'Nenalezeny žádné položky',
  'LBL_NO_FUNCS' => 'Nenalezeny žádné funkce',
  'LBL_SEARCH_FUNCS' => 'Vyhledávání funkcí...',
  'LBL_SEARCH_FIELDS' => 'vyhledávání polí...',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Závisející',
  'LBL_MODULE' => 'Modul',
  'LBL_LHS_MODULE' => 'Hlavní modul',
  'LBL_CUSTOM_RELATIONSHIPS' => '* vztah vytvořený ve Studiu',
  'LBL_RELATIONSHIPS' => 'Vztahy',
  'LBL_RELATIONSHIP_EDIT' => 'Upravit vztahy',
  'LBL_REL_NAME' => 'Jméno',
  'LBL_REL_LABEL' => 'Štítek',
  'LBL_REL_TYPE' => 'Typ',
  'LBL_RHS_MODULE' => 'Související modul',
  'LBL_NO_RELS' => 'Žádné vztahy',
  'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Volitelná podmínka',
  'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Sloupec',
  'LBL_RELATIONSHIP_ROLE_VALUE' => 'Hodnota',
  'LBL_SUBPANEL_FROM' => 'Pod-panel formulář',
  'LBL_RELATIONSHIP_ONLY' => 'Žádné viditelné prvky nebudou vytvořeny pro tento vztah',
  'LBL_ONETOONE' => 'Jeden na jednoho',
  'LBL_ONETOMANY' => 'Jeden na více',
  'LBL_MANYTOONE' => 'Více na jednoho',
  'LBL_MANYTOMANY' => 'Více na více',
  'LBL_QUESTION_FUNCTION' => 'Vyberte funkci nebo komponentu.',
  'LBL_QUESTION_MODULE1' => 'Vyberte modul.',
  'LBL_QUESTION_EDIT' => 'Vyberte modul pro úpravu.',
  'LBL_QUESTION_LAYOUT' => 'Vyberve rozvržení pro úpravu.',
  'LBL_QUESTION_SUBPANEL' => 'Vyberte pod-panel pro úpravu.',
  'LBL_QUESTION_SEARCH' => 'Vyberve rozvržení hledání pro úpravu.',
  'LBL_QUESTION_MODULE' => 'Vyberte komponentu modulu pro úpravu.',
  'LBL_QUESTION_PACKAGE' => 'Vyberte balík pro úpravu nebo vytvořte nový balík.',
  'LBL_QUESTION_EDITOR' => 'Zvolte nástroj.',
  'LBL_QUESTION_DROPDOWN' => 'Vyberte "dropdown" pro úpravo nebo vytvořte nový "dropdown".',
  'LBL_QUESTION_DASHLET' => 'Vyberte rozvržení budíku pro úpravu.',
  'LBL_QUESTION_POPUP' => 'Vyberte rozvržení popup pro úpravu.',
  'LBL_RELATE_TO' => 'Týkající se',
  'LBL_NAME' => 'Název',
  'LBL_LABELS' => 'Štítky',
  'LBL_MASS_UPDATE' => 'Hromadná aktualizace',
  'LBL_AUDITED' => 'Auditovat?',
  'LBL_CUSTOM_MODULE' => 'Modul',
  'LBL_DEFAULT_VALUE' => 'Výchozí hodnota',
  'LBL_REQUIRED' => 'Požadovaná položka',
  'LBL_DATA_TYPE' => 'Typ',
  'LBL_HCUSTOM' => 'VLATNÍ',
  'LBL_HDEFAULT' => 'ZÁKLADNÍ',
  'LBL_LANGUAGE' => 'Jazyk:',
  'LBL_SECTION_EDLABELS' => 'Úprava popisek',
  'LBL_SECTION_PACKAGES' => 'Balíky',
  'LBL_SECTION_PACKAGE' => 'Balíky',
  'LBL_SECTION_MODULES' => 'Moduly',
  'LBL_SECTION_PORTAL' => 'Portál',
  'LBL_SECTION_DROPDOWNS' => '"Dropdowny"',
  'LBL_SECTION_PROPERTIES' => 'Vlastnosti',
  'LBL_SECTION_DROPDOWNED' => 'Editor výběrových polí',
  'LBL_SECTION_HELP' => 'Nápověda',
  'LBL_SECTION_ACTION' => 'Akce',
  'LBL_SECTION_MAIN' => 'Hlavní',
  'LBL_SECTION_EDPANELLABEL' => 'Upravit štítek panelu',
  'LBL_SECTION_FIELDEDITOR' => 'Upravit pole',
  'LBL_SECTION_DEPLOY' => 'Použít',
  'LBL_SECTION_MODULE' => 'Modul',
  'LBL_SECTION_VISIBILITY_EDITOR' => 'Upravit viditelnost',
  'LBL_DEFAULT' => 'Standartní',
  'LBL_HIDDEN' => 'Skryté',
  'LBL_AVAILABLE' => 'Dostupné',
  'LBL_LISTVIEW_DESCRIPTION' => 'Dole jsou zobrazeny tři sloupce. První sloupec obsahuje pole, která jsou zobrazena v seznamu defaultně. Sloupec další obsahuje položky, které si uživatel může vybrat pro vytvoření vlastního nastavení, a sloupec dostupné je pro vás jako správce, abyste z něj mohl přidat do prvního sloupce nebo do sloupce další.',
  'LBL_LISTVIEW_EDIT' => 'Úprava pohledu seznam',
  'LBL_MB_PREVIEW' => 'Náhled',
  'LBL_MB_RESTORE' => 'Obnova',
  'LBL_MB_DELETE' => 'Smazat',
  'LBL_MB_COMPARE' => 'Porovnat',
  'LBL_MB_DEFAULT_LAYOUT' => 'Základní rozvržení',
  'LBL_BTN_ADD' => 'Přidat',
  'LBL_BTN_SAVE' => 'Uložit',
  'LBL_BTN_SAVE_CHANGES' => 'Uložit změny',
  'LBL_BTN_DONT_SAVE' => 'Zahodit změny',
  'LBL_BTN_CANCEL' => 'Zrušit',
  'LBL_BTN_CLOSE' => 'Zavřít',
  'LBL_BTN_SAVEPUBLISH' => 'Uložit a nasadit',
  'LBL_BTN_NEXT' => 'Následujíci',
  'LBL_BTN_BACK' => 'Zpět',
  'LBL_BTN_CLONE' => 'Duplikovat',
  'LBL_BTN_ADDCOLS' => 'Přidat sloupce',
  'LBL_BTN_ADDROWS' => 'Přidat řádky',
  'LBL_BTN_ADDFIELD' => 'Přidat pole',
  'LBL_BTN_ADDDROPDOWN' => 'Přidat "dropdown"',
  'LBL_BTN_SORT_ASCENDING' => 'Seřadit vzestupně',
  'LBL_BTN_SORT_DESCENDING' => 'Seřadit sestupně',
  'LBL_BTN_EDLABELS' => 'Úprava popisek',
  'LBL_BTN_UNDO' => 'Zpět',
  'LBL_BTN_REDO' => 'Znova',
  'LBL_BTN_ADDCUSTOMFIELD' => 'Přidat vlastní pole',
  'LBL_BTN_EXPORT' => 'Exportovat vlastní úpravy',
  'LBL_BTN_DUPLICATE' => 'Duplikovat',
  'LBL_BTN_PUBLISH' => 'Zvečejit',
  'LBL_BTN_DEPLOY' => 'Použít',
  'LBL_BTN_EXP' => 'Exportovat',
  'LBL_BTN_DELETE' => 'Smazat',
  'LBL_BTN_VIEW_LAYOUTS' => 'Zobrazit rozvržení',
  'LBL_BTN_VIEW_FIELDS' => 'Zobrazit pole',
  'LBL_BTN_VIEW_RELATIONSHIPS' => 'Zobrazit vztahy',
  'LBL_BTN_ADD_RELATIONSHIP' => 'Přidat vztah',
  'ERROR_ALREADY_EXISTS' => 'Pole už existuje',
  'ERROR_INVALID_KEY_VALUE' => 'Chyba: Neplatná klíčová hodnota: [\']',
  'ERROR_NO_HISTORY' => 'Žádná historie soubory nalezeny',
  'ERROR_MINIMUM_FIELDS' => 'Rozvržení musí obsahovat alespoň jedno pole',
  'ERROR_GENERIC_TITLE' => 'Došlo k chybě',
  'ERROR_REQUIRED_FIELDS' => 'Jste si jisti, že chcete pokračovat? Následující povinná pole rozvržení chybí:',
  'ERROR_ARE_YOU_SURE' => 'Jsi si jist(a), že chcete pokračovat?',
  'ERROR_CALCULATED_MOBILE_FIELDS' => 'Následujíc položka(y) obsahuje vypočtenou hodnotu, která nebude přepočítána při zobrazení v editačním pohledu v SugarCRM Mobile.',
  'ERROR_CALCULATED_PORTAL_FIELDS' => 'Následujíc položka(y) obsahuje vypočtenou hodnotu, která nebude přepočítána při zobrazení v editačním pohledu v SugarCRM Portal.',
  'LBL_PORTAL' => 'Portál',
  'LBL_PORTAL_LAYOUTS' => 'Rozložení pro portál',
  'LBL_SYNCP_WELCOME' => 'Prosím, zadejte adresu URL portálu instance, kterou chcete aktualizovat.',
  'LBL_SP_UPLOADSTYLE' => 'Vyberte soubor stylu z vašeho počítače.<br>Styl bude implementován do Sugaru při přístím provedení synchronizace.',
  'LBL_SP_UPLOADED' => 'Nahráno',
  'ERROR_SP_UPLOADED' => 'Prosím, ujistěte se, že jste nahráváte CSS styl.',
  'LBL_SP_PREVIEW' => 'Zde je náhled jak bude portál Sugaru vypadat při použití stylu.',
  'LBL_PORTALSITE' => 'URL Sugar portálu:',
  'LBL_PORTAL_GO' => 'Spustit',
  'LBL_UP_STYLE_SHEET' => 'Nahrát soubor stylu',
  'LBL_QUESTION_SUGAR_PORTAL' => 'Vyberte rozvržení Sugar portálu pro úpravu.',
  'LBL_QUESTION_PORTAL' => 'Vyberve rozvržení portálu pro úpravu.',
  'LBL_SUGAR_PORTAL' => 'Editor Sugar portálu',
  'LBL_CASES' => 'Případy',
  'LBL_NEWSLETTERS' => 'Zpravodaje',
  'LBL_BUG_TRACKER' => '"Bug Tracker"',
  'LBL_MY_ACCOUNT' => 'Můj účet',
  'LBL_LOGOUT' => 'Odhlásit se',
  'LBL_CREATE_NEW' => 'Vytvořit nový',
  'LBL_LIST' => 'Seznam',
  'LBL_LOW' => 'Nízký',
  'LBL_MEDIUM' => 'Střední',
  'LBL_HIGH' => 'Vysoký',
  'LBL_NUMBER' => 'Číslo:',
  'LBL_PRIORITY' => 'Priorita:',
  'LBL_SUBJECT' => 'Předmět',
  'LBL_DESCRIPTION' => 'Popis:',
  'LBL_PACKAGE_NAME' => 'Jméno balíku:',
  'LBL_MODULE_NAME' => 'Jméno modulu:',
  'LBL_AUTHOR' => 'Autor:',
  'LBL_KEY' => 'Klíč:',
  'LBL_ADD_README' => 'Readme soubor',
  'LBL_LAST_MODIFIED' => 'Poslední změna:',
  'LBL_NEW_MODULE' => 'Nový modul',
  'LBL_LABEL' => 'Název:',
  'LBL_LABEL_TITLE' => 'Název',
  'LBL_WIDTH' => 'Šířka',
  'LBL_PACKAGE' => 'Balík:',
  'LBL_TYPE' => 'Typ:',
  'LBL_TEAM_SECURITY' => 'Zabezpečení',
  'LBL_ASSIGNABLE' => 'Přiřaditelné',
  'LBL_PERSON' => 'Osoba',
  'LBL_COMPANY' => 'Společnost',
  'LBL_ISSUE' => 'Problém',
  'LBL_SALE' => 'Sleva',
  'LBL_FILE' => 'Soubor',
  'LBL_NAV_TAB' => 'Záložka navigace',
  'LBL_CREATE' => 'Přidat',
  'LBL_VIEW' => 'Zobrazit',
  'LBL_LIST_VIEW' => 'Seznam',
  'LBL_HISTORY' => 'Historie',
  'LBL_RESTORE_DEFAULT' => 'Obnovit výchozí',
  'LBL_ACTIVITIES' => 'Aktivity',
  'LBL_NEW' => 'Nový',
  'LBL_TYPE_BASIC' => 'základní',
  'LBL_TYPE_COMPANY' => 'společnost',
  'LBL_TYPE_PERSON' => 'osoba',
  'LBL_TYPE_ISSUE' => 'problém',
  'LBL_TYPE_SALE' => 'sleva',
  'LBL_TYPE_FILE' => 'soubor',
  'LBL_RSUB' => 'Toto je sub-panel, který se zobrazí ve vašem modulu',
  'LBL_MSUB' => 'Toto je subpanel, že váš modul poskytuje související modul pro zobrazení',
  'LBL_MB_IMPORTABLE' => 'Importuji',
  'LBL_VE_VISIBLE' => 'viditelný',
  'LBL_VE_HIDDEN' => 'schovaný',
  'LBL_PACKAGE_WAS_DELETED' => '[[package]] byl smazán',
  'LBL_EC_TITLE' => 'Exportovat vlasní úpravy',
  'LBL_EC_NAME' => 'Jméno balíku:',
  'LBL_EC_AUTHOR' => 'Autor:',
  'LBL_EC_DESCRIPTION' => 'Popis:',
  'LBL_EC_KEY' => 'Klíč:',
  'LBL_EC_CHECKERROR' => 'Prosím vyberte modul.',
  'LBL_EC_CUSTOMFIELD' => 'vlastní pole',
  'LBL_EC_CUSTOMLAYOUT' => 'upravená rozvržení',
  'LBL_EC_NOCUSTOM' => 'Žádné moduly nebyly upraveny.',
  'LBL_EC_EMPTYCUSTOM' => 'má prázdné vlastní úpravy.',
  'LBL_MODULE_DEPLOYED' => 'Modul byl nasazen.',
  'LBL_UNDEFINED' => 'nedefinován',
  'LBL_AJAX_FAILED_DATA' => 'Nepodařilo se získat údaje',
  'LBL_AJAX_TIME_DEPENDENT' => 'Probíhajá časově závisle akce. Prosím, vyčkejte a zkuste to znovu za několik sekund.',
  'LBL_AJAX_LOADING' => 'Nahrávám...',
  'LBL_AJAX_DELETING' => 'Mažu...',
  'LBL_AJAX_BUILDPROGRESS' => 'Buduji...',
  'LBL_AJAX_DEPLOYPROGRESS' => 'Provádím nasazení...',
  'LBL_AJAX_FIELD_EXISTS' => 'Jméno pole které jste zadali už existuje. Prosím zadejte jiné jméno pole.',
  'LBL_JS_REMOVE_PACKAGE' => 'Jste si jisti, že chcete odstranit tento balíček? Budou odstraněny všechny soubory spojené s tímto balíčkem.',
  'LBL_JS_REMOVE_MODULE' => 'Jste si jisti, že chcete odstranit tento modul? Budou odstraněny všechny soubory spojené s tímto modul.',
  'LBL_JS_DEPLOY_PACKAGE' => 'Žádné úpravy, které jste provedli ve studiu nebudou přepsány, pokud tento modul je znovu-nasazený. Jste si jisti, že chcete pokračovat?',
  'LBL_DEPLOY_IN_PROGRESS' => 'Nasazuji balík',
  'LBL_JS_VALIDATE_NAME' => 'Název - Musí být alfanumerické bez mezer a začínající písmenem',
  'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Jméno balíčku již existuje',
  'LBL_JS_VALIDATE_KEY' => 'Klíč - musí být alfanumerické',
  'LBL_JS_VALIDATE_LABEL' => 'Prosím, zadejte popisek, který bude použit jako zobrazovaný název pro tento modul',
  'LBL_JS_VALIDATE_TYPE' => 'Prosím, vyberte typ modulu, který chcete stavět z výše uvedeného seznamu',
  'LBL_JS_VALIDATE_REL_NAME' => 'Název - Musí být alfanumerické bez mezer',
  'LBL_JS_VALIDATE_REL_LABEL' => 'Label - přidejte název, který se zobrazí nad pod-panelem',
  'LBL_CONFIRM_FIELD_DELETE' => 'Deleting this custom field will delete both the custom field and all the data related to the custom field from the database. The field will be no longer appear in any module layouts. Do you wish to continue?',
  'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Jste si jisti, že chcete smazat tento vztah?',
  'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Toto vytvoří tento vztah trvalím. Jste si jisti, že chcete nasadit tento vztah?',
  'LBL_CONFIRM_DONT_SAVE' => 'Byly provedeny změny od posledního uložení, chcete ušetřit?',
  'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Uložit změny?',
  'LBL_CONFIRM_LOWER_LENGTH' => 'Data mohou být zkrácena a toto nelze vrátit zpět, jste si jisti, že chcete pokračovat?',
  'LBL_POPHELP_FIELD_DATA_TYPE' => 'Zvolte odpovídající typ dat na základě typu dat, které budou vloženy do pole.',
  'LBL_POPHELP_IMPORTABLE' => 'Ano: Pole bude zahrnuto do operace importu.<br><br />Ne.: Pole nebudou zahrnuta do operace importu.<br><br />Požadováno: Hodnota pole musí být v každé operaci importu.',
  'LBL_POPHELP_IMAGE_WIDTH' => 'Zadejte šířku v pixelech.<br><br />Nahraný obrázek bude změněn do tohoto rozměru.',
  'LBL_POPHELP_IMAGE_HEIGHT' => 'Zadejte výšku v pixelech.<br><br />Nahraný obrázek bude změněn do tohoto rozměru.',
  'LBL_POPHELP_DUPLICATE_MERGE' => 'Povoleno: pole se objeví ve funkci Sloučit Duplikáty, ale nebudou k dispozici k použití pro podmínky filtru ve funkci Najít Duplikáty.<br />Zakázáno: pole se neobjeví ve funkci Sloučit Duplikáty, ale nebudou k dispozici k použití pro podmínky filtru ve funkci Najít Duplikáty.<br />Ve Filtru: pole se objeví ve funkci Sloučit Duplikáty a bude také k dispozici ve funkci Najít Duplikáty.<br />Filtr: pole se neobjeví ve funkci Sloučit Duplikáty, ale budou k dispozici k použití pro podmínky filtru ve funkci Najít Duplikáty.<br />Výchozí, Vybraný Filtr: pole bude použito pro podmínku filtru ve výchozím nastavení ve funkci Najít Duplikáty a bude také ve funkci Sloučit Duplikáty.',
  'LBL_POPHELP_CALCULATED' => 'Vytvořte vzorec pro určení hodnoty v tomto poli.<br />Pole využívající výpočty nebudou přepočítávány v editačním pohledu v rozložení pro Sugar Self-service Portal a Mobil',
  'LBL_POPHELP_DEPENDENT' => 'Vytvoř pravidlo na určení viditelnosti položky v rozvržení.<br />Závislé položky budou následovat závislá pravidla v mobilním pohledu, ale nebudou následovat pravidla v nativní aplikaci jako např. Sugar Mobile pro iPhone.<br />Nebudou následovat pravidla v Sugar Self-Service Portálu.',
  'LBL_RESET_MODULE' => 'Zrušit modul',
  'LBL_REMOVE_CUSTOM' => 'Smazat úpravy',
  'LBL_CLEAR_RELATIONSHIPS' => 'Vymazat vztahy',
  'LBL_RESET_LABELS' => 'Zrušit štítky',
  'LBL_RESET_LAYOUTS' => 'Zrušit rozvržení',
  'LBL_REMOVE_FIELDS' => 'Odebrat vlastní pole',
  'LBL_CLEAR_EXTENSIONS' => 'Vyčistit rozšíření',
  'LBL_HISTORY_TIMESTAMP' => 'Časová známka',
  'LBL_HISTORY_TITLE' => 'historie',
  'parent' => 'Flexibilní vztah',
  'LBL_ILLEGAL_FIELD_VALUE' => '"Dropdown" nemůže obsahovat uvozovky.',
  'LBL_CONFIRM_SAVE_DROPDOWN' => 'Označujete položku pro odstranění z "dropdown" seznamu. Jakékoli "dropdown" pole užívající tento seznam s touto polokou jako hodnotu již nebude zobrazeno. Hodnota již nebude moci být vybrána z "dropdownu". Jste si jisti, že chcete pokračovat?',
  'LBL_POPHELP_VALIDATE_US_PHONE' => 'Vyber pro validaci tohoto pole pro vstup telefonního čísla s 10-ti číslicemi s ohledem na předvolbu 1 a  použije se U.S. formát telefonního čísla při uložení. Následující formát bude použit: (xxx) xxx-xxxx.',
);

