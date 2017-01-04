<?php
namespace NifaHelpers\View\Helper;

use Cake\View\Helper;

class VersionNumberHelper extends Helper {


    public function shortTag() {
        exec('git describe --tags --abbrev=0', $version);
        return $version[0];
    }

    public function longTag() {
        exec('git describe --tags', $version);
        return $version[0];
    }

    public function shortCommitHash() {
        exec('git log --pretty="%h" -n1 HEAD', $hash);
        return $hash[0];
    }

    public function longCommitHash() {
        exec('git log --pretty="%H" -n1 HEAD', $hash);
        return $hash[0];
    }
}