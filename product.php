class Product
{
public $id;
public $title;
public $content;
public $price;

function __construct($id, $title, $content, $price){
$this->id = $id;
$this->title = $title;
$this->content = $content;
$this->price = $price;

function show(){
echo "$this->title<br>
$this->content<br>
$this->price<br>";
}
}

class Phone extends Product {
public $phonemodel;

function __construct($id, $title, $content, $price, $phonemodel){
parent::__construct($id, $title, $content, $price);
$this->phonemodel = $phonemodel;
}

function show() { 
echo "$this->title<br>
$this->content<br>
$this->phonemodel<br>
$this->price<br>";
}
}


}
$a = new Product(1, 'Продукт', 'Описание', 'Цена');
$a->show();
$b = new Phone(2, 'Продукт', 'Описание', 'Цена', 'Нокиа');
$b->show();


Задача 5

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();  //новый объект $a1
$a2 = new A();  //новый объект $a2
$a1->foo();   //вызов функции. Префиксный инкремент увеличивает 0 до 1, из-за static x сохраняет новое значение.
$a2->foo();   //вызов функции. Т.к. х теперь равен 1, привызове получаем 2.
$a1->foo();   //3
$a2->foo();   //4