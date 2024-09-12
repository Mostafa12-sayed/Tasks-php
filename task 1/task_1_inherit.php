<?php 
abstract class Shape
{
  abstract public function area();
}
class Circal extends Shape {
  private $radius;
  public function __construct($radius) {
    $this->radius = $radius;
  }
  public function area() {
    return 3.14 * $this->radius * $this->radius;
  }
};
class Rectangle extends Shape {
  private $width;
  private $height;
  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }
  public function area (){
    return $this->width * $this->height;
  }


}

$obj = new Circal(5);
echo "Area of Circle is: ". $obj->area();


$obj2 = new Rectangle(5,6);
echo "Area of rtgtangle is: ". $obj2->area();
