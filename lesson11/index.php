<?php
/**
 * Namespaces, classes, autoloader
 *
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 19:43
 */

require './app/classes/Logs/Log.php';
require './app/classes/Main/Person.php';

//echo \App\Logs\Log::getValidPath('\asd\asd/asdas/asd.log/');

/*\App\Logs\Log::setRootLogDir('./logs');
$person = new App\Main\Person();
$person->setName('Mischa');
echo $person->getName();*/

//$log = new \App\Core\Log('test/logggs/loggg.log');
//$log->log('Test 1');

\App\Logs\Log::setRootLogDir('./logs'); //somewhere in config

$person = new \App\Main\Person();
$person->setName('Dima');
echo $person->getName();


$log = new \App\Logs\Log('test/logs\sad.log');
$log->log('Test');