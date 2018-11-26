<?php
/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 19:45
 */
namespace App\Main;

class Person
{
    protected $name;

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

}