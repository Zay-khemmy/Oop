<?php
interface Shapes
{
    public function area();
}
    
    class Rectangle implements Shapes
    {
        public $length;
        public $breath;
        public function area($length = null, $breath= null)
        {
            $this->length = $length;
            $this->breath = $breath;
            echo $this->length * $this->breath ."</br>";
        }
    }

    class Circle implements Shapes
    {
        public $radius;
        public function area($radius = null)
        {
            $this->radius = $radius;
            echo (pi()) * $this->radius * $this->radius ;
           
        }
    }

$rec = new Rectangle();
$rec->area(4, 4);

$circle = new Circle();
$circle->area(5);
?>