<?php


namespace validation;


class ValidateKredit extends Validate {
    
    /**
     * 
     * @param array $data
     */
    
    private function date() {
        $dateStart = date_format($this->validate['date'][0], '');
    }
    
    private function sumMany(){
        
    }
}
