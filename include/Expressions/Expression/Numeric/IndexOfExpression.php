<?php

/* * *******************************************************************************
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
 * ****************************************************************************** */

require_once("include/Expressions/Expression/Numeric/NumericExpression.php");

/**
 * <b>indexOf(val, List l)</b><br>
 * Returns the position of <i>val</i> in <i>l</i><br/>
 * or -1 if <i>l</i> does not contain <i>val</i>.<br/>
 * ex: <i>indexOf("a", createList("a", "b", "c"))</i> = 0,<br/>
 * <i>indexOf("foo", createList("a", "b", "c"))</i> = -1
 */
class IndexOfExpression extends NumericExpression
{

    /**
     * Returns the entire enumeration bare.
     */
    function evaluate()
    {
        $params = $this->getParameters();
        $array = $params[1]->evaluate();
        $value = $params[0]->evaluate();

        for ($i = 0; $i < sizeOf($array); $i++)
        {
            if ($array[$i] == $value)
            {
                return $i;
            }
        }
        return -1;
    }

    /**
     * Returns the JS Equivalent of the evaluate function.
     */
    static function getJSEvaluate()
    {
        return <<<EOQ
			var params = this.getParameters();
			var arr  = params[1].evaluate();
			var val  = params[0].evaluate();

			for (var i=0; i < arr.length; i++) {
			if (arr[i] == val) {
				return i;
			} 
		}
		return -1;
EOQ;
    }

    /**
     * Returns the opreation name that this Expression should be
     * called by.
     */
    static function getOperationName()
    {
        return "indexOf";
    }

    /**
     * The first parameter is a number and the second is the list.
     */
    function getParameterTypes()
    {
        return array("generic", "enum");
    }

    /**
     * Returns the maximum number of parameters needed.
     */
    static function getParamCount()
    {
        return 2;
    }

    /**
     * Returns the String representation of this Expression.
     */
    function toString()
    {
        
    }

}

?>