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
        $actual = BaseUrlMatcherService::getWppUrl('api.wirecard.com');
        $expected = 'wpp.wirecard.com';
        $this->assertEquals($expected, $actual);
    }

    public function testUrl2()
    {
        $actual = BaseUrlMatcherService::getWppUrl('api-wdcee.wirecard.com');
        $expected = 'wpp-wdcee.wirecard.com';
        $this->assertEquals($expected, $actual);
    }

    public function testUrl3()
    {
        $actual = BaseUrlMatcherService::getWppUrl('api-test.wirecard.com');
        $expected = 'wpp-test.wirecard.com';
        $this->assertEquals($expected, $actual);
    }

    public function testUrl4()
    {
        $actual = BaseUrlMatcherService::getWppUrl('api-wdcee-test.wirecard.com');
        $expected = 'wpp-wdcee-test.wirecard.com';
        $this->assertEquals($expected, $actual);
    }

    public function testBaseUrlNotStandard()
    {
        $actual = BaseUrlMatcherService::getWppUrl('test.wirecard.com');
        $expected = 'test.wirecard.com';
        $this->assertEquals($expected, $actual);
    }
}
