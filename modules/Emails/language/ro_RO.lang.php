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
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Atenţie:',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Utilizând un şablon de e-mail care conţine variabile de contact, cum ar fi numele persoanei de contact, pentru a trimite email-uri la mai mulţi destinatari poate avea rezultate neaşteptate. Este recomandat să utilizaţi o campanie de e-mail pentru trimiterea în masă.',
  'LBL_FW' => 'FW:',
  'LBL_RE' => 'RE:',
  'LBL_BCC' => 'Bcc:',
  'LBL_CC' => 'Cc:',
  'LBL_COLON' => ':',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Personal',
  'LBL_BUTTON_CREATE' => 'Creaza',
  'LBL_BUTTON_EDIT' => 'Modifica',
  'LBL_QS_DISABLED' => '(Cautare rapida nu este valabila pentru acest modul.Va rugam  folositi butonul selecteaza.)',
  'LBL_SIGNATURE_PREPEND' => 'Semnatura deasupra reaspunsului',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Aici este interogarea pe care ati solicitat-o (Puteti schimba acest text)',
  'LBL_EMAIL_QUOTE_FOR' => 'Interogare pentru:',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'fisierul tip sablon de interogare nu exiata: $sablon',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'sablonul de interogare nu este inregistrat in module/Cote/Sabloane.php',
  'LBL_CONFIRM_DELETE' => 'Sunteti sigur ca vreti sa stergeti acest fisier?',
  'LBL_ENTER_FOLDER_NAME' => 'Va rugam sa introduceti numele fisierului',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotatie',
  'LBL_EMAILS_QUOTES_REL' => 'Emailuri:Interogari',
  'LBL_ERROR_SELECT_REPORT' => 'Va rugam selectati un raport',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Va rugam selectati un nume dand clic pe butonul de selectie urmator pentru Inrudit cu un camp',
  'LBL_ERROR_SELECT_MODULE' => 'Va rugam selectati un modul pentru Inrudit cu un camp',
  'ERR_ARCHIVE_EMAIL' => 'Eroare:Selectati emailuri pt arhivare',
  'ERR_DATE_START' => 'Data Incepere',
  'ERR_DELETE_RECORD' => 'Trebuie sa specifici un numar de inregistrare pentru a sterge contul',
  'ERR_NOT_ADDRESSED' => 'Eroare: e-mail trebuie să aibă un Către, Cc sau adresa CCA',
  'ERR_TIME_START' => 'Timp de Start',
  'ERR_TIME_SENT' => 'Timpul de start',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Conturi',
  'LBL_ADD_ANOTHER_FILE' => 'Adauga fisier nou',
  'LBL_ADD_DASHLETS' => 'Adauga Dashlet Sugar',
  'LBL_ADD_DOCUMENT' => 'Adauga Document',
  'LBL_ADD_ENTRIES' => 'Adauga intrari',
  'LBL_ADD_FILE' => 'Adauga fisier',
  'LBL_ARCHIVED_EMAIL' => 'Email arhivat',
  'LBL_ARCHIVED_MODULE_NAME' => 'Creaza emailuri arhivate',
  'LBL_ATTACHMENTS' => 'Atasate',
  'LBL_HAS_ATTACHMENT' => 'Are atasament?:',
  'LBL_BODY' => 'Corp',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Probleme',
  'LBL_COMPOSE_MODULE_NAME' => 'Scrie email',
  'LBL_CONTACT_FIRST_NAME' => 'contact nume',
  'LBL_CONTACT_LAST_NAME' => 'contact prenume',
  'LBL_CONTACT_NAME' => 'Contact',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
  'LBL_CREATED_BY' => 'Creeat de',
  'LBL_DATE_AND_TIME' => 'Data si ora trimiterii',
  'LBL_DATE_SENT' => 'Data trimiterii',
  'LBL_DATE' => 'Data de trimitere',
  'LBL_DELETE_FROM_SERVER' => 'Sterge mesaj de la server',
  'LBL_DESCRIPTION' => 'Descriere',
  'LBL_EDIT_ALT_TEXT' => 'Editeaza text simplu',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Trimite în text simplu',
  'LBL_EDIT_MY_SETTINGS' => 'Editaţi Setările mele',
  'LBL_EMAIL_ATTACHMENT' => 'Atasare email',
  'LBL_EMAIL_EDITOR_OPTION' => 'Trimite un e-mail HTML',
  'LBL_EMAIL_SELECTOR' => 'Selecteaza',
  'LBL_EMAIL' => 'Adresa Email:',
  'LBL_EMAILS_ACCOUNTS_REL' => 'E-mailuri: Conturi',
  'LBL_EMAILS_BUGS_REL' => 'E-mailuri: Probleme',
  'LBL_EMAILS_CASES_REL' => 'E-mailuri: Cazuri',
  'LBL_EMAILS_CONTACTS_REL' => 'E-mailuri: Contacte',
  'LBL_EMAILS_LEADS_REL' => 'Emails:Piste de urmarire',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-mailuri: Oportunităţi',
  'LBL_EMAILS_NOTES_REL' => 'E-mailuri: Note',
  'LBL_EMAILS_PROJECT_REL' => 'E-mailuri: Proiect',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'E-mailuri: Sarcina Proiect',
  'LBL_EMAILS_PROSPECT_REL' => 'E-mailuri: Prospect',
  'LBL_EMAILS_TASKS_REL' => 'E-mailuri: Sarcini',
  'LBL_EMAILS_USERS_REL' => 'E-mailuri: Utilizatori',
  'LBL_EMPTY_FOLDER' => 'Nici un e-mail pentru a afişa',
  'LBL_ERROR_SENDING_EMAIL' => 'Eroare la trimiterea de e-mail',
  'LBL_ERROR_SAVING_DRAFT' => 'Eroare la salvarea schita',
  'LBL_FORWARD_HEADER' => 'Inceput a transmite un mesaj:',
  'LBL_FROM_NAME' => 'De la Nume:',
  'LBL_FROM' => 'de la',
  'LBL_REPLY_TO' => 'Raspunde catre',
  'LBL_HTML_BODY' => 'Corp HTLM',
  'LBL_INVITEE' => 'Recipiente',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Antete',
  'LBL_MESSAGE_SENT' => 'Mesaj trimis',
  'LBL_MODIFIED_BY' => 'Modificata de',
  'LBL_MODULE_NAME_NEW' => 'arhiva email',
  'LBL_MODULE_NAME' => 'Toate emailurile',
  'LBL_MODULE_TITLE' => 'Emailuri: Acasa',
  'LBL_MY_EMAILS' => 'Emailurile mele',
  'LBL_NEW_FORM_TITLE' => 'arhiva email',
  'LBL_NONE' => 'Niciunul',
  'LBL_NOT_SENT' => 'Eroare de trimitere',
  'LBL_NOTE_SEMICOLON' => 'Notă: Utilizaţi virgule sau semi-două puncte ca separatoare de adrese de email multiple.',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Atasate',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunitati',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiecte',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Sarcina de proiect',
  'LBL_RAW' => 'E-mail brut',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Salvare schita',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Salvare schita[Alt+R]',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Cauta schite',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Căutare  email-uri trimise',
  'LBL_SEARCH_FORM_TITLE' => 'Cautare email',
  'LBL_SEND_ANYWAYS' => 'Emailul nu are subiect...Salveaza/trimite oricum?',
  'LBL_SEND_BUTTON_LABEL' => 'Trimite',
  'LBL_SEND_BUTTON_TITLE' => 'Trimite [Alt+S]',
  'LBL_SEND' => 'TRIMIS',
  'LBL_SENT_MODULE_NAME' => 'Emailuri trimise',
  'LBL_SHOW_ALT_TEXT' => 'Arata text simplu',
  'LBL_SIGNATURE' => 'Semnatura',
  'LBL_SUBJECT' => 'Subiect',
  'LBL_TEXT_BODY' => 'Corp text',
  'LBL_TIME' => 'Timpul de start',
  'LBL_TO_ADDRS' => 'Spre:',
  'LBL_USE_TEMPLATE' => 'Foloseste sablon:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utilizatori',
  'LBL_USERS' => 'Utilizatori',
  'LNK_ALL_EMAIL_LIST' => 'Toate emailurile',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Emailuri arhivate',
  'LNK_CALL_LIST' => 'Apeluri',
  'LNK_DRAFTS_EMAIL_LIST' => 'Toate proiectele',
  'LNK_EMAIL_LIST' => 'Email-uri',
  'LBL_EMAIL_RELATE' => 'Asociat cu:',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Vezi Sabloane Email',
  'LNK_MEETING_LIST' => 'Intalniri',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Creeaza arhive email',
  'LNK_NEW_CALL' => 'Jurnal Apeluri',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Creeaza Sabloane Email',
  'LNK_NEW_EMAIL' => 'Trimite email',
  'LNK_NEW_MEETING' => 'Orar Intalniri',
  'LNK_NEW_NOTE' => 'Creaza Nota sau Atasament',
  'LNK_NEW_SEND_EMAIL' => 'Scrie email',
  'LNK_NEW_TASK' => 'Creaza sarcina',
  'LNK_NOTE_LIST' => 'Note',
  'LNK_SENT_EMAIL_LIST' => 'Emailuri trimise',
  'LNK_TASK_LIST' => 'Sarcini',
  'LNK_VIEW_CALENDAR' => 'Astazi',
  'LBL_LIST_ASSIGNED' => 'Alocat',
  'LBL_LIST_CONTACT_NAME' => 'Nume Contact:',
  'LBL_LIST_CREATED' => 'Creeat',
  'LBL_LIST_DATE_SENT' => 'Data trimiterii',
  'LBL_LIST_DATE' => 'Data trimiterii:',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Schita',
  'LBL_LIST_FORM_SENT_TITLE' => 'Emailuri trimise',
  'LBL_LIST_FORM_TITLE' => 'Lista emailuri',
  'LBL_LIST_FROM_ADDR' => 'De la',
  'LBL_LIST_RELATED_TO' => 'Asociat cu',
  'LBL_LIST_SUBJECT' => 'Subiect',
  'LBL_LIST_TIME' => 'Cand a fost trimis',
  'LBL_LIST_TO_ADDR' => 'Spre:',
  'LBL_LIST_TYPE' => 'Tip',
  'NTC_REMOVE_INVITEE' => 'Sunteţi sigur că doriţi să eliminaţi acest recipient din e-mail?',
  'WARNING_SETTINGS_NOT_CONF' => 'Atentie: Setările e-mail nu sunt configurate pentru a trimite e-mail.',
  'WARNING_NO_UPLOAD_DIR' => 'Atasamentele pot eşua: nici o valoare pentru "upload_max_filesize" a fost detectaat. Vă rugăm să corectaţi acest lucru în fişierul dvs. php.ini.',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Atasamentele poate eşua: O valoare incorectă sau inutilizabila pentru "upload_max_filesize" a fost detectata. Vă rugăm să corectaţi acest lucru în fişierul dvs. php.ini.',
  'LBL_BUTTON_RAW_TITLE' => 'Arata mesaj brut[Alt+E]',
  'LBL_BUTTON_RAW_LABEL' => 'Arata brut',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Ascunde brut',
  'LBL_BUTTON_CHECK' => 'Verifica corespondeta',
  'LBL_BUTTON_CHECK_TITLE' => 'Verifica pentru email nou[Alt+C]',
  'LBL_BUTTON_FORWARD' => 'Inainte',
  'LBL_BUTTON_FORWARD_TITLE' => 'Inainte cu e-mailul acesta[Alt+F]',
  'LBL_BUTTON_REPLY_TITLE' => 'Raspunde [Alt+R]',
  'LBL_BUTTON_REPLY' => 'Raspunde',
  'LBL_CASES_SUBPANEL_TITLE' => 'Cazuri',
  'LBL_INBOUND_TITLE' => 'Email legat',
  'LBL_INTENT' => 'Intentioneaza',
  'LBL_MESSAGE_ID' => 'ID mesaj',
  'LBL_REPLY_HEADER_1' => 'pe',
  'LBL_REPLY_HEADER_2' => 'a scris:',
  'LBL_REPLY_TO_ADDRESS' => 'Raspunde la adresa',
  'LBL_REPLY_TO_NAME' => '"Raspunde la" Nume',
  'LBL_LIST_BUG' => 'Probleme',
  'LBL_LIST_CASE' => 'Cazuri',
  'LBL_LIST_CONTACT' => 'Contacte',
  'LBL_LIST_LEAD' => 'Antete',
  'LBL_LIST_TASK' => 'Sarcini',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator Atribuit',
  'LBL_ALL' => 'Toti',
  'LBL_ASSIGN_WARN' => 'Asigurate ca toate cele 2 optiuni sunt selectate.',
  'LBL_BACK_TO_GROUP' => 'Inapoi in cutia de corespondenta a grupului',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Atribuie[Alt+A]',
  'LBL_BUTTON_DISTRIBUTE' => 'Atribuie',
  'LBL_BUTTON_GRAB_TITLE' => 'Ia din grup[Alt+T]',
  'LBL_BUTTON_GRAB' => 'Ia din grup',
  'LBL_CREATE_BUG' => 'Creaza greseala',
  'LBL_CREATE_CASE' => 'Creaza caz',
  'LBL_CREATE_CONTACT' => 'Creaza Contact',
  'LBL_CREATE_LEAD' => 'Creeaza Prospect',
  'LBL_CREATE_TASK' => 'Creaza sarcina',
  'LBL_DIST_TITLE' => 'Sarcina',
  'LBL_LOCK_FAIL_DESC' => 'Itemul ales este indisponibil momentan.',
  'LBL_LOCK_FAIL_USER' => 'a luat dreptul de proprietate.',
  'LBL_MASS_DELETE_ERROR' => 'Nici un obiect verificat nu a trecut  pentru ştergere.',
  'LBL_NEW' => 'Nou',
  'LBL_NEXT_EMAIL' => 'Urmatorul Item Gratuit',
  'LBL_NO_GRAB_DESC' => 'Nu au existat articole disponibile. Încercaţi din nou într-o clipă.',
  'LBL_QUICK_REPLY' => 'Raspunde',
  'LBL_REPLIED' => 'Raspuns',
  'LBL_SELECT_TEAM' => 'Selecteaza echipe',
  'LBL_TAKE_ONE_TITLE' => 'Repetari',
  'LBL_TITLE_SEARCH_RESULTS' => 'Rezultatele cautarii',
  'LBL_TO' => 'Catre:',
  'LBL_TOGGLE_ALL' => 'Toate Toggle',
  'LBL_UNKNOWN' => 'Necunoscut',
  'LBL_UNREAD_HOME' => 'Emailuri necitite',
  'LBL_UNREAD' => 'Necitit',
  'LBL_USE_ALL' => 'Toate rezultatele cautarii',
  'LBL_USE_CHECKED' => 'NUmai verificate',
  'LBL_USE_MAILBOX_INFO' => 'Foloseste cutia de corespondenta din:Adresa',
  'LBL_USE' => 'Atribuie:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Atribuie rezultatele alese lui:',
  'LBL_USER_SELECT' => 'Alege utilizatorii',
  'LBL_USING_RULES' => 'Folosind reguri:',
  'LBL_WARN_NO_DIST' => 'Nicio metoda de selectie atribuita',
  'LBL_WARN_NO_USERS' => 'Niciun utilizator nu este ales',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Foloseste fie un utilizator sau o echipa pentru sarcina.',
  'LBL_IMPORT_STATUS_TITLE' => 'Statut',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Grupeaza corespondenta',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Proiectele mele',
  'LBL_LIST_TITLE_MY_INBOX' => 'Cutia mea de corespondenta',
  'LBL_LIST_TITLE_MY_SENT' => 'E-mailurile mele trimise',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Emailurile mele arhivate',
  'LBL_ACTIVITIES_REPORTS' => 'Raport Activitati',
  'LNK_CHECK_MY_INBOX' => 'Verifica corespondenta mea',
  'LNK_DATE_SENT' => 'Data trimiterii',
  'LNK_GROUP_INBOX' => 'Grupeaza corespondenta',
  'LNK_MY_DRAFTS' => 'Proiectele mele',
  'LNK_MY_INBOX' => 'Emailul meu',
  'LNK_VIEW_MY_INBOX' => 'Vezi emailul meu',
  'LNK_QUICK_REPLY' => 'Raspunde',
  'LNK_MY_ARCHIVED_LIST' => 'Arhivele mele',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Nici o echipa primara specificata',
  'LBL_ASSIGNED_TO' => 'Atribuit Lui:',
  'LBL_MEMBER_OF' => 'Membru al',
  'LBL_QUICK_CREATE' => 'Creaza repede',
  'LBL_STATUS' => 'Statut email',
  'LBL_EMAIL_FLAGGED' => 'Insemnat:',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Raspunde la Statut:',
  'LBL_TYPE' => 'Tip',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Va rugam verificati!',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Selectarea acest şablon va suprascrie orice date deja introduse în corpul e-mail. Doriţi să continuaţi?',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Selectarea "- Nici una -" va şterge orice date deja introduse în corpul e-mail. Doriţi să continuaţi?',
  'LBL_CHECK_ATTACHMENTS' => 'Va rugam verificati atasamente!',
  'LBL_HAS_ATTACHMENTS' => 'Acest email a fost deja ataşament (e). Doriţi să păstraţi ataşament (e)?',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Lipsesc campurile necesare:',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Campuri necesare invalide:',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Arata doar destinatari inruditi cu',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Destinatarii au fost adăugate.',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Adauga',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Adauga',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Proprietatile contului de corespondenta',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Server corespondenta SMTP de iesire',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Serveri corespondenta SMTP de iesire',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Conturi mail',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'Emailuri care vin',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Emailuri care ies',
  'LBL_ADD_CC' => 'Adauga Cc',
  'LBL_ADD_BCC' => 'Adauga Bcc',
  'LBL_ADD_TO_ADDR' => 'Adauga lui',
  'LBL_SELECTED_ADDR' => 'Selectat:',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Eroare in trimitere de Email',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'arata',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'mai mult',
  'LBL_MORE_OPTIONS' => 'mai mult',
  'LBL_LESS_OPTIONS' => 'mai putin',
  'LBL_MAILBOX_TYPE_GROUP' => 'Grup',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grup-Autoimporta',
  'LBL_SEARCH_FOR' => 'Cauta pentru',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => 'Personal: cont e-mail accesibil de tine. Numai tu poti gestiona şi importul de e-mailuri din acest cont.<br />Grupa: cont de e-mail accesibil de către membrii echipelor specificate. Membrii echipei pot gestiona şi importul de e-mailuri din acest cont.<br />De grup - auto-import: contul e-mail accesibil de către membrii echipelor specificate. E-mailuri sunt importate automat ca înregistrări.',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Introduceţi o adresă de e-mail, nume, prenume sau Nume cont pentru a găsi destinatari.',
  'LBL_TEST_SETTINGS' => 'Testare Setari',
  'LBL_EMPTY_EMAIL_BODY' => 'Acest mesaj nu are conţinut',
  'LBL_TEST_EMAIL_SUBJECT' => 'Test de e-mail de la Sugar',
  'LBL_NO_SUBJECT' => '(Fără subiect)',
  'LBL_CHECKING_ACCOUNT' => 'Verific contul',
  'LBL_OF' => 'din',
  'LBL_TEST_EMAIL_BODY' => 'Acest e-mail a fost trimis în scopul de a testa serverul de mail de ieşire informaţiile furnizate de aplicatia Sugar. O primire cu succes a acestui e-mail indică faptul că serverul de mail de ieşire informaţiile furnizate sunt valabile.',
  'LBL_MAIL_SMTPUSER' => 'Nume Utilizator SMTP:',
  'LBL_MAIL_SMTPPASS' => 'Parola SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Server SMTP',
  'LBL_SMTP_SERVER_HELP' => 'Acest SMTP Mail Server poate fi folosit pentru expedierea mesajelor. Furnizaţi un nume de utilizator şi parola pentru contul de e-mail pentru a utiliza serverul de poştă electronică.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administator nu a configurat încă contul implicit de ieşire. Imposibil pentru a trimite e-mail de testare.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizeaza Autentificare SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Server Tip:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specificaţii',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Alegeti furnizorul dumneavoastra de Email',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Parola Yahoo!Mail',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo!Mail',
  'LBL_GMAIL_SMTPPASS' => 'Parola Gmail',
  'LBL_GMAIL_SMTPUSER' => 'Adresa Gmail de Email',
  'LBL_EXCHANGE_SMTPPASS' => 'Schimba Parola',
  'LBL_EXCHANGE_SMTPUSER' => 'Schimba Numele de Utilizator',
  'LBL_EXCHANGE_SMTPPORT' => 'Schimba portul serverului',
  'LBL_EXCHANGE_SMTPSERVER' => 'Schimba Server',
);

