<?php

namespace FixerIO;

use FixerIO\FixerIO;

class FixerIOTest extends \PHPUnit_Framework_TestCase
{
    const BASE_URI = "http://api.fixer.io/";

    private $fixerio;

    protected function setUp()
    {
        $this->fixerio = new FixerIO();
    }

}