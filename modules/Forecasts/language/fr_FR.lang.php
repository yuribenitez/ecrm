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
	'LBL_MODULE_NAME'										=> 'Prévisions',
	'LNK_NEW_OPPORTUNITY'									=> 'Créer une Affaire',
	'LBL_MODULE_TITLE'										=> 'Prévisions',
	'LBL_LIST_FORM_TITLE'									=> 'Prévisions validées',
	'LNK_UPD_FORECAST'										=> 'Tableau des Prévisions',
	'LNK_QUOTA'												=> 'Objectifs',
	'LNK_FORECAST_LIST'										=> 'Historique Prévisions',
	'LBL_FORECAST_HISTORY'									=> 'Prévisions: Historique',
	'LBL_FORECAST_HISTORY_TITLE'							=> 'Prévisions: Historique',
	'LBL_TIMEPERIOD_NAME'									=> 'Time Period',
	'LBL_USER_NAME'											=> 'Nom Utilisateur',
	'LBL_REPORTS_TO_USER_NAME'								=> 'Rend compte à',
	'LBL_FORECAST_ID'										=> 'ID',
	'LBL_FORECAST_TIME_ID'									=> 'Ident. Période',
	'LBL_FORECAST_TYPE'										=> 'Type de Prévision',
	'LBL_FORECAST_OPP_COUNT'								=> 'Affaires',
	'LBL_FORECAST_OPP_WEIGH'								=> 'Montant pondéré',
	'LBL_FORECAST_OPP_COMMIT'								=> 'Cas probable',
	'LBL_FORECAST_OPP_BEST_CASE'							=> 'Au mieux',
	'LBL_FORECAST_OPP_WORST'								=> 'Au pire',
	'LBL_FORECAST_USER'										=> 'Assigné à  ',
	'LBL_DATE_COMMITTED'									=> 'Date de validation',
	'LBL_DATE_ENTERED'										=> 'Date de création',
	'LBL_DATE_MODIFIED'										=> 'Date de modification',
	'LBL_CREATED_BY'										=> 'Créé par',
	'LBL_DELETED'											=> 'Supprimé',
	'LBL_MODIFIED_USER_ID'									=> 'Modifié par',
	'LBL_QC_TIME_PERIOD'									=> 'Période:',
	'LBL_QC_OPPORTUNITY_COUNT'								=> 'Nombre d&#39;affaire:',
	'LBL_QC_WEIGHT_VALUE'									=> 'Montant pondéré:',
	'LBL_QC_COMMIT_VALUE'									=> 'Nouveau montant validé:',
	'LBL_QC_COMMIT_BUTTON'									=> 'Valider',
	'LBL_QC_WORKSHEET_BUTTON'								=> 'Tableau des prévisions',
	'LBL_QC_ROLL_COMMIT_VALUE'								=> 'Montant validé par les membres:',
	'LBL_QC_DIRECT_FORECAST'								=> 'Ma prévision directe:',
	'LBL_QC_ROLLUP_FORECAST'								=> 'Prévision pour mon équipe:',
	'LBL_QC_UPCOMING_FORECASTS'								=> 'Mes prévisions',
	'LBL_QC_LAST_DATE_COMMITTED'							=> 'Date dernière validation:',
	'LBL_QC_LAST_COMMIT_VALUE'								=> 'Dernier montant validé:',
	'LBL_QC_HEADER_DELIM'									=> 'To',
	'LBL_OW_OPPORTUNITIES'									=> 'Affaires',
	'LBL_OW_ACCOUNTNAME'									=> 'Compte',
	'LBL_OW_REVENUE'										=> 'Montant',
	'LBL_OW_WEIGHTED'										=> 'Montant pondéré',
	'LBL_OW_MODULE_TITLE'									=> 'Tableau des Affaires',
	'LBL_OW_PROBABILITY'									=> 'Probabilité',
	'LBL_OW_NEXT_STEP'										=> 'Etape suivante',
	'LBL_OW_DESCRIPTION'									=> 'Description',
	'LBL_OW_TYPE'											=> 'Type',
	'LNK_NEW_TIMEPERIOD'									=> 'Créer Période',
	'LNK_TIMEPERIOD_LIST'									=> 'Périodes',
	'LBL_SVFS_FORECASTDATE'									=> 'Date de début planifiée',
	'LBL_SVFS_STATUS'										=> 'Statut',
	'LBL_SVFS_USER'											=> 'Pour',
	'LBL_SVFS_CASCADE'										=> 'Rapports en cascade ?',
	'LBL_SVFS_HEADER'										=> 'Prévision planifiée:',
	'LB_FS_KEY'												=> 'ID',
	'LBL_FS_TIMEPERIOD_ID'									=> 'Ident. Période',
	'LBL_FS_USER_ID'										=> 'ID Utilisateur',
	'LBL_FS_TIMEPERIOD'										=> 'Time Period',
	'LBL_FS_START_DATE'										=> 'Date de début',
	'LBL_FS_END_DATE'										=> 'Date de fin',
	'LBL_FS_FORECAST_START_DATE'							=> 'Date début Prévision',
	'LBL_FS_STATUS'											=> 'Statut',
	'LBL_FS_FORECAST_FOR'									=> 'Planifiée pour:',
	'LBL_FS_CASCADE'										=> 'En Cascade ?',
	'LBL_FS_MODULE_NAME'									=> 'Prévision Planifiée',
	'LBL_FS_CREATED_BY'										=> 'Créé par',
	'LBL_FS_DATE_ENTERED'									=> 'Date de création',
	'LBL_FS_DATE_MODIFIED'									=> 'Date de modification',
	'LBL_FS_DELETED'										=> 'Supprimé',
	'LBL_FDR_USER_NAME'										=> 'Rapport Direct',
	'LBL_FDR_OPPORTUNITIES'									=> 'Affaires dans les prévisions:',
	'LBL_FDR_WEIGH'											=> 'Montant pondéré des affaires:',
	'LBL_FDR_COMMIT'										=> 'Montant validé',
	'LBL_FDR_DATE_COMMIT'									=> 'Date de validation',
	'LBL_DV_HEADER'											=> 'Prévisions: Tableau des prévisions',
	'LBL_DV_MY_FORECASTS'									=> 'Mes prévisions',
	'LBL_DV_MY_TEAM'										=> 'Les prévisions de mon équipe',
	'LBL_DV_TIMEPERIODS'									=> 'Périodes:',
	'LBL_DV_FORECAST_PERIOD'								=> 'Période de la prévision',
	'LBL_DV_FORECAST_OPPORTUNITY'							=> 'Affaires Prévues',
	'LBL_SEARCH'											=> 'Sélectionner',
	'LBL_SEARCH_LABEL'										=> 'Sélectionner',
	'LBL_COMMIT_HEADER'										=> 'Valider Prévisions',
	'LBL_DV_LAST_COMMIT_DATE'								=> 'Date dernière validation:',
	'LBL_DV_LAST_COMMIT_AMOUNT'								=> 'Derniers montants validés:',
	'LBL_DV_FORECAST_ROLLUP'								=> 'Agreger prévisions',
	'LBL_DV_TIMEPERIOD'										=> 'Période:',
	'LBL_DV_TIMPERIOD_DATES'								=> 'Plage de date:',
	'LBL_LV_TIMPERIOD'										=> 'Période',
	'LBL_LV_TIMPERIOD_START_DATE'							=> 'Date de début',
	'LBL_LV_TIMPERIOD_END_DATE'								=> 'Date de fin',
	'LBL_LV_TYPE'											=> 'Type de Prévision',
	'LBL_LV_COMMIT_DATE'									=> 'Date de validation',
	'LBL_LV_OPPORTUNITIES'									=> 'Affaires',
	'LBL_LV_WEIGH'											=> 'Montant pondéré',
	'LBL_LV_COMMIT'											=> 'Montant validé',
	'LBL_COMMIT_NOTE'										=> 'Renseigner les montants que vous souhaitez valider pour la période sélectionnée:',
	'LBL_COMMIT_MESSAGE'									=> 'Voulez-vous valider ces montants',
	'ERR_FORECAST_AMOUNT'									=> 'Le montant prévisionnel est requis et doit être un nombre.',
	'LBL_FC_START_DATE'										=> 'Date de début',
	'LBL_FC_USER'											=> 'Planifié pour',
	'LBL_NO_ACTIVE_TIMEPERIOD'								=> 'Pas de périodes actives pour la Prévision.',
	'LBL_FDR_ADJ_AMOUNT'									=> 'Montant ajusté',
	'LBL_SAVE_WOKSHEET'										=> 'Sauvegarder Tableau',
	'LBL_RESET_WOKSHEET'									=> 'Réinitialiser Tableau',
	'LBL_SHOW_CHART'										=> 'Voir le graphique',
	'LBL_RESET_CHECK'										=> 'Tous les tableaux de données pour la période selectionnée et pour cet utilisateur seront supprimés, continuer ?',
	'LB_FS_LIKELY_CASE'										=> 'Cas probable',
	'LB_FS_WORST_CASE'										=> 'Au pire',
	'LB_FS_BEST_CASE'										=> 'Au mieux',
	'LBL_FDR_WK_LIKELY_CASE'								=> 'Estim.<br>Cas probable',
	'LBL_FDR_WK_BEST_CASE'									=> 'Estim.<br>Au mieux',
	'LBL_FDR_WK_WORST_CASE'									=> 'Estim.<br>Au pire',
	'LBL_BEST_CASE'											=> 'Au mieux:',
	'LBL_LIKELY_CASE'										=> 'Cas probable:',
	'LBL_WORST_CASE'										=> 'Au pire:',
	'LBL_FDR_C_BEST_CASE'									=> 'Au mieux',
	'LBL_FDR_C_WORST_CASE'									=> 'Au pire',
	'LBL_FDR_C_LIKELY_CASE'									=> 'Cas probable',
	'LBL_QC_LAST_BEST_CASE'									=> 'Dernier Montant soumis (Au mieux):',
	'LBL_QC_LAST_LIKELY_CASE'								=> 'Dernier Montant soumis (Cas probable):',
	'LBL_QC_LAST_WORST_CASE'								=> 'Dernier Montant soumis (Au pire):',
	'LBL_QC_ROLL_BEST_VALUE'								=> 'Agréger Montant soumis (Au mieux):',
	'LBL_QC_ROLL_LIKELY_VALUE'								=> 'Agréger Montant soumis (Cas probable):',
	'LBL_QC_ROLL_WORST_VALUE'								=> 'Agréger Montant soumis (Au pire):',
	'LBL_QC_COMMIT_BEST_CASE'								=> 'Montant soumis (Au mieux):',
	'LBL_QC_COMMIT_LIKELY_CASE'								=> 'Montant soumis (Cas probable):',
	'LBL_QC_COMMIT_WORST_CASE'								=> 'Montant soumis (Au pire):',
	'LBL_FORECAST_FOR'										=> 'Tableau des Prévisions pour: ',
	'LBL_FMT_ROLLUP_FORECAST'								=> '(Agregé)',
	'LBL_FMT_DIRECT_FORECAST'								=> '(Direct)',
	'LBL_GRAPH_TITLE'										=> 'Historique des Prévisions',
	'LBL_GRAPH_QUOTA_ALTTEXT'								=> 'Objectif pour %s',
	'LBL_GRAPH_COMMIT_ALTTEXT'								=> 'Montant soumis pour %s',
	'LBL_GRAPH_OPPS_ALTTEXT'								=> 'Valeur des affaires terminées pour %s',
	'LBL_GRAPH_QUOTA_LEGEND'								=> 'Objectif',
	'LBL_GRAPH_COMMIT_LEGEND'								=> 'Prévision soumise',
	'LBL_GRAPH_OPPS_LEGEND'									=> 'Affaires terminées',
	'LBL_TP_QUOTA'											=> 'Objectif:',
	'LBL_CHART_FOOTER'										=> 'Historique Prévisions<br/>Objectif vs Montant Prévision vs Valeur Affaire terminée',
	'LBL_TOTAL_VALUE'										=> 'Totaux:',
	'LBL_COPY_AMOUNT'										=> 'Total montant',
	'LBL_COPY_WEIGH_AMOUNT'									=> 'Total montant pondéré',
	'LBL_WORKSHEET_AMOUNT'									=> 'Total montants estimés',
	'LBL_COPY'												=> 'Copier Valeurs',
	'LBL_COMMIT_AMOUNT'										=> 'Somme des valeurs soumises.',
	'LBL_COPY_FROM'											=> 'Copier valeur depuis:',
	'LBL_CHART_TITLE'										=> 'Quota vs. Commité vs. Actuel'
);

?>