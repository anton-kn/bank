<?php

namespace DB;

class DataBase {
   
    public function connect() {
        global $db;
        return $db;
    }
    
}
