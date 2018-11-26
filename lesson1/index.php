<?php

/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 18:31
 */
class Person
{
    public $name;

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

}

$person1 = new Person();
$person1->setName('Mischa');
echo $person1->name . PHP_EOL;
echo $person1->getName() . PHP_EOL;

$person2 = new Person();
$person2->setName('Dima');

$person3 = new Person();
$person3->setName('Natasha');
$person3->setName('Vasya');

echo $person1->getName() . ' ' . $person2->getName() . ' ' . $person3->getName();
