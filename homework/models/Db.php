<?php

//json_decode==json->array
//json_encode==array->json

abstract Class DataBase{
    protected $content=[];
    protected $fileName='';

    protected function getFromFile(){
        $this->content=json_decode(file_get_contents($this->fileName),true);
        //$this->content=(array) $this->content;
    }

    protected function setToFile(){
        file_put_contents($this->fileName,json_encode($this->content));
    }
}