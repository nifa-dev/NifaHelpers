<?php
namespace NifaHelpers\View\Helper;

use Cake\View\Helper;

class VersionNumberHelper extends Helper {


    public function shortTag() {
        exec('git describe --tags --abbrev=0', $version);
        return $version;
    }

    public function longTag() {
        exec('git describe --tags', $version);
        return $version;
    }

    public function shortCommitHash() {
        exec('git log --pretty="%h" -n1 HEAD', $hash);
        return $hash;
    }

    public funcgion longCommitHash() {
        exec('git log --pretty="%H" -n1 HEAD', $hash);
        return $hash;
    }
}