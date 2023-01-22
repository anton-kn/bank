<?php

namespace validation;
use message\Error;
use message\Message;

abstract class Validate {
    
    /**
     * Массив для валидации данных
     */
    public $validate = [];


    /**
     * Проверка на пустые строки
     */
    private function empty() {
        
    }
    
    /**
     * Проверка формата даты
     */
    private function date(){
        
    }
    
    /**
     * проверка чисел
     */
    private function number(){
        
    }
    

}
