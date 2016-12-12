<?php
namespace NifaHelpers\View\Helper;

use Cake\View\Helper;

class ArrayListHelper extends Helper {


    public function implode($glue = ",", $arrayOfObjects, $fieldToDisplay) {
        $string = "";
        $c = 0;
        foreach($arrayOfObjects as $object) {
            if($c > 0) $string = $string . ", ";
            $string  = $string . $object->{$fieldToDisplay};
            $c++;
        }

        return $string;
    }
}