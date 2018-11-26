<?php
/**
 * Created by PhpStorm.
 * User: dina
 * Date: 26.11.18
 * Time: 23:56
 */
// If two classes have equal methods we can use traits
// you can't create

trait BaseModel
{
    public $sql;
    public function executeSql(){
        return  $this->sql;
    }

    abstract public function getTableName():string;

    public function selectAllFromDb(){
        $this->sql = 'SELECT * FROM '. $this->getTableName();
    }
}

class Article
{
   use BaseModel;
   public function getTableName()
   {
       return 'articles';
   }

}

class User
{
    use BaseModel;
    public function getTableName()
    {
        return 'users';
    }
}

$article = new Article();
$article->selectAllFromDb();
echo $article->executeSql();

$user = new User();
$user->selectAllFromDb();
echo $user->executeSql();