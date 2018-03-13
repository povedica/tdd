<?php

class BankAccount
{
    private $balance = 0;

    /**
     * BankAccount constructor.
     */
    public function __construct()
    {
    }

    public function get_balance()
    {
        return $this->balance;
    }
}