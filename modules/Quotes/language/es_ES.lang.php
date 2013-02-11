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
  'LBL_MODULE_NAME' => 'Presupuestos',
  'LBL_MODULE_TITLE' => 'Presupuestos: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsquedas de Presupuestos',
  'LBL_LIST_FORM_TITLE' => 'Lista de Presupuestos',
  'LBL_QUOTE_NAME' => 'Asunto del Presupuesto:',
  'LBL_QUOTE' => 'Presupuesto:',
  'LBL_NAME' => 'Nombre del Presupuesto',
  'LBL_INVITEE' => 'Contactos',
  'LBL_LIST_TAXCLASS' => 'Tipos de Impuesto',
  'LBL_LIST_MANUFACTURER_PART_NUM' => 'Núm. Fab.',
  'LBL_LIST_PRICING_FORMULA' => 'Fórmula de Valoración',
  'LBL_LIST_PRICING_FACTOR' => 'Factor',
  'LBL_LIST_PRODUCT_NAME' => 'Producto',
  'LBL_LIST_QUANTITY' => 'Cantidad',
  'LBL_LIST_COST_PRICE' => 'Coste',
  'LBL_LIST_DISCOUNT_PRICE' => 'Precio Unitario',
  'LBL_LIST_DEAL_TOT'=> 'Descuento',
  'LBL_LIST_LIST_PRICE' => 'Lista',
  'LBL_LIST_QUOTE_NAME' => 'Asunto',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre de Cuenta',
  'LBL_LIST_AMOUNT' => 'Cantidad del Presupuesto',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Cantidad Total',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_LIST_GRAND_TOTAL' => 'Totales',
  'LBL_CALC_GRAND' => 'Mostrar Totales:',
  'LBL_SHOW_LINE_NUMS' => 'Mostrar Números&nbsp;de&nbsp;Línea:',
  'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED' => 'Válido Hasta',
  'LBL_LIST_DATE_QUOTE_CLOSED' => 'Cierre Real',
  'LBL_LIST_QUOTE_STAGE' => 'Etapa',
  'LBL_BILLING_ACCOUNT_NAME' => 'Nombre de cuenta de facturación:',
  'LBL_BILLING_CONTACT_ID' => 'Id de contacto de facturación:',
  'LBL_BILLING_CONTACT_NAME' => 'Nombre de contacto de facturación:',
  'LBL_BILLING_ADDRESS_STREET' => 'Dirección de Facturación',
  'LBL_BILLING_ADDRESS_CITY' => 'Ciudad de facturación',
  'LBL_BILLING_ADDRESS_STATE' => 'Estado/Provincia de facturación',
  'LBL_BILLING_ADDRESS_POSTAL_CODE' => 'Código postal de facturación',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'País de facturación',
  'LBL_SHIPPING_ACCOUNT_NAME' => 'Nombre de cuenta de envío:',
  'LBL_SHIPPING_CONTACT_ID' => 'Id de contacto de envío:',
  'LBL_SHIPPING_CONTACT_NAME' => 'Nombre de contacto de envío:',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Dirección de envío',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Ciudad de envío',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Estado/Provincia de envío',
  'LBL_SHIPPING_ADDRESS_POSTAL_CODE' => 'Código postal de envío',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de envío',
  'LBL_AMOUNT'=>'Cantidad del Presupuesto:',
  'LBL_AMOUNT_USDOLLAR'=>'Cantidad:',
  'LBL_TYPE' => 'Tipo',
  'LBL_CHECK_DATA' => 'Entrada de datos no válida: por favor, compruebe sus datos y asegúrese de que ha usado números válidos (0-9 or \'.\')',
  'LBL_NEXT_STEP' => 'Siguiente Paso',
  'LBL_LEAD_SOURCE' => 'Toma de contacto',
  'LBL_SALES_STAGE' => 'Etapa del Presupuesto',
  
  
  
  
  'LBL_ADD_ROW' => 'Agregar Fila',
  'LBL_REMOVE_ROW' => 'Quitar Fila',
  'LBL_QUOTE_NUM' => 'Número de Presupuesto:',
  'LBL_SUBTOTAL' => 'Subtotal:',
  'LBL_TAX' => 'Impuestos:',
  'LBL_SHIPPING' => 'Envío:',
  'LBL_TOTAL' => 'Total:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_LINE_ITEM_INFORMATION' => 'Línea de Detalle',
  'LBL_ADDRESS_INFORMATION' => 'Información sobre Dirección',
  'LBL_BILL_TO' => 'Cargar a',
  'LBL_SHIP_TO' => 'Enviar a',
  'LBL_BILLING_CONTACT' => 'Contacto:',
  'LBL_SHIPPING_CONTACT' => 'Contacto:',
  'LBL_BILLING_ACCOUNT' => 'Cuenta:',
  'LBL_SHIPPING_ACCOUNT' => 'Cuenta:',
  'LBL_BILLING_ADDRESS' => 'Dirección de Facturación:',
  'LBL_SHIPPING_ADDRESS' => 'Dirección de Envío:',
  'LBL_ANY_ADDRESS' => 'Alguna Dirección:',
  'LBL_CITY' => 'Ciudad:',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_POSTAL_CODE' => 'Código Postal:',
  'LBL_COUNTRY' => 'País:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información de Descripción',
  'LBL_CONTACT_QUOTE_FORM_TITLE' => 'Contacto-Presupuesto:',
  'LBL_CONTACT_NAME' => 'Nombre del Contacto:',
  'LBL_CONTACT_ROLE' => 'Rol del Contacto:',
  'LBL_SHIPPING_PROVIDER' => 'Proveedor de Transporte:',
  'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta:',
  'LBL_OPPORTUNITY_NAME' => 'Nombre de Oportunidad:',
  'LBL_DATE_QUOTE_EXPECTED_CLOSED' => 'Válido Hasta:',
  'LBL_DATE_QUOTE_CLOSED' => 'Fecha de Cierre Real:',
  'LBL_PURCHASE_ORDER_NUM' => 'Núm. Pedido de Compra:',
  'LBL_TAXRATE' => 'Tipo de Impuesto:',
  'LBL_QUOTE_STAGE' => 'Etapa del Presupuesto:',
  'LBL_BUNDLE_STAGE' => 'Etapa de Grupo:',
  'LBL_BUNDLE_NAME' => 'Nombre de Grupo:',
  'LBL_BUNDLE_DISCOUNT'=> 'Descuento:',
  'LBL_ADD_GROUP' => 'Agregar Grupo',
  'LBL_DELETE_GROUP' => 'Eliminar Grupo',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DUPLICATE' => 'Presupuesto Posiblemente Duplicado',
  'LBL_EMAIL_QUOTE_FOR' => 'Presupuesto para: ',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Aquí está el presupuesto solicitado (Puede cambiar el texto)',
  'LBL_EMAIL_ATTACHMENT' => 'Adjunto de Email: ',
  'MSG_DUPLICATE' => 'Está creando un presupuesto duplicado. Puede seleccionar un presupuesto de la siguiente lista o hacer clic en Guardar para duplicar el presupuesto.',
  'NTC_COPY_BILLING_ADDRESS' => 'Copiar dirección de facturación a dirección de envío',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Copiar dirección de envío a dirección de facturación',
  'NTC_COPY_BILLING_ADDRESS2' => 'Copiar a dirección de envío',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Copiar a dirección de facturación',
  'LBL_NEW_FORM_TITLE' => 'Crear Presupuesto',
  'LNK_NEW_QUOTE' => 'Crear Presupuesto',
  'LNK_QUOTE_LIST' => 'Ver Presupuestos',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el presupuesto.',
  'NTC_REMOVE_QUOTE_CONFIRMATION' => '¿Está seguro de que desea quitar a este contacto del presupuesto?',
  'NTC_REMOVE_PRODUCT_CONFIRMATION' => '¿Está seguro de que desea quitar esta línea de detalle del presupuesto?',
  'NTC_REMOVE_GROUP_CONFIRMATION' => '¿Está seguro de que desea quitar este grupo del presupuesto?',
  'LBL_PDF_QUOTE_NUMBER' => 'Número de Presupuesto:',
  'LBL_PDF_QUOTE_TITLE' => 'Presupuesto',
  'LBL_PDF_BILLING_ADDRESS' => 'Cobrar a',
  'LBL_PDF_SHIPPING_ADDRESS' => 'Enviar a',
  'LBL_PDF_SALES_PERSON' => 'Comercial:',
  'LBL_PDF_QUOTE_DATE' => 'Fecha:',
  'LBL_PDF_QUOTE_CLOSE' => 'Válido Hasta:',
  'LBL_PDF_GRAND_TOTAL' => 'Totales',
  'LBL_PDF_ITEM_QUANTITY' => 'Cantidad',
  'LBL_PDF_ITEM_PRODUCT' => 'Producto',
  'LBL_PDF_ITEM_LIST_PRICE' => 'Precio de Lista',
  'LBL_PDF_ITEM_UNIT_PRICE' => 'Precio Unitario',
  'LBL_PDF_ITEM_EXT_PRICE' => 'Precio Ext.',
  'LBL_PDF_ITEM_DISCOUNT' => 'Descuento',
  'LBL_PDF_ITEM_SELECT_DISCOUNT' => ' ',
  'LBL_PDF_PART_NUMBER' => 'Número de Pieza:',
  'LBL_PDF_CURRENCY' => 'Moneda:',
  'LBL_PDF_TAX_RATE' => 'Tipo de Impuestos:',
  'LBL_PDF_TAX' => 'Impuestos:',
  'LBL_PDF_SUBTOTAL' => 'Subtotal:',
  'LBL_PDF_TOTAL' => 'Total:',
  'LBL_PDF_DISCOUNT' => 'Descuento:',
  'LBL_PDF_NEW_SUB' => 'Subtotal Descontado:',
  'LBL_PDF_SHIPPING' => 'Envío:',
  'LBL_PDF_SHIPPING_COMPANY' => 'Proveedor de Transporte:',
  'QUOTE_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de que desea quitar a este presupuesto del proyecto?',
  'LBL_TOTAL_USDOLLAR' => 'Total (Dólares EEUU)',
  'LBL_QUOTE_TYPE' => 'Tipo de Presupuesto',
  'LBL_TAXABLE' => 'Sujeto a Impuestos',
  'LBL_NON_TAXABLE' => 'Libre de Impuestos',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'el archivo de diseño del presupuesto no existe: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'el diseño del presupuesto no ha sido registrado en modules/Quotes/Layouts.php',
  'LBL_RENAME_ERROR' => 'ERROR: no puede moverse el archivo PDF a $destination. Intente dar permisos de escritura al servidor web para ese directorio',
  'LBL_ORDER_STAGE' => 'Etapa del Pedido',
  'LBL_SUBTOTAL_USDOLLAR' => 'Subtotal (Dólares EEUU)',
  'LBL_SHIPPING_USDOLLAR' => 'Envío (Dólares EEUU)',
  'LBL_DEAL_TOT'=>'descuento total',
  'LBL_DEAL_TOT_USDOLLAR'=>'descuento total (Dólares EEUU)',
  'LBL_DISCOUNT_TOTAL' => 'Descuento:',
  'LBL_NEW_SUB' => 'Subtotal Descontado:',
  'LBL_TAX_USDOLLAR' => 'Impuestos (Dólares EEUU)',
  'LBL_CREATED_BY' => 'Creado Por',
  'LBL_MODIFIED_BY' => 'Modificado Por',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Presupuesto',
  'LBL_HISOTRY_SUBPANEL_TITLE' => 'Historial',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_PROPOSAL' => 'Presupuesto',
  'LBL_INVOICE' => 'Factura',
  'LBL_PDF_INVOICE_TITLE' => 'Factura',
  'LBL_PDF_INVOICE_NUMBER' => 'Número de Factura',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_ORIGINAL_PO_DATE' => 'Fecha Original Pedido:', 
  'LBL_PAYMENT_TERMS' => 'Forma de Pago:',
  'LBL_ADD_COMMENT' => 'Agregar Comentario',
  'LBL_REMOVE_COMMENT' => 'Quitar Comentario',
  'NTC_REMOVE_COMMENT_CONFIRMATION' => '¿Está seguro de que desea quitar este comentario del presupuesto?',
  'LBL_LIST_QUOTE_NUM' => 'Número',
  'LBL_SYSTEM_ID' => 'ID Sistema',
  'LBL_CONTRACTS'=>'Contratos',
  'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos',
  'LBL_ACCOUNT_ID'=>'Id Cuenta',
  'LNK_QUOTE_REPORTS' => 'Ver Informes de Presupuestos',
  'LBL_ASSIGNED_TO_NAME'=>'Asignado a:',
  'PDF_FORMAT'=>'Formato PDF:',
  'LBL_ASSIGNED_TO_ID'=>'Usuario Asignado:',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_QUOTE_INFORMATION' => 'Visión General',
);


?>