<?php

class Box {
    public static $count;
    public $material;
    public static function something(){
        //var_dump($this->material);
        var_dump(static::class);
    }
    public function hello(){
        var_dump(self::$count);
    }
}

class MetalBox extends Box {

}

Box::$count = 1;

Box::$count = 2;
var_dump(Box::$count);
var_dump(Box::$count);
MetalBox::something();
var_dump(Box::class);
$box = new Box();
$box->hello();
