<?php

function greet_user(User $user):string {
    $user->setUserName('Not joe');
    return "Hello {$user->getUserName()}";
}

class User {
    public  $name;
    public  $password;
    function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }
    public function setUserName($name){
        return $this->name = $name;
    }
    public function getUserName(){
        return $this->name;
    }
}

$user = new User('joe', 'pass');
$message = greet_user($user);
var_dump($message);
?>