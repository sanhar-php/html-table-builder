<?php

use Mockery as m;

abstract class TestCase extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        //
    }

    public function tearDown()
    {
        m::close();
    }
}
