<?php

/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 21:30
 */
class Task
{
    private $task;
    private $name;
    private $var;

    public function __construct(string $value1, string $value2, string $value3)
    {
        $this->task = $value1;
        $this->name = $value1;
        $this->var = $value3;
    }

    public function setTask(string $param): Task
    {
        $this->task = $param;
        return $this;
    }

    public function setName(string $param): Task
    {
        $this->name = $param;
        return $this;
    }

    public function setVar(string $param): Task
    {
        $this->var = $param;
    }


    public function getProps()
    {
        return $this->task . ', ' . $this->name . ', ' . $this->var . '</br>';
    }

}

$task = new Task('value1', 'value2', 'value3');
echo $task->getProps() . PHP_EOL;

/*
$task->setName('new value1');
$task->setTask('new value2');
$task->setVar('new value3');
echo $task->getProps().PHP_EOL;
*/

$task->setTask('new value 21')->setName('new value22')->setVar('new value23');
echo $task->getProps();