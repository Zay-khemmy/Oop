<?php
    class Person    
    {
        public $name;
        public $age;
        public function sleep($name, $age) {
            echo "My name is $name </br>";
            echo "i am $age years old";
        }
        public function eat() {
            echo "Its time to eat </br>";
        }
        public function walk() {
            echo "Walking is an exercise";
        }
    }
    
$zainab = new Person();
$zainab->sleep('kemi', 20);
$zainab->eat();
$zainab->walk();
?>