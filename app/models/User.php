<?php

namespace models;

class User extends Model{
    
    public $firstname;
    
    public $surname;
    
    public $patronymic;
    
    public $inn;
    
    public $typePerson;
    
    public $userId;
    
     /**
     * Физическое лицо
     */
    private const PRIVATE_PERSON = 1;
    
    /**
     * Юридическое лицо
     */
    private const LEGAL_PERSON = 2;
    
    
//    public static function connectDB(){
//        $db = new DataBase();
//        return $db->connect();
//    }
//    
    public static function namePerson($type){
        if($type == self::PRIVATE_PERSON){
            return "Физическое лицо";
        }
        
        if($type == self::LEGAL_PERSON){
            return "Юридическое лицо";
        }
    }
    
    /**
     * 
     * @return type const private | legal
     * @param type $
     * @
     */
    
    public static function getTypePerson(){
        return [
            'private' => self::PRIVATE_PERSON , 
            'legal' => self::LEGAL_PERSON
                ];
    }
    
    
    
}

