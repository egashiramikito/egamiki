<?php

class animal {
    public $cry = 'bowbow!';
    
    function bow() {
        echo $this -> cry . PHP_EOL; 
    }
}

class Cat extends Animal {
    public $cry = "ニャーニャー";
}

$animal_1 = new Cat();
$animal_1->bow();