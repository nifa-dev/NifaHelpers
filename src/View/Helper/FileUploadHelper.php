<?php
/*
 * FormatBooleanHelper
 *
 * CakePHP Helper created to format boolean values in either Yes/No or True/False text.
 * By:  Jared Testa
 *
 */

namespace NifaHelpers\View\Helper;

use Cake\View\Helper;
use Cake\Utility\Inflector;

class FileUploadHelper extends Helper
{
    public $helpers = ['Form'];
    public function create($field, $label = null) {
        if(is_null($label)) $label = $field . " file";
        $html = '<div style="margin:10px;">';
        $html.= '<input type="file" name="'.$field.'"  id="'.$field.'-id" style="display: none;" onchange="document.getElementById(\''.$field.'-input\').value = this.files[0].name;">';
        $html.= '<div class="input-group">
                    <div class="input-group-btn">
                        <button type="button" onclick="document.getElementById(\'' . $field . '-id\').click();" class="btn btn-default">' . Inflector::humanize($label) . '</button>
                    </div>';
        $html.= '<input type="text" name="file" class="form-control "  id="'.$field.'-input" readonly="readonly" onclick="document.getElementById(\''.$field.'-id\').click();" />';
        $html.="</div></div>";

        return $html;


    }

}
