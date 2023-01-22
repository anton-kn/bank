<?php

namespace models;
use DB\DataBase;

class Model {
    
    public static function connectDB(){
        $db = new DataBase();
        return $db->connect();
    }
}
