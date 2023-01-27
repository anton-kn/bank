<?php

namespace models;
use validation\ValidateKredit;

class Kredit extends Product {
  
     /**
     * Процентная ставка
     */
    private const INTEREST_RATE = 10;
    
    /**
     * График платежей аннуитетный
     */
    private const ANNUITY = 1;
    
    //private $validate = [];
    

    public function createKredit(){
        // валидация данных
//        $validateKredit = new ValidateKredit();
//        $validateKredit->validate = [
//          'date' => [$this->dateStart, $this->dateEnd],
//          'number' => [$this->type, $this->duration],
//          'many' => [$this->sumMany],
//        ];
        //$validateKredit->start();
                
        $sql = 'insert into product (date_start, date_end, type, duration, sum_many) values ($1, $2, $3, $4, $5) returning id';
        $result = pg_query_params(self::connectDB(), $sql, [$this->dateStart, $this->dateEnd, $this->type, $this->duration, $this->sumMany]);
        $row = pg_fetch_row($result);
        $productId = $row[0];
        $this->productId = $productId;
    }
    
    public static function getRate(){
        return self::INTEREST_RATE;
    }
    
    
    
}
