<?php

namespace NifaHelpers\Controller\Component;

use Cake\Controller\Component;
use Cake\Network\Request;
use Cake\Event\Event;

class EnvironmentComponent extends Component
{


    public function categorize($environment) {
        if(in_array(strtolower($environment), ['development', 'training', 'production'])) {
            return strtolower($environment);
        }

        return false;
    }


    public function beforeRender(Event $event) {
        $controller = $event->subject();
        $controller->set('_environment', $this->categorize(env('ENVIRONMENT_TYPE')));

    }


}