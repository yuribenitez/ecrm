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

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldFile extends SugarFieldBase {
    private function fillInOptions(&$vardef,&$displayParams) {
        if ( isset($vardef['allowEapm']) && $vardef['allowEapm'] == true ) {
            if ( empty($vardef['docType']) ) {
                $vardef['docType'] = 'doc_type';
            }
            if ( empty($vardef['docId']) ) {
                $vardef['docId'] = 'doc_id';
            }
            if ( empty($vardef['docUrl']) ) {
                $vardef['docUrl'] = 'doc_url';
            }
        } else {
            $vardef['allowEapm'] = false;
        }

        // Override the default module
        if ( isset($vardef['linkModuleOverride']) ) {
            $vardef['linkModule'] = $vardef['linkModuleOverride'];
        } else {
            $vardef['linkModule'] = '{$module}';
        }

        // This is needed because these aren't always filled out in the edit/detailview defs
        if ( !isset($vardef['fileId']) ) {
            if ( isset($displayParams['id']) ) {
                $vardef['fileId'] = $displayParams['id'];
            } else {
                $vardef['fileId'] = 'id';
            }
        }
    }


	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        $this->fillInOptions($vardef,$displayParams);
        return parent::getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
	function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        $this->fillInOptions($vardef,$displayParams);
        return parent::getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
	public function save(&$bean, $params, $field, $vardef, $prefix = ''){
        $fakeDisplayParams = array();
        $this->fillInOptions($vardef,$fakeDisplayParams);

		require_once('include/upload_file.php');
		$upload_file = new UploadFile($prefix . $field . '_file');

		//remove file
		if (isset($_REQUEST['remove_file_' . $field]) && $params['remove_file_' . $field] == 1)
		{
			$upload_file->unlink_file($bean->$field);
			$bean->$field="";
		}
		
		$move=false;
		if (isset($_FILES[$prefix . $field . '_file']) && $upload_file->confirm_upload())
		{
    		$bean->$field = $upload_file->get_stored_file_name();
    		$bean->file_mime_type = $upload_file->mime_type;
			$bean->file_ext = $upload_file->file_ext;
			$move=true;
		}

        if (isset($params['isDuplicate']) && $params['isDuplicate'] == true && $params['isDuplicate'] != 'false' ) {
            // It's a duplicate
            $old_id = $params['relate_id'];
        }

        if (empty($bean->id)) { 
            $bean->id = create_guid();
            $bean->new_with_id = true;
        }

		if ($move) {
            $upload_file->final_move($bean->id);
            $upload_file->upload_doc($bean, $bean->id, $params[$prefix . $vardef['docType']], $bean->$field, $upload_file->mime_type);
        } else if ( ! empty($old_id) ) {
            // It's a duplicate, I think

            if ( empty($params[$prefix . $vardef['docUrl'] ]) ) {
                $upload_file->duplicate_file($old_id, $bean->id, $bean->$field);
            } else {
                $docType = $vardef['docType'];
                $bean->$docType = $params[$prefix . $field . '_old_doctype'];
            }
		} else if ( !empty($params[$prefix . $field . '_remoteName']) ) {
            // We ain't moving, we might need to do some remote linking
            $displayParams = array();
            $this->fillInOptions($vardef,$displayParams);
            
            if ( isset($params[$prefix . $vardef['docId']])
                 && ! empty($params[$prefix . $vardef['docId']])
                 && isset($params[$prefix . $vardef['docType']]) 
                 && ! empty($params[$prefix . $vardef['docType']])
                ) {
                $bean->$field = $params[$prefix . $field . '_remoteName'];
                
                require_once('include/utils/file_utils.php');
                $extension = get_file_extension($bean->$field);
                if(!empty($extension))
                {
                	$bean->file_ext = $extension;
                	$bean->file_mime_type = get_mime_content_type_from_filename($bean->$field);
                }
            }
        }
        
        if ( $vardef['allowEapm'] == true && empty($bean->$field) ) {
            $GLOBALS['log']->info("The $field is empty, clearing out the lot");
            // Looks like we are emptying this out
            $clearFields = array('docId', 'docType', 'docUrl', 'docDirectUrl');
            foreach ( $clearFields as $clearMe ) {
                if ( ! isset($vardef[$clearMe]) ) {
                    continue;
                }
                $clearField = $vardef[$clearMe];
                $bean->$clearField = '';
            }
        }
	}
}
