<?php
include_once 'Db.php';


class Users extends DataBase{
    protected $fileName = 'User.json';
    
    public function __construct(){
        $this->getFromFile();
    } 
    public function setUsers($user){
        $this->getFromFile();
        $this->content=array_merge($this->content,$user);
        $this->setToFile();
        echo 'setUser';
        $this->getUsers();
    }
    public function getUsers(){
        $this->getFromFile();
        var_dump($this->content);
    }
}


