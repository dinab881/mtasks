<?php

/**
 * Created by PhpStorm.
 * User: dina
 * Date: 27.11.18
 * Time: 9:31
 */
class UserException extends Exception
{

}

class UserLoginException extends UserException
{
 protected $message = 'Wrong login';
}

class UserPasswordException extends UserException
{
    protected $message = 'Wrong password';
}

class User
{
    public $sql;

    public function addUser(string $login, string $password)
    {
        if (strlen($login) > 12 || strlen($login) < 3) {
            throw new UserLoginException('Wrong login');
        }

        if (strlen($password) > 6 || strlen($password) < 4) {
            throw new UserPasswordException('Wrong password');
        }

        $this->sql = "INSERT INTO users VALUES ('', {login}, {password})";
        return true;
    }
}

try {
    $user = new User();
    $result = $user->addUser('Mischa', '1234787766');
    echo $user->sql;
    echo '</br>';
    echo $result;
    echo 'User was added';

} catch (UserException $e) {
    die($e->getMessage());
}

/*
if($result){
    echo 'user was added';
} else{
    echo 'fail';
}*/

