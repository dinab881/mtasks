<?php

/**
 * Incapsulation
 *
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 18:52
 */
class City
{
    private $name;
    private $people = [];

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addPerson(Person $person)
    {
       $this->people[] = $person;
    }

    public function getPeople(){
        $result = '';
        /** @var Person $person */
        foreach ($this->people as $person){
            $result .= $person->getName(). ' ';
        }
        return $result;
    }
}

class Person
{
    private $name;

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


$person2 = new Person();
$person2->setName('Dima');

$person3 = new Person();
$person3->setName('Natasha');

$moscow = new City();
$moscow->setName('Moscow');
echo $moscow->getName(). PHP_EOL;

$moscow->addPerson($person1);
$moscow->addPerson($person2);
$moscow->addPerson($person3);

echo $moscow->getPeople();