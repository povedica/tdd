<?php

class FizzBuzz
{
    public function __construct()
    {
    }

    private function get_number_to_print($number)
    {
        if ($this->is_fizz_buzz($number)) {
            $number = 'FizzBuzz';
        } elseif ($this->is_fizz($number)) {
            $number = 'Fizz';
        } elseif ($this->is_buzz($number)) {
            $number = 'Buzz';
        }


        return $number;
    }

    private function is_fizz($number)
    {
        return $this->is_divisible_by($number, 3) || $this->contains($number, 3);
    }

    private function is_buzz($number)
    {
        return $this->is_divisible_by($number, 5) || $this->contains($number, 5);
    }

    private function contains($number, $contain)
    {
        return strpos($number, strval($contain)) !== false;
    }

    private function is_divisible_by($number, $divisible)
    {
        return $number % $divisible == 0;
    }

    private  function is_fizz_buzz($number)
    {
        return ($this->is_divisible_by($number, 3) && $this->is_divisible_by($number, 5)) ||
            ($this->contains($number, 3) && $this->contains($number, 5));
    }

    private function print_numbers($from, $to)
    {
        for ($i = $from; $i <= $to; $i++) {
            echo $this->get_number_to_print($i) . PHP_EOL;
        }
    }

    public function run()
    {
        $this->print_numbers(1, 100);
    }
}