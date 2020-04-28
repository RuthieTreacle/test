<?php

Namespace Zoo;

class Animal {
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function speak(){
        return 'The ' . $this->name . ' is talking';
    }
    public function walk(){
        return 'The ' . $this->name . ' is walking';
    }
    public function eat(){
       return 'The ' . $this->name . ' is eating';
    }
}



