<?php
/* src/View/Helper/IsTimeHelper.php */
namespace NifaHelpers\View\Helper;

use Cake\View\Helper;

class BooleanDisplayHelper extends Helper
{

	//left for compatibility
    public function format($value, $showNo = false) {
        $falseResponse = ($showNo) ? "No" : "";
        return ($value) ? "Yes" : $falseResponse ;
    }

        /**
     * yesNo method
     *
     * @param boolean| $value boolean
     * @return string
     *
     */

    public function yesNo($value, $showNo = true) {
        return ($value) ? "Yes" : (($showNo) ? "No" : "");
    }

    /**
     * trueFalse method
     *
     * @param boolean| $value boolean
     * @return string
     *
     */

    public function trueFalse($value, $showFalse = true) {
        return ($value) ? "True" : (($showFalse) ? "False" : "");
    }

}

?>
