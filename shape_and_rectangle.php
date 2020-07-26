<!DOCTYPE html>
<html>
    <body>
        <?php
            abstract class Shape {
                public $color = "red";
                public $filled = true;
                function __construct($color, $filled){
                    $this->color = $color;
                    $this->filled = $filled;
                }
                function setcolor($color){
                    $this->color = $color;
                }
                function setfilled($filled){
                    $this->filled = $filled;
                }
                function getcolor(){
                    return $this->color;
                }
                function getfilled(){
                    return $this->filled;
                }
                abstract public function getArea();
                abstract public function getPerimeter();

                function showInfo(){
                    echo "Color = $this->color <br> Filled = $this->filled <br>";
                }
            }

            class Circle extends Shape {
                public $radius = 1.0;
                /*function __construct($radius){
                    $this->radius = $radius;
                }*/
                function __construct($radius, $color="red", $filled=true){
                    $this->radius = $radius;
                    $this->color = $color;
                    $this->filled = $filled;
                }
                public function getArea(){
                    return pi()*pow($this->radius, 2);
                }
                public function getPerimeter(){
                    return 2*pi()*$this->radius;
                }
                
            }

            class Rectangle extends Shape {
                public $width = 1.0;
                public $length = 1.0;
                /*function __construct($width, $length){
                    $this->width = $width;
                    $this->length = $length;
                }*/
                function __construct($width, $length, $color="red", $filled=true){
                    $this->width = $width;
                    $this->length = $length;
                    $this->color = $color;
                    $this->filled = $filled;
                }
                function setWidth($width){
                    $this->width = $width;
                }
                function setLength($length){
                    $this->length = $length;
                }
                function getWidth(){
                    return $this->width;
                }
                function getLength(){
                    return $this->length;
                }
                public function getArea(){
                    return $this->width*$this->length;
                }
                public function getPerimeter(){
                    return pow($this->width, 2) + pow($this->length, 2);
                }
            }

            class Square extends Rectangle {
                public $side = 1.0;
                /*function __construct($side){
                    $this->side = $side;
                }*/
                function __construct($side, $color="red", $filled=true){
                    $this->side = $side;
                    $this->color = $color;
                    $this->filled = $filled;
                }
                function setWidth($side){
                    $this->width = $side;
                }
                function setLength($side){
                    $this->length = $side;
                }
                function getWidth(){
                    return $this->width;
                }
                function getLength(){
                    return $this->length;
                }
                function getArea(){
                    return pow($this->side, 2);
                }
                function getPerimeter(){
                    return $this->side*4;
                }
            }

            $circle = new Circle(3);
            echo "<h5>Circle Information<h5>";
            echo "Area = ".$circle->getArea();
            echo "<br>";
            echo "Perimeter = ".$circle->getPerimeter();
            echo "<br>";
            $circle->showInfo();
            $rect = new Rectangle(4,5);
            echo "<h5>Rectangle Information<h5>";
            echo "Area = ".$rect->getArea();
            echo "<br>";
            echo "Perimeter = ".$rect->getPerimeter();
            echo "<br>";
            $rect->showInfo();
            $square = new Square(5);
            echo "<h5>Square Information<h5>";
            echo "Area = ".$square->getArea();
            echo "<br>";
            echo "Perimeter = ".$square->getPerimeter();
            echo "<br>";
            $square->showInfo();
        ?>
    </body>
</html>