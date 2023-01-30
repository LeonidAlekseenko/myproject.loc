<?php
namespace static;
class A
{
    private $role;
    private $name;
    public function __construct($name, $role){
        $this->name = $name;
        $this->role = $role;
    }

    //static method
public static function createAdmin(string $name) {
return new self('admin', $name);
}

}

$admin = A::createAdmin('Leonid');
var_dump($admin);