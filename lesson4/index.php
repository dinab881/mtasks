<?php
/**
 * Namespaces, classes, autoloader
 *
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 19:43
 */
/*
require 'app/Main/Person.php';
require 'app/Main/Worker.php';
require 'app/Main/Developer.php';*/
require 'vendor/autoload.php';

$worker = new App\Main\Worker();
$worker->setAge(21);
$worker->setName('Mischa');
echo 'Name - ' . $worker->getName() . ' and Age - ' . $worker->getAge();
echo '</br>';

$developer = new App\Main\Developer();
$developer->setAge(21);
$developer->setName('Mischa');
$developer->setSkill('Middle');
echo 'Name - ' . $developer->getName() . ' and Age - ' . $developer->getAge() . ' Skill - ' . $developer->getSkill();
echo '</br>';

$test = new \App\Other\Test();
echo $test->getTest();