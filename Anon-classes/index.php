<?php


class MyClass {}

interface MyInterface {}

// ANON CLASS 
$object = new class(1) extends MyClass implements MyInterface {
    public function __construct(public int $x) {}
    
    public function foo(): string  {
            return 'foo';
        }
};

var_dump($object);
$object->foo();