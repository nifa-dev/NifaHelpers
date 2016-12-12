<?php
namespace NifaHelpers\View\Helper;

use Cake\View\Helper;

class CustomTimeHelper extends Helper {


    public function secondsToDisplay($seconds) {
            return sprintf('%02d:%02d:%02d', ($seconds/3600),($seconds/60%60), $seconds%60);
    }
}