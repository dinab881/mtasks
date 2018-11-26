<?php
/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 20:01
 */
namespace App\Main;

class Worker extends Person
{
    private $age;

    public function setAge($value)
    {
        $this->age = $value;
    }

    public function getAge()
    {
        return $this->age;
    }


}