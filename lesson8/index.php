<?php

/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 23:49
 */
abstract class BaseModel
{
    public function selectAll(): string
    {
        return 'SELECT * FROM' . $this->getTableName();
    }

    public function db(string $sql)
    {
      //TODO: create db realization
    }

    abstract public function getTableName(): string;

}

class Article extends BaseModel
{
    public function getTableName(): string
    {
       return 'task';
    }
}

$task = new Article();
echo $task->selectAll();
//$task->db($task->selectAll());