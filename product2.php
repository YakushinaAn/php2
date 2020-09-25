<?php
abstract class Product {
private $id;
private $title;
private $content;
private $price;

function __construct($id, $title, $content, $price){
$this->id = $id;
$this->title = $title;
$this->content = $content;
$this->price = $price;
}
 
public function getId(){
     return $this->id;
}
      
public function getName(){
     return $this->title;
 }
 
public function getContent(){
     return $this->content;
}

abstract protected function getPrice();
}   
    


class Common extends Product {
private $income;

function __construct($id, $title, $content, $price, $income){
parent::__construct($id, $title, $content, $price);
$this->income = $income;  
}
     
function getPrice() {
    return $this->price 
}
    
function getIncome(Common $price) {
    income->$price*0,2
}    
    
function show() { 
echo "$this->title<br>
$this->content<br>
$this->phonemodel<br>
$this->price<br>
$this->income<br>";   
}
}



class Digital extends Common {


function __construct($id, $title, $content, $price,$income){
parent::__construct($id, $title, $content, $price);
}
     
function getPrice(Common $price) {
    price->$price\2
}
    
function getIncome(Digital $price) {
    income->$price*0,2
}        
}



class Weight extends Common {
private $weight;

function __construct($id, $title, $content, $price, $income, $weight){
parent::__construct($id, $title, $content, $price);
$this->weight = $weight;  
}
   
public function getWeight(){
     return $this->weight;
}
    
function getPrice(Common $price) {
    price=$price*$weight
}
    
function getIncome(Weight $price) {
    income=$price*0,2
}        
}



$a = new Common(1, 'Продукт', 'Описание', '10');
$a->show();
//$b = new Phone(2, 'Продукт', 'Описание', 'Цена', 'Нокиа');
//$b->show();


Задание 2

    
 trait MyTrait{
    public static function getInstance() {
            if ( empty(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}   
    
    
 class Singleton {
    private static $instance;  
    private function __construct() { 
    } 

    private function __clone() { 
    }

     private function __wakeup()  { 
     }

     use MyTrait;
          
    public function doAction() { }
 }

 Singleton::getInstance()->doAction(); 



?>
