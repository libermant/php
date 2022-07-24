<?php
interface Machine{
    public function wash();
    public function dry();

}

Class WashingMachine implements Machine{
    public function wash(){
        return 'wash';
    }
    public function dry(){
        return 'dry';
    }
}

$machine=new WashingMachine();
