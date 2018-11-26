<?php
/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 20:01
 */
namespace App\Main;

class Developer extends Worker
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