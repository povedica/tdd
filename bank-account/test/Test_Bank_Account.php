<?php

use PHPUnit\Framework\TestCase;
require_once '../BankAccount.php';
class Test_Bank_Account extends TestCase
{
    public function test_initial_balance_is_zero()
    {
        $this->bank_account = new BankAccount();
        $this->assertEquals(0, $this->bank_account->get_balance());
    }
}
