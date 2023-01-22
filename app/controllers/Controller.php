<?php

namespace controllers;

use views\View;


class Controller {
    
    public function __construct() {
        $this->view = new View();
    }
}
