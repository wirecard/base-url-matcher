<?php

use Codeception\Test\Unit;
use Wirecard\BaseUrlMatcher;

class BaseUrlMatcherTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testUrl1()
    {
        $actual = BaseUrlMatcher::getWppUrl('api.wirecard.com');
        $expected = 'wpp.wirecard.com';
        $this->assertEquals($expected, $actual);
    }
    public function testUrl2()
    {
        $actual = BaseUrlMatcher::getWppUrl('api-wdcee.wirecard.com');
        $expected = 'wpp-wdcee.wirecard.com';
        $this->assertEquals($expected, $actual);
    }
    public function testUrl3()
    {
        $actual = BaseUrlMatcher::getWppUrl('api-test.wirecard.com');
        $expected = 'wpp-test.wirecard.com';
        $this->assertEquals($expected, $actual);
    }
    public function testUrl4()
    {
        $actual = BaseUrlMatcher::getWppUrl('api-wdcee-test.wirecard.com');
        $expected = 'wpp-wdcee-test.wirecard.com';
        $this->assertEquals($expected, $actual);
    }
}
