<?php
/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 19:45
 */
namespace App\Main;

use App\Logs\Log;

class Person
{
    protected $name;

    public function setName($value)
    {
        $array = [1, 2, 3];
        $this->name = $value;
        $log = Log::setPathByClass(__CLASS__); //App\Main\Person
        $log->log('Log class 1' . $value . ' ' . json_encode($array));
    }

    public function getName()
    {
        $log = Log::setPathByMethod(__METHOD__);//App\Main\Person::getName
        $log->log('Log method 1' . $this->name);
        return $this->name;
    }

    public function getClass()
    {
        return __CLASS__;
    }

}