<?php
include_once 'Hello.php';

use PHPUnit\Framework\TestCase;

final class HelloTest extends TestCase
{
    protected $hello;
    
    protected function setUp() 
    {
        $this->hello = new Hello(); 
    }
    
    public function testEasy()
    {
        $this->assertTrue(true);
    }
    
    public function testSay()
    {
        $this->assertEquals("Hello world!", $this->hello->say());
    }
}