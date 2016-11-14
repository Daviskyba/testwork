<?php
//namespace Animal;

/**
 * Class Animal
 * @package Animal
 */
class Animal
{
    /**
     * @var
     */
    protected $name;

    /**
     * Animal constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $name
     */
    public function getName() {
        return $this->name;
    }
}