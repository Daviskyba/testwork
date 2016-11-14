<?php

require 'Animal.php';
//namespace Cat;
//use Animal\Animal;

/**
 * Class Cat
 */
class Cat extends Animal
{
    /**
     * @var
     */
    public $name;

    /**
     * Cat constructor.
     * @param $name
     */
    public function __construct($name)
    {
        parent::__construct($name);
    }

    /**
     * @return string
     */
    public function meow() {
		return 'Cat ' . $this->name . ' is saying meow';
    }
}
