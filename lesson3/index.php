<?php

/**
 * Inheritance
 *
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 19:30
 */
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

class Programmist extends Worker
{
    private $skill;

    public function setSkill($value)
    {
        $this->skill = $value;
    }

    public function getSkill()
    {
        return $this->skill;
    }
}

$worker = new Worker();
$worker->setAge(21);
$worker->setName('Mischa');
echo 'Name - ' . $worker->getName() . ' and Age - ' . $worker->getAge();
echo '</br>';

$programmist = new Programmist();
$programmist->setAge(21);
$programmist->setName('Mischa');
$programmist->setSkill('Middle');
echo 'Name - ' . $programmist->getName() . ' and Age - ' . $programmist->getAge() . ' Skill - ' . $programmist->getSkill();
echo '</br>';