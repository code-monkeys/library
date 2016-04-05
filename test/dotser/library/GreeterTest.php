<?php
namespace dotser\library;


class GreeterTest extends \PHPUnit_Framework_TestCase
{

    protected $name   = "Test";
    protected $object = null;

    public function setup()
    {
        $this->object = new Greeter($this->name);
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf("dotser\library\Greeter", $this->object);
    }

    public function testGreet()
    {
        $expected = "Hello, {$this->name}!";
        $returned = $this->object->greet();
        $this->assertEquals($expected, $returned);
    }

    public function testGreetWithoutCustomName()
    {
        $this->object = new Greeter();
        $expected = "Hello, world!";
        $returned = $this->object->greet();
        $this->assertEquals($expected, $returned);
    }

}
