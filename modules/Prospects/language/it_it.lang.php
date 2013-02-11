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
  'LBL_LIST_EMAIL_ADDRESS' => 'Email',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'LBL_HOME_PHONE' => 'Home:',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_CONVERT_BUTTON_KEY' => 'V',
  'LBL_MODULE_NAME' => 'Obiettivi',
  'LBL_MODULE_ID' => 'Obiettivi',
  'LBL_INVITEE' => 'Report Diretti',
  'LBL_MODULE_TITLE' => 'Obiettivi: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Obiettivo',
  'LBL_LIST_FORM_TITLE' => 'Elenco Obiettivi',
  'LBL_NEW_FORM_TITLE' => 'Crea Obiettivo',
  'LBL_PROSPECT' => 'Obiettivo:',
  'LBL_BUSINESSCARD' => 'Biglietto da Visita',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_LAST_NAME' => 'Cognome',
  'LBL_LIST_PROSPECT_NAME' => 'Nome Obiettivo',
  'LBL_LIST_TITLE' => 'Funzione',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Altra Email',
  'LBL_LIST_PHONE' => 'Telefono',
  'LBL_LIST_PROSPECT_ROLE' => 'Ruolo',
  'LBL_LIST_FIRST_NAME' => 'Nome',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_ASSIGNED_TO_ID' => 'Assegnato A:',
  'LBL_CAMPAIGN_ID' => 'ID Campagna',
  'LBL_EXISTING_PROSPECT' => 'Usato un contatto esistente',
  'LBL_CREATED_PROSPECT' => 'Creato un nuovo contatto',
  'LBL_EXISTING_ACCOUNT' => 'Usata un´azienda esistente',
  'LBL_CREATED_ACCOUNT' => 'Creata una nuova azienda',
  'LBL_CREATED_CALL' => 'Creata una nuova chiamata',
  'LBL_CREATED_MEETING' => 'Creata una nuova riunione',
  'LBL_ADDMORE_BUSINESSCARD' => 'Aggiungi un altro biglietto da visita',
  'LBL_ADD_BUSINESSCARD' => 'Inserisci Biglietto da Visita',
  'LBL_NAME' => 'Nome completo:',
  'LBL_FULL_NAME' => 'Nome',
  'LBL_PROSPECT_NAME' => 'Nome Obiettivo:',
  'LBL_PROSPECT_INFORMATION' => 'Informazioni Obiettivo',
  'LBL_MORE_INFORMATION' => 'Ulteriori informazioni',
  'LBL_FIRST_NAME' => 'Nome:',
  'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
  'LBL_ANY_PHONE' => 'Altro Telefono:',
  'LBL_PHONE' => 'Telefono:',
  'LBL_LAST_NAME' => 'Cognome:',
  'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
  'LBL_OTHER_PHONE' => 'Altro Telefono:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Comune:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Primario, Nazione:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP:',
  'LBL_ALT_ADDRESS_STREET' => 'Indirizzo Alternativo, Via:',
  'LBL_ALT_ADDRESS_CITY' => 'Indirizzo Alternativo, Comune:',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Indirizzo Alternativo, Nazione:',
  'LBL_ALT_ADDRESS_STATE' => 'Indirizzo Alternativo, Provincia:',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Indirizzo Alternativo, CAP:',
  'LBL_TITLE' => 'Funzione:',
  'LBL_DEPARTMENT' => 'Divisione:',
  'LBL_BIRTHDATE' => 'Data di nascita:',
  'LBL_EMAIL_ADDRESS' => 'Email:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
  'LBL_ANY_EMAIL' => 'Email alternativa:',
  'LBL_ASSISTANT' => 'Assistente:',
  'LBL_ASSISTANT_PHONE' => 'Telefono Assistente:',
  'LBL_DO_NOT_CALL' => 'Non chiamare:',
  'LBL_EMAIL_OPT_OUT' => 'Non vuole ricevere email:',
  'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
  'LBL_ALTERNATE_ADDRESS' => 'Altro Indirizzo:',
  'LBL_ANY_ADDRESS' => 'Altro Indirizzo:',
  'LBL_CITY' => 'Comune :',
  'LBL_STATE' => 'Provincia:',
  'LBL_POSTAL_CODE' => 'CAP:',
  'LBL_COUNTRY' => 'Nazione:',
  'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
  'LBL_ADDRESS_INFORMATION' => 'Indirizzo',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_PROSPECT_ROLE' => 'Ruolo:',
  'LBL_OPP_NAME' => 'Nome Opportunità:',
  'LBL_IMPORT_VCARD' => 'Importa vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Crea automaticamente un nuovo contatto importando una vCard dal tuo computer.',
  'LBL_DUPLICATE' => 'Possibile Obiettivo Duplicato',
  'MSG_SHOW_DUPLICATES' => 'L´obiettivo che stai per creare potrebbe generare un duplicato. L´obiettivo contiene un nome simile e/o indirizzi email elencati qui sotto. Clicca Salva per continuazione con la creazione di questo nuovo obiettivo oppure clicca Annulla per tornare al modulo senza creare l´obiettivo.',
  'MSG_DUPLICATE' => 'L´obiettivo che stai per creare potrebbe generare un duplicato. L´obiettivo contiene un nome simile e/o indirizzi email elencati qui sotto. Clicca Salva per continuazione con la creazione di questo nuovo obiettivo oppure clicca Annulla per tornare al modulo senza creare l´obiettivo.',
  'LNK_IMPORT_VCARD' => 'Crea da vCard',
  'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
  'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
  'LNK_NEW_CASE' => 'Nuovo Reclamo',
  'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
  'LNK_NEW_CALL' => 'Nuova Chiamata',
  'LNK_NEW_EMAIL' => 'Archivia Email',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
  'LNK_IMPORT_PROSPECTS' => 'Importa Obiettivi',
  'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record?',
  'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler eliminare il contatto da questo reclamo?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record come rapporto diretto?',
  'ERR_DELETE_RECORD' => 'Per eliminare il contatto deve essere specificato il numero del record.',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Copia indirizzo primario in quello alternativo',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Copia indirizzo alternativo in quello primario',
  'LBL_SALUTATION' => 'Titolo',
  'LBL_SAVE_PROSPECT' => 'Salva Obiettivo',
  'LBL_CREATED_OPPORTUNITY' => 'Creata una nuova opportunità',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'La creazione di una opportunità richiede l´esistenza di una azienda. Si prega di creare un´azienda o selezionarne una già esistente.',
  'LNK_SELECT_ACCOUNT' => 'Seleziona Azienda',
  'LNK_NEW_PROSPECT' => 'Nuovo Obiettivo',
  'LNK_PROSPECT_LIST' => 'Visualizza Obiettivi',
  'LNK_NEW_CAMPAIGN' => 'Nuova Campagna',
  'LNK_CAMPAIGN_LIST' => 'Campagne',
  'LNK_NEW_PROSPECT_LIST' => 'Nuova Lista Obiettivi',
  'LNK_PROSPECT_LIST_LIST' => 'Liste Obiettivi',
  'LNK_IMPORT_PROSPECT' => 'Importa Obiettivi',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Scegli Obiettivi Selezionati',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Scegli Obiettivi Selezionati',
  'LBL_INVALID_EMAIL' => 'Email non valida:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Obiettivi',
  'LBL_PROSPECT_LIST' => 'Lista Obiettivi',
  'LBL_CONVERT_BUTTON_TITLE' => 'Converti Obiettivo',
  'LBL_CONVERT_BUTTON_LABEL' => 'Converti Obiettivo',
  'LBL_CONVERTPROSPECT' => 'Converti Obiettivo',
  'LNK_NEW_CONTACT' => 'Nuovo Contatto',
  'LBL_CREATED_CONTACT' => 'Creato un nuovo contatto',
  'LBL_BACKTO_PROSPECTS' => 'Torna agli Obiettivi',
  'LBL_CAMPAIGNS' => 'Campagne',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Log Campagna',
  'LBL_TRACKER_KEY' => 'Chiave Tracker',
  'LBL_LEAD_ID' => 'ID Lead',
  'LBL_CONVERTED_LEAD' => 'Lead Convertito',
  'LBL_ACCOUNT_NAME' => 'Nome Azienda',
  'LBL_EDIT_ACCOUNT_NAME' => 'Nome Azienda:',
  'LBL_CREATED_USER' => 'Utente Creato',
  'LBL_MODIFIED_USER' => 'Utente Modificato',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campagne',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
);

