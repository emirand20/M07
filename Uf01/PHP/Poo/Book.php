//https://www.youtube.com/watch?v=Ben_VC2rm10
<?php
class Book{
    //Propiedades
    //Métodos
    public function __contruct(
        public $author,
        public $title,
        public $price,
        public $stock,
        public $id
    ){
        echo "soy una instancia de Book";
    }
}
//instancia de la clase Book
$book1 = new Book(
    'Javito',
    'Programando en php',
    300,98,
    100,
    1
);

var_dump($book1);