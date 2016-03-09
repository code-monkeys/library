<?php
namespace Company\Library;

/**
 * Amazeballs!
 */
class Greeter
{

    /**
     * @var string The name
     */
    protected $name = "world";

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct($name = null)
    {
        if ($name) {
            $this->name = $name;
        }
    }

    /**
     * Greet the humans
     *
     * @return string
     */
    public function greet()
    {
        return "Hello, {$this->name}!";
    }

}
