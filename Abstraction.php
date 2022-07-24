<?php
abstract class  Fridge{
    protected $serial;

}

class HomeFridge extends Fridge{

}
   
class ManufactureFridge extends Fridge{
    
}

$myFridge=new HomeFridge();
$ManufactureFridge=new ManufactureFridge();
$fridge=new Fridge();
