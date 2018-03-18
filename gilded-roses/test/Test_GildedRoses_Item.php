<?php

use PHPUnit\Framework\TestCase;

require_once '../GildedRoses_Item.php';

/**
 * Class Test_GildedRoseItem
 */
class Test_GildedRoses_Item extends TestCase
{
    /** @var GildedRoses_Item */
    private $item;

    public function setUp()
    {
        $this->item = new GildedRoses_Item(10,10);
    }

    public function test_decrease_one_day_sellin_is_ok()
    {
        $this->item->decrease_sellin();
        $this->assertEquals(9, $this->item->get_sellin());

    }

    public function test_decrease_one_unit_quantity_is_ok()
    {
        $this->item->decrease_quantity();
        $this->assertEquals(9, $this->item->get_quantity());

    }
}
