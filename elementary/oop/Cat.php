<?php
namespace oop;

class Cat
{
    private $name;
    public $color;
    public $weight;

    public function sayHello()
    {
        echo 'Мяу!' . ', ' . $this->name . '<br>';
    }

    //CETTEР
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$cat1 = new Cat();

$cat1->setName('Sne');
$cat1->color = 'white';
$cat1->weight = 3.5;

$cat2 = new Cat();

$cat2->color = 'grey';
$cat2->setName('Sem');
$cat2->weight = 5.1;

$cat1->sayHello();
$cat2->sayHello();

echo $cat1->getName();


var_dump($cat1);
var_dump($cat2);