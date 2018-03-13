<?php

class BankAccount
{
    private $balance = 0;

    public function __construct()
    {
    }

    public function get_balance()
    {
        return $this->balance;
    }
}