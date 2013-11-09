<?php

require_once 'vendor/autoload.php';

class WebTest extends \PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl('http://tan-yuki.roon.io/');
    }

    public function testTitle()
    {
         $this->open('http://tan-yuki.roon.io/');
        $this->assertTitle('tan-yuki@blog');
    }
}

