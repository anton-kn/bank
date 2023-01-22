<?php

namespace models;

use models\Product;

class LegalPerson extends User {

    public $nameCompany;
    public $ogrn;
    public $kpp;

    public function createLegalPerson($productId) {
        $sql = "insert into public.user (firstname, surname, patronymic, type, name_company, ogrn, inn, kpp) values ($1, $2, $3, $4, $5, $6, $7, $8) returning id";
        
        $result = pg_query_params(self::connectDB(), $sql, [$this->firstname, $this->surname, $this->patronymic, $this->typePerson, $this->nameCompany, $this->ogrn, $this->inn, $this->kpp]);

//        echo '<pre>';
//        var_dump($result);
//        echo '</pre>';
//        exit();
        
        $row = pg_fetch_row($result);
        $userId = $row[0];
        $this->userId = $userId;
        
//        echo '<pre>';
//        var_dump($result);
//        echo '</pre>';
//        exit();

        $product = new Product();
        $product->productId = $productId;
        $product->updateUserId($this->userId);
    }

}
