<?php

// function hello(){
//     echo 'hello';
// }
// $var = 'hello';
// hello();
// $var();

class Box {
    public  $width;
    private  $height;
    protected  $length;

    public function __construct($width, $height,$length){
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }
    public function __toString(){
        return 'box';
    }

    public function __get($name){
        var_dump($name);
    }

    public function __set($name, $value){
        var_dump($name, $value);
    }

    public function __call($name, $args){
        var_dump($name, $args);
    }
    public function __invoke(...$args){
        var_dump($args);
    }
    public function getHeight(){
        return $this->height;
    }
    public function setHeight(int $height){
        if($height < 0){
            $height = 0;
        }
        $this->height = $height;
    }


}

class MetalBox extends Box {
    use Material;
    public function getHeight2(){
        return $this->height;
    }
    public function getLength(){
        return $this->length;
    }
    public function setLength(int $length){
        if($length < 0){
            $length = 0;
        }
        $this->length = $length;
    }
}
class Ball {
    use Material;
}

trait Material {
    private $material; 
    public function setMaterial($material){
        $this->material = $material;
    }
    public function getMaterial(){
        return $this->material;
    }
}


// $num = 1;
// $num2 = $num;
// $num2 = 2;
// var_dump($num2);
// var_dump($num);


$box = new MetalBox(1,2,3);
//$box->length = 12;
$box->setHeight(-20);
$box->getLength();
echo $box;
$box(123,'asdas', true);
$box->hello;
$box->hello = 5;
$box->world(1,'asdas', 4);
// $box2 = clone $box;
// $box2->width = 40;
// var_dump($box2);
 var_dump($box);
 $box2 = new Box(1,2,3);
 var_dump($box2);
