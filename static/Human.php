<?php
namespace static;
class Human
{
    private static $id = 0;
        public function __construct(){
            self::$id++;
        }

        public static function getId(){
            return self::$id;
        }

}
$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
$human4 = new Human();
$human5 = new Human();
$human6 = new Human();
echo 'Людей уже ' . Human::getId();