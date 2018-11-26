<?php
/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 23:30
 */
/*
 * Interfaces do not have properties
 * */

interface AInterface
{
    public function getA(string $param): array;
}

class A implements AInterface
{
    public function getA(string $a): array
    {
        // TODO: Implement getA() method.
        return ['ok'];
    }

    public function any()
    {

    }
}


interface PersonInterface
{
    public function get():string;

    public function set(string $name);
}

interface CityInterface
{
    public function addPerson(Person $person);

    public function getPersons(): array;
}

class Person implements PersonInterface
{
    private $name;

    public function get(): string
    {
        return $this->name;
    }

    public function set(string $value)
    {
        $this->name = $value;
    }
}

class City implements CityInterface
{
    private $persons = [];

    public function addPerson(Person $person)
    {
        $this->persons[] = $person->get();

    }

    public function getPersons(): array
    {
        return $this->persons;
    }
}

$person = new Person();
$person->set('Misha');

$person2 = new Person();
$person2->set('Dima');

$city=new City();
$city->addPerson($person);
$city->addPerson($person2);

print_r($city->getPersons());