<?php

namespace models;
use DB\DataBase;

/**
 * Продукт
 */
class Product extends Model{
    
    private const KREDIT = 1;
    
    /**
     * Вклад
     */
    private const DEPOSIT = 2;
    
    
    /**
     * 
     * @var type
     * Дата открытия продукта
     */
    public $dateStart;
    
    /**
     * 
     * @var type
     * Дата закрытия продукта
     */
    public $dateEnd;
    
    /**
     * 
     * @var type
     * срок в месяцах
     */
    public int $duration;
    
     /**
     * 
     * @var type
     * Сумма
     */
    public int $sumMany;
    
    
    /**
     * Тип продукта 
     */
    public int $type;
    
    public $productId;

//    public static function connectDB(){
//        $db = new DataBase();
//        return $db->connect();
//    }
    
    public static function nameProduct($type){
        if($type == self::KREDIT){
            return "Кредит";
        }
        
        if($type == self::DEPOSIT){
            return "Вклад";
        }
    }
    
    public static function getTypeProduct(){
        return [
            'kredit' => self::KREDIT, 
            'deposit' => self::DEPOSIT
                ];
    }
    
    public function updateUserId($userId){
        $sql = 'update product set user_id = $1 where id = $2';
        $result = pg_query_params($this->connectDB(), $sql, [$userId, $this->productId]);
    }
    
}
