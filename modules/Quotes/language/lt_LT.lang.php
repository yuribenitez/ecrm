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
  'LBL_CONTRACTS' => 'Sutartys',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Sutartys',
  'ERR_DELETE_RECORD' => 'Jūs turite nurodyti įrašo numerį, kad galėtumėte ištrinti pasiūlymą.',
  'LBL_ACCOUNT_ID' => 'Kliento Id',
  'LBL_ACCOUNT_NAME' => 'Kliento pavadinimas:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Priminimai',
  'LBL_ADD_COMMENT' => 'Įdėti pastabas',
  'LBL_ADD_GROUP' => 'Pridėti grupę',
  'LBL_ADD_ROW' => 'Pridėti eilutę',
  'LBL_ADDRESS_INFORMATION' => 'Adreso informacija',
  'LBL_AMOUNT' => 'Pasiūlymo suma',
  'LBL_AMOUNT_USDOLLAR' => 'Suma',
  'LBL_ANY_ADDRESS' => 'Adresas:',
  'LBL_BILL_TO' => 'Mokėtojas',
  'LBL_BILLING_ACCOUNT_NAME' => 'Klientas mokėtojas',
  'LBL_BILLING_ACCOUNT' => 'Klientas',
  'LBL_BILLING_ADDRESS_CITY' => 'Mokėjimo miestas',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'Mokėjimo šalis',
  'LBL_BILLING_ADDRESS_POSTAL_CODE' => 'Mokėjimo pašto kodas',
  'LBL_BILLING_ADDRESS_STATE' => 'Mokėjimo rajonas:',
  'LBL_BILLING_ADDRESS_STREET' => 'Mokėjimo gatvė',
  'LBL_BILLING_ADDRESS' => 'Mokėjimo adresas:',
  'LBL_BILLING_CONTACT_ID' => 'Kontakto mokėtojo Id:',
  'LBL_BILLING_CONTACT_NAME' => 'Kontaktas mokėtojas:',
  'LBL_BILLING_CONTACT' => 'Kontaktas:',
  'LBL_BUNDLE_NAME' => 'Grupės pavadinimas:',
  'LBL_BUNDLE_STAGE' => 'Grupės etapas:',
  'LBL_BUNDLE_DISCOUNT' => 'Nuolaida:',
  'LBL_CALC_GRAND' => 'Rodyti bendrą sumą:',
  'LBL_CHECK_DATA' => 'Neteisinga įvesti duomenis: prašome pasitikrinti, kad Jūs įvedę skaičius (0-9 ir \'.\')',
  'LBL_CITY' => 'Miestas:',
  'LBL_CONTACT_NAME' => 'Kontakto vardas:',
  'LBL_CONTACT_QUOTE_FORM_TITLE' => 'Kontaktas-Pasiūlymas:',
  'LBL_CONTACT_ROLE' => 'Kontakto rolė',
  'LBL_COUNTRY' => 'Šalis:',
  'LBL_CREATED_BY' => 'Sukūrė',
  'LBL_CURRENCY' => 'Valiuta:',
  'LBL_DATE_QUOTE_CLOSED' => 'Faktinė užbaigimo data',
  'LBL_DATE_QUOTE_EXPECTED_CLOSED' => 'Galioja iki:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Pasiūlymai',
  'LBL_DELETE_GROUP' => 'Ištrinti grupę',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacijos aprašymas',
  'LBL_DESCRIPTION' => 'Aprašymas',
  'LBL_DUPLICATE' => 'Galimas pasiūlymo dubliavimasis',
  'LBL_EMAIL_QUOTE_FOR' => 'Pasiūlymas:',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Štai Jums komercinis pasiūlymas (Jūs galite pakeisti šį tekstą)',
  'LBL_EMAIL_ATTACHMENT' => 'Prisegtukas',
  'LBL_HISOTRY_SUBPANEL_TITLE' => 'Istorija',
  'LBL_INVITEE' => 'Kontaktai',
  'LBL_INVOICE' => 'Sąskaita',
  'LBL_LEAD_SOURCE' => 'Pritraukimo metodas:',
  'LBL_LINE_ITEM_INFORMATION' => 'Prekių sąrašas',
  'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
  'LBL_LIST_AMOUNT' => 'Pasiūlymo suma',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Viso suma',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas',
  'LBL_LIST_COST_PRICE' => 'Savikaina',
  'LBL_LIST_DATE_QUOTE_CLOSED' => 'Užbaigimo data',
  'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED' => 'Galioja iki',
  'LBL_LIST_DISCOUNT_PRICE' => 'Vieneto kaina',
  'LBL_LIST_DEAL_TOT' => 'Nuolaida',
  'LBL_LIST_FORM_TITLE' => 'Pasiūlymų sąrašas',
  'LBL_LIST_GRAND_TOTAL' => 'Bendra suma',
  'LBL_LIST_LIST_PRICE' => 'Rekomenduojama',
  'LBL_LIST_MANUFACTURER_PART_NUM' => 'Gamintojo Nr',
  'LBL_LIST_PRICING_FACTOR' => 'Faktorius',
  'LBL_LIST_PRICING_FORMULA' => 'Įkainavimo formulė',
  'LBL_LIST_PRODUCT_NAME' => 'Prekė',
  'LBL_LIST_QUANTITY' => 'Kiekis',
  'LBL_LIST_QUOTE_NAME' => 'Tema',
  'LBL_LIST_QUOTE_NUM' => 'Numeris:',
  'LBL_LIST_QUOTE_STAGE' => 'Etapas',
  'LBL_LIST_TAXCLASS' => 'Mokesčių klasė',
  'LBL_MODIFIED_BY' => 'Redagavo',
  'LBL_MODULE_NAME' => 'Pasiūlymai',
  'LBL_MODULE_TITLE' => 'Pasiūlymai: Pradžia',
  'LBL_NAME' => 'Pasiūlymo pavadinimas',
  'LBL_NEW_FORM_TITLE' => 'Sukurti pasiūlymą',
  'LBL_NEXT_STEP' => 'Kitas žingsnis:',
  'LBL_OPPORTUNITY_NAME' => 'Pardavimo pavadinimas:',
  'LBL_ORDER_STAGE' => 'Užsakymo etapas',
  'LBL_ORIGINAL_PO_DATE' => 'Pradinė užsakymo data:',
  'LBL_PAYMENT_TERMS' => 'Apmokėjimo sąlygos:',
  'LBL_PDF_BILLING_ADDRESS' => 'Mokėtojas',
  'LBL_PDF_CURRENCY' => 'Valiuta:',
  'LBL_PDF_GRAND_TOTAL' => 'Bendra suma',
  'LBL_PDF_INVOICE_NUMBER' => 'Sąskaitos Nr.',
  'LBL_PDF_INVOICE_TITLE' => 'Sąskaita',
  'LBL_PDF_ITEM_EXT_PRICE' => 'Ext. kaina',
  'LBL_PDF_ITEM_DISCOUNT' => 'Nuolaida',
  'LBL_PDF_ITEM_SELECT_DISCOUNT' => '.',
  'LBL_PDF_ITEM_LIST_PRICE' => 'Rekomenduojama kaina',
  'LBL_PDF_ITEM_PRODUCT' => 'Prekė',
  'LBL_PDF_ITEM_QUANTITY' => 'Kiekis',
  'LBL_PDF_ITEM_UNIT_PRICE' => 'Vieneto kaina',
  'LBL_PDF_PART_NUMBER' => 'Tiekėjo prekės Nr',
  'LBL_PDF_QUOTE_CLOSE' => 'Galioja iki:',
  'LBL_PDF_QUOTE_DATE' => 'Data:',
  'LBL_PDF_QUOTE_NUMBER' => 'Pasiūlymo Nr.',
  'LBL_PDF_QUOTE_TITLE' => 'Pasiūlymas',
  'LBL_PDF_SALES_PERSON' => 'Pardavimų vadybininkas:',
  'LBL_PDF_SHIPPING_ADDRESS' => 'Siųsti',
  'LBL_PDF_SHIPPING_COMPANY' => 'Vežėjas:',
  'LBL_PDF_SHIPPING' => 'Pristatymas:',
  'LBL_PDF_SUBTOTAL' => 'Tarpinė suma:',
  'LBL_PDF_DISCOUNT' => 'Nuolaida:',
  'LBL_PDF_NEW_SUB' => 'Tarpinė suma su nuolaida',
  'LBL_PDF_TAX_RATE' => 'Mokesčių tarifas:',
  'LBL_PDF_TAX' => 'Mokesčiai:',
  'LBL_PDF_TOTAL' => 'Viso:',
  'LBL_POSTAL_CODE' => 'Pašto kodas:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektai',
  'LBL_PROPOSAL' => 'Pasiūlymas',
  'LBL_PURCHASE_ORDER_NUM' => 'Pirkimo užsakymo Nr:',
  'LBL_QUOTE_NAME' => 'Pasiūlymo tema:',
  'LBL_QUOTE_NUM' => 'Pasiūlymo numeris:',
  'LBL_QUOTE_STAGE' => 'Pasiūlymo etapas:',
  'LBL_QUOTE_TYPE' => 'Pasiūlymo tipas',
  'LBL_TAXABLE' => 'Apmokestinama',
  'LBL_NON_TAXABLE' => 'Neapmokestinama',
  'LBL_QUOTE' => 'Pasiūlymas',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'nėra pasiūlymo išdėstymo failo: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'pasiūlymo išdėstymas nėra užregistruotas modules/Quotes/Layouts.php',
  'LBL_REMOVE_COMMENT' => 'Išimti pastabą',
  'LBL_REMOVE_ROW' => 'Išimti eilutę',
  'LBL_RENAME_ERROR' => 'KLAIDA: nepavyko perkelti pdf į $destination. Pakeiskite šios direktorijos prieigos teises, kad serveris galėtų įrašyti.',
  'LBL_SALES_STAGE' => 'Pasiūlymo etapas:',
  'LBL_SEARCH_FORM_TITLE' => 'Pasiūlymo paieška',
  'LBL_SHIP_TO' => 'Gavėjas',
  'LBL_SHIPPING_ACCOUNT_NAME' => 'Klientas gavėjas:',
  'LBL_SHIPPING_ACCOUNT' => 'Klientas:',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Pristatymo miestas:',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pristatymo šalis:',
  'LBL_SHIPPING_ADDRESS_POSTAL_CODE' => 'Pristatymo pašto kodas:',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Pristatymo regionas:',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Pristatymo gatvė',
  'LBL_SHIPPING_ADDRESS' => 'Pristatymo adresas:',
  'LBL_SHIPPING_CONTACT_ID' => 'Gavėjo kontakto id:',
  'LBL_SHIPPING_CONTACT_NAME' => 'Kontaktas gavėjas:',
  'LBL_SHIPPING_CONTACT' => 'Kontaktas',
  'LBL_SHIPPING_PROVIDER' => 'Vežėjas:',
  'LBL_SHIPPING_USDOLLAR' => 'Pristatymas (Lt)',
  'LBL_DEAL_TOT' => 'viso nuolaida',
  'LBL_DEAL_TOT_USDOLLAR' => 'viso nuolaida (Lt)',
  'LBL_SHIPPING' => 'Pristatymas',
  'LBL_DISCOUNT_TOTAL' => 'Nuolaida',
  'LBL_NEW_SUB' => 'Tarpinė suma su nuolaida',
  'LBL_SHOW_LINE_NUMS' => 'Rodyti eilutės numerį:',
  'LBL_STATE' => 'Rajonas:',
  'LBL_SUBTOTAL_USDOLLAR' => 'Tarpinė suma (Lt)',
  'LBL_SUBTOTAL' => 'Tarpinė suma:',
  'LBL_SYSTEM_ID' => 'Sistemos ID',
  'LBL_TAX_USDOLLAR' => 'Mokesčiai (Lt)',
  'LBL_TAX' => 'Mokesčiai:',
  'LBL_TAXRATE' => 'Mokesčių tarifas:',
  'LBL_TOTAL_USDOLLAR' => 'Viso (Lt)',
  'LBL_TOTAL' => 'Viso:',
  'LBL_TYPE' => 'Tipas:',
  'LNK_NEW_QUOTE' => 'Sukurti pasiūlymą',
  'LNK_QUOTE_LIST' => 'Pasiūlymai',
  'MSG_DUPLICATE' => 'Jūs dubliuojate pasiūlymą. Pasirinktie jau esamą pasiūlymą arba išsaugokite dublikatą paspausdami ant Saugoti mygtuko.',
  'NTC_COPY_BILLING_ADDRESS' => 'Kopijuoti apmokėjimo adresą į pristatymo adresą',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Kopijuoti pristatymo adresą į apmokėjimo adresą',
  'NTC_COPY_BILLING_ADDRESS2' => 'Kopijuoti į pristatymo adresą',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Kopijuoti į apmokėjimo adresą',
  'NTC_REMOVE_COMMENT_CONFIRMATION' => 'Ar Jūs tikrai norite išimti šią pastabą iš pasiūlymo?',
  'NTC_REMOVE_PRODUCT_CONFIRMATION' => 'Ar Jūs tikrai norite išimti šią prekės eilutę iš pasiūlymo?',
  'NTC_REMOVE_GROUP_CONFIRMATION' => 'Ar Jūs tikrai norite išimti šią grupę iš pasiūlymo?',
  'NTC_REMOVE_QUOTE_CONFIRMATION' => 'Ar Jūs tikrai norite išimti šį kontaktą iš pasiūlymo?',
  'QUOTE_REMOVE_PROJECT_CONFIRM' => 'Ar Jūs tikrai norite išimti šį pasiūlymą iš projekto?',
  'LNK_QUOTE_REPORTS' => 'Pasiūlymų ataskaitos',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas',
  'PDF_FORMAT' => 'PDF formatas:',
  'LBL_ASSIGNED_TO_ID' => 'Atsakingas:',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektai',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentai',
  'LBL_QUOTE_INFORMATION' => 'Pasiūlymo informacija',
  'LBL_LIST_MY_QUOTES' => 'Mano pasiūlymai',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Šiuo metu telefono ir adreso laukai yra užpildyti. Jei norite jas užrašyti ant viršaus su pasirinkto kliento reikšmėmis, paspauskite "Gerai". Jei nenorite daryti jokių pakeitimų, spauskite "Atšaukti".',
);

