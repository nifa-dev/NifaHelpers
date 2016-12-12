<?php
/* src/View/Helper/IsTimeHelper.php */
namespace NifaHelpers\View\Helper;

use Cake\View\Helper;

class BooleanDisplayHelper extends Helper
{

    public function format($value, $showNo = false) {
        $falseResponse = ($showNo) ? "No" : "";
        return ($value) ? "Yes" : $falseResponse ;
    }

}

?>
