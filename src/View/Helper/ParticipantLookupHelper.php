<?php
/* src/View/Helper/ParticipantLookupHelper.php */
namespace NifaHelpers\View\Helper;

use Cake\View\Helper;
use Cake\Core\Configure;

class ParticipantLookupHelper extends Helper
{

    public $helpers = ['Form'];

    public function input($field, $contestId, $autofocus = false, $label = null)
    {
        $fieldId = str_replace(".", "-", $field);
        $auto = ($autofocus == true) ? "autofocus" : "";
        $html = $this->_View->element('NifaHelpers.participant_lookup_js', ['fieldId' => $fieldId, 'url' => 'participants/lookup', 'contestId' => $contestId]);
        $html.= $this->Form->input($field . "_lookup", ['type' => 'text', 'label' => $label . " Number", 'id' => $fieldId . "-lookup", 'autofocus' => $auto]);
        $html.= $this->Form->hidden($field . "_id", ['type' => 'text', 'label' => $label . " ID", 'id' => $fieldId]);
        $html.= $this->Form->input($field . "_name", ['label' => $label . " Name", 'id' => $fieldId . "-name", 'readonly' => 'readonly']);
        $html.= $this->Form->input($field . "_team", ['label' => $label . " Team", 'id' => $fieldId . "-team", 'readonly' => 'readonly']);
        return $html;
    }
}

?>
