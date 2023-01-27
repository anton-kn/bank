<?php

namespace controllers;
use models\User;
use models\Product;

class HomeController extends Controller{
    
    public function home(){
        $this->view->title = 'Главная страница';
        $this->view->partPage = 'home';
        return $this->view->templateMain();
    }
    
    /**
     * 
     * @param int $type
     * @return view person
     */
    public function person($value){
        $this->view->title = User::namePerson($value['type']);
        $this->view->partPage = 'person';
        $this->view->typePerson = $value['type'];
        return $this->view->templateMain();
    }
}
