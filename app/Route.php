<?php

use controllers\HomeController;
use controllers\ProductController;
use controllers\UserController;

class Route {

    public static function start() {
//        var_dump($_SERVER['REQUEST_URI']);
        if ($_SERVER['REQUEST_URI'] == '/bank/') {
            $page = new HomeController();
            return $page->home();
        }
        
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'person') {
                $page = new HomeController();
                return $page->person($_GET);
            }
            
            if ($_GET['action'] == 'product') {
                $page = new ProductController();
                return $page->product($_GET['type'], $_GET['person']);
            }
            
            if ($_GET['action'] == 'kredit') {
                $page = new ProductController();
                return $page->actionKredit($_GET);
            }
            
            if ($_GET['action'] == 'deposit') {
                $page = new ProductController();
                return $page->actionDeposit($_GET);
            }
            
            if ($_GET['action'] == 'create-person') {
                $page = new UserController();
                return $page->actionСreatePerson($_GET);
            }
        }
        
    }

}
