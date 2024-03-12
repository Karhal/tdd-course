<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Test
 */
class HelloWorldTest extends TestCase
{
   public function testTest(): void
   {
     $test = new App\Test();

     self::assertEquals($test->test(), "Hello, world!");
   }
}
