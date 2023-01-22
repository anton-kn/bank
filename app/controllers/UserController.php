<?php

namespace controllers;

use models\User;
use models\PrivatePerson;
use models\LegalPerson;

class UserController extends Controller{

    public function actionСreatePerson($value) {
        if ($value['type'] == User::getTypePerson()['private']) {
            $private = new PrivatePerson();
            $private->firstname = $value['firstname'];
            $private->surname = $value['surname'];
            $private->patronymic = $value['patronymic'];
            $private->typePerson = $value['type'];
            $private->birthDate = $value['birth_date'];
            $private->inn = $value['inn'];
            $private->series = $value['series'];
            $private->number = $value['number'];
            $private->isDatePassport = $value['is_date_passport'];
            $private->createPrivatePerson($value['product_id']);
            
            $this->view->title = 'Главная страница';
            $this->view->partPage = 'home';
            return $this->view->templateMain();
        }
        if ($value['type'] == User::getTypePerson()['legal']) {
            $legal = new LegalPerson();
            $legal->firstname = $value['firstname'];
            $legal->surname = $value['surname'];
            $legal->patronymic = $value['patronymic'];
            $legal->typePerson = $value['type'];
            $legal->nameCompany = $value['name_company'];
            $legal->ogrn = $value['ogrn'];
            $legal->inn = $value['inn'];
            $legal->kpp = $value['kpp'];
            $legal->createLegalPerson($value['product_id']);
            
            $this->view->title = 'Главная страница';
            $this->view->partPage = 'home';
            return $this->view->templateMain();
        }
        
    }

}
