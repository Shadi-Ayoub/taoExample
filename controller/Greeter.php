<?php

namespace oat\taoExample\controller;

class Greeter extends \tao_actions_CommonModule {
    /**
     * initialize the services
     */
    public function __construct() {
        parent::__construct();
    }
    
    public function helloFromTemplate() {
        $this->setData('author', 'Shadi Ayoub');
        $this->setView('Greeter/myName.tpl');
    }
}