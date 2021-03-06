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
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Email Marketing',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Leads',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_NEWSLETTER' => 'Newsletter',
  'LBL_NEWSLETTER_FORENTRY' => 'NewsLetter',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Moving the newsletter to the Available Newsletters/Newsletters Unsubscribed To list will add the contact to the Unsubscription List for this newsletter.  It will not remove the contact from the original Subscription List or Target List.',
  'LBL_EDIT_OPT_OUT_' => 'Opt-out Link?',
  'LBL_EDIT_OPT_OUT' => 'Opt-out Link:',
  'LBL_TEST_TYPE_NAME' => 'Test',
  'LBL_WIZ_MARKETING_TITLE' => 'Marketing Email',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Test Email',
  'LBL_NAVIGATION_MENU_GEN2' => 'Budget',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Trackers',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Marketing',
  'LBL_EMAIL' => 'Email',
  'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
  'LBL_MAIL_SMTPPORT' => 'SMTP Port',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Server',
  'LBL_MAIL_SMTPUSER' => 'SMTP Username',
  'LBL_PASSWORD' => 'Password',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_NO' => 'No',
  'LBL_DEFINE_LEAD_POST_URL' => 'Post URL:',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Web To Lead Form',
  'LBL_LEAD_MODULE' => 'Leads',
  'LBL_ROI_CHART_BUDGET' => 'Budget',
  'LBL_LEADS' => 'Leads',
  'LBL_LOG_ENTRIES' => 'Log Entries',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Email Marketing',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Targeted',
  'LBL_LINK_SUBPANEL_TITLE' => 'Link',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Lead',
  'LBL_FROM_ADDR' => '"Da" Indirizzo:',
  'LBL_REPLY_ADDR' => '"Rispondi A" Indirizzo:',
  'LBL_REPLY_NAME' => '"Rispondi A" Nome:',
  'LBL_MODULE_NAME' => 'Campagne',
  'LBL_MODULE_TITLE' => 'Campagne: Home',
  'LBL_NEWSLETTER_TITLE' => 'Campagne: Newsletters',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Campagna',
  'LBL_LIST_FORM_TITLE' => 'Elenco Campagne',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Elenco Newsletter',
  'LBL_CAMPAIGN_NAME' => 'Nome:',
  'LBL_CAMPAIGN' => 'Campagna:',
  'LBL_NAME' => 'Nome:',
  'LBL_INVITEE' => 'Contatti',
  'LBL_LIST_CAMPAIGN_NAME' => 'Campagna',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_LIST_START_DATE' => 'Data Inizio',
  'LBL_LIST_END_DATE' => 'Data Fine',
  'LBL_DATE_ENTERED' => 'Data Inserimento',
  'LBL_DATE_MODIFIED' => 'Data Modifica',
  'LBL_MODIFIED' => 'Modificato da:',
  'LBL_CREATED' => 'Creato da:',
  'LBL_TEAM' => 'Gruppo:',
  'LBL_ASSIGNED_TO' => 'Assegnato a:',
  'LBL_ASSIGNED_TO_ID' => 'Assegnato a ID:',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_CAMPAIGN_START_DATE' => 'Data Inizio:',
  'LBL_CAMPAIGN_END_DATE' => 'Data Fine:',
  'LBL_CAMPAIGN_STATUS' => 'Stato:',
  'LBL_CAMPAIGN_BUDGET' => 'Budget:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Costo Previsto:',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Costo Effettivo:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Ritorno Atteso:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Impressione:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Costo Per Impressione:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Costo Per Click:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Opportunità Vinte:',
  'LBL_CAMPAIGN_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Obiettivo:',
  'LBL_CAMPAIGN_CONTENT' => 'Descrizione:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Giorni Rimanenti',
  'LNK_NEW_CAMPAIGN' => 'Nuova Campagna (Classica)',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Nuova campagna (guidata)',
  'LNK_CAMPAIGN_LIST' => 'Campagne',
  'LNK_NEW_PROSPECT' => 'Crea Nuovo Obiettivo',
  'LNK_PROSPECT_LIST' => 'Visualizza Obiettivi',
  'LNK_NEW_PROSPECT_LIST' => 'Nuova Lista Obiettivi',
  'LNK_PROSPECT_LIST_LIST' => 'Liste Obiettivi',
  'LBL_MODIFIED_BY' => 'Modificato da:',
  'LBL_CREATED_BY' => 'Creato da:',
  'LBL_DATE_CREATED' => 'Data Creazione:',
  'LBL_DATE_LAST_MODIFIED' => 'Data Modifica:',
  'LBL_TRACKER_KEY' => 'Tracker:',
  'LBL_TRACKER_URL' => 'Tracker URL:',
  'LBL_TRACKER_TEXT' => 'Testo del link Tracker:',
  'LBL_TRACKER_COUNT' => 'Numero dei click sul Tracker:',
  'LBL_REFER_URL' => 'URL Destinazione del Tracker:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campagne',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'Campagne Email',
  'LBL_NEW_FORM_TITLE' => 'Nuova Campagna',
  'LBL_TRACKED_URLS' => 'Tracker URL',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Tracker URL',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Liste Obiettivi',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Nuovo Modello Email',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Modelli Email',
  'LBL_TRACK_BUTTON_TITLE' => 'Mostra Stato',
  'LBL_TRACK_BUTTON_LABEL' => 'Mostra Stato',
  'LBL_QUEUE_BUTTON_TITLE' => 'Invia Messaggi',
  'LBL_QUEUE_BUTTON_LABEL' => 'Invia Messaggi',
  'LBL_TEST_BUTTON_TITLE' => 'Invia Test',
  'LBL_TEST_BUTTON_LABEL' => 'Invia Test',
  'LBL_COPY_AND_PASTE_CODE' => 'O copia e incolla l´html sotto all´interno di una pagina esistente.',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Mostra Dettagli',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Mostra Dettagli',
  'LBL_DEFAULT' => 'Tutte le liste Obiettivi',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Coda Messaggi',
  'LBL_LOG_ENTRIES_TITLE' => 'Risposte',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Messaggio Inviato/Tentato',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Messaggi non consegnati, Altro',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Messaggi non consegnati, Indirizzo non valido',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Click sui Link',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Messaggio Letto',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Disiscritto',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Leads Creati',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunità',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contatti Creati',
  'LBL_BACK_TO_CAMPAIGNS' => 'Torna alle Campagne',
  'ERR_NO_EMAIL_MARKETING' => 'Deve esserci almeno un messaggio di Email Marketing attivo associata alla campagna.',
  'ERR_NO_TARGET_LISTS' => 'Deve esserci almeno una lista obiettivi associata alla campagna.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Deve esserci almeno una lista obiettivi di tipo Test associata alla campagna.',
  'ERR_SENDING_NOW' => 'I messaggi sono in consegna, riprova più tardi.',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'Nessun messaggio di Email Marketing trovato per questa Lista obiettivi',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Molti messaggi di Email Marketing sono definiti per questa Lista obiettivi',
  'ERR_FIX_MESSAGES' => 'Prima di procedere correggi i seguenti errori',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Vista ROI',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Cancella i Test',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Cancella i Test',
  'LBL_TRACK_DELETE_CONFIRM' => 'Questa opzione cancellerà il registro relativo ai test. Continuare?',
  'ERR_NO_MAILBOX' => 'I seguenti messaggi di marketing non hanno un account email associato. <BR>Si prega di correggere questi errori prima di procedere.',
  'LBL_LIST_TO_ACTIVITY' => 'Mostra Stato',
  'LBL_CURRENCY_ID' => 'ID Valuta',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_ROLLOVER_VIEW' => 'Torna indietro per vedere i dettagli.',
  'LBL_TARGETED' => 'Designato',
  'LBL_TOTAL_TARGETED' => 'Totale designati',
  'LBL_CAMPAIGN_FREQUENCY' => 'Frequenza',
  'LBL_NEWSLETTERS' => 'Newsletters',
  'LBL_MORE_DETAILS' => 'Maggior Dettagli',
  'LBL_CREATE_NEWSLETTER' => 'Crea nuova Newsletter',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_STATUS_TEXT' => 'Stato:',
  'LBL_FROM_MAILBOX_NAME' => 'Usa Account Email:',
  'LBL_FROM_NAME' => 'Da Nome:',
  'LBL_START_DATE_TIME' => 'Data e Ora Inizio:',
  'LBL_DATE_START' => 'Data Inizio',
  'LBL_TIME_START' => 'Ora Inizio',
  'LBL_TEMPLATE' => 'Template Email:',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Crea',
  'LBL_MESSAGE_FOR' => 'Invia questo messaggio a:',
  'LBL_FINISH' => 'Finito',
  'LBL_ALL_PROSPECT_LISTS' => 'Tutte le Liste Obiettivi della Campagna.',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Modifica',
  'LBL_EMAIL_SETUP_WIZARD' => 'Impostazioni Email',
  'LBL_DIAGNOSTIC_WIZARD' => 'Diagnostica',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'NewsLetter sottoscritte a',
  'LBL_UNSUBSCRIBED_HEADER' => 'NewsLetter disponibili',
  'LBL_FILTER_CHART_BY' => 'Filtra tabella per:',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Gestione Sottoscrizioni',
  'LBL_MARK_AS_SENT' => 'Segna come inviata',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'Elenco obiettivi del tipo default non trovato',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Nessun valore trovato',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'I valori in elenco sono stati elaborati',
  'LBL_EDIT_TRACKER_NAME' => 'Nome Tracker:',
  'LBL_EDIT_TRACKER_URL' => 'URL Tracker:',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Elenco dei Non Sottoscritti:',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Elenco dei Sottoscritti:',
  'LBL_TEST_LIST_NAME' => 'Nome Elenco Test:',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Non sottoscritti',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Sottoscritti',
  'LBL_UNSUBSCRIPTION_LIST' => 'Elenco Non Sottoscritti',
  'LBL_SUBSCRIPTION_LIST' => 'Elenco Sottoscritti',
  'LBL_MRKT_NAME' => 'Nome',
  'LBL_TEST_LIST' => 'Elenco Test',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Estrai i campi richiesti per identificare la campagna.',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Inserisci il budget per calcolare il ROI.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Tutte le newsletter devono avere tre liste obiettivi (Sottoscritto, Non Sottoscritto e Test). Puoi assegnare una lista obiettivi esistente. Altrimenti, quando salvi le newsletter deve essere creata una lista obiettivi.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Seleziona o crea una lista obiettivi per usarla nella campagna. Questa lista sarà usata quando verranno inviate email tramite i messaggi di marketing.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'O creane una nuova utilizzando il modulo sottostante:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Definisci un tracker URL per usarlo nella campagna. Per creare il tracker URL devi inserire sia il nome che l´URL.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Riempi il modulo sottostante per creare un´istanza della email per la tua newsletter. Questo ti permetterà di specificare le informazioni riguardanti quando e come la newsletter deve essere spedita .',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'Questo è ultimo step del processo. Scegliere se desiderate spedire un test, schedulare la tua newsletter per essere spedita, o semplicemente per salvare il tuo lavoro e andare al sommario.',
  'LBL_HOME_START_MESSAGE' => 'Seleziona il tipo di campagna che intendi creare.',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Non puoi andare avanti, sei già all´ultimo step.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Non puoi tornare indietro, sei già al primo step.',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Testata Campagna',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Budget Campagna',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Tracker URLs Campagna',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Sottoscrizione Informazioni',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Invia Email',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Sommario',
  'LBL_NAVIGATION_MENU_GEN1' => 'Testata Campagna',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Invia Email',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Sottoscrizioni',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Sommario',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Questo definirà la lista obiettivi del tipo di Sottoscrizioni per questa campagna .<br>  Questa lista obiettivi sarà usata per spedire email per la campagna.  <br>Se non hai una lista pronta, una lista vuota sarà creata per te.',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Questo definirà la lista obiettivi del tipo di Disiscrizioni per questa campagna.  <br> Questa lista  conterrà i nomi delle persone che non vogliono ricevere le campagne e che non vogliono più essere contattati attraverso email.  <br>Se non hai una lista pronta, una lista vuota sarà creata per te.',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Questo definirà la lista obiettivi del tipo di Test per questa campagna.  <br>Questa lista obiettivi sarà usata per spedire email di test di questa campagna.  <br>Se non hai una lista prota, una lista vuota sarà creata per te.',
  'LBL_TRACKERS' => 'Tracker',
  'LBL_ADD_TRACKER' => 'Crea Tracker',
  'LBL_ADD_TARGET' => 'Aggiungi',
  'LBL_CREATE_TARGET' => 'Crea',
  'LBL_SELECT_TARGET' => 'Usa una lista obiettivi esistente',
  'LBL_REMOVE' => 'Canc',
  'LBL_CONFIRM' => 'Inizia',
  'LBL_START' => 'Inizia',
  'LBL_TOTAL_ENTRIES' => 'Entrate',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Salva il lavoro e procedi con l´Email Marketing',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Salva Opzioni',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Desiderate salvare le informazioni e uscire?',
  'LBL_CONFIRM_SEND_SAVE' => 'Stai procedendo verso la pagina di invio Campagna Email. Vuoi salvare e continuare?',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Newsletter:',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Modifica Newsletter:',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Modifica Campagna:',
  'LBL_SEND_AS_TEST' => 'Trasmettere email di test',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Completato',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Salva e continua',
  'LBL_TARGET_LISTS' => 'Liste Obiettivi',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'Non potete trasmettere una email marketing fino a che la vostra lista di sottoscrizioni non abbia almeno una voce. Potete popolare la vostra lista dopo aver finito.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'Non potete trasmettere una email marketing fino a che la vostra lista obiettivi non abbia almeno una voce. Potete popolare la vostra lista dopo aver finito.',
  'LBL_NO_TARGETS_WARNING' => 'Non potete trasmettere una email marketing fino a che la vostra campagna non abbia almeno una lista obiettivi.',
  'LBL_NONE' => 'Non creato',
  'LBL_CAMPAIGN_WIZARD' => 'Nuova campagna guidata',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Campagna non basata su email',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Tipo Campagna',
  'LBL_TARGET_LIST' => 'Lista Obiettivi',
  'LBL_TARGET_TYPE' => 'Tipo Lista Obiettivi',
  'LBL_TARGET_NAME' => 'Nome Lista Obiettivi',
  'LBL_EMAILS_SCHEDULED' => 'Emails schedulate',
  'LBL_TEST_EMAILS_SENT' => 'Prova invio Email',
  'LBL_USERS_CANNOT_OPTOUT' => 'Gli utenti di sistema non hanno la possibilità di disiscriversi dalle email ricevute.',
  'LBL_ELECTED_TO_OPTOUT' => 'Hai scelto di disiscriverti e di non ricevere più messaggi email.',
  'LBL_COPY_OF' => 'Copia di',
  'LBL_SAVED_SEARCH' => 'Ricerca & Layout salvati',
  'LBL_WIZ_FROM_NAME' => 'Mittente:',
  'LBL_WIZ_FROM_ADDRESS' => 'Destinatario:',
  'LBL_EMAILS_PER_RUN' => 'Numero di email inviate per batch:',
  'LBL_CUSTOM_LOCATION' => 'Permettere la selezione',
  'LBL_DEFAULT_LOCATION' => 'Auto-Creazione',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Soltanto i valori di numero intero tengono conto del numero di email trasmesse per batch',
  'LBL_LOCATION_TRACK' => 'Posizione dei file di monitoraggio della campagna (come campaign_tracker.php):',
  'LBL_MAIL_SENDTYPE' => 'Protocollo in uscita:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Usare l´autenticazione smtp?',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Setup Email per le campagne',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valore di Config.php che regola site_url',
  'LBL_NOTIFY_TITLE' => 'Opzioni di notifica delle Email',
  'LBL_MASS_MAILING_TITLE' => 'Opzioni per l´invio massivo di Email',
  'LBL_SERVER_TYPE' => 'Protocollo email',
  'LBL_SERVER_URL' => 'Indirizzo email',
  'LBL_LOGIN' => 'Nome Utente',
  'LBL_PORT' => 'Porta dell´email Server',
  'LBL_MAILBOX_NAME' => 'Nome Mailbox:',
  'LBL_MAILBOX' => 'Cartella monitorata',
  'LBL_NAVIGATION_MENU_SETUP' => 'Impostazioni Email',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Nuova Casella di Posta',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Rilevate delle caselle con gestione dei messaggi di ritorno. Non è necessario crearne altre, puoi comunque farlo.',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Non sono state rilevate caselle con gestione dei messaggi di ritorno, prego crearne una ora',
  'LBL_CAMP_MESSAGE_COPY' => 'Tieni una copia dei messaggi delle campagne:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Volete conservare la copia di <bold>OGNI</bold> messaggio email inviato durante tutte le campagne?  <bold>Noi consigliamo e impostiamo no</bold>. Scegliendo no sarà conservato solamente il modello che è stato inviato e che necessita di eventuali variabili per essere riutilizzato in messaggi individuali.',
  'LBL_YES' => 'Si',
  'LBL_DEFAULT_FROM_ADDR' => 'Default:',
  'LBL_EMAIL_SETUP_DESC' => 'Compilare il form qui sotto per modificare le vostre impostazioni di sistema in modo da potere spedire le email per la campagna.',
  'LBL_CREATE_MAILBOX' => 'Generare nuova mailbox',
  'LBL_SSL_DESC' => 'Se il server mail supporta le connessioni socket sicure, abilitandolo forzerai le connessioni SSL quando importerai le email.',
  'LBL_SSL' => 'Utilizza SSL',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'La campagna non può funzionare, le vostre email non possono essere trasmesse per i seguenti motivi:',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Diagnostica delle campagne',
  'LBL_DIAGNOSTIC' => 'Diagnostica',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Mailbox di ritorno rilevata:',
  'LBL_MAILBOX_CHECK1_BAD' => 'Nessuna mailbox di ritorno rilevata.',
  'LBL_MAILBOX_CHECK2_GOOD' => 'Impostazioni E-mail sono state configurate:',
  'LBL_MAILBOX_CHECK2_BAD' => 'Si prega di configurare il vostro indirizzo email. Le impostazioni E-mail non sono state configurate.',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Schedulazioni rilevate',
  'LBL_SCHEDULER_CHECK_BAD' => 'Nessuna schedulazione rilevata',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Le attività schedulate non sono state utilizzate per elaborare le Email di ritorno della campagna.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Le attività schedulate non sono state utilizzate per elaborare le Email della campagna.',
  'LBL_SCHEDULER_NAME' => 'Schedulazione',
  'LBL_SCHEDULER_STATUS' => 'Stato',
  'LBL_MARKETING_CHECK1_GOOD' => 'Componenti di Email Marketing rilevate.',
  'LBL_MARKETING_CHECK1_BAD' => 'Nessuna componente di Email Marketing rilevata,dovrete generarne una per spedire una campagna.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Lista obiettivi trovata.',
  'LBL_MARKETING_CHECK2_BAD' => 'Nessuna lista obiettivi trovata, dovrete generarne una.',
  'LBL_EMAIL_SETUP_WIZ' => 'Lancia Installazione Email',
  'LBL_SCHEDULER_LINK' => 'Vai alla pagina di amministrazione dello schedulatore.',
  'LBL_TO_WIZARD' => 'Lancia',
  'LBL_TO_WIZARD_TITLE' => 'Guida',
  'LBL_EDIT_EXISTING' => 'Modifica Campagna',
  'LBL_EDIT_TARGET_LIST' => 'Modifica Lista Obiettivi',
  'LBL_SEND_EMAIL' => 'Schedula Email',
  'LBL_USE_EXISTING' => 'Usare esistente',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Generare la nuova email di marketing',
  'LBL_CHOOSE_NEXT_STEP' => 'Scegli il tuo prossimo passo',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Informare l´ amministratore del sistema in modo da poter correggere questo problema',
  'LBL_EMAIL_COMPONENTS' => 'Componenti Email',
  'LBL_SCHEDULER_COMPONENTS' => 'Schedulazione Componenti',
  'LBL_RECHECK_BTN' => 'Ri-Controllare',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Crea Lead Form: Selezionare i campi',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Crea Lead Form: Proprietà del form',
  'LBL_DRAG_DROP_COLUMNS' => 'Seleziona e Trascina tra i campi disponibili quelli che vuoi visualizzare nella prima e nella seconda colonna',
  'LBL_DEFINE_LEAD_HEADER' => 'Testata Form:',
  'LBL_LEAD_DEFAULT_HEADER' => 'Web to lead form per Campagna',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Etichetta del tasto di invio:',
  'LBL_EDIT_LEAD_POST_URL' => 'Modifica Post URL?',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'Ridireziona URL:',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campagna relativa:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Esegui',
  'LBL_WEB_TO_LEAD' => 'Crea Lead Form',
  'LBL_LEAD_FOOTER' => 'Piè di pagina del form:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Selezionare e associare una campagna:',
  'NTC_NO_LEGENDS' => 'Nessuno',
  'LBL_SELECT_LEAD_FIELDS' => 'Si prega di selezionare tra i campi disponibili',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Descrizione form:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'La presentazione del form genererà un lead e un collegamento con la campagna',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Si prega di scaricare il web to lead form',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Si prega di fornire tutti i campi richiesti',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Indirizzo email non valido',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Campi disponibili',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Form Lead (Prima Colonna)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Form Lead  (Seconda Colonna)',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'Crea WebToLeadForm',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Si prega di selezionare i campi richiesti:',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Ritorno dell´investimento della campagna',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Risposta alla campagna in seguito ad attività svolta dai destinatari',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Soppresso da indirizzo email o dal dominio',
  'LBL_AMOUNT_IN' => 'Importo in',
  'LBL_ROI_CHART_REVENUE' => 'Profitto',
  'LBL_ROI_CHART_INVESTMENT' => 'Investimento',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Entrate Previste',
  'LBL_TOP_CAMPAIGNS' => 'Top Campagne',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Nome Campagna',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Profitto',
  'LBL_CONTACTS' => 'Contatti',
  'LBL_ACCOUNTS' => 'Aziende',
  'LBL_OPPORTUNITIES' => 'Opportunità',
  'LBL_CREATED_USER' => 'Utente Creato',
  'LBL_MODIFIED_USER' => 'Utente Modificato',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Liste Obiettivi',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Coda Track',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Visualizzato',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Contatto',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Email Non Valida',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Errore Invio',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Cancellato',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Bloccato',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',
  'LBL_IMPORT_PROSPECTS' => 'Importa Obiettivi',
  'LBL_LEAD_FORM_WIZARD' => 'Lead Form guidata',
  'LBL_CAMPAIGN_INFORMATION' => 'Informazioni Campagna',
  'LBL_MONTH' => 'Mese',
  'LBL_YEAR' => 'Anno',
  'LBL_DAY' => 'Giorno',
);


