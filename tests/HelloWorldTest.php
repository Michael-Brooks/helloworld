<?php

use MichaelBrooks\HelloWorld\sayHelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testSayHelloWorld()
    {
        $this->assertEquals('Hello, World!', sayHelloWorld::helloWorld());
    }
}