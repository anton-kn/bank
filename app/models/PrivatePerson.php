<?php
namespace models;
use models\User;

class PrivatePerson extends User{
    
    public $birthDate;
    
    /**
     * 
     * @var type
     * Серия паспорта
     */
    public $series;
    
    /**
     * 
     * @var type
     * Номер паспорта
     */
    public $number;
    
    /**
     * 
     * @var type
     * Дата выдачи
     */
    public $isDatePassport;
    
    public function createPrivatePerson($productId) {
        $sql = 'insert into public.user (firstname, surname, patronymic, type, birth_data, inn, series, number, is_date) values ($1, $2, $3, $4, $5, $6, $7, $8, $9) returning id';
        $result = pg_query_params(self::connectDB(), $sql, [
            $this->firstname,
            $this->surname,
            $this->patronymic,
            $this->typePerson,
            $this->birthDate,
            $this->inn,
            $this->series,
            $this->number,
            $this->isDatePassport,
        ]);
        $row = pg_fetch_row($result);
        $userId = $row[0];
        $this->userId = $userId;
        $product = new Product();
        $product->productId = $productId;
        $product->updateUserId($this->userId);
    }
}
