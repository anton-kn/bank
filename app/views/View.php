<?php
namespace views;

class View {
    
    public $typeProduct;
    
    /**
     * 
     * @var type
     */
    public $typePerson;
    
    /**
     * @var type
     */
    public $title;
    
    /**
     * @var type
     */
    public $partPage;
    
    /**
     * 
     * @var type
     * id продукта
     */
    public $productId;
    
    
    public function templateMain(){
        return require 'main/main.php';
    }
}
