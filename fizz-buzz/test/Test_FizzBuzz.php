<?php

use PHPUnit\Framework\TestCase;

/**
 * Class Test_FizzBuzz
 */
class Test_FizzBuzz extends TestCase
{
    /**
     * @var FizzBuzz
     */
    private $fizzbuzz;

    public function setUp():void
    {
        $this->fizzbuzz = new FizzBuzz();
    }

    public function test_number_is_fizz()
    {
        $this->assertTrue($this->fizzbuzz->is_fizz(99));
    }

    public function test_number_is_not_fizz()
    {
        $this->assertNotEquals('Fizz', $this->fizzbuzz->get_number_to_print(5));
    }

    public function test_number_is_buzz()
    {
        $this->assertTrue($this->fizzbuzz->is_buzz(5));
    }

    public function test_number_is_not_buzz()
    {
        $this->assertNotEquals('Buzz', $this->fizzbuzz->get_number_to_print(3));
    }

    public function test_number_is_fizzbuzz()
    {
        $this->assertTrue($this->fizzbuzz->is_fizz_buzz(30));
    }

    public function test_number_is_fizz_if_it_has_a_3()
    {
        $this->assertTrue($this->fizzbuzz->is_fizz(32));
    }

    public function test_number_is_buzz_if_it_has_a_5()
    {
        $this->assertTrue($this->fizzbuzz->is_buzz(52));
    }

    public function test_number_is_buzz_and_not_fizzbuzz_and_fizz()
    {
        $this->assertTrue($this->fizzbuzz->is_buzz(52));
    }

    public function test_number_is_fizzbuzz_if_has_a_3_and_5()
    {
        $this->assertTrue($this->fizzbuzz->is_fizz_buzz(53));
    }

    public function test_number_is_fizzbuzz_if_has_a_5_and_3()
    {
        $this->assertTrue($this->fizzbuzz->is_fizz_buzz(35));
    }

    public function test_number_is_not_fizzbuzz_if_has_a_5_but_not_3()
    {
        $this->assertFalse($this->fizzbuzz->is_fizz_buzz(54));
    }

    /**
     * @param $n
     * @param $expected
     * @dataProvider providerTestCases
     */
    public function test_number_return_fizz_buzz_or_fizzbuzz_string_if_matched($n, $expected)
    {
        $this->assertEquals($expected, $this->fizzbuzz->get_number_to_print($n));
    }

    /**
     * Provide set of data to test cases
     * @return array
     */
    public function providerTestCases()
    {
        return array(
            array(1, 1),
            array(89, 89),
            array(6, 'Fizz'),
            array(9, 'Fizz'),
            array(33, 'Fizz'),
            array(10, 'Buzz'),
            array(20, 'Buzz'),
            array(55, 'Buzz'),
            array(15, 'FizzBuzz'),
            array(30, 'FizzBuzz'),
            array(90, 'FizzBuzz'),
            array(31, 'Fizz'),
            array(38, 'Fizz'),
            array(58, 'Buzz'),
            array(59, 'Buzz'),
            array(53, 'FizzBuzz'),
        );
    }
}
