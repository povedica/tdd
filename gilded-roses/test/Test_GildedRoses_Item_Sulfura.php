<?php

use PHPUnit\Framework\TestCase;

require_once '../GildedRoses_Item.php';
require_once '../GildedRoses_Item_Sulfura.php';

/**
 * Class Test_GildedRoseItem
 */
class Test_GildedRoses_Item_Sulfura extends TestCase
{
    /** @var GildedRoses_Item_Sulfura */
    private $item;

    public function setUp()
    {
        $this->item = new GildedRoses_Item_Sulfura(10, 10);
    }

    public function test_sulfuras_item_never_decrease_sellin()
    {
        $this->item = new GildedRoses_Item_Sulfura(10);
        $this->assertEquals(10, $this->item->get_quality());
    }
}
