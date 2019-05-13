<?php

namespace PrintDate\Test;
use PrintDate\Test\PrintDateTest as PrintDateTest;
use PHPUnit\Framework\TestCase;

/**
 * Class Test_GildedRoseItem
 */
class Test_PrintDate extends TestCase
{
    /** @var \PrintDate */
    private $item;

    public function setUp()
    {

    }

    public function test_true()
    {
        $print_date_mock = $this->getMockBuilder(PrintDateTest::class)
            ->setMethods(array('getCurrentDate'))
            ->getMock();

        $print_date_mock->expects($this->exactly(1))->method('getCurrentDate')->willReturn('2018-03-20 14:00:00');

        $this->assertEquals('2018-03-20 14:00:00',$print_date_mock->getCurrentDate());
    }
}