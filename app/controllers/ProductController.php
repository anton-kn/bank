<?php

namespace controllers;

use models\Product;
use models\Deposit;
use models\Kredit;
use validation\Validate;
use models\User;


class ProductController extends Controller {

    public function product(int $type, int $person) {
        $this->view->title = Product::nameProduct($type);
        $this->view->typeProduct = $type;
        $this->view->partPage = 'product';
        $this->view->typePerson = $person;
        return $this->view->templateMain();
    }
    
    public function actionKredit($value) {
        $kredit = new Kredit();
        $kredit->dateStart = $value['date_start'];
        $kredit->dateEnd = $value['date_end'];
        $kredit->duration = $value['duration'];
        $kredit->sumMany = $value['sum'];
        $kredit->type = $value['type'];
        
//        $values = [$kredit->dateStart, $kredit->dateEnd, $kredit->duration, $kredit->sumMany]
        
        $kredit->createKredit();
        
        $this->view->title = User::namePerson($value['person']);
        $this->view->partPage = 'create-person';
        $this->view->typePerson = $value['person'];
        $this->view->productId = $kredit->productId;
        return $this->view->templateMain();
    }
    
    public function actionDeposit($value) {
        $deposit = new Deposit();
        $deposit->dateStart = $value['date_start'];
        $deposit->dateEnd = $value['date_end'];
        $deposit->duration = $value['duration'];
        $deposit->sumMany = $value['sum'];
        $deposit->type = $value['type'];
        $deposit->periodCapitalization = $value['period_kapit'];
        
        //$values = [$kredit->dateStart, $kredit->dateEnd, $kredit->duration, $kredit->sumMany]
        
        $deposit->createDeposit();
        $this->view->title = User::namePerson($value['person']);
        $this->view->partPage = 'create-person';
        $this->view->typePerson = $value['person'];
        $this->view->productId = $deposit->productId;
        return $this->view->templateMain();
    }

}
