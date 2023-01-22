<?php


namespace models;

/**
 * Description of Deposit
 *
 * @author anton
 */
class Deposit extends Product {
    
     /**
     * Капитализаци в конце срока
     */
    private const END_TIME = 1;
    
     /**
     * Процентная ставка
     */
    private const INTEREST_RATE = 8;
    
    /**
     * 
     * @return type
     * Капитализаци ежемесячно
     */
    private const MONTHLY = 2;
    
    public $periodCapitalization;
    
    private int $resultId;
    
    public static function getTypeСapitalization(){
        return [
            'endTime' => self::END_TIME,
            'monthly' => self::MONTHLY
        ];
    }
    
    public function createDeposit(){
        $sql = "insert into public.product (date_start, date_end, type, duration, sum_many, period_capitalization) values ($1, $2, $3, $4, $5, $6) returning id";
        $result = pg_query_params(self::connectDB(), $sql, [$this->dateStart, $this->dateEnd, $this->type, $this->duration, $this->sumMany, $this->periodCapitalization]);
        $row = pg_fetch_row($result);
        $productId = $row[0];
        $this->productId = $productId; 
    }
    
    public static function getRate(){
        return self::INTEREST_RATE;
    }
  
}
