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
  'LBL_SYNC_TO_DETAILVIEW' => 'Sync to DetailView',
  'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br />will be sync\'d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView.<br />Layout changes will not be able to be made in the DetailView.',
  'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync\'d with the corresponding EditView.<br />Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br />Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView.',
  'LBL_COPY_FROM_EDITVIEW' => 'Copy from EditView',
  'LBL_DROPDOWN_BLANK_WARNING' => 'Values are required for both the Item Name and the Display Label. To add a blank item, click Add without entering any values for the Item Name and the Display Label.',
  'LBL_FORMULA_INVALID' => 'Невалидна формула',
  'LBL_FORMULA_TYPE' => 'Формулата трябва да бъде от тип',
  'ERROR_ARE_YOU_SURE' => 'Сигурни ли сте, че искате да продължите?',
  'ERROR_CALCULATED_MOBILE_FIELDS' => 'The following field(s) have calculated values which will not be re-calculated in real time in the SugarCRM Mobile Edit View:',
  'ERROR_CALCULATED_PORTAL_FIELDS' => 'Тhe following field(s) have calculated values which will not be re-calculated in real time in the SugarCRM Portal Edit View:',
  'LBL_PORTAL_LAYOUTS' => 'Portal Layouts',
  'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Съществува пакет с такова име',
  'LBL_POPHELP_CALCULATED' => 'Create a formula to determine the value in this field.<br />Workflow definitions containing an action that are set to update this field will no longer execute the action.<br />Fields using formulas will not be calculated in real-time in the Sugar Self-Service Portal or Mobile EditView layouts.',
  'LBL_POPHELP_DEPENDENT' => 'Create a formula to determine whether this field is visible in layouts.<br />Dependent fields will follow the dependency formula in the browser-based mobile view,<br />but will not follow the formula in the native applications, such as Sugar Mobile for iPhone.<br />They will not follow the formula in the Sugar Self-Service Portal.',
  'LBL_POPHELP_VALIDATE_US_PHONE' => 'Select to validate this field for the entry of a 10-digit<br />phone number, with allowance for the country code 1, and<br />to apply a U.S. format to the phone number when the record<br />is saved. The following format will be applied: (xxx) xxx-xxxx.',
  'LBL_LAYOUT_PREVIEW' => 'Layout Preview',
  'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (click items to add to staging area)',
  'LBL_RELATIONSHIP_ONLY' => 'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
  'LBL_SECTION_VISIBILITY_EDITOR' => 'Edit Visibility',
  'LBL_BTN_REDO' => 'Redo',
  'LBL_SP_UPLOADSTYLE' => 'Select a style sheet to upload from your computer.<br> The style sheet will be implemented in the Sugar Portal the next time you perform a sync.',
  'ERROR_SP_UPLOADED' => 'Please be sure that you are uploading a css style sheet.',
  'LBL_SP_PREVIEW' => 'Here is a preview of what the Sugar Portal will look like using the style sheet.',
  'LBL_PORTALSITE' => 'Sugar Portal URL:',
  'LBL_PORTAL_GO' => 'Go',
  'LBL_UP_STYLE_SHEET' => 'Upload Style Sheet',
  'LBL_QUESTION_SUGAR_PORTAL' => 'Select a Sugar Portal layout to edit.',
  'LBL_QUESTION_PORTAL' => 'Select a portal layout to edit.',
  'LBL_SUGAR_PORTAL' => 'Sugar Portal Editor',
  'LBL_WIDTH' => 'Width',
  'LBL_PACKAGE' => 'Package:',
  'LBL_TEAM_SECURITY' => 'Team Security',
  'LBL_ASSIGNABLE' => 'Assignable',
  'LBL_PERSON' => 'Person',
  'LBL_COMPANY' => 'Company',
  'LBL_ISSUE' => 'Issue',
  'LBL_SALE' => 'Sale',
  'LBL_NAV_TAB' => 'Navigation Tab',
  'LBL_TYPE_BASIC' => 'basic',
  'LBL_TYPE_COMPANY' => 'company',
  'LBL_TYPE_PERSON' => 'person',
  'LBL_TYPE_ISSUE' => 'issue',
  'LBL_TYPE_SALE' => 'sale',
  'LBL_TYPE_FILE' => 'file',
  'LBL_RSUB' => 'This is the subpanel that will be displayed in your module',
  'LBL_MSUB' => 'This is the subpanel that your module provides to the related module for display',
  'LBL_MB_IMPORTABLE' => 'Importing',
  'LBL_VE_VISIBLE' => 'visible',
  'LBL_VE_HIDDEN' => 'hidden',
  'LBL_PACKAGE_WAS_DELETED' => '[[package]] was deleted',
  'LBL_EC_CUSTOMFIELD' => 'customized field(s)',
  'LBL_EC_CUSTOMLAYOUT' => 'customized layout(s)',
  'LBL_EC_NOCUSTOM' => 'No modules have been customized.',
  'LBL_EC_EMPTYCUSTOM' => 'has empty customizations.',
  'LBL_MODULE_DEPLOYED' => 'Module has been deployed.',
  'LBL_UNDEFINED' => 'undefined',
  'LBL_AJAX_FAILED_DATA' => 'Failed to retrieve data',
  'LBL_AJAX_BUILDPROGRESS' => 'Build In Progress...',
  'LBL_AJAX_DEPLOYPROGRESS' => 'Deploy In Progress...',
  'LBL_AJAX_FIELD_EXISTS' => 'The field name you entered already exists. Please enter a new field name.',
  'LBL_JS_REMOVE_PACKAGE' => 'Are you sure you wish to remove this package? This will permanently delete all files associated with this package.',
  'LBL_JS_REMOVE_MODULE' => 'Are you sure you wish to remove this module? This will permanently delete all files associated with this module.',
  'LBL_JS_DEPLOY_PACKAGE' => 'Any customizations that you made in Studio will be overwritten when this module is re-deployed. Are you sure you want to proceed?',
  'LBL_DEPLOY_IN_PROGRESS' => 'Deploying Package',
  'LBL_CONFIRM_LOWER_LENGTH' => 'Data may be truncated and this cannot be undone, are you sure you wish to continue?',
  'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
  'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
  'LBL_CLEAR_EXTENSIONS' => 'Clear Extensions',
  'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
  'LBL_HISTORY_TITLE' => 'history',
  'parent' => 'Flex Relate',
  'LBL_ILLEGAL_FIELD_VALUE' => 'Drop down key cannot contain quotes.',
  'LBL_CONFIRM_SAVE_DROPDOWN' => 'You are selecting this item for removal from the dropdown list. Any dropdown fields using this list with this item as a value will no longer display the value, and the value will no longer be able to be selected from the dropdown fields. Are you sure you want to continue?',
  'fieldTypes' => 
  array (
    'multienum' => 'MultiSelect',
    'html' => 'HTML',
    'iframe' => 'IFrame',
    'encrypt' => 'Encrypt',
    'decimal' => 'Decimal',
    'varchar' => 'Текстово поле',
    'int' => 'Цели числа',
    'float' => 'Десетични числа',
    'bool' => 'Отметка',
    'enum' => 'Падащо меню',
    'date' => 'Дата',
    'phone' => 'Телефон',
    'currency' => 'Валута',
    'radioenum' => 'Radio бутон',
    'relate' => 'Релация с друг модул',
    'address' => 'Адрес',
    'text' => 'С описание',
    'url' => 'Адрес',
    'image' => 'Изображение',
    'datetimecombo' => 'Дата/Час',
  ),
  'LBL_HOME_EDIT_DROPDOWNS' => 'Редактор на падащи менюта',
  'LBL_AS_SHOW' => 'Покажи помоник в бъдеще.',
  'LBL_AS_IGNORE' => 'Игнориране на помощника в бъдеще.',
  'LBL_AS_SAYS' => 'Помощника казва:',
  'LBL_MODULEBUILDER' => 'Създаване на модули',
  'LBL_STUDIO' => 'Студио',
  'LBL_DROPDOWNEDITOR' => 'Редактор на падащи менюта',
  'LBL_EDIT_DROPDOWN' => 'Редактор на падащи менюта',
  'LBL_DEVELOPER_TOOLS' => 'Средства за конфигуриране на програмата',
  'LBL_SUGARPORTAL' => 'Портал - редактор',
  'LBL_SYNCPORTAL' => 'Сихронизация на Портала',
  'LBL_PACKAGE_LIST' => 'Списък с модули',
  'LBL_HOME' => 'Начало',
  'LBL_NONE' => '-Няма въведени данни-',
  'LBL_DEPLOYE_COMPLETE' => 'Завърши и публикувай',
  'LBL_DEPLOY_FAILED' => 'Възникна грешка по време на процеса, вашият пакет може да не е инсталиран правилно',
  'LBL_ADD_FIELDS' => 'Добавяне на потребителски полета',
  'LBL_AVAILABLE_SUBPANELS' => 'Налични панели',
  'LBL_ADVANCED' => 'Разширено търсене',
  'LBL_ADVANCED_SEARCH' => 'Разширено търсене',
  'LBL_BASIC' => 'Основно',
  'LBL_BASIC_SEARCH' => 'Основно търсене',
  'LBL_CURRENT_LAYOUT' => 'Текуща подредба',
  'LBL_CURRENCY' => 'Валута',
  'LBL_DASHLET' => 'Раздели на начална страница',
  'LBL_DASHLETLISTVIEW' => 'Списък на записите в разделите',
  'LBL_DASHLETSEARCH' => 'Форма за търсене на раздели',
  'LBL_POPUP' => 'Изкачащи прозорци',
  'LBL_POPUPLIST' => 'Списък със записи на изкачащи прозорци',
  'LBL_POPUPLISTVIEW' => 'Списък със записи на изкачащи прозорци',
  'LBL_POPUPSEARCH' => 'Форма за търсене в изкачащи прозорци',
  'LBL_DASHLETSEARCHVIEW' => 'Форма за търсене на раздели',
  'LBL_DISPLAY_HTML' => 'Показване на HTML',
  'LBL_DETAILVIEW' => 'Форма за визуализиране на детайли',
  'LBL_DROP_HERE' => '[Поставете тук]',
  'LBL_EDIT' => 'Редактиране',
  'LBL_EDIT_LAYOUT' => 'Редактиране на подредби',
  'LBL_EDIT_ROWS' => 'Редактиране на редове',
  'LBL_EDIT_COLUMNS' => 'Редактиране на колони',
  'LBL_EDIT_LABELS' => 'Редактиране на етикети',
  'LBL_EDIT_FIELDS' => 'Редактиране на полета',
  'LBL_EDIT_PORTAL' => 'Редактиране на портал за',
  'LBL_EDITVIEW' => 'Форма за редактиране',
  'LBL_FILLER' => '(Филтер)',
  'LBL_FIELDS' => 'Полета',
  'LBL_FAILED_TO_SAVE' => 'Запазването е неуспешно',
  'LBL_FAILED_PUBLISHED' => 'Публикуването е неуспешно',
  'LBL_HOMEPAGE_PREFIX' => 'Мои',
  'LBL_LAYOUTS' => 'Подредба на екрани',
  'LBL_LISTVIEW' => 'Списък на записите',
  'LBL_MODULES' => 'Модули:',
  'LBL_MODULE_TITLE' => 'Студио',
  'LBL_NEW_PACKAGE' => 'Нов модул',
  'LBL_NEW_PANEL' => 'Нов панел',
  'LBL_NEW_ROW' => 'Нов ред',
  'LBL_PACKAGE_DELETED' => 'Модулът е изтрит',
  'LBL_PUBLISHING' => 'В процес на публикуване ...',
  'LBL_PUBLISHED' => 'Стартирал',
  'LBL_SELECT_FILE' => 'Избиране на файл',
  'LBL_SAVE_LAYOUT' => 'Запазване на подредба',
  'LBL_SELECT_A_SUBPANEL' => 'Избиране на панел със свързани записи',
  'LBL_SELECT_SUBPANEL' => 'Избери панел със свързани записи',
  'LBL_SUBPANELS' => 'Панели със свързани записи',
  'LBL_SUBPANEL' => 'Панел със свързани записи',
  'LBL_SUBPANEL_TITLE' => 'Длъжност:',
  'LBL_SEARCH_FORMS' => 'Търси',
  'LBL_SEARCH' => 'Търси',
  'LBL_STAGING_AREA' => 'Staging Area (преместете чрез влачене елементите тук)',
  'LBL_SUGAR_FIELDS_STAGE' => 'Полета на Sugar (click items to add to staging area)',
  'LBL_TOOLBOX' => 'Инструменти',
  'LBL_VIEW_SUGAR_FIELDS' => 'Преглед на полета',
  'LBL_VIEW_SUGAR_BIN' => 'Преглед',
  'LBL_QUICKCREATE' => 'Кратка форма за създаване',
  'LBL_EDIT_DROPDOWNS' => 'Редактиране на падащо меню',
  'LBL_ADD_DROPDOWN' => 'Добавяне на ново глобално падащо меню',
  'LBL_BLANK' => '-празно-',
  'LBL_TAB_ORDER' => 'Етикет на поръчка',
  'LBL_TAB_PANELS' => 'Табулатори за визуализация',
  'LBL_TAB_PANELS_HELP' => 'Панели във формата да бъдат визуализирани в отделни табове, а не на една страница',
  'LBL_DROPDOWN_TITLE_NAME' => 'Име',
  'LBL_DROPDOWN_LANGUAGE' => 'Език по подразбиране',
  'LBL_DROPDOWN_ITEMS' => 'Dropdown Items',
  'LBL_DROPDOWN_ITEM_NAME' => 'Име на падащото меню',
  'LBL_DROPDOWN_ITEM_LABEL' => 'Етикет',
  'LBL_WIRELESSLAYOUTS' => 'Подредба на екрани',
  'LBL_WIRELESSEDITVIEW' => 'Форма за редактиране',
  'LBL_WIRELESSDETAILVIEW' => 'Форма за визуализиране',
  'LBL_WIRELESSLISTVIEW' => 'Списък на записите',
  'LBL_WIRELESSSEARCH' => 'Търсене',
  'LBL_BTN_ADD_DEPENDENCY' => 'Добави зависимостта',
  'LBL_BTN_EDIT_FORMULA' => 'Редактирай формулата',
  'LBL_DEPENDENCY' => 'Зависимост',
  'LBL_CALCULATED' => 'Изчислено',
  'LBL_READ_ONLY' => 'Само за четене',
  'LBL_FORMULA' => 'Формула',
  'LBL_FORMULA_BUILDER' => 'Изпълнение на формула за създаване на модул',
  'LBL_NO_FIELDS' => 'Полето не е намерено',
  'LBL_NO_FUNCS' => 'Функцията не е намерена',
  'LBL_SEARCH_FUNCS' => 'Функции за търсене',
  'LBL_SEARCH_FIELDS' => 'Търсене на полета',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Зависимост',
  'LBL_MODULE' => 'Модул',
  'LBL_LHS_MODULE' => 'Основен модул',
  'LBL_CUSTOM_RELATIONSHIPS' => '* връзката с другите модули е създадена чрез "Студио" или "Създаване на нови модули"',
  'LBL_RELATIONSHIPS' => 'Връзки с други модули',
  'LBL_RELATIONSHIP_EDIT' => 'Редактиране на връзка с друг модул',
  'LBL_REL_NAME' => 'Име',
  'LBL_REL_LABEL' => 'Етикет',
  'LBL_REL_TYPE' => 'Тип',
  'LBL_RHS_MODULE' => 'Свързан модул',
  'LBL_NO_RELS' => 'Няма връзки с други модули',
  'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Състояние по избор',
  'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Колона',
  'LBL_RELATIONSHIP_ROLE_VALUE' => 'Стойност',
  'LBL_SUBPANEL_FROM' => 'Визуализиран панел',
  'LBL_ONETOONE' => 'Едно към едно',
  'LBL_ONETOMANY' => 'Едно към много',
  'LBL_MANYTOONE' => 'Много към едно',
  'LBL_MANYTOMANY' => 'Много към много',
  'LBL_QUESTION_FUNCTION' => 'Изберете компонент.',
  'LBL_QUESTION_MODULE1' => 'Изберете модул.',
  'LBL_QUESTION_EDIT' => 'Изберете модул, който да бъде редактиран.',
  'LBL_QUESTION_LAYOUT' => 'Изберете подредба, която да бъде редактирана.',
  'LBL_QUESTION_SUBPANEL' => 'Изберете панел със свързани записи, който да бъде редактиран.',
  'LBL_QUESTION_SEARCH' => 'Изберете форма за търсене, която да бъде редактирана.',
  'LBL_QUESTION_MODULE' => 'Изберете компонент на модула, който да бъде редактиран.',
  'LBL_QUESTION_PACKAGE' => 'Изберете модул за редактирате или да създайте нов модул.',
  'LBL_QUESTION_EDITOR' => 'Изберете инструмент.',
  'LBL_QUESTION_DROPDOWN' => 'Изберете падащо меню за редактиране или създайте ново.',
  'LBL_QUESTION_DASHLET' => 'Изберете раздел, който да бъде редактиран.',
  'LBL_QUESTION_POPUP' => 'Изберете изкачащ прозорец, който да бъде редактиран.',
  'LBL_RELATE_TO' => 'Свързано със',
  'LBL_NAME' => 'Име',
  'LBL_LABELS' => 'Етикети',
  'LBL_MASS_UPDATE' => 'Масова актуализация',
  'LBL_AUDITED' => 'Запис в базата при промяна на стойностите?',
  'LBL_CUSTOM_MODULE' => 'Модул',
  'LBL_DEFAULT_VALUE' => 'Стойност по подразбиране',
  'LBL_REQUIRED' => 'Задължително',
  'LBL_DATA_TYPE' => 'Тип',
  'LBL_HCUSTOM' => 'Потребителски полета',
  'LBL_HDEFAULT' => 'Стандартни полета',
  'LBL_LANGUAGE' => 'Език:',
  'LBL_SECTION_EDLABELS' => 'Редактиране на етикети',
  'LBL_SECTION_PACKAGES' => 'Модули',
  'LBL_SECTION_PACKAGE' => 'Пакет:',
  'LBL_SECTION_MODULES' => 'Модули',
  'LBL_SECTION_PORTAL' => 'Портал',
  'LBL_SECTION_DROPDOWNS' => 'Падащи менюта',
  'LBL_SECTION_PROPERTIES' => 'Параметри',
  'LBL_SECTION_DROPDOWNED' => 'Редактор на падащи менюта',
  'LBL_SECTION_HELP' => 'Помощ',
  'LBL_SECTION_ACTION' => 'Действие',
  'LBL_SECTION_MAIN' => 'Главен',
  'LBL_SECTION_EDPANELLABEL' => 'Редактиране на етикети',
  'LBL_SECTION_FIELDEDITOR' => 'Field Editor',
  'LBL_SECTION_DEPLOY' => 'Публикуване',
  'LBL_SECTION_MODULE' => 'Модул',
  'LBL_DEFAULT' => 'По подразбиране',
  'LBL_HIDDEN' => 'Скрита',
  'LBL_AVAILABLE' => 'Наличен',
  'LBL_LISTVIEW_DESCRIPTION' => 'Долу са представени три колони. <b>Стандартната</b> колона включва полета, показвани в списъка със записите по подразбиране.  <b>Наличната</b> колона съдържа полета, с които потребителите да създават собствен списък на записите.  <b>Скритата</b> колона съдържа полета видими само от администратори, с възможност за включване към стандартна или допълнителна колони.',
  'LBL_LISTVIEW_EDIT' => 'Редактор на листа на записите',
  'LBL_MB_PREVIEW' => 'Преглед',
  'LBL_MB_RESTORE' => 'Възстанови',
  'LBL_MB_DELETE' => 'Изтриване',
  'LBL_MB_COMPARE' => 'Сравни',
  'LBL_MB_DEFAULT_LAYOUT' => 'Подредба на екрани',
  'LBL_BTN_ADD' => 'Добави',
  'LBL_BTN_SAVE' => 'Съхрани',
  'LBL_BTN_SAVE_CHANGES' => 'Съхрани промените',
  'LBL_BTN_DONT_SAVE' => 'Игнорирай промените',
  'LBL_BTN_CANCEL' => 'Отмени',
  'LBL_BTN_CLOSE' => 'Затвори',
  'LBL_BTN_SAVEPUBLISH' => 'Съхрани и публикувай',
  'LBL_BTN_NEXT' => 'Следваща',
  'LBL_BTN_BACK' => 'Върни',
  'LBL_BTN_CLONE' => 'Дублирай',
  'LBL_BTN_ADDCOLS' => 'Добавяне на колони',
  'LBL_BTN_ADDROWS' => 'Добавяне на редове',
  'LBL_BTN_ADDFIELD' => 'Добавяне на поле',
  'LBL_BTN_ADDDROPDOWN' => 'Добавяне на падащо меню',
  'LBL_BTN_SORT_ASCENDING' => 'Във възходящ ред',
  'LBL_BTN_SORT_DESCENDING' => 'В нисходящ ред',
  'LBL_BTN_EDLABELS' => 'Редактиране на етикети',
  'LBL_BTN_UNDO' => 'Върни',
  'LBL_BTN_ADDCUSTOMFIELD' => 'Добавяне на потребителско поле',
  'LBL_BTN_EXPORT' => 'Експортиране на записи от модули',
  'LBL_BTN_DUPLICATE' => 'Дублирай',
  'LBL_BTN_PUBLISH' => 'Публикуване',
  'LBL_BTN_DEPLOY' => 'Публикувай',
  'LBL_BTN_EXP' => 'Експортиране',
  'LBL_BTN_DELETE' => 'Изтриване',
  'LBL_BTN_VIEW_LAYOUTS' => 'Преглед на подредби',
  'LBL_BTN_VIEW_FIELDS' => 'Преглед на полета',
  'LBL_BTN_VIEW_RELATIONSHIPS' => 'Преглед на връзки с други модули',
  'LBL_BTN_ADD_RELATIONSHIP' => 'Добави връзка с друг модул',
  'ERROR_ALREADY_EXISTS' => 'Грешка: полетата вече съществуват',
  'ERROR_INVALID_KEY_VALUE' => 'Грешка: Невалидна стойност на key: [\']',
  'ERROR_NO_HISTORY' => 'Не са намерени предишни запазени подредби на модула',
  'ERROR_MINIMUM_FIELDS' => 'This layout must contain at least one field',
  'ERROR_GENERIC_TITLE' => 'Грешка',
  'ERROR_REQUIRED_FIELDS' => 'Are you sure you wish to continue? The following required fields are missing from the layout',
  'LBL_PORTAL' => 'Портал',
  'LBL_SYNCP_WELCOME' => 'Моля, въведете URL на портала при актуализация.',
  'LBL_SP_UPLOADED' => 'Заредени',
  'LBL_CASES' => 'Казуси',
  'LBL_NEWSLETTERS' => 'Бюлетини',
  'LBL_BUG_TRACKER' => 'Проблеми',
  'LBL_MY_ACCOUNT' => 'Персонални настройки',
  'LBL_LOGOUT' => 'Изход',
  'LBL_CREATE_NEW' => 'Създай нов',
  'LBL_LIST' => 'Списък',
  'LBL_LOW' => 'Ниска',
  'LBL_MEDIUM' => 'Средна',
  'LBL_HIGH' => 'Висока',
  'LBL_NUMBER' => 'Номер:',
  'LBL_PRIORITY' => 'Степен на важност:',
  'LBL_SUBJECT' => 'Относно',
  'LBL_DESCRIPTION' => 'Описание:',
  'LBL_PACKAGE_NAME' => 'Име на модула:',
  'LBL_MODULE_NAME' => 'Име на модула:',
  'LBL_AUTHOR' => 'Автор:',
  'LBL_KEY' => 'Код:',
  'LBL_ADD_README' => 'Прочети',
  'LBL_LAST_MODIFIED' => 'Последно модифицирано:',
  'LBL_NEW_MODULE' => 'Нов модул',
  'LBL_LABEL' => 'Етикет:',
  'LBL_LABEL_TITLE' => 'Етикет',
  'LBL_TYPE' => 'Категория:',
  'LBL_FILE' => 'Файл',
  'LBL_CREATE' => 'Създай',
  'LBL_VIEW' => 'Разгледай',
  'LBL_LIST_VIEW' => 'Списък на записите',
  'LBL_HISTORY' => 'История',
  'LBL_RESTORE_DEFAULT' => 'Настройки по подразбиране',
  'LBL_ACTIVITIES' => 'Дейности',
  'LBL_NEW' => 'Нов',
  'LBL_EC_TITLE' => 'Експортиране на персонални настройки',
  'LBL_EC_NAME' => 'Име на модула:',
  'LBL_EC_AUTHOR' => 'Автор:',
  'LBL_EC_DESCRIPTION' => 'Описание:',
  'LBL_EC_KEY' => 'Код:',
  'LBL_EC_CHECKERROR' => 'Моля, изберете модул.',
  'LBL_EC_EXPORTBTN' => 'Експортиране',
  'LBL_AJAX_TIME_DEPENDENT' => 'A time dependent action is in progress please wait and try again in a few seconds',
  'LBL_AJAX_LOADING' => 'Зареждане...',
  'LBL_AJAX_DELETING' => 'Изтриване...',
  'LBL_JS_VALIDATE_NAME' => 'Name - Must be alphanumeric with no spaces and starting with a letter',
  'LBL_JS_VALIDATE_KEY' => 'Key - Must be alphanumeric with no spaces and starting with a letter',
  'LBL_JS_VALIDATE_LABEL' => 'Моля, изберете етикет, който да се използва за заглавие на този модул',
  'LBL_JS_VALIDATE_TYPE' => 'От списъка долу изберете типа на модул, който искате да създадете',
  'LBL_JS_VALIDATE_REL_NAME' => 'Име - Must be alphanumeric with no spaces',
  'LBL_JS_VALIDATE_REL_LABEL' => 'Етикет - добавете етикет за показване над панела със свързани записи',
  'LBL_CONFIRM_FIELD_DELETE' => 'Изтриване на потребителското поле ще доведе до изтриване на всички асоциирани с него данни. Полето следва да се премахне от всички форми на модула, в които е било добавено',
  'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Сигурни ли сте, че искате да изтриете връзката с другия модул?',
  'LBL_CONFIRM_RELATIONSHIP_DEPLOY' => 'Връзката с модула ще бъде записана в базата. Сигурни ли сте, че искате да съхраните тази връзка?',
  'LBL_CONFIRM_DONT_SAVE' => 'Има налични промени от момента на последното Ви запазване. Искате ли да запазите?',
  'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Запази промените?',
  'LBL_POPHELP_FIELD_DATA_TYPE' => 'Изберете необходимия тип на данни на база данните, които ще бъдат попълвани в полето.',
  'LBL_POPHELP_IMPORTABLE' => '<b>Да</b>: Полето ще бъде включено в процеса на импортирането.<br><b>Не</b>: Полето няма да бъде включено в процеса на импортиране.<br><b>Задължително</b>: Стойността на полето не бива да е празно при извършване на импорт на данните.',
  'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Разрешено</b>: Полето ЩЕ се появява при изпълнение на сливане на дублирани записи, БЕЗ опция за включване като филтър при търсене на дублирани записи.<br><b>Забранено</b>: Полето НЯМА да се появява при изпълнение на сливане на дублирани записи, БЕЗ опция за включване като филтър при търсене на дублирани записи.',
  'LBL_RESET' => 'Рeдактиране',
  'LBL_RESET_MODULE' => 'Връщане към първоначалните настройки',
  'LBL_REMOVE_CUSTOM' => 'Връщане към първоначалните настройки',
  'LBL_CLEAR_RELATIONSHIPS' => 'Премахване на новосъздадени връзки с модули',
  'LBL_RESET_LABELS' => 'Връщане към стандартните етикети на полетата',
  'LBL_RESET_LAYOUTS' => 'Връщане към първоначалната конфигурация на променения модул',
  'LBL_REMOVE_FIELDS' => 'Премахване на потребителски полета',
);


