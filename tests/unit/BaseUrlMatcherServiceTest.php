<?php

namespace Wirecard\BaseUrlMatcher;

use Codeception\Test\Unit;

class BaseUrlMatcherServiceTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testUrl1()
    {
        $actual = BaseUrlMatcherService::getWppUrl('https://api.wirecard.com');
        $expected = 'https://wpp.wirecard.com';
        $this->assertEquals($expected, $actual);
    }

    public function testUrl2()
    {
        $actual = BaseUrlMatcherService::getWppUrl('https://api-wdcee.wirecard.com');
        $expected = 'https://wpp-wdcee.wirecard.com';
        $this->assertEquals($expected, $actual);
    }

    public function testUrl3()
    {
        $actual = BaseUrlMatcherService::getWppUrl('https://api-test.wirecard.com');
        $expected = 'https://wpp-test.wirecard.com';
        $this->assertEquals($expected, $actual);
    }

    public function testUrl4()
    {
        $actual = BaseUrlMatcherService::getWppUrl('https://api-wdcee-test.wirecard.com');
        $expected = 'https://wpp-wdcee-test.wirecard.com';
        $this->assertEquals($expected, $actual);
    }

    public function testBaseUrlNotStandard()
    {
        $actual = BaseUrlMatcherService::getWppUrl('https://test.wirecard.com');
        $expected = 'https://test.wirecard.com';
        $this->assertEquals($expected, $actual);
    }
}
