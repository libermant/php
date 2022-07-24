<?php 
include_once 'Db.php';

class Orders extends DataBase{
    protected $fileName = 'orders.json';
    
    public function __construct(){
        $this->getFromFile();
    } 
    public function setOrders($order){
        $this->getFromFile();
        $this->content=array_merge($this->content,$order);
        $this->setToFile();
        echo 'setOrder';
        $this->getOrders();
    }
    public function getOrders(){
        $this->getFromFile();
        var_dump($this->content);
    }
}