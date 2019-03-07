<?php
require('class.php');
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
class MyGreeter_Client_Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new MyGreeter\Client();
    }
    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }
    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
    public function test_getGreeting_str(){
        $result = ['Good morning','Good afternoon','Good evening'];
        $time = (int)date('H');
        $res = $time >12 ? $result[0] : $time<=18 ? $result[1] : $result[2];
        $this->assertTrue(
            $this->greeter->getGreeting() == $res
        );
    }
}