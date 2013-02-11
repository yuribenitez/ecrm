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
  'LBL_CONTRACTS' => 'Contratos',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contratos',
  'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copiar para a Morada Primária',
  'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copiar para Outra Morada',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'LBL_VCARD' => 'vCard',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LNK_CONTACT_REPORTS' => 'Relatório de Contactos',
  'ERR_DELETE_RECORD' => 'Um número de registo deve ser especificado para eliminar o contacto.',
  'LBL_ACCOUNT_ID' => 'ID da Entidade',
  'LBL_ACCOUNT_NAME' => 'Nome da Entidade',
  'LBL_CAMPAIGN' => 'Campanha',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_ADD_BUSINESSCARD' => 'Criar Cartão de Visita',
  'LBL_ADDMORE_BUSINESSCARD' => 'Incluir outro cartão de visita',
  'LBL_ADDRESS_INFORMATION' => 'Informação de Endereço',
  'LBL_ALT_ADDRESS_CITY' => 'Cidade Endereço Alternativo',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Paí­s Endereço Alternativo',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Código Postal Endereço Alternativo',
  'LBL_ALT_ADDRESS_STATE' => 'Estado Endereço Alternativo:',
  'LBL_ALT_ADDRESS_STREET_2' => 'Rua Endereço Alternativo 2',
  'LBL_ALT_ADDRESS_STREET_3' => 'Rua Endereço Alternativo 3',
  'LBL_ALT_ADDRESS_STREET' => 'Rua Endereço Alternativo',
  'LBL_ALTERNATE_ADDRESS' => 'Endereço Alternativo',
  'LBL_ALT_ADDRESS' => 'Endereço Alternativo',
  'LBL_ANY_ADDRESS' => 'Qualquer Endereço',
  'LBL_ANY_EMAIL' => 'E-mail Qualquer',
  'LBL_ANY_PHONE' => 'Telefone Qualquer',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
  'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
  'LBL_ASSISTANT_PHONE' => 'Telefone do Assistente',
  'LBL_ASSISTANT' => 'Assistente',
  'LBL_BIRTHDATE' => 'Data de Nascimento',
  'LBL_BUSINESSCARD' => 'Cartão de Visita',
  'LBL_CITY' => 'Cidade',
  'LBL_CAMPAIGN_ID' => 'ID da Campanha',
  'LBL_CONTACT_INFORMATION' => 'Informação do Contacto',
  'LBL_CONTACT_NAME' => 'Nome de Contacto',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Contacto-Oportunidade',
  'LBL_CONTACT_ROLE' => 'Função',
  'LBL_CONTACT' => 'Contacto',
  'LBL_COUNTRY' => 'País',
  'LBL_CREATED_ACCOUNT' => 'Criada uma nova Entidade',
  'LBL_CREATED_CALL' => 'Criada uma nova Chamada Telefónica',
  'LBL_CREATED_CONTACT' => 'Criado um novo Contacto',
  'LBL_CREATED_MEETING' => 'Criada uma nova Reunião',
  'LBL_CREATED_OPPORTUNITY' => 'Criada uma nova Oportunidade',
  'LBL_DATE_MODIFIED' => 'Data da Modificação',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contactos',
  'LBL_DEPARTMENT' => 'Departamento',
  'LBL_DESCRIPTION_INFORMATION' => 'Informação Descritiva',
  'LBL_DESCRIPTION' => 'Descrição',
  'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Reporta directamente a',
  'LBL_DO_NOT_CALL' => 'Não Telefonar',
  'LBL_DUPLICATE' => 'Contactos Possivelmente Duplicados',
  'LBL_EMAIL_ADDRESS' => 'E-mail',
  'LBL_EMAIL_OPT_OUT' => 'Não Deseja receber E-mails',
  'LBL_EMPTY_VCARD' => 'Por favor seleccione um ficheiro vCard',
  'LBL_EXISTING_ACCOUNT' => 'Utiliza uma entidade existente',
  'LBL_EXISTING_CONTACT' => 'Utiliza um contacto existente',
  'LBL_EXISTING_OPPORTUNITY' => 'Utiliza uma oportunidade existente',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_FIRST_NAME' => 'Primeiro Nome',
  'LBL_FULL_NAME' => 'Nome Completo',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
  'LBL_HOME_PHONE' => 'Telefone de Casa',
  'LBL_ID' => 'ID',
  'LBL_IMPORT_VCARD' => 'Importar vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Criar automaticamente um contacto novo importando um vCard de seu sistema de ficheiros.',
  'LBL_INVALID_EMAIL' => 'Email Inválido',
  'LBL_INVITEE' => 'Reporta directamente a',
  'LBL_LAST_NAME' => 'Último Nome',
  'LBL_LEAD_SOURCE' => 'Fonte',
  'LBL_LIST_ACCEPT_STATUS' => 'Estado aceite',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome da Entidade',
  'LBL_LIST_CONTACT_NAME' => 'Nome do Contacto',
  'LBL_LIST_CONTACT_ROLE' => 'Função',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
  'LBL_LIST_FIRST_NAME' => 'Primeiro Nome',
  'LBL_LIST_FORM_TITLE' => 'Lista de Contactos',
  'LBL_VIEW_FORM_TITLE' => 'Detalhe do Contacto',
  'LBL_LIST_LAST_NAME' => 'Sobrenome',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Outro E-mail',
  'LBL_LIST_PHONE' => 'Telefone do Escritório',
  'LBL_LIST_TITLE' => 'Título',
  'LBL_MOBILE_PHONE' => 'Telemóvel',
  'LBL_MODIFIED' => 'Modificado por',
  'LBL_MODULE_NAME' => 'Contactos',
  'LBL_MODULE_TITLE' => 'Contactos: Ecrã Principal',
  'LBL_NAME' => 'Nome',
  'LBL_NEW_FORM_TITLE' => 'Novo Contacto',
  'LBL_NEW_PORTAL_PASSWORD' => 'Nova palavra-passe do Portal',
  'LBL_NOTE_SUBJECT' => 'Assunto da Nota',
  'LBL_OFFICE_PHONE' => 'Telefone do Escritório',
  'LBL_OPP_NAME' => 'Nome de Oportunidade',
  'LBL_OPPORTUNITY_ROLE_ID' => 'ID de Função de Oportunidade',
  'LBL_OPPORTUNITY_ROLE' => 'Função de Oportunidade',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Outro E-mail',
  'LBL_OTHER_PHONE' => 'Outro Telefone',
  'LBL_PHONE' => 'Telefone',
  'LBL_PORTAL_ACTIVE' => 'Portal Activo',
  'LBL_PORTAL_APP' => 'Aplicação Portal',
  'LBL_PORTAL_INFORMATION' => 'Informação do Portal',
  'LBL_PORTAL_NAME' => 'Nome do Portal',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Palavra-chave do portal foi configurada',
  'LBL_STREET' => 'Rua',
  'LBL_POSTAL_CODE' => 'Código Postal',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade Endereço Primário',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Paí­s Endereço Primário',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código Postal Endereço Primário',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Estado Endereço Primário',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rua Endereço Primário 2',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rua Endereço Primário 3',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Rua Endereço Primário',
  'LBL_PRIMARY_ADDRESS' => 'Endereço Primário',
  'LBL_PRODUCTS_TITLE' => 'Produtos',
  'LBL_RELATED_CONTACTS_TITLE' => 'Contactos Relacionados',
  'LBL_REPORTS_TO_ID' => 'Reporta ao ID',
  'LBL_REPORTS_TO' => 'Reporta a',
  'LBL_RESOURCE_NAME' => 'Nome de Recurso',
  'LBL_SALUTATION' => 'Saudação',
  'LBL_SAVE_CONTACT' => 'Gravar Contacto',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Contactos',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar Contactos Marcados',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar Contactos Marcados',
  'LBL_STATE' => 'Estado',
  'LBL_SYNC_CONTACT' => 'Sincronizar Contacto',
  'LBL_PROSPECT_LIST' => 'Lista de Potenciais Clientes',
  'LBL_TEAM_ID' => 'ID de Equipa',
  'LBL_TITLE' => 'Cargo',
  'LNK_CONTACT_LIST' => 'Contactos',
  'LNK_IMPORT_VCARD' => 'Criar a partir de um vCard',
  'LNK_NEW_ACCOUNT' => 'Nova Entidade',
  'LNK_NEW_APPOINTMENT' => 'Novo Compromisso',
  'LNK_NEW_CALL' => 'Nova Chamada Telefónica',
  'LNK_NEW_CASE' => 'Nova Ocorrência',
  'LNK_NEW_CONTACT' => 'Novo Contacto',
  'LNK_NEW_EMAIL' => 'Novo E-mail',
  'LNK_NEW_MEETING' => 'Nova Reunião',
  'LNK_NEW_NOTE' => 'Nova Nota',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LNK_NEW_TASK' => 'Criar Nova Tarefa',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar Entidade',
  'MSG_DUPLICATE' => 'Ao criar este contacto pode estar a duplicar o mesmo, seleccione um contacto da lista abaixo ou clique em Novo Contacto para continuar a criação com os dados introduzidos previamente.',
  'MSG_SHOW_DUPLICATES' => 'Ao criar este contacto pode estar a duplicar o mesmo, clique em Gravar para continuar ou escolha Cancelar.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Copia endereço alternativo para o endereço principal',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Copia o endereço principal para o endereço alternativo',
  'NTC_DELETE_CONFIRMATION' => 'Tem a certeza que deseja eliminar este registo?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Criar uma oportunidade requer uma Entidade.\\n Por favor, crie uma ou seleccione uma pré-existente.',
  'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza que deseja remover este contacto desta ocorrência?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Tem a certeza que deseja remover este registo como um relatório directo?',
  'LBL_USER_PASSWORD' => 'Palavra-passe',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produtos',
  'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Central de Suporte',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projectos',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Campanhas (Alvo de)',
  'LBL_CAMPAIGNS' => 'Campanhas',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Registo de Campanhas',
  'LBL_LIST_CITY' => 'Cidade',
  'LBL_LIST_STATE' => 'Estado',
  'LBL_HOMEPAGE_TITLE' => 'Os Meus Contactos',
  'LBL_OPPORTUNITIES' => 'Oportunidades',
  'LBL_PORTAL_PASSWORD' => 'Palavra-passe do Portal',
  'LBL_CONFIRM_PORTAL_PASSWORD' => 'Confirme a palavra-passe do Portal',
  'LBL_CHECKOUT_DATE' => 'Data do Registo de Saída',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectos',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campanhas',
  'LNK_IMPORT_CONTACTS' => 'Importar Contactos',
);

